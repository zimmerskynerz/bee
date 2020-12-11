<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
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
			redirect('konsumen');
		else :
			$data_produk = $this->select_model->getDataProduk();
			$data = array(
				'data_produk' => $data_produk
			);
			$this->load->view('welcome_message', $data);
		endif;
	}
}
