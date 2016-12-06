<?php 
include('public_header.php');
?>

  <?php echo form_open('login/admin_login',['class'=>'form-horizontal']);?>
 	 <fieldset>
    <legend>Admin Login</legend>
    <div class="alert alert-dismissible alert-danger">
    <?php if($this->session->set_flashdata('login_failed')){
   		$this->session->set_flashdata('login_failed','Invalid Username/password');
    }
    ?>
	</div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
      	<?php echo form_input(['name' => 'username','class' => 'form-control','placeholder' => 'username','id' => 'inputEmail','value'=>set_value('username')]);?>
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
      	<?php echo form_password(['name' => 'password','class' => 'form-control','placeholder' => 'password','id' => 'inputEmail']);?>      
      </div>
    </div>
     <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
      <?php echo form_reset(['name'=>'reset','value'=>'Reset']);?>
    <?php echo form_submit(['name'=>'submit' ,'value'=> 'login']);?>
      </div>
    </div>
  </fieldset>
</form>
