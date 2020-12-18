<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ControllerChat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('konsumen/insert_model');
        $this->load->model('konsumen/select_model');
        $this->load->model('konsumen/update_model');
    }

    public function index()
    {
        $data_login = $this->db->get_where('tbl_konsumen', ['email' => $this->session->userdata('email'), 'status_validasi' => 'AKTIF'])->row_array();
        if ($data_login > 0) :
            $data_produk = $this->select_model->getDataProduk();
            // $chat = $this->db->get_where('tbl_chat', ['id_konsumen' => $this->session->userdata('id_konsumen')])->row_array();
            $chat = $this->db->select('*')
                ->where('id_konsumen', $this->session->userdata('id_konsumen'))
                ->get('tbl_chat')
                ->result();
            $data = array(
                'folder'        => 'chat',
                'halaman'       => 'index',
                'identitas'     => $data_login,
                'data_produk'   => $data_produk,
                'chat'          => $chat
            );
            $this->load->view('konsumen/include/index', $data);
        else :
            redirect('konsumen/login');
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
            'id_konsumen'   => $this->session->userdata('id_konsumen'),
            'id_admin'      => 1,
            'sender'        => 'K',
            'type'          => 'TEXT',
            'isi_chat'      => $this->input->post('pesan')
        ];

        $insert = $this->db->insert('tbl_chat', $data);
        echo json_encode($insert);
    }

    /**
     * Store chat to database
     * 
     * @param string post
     * @return void
     */
    public function storeImg()
    {
        $config['upload_path']   = './assets/img';
        $config['allowed_types'] = 'jpeg|jpg|png|gif';
        $config['encrypt_name']  = true;
        $config['overwrite']     = true;
        $config['max_size']      = 10024; // 10MB
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
            $_FILES['file']['name'] = $_FILES['gambar']['name'];
            $_FILES['file']['type'] = $_FILES['gambar']['type'];
            $_FILES['file']['tmp_name'] = $_FILES['gambar']['tmp_name'];
            $_FILES['file']['size'] = $_FILES['gambar']['size'];
            $uploadData = $this->upload->data();
            $data = [
                'id_konsumen'   => $this->session->userdata('id_konsumen'),
                'id_admin'      => 1,
                'sender'        => 'K',
                'type'          => 'GAMBAR',
                'isi_chat'      => $uploadData['file_name']
            ];

            $this->db->insert('tbl_chat', $data);
            echo json_encode(['status' => 'success', 'img' => $uploadData['file_name']]);
        } else {
            echo json_encode(['status' => 'error']);
        }
    }
}
        
    /* End of file  ControllerChat.php */
