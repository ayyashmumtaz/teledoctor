<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
        parent::__construct();

           if($this->session->userdata('status') != "login"){
            redirect(site_url("logadmin"));
        }
        $this->load->model('model_products');
        $this->load->model('model_program');
        $this->load->model('model_vendor');
        $this->load->model('model_dokter');

     }




	public function index()
	{


        $this->load->view('admin/include/header.php');
		$this->load->view('admin/include/sidebar.php');
		$this->load->view('admin/include/navbar.php');
		$this->load->view('admin/dashboard.php');
		$this->load->view('admin/include/footer.php');


        }

      public function addNews()
    {
        $data['dd_bidang'] = $this->model_program->news();
        $this->load->view('admin/include/header.php');
        $this->load->view('admin/include/sidebar.php');
        $this->load->view('admin/include/navbar.php');
        $this->load->view('admin/addNews', $data);
        $this->load->view('admin/include/footer.php');
    }



    public function addCarousel()
    {

        $this->load->view('admin/include/header.php');
        $this->load->view('admin/include/sidebar.php');
        $this->load->view('admin/include/navbar.php');
        $this->load->view('admin/addCarousel');
        $this->load->view('admin/include/footer.php');
    }

    public function addNewss()
    {
        $this->load->model('model_loguser');
        $vendor = $this->model_loguser;
        $validation = $this->form_validation;
        $validation->set_rules($vendor->rules());

        if ($validation->run()) {
            $vendor->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
            
        
        redirect('admin/addNews');
    }

    public function addCarl()
    {
        $this->load->model('model_login');
        $carousel = $this->model_login;
       

       
            $carousel->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        
        redirect('admin/addcarousel');
    
    }





    public function aksi_upload(){
        $id = uniqid();
        $judul = $this->input->post('judul');
        $news = $this->input->post('news');
 
        $data = array(
            'id' => $id,
            'judul' => $judul,
            'news' => $news
            );
        $this->model_program->input_news($data,'news');
        redirect('admin/news');
    
        }

    







public function news()
    {
        $this->load->model('model_program');
        $data['news'] = $this->model_program->news_admin();

        $this->load->view('admin/include/header.php');
        $this->load->view('admin/include/sidebar.php');
        $this->load->view('admin/include/navbar.php');
        $this->load->view('admin/news.php', $data);
        $this->load->view('admin/include/footer.php');
    }

   



	public function donasi()
	{
        $this->load->model('model_program');
        $data['donasi'] = $this->model_program->join2();

		$this->load->view('admin/include/header.php');
		$this->load->view('admin/include/sidebar.php');
		$this->load->view('admin/include/navbar.php');
		$this->load->view('admin/donasi.php', $data);
		$this->load->view('admin/include/footer.php');
	}



	public function program()
	{
		$this->load->model('model_program');
		$data['program'] = $this->model_program->all();

		$this->load->view('admin/include/header.php');
		$this->load->view('admin/include/sidebar.php');
		$this->load->view('admin/include/navbar.php');
		$this->load->view('admin/program.php', $data);
		$this->load->view('admin/include/footer.php');
	}

    public function notification()
    {
        $this->load->model('model_program');
        $data['notif'] = $this->model_program->notification();

        $this->load->view('admin/include/header.php');
        $this->load->view('admin/include/sidebar.php');
        $this->load->view('admin/include/navbar.php');
        $this->load->view('admin/notif.php', $data);
        $this->load->view('admin/include/footer.php');
    }

    public function carousel()
    {
        $this->load->model('model_program');
        $data['banner'] = $this->model_program->carousel();

        $this->load->view('admin/include/header.php');
        $this->load->view('admin/include/sidebar.php');
        $this->load->view('admin/include/navbar.php');
        $this->load->view('admin/carousel.php', $data);
        $this->load->view('admin/include/footer.php');
    }

	public function vendor()
	{
        $this->load->library('pagination');
       
        $config['base_url'] = site_url('admin/vendor'); //site url
        $config['total_rows'] = $this->db->count_all('vendor'); //total row
        $config['per_page'] = 10;  //show record per halaman
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
        $data['data'] = $this->model_vendor->get_mahasiswa_list($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
 

		$this->load->view('admin/include/header.php');
		$this->load->view('admin/include/sidebar.php');
		$this->load->view('admin/include/navbar.php');
		$this->load->view('admin/vendor.php', $data);
		$this->load->view('admin/include/footer.php');
	}
	public function product()
	{
         $this->load->library('pagination');
       
        $config['base_url'] = site_url('admin/product'); //site url
        $config['total_rows'] = $this->db->count_all('product'); //total row
        $config['per_page'] = 10;  //show record per halaman
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
        $data['data'] = $this->model_products->get_mahasiswa_list($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();

		$this->load->model('model_products');;
		$this->load->view('admin/include/header.php');
		$this->load->view('admin/include/sidebar.php');
		$this->load->view('admin/include/navbar.php');
		$this->load->view('admin/product.php', $data);
		$this->load->view('admin/include/footer.php');

}


public function order()
    {
        $data['order'] = $this->model_vendor->allorder();
        $this->load->view('admin/include/header.php');
        $this->load->view('admin/include/sidebar.php');
        $this->load->view('admin/include/navbar.php');
        $this->load->view('admin/order.php', $data);
        $this->load->view('admin/include/footer.php');
    }

    public function order_blm_bayar()
    {
        $this->load->helper('new_helper');
        $data['order'] = $this->model_vendor->allorder_notbayar();
        $data['reservasi'] = $this->model_vendor->allorder_reservasi(0);
        
        // merging order
        $data['order'] = array_merge($data['reservasi'], $data['order']);
        // sorting
        usort($data['order'], function($item1, $item2){
            return $item2->tgl_order <=> $item1->tgl_order;
        });

        $this->load->view('admin/include/header.php');
        $this->load->view('admin/include/sidebar.php');
        $this->load->view('admin/include/navbar.php');
        $this->load->view('admin/orderblmbayar.php', $data);
        $this->load->view('admin/include/footer.php');
    }

    public function order_sdh_bayar()
    {
        $data['order'] = $this->model_vendor->allorder_bayar();

        $data['reservasi'] = $this->model_vendor->allorder_reservasi(1);
        
        // merging order
        $data['order'] = array_merge($data['reservasi'], $data['order']);
        // sorting
        usort($data['order'], function($item1, $item2){
            return $item2->tgl_order <=> $item1->tgl_order;
        });

        $this->load->view('admin/include/header.php');
        $this->load->view('admin/include/sidebar.php');
        $this->load->view('admin/include/navbar.php');
        $this->load->view('admin/ordersdhbayar.php', $data);
        $this->load->view('admin/include/footer.php');
    }

    public function order_finish()
    {
        $data['order'] = $this->model_vendor->allorder_finish();
        $data['reservasi'] = $this->model_vendor->allorder_reservasi(2);
        
        // merging order
        $data['order'] = array_merge($data['reservasi'], $data['order']);
        // sorting
        usort($data['order'], function($item1, $item2){
            return $item2->tgl_order <=> $item1->tgl_order;
        });
        
        $this->load->view('admin/include/header.php');
        $this->load->view('admin/include/sidebar.php');
        $this->load->view('admin/include/navbar.php');
        $this->load->view('admin/orderfinish.php', $data);
        $this->load->view('admin/include/footer.php');
    }

    public function approv()
    {
        $this->load->model('model_program');
        $data['program'] = $this->model_program->nonaktifprogram();
        $this->load->view('admin/include/header.php');
        $this->load->view('admin/include/sidebar.php');
        $this->load->view('admin/include/navbar.php');
        $this->load->view('admin/approv.php',$data);
        $this->load->view('admin/include/footer.php');
    }

    public function galangdana()
    {
        $this->load->model('model_galang');
        $data['program'] = $this->model_galang->all();
        $this->load->view('admin/include/header');
        $this->load->view('admin/include/sidebar');
        $this->load->view('admin/include/navbar');
        $this->load->view('admin/approvgalang.php',$data);
        $this->load->view('admin/include/footer.php');
    }
public function add()
	{
		$this->load->view('admin/include/header.php');
		$this->load->view('admin/include/sidebar.php');
		$this->load->view('admin/include/navbar.php');
		$this->load->view('admin/addProduct.php');
		$this->load->view('admin/include/footer.php');

}


public function addVendor()
	{
		$this->load->view('admin/include/header.php');
		$this->load->view('admin/include/sidebar.php');
		$this->load->view('admin/include/navbar.php');
		$this->load->view('admin/addVendor.php');
		$this->load->view('admin/include/footer.php');

}

public function addNotif()
    {
        $this->load->view('admin/include/header.php');
        $this->load->view('admin/include/sidebar.php');
        $this->load->view('admin/include/navbar.php');
        $this->load->view('admin/addNotif.php');
        $this->load->view('admin/include/footer.php');
    }


function tambahnotif(){
        $id = uniqid();
        $id_user = $this->session->userdata('nama');
        
        $judul = $this->input->post('judul');
        $notif = $this->input->post('notif');
       
 
        $data = array(
            'id' => $id,
            'id_user' => $id_user,
            'judul' => $judul,
            'notif' => $notif,
           
            );
        $this->model_program->input_galangan($data,'notification');
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        redirect('admin/addnotif');
    }





//INI KHUSUS CRUD WOI!





	 public function addProgram()
    {
       
        $validation = $this->form_validation;
        

        $data['dd_bidang'] = $this->model_program->get();
        $this->load->view('admin/include/header.php');
        $this->load->view('admin/include/sidebar.php');
        $this->load->view('admin/include/navbar.php');
        $this->load->view('admin/addProgram.php',$data);
        $this->load->view('admin/include/footer.php');
    }

    	public function addVend()
    {
        $vendor = $this->model_vendor;
        $validation = $this->form_validation;
        $validation->set_rules($vendor->rules());

        if ($validation->run()) {
            $vendor->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        redirect('admin/addvendor');
    }



    public function app()

    {
        
    $id = $this->input->post('id');
    $status = $this->input->post('status');
 
    $data = array(
        'status' => $status
    );
 
    $where = array(
        'id' => $id
    );
 
    $this->model_program->update_data($where,$data,'program');
    redirect('admin/approv');
}

public function ubahorder()

    {
        
    $id = $this->input->post('id');
    $status = $this->input->post('status');
 
    $data = array(
        'status' => $status
    );
 
    $where = array(
        'id' => $id
    );
 
    $this->model_program->update_data($where,$data,'order');
    redirect('admin/order');
}







	public function addProduct()
    {
        $product = $this->model_products;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect('admin/product');
    }



     public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/product');
       
        $product = $this->model_products;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();

        
        $this->load->view('admin/include/header.php');
        $this->load->view('admin/include/sidebar.php');
        $this->load->view('admin/include/navbar.php');
        $this->load->view('admin/editProduct.php', $data);
        $this->load->view('admin/include/footer.php');
    }

    public function editVendor($id = null)
    {
        if (!isset($id)) redirect('admin/vendor');
       
        $product = $this->model_vendor;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["vendor"] = $product->getById($id);
        if (!$data["vendor"]) show_404();

        
        $this->load->view('admin/include/header.php');
        $this->load->view('admin/include/sidebar.php');
        $this->load->view('admin/include/navbar.php');
        $this->load->view('admin/editVendor.php', $data);
        $this->load->view('admin/include/footer.php');
    }

public function editprogram($id = null)
    {
        if (!isset($id)) redirect('admin/program');
       
        $product = $this->model_program;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();

        
        $this->load->view('admin/include/header.php');
        $this->load->view('admin/include/sidebar.php');
        $this->load->view('admin/include/navbar.php');
        $this->load->view('admin/editprogram.php', $data);
        $this->load->view('admin/include/footer.php');
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->model_products->delete($id)) {       
            redirect(site_url('admin/product'));
        }
    }


     public function deleteProgram($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->model_program->deleteProgram($id)) {
            redirect(site_url('admin/program'));
        }
    }

     public function deleteCarousel($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->model_program->deleteCarousel($id)) {
            redirect(site_url('admin/carousel'));
        }
    }

    public function deleteVendor($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->model_vendor->deleteVendor($id)) {
            redirect(site_url('admin/vendor'));
        }
    }

    public function deleteNews($id=null)
    {
        $this->load->model('model_loguser');
        if (!isset($id)) show_404();

        if ($this->model_loguser->deleteNews($id)) {
            redirect(site_url('admin/news'));
        }
    }

     public function deleteNotif($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->model_vendor->deleteNotif($id)) {
            redirect(site_url('admin/notification'));
        }
    }

    // fungsi dokter
    public function dokter(){
        $this->load->library('pagination');
       
        $config['base_url'] = site_url('admin/dokter'); //site url
        $config['total_rows'] = $this->db->count_all('dokter'); //total row
        $config['per_page'] = 10;  //show record per halaman
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
        $data['data'] = $this->model_dokter->get_mahasiswa_list($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();

        $this->load->model('model_products');;
        $this->load->view('admin/include/header.php');
        $this->load->view('admin/include/sidebar.php');
        $this->load->view('admin/include/navbar.php');
        $this->load->view('admin/dokter', $data);
        $this->load->view('admin/include/footer.php');
    }
    public function form_tambah_dokter()
    {
        $this->load->view('admin/include/header.php');
        $this->load->view('admin/include/sidebar.php');
        $this->load->view('admin/include/navbar.php');
        $this->load->view('admin/addDokter.php');
        $this->load->view('admin/include/footer.php');
        
    }
    public function tambah_dokter()
    {
        $dokter = $this->model_dokter;
        $validation = $this->form_validation;
        $validation->set_rules($dokter->rules());

        if ($validation->run()) {
            $dokter->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        redirect('admin/dokter');
    }

    public function edit_dokter($id = null)
    {
        if (!isset($id)) redirect('admin/dokter');
       
        $dokter = $this->model_dokter;
        $validation = $this->form_validation;
        $validation->set_rules($dokter->rulesupdate());
        if ($validation->run()) {
            $dokter->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["dokter"] = $dokter->getById($id);
        if (!$data["dokter"]) show_404();

        
        $this->load->view('admin/include/header.php');
        $this->load->view('admin/include/sidebar.php');
        $this->load->view('admin/include/navbar.php');
        $this->load->view('admin/edit_dokter.php', $data);
        $this->load->view('admin/include/footer.php');
    }
    public function hapus_dokter($id=null)
    {
        if (!isset($id)) show_404();

        if ($this->model_dokter->delete($id)) {       
            redirect(site_url('admin/dokter'));
        }
    }
    public function accorder($id_order, $payment_status)
    {
        $data = array(
            'status' => $payment_status
        );

        $id_order = explode('-', $id_order);
        if($id_order[0] == 'rsv'){
            $data = array(
                'payment_status' => $payment_status
            );
            $this->db->where('id', implode('-',$id_order))
            ->update('reservasi', $data);
        }
        else{
        $this->db->where('id_order', $id_order[0])
                 ->update('order', $data);
        }
        redirect('admin/order_sdh_bayar','refresh');
    }

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */