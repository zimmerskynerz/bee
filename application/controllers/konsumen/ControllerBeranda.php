<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerBeranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('konsumen/insert_model');
        $this->load->model('konsumen/select_model');
        $this->load->model('konsumen/update_model');
    }
    public function index()
    {
        $data_login = $this->db->get_where('tbl_konsumen', ['email' => $this->session->userdata('email'), 'status_validasi' => 'AKTIF'])->row_array();
        if ($data_login > 0) :
            $data_produk = $this->select_model->getDataProduk();
            $data = array(
                'folder' => 'beranda',
                'halaman' => 'index',
                'identitas' => $data_login,
                'data_produk' => $data_produk
            );
            $this->load->view('konsumen/include/index', $data);
        else :
            redirect('konsumen/login');
        endif;
    }
}
        
    /* End of file  ControllerBeranda.php */
