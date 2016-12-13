<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Angularmodel extends CI_Model{
	public function readall(){
		$q = $this->db->query("SELECT * FROM angular");
		if($q->num_rows() >0){
			return $q->result();
		}else{
			return FALSE;
		}	
	}
	public function insertalldata($data){
		$result = $this->db->insert('angular',$data);
		if($result) {
			$res = 'true';
			return $res;
		}else{
			$res = 'false';
			return $res;
		}
	}
}?>