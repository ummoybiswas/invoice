<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public function get_admin_info()
	{
		$this->db->select('*');
		$this->db->from('client');
		$this->db->where('user_name', 'admin');
		$result = $this->db->get();
		return $result->result_array();
	}

	public function update_admin_info($data)
	{
		$this->db->where('user_name', 'admin');
		$this->db->update('client', $data);
	}


	public function get_client_info()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('client', 'client.user_name = user.username');
		$this->db->where('user.type', '0');
		$result = $this->db->get();
		return $result->result();
	}
	public function get_unique_email($email)
	{

		$this->db->select('email');
		$this->db->from('client');
		$this->db->where('email', $email);
		$result = $this->db->get();
		return $result->num_rows();
	}



	/////////////////////   Count Service For Dashboard/////////////////////

	public function total_service()
	{
		$this->db->select('*');
		$this->db->from('bill_service');
		$result = $this->db->get();
		return $result->num_rows();
	}


	public function active_service()
	{
		$this->db->select('*');
		$this->db->from('bill_service');
		$this->db->where('status', '1');
		$result = $this->db->get();
		return $result->num_rows();
	}


	public function inactive_service()
	{
		$this->db->select('*');
		$this->db->from('bill_service');
		$this->db->where('status', '0');
		$result = $this->db->get();
		return $result->num_rows();
	}

/////////////////////   Count Service For Dashboard END/////////////////////

/////////////////////   Count Domain For Dashboard/////////////////////

	public function total_domain()
	{
		$this->db->select('*');
		$this->db->from('bill_service');
		$this->db->where('services', 'Domain');
		$result = $this->db->get();
		return $result->num_rows();
	}
	public function active_domain()
	{
		$this->db->select('*');
		$this->db->from('bill_service');
		$this->db->where('services', 'Domain');
		$this->db->where('status', '1');
		$result = $this->db->get();
		return $result->num_rows();
	}


	public function inactive_domain()
	{
		$this->db->select('*');
		$this->db->from('bill_service');
		$this->db->where('services', 'Domain');
		$this->db->where('status', '0');
		$result = $this->db->get();
		return $result->num_rows();
	}



/////////////////////   Count Domain For Dashboard END/////////////////////

/////////////////////   Count Hosting For Dashboard/////////////////////

	public function total_hosting()
	{
		$this->db->select('*');
		$this->db->from('bill_service');
		$this->db->where('services', 'Hosting');
		$result = $this->db->get();
		return $result->num_rows();
	}
	public function active_hosting()
	{
		$this->db->select('*');
		$this->db->from('bill_service');
		$this->db->where('services', 'Hosting');
		$this->db->where('status', '1');
		$result = $this->db->get();
		return $result->num_rows();
	}


	public function inactive_hosting()
	{
		$this->db->select('*');
		$this->db->from('bill_service');
		$this->db->where('services', 'Hosting');
		$this->db->where('status', '0');
		$result = $this->db->get();
		return $result->num_rows();
	}



/////////////////////   Count Hosting For Dashboard END/////////////////////



	/////////////////////   Count Invoice For Dashboard/////////////////////

	public function total_invoice()
	{
		$this->db->select('*');
		$this->db->from('bills');
		$result = $this->db->get();
		return $result->num_rows();
	}


	public function active_invoice()
	{
		$this->db->select('*');
		$this->db->from('bills');
		$this->db->where('bill_status', '1');
		$result = $this->db->get();
		return $result->num_rows();
	}


	public function inactive_invoice()
	{
		$this->db->select('*');
		$this->db->from('bills');
		$this->db->where('bill_status', '0');
		$result = $this->db->get();
		return $result->num_rows();
	}



/////////////////////   Count Invoice For Dashboard END/////////////////////

	public function insert_new_client_all_info($data1,$data2)
	{
		$this->db->insert('client', $data1);
		$this->db->insert('user', $data2);
	}
	public function get_unique_uname($uname)
	{

		$this->db->select('user_name');
		$this->db->from('client');
		$this->db->where('user_name', $uname);
		$result = $this->db->get();
		return $result->num_rows();
	}

    public function change_password($password)
	{

		 $newdata = array(
                   'password'  => $password
               );
		$this->db->where('username', 'admin');
		$this->db->update('user', $newdata);

		
	}
}
?>