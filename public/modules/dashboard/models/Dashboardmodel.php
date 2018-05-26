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
    return $this->db->get_where('menus')->result();
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
  function get_rolesbyuser($nip){
    return $this->db->get_where('view_role_access',['user_nip'=>$nip]);
  }
  function getpermenu(){
    return $this->db->get('view_privileges')->result();
  }
function getjoinmenuper(){
$query=$this->db->query("SELECT user_privileges.id,users_login.user_nip,users_login.username,user_privileges.menu_id,menus.menu FROM user_privileges inner join
    users_login on(user_privileges.users_login_id=users_login.id) inner join menus on(menus.id=user_privileges.menu_id)");
return $query;
}
function getmenubyuser($nip){
  return $this->db->get_where('view_privileges',array('user_id'=>$nip))->result();
}
function getdetiluser($nip){
  return $this->db->get_where('users_login',['id'=>$nip]);
}
function getrolesall(){
return $this->db->get('view_role_access');
}


}
