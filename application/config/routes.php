<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Halaman Admin
// Halaman Login Admin
$route['admin/login']                                           = 'admin/ControllerAuth/login';
$route['admin/cek_login']                                       = 'admin/ControllerAuth/cek_login';
$route['admin/logout']                                          = 'admin/ControllerAuth/logout';
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
// Menu Produk
$route['admin/produk']                                          = 'admin/ControllerProduk/index';
$route['admin/produk/crudproduk']                               = 'admin/ControllerProduk/crudproduk';
// Menu Pesan Chat &Nego
$route['admin/chat/inbox']                                      = 'admin/ControllerChat/index';
$route['admin/chat/store']                                      = 'admin/ControllerChat/store';
// Menu Transaksi
$route['admin/transaksi/baru']                                  = 'admin/ControllerTransaksi/baru';
$route['admin/transaksi/pembayaran']                            = 'admin/ControllerTransaksi/pembayaran';
$route['admin/transaksi/proses']                                = 'admin/ControllerTransaksi/proses';
$route['admin/transaksi/selesai']                               = 'admin/ControllerTransaksi/selesai';
$route['admin/transaksi/crudtransaksi']                         = 'admin/ControllerTransaksi/crudtransaksi';
// Menu Akun
$route['admin/akun/laporan']                                    = 'admin/ControllerDashboard/Laporan';
$route['admin/akun/profile']                                    = 'admin/ControllerDashboard/profile';

// Halaman Pemilik
// Dashboard Laporan Penjualan
$route['pemilik']                                               = 'pemilik/ControllerDashboard/index';
$route['pemilik/dashboard']                                     = 'pemilik/ControllerDashboard/index';
$route['pemilik/laporan']                                       = 'pemilik/ControllerDashboard/index';
$route['pemilik/profile']                                       = 'pemilik/ControllerDashboard/profile';
$route['pemilik/crudpemilik']                                   = 'pemilik/ControllerDashboard/crudpemilik';
// Halaman Transaksi
$route['pemilik/transaksi/baru']                                = 'pemilik/ControllerTransaksi/baru';
$route['pemilik/transaksi/pembayaran']                          = 'pemilik/ControllerTransaksi/pembayaran';
$route['pemilik/transaksi/proses']                              = 'pemilik/ControllerTransaksi/proses';
$route['pemilik/transaksi/selesai']                             = 'pemilik/ControllerTransaksi/selesai';
// Halaman Akun
$route['pemilik/akun/laporan']                                  = 'pemilik/ControllerDashboard/index';
$route['pemilik/logout']                                        = 'admin/ControllerAuth/logout';


// Halaman Konsumen
// Halaman Utama Tanpa Login
$route['konsumen/login']                                        = 'konsumen/ControllerAkun/login';
$route['konsumen/daftar']                                       = 'konsumen/ControllerAkun/daftar';
$route['konsumen/cek_login']                                    = 'konsumen/ControllerAkun/cek_login';
$route['konsumen/proses_daftar']                                = 'konsumen/ControllerAkun/proses_daftar';
// Halaman Konsumen Login
$route['konsumen']                                              = 'konsumen/ControllerBeranda/index';
$route['konsumen/dashboard']                                    = 'konsumen/ControllerBeranda/index';
// Halaman Chat dan Nego
$route['konsumen/chat/inbox']                                   = 'konsumen/ControllerChat/index';
$route['konsumen/chat/store']                                   = 'konsumen/ControllerChat/store';
// Halaman Transaksi
$route['konsumen/transaksi/baru']                                = 'konsumen/ControllerTransaksi/baru';
$route['konsumen/transaksi/pembayaran']                          = 'konsumen/ControllerTransaksi/pembayaran';
$route['konsumen/transaksi/proses']                              = 'konsumen/ControllerTransaksi/proses';
$route['konsumen/transaksi/selesai']                             = 'konsumen/ControllerTransaksi/selesai';
$route['konsumen/transaksi/crudtransaksi']                       = 'konsumen/ControllerTransaksi/crudtransaksi';
