<?php

class Kelola_barang extends CI_Controller{

function __construct(){	
		parent::__construct();		
		if(!$this->session->userdata('id_user')) { // >>>>>>>>>>>>>>>>>>MEMBATASI HALAMAN HOME_USER JIKA TIDAK LOGIN <<<<<<<<<<<<<<<<<<<<<<<<<<
			redirect('login');
		}
		
		$this->load->model('Model_kelolaBarang');
	}

public function index(){

		$id=$this->session->userdata('id_user');
		$data= $this->Model_kelolaBarang->getBarangUser($id);
		$this->load->view('Kelola_barang' , array('data'=>$data));
		// $this->load->view('Halamanbarang' );
			
	}

public function borrowed(){

	$this->load->view('Terpinjam');
}

public function kembalikan_barang(){
		
			
	}

	public function edit_post(){
		
			
	}

	public function hapus_barang(){
		
			
	}

	public function post_barang(){

		
	}

} ?>