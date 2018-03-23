<?php
defined('BASEPATH') OR exit('No direct script access allowed');
///untuk enterprise


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


////Enterprise
//user Group
//setting
$route['dashboard/menus'] = "dashboard/config/menus";
$route['dashboard/users'] = "dashboard/config/users";
$route['dashboard/group'] = "dashboard/config/group";

$route['dashboard/menus/add'] = "dashboard/config/menus/menuadd";
$route['dashboard/users/add'] = "dashboard/config/users/usersadd";

//action
$route['dashboard/menus/action']="dashboard/config/menus/action";
$route['dashboard/users/action']="dashboard/config/users/action";

//aaction

$route['dashboard/tes'] = "dashboard/tes";

$route['forbiden403'] = "dashboard/forbidden";


//Untuk edit
$route['dashboard/menus/edit/(:any)'] = "dashboard/config/menus/editmenu/$1";
$route['dashboard/users/edit/(:any)'] = "dashboard/config/users/editusers/$1";

$route['(\w{2})/(:any)_(:num)'] = "home/viewProduct/$3";
$route['shop-product_(:num)'] = "home/viewProduct/$3";
