<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function Home()
	{
		if ($_SESSION['user']->levels == "admin") {
			$this->load->model('M_admin');
			$data['kamar'] = $this->M_admin->tampil_datakamar();

			
			$this->load->view('Admin/Home', $data);
			


		} else {
			echo "Anda Tidak Berhak Mengakses Halaman ini!";
		}
	}

	public function FasilitasKamar()
	{
		
		if ($_SESSION['user']->levels == "admin") {
			$this->load->model('M_admin');
			$data['Fkamar'] = $this->M_admin->tampil_datafkamar();

		
			$this->load->view('Admin/FasilitasKamar', $data);
			


		} else {
			echo "Anda Tidak Berhak Mengakses Halaman ini!";
		}
	}

	public function FasilitasHotel()
	{
		if ($_SESSION['user']->levels == "admin") {
			$this->load->model('M_admin');
			$data['Fhotel'] = $this->M_admin->tampil_datafhotel();

			
			$this->load->view('Admin/FasilitasHotel', $data);
			


		} else {
			echo "Anda Tidak Berhak Mengakses Halaman ini!";
		}
	}

	public function Hapuskamar()
	{
		$id_kamar = $_GET['id_kamar'];
		$where = array('id_kamar' => $id_kamar);
		$this->load->model('M_admin');
		$this->M_admin->hapus_datakamar($where, 'tipe_kamar');
		redirect('Admin/Home');
		
	}

	public function Hapusfkamar()
	{
		$id_faskamar = $_GET['id_faskamar'];
		$where = array('id_faskamar' => $id_faskamar);
		$this->load->model('M_admin');
		$this->M_admin->hapus_datafkamar($where, 'fas_kamar');
		redirect('Admin/FasilitasKamar');
	}

	public function Hapusfhotel()
	{
		$id_fashotel = $_GET['id_fashotel'];
		$where = array('id_fashotel' => $id_fashotel);
		$this->load->model('M_admin');
		$this->M_admin->hapus_datafhotel($where, 'fas_hotel');
		redirect('Admin/FasilitasHotel');
	}

	public function DataKamar()
	{
		$this->load->view('Admin/DataKamar');
	}

	public function TambahDataKamar()
	{
		
		$data = array(
        'nama_kamar'    => $_POST['nama_kamar'],
        'stok'      	=> $_POST['stok'],
        'gambar' 	    => $_POST['gambar'],
        'harga' 		=> $_POST['harga'],
        'keterangan' 	=> $_POST['keterangan']
    	);

		$this->db->insert('tipe_kamar', $data);
		redirect('Admin/Home');

	}

	public function DataFkamar()
	{
		$this->load->view('Admin/DataFkamar');
	}

	public function TambahDataFkamar()
	{
		
		$data = array(
        'id_kamar'     		=> $_POST['id_kamar'],
        'nama_faskamar'     => $_POST['nama_faskamar'],
        'kategori' 	    	=> $_POST['kategori'],
        'gambar' 			=> $_POST['gambar']
    	);

		$this->db->insert('fas_kamar', $data);
		redirect('Admin/FasilitasKamar');

	}

	public function DataFhotel()
	{
		$this->load->view('Admin/DataFhotel');
	}

	public function TambahDataFhotel()
	{
		
		$data = array(
        'nama_fashotel'   => $_POST['nama_fashotel'],
        'keterangan' 	  => $_POST['keterangan'],
        'gambar' 		  => $_POST['gambar']
    	);

		$this->db->insert('fas_hotel', $data);
		redirect('Admin/FasilitasHotel');

	}

	public function Editkamar()
	{	
		$id_kamar = $_GET['id_kamar'];
		$where = array('id_kamar' => $id_kamar);
		$this->load->model('M_admin');
		$data['editkamar'] = $this->M_admin->edit_datakamar($id_kamar);

		$this->load->view('Admin/EditKamar', $data);
	}

	public function SimpanEditkamar()
	{
		$data = array(
        'nama_kamar'    => $_POST['nama_kamar'],
        'stok'     		=> $_POST['stok'],
        'gambar' 	    => $_POST['gambar'],
        'harga' 		=> $_POST['harga'],
        'keterangan' 	=> $_POST['keterangan']
    	);

    	$id_kamar = $_GET['id_kamar'];
    	$this->db->where('id_kamar', $id_kamar);
    	$kamar = $this->db->update('tipe_kamar',$data);
    	redirect('Admin/Home');
	}

	public function Editfaskamar()
	{	
		$id_faskamar = $_GET['id_faskamar'];
		$where = array('id_faskamar' => $id_faskamar);
		$this->load->model('M_admin');
		$data['editfaskamar'] = $this->M_admin->edit_datafkamar($id_faskamar);

		$this->load->view('Admin/EditFaskamar', $data);
	}

	public function SimpanEditFkamar()
	{
		$data = array(
        'id_kamar'     		=> $_POST['id_kamar'],
        'nama_faskamar'     => $_POST['nama_faskamar'],
        'kategori' 	    	=> $_POST['kategori'],
        'gambar' 			=> $_POST['gambar']
    	);

    	$id_faskamar = $_GET['id_faskamar'];
    	$this->db->where('id_faskamar', $id_faskamar);
    	$fkamar = $this->db->update('fas_kamar',$data);
    	redirect('Admin/FasilitasKamar');
	}

	public function Editfashotel()
	{	
		$id_fashotel = $_GET['id_fashotel'];
		$where = array('id_fashotel' => $id_fashotel);
		$this->load->model('M_admin');
		$data['editfashotel'] = $this->M_admin->edit_datafhotel($id_fashotel);

		$this->load->view('Admin/EditFashotel', $data);
	}

	public function SimpanEditFhotel()
	{
		$data = array(
        'nama_fashotel'     => $_POST['nama_fashotel'],
        'gambar' 			=> $_POST['gambar'],
        'keterangan' 	    => $_POST['keterangan']
    	);

    	$id_fashotel = $_GET['id_fashotel'];
    	$this->db->where('id_fashotel', $id_fashotel);
    	$fkamar = $this->db->update('fas_hotel',$data);
    	redirect('Admin/FasilitasHotel');
	}

}