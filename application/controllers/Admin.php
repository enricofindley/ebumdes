<?php
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('login');
		}
	}

	function index(){
		//Allowing akses to admin only
		if($this->session->userdata('is_level')==='Admin'){
			$this->db->select('tb_bumdes.*,tb_kabupaten.*,tb_kecamatan.*,tb_kelurahan.*');
			$this->db->from('tb_bumdes');
			$this->db->join('tb_kabupaten', 'tb_bumdes.id_kabupaten = tb_kabupaten.id_kabupaten');
			$this->db->join('tb_kecamatan', 'tb_bumdes.id_kecamatan = tb_kecamatan.id_kecamatan');
			$this->db->join('tb_kelurahan', 'tb_bumdes.id_kelurahan = tb_kelurahan.id_kelurahan');
			$this->db->where(array('tb_bumdes.id_provinsi' => $this->session->userdata('kode')));
			$query = $this->db->get();

			$data = array(
				'page' => 'admin/index',
				'script' => 'admin/homescript'
			);
			$this->session->set_userdata('bumdes_admin', $query);
			$this->load->view('template/wrapper', $data);
		}else{
			echo "Access Denied";
		}
	}
}
