<?php defined('BASEPATH') or exit('No direct script access allowed');

class Insert_model extends CI_Model
{
    function tambah_admin()
    {
        $data = array(
            'id_admin'              => '',
            'email'                 => $this->input->post('email'),
            'password'              => md5($this->input->post('password')),
            'nm_lengkap'            => $this->input->post('nm_lengkap'),
            'no_hp'                 => $this->input->post('no_hp'),
            'alamat'                => $this->input->post('alamat'),
            'tgl_gabung'            => date('Y-m-d'),
            'status'                => 'AKTIF',
            'status_pegawai'        => 'ADMIN'
        );
        $this->db->insert('tbl_admin', $data);
    }
    function tambah_produk()
    {
        $tgl_ini                 = date('Y-m-d H:i:s');
        $config['upload_path']   = './assets/produk';
        $config['allowed_types'] = 'jpeg|jpg|png|gif';
        $config['encrypt_name']  = true;
        $config['overwrite']     = true;
        $config['max_size']      = 10024; // 10MB
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_produk')) {
            $data = array(
                'id_produk' => '',
                'nm_produk' => htmlspecialchars($this->input->post('nm_produk')),
                'foto_produk' => 'utama.jpg',
                'detail_produk' => htmlspecialchars($this->input->post('detail_produk')),
                'harga_produk' => htmlspecialchars($this->input->post('harga_produk')),
                'status_produk' => 'ADA'
            );
            $this->db->insert('tbl_produk', $data);
        } else {
            $_FILES['file']['name'] = $_FILES['foto_produk']['name'];
            $_FILES['file']['type'] = $_FILES['foto_produk']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['foto_produk']['tmp_name'];
            $_FILES['file']['size'] = $_FILES['foto_produk']['size'];
            $uploadData = $this->upload->data();
            $data = array(
                'id_produk' => '',
                'nm_produk' => htmlspecialchars($this->input->post('nm_produk')),
                'foto_produk' => $uploadData['file_name'],
                'detail_produk' => htmlspecialchars($this->input->post('detail_produk')),
                'harga_produk' => htmlspecialchars($this->input->post('harga_produk')),
                'status_produk' => 'ADA'
            );
            $this->db->insert('tbl_produk', $data);
        }
    }
}
