<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_keluar extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		check_session();
		$this->load->model('model_surat_keluar');
	}
	
	public function index()
	{
		$data['record'] = $this->model_surat_keluar->getall();
		$this->template->load('template','Surat_keluar/surat_keluar',$data);
	}

	public function add()
	{
		if(isset($_POST["submit"])){
			$this->model_surat_keluar->add();
			redirect("surat_keluar");
		}else{
		$this->template->load('template','surat_keluar/add');	
		}
		
	}
	public function edit(){
		if(isset($_POST["submit"])){
			$this->model_surat_keluar->edit();
			redirect("surat_keluar");
		}else{
			$id = $this->uri->segment(3);
			$data["record"] = $this->model_surat_keluar->getOne($id)->row_array();
			$this->template->load('template','surat_keluar/edit', $data);	
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);
		$this->model_surat_keluar->delete($id);
		redirect("surat_keluar");
	}
	
	
}