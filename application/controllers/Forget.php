<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forget extends CI_Controller {

	public function index()
	{
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/forget_password.php');
		$this->load->view('user/_partials/footer');
	}

}

/* End of file Forget.php */
/* Location: ./application/controllers/Forget.php */