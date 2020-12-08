<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerPengguna extends CI_Controller
{

    public function admin()
    {
        $data = array(
            'folder'                            => 'pengguna',
            'halaman'                           => 'admin'
        );
        $this->load->view('admin/include/index', $data);
    }
    public function validasi()
    {
        $data = array(
            'folder'                            => 'pengguna',
            'halaman'                           => 'validasi'
        );
        $this->load->view('admin/include/index', $data);
    }
    public function konsumen()
    {
        $data = array(
            'folder'                            => 'pengguna',
            'halaman'                           => 'konsumen'
        );
        $this->load->view('admin/include/index', $data);
    }
}
        
    /* End of file  ControllerPengguna.php */
