<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Send_email_model extends CI_Model
{
	
	public function get_order_number($bill_id)
		{
			$this->db->select('*');
			$this->db->from('order');
			$this->db->where('bill_id', $bill_id);
			$result = $this->db->get();
			return $result->result_array();
		}

			public function get_name($email)
		{
			$this->db->select('*');
			$this->db->from('client');
			$this->db->where('email', $email);
			$result = $this->db->get();
			return $result->result_array();
		}


      
	public function get_service_name($bill_id)
		{
            $this->db->select('*');
			$this->db->from('bill_service');
			$this->db->where('bill_id', $bill_id);
			$result = $this->db->get();
			return $result->result_array();
        }

    public function get_bill_data($bill_id)
        {
        	$this->db->select('*');
			$this->db->from('bills');
			$this->db->where('bill_id', $bill_id);
			$result = $this->db->get();
			return $result->result_array();

        }




	
}

?>