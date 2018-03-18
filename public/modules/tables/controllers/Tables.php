<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tables extends MX_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    this_login();
$this->load->model('usergroup', 'group');
$this->load->model('roles', 'roles');
$this->load->model('permission', 'permission');
$this->load->model('users', 'users');
$this->load->model('menus', 'menu');

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

           <a href="#" data-toggle="modal" data-target="#editgroup"  data-id="'.$field->id.'"  data-group_name="'.$field->group_name.'" class="green" title="Edit">
              <i class="ace-icon fa fa-pencil bigger-150 blue"></i></a>
                   <a href="#" data-toggle="modal" data-target=""  data-id="'.$field->id.'"  data-group_name="'.$field->group_name.'" class="red" title="Edit Privillages">
        <i class="ace-icon fa fa-users bigger-150"></i></a></div>';
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

function getusers(){
  $list = $this->users->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $field) {
      $no++;
      $row = array();
      $row[] = $no;
      $row[] = $field->user_nip;
      $row[] = $field->username;
      $row[] = $field->group_name;


      $row[] = '<div class="hidden-sm hidden-xs action-buttons">

         <a href="'.site_url('users/edit').'/'.$field->id.'" "'.$field->id.'" class="green" title="Edit">
            <i class="ace-icon fa fa-pencil bigger-150 blue"></i></a>
                 <a href="#" data-toggle="modal" data-target=""  data-id="'.$field->id.'"  data-group_name="'.$field->group_name.'" class="red" title="Edit Privillages">
      <i class="ace-icon fa fa-users bigger-150"></i></a></div>';
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
function getroles(){
  $list = $this->roles->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $field) {
      $no++;
      $row = array();
      $row[] = $no;
      $row[] = $field->roles_name;
      $row[] = $field->roles_module;
      $row[] = $field->roles_method;


if ($this->permission->getrole()==TRUE) {
$row[] = '<div class="hidden-sm hidden-xs action-buttons">

   <a href="#" data-toggle="modal" data-target="#editgroup"  data-id="'.$field->id.'"  data-group_name="'.$field->roles_name.'" class="green" title="Edit">
      <i class="ace-icon fa fa-pencil bigger-150 blue"></i></a>
           <a href="#" data-toggle="modal" data-target=""  data-id="'.$field->id.'"  data-group_name="'.$field->roles_name.'" class="red" title="Edit Privillages">
<i class="ace-icon fa fa-users bigger-150"></i></a></div>';
}else{

$row[] = '<div class="hidden-sm hidden-xs action-buttons">

   </div>';
}

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
function getmenu(){
  $list = $this->menu->get_datatables();
    $data = array();
    $no = $_POST['start'];
    foreach ($list as $field) {
      $no++;
      $row = array();
      $row[] = $no;
      $row[] = $field->menu;
       $row[] = $field->link;
      $row[] = "<i class='fa ".$field->icon."'></i>";
      if ($field->is_published==1) {
              $row[] = "YES";

      }else{$row[] = "NO";}
      



$row[] = '<div class="hidden-sm hidden-xs action-buttons">

   <a href="menus/edit/'.$field->id.'"  class="green" title="Edit">
      <i class="ace-icon fa fa-pencil bigger-150 blue"></i></a>
           <a href="#" data-toggle="modal" data-target=""  data-id="'.$field->id.'" class="red" title="Edit Privillages">
<i class="ace-icon fa fa-users bigger-150"></i></a></div>';


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
