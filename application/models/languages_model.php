<?php

 class languages_model extends CI_model
{
	public function languagecreate($data)
	{
		return	$this->db->insert('languages',$data);
	 
	}
	public function faculty()
							{
								$id=$this->session->userdata('id');
								$this->db->where('id', $id);
								
							return $this->db->get('faculty');
							}
							
							public function get_language($id)
							{
								$query = $this->db->get_where('languages', array('l_id' => $id));
								return $query->result_array();
							}
							public function update_language($id,$lag)
							{
								$data = array(
									'description' =>$lag
									
								);
								
								$this->db->where('l_id', $id);
								$this->db->update('languages', $data);
								
							}
							
							
							public function delete_languages($id)
							{ 
								$this->db->where('l_id', $id);
								$query = $this->db->delete('languages');
								return $query;
							}
						}							

?> 
