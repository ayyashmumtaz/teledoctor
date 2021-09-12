<?php 
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Model_dokter extends CI_Model {
	
	 public function get_mahasiswa_list($limit, $start){
        $query = $this->db->get('dokter', $limit, $start);
        return $query;
    }	

    public function get_order_list($limit, $start){
        $query = $this->db->where('kategori', 1)
                            ->where('user_doctor', $this->session->userdata('nama'))
                            ->order_by('tgl_order', 'DESC')
                            ->get('order', $limit, $start);
                        
        return $query;
    }   
private $_tabla = "news";
    public function getByIdNews($id)
    {
        return $this->db->get_where($this->_tabla, ["id" => $id])->row();
    }

    public function getById2($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function find($id){
        //Query mencari record berdasarkan ID-nya
        $hasil = $this->db->where('id', $id)
                          ->limit(1)
                          ->get('dokter');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return array();
        }
    }
	
    public function list_dokter(){
        $hasil = $this->db->select('*')
                            ->get('dokter');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }

	private $_table = "dokter";

    public $id;
    public $nama;
    public $harga;
    public $image = "default.jpg";
    public $deskripsi;
    public $spesialisasi;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],
            
            ['field' => 'spesialisasi',
            'label' => 'spesialisasi',
            'rules' => 'required'],

            ['field' => 'harga',
            'label' => 'harga',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'password',
            'rules' => 'required'],


            ['field' => 'deskripsi',
            'label' => 'deskripsi',
            'rules' => 'required']
        ];
    }

    public function rulesupdate()
    {
        return [
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],
        ];
    }

	 public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->nama = $post["nama"];
        $this->harga = $post["harga"];
        $this->spesialisasi = $post["spesialisasi"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->image = $this->_uploadImage();
        $this->deskripsi = $post["deskripsi"];
        
        $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
{
    $config['upload_path']          = './img/dokter/';
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
	public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->harga = $post["harga"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->spesialisasi = $post["spesialisasi"];


        if (!empty($_FILES["image"]["name"])) {
		    $this->image = $this->_uploadImage();
		} else {
		    $this->image = $post["old_image"];
		}

         $this->deskripsi = $post["deskripsi"];

        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

    public function allmenu(){
        $hasil = $this->db->select('*')
                        
                            ->limit('6')
                            ->get('dokter');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }

    public function allnews(){
        $hasil = $this->db->select('*')
                            ->get('news');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }

    public function rules1(){
        return[
            ['field' => 'notes',
            'label' => 'notes',
            'rules' => 'required']
        ];
    }

    public function getorder($id_order)
    {
        return $this->db->get_where("order", ["id_order" => $id_order])->row();
    }

    public function inputNotes()
    {
        $post = $this->input->post();
        $hayu->id_order = $post["id"];
        $hayu->notes = $post["notes"];
        
        $this->db->update("order", $hayu, array('id_order' => $post['id_order'])); 
    }
    
    public function inputDoctorReservasiNotes()
    {
        $post = $this->input->post();

        $hayu['note_doctor'] = $post["note"];
        
        $this->db->update("reservasi", $hayu, array('id' => $post['id_reservasi'])); 
    }
    
    public function inputDoctorTelpNotes()
    {
        $post = $this->input->post();

        $hayu['note_doctor'] = $post["note"];
        
        $this->db->update("order", $hayu, array('id_order' => $post['id_reservasi'])); 
    }
	/* End of file Model_dokter.php */
	/* Location: ./application/models/Model_dokter.php */
 }