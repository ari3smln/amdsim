<?php
date_default_timezone_set('Asia/jakarta');

class Model_draft extends ci_model
{
	
	function getProses($status){

		$this->db->select('a.waktu_input, a.isi_surat, a.status, a.id_surat_keluar ,  b.nama_lengkap');
        $this->db->from('surat_keluar a');
        $this->db->join('users b', 'a.id_user = b.id_user');
        $this->db->where('a.status',$status );
		$this->db->order_by('a.waktu_input','DESC');
        return $query = $this->db->get();

		// return $this->db->get_where("surat_keluar", array("status"=>$status));
	}
	
	function add()	{
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
		if($this->input->post("status")!=""){
			$param = $this->input->post("status");
		}else{
			$param = "proses";
		}
			$data = array(
				'id_user' 	=> $this->input->post("inputBy"),
				'isi_surat' => $this->input->post("isi_surat"),
				'status' 	=> $param,
                'waktu_input'   =>  date('Y-m-d H:i:s'),

			);
			$this->db->where("id_surat_keluar",$this->input->post("id_surat_keluar"));
			$this->db->update("surat_keluar", $data);
		}

		function delete($id){
			return $this->db->delete("surat_keluar", array("id_surat_keluar" => $id));
		}
}
?>