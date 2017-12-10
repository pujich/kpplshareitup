<?php

class Model_kelolaProfil extends CI_Model {

	function tampilProfil($id){
			$this->db->where('id_user',$id);
		  $data = $this->db->query('select * from user where id_user='.$id);
		  return $data->result_array();
	}

	function edit_profil($where,$table){		
		return $this->db->get_where($table,$where);
 		}


	public function tambahProfil($tableName,$data){
      $this->db->insert($tableName,$data);
    }

	

}
	?>