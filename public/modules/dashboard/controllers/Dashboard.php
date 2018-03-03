<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('dashboardmodel');

    if (!$this->session->userdata('wh')) {
      $this->session->set_flashdata('whe','value');
      redirect('home');
    }
if (!$this->session->userdata('login')) {
  $this->session->set_flashdata('error','value');
  redirect('welcome');
}
if($this->session->userdata('wh')=="1"){

redirect('config','refresh');

}
  }

  function index()
  {


$data['app']=$this->dashboardmodel->getapp();
$data['wh']=$this->dashboardmodel->getwh($this->session->userdata('wh'));
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

}
