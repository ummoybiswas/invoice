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

/////////////////////   Count Service For Dashboard/////////////////////

	public function total_service($email)
	{
		$this->db->select('*');
		$this->db->from('bill_service');
		$this->db->where('user_email', $email);
		$result = $this->db->get();
		return $result->num_rows();
	}


	public function active_service($email)
	{
		$this->db->select('*');
		$this->db->from('bill_service');
		$this->db->where('user_email', $email);
		$this->db->where('status', '1');
		$result = $this->db->get();
		return $result->num_rows();
	}


	public function inactive_service($email)
	{
		$this->db->select('*');
		$this->db->from('bill_service');
		$this->db->where('user_email', $email);
		$this->db->where('status', '0');
		$result = $this->db->get();
		return $result->num_rows();
	}

/////////////////////   Count Service For Dashboard END/////////////////////

/////////////////////   Count Domain For Dashboard/////////////////////

	public function total_domain($email)
	{
		$this->db->select('*');
		$this->db->from('bill_service');
		$this->db->where('user_email', $email);
		$this->db->where('services', 'Domain');
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

/////////////////////   Count Hosting For Dashboard/////////////////////

	public function total_hosting($email)
	{
		$this->db->select('*');
		$this->db->from('bill_service');
		$this->db->where('user_email', $email);
		$this->db->where('services', 'Hosting');
		$result = $this->db->get();
		return $result->num_rows();
	}
	public function active_hosting($email)
	{
		$this->db->select('*');
		$this->db->from('bill_service');
		$this->db->where('user_email', $email);
		$this->db->where('services', 'Hosting');
		$this->db->where('status', '1');
		$result = $this->db->get();
		return $result->num_rows();
	}


	public function inactive_hosting($email)
	{
		$this->db->select('*');
		$this->db->from('bill_service');
		$this->db->where('user_email', $email);
		$this->db->where('services', 'Hosting');
		$this->db->where('status', '0');
		$result = $this->db->get();
		return $result->num_rows();
	}



/////////////////////   Count Hosting For Dashboard END/////////////////////



	/////////////////////   Count Invoice For Dashboard/////////////////////

	public function total_invoice($email)
	{
		$this->db->select('*');
		$this->db->from('bills');
		$this->db->where('user_email', $email);
		$result = $this->db->get();
		return $result->num_rows();
	}


	public function active_invoice($email)
	{
		$this->db->select('*');
		$this->db->from('bills');
		$this->db->where('user_email', $email);
		$this->db->where('bill_status', '1');
		$result = $this->db->get();
		return $result->num_rows();
	}


	public function inactive_invoice($email)
	{
		$this->db->select('*');
		$this->db->from('bills');
		$this->db->where('user_email', $email);
		$this->db->where('bill_status', '0');
		$result = $this->db->get();
		return $result->num_rows();
	}



/////////////////////   Count Invoice For Dashboard END/////////////////////

public function admin_info()
	{
		$this->db->select('*');
		$this->db->from('client');
		$this->db->where('user_name', 'admin');
		$result = $this->db->get();
		return $result->result_array();
	}


	public function client_info($user_name)
	{
		$this->db->select('*');
		$this->db->from('client');
		$this->db->where('user_name', $user_name);
		$result = $this->db->get();
		return $result->result_array();
	}

	public function invoice_info($email)
	{
		$this->db->select('*');
		$this->db->from('discount');
		$this->db->join('bills', 'discount.bill_id = bills.bill_id','right');
		$this->db->where('bills.user_email', $email);
		
		$result = $this->db->get();
		return $result->result_array();
		
	}

	public function domain_info($email)
	{
		$this->db->select('*');
		$this->db->from('bills');
		$this->db->join('bill_service', 'bill_service.bill_id = bills.bill_id');
		$this->db->where('bills.user_email', $email);
		$this->db->where('bill_service.services', 'Domain');
		$result = $this->db->get();
		return $result->result();
	}


	public function service_info($email)
	{
		$this->db->select('*');
		$this->db->from('bills');
		$this->db->join('bill_service', 'bill_service.bill_id = bills.bill_id');
		$this->db->where('bills.user_email', $email);
		$result = $this->db->get();
		return $result->result();
	}


	public function change_password($password,$user)
	{

		 $newdata = array(
                   'password'  => $password
               );
		$this->db->where('username', $user);
		$this->db->update('user', $newdata);

		
	}
}