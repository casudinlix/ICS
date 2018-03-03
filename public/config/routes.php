<?php
defined('BASEPATH') OR exit('No direct script access allowed');
///untuk enterprise


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


////Enterprise
//user Group
$route['group'] = "config/usergroup";