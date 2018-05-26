<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MX_Controller{

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
$data['title']="Users List";
    $data['app']=$this->dashboardmodel->getapp();
    	$data['list_menus']=$this->menu->get_all();
    $data['add']=$this->access->getaccesscreate($this->session->userdata('nip'))->result();
    $data['module']=$this->access->getaccessupdate($this->session->userdata('nip'))->result();
    $data['userlist']=$this->dashboardmodel->getusers();
    	$this->load->view('_part/atas',$data);
    		$this->load->view('config/users/users', $data);
    		$this->load->view('_part/bawah', $data);

  }
  function usersadd(){
    $access=$this->access->getaccessview($this->session->userdata('nip'))->result();
    if ($access==FALSE) {
    	redirect('forbiden403');
    }
$data['title']="Add Users";
    $data['app']=$this->dashboardmodel->getapp();
    	$data['list_group']=$this->dashboardmodel->getgroup();
    $data['add']=$this->access->getaccesscreate($this->session->userdata('nip'))->result();
    $data['module']=$this->access->getaccessupdate($this->session->userdata('nip'))->result();
    $data['userlist']=$this->dashboardmodel->getusers();
    	$this->load->view('_part/atas',$data);
    		$this->load->view('config/users/add', $data);
    		$this->load->view('_part/bawah', $data);

  }
  function action(){
    if (empty($_POST)) {
      $this->session->set_flashdata('error','error');
      redirect('dashboard/users');
    }else{
      if (isset($_POST['add'])) {

        $this->db->trans_begin();
  $value=['user_nip'=>$this->input->post('nip'),
  'username'=>strtoupper($this->input->post('username')),
  'pass'=>strtoupper(base64_encode($this->input->post('pass'))),
  'group_id'=>$this->input->post('group'),
  ];

  $this->global->create('users_login', $value, TRUE);
        if ($this->db->trans_status() === FALSE) {
        $this->db->trans_rollback();
        	$this->session->set_flashdata('error','error');
    redirect('dashboard/users');
        		} else {
        $this->db->trans_commit();
        $this->session->set_flashdata('susscess','success');
        redirect('dashboard/users');
        		}
      }


          if (isset($_POST['update'])) {
            $this->db->trans_begin();
      $value=['user_nip'=>$this->input->post('nip'),
      'username'=>strtoupper($this->input->post('username')),
      'pass'=>strtoupper(base64_encode($this->input->post('pass'))),
      'group_id'=>$this->input->post('group'),
      ];
      $id = $this->input->post('id');

      $this->global->update('users_login', $value, ['id' => $id],TRUE);
            if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
              $this->session->set_flashdata('error','error');
        redirect('dashboard/users');
                } else {
            $this->db->trans_commit();
            $this->session->set_flashdata('susscess','success');
            redirect('dashboard/users');
          }

          }



    }

  }
  function editusers(){
    $access=$this->access->getaccessupdate($this->session->userdata('nip'))->result();
		if ($access==FALSE) {
			redirect('forbiden403');
		}



		$data['title']="Edit Users";
		$id=base64_decode($this->uri->segment(4));
		$data['app']=$this->dashboardmodel->getapp();
		$data['list_group']=$this->dashboardmodel->getgroup();
		$data['q']=$this->db->get_where('users_login',['id'=>$id])->row();
		$cek=$this->db->get_where('users_group',['id'=>$id])->result();
		foreach ($cek as $key) {
			$idm=$key->id;
		}
		$data['group']=$this->db->get_where('users_group',['id'=>$idm])->row();
		$this->load->view('_part/atas', $data);
		$this->load->view('config/users/edit', $data);
		$this->load->view('_part/bawah', $data);
  }

}
