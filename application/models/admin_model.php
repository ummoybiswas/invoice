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