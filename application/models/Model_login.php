<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {

function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	private $_table = "carousel";

    public $id;
    public $img = "default.jpg";



    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->img = $this->_uploadImage();
        
        $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
{
    $config['upload_path']          = './img/bg-img/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
    $config['file_name']            = $this->id;
    $config['overwrite']			= true;
   // $config['max_size']             = 2048; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('img')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}
	

}



/* End of file modelName.php */
/* Location: ./application/models/modelName.php */