<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardmodel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function getapp(){
    return $this->db->get('apps')->row();
  }
  function menulist(){
    return $this->db->get('menus')->result();
  }
  function get_level_menu($parent){
    $result = $this->db->get_where('menus',array('id' => $parent))->row_array();

		return $result['level'] + 1;
  }
  function getusers(){
    return $this->db->get('view_users')->result();
  }
  function getgroup(){
    return $this->db->get('users_group')->result();
  }
  function get_roles(){
    return $this->db->get('roles')->result();
  }

}
