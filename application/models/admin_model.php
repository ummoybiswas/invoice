<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	public function get_admin_info()
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('user_name', 'admin');
		$result = $this->db->get();
		return $result->result_array();
	}
	//get ticket info for admin 
	public function t_info_new(){
		$t_type=1;
		$results =$this->db->query('select * from ticket INNER JOIN department
		ON ticket.dept_id=department.dept_id  where t_type="'.$t_type.'" LIMIT 5; ');
		$data['new_tickets'] =  $results->result();
		$data['roww']= $results->num_rows();
		return $data;
		
		
	}
	
	public function get_all_dept(){
		
		$this->db->select('*');
		$this->db->from('department');
		$result = $this->db->get();
		return $result->result_array();
	}
	
	
	
	public function get_transactions()
	{
		$this->db->select('*');
		$this->db->from('transaction');
		$this->db->order_by('transaction_date_time','desc');
		$result=$this->db->get();
		return $result->result_array();
		
		
		
	}
	 public function get_row_byID($ticket_id)
   {
	   $this->db->select('user_email');
		$this->db->from('ticket');
		$this->db->where('ticket_id', $ticket_id);
		$result = $this->db->get();
		return $result->num_rows();
	   
   }
	public function all_new_t(){
		$status=0;
		$this->db->select('*');
		$this->db->from('ticket');
		$this->db->join('department', 'ticket.dept_id = department.dept_id ','left');
		$this->db->where('ticket.status', $status);
		$result = $this->db->get();
		return $result->result_array();
		
	}
	
	public function get_user_email($ticket_id){
		$this->db->select('user_email');
		$this->db->from('ticket');
		$this->db->where('ticket_id',$ticket_id);
		$result = $this->db->get();
		$ret=$result->row();
		return $ret->user_email;
	}
	
	public function update_to_old($data2,$ticket_id){
		$this->db->where('ticket_id', $ticket_id);
		$this->db->update('ticket', $data2);
		
	}
	
	public function all_new_ticket(){
		$t_type=1;
		$this->db->select('*');
		$this->db->from('ticket');
		$this->db->where('t_type',$t_type);
		$result=$this->db->get();
		return $result->result_array();
		
		
	}
	
	 public function t_info_dashboard(){
		$status=0;
		$this->db->select('*');
		$this->db->from('ticket');
		$this->db->where('status',$status);
		
		$result=$this->db->get();
		return $result->result_array();
		
	}
	  
	
	 public function ticket_info_client(){
		$t_type=1;
		$this->db->select('*');
		$this->db->from('ticket');
		$this->db->where('t_type',$t_type);
		$result=$this->db->get();
		return $result->result_array();
		
	}
	public function get_admin_notification(){
		
		$this->db->select('*');
		$this->db->from('ticket');
		$this->db->where('');
		
	}
	
		public function user_ticket_info($ticket_id)
	{
		$this->db->select('*');
		$this->db->from('ticket');
		$this->db->where('ticket_id',$ticket_id);
		$result = $this->db->get();
		return $result->result_array();
	}
	
		public function details_single_p_t($ticket_id)
	{
		$this->db->select('*');
		$this->db->from('ticket');
		$this->db->join('ticket_answer', 'ticket.ticket_id = ticket_answer.ticket_id','left');
		$this->db->where('ticket.ticket_id', $ticket_id);
		$result = $this->db->get();
		return $result->result_array();
	}
	public function t_info_client_single($ticket_id){
		$status=0;
		$this->db->select('*');
		$this->db->from('ticket');
		$this->db->join('ticket_answer', 'ticket.ticket_id = ticket_answer.ticket_id','left');
		$this->db->where('ticket.ticket_id', $ticket_id);
		$this->db->where('ticket.status', $status);
		$this->db->where('ticket.ticket_id', $ticket_id);

		$this->db->order_by("ticket_answer.ticket_answer_id", "asc");
		$result = $this->db->get();
		return $result->result_array();
		
		
	}
	
	
	public function answered_ticket_info(){
		
		$status=1;
		$this->db->select('*');
		$this->db->from('ticket');
        $this->db->join('department', 'ticket.dept_id = department.dept_id');
		$this->db->where('ticket.status', $status);
		$result = $this->db->get();
		return $result->result_array();
		
	}
	
	 public function insert_admin_answer($data,$data2,$ticket_id){
		 $this->db->insert('ticket_answer',$data);
		 $this->db->where('ticket_id', $ticket_id);
		 $this->db->update('ticket', $data2);
		
	}
	public function get_profile_pic($uname)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('user_name', $uname);
		$result = $this->db->get();
		return $result->result_array();
	}
	
	
	public function change_profile_img($shop_name,$new_img)
	{
		$data=array('profile_picture'=>$new_img);
		$this->db->where('profile_picture', $shop_name);
		$this->db->update('admin', $data);

	}

	public function update_admin_info($data)
	{
		$this->db->where('user_name', 'admin');
		$this->db->update('admin', $data);
	}
	
	public function insert_department_model($data){
		
		$this->db->insert('department',$data);
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
	public function insert_new_admin($data1,$data2)
	{
		$this->db->insert('admin', $data1);
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