<?php
class Login extends CI_Controller {

    public function __construct()
                                 {
		  parent::__construct();
		   $this->load->library('session');
          }

                  public function loginme()
                                           {
                        $this->load->view('login/login');
       }

     public function auth() 
	                        {
                 $username = $this->input->post('email');
	        	$password = $this->input->post('password');
	
		// Validate the user credentials
		// Example: check if the username and password match a record in the database
		$this->load->model('Login_model');
		$result = $this->Login_model->login($username, $password);
		if ($result) {
			// Store user data in the session
			$user_data = array(
				'id' => $result->id,
				'email' => $result->email,
				// 'first_name'=>$result->first_name;
				 'authanticated' => TRUE
			);
			$this->session->set_userdata($user_data);
			redirect('userdashboard');
		} else {
			
			$this->session->set_flashdata('error', 'Invalid Username or Password');
			redirect('login');
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->unset_userdata('email');
		redirect('login','refresh');
		
	}

}
