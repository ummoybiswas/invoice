<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->model('login_model');
		$uname=$this->input->post('uname');
		$pass=$this->input->post('pass');
		$result=$this->login_model->check_login($uname,$pass);
		if(count($result)>=1)
		{
			$data = array(
                'username'  => $result[0]['username'],
                'type'     => $result[0]['type'],
                'logged_in' => TRUE
            );
			$this->session->set_userdata($data);
			if($result[0]['type']==1)
				redirect('admin/dashboard','refresh');
			else
				redirect('client/dashboard','refresh');
		}
		else
		{
			$this->session->set_userdata('error', 'Incorrect username/password!!!');
			redirect('welcome','refresh');
		}
		
	}
}

