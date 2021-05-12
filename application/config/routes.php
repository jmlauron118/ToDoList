<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';
$route['Home'] = 'home/home';
$route['Login'] = 'login/index';
$route['Signup'] = 'login/signUp';
$route['Signin'] = 'login/signIn';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
