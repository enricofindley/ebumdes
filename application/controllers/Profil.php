<?php

class Profil extends CI_Controller
{
	public function index()
	{
		$data = array(
			'page' => 'profil/index',
		);
		$this->load->view('template/wrapper', $data);
	}

	function updateProfil()
	{
		$id_login= $this->session->userdata('id_login');
		$username   = $this->input->post('username',TRUE);
		if("" == trim($this->input->post('password',TRUE))) {
			$password = $this->session->userdata('password');
		}
		else{
			$password = password_hash($this->input->post('password',TRUE), PASSWORD_DEFAULT);
		}

		$id_bumdes=$this->session->userdata('id_bumdes');
		$kode_bumdes = $this->input->post('kode_bumdes',TRUE);
		$nama_bumdes = $this->input->post('nama_bumdes',TRUE);
		$nama_direktur = $this->input->post('nama_direktur',TRUE);
		$hp_direktur = $this->input->post('hp_direktur',TRUE);
		$alamat_bumdes = $this->input->post('alamat_bumdes',TRUE);
		$klasifikasi_bumdes = $this->input->post('klasifikasi_bumdes',TRUE);
		$kategori_usaha = $this->input->post('kategori_usaha',TRUE);
		$online_marketing = $this->input->post('online_marketing',TRUE);
		$jenis_usaha = $this->input->post('jenis_usaha',TRUE);
		$status_badan_hukum = $this->input->post('status_badan_hukum',TRUE);
		$no_sertifikat = $this->input->post('no_sertifikat',TRUE);
		$npwp_bumdes = $this->input->post('npwp_bumdes',TRUE);
		$rek_bumdes = $this->input->post('rek_bumdes',TRUE);
		$bank_rek_bumdes = $this->input->post('bank_rek_bumdes',TRUE);
		$no_peraturan_desa = $this->input->post('no_peraturan_desa',TRUE);
		$berita_acara_pembentukan = $this->input->post('berita_acara_pembentukan',TRUE);
		$no_sk_pengurus = $this->input->post('no_sk_pengurus',TRUE);
		$ad_art = $this->input->post('ad_art',TRUE);
		$aset_bumdes = $this->input->post('aset_bumdes',TRUE);
		$nama_kades = $this->input->post('nama_kades',TRUE);
		$hp_kades = $this->input->post('hp_kades',TRUE);
		$rek_desa = $this->input->post('rek_desa',TRUE);
		$bank_rek_desa = $this->input->post('bank_rek_desa',TRUE);
		$npwp_desa = $this->input->post('npwp_desa',TRUE);
		$is_blankspot = $this->input->post('is_blankspot',TRUE);
		$total_aset = $this->input->post('total_aset',TRUE);

		$dataBumdes = array(
			'kode_bumdes' => $kode_bumdes,
			'nama_bumdes' => $nama_bumdes,
			'nama_direktur' => $nama_direktur,
			'hp_direktur' => $hp_direktur,
			'alamat_bumdes' => $alamat_bumdes,
			'klasifikasi_bumdes' => $klasifikasi_bumdes,
			'kategori_usaha' => $kategori_usaha,
			'online_marketing' => $online_marketing,
			'jenis_usaha' => $jenis_usaha,
			'status_badan_hukum' => $status_badan_hukum,
			'no_sertifikat' => $no_sertifikat,
			'npwp_bumdes' => $npwp_bumdes,
			'rek_bumdes' => $rek_bumdes,
			'bank_rek_bumdes' => $bank_rek_bumdes,
			'no_peraturan_desa' => $no_peraturan_desa,
			'berita_acara_pembentukan' => $berita_acara_pembentukan,
			'no_sk_pengurus' => $no_sk_pengurus,
			'ad_art' => $ad_art,
			'aset_bumdes' => $aset_bumdes,
			'nama_kades' => $nama_kades,
			'hp_kades' => $hp_kades,
			'rek_desa' => $rek_desa,
			'bank_rek_desa' => $bank_rek_desa,
			'npwp_desa' => $npwp_desa,
			'is_blankspot' => $is_blankspot,
			'total_aset' => $total_aset,
		);

		$dataLogin = array(
			'username' => $username,
			'password' => $password,
		);

		$this->db->where('id_bumdes', $id_bumdes);
		$this->db->update('tb_bumdes', $dataBumdes);

		$this->db->where('id_login', $id_login);
		$this->db->update('tb_login', $dataLogin);

		$this->session->set_userdata('username', $username);
		$this->session->set_userdata($dataBumdes);
		redirect('profil');
	}

	function updateProfilOther(){
		$id_login= $this->session->userdata('id_login');
		$username = $this->input->post('username',TRUE);
		if("" == trim($this->input->post('password',TRUE))) {
			$password = $this->session->userdata('password');
		}
		else{
			$password = password_hash($this->input->post('password',TRUE), PASSWORD_DEFAULT);
		}

		$dataLogin = array(
			'username' => $username,
			'password' => $password,
		);

		$this->db->where('id_login', $id_login);
		$this->db->update('tb_login',$dataLogin);

		$this->session->set_userdata($dataLogin);
		redirect('profil');
	}
}


