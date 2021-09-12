<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_program extends CI_Model {

	public function all(){
		  $hasil = $this->db->select('*')
                            ->where('status', 1)
                            ->get('program');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return array();
		}
	
}

function changeActiveState($key)
{
$this->load->database();
$data = array(
'active' => 1
);
 
$this->db->where('md5(id)', $key);
$this->db->update('galangdata', $data);
 
return true;
}
public function training(){
      $hasil = $this->db->select('*')
                            ->get('training');
    if($hasil->num_rows() > 0){
      return $hasil->result();
    } else {
      return array();
    }
  
}

public function training2(){
  $data = $this->session->userdata('nama');
      $hasil = $this->db->select('*')
->where('vendor_id', $data)
                            ->get('training');
    if($hasil->num_rows() > 0){
      return $hasil->result();
    } else {
      return array();
    }
  
}

public function khususgalang(){
      $hasil = $this->db->select('*')
                            ->where('tipe', 2)
                            ->get('program');
    if($hasil->num_rows() > 0){
      return $hasil->result();
    } else {
      return array();
    }
  
}

public function khususgalang1(){

    $log = $this->session->userdata('nama');
      $hasil = $this->db->select('*')
                            ->where('id_vendor', $log)
                            ->get('program');
    if($hasil->num_rows() > 0){
      return $hasil->result();
    } else {
      return array();
    }
  
}

public function anggotagalang(){
  $data = $this->session->userdata('nama');
      $hasil = $this->db->select('*')
                        ->where('id_ketua', $data)
                            ->get('galanganggota');
    if($hasil->num_rows() > 0){
      return $hasil->result();
    } else {
      return array();
    }
  
}

public function anggotagalang1(){
  $data = $this->session->userdata('nama');
      $hasil = $this->db->select('*')
                        ->where('username', $data)
                            ->get('galangdata');
    if($hasil->num_rows() > 0){
      return $hasil->result();
    } else {
      return array();
    }
  
}


public function carousel(){
          $hasil = $this->db->select('*')
                            ->get('carousel');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    
}
function input_galangan($data,$table){
    $this->db->insert($table,$data);
  }

public function notification(){
          $hasil = $this->db->select('*')
                            ->get('notification');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    
}



function input_news($data,$table){
        $this->db->insert($table,$data);
    }

public function news(){
          $hasil = $this->db->select('*')
                            ->get('news');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    
}
public function news_admin(){
          $hasil = $this->db->select('*')
                            ->get('news');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    
}

function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }   

public function alldonasi(){
          $data = $this->session->userdata('nama');
          $hasil = $this->db->select('*')
                            ->where('username', $data)
                            ->get('donasi');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }
  private $_donasi = "donasi";
    public function getById2($id)
    {
    

        return $this->db->get_where($this->_donasi, ["id" => $id])->row();
    }

public function notif(){
          $hasil = $this->db->select('*')
                            ->get('notification');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    
}

    public function allmenu(){
          $hasil = $this->db->select('*')
                            ->where('status', 1)
                            ->limit('4')
                            ->get('program');
        if($hasil->num_rows() > 0){
            return $hasil->result();
        } else {
            return array();
        }
    }    

    public function donasi(){
          $hasil = $this->db->select('*')
                            ->get('donasi');
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
             $this->db->select('*');
             $this->db->from('donasi');
             $this->db->join('program','program.id=donasi.id_program');
             $query = $this->db->get();
             return $query->result();
    }

public function join12()
{
  return $this->db->from('program')
          ->join('donasi', 'donasi.id_program=program.name')
          ->get()
          ->result();
}

public function join1234()
{
$this->db->select('*');
 $this->db->from('vendor');
 $this->db->limit(5);
 $this->db->join('product','product.id_vendor=vendor.username');
 $query = $this->db->get();
 return $query->result();
}


public function listtani()
{
$this->db->select('*');
 $this->db->from('vendor');
 $this->db->where('jenis_usaha', 1);
 $this->db->limit(10);
 $this->db->join('product','product.id_vendor=vendor.username');
 $query = $this->db->get();
 return $query->result();
}


public function listternak()
{
$this->db->select('*');
 $this->db->from('vendor');
 $this->db->where('jenis_usaha', 2);
 $this->db->limit(10);
 $this->db->join('product','product.id_vendor=vendor.username');
 $query = $this->db->get();
 return $query->result();
}

public function listdagang()
{
$this->db->select('*');
 $this->db->from('vendor');
 $this->db->where('jenis_usaha', 3);
 $this->db->limit(10);
 $this->db->join('product','product.id_vendor=vendor.username');
 $query = $this->db->get();
 return $query->result();
}

public function listuang()
{
$this->db->select('*');
 $this->db->from('vendor');
 $this->db->where('jenis_usaha', 4);
 $this->db->limit(10);
 $this->db->join('product','product.id_vendor=vendor.username');
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

    public function get1(){
$data = $this->session->userdata('nama');
          $hasil = $this->db->select('*')
                            ->where('username', $data)
                            ->get('galangdata');
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

            ['field' => 'id_vendor',
            'label' => 'id_vendor',
            'rules' => 'required'],
            
            ['field' => 'periode',
            'label' => 'periode',
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
        $this->lokasi = $post["lokasi"];
        $this->jenis_usaha = $post["jenis_usaha"];
        $this->image = $this->_uploadImage();
        $this->vendor = $post["vendor"];
        $this->target_donasi = $post["target_donasi"];
        $this->periode = $post["periode"];
        $this->informasi = $post["informasi"];
        $this->status = $post["status"];
        $this->id_vendor = $post["id_vendor"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->name = $post["name"];
        $this->lokasi = $post["lokasi"];
        $this->jenis_usaha = $post["jenis_usaha"];
        $this->image = $this->_uploadImage();
        $this->vendor = $post["vendor"];
        $this->target_donasi = $post["target_donasi"];
        $this->periode = $post["periode"];
        $this->informasi = $post["informasi"];
        $this->id_vendor = $post["id_vendor"];
        $this->status = $post["status"];


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
   
private $_tab = "carousel";
    public function deleteCarousel($id)
    {
        return $this->db->delete($this->_tab, array("id" => $id));
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

public function jumlahDonasiChart()
{   
       $this->db->group_by('tgl_donasi', 'ASC');
        $this->db->select('*');
        $this->db->select("count(*) as donasi");
        $this->db->where('statusdonasi', 1);
        return $this->db->from('donasi')
          ->get()
          ->result();
    
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
public function jumlahDonaturVendor()
{    $data = $this->session->userdata('nama');
   $query = $this->db->where('username', $data)
                    ->get('donasi');

    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }
  }

public function jumlahDonasiVendor()
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


public function totaldonasiindex()

    {
        return $this->db->from('program')
        ->where('status', '1')
          ->select('*')
          ->limit('5')
          ->get()
          ->result();
    }  

    public function totaldonasiindex2()

    {
        return $this->db->from('program')
        ->where('status', '1')
          ->select('*')
          ->get()
          ->result();
    }  




public function totaldonasivendor()
{

    $p = $this->session->userdata('nama');


   $this->db->select_sum('donasikumpul');
   $query = $this->db->where('id_vendor', $p )
                    ->get('program');
   if($query->num_rows()>0)
   {
     return $query->row()->donasikumpul;
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
    $config['overwrite']			= true;
    $config['max_size']             = 2048; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}


}
