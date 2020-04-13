<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['news'] = 'news/index';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
