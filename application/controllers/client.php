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
		//// Dashboard Upper Part////
		$user_name= $this->session->userdata('username');
		$get_email=$this->client_model->get_email_id($user_name);
		$data['total_service']=$this->client_model->total_service($get_email);
		$data['active_service']=$this->client_model->active_service($get_email);
		$data['inactive_service']=$this->client_model->inactive_service($get_email);

		$data['total_domain']=$this->client_model->total_domain($get_email);
		$data['active_domain']=$this->client_model->active_domain($get_email);
		$data['inactive_domain']=$this->client_model->inactive_domain($get_email);

		$data['total_hosting']=$this->client_model->total_hosting($get_email);
		$data['active_hosting']=$this->client_model->active_hosting($get_email);
		$data['inactive_hosting']=$this->client_model->inactive_hosting($get_email);


		$data['total_invoice']=$this->client_model->total_invoice($get_email);
		$data['active_invoice']=$this->client_model->active_invoice($get_email);
		$data['inactive_invoice']=$this->client_model->inactive_invoice($get_email);


		//// Dashboard Upper Part END////

		$data['from_info']=$this->client_model->admin_info();

		$data['to_info']=$this->client_model->client_info($user_name);

		$data['invoice_info']=$this->client_model->invoice_info($get_email);
		//echo $data['active'];
		//print_r( $data);
		$this->parser->parse('client/dashboard',$data);
	}

	public function account_info()
	{
		$user_name= $this->session->userdata('username');
		$data['user_info']=$this->client_model->account_information($user_name);
		$this->parser->parse('client/view_account',$data);
	}


	public function domain_list()
	{
		// $user_name= $this->session->userdata('username');
		// $data['user_info']=$this->client_model->account_information($user_name);
		$this->load->view('client/view_domain');
	}


	public function service_list()
	{
		// $user_name= $this->session->userdata('username');
		// $data['user_info']=$this->client_model->account_information($user_name);
		$this->load->view('client/view_domain');
	}
	
	public function change_password()
	{
		if($this->input->post('update'))
		{
			$this->form_validation->set_rules('pas_wrd', 'Password', 'required|matches[con_pas_wrd]|min_length[6]');
			$this->form_validation->set_rules('con_pas_wrd', 'Password Confirmation', 'required');
		

			if($this->form_validation->run() == false)
				{
					$data['message_error_password'] = validation_errors();
					//echo 'error';
					echo "<script>
				alert('Password Not Fill the Requirement');
				window.location.href='../client/dashboard';
				</script>";
					//$this->load->view('login',$data);
				}
			else
			{
				$user_name= $this->session->userdata('username');
				$password=$this->input->post('pas_wrd');
				
				echo 'success area';
	 			$this->client_model->change_password($password,$user_name);
	 			echo "<script>
				alert('Please Login with your new Password');
				window.location.href='../welcome';
				</script>";

				$this->load->view('welcome',$data);
				 // $this->load->library('../controllers/login');
				 // $this->whathever->index($data);
			}
		}
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

