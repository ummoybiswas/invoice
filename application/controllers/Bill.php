<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bill extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['message']='';
		$this->load->model('Bill_model');
		$allBills = $this->Bill_model->get_pendingBill();
		$data['bills'] = $allBills;
		$this->parser->parse('welcome_message',$data);
		//$this->load->view('welcome_message');
		//print_r($data['bills'][0]['client_id']);
	}
	public function short_info($status)
	{
		
		$this->load->model('Bill_model');
		$allBills = $this->Bill_model->get_Bill($status);
		$data['bills'] = $allBills;
		$this->parser->parse('welcome_message',$data);
	}
	public function view_info($id)
	{
		if($this->input->post('view'))
		{
			$this->load->model('Bill_model');
			$data['srevice']=$this->Bill_model->get_BillInfo($id);
			$billInfo=$this->Bill_model->get_BillbyId($id);
			/*print_r($billInfo);
			echo br(2);
			print_r($srevice);
			$this->load->view('view_bill');*/
			$data['inv_id']=$billInfo[0]['client_id'];
			$data['name']=$billInfo[0]['first_name'];
			$data['total']=$billInfo[0]['total_bill'];
			$data['due']=$billInfo[0]['due'];
			$data['date']=$billInfo[0]['date'];
			$data['due_date']=$billInfo[0]['due_date'];
			$data['status']=$billInfo[0]['status'];
			
			$this->parser->parse('view_bill',$data);
		}
		else if($this->input->post('edit'))
		{
			$this->load->model('Bill_model');
			$data['srevice']=$this->Bill_model->get_BillInfo($id);
			$billInfo=$this->Bill_model->get_BillbyId($id);
			/*print_r($billInfo);
			echo br(2);
			print_r($srevice);
			$this->load->view('view_bill');*/
			$data['inv_id']=$billInfo[0]['client_id'];
			$data['name']=$billInfo[0]['first_name'];
			$data['total']=$billInfo[0]['total_bill'];
			$data['due']=$billInfo[0]['due'];
			$data['date']=$billInfo[0]['date'];
			$data['due_date']=$billInfo[0]['due_date'];
			$data['status']=$billInfo[0]['status'];
			
			$this->parser->parse('view_edit',$data);
		}
		else redirect('bill');
	}
	public function edit_bill($id)
	{
		if($this->input->post('update'))
		{
			$due_date= $this->input->post('due_date');
			$amount= $this->input->post('pay');
			$this->load->model('Bill_model');
			$this->Bill_model->get_BillInfo($id,$due_date,$amount);
		}
		else echo $id;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */