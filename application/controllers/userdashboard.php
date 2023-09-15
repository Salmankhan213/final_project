<?php
defined('BASEPATH') OR EXIT('No Direct Script access allowed');
class userdashboard extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->logined_in();
		$this->load->model('userdashboard_model');
		// $this->load->view('userdashboard/sidebar');
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
							$user_id=$this->session->userdata('id');
	      
          	$data['data']=$this->userdashboard_model->getfaculty($user_id);
			  $user_id=$this->session->userdata('id');
			  $data['get_qual'] = $this->userdashboard_model->get_data($user_id);
			  $user_id=$this->session->userdata('id');
			  $data['user'] = $this->userdashboard_model->get_skills($user_id);
			  $data['user_data']=$this->userdashboard_model->get_experience($user_id);
			  $data['get_publication']=$this->userdashboard_model->get_publication($user_id);
			  $data['get_lag']=$this->userdashboard_model->get_languages($user_id);  
  $this->load->view('userdashboard/retriveuser',$data);

               
	  }
	
//          public function qualification_get()
//                                               {       
// 	$user_id= $this->session->userdata('id');
// 		   $data['get_qual'] = $this->userdashboard_model->get_data($user_id);
// 	$this->load->view('userdashboard/retriveuser', $data);
//  }
// //  public function skills_get()
//  {       
// $user_id= $this->session->userdata('id');
// $data['user'] = $this->userdashboard_model->get_skills($user_id);
// $this->load->view('userdashboard/retriveuser', $data);

// }
}
?>
