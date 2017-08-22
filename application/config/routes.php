<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login'] = 'log/in';
$route['logout'] = 'log/out';
$route['profil'] = 'log/profil';

$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
