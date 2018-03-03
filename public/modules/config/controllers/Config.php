

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
$this->load->model('configmodels');
    if ($this->session->userdata('wh')!="1") {
      //show_404();

      redirect('dashboard');
    }

  }

  function index()
  {
$cek=$this->configmodels->getper($this->session->userdata('nip'));
if ($cek==TRUE) {

  $data['app']=$this->configmodels->getapp();
  $data['wh']=$this->configmodels->getwh($this->session->userdata('wh'));

  $this->load->view('_part/atas', $data);
  $this->load->view('index', $data);
  $this->load->view('_part/bawah', $data);
}else{
  echo "BAD";
}

  }
  function changewh(){
$wh=$this->session->userdata('wh');
$this->session->unset_userdata($wh);
unset($_SESSION['wh']);

redirect('home');

  }
  function usergroup(){
    this_login();

    $data['app']=$this->configmodels->getapp();
  $data['wh']=$this->configmodels->getwh($this->session->userdata('wh'));
  $data['access']=$this->configmodels->getper();

  $this->load->view('_part/atas', $data);
  $this->load->view('group/group', $data);
  $this->load->view('_part/bawah', $data);

     
  }

}

/* End of file Config.php */
