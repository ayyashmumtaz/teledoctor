<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_loguser extends CI_Model {

function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
	
 public function all(){
        $data = $this->session->userdata('nama');
  		$this->db->select('*');
 		$this->db->where('username', $data);//
  		$this->db->from('user');
  		$query = $this->db->get();
  		return $query->result();
}


 public function login(){
        $data = $this->session->userdata('nama');
  		$this->db->select('*');
 		$this->db->where('username', $data);//
  		$this->db->from('user');
  		$query = $this->db->get();
  		return $query->result();
}

private $_table = "news";

    public $id;
    public $judul;
    public $news;


    public function rules()
    {
        return [

            ['field' => 'judul',
            'label' => 'judul',
            'rules' => 'required'],

            ['field' => 'news',
            'label' => 'news',
            'rules' => 'required']

            

        ];
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->judul = $post["judul"];
        $this->news = $post["news"];
        
        $this->db->insert($this->_table, $this);
    }

     public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->judul = $post["judul"];
        $this->news = $post["news"]; 

        
        
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function deleteNews($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }


    
 


}



/* End of file modelName.php */
/* Location: ./application/models/modelName.php */