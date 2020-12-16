<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerChat extends CI_Controller
{

    public function index()
    {
        $data_login = $this->db->get_where('tbl_admin', ['email' => $this->session->userdata('email')])->row_array();
        if ($data_login > 0) :
            // var_dump($_SESSION);
            // die();
            $data_produk = $this->db->get_where('tbl_produk', ['status_produk' => 'ADA'])->result();
            $chat = $this->db->select('*')
                ->get('tbl_chat')
                ->result();

            $people = $this->db->select('tbl_chat.id_konsumen, tbl_chat.sender, tbl_konsumen.nm_konsumen, tbl_konsumen.foto')
                ->join('tbl_konsumen', 'tbl_chat.id_konsumen = tbl_konsumen.id_konsumen')
                ->where('tbl_chat.sender', 'K')
                ->group_by('tbl_chat.id_konsumen')
                ->get('tbl_chat')
                ->result();
            $data = array(
                'folder'            => 'chat',
                'halaman'           => 'index',
                // Data Admin
                'identitas'         => $data_login,
                'chat'              => $chat,
                'people'            => $people,
                'data_produk'       => $data_produk
            );
            $this->load->view('admin/include/index', $data);
        else :
            redirect('admin/logout');
        endif;
    }

    /**
     * Store chat to database
     * 
     * @param string post
     * @return json
     */
    public function store()
    {
        // $store = $this->db->
        $data = [
            'id_konsumen'   => $this->input->post('id_konsumen'),
            'id_admin'      => $this->session->userdata('id_admin'),
            'sender'        => 'A',
            'type'          => 'TEXT',
            'isi_chat'      => $this->input->post('pesan')
        ];

        $insert = $this->db->insert('tbl_chat', $data);
        echo json_encode($insert);
    }
}
        
    /* End of file  ControllerChat.php */
