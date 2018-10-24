<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_masuk extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		check_session();
		$this->load->model('model_surat_masuk');
	}
	
	public function index()
	{
		$data['record'] = $this->model_surat_masuk->getall();
		$this->template->load('template','Surat_masuk/surat_masuk',$data);
	}

	public function add()
	{
		if(isset($_POST["submit"])){
			$this->model_surat_masuk->add();
			redirect("surat_masuk");
		}else{
		$this->template->load('template','surat_masuk/add');	
		}
		
	}
	public function edit(){
		if(isset($_POST["submit"])){
			$this->model_surat_masuk->edit();
			redirect("surat_masuk");
		}else{
			$id = $this->uri->segment(3);
			$data["record"] = $this->model_surat_masuk->getOne($id)->row_array();
			$this->template->load('template','surat_masuk/edit', $data);	
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);
		$this->model_surat_masuk->delete($id);
		redirect("surat_masuk");
	}
}