<?php  

class Titlemodel extends CI_Model
{
	public function insert_data($title,$body,$userid){
		$data = array('title'=>$title,'body'=>$body,'userid'=>$userid);
		$this->db->insert("Article",$data);
		return TRUE;
	}
	public function select_articles($userid){
		$q = $this->db->query("SELECT * FROM Article WHERE userid = '$userid'");
		$res = $q->result_array();
		print_r($res);
		// $par_res = $q->result_array();
		
		// foreach ($par_res as $nothing) {
		// 	$result[] = $nothing;
		// }
		// print_r($result);
		 // $this->response($res);
		// return $res;
		// if ($q->num_rows() > 0) 
		// {
  //   		foreach ($q->result() as $row) 
  //   		{
  //      			 $data[] = $row;
  //   		}
  //   		// print_r($data);
  //   		return $data;
		// }
	}
	
}
?>