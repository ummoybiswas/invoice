<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
	public function save($data)
	{
		$this->db->insert('promotions', $data);
	}
	public function check_login($uname,$pass)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $uname);
		$this->db->where('password', $pass);
		$result = $this->db->get();
		
		return $result->result_array();
	}
}