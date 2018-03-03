<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configmodels extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function getper(){
    return $this->db->get_where('view_access_level',array('user_nip'=>$this->session->userdata('nip')))->result();
  }
  function getmenu(){
    return $this->db->get_where('view_access_level',array('group_id'=>1,'is_main_menu'=>0,'active'=>1))->result();
  }
  function getapp(){
    return $this->db->get('apps')->row();
  }
  function getwh($q){
      return $this->db->get_where('WH',array('id'=>$q))->row();
  }

}
