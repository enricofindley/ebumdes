<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$data = array(
			'page' => 'welcome',
		);
		$this->load->view('template/wrapper', $data);
	}


}
