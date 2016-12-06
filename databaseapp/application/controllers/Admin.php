<!--its in controller -->
<?php
class Admin extends CI_Controller
{
        public function index(){
            if(!$this->session->userdata('userid')){
            	return redirect('login');
            }
        }
        public function dashboard(){
        	if(!$this->session->userdata('userid')){
            	return redirect('login');
            }
        	$this->load->view('admin/dashboard');
        }
        public function insert_article(){
            $userid = $this->session->userdata('userid');
            $this->form_validation->set_rules('title','TITLE','required|alpha|max_length[28]');
        	$this->form_validation->set_rules('body','BODY','required|alpha');
        	if($this->form_validation->run()){
        		$title = $this->input->post('title');
        		$body = $this->input->post('body');
        		$data = array('title'=>$title,'body'=>$body,'userid'=>$userid);
                $this->load->model('titlemodel');
                $q = $this->titlemodel->insert_data($title,$body,$userid);
        		if($q){
        			return redirect('admin/dashboard');
        		}else{
        			echo "insert again";
        		}
        	}
        	else{
        		$this->load->view('admin/dashboard');
        	}
        }
        public function articles_list(){
            if(!$this->session->userdata('userid')){
                return redirect('login');
            }
            $this->load->view('admin/alldata');
        }
        public function profile(){
            $this->load->view('admin/updateprofile');
        }   
        public function deletearticle($id){
            $this->load->model('titlemodel');
            //$this->titlemodel->deletearticle($id);
        }     
}
?>
