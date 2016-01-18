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
		$this->load->model('send_email_model');
		$this->load->model('admin_model');
	}
	
	public function dashboard()
	{
		//$data['bills']=$this->bill_model->recent_bills_all();
		$this->load->view('admin/home');
		//echo "<pre>";
		//print_r($data['bills']);
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
				//$user_name= $this->session->userdata('username');
				$password=$this->input->post('pas_wrd');
				
				//echo 'success area';
	 			$this->admin_model->change_password($password);
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
	public function myprofile()
	{
		
		$data["user_info"]=$this->admin_model->get_admin_info();
		$this->parser->parse('admin/view_admin_profile',$data);
		//print_r($data["invoice_no"]);

	}

	public function update_profile_info()
	{
		$address=$this->input->post('address');
		$address2=$this->input->post('address2');
		$city=$this->input->post('city');
		$state=$this->input->post('state');
		$zip=$this->input->post('zip');
		$country=$this->input->post('country');
		$phone=$this->input->post('phone');


		$data1=array(
		'address'=>$address,
		'address2'=>$address2,
		'city'=>$city,
		'state'=>$state,
		'post_code'=>$zip,
		'country'=>$country,
		'phone_no'=>$phone,
		);

		$this->admin_model->update_admin_info($data1);
		$this->myprofile();

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
		'bill_id'=>$bill_id,
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



	public function mail_confirm()
	{


		//Sending Email Email ................
<<<<<<< HEAD
           $bill_id=$this->input->post('invoice_number');
           $client_email=$this->input->post('user_email');
		   $f_name="";
		   $o_number="";
           print_r($bill_id);
		   $order_number=$this->send_email_model->get_order_number($bill_id);
            foreach($order_number as $o)
            {
               $o_number=$o['order_id'];

            }
			$get_name=$this->send_email_model->get_name($client_email);
            foreach($get_name as $name)
            {
               $f_name=$name['first_name'];

            }
            $services=$this->send_email_model->get_service_name($bill_id);
            $service="";
            foreach($services as $s)
            {
                $service .="<p><b>Service Name: </b>".$s['services']."</p>";
                $service .="<p><b>Details: </b>".$s['particulars']."</p>";
                $service .="<p><b>Reg Date: </b>".$s['reg_date']."</p>";
                $service .="<p><b>Next Due Date: </b>".$s['next_due']."</p>";
                $service .="<p><b>Billing Cycle: </b>".$s['bill_cycle']."</p>";
                $service .="<p><b>Total Amount: </b>".$s['total']."</p><br/>";
            }
=======
                       $bill_id=$this->input->post('invoice_number');
                       $client_email=$this->input->post('user_email');
			$f_name="";
$o_number="";
                        print_r($bill_id);
			$order_number=$this->send_email_model->get_order_number($bill_id);
                        foreach($order_number as $o)
                        {
                           $o_number=$o['order_id'];

                         }
			$get_name=$this->send_email_model->get_name($client_email);
                          foreach($get_name as $name)
                        {
                           $f_name=$name['first_name'];

                         }
                        $services=$this->send_email_model->get_service_name($bill_id);
                        $service="";
                        foreach($services as $s)
                        {
                            $service .="<p><b>Service Name: </b>".$s['services']."</p>";
                            $service .="<p><b>Details: </b>".$s['particulars']."</p>";
                            $service .="<p><b>Reg Date: </b>".$s['reg_date']."</p>";
                            $service .="<p><b>Next Due Date: </b>".$s['next_due']."</p>";
                            $service .="<p><b>Billing Cycle: </b>".$s['bill_cycle']."</p>";
                            $service .="<p><b>Total Amount: </b>".$s['total']."</p><br/>";
                        }
>>>>>>> efae72f3b6e98c77f34692f37310e6f6c4e9a62e
			$email_address = $client_email;	
			$messag = '<html><body>';
			$messag.= '<img src="http://thevoice24.com/invoice/assets/images/logo.png" alt="logo" />';
			$messag.= '<p>Dear '.$f_name.',</p>';
			$messag.= '<p>We have already processed your order. The details of the order are given below:</p>';
			$messag.= '<p><b>Order Number: </b>'.$o_number.'</p>';
			$messag.= $service;
			$messag.= '<p>You will receive an email from us shortly once your account hass been setup. Please "quote" your order number if you wish to contact us about this order</p>';
			$messag.= '<p><b>GNT</b></p>';
			$messag.= '<p> <a href="http://geeksntechnology.com/">GeeksnTechnology</a></p>';
			$messag.= '</body></html>';
			



				$this->load->helper('html');	
				$this->load->library('email');

               	$config = Array(
			    'protocol' => 'smtp',
			    'smtp_host' => 'ssl://orange.whitelabelwebserver.com',
			    'smtp_port' => 465,
			    'smtp_user' => 'aman@geeksntechnology.com',
			    'smtp_pass' => 'Q^F{ke_&xk(}',
			    'mailtype'  => 'html', 
			    'charset'   => 'iso-8859-1'
				);

				$this->load->library('email', $config);
				$this->email->set_newline("\r\n");
				$this->email->from('info@geeksntechnology.com','admin');
				$this->email->to($email_address);
				$base=$this->config->base_url();
				$this->email->subject('Order Confirmation');
				$this->email->message($messag);
                $this->email->set_mailtype('html');
				$this->email->send();
                                echo "<pre>";
				print_r($services);

//Sending Email Email End................

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

