<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_program');
		$this->load->model('model_products');
		$this->load->model('model_reservasi');
	}

	public function index()
	{
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/kategori_order.php');
		$this->load->view('user/_partials/footer');
	}
	public function belanja()
	{
		if($this->session->userdata('status') != "user"){
			redirect(site_url("Login"));
		}
		
		$this->load->model('model_products');
		$this->load->model('model_reservasi');
		
		
		$data['product'] = $this->model_products->allorder();
		$data['reservasi'] = $this->model_reservasi->reservasiList(0);

        // merging order
        $data['product'] = array_merge($data['reservasi'], $data['product']);
        // sorting
        usort($data['product'], function($item1, $item2){
            return $item2->tgl_order <=> $item1->tgl_order;
		});

		$data['product1'] = $this->model_products->allorder(1);
		$data['reservasi'] = $this->model_reservasi->reservasiList(1);

        // merging order
        $data['product1'] = array_merge($data['reservasi'], $data['product1']);
        // sorting
        usort($data['product1'], function($item1, $item2){
            return $item2->tgl_order <=> $item1->tgl_order;
		});

		$data['produc'] = $this->model_products->allorder(2);
		$data['reservasi'] = $this->model_reservasi->reservasiList(2);

        // merging order
        $data['produc'] = array_merge($data['reservasi'], $data['produc']);
        // sorting
        usort($data['produc'], function($item1, $item2){
            return $item2->tgl_order <=> $item1->tgl_order;
		});

		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/my_order.php', $data);
		$this->load->view('user/_partials/footer');
	}

	public function donasi()
	{
		if($this->session->userdata('status') != "user"){
			redirect(site_url("Login"));
		}
		$this->load->model('model_program');
		$data['program'] = $this->model_program->alldonasi();
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/track_donasi.php', $data);
		$this->load->view('user/_partials/footer');
	}
	
	public function belanjadetail($id = null)
	{
		if(explode('-',$id)[0] == 'rsv'){
			$product = $this->model_reservasi;
			$data["product"] = $product->getReservationbyId($id);
			// var_dump($data['product']);die;
		
		}else{
			$product = $this->model_products;
			$data["product"] = $product->getById2($id);
		}
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/detailbelanja.php', $data);
		$this->load->view('user/_partials/footer');
	}

	public function Bayar()
	{


	$id = $this->input->post('id');
	$qty = $this->input->post('qty');
	$price = $this->input->post('price');
	$name = $this->input->post('name');
		$data = array(
						   'id'      => $id,
						   'qty'     => $qty,
						   'price'   => $price,
						   'name'    => $name
						);

			$this->cart->insert($data);

	}

	public function reservasi(){
		if($this->session->userdata('status') != "user"){
		   redirect(site_url("login"));
	   	}
		   $this->load->helper('date');
		   $this->load->helper('new_helper');
		   $this->load->model('model_reservasi');

		$data['reservasi']=$this->model_reservasi->reservasi();
		
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/order_reservasi.php', $data);
		$this->load->view('user/_partials/footer');
	}

	public function check_result($id){
		if($this->session->userdata('status') != "user"){
		   redirect(site_url("login"));
		   }
		
		$this->load->helper('new_helper');

		if(explode('-',$id)[0] == 'rsv'){
			$this->load->model('model_reservasi');
			$data['data'] = $this->model_reservasi->get_order($id);
		}else{
			$this->load->model('model_reservasi');
			$data['data'] = $this->model_reservasi->get_order_telp($id);
		}

		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/check-result.php', $data);
		$this->load->view('user/_partials/footer');
	}

}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */