<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerTransaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pemilik/insert_model');
        $this->load->model('pemilik/select_model');
        $this->load->model('pemilik/update_model');
    }

    public function baru()
    {
        $data_login = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
        if ($data_login > 0) :
            $data_transaksi = $this->select_model->getDataTransaksiKonfirmasi();
            $data = array(
                'folder'                            => 'transaksi',
                'halaman'                           => 'baru',
                // Halaman data transaksi konfirmasi
                'data_konfirmasi'                   => $data_transaksi,
                // Data Admin
                'identitas'                         => $data_login
            );
            $this->load->view('pemilik/include/index', $data);
        else :
            redirect('pemilik/logout');
        endif;
    }
    public function pembayaran()
    {
        $data_login = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
        if ($data_login > 0) :
            $data_pembayaran = $this->select_model->getDataTransaksiPembayaran();
            $data = array(
                'folder'                            => 'transaksi',
                'halaman'                           => 'pembayaran',
                // Halaman Data Pembayaran
                'data_pembayaran'                   => $data_pembayaran,
                // Data Admin
                'identitas'                         => $data_login
            );
            $this->load->view('pemilik/include/index', $data);
        else :
            redirect('pemilik/logout');
        endif;
    }
    public function proses()
    {
        $data_login = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
        if ($data_login > 0) :
            $data_proses = $this->select_model->getDataTransaksiProses();
            $data = array(
                'folder'                            => 'transaksi',
                'halaman'                           => 'proses',
                // Halaman Proses
                'data_proses'                   => $data_proses,
                // Data Admin
                'identitas'                         => $data_login
            );
            $this->load->view('pemilik/include/index', $data);
        else :
            redirect('pemilik/logout');
        endif;
    }
    public function selesai()
    {
        $data_login = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
        if ($data_login > 0) :
            $data_selesai = $this->select_model->getDataTransaksiSelesai();
            $data = array(
                'folder'                            => 'transaksi',
                'halaman'                           => 'selesai',
                // Halaman Proses
                'data_selesai'                   => $data_selesai,
                // Data Admin
                'identitas'                         => $data_login
            );
            $this->load->view('pemilik/include/index', $data);
        else :
            redirect('pemilik/logout');
        endif;
    }
}
        
    /* End of file  ControllerTransaksi.php */
