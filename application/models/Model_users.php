<?php

class Model_users extends ci_model
{
	function getall(){
		return $this->db->get("users");
	}
	
	function add(){
			$data = array(
				'username' => $this->input->post("username"),
				'nama_lengkap' => $this->input->post("nama_lengkap"),
				'password' => $this->input->post("password"),
				'jabatan' => $this->input->post("jabatan"),
			);
			$this->db->insert("kelola_user", $data);
		}
		
		function getOne($id){
			return $this->db->get_where("kelola_user", array('id_user'=>$id));
		}
		
		function edit(){
			$data = array(
				'username' => $this->input->post("username"),
				'nama_lengkap' => $this->input->post("nama_lengkap"),
				'password' => $this->input->post("password"),
				'jabatan' => $this->input->post("jabatan"),
			);
			$this->db->where("id_user",$this->input->post("id_user"));
			$this->db->update("kelola_user", $data);
		}

		function delete($id){
			return $this->db->delete("kelola_user", array("id_user" => $id));
		}
}
?>