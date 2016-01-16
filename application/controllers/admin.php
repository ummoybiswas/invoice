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
		$this->load->model('bill_model');
		
		$bill_id=$this->input->post('invoice_number');
		$client_email=$this->input->post('user_email');
		$bill_reference=$this->input->post('invoice_reference');
		$bill_date=$this->input->post('invoice_date');
		$bill_due_date=$this->input->post('invoice_due_date');
		
		$date=date_create($bill_date);
		date_add($date,date_interval_create_from_date_string($bill_due_date." days"));
		$bill_due_date=date_format($date,"Y-m-d");
		
		$bill_total_amount=$this->input->post('total_amount');
		$bill_due_amount=$this->input->post('amount_to_paid');
		$bill_to_paid=$this->input->post('amount_to_paid');
		$bill_allow_partial=$this->input->post('allow_partial');
		$bill_allow_discount=$this->input->post('allow_discount');
		
		$note_recipient=$this->input->post('note_recipient');
		$term_condition=$this->input->post('term_condition');
				
		if($bill_allow_partial==1)
		{
			$partial_amount=$this->input->post('partial');
			$data1=array(
				'bill_id'=>$bill_id,
				'user_email'=>$client_email,
				'partial_amount'=>$partial_amount
			);
			$this->bill_model->create_new_partial($data1);
			//print_r($data1);
		}
		if($bill_allow_discount==1)
		{
			$discount_amount=$this->input->post('discount');
			$data2=array(
				'bill_id'=>$bill_id,
				'user_email'=>$client_email,
				'discount_amount'=>$discount_amount
			);
			$this->bill_model->create_new_discount($data2);
			//print_r($data2);
		}
	
		$data1=array(
		'bill_id'=>$bill_id,
		'user_email'=>$client_email,
		'bill_reference'=>$bill_reference,
		'bill_date'=>$bill_date,
		'bill_due_date'=>$bill_due_date,
		'bill_total_amount'=>$bill_total_amount,
		'bill_due_amount'=>$bill_due_amount,
		'bill_to_paid'=>$bill_to_paid,
		'bill_allow_partial'=>$bill_allow_partial,
		'bill_allow_discount'=>$bill_allow_discount,
		'note_recipient'=>$note_recipient,
		'term_condition'=>$term_condition,
		'bill_status'=>0
		);
		$data2=array(
		'order_id'=>$bill_id,
		'user_email'=>$client_email,
		'order_reference'=>$bill_reference,
		'order_date'=>$bill_date,
		'order_due_date'=>$bill_due_date,
		'order_total_amount'=>$bill_total_amount,
		'order_due_amount'=>$bill_due_amount,
		'order_to_paid'=>$bill_to_paid,
		'order_allow_partial'=>$bill_allow_partial,
		'order_allow_discount'=>$bill_allow_discount,
		'note_recipient'=>$note_recipient,
		'term_condition'=>$term_condition,
		'order_status'=>1
		);
		//print_r($data);
		$this->bill_model->create_new_bill($data1,$data2);
	}
	
	public function service_confirm()
	{
		$this->load->model('bill_service_model');
		
		$bill_id=$this->input->post('invoice_number');
		$user_email=$this->input->post('user_email');
		$particulars=$this->input->post('invoice_description');
		$additional_particulars=$this->input->post('invoice_additional');
		$invoice_quantity=$this->input->post('invoice_quantity');
		$invoice_price=$this->input->post('invoice_price');
		$services=$this->input->post('service_name');
		$bill_cycle=$this->input->post('bill_cycle');
		$reg_date=$this->input->post('invoice_date');
		if($bill_cycle=="" || $bill_cycle=="fixed")
		{
			$bill_cycle="fixed";
			$next_due="";
		}
		if($bill_cycle=="monthly")
		{
			$date=date_create($reg_date);
			date_add($date,date_interval_create_from_date_string("30 days"));
			$next_due=date_format($date,"Y-m-d");
		}
        if($bill_cycle=="yearly")
		{
			$date=date_create($reg_date);
			date_add($date,date_interval_create_from_date_string("365 days"));
			$next_due=date_format($date,"Y-m-d");
		}		
		
	
		$data=array(
		'bill_id'=>$bill_id,
		'user_email'=>$user_email,
		'particulars'=>$particulars,
		'additional_particulars'=>$additional_particulars,
		'services'=>$services,
		'bill_cycle'=>$bill_cycle,
		'reg_date'=>$reg_date,
		'next_due'=>$next_due,
		'quantity'=>$invoice_quantity,
		'price'=>$invoice_price,
		'total'=>$this->input->post('total'),
		'status'=>0
		);
		//print_r($data);
		
		$this->bill_service_model->create_new_service($data);

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

