<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_reservasi extends CI_Model {

    private $_table = "reservasi";

    public $id;
    public $username;
    public $password;
    public $admin;
    public $image = "default.jpg";
    public $company;
    public $no_telp;
    public $alamat;

    public function rules()
    {
        return [
            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],

            ['field' => 'nama_pasien',
            'label' => 'Pasien',
            'rules' => 'required'],

            ['field' => 'dokter',
            'label' => 'Dokter',
            'rules' => 'required'],

            ['field' => 'tgl_reservasi',
            'label' => 'Tanggal',
            'rules' => 'required'],

            ['field' => 'waktu_reservasi',
            'label' => 'Waktu',
            'rules' => 'required'],
        ];
    }

    public function reservasi()
    {   
        $query = $this->db->select('reservasi.*, dokter.image')
        ->from('reservasi')
        ->where('reservasi.username', $this->session->userdata("nama"))
        ->join('dokter', 'dokter.nama = reservasi.dokter', 'left')
        ->order_by('reservasi.no', 'desc')
        ->get();

        return $query->result();
    }
    
    public function reservasiList($status)
    {   
        $query = $this->db->select('reservasi.*, reservasi.dokter AS user_doctor, dokter.image AS image_doctor, reservasi.dokter AS name_prod, reservasi.id AS id_order ')
        ->from('reservasi')
        ->where('reservasi.payment_status', $status)
        ->where('reservasi.username', $this->session->userdata("nama"))
        ->join('dokter', 'dokter.nama = reservasi.dokter', 'left')
        ->order_by('reservasi.no', 'desc')
        ->get();

        return $query->result();
    }
    
    public function get_order_list($limit, $start){
        $query = $this->db->select('reservasi.*, dokter.nama')
        ->from('reservasi')
        ->where('reservasi.user_doctor', $this->session->userdata("nama"))
        ->join('dokter', 'dokter.username = reservasi.user_doctor', 'left')
        ->order_by('reservasi.no', 'desc')
        ->get();

        return $query->result();
    }   

    public function get_order($id){
        $query = $this->db->select('reservasi.*, user.*, reservasi.id AS reservasi_id, dokter.image AS image')
        ->from('reservasi')
        ->where('reservasi.id', $id)
        ->join('user', 'user.username = reservasi.username', 'left')
        ->join('dokter', 'dokter.username = reservasi.user_doctor', 'left')
        ->get();

        return $query->result();
    }   

    
    public function get_order_telp($id){
        $query = $this->db->select('order.*, user.*, order.id_order AS reservasi_id, dokter.image AS image')
        ->from('order')
        ->where('order.id_order', $id)
        ->join('user', 'user.username = order.user', 'left')
        ->join('dokter', 'dokter.username = order.user_doctor', 'left')
        ->get();

        return $query->result();
    }   

    public function getReservationbyId($id){
        $query = $this->db->select('*')
        ->from('reservasi')
        ->where('id', $id)
        ->get()
        ->row();
        return $query;
    }
}
