<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('model_loguser');
}
	public function index()
	{
		if($this->session->userdata('status') == "user"){
			$this->session->set_flashdata('warning', 'Berhasil');
            redirect(site_url());

        }
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/login.php');
		$this->load->view('user/_partials/footer');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(

			'username' => $username,
			'password' => $password
			);
		$cek = $this->model_loguser->cek_login("user",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "user"
				);

			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('success-login', 'Berhasil');
			redirect('beranda');

		}else{
		$this->session->set_flashdata('failed', 'Berhasil!');
		   redirect('login','refresh');
		}
	}
	function logout(){
		
		$this->session->set_flashdata('success-logout', 'Berhasil!');
		sleep(5);
		$this->session->sess_destroy();
		redirect('beranda');

	}

	public function forgetpassword()
	{
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/ubah_password.php');
		$this->load->view('user/_partials/footer');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */