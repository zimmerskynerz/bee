<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerProduk extends CI_Controller
{

    public function index()
    {
        $data = array(
            'folder'                            => 'produk',
            'halaman'                           => 'index'
        );
        $this->load->view('admin/include/index', $data);
    }
}
        
    /* End of file  ControllerProduk.php */
