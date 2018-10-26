<?php
date_default_timezone_set('Asia/jakarta');

class Model_surat_keluar extends ci_model
{
	function getall(){
		$this->db->order_by('waktu_input','DESC');
		return $this->db->get("surat_keluar");
	}

	function getJenisSurat(){
		return $this->db->get("jenis_surat");
	}
	function getSelectJenisSurat($id){
		return $this->db->get_where("jenis_surat", array("id_jenis_surat"=>$id));
	}
	function getMax(){
		$this->db->select_max('no_surat_keluar');
		return $this->db->get("surat_keluar");
	}

	function getProses($status){
		return $this->db->get_where("surat_keluar", array("status"=>$status));
	}

	function add(){
			$data = array(
				'id_user' 			=> $this->input->post("id_user"),
				'id_jenis_surat' 	=> $this->input->post("jenis_surat"),
				'no_surat_keluar' 	=> $this->input->post("no_surat_keluar"),
				'tgl_surat_keluar' 	=> $this->input->post("tgl_surat_keluar"),
				'perihal' 			=> $this->input->post("perihal"),
				'tujuan' 			=> $this->input->post("tujuan"),
				'isi_surat' 		=> $this->input->post("isi_surat"),
				'waktu_input'		=> date('Y-m-d H:i:s'),
				'status'			=> "selesai"
			);
			$this->db->insert("surat_keluar", $data);
		}

	
	function getOne($id){
		return $this->db->get_where("surat_keluar", array('id_surat_keluar'=>$id));
	}
		
	function edit(){
			$data = array(
				'id_user' 			=> $this->input->post("id_user"),
				'id_jenis_surat' 	=> $this->input->post("jenis_surat"),
				'no_surat_keluar' 	=> $this->input->post("no_surat_keluar"),
				'tgl_surat_keluar' 	=> $this->input->post("tgl_surat_keluar"),
				'perihal' 			=> $this->input->post("perihal"),
				'tujuan' 			=> $this->input->post("tujuan"),
				'isi_surat' 		=> $this->input->post("isi_surat"),
				'waktu_input'		=> date('Y-m-d H:i:s'),
				'status'			=> "selesai"
			);
			$this->db->where("id_surat_keluar",$this->input->post("id_surat_keluar"));
			$this->db->update("surat_keluar", $data);
	}

		function delete($id){
			return $this->db->delete("surat_keluar", array("id_surat_keluar" => $id));
		}
}
?>