

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
$this->load->model('configmodels');
$this->load->model('menu_model', 'menu');
$this->load->model('configaksi', 'aksi');
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
$data['main_menu']=$this->configmodels->getmenu($this->session->userdata('nip'));
  $this->load->view('_part/atas1', $data);
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
if (isset($_POST['save'])) {
$data=array('group_name'=>strtoupper($this->input->post('nama',TRUE)),'group_desc'=>strtoupper($this->input->post('desc',TRUE)),'addwho'=>$this->session->userdata('nip'),'editby'=>'');
$this->aksi->tambah('users_group',$data);

}elseif (isset($_POST['update'])) {
  $data=array('group_name'=>strtoupper($this->input->post('nama',TRUE)),'group_desc'=>strtoupper($this->input->post('desc',TRUE)),'editby'=>$this->session->userdata('nip'));
$this->db->where('id', $this->input->post('id'));
$this->aksi->ubah('users_group',$data);
}
    $data['app']=$this->configmodels->getapp();
  $data['wh']=$this->configmodels->getwh($this->session->userdata('wh'));
  $data['access']=$this->configmodels->getper();

  $this->load->view('_part/atas1', $data);
  $this->load->view('group/group', $data);
  $this->load->view('_part/bawah', $data);


  }
function menu(){
  $this->menu->all();
}

}

/* End of file Config.php */
