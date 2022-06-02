<script type="text/javascript">
	var form1Kecamatan = <?php echo json_encode($this->session->userdata('form1_kecamatan')->result_array()) ?>;
	$(document).ready( function () {
		$('#form1_kecamatan').DataTable( {
			dom: 'lfrtBip',
			data: form1Kecamatan,
			columns: [
				{ "data": null,"sortable": false,title:'No.',
					render: function (data, type, row, meta) {
						return meta.row + meta.settings._iDisplayStart + 1;
					}
				},
				{ data: 'nama_kelurahan', title: 'Desa' },
				{ data: 'kode_bumdes', title: 'Kode BUMDes' },
				{ data: 'nama_bumdes', title: 'Nama BUMDes' },
				{ data: 'kategori_usaha', title: 'Kategori Usaha' },
				{ data: 'jenis_usaha', title: 'Jenis Usaha' },
				{ data: 'klasifikasi_bumdes', title: 'Klasifikasi BUMDes' },
				{ data: 'status_badan_hukum', title: 'Status Badan Hukum' },
				{ data: 'no_sertifikat', title: 'No. Sertifikat' },
				{ data: 'penyertaan_modal', title: 'Penyertaan Modal' },
				{ data: 'pa_des', title: 'PADes' },
				{ data: 'nama_direktur', title: 'Nama Direktur' },
				{ data: 'hp_direktur', title: 'No. HP Direktur' },
				{ data: 'nama_kades', title: 'Nama Kepala Desa' },
				{ data: 'hp_kades', title: 'No.HP Kepala Desa' },
				{ data: 'alamat_bumdes', title: 'Alamat BUMDes' },
				{ data: 'online_marketing', title: 'Online Marketing' },
				{ data: 'is_blankspot', title: 'Blankspot?' },
				{ data: 'tahun_form', title: 'Tahun Form' },
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
					title: 'Daftar Form 1 BumDes Kecamatan <?php echo $this->session->userdata('nama_kecamatan')?>',
					orientation: 'landscape',
					customize: function(doc) {
						doc.defaultStyle.fontSize = 8;
						doc.styles.tableHeader.fontSize = 8;
						doc.styles.title.fontSize = 10;
					}
				},
			],
		} );

	});
</script>
