<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permission extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
this_login();

  }
  function getrole($nip){
    $this->db->select('id');
    $this->db->where('user_nip',$nip);
    $this->db->where('roles_module',$this->router->fetch_class());
    $this->db->where('roles_method',$this->router->fetch_method());
    $this->db->where('a_update',1);
    return $this->db->get('view_role_access');




  }

}
