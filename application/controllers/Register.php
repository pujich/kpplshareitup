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
        $username = $this->input->post('username');
      	$password  = $this->input->post('password');
      	$sha1 = sha1($password);
      	$nama = $this->input->post('nama');
      	$kodepos = $this->input->post('kodepos');
      	$alamat = $this->input->post('alamat');
      	$kecamatan = $this->input->post('kecamatan');
      	$kelurahan = $this->input->post('kelurahan');
        $no_ktp = $this->input->post('no_ktp');

        $config['upload_path']         = './assets/img';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100000;
        $config['max_width']            = 1920;
        $config['max_height']           = 1080;
        
        $this->upload->initialize($config);

        $file1 = trim(addslashes('assets/img/'.$_FILES['image']['name']));     
        $file1 = preg_replace('/\s+/', '_', $file1);
        $file2 = trim(addslashes('assets/img/'.$_FILES['image2']['name']));     
        $file2 = preg_replace('/\s+/', '_', $file2);
      	
        if(!$this->upload->do_upload('image')){ /*JIKA TIDAK UPLOAD FOTO_PROFIL DAN FOTO_KTP*/
          $data = array (
            	 'deskripsi'=> 'User',
            	 'username' => $username,
             	 'password'  => $sha1,
               'nama_user'=> $nama,
             	 'kode_pos' => $kodepos,
               'alamat'  => $alamat,
             	 'kecamatan'=> $kecamatan,
             	 'kelurahan'=> $kelurahan,
               'no_ktp'=> $no_ktp,
               'foto_profil' => $file1,
               'foto_ktp' => $file2,
               );  
          $this->Model_kelolaProfil->tambahProfil('user',$data);
          echo "<script>alert('Anda berhasil mendaftar') ; window.location.href = '../'</script>";
        }

        else if ($this->upload->do_upload('image')) { /*JIKA UPLOAD FOTO_PROFIL / FOTO_KTP*/
          $data1 = array (
               'deskripsi'=> 'User',
               'username' => $username,
               'password'  => $sha1,
               'nama_user'=> $nama,
               'kode_pos' => $kodepos,
               'alamat'  => $alamat,
               'kecamatan'=> $kecamatan,
               'kelurahan'=> $kelurahan,
               'no_ktp'=> $no_ktp,
               'foto_profil' => $file1,
               'foto_ktp' => $file2,
               );
          $this->Model_kelolaProfil->tambahProfil('user',$data1);
          echo "<script>alert('Anda berhasil mendaftar') ; window.location.href = '../'</script>";
        }

        else { /*JIKA UPLOAD FOTO_PROFIL DAN FOTO_KTP*/
          $this->upload->do_upload('image');

          $data_updates = array(
              'deskripsi'=> 'User',
               'username' => $username,
               'password'  => $sha1,
               'nama_user'=> $nama,
               'kode_pos' => $kodepos,
               'alamat'  => $alamat,
               'kecamatan'=> $kecamatan,
               'kelurahan'=> $kelurahan,
               'no_ktp'=> $no_ktp,
               'foto_profil' => $file1,
               'foto_ktp' => $file2,
          );

          $this->Model_kelolaProfil->tambahProfil('user',$data_updates);
          echo "<script>alert('Anda berhasil mendaftar') ; window.location.href = '../'</script>";
        }

	}
}
?>