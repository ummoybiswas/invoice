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
	
	
	
	
	
	
	
	public function admin_click_notification($ticket_id){
		
		$data2=array (
		't_type'=>0
		
		);
		$this->admin_model->update_to_old($data2,$ticket_id);
		
		$data1=$this->admin_model->t_info_new();
		$data['new_tickets']=$data1['new_tickets'];
		$data['roww']=$data1['roww'];

		
		$data['t_info_client_single']=$this->admin_model->t_info_client_single($ticket_id);
		$data['user_ticket_info']=$this->admin_model->user_ticket_info($ticket_id);
		
		
	$email=$this->admin_model->get_user_email($ticket_id);
		
	
		//print_r($data['user_email']);
		$data['ticket_id']=$ticket_id;
		$data['user_email']=$email;
		


		
		$this->parser->parse('admin/answer_ticket_view',$data);
	
		
	}
	
	
	
	
	
	
	
	
	
	
	public function show_previous_ticket(){
				$uname=$this->session->userdata('username');
		$data['get_pic']=$this->admin_model->get_profile_pic($uname);
		$data1=$this->admin_model->t_info_new();
		$data['new_tickets']=$data1['new_tickets'];
		$data['roww']=$data1['roww'];
		
		//print_r($data['new_tickets']);
		
		
		$data['ans_t_info']=$this->admin_model->answered_ticket_info();

		$this->parser->parse('admin/admin_previous_ticket',$data);
		
		
	}
	
	
	
	public function all_admin_notetfication(){
		$data1=$this->admin_model->t_info_new();
		$data['new_tickets']=$data1['new_tickets'];
		$data['roww']=$data1['roww'];
		
		
		$data['all_new_t']=$this->admin_model->all_new_t();
		$this->parser->parse('admin/all_admin_notification',$data);
		
	}
	
	public function click_previous_view($ticket_id){
        
	
	    $data1=$this->admin_model->t_info_new();
		$data['new_tickets']=$data1['new_tickets'];
		$data['roww']=$data1['roww'];
        

		
      
		
		$data['details_single_p_t']=$this->admin_model-> details_single_p_t($ticket_id);
		$data['user_ticket_info']=$this->admin_model-> user_ticket_info($ticket_id);
		
		$this->parser->parse('admin/previous_t_details',$data);
		
	}
	public function create_new_admin()
	{
				$uname=$this->session->userdata('username');
		$data['get_pic']=$this->admin_model->get_profile_pic($uname);
		$data1=$this->admin_model->t_info_new();
		$data['new_tickets']=$data1['new_tickets'];
		$data['roww']=$data1['roww'];
		
		
		$data['dept']=$this->admin_model->get_all_dept();
		
		$this->parser->parse('admin/view_new_admin',$data);
		
	}
	
	
	public function admin_transaction()
	{
				$uname=$this->session->userdata('username');
		$data['get_pic']=$this->admin_model->get_profile_pic($uname);
		$data1=$this->admin_model->t_info_new();
		$data['new_tickets']=$data1['new_tickets'];
		$data['roww']=$data1['roww'];
		
		$data['all_transaction']=$this->admin_model->get_transactions();
		
		$this->parser->parse('admin/view_admin_transaction', $data);
		
	}
	
	
	
	
	
	

	public function dashboard()
	{
		
		$uname=$this->session->userdata('username');
		$data['get_pic']=$this->admin_model->get_profile_pic($uname);
		$data1=$this->admin_model->t_info_new();
		$data['new_tickets']=$data1['new_tickets'];
		$data['roww']=$data1['roww'];
		
		
		//// Dashboard Upper Part////
		//$user_name= $this->session->userdata('username');
		//$get_email=$this->client_model->get_email_id($user_name);
		$data['total_service']=$this->admin_model->total_service();
		$data['active_service']=$this->admin_model->active_service();
		$data['inactive_service']=$this->admin_model->inactive_service();

		$data['total_domain']=$this->admin_model->total_domain();
		$data['active_domain']=$this->admin_model->active_domain();
		$data['inactive_domain']=$this->admin_model->inactive_domain();

		$data['total_hosting']=$this->admin_model->total_hosting();
		$data['active_hosting']=$this->admin_model->active_hosting();
		$data['inactive_hosting']=$this->admin_model->inactive_hosting();


		$data['total_invoice']=$this->admin_model->total_invoice();
		$data['active_invoice']=$this->admin_model->active_invoice();
		$data['inactive_invoice']=$this->admin_model->inactive_invoice();
		
		$data['t_info_client']=$this->admin_model->t_info_dashboard();
		

		$this->parser->parse('admin/home',$data);
		
		$this->db->select('*');
		$this->db->from('ticket');
		$result = $this->db->get();
		return $result->result_array();
		
		


		//// Dashboard Upper Part END////
		
		
	}
	
	
	public function answer_client($ticket_id)
	{
		$uname=$this->session->userdata('username');
		$data['get_pic']=$this->admin_model->get_profile_pic($uname);
		$data1=$this->admin_model->t_info_new();
		$data['new_tickets']=$data1['new_tickets'];
		$data['roww']=$data1['roww'];
		$row= $this->admin_model->get_row_byID($ticket_id);
		
		if($row==0)
		{
			redirect('admin/dashboard','refresh');
			
		}else
		
		{
		
		
		
		$data['t_info_client_single']=$this->admin_model->t_info_client_single($ticket_id);
		$data['user_ticket_info']=$this->admin_model->user_ticket_info($ticket_id);
		
		$email=$this->admin_model->get_user_email($ticket_id);
		
	
		//print_r($data['user_email']);
		$data['ticket_id']=$ticket_id;
		$data['user_email']=$email;

		
		
		


		
		$this->parser->parse('admin/answer_ticket_view',$data);
		
		}
		
		
		
	}
	
	public function submit_answer(){
		
		$uname=$this->session->userdata('username');
		$data['get_pic']=$this->admin_model->get_profile_pic($uname);
		$ticket_id=$this->input->post('ticket_id');
		$user_email=$this->input->post('user_email');
		
		
		$ans_message=$this->input->post('admin_reply');
		//echo $ticket_id;
		//echo br(1);
		//echo $user_email;
		//echo $ans_message;
		date_default_timezone_set('Asia/Dhaka');
		
		$date_time_ans=date("Y-m-d H:i");	
	    $reply_type=1;
		$seen_type=0;

		$data=array (
		'ticket_id'=>$ticket_id,
		'user_email'=>$user_email,
		'ans_message'=>$ans_message,
		'date_time_ans'=>$date_time_ans,
		'seen_type'=>$seen_type,
		'reply_type'=>$reply_type
		);
		
		$data2=array (
		'status'=>1
		
		);
		
		
		$this->admin_model->insert_admin_answer($data,$data2,$ticket_id);
		
		redirect('admin/dashboard','refresh');
		
		
		
		
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
				$uname=$this->session->userdata('username');
		$data['get_pic']=$this->admin_model->get_profile_pic($uname);
		$data["user_info"]=$this->admin_model->get_admin_info();
		$this->parser->parse('admin/view_admin_profile',$data);

	}

	public function clients_list()
	{
		$uname=$this->session->userdata('username');
		$data['get_pic']=$this->admin_model->get_profile_pic($uname);
		$data1=$this->admin_model->t_info_new();
		$data['new_tickets']=$data1['new_tickets'];
		$data['roww']=$data1['roww'];
		$data["client_info"]=$this->admin_model->get_client_info();
		$this->parser->parse('admin/view_client_list',$data);
	}
	public function create_new_client()
	{
				$uname=$this->session->userdata('username');
		$data['get_pic']=$this->admin_model->get_profile_pic($uname);
		$data1=$this->admin_model->t_info_new();
		$data['new_tickets']=$data1['new_tickets'];
		$data['roww']=$data1['roww'];
		
				
		$this->load->view('admin/view_new_client',$data);
	}
	public function insert_new_admin(){
		
		$first_name=$this->input->post('first_name');
		$last_name=$this->input->post('last_name');
		$company_name=$this->input->post('company_name');
		$admin_email=$this->input->post('email');

		$address=$this->input->post('address');
		$address2=$this->input->post('address2');
		$city=$this->input->post('city');
		$state=$this->input->post('state');
		$zip=$this->input->post('zip');
		$country=$this->input->post('country');
		$phone=$this->input->post('phone');
		$dept_name=$this->input->post('dept');
		$is_admin=$this->input->post('is_admin');

		$user_name=$this->input->post('uname');
		$password=$this->input->post('pass');
		
		$img_name=$this->input->post('userfile');
		if(empty($_FILES['userfile']['name'])){$img_path='profile-default.png';}
		else 
		{
			$img_path=$this->upload_profile_img($img_name);
		}
		
		$data1=array(
		'user_name'=>$user_name,
		'first_name'=>$first_name,
		'last_name'=>$last_name,
		'company_name'=>$company_name,
		'admin_email'=>$admin_email,	
		'address'=>$address,
		'address2'=>$address2,
		'city'=>$city,
		'state'=>$state,
		'post_code'=>$zip,
		'country'=>$country,
		'phone_no'=>$phone,
		'dept_name'=>$dept_name,
		'is_admin'=>$is_admin,
		'profile_picture'=>$img_path
		);

		$data2=array(
		'username'=>$user_name,
		'email'=>$admin_email,
		'password'=>$password,
		'type'=>'1'
		);
		
		$this->admin_model->insert_new_admin($data1,$data2);
		redirect('admin/create_new_admin','refresh');

		
	}
	
	
	
	public function upload_profile_img($name)
	{
		
		$url=base_url();
		$image_name = uniqid().'_image.png';
		$config = array();
		$config['upload_path'] ='assets/profile_picture';
        $config['file_name'] = $image_name;
        $config['overwrite'] = TRUE;
        $config["allowed_types"] = 'gif|jpg|png|jpeg';
        $config["max_size"] = '2048';
        $config["max_width"] = '1024';
        $config["max_height"] = '780';
        $this->load->library('upload', $config);
          
		$this->upload->data();
		$this->upload->initialize($config);

        if(!$this->upload->do_upload()) 
        {               
            $this->data['error'] = $this->upload->display_errors();
            $error_msg=$this->upload->display_errors();
            //$previous_img=$this->buyer_model->pre_store_img($reg_id);
            $this->session->set_flashdata('error',$error_msg);
          redirect('admin_buyer/show_error','refresh');
			return 'shop-default.png';
        }
        else
        {
        	return $image_name;
           // echo 'success';                          
        }  
	}
	
	
	
	
	public function change_profile_image()
	{
		$pro_pic_id = $this->uri->segment(3);
		//echo $store_id;
		$name=$this->input->post('name');
		$img_name=$this->input->post('userfile');
		
		$img_path=$this->update_store_img($img_name,$pro_pic_id);

		$this->admin_model->change_profile_img($name,$img_path);
		redirect('admin/dashboard','refresh');
	}
	
	
	public function update_store_img($name,$pro_pic_id)
	{
		$uname=$this->session->userdata('username');
		$url=base_url();
		$image_name = uniqid().'_image.png';
		$config = array();
		$config['upload_path'] ='assets/profile_picture';
        $config['file_name'] = $image_name;
        $config['overwrite'] = TRUE;
        $config["allowed_types"] = 'gif|jpg|png';
        $config["max_size"] = '2048';
        $config["max_width"] = '1024';
        $config["max_height"] = '780';
        $this->load->library('upload', $config);
          
		$this->upload->data();
		$this->upload->initialize($config);

        if(!$this->upload->do_upload()) 
        {               
            $this->data['error'] = $this->upload->display_errors();
            $error_msg=$this->upload->display_errors();
            $previous_img=$this->buyer_model->pre_store_img($uname,$pro_pic_id);
             $this->session->set_flashdata('error',$error_msg);
          	redirect('admin_buyer/show_error','refresh');
				return $previous_img;

        }
        else
        {
        	return $image_name;
           // echo 'success';                          
        }  
	}


	public function insert_new_client_data()
	{
		$first_name=$this->input->post('first_name');
		$last_name=$this->input->post('last_name');
		$company_name=$this->input->post('company_name');
		$email=$this->input->post('email');

		$address=$this->input->post('address');
		$address2=$this->input->post('address2');
		$city=$this->input->post('city');
		$state=$this->input->post('state');
		$zip=$this->input->post('zip');
		$country=$this->input->post('country');
		$phone=$this->input->post('phone');

		$user_name=$this->input->post('uname');
		$password=$this->input->post('pass');


		$data1=array(
		'user_name'=>$user_name,
		'first_name'=>$first_name,
		'last_name'=>$last_name,
		'company_name'=>$company_name,
		'email'=>$email,	
		'address'=>$address,
		'address2'=>$address2,
		'city'=>$city,
		'state'=>$state,
		'post_code'=>$zip,
		'country'=>$country,
		'phone_no'=>$phone
		);

		$data2=array(
		'username'=>$user_name,
		'email'=>$email,
		'password'=>$password,
		'type'=>'0'
		);

		$this->admin_model->insert_new_client_all_info($data1,$data2);




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
				$this->email->from('info@geeksntechnology.com','admin GNT_Invoice');
				$this->email->to($email);
				$base=$this->config->base_url();
				$this->email->subject('Login Information');



			$messag = '<html><body>';
			$messag.= '<img src="http://geeksntechnology.com/gnt_invoice/assets/images/logo.png" alt="logo" />';
			$messag.= '<p>Dear '.$first_name.',</p>';
			$messag.= '<p>Your Login Information are given Below: </p>';
			$messag.= '<table>';
			$messag.= '<tr>';
			$messag.= '<td style="background:#444;color:#fff;padding: 5px"><b>Email: </b></td>';
			$messag.= '<td style="background:#eee">'.$email.'</td>';
			$messag.= '</tr>';
			$messag.= '<tr>';
			$messag.= '<td style="background:#444;color:#fff;padding: 5px"><b>Username: </b></td>';
			$messag.= '<td style="background:#eee">'.$user_name.'</td>';
			$messag.= '</tr>';
			$messag.= '<tr>';
			$messag.= '<td style="background:#444;color:#fff;padding: 5px"><b>Password: </b></td>';
			$messag.= '<td style="background:#eee">'.$password.'</td>';
			$messag.= '</tr>';
			$messag.= '</table>';
			$messag.= "<a href='".$base."index.php/welcome/index>Click Here for Login</a>";	
			$messag.= '</body></html>';
			$messag.= 'Thank You';



				$this->email->message($messag);

                                

                $this->email->set_mailtype('html');
				$this->email->send();
				echo $this->email->print_debugger();


	}
	
	
	public function get_all_notification(){
		
		
		$data['all_new_ticket']=$this->admin_model->all_new_ticket();
		$this->parser->parse('admin/all_notification_view',$data);
	}
	
	
	
	
	// create department
	
	public function create_department()
	{
				$uname=$this->session->userdata('username');
		$data['get_pic']=$this->admin_model->get_profile_pic($uname);
		$data1=$this->admin_model->t_info_new();
		$data['new_tickets']=$data1['new_tickets'];
		$data['roww']=$data1['roww'];
		
		if($this->session->userdata('dept_id')){
		$data['dept_id'] = $this->session->userdata('dept_id');
		}
		
		$this->parser->parse('admin/create_dept_view',$data);
		
	}
	
	public function insert_department()
	{   	
		
		
		$dept_name=$this->input->post('dept_name');
		$dept_email=$this->input->post('dept_email');
		
		
		$data=array (
		'dept_name'=>$dept_name,
		'dept_email'=>$dept_email
		);
		
		$this->admin_model->insert_department_model($data);
		$insert_id = $this->db->insert_id();
		//echo $insert_id;
		
			
		$this->session->set_userdata('dept_id',$insert_id);
		redirect('admin/create_department','refresh');
		
		
	}

	public function check_email_is_unique()
	{
		
		$email=$this->input->post('email');
		$num_email=$this->admin_model->get_unique_email($email);
		//echo $num_email;
		if($num_email==1){echo 'Email is already exists';}
		//$this->load->view('admin/view_check_message',$data);

	}


	public function check_uname_is_unique()
	{
		
		$uname=$this->input->post('uname');
		$num_uname=$this->admin_model->get_unique_uname($uname);
		//echo $num_email;
		if($num_uname==1){echo 'Username is already exists';}
		//$this->load->view('admin/view_check_message',$data);

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
		redirect('admin/myprofile','refresh');

	}

	public function create_invoice()
	{
				$uname=$this->session->userdata('username');
		$data['get_pic']=$this->admin_model->get_profile_pic($uname);
		$data1=$this->admin_model->t_info_new();
		$data['new_tickets']=$data1['new_tickets'];
		$data['roww']=$data1['roww'];
		
		
				
		$data['get_pic']=$this->admin_model->get_profile_pic($uname);
		$this->load->model('invoice_gen_model');
		$data["invoice_no"]=$this->invoice_gen_model->recent_invoice();
		$this->parser->parse('admin/invoice',$data);

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
		'bill_to_paid'=>0.00,
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
		'order_to_paid'=>0.00,
		'order_allow_partial'=>$bill_allow_partial,
		'order_allow_discount'=>$bill_allow_discount,
		'note_recipient'=>$note_recipient,
		'term_condition'=>$term_condition,
		'order_status'=>1
		);
		//print_r($data);
		$this->bill_model->create_new_bill($data1,$data2);
		
		$data3=array(
		'bill_id'=>$bill_id,
		'user_email'=>$client_email,
		'debit'=>$bill_due_amount,
		'balance'=>$bill_due_amount
		);
        $this->db->insert('transaction', $data3);


	}



	public function mail_confirm()
	{


		//Sending Email Email ................

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

			$email_address = $client_email;	
			$messag = '<html><body>';
			$messag.= '<img src="http://www.geeksntechnology.com/gnt_invoice/assets/img/logo.png" alt="logo" />';

			$email_address = $client_email;	
			$messag = '<html><body>';
			$messag.= '<img src="http://www.geeksntechnology.com/gnt_invoice/assets/img/logo.png" alt="logo" />';

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
                               // echo "<pre>";
				//print_r($services);




//second mail

$bill_data=$this->send_email_model->get_bill_data($bill_id);
$due_bill="";
$due_date="";
$gen_date="";
    foreach($bill_data as $b)
                        {
                           $due_bill=$b['bill_due_amount'];
                           $due_date=$b['bill_due_date'];
                           $gen_date=$b['bill_date'];

                         }

            $messag = '<html><body>';
			$messag.= '<img src="http://thevoice24.com/invoice/assets/images/logo.png" alt="logo" />';
			$messag.= '<p>Dear '.$f_name.',</p>';
			$messag.= '<p>This is the billing notice that your invoice no.'.$bill_id.' which was generated on '.$gen_date.' is now overdue. Failure to make payment will result in account suspension.</p>';
			$messag.= '<table>';
			$messag.= '<tr>';
			$messag.= '<td style="background:#444;color:#fff;padding: 5px"><b>Email: </b></td>';
			$messag.= '<td style="background:#eee">'.$email_address.'</td>';
			$messag.= '</tr>';
			
			//$messag.= '<tr>';
			//$messag.= '<td style="background:#444;color:#fff;padding: 5px"><b>Your payment method is: </b></td>';
			//$messag.= '<td style="background:#eee">Bank or bKash(BD only)(apathotho)</td>';
			//$messag.= '</tr>';
			
			$messag.= '<tr>';
			$messag.= '<td style="background:#444;color:#fff;padding: 5px"><b>Invoice: </b></td>';
			$messag.= '<td style="background:#eee">'.$bill_id.'</td>';
			$messag.= '</tr>';
			
			$messag.= '<tr>';
			$messag.= '<td style="background:#444;color:#fff;padding: 5px"><b>Amount Due: </b></td>';
			$messag.= '<td style="background:#eee">$'.$due_bill.'</td>';
			$messag.= '</tr>';
			
			$messag.= '<tr>';
			$messag.= '<td style="background:#444;color:#fff;padding: 5px"><b>Due Date: </b></td>';
			$messag.= '<td style="background:#eee">'.$due_date.'</td>';
			$messag.= '</tr>';
			
			$messag.= '</table>';

			$messag.= '<p>You can login to your client area to view and pay the invoice at <a href=""></a>invoice link</p>';
			$messag.= '<p><b>GNT</b></p>';
			$messag.= '<p> <a href="http://geeksntechnology.com/">GeeksnTechnology</a></p>';
			$messag.= '</body></html>';




				$this->load->library('email', $config);
				$this->email->set_newline("\r\n");
				$this->email->from('info@geeksntechnology.com','admin');
				$this->email->to($email_address);
				$base=$this->config->base_url();
				$this->email->subject('Invoice Details');
				$this->email->message($messag);
                $this->email->set_mailtype('html');
				$this->email->send();
                              //  echo "<pre>";
				//print_r($services);


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
				$uname=$this->session->userdata('username');
		$data['get_pic']=$this->admin_model->get_profile_pic($uname);
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

