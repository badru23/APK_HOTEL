<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	public function tampil_datakamar()
	{
		$data = $this->db->get('tipe_kamar');
		return $data->result();
	}

	public function tampil_datafkamar()
	{

		$this->db->from('tipe_kamar');
		$this->db->join('fas_kamar', 'fas_kamar.id_kamar = tipe_kamar.id_kamar');
		$data = $this->db->get()->result();
		return $data;
	}

	public function tampil_datafhotel()
	{
		$data = $this->db->get('fas_hotel');
		return $data->result();
	}

	public function tambahdatakamar()
	{
		$data = array(
        'id_kamar'      => $_POST['id_kamar'],
        'nama_kamar'    => $_POST['nama_kamar'],
        'stok' 	        => $_POST['stok'],
        'gambar' 		=> $_POST['gambar'],
        'harga' 	    => $_POST['harga']
    	);

		$this->db->insert('tipe_kamar', $data);
	}

	public function tambahdatafkamar()
	{
		$data = array(
        'id_faskamar'     	=> $_POST['id_faskamar'],
        'id_kamar'      	=> $_POST['id_kamar'],
        'nama_faskamar'     => $_POST['nama_faskamar'],
        'kategori' 	        => $_POST['kategori'],
        'gambar' 			=> $_POST['gambar']
        );

		$this->db->insert('fas_kamar', $data);
	}

	public function tambahdatafhotel()
	{
		$data = array(
        'id_fashotel'     	=> $_POST['id_fashotel'],
        'nama_fashotel'     => $_POST['nama_fashotel'],
        'keterangan' 	    => $_POST['keterangan'],
        'gambar' 		    => $_POST['gambar']
        );

		$this->db->insert('fas_hotel', $data);
	}

	public function edit_datakamar($id_kamar)
	{	
		$this->db->where('id_kamar',$id_kamar);
		$data = $this->db->get('tipe_kamar')->result();
		return $data;
	}

	public function edit_datafkamar($id_faskamar)
	{	
		$this->db->where('id_faskamar',$id_faskamar);
		$data = $this->db->get('fas_kamar')->result();
		return $data;
	}

	public function edit_datafhotel($id_fashotel)
	{	
		$this->db->where('id_fashotel',$id_fashotel);
		$data = $this->db->get('fas_hotel')->result();
		return $data;
	}

	public function hapus_datakamar($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function hapus_datafkamar($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function hapus_datafhotel($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

}