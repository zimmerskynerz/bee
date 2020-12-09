<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerProduk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/insert_model');
        $this->load->model('admin/select_model');
        $this->load->model('admin/update_model');
    }
    public function index()
    {
        $data_login = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
        if ($data_login > 0) :
            $data_produk = $this->db->get_where('tbl_produk', ['status_produk' => 'ADA'])->result();
            $data = array(
                'folder'                            => 'produk',
                'halaman'                           => 'index',
                // Halaman Data Produk
                'data_produk'                       => $data_produk
            );
            $this->load->view('admin/include/index', $data);
        else :
            redirect('admin/logout');
        endif;
    }
    public function crudproduk()
    {
        if (isset($_POST['simpan_produk'])) :
            $this->insert_model->tambah_produk();
            redirect('admin/produk');
        endif;
    }
}
        
    /* End of file  ControllerProduk.php */
