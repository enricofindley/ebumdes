<?php
class Form2 extends CI_Controller
{
	function index()
	{
		$this->db->select('tb_bumdes.*,tb_kecamatan.*');
		$this->db->from('tb_bumdes');
		$this->db->join('tb_kecamatan', 'tb_bumdes.id_kecamatan = tb_kecamatan.id_kecamatan');
		$daftarBumdes = $this->db->get();
		$this->session->set_userdata('daftar_bumdes', $daftarBumdes);

		$this->db->select('tahun_form');
		$this->db->from('tb_form2');
		$this->db->group_by('tahun_form');
		$this->db->having('count(*) >=', 1);
		$daftarTahun = $this->db->get();
		$this->session->set_userdata('daftar_tahun', $daftarTahun);

		if ($this->session->userdata('is_level')==='Provinsi')
		{
			$this->db->select('tb_form2.*, tb_bumdes.*, tb_kelurahan.*, tb_kecamatan.*, tb_kabupaten.*');
			$this->db->from('tb_bumdes');
			$this->db->join('tb_form2', 'tb_bumdes.id_bumdes = tb_form2.id_bumdes');
			$this->db->join('tb_kelurahan', 'tb_bumdes.id_kelurahan = tb_kelurahan.id_kelurahan');
			$this->db->join('tb_kecamatan', 'tb_bumdes.id_kecamatan = tb_kecamatan.id_kecamatan');
			$this->db->join('tb_kabupaten', 'tb_bumdes.id_kabupaten = tb_kabupaten.id_kabupaten');
			$this->db->where(array('tb_bumdes.id_provinsi' => $this->session->userdata('kode')));
			$query = $this->db->get();

			$data = array(
				'page' => 'form2/index',
				'script'=>'provinsi/form2script'
			);
			$this->session->set_userdata('form2_provinsi', $query);
			$this->load->view('template/wrapper', $data);
		}
		else if ($this->session->userdata('is_level')==='Admin')
		{
			$this->db->select('tb_form2.*, tb_bumdes.*, tb_kelurahan.*, tb_kecamatan.*, tb_kabupaten.*');
			$this->db->from('tb_bumdes');
			$this->db->join('tb_form2', 'tb_bumdes.id_bumdes = tb_form2.id_bumdes');
			$this->db->join('tb_kelurahan', 'tb_bumdes.id_kelurahan = tb_kelurahan.id_kelurahan');
			$this->db->join('tb_kecamatan', 'tb_bumdes.id_kecamatan = tb_kecamatan.id_kecamatan');
			$this->db->join('tb_kabupaten', 'tb_bumdes.id_kabupaten = tb_kabupaten.id_kabupaten');
			$this->db->where(array('tb_bumdes.id_provinsi' => $this->session->userdata('kode')));
			$query = $this->db->get();

			$data = array(
				'page' => 'form2/index',
				'script'=>'admin/form2script'
			);
			$this->session->set_userdata('form2_admin', $query);
			$this->load->view('template/wrapper', $data);
		}
		else if ($this->session->userdata('is_level')==='Kabupaten') {
			$this->db->select('tb_form2.*, tb_bumdes.*, tb_kelurahan.*, tb_kecamatan.*');
			$this->db->from('tb_bumdes');
			$this->db->join('tb_form2', 'tb_bumdes.id_bumdes = tb_form2.id_bumdes');
			$this->db->join('tb_kelurahan', 'tb_bumdes.id_kelurahan = tb_kelurahan.id_kelurahan');
			$this->db->join('tb_kecamatan', 'tb_bumdes.id_kecamatan = tb_kecamatan.id_kecamatan');
			$this->db->where(array('tb_bumdes.id_kabupaten' => $this->session->userdata('id_kabupaten')));
			$query = $this->db->get();

			$data = array(
				'page' => 'form2/index',
				'script' => 'kabupaten/form2script',
			);
			$this->session->set_userdata('form2_kabupaten', $query);
			$this->load->view('template/wrapper', $data);
		}
		else if ($this->session->userdata('is_level')==='Kecamatan') {
			$this->db->select('tb_form2.*, tb_bumdes.*, tb_kelurahan.*');
			$this->db->from('tb_bumdes');
			$this->db->join('tb_form2', 'tb_bumdes.id_bumdes = tb_form2.id_bumdes');
			$this->db->join('tb_kelurahan', 'tb_bumdes.id_kelurahan = tb_kelurahan.id_kelurahan');
			$this->db->where(array('tb_bumdes.id_kecamatan' => $this->session->userdata('id_kecamatan')));
			$query = $this->db->get();

			$data = array(
				'page' => 'form2/index',
				'script' => 'kecamatan/form2script',
			);
			$this->session->set_userdata('form2_kecamatan', $query);
			$this->load->view('template/wrapper', $data);
		}
		else if ($this->session->userdata('is_level')==='Desa') {
			$this->db->select('tb_form2.*, tb_bumdes.*');
			$this->db->from('tb_bumdes');
			$this->db->join('tb_form2', 'tb_bumdes.id_bumdes = tb_form2.id_bumdes');
			$this->db->where(array('tb_bumdes.id_kelurahan' => $this->session->userdata('id_kelurahan')));
			$query = $this->db->get();

			$data = array(
				'page' => 'form2/index',
				'script' => 'desa/form2script',
			);
			$this->session->set_userdata('form2_kelurahan', $query);
			$this->load->view('template/wrapper', $data);
		}
		else if ($this->session->userdata('is_level')==='Bumdes') {
			$this->db->select('tb_form2.*, tb_bumdes.*, tb_kelurahan.nama_kelurahan');
			$this->db->from('tb_bumdes');
			$this->db->join('tb_form2', 'tb_bumdes.id_bumdes = tb_form2.id_bumdes');
			$this->db->join('tb_kelurahan', 'tb_bumdes.id_kelurahan = tb_kelurahan.id_kelurahan');
			$this->db->where(array('tb_bumdes.id_bumdes' => $this->session->userdata('id_bumdes')));
			$query = $this->db->get();

			$data = array(
				'page' => 'form2/index',
				'script' => 'bumdes/form2script',
			);
			$this->session->set_userdata('form2_bumdes', $query);
			$this->load->view('template/wrapper', $data);
		}
	}

	function tambah_Form(){
		$id_bumdes = $this->session->userdata('id_bumdes');
		$total_omset = $this->input->post('total_omset',TRUE);
		$laba_bersih = $this->input->post('laba_bersih',TRUE);
		$csr =  $this->input->post('csr',TRUE);
		$tahun_form =  $this->input->post('tahun_form',TRUE);
		$is_exist=FALSE;

		$this->db->select('*');
		$this->db->from('tb_form2');
		$this->db->where(array('tb_form2.id_bumdes' => $id_bumdes));
		$query = $this->db->get();

		foreach ($query->result_array() as $row)
		{
			if($row['tahun_form'] === $tahun_form){
				$is_exist = TRUE;
				break;
			}
			else if($row['tahun_form'] !== $tahun_form){
				$is_exist = FALSE;
			}
		}

		if($is_exist === TRUE)
		{
			redirect('form2');
		}
		elseif($is_exist === FALSE){
			$dataForm2 = array(
				'total_omset' => $total_omset,
				'laba_bersih' => $laba_bersih,
				'csr' => $csr,
				'id_bumdes' => $id_bumdes,
				'tahun_form'=> $tahun_form,
			);
			$this->db->insert('tb_form2', $dataForm2);
			redirect('form2');
		}

	}

	function edit_Form()
	{
		$id_bumdes = $this->session->userdata('id_bumdes');
		$total_omset = $this->input->post('edit_total_omset',TRUE);
		$laba_bersih = $this->input->post('edit_laba_bersih',TRUE);
		$csr = $this->input->post('edit_csr',TRUE);
		$tahun_form =  $this->input->post('edit_tahun_form',TRUE);

		$dataForm2 = array(
			'total_omset' => $total_omset,
			'laba_bersih' => $laba_bersih,
			'csr' => $csr,
		);

		$this->db->where('id_bumdes', $id_bumdes);
		$this->db->where('tahun_form', $tahun_form);
		$this->db->update('tb_form2',$dataForm2);
		redirect('form2');
	}

	function edit_Form2_Provinsi()
	{
		$input = explode (",", $this->input->post('daftar_bumdes',TRUE));
		$id_bumdes = $input[0];
		$total_omset = $this->input->post('total_omset',TRUE);
		$laba_bersih = $this->input->post('laba_bersih',TRUE);
		$csr = $this->input->post('csr',TRUE);
		$tahun_form =  $this->input->post('tahun_form',TRUE);

		$dataForm2 = array(
			'total_omset' => $total_omset,
			'laba_bersih' => $laba_bersih,
			'csr' => $csr,
		);

		$this->db->where('id_bumdes', $id_bumdes);
		$this->db->where('tahun_form', $tahun_form);
		$this->db->update('tb_form2',$dataForm2);
		redirect('form2');
	}

	function tambah_Form2_Provinsi()
	{
		$input = explode (",", $this->input->post('daftar_bumdes',TRUE));
		$id_bumdes = $input[0];
		$total_omset = $this->input->post('total_omset',TRUE);
		$laba_bersih = $this->input->post('laba_bersih',TRUE);
		$csr = $this->input->post('csr',TRUE);
		$tahun_form =  $this->input->post('tahun_form',TRUE);
		$is_exist=FALSE;

		$this->db->select('*');
		$this->db->from('tb_form2');
		$this->db->where(array('tb_form2.id_bumdes' => $id_bumdes));
		$query = $this->db->get();

		foreach ($query->result_array() as $row)
		{
			if($row['tahun_form'] === $tahun_form){
				$is_exist = TRUE;
				break;
			}
			else if($row['tahun_form'] !== $tahun_form){
				$is_exist = FALSE;
			}
		}

		if($is_exist === TRUE)
		{
			redirect('form2');
		}
		elseif($is_exist === FALSE){
			$dataForm2 = array(
				'total_omset' => $total_omset,
				'laba_bersih' => $laba_bersih,
				'csr' => $csr,
				'tahun_form' => $tahun_form,
				'id_bumdes' => $id_bumdes,
			);
			$this->db->insert('tb_form2', $dataForm2);
			redirect('form2');
		}
	}

	function delete_Form2_Provinsi()
	{
		$input = explode (",", $this->input->post('daftar_bumdes',TRUE));
		$id_bumdes = $input[0];
		$tahun_form =  $this->input->post('edit_tahun_form',TRUE);
		$this->db->where('id_bumdes', $id_bumdes);
		$this->db->where('tahun_form', $tahun_form);
		$this->db->delete('tb_form2');
		redirect('form2');
	}
}
