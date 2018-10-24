<?php

class Model_surat_masuk extends ci_model
{
	function getall(){
		return $this->db->get("surat_masuk");
	}
	
	function add(){
			$data = array(
				'no_surat_masuk' => $this->input->post("no_surat_masuk"),
				'tgl_surat_masuk' => $this->input->post("tgl_surat_masuk"),
				'asal' => $this->input->post("asal"),
				'perihal' => $this->input->post("perihal"),
				'tujuan' => $this->input->post("tujuan"),
				'scan_surat' => $this->input->post("scan_surat"),
				'waktu_input' => $this->input->post("waktu_input"),
			);
			$this->db->insert("surat_masuk", $data);
		}
		
		function getOne($id){
			return $this->db->get_where("surat_masuk", array('id_surat_masuk'=>$id));
		}
		
		function edit(){
			$data = array(
				'no_surat_masuk' => $this->input->post("no_surat_masuk"),
				'tgl_surat_masuk' => $this->input->post("tgl_surat_masuk"),
				'asal' => $this->input->post("asal"),
				'perihal' => $this->input->post("perihal"),
				'tujuan' => $this->input->post("tujuan"),
				'scan_surat' => $this->input->post("scan_surat"),
				'waktu_input' => $this->input->post("waktu_input"),
			);
			$this->db->where("id_surat_masuk",$this->input->post("id_surat_masuk"));
			$this->db->update("surat_masuk", $data);
		}

		function delete($id){
			return $this->db->delete("surat_masuk", array("id_surat_masuk" => $id));
		}
}
?>