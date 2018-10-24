<?php
date_default_timezone_set('Asia/jakarta');

class Model_surat_keluar extends ci_model
{
	function getall(){
		return $this->db->get("surat_keluar");
	}
	function getProses($status){
		return $this->db->get_where("surat_keluar", array("status"=>$status));
	}
	function add(){
			$data = array(
				'no_surat_keluar' => $this->input->post("no_surat_keluar"),
				'tgl_surat_keluar' => $this->input->post("tgl_surat_keluar"),
				'perihal' => $this->input->post("perihal"),
				'tujuan' => $this->input->post("tujuan"),
				'isi_surat' => $this->input->post("isi_surat"),
			);
			$this->db->insert("surat_keluar", $data);
		}
	function simpan_draft()	{
		$data = array(
				'id_user' 		=> $this->input->post("inputBy"),
				'isi_surat' 	=> $this->input->post("isi_surat"),
				'status' 		=> "proses",
                'waktu_input'   =>  date('Y-m-d H:i:s'),

			);
			$this->db->insert("surat_keluar", $data);
		
	}
	function getOne($id){
		return $this->db->get_where("surat_keluar", array('id_surat_keluar'=>$id));
	}
		
		function edit(){
			$data = array(
				'no_surat_keluar' => $this->input->post("no_surat_keluar"),
				'tgl_surat_keluar' => $this->input->post("tgl_surat_keluar"),
				'asal' => $this->input->post("asal"),
				'perihal' => $this->input->post("perihal"),
				'tujuan' => $this->input->post("tujuan"),
				'scan_surat' => $this->input->post("scan_surat"),
				'waktu_input' => $this->input->post("waktu_input"),
			);
			$this->db->where("id_surat_keluar",$this->input->post("id_surat_keluar"));
			$this->db->update("surat_keluar", $data);
		}

		function delete($id){
			return $this->db->delete("surat_keluar", array("id_surat_keluar" => $id));
		}
}
?>