<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		$this->load->model('model_program');
		$data['news'] = $this->model_program->news();
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/news.php', $data);
		$this->load->view('user/_partials/footer');
	}

public function read($id)
	{
		$this->load->model('model_dokter');
		$product = $this->model_dokter;
        $data["product"] = $product->getByIdNews($id);
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/readNews.php', $data);
		$this->load->view('user/_partials/footer');
	}
	

}

/* End of file News.php */
/* Location: ./application/controllers/News.php */