<?php 

class Model_kategori extends CI_Model{
    public function data_elektronik(){
       return $this->db->get_where('tb_barang', array('kategori' => 'elektronik'));
    }
    
}
