<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client extends CI_Controller {

	function __construct() {
        parent::__construct();
        $uname=$this->session->userdata('username');
        if($uname==Null)
		{
			$this->session->unset_userdata('username');
			$this->session->set_userdata('error', 'You need to login first!!!');
			redirect('welcome','refresh');
		}
		$this->load->model('client_model');
		$this->load->model('bill_model');
    }
	
	public function dashboard()
	{
		//$data['bills']=$this->bill_model->recent_bills_all();
		$this->load->view('client/dashboard');
	}

	public function account_info()
	{
		$user_name= $this->session->userdata('username');
		$data['user_info']=$this->client_model->account_information($user_name);
		$this->parser->parse('client/view_account',$data);
	}
	
	public function change_password()
	{
		$this->load->view('client/view_change_password');
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

