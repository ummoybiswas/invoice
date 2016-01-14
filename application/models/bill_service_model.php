<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bill_service_model extends CI_Model
{
	public function create_new_service($data)
	{
		$this->db->insert('bill_service', $data);
	}
}

?>