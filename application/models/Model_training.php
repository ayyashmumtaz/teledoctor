<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_training extends CI_Model {

	  private $_tol = "training";

    public $id_train;
    public $vendor_id;
    public $judul;
    public $link;
    public $linktes;
    public $jenis;
    public $images = "default.jpg";
    public $desc;
   
    

        public function aturan()
    {
        return [
            ['field' => 'judul',
            'label' => 'judul',
            'rules' => 'required'],

            ['field' => 'link',
            'label' => 'link',
            'rules' => 'required'],

            ['field' => 'linktes',
            'label' => 'linktes',
            'rules' => 'required'],

            ['field' => 'jenis',
            'label' => 'jenis',
            'rules' => 'required'],

            ['field' => 'desc',
            'label' => 'desc',
            'rules' => 'required'],

            ['field' => 'vendor_id',
            'label' => 'vendor_id',
            'rules' => 'required']
            
        ];
    }

    public function getById($id_train)
    {
        return $this->db->get_where($this->_tol, ["id_train" => $id_train])->row();
    }


        public function savetrain()
    {

        $post = $this->input->post();
        $this->id_train = uniqid();
        $this->judul = $post["judul"];
        $this->link = $post["link"];
        $this->linktes = $post["linktes"];
        $this->jenis = $post["jenis"];
        $this->images = $this->_uploadTrain();
        $this->desc = $post["desc"];
        $this->vendor_id = $post["vendor_id"];
        $this->db->insert($this->_tol, $this);
    }

    private function _uploadTrain()
{
    $config['upload_path']          = './img/training/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
    $config['file_name']            = $this->id_train;
    $config['overwrite']            = true;
    $config['max_size']             = 2048; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('images')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}



}

/* End of file Model_training.php */
/* Location: ./application/models/Model_training.php */