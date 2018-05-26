<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menus extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
if (!this_login()) {
	redirect('welcome');
}


		$this->load->model('m_menus','menu');
		$this->load->model('dashboardmodel');
		$this->load->model('access', 'access');
		$this->load->model('action', 'crud');
	}

	public function index()
	{
$access=$this->access->getaccessview($this->session->userdata('nip'))->result();
if ($access==FALSE) {
	redirect('forbiden403');
}
$data['title']="Menu List";
$data['app']=$this->dashboardmodel->getapp();

$data['add']=$this->access->getaccesscreate($this->session->userdata('nip'))->result();
$data['module']=$this->access->getaccessupdate($this->session->userdata('nip'))->result();
$data['menulist']=$this->dashboardmodel->menulist();
	$this->load->view('_part/atas',$data);
		$this->load->view('config/menu/menus_v', $data);
		$this->load->view('_part/bawah', $data);

	}

	function editmenu(){
		$access=$this->access->getaccessupdate($this->session->userdata('nip'))->result();
		if ($access==FALSE) {
			redirect('forbiden403');
		}
		$data['title']="Edit Menu";
		$id=base64_decode($this->uri->segment(4));
		$data['app']=$this->dashboardmodel->getapp();
		$data['menulist']=$this->dashboardmodel->menulist();
		$data['q']=$this->db->get_where('menus',['id'=>$id])->row();
		$cek=$this->db->get_where('menus',['id'=>$id])->result();
		foreach ($cek as $key) {
			$idm=$key->id;
		}
		$data['parent']=$this->db->get_where('menus',['id'=>$idm])->row();

		$this->load->view('_part/atas', $data);
		$this->load->view('config/menu/edit', $data);
		$this->load->view('_part/bawah', $data);


	}
	function menuadd(){
		$access=$this->access->getaccesscreate($this->session->userdata('nip'))->result();
		if ($access==FALSE) {
			redirect('forbiden403');
		}
		$data['title']="Add Menu";
		$data['app']=$this->dashboardmodel->getapp();
			$data['list_menus']=$this->menu->get_all();
		$data['module']=$this->access->getaccesscreate($this->session->userdata('nip'))->result();

		$data['menulist']=$this->dashboardmodel->menulist();
			$this->load->view('_part/atas',$data);
				$this->load->view('config/menu/add', $data);
				$this->load->view('_part/bawah', $data);

	}
	function forbiden403(){
	$this->output->set_status_header('404');
	$this->load->view('_part/403');

	}
	function action(){
		if (isset($_POST['addmenu'])) {
			$this->db->trans_begin();


			$value = [
				'menu'			=> $this->input->post('menu'),

				'parent'		=> $this->input->post('parent'),
				'link'			=> $this->input->post('link'),
				'is_published'	=> 1,
				'menu_order'	=> $this->input->post('order'),


			];
			$parent=$this->input->post('parent');

			if($parent == 0) {
				$value['level'] = 0;
				$value['icon'] 	= $this->input->post('icon');
			} else {
				$value['level'] = $this->dashboardmodel->get_level_menu($parent);
				$value['icon']	= NULL;
			}

$data_menu = $value;
//print_r($this->db->insert('menus', $data_menu, TRUE));
$this->global->create('menus', $data_menu, TRUE);
if ($this->db->trans_status() === FALSE) {
				$this->db->trans_rollback();
	$result['error']	= TRUE;
	$result['type']		= 'error';
	$result['message']	= 'Menu fail to created!';
		} else {
$this->db->trans_commit();
	$result['error']	= FALSE;
	$result['type']		= 'success';
	$result['message']	= 'Menu success to created!';
		}
echo json_encode($result);

$this->session->set_flashdata('susscess','success');
redirect('dashboard/menus');


		}
		if (isset($_POST['editmenu'])) {
			$this->db->trans_begin();

			$value = [
				'menu'			=> $this->input->post('menu'),
				'parent'		=> $this->input->post('parent'),
				'link'			=> $this->input->post('link'),
				'is_published'	=> $this->input->post('a'),
				'menu_order'	=> $this->input->post('menu_order'),
			];

			$parent = $this->input->post('parent');

			if($parent == 0) {
				$value['level'] = 0;
				$value['icon'] 	= $this->input->post('icon');
			} else {
				$value['level'] = $this->dashboardmodel->get_level_menu($parent);
				$value['icon']	= NULL;
			}

			$data_menu = $value;
			$id = $this->input->post('id');

			$this->global->update('menus', $data_menu, ['id' => $id]);


			if ($this->db->trans_status() === FALSE) {
	            $this->db->trans_rollback();
							$this->session->set_flashdata('error','error');
							redirect('dashboard/menus');

	        } else {
	        	$this->db->trans_commit();

	        }
					$this->session->set_flashdata('susscess','success');
					redirect('dashboard/menus');
exit();

		}

	}

}

/* End of file Menus.php */
/* Location: ./application/controllers/Menus.php */
