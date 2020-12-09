<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerTransaksi extends CI_Controller
{

    public function baru()
    {
        $data_login = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
        if ($data_login > 0) :
            $data = array(
                'folder'                            => 'transaksi',
                'halaman'                           => 'baru'
            );
            $this->load->view('admin/include/index', $data);
        else :
            redirect('admin/logout');
        endif;
    }
    public function pembayaran()
    {
        $data_login = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
        if ($data_login > 0) :
            $data = array(
                'folder'                            => 'transaksi',
                'halaman'                           => 'pembayaran'
            );
            $this->load->view('admin/include/index', $data);
        else :
            redirect('admin/logout');
        endif;
    }
    public function proses()
    {
        $data_login = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
        if ($data_login > 0) :
            $data = array(
                'folder'                            => 'transaksi',
                'halaman'                           => 'proses'
            );
            $this->load->view('admin/include/index', $data);
        else :
            redirect('admin/logout');
        endif;
    }
    public function selesai()
    {
        $data_login = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
        if ($data_login > 0) :
            $data = array(
                'folder'                            => 'transaksi',
                'halaman'                           => 'selesai'
            );
            $this->load->view('admin/include/index', $data);
        else :
            redirect('admin/logout');
        endif;
    }
    public function crudtransaksi()
    {
    }
}
        
    /* End of file  ControllerTransaksi.php */
