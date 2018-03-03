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
  function getwh($wh){
    return $this->db->get_where('WH',array('id'=>$wh))->row();
  }

}
