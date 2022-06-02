<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	function index(){
		if($this->session->userdata('is_level')==='Admin')
		{
			redirect('admin');
		}
		elseif ($this->session->userdata('is_level')==='Provinsi')
		{
			redirect('provinsi');
		}
		elseif ($this->session->userdata('is_level')==='Kabupaten')
		{
			redirect('kabupaten');
		}
		elseif ($this->session->userdata('is_level')==='Kecamatan')
		{
			redirect('kecamatan');
		}
		elseif ($this->session->userdata('is_level')==='Desa')
		{
			redirect('kelurahan');
		}
		elseif ($this->session->userdata('is_level')==='Bumdes')
		{
			redirect('bumdes');
		}
		else{
			$this->load->view('login');
		}
	}

	function auth(){
		$username   = $this->input->post('username',TRUE);
		$password = $this->input->post('password',TRUE);

		$validate = $this->login_model->validate($username);

		if(is_null($validate) === FALSE){
			if (password_verify($password, $validate->row()->password)){
				$data = $validate->row_array();
				$username = $data['username'];
				$is_level = $data['is_level'];
				$is_status = $data['is_status'];
				$id_login = $data['id_login'];
                $password = $data['password'];

				// access login for admin
				if ($is_level === 'Admin') {
					$kode = $data['kode'];
					$sesdata = array(
						'username' => $username,
						'password' => $password,
						'is_level' => $is_level,
						'is_status' => $is_status,
						'id_login' => $id_login,
						'kode'=> $kode,
						'logged_in' => TRUE,
					);
					$this->session->set_userdata($sesdata);
					redirect('admin');
				}
				// access login for provinsi
				elseif ($is_level === 'Provinsi') {
					$nama = $data['nama'];
					$kode = $data['kode'];
					$sesdata = array(
						'username' => $username,
						'password' => $password,
						'nama' => $nama,
						'is_level' => $is_level,
						'id_login' => $id_login,
						'is_status' => $is_status,
						'kode'=> $kode,
						'logged_in' => TRUE,
					);
					$this->session->set_userdata($sesdata);
					redirect('provinsi');
				}
				// access login for kabupaten
				elseif ($is_level === 'Kabupaten') {
					$nama_kabupaten = $data['nama_kabupaten'];
					$id_kabupaten = $data['id_kabupaten'];
					$sesdata = array(
						'username' => $username,
						'password' => $password,
						'nama_kabupaten' => $nama_kabupaten,
						'id_login' => $id_login,
						'is_level' => $is_level,
						'is_status' => $is_status,
						'id_kabupaten' => $id_kabupaten,
						'logged_in' => TRUE,
					);
					$this->session->set_userdata($sesdata);
					redirect('kabupaten');
				}
				// access login for kecamatan
				elseif ($is_level === 'Kecamatan') {
					$nama_kecamatan = $data['nama_kecamatan'];
					$id_kecamatan = $data['id_kecamatan'];
					$nama_kabupaten = $data['nama_kabupaten'];
					$sesdata = array(
						'username' => $username,
						'password' => $password,
						'nama_kecamatan' => $nama_kecamatan,
						'nama_kabupaten' => $nama_kabupaten,
						'id_login' => $id_login,
						'is_level' => $is_level,
						'is_status' => $is_status,
						'id_kecamatan' => $id_kecamatan,
						'logged_in' => TRUE,
					);
					$this->session->set_userdata($sesdata);
					redirect('kecamatan');
				}
				// access login for desa
				elseif ($is_level === 'Desa') {
					$nama_kecamatan = $data['nama_kecamatan'];
					$nama_kabupaten = $data['nama_kabupaten'];
					$nama_kelurahan = $data['nama_kelurahan'];
					$id_kelurahan = $data['id_kelurahan'];
					$sesdata = array(
						'username' => $username,
						'password' => $password,
						'nama_kelurahan' => $nama_kelurahan,
						'nama_kecamatan' => $nama_kecamatan,
						'nama_kabupaten' => $nama_kabupaten,
						'id_login' => $id_login,
						'is_level' => $is_level,
						'is_status' => $is_status,
						'id_kelurahan' => $id_kelurahan,
						'logged_in' => TRUE,
					);
					$this->session->set_userdata($sesdata);
					redirect('kelurahan');
				}
				// access login for bumdes
				elseif ($is_level === 'Bumdes') {
					$nama_kecamatan = $data['nama_kecamatan'];
					$nama_kabupaten = $data['nama_kabupaten'];
					$id_bumdes = $data['id_bumdes'];
					$kode_bumdes = $data['kode_bumdes'];
					$nama_bumdes = $data['nama_bumdes'];
					$nama_direktur = $data['nama_direktur'];
					$hp_direktur = $data['hp_direktur'];
					$klasifikasi_bumdes = $data['klasifikasi_bumdes'];
					$kategori_usaha = $data['kategori_usaha'];
					$online_marketing = $data['online_marketing'];
					$jenis_usaha = $data['jenis_usaha'];
					$status_badan_hukum = $data['status_badan_hukum'];
					$no_sertifikat = $data['no_sertifikat'];
					$npwp_bumdes = $data['npwp_bumdes'];
					$rek_bumdes = $data['rek_bumdes'];
					$no_peraturan_desa = $data['no_peraturan_desa'];
					$berita_acara_pembentukan = $data['berita_acara_pembentukan'];
					$no_sk_pengurus = $data['no_sk_pengurus'];
					$ad_art = $data['ad_art'];
					$nama_kades = $data['nama_kades'];
					$hp_kades = $data['hp_kades'];
					$rek_desa = $data['rek_desa'];
					$npwp_desa = $data['npwp_desa'];
					$alamat_bumdes = $data['alamat_bumdes'];
					$aset_bumdes = $data['aset_bumdes'];
					$bank_rek_desa = $data['bank_rek_desa'];
					$bank_rek_bumdes = $data['bank_rek_bumdes'];
					$is_blankspot = $data['is_blankspot'];
					$total_aset = $data['total_aset'];

					$sesdata = array(
						'nama_kecamatan' => $nama_kecamatan,
						'nama_kabupaten' => $nama_kabupaten,
						'id_bumdes' => $id_bumdes,
						'id_login' => $id_login,
						'username' => $username,
						'password' => $password,
						'is_level' => $is_level,
						'is_status' => $is_status,
						'kode_bumdes' => $kode_bumdes,
						'nama_bumdes' => $nama_bumdes,
						'nama_direktur' => $nama_direktur,
						'hp_direktur' => $hp_direktur,
						'nama_kades' => $nama_kades,
						'hp_kades' => $hp_kades,
						'klasifikasi_bumdes' => $klasifikasi_bumdes,
						'kategori_usaha' => $kategori_usaha,
						'online_marketing' => $online_marketing,
						'jenis_usaha' => $jenis_usaha,
						'status_badan_hukum' => $status_badan_hukum,
						'no_sertifikat' => $no_sertifikat,
						'npwp_bumdes' => $npwp_bumdes,
						'rek_bumdes' => $rek_bumdes,
						'no_peraturan_desa' => $no_peraturan_desa,
						'berita_acara_pembentukan' => $berita_acara_pembentukan,
						'no_sk_pengurus' => $no_sk_pengurus,
						'ad_art' => $ad_art,
						'rek_desa' => $rek_desa,
						'npwp_desa' => $npwp_desa,
						'alamat_bumdes' => $alamat_bumdes,
						'aset_bumdes' => $aset_bumdes,
						'bank_rek_desa' => $bank_rek_desa,
						'bank_rek_bumdes' => $bank_rek_bumdes,
						'is_blankspot' => $is_blankspot,
						'logged_in' => TRUE,
						'total_aset' => $total_aset,
					);
					$this->session->set_userdata($sesdata);
					redirect('bumdes');
				}
				else {
					echo $this->session->set_flashdata('notUser', TRUE);
					redirect('login');
				}
			}
			else {
				echo $this->session->set_flashdata('passError', TRUE);
				redirect('login');
			}
		}
		else{
			echo $this->session->set_flashdata('userError', TRUE );
			redirect('login');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

	function generate()
	{
		$this->db->select('tb_kelurahan.*, tb_kecamatan.*, tb_kabupaten.*');
		$this->db->from('tb_kelurahan');
		$this->db->join('tb_kecamatan', 'tb_kelurahan.id_kecamatan = tb_kecamatan.id_kecamatan');
		$this->db->join('tb_kabupaten', 'tb_kelurahan.id_kabupaten = tb_kabupaten.id_kabupaten');
		$res = $this->db->get();

		foreach ($res->result() as $row)
		{
			$userPass = strtolower(str_replace(' ', '',($row->nama_kelurahan).($row->nama_kecamatan)));
			$dataLogin = array(
				'username' => $userPass,
				'password' => password_hash($userPass, PASSWORD_DEFAULT),
				'is_level' => 'Bumdes',
				'is_status' => 'Aktif',
				'id_provinsi' => 18,
				'id_kabupaten' => $row->id_kabupaten,
				'id_kecamatan' => $row->id_kecamatan,
				'id_kelurahan' => $row->id_kelurahan,
				'id_bumdes' => $row->id_kelurahan,
				'id_login' => $row->id_kelurahan,
			);
			$dataBumdes = array(
				'nama_bumdes' => $userPass,
				'id_provinsi' => 18,
				'id_kabupaten' => $row->id_kabupaten,
				'id_kecamatan' => $row->id_kecamatan,
				'id_kelurahan' => $row->id_kelurahan,
				'id_bumdes' => $row->id_kelurahan,
				'id_login' => $row->id_kelurahan,
			);
			$this->db->insert('tb_login', $dataLogin);
			$this->db->insert('tb_bumdes', $dataBumdes);
		}

	}
}
