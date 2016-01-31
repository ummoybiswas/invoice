<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forget_password_model extends CI_Model
{
	public function exist_email($email)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email',$email );
		$result = $this->db->get();	
		return $result->result_array();
	}
		
		
	public function update_password($tmp_password,$password)
	{

		$data = array(

               'password' => $password
            );

		$this->db->where('tmp_password', $tmp_password);
		$this->db->update('user', $data); 
	}


	public function get_email($tmp_password)
	{

		$this->db->select('email');
		$this->db->from('user');
		$this->db->where('tmp_password',$tmp_password );
		$result = $this->db->get();	
		return $result->result_array();
	}



	public function update_password_reset($tmp_password,$password)
	{
		$this->load->helper('string');
		$new_tmp_password=random_string('alnum', 40);

		 $data = array(

               'tmp_password' => $new_tmp_password
            );

		 $this->db->where('tmp_password', $tmp_password);
		$this->db->update('user', $data); 
	}
	
	public function update_tmp_password($email)
	{
		$this->load->helper('string');
		$tmp_password=random_string('alnum', 40);
		$data = array(

               'tmp_password' => $tmp_password
            );
                $this->load->library('session');
                
                $newdata = array(
                   'tmp_password'  => $tmp_password
               );

		$this->db->where('email', $email);
		$this->db->update('user', $data); 
		$this->session->set_userdata($newdata);
		//return $tmp_password;
	}
}