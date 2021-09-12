<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_galang extends CI_Model {

	public function all(){
		  $hasil = $this->db->select('*')
                          ->order_by('status', '0')
                            ->get('galangdata');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}
	}

    public function accvendor(){
          $hasil = $this->db->select('*')
                            ->where('status', 0)
                            ->get('galangdata');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }

    public function accvendor2(){
          $hasil = $this->db->select('*')
                            ->where('status', 2)
                            ->get('galangdata');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }

    private $_donasi = "galangdata";
    public function getById2($id)
    {
    

        return $this->db->get_where($this->_donasi, ["id" => $id])->row();
    }

    

    public function accvendorprogram(){
          $hasil = $this->db->select('*')
                            ->where('tipe', '2')
                            ->get('program');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }

    public function accpenggalang(){
        $data = $this->session->userdata('nama');
          $hasil = $this->db->select('*')
                            ->where('id_vendor', $data)
                            ->get('galangdata');
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
                            ->get('program');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }

    private $_table = "program";

    public $id;
    public $name;
    public $lokasi;
    public $jenis_usaha;
    public $image = "default.jpg";
    public $vendor;
    public $target_donasi;
    public $periode;
    public $informasi;
    public $status;
    public $tipe;
    public $id_vendor;

        public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'name',
            'rules' => 'required'],

            ['field' => 'lokasi',
            'label' => 'lokasi',
            'rules' => 'required'],

            ['field' => 'jenis_usaha',
            'label' => 'jenis_usaha',
            'rules' => 'required'],

            ['field' => 'vendor',
            'label' => 'vendor',
            'rules' => 'required'],

            ['field' => 'target_donasi',
            'label' => 'target_donasi',
            'rules' => 'numeric'],

            ['field' => 'informasi',
            'label' => 'informasi',
            'rules' => 'required'],

            ['field' => 'tipe',
            'label' => 'tipe',
            'rules' => 'required'],

            ['field' => 'id_vendor',
            'label' => 'id_vendor',
            'rules' => 'required'],
            
            ['field' => 'periode',
            'label' => 'periode',
            'rules' => 'required']
        ];
    }

    public function save1()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->name = $post["name"];
        $this->lokasi = $post["lokasi"];
        $this->jenis_usaha = $post["jenis_usaha"];
        $this->image = $this->_uploadImage();
        $this->vendor = $post["vendor"];
        $this->target_donasi = $post["target_donasi"];
        $this->periode = $post["periode"];
        $this->informasi = $post["informasi"];
        $this->status = $post["status"];
        $this->id_vendor = $post["id_vendor"];
        $this->tipe = $post["tipe"];
        $this->db->insert($this->_table, $this);
    }



public function vendorsaja(){
            $query = $this->db->get('vendor');
        return $query->row();
        
    }
    public function nonaktifprogram()
    {
        $hasil = $this->db->select('*')
                            ->where('status', 0)
                            ->get('program');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }

    public function join1() {
        $nama = $this->session->userdata('nama');
             $this->db->select('*');
             $this->db->from('donasi');
             $this->db->where('username', $nama);
             $this->db->join('program','program.id=donasi.id_program');
             $query = $this->db->get();
             return $query->result();
    }
    public function join2() {
        $nama = $this->session->userdata('nama');
             $this->db->select('*');
             $this->db->from('donasi');
             $this->db->where('username', $nama);
             $this->db->join('program','program.id=donasi.id_program');
             $query = $this->db->get();
             return $query->result();
    }


	public function find($id){
		//Query mencari record berdasarkan ID-nya
		$hasil = $this->db->where('id', $id)
						  ->limit(1)
						  ->get('program');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
			return array();
		}
	}	
 
    public function get(){
        $query = $this->db->query('SELECT * FROM vendor');
        return $query->result();
    }


 private $_tabl = "galangdata";
    


        public function getById($id)
    {
        return $this->db->get_where($this->_tabl, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        
        $this->nama = $post["nama"];
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->password = $post["password"];
        $this->no_telp = $post["no_telp"];
  
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->name = $post["name"];
        $this->email = $post["email"];
        $this->password = $post["password"];
        $this->no_telp = $post["no_telp"];
      

        if (!empty($_FILES["image"]["name"])) {
  		 	$this->image = $this->_uploadImage();
	} else {
    		$this->image = $post["old_image"];
}		

        
        
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function deleteProgram($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }


public function jumlahProgram()
{   
    $query = $this->db->get('program');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function jumlahProgramVendor()
{   $data = $this->session->userdata('nama');
$query = $this->db->where('id_vendor', $data)
                    ->get('program');
                      
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function jumlahDonatur()
{   
    
    $this->db->distinct();
    $this->db->where('donatur'); 
    $query = $this->db->get('donasi');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
}

public function totaldonasi()
{
   $this->db->select_sum('donasi');
   $query = $this->db->where('statusdonasi', 1)
                    ->get('donasi');
   if($query->num_rows()>0)
   {
     return $query->row()->donasi;
   }
   else
   {
     return 0;
   }
}

private function _uploadImage()
{
    $config['upload_path']          = './img/program/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
    $config['file_name']            = $this->id;
    $config['overwrite']      = true;
    $config['max_size']             = 2048; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}

private $_tablet = "galanganggota";
public function deleteAnggota($id)
    {
        return $this->db->delete($this->_tablet, array("id" => $id));
    }
    private $_tolo = "training";
     public function deleteTraining($id_train)
    {
        return $this->db->delete($this->_tolo, array("id_train" => $id_train));
    }









}
