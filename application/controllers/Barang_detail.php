<?php

class Barang_detail extends CI_Controller{

	public function __construct() {
    		parent:: __construct();
    		$this->load->Model('Model_kelolaBarang');
		}


public function index(){
		$item=$this->input->get('id_barang');
		$data = $this->Model_kelolaBarang->getDetailBarang($item);
		$this->load->view('Barang_detail'
		, array('data' => $data)
		);	
	}

public function pinjam_barang(){

	
}

}

?>