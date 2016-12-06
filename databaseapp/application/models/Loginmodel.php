<?php  
class Loginmodel extends CI_Model{
	public function validate_login($username,$password){
		$q = $this->db->where(['uname' => $username,'password' =>$password])
				  ->get("Users");
	   if($q->num_rows()==1){
	   	return $q->row()->id;
	   }
	   else{
	   	return FALSE;
	   }
	}
	public function updateinfo($username,$password,$userid){
		$data = array('uname'=>$username,'password'=>$password,'id'=>$userid);
		$this->db->where(['id'=>$userid]);
		$this->db->update('Users',$data);
	}
	public function deletepro($userid){
		$this->db->delete('Users',array('id'=>$userid));
		return TRUE;
	}
}
?>