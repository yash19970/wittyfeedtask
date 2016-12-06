<?= anchor('login/logout','Logout');?>

<?php echo form_open('admin/insert_article',['class'=>'form-horizontal']);?>

<?php echo form_input(['name' => 'title','class' => 'form-control','placeholder' => 'title','id' => 'inputEmail','value'=>set_value('title')]);
echo form_input(['name' => 'body','class' => 'form-control','placeholder' => 'body','id' => 'inputEmail','value'=>set_value('body')]);
 echo form_reset(['name'=>'reset','value'=>'Reset']);
 echo form_submit(['name'=>'submit' ,'value'=> 'Insert']);
/*Insertion done. Creation (C)*/
echo br(3);

echo anchor('admin/articles_list','Check Articles');
echo br(3);
echo anchor('admin/profile','Update Profile');
echo br(3);

echo anchor('admin/profile','Delete Article');


 ?>


