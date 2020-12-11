<?php defined('BASEPATH') or exit('No direct script access allowed');

class Select_model extends CI_Model
{
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
    function getDataTransaksiSelesaiTanggal()
    {
        $bulan  = $this->input->post('bulan');
        $tahun  = $this->input->post('tahun');
        $query  = $this->db->select('*');
        $query  = $this->db->from('tbl_traksaksi as A');
        $query  = $this->db->join('tbl_konsumen as B', 'A.id_konsumen=B.id_konsumen');
        $query  = $this->db->join('tbl_produk as C', 'A.id_produk=C.id_produk');
        $query  = $this->db->where('status_transaksi', 'SELESAI');
        $query  = $this->db->where('month(tgl_selesai)', $bulan);
        $query  = $this->db->where('year(tgl_selesai)', $tahun);
        $query  = $this->db->get();
        return $query->result();
    }
}
