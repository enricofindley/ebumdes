<script type="text/javascript">
	var form2Kabupaten = <?php echo json_encode($this->session->userdata('form2_kabupaten')->result_array()) ?>;
	$(document).ready( function () {
		$('#form2_kabupaten').DataTable( {
			dom: 'lfrtBip',
			data: form2Kabupaten,
			columns: [
				{ "data": null,"sortable": false,title:'No.',
					render: function (data, type, row, meta) {
						return meta.row + meta.settings._iDisplayStart + 1;
					}
				},
				{ data: 'nama_kecamatan', title: 'Kecamatan' },
				{ data: 'nama_kelurahan', title: 'Desa' },
				{ data: 'kode_bumdes', title: 'Kode BUMDes' },
				{ data: 'nama_bumdes', title: 'Nama BUMDes' },
				{ data: 'berita_acara_pembentukan', title: 'Berita Acara Pembentukan' },
				{ data: 'no_peraturan_desa', title: 'No. Peraturan Desa' },
				{ data: 'no_sk_pengurus', title: 'No. SK Pengurus' },
				{ data: 'ad_art', title: 'AD/ART' },
				{ data: 'bank_rek_desa', title: 'Bank Desa' },
				{ data: 'rek_desa', title: 'No. Rek Desa' },
				{ data: 'bank_rek_bumdes', title: 'Bank BUMDes' },
				{ data: 'rek_bumdes', title: 'No. Rek BUMDes' },
				{ data: 'npwp_desa', title: 'Bank BUMDes' },
				{ data: 'npwp_bumdes', title: 'No. Rekening BUMDes' },
				{ data: 'total_aset', title: 'Total Aset' },
				{ data: 'total_omset', title: 'Total Omset' },
				{ data: 'laba_bersih', title: 'Laba Bersih' },
				{ data: 'csr', title: 'CSR' },
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
					title: 'Daftar Form 2 BumDes Kabupaten <?php echo $this->session->userdata('nama_kabupaten')?>',
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

