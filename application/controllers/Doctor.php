<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {

	function __construct(){
        parent::__construct();

           if($this->session->userdata('status') != "dokter"){
            redirect(site_url("logdoctor"));
        }
        $this->load->model('model_reservasi');
        $this->load->model('model_products');
        $this->load->model('model_program');
        $this->load->model('model_vendor');
        $this->load->model('model_dokter');

     }


	public function index()
	{
		$this->load->view('dokter/include/header.php');
		$this->load->view('dokter/include/sidebar.php');
		$this->load->view('dokter/include/navbar.php');
		$this->load->view('dokter/dashboard.php');
		$this->load->view('dokter/include/footer.php');
	}

	public function pasien(){
        $this->load->library('pagination');
       
        $config['base_url'] = site_url('doctor/pasien'); //site url
        $config['total_rows'] = $this->db->count_all('dokter'); //total row
        $config['per_page'] = 200;  //show record per halaman
        $config["uri_segment"] = 3;  // urldecode(str)i parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->model_dokter->get_order_list($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();
        $this->load->model('model_products');;
        $this->load->view('dokter/include/header.php');
        $this->load->view('dokter/include/sidebar.php');
        $this->load->view('dokter/include/navbar.php');
        $this->load->view('dokter/dokter', $data);
        $this->load->view('dokter/include/footer.php');
    }

    
	public function reservasi(){
        $this->load->library('pagination');
       
        $config['base_url'] = site_url('doctor/pasien'); //site url
        $config['total_rows'] = $this->db->count_all('dokter'); //total row
        $config['per_page'] = 200;  //show record per halaman
        $config["uri_segment"] = 3;  // urldecode(str)i parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->model_reservasi->get_order_list($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();
        $this->load->model('model_products');;
        $this->load->view('dokter/include/header.php');
        $this->load->view('dokter/include/sidebar.php');
        $this->load->view('dokter/include/navbar.php');
        $this->load->view('dokter/reservasi', $data);
        $this->load->view('dokter/include/footer.php');
    }

    public function reservasidetail($id){

        if(explode('-', $id)[0] == 'rsv'){
            $data['data'] = $this->model_reservasi->get_order($id);           
        }else{
            $data['data'] = $this->model_reservasi->get_order_telp($id);           
        }

        $this->load->helper('new_helper');
        $this->load->view('dokter/include/header.php');
		$this->load->view('dokter/include/sidebar.php');
		$this->load->view('dokter/include/navbar.php');
		$this->load->view('dokter/reservasi-detail.php', $data);
		$this->load->view('dokter/include/footer.php');
    }

    public function notes($id_order = null)
    {
        if (!isset($id_order)) redirect('admin/doctor');
       
        $dokter = $this->model_dokter;
        $validation = $this->form_validation;
        $validation->set_rules($dokter->rules1());

        if ($validation->run()) {
            $dokter->inputNotes();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["order"] = $dokter->getorder($id_order);
        if (!$data["order"]) show_404();

        $this->load->view('dokter/include/header.php');
        $this->load->view('dokter/include/sidebar.php');
        $this->load->view('dokter/include/navbar.php');
        $this->load->view('dokter/notes',$data);
        $this->load->view('dokter/include/footer.php');
    }

    
    public function note_doctor()
    {
        if ($this->input->post('id_reservasi') == null) redirect('admin/doctor');
        if(explode('-', $this->input->post('id_reservasi'))[0] == 'rsv'){
            $dokter = $this->model_dokter;
            $dokter->inputDoctorReservasiNotes();
        }else{ 
            $dokter = $this->model_dokter;
            $dokter->inputDoctorTelpNotes();
        }
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        
		redirect($_SERVER['HTTP_REFERER']);
    }

    
}

/* End of file Doctor.php */
/* Location: ./application/controllers/Doctor.php */