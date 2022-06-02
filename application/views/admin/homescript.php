<script type="text/javascript">
	var bumdesAdmin = <?php echo json_encode($this->session->userdata('bumdes_admin')->result_array()) ?>;
	$(document).ready( function () {
		$('#bumdes_admin').DataTable( {
			dom: 'lfrtBip',
			data: bumdesAdmin,
			columns: [
				{ "data": null,"sortable": false,title:'No.',
					render: function (data, type, row, meta) {
						return meta.row + meta.settings._iDisplayStart + 1;
					}
				},
				{ data: 'nama_kabupaten', title: 'Kabupaten' },
				{ data: 'nama_kecamatan', title: 'Kecamatan' },
				{ data: 'nama_kelurahan', title: 'Desa' },
				{ data: 'kode_bumdes', title: 'Kode BUMDes' },
				{ data: 'nama_bumdes', title: 'Nama BUMDes' },
				{ data: 'nama_direktur', title: 'Nama Direktur' },
				{ data: 'hp_direktur', title: 'No. HP Direktur' },
				{ data: 'alamat_bumdes', title: 'Alamat BUMDes' },
				{ data: 'klasifikasi_bumdes', title: 'Klasifikasi BUMDes' },
				{ data: 'kategori_usaha', title: 'Kategori Usaha' },
				{ data: 'online_marketing', title: 'Online Marketing' },
				{ data: 'jenis_usaha', title: 'Jenis Usaha' },
				{ data: 'status_badan_hukum', title: 'Status Badan Hukum' },
				{ data: 'no_sertifikat', title: 'No. Sertifikat' },
				{ data: 'npwp_bumdes', title: 'NPWP BUMDes' },
				{ data: 'bank_rek_bumdes', title: 'Bank BUMDes' },
				{ data: 'rek_bumdes', title: 'No. Rekening BUMDes' },
				{ data: 'no_peraturan_desa', title: 'No. Peraturan Desa' },
				{ data: 'berita_acara_pembentukan', title: 'Berita Acara Pembentukan' },
				{ data: 'no_sk_pengurus', title: 'No. SK Pengurus' },
				{ data: 'ad_art', title: 'AD/ART' },
				{ data: 'aset_bumdes', title: 'Aset BUMDes' },
				{ data: 'nama_kades', title: 'Nama Kepala Desa' },
				{ data: 'hp_kades', title: 'No.HP Kepala Desa' },
				{ data: 'bank_rek_desa', title: 'Bank Desa' },
				{ data: 'rek_desa', title: 'No. Rekening Desa' },
				{ data: 'npwp_desa', title: 'NPWP Desa' },
				{ data: 'is_blankspot', title: 'Blankspot?' },
			],
			buttons: [
				{
					extend: 'pdfHtml5',
					text: 'Save PDF',
					exportOptions: {
						modifier: {
							page: 'all'
						}
					},
					header: true,
					title: 'Daftar BumDes Provinsi <?php echo $this->session->userdata('nama')?>',
					orientation: 'landscape',
					customize: function(doc) {
						doc.defaultStyle.fontSize = 3;
						doc.styles.tableHeader = 3;
						doc.styles.title.fontSize = 10;
					}
				},
			],
		} );
	});
</script>

