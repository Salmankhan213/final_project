
<?php
class Login_model extends CI_Model {

	public function login($username, $password) 
	{          
			$this->db->where('email', $username);
			$this->db->where('password', ($password));
			$query = $this->db->get('faculty');
			if ($query->num_rows()==1) {
			 return $query->row();
			
			} else {
				return FALSE;
			}
		}
	
	
}
?>
