<?php

class Payments extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('string');
	}

	public function do_purchase(){

		$item_name=$this->input->post("item_name");
		$item_price=$this->input->post("item_price");
		$charge_name=$this->input->post("charge_name");
		$charge_price=$this->input->post("charge_price");
		$invoice=$this->input->post("in");
		$config['business'] 			= 'geeksntechnology@gmail.com';
		$config['cpp_header_image'] 	= ''; //Image header url [750 pixels wide by 90 pixels high]
		$config['return'] 				= base_url().'index.php/payments/notify_payment';
		$config['cancel_return'] 		= base_url().'index.php/payments/cancel_payment';
		$config['notify_url'] 			= 'process_payment.php'; //IPN Post
		$config['production'] 			= FALSE; //Its false by default and will use sandbox
		$config["invoice"]				= $invoice; //The invoice id
		
		$this->load->library('paypal',$config);
		
		#$this->paypal->add(<name>,<price>,<quantity>[Default 1],<code>[Optional]);
		$this->paypal->add($item_name,$item_price,1); //First item
		$this->paypal->add($charge_name,$charge_price,1);
		$this->paypal->pay(); //Proccess the payment

	}

	public function notify_payment(){
		
		$this->load->model('client_model');
		$this->load->model('bill_model');
		$received_data = $this->input->post();
        $user_name= $this->session->userdata('username');
		$get_email=$this->client_model->get_email_id($user_name);
		$get_balance=$this->bill_model->get_balance($received_data["invoice"],$get_email);
        $balance=floatval($get_balance[0]['balance'])-floatval($received_data["mc_gross_1"]);
       // echo $get_balance[0]['balance']."<br/>".$received_data["mc_gross_1"]."<br/>".$balance;
        $data=array(
        	"transaction_id"=>$received_data["txn_id"],
        	"gateway"=>"Paypal",
        	'bill_id'=>$received_data["invoice"],
        	"user_email"=>$get_email,
        	"credit"=>$received_data["mc_gross_1"],
        	"vat"=>$received_data['mc_gross_2'],
        	"balance"=>$balance,
        	"transaction_date_time"=>$received_data["payment_date"]
        	
        );
       $this->bill_model->insert_transaction($data);
        $partial_status=0;
        $bill_due_date=$this->bill_model->bill_due_date($received_data["invoice"]);
        if($balance>0)
        {
        	$date=date_create($bill_due_date[0]['bill_due_date']);
			date_add($date,date_interval_create_from_date_string("15 days"));
			$bill_date=date_format($date,"Y-m-d");
        	
           	$data=array(
        		"bill_due_date"=>$bill_date,
                "bill_allow_partial"=>0,
        		"bill_to_paid"=>$bill_due_date[0]["bill_to_paid"]+$received_data["mc_gross_1"],
        		'bill_due_amount'=>$balance,
        		"partial_status"=>1
        	);
        	$this->bill_model->update_bill($data,$received_data["invoice"]);

        }
        else
        {
        	$data=array(
        		"bill_to_paid"=>$bill_due_date[0]["bill_to_paid"]+$received_data["mc_gross_1"],
        		'bill_due_amount'=>$balance,
        		"bill_status"=>1
        	);
        	$this->bill_model->update_bill($data,$received_data["invoice"]);
        }
        
		$data=array(
        	"transaction_id"=>$received_data["txn_id"],
        	"gateway"=>"Paypal",
        	'bill_id'=>$received_data["invoice"],
        	"balance"=>$balance,
        	"credit"=>$received_data["mc_gross_1"],
        	"transaction_date_time"=>$received_data["payment_date"]
        	
        );
        $this->session->set_userdata($data);
        redirect('/client/view_bill_details/'.$received_data["invoice"]);

	}

	public function cancel_payment(){
		$received_data = $this->input->post();
		echo "<pre>";
		print_r($received_data);
		echo "</pre>";
	}

		
}