<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configmodels extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function getper(){
$per=$this->router->fetch_class();
$method1=$this->router->fetch_method();

return $this->db->get_where('view_roles',array('user_nip'=>$this->session->userdata('nip'),'a_view'=>1,'roles_module'=>$per,'roles_method'=>$method1));





  }
  function getmenu($id){
    return $this->db->get_where('view_access_menu',array('user_nip'=>$id,'is_main_menu'=>0,'active'=>1))->result();

}
  function getapp(){
    return $this->db->get('apps')->row();
  }
  function getwh($q){
      return $this->db->get_where('WH',array('id'=>$q))->row();
  }

}
