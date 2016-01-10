<?php

class Payments extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('string');
	}

	public function do_purchase(){

		$config['business'] 			= 'geeksntechnology@gmail.com';
		$config['cpp_header_image'] 	= ''; //Image header url [750 pixels wide by 90 pixels high]
		$config['return'] 				= 'http://localhost/invoice/index.php/payments/notify_payment';
		$config['cancel_return'] 		= 'http://localhost/invoice/index.php/payments/cancel_payment';
		$config['notify_url'] 			= 'process_payment.php'; //IPN Post
		$config['production'] 			= TRUE; //Its false by default and will use sandbox
		$config["invoice"]				= random_string('numeric',8); //The invoice id
		
		$this->load->library('paypal',$config);
		
		#$this->paypal->add(<name>,<price>,<quantity>[Default 1],<code>[Optional]);
		
		$this->paypal->add('T-shirt',0.50,1); //First item
		//$this->paypal->add('Pants',40); 	  //Second item
		//$this->paypal->add('Blowse',10,10,'B-199-26'); //Third item with code
		
		$this->paypal->pay(); //Proccess the payment

	}

	public function notify_payment(){

		$received_data = print_r($this->input->post(),TRUE);

		echo "<pre>".$received_data."</pre>";

	}

	public function cancel_payment(){

	}

		
}