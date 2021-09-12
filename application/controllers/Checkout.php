<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function index()
	{
		
		// $this->db->insert('order', $this->session->userdata('order'));
		
		redirect(site_url('Cart'));
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/Checkout.php');
		$this->load->view('user/_partials/footer');
	}
	public function addDonasi()
		{
			$id = uniqid();
			$dona = $this->input->post('donasi');
			$data = array(
						   'id'      => $id,
						   'qty'     => 1,
						   'price'   => $dona,
						   'name'    => 'Donasi'
						);

			$this->cart->insert($data);
			redirect(site_url('checkout'));
		}

}

/* End of file Checkout.php */
/* Location: ./application/controllers/Checkout.php */