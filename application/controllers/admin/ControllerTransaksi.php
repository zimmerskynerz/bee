<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerTransaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/insert_model');
        $this->load->model('admin/select_model');
        $this->load->model('admin/update_model');
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
            $this->load->view('admin/include/index', $data);
        else :
            redirect('admin/logout');
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
            $this->load->view('admin/include/index', $data);
        else :
            redirect('admin/logout');
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
            $this->load->view('admin/include/index', $data);
        else :
            redirect('admin/logout');
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
            $this->load->view('admin/include/index', $data);
        else :
            redirect('admin/logout');
        endif;
    }
    public function crudtransaksi()
    {
        if (isset($_POST['kirim_transaksi'])) :
            $this->insert_model->tambah_transaksi();
            redirect('admin/transaksi/baru');
        endif;
        if (isset($_POST['batal_transaksi'])) :
            $this->update_model->delete_transaksi();
            redirect('admin/transaksi/baru');
        endif;
        if (isset($_POST['ubah_transaksi'])) :
            $this->update_model->ubah_transaksi();
            redirect('admin/transaksi/baru');
        endif;
        if (isset($_POST['tolak_transaksi'])) :
            $this->update_model->tolak_transaksi();
            redirect('admin/transaksi/pembayaran');
        endif;
        if (isset($_POST['terima_transaksi'])) :
            $this->update_model->terima_transaksi();
            redirect('admin/transaksi/pembayaran');
        endif;
        if (isset($_POST['selesai_transaksi'])) :
            $this->update_model->selesai_transaksi();
            redirect('admin/transaksi/proses');
        endif;
    }
}
        
    /* End of file  ControllerTransaksi.php */
