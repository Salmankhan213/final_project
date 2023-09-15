<?php
defined('BASEPATH') OR exit('No direct script access allowed');


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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	
	 class admin extends CI_Controller {

		public function __construct()
									 {
			  parent::__construct();
			   $this->load->library('session');
			   $this->load->model('admin_model');
			  }
	
					  public function loginme()
											   {
							$this->load->view('admin/admin');
		   }
	
		 public function index() 
								{
					 $username = $this->input->post('email');
					$password = $this->input->post('password');
		$this->load->view('admin/admin');
			// Validate the user credentials
			// Example: check if the username and password match a record in the database
			$this->load->model('admin_model');
			$result = $this->admin_model->adminlogin($username, $password);
			if ($result) {
				// Store user data in the session
				$user_data = array(
					'id' => $result->id,
					'email' => $result->email,
					// 'first_name'=>$result->first_name;
					 'authanticated' => TRUE
				);
				$this->session->set_userdata($user_data);
				redirect('admindashboard');
			} else {
				
				$this->session->set_flashdata('error', 'Invalid Username or Password');
				// redirect('admin');
			}
		}
		public function logout()
		{
			$this->session->sess_destroy();
			$this->session->unset_userdata('email');
			$this->load->view('admin/dashboard');
			
		}
		public function add_admin()
		{
			// Validate the form data
			$this->load->library('form_validation'	);
			
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
			$this->form_validation->set_rules('password', 'Password', 'required');
	
			if ($this->form_validation->run() === false)
			{
				// If validation fails, show the form again with validation errors
				$this->load->view('admin/admin_user/admins');
			}
			else
			{
				// If validation passes, insert the data into the database
				$data = array(
					'name' => $this->input->post('name'),
					'email' => $this->input->post('email'),
					'password' => $this->input->post('password'),
					'role'=>'admin'
				);
	// admin insertion or add new admin
				$this->admin_model->insert_admin($data);
	
				// Redirect to a success page or show a success message
				redirect('admindashboard');
				echo "<script>alert('suss');</script>";
			}
		}
	//  retreive all admins  f
	
		public function admin_get()
		{
			$admin['admins']=$this->db->select('*')->from('users')
			->get()->result_object();
			$this->load->view('admin/admin_user/admins_select',$admin);
		}
		// updating of admins 
		public function admins_update($id)
		{
			$data['admin']=$this->admin_model->admin_get($id);
			$this->form_validation->set_rules('name','name','required');
			$this->form_validation->set_rules('email', 'email','required|valid_email');
			$this->form_validation->set_rules('password','password','required');
			if($this->form_validation->run()=== false){
				$this->load->view('admin/admin_edit/admin_edit',$data);
			}
			
				else{

					$this->admin_model->admin_update();
					echo "<script>alert('your Data Updated successfully');</script>";
		        	redirect('admindashboard','refresh');
			}
			}
			public function admin_delete($id)
	{ 
		$this->load->model('qualification_model');
		$this->admin_model->delete_admin($id);
		
		// $this->session->set_flashdata('massage', 'vadelelue');
		echo "<script>alert('your Data Deleted successfully');</script>";
		
		redirect('admindashboard','refresh');
		
	}
	
			
			}

