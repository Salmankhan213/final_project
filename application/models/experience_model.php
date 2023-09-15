<?php
class experience_model extends CI_Model
{
    public function experiencecreate($experience)
    {
     $this->db->insert('experience',$experience);
      return true;
    }
    function faculty(){
			$id=$this->session->userdata('id');
			$this->db->where('id',$id);
      return $this->db->get('faculty');
         
    }
		public function get_experience($id)
		{
			$this->db->select('*')->from('experience');
			$this->db->where('e_id',$id);
		   $query = $this->db->get();
		   return $query->result_array();

		}
		public function update_experience()
		{
		  $data=array(
              'title'=> $this->input->post('title'),
							'organization'=>$this->input->post('organization'),
							'from'=>$this->input->post('fromdate'),
							'to'=>$this->input->post('todate'),
               'currently_working_here'=>$this->input->post('currently_working'),
							 'address'=>$this->input->post('address')
			);
			 $this->db->where('e_id', $this->input->post('e_id'));
	   $this->db->update('experience', $data);
	  
		}
		public function delete_experience($id)
									{ 
										$this->db->where('e_id',$id);
										return $query=$this->db->delete('experience');    
									}
		
}

?>
