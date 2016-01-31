<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forget extends CI_Controller {

	public function index()
	{
		$this->load->view('forget');
		
	}
	
	
	public function check_email()
	{
		if($this->input->post('recovery_submit'))
		{
			$email=$this->input->post('reset_email');
			//echo $email;
			$this->load->model('forget_password_model');
			$info=$this->forget_password_model->exist_email($email);

			if(count($info)!=0)
			{
				//echo "here";

				$this->load->helper('html');	
				$this->load->library('email');
				
				 $this->load->library('session');
                
			                $newdata = array(
			                   'email'  => $email
			               );
                                 $this->session->set_userdata($newdata);
				//$this->session->set_userdata($email);
				//$config['protocol'] = 'mail';$this->email->initialize($config);

				$tmp_password=$this->forget_password_model->update_tmp_password($email);
				//echo $tmp_password;	
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



				$this->email->from('aman@geeksntechnology.com','admin');
				$this->email->to($email);
				$base=$this->config->base_url();
				$message=heading('Your Email:');
				$message.=$email;
				$message.=br(2);
				$message.=heading('Password Recovery Link:');
				$message.="<a href='".$base."index.php/forget/getlink/".$tmp_password."'>Click Here</a>";
				$message.=br(2);
				$message.="Thank You";
                //$message="<a href='fsdkfjdsfjsdfjdsf'>sdfsdfsdf</a>";
				$this->email->subject('Password Recovery');
				$this->email->message($message);
                $this->email->set_mailtype("html");
				$this->email->send();
                               // echo "<script>alert('Please check your email to update your password');</script>";
				echo $this->email->print_debugger();
				//redirect('welcome','refresh');
				// echo "<script>
				// alert('Please check your email to update your password');
				// window.location.href='welcome';
				// </script>";

			}



			else
			{
				//echo "";
				echo "<script>
				alert('Email not registered yet!!!');
				window.location.href='welcome';
				</script>";

			}
		}
	}
	
	
	public function getlink()
	{
	$tmp_password= $this->session->userdata('tmp_password');
	$this->load->model('forget_password_model');
	$get_email=$this->forget_password_model->get_email($tmp_password);
	//	echo $get_email->result_array();
		// $data['email']=$get_email;
	    $data['message_error_password']=NULL;
	    $this->load->view('forget',$data);
	}
}

