<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Healthstat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_program');
		$this->load->model('model_products');
	}

	public function index()
	{
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/health.php');
		$this->load->view('user/_partials/footer');
	}

	
	

}

/* End of file Tracking.php */
/* Location: ./application/controllers/Tracking.php */