<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
public function all(){
  return $this->db->get('menus')->result();
}

}
