<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Daftar Menu';
		$data['menu'] = $this->Menu_model->getAllMenu();
		if( $this->input->post('keyword') ){
			$data['menu'] = $this->Menu_model->cariDataMenu();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('menu/index');
		$this->load->view('templates/footer');	
	}

	public function tambah()
	{
		$data['judul'] = "Tambah Menu Baru";

		$this->form_validation->set_rules('makanan', 'Makanan', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');

		if( $this->form_validation->run() == FALSE ){
			$this->load->view('templates/header');
			$this->load->view('menu/tambah');
			$this->load->view('templates/footer');
		}else {
			$this->Menu_model->tambahDataMenu();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('menu');
		}
	}

	public function hapus($id)
	{
		$this->Menu_model->hapusDataMenu($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('menu');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Menu';
		$data['menu'] = $this->Menu_model->getMenuById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('menu/detail', $data);
		$this->load->view('templates/footer');
	}

	public function ubah($id)
	{
		$data['judul'] = "Tambah Menu Baru";
		$data['menu'] = $this->Menu_model->getMenuById($id);
		$this->form_validation->set_rules('makanan', 'Makanan', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');

		if( $this->form_validation->run() == FALSE ){
			$this->load->view('templates/header', $data);
			$this->load->view('menu/ubah', $data);
			$this->load->view('templates/footer');
		}else {
			$this->Menu_model->ubahDataMenu();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('menu');
		}
	}
}