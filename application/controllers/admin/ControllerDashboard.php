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
                'data_validasi'                     => $konsumen_validasi
            );
            $this->load->view('admin/include/index', $data);
        else :
            redirect('admin/logout');
        endif;
    }
    public function laporan()
    {
        $data_login = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
        if ($data_login > 0) :
            $data = array(
                'folder'                            => 'beranda',
                'halaman'                           => 'laporan'
            );
            $this->load->view('admin/include/index', $data);
        else :
            redirect('admin/logout');
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
