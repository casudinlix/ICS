<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configaksi extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function tambah($table,$data){
    $this->db->insert($table, $data);

  }
  function ubah($table,$data){
    //$this->db->where($field, $Value);
    $this->db->update($table, $data);
  //  $this->db->update('table', $data, $condition);

  }
  function hapus($table,$where){
    $this->db->delete($table, $where);

  }

}
