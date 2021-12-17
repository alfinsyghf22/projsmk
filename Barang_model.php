<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Barang_model extends CI_model{

 	 public function relasi()
    {
        $this->db->select('*');
        $this->db->from('master_barang');
        $this->db->join('kondisi', 'master_barang.kode_barang = kondisi.id_kondisi', 'LEFT');
        $this->db->join('pengadaan_barang', 'master_barang.kode_barang = pengadaan_barang.id_pengadaan', 'LEFT');
        return $this->db->get()->result_array();
    }

 	public function getAllBarang()
 	{
 		return $this->db->get('master_barang')->result_array();
 	}

 	public function tambahDataBarang()
 	{
 		$data = [
 			"nama_barang" => $this->input->post('nama_barang', true),
 			"satuan" => $this->input->post('satuan', true),
 			"kondisi_barang" => $this->input->post('kondisi', true),
 			"keterangan" => $this->input->post('keterangan', true)

 		];

 		$this->db->insert('master_barang', $data);
 	}

 	public function hapusDataBarang($kode_barang)
 	{
 		// $this->db->where('kode_barang', $kode_barang);
 		$this->db->delete('master_barang', ['kode_barang' => $kode_barang]);
 	}

 	public function getBarangById($id)
 	{
 		return $this->db->get_where('master_barang', ['kode_barang' => $id])->row_array();
 	}

	public function ubahDataBarang()
 	{
 		$data = [
 			"nama_barang" => $this->input->post('nama_barang', true),
 			"satuan" => $this->input->post('satuan', true),
 			"keterangan" => $this->input->post('keterangan', true)
 		];

 		$this->db->where('kode_barang', $this->input->post('kode_barang') );
 		$this->db->update('master_barang', $data);
 	}

 	public function cariDataBarang()
 	{
 		$keyword = $this->input->post('keyword', true);
 		$this->db->like('nama_barang', $keyword);
 		return $this->db->get('master_barang')->result_array();
 	}

 }