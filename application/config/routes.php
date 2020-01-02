<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['posts/add'] = 'posts/add';
$route['posts/update'] = 'posts/update';
$route['posts/(:any)'] = 'posts/view/$1';
$route['posts'] = 'posts/index';
$route['default_controller'] = 'pages';
$route['(:any)'] = 'pages/index/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
