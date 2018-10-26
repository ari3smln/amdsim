<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class draft extends CI_Controller {

	public function __construct(){
		parent:: __construct();
        // $this->output->enable_profiler(TRUE);
		
		check_session();
		$this->load->model('model_draft');
	}
	
	public function index()
	{
		$data['record'] = $this->model_draft->getProses('proses');
		$this->template->load('template','draft/draft',$data);
	}

	public function add()
	{
		if(isset($_POST["submit"])){
			$this->model_draft->add();
            $this->session->set_flashdata('sukses','data berhasil di tambah');

			redirect("draft");
		}else{
		$this->template->load('template','draft/add');	
		}
		
	}
	public function edit(){
		if(isset($_POST["submit"])){
			$this->model_draft->edit();
            $this->session->set_flashdata('sukses','Draft telah selesai di proses, Silahkan Kunjungi Halaman Surat Keluar');

			redirect("draft");
		}else{
			
			$id = $this->uri->segment(3);
			$data["record"] = $this->model_draft->getOne($id)->row_array();
			$this->template->load('template','draft/edit', $data);	
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);
		$this->model_draft->delete($id);
		redirect("draft");
	}
	
	
}