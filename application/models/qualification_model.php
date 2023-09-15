<?php
class qualification_model extends CI_Model{
	public function create($createarray)
	{
		$this->db->insert('qualification',$createarray);
		return true;
	}
	public function faculty()
	{ $id=$this->session->userdata('id');
		$this->db->where('id',$id);
		return $this->db->get('faculty');
	}
	public function get_qualification($user_id)
	                     {  
                      
							$this->db->select('*')->from('qualification');
							$this->db->where('id',$user_id);
						   $query = $this->db->get();
						   
						   return $query->result_array();	
								
						}

public function update_qualification()
{
	$data = array(
		'level_of_education' => $this->input->post('level_of_education'),
		'address' => $this->input->post('address'),
		'from_date' => $this->input->post('fromdate'),
		'to_date' => $this->input->post('todate')
	);
					// Update the qualifications for the currently logged in user
					$this->db->where('id', $this->input->post('q_id'));
					$this->db->update('qualification', $data);
}

	public function delete_qualification($id)
	{ 
		$user= $this->db->where('id',$id);
		return $query=$this->db->delete('qualification');
	}

	// admin side   any data about admin 
	public function admin_qualification_create($createarray)
	{
		$this->db->insert('qualification',$createarray);
		return true;
	}


	public function admin_get_faculty()
										{ 
										
										return $this->db->get('faculty');
									}
	public function admin_get_qualification($id)
	                     {   
                       $this->db->select('*')->from('qualification');
								 $this->db->where('id',$id);
								$query = $this->db->get();
								
								return $query->result_array();
								
						}

public function admin_update_qualification()
{
	$data = array(
		'level_of_education' => $this->input->post('level_of_education'),
		'address' => $this->input->post('address'),
		'from_date' => $this->input->post('fromdate'),
		'to_date' => $this->input->post('todate')
	);
					// Update the qualifications for the currently logged in user
					$this->db->where('id', $this->input->post('q_id'));
					$this->db->update('qualification', $data);
}

	public function admin_delete_qualification($id)
	{ 
		$user= $this->db->where('id',$id);
		return $query=$this->db->delete('qualification');
	}

 }
?>
