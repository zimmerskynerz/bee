<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerPengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/insert_model');
        $this->load->model('admin/select_model');
        $this->load->model('admin/update_model');
    }
    public function admin()
    {
        $data_login = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
        if ($data_login > 0) :
            $id_admin   = $data_login['id_admin'];
            $data_admin = $this->select_model->getDataAdmin($id_admin);
            $data = array(
                'folder'                            => 'pengguna',
                'halaman'                           => 'admin',
                // Data Admin
                'data_admin'                        => $data_admin
            );
            $this->load->view('admin/include/index', $data);
        else :
            redirect('admin/logout');
        endif;
    }
    public function validasi()
    {
        $data_login = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
        $konsumen_validasi  = $this->select_model->getValidasi();
        if ($data_login > 0) :
            $data = array(
                'folder'                            => 'pengguna',
                'halaman'                           => 'validasi',
                // Halaman Validasi
                'data_validasi'                     => $konsumen_validasi
            );
            $this->load->view('admin/include/index', $data);
        else :
            redirect('admin/logout');
        endif;
    }
    public function konsumen()
    {
        $data_login = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
        if ($data_login > 0) :
            $data_konsumen  = $this->select_model->getKonsumen();
            $data = array(
                'folder'                            => 'pengguna',
                'halaman'                           => 'konsumen',
                // Halaman Konsumen
                'data_konsumen'                     => $data_konsumen
            );
            $this->load->view('admin/include/index', $data);
        else :
            redirect('admin/logout');
        endif;
    }
    public function crudpengguna()
    {
        if (isset($_POST['simpan_admin'])) :
            $this->insert_model->tambah_admin();
            redirect('admin/pengguna/admin');
        endif;
        if (isset($_POST['reset_pass'])) :
            $this->update_model->reset_pass();
            redirect('admin/pengguna/admin');
        endif;
        if (isset($_POST['ubah_admin'])) :
            $this->update_model->ubah_admin();
            redirect('admin/pengguna/admin');
        endif;
        if (isset($_POST['validasi_konsumen'])) :
            $this->update_model->validasi_konsumen();
            redirect('admin/pengguna/konsumen');
        endif;
    }
}
        
    /* End of file  ControllerPengguna.php */
