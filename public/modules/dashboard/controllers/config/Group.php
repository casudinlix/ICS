<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Group extends CI_Controller{

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
    $data['title']="Group List";
    $data['app']=$this->dashboardmodel->getapp();

    $data['add']=$this->access->getaccesscreate($this->session->userdata('nip'))->result();
    $data['module']=$this->access->getaccessupdate($this->session->userdata('nip'))->result();
    $data['group']=$this->dashboardmodel->getgroup();
      $this->load->view('_part/atas',$data);
        $this->load->view('config/group/group', $data);
        $this->load->view('_part/bawah', $data);
  }
  function groupadd(){
    $access=$this->access->getaccessview($this->session->userdata('nip'))->result();
    if ($access==FALSE) {
    	redirect('forbiden403');
    }
$data['title']="Add Group";
    $data['app']=$this->dashboardmodel->getapp();

    $data['add']=$this->access->getaccesscreate($this->session->userdata('nip'))->result();
    $data['module']=$this->access->getaccessupdate($this->session->userdata('nip'))->result();

    	$this->load->view('_part/atas',$data);
    		$this->load->view('config/group/add', $data);
    		$this->load->view('_part/bawah', $data);

  }
  function action(){
    if (empty($_POST)) {
      $this->session->set_flashdata('error','error');

      redirect($_SERVER['HTTP_REFERER']);
    }
    if (isset($_POST['add'])) {

      $this->db->trans_begin();
  $value=['group_name'=>$this->input->post('nama'),
  'group_desc'=>strtolower($this->input->post('desc')),
  'addBy'=>$this->session->userdata('username'),
  ];

  $this->global->create('users_group', $value, TRUE);
      if ($this->db->trans_status() === FALSE) {
      $this->db->trans_rollback();
        $this->session->set_flashdata('error','error');
  redirect('dashboard/group');
          } else {
      $this->db->trans_commit();
      $this->session->set_flashdata('susscess','success');
      redirect('dashboard/group');
          }
    }


        if (isset($_POST['update'])) {
          $this->db->trans_begin();

      $value=['group_name'=>strtoupper($this->input->post('nama')),
      'group_desc'=>strtoupper($this->input->post('desc')),
      'addBy'=>$this->session->userdata('username'),
      ];
    $id = $this->input->post('id');

    $this->global->update('users_group', $value, ['id' => $id],TRUE);
          if ($this->db->trans_status() === FALSE) {
          $this->db->trans_rollback();
            $this->session->set_flashdata('error','error');
      redirect('dashboard/group');
              } else {
          $this->db->trans_commit();
          $this->session->set_flashdata('susscess','success');
          redirect('dashboard/group');
        }

        }

  }
function editgroup(){
  $access=$this->access->getaccessupdate($this->session->userdata('nip'))->result();
  if ($access==FALSE) {
    redirect('forbiden403');
  }



  $data['title']="Edit Group";
  $id=base64_decode($this->uri->segment(4));
  $data['app']=$this->dashboardmodel->getapp();
  $data['q']=$this->db->get_where('users_group',['id'=>$id])->row();
  $this->load->view('_part/atas', $data);
  $this->load->view('config/group/edit', $data);
  $this->load->view('_part/bawah', $data);

}
}
