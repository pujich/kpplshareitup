<?php

class Model_kelolaBarang extends CI_Model {

	public function tampilDetail() {

		$data=$this->db->select('*')->from('barang');
		
		return $data->get()->result_array();	

	}

	public function getDataBarang($tabel) { // mengambil data barang di database
    	return $this->db->select('*')->get_where($tabel);
  	}

}
?>