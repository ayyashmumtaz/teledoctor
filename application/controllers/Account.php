<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			if($this->session->userdata('status') != "user"){
			redirect(site_url("Login"));
		}
		}

	public function index()
	{
		$this->load->model('model_loguser');
		$data['user'] = $this->model_loguser->all();
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/account.php', $data);
		$this->load->view('user/_partials/footer');
	}

	public function profile()
	{
		$this->load->model('model_loguser');
		$data['user'] = $this->model_loguser->all();
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/account.php', $data);
		$this->load->view('user/_partials/footer');
	}

}

// tes 123