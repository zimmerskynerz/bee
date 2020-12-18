<?php defined('BASEPATH') or exit('No direct script access allowed');

class Insert_model extends CI_Model
{
    function tambah_konsumen()
    {
        $config['upload_path']   = './assets/konsumen';
        $config['allowed_types'] = 'jpeg|jpg|png|gif';
        $config['encrypt_name']  = true;
        $config['overwrite']     = true;
        $config['max_size']      = 10024; // 10MB
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
            $data = array(
                'id_konsumen'     => '',
                'email'           => $this->input->post('email'),
                'password'        => md5($this->input->post('password')),
                'nm_konsumen'     => $this->input->post('nm_konsumen'),
                'no_hp'           => $this->input->post('no_hp'),
                'alamat'          => $this->input->post('alamat'),
                'foto'            => 'default.png',
                'status_validasi' => 'DAFTAR',
                'tgl_daftar'      => date('Y-m-d'),
                'ket_lain'        => 'DAFTAR'
            );
        } else {
            $_FILES['file']['name'] = $_FILES['foto']['name'];
            $_FILES['file']['type'] = $_FILES['foto']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['foto']['tmp_name'];
            $_FILES['file']['size'] = $_FILES['foto']['size'];
            $uploadData = $this->upload->data();
            $data = array(
                'id_konsumen'     => '',
                'email'           => $this->input->post('email'),
                'password'        => md5($this->input->post('password')),
                'nm_konsumen'     => $this->input->post('nm_konsumen'),
                'no_hp'           => $this->input->post('no_hp'),
                'alamat'          => $this->input->post('alamat'),
                'foto'            => $uploadData['file_name'],
                'status_validasi' => 'DAFTAR',
                'tgl_daftar'      => date('Y-m-d'),
                'ket_lain'        => 'DAFTAR'
            );
        }
        $this->db->insert('tbl_konsumen', $data);
    }
}
