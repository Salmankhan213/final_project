<!-- this controller used for publications table frontend -->
<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Publications extends CI_Controller{
	 public function __construct(){
		                parent:: __construct();
						$this->logined_in();
		                $this->load->model('publication_model');
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
		$data['faculty']=$this->publication_model->faculty('id');
		$this->load->view('frontend/user/publications',$data);
		if ($this->input->post('submit')) {
			$data=array();
			$data['faculty_id']=$this->input->post('foreignkey');
			$data['title']=$this->input->post('title');
			$data['link']=$this->input->post('link');
			$data['journal']=$this->input->post('journal');
			$data['issn']=$this->input->post('issn');
			$data['issue']=$this->input->post('issue');
			$data['year']=$this->input->post('year');
			$data['page_nos']=$this->input->post('page_nos');
			$data['impact_factor']=$this->input->post('impact_factor');
			$data['hec_category	']=$this->input->post('hec_category');
			
			$response=$this->publication_model->publicationcreate($data);
			if ($response==true) {
				echo '<script>alert("Your PUblications Add successfully");</script>';
			
				redirect('userdashboard','refresh');
			}
			else{
				echo" insertion failed ";
			}
		}

	}
	public function publication_update($id)
	{
		$data['user']=$this->publication_model->publication_set($id);
		$this->load->library('form_validation');
		$this->form_validation->set_rules('journal','journal','trim|required');
		$this->form_validation->set_rules('title','title','trim|required');
		$this->form_validation->set_rules('link','link','trim|required');
		$this->form_validation->set_rules('issn', 'issn', 'trim|required');
		$this->form_validation->set_rules('year', 'year', 'trim|required');
		$this->form_validation->set_rules('issue', 'issue', 'trim|required');
		$this->form_validation->set_rules('page_nos', 'page_nos', 'trim|required');
		$this->form_validation->set_rules('impact_factor', 'impact_factor', 'trim|required');
		$this->form_validation->set_rules('hec_category', 'hec_category', 'trim|required');
		if ($this->form_validation->run() === false) {

		        $this->load->view('frontend/edites/publications_edit',$data);
		}
		else{
			$this->publication_model->update_publication();
			// print_r($data); exit;
			redirect('userdashboard','refresh');
			
		}
		
	}
	public function deletepublication($id)
	{ 
		
		// $this->load->model('languages_model');
		$this->publication_model->delete_publications($id);
		echo "<script>alert('your Data Deleted successfully');</script>";
		
		redirect('userdashboard','refresh');
		
	}
					
			
 }



?>
