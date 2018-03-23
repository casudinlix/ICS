<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function getaccessview($nip){
$this->db->select('role_id');
$this->db->where('user_nip',$nip);
$this->db->where('roles_module',$this->router->fetch_class());
$this->db->where('roles_method',$this->router->fetch_method());
$this->db->where('a_read',1);
return $this->db->get('view_role_access');

  }
  function getmodule(){
  $module=$this->router->fetch_class();
    $method=$this->router->fetch_method();
    return $module=$this->router->fetch_class();
  }
  function getaccessupdate($nip){
    $this->db->select('role_id');
    $this->db->where('user_nip',$nip);
    $this->db->where('roles_module',$this->router->fetch_class());
    $this->db->where('roles_method',$this->router->fetch_method());
    $this->db->where('a_update',1);
    return $this->db->get('view_role_access');
  }
  function getaccesscreate($nip){
    $this->db->select('role_id');
    $this->db->where('user_nip',$nip);
    $this->db->where('roles_module',$this->router->fetch_class());
    $this->db->where('roles_method',$this->router->fetch_method());
    $this->db->where('a_create',1);
    return $this->db->get('view_role_access');
  }

}
