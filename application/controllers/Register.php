<?php

	class Register extends CI_Controller{

		public function __construct() {
    		parent:: __construct();
    		$this->load->Model('Model_kelolaProfil');
		}

		public function index() {
			$this->load->view('Register');

		}

		public function tambahuser() { // Input data register ke database
			
        $foto_profil=$_FILES['foto_profil']['name'];
        $foto_ktp=$this->input->post('foto_ktp');

          $config['upload_path']         = './assets/img';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 100000;
    $config['max_width']            = 1920;
    $config['max_height']           = 1080;
        
        $this->upload->initialize($config);
 
   // $file1 = trim(addslashes('assets/img/'.$_FILES[$foto_profil]['name']));     
   //  $file1 = preg_replace('/\s+/', '_', $file1);

   //  $file2 = trim(addslashes('assets/img/'.$_FILES[$foto_ktp]['name']));     
   //  $file2 = preg_replace('/\s+/', '_', $file2);

      $username = $this->input->post('username');
      		$password  = $this->input->post('password');
      		$sha1 = sha1($password);
      		$nama = $this->input->post('nama');
      		$kodepos = $this->input->post('kodepos');
      		$alamat = $this->input->post('alamat');
      		$kecamatan = $this->input->post('kecamatan');
      		$kelurahan = $this->input->post('kelurahan');
          $no_ktp = $this->input->post('no_ktp');

      		$data = array (
            	 'deskripsi'=> 'User',
            	 'username' => $username,
             	 'password'  => $sha1,
                 'nama_user'=> $nama,
             	 'kode_pos' => $kodepos,
              	 'alamat'  => $alamat,
             	 'kecamatan'=> $kecamatan,
             	 'kelurahan'=> $kelurahan,
               // 'foto_profil' => $file1
               // 'foto_ktp' => $file2
        	);  

          $this->upload->do_upload('foto_profil');

          if (!$this->upload->do_upload('foto_profil')){

            $poi=$this->upload->display_errors(); echo $poi;

           echo $foto_profil; 
          }
          // if ($this->upload->do_upload('foto_ktp')){ 
          //   $poi=$this->upload->display_errors(); echo $poi;
          // }


        	$this->Model_kelolaProfil->tambahProfil($data);
			
			// echo "<script>alert('Anda berhasil mendaftar') ; window.location.href = '../'</script>";
		}

	}

?>