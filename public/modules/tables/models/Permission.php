<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permission extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
this_login();

  }
  function getrole(){

$this->db->get_where('view_user_access',array('user_nip'=>$this->session->userdata('nip'),'a_edit'=>1));


return ;


  }

}
