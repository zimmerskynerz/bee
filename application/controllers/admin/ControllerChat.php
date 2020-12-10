<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerChat extends CI_Controller
{

    public function index()
    {
        $data_login = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
        if ($data_login > 0) :
            $data = array(
                'folder'                            => 'chat',
                'halaman'                           => 'index',
                // Data Admin
                'identitas'                         => $data_login
            );
            $this->load->view('admin/include/index', $data);
        else :
            redirect('admin/logout');
        endif;
    }
}
        
    /* End of file  ControllerChat.php */
