<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('dashboardmodel');


if (!$this->session->userdata('login')) {
  $this->session->set_flashdata('error','value');
  redirect('welcome');
}

  }

  function index()
  {

$data['title']="Home";
$data['app']=$this->dashboardmodel->getapp();

$this->load->view('_part/atas', $data);
$this->load->view('index', $data);
$this->load->view('_part/bawah', $data);

  }
  function changewh(){
$wh=$this->session->userdata('wh');
$this->session->unset_userdata($wh);
unset($_SESSION['wh']);

redirect('home');

  }
  function out(){

    $this->session->sess_destroy();
    redirect('welcome');

  }
  function getusersall(){
    $id=$this->uri->segment(3);
      //$this->db->select('sift_name, jam_in,jam_out');
       //$this->db->like();gaji
$data=$this->db->select('id,user_nip,username,group_name,group_id');
$this->db->like('user_nip',$id);
$this->db->or_like('username', $id);
          $data =$this->db->get('view_users');
          $rows = array();
          foreach($data->result() as $row)
          {
            $rows[]=$row;
          }

          echo json_encode($rows);
  }
function ajaxtes(){

  json_encode($_POST) ;
}

}
