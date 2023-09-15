<?php
 class Skills extends CI_Controller{
     function __construct()
	{ parent ::__construct();
		 $this->logined_in();
			$this->load->model('skill_model');
	}
	private function logined_in()
	{
	   if(! $this->session->userdata('authanticated'))
		{
			
			redirect('login');
		} 
	}

public function index()
			        { 
		        $data['faculty'] = $this->skill_model->faculty('id');
	          $this->load->view('frontend/user/skill', $data);
	
	if ($this->input->post('submit')) {
		
		$data=array();
		
		
			$data['title']=$this->input->post('title');
			$data['description']=$this->input->post('description');
			$data['faculty_id'] = $this->input->post('skillfaculty');
			$data['level_of_skill'] = $this->input->post('level_of_skill');
			$response=$this->skill_model->skillcreate($data);
       if ($response==true) {
		echo '<script>alert("Your Skills Add successfully");</script>';
			
		redirect('userdashboard','refresh');
	   }
	   else{
		   echo"insert failed";
	   }
	}	
		
	
}	 
     public function update_skill($id)
				{
			$data['user']=$this->skill_model->get_skills($id);
			$this->load->library('form_validation');
			$this->form_validation->set_rules('title', 'title', 'trim|required');
			$this->form_validation->set_rules('description','description','trim|required');
			$this->form_validation->set_rules('level_of_skills','level_of_skill','trim|required');
			if ($this->form_validation->run()===false)
				                                     {
				$this->load->view('frontend/edites/skilledit',$data);
			      }
			else{
				$this->skill_model->update_skills();
				
				   redirect('userdashboard','refresh');
									
			         }
						}

public function deleteskill($id)
{ 
	
		// $this->load->model('skills');
		$this->skill_model->delete_skill($id);
		
		// $this->session->set_flashdata('massage', 'vadelelue');
		echo "<script>alert('your Data Deleted successfully');</script>";
		
		redirect('userdashboard','refresh');
		
	}
	
	// down admin dashboard codeing
	
public function admin_insert_skills()
{ 
$data['faculty'] = $this->skill_model->admin_faculty('id');
$this->load->view('admin/admin_user/skill', $data);

if ($this->input->post('submit')) {

$data=array();


$data['title']=$this->input->post('title');
$data['description']=$this->input->post('description');
$data['faculty_id'] = $this->input->post('skillfaculty');
$response=$this->skill_model->skillcreate($data);
if ($response==true) {
echo '<script>alert("Your Skills Add successfully");</script>';

redirect('admindashboard','refresh');
}
else{
echo"insert failed";
}
}	


}	 
public function update_admin_skill($id)
{
$data['user']=$this->skill_model->get_admin_skills($id);
$this->load->library('form_validation');
$this->form_validation->set_rules('title', 'title', 'trim|required');
$this->form_validation->set_rules('description','description','trim|required');

if ($this->form_validation->run()===false)
								 {
$this->load->view('admin/admin_edit/skilledit',$data);
}
else{
$this->skill_model->update_admin_skills();

redirect('admindashboard','refresh');
				
 }
	}

public function delete_admin_skill($id)
{ 

// $this->load->model('skills');
$this->skill_model->delete_admin_skill($id);

// $this->session->set_flashdata('massage', 'vadelelue');
echo "<script>alert('your Data Deleted successfully');</script>";

redirect('admindashboard','refresh');

}

}

?>
