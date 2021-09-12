<?php
	class Model_regis extends CI_Model{

		public function tambah($nama, $username, $email, $password, $no_telp){
			$data = array(
				'nama' => $nama,
				'username' => $username,
				'email' => $email,
				'password' => $password,
				'no_telp' => $no_telp
				
				);
			$this->db->insert('user',$data);
		

		if($data == null) {
        redirect('register');        
    } else {    
        $this->session->set_flashdata('success', 'berhasil!');  
        redirect('login');   
    };

			

		
	} 


	function changeActiveState($key)
{
 $this->load->database();
 $data = array(
 'active' => 1
 );

 $this->db->where('md5(id)', $key);
 $this->db->update('user', $data);

 return true;
}
	}
?>