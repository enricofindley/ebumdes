<?php
class Kecamatan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in') !== TRUE) {
			redirect('login');
		}
	}

	function index()
	{
		//Allowing akses to kecamatan only
		if($this->session->userdata('is_level')==='Kecamatan'){
			$this->db->select('tb_bumdes.*,tb_kelurahan.*');
			$this->db->from('tb_bumdes');
			$this->db->join('tb_kelurahan', 'tb_bumdes.id_kelurahan = tb_kelurahan.id_kelurahan');
			$this->db->where('tb_bumdes.id_kecamatan', $this->session->userdata('id_kecamatan'));
			$query = $this->db->get();

			$data = array(
				'page' => 'kecamatan/index',
				'script' => 'kecamatan/homescript',
			);
			$this->session->set_userdata('bumdes_kecamatan', $query);
			$this->load->view('template/wrapper', $data);
		}else{
			echo "Access Denied";
		}
	}

}
