<?php 
$userid = $this->session->userdata('userid');
$q = $this->db->get_where('Article',array('id'=>$userid));
$q = $this->db->where(['id' => $userid])
				  ->get("Article");
foreach ($q->result() as $row ){
	echo $row->title; echo "&nbsp"; echo"Body: "; 
	echo $row->body;  
	$id = $row->id;
	echo  "   ".anchor('admin/deletearticle','Delete Article',$id);
}
?>