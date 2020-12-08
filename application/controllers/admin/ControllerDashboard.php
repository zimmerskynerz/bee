<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerDashboard extends CI_Controller
{

    public function index()
    {
        $data = array(
            'folder'                            => 'beranda',
            'halaman'                           => 'index'
        );
        $this->load->view('admin/include/index', $data);
    }
    public function laporan()
    {
        $data = array(
            'folder'                            => 'beranda',
            'halaman'                           => 'laporan'
        );
        $this->load->view('admin/include/index', $data);
    }
    public function profile()
    {
        $data = array(
            'folder'                            => 'beranda',
            'halaman'                           => 'profile'
        );
        $this->load->view('admin/include/index', $data);
    }
    public function logout()
    {
        $data = array(
            'folder'                            => 'beranda',
            'halaman'                           => 'index'
        );
        $this->load->view('admin/include/index', $data);
    }
}
        
    /* End of file  ControllerDashboard.php */
