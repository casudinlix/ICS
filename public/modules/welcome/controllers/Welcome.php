<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {


	 public function __construct()
  {
    parent::__construct();
if ($this->session->userdata('login')) {
	redirect('dashboard');
}

  }

	public function index()
	{

		$data['app']=$this->db->get('apps')->row();

		$this->load->view('welcome_message',$data);
	}

	function cek(){
		$this->load->model('cek_model');
		if (empty($_POST)) {
			$this->session->set_flashdata('error','value');
		  redirect('welcome');

		}
$code=$this->input->post('code',TRUE);
$pass=base64_encode(strtoupper($this->input->post('pass')));
$cek=$this->cek_model->cek($code,$pass);

if ($cek->num_rows() > 0) {
	$this->cek_model->getroles($code);
foreach ($cek->result() as $key) {
$access=$this->cek_model->access($key->user_nip);
if ($access->num_rows()>0) {
	 foreach ($access->result() as $value) {
	 	$code=$key->id;
	$sesi['login']=TRUE;
	$sesi['id']=$key->id;
	$sesi['nip']=$key->user_nip;
	$sesi['group_id']=$value->group_id;
	$sesi['username']=$key->username;



$this->session->set_userdata($sesi);
	 }
}


$data=array('from_login'=>$this->input->user_agent()." From IP ".$this->input->ip_address());
$this->db->where('id', $code);
$this->db->update('users_login', $data);

redirect('dashboard');

}
}else{
	$this->session->set_flashdata('gagal','value');
	redirect('welcome');
}


	}

}
