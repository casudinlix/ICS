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
function get_all_menu(){
	$ci =& get_instance();
    $ci->load->model('model_menus','menus');
    $menus = $ci->menus->get_list_menus($ci->session->role_id, 0, NULL);
        
        $menu_list = '';
        foreach($menus as $m) {
            // level 0 as parent
            $id = $m['id'];

            // level 1
            $menu1 = $ci->menus->get_list_menus($ci->session->role_id, 1, $id);
            if(count($menu1) > 0) {
                $menu_list .= '<li><a class="dropdown-toggle"><i class="fa '.$m['icon'].'"></i> '.$m['menu'].' <span></span><b class="arrow fa fa-angle-down"></b></a><b class="arrow"></b>';
                $menu_list .= '<ul class="submenu">';
                
                foreach($menu1 as $m1) {
                    $id = $m1['id'];

                    // level 2
                    $menu2 = $ci->menus->get_list_menus($ci->session->role_id, 2, $id);
                    if(count($menu2) > 0) {
                        $menu_list .= '<li><a class="dropdown-toggle"><span class="menu-text">'.$m1['menu'].'</span><b class="arrow fa fa-angle-down"></b><i class="menu-icon fa fa-caret-right"></i></a><b class="arrow"></b>';
                        $menu_list .= '<ul class="submenu">';
                        foreach($menu2 as $m2) {
                            $id = $m2['id'];

                            // level 3
                            $menu3 = $ci->menus->get_list_menus($ci->session->role_id, 3, $id);
                            if(count($menu3) > 0) {
                                $menu_list .= '<li><a class="dropdown-toggle"><span class="menu-text">'.$m2['menu'].'</span><b class="arrow fa fa-angle-down"></b></a>';
                                $menu_list .= '<ul class="submenu">';
                                foreach($menu3 as $m3) {
                                    // $active = ($ci->uri->segment(1) == $m3['link']) ? 'class="active"':'';
                                    $menu_list .= '<li><a href="'.base_url($m3['link']).'">'.$m3['menu'].'</a></li>';
                                }
                                $menu_list .= '</ul></li>';
                            } else {
                                // $active = ($ci->uri->segment(1) == $m2['link']) ? 'class="active"':'';
                                $menu_list .= '<li><a href="'.base_url($m2['link']).'">'.$m2['menu'].'</a></li>';
                            }   
                        }
                        $menu_list .= '</ul></li>';
                    } else {
                        // $active = ($ci->uri->segment(1) == $m1['link']) ? 'class="active"':'';
                        $menu_list .= '<li><a href="'.base_url($m1['link']).'">'.$m1['menu'].'</a></li>';
                    }
                }
                $menu_list .= '</ul></li>';
            } else {
                // $active = ($ci->uri->segment(1) == $m['link']) ? 'class="active"':'';
                $menu_list .= '<li><a href="'.base_url($m['link']).'"><i class="fa '.$m['icon'].'"></i> '.$m['menu'].'</a></li>';
            }

            //dd($m['id']);
        }
        
        return $menu_list;
}
