<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logdoctor extends CI_Controller {

		function __construct(){
		parent::__construct();		
		$this->load->model('model_login');
 
	}
 
	function index(){
		if($this->session->userdata('status') == "dokter"){
			redirect(site_url("doctor"));
		}
		$this->load->view('dokter/include/headlog.php');
        $this->load->view('dokter/login.php');
        $this->load->view('dokter/include/footlog.php');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(

			'username' => $username,
			'password' => $password
			);
		$cek = $this->model_login->cek_login("dokter",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "dokter"
				);
 
			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('success-login', 'Berhasil');
 
			redirect(site_url("doctor"));
 
		}else{
			echo "<script>
     alert('Username atau Password Salah ! Silahkan Masukan Data Anda Dengan Benar!');
   </script>";
   redirect('logdoctor','refresh');
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(site_url('logdoctor'));
	}
}
	



/* End of file Logdoctor.php */
/* Location: ./application/controllers/Logdoctor.php */