<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_keluar extends CI_Controller {

	public function __construct(){
		parent:: __construct();
        // $this->output->enable_profiler(TRUE);

		check_session();
		$this->load->model('model_surat_keluar');
	}
	
	public function index()
	{
		$data['record'] = $this->model_surat_keluar->getall();
		$this->template->load('template','surat_keluar/surat_keluar',$data);
	}

	public function add()
	{
		if(isset($_POST["submit"])){
			$this->model_surat_keluar->add();
            $this->session->set_flashdata('sukses','data berhasil di tambah');
			redirect("surat_keluar/index");

		}else{
			//membuat kode otomatis
				$idMax = $this->model_surat_keluar->getMax()->row_array();
				$kode = substr($idMax["no_surat_keluar"], 0, 3)+1;
				if($kode<10){
					$data["no_urut"] = "00".$kode;
				}else{
					$data["no_urut"] = "0".$kode;
				}
			$data['record'] = $this->model_surat_keluar->getJenisSurat()->result();

			$this->template->load('template','surat_keluar/add',$data);	
		}
		
	}

	public function selectJenis(){
		
				$idJenis = $this->input->post("jenis_surat");
				$data  = $this->model_surat_keluar->getSelectJenisSurat($idJenis)->row_array();
				$idMax = $this->model_surat_keluar->getMax()->row_array();
				$id_surat = $this->input->post("id_surat");
				if($id_surat==""){
					//membuat kode otomatis
					
					$kode = substr($idMax["no_surat_keluar"], 0, 3)+1;
					if($kode<10){
						$no_urut = "00".$kode;
					}else{
						$no_urut = "0".$kode;
					}
				}else{
					$q = $this->model_surat_keluar->getOne($id_surat)->row_array();

					if($q["no_surat_keluar"]==""){
						$kode = substr($idMax["no_surat_keluar"], 0, 3)+1;	
						if($kode<10){
						$no_urut = "00".$kode;
						}else{
							$no_urut = "0".$kode;
						}
					}else{
						$no_urut = substr($q["no_surat_keluar"], 0, 3);
					}
					
				}
				$bln = getRomawi(date("m"));
				$thn = date("Y");

				$param = $no_urut."/".$data["kd_surat"]."/SMK/YPA/".$bln."/".$thn;
				
				echo json_encode($param);
		
	}
	public function edit(){
		if(isset($_POST["submit"])){
			$this->model_surat_keluar->edit();
			redirect("surat_keluar");
		}else{
			$id = $this->uri->segment(3);
			//membuat kode otomatis
				$idMax = $this->model_surat_keluar->getMax()->row_array();
				$kode = substr($idMax["no_surat_keluar"], 0, 3)+1;
				if($kode<10){
					$data["no_urut"] = "00".$kode;
				}else{
					$data["no_urut"] = "0".$kode;
				}
			$bln = getRomawi(date("m"));
			$thn = date("Y");

			$data['record'] = $this->model_surat_keluar->getJenisSurat()->result();
			$data["edit"] 	= $this->model_surat_keluar->getOne($id)->row_array();
			$data["param"] 	= $data["no_urut"]."/A/SMK/YPA/".$bln."/".$thn;

			$this->template->load('template','surat_keluar/edit', $data);	
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);
		$this->model_surat_keluar->delete($id);
		redirect("surat_keluar");
	}
	
	public function cetak(){
		$id = $this->uri->segment(3);
		$data["record"] 	= $this->model_surat_keluar->getOne($id)->row_array();
		$this->load->view('surat_keluar/cetak', $data);	
	}
	
}