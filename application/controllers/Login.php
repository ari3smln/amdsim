<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		
	}
	
	public function index()
	{
		check_session_login();
		if(isset($_POST["submit"])){
			$username = $this->security->xss_clean($this->input->post('username'));
			$password = $this->security->xss_clean($this->input->post('password'));

			$query = $this->db->get_where("users", array('username' => $username,'password'=> $password));
			if($query->num_rows() > 0){
				foreach ($query->result() as $row) {
					$sess_data["status_login"] = "oke";
					$sess_data["username"] = $row->username;
					$sess_data["id_user"] = $row->id_user;
					$sess_data["jabatan"] = $row->jabatan;
					$this->session->set_userdata($sess_data);
				}
			redirect("Halaman_Utama");
			}else{
				$this->session->set_flashdata("login_gagal","Username dan Password salah");
				$this->load->view("login");
			}
		}else{
			$this->load->view("login");
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect("login");
	}
}