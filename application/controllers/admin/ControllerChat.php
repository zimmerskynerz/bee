<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerChat extends CI_Controller
{

    public function index()
    {
        $data = array(
            'folder'                            => 'chat',
            'halaman'                           => 'index'
        );
        $this->load->view('admin/include/index', $data);
    }
}
        
    /* End of file  ControllerChat.php */
