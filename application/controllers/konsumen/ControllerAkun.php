<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerAkun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('konsumen/insert_model');
        $this->load->model('konsumen/select_model');
        $this->load->model('konsumen/update_model');
    }
    public function login()
    {
        $data_login = $this->db->get_where('tbl_konsumen', ['email' => $this->session->userdata('email'), 'status_validasi' => 'AKTIF'])->row_array();
        if ($data_login > 0) :
            redirect('konsumen');
        else :
            $this->load->view('konsumen/login/index');
        endif;
    }
    public function daftar()
    {
        $data_login = $this->db->get_where('tbl_konsumen', ['email' => $this->session->userdata('email'), 'status_validasi' => 'AKTIF'])->row_array();
        if ($data_login > 0) :
            redirect('konsumen');
        else :
            $this->load->view('konsumen/login/daftar');
        endif;
    }
    public function proses_daftar()
    {
        $this->insert_model->tambah_konsumen();
        redirect('konsumen/login');
    }
    public function cek_login()
    {
        $email     = $this->input->post('email');
        $password  = md5($this->input->post('password'));
        $cek_login = $this->db->get_where('tbl_konsumen', ['email' => $email, 'password' => $password, 'status_validasi' => 'AKTIF'])->row_array();
        if ($cek_login > 0) :
            $data_login = [
                'id_konsumen' => $cek_login['id_konsumen'],
                'email' => $cek_login['email'],
                'nm_konsumen' => $cek_login['nm_konsumen'],
                'no_hp' => $cek_login['no_hp'],
                'alamat' => $cek_login['alamat'],
                'foto' => $cek_login['foto'],
                'tgl_daftar' => $cek_login['tgl_daftar']
            ];
            $this->session->set_userdata($data_login);
            redirect('konsumen');
            die;
        else :
            redirect('konsumen/login');
        endif;
    }
}
        
    /* End of file  ControllerAkun.php */
