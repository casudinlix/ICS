<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles_perm extends MX_Controller{

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
    $data['title']="Role Permission";
    $data['app']=$this->dashboardmodel->getapp();
    $data['add']=$this->access->getaccesscreate($this->session->userdata('nip'))->result();
    $data['module']=$this->access->getaccessdelete($this->session->userdata('nip'))->row();
    $data['list']=$this->dashboardmodel->getrolesall()->result();
    $this->load->view('_part/atas',$data);
      $this->load->view('permission/roles', $data);
      $this->load->view('_part/bawah', $data);

  }
  function deleteroles(){
    $access=$this->access->getaccessdelete($this->session->userdata('nip'))->result();
    if ($access==FALSE) {
      show_404();
    }

   $id=base64_decode($this->uri->segment(5));
   $this->db->where('id', $id);
   $this->db->delete('roles_rule');
  }
  function addroles_perm(){
    $access=$this->access->getaccesscreate($this->session->userdata('nip'))->result();
    if ($access==FALSE) {
      redirect('forbiden403');
    }

    $data['title']="Roles List Permission";
    $data['app']=$this->dashboardmodel->getapp();
    $data['add']=$this->access->getaccesscreate($this->session->userdata('nip'))->result();
    $data['module']=$this->access->getaccessdelete($this->session->userdata('nip'))->row();
    $data['list']=$this->dashboardmodel->getjoinmenuper()->result();
    $data['userlist']=$this->dashboardmodel->getusers();
    $this->load->view('_part/atas',$data);
      $this->load->view('permission/roleadd', $data);
      $this->load->view('_part/bawah', $data);
  }
  function rolesaction(){
    $access=$this->access->getaccesscreate($this->session->userdata('nip'))->result();
    if ($access==FALSE) {
      redirect('forbiden403');
    }
    $data['title']="New Roles";
    $data['app']=$this->dashboardmodel->getapp();
    $data['add']=$this->access->getaccesscreate($this->session->userdata('nip'))->result();
    $data['module']=$this->access->getaccessdelete($this->session->userdata('nip'))->row();
    $data['list']=$this->dashboardmodel->get_roles();
    $data['user']=$this->dashboardmodel->getdetiluser(base64_decode($this->uri->segment(5)))->row();
    $data['roles']=$this->dashboardmodel->get_rolesbyuser(base64_decode($this->uri->segment(6)))->result();
    $this->load->view('_part/atas',$data);
      $this->load->view('permission/rolesview', $data);
      $this->load->view('_part/bawah', $data);


  }
  function actionaddroles(){
    $access=$this->access->getaccesscreate($this->session->userdata('nip'))->result();
    if ($access==FALSE) {
      redirect('forbiden403');
    }

    $data=array('roles_id'=>$this->input->post('roles_id', TRUE),
      'users_login_id'=>$this->input->post('user_id', TRUE),
      'a_read'=>$this->input->post('view', TRUE),
      'a_create'=>$this->input->post('create', TRUE),
      'a_update'=>$this->input->post('update', TRUE),
      'a_delete'=>$this->input->post('delete', TRUE),
      'createby'=>$this->session->userdata('username'));
    $this->db->insert('roles_rule', $data);
    $this->session->set_flashdata('susscess', 'value');
    redirect($_SERVER['HTTP_REFERER']);

    

  }
  function hapusroles(){
    $access=$this->access->getaccessdelete($this->session->userdata('nip'))->result();
    if ($access==FALSE) {
      redirect('forbiden403');
    }

   $id=base64_decode($this->uri->segment(5));
   $this->db->where('id', $id);
   $this->db->delete('roles_rule');

  }

}
