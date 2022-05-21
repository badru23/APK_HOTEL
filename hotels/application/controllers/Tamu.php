<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu extends CI_Controller {
	
	public function Home()
	{
		$this->load->view('Tamu/Home');
	}
	
	public function kamar()
	{
		$this->load->model('M_tamu');
		$data['kamar'] = $this->M_tamu->datakamar();
		$this->load->view('Tamu/Kamar', $data);
	}

	public function Detailkamar()
	{
		$id = $_GET['id'];
		$this->load->model('M_tamu');
		$data['kamar'] = $this->M_tamu->detaildatakamar($id);

		$this->load->view('Tamu/Detailkamar', $data);
	}

	public function Fasilitas()
	{
		$this->load->model('M_tamu');
		$data['fasilitas'] = $this->M_tamu->datafasilitas();

		$this->load->view('Tamu/Fasilitas', $data);
	}

	public function Detailfasilitas()
	{
		$id = $_GET['id'];
		$this->load->model('M_tamu');
		$data['fasilitas'] = $this->M_tamu->detaildatafasilitas($id);

		$this->load->view('Tamu/Detailfasilitas', $data);
	}

	public function Pesan()
	{
		$data['datakiriman'] = $_POST;
		$data['user'] = $_SESSION['user'];
		$this->load->view('Tamu/Pesan', $data);
	}

	public function Pemesanan()
	{
		$this->load->model('M_tamu');
		$data['pemesanan'] = $this->M_tamu->tampildatapemesanan($_SESSION['user']);
		

		$this->load->view('Tamu/Pemesanan', $data);
	}

	public function DataPemesanan()
	{
		$query = $this->db->get('tipe_kamar')->result();
		$total_harga = $_POST['jml_kamar'] * $query[0]->harga;

		$data = array(
        'nama_pemesan'      => $_POST['nama_pemesan'],
        'email'      		=> $_POST['email'],
        'no_telp' 	        => $_POST['no_telp'],
        'nama_tamu' 		=> $_POST['nama_tamu'],
        'id_kamar' 	    	=> $_POST['id_kamar'],
        'tgl_cekin' 	    => $_POST['tgl_cekin'],
        'tgl_cekout' 	    => $_POST['tgl_cekout'],
        'jml_kamar' 	    => $_POST['jml_kamar'],
        'total_harga' 	    => $total_harga,
        'pembayaran' 	    => $_POST['pembayaran'],
        'kode_pesanan' 		=> date('mdy').$_POST['pembayaran'].date('His')
    	);

		$this->db->insert('pemesanan', $data);
		redirect('Tamu/Pemesanan');
	}

	public function BatalkanPemesanan()
	{
		$id = $_GET['id_pemesanan'];
		$this->load->model('M_tamu');
		$this->M_tamu->BatalkanPemesanan($id);
		redirect('Tamu/Pemesanan');
	}

	public function CetakPdf()
	{
		$this->load->model('M_tamu');
		$id_pemesanan = $_GET['id_pemesanan'];
        $query['dataID'] = $this->M_tamu->GetDataPemesanan($id_pemesanan);
        //var_dump($data);die;
        $this->load->view('Tamu/CetakPdf', $query);
	}

}
