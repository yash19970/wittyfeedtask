<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Angulardata extends REST_Controller{
	public function index_get(){
		$this->load->view('index.html');

	}
	public function viewall_get(){
		$this->load->model('Angularmodel');
		$result = $this->Angularmodel->readall();
		$this->response($result);
	}
	public function insertall_post(){
		$postdata = file_get_contents("php://input");
		$request  = json_decode($postdata);
		$name = $request->name;
		$salary = $request->salary;
		$this->load->model('Angularmodel');
		$data = array('name'=>$name,'salary'=>$salary,'DOB'=>'1980-11-23T00','gender'=>'male');
		$query["response"] = $this->Angularmodel->insertalldata($data);
		// $this->response($query);
	}
}?>