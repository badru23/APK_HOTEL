<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resepsionis extends CI_Controller {
	
	public function Home()
	{
		if ($_SESSION['user']->levels == "resepsionis") {
			$this->load->model('M_resepsionis');
			$data['pesanan'] = $this->M_resepsionis->tampil_datapesanan();
				
			$this->load->view('Resepsionis/Home', $data);
				
		} else {
			echo "Anda Tidak Berhak Mengakses Halaman ini!";
		}
	}

	public function Hapuspesanan()
	{
		$id_pemesanan = $_GET['id_pemesanan'];
		$where = array('id_pemesanan' => $id_pemesanan);
		$this->load->model('M_resepsionis');
		$this->M_resepsionis->hapus_datapesanan($where, 'pemesanan');
		redirect('Resepsionis/Home');
	}

	public function EditDataPemesanan()
	{	
		$id_pemesanan = $_GET['id_pemesanan'];
		$where = array('id_pemesanan' => $id_pemesanan);
		$this->load->model('M_resepsionis');
		$data['editpesanan'] = $this->M_resepsionis->edit_datapesanan($id_pemesanan);
		$data['tiperoom'] = $this->M_resepsionis->tampil_room();

		$this->load->view('Resepsionis/EditDataPemesanan', $data);
	}

	public function SimpanEditpesanan()
	{
		$data = array(
        'nama_pemesan'      => $_POST['nama_pemesan'],
        'email'      		=> $_POST['email'],
        'no_telp' 	        => $_POST['no_telp'],
        'nama_tamu' 		=> $_POST['nama_tamu'],
        'id_kamar' 	    	=> $_POST['id_kamar'],
        'tgl_cekin' 	    => $_POST['tgl_cekin'],
        'tgl_cekout' 	    => $_POST['tgl_cekout'],
        'jml_kamar' 	    => $_POST['jml_kamar'],
        'total_harga' 	    => $_POST['total_harga'],
        'pembayaran' 	    => $_POST['pembayaran'],
        'kode_pesanan' 		=> date('mdy').$_POST['pembayaran'].date('His')
    	);

    	$id_pemesanan = $_GET['id_pemesanan'];
    	$this->db->where('id_pemesanan', $id_pemesanan);
    	$pemesanan = $this->db->update('pemesanan',$data);
    	redirect('Resepsionis/Home');
	}

	public function Bayar()
	{
		$this->load->model('M_resepsionis');
		$data['pemesanan'] = $this->M_resepsionis->bayarpemesanan();

		$this->load->view('Resepsionis/Bayar', $data);
	}

	public function Updatepayend()
	{
		$id_pemesanan = $_GET['id_pemesanan'];
		$data = array(
			'payend' => $_GET['payend']
		);

		$this->db->where('id_pemesanan', $id_pemesanan);
		$this->db->update('pemesanan', $data);
		redirect('Resepsionis/Bayar');
	}

	public function Updatecekin()
	{
		$id_pemesanan = $_GET['id_pemesanan'];
		$data = array(
			'status_book' => $_GET['status_book']
		);

		$this->db->where('id_pemesanan', $id_pemesanan);
		$this->db->update('pemesanan', $data);
		redirect('Resepsionis/Bayar');
	}

}
