<?php defined('BASEPATH') or exit('No direct script access allowed');

class Select_model extends CI_Model
{
    function getDataAdmin($id_admin)
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_admin');
        $query  = $this->db->where('id_admin !=', $id_admin);
        $query  = $this->db->where('status_pegawai', 'ADMIN');
        $query  = $this->db->get();
        return $query->result();
    }
    function getValidasi()
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_konsumen');
        $query  = $this->db->where('status_validasi', 'DAFTAR');
        $query  = $this->db->get();
        return $query->result();
    }
    function getKonsumen()
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_konsumen');
        $query  = $this->db->where('status_validasi !=', 'DAFTAR');
        $query  = $this->db->get();
        return $query->result();
    }
}
