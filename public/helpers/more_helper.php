<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function changewh(){

	$wh=$this->session->userdata('wh');
$this->session->unset_userdata($wh);
unset($_SESSION['wh']);

redirect('home');
}
function this_login(){

	$CI = &get_instance();
	if ($CI->session->userdata('login')) {
		return true;
	} else {
		return false;
	}
}
function logout(){
	session_destroy();
	redirect('welcome');
}

function checkperm(){

	$this->db->get_where('view_access_level',$CI->session->userdata('login'));
}
function gede($data){
	strtoupper($data);
}
