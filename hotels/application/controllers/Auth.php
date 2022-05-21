<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}

	public function Login()
	{
		$this->load->view('Auth/Login');
	}

	public function Cekuser()
	{
		var_dump($_POST);
		$username = $_POST['username'];
		$password = $_POST['passwords'];
		$this->db->where('username',$username);
		$this->db->where('passwords',$password);
		$login = $this->db->get('users')->result();

		if (empty($login)) {
			redirect('Auth/Login');
		}
		$_SESSION['user'] = $login[0];
		// var_dump($_SESSION['user']);die;
		$this->Leveling();
	}

	public function Leveling()
	{
		if ($_SESSION['user']->levels == "tamu") {
			redirect('Tamu/Home');
		}
		if ($_SESSION['user']->levels == "admin") {
			redirect('Admin/Home');
		}
		if ($_SESSION['user']->levels == "resepsionis") {
			redirect('Resepsionis/Home');
		}
	}

	public function Registrasi()
	{
		$this->load->view('Auth/Registrasi');
	}

	public function RegisterData()
	{
		
		$data = array(
        'username'      	=> $_POST['username'],
        'passwords'      	=> $_POST['passwords'],
        'nama' 	        	=> $_POST['nama'],
        'jenis_kelamin' 	=> $_POST['jenis_kelamin'],
        'tgl_lahir' 	    => $_POST['tgl_lahir'],
        'no_telp' 	        => $_POST['no_telp']
    	);

		$this->db->insert('users', $data);
		redirect('Auth/Login');

	}

	public function Logout()
	{
		$this->session->sess_destroy();
		redirect('Tamu/Home');
	}
	
}
