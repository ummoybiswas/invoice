<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_model extends CI_Model
{
	public function account_information($user_name)
	{
		$this->db->select('*');
		$this->db->from('client');
		$this->db->where('user_name', $user_name);
		$result = $this->db->get();
		return $result->result_array();
	}



	public function get_email_id($user_name)
	{
		$this->db->select('email');
		$this->db->from('client');
		$this->db->where('user_name', $user_name);
		$result = $this->db->get();
		$ret=$result->row();
		return $ret->email;
	}
	public function dashboard_information($email)
	{
		$this->db->select('*');
		$this->db->from('bill_service');
		$this->db->where('user_email', $email);
		$result = $this->db->get();
		return $result->num_rows();
	}


/////////////////////   Count Domain For Dashboard/////////////////////

	public function total_domain($email)
	{
		$this->db->select('*');
		$this->db->from('bill_service');
		$this->db->where('user_email', $email);
		$this->db->where('services', 'Domain');
		$this->db->where('status', '1');
		$result = $this->db->get();
		return $result->num_rows();
	}
	public function active_domain($email)
	{
		$this->db->select('*');
		$this->db->from('bill_service');
		$this->db->where('user_email', $email);
		$this->db->where('services', 'Domain');
		$this->db->where('status', '1');
		$result = $this->db->get();
		return $result->num_rows();
	}


	public function inactive_domain($email)
	{
		$this->db->select('*');
		$this->db->from('bill_service');
		$this->db->where('user_email', $email);
		$this->db->where('services', 'Domain');
		$this->db->where('status', '0');
		$result = $this->db->get();
		return $result->num_rows();
	}



/////////////////////   Count Domain For Dashboard END/////////////////////




	public function change_password($password,$user)
	{

		 $newdata = array(
                   'password'  => $password
               );
		$this->db->where('username', $user);
		$this->db->update('user', $newdata);

		
	}
}