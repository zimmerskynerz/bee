<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerAuth extends CI_Controller
{

    public function login()
    {
        $data_login = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
        if ($data_login > 0) :
            redirect('admin');
        else :
            $this->load->view('admin/login/index');
        endif;
    }
    public function cek_login()
    {
        $password = md5($this->input->post('password'));
        $email    = $this->input->post('email');
        // echo "<pre>";
        // var_dump($password);
        // die;
        $cek_login = $this->db->get_where('tbl_admin', ['email' => $email, 'password' => $password, 'status' => 'AKTIF'])->row_array();
        if ($cek_login > 0) :
            $data_login = [
                'id_admin' => $cek_login['id_admin'],
                'email' => $cek_login['email'],
                'nm_lengkap' => $cek_login['nm_lengkap'],
                'no_hp' => $cek_login['no_hp'],
                'alamat' => $cek_login['alamat'],
                'tgl_gabung' => $cek_login['tgl_gabung']
            ];
            if ($cek_login['status_pegawai'] == 'ADMIN') {
                $this->session->set_userdata($data_login);
                redirect('admin');
            } else {
                $this->session->set_userdata($data_login);
                redirect('pemilik');
            }
            die;
        else :
            redirect('admin/login');
        endif;
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/login');
    }
}
        
    /* End of file  ControllerAuth.php */
