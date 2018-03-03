<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {


	 public function __construct()
  {
    parent::__construct();
if ($this->session->userdata('login')) {
	redirect('home');
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
foreach ($cek->result() as $key) {
	$code=$key->id;
	$sesi['login']=TRUE;
	$sesi['id']=$key->id;
	$sesi['nip']=$key->user_nip;
	$sesi['username']=$key->username;
	$sesi['group']=$key->group_id;
	$wh=$key->id;

$this->session->set_userdata($sesi);

$data=array('from_login'=>$this->input->user_agent()." From IP ".$this->input->ip_address());
$this->db->where('id', $code);
$this->db->update('users_login', $data);

redirect('home');

}
}else{
	$this->session->set_flashdata('gagal','value');
	redirect('welcome');
}


	}
 
}
