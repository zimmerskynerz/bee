<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Halaman Admin
// Menu Dashboard
$route['admin/']                                                = 'admin/ControllerDashboard/index';
$route['admin/dashboard']                                       = 'admin/ControllerDashboard/index';
$route['admin']                                                 = 'admin/ControllerDashboard/index';
$route['admin/profile']                                         = 'admin/ControllerDashboard/profile';
$route['admin/crudprofile']                                     = 'admin/ControllerDashboard/crudprofile';
// Menu Pengguna
$route['admin/pengguna/admin']                                  = 'admin/ControllerPengguna/admin';
$route['admin/pengguna/validasi']                               = 'admin/ControllerPengguna/validasi';
$route['admin/pengguna/konsumen']                               = 'admin/ControllerPengguna/konsumen';
$route['admin/pengguna/crudpengguna']                           = 'admin/ControllerPengguna/crudpengguna';
