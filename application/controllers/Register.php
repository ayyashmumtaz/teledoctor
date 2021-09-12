<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('status') == "user"){
      redirect(site_url());
      }

		$this->load->view('user/_partials/header');
		$this->load->view('user/_partials/sidebar');
		$this->load->view('user/Register.php');
		$this->load->view('user/_partials/footer');
	}





function tambah(){
	$this->load->model('model_program');
        $id = uniqid();
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $no_telp = $this->input->post('no_telp');
        $password = $this->input->post('password');
 
        $data = array(
            'id' => $id,
            'nama' => $nama,
            'username' => $username,
            'email' => $email,
            'no_telp' => $no_telp,
            'password' => $password
            );
        $this->model_program->input_galangan($data,'user');

        $encrypted_id = md5($id);
 
//enkripsi id
$encrypted_id = md5($id);
$this->load->library('email');
$config = array();
$config['charset'] = 'utf-8';
$config['useragent'] = 'Codeigniter';
$config['protocol']= "smtp";
$config['mailtype']= "html";
$config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
$config['smtp_port']= "465";
$config['smtp_timeout']= "400";
$config['smtp_user']= "kaila.indonesia.berdaya@gmail.com"; // isi dengan email kamu
$config['smtp_pass']= "N4bilacantikbgt"; // isi dengan password kamu
$config['crlf']="\r\n";
$config['newline']="\r\n";
$config['wordwrap'] = TRUE;
 
//memanggil library email dan set konfigurasi untuk pengiriman email
$this->email->initialize($config);

$data = array(
            'nama' => $nama,
            'link' => ' '.site_url().'/beranda/verification/'.$encrypted_id,
        );

 $link = site_url("beranda/verification/$encrypted_id"); 
//konfigurasi pengiriman
$this->email->from($config['smtp_user']);
$this->email->to($email);
$this->email->subject('Verifikasi Akun');
            $body = $this->load->view('user/_partials/email-template.php', $data, true);
            $this->email->message($body);
 
//notifikasi registrasi berhasil
 
			if($this->email->send())
			{
			
			redirect('register');
            $this->session->flashdata('success', 'berhasil!');
				}
			else
				{
			echo $this->email->print_debugger();
}
}

public function verification($key)
{
$this->load->helper('url');
$this->load->model('model_program');
$this->model_program->changeActiveState($key);
echo '<span class="hljs-keyword">echo</span> <span class="hljs-string">"Selamat kamu telah memverifikasi akun kamu"</span>'; 

 
}


}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */