<?php
class Kelurahan extends CI_Controller
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
		//Allowing akses to desa only
		if($this->session->userdata('is_level')==='Desa'){
			$data = array(
				'page' => 'desa/index',
			);
			$this->load->view('template/wrapper', $data);
		}else{
			echo "Access Denied";
		}
	}

}
