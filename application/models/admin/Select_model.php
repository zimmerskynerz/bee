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
    function getDataTransaksiKonfirmasi()
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_traksaksi as A');
        $query  = $this->db->join('tbl_konsumen as B', 'A.id_konsumen=B.id_konsumen');
        $query  = $this->db->join('tbl_produk as C', 'A.id_produk=C.id_produk');
        $query  = $this->db->where('status_transaksi', 'KONFIRMASI');
        $query  = $this->db->get();
        return $query->result();
    }
    function getDataTransaksiPembayaran()
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_traksaksi as A');
        $query  = $this->db->join('tbl_konsumen as B', 'A.id_konsumen=B.id_konsumen');
        $query  = $this->db->join('tbl_produk as C', 'A.id_produk=C.id_produk');
        $query  = $this->db->where('status_transaksi', 'BAYAR');
        $query  = $this->db->get();
        return $query->result();
    }
    function getDataTransaksiProses()
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_traksaksi as A');
        $query  = $this->db->join('tbl_konsumen as B', 'A.id_konsumen=B.id_konsumen');
        $query  = $this->db->join('tbl_produk as C', 'A.id_produk=C.id_produk');
        $query  = $this->db->where('status_transaksi', 'PROSES');
        $query  = $this->db->get();
        return $query->result();
    }
    function getDataTransaksiSelesai()
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_traksaksi as A');
        $query  = $this->db->join('tbl_konsumen as B', 'A.id_konsumen=B.id_konsumen');
        $query  = $this->db->join('tbl_produk as C', 'A.id_produk=C.id_produk');
        $query  = $this->db->where('status_transaksi', 'SELESAI');
        $query  = $this->db->get();
        return $query->result();
    }
}
