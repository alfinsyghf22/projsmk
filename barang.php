<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Barang_model', '', TRUE);
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}

	public function index()
	{
		$data['judul'] = 'Daftar Barang';
		$data['master_barang'] = $this->Barang_model->getAllBarang();
		if( $this->input->post('keyword') ){
			$data['master_barang'] = $this->Barang_model->cariDataBarang();
		}
		$data['isi'] = $this->Barang_model->relasi();
		// $this->load->view('templates/header', $data);
		$this->template->load('template', 'barang/index', $data);
		// $this->load->view('templates/footer');	
	}

	public function tambah()
	{
		$data['judul'] = "Tambah Barang";
		
		$this->form_validation->set_rules('nama_barang', 'Nama_barang', 'required');
		$this->form_validation->set_rules('satuan', 'Satuan', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if( $this->form_validation->run() == FALSE ){
		$this->template->load('template', 'barang/index', $data);
		}else {
		$this->Barang_model->tambahDataBarang();
		$this->session->set_flashdata('flash', 'Ditambahkan');
		}
	}

	public function hapus($kode_barang)
	{
		$this->Barang_model->hapusDataBarang($kode_barang);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('barang');
	}

	public function detail($kode_barang)
	{
		$data['judul'] = 'Detail barang';
		$data['master_barang'] = $this->Barang_model->getBarangById($kode_barang);
		$this->load->view('templates/header', $data);
		$this->load->view('barang/detail', $data);
		$this->load->view('templates/footer');
	}

	public function ubah($kode_barang)
	{
		$data['judul'] = "Tambah Data Baru";
		$data['master_barang'] = $this->Barang_model->getBarangById($kode_barang);
		$this->form_validation->set_rules('nama_barang', 'Nama_barang', 'required');
		$this->form_validation->set_rules('satuan', 'Satuan', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if( $this->form_validation->run() == FALSE ){
			$this->load->view('templates/header', $data);
			$this->load->view('barang/ubah', $data);
			$this->load->view('templates/footer');
		}else {
			$this->Barang_model->ubahDataBarang();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('barang');
		}
	}
}