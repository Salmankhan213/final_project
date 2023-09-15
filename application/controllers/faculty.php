 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Faculty extends CI_controller{
	 public function __construct()
	 {
		parent :: __construct();
	$this->load->library('session');
		$this->logined_in();
	$this->load->model('user_model');
	$this->load->library('upload');
	


	 }
	 private function logined_in()
	 {
		 if(! $this->session->userdata('authanticated'))
		 {
			 
			 redirect('login');
			 
		 }}
           public function create()
{	/*load registration view form*/
	/*Check submit button */
	$this->load->view('frontend/user/faculty');
 	if($this->input->post('submit'))
 	{	
		$config['upload_path'] = 'images';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 102400; // 1MB
        $config['file_name'] = 'profile_picture'; // unique file name
        $this->upload->initialize( $config);

        if ($this->upload->do_upload('profile_picture')) {
          $img=$this->upload->data();
		  $filename=$img['file_name'];
        } else {
            $error = $this->upload->display_errors();
            echo $error;
            return;
        }
$data=array();
	$data['first_name']=$this->input->post('first_name');
 		$data['last_name']=$this->input->post('last_name');

	$data['email']=$this->input->post('email');
	 
$data['password']=$this->input->post('password');
$data['profile_picture']= $filename;
		 $data['country']=$this->input->post('country');
 		$data['state']=$this->input->post('Provinces');
		 $data['city']=$this->input->post('city');
		 $data['date_birth']=$this->input->post('birthday');
		 $data['department']=$this->input->post('department');
		 $data['designation']=$this->input->post('designation');
		 $data['phone_no']=$this->input->post('phone_number');
		 $data['faculty_role']=$this->input->post('faculty_role');
$response=$this->user_model->create($data);
if($response==true){
			echo '<script>alert("Your Basic information Add successfully");</script>';
			
			redirect('userdashboard','refresh');
			
 				
 		} else{
 				echo "Insert error !";
 		}
		
	
	  }}
	 
	  public function update()
         {   $user_id=$this->session->userdata('id');
		 $data['user']=$this->user_model->get_user($user_id);
		 $data['departments']=$this->user_model->get_all_departments();
			$config['upload_path'] = 'images';// Set your upload directory path
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = 102400; // 1MB
			$config['file_name'] = 'profile_picture';

			$this->upload->initialize( $config);
			$data['error'] = "";
			if (!$this->upload->do_upload('profile_picture')) {
				// Handle the image upload error
				if (isset($_FILES['profile_picture'])) {
				$error_data['error'] =$this->upload->display_errors();
				
				}
				 $this->load->view('frontend/edites/facultyedit',$data);	
			} else {
				// Get the uploaded image data and update the profile_picture column in the database
				$img=$this->upload->data();
				
				$filename=$img['file_name'];
				$user_data = array(
					'title_fa' => $this->input->post('title'),
					'first_name' => $this->input->post('first_name'),
					'last_name' => $this->input->post('last_name'),
					'email' => $this->input->post('email'),
					'password' => $this->input->post('password'),
					'profile_picture'=>$filename,
					'country' => $this->input->post('country'),
					'state' => $this->input->post('Provinces'),
					'city' => $this->input->post('city'),
					'date_birth' => $this->input->post('birthday'),
					// 'designation'=> $this->input->post('designation'),
					'designation'=> $this->input->post('designation'),
					'phone_no' => $this->input->post('phone_number')
					
				);
				
		//  $data=$this->user_model->get_user($user_id);	
		// 		if($data['profile_picture'] && file_exists('images'.$data['profile_picture'])){
		// 			unlink('images/'.$data['profile_picture']);
		// 	}
		$department_id = $this->input->post('department_id');

		// Check if a department was selected
		if ($department_id) {
			$user_data['department_id'] = $department_id;
		}
			
				$this->user_model->update_user($user_data);
				
				redirect('userdashboard','refresh');
				
			}

	
	
}
	public function deletefaculty($id)
	{ 
		$this->load->model('user_model');
		$this->user_model->delete_faculty($id);
		
		// $this->session->set_flashdata('massage', 'vadelelue');
		echo "<script>alert('your Data Deleted successfully');</script>";
		
		redirect('userdashboard','refresh');
		
	}
	// down is admin code 

	public function admin_create()
	{	/*load registration view form*/
		/*Check submit button */
		
		$this->load->library('form_validation');
		$this->load->model('user_model');
		$data['department']=$this->user_model->get_all_departments();
		
			/* Set validation rules */
			$this->form_validation->set_rules('first_name', 'first_name', 'required|alpha');
			$this->form_validation->set_rules('last_name', 'last_name', 'required|alpha');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[faculty.email]');
	$this->form_validation->set_rules('password', 'password', 'required');
	$this->form_validation->set_rules('faculty_role', 'faculty_role', 'required');
			/* Run form validation */
			if ($this->form_validation->run() === FALSE)
			{    
				$this->load->view('admin/admin_user/faculty',$data);
				
				}
				else{
					$data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'department_id' => $this->input->post('department'),
			'faculty_role' => $this->input->post('faculty_role')
		);
			$response = $this->user_model->admin_create($data);
			
			redirect('admindashboard','refresh');
			
				}
			} 

		  public function admin_faculty_update($id)
		 {    
			   $data['user'] = $this->user_model->admin_get_user($id);
			// $this->load->view('frontend/edites/facultyedit', $data);
			$data['departments'] = $this->user_model->get_all_departments();
			  $this->load->library('form_validation');
			  $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|alpha');
			  $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|alpha');
			  $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			  $this->form_validation->set_rules('password', 'Password', 'trim|required');
			
			//   $this->form_validation->set_rules('department_name','department','trim|required');
			  $this->form_validation->set_rules('department_id', 'Department', 'trim|required');

			  $this->form_validation->set_rules('role','faculty_role','trim|requred');
			 
			  if ( $this->form_validation->run() === false)
			  {
				  $this->load->view('admin/admin_edit/facultyedit',$data);
			 }
			  else
			  {
				  $this->user_model->admin_update_user();
				  redirect('admindashboard');
			  }
		  }
		  
		
		public function admin_deletefaculty($id)
		{ 
			$this->load->model('user_model');
			$this->user_model->admin_delete_faculty($id);
			
			// $this->session->set_flashdata('massage', 'vadelelue');
			echo "<script>alert('your Data Deleted successfully');</script>";
			
			redirect('admindashboard','refresh');
			
		}


	}  ?>



<!-- -->
