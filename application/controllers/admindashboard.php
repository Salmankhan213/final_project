<?php

 

 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class admindashboard extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->logined_in();
		$this->load->model('admin_model');
		// $this->load->view('admin/admindashboard');
	}
	private function logined_in()
	{
		if(! $this->session->userdata('authanticated'))
		{
			redirect('admin');
		}
	}
	public function index()
	                       {
					$data['usersearch']=$this->admin_model->getfaculty('department_id');
					$this->load->view('admin/includes/header');
				$this->load->view('admin/dashboard', $data);
				
			}
			public function computer_science() 
{     	 
		
				$this->db->select('*') ->where('faculty.department', 'computer science');
			    $data['usersearch'] = $this->db->get('faculty')->result_array();
				$this->load->view('admin/includes/header');

				$this->load->view('admin/admin_user/departments',$data);
}
public function agriculture() 
{     	 
	
		$this->db->select('*')->where('faculty.department','agriculture');
		 $data['usersearch'] = $this->db->get('faculty')->result_array();
		 $this->load->view('admin/includes/header');
 $this->load->view('admin/admin_user/departments',$data);
}
public function english() 
{     	 
		
		$this->db->select('*')->where('faculty.department','english');
	$data['usersearch'] = $this->db->get('faculty')->result_array();
	$this->load->view('admin/includes/header');

	$this->load->view('admin/admin_user/departments',$data);
}
public function mangment_science() 
{     	 
		
   $this->db->select('*')->where('faculty.department','mangment science');
   
	$data['usersearch'] = $this->db->get('faculty')->result_array();
	$this->load->view('admin/includes/header');
     $this->load->view('admin/admin_user/departments',$data);
}
public function physics() 
{     	 
		
$this->db->select('*')->where('faculty.department','physics');
     $data['usersearch']=$this->db->get('faculty')->result_array();
	 $this->load->view('admin/includes/header');

	 $this->load->view('admin/admin_user/departments',$data);
}
public function geology() 
{     	 
		
		$this->db->select('*')->where('faculty.department', 'geology');
	
	$data['usersearch'] = $this->db->get('faculty')->result_array();
	$this->load->view('admin/includes/header');
     $this->load->view('admin/admin_user/departments',$data);
}
public function Chemistry() 
{     	 
	$this->db->select('*')->where('faculty.department', 'Chemistry');

$data['usersearch'] = $this->db->get('faculty')->result_array();
$this->load->view('admin/includes/header');

				$this->load->view('admin/admin_user/departments',$data);
}
	
 
 
 /* ADD NEW DEPARTMNETS FROM ADMIN SIDE */
 public function add_new_dep() {
	
	$this->form_validation->set_rules('department', 'department', 'trim|required');
	$this->form_validation->set_rules('cat_of_dep', 'cat_of_dep', 'trim|required');
	if($this->form_validation->run()== true){
		
		$data['department_name']=$this->input->post('department');
		$data['cat_of_department']=$this->input->post('cat_of_dep');
		$this->db->insert('departments',$data);
          echo "<script>alert('department Added Succefully');</script>";
	redirect('admindashboard','refresh');
	

	}
	else{
	$this->load->view('admin/admin_user/add_new_department');
 }
}
}
?>
