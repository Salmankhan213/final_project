<?php
 class userdashboard_model extends CI_model{
	function getfaculty($id)
	{
					$this->db->select('faculty.*, departments.department_name');
    $this->db->from('faculty');
    $this->db->join('departments', 'departments.dep_id = faculty.department_id');
    $this->db->where('faculty.id', $id);
    $query = $this->db->get();
    return $query->row_array();
                   
 if ($query->num_rows()==1) 
 {
	     return $query->row_array();
                   }
            }
				// get all department for updating
				public function get_all_departments()
				{
					$query = $this->db->get('departments');
					return $query->result_array();
				}
 	public function get_data($user_id) {
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
   $this->db->where('faculty_id',$user_id);
  
   $query= $this->db->get();
   
		  return $query->result_array();
		  		
		 }
   public function get_skills($uid) 
      {
			$this->db->join('faculty','skills.faculty_id=faculty.id' );
	     $this->db->where('faculty_id', $uid);
          $query = $this->db->get('skills');
          return $query->result_array();
		
		 }
		 public function get_experience($uid)
		 {
				$this->db->join('faculty','faculty.id=experience.faculty_id');
				$this->db->where('faculty_id',$uid);
				$query=$this->db->get('experience');
				return $query->result_array();
		 }
		 public function get_publication($uid)
		 {
						$this->session->userdata('id');
						$this->db->join('faculty','faculty.id=publications.faculty_id' );
						$this->db->where('faculty_id',$uid);
				 		$query=$this->db->get('publications');
						return $query->result_array();
	 }
	 public function get_languages($uid)
	 {
		$this->session->userdata('id');
		$this->db->join('faculty','faculty.id=languages.faculty_id' );
		$this->db->where('faculty_id',$uid);
		 $query=$this->db->get('languages');
		return $query->result_array();
	 }
  }
 

?>
