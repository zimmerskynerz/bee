<?php defined('BASEPATH') or exit('No direct script access allowed');

class Update_model extends CI_Model
{
    function reset_pass()
    {
        $data = array(
            'password' => 'ADMIN123abc'
        );
        $this->db->where('id_admin', $this->input->post('id_admin'));
        $this->db->update('tbl_admin', $data);
    }
    function ubah_admin()
    {
        $data = array(
            'email'                 => $this->input->post('email'),
            'nm_lengkap'            => $this->input->post('nm_lengkap'),
            'no_hp'                 => $this->input->post('no_hp'),
            'alamat'                => $this->input->post('alamat')
        );
        $this->db->where('id_admin', $this->input->post('id_admin'));
        $this->db->update('tbl_admin', $data);
    }
    function validasi_konsumen()
    {
        $data = array(
            'status_validasi'                 => 'AKTIF'
        );
        $this->db->where('id_konsumen', $this->input->post('id_konsumen'));
        $this->db->update('tbl_konsumen', $data);
    }
    function ubah_produk()
    {
        $config['upload_path']   = './assets/produk';
        $config['allowed_types'] = 'jpeg|jpg|png|gif';
        $config['encrypt_name']  = true;
        $config['overwrite']     = true;
        $config['max_size']      = 10024; // 10MB
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_produk')) {
            $data = array(
                'nm_produk' => htmlspecialchars($this->input->post('nm_produk')),
                'detail_produk' => htmlspecialchars($this->input->post('detail_produk')),
                'harga_produk' => htmlspecialchars($this->input->post('harga_produk'))
            );
            $this->db->where('id_produk', $this->input->post('id_produk'));
            $this->db->update('tbl_produk', $data);
        } else {
            $_FILES['file']['name'] = $_FILES['foto_produk']['name'];
            $_FILES['file']['type'] = $_FILES['foto_produk']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['foto_produk']['tmp_name'];
            $_FILES['file']['size'] = $_FILES['foto_produk']['size'];
            $uploadData = $this->upload->data();
            $data = array(
                'nm_produk' => htmlspecialchars($this->input->post('nm_produk')),
                'foto_produk' => $uploadData['file_name'],
                'detail_produk' => htmlspecialchars($this->input->post('detail_produk')),
                'harga_produk' => htmlspecialchars($this->input->post('harga_produk'))
            );
            $this->db->where('id_produk', $this->input->post('id_produk'));
            $this->db->update('tbl_produk', $data);
            unlink('./assets/produk/' . $this->input->post('foto_produk_lama'));
        }
    }
    function delete_transaksi()
    {
        $this->db->where('id_transaksi', $this->input->post('id_transaksi'));
        $this->db->delete('tbl_traksaksi');
    }
    function tolak_transaksi()
    {
        $data = array(
            'status_transaksi' => 'KONFIRMASI',
            'ket_lain'         => 'BUKTI TRANFER PALSU ATAU TIDAK TERBACA OLEH SISTEM'
        );
        $this->db->where('id_transaksi', $this->input->post('id_transaksi'));
        $this->db->update('tbl_traksaksi', $data);
        unlink('./assets/bayar/' . $this->input->post('foto_bayar'));
    }
    function ubah_transaksi()
    {
        $data = array(
            'jml_barang' => $this->input->post('jml_barang'),
            'total_harga' => $this->input->post('total_harga')
        );
        $this->db->where('id_transaksi', $this->input->post('id_transaksi'));
        $this->db->update('tbl_traksaksi', $data);
    }
    function terima_transaksi()
    {
        $data = array(
            'status_transaksi' => 'PROSES',
            'ket_lain'         => 'BARANG ANDA SEDANG DALAM PROSES PEMBUATAN'
        );
        $this->db->where('id_transaksi', $this->input->post('id_transaksi'));
        $this->db->update('tbl_traksaksi', $data);
    }
    function selesai_transaksi()
    {
        $data = array(
            'status_transaksi' => 'SELESAI',
            'ket_lain'         => 'BARANG ANDA SEDANG DIKIRIM. NO RESI : ' . $this->input->post('no_resi') . '',
            'tgl_selesai'      => date('Y-m-d')
        );
        $this->db->where('id_transaksi', $this->input->post('id_transaksi'));
        $this->db->update('tbl_traksaksi', $data);
    }
}
