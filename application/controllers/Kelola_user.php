<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelola_user extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		check_session();
		$this->load->model('model_users');
	}
	
	public function index()
	{
		$data['record'] = $this->model_users->getall();
		$this->template->load('template','Kelola_user/kelola_user',$data);
	}

	public function add()
	{
		if(isset($_POST["submit"])){
			$this->model_users->add();
			redirect("kelola_user");
		}else{
		$this->template->load('template','kelola_user/add');	
		}
		
	}
	public function edit(){
		if(isset($_POST["submit"])){
			$this->model_users->edit();
			redirect("kelola_user");
		}else{
			$id = $this->uri->segment(3);
			$data["record"] = $this->model_users->getOne($id)->row_array();
			$this->template->load('template','kelola_user/edit', $data);	
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);
		$this->model_users->delete($id);
		redirect("kelola_user");
	}
}