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
	
	
	
	
	
	
	
	public function upload_ticket_file($name)
	 {
	  
		$url=base_url();
		$image_name = uniqid()."_".$name;
		$config = array();
		$config['upload_path'] ='./assets/ticket_file';
		$config['file_name'] = $image_name;
		$config['overwrite'] = TRUE;
		$config["allowed_types"] = 'gif|jpg|png|jpeg|pdf|docx';
		//$config["allowed_types"] = '*';
		$config["max_size"] = '5120';
		$config["max_width"] = '2048';
		$config["max_height"] = '1500';
		$this->load->library('upload', $config);
			  
	    $this->upload->data();
	    $this->upload->initialize($config);
		//echo $image_name;
			if(!$this->upload->do_upload()) 
			{               
				$this->data['error'] = $this->upload->display_errors();
				$error_msg=$this->upload->display_errors();
				////cho $error_msg;
				//$previous_img=$this->buyer_model->pre_store_img($reg_id);
				$this->session->set_flashdata('error',$error_msg);
			  redirect('client/show_error','refresh');
	          
			}
			else
			{
			 return $image_name;
			   // echo 'success';                          
			}  
	 }
		
	
	
	
	
	
	public function show_error(){
		$data['error']=$this->session->flashdata('error');
		$this->load->view('alert_view',$data);
		
	}
	
	
	

	
	public function dashboard()
	{
		//// Dashboard Upper Part////
		$user_name= $this->session->userdata('username');
		$get_email=$this->client_model->get_email_id($user_name);
		$dataa=$this->client_model->get_notification_number($get_email);
		$data['nseen_info'] = $dataa['nseen_info'];
		$data['rows']   =$dataa['rows'];
		
		
		
		
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


		$this->parser->parse('client/dashboard',$data);
	}

	public function new_ticket()
	{
		$user_name= $this->session->userdata('username');
		$get_email=$this->client_model->get_email_id($user_name);
		$dataa=$this->client_model->get_notification_number($get_email);
		$data['nseen_info'] = $dataa['nseen_info'];
		$data['rows']   =$dataa['rows'];
		
		if($this->session->userdata('ticket_id')){
		$data['ticket_id'] = $this->session->userdata('ticket_id');
		
		//;
		//print_r($data['ticket_id']);
		 
		}
		//$this->session->unset_userdata('ticket_id');
		$user_name= $this->session->userdata('username');
		$data['user_info']=$this->client_model->account_information($user_name);
		$data['dept']=$this->client_model->get_dept_name();
		$this->parser->parse('client/view_new_ticket',$data);
		
		
		//$this->load->view('client/view_new_ticket');
	}
	
	public function client_transaction()
	{
		$user_name= $this->session->userdata('username');
		$get_email=$this->client_model->get_email_id($user_name);
		
		$dataa=$this->client_model->get_notification_number($get_email);
		$data['nseen_info'] = $dataa['nseen_info'];
		$data['rows'] =$dataa['rows'];
		$user_email=$get_email;
		
		$data['info_transaction']=$this->client_model->get_user_transactions($user_email);
		$this->parser->parse('client/view_client_transaction', $data);
		
	}
	
	
	
	public function create_new_ticket(){
		
		
		$user_name= $this->session->userdata('username');
		$get_email=$this->client_model->get_email_id($user_name);
		
		
		
		$t_type=1;
		$user_email=$this->input->post('user_email');
		$subject=$this->input->post('subject');
		$dept_id=$this->input->post('dept_id');
		$priority=$this->input->post('priority');
		$message=$this->input->post('message');
		//$user_file=$this->input->post('user_file');
		$user_file=$_FILES['userfile']['name'];
		if(!empty($_FILES['userfile']['name']))
		{
			$user_file=$this->upload_ticket_file($user_file);
		}
		//echo $user_file;
		
		$status=0;	
		date_default_timezone_set('Asia/Dhaka');
		$date_time=date("Y-m-d H:i:s");		
		$data=array (
		'user_email'=>$user_email,
		'subject'=>$subject,
		'dept_id'=>$dept_id,
		'priority'=>$priority,
		'message'=>$message,
		'status'=>$status,
		'date_time'=>$date_time,
		'user_file'=>$user_file,
		't_type'=>$t_type
		);
		//echo $user_file;
		//echo $user_file;
		$this->client_model->insert_new_ticket($data);
		$insert_id = $this->db->insert_id();
		//echo $insert_id;
		
			
		$this->session->set_userdata('ticket_id',$insert_id);
		redirect('client/new_ticket','refresh');
		
		
	}
	
	public function show_success()
	{
		$data['error']=$this->session->flashdata('error');
		$this->load->view('alert_view',$data);		
	}
	
	
	

	public function user_ticket_details()
	{
		
		
		$ticket_id=$this->input->post('t_id');
		//echo $ticket_id;
		$user_name= $this->session->userdata('username');
		$user_email=$this->client_model->get_email_id($user_name);
		$data['ticket_answer']=$this->client_model->get_previous_ticket_answered($user_email,$ticket_id);
		$data['ticket_details']=$this->client_model->user_ticket_information($user_email,$ticket_id);
		$result=$this->load->view('client/client_ticket_details',$data);
		//echo $result;
		//$this->load->view('client/client_ticket_details.php');
		
	}
	
	
	
	public function click_view($ticket_id){
		$user_name= $this->session->userdata('username');
		$user_email=$this->client_model->get_email_id($user_name);
		$email_by_id= $this->client_model->get_email_byID($ticket_id);
		$row= $this->client_model->return_row_byID($ticket_id);
		
		if($row==0)
		{
			redirect('client/dashboard','refresh');
			
		}
		else if($user_email==$email_by_id)
		{
		$dataa=$this->client_model->get_notification_number($user_email);
		$data['nseen_info'] = $dataa['nseen_info'];
		$data['rows']   =$dataa['rows'];
		
		$data['user_name']   =$user_name;
		$data['ticket_info_client_single']=$this->client_model->ticket_info_client_single($ticket_id);
		$data['ticket_problem_info']=$this->client_model->user_ticket_information($ticket_id,$user_email);
		
		
		$data['ticket_id']=$ticket_id;
		$data['user_name']=$user_name;
		$data['user_email']=$user_email;
		
		
		$this->parser->parse('client/client_reply_view',$data);
			
		}
		else
		{
			redirect('client/dashboard','refresh');
			
		}
		
		
		
		
		//print_r($data['ticket_info_client_single']);
		
		//$data['user_email']=$data['ticket_info_client_single'][0]['user_email'];
		
		
	}
	
	public function click_notification($ticket_id,$ticket_answer_id){
		$user_name= $this->session->userdata('username');
		$get_email=$this->client_model->get_email_id($user_name);
		$dataa=$this->client_model->get_notification_number($get_email);
		$data['nseen_info'] = $dataa['nseen_info'];
		$data['rows']=$dataa['rows'];
		
		
		$user_email=$get_email;
		
		//update
		$data2=array (
		'seen_type'=>1
		
		);
		
		
		
		$this->client_model->change_ans_type($ticket_id,$ticket_answer_id,$data2);
				$user_name= $this->session->userdata('username');
		$get_email=$this->client_model->get_email_id($user_name);
		$dataa=$this->client_model->get_notification_number($get_email);
		$data['nseen_info'] = $dataa['nseen_info'];
		$data['rows']=$dataa['rows'];
		
		//select
		$data['ticket_info_client_single']=$this->client_model->ticket_info_client_single($ticket_id);
		$data['ticket_problem_info']=$this->client_model->user_ticket_information($ticket_id,$user_email);
		//print_r($data['ticket_info_client_single']);
		
			
		$data['user_email']=$get_email;
		$data['ticket_id']=$ticket_id;
		
		
		$this->parser->parse('client/client_reply_view',$data);
		
		
		
	}
	
	public function user_reply (){
		
		
		
	    $ticket_id=$this->input->post('ticket_id');
		$user_email=$this->input->post('user_email');
		$ans_message=$this->input->post('user_reply');
		
		date_default_timezone_set('Asia/Dhaka');
		$date_time_ans=date('Y-m-d H:i:s');
         $reply_type="0";		

		$data=array (
		'ticket_id'=>$ticket_id,
		'user_email'=>$user_email,
		'ans_message'=>$ans_message,
		'date_time_ans'=>$date_time_ans,
		'reply_type'=>$reply_type
		
		);
		$data2=array (
		'status'=>0
		
		);
		
		
		
		$this->client_model->insert_user_answer($data,$ticket_id,$data2);
		
		redirect('client/previous_ticket','refresh');
		
		
	}

	public function previous_ticket()
	{    $user_name= $this->session->userdata('username');
		 $user_email=$this->client_model->get_email_id($user_name);
		
		$dataa=$this->client_model->get_notification_number($user_email);
		$data['nseen_info'] = $dataa['nseen_info'];
		$data['rows']   =$dataa['rows'];
		
		
		
		
		
		$data['ticket_info']=$this->client_model->get_previous_ticket($user_email);
		
		$this->parser->parse('client/view_previous_ticket',$data);
		
		//print_r($data['ticket_info']);
		
		//$this->load->view('client/view_new_ticket');
	}
	public function view_bill_final()
	{   //notification num
		$user_name= $this->session->userdata('username');
		$get_email=$this->client_model->get_email_id($user_name);
		$data['note_num']=$this->client_model->get_notification_number($get_email);
		
		$bill_id =$this->input->post('bill_id');
		$data['invoice_id']=$bill_id;
		
		$user_name= $this->session->userdata('username');
	    $get_email=$this->client_model->get_email_id($user_name);

	    $data['pay_to']=$this->client_model->admin_info();
	    $data['invoice_to']=$this->client_model->client_info($user_name);
	    $data['bill_data']=$this->client_model->get_bill_data($bill_id,$get_email);
	    $data['payment_gateway']=$this->bill_model->get_balance($bill_id,$get_email);

	    if($data['payment_gateway'][0]['gateway']=='Paypal')
	    {
	        		$data['payment_method']='Paypal';
	    }
	    else if($data['payment_gateway'][0]['gateway']=='Stripe')
	    {
	        		$data['payment_method']='Stripe';
	    }
	    else{
				$data['payment_method']='Bkash';
	    }


	    if(!$data['bill_data'][0]['bill_status'])
	    {
	   		$data['paid_information']='Partially Paid'; 	
	    }
	    else
	    {
	   		$data['paid_information']='Fully Paid'; 	
	    }
	   // $data['bill_data_des']=$this->client_model->get_bill_data_des($bill_id);
      $data['bill_data_des']=$this->client_model->get_bill_data_des($bill_id,$get_email);
	    $this->parser->parse('client/view_bill_paid',$data);

	}
    public function view_bill_details()
    {
		 //notification num
		$user_name= $this->session->userdata('username');
		$get_email=$this->client_model->get_email_id($user_name);
		$dataa=$this->client_model->get_notification_number($get_email);
		$data['nseen_info'] = $dataa['nseen_info'];
		$data['rows']   =$dataa['rows'];
		
		
    	$bill_id = $this->uri->segment(3);
    	$data['invoice_id']=$bill_id;

	    $user_name= $this->session->userdata('username');
	    $get_email=$this->client_model->get_email_id($user_name);
	   

	    $data['pay_to']=$this->client_model->admin_info();
	    $data['invoice_to']=$this->client_model->client_info($user_name);
	    $data['bill_data']=$this->client_model->get_bill_data($bill_id,$get_email);
	    $data['bill_data_des']=$this->client_model->get_bill_data_des($bill_id,$get_email);
	    
    	//print_r($data['credit_amount']);
	    //print_r($data['bill_data_des']);
	    if(!$data['bill_data_des'])
	    {
	    	redirect('client/dashboard','refresh');
	    }
    	if($this->session->userdata('transaction_id'))
    	{
    		$data['txn_id']=$this->session->userdata('transaction_id');
    		
    		if($this->session->userdata('balance')>0.00)
    		{
    			$data['balance']=$this->session->userdata('balance');
    			$data["payment_status"]="Partially Paid";
    			$data['partial_true']=1;
	        	$data['bill_partial_amt']=$this->bill_model->get_partial_amt($bill_id);
    		}
    		else
    		{
    			$data['balance']=$this->session->userdata('balance');
    			$data['partial_true']=0;
    			$data["payment_status"]="Fully Paid";
    		}
    		$data['bill_data_txn']=$this->client_model->get_bill_data_txn_details($bill_id);

    		$data['transaction_date_time']=$this->session->userdata('transaction_date_time');
    		$data['gateway']=$this->session->userdata('gateway');
    		$data["credit"]=$this->session->userdata('credit');

    		$this->session->unset_userdata("transaction_id");
    		$this->session->unset_userdata("balance");
    		$this->session->unset_userdata("transaction_date_time");
    		$this->session->unset_userdata("bill_id");
    		$this->session->unset_userdata("gateway");
    		$this->session->unset_userdata("credit");
    		
    		$this->parser->parse('client/view_payment',$data);
    	}
    	else
    	{
	    	if($data['bill_data'][0]['bill_status'])
	        {
	        	$data['payment_gateway']=$this->bill_model->get_balance($bill_id,$get_email);
	        	if($data['payment_gateway'][0]['gateway']=='Paypal')
	        	{
	        		$data['payment_method']='Paypal';
	        	}
	        	$data['paid_information']='Fully Paid'; 

	        	//print_r($data);	
	        	//echo $data['payment_gateway'][0]['gateway'];
	        	$this->parser->parse('client/view_bill_paid',$data);
	        }
	        else if($data['bill_data'][0]['bill_allow_partial'])
	        {
	        	//echo "1";
	        	$data['partial_true']=1;
	        	 $data['bill_partial_amt']=$this->bill_model->get_partial_amt($bill_id);
	        	 $this->parser->parse('client/view_payment',$data);
	        }
	        else
	        {
	        	//echo "0";
	        	$data['partial_true']=0;
	        	$this->parser->parse('client/view_payment',$data);
	        }
	       }

      
    }
 	public function view_bill()
	{
		 //notification num
		$user_name= $this->session->userdata('username');
		$get_email=$this->client_model->get_email_id($user_name);
		$data['note_num']=$this->client_model->get_notification_number($get_email);
		

		$bill_id=$this->input->post('bill_id');
		$bill_amt=$this->input->post('bill_amt');
		$data['invoice_id']=$bill_id;
		$user_name= $this->session->userdata('username');
        $get_email=$this->client_model->get_email_id($user_name);
          
        $data['pay_to']=$this->client_model->admin_info();
        $data['invoice_to']=$this->client_model->client_info($user_name);

        $data['bill_data']=$this->client_model->get_bill_partial_data($bill_id,$get_email);
		$data['bill_data_des']=$this->client_model->get_bill_data_des($bill_id,$get_email);
		$data['credit_amount']=$this->client_model->get_credit_amount($bill_id,$get_email);
		if($bill_amt=="full")
		{

			$data["partial_true"]=0;
			$this->parser->parse('client/view_bill',$data);
		}
		else
		{
			 //$data['bill_data_partial']=$this->client_model->get_bill_data_partial($bill_id,$get_email);
			$data["partial_true"]=1;
			$this->parser->parse('client/view_bill',$data);	
		}
		
	}
	public function account_info()
	{
		$user_name= $this->session->userdata('username');
		$get_email=$this->client_model->get_email_id($user_name);
		$dataa=$this->client_model->get_notification_number($get_email);
		$data['nseen_info'] = $dataa['nseen_info'];
		$data['rows']   =$dataa['rows'];
		
		$user_name= $this->session->userdata('username');
		$data['user_info']=$this->client_model->account_information($user_name);
		$this->parser->parse('client/view_account',$data);
	}


	public function domain_list()
	{
		
		$user_name= $this->session->userdata('username');
		$get_email=$this->client_model->get_email_id($user_name);
		$dataa=$this->client_model->get_notification_number($get_email);
		$data['nseen_info'] = $dataa['nseen_info'];
		$data['rows']   =$dataa['rows'];

		$data['domain_list']=$this->client_model->domain_info($get_email);

		$this->load->view('client/view_domain',$data);
	}
	
	
	
	public function all_client_notitication()
	{
		$user_name= $this->session->userdata('username');
		$get_email=$this->client_model->get_email_id($user_name);
		$dataa=$this->client_model->get_notification_number($get_email);
		$data['nseen_info'] = $dataa['nseen_info'];
		$data['rows']   =$dataa['rows'];
		
		$data['all_new_answers']=$this->client_model->all_new_ans();
		$this->parser->parse('client/all_client_notification',$data);
	}



	public function my_invoice()
	{  //note start
	    $user_name= $this->session->userdata('username');
		$get_email=$this->client_model->get_email_id($user_name);
		$dataa=$this->client_model->get_notification_number($get_email);
		$data['nseen_info'] = $dataa['nseen_info'];
		$data['rows']=$dataa['rows'];
		//note end
		
		$user_name= $this->session->userdata('username');
		$get_email=$this->client_model->get_email_id($user_name);
		$data['services_list']=$this->client_model->my_invoice_info($get_email);

		$this->load->view('client/view_my_invoice',$data);
	}

	public function service_list()
	{
	
		$user_name= $this->session->userdata('username');
		$get_email=$this->client_model->get_email_id($user_name);
		$dataa=$this->client_model->get_notification_number($get_email);
		$data['nseen_info'] = $dataa['nseen_info'];
		$data['rows']   =$dataa['rows'];
		$data['services_list']=$this->client_model->service_info($get_email);
		$this->load->view('client/view_services',$data);
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
	
	public function charge()
	{ 
		try {
		require_once('vendor/autoload.php');
		//require_once('vendor/stripe/stripe-php/lib/Stripe.php');
		  \Stripe\Stripe::setApiKey("sk_test_EHJ1IfSgNOROsyRkAskJnJmF"); //Replace with your Secret Key
		      $item_name=$this->input->post("item_name");
			  $item_price=$this->input->post("item_price");
			  $charge = \Stripe\Charge::create(array(
			  "amount" => $item_price*100,
			  "currency" => "usd",
			  "card" => $_POST['stripeToken'],
			  "description" => $item_name
			));
			echo "<pre>";
			print_r($charge);
			echo "</pre>";
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

	
}

