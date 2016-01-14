<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

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
	
	public function index()
	{
		
		$this->session->set_userdata('error', 'You are successfully logout!!!');
		$this->session->unset_userdata('username');
		redirect('welcome','refresh');
	}
}

