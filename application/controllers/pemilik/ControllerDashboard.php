<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerDashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pemilik/insert_model');
        $this->load->model('pemilik/select_model');
        $this->load->model('pemilik/update_model');
    }
    public function index()
    {
        if (isset($_POST['cek_laporan'])) :
            $data_login = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
            if ($data_login > 0) :
                $data_selesai = $this->select_model->getDataTransaksiSelesaiTanggal();
                $data = array(
                    'folder'                            => 'beranda',
                    'halaman'                           => 'laporan',
                    // Halaman Data Laporan Transaksi
                    'data_selesai'                      => $data_selesai,
                    // Data Admin
                    'identitas'                         => $data_login
                );
                $this->load->view('pemilik/include/index', $data);
            else :
                redirect('admin/logout');
            endif;
        elseif (isset($_POST['cetak_laporan'])) :
            $data_login = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
            if ($data_login > 0) :
                $data_selesai = $this->select_model->getDataTransaksiSelesaiTanggal();
                $data = array(
                    'data_selesai'                      => $data_selesai
                );
                $this->load->view('pemilik/beranda/cetak_laporan', $data);
            else :
                redirect('admin/logout');
            endif;
        else :
            $data_login = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
            if ($data_login > 0) :
                $data_selesai = $this->select_model->getDataTransaksiSelesai();
                $data = array(
                    'folder'                            => 'beranda',
                    'halaman'                           => 'laporan',
                    // Halaman Data Laporan Transaksi
                    'data_selesai'                      => $data_selesai,
                    // Data Admin
                    'identitas'                         => $data_login
                );
                $this->load->view('pemilik/include/index', $data);
            else :
                redirect('admin/logout');
            endif;
        endif;
    }
}
        
    /* End of file  ControllerDashboard.php */
