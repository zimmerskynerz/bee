<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerAuth extends CI_Controller
{

    public function login()
    {
        $this->load->view('admin/login/index');
    }
    public function cek_login()
    {
        $password = md5($this->input->post('password'));
        $email    = $this->input->post('email');
        $cek_login = $this->db->select('tbl_admin', ['email' => $email, 'password' => $password, 'status' => 'AKTIF'])->row_array();
        if ($cek_login > 0) :
            $data_login = [
                'id_admin' => $cek_login['id_admin'],
                'email' => $cek_login['email'],
                'nm_lengkap' => $cek_login['nm_lengkap'],
                'no_hp' => $cek_login['no_hp'],
                'alamat' => $cek_login['alamat'],
                'tgl_gabung' => $cek_login['tgl_gabung']
            ];
            if ($data['query_login']['level'] == 'admin') {
                $this->session->set_userdata($data_login);
                redirect('admin');
            } elseif ($data['query_login']['level'] == 'guru') {
                $this->session->set_userdata($data_login);
                redirect('guru');
            } else {
                $this->session->set_userdata($data_login);
                redirect('siswa');
            }
            die;
        else :
            redirect('admin/login');
        endif;
    }
}
        
    /* End of file  ControllerAuth.php */
