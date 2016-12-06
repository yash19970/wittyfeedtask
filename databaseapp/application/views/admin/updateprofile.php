<?php 
$userid = $this->session->userdata('userid');
$q = $this->db->where(['id' => $userid])
				  ->get("Users");
echo form_open('login/updateinfo',['class'=>'form-horizontal']);

echo form_input(['name' => 'username','class' => 'form-control','placeholder' => 'title','id' => 'inputEmail','value'=>set_value('username')]);
echo form_input(['name' => 'password','class' => 'form-control','placeholder' => 'body','id' => 'inputEmail','value'=>set_value('password')]);
 echo form_reset(['name'=>'reset','value'=>'Reset']);
 echo form_submit(['name'=>'submit' ,'value'=> 'Insert']);

echo anchor('login/deleteprofile','Delete Profile');
			  
?>