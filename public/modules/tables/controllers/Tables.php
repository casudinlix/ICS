<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tables extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
$this->load->model('usergroup', 'group');
    if(!$this->input->is_ajax_request()){
			exit('No direct script access allowed :)');
		}
  }

  function index()
  {

  }
  function getusergroup(){
    $list = $this->group->get_datatables();
  		$data = array();
  		$no = $_POST['start'];
  		foreach ($list as $field) {
  			$no++;
  			$row = array();
  			$row[] = $no;

  			$row[] = $field->group_name;
  			$row[] = $field->group_desc;

  			$row[] = '<div class="hidden-sm hidden-xs action-buttons">

  				 <a href="#" data-toggle="modal" data-target="#editgroup"  data-id="'.$field->id.'" data-group_desc="'.$field->group_desc.'" data-group_name="'.$field->group_name.'" class="green" title="Edit">
  				 		<i class="ace-icon fa fa-pencil bigger-150 blue"></i></a>


                   <a href="#" data-toggle="modal" data-target=""  data-id="'.$field->id.'" data-group_desc="'.$field->group_desc.'" data-group_name="'.$field->group_name.'" class="red" title="Edit Privillages">
                      <i class="ace-icon fa fa-users bigger-150"></i></a></div>'
                      ;


  			$data[] = $row;
  		}

  		$output = array(
  			"draw" => $_POST['draw'],
  			"recordsTotal" => $this->group->count_all(),
  			"recordsFiltered" => $this->group->count_filtered(),
  			"data" => $data,
  		);
  		//output dalam format JSON
  		echo json_encode($output);

  }

}
