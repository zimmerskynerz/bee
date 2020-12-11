<?php defined('BASEPATH') or exit('No direct script access allowed');

class Update_model extends CI_Model
{
    function terima_rekomendasi()
    {
        $status_pengjauan = $this->input->post('status_pengjauan');
        if ($status_pengjauan == 1) :
            $alasan = 'Berkas Diterima';
            $status = 'TERIMA';
            $status_rekomendasi = 'KABID';
        else :
            $alasan = $this->input->post('alasan');
            $status = 'TOLAK';
            $status_rekomendasi = 'TOLAK';
        endif;
        $id_rekomendasi = htmlentities($this->input->post('id_rekomendasi'));
        $data = array(
            'status_rekomendasi' => $status_rekomendasi
        );
        $this->db->where('id_rekomendasi', $id_rekomendasi);
        $this->db->update('tbl_rekomendasi', $data);
        $data_hsitory = array(
            'id_history' => '',
            'id_user' => $this->input->post('id_user'),
            'id_rekomendasi' => $id_rekomendasi,
            'tgl_validasi' => date('Y-m-d'),
            'status_pengajuan' => $status,
            'ket_lain' => $alasan
        );
        $this->db->insert('tbl_history', $data_hsitory);
    }
    function terima_rekomendasi_perpanjang()
    {
        $status_pengjauan = $this->input->post('status_pengjauan');
        if ($status_pengjauan == 1) :
            $alasan = 'Berkas Diterima';
            $status = 'TERIMA';
            $status_rekomendasi = 'P_KABID';
        else :
            $alasan = $this->input->post('alasan');
            $status = 'TOLAK';
            $status_rekomendasi = 'AKTIF';
        endif;
        $id_rekomendasi = htmlentities($this->input->post('id_rekomendasi'));
        $data = array(
            'status_rekomendasi' => $status_rekomendasi
        );
        $this->db->where('id_rekomendasi', $id_rekomendasi);
        $this->db->update('tbl_rekomendasi', $data);
        $data_hsitory = array(
            'id_history' => '',
            'id_user' => $this->input->post('id_user'),
            'id_rekomendasi' => $id_rekomendasi,
            'tgl_validasi' => date('Y-m-d'),
            'status_pengajuan' => $status,
            'ket_lain' => $alasan
        );
        $this->db->insert('tbl_history', $data_hsitory);
    }
    function validasiSip()
    {
        $status_validasi = htmlentities($this->input->post('status_validasi'));
        if ($status_validasi == 'P_KASI') :
            // echo 'P_KASI';
            $id_sip = htmlentities($this->input->post('id_sip'));
            $data = array(
                'status_sip' => 'P_KABID'
            );
            $this->db->where('id_sip', $id_sip);
            $this->db->update('tbl_sip', $data);
        else :
            // echo 'KASI';
            $id_sip = htmlentities($this->input->post('id_sip'));
            $data = array(
                'status_sip' => 'KABID'
            );
            $this->db->where('id_sip', $id_sip);
            $this->db->update('tbl_sip', $data);
        endif;
    }
    function kirim_bukti()
    {
        $config['upload_path']   = './assets/bayar';
        $config['allowed_types'] = 'jpeg|jpg|png|gif';
        $config['encrypt_name']  = true;
        $config['overwrite']     = true;
        $config['max_size']      = 10024; // 10MB
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto_bayar')) {
            redirect('konsumen/transaksi/baru');
        } else {
            $_FILES['file']['name'] = $_FILES['foto_bayar']['name'];
            $_FILES['file']['type'] = $_FILES['foto_bayar']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['foto_bayar']['tmp_name'];
            $_FILES['file']['size'] = $_FILES['foto_bayar']['size'];
            $uploadData = $this->upload->data();
            $data = array(
                'tgl_bayar' => date('Y-m-d'),
                'foto_bayar' => $uploadData['file_name'],
                'status_transaksi' => 'BAYAR'
            );
            $this->db->where('id_transaksi', $this->input->post('id_transaksi'));
            $this->db->update('tbl_traksaksi', $data);
            redirect('konsumen/transaksi/pembayaran');
        }
    }
}
