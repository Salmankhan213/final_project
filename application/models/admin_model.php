<?php
class admin_model extends  CI_Model
{
	public function adminlogin($username, $password) 
	{          
			$this->db->where('email', $username);
			$this->db->where('password', ($password));
			$query = $this->db->get('users');
			if ($query->num_rows()==1) {
			 return $query->row();
			
			} else {
				return FALSE;
			}
		}
		function search($keyword,$faculty_id)
		{ 
			if($keyword !=""){
				$this->db->like('first_name',$keyword);
			}
			if($faculty_id !="")
			{
			
				$this->db->where('id',$faculty_id);
	}
      $query  = $this->db->get('faculty');
         return $query->result_array();
		}
		
		function getfaculty($department_id)
		{  $this->db->select('faculty.*,departments.department_name');
			// $this->db->where('department_id', $department_id);
			$this->db->join('departments', 'departments.dep_id = faculty.department_id');
			$query = $this->db->get('faculty');
			return $query->result_array();
		}
		
			public function get_data() {
				// 	$id=$this->session->userdata('id');
				// 	$this->db->select('qualification.id, faculty.first_name,  faculty.last_name as faculty_name,qualification.*');
				//  $this->db->from('qualification');
				//  $this->db->where('id',$id); 
					//	 return $query->result();
				// upper code for admin dashbaord    
				// 	   $query = $this->db->get(); 
				// $this->session->userdata('id');
				 $this->db->select ('faculty.*,qualification.id as q_id,qualification.level_of_education as level_of_education,qualification.address as
				  address,qualification.from_date as from_date,qualification.to_date as to_date')->from('qualification');
				 $this->db->join('faculty','faculty.id=qualification.faculty_id','left');
				//  $this->db->where('faculty_id',$user_id);
				
				 $query= $this->db->get();
				 
						return $query->result_array();
							  
					 }
			   public function get_skills() 
				  {
					$this->db->select('*')->from('skills');
						$this->db->join('faculty','skills.faculty_id=faculty.id', 'left');
					//  $this->db->where('faculty_id', $uid);
					  $query = $this->db->get();
					  return $query->result_array();
					
					 }
					 public function get_experience()
					 {
							$this->db->join('faculty','faculty.id=experience.faculty_id');
						
							$query=$this->db->get('experience');
							return $query->result_array();
					 }
					 public function get_publication()
					 {
									$this->session->userdata('id');
									$this->db->join('faculty','faculty.id=publications.faculty_id' );
									
									 $query=$this->db->get('publications');
									return $query->result_array();
				 }
				 public function get_languages()
				 {
					$this->session->userdata('id');
					$this->db->join('faculty','faculty.id=languages.faculty_id' );
					 $query=$this->db->get('languages');
					return $query->result_array();
				 }

				 public function insert_admin($data)
				 {
					 return $this->db->insert('users', $data);
				 }
// admin updating
					public function admin_get($id)
					                               {
						$this->db->select('*')->from('users');
							$this->db->where('id',$id);
								$query=$this->db->get();
						return	$query->result_array();
					}
					public function admin_update(){
					$data=array(
						'name'=> $this->input->post('name'),
									  'email'=>$this->input->post('email'),
									  'password'=>$this->input->post('password'),
					  );
					   $this->db->where('id', $this->input->post('id'));
				 $this->db->update('users', $data);
				
				  }
				  public function delete_admin($id)
											  { 
												  $this->db->where('id',$id);
												  return $query=$this->db->delete('users');    
											  }

}

?>
