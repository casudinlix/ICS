<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forbidden extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('dashboardmodel');
  }

  function index()
  {
    $data['title']="Forbidden!!!";
    $data['app']=$this->dashboardmodel->getapp();
    $this->load->view('_part/atas',$data);
$this->load->view('_part/403');
$this->load->view('_part/bawah');
  }

}
