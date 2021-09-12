<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservasi extends CI_Controller {

	public function index()
	{
		$this->load->model('model_dokter');
		$data['dokter']=$this->model_dokter->list_dokter();
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/kategori_reservasi.php', $data);
		$this->load->view('user/_partials/footer');
	}
	public function detail($id)
	{
		$this->load->model('model_dokter');
		$product = $this->model_dokter;
		$data["product"] = $product->getById2($id);
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/detail_reservasi.php', $data);
		$this->load->view('user/_partials/footer');
	}

	public function addRes()
	{
		if($this->session->userdata('status') != "user"){
			redirect(site_url("Login"));
		}
		$this->load->model('model_program');
		$id = 'rsv-'.uniqid();
		
		$username = $this->session->userdata("nama");
        $dokter = $this->input->post('dokter');
        $dokter_username = $this->input->post('dokter_username');
		$tgl_reservasi = $this->input->post('tgl_reservasi');
		$nama_pasien = $this->input->post('nama_pasien');
		$catatan = $this->input->post('catatan');
		$waktu_reservasi = $this->input->post('waktu_reservasi');
		$harga = $this->input->post('harga');
		
		$data = array(
			'id' => $id,
            'username' => $username,
            'user_doctor' => $dokter_username,
			'nama_pasien' => $nama_pasien,
			'catatan' => $catatan,
			'dokter' => $dokter,
			'tgl_reservasi' => $tgl_reservasi,
			'waktu_reservasi' => $waktu_reservasi,
			'harga' => $harga
		);
		// $this->db->insert('order', $data);
		$this->model_program->input_galangan($data,'reservasi');
		// $this->cart->insert($data);

		// redirect(site_url('reservasi/cart'));
        redirect('order/reservasi','refresh');
	}
}

/* End of file Reservasi.php */
/* Location: ./application/controllers/Reservasi.php */