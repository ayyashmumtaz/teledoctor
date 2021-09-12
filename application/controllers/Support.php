<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Support extends CI_Controller {

	public function index()
	{
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/support.php');
		$this->load->view('user/_partials/footer');
	}

}

/* End of file Support.php */
/* Location: ./application/controllers/Support.php */
