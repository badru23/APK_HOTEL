<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_resepsionis extends CI_Model {

	public function tampil_datapesanan()
	{
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->join('tipe_kamar', 'tipe_kamar.id_kamar = pemesanan.id_kamar');
		$data = $this->db->get()->result();
		return $data;
	}

	public function tampil_room()
	{
		$this->db->select('*');
		$this->db->from('tipe_kamar');
		$data = $this->db->get()->result();
		return $data;
	}

	public function edit_datapesanan($id_pemesanan)
	{	
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->where(['id_pemesanan' => $id_pemesanan]);
		$this->db->join('tipe_kamar', 'tipe_kamar.id_kamar = pemesanan.id_kamar');
		$data = $this->db->get()->result();
		return $data;
	}
	
	public function hapus_datapesanan($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function bayarpemesanan()
	{
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->join('tipe_kamar', 'tipe_kamar.id_kamar = pemesanan.id_kamar');
		$data = $this->db->get()->result();
		return $data;
	}
}