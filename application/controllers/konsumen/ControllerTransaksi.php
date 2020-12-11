<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerTransaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('konsumen/insert_model');
        $this->load->model('konsumen/select_model');
        $this->load->model('konsumen/update_model');
    }

    public function baru()
    {
        $data_login = $this->db->get_where('tbl_konsumen', ['email' => $this->session->userdata('email')])->row_array();
        if ($data_login > 0) :
            $id_konsumen    = $data_login['id_konsumen'];
            $data_transaksi = $this->select_model->getDataTransaksiKonfirmasi($id_konsumen);
            $data = array(
                'folder'                            => 'transaksi',
                'halaman'                           => 'baru',
                // Halaman data transaksi konfirmasi
                'data_konfirmasi'                   => $data_transaksi,
                // Data Admin
                'identitas'                         => $data_login
            );
            $this->load->view('konsumen/include/index', $data);
        else :
            redirect('konsumen/logout');
        endif;
    }
    public function pembayaran()
    {
        $data_login = $this->db->get_where('tbl_konsumen', ['email' => $this->session->userdata('email')])->row_array();
        if ($data_login > 0) :
            $id_konsumen    = $data_login['id_konsumen'];
            $data_pembayaran = $this->select_model->getDataTransaksiPembayaran($id_konsumen);
            $data = array(
                'folder'                            => 'transaksi',
                'halaman'                           => 'pembayaran',
                // Halaman Data Pembayaran
                'data_pembayaran'                   => $data_pembayaran,
                // Data Admin
                'identitas'                         => $data_login
            );
            $this->load->view('konsumen/include/index', $data);
        else :
            redirect('konsumen/logout');
        endif;
    }
    public function proses()
    {
        $data_login = $this->db->get_where('tbl_konsumen', ['email' => $this->session->userdata('email')])->row_array();
        if ($data_login > 0) :
            $id_konsumen    = $data_login['id_konsumen'];
            $data_proses = $this->select_model->getDataTransaksiProses($id_konsumen);
            $data = array(
                'folder'                            => 'transaksi',
                'halaman'                           => 'proses',
                // Halaman Proses
                'data_proses'                   => $data_proses,
                // Data Admin
                'identitas'                         => $data_login
            );
            $this->load->view('konsumen/include/index', $data);
        else :
            redirect('konsumen/logout');
        endif;
    }
    public function selesai()
    {
        $data_login = $this->db->get_where('tbl_konsumen', ['email' => $this->session->userdata('email')])->row_array();
        if ($data_login > 0) :
            $id_konsumen    = $data_login['id_konsumen'];
            $data_selesai = $this->select_model->getDataTransaksiSelesai($id_konsumen);
            $data = array(
                'folder'                            => 'transaksi',
                'halaman'                           => 'selesai',
                // Halaman Proses
                'data_selesai'                   => $data_selesai,
                // Data Admin
                'identitas'                         => $data_login
            );
            $this->load->view('konsumen/include/index', $data);
        else :
            redirect('konsumen/logout');
        endif;
    }
    public function crudtransaksi()
    {
        if (isset($_POST['kirim_bukti'])) :
            $this->update_model->kirim_bukti();
        endif;
        if (isset($_POST['ubah_transaksi'])) :
            $this->update_model->ubah_transaksi();
            redirect('konsumen/transaksi/baru');
        endif;
        if (isset($_POST['tolak_transaksi'])) :
            $this->update_model->tolak_transaksi();
            redirect('konsumen/transaksi/pembayaran');
        endif;
        if (isset($_POST['terima_transaksi'])) :
            $this->update_model->terima_transaksi();
            redirect('konsumen/transaksi/pembayaran');
        endif;
        if (isset($_POST['selesai_transaksi'])) :
            $this->update_model->selesai_transaksi();
            redirect('konsumen/transaksi/proses');
        endif;
    }
}
        
    /* End of file  ControllerTransaksi.php */
