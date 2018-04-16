<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permission extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    if (!this_login()) {
      redirect('welcome');
    }
    $this->load->model('dashboardmodel');
		$this->load->model('access', 'access');
  }

  function index()
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
  function addmenu(){
    $access=$this->access->getaccesscreate($this->session->userdata('nip'))->result();
    if ($access==FALSE) {
      redirect('forbiden403');
    }
    $data['title']="Menu Permission";
    $data['app']=$this->dashboardmodel->getapp();
    $data['add']=$this->access->getaccesscreate($this->session->userdata('nip'))->result();
    $data['module']=$this->access->getaccessdelete($this->session->userdata('nip'))->row();
    $data['list']=$this->dashboardmodel->getjoinmenuper()->result();
    $data['userlist']=$this->dashboardmodel->getusers();
    $this->load->view('_part/atas',$data);
      $this->load->view('permission/add', $data);
      $this->load->view('_part/bawah', $data);

  }
  function action(){
    $access=$this->access->getaccesscreate($this->session->userdata('nip'))->result();
    if ($access==FALSE) {
      redirect('forbiden403');
    }
    $data['title']="Add Permission";
    $data['app']=$this->dashboardmodel->getapp();
    $data['add']=$this->access->getaccesscreate($this->session->userdata('nip'))->result();
    $data['module']=$this->access->getaccessdelete($this->session->userdata('nip'))->row();
    $data['list']=$this->dashboardmodel->getjoinmenuper()->result();
    $data['user']=$this->dashboardmodel->getdetiluser(base64_decode($this->uri->segment(5)))->row();
    $data['userlist']=$this->dashboardmodel->getmenubyuser(base64_decode($this->uri->segment(5)));
$data['menulist']=$this->dashboardmodel->menulist();
    $this->load->view('_part/atas',$data);
      $this->load->view('permission/view', $data);
      $this->load->view('_part/bawah', $data);
  }
  function deletemenu(){
    $access=$this->access->getaccessdelete($this->session->userdata('nip'))->result();
    if ($access==FALSE) {
      show_404();
    }

   $id=base64_decode($this->uri->segment(5));
   $this->db->where('id', $id);
   $this->db->delete('user_privileges');

  }
  function actionaddmenu(){
    $access=$this->access->getaccesscreate($this->session->userdata('nip'))->result();
    if ($access==FALSE) {
      redirect('forbiden403');
    }
    $data=array('users_login_id'=>$this->input->post('user_id'),'group_id'=>$this->input->post('user_group'),
  'menu_id'=>$this->input->post('menu_id'),'priv_read'=>'1','addBy'=>$this->session->userdata('username'));
$this->db->insert('user_privileges', $data);
  redirect($_SERVER['HTTP_REFERER']);
  }

}
