<?php
class Bumdes extends CI_Controller
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
		//Allowing akses to bumdes only
		if($this->session->userdata('is_level')==='Bumdes'){
			$data = array(
				'page' => 'bumdes/index',
			);
			$this->load->view('template/wrapper', $data);
		}else{
			echo "Access Denied";
		}
	}

}
