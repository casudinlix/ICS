<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cek_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

function index(){
  echo "string";
}
function cek($code,$pass){
  return $this->db->get_where('users_login',array('user_nip'=>$code,'pass'=>$pass));


}
function getwh($wh){
  return $this->db->get_where('view_wh_perm',array('users_login_id'=>$wh))->result();

}

}