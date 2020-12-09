<?php defined('BASEPATH') or exit('No direct script access allowed');

class Update_model extends CI_Model
{
    function reset_pass()
    {
        $data = array(
            'password' => 'ADMIN123abc'
        );
        $this->db->where('id_admin', $this->input->post('id_admin'));
        $this->db->update('tbl_admin', $data);
    }
    function ubah_admin()
    {
        $data = array(
            'email'                 => $this->input->post('email'),
            'nm_lengkap'            => $this->input->post('nm_lengkap'),
            'no_hp'                 => $this->input->post('no_hp'),
            'alamat'                => $this->input->post('alamat')
        );
        $this->db->where('id_admin', $this->input->post('id_admin'));
        $this->db->update('tbl_admin', $data);
    }
}
