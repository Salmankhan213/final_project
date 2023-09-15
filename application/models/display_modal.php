<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class display_modal extends CI_Model {

	// public function faculty_display()
	// {
	// 	 $this->db->select('*')->from('faculty')
	// ->join('qualification','faculty.id=qualification.faculty_id','left')->group_by('faculty_id')
	// ->get()->result_array();
		
	// }

	public function get_all_members()
	{
		$query=$this->db-get('faculty');
	
		return $query->result_array();
				
	}
	   public function moreinfo($pid)
	   {
                    
	   
		$this->db->select('*')->from('qualification')
		->join('faculty','qualification.faculty_id=faculty.id');
	
			$this->db->where('faculty_id', $pid);
			 $query = $this->db->get();
			 return $query->result_array();
			
  }
  public function infoskills($pid)
  {
	$this->db->select('*')->from('faculty')
	->join('skills','faculty.id=skills.faculty_id');
// $this->db->join('faculty','skills.faculty_id=skill.id');
		$this->db->where('faculty_id', $pid);
		 $query = $this->db->get();
		 return $query->result_array();
  }
  public function infopublication($pid)
  {
	$this->db->select('*')->from(' publications')
	->join('faculty','publications.faculty_id=faculty.id');
// $this->db->join('faculty','skills.faculty_id=skill.id');
		$this->db->where('faculty_id', $pid);
		 $query = $this->db->get();
		 return $query->result_array();
  }
 public function experienceinfor($pid)
 {
	$this->db->select('*')->from('experience')
	->join('faculty','experience.faculty_id = faculty.id');
	$this->db->where('faculty_id', $pid);
	$query=$this->db->get();
	return $query->result_array();
 }
 // for get department in header (frontend)
function getalldepartmentart() { 
	
	$this->db->where('cat_of_department','art');
	$res=$this->db->get('departments');
return $res->result();
}
function getalldepartmentscience() {
	$this->db->where('cat_of_department','science');
	$res=$this->db->get('departments');
return $res->result();
}
public function  getalldepartment($dep_id)  {
	$this->db->select('faculty.*,departments.department_name');
    $this->db->from('departments');
    $this->db->join('faculty', 'faculty.department_id = departments.dep_id');
    $this->db->where('faculty.department_id', $dep_id);
	$this->db->order_by("CASE WHEN faculty.faculty_role = 'Head of Department' THEN 0 ELSE 1 END", 'ASC');
    $res = $this->db->get();
    return $res->result_array();
}
}

/* End of file disply.php */



?>
