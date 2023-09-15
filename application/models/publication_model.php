<?php
class publication_model extends CI_Model
{
    public function publicationcreate($publication)
    { 
     $this->db->insert('publications',$publication);
      return true;
    }
    function faculty(){
		$id=	$this->session->userdata('id');
			$this->db->where('id',$id);
      return $this->db->get('faculty');
         
    }
		public function publication_set($id)
		{
			$this->db->select()->from('publications');
			$this->db->where('p_id',$id);
		   $query = $this->db->get();
		   return $query->result_array();
		}
	public function update_publication()
		{
		  $data=array(
			'title'=>$this->input->post('title'),
			'link'=>$this->input->post('link'),
				'journal'=>$this->input->post('journal'),
				'issn'=>$this->input->post('issn'),
				'year'=>$this->input->post('year'),
				'issue'=>$this->input->post('issue'),
				'page_nos'=>$this->input->post('page_nos'),
				'impact_factor'=>$this->input->post('impact_factor'),
				'hec_category'=>$this->input->post('hec_category'),
			);
			$this->db->where('p_id',$this->input->post('p_id'));
			 
			$this->db->update('publications' ,$data);

			
		}	

		public function delete_publications($id)
									{
										$user= $this->db->where('p_id',$id);
										return $query=$this->db->delete('publications');
									}

								
}

?>
