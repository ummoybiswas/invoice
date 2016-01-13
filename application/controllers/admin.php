<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();
        $uname=$this->session->userdata('username');
        if($uname==Null)
		{
			$this->session->unset_userdata('username');
			$this->session->set_userdata('error', 'You need to login first!!!');
			redirect('welcome','refresh');
		}
	}
	
	public function dashboard()
	{
		//$data['bills']=$this->bill_model->recent_bills_all();
		$this->load->view('admin/home');
		//echo "<pre>";
		//print_r($data['bills']);
	}

	public function create_invoice()
	{
		$this->load->model('invoice_gen_model');
		$data["invoice_no"]=$this->invoice_gen_model->recent_invoice();
		$this->parser->parse('admin/invoice',$data);
		//print_r($data["invoice_no"]);

	}
    
	public function bill_confirm()
	{
		//$this->load->model('bill_model');
		$bill_id=$this->input->post('invoice_number');
		$client_email=$this->input->post('user_email');
		$bill_reference=$this->input->post('invoice_reference');
		$bill_date=$this->input->post('invoice_date');
		$bill_due_date=$this->input->post('invoice_due_date');
		
		$date=date_create($bill_date);
		date_add($date,date_interval_create_from_date_string($bill_due_date." days"));
		$bill_due_date=date_format($date,"d-m-Y");
		
		$bill_total_amount=$this->input->post('total_amount');
		$bill_due_amount=$this->input->post('amount_to_paid');
		$bill_to_paid=$this->input->post('amount_to_paid');
		$bill_allow_partial=$this->input->post('allow_partial');
		$bill_allow_discount=$this->input->post('allow_discount');
		
		if($bill_allow_partial==1)
		{
			$partial_amount=$this->input->post('partial');
		}
		if($bill_allow_discount==1)
		{
			$discount_amount=$this->input->post('discount');
		}
	
		$data=array(
		'bill_id'=>$bill_id,
		'client_email'=>$client_email,
		'bill_reference'=>$bill_reference,
		'bill_date'=>$bill_date,
		'bill_due_date'=>$bill_due_date,
		'bill_total_amount'=>$bill_total_amount,
		'bill_due_amount'=>$bill_due_amount,
		'bill_to_paid'=>$bill_to_paid,
		'bill_allow_partial'=>$bill_allow_partial,
		'bill_allow_discount'=>$bill_allow_discount,
		'bill_status'=>0
		);
		print_r($data);
		//$this->bill_model>create_new_bill($data);
	}
	
	public function service_confirm()
	{
		//$this->load->model('bill_service_model');
		
		$bill_id=$this->input->post('invoice_number');
		$user_email=$this->input->post('user_email');
		$particulars=$this->input->post('invoice_reference');
		$additional_particulars=$this->input->post('invoice_date');
		$services=$this->input->post('invoice_due_date');
		$bill_cycle=$this->input->post('invoice_due_date');
		
		date_default_timezone_set('Asia/Dacca');
		$date = date('Y/m/d h:i:s a', time()); //with time
		$currentdate = date("Y-m-d",strtotime($date));
		
		$date=date_create($currentdate);
		date_add($date,date_interval_create_from_date_string($bill_due_date." days"));
		$bill_due_date=date_format($date,"Y-m-d");
		
		$bill_total_amount=$this->input->post('total_amount');
		$bill_due_amount=$this->input->post('total');
		$bill_to_paid=$this->input->post('total');
		$bill_allow_partial=$this->input->post('allow_partial');
		$bill_allow_discount=$this->input->post('allow_discount');
		
		if($bill_allow_partial==1)
		{
			$partial_amount=$this->input->post('partial');
		}
		if($bill_allow_discount==1)
		{
			$discount_amount=$this->input->post('discount');
		}
	
		$data=array(
		'bill_id'=>$bil_id,
		'client_email'=>$client_email,
		'bill_reference'=>$bill_reference,
		'bill_date'=>$bill_date,
		'bill_due_date'=>$bill_due_date,
		'bill_total_amount'=>$bill_total_amount,
		'bill_due_amount'=>$bill_due_amount,
		'bill_to_paid'=>$bill_to_paid,
		'bill_allow_partial'=>$bill_allow_partial,
		'bill_allow_discount'=>$bill_allow_discount,
		'bill_status'=>0
		);
		print_r($data);
		
		//$this->invoice_gen_model->create_new_service($data);

	}

	public function view_bill()
	{
		//$data['bills']=$this->bill_model->view_bill($bil_id);
		$this->load->view('admin/view_bill');
		//echo "<pre>";
		//print_r($data['bills']);
	}
	public function charge()
	{ 
		try {
		require_once('vendor/autoload.php');
		//require_once('vendor/stripe/stripe-php/lib/Stripe.php');
		  \Stripe\Stripe::setApiKey("sk_live_TUg7TuDFTWUysfr32yiqL2Cv"); //Replace with your Secret Key
		 
			  $charge = \Stripe\Charge::create(array(
			  "amount" => 10000,
			  "currency" => "usd",
			  "card" => $_POST['stripeToken'],
			  "description" => "Charge for Facebook Login code."
			));
			print_r($charge);
			//send the file, this line will be reached if no error was thrown above
			echo "<h1>Your payment has been completed. We will send you the Facebook Login code in a minute.</h1>";
			//you can send the file to this email:
			echo $_POST['stripeEmail'];
			}
			//catch the errors in any way you like
			 
			catch(Stripe_CardError $e) {
				
			}
			 
			 
			catch (Stripe_InvalidRequestError $e) {
			// Invalid parameters were supplied to Stripe's API
			 
			} catch (Stripe_AuthenticationError $e) {
			// Authentication with Stripe's API failed
			// (maybe you changed API keys recently)
			 
			} catch (Stripe_ApiConnectionError $e) {
			// Network communication with Stripe failed
			} catch (Stripe_Error $e) {
			 
			// Display a very generic error to the user, and maybe send
			// yourself an email
			} catch (Exception $e) {
			 
			// Something else happened, completely unrelated to Stripe
}
	}
	public function paymentwithstripe()
	{
		$this->load->view('client/stripe');
	}
	
}

