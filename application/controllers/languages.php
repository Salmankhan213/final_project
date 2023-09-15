
<!-- this controller used for publications table frontend -->
<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Languages extends CI_Controller{
	public function __construct(){
		parent :: __construct();
		  $this->logined_in();
		$this->load->model('languages_model');
}
private function logined_in()
{
   
	if(! $this->session->userdata('authanticated'))
	{
		
		redirect('login');
		
	}}
   public function index()
	{
		$data['faculty']=$this->languages_model->faculty();
		$this->load->view('frontend/user/languages',$data);
if ($this->input->post('submit')) {
			$data=array();
			$faculty_id=$this->input->post('languagekey');
			$description=$this->input->post('languages');
		  if (!empty($description)) {
    foreach ($description as $value) {
      $data = array(
		'faculty_id'=>$faculty_id,

        'description' => $value
      );
      $this->db->insert('languages', $data);
    } 	
		echo '<script>alert("Your  Languages Add successfully");</script>';
			
				redirect('userdashboard','refresh');

}
			else{
				echo" insertion failed  da sta kar nade ";
			}
		}

	}
	
		public function update_language($id)
{
    $this->load->model('languages_model');
    $data['data'] = $this->languages_model->get_language($id);

    // Check if the language exists
    if (!empty($data['data'])) {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('languages', 'Languages', 'required');

        if ($this->form_validation->run() === FALSE) {
            // Validation failed, load the edit view again with the data
            $this->load->view('frontend/edites/languages_edit', $data);
        } else {
            // Update the language
            $selected_languages = $this->input->post('languages');
          $data=  $this->languages_model->update_language($id, $selected_languages);
		  redirect('userdashboard');
        }
    } else {
        // Language not found, handle the error or redirect to an appropriate page
        redirect('languages/not_found');
    }
}



	public function deletelanguage($id)
						{ 
							
							$this->load->model('languages_model');
							$this->languages_model->delete_languages($id);
							
							// $this->session->set_flashdata('massage', 'vadelelue');
							echo "<script>alert('your Data Deleted successfully');</script>";
							
							redirect('userdashboard','refresh');
							
						}
 }



?>
