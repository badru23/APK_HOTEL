<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tamu extends CI_Model {

	public function datakamar()
	{
		$data = $this->db->get('tipe_kamar')->result();
		return $data;
	}

	public function detaildatakamar($id)
	{
		$this->db->select('*');
		$this->db->from('tipe_kamar');
		$this->db->join('fas_kamar', 'fas_kamar.id_kamar = tipe_kamar.id_kamar');
		$this->db->where('fas_kamar.id_kamar', $id);
		$data = $this->db->get()->result();
		return $data;
	}

	public function datafasilitas()
	{
		$data = $this->db->get('fas_hotel');
		return $data->result();
	}

	public function detaildatafasilitas($id)
	{
		$this->db->where('id_fashotel', $id);
		$data = $this->db->get('fas_hotel');
		return $data->result();
	}

	public function tampildatapemesanan()
	{
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->where('nama_pemesan', $_SESSION['user']->nama);
		$this->db->join('tipe_kamar', 'tipe_kamar.id_kamar = pemesanan.id_kamar');
		$data = $this->db->get()->result();
		
		return $data;
	}

	public function batalkanpemesanan($id_pemesanan)
	{
		$this->db->delete('pemesanan', array('id_pemesanan' => $id_pemesanan));
	}

	public function GetDataPemesanan($id_pemesanan)
	{
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->join('tipe_kamar', 'tipe_kamar.id_kamar = pemesanan.id_kamar');
		$this->db->where('id_pemesanan', $id_pemesanan);
		$query = $this->db->get();
		return $query->result();
	}

}