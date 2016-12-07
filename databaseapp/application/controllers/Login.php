<!--its in controller -->
<?php
class Login extends CI_Controller
{
        public function index(){
        	if($this->session->userdata('userid')){
        		return redirect('admin/dashboard');
        	}
        	$this->load->view('public/admin_login');
        }
        public function admin_login(){
        	$this->form_validation->set_rules('username','User Name','required|alpha|max_length[18]');
        	$this->form_validation->set_rules('password','Password','required|alpha|required');
            if($this->form_validation->run()){
        		$username = $this->input->post('username');
        		$password = $this->input->post('password');
        		$data = array('username'=>$username,'password'=>$password);
        		$this->load->model('loginmodel');
                
                $userid = $this->loginmodel->validate_login($username,$password);
                if($userid){
                    $this->session->set_userdata('userid',$userid);
        			return redirect('admin/dashboard');
        		}else{
        			$this->session->set_flashdata('login_failed','Invalid Username/password');
        			return redirect('login');
        		}
        	}
        	else{
        		$this->load->view('public/admin_login');
        	}

        }
        public function logout(){
        	$this->session->unset_userdata('userid');
        	return redirect('login');
        }
        public function updateinfo(){
            $userid = $this->session->userdata('userid');
            $this->form_validation->set_rules('username','User Name','required|alpha|max_length[18]');
            $this->form_validation->set_rules('password','Password','required|alpha|required');
            if($this->form_validation->run()){
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $data = array('username'=>$username,'password'=>$password);
                $this->load->model('loginmodel');
                $userid = $this->loginmodel->updateinfo($username,$password,$userid);
                if($userid){
                    return redirect('admin/dashboard');
                }else{
                    return redirect('login');
                }
            } 
        }
        public function deleteprofile(){
            $userid = $this->session->userdata('userid');
            $this->load->model('loginmodel');
            $q =$this->loginmodel->deletepro($userid);
            if($q){
                $this->session->unset_userdata('userid');
                return redirect('login');
            }
        }
      
}
?>
