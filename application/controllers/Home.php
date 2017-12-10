<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Home extends CI_Controller{

	function __construct(){	
		parent::__construct();		
		if(!$this->session->userdata('id_user')) { // >>>>>>>>>>>>>>>>>>MEMBATASI HALAMAN HOME_USER JIKA TIDAK LOGIN <<<<<<<<<<<<<<<<<<<<<<<<<<
			redirect('login');
		}
		if($this->session->userdata('isAdmin')==TRUE) { // >>>>>>>>>>>>>>>>>>>MEMBATASI HALAMAN HOME_ADMIN JIKA MEMBUKA HALAMAN HOME_USER <<<<<<<<<<<<<<<<<<<<<<<<<<
			redirect('home_admin');
		}
		
		$this->load->model('Model_kelolaBarang');
	}



	public function index(){
		//$data['results'] = $this->Model_futsal->login_user($username,$pass);
        //$this->load->helper(array('form','url'));
        $data = $this->Model_kelolaBarang->tampilDetail();
		$this->load->view('Home', array('data' => $data));	
		// if($this->session->userdata('isAdmin')==FALSE)
		// {
		// 	redirect('Home');
		// }else{
		// 	redirect('login');}
	}
	
	public function cari(){
		$where = array('nama_barang' => $this->input->post('pencari'), 'jenis' => $this->input->post('pencari'));
		$hasil = $this->Model_kelolaBarang->pencarian($where, 'barang');
		$data = array('data'=>$hasil);
		$this->load->view('pencarian', $data);	
	}
	
} ?>