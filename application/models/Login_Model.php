<?php
class Login_Model extends CI_Model{
	// Method untuk login user
	function validate($username){
		$res =  $this->db->get_where('tb_login', array('tb_login.username' => $username));
		$data = $res->row_array();
		if(is_null($data) === FALSE) {
			if ($data['is_level'] === 'Bumdes') {
				$this->db->select('tb_login.*, tb_kelurahan.*, tb_kecamatan.*,tb_kabupaten.*, tb_bumdes.*');
				$this->db->from('tb_login');
				$this->db->join('tb_bumdes', 'tb_bumdes.id_login = tb_login.id_login');
				$this->db->join('tb_kecamatan', 'tb_bumdes.id_kecamatan = tb_kecamatan.id_kecamatan');
				$this->db->join('tb_kelurahan', 'tb_kelurahan.id_kelurahan = tb_login.id_kelurahan');
				$this->db->join('tb_kabupaten', 'tb_kabupaten.id_kabupaten = tb_login.id_kabupaten');
				$this->db->where(array('tb_login.username' => $username));
				$lev = $this->db->get();
				return $lev;
			} elseif (($data['is_level'] === 'Admin') || ($data['is_level'] === 'Provinsi')) {
				$this->db->select('tb_login.*, provinsi.*');
				$this->db->from('tb_login');
				$this->db->join('provinsi', 'provinsi.kode = tb_login.id_provinsi');
				$this->db->where(array('tb_login.username' => $username));
				$lev = $this->db->get();
				return $lev;
			} elseif ($data['is_level'] === 'Kabupaten') {
				$this->db->select('tb_login.*, tb_kabupaten.*');
				$this->db->from('tb_login');
				$this->db->join('tb_kabupaten', 'tb_kabupaten.id_kabupaten = tb_login.id_kabupaten');
				$this->db->where(array('tb_login.username' => $username));
				$lev = $this->db->get();
				return $lev;
			} elseif ($data['is_level'] === 'Kecamatan') {
				$this->db->select('tb_login.*, tb_kecamatan.*,tb_kabupaten.*');
				$this->db->from('tb_login');
				$this->db->join('tb_kecamatan', 'tb_kecamatan.id_kecamatan = tb_login.id_kecamatan');
				$this->db->join('tb_kabupaten', 'tb_kabupaten.id_kabupaten = tb_login.id_kabupaten');
				$this->db->where(array('tb_login.username' => $username));
				$lev = $this->db->get();
				return $lev;
			} elseif ($data['is_level'] === 'Desa') {
				$this->db->select('tb_login.*, tb_kelurahan.*, tb_kecamatan.*,tb_kabupaten.*');
				$this->db->from('tb_login');
				$this->db->join('tb_kecamatan', 'tb_login.id_kecamatan = tb_kecamatan.id_kecamatan');
				$this->db->join('tb_kelurahan', 'tb_kelurahan.id_kelurahan = tb_login.id_kelurahan');
				$this->db->join('tb_kabupaten', 'tb_kabupaten.id_kabupaten = tb_login.id_kabupaten');
				$this->db->where(array('tb_login.username' => $username));
				$lev = $this->db->get();
				return $lev;
			}
		}
	}


}
