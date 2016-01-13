<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invoice_gen_model extends CI_Model
{
	public function recent_invoice()
	{
		$this->db->select('*');
		$this->db->from('invoice_gen');
		$result = $this->db->get();
		
		return $result->result_array();
	}
}