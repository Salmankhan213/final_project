<?php
class skill_model extends CI_Model{
	public function skillcreate($createarray)
	{
		$this->db->insert('skills',$createarray);
		return true;
	}
	public function faculty()
	{ $id=$this->session->userdata('id');
		$this->db->where('id',$id);
		return $this->db->get('faculty');
	}
	
	public function get_skills($id)
	{
		$this->db->select('*')->from('skills');
		$this->db->where('s_id',$id);
	   $query = $this->db->get();
	   return $query->result_array();
	}
	public function update_skills()
	{
	   $data= array(
		'title'=>$this->input->post('title'),
		'description'=>$this->input->post('description'),
		'level_of_skill'=>$this->input->post('level_of_skills')
		
	   );
	   $this->db->where('s_id', $this->input->post('s_id'));
	   $this->db->update('skills', $data);
	}
	public function delete_skill($id)
	{ 
		 $this->db->where('s_id',$id);
		return $query=$this->db->delete('skills');
	}
	// down admin codeing
	// down admin codeing
	
	public function skill_admin_create($createarray)
	{
		$this->db->insert('skills',$createarray);
		return true;
	}
	public function admin_faculty()
	
	 {
		// $id=$this->session->userdata('id');
	// 	$this->db->where('id',$id);
		return $this->db->get('faculty');
	}
	
	public function get_admin_skills($id)
	{
		$this->db->select('*')->from('skills');
		$this->db->where('s_id',$id);
	   $query = $this->db->get();
	   return $query->result_array();
	}
	public function update_admin_skills()
	{
	   $data= array(
		'title'=>$this->input->post('title'),
		'description'=>$this->input->post('description')
	   );
	   $this->db->where('s_id', $this->input->post('s_id'));
	   $this->db->update('skills', $data);
	}
	public function delete_admin_skill($id)
	{ 
		 $this->db->where('s_id',$id);
		return $query=$this->db->delete('skills');
	}


}
?>
