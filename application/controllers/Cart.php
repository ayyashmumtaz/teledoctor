<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('status') != "user"){
			redirect(site_url("Login"));
		}
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/keranjang.php');
		$this->load->view('user/_partials/footer');
	}

	public function store(){
		$this->db->insert('order', $this->session->userdata('order'));
		$id_order = $this->session->userdata('order')['id_order'];
		$this->session->unset_userdata('order');

		redirect('order/belanjadetail/'.$id_order);
	}
	
	public function hapus($rowid){

		$data = array(
			'rowid' => $rowid, 
			'qty' => 0

		);
		$this->cart->update($data);
		redirect('cart','refresh');
	}


}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */