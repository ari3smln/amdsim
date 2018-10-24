<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ekspedisi extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		check_session();
		$this->load->model('model_ekspedisi');
	}
	
	public function index()
	{
		$data['record'] = $this->model_ekspedisi->getall();
		$this->template->load('template','ekspedisi/ekspedisi',$data);
	}

	public function add()
	{
		if(isset($_POST["submit"])){
			$this->model_ekspedisi->add();
			redirect("ekspedisi");
		}else{
		$this->template->load('template','ekspedisi/add');	
		}
		
	}
	public function edit(){
		if(isset($_POST["submit"])){
			$this->model_ekspedisi->edit();
			redirect("ekspedisi");
		}else{
			$id = $this->uri->segment(3);
			$data["record"] = $this->model_ekspedisi->getOne($id)->row_array();
			$this->template->load('template','ekspedisi/edit', $data);	
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);
		$this->model_ekspedisi->delete($id);
		redirect("ekspedisi");
	}
}