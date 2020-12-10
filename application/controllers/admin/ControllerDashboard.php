<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerDashboard extends CI_Controller
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
            $konsumen_validasi  = $this->select_model->getValidasi();
            $data = array(
                'folder'                            => 'beranda',
                'halaman'                           => 'index',
                // Halaman Validasi
                'data_validasi'                     => $konsumen_validasi,
                // Data Admin
                'identitas'                         => $data_login
            );
            $this->load->view('admin/include/index', $data);
        else :
            redirect('admin/logout');
        endif;
    }
    public function laporan()
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
                $this->load->view('admin/include/index', $data);
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
                $this->load->view('admin/beranda/cetak_laporan', $data);
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
                $this->load->view('admin/include/index', $data);
            else :
                redirect('admin/logout');
            endif;
        endif;
    }
    public function profile()
    {
        $data_login = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
        if ($data_login > 0) :
            $data = array(
                'folder'                            => 'beranda',
                'halaman'                           => 'profile'
            );
            $this->load->view('admin/include/index', $data);
        else :
            redirect('admin/logout');
        endif;
    }
}
        
    /* End of file  ControllerDashboard.php */
