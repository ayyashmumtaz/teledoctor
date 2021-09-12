<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_tambahgalang extends CI_Model {


private $_table = "galanganggota";

	public $id;
    public $id_ketua;
    public $username;
    public $password;
    public $nama;
    public $tgl_lahir;
    public $alamat;
    public $fotodiri = "default.jpg";
    public $fotoktp = "0";
    public $fotokk = "0";
    public $fotojaminan = "0";

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],

            ['field' => 'tgl_lahir',
            'label' => 'tgl_lahir',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'password',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required'],

            ['field' => 'id_ketua',
            'label' => 'id_ketua',
            'rules' => 'required']	

          
        ];
    }

     private $_tabl = "galanganggota";
    


        public function getById($id)
    {
        return $this->db->get_where($this->_tabl, ["id" => $id])->row();
    }

    private $_tabel = "program";
    


        public function getById4($id)
    {
        return $this->db->get_where($this->_tabel, ["id" => $id, 'tipe' => '2'])->row();
    }



     public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        
        $this->nama = $post["nama"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->id_ketua = $post["id_ketua"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->alamat = $post["alamat"];
        $this->fotodiri = $this->uploadDiri(); 
        $this->fotoktp = $this->uploadktp();   
        $this->fotokk = $this->uploadkk();  
        $this->fotojaminan = $this->uploadjaminan();  
        $this->db->insert($this->_table, $this);
    }

    public function savektp()
    {

        $this->nama = $this->input->post($pro);
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->id_ketua = $post["id_ketua"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->alamat = $post["alamat"];
        $post = $this->input->post();
        $this->fotoktp = $this->uploadKtp();


        if (!empty($_FILES["fotoktp"])) {
            $this->fotoktp = $this->uploadKtp();
    } else {
            $this->fotoktp = $post["old_image"];
}   

 $this->db->insert($this->_table, $this, array('id' => $post['id']));
}

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->id_ketua = $post["id_ketua"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->fotodiri = $this->uploadDiri();
        $this->alamat = $post["alamat"];


        if (!empty($_FILES["image"]["name"])) {
  		 	$this->image = $this->uploadDiri();
	} else {
    		$this->image = $post["old_image"];
}	
}

function uploadDiri()
    {

  

    $config['upload_path']          = './img/galang/diri/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
    $config['file_name']            = 'DIRI_'.$this->id;

  //  $config['max_size']             = 2048; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('fotodiri')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}

 function uploadKtp()
{
    $config['upload_path']          = './img/galang/ktp/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
    $config['file_name']            = 'KTP_'.$this->id;

   // $config['max_size']             = 2048; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('fotoktp')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}

 function uploadKk()
{
    $config['upload_path']          = './img/galang/kk/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
    $config['file_name']            = 'KK_'.$this->id;
 
   // $config['max_size']             = 2048; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('fotokk')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}

 function uploadJaminan()
{
    $config['upload_path']          = './img/galang/jaminan/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
    $config['file_name']            = 'JAMINAN_'.$this->id;
   
   // $config['max_size']             = 2048; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('fotojaminan')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}	
    

   
	

}

/* End of file Model_tambahgalang.php */
/* Location: ./application/models/Model_tambahgalang.php */