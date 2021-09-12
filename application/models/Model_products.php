<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_products extends CI_Model {

	public function all(){
		$hasil = $this->db->get('product');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}
	}
    public function allmenu(){
        $hasil = $this->db->select('*')
                        
                            ->limit('6')
                            ->get('product');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }
    public function justvend(){
        $data = $this->session->userdata('nama');
          $hasil = $this->db->select('*')
                            ->where('id_vendor', $data)
                            ->get('product');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }
    public function get_mahasiswa_list($limit, $start){
        $query = $this->db->get('product', $limit, $start);
        return $query;
    }
	
	public function find($id){
		//Query mencari record berdasarkan ID-nya
		$hasil = $this->db->where('id', $id)
						  ->limit(1)
						  ->get('product');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
    }

    function edit_data($where,$table){      
    return $this->db->get_where($table,$where);
}

        public function cari($id){
        //Query mencari record berdasarkan ID-nya
        $hasil = $this->db->where('id', $id)
                          ->limit(1)
                          ->get('donasi');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return array();
        }
	}	
public function sudahkelas(){
          $hasil = $this->db->select('*')
                            ->where('status', 2)
                            ->where('order.user', $this->session->userdata('nama'))
                            ->join('dokter', 'dokter.username = order.user_doctor', 'left')
                            ->get('order');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }

public function kelaskosong(){
          $hasil = $this->db->select('*')
                            ->where('status', 1)
                            ->where('order.user', $this->session->userdata('nama'))
                            ->join('dokter', 'dokter.username = order.user_doctor', 'left')
                            ->get('order');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }

    public function allorder($status = 0){
          $hasil = $this->db->select('*, product.image AS image_product, dokter.image AS image_doctor, order.name AS name_prod')
                            ->where('status', $status)
                            ->where('order.user', $this->session->userdata('nama'))
                            ->join('dokter', 'dokter.username = order.user_doctor', 'left')
                            ->join('product', 'product.name = order.name', 'left')
                            ->get('order');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }
    
    public function allcall(){
        $dat = $this->session->userdata('nama');
        $array1 = array('status' => 1, 'kategori' => 1, 'user' => $dat);
          $hasil = $this->db->select('*')
                            ->where($array1)
                            ->get('order');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }

    public function allcallselesai(){
        $dat = $this->session->userdata('nama');
        $array2 = array('status' => 2, 'kategori' => 1, 'user' => $dat);
          $hasil = $this->db->select('*')
                            ->where($array2)
                            ->get('order');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }
private $_tabl = "order";

    public function getById2($id)
    {
        return $this->db->get_where($this->_tabl, ["id_order" => $id])->row();
    }

 private $_table = "product";

    public $id;
    public $name;
    public $price;
    public $stock;
    public $image = "default.jpg";
    public $informasi;

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'price',
            'rules' => 'required'],

            ['field' => 'stock',
            'label' => 'stock',
            'rules' => 'required'],

            ['field' => 'informasi',
            'label' => 'informasi',
            'rules' => 'required']

           
        ];
    }


        public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->name = $post["name"];
        $this->price = $post["price"];
        $this->stock = $post["stock"];
        $this->image = $this->_uploadImage();
        $this->informasi = $post["informasi"];
        
        $this->db->insert($this->_table, $this);
    }

  
   public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
         $this->name = $post["name"];
        $this->price = $post["price"];
        $this->stock = $post["stock"];


        if (!empty($_FILES["image"]["name"])) {
    $this->image = $this->_uploadImage();
} else {
    $this->image = $post["old_image"];
}

         $this->informasi = $post["informasi"];

        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }



    
    private function _uploadImage()
{
    $config['upload_path']          = './img/product/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
    $config['file_name']            = $this->id;
    $config['overwrite']			= true;
   // $config['max_size']             = 2048; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}


}
