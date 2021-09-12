<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('model_dokter');
	}
	public function index()
	{
		$data['dokterr'] = $this->model_dokter->allmenu();

		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/all_dokter.php', $data);
		$this->load->view('user/_partials/footer');
	}
	public function detail($id = null)
	{

		 $dokter = $this->model_dokter;
        $data["dokter"] = $dokter->getById($id);

		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/detail_dokter', $data);
		$this->load->view('user/_partials/footer');
	}
}
/* End of file Dokter.php */
/* Location: ./application/controllers/Dokter.php */