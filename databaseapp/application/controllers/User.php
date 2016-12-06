<!--its in controller -->
<?php

class User extends CI_Controller
{
    	
        public function index(){
        	$this->load->view('public/articles_list');
        }
      
}
?>
