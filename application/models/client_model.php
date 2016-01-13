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
}