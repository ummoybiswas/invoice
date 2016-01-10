<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bill_model extends CI_Model
{
	public function recent_bills_all()
	{
		$this->db->select('*');
		$this->db->from('bills');
		$this->db->join('client', 'client.client_id = bills.client_id');
		//$this->db->order_by("bills.due_date","desc");
		$result = $this->db->get();
		return $result->result();
	}
	public function save($data)
	{
		$this->db->insert('promotions', $data);
	}
	public function get_pendingBill()
	{
		$this->db->select('*');
		$this->db->from('bills');
		$this->db->where('status', 'Unpaid');
		$this->db->join('client', 'client.client_id = bills.client_id');
		$this->db->limit(5);
		$result = $this->db->get();
		
		return $result->result_array();
	}
	public function get_Bill($status)
	{
		$this->db->select('*');
		$this->db->from('bills');
		$this->db->where('status', $status);
		$this->db->join('client', 'client.client_id = bills.client_id');
		$this->db->limit(5);
		$result = $this->db->get();
		
		return $result->result_array();
	}
	public function get_BillbyId($id)
	{
		$this->db->select('*');
		$this->db->from('bills');
		$this->db->where('bill_id', $id);
		$this->db->join('client', 'client.client_id = bills.client_id');
		
		$result = $this->db->get();
		
		return $result->result_array();
	}
	public function get_BillInfo($id)
	{
		
		$this->db->select('*');
		$this->db->from('bill_service');
		$this->db->where('bill_id', $id);
		$this->db->join('service', 'service.service_id = bill_service.service_id');
		$result = $this->db->get();
		//print_r($result1->result_array());
		return $result->result_array();
	}
	
	public function get_promoAdmin_active()
	{
		date_default_timezone_set('Asia/Dhaka');
		$today = date('Y-m-d');
		$where = "status = 1 AND start_date <= '$today' AND end_date >= '$today'";
		$this->db->where($where);
		$result = $this->db->get('promotions');
		
		return $result->result_array();
	}
	
	public function get_specificPromo($data)
	{
		$where= array('p_id' =>$data);
		$this->db->where($where);
		$result = $this->db->get('promotions');
		
		return $result->row_array();
	}
	public function update_promo($data, $id)
	{
		$this->db->where('p_id', $id);
		$this->db->update('promotions', $data);
		$this->session->unset_userdata('ID');
	}
}