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

return $this->db->get_where('view_user_access',array('user_nip'=>$this->session->userdata('nip'),'a_view'=>1,'roles_module'=>$per,'roles_method'=>$method1));





  }
  function getmenu($id){
      $per=$this->router->fetch_class();
    $this->db->order_by('menu_name, menu_name ASC');
    return $this->db->get_where('view_access_menu',array('user_nip'=>$id,'is_main_menu'=>0,'category'=>$per,'active'=>1))->result();


}
  function getapp(){
    return $this->db->get('apps')->row();
  }
  function getwh($q){
      return $this->db->get_where('WH',array('id'=>$q))->row();
  }
  function  getadd(){
    $per=$this->router->fetch_class();
    $method1=$this->router->fetch_method();

    return $this->db->get_where('view_user_access',array('user_nip'=>$this->session->userdata('nip'),'a_add'=>1,'roles_module'=>$per,'roles_method'=>$method1))->row();


  }

}
