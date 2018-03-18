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

}
