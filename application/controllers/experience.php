<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class experience extends CI_controller{
	 public function __construct()
	 {
	 	parent :: __construct();
	 	$this->load->model('experience_model');
		$this->logined_in();
	 }
	 private function logined_in()
	 {
		//  $this->logined_in();
		 if(! $this->session->userdata('authanticated'))
		 {
			 
			 redirect('login');
			 
		 }}
	 public function index()
{
	$data['faculty']=$this->experience_model->faculty();
	// $this->load->view('frontend/user/experience',$data);
	// $this->form_validation->set_rules('foreginkey', 'foreginkey', 'required');
	$this->form_validation->set_rules('title', 'title', 'required');
	$this->form_validation->set_rules('organization', 'organization', 'required');
	$this->form_validation->set_rules('fromdate', 'fromdate', 'required');
	$this->form_validation->set_rules('todate', 'todate', 'required|callback_compare_dates');
	$this->form_validation->set_rules('currently_working', 'currently_working', 'required');
	$this->form_validation->set_rules('Address', 'Address', 'required');


	/*Check submit button */
 	if($this->form_validation->run() == true)
 	{	$data=array();
		
		$data['faculty_id']=$this->input->post('foreginkey');
 		$data['title']=$this->input->post('title');
 		$data['organization']=$this->input->post('organization');

	$data['from']=$this->input->post('fromdate');
	 
$data['to']=$this->input->post('todate');
		 $data['currently_working_here']=$this->input->post('currently_working');
 		$data['address']=$this->input->post('Address');
		
$this->experience_model->experiencecreate($data);

	echo '<script>alert("Your Experince Add successfully");</script>';
			
	redirect('userdashboard','refresh');}
 		else{
			$errors = validation_errors();
 				$this->load->view('frontend/user/experience',$data);
 		}
	
	  } 
	//   this controller the part of index function this controller used for date greater

	  public function compare_dates($todate)
{
    $fromdate = $this->input->post('fromdate');

    if (strtotime($fromdate) > strtotime($todate)) {
      $this->session->set_flashdata ('compare_dates', 'The To Date must be greater than the From Date.');
        return false;
    }

    return true;
}
	  public function update_exprience($id)
	  {  
		// $user=$this->session->userdata('e_id');
		$data['user']=$this->experience_model->get_experience($id);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','title' ,'trim|required');
		$this->form_validation->set_rules('organization','organization','trim|required');
		$this->form_validation->set_rules('fromdate','fromdate','trim|required');
		$this->form_validation->set_rules('todate','todate','trim|required');
		$this->form_validation->set_rules('currently_working','currently_working','trim|required');
		$this->form_validation->set_rules('address','address','trim|required');
		if ($this->form_validation->run() === false) {
		$this->load->view('frontend/edites/experienceedit',$data);

		}
		else{

			$this->experience_model->update_experience();
			
	redirect('userdashboard','refresh');
			
		}
		
	  }
	//   the down for delete of exprience
	  public function deleteexperience($id)
	{ 
		
	
		$this->experience_model->delete_experience($id);
		
		// $this->session->set_flashdata('massage', 'vadelelue');
		echo "<script>alert('your Data Deleted successfully');</script>";
		
		redirect('userdashboard','refresh');
		
	}}?>


<!-- -->
