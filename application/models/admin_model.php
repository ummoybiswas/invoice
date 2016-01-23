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


	public function get_unique_email($email)
	{

		$this->db->select('email');
		$this->db->from('client');
		$this->db->where('email', $email);
		$result = $this->db->get();
		return $result->num_rows();
	}



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