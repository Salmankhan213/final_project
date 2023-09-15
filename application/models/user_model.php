<?php
class User_model extends CI_Model{
	public function create($createarray)
	{ 
		$this->db->insert('faculty',$createarray);

		return true;
	}	
	public function get_all_departments()
{
    $query = $this->db->get('departments');
    return $query->result_array();
}
	public function get_user($id)
    {
		// $this->db->select('*')->from('faculty');
		// $this->db->where('id',$id);
		// $query = $this->db->get();
		// return $query->result_array();
		$this->db->select('faculty.*, departments.department_name');
    $this->db->from('faculty');
    $this->db->join('departments', 'departments.dep_id = faculty.department_id');
    $this->db->where('faculty.id', $id);
    $query = $this->db->get();
    return $query->result_array();
    }

    public function update_user($user_data)
    {
        
        $this->db->where('id', $this->input->post('f_id'));
        $this->db->update('faculty', $user_data);
		
		
    }
public function delete_faculty($id)
{
        $user= $this->db->where('id',$id);
		
       $this->db->delete('faculty',$user);
}
 
// admin   side when call admin 
public function admin_create($createarray)
	{ 
		$this->db->insert('faculty',$createarray);

		return true;
	}
	public function admin_get_user($id)
    {
		$this->db->select('faculty.*, departments.department_name');
    $this->db->from('faculty');
    $this->db->join('departments', 'departments.dep_id = faculty.department_id');
    $this->db->where('faculty.id', $id);
    $query = $this->db->get();
    return $query->row_array();
    }
				// get all department for updating

				// end of the get all department 
    public function admin_update_user()
    { $id=$this->input->post('f_id');
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
			'faculty_role'=> $this->input->post('faculty_role')
        );
		$department_id = $this->input->post('department_id');

		// Check if a department was selected
		if ($department_id) {
			$data['department_id'] = $department_id;
		}
        $this->db->where('id',$id );
        $this->db->update('faculty', $data);
		
    }
public function admin_delete_faculty($id)
{
        $user= $this->db->where('id',$id);
		
       $this->db->delete('faculty',$user);
} 
 
}
?>
