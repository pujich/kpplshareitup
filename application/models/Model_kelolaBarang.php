<?php

class Model_kelolaBarang extends CI_Model {

	public function tampilDetail() {

		$data = $this->db->query('SELECT * FROM (
  SELECT * FROM barang ORDER BY id_barang DESC LIMIT 8
) as r ORDER BY id_barang');
		
		return $data->result_array();	

	}

	public function getDataBarang($tabel) { // mengambil data barang di database
    	return $this->db->select('*')->get_where($tabel);
  	}

  	public function delete_item_barang($item){ // Delete barang data di database
    	$this->db->where_in('id_barang', $item);
    	$this->db->delete('barang');
  	}

  	public function getBarangUser($id_user){

  		$id_user=$this->session->userdata('id_user');

  		$data=$this->db->query('select * from barang where id_pemilik='.$id_user);
  		return $data->result_array();
  	}

  	public function postBarang($data){
  		$res = $this->db->insert('barang',$data);
		return $res;

  	}
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}
?>