<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('display_modal');
	}

	public function index()
{

	$data['departmentart'] = $this->display_modal->getalldepartmentart();
	$data['departmentscience'] = $this->display_modal->getalldepartmentscience();
	$this->load->view('frontend/user/header', $data);
	
// $this->load->view('frontend/user/header');
// $this->load->view('frontend/user/display',$data);
	// $this->load->view('frontend/include/footer');  
}
public function  getdepartment()  {
	
	 $dep_id=$this->input->get('dep_id');
	 $data['department'] = $this->display_modal->getalldepartment($dep_id);
	 $this->load->view('frontend/user/display', $data);
}


}
?>
