<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_model extends CI_Model
{
	public function user_ticket_information($ticket_id,$user_email)
	{
		$this->db->select('*');
		$this->db->from('ticket');
		$this->db->where('user_email',$user_email);
		$this->db->where('ticket_id',$ticket_id);
		$result = $this->db->get();
		return $result->result_array();
	}
	public function ticket_info_client_single($ticket_id){
		$this->db->select('*');
		$this->db->from('ticket');
		$this->db->join('ticket_answer', 'ticket.ticket_id = ticket_answer.ticket_id','left');
		$this->db->where('ticket.ticket_id', $ticket_id);
		$this->db->order_by("ticket_answer.ticket_answer_id", "asc");
		
		$result = $this->db->get();
		return $result->result_array();
		
		
	}
	public function change_ans_type( $ticket_id,$ticket_answer_id,$data2){
		 $this->db->where('ticket_id', $ticket_id);
		 $this->db->where('ticket_answer_id', $ticket_answer_id);
		 $this->db->update('ticket_answer', $data2);
		
	}
	
	
	public function get_notification_number($user_email){
		// reply type 1== admin  seen_type 0== unseen
		$reply_type=1;
		$seen_type=0;
		$result=$this->db->query('SELECT * FROM ticket_answer INNER JOIN ticket
		ON ticket_answer.ticket_id=ticket.ticket_id INNER JOIN department
		ON ticket.dept_id=department.dept_id WHERE ticket_answer.user_email="'.$user_email.'" and ticket_answer.reply_type="'.$reply_type.'"
                            and ticket_answer.seen_type="'.$seen_type.'" LIMIT 5;');
           //$result=$this->db->query('SELECT * FROM transaction Where id= (select max(id) from transaction WHERE bill_id="'.$bill_id.'" and user_email="'.$email.'")');
      
	  
		$data['nseen_info'] =  $result->result();
		$data['rows']   = $result->num_rows();
		//return $result->num_rows();
		//WHERE id = ( FROM tablename)
		return $data;
		
	}
	
	
		
		
		
	
	public function insert_user_answer($data,$ticket_id,$data2){
		 $this->db->insert('ticket_answer',$data);
		 
		 $this->db->where('ticket_id', $ticket_id);
		 $this->db->update('ticket', $data2);

		
	}
	
	
	
	
	public function account_information($user_name){
		
		$this->db->select('*');
		$this->db->from('client');
		$this->db->where('user_name',$user_name);
		$result = $this->db->get();
		return $result->result_array();
		
		
	}
	
	
	
	public function get_dept($dept){
		$this->db->select('dept_name');
		$this->db->from('department');
		$result = $this->db->get();
		return $result->result_array();
		 
		
	}
	
	
	
	public function get_previous_ticket($get_email){
		$status1=1;
		$status0=0;
	   $this->db->select('*');
		$this->db->from('ticket');
		//$this->db->join('ticket_answer', 'ticket.ticket_id = ticket_answer.ticket_id');
		//$this->db->where('ticket.user_email',$get_email);
		$this->db->where('status',$status1);
		$this->db->or_where('status',$status0);
		//$this->db->order_by('date_time_ans','desc');
		
		$result = $this->db->get();
		return $result->result_array();
	   
	   
   }
   public function get_previous_ticket_answered($user_email,$ticket_id)
	{
		$this->db->select('*');
		$this->db->from('ticket_answer');
		$this->db->where('user_email',$user_email);
		$this->db->where('ticket_id',$ticket_id);
		$result = $this->db->get();
		return $result->result_array();
	}
	
   

	public function get_dept_name()
	{
		$this->db->select('*');
		$this->db->from('department');
		$result = $this->db->get();
		return $result->result_array();
	}
	
	
    public function insert_new_ticket($data){
		$this->db->insert('ticket',$data);
	  
	  
	  
   }
   
   public function get_user_transactions($user_email)
	{
		$this->db->select('*');
		$this->db->from('transaction');
		$this->db->where('user_email',$user_email);
		$this->db->order_by('transaction_date_time','desc');
		$result=$this->db->get();
		return $result->result_array();
		
		
		
	}
   public function return_row_byID($ticket_id)
   {
	   $this->db->select('user_email');
		$this->db->from('ticket');
		$this->db->where('ticket_id', $ticket_id);
		$result = $this->db->get();
		return $result->num_rows();
	   
   }
   
 
   
	public function get_bill_data_txn_details($bill_id)
	{
		$this->db->select('*');
		$this->db->from('transaction');
		$this->db->where('bill_id', $bill_id);
		$this->db->where('debit', '0.00');
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
	public function get_email_byID($ticket_id)
	{
		$this->db->select('user_email');
		$this->db->from('ticket');
		$this->db->where('ticket_id', $ticket_id);
		$result = $this->db->get();
		$ret=$result->row();
		return $ret->user_email;
	}
	public function all_new_ans(){
		$status=1;
		 $this->db->select('*');
		$this->db->from('ticket');
		$this->db->where('status',$status);
			$result = $this->db->get();
		return $result->result_array();
		
	}




///////////// View Bill Details///////////////////////




    public function get_bill_data($bill_id,$email)
	{
		$this->db->select('*');
		$this->db->from('bills');
		$this->db->where('bill_id', $bill_id);
		$this->db->where('user_email', $email);
		$result = $this->db->get();
		return $result->result_array();
	}

	public function get_credit_amount($bill_id,$email)
	{
	$result=$this->db->query('SELECT * FROM transaction Where id= (select max(id) from transaction WHERE bill_id="'.$bill_id.'" and user_email="'.$email.'")');
		return $result->result_array();
	}

	public function get_bill_partial_data($bill_id)
	{
		$this->db->select('*');
		$this->db->from('bills');
		$this->db->join('partial', 'partial.bill_id = bills.bill_id');
		$this->db->where('bills.bill_id', $bill_id);
		$result = $this->db->get();
		return $result->result_array();
	}



  public function get_bill_data_des($bill_id,$email)
	{
		$this->db->select('*');
		$this->db->from('bill_service');
		$this->db->where('bill_id', $bill_id);
		$this->db->where('user_email', $email);
		$result = $this->db->get();
		return $result->result_array();
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
		$this->db->where('bills.bill_status', '0');
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
		$this->db->where('services', 'Hosting');
		$result = $this->db->get();
		return $result->result();
	}


	public function my_invoice_info($email)
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