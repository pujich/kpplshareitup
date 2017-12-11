<?php

class Profile extends CI_Controller{

function __construct(){	
		parent::__construct();	
		$this->load->model('Model_kelolaProfil');
	}

public function index(){
		$id=$this->session->userdata('id_user');
		$data = $this->Model_kelolaProfil->tampilProfil($id);
		$this->load->view('Profile'
		, array('data' => $data)
		);	
	}

public function edit_profil(){

		$nama_user = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$kodepos =  $_POST['kodepos'];
        $deskripsi = $_POST['deskripsi'];
        $kelurahan = $_POST['kelurahan'];
		$kecamatan =  $_POST['kecamatan'];
        
	 	$config['upload_path']         = './assets/img';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100000;
		$config['max_width']            = 1920;
		$config['max_height']           = 1080;
        
        $this->upload->initialize($config);
 
   		$file1 = trim(addslashes('assets/img/'.$_FILES['image']['name']));     
    	$file1 = preg_replace('/\s+/', '_', $file1);

        $id=$this->session->userdata('id_user');
		
		// $where = array('id_user' => $id);
		
		if(! $this->upload->do_upload('image')){

        $data_update = array(
        	'nama_user' => $nama_user, 
        	'alamat' => $alamat , 
        	'kode_pos' =>$kodepos,
        	'kelurahan' => $kelurahan, 
        	'kecamatan' =>$kecamatan, 
        	'deskripsi'=>$deskripsi);
        
           	$this->Model_futsal->UpdateData('user',$data_update,'id_user ='.$id);

           	redirect('profile'); }

        else {

        $this->upload->do_upload('image');

        $data_updates = array(
           	'nama_user' => $nama_user, 
        	'alamat' => $alamat , 
        	'kode_pos' =>$kodepos, 
        	'deskripsi'=>$deskripsi,
        	'kelurahan' => $kelurahan, 
        	'kecamatan' =>$kecamatan, 
           	'foto_profil'=>$file1);
            
            $this->Model_futsal->UpdateData('user',$data_updates,'id_user ='.$id);
			redirect('profile'); }}
	

    public function profil_user(){

        $user=$this->input->get('id_user');
        $data = $this->Model_kelolaProfil->tampilProfil($user);
        $this->load->view('Profile'
        , array('data' => $data)
        );  }

    }

?>