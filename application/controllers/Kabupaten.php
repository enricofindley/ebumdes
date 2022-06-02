<?php
class Kabupaten extends CI_Controller
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
		//Allowing akses to kabupaten only
		if($this->session->userdata('is_level')==='Kabupaten'){
			$this->db->select('tb_bumdes.*, tb_kecamatan.*, tb_kelurahan.*');
			$this->db->from('tb_bumdes');
			$this->db->join('tb_kecamatan', 'tb_bumdes.id_kecamatan = tb_kecamatan.id_kecamatan');
			$this->db->join('tb_kelurahan', 'tb_bumdes.id_kelurahan = tb_kelurahan.id_kelurahan');
			$this->db->where(array('tb_bumdes.id_kabupaten' => $this->session->userdata('id_kabupaten')));
			$query = $this->db->get();

			$data = array(
				'page' => 'kabupaten/index',
				'script' => 'kabupaten/homescript'
			);
			$this->session->set_userdata('bumdes_kabupaten', $query);
			$this->load->view('template/wrapper', $data);
		}else{
			echo "Access Denied";
		}
	}

}
