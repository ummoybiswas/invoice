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
		$config['cancel_return'] 		= base_url().'invoice/index.php/payments/cancel_payment';
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
        $data=array(
        	"transaction_id"=>$received_data["txn_id"],
        	"gateway"=>"paypal",
        	'invoice'=>$received_data["invoice"],
        	"user_email"=>$get_email,
        	"credit"=>$received_data["mc_gross_1"],
        	"vat"=>$received_data['mc_gross_2'];
        	"balance"=>$get_balance['balance']-$received_data["mc_gross_1"],
        	"transaction_date_time"=>$received_data["payment_date"]
        	
        );

        $this->bill_model->insert_transaction($data);

		echo "<pre>";
		print_r($get_balance);
		echo "</pre>";

	}

	public function cancel_payment(){
		
	}

		
}