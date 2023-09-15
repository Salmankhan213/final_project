<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Moreinfo extends CI_Controller {

	public function index()
	{
	$pid= $this->input->get('pid');
	 $this->load->model('display_modal');
	$data['faculty_id'] = $this->display_modal->moreinfo($pid);
	$data['experience'] = $this->display_modal->experienceinfor($pid);
	$data['publication'] = $this->display_modal->infopublication($pid);
	$data['skills'] = $this->display_modal->infoskills($pid);
	// $this->load->view('frontend/include/header');
	$this->load->view('frontend/user/moreinfo',$data);

	// $this->load->view('moreinformation/publicationinfor',$publication);
	// $this->load->view('frontend/include/footer');
// $this->load->view('frontend/user/moreinfo' ,['data'=>$data,'skills'=>$what, 'publication'=>$publication]);
	}

}



/* End of file Controllername.php */

