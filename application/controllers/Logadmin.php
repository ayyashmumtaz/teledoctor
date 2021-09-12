<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logadmin extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('model_login');
 
	}
 
	function index(){
		if($this->session->userdata('status') == "login"){
			redirect(site_url("admin"));
		}

		$this->load->view('admin/include/headlog.php');
        $this->load->view('admin/login.php');
        $this->load->view('admin/include/footlog.php');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(

			'username' => $username,
			'password' => $password
			);
		$cek = $this->model_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('success-login', 'Berhasil');
 
			redirect(site_url("admin"));
 
		}else{
			echo "<script>
     alert('Username atau Password Salah ! Silahkan Masukan Data Anda Dengan Benar!');
   </script>";
   redirect('logadmin','refresh');
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(site_url('logadmin'));
	}
}
 

