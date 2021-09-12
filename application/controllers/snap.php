<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Snap extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'SB-Mid-server-c5cqL4SxL2jCmqrhz7E653ps', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');	
    }

    public function index()
    {
    	$this->load->view('user/checkout_snap');
    }

    public function token()
    {
		// Required
		$transaction_details = array(
			'order_id' => $this->input->get('id'),
			'gross_amount' => (int)$this->input->get('harga'), // no decimal allowed for creditcard
		  );
  
		  // Data yang akan dikirim untuk request redirect_url.
		  $credit_card['secure'] = true;
		  //ser save_card true to enable oneclick or 2click
		  //$credit_card['save_card'] = true;
  
		  $time = time();
		  $custom_expiry = array(
			  'start_time' => date("Y-m-d H:i:s O",$time),
			  'unit' => 'minute', 
			  'duration'  => 2
		  );
		  
		  $transaction_data = array(
			  'transaction_details'=> $transaction_details,
		  );

		  if(explode('-',$this->input->get('id'))[0] != 'rsv'){
			  $data = $this->db->where('id_order', $this->input->get('id'));
			  $data = $data->get('order')->result();
		  }else{
			$data = $this->db->where('id', $this->input->get('id'));
			$data = $data->get('reservasi')->result();
		  }
		  
		  if($data[0]->payment_token){
			echo $data[0]->payment_token;
		  }else{
			error_log(json_encode($transaction_data));
			$snapToken = $this->midtrans->getSnapToken($transaction_data);
			$this->db->where('id_order', $this->input->get('id'));
			$this->db->update('order',[
				'payment_token'=>$snapToken,
			]);
			error_log($snapToken);
			echo $snapToken;
		  }
	}
	
	
    public function tokenReservasi()
    {
		
		// Required
		$transaction_details = array(
			'order_id' => $this->input->get('id'),
			'gross_amount' => (int)$this->input->get('harga'), // no decimal allowed for creditcard
		  );
  
		  // Data yang akan dikirim untuk request redirect_url.
		  $credit_card['secure'] = true;
		  //ser save_card true to enable oneclick or 2click
		  //$credit_card['save_card'] = true;
  
		  $time = time();
		  $custom_expiry = array(
			  'start_time' => date("Y-m-d H:i:s O",$time),
			  'unit' => 'minute', 
			  'duration'  => 2
		  );
		  
		  $transaction_data = array(
			  'transaction_details'=> $transaction_details,
		  );

		  $data = $this->db->where('id', $this->input->get('id'));
		  $data = $data->get('reservasi')->result();
		  if($data[0]->payment_token){
			echo $data[0]->payment_token;
		  }else{
			error_log(json_encode($transaction_data));
			$snapToken = $this->midtrans->getSnapToken($transaction_data);
			$this->db->where('id', $this->input->get('id'));
			$this->db->update('reservasi',[
				'payment_token'=>$snapToken,
			]);
			error_log($snapToken);
			echo $snapToken;
		  }
    }

    public function finish()
    {
    	$result = json_decode($this->input->post('result_data'));
    	echo 'RESULT <br><pre>';
    	var_dump($result);
    	echo '</pre>' ;

    }
}
