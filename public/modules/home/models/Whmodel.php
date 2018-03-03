<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Whmodel extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function getwh($wh){
    return $this->db->get_where('view_wh_perm',array('user_nip'=>$wh))->result();
  }

}
