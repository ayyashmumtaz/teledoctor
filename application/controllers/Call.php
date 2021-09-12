<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Call extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('status') != "user"){
			redirect(site_url("Login"));
		}
		$this->load->model('model_dokter');
		$this->load->model('model_products');
		$data['call']= $this->model_products->allcall();
		$data['call_selesai']= $this->model_products->allcallselesai();
		$data['dokterr'] = $this->model_dokter->allmenu();
		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/call_order.php', $data);
		$this->load->view('user/_partials/footer');
	}

	public function add()
	{
		 if($this->session->userdata('status') != "user"){
			redirect(site_url("login"));
		}
		$this->load->model('model_dokter');
		$user = $this->session->userdata("nama");
		$product = $this->model_dokter->find($this->input->post('id'));
		$data = array(
					   'id_order'=> uniqid(),
					   'id'      => $product->id,
					   'user'	 => $user,
					   'user_doctor'	 => $product->username,
					   'qty'     => 1,
					   'price'   => $product->harga,
					   'name'    => $product->nama,
					   'kategori'=> 1,
					   'catatan' => $this->input->post('catatan'),
					   'nama_pasien' => $this->input->post('nama_pasien'),
					   'tgl_reservasi' => $this->input->post('tgl_reservasi'),
					   'waktu_reservasi' => $this->input->post('waktu_reservasi'),
					);
		$this->load->library('session');
		$this->session->set_userdata('order', $data);
		$this->cart->destroy();

		$this->cart->insert($data);
		redirect(site_url('Cart'));
	}

	public function callvideo($meetingID, $fullName){
		$fullName = str_replace('%20', ' ',$fullName);
		$fullName = explode(' ', $fullName);
		if(isset($fullName[1])){
			$fullName = $fullName[0].$fullName[1];
		}
		else{
			$fullName = $fullName[0];
		}
		
		$this->load->helper('url'); 
		$getInfoRoom = $this->getInfoRoom($meetingID);
	
		// menampilkan hasil curl
		if(json_decode($getInfoRoom, true)['data']['returncode'] == "SUCCESS"){
			$joinRoom = $this->joinRoom($meetingID, $fullName);
		}
		else{
			// create room
			$createRoom = $this->createRoom($meetingID);
			// join room
			$joinRoom = $this->joinRoom($meetingID, $fullName);
		}
		
		$data = array(
			'url'=> json_decode($joinRoom,true)['data']['url']
		);
		redirect(json_decode($joinRoom,true)['data']['url']);
		// $this->load->view('user/call.php', $data);
	}

	public function getInfoRoom($meetingID){
		// get info 
		$ch = curl_init(); 
		$user = $this->session->userdata('nama');
		// set url 
		curl_setopt($ch, CURLOPT_URL,"https://teledoctor.id/prod/public/api/video/info-room");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,
            "token=oWtoPteCQqocnixeGYGdKGA56toyPd&meetingID=".$meetingID);

		// return the transfer as a string 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	
		// $output contains the output string 
		$result = curl_exec($ch); 
	
		// tutup curl 
		curl_close($ch);
		return $result; 
	}
	
	public function createRoom($meetingID){
		// get info 
		$ch = curl_init(); 
		$user = $this->session->userdata('nama');
		// set url 
		curl_setopt($ch, CURLOPT_URL,"https://teledoctor.id/prod/public/api/video/create-room");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,
            "token=oWtoPteCQqocnixeGYGdKGA56toyPd&name=CEXUP&meetingID=".$meetingID);

		// return the transfer as a string 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	
		// $output contains the output string 
		$result = curl_exec($ch); 
	
		// tutup curl 
		curl_close($ch);
		return $result; 
	}

	public function joinRoom($meetingID, $fullName){
		$ch = curl_init(); 
		// join room
		curl_setopt($ch, CURLOPT_URL,"https://teledoctor.id/prod/public/api/video/join-room");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,
			"token=oWtoPteCQqocnixeGYGdKGA56toyPd&fullName=".$fullName."&meetingID=".$meetingID);

		// return the transfer as a string 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	
		// $output contains the output string 
		$result = curl_exec($ch); 
		
		// tutup curl 
		curl_close($ch);     
		return $result;
	}

}

/* End of file Call.php */
/* Location: ./application/controllers/Call.php */