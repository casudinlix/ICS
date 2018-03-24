<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    if (this_login()==false) {
      redirect('welcome');
    }
    $this->load->model('m_menus','menu');
		$this->load->model('dashboardmodel');
		$this->load->model('access', 'access');
  }

  function index()
  {
    $access=$this->access->getaccessview($this->session->userdata('nip'))->result();
    if ($access==FALSE) {
    	redirect('forbiden403');
    }
$data['title']="Roles List";
    $data['app']=$this->dashboardmodel->getapp();
    	$data['roles']=$this->dashboardmodel->get_roles();
    $data['add']=$this->access->getaccesscreate($this->session->userdata('nip'))->result();
    $data['module']=$this->access->getaccessupdate($this->session->userdata('nip'))->result();
    $data['userlist']=$this->dashboardmodel->getusers();
    	$this->load->view('_part/atas',$data);
    		$this->load->view('config/roles/roles', $data);
    		$this->load->view('_part/bawah', $data);

  }
  function rolesadd(){
    $access=$this->access->getaccessview($this->session->userdata('nip'))->result();
    if ($access==FALSE) {
    	redirect('forbiden403');
    }
$data['title']="Add Roles";
    $data['app']=$this->dashboardmodel->getapp();

    $data['add']=$this->access->getaccesscreate($this->session->userdata('nip'))->result();
    $data['module']=$this->access->getaccessupdate($this->session->userdata('nip'))->result();

    	$this->load->view('_part/atas',$data);
    		$this->load->view('config/roles/add', $data);
    		$this->load->view('_part/bawah', $data);
  }
  function action(){
    if (empty($_POST)) {
      $this->session->set_flashdata('error','error');

      redirect($_SERVER['HTTP_REFERER']);
    }
    if (isset($_POST['add'])) {

      $this->db->trans_begin();
  $value=['roles_name'=>$this->input->post('nama'),
  'roles_desc'=>strtolower($this->input->post('desc')),
  'roles_module'=>strtolower($this->input->post('module')),
  'roles_method'=>$this->input->post('method'),
  'addBy'=>$this->session->userdata('username'),
  ];

  $this->global->create('roles', $value, TRUE);
      if ($this->db->trans_status() === FALSE) {
      $this->db->trans_rollback();
        $this->session->set_flashdata('error','error');
  redirect('dashboard/roles');
          } else {
      $this->db->trans_commit();
      $this->session->set_flashdata('susscess','success');
      redirect('dashboard/roles');
          }
    }


        if (isset($_POST['update'])) {
          $this->db->trans_begin();
          $value=['roles_name'=>$this->input->post('nama'),
          'roles_desc'=>strtolower($this->input->post('desc')),
          'roles_module'=>strtolower($this->input->post('module')),
          'roles_method'=>$this->input->post('method'),
          ];
    $id = $this->input->post('id');

    $this->global->update('roles', $value, ['id' => $id],TRUE);
          if ($this->db->trans_status() === FALSE) {
          $this->db->trans_rollback();
            $this->session->set_flashdata('error','error');
      redirect('dashboard/roles');
              } else {
          $this->db->trans_commit();
          $this->session->set_flashdata('susscess','success');
          redirect('dashboard/roles');
        }

        }





  }
  function editroles(){
    $access=$this->access->getaccessupdate($this->session->userdata('nip'))->result();
    if ($access==FALSE) {
      redirect('forbiden403');
    }



    $data['title']="Edit Roles";
    $id=base64_decode($this->uri->segment(4));
    $data['app']=$this->dashboardmodel->getapp();
    $data['q']=$this->db->get_where('roles',['id'=>$id])->row();
    $this->load->view('_part/atas', $data);
    $this->load->view('config/roles/edit', $data);
    $this->load->view('_part/bawah', $data);
  }

}
