<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    if (!this_login()) {
      redirect('welcome');
    }
    $this->load->model('dashboardmodel');
		$this->load->model('access', 'access');
    //Codeigniter : Write Less Do More
  }

  public function index()
  {
    $access=$this->access->getaccessview($this->session->userdata('nip'))->result();
    if ($access==FALSE) {
      redirect('forbiden403');
    }
    $data['title']="Menu Permission";
    $data['app']=$this->dashboardmodel->getapp();
    $data['add']=$this->access->getaccesscreate($this->session->userdata('nip'))->result();
    $data['module']=$this->access->getaccessdelete($this->session->userdata('nip'))->row();
    $data['list']=$this->dashboardmodel->getjoinmenuper()->result();
    $this->load->view('_part/atas',$data);
      $this->load->view('permission/permission', $data);
      $this->load->view('_part/bawah', $data);

  }

}
