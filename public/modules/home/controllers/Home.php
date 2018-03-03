
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
$this->load->model('whmodel');
if ($this->session->userdata('wh')) {

	redirect('dashboard');
}
		if (!$this->session->userdata('login')) {
      $this->session->set_flashdata('error','value');
      redirect('welcome');
    }


	}

	public function index()
	{
		$data['wh']=$this->whmodel->getwh($this->session->userdata('nip'));


		$data['app']=$this->db->get('apps')->row();
		$this->load->view('_part/atas',$data);
		$this->load->view('index', $data);
		$this->load->view('_part/bawah',$data);


	}
function out(){
	session_destroy();
	redirect('welcome');
}
function getwh(){
	$wh['wh']=$this->input->post('wh');
	$this->session->set_userdata($wh);
	redirect('dashboard');
}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
