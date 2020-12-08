<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerTransaksi extends CI_Controller
{

    public function baru()
    {
        $data = array(
            'folder'                            => 'transaksi',
            'halaman'                           => 'baru'
        );
        $this->load->view('admin/include/index', $data);
    }
    public function pembayaran()
    {
        $data = array(
            'folder'                            => 'transaksi',
            'halaman'                           => 'pembayaran'
        );
        $this->load->view('admin/include/index', $data);
    }
    public function proses()
    {
        $data = array(
            'folder'                            => 'transaksi',
            'halaman'                           => 'proses'
        );
        $this->load->view('admin/include/index', $data);
    }
    public function selesai()
    {
        $data = array(
            'folder'                            => 'transaksi',
            'halaman'                           => 'selesai'
        );
        $this->load->view('admin/include/index', $data);
    }
    public function crudtransaksi()
    {
    }
}
        
    /* End of file  ControllerTransaksi.php */
