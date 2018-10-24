<?php
date_default_timezone_set('Asia/jakarta');

class Model_draft extends ci_model
{
	function getall(){
		return $this->db->get("surat_keluar");
	}
	function getProses($status){
		return $this->db->get_where("surat_keluar", array("status"=>$status));
	}
	function add(){
			$data = array(
				'no_draft' => $this->input->post("no_draft"),
				'tgl_draft' => $this->input->post("tgl_draft"),
				'perihal' => $this->input->post("perihal"),
				'tujuan' => $this->input->post("tujuan"),
				'isi_surat' => $this->input->post("isi_surat"),
			);
			$this->db->insert("draft", $data);
		}
	function simpan_draft()	{
		$data = array(
				'id_user' 		=> $this->input->post("inputBy"),
				'isi_surat' 	=> $this->input->post("isi_surat"),
				'status' 		=> "proses",
                'waktu_input'   =>  date('Y-m-d H:i:s'),

			);
			$this->db->insert("draft", $data);
		
	}
	function getOne($id){
		return $this->db->get_where("draft", array('id_draft'=>$id));
	}
		
		function edit(){
			$data = array(
				'no_draft' => $this->input->post("no_draft"),
				'tgl_draft' => $this->input->post("tgl_draft"),
				'asal' => $this->input->post("asal"),
				'perihal' => $this->input->post("perihal"),
				'tujuan' => $this->input->post("tujuan"),
				'scan_surat' => $this->input->post("scan_surat"),
				'waktu_input' => $this->input->post("waktu_input"),
			);
			$this->db->where("id_draft",$this->input->post("id_draft"));
			$this->db->update("draft", $data);
		}

		function delete($id){
			return $this->db->delete("draft", array("id_draft" => $id));
		}
}
?>