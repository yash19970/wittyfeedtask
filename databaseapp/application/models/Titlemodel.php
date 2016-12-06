<?php  

class Titlemodel extends CI_Model
{
	public function insert_data($title,$body,$userid){
		$data = array('title'=>$title,'body'=>$body,'userid'=>$userid);
		$this->db->insert("Article",$data);
		return TRUE;
	}
	
}
?>