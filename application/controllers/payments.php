<?php

class Payments extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('string');
	}

	public function do_purchase(){

		$item_name=$this->input->post("item_name");
		$item_price=$this->input->post("item_price");
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
	
		$this->paypal->pay(); //Proccess the payment

	}

	public function notify_payment(){

		$received_data = $this->input->post();
        
        $data=array(
        	"transaction_id"=>$received_data["txn_id"],
        	"payer_id"=>$received_data["payer_id"],
        	
        );
		//echo "<pre>".$received_data."</pre>";

	}

	public function cancel_payment(){
		
	}

		
}