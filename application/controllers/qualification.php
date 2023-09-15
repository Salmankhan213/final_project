<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class qualification extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('qualification_model');
	$this->logined_in();
	}
	private function logined_in()
	{
	   //  
		if(! $this->session->userdata('authanticated'))
		{
			
			redirect('login');
			
		}}
	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('level_of_education', 'level_of_education', 'trim|required|callback_check_level_of_education');
		$this->form_validation->set_rules('address', 'address', 'trim|required');
		$this->form_validation->set_rules('fromdate', 'from date', 'trim|required');
		$this->form_validation->set_rules('todate', 'to date', 'trim|required|callback_compare_dates');
		
		$data['faculty'] = $this->qualification_model->faculty('id');
		
		if($this->form_validation->run() == true){
			$data=array();
			$data['faculty_id']=$this->input->post('foreign_key');
			$data['level_of_education']=$this->input->post('level_of_education');
			$data['address']=$this->input->post('address');
			$data['from_date']=$this->input->post('fromdate');
			$data['to_date']=$this->input->post('todate');
			$response=$this->qualification_model->create($data);
			
				echo '<script>alert("Your  qualification Add successfully");</script>';
			
				redirect('userdashboard','refresh');
			}
			else{
				$this->session->set_flashdata('errors', validation_errors());

				$this->load->view('frontend/user/qualification', $data);
			
			}
		
	}
	public function compare_dates($todate)
	{
		$fromdate = $this->input->post('fromdate');
	
		if (strtotime($fromdate) > strtotime($todate)) {
			$this->session->set_flashdata('compare_dates', 'The To Date must be greater than the From Date.');
			return false;
		}
	
		return true;
	}
	public function check_level_of_education($level)
{
    if ($level === '<---level_of_education --->') {
     $this->session->set_flashdata('errors', validation_errors());
		return false;
    }

    return true;
}
	public function update($user_id)
	{     
		$data['user'] = $this->qualification_model->get_qualification($user_id);
		// $this->load->view('frontend/edites/qualificationedit', $data);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('level_of_education', 'level_of_education', 'trim|required');
		$this->form_validation->set_rules('address', 'address', 'trim|required');
		$this->form_validation->set_rules('fromdate', 'from date', 'trim|required');
		$this->form_validation->set_rules('todate', 'to date', 'trim|required');
	
							if ($this->form_validation->run() === false)
							{
								$this->load->view('frontend/edites/qualificationedit',$data);

							}
							else
							{
								$this->qualification_model->update_qualification();
								
								redirect('userdashboard');
							}
						}
	public function deletequalification($id)
										{ 
											$this->load->model('qualification_model');
											$this->qualification_model->delete_qualification($id);
											
											// $this->session->set_flashdata('massage', 'vadelelue');
											echo "<script>alert('your Data Deleted successfully');</script>";
											
											redirect('userdashboard','refresh');
											
										}
	// admin side 



	public function admin_qualification_create()
	{
		$data['faculty'] = $this->qualification_model->admin_get_faculty('id');
		$this->load->view('admin/admin_user/qualification', $data);
		if($this->input->post('submit')){
			$data=array();
			$data['faculty_id']=$this->input->post('foreign_key');
			$data['level_of_education']=$this->input->post('level_of_education');
			$data['address']=$this->input->post('address');
			$data['from_date']=$this->input->post('fromdata');
			$data['to_date']=$this->input->post('todate');
			$response=$this->qualification_model->admin_qualification_create($data);
			if($response==true)
			{
				echo '<script>alert("Your  qualification Add successfully");</script>';
			
				redirect('admindashboard','refresh');
			}
			else{
				echo " your qualification do not insert plz check";
			}
		}
	}
	public function admin_deletequalification($id)
	{ 
		$this->load->model('qualification_model');
		$this->qualification_model->admin_delete_qualification($id);
		
		// $this->session->set_flashdata('massage', 'vadelelue');
		echo "<script>alert('your Data Deleted successfully');</script>";
		
		redirect('admindashboard','refresh');
		
	}


	public function admin_qualification_update($id)
	{
		$data['user'] = $this->qualification_model->admin_get_qualification($id);
		// $this->load->view('frontend/edites/qualificationedit', $data);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('level_of_education', 'level_of_education', 'trim|required');
		$this->form_validation->set_rules('address', 'address', 'trim|required');
		$this->form_validation->set_rules('fromdate', 'from date', 'trim|required');
		$this->form_validation->set_rules('todate', 'to date', 'trim|required');
	
		if ($this->form_validation->run() === false)
		{
			$this->load->view('admin/admin_edit/qualificationedit',$data);

		}
		else
		{
			$this->qualification_model->admin_update_qualification();
			
			redirect('admindashboard');
		}
	}
}
?>
