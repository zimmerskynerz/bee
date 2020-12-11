<?php defined('BASEPATH') or exit('No direct script access allowed');

class Select_model extends CI_Model
{
    function getDataProduk()
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_produk');
        $query  = $this->db->where('status_produk', 'ADA');
        $query  = $this->db->get();
        return $query->result();
    }
    function getDataTransaksiKonfirmasi($id_konsumen)
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_traksaksi as A');
        $query  = $this->db->join('tbl_konsumen as B', 'A.id_konsumen=B.id_konsumen');
        $query  = $this->db->join('tbl_produk as C', 'A.id_produk=C.id_produk');
        $query  = $this->db->where('status_transaksi', 'KONFIRMASI');
        $query  = $this->db->where('A.id_konsumen', $id_konsumen);
        $query  = $this->db->get();
        return $query->result();
    }
    function getDataTransaksiPembayaran($id_konsumen)
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_traksaksi as A');
        $query  = $this->db->join('tbl_konsumen as B', 'A.id_konsumen=B.id_konsumen');
        $query  = $this->db->join('tbl_produk as C', 'A.id_produk=C.id_produk');
        $query  = $this->db->where('status_transaksi', 'BAYAR');
        $query  = $this->db->where('A.id_konsumen', $id_konsumen);
        $query  = $this->db->get();
        return $query->result();
    }
    function getDataTransaksiProses($id_konsumen)
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_traksaksi as A');
        $query  = $this->db->join('tbl_konsumen as B', 'A.id_konsumen=B.id_konsumen');
        $query  = $this->db->join('tbl_produk as C', 'A.id_produk=C.id_produk');
        $query  = $this->db->where('status_transaksi', 'PROSES');
        $query  = $this->db->where('A.id_konsumen', $id_konsumen);
        $query  = $this->db->get();
        return $query->result();
    }
    function getDataTransaksiSelesai($id_konsumen)
    {
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_traksaksi as A');
        $query  = $this->db->join('tbl_konsumen as B', 'A.id_konsumen=B.id_konsumen');
        $query  = $this->db->join('tbl_produk as C', 'A.id_produk=C.id_produk');
        $query  = $this->db->where('status_transaksi', 'SELESAI');
        $query  = $this->db->where('A.id_konsumen', $id_konsumen);
        $query  = $this->db->get();
        return $query->result();
    }
}
