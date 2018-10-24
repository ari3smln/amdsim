<?php

class Model_ekspedisi extends ci_model
{
	function getall(){
		return $this->db->get("ekspedisi");
	}
	
	function add(){
			$data = array(
				'nama_penerima' => $this->input->post("nama_penerima"),
				'tgl_terima' => $this->input->post("tgl_terima"),
			);
			$this->db->insert("ekspedisi", $data);
		}
		
		function getOne($id){
			return $this->db->get_where("ekspedisi", array('id_ekspedisi'=>$id));
		}
		
		function edit(){
			$data = array(
				'nama_penerima' => $this->input->post("nama_penerima"),
				'tgl_terima' => $this->input->post("tgl_terima"),
			);
			$this->db->where("id_ekspedisi",$this->input->post("id_ekspedisi"));
			$this->db->update("ekspedisi", $data);
		}

		function delete($id){
			return $this->db->delete("ekspedisi", array("id_ekspedisi" => $id));
		}
}
?>