<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php if($this->session->userdata('is_level')==='Bumdes'){ ?>
	<div class="page-body">
		<div class="container-fluid">
			<div class="page-header">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header">
								<h5>
									Form 1 BUMDes
									<div class="pull-right btn-group" role="group" aria-label="Basic example">
										<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalTambahForm">Tambah Form</button>
										<button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#modalEditForm">Edit Form</button>
									</div>
								</h5>
							</div>
							<div class="card-body">
								<div class="modal fade" id="modalTambahForm" tabindex="-1" role="dialog" aria-labelledby="modalTambahForm" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">Tambah Form</h5>
												<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<form class="card" action="<?php echo site_url('form1/tambah_Form');?>" method="post">
													<div class="card-body">
														<div class="row">
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Nama Bumdes</label>
																	<input class="form-control" type="text" name="nama_bumdes" placeholder="Nama Bumdes" value="<?php echo $this->session->userdata('nama_bumdes')?>" readonly>
																</div>
															</div>
															<div class="col-sm-12 col-md-12">
																<div class="mb-3">
																	<label class="form-label">Nama Ketua/Direktur</label>
																	<input class="form-control" type="text" name="nama_direktur" placeholder="Nama Ketua/Direktur" value="<?php echo $this->session->userdata('nama_direktur')?>" readonly>
																</div>
															</div>
															<div class="col-sm-12 col-md-12">
																<div class="mb-3">
																	<label class="form-label">No.HP Ketua/Direktur</label>
																	<input class="form-control" type="text" name="hp_direktur" placeholder="No.HP Ketua/Direktur" value="<?php echo $this->session->userdata('hp_direktur')?>" readonly>
																</div>
															</div>
															<div class="col-sm-12 col-md-12">
																<div class="mb-3">
																	<label class="form-label">No. Sertifikat</label>
																	<input class="form-control" type="text" name="no_sertifikat" placeholder="No.Sertifikat" value="<?php echo $this->session->userdata('no_sertifikat')?>" readonly>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Alamat Kantor Bumdes</label>
																	<input class="form-control" type="text" name="alamat_bumdes" placeholder="Alamat Kantor Bumdes" value="<?php echo $this->session->userdata('alamat_bumdes')?>" readonly>
																</div>
															</div>
															<div class="col-sm-12 col-md-12">
																<div class="mb-3">
																	<label class="form-label">Kode BumDes</label>
																	<input class="form-control" type="text" name="kode_bumdes" placeholder="Kode BumDes" value="<?php echo $this->session->userdata('kode_bumdes')?>" readonly>
																</div>
															</div>
															<div class="col-sm-12 col-md-12">
																<div class="mb-3">
																	<label class="form-label">Kategori Usaha</label>
																	<select name="kategori_usaha" class="form-control btn-square" disabled>
																		<option value="<?php echo $this->session->userdata('kategori_usaha')?>"><?php echo $this->session->userdata('kategori_usaha')?></option>
																		<option value="Barang">Barang</option>
																		<option value="Jasa">Jasa</option>
																		<option value="Barang dan Jasa">Barang dan Jasa</option>
																		<option value="Lainnya">Lainnya</option>
																	</select>
																</div>
															</div>
															<div class="col-sm-12 col-md-12">
																<div class="mb-3">
																	<label class="form-label">Status Badan Hukum</label>
																	<select name="status_badan_hukum" class="form-control btn-square" disabled>
																		<option value="<?php echo $this->session->userdata('status_badan_hukum')?>"><?php echo $this->session->userdata('status_badan_hukum')?></option>
																		<option value="Berbadan Hukum dari Kemenkumham">Berbadan Hukum dari Kemenkumham</option>
																		<option value="Proses Pendaftaran ke Kemendes">Proses Pendaftaran ke Kemendes</option>
																		<option value="Belum Mendaftar ke Kemendes">Belum Mendaftar ke Kemendes</option>
																	</select>
																</div>
															</div>
															<div class="col-sm-12 col-md-12">
																<div class="mb-3">
																	<label class="form-label">Jenis Usaha Bumdes</label>
																	<input class="form-control" type="text" name="jenis_usaha" placeholder="Jenis Usaha" value="<?php echo $this->session->userdata('jenis_usaha')?>" readonly>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Klasifikasi Bumdes</label>
																	<select name="klasifikasi_bumdes" class="form-control btn-square" disabled>
																		<option value="<?php echo $this->session->userdata('klasifikasi_bumdes')?>"><?php echo $this->session->userdata('klasifikasi_bumdes')?></option>
																		<option value="Tumbuh">Tumbuh</option>
																		<option value="Berkembang">Berkembang</option>
																		<option value="Dasar">Dasar</option>
																		<option value="Maju">Maju</option>
																		<option value="Berjaya">Berjaya</option>
																	</select>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Jenis Marketing</label>
																	<select name="online_marketing" class="form-control btn-square" disabled>
																		<option value="<?php echo $this->session->userdata('online_marketing')?>"><?php echo $this->session->userdata('online_marketing')?></option>
																		<option value="Facebook">Facebook</option>
																		<option value="Twitter">Twitter</option>
																		<option value="Youtube">Youtube</option>
																		<option value="Whatsapp">Whatsapp</option>
																		<option value="Telegram">Telegram</option>
																		<option value="Instagram">Instagram</option>
																		<option value="Offline">Offline</option>
																	</select>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">NPWP Bumdes</label>
																	<input class="form-control" type="text" name="npwp_bumdes" placeholder="Masukkan NPWP Bumdes . . ." value="<?php echo $this->session->userdata('npwp_bumdes') ?>" readonly>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Bank</label>
																	<select name="bank_rek_bumdes" class="form-control btn-square" disabled>
																		<option value="<?php echo $this->session->userdata('bank_rek_bumdes')?>"><?php echo $this->session->userdata('bank_rek_bumdes')?></option>
																		<option value="Bank Lampung">Bank Lampung</option>
																		<option value="Bank Mandiri">Bank Mandiri</option>
																		<option value="BCA">BCA</option>
																		<option value="BRI">BRI</option>
																		<option value="BNI">BNI</option>
																		<option value="BTPN">BTPN</option>
																	</select>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">No.Rekening Bumdes</label>
																	<input class="form-control" name="rek_bumdes" type="text" placeholder="08xxxxxxxxxx" value="<?php echo $this->session->userdata('rek_bumdes')?>" readonly>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Status Internet</label>
																	<select name="is_blankspot" class="form-control btn-square" disabled>
																		<option value="<?php echo $this->session->userdata('is_blankspot')?>"><?php echo $this->session->userdata('is_blankspot')?></option>
																		<option value="Blankspot">Blankspot</option>
																		<option value="Online">Online</option>
																	</select>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Berita Acara Pembentukan</label>
																	<input class="form-control" type="text" name="berita_acara_pembentukan" placeholder="Berita Acara Pembentukan" value="<?php echo $this->session->userdata('berita_acara_pembentukan')?>" readonly>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Nomor Peraturan Desa</label>
																	<input class="form-control" type="text" name="no_peraturan_desa" placeholder="Nomor Peraturan Desa" value="<?php echo $this->session->userdata('no_peraturan_desa')?>" readonly>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Nomor SK Pengurus</label>
																	<input class="form-control" type="text" name="no_sk_pengurus" placeholder="Nomor SK Pengurus" value="<?php echo $this->session->userdata('no_sk_pengurus')?>" readonly>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">AD / ART</label>
																	<input class="form-control" type="text" name="ad_art" placeholder="AD / ART" value="<?php echo $this->session->userdata('ad_art')?>" readonly>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Aset Bumdes</label>
																	<textarea class="form-control" rows="5" name="aset_bumdes" placeholder="Masukkan Aset Bumdes . . ." readonly><?php echo $this->session->userdata('aset_bumdes')?></textarea>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Penyertaan Modal</label>
																	<input class="form-control" type="number" min="0" name="penyertaan_modal" placeholder="" value="" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">PADes</label>
																	<input class="form-control" type="number" min="0" name="pa_des" placeholder="" value="" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Tahun Form</label>
																	<input class="form-control digits" name="tahun_form" type="number" min="2018" max="<?php echo date("Y"); ?>" step="1" placeholder="" value="" />
																</div>
															</div>
														</div>
													</div>
													<div class="card-header pb-0">
														<h4 class="card-title mb-0">Profil Desa</h4>
														<div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
													</div>
													<div class="card-body">
														<div class="row">
															<div class="col-sm-12 col-md-12">
																<div class="mb-3">
																	<label class="form-label">Nama Kepala Desa</label>
																	<input class="form-control" name="nama_kades" type="text" placeholder="Nama Kepala Desa" value="<?php echo $this->session->userdata('nama_kades')?>" readonly>
																</div>
															</div>
															<div class="col-sm-12 col-md-12">
																<div class="mb-3">
																	<label class="form-label">No.HP Kepala Desa</label>
																	<input class="form-control" name="hp_kades" type="text" placeholder="08xxxxxxxxxx" value="<?php echo $this->session->userdata('hp_kades')?>" readonly>
																</div>
															</div>
															<div class="col-sm-12 col-md-12">
																<div class="mb-3">
																	<label class="form-label">NPWP Desa</label>
																	<input class="form-control" type="text" name="npwp_desa" placeholder="Masukkan NPWP Bumdes . . ." value="<?php echo $this->session->userdata('npwp_desa')?>" readonly>
																</div>
															</div>
															<div class="col-sm-12 col-md-12">
																<div class="mb-3">
																	<label class="form-label">Bank</label>
																	<select name="bank_rek_desa" class="form-control btn-square" disabled>
																		<option value="<?php echo $this->session->userdata('bank_rek_desa')?>"><?php echo $this->session->userdata('bank_rek_desa')?></option>
																		<option value="Bank Lampung">Bank Lampung</option>
																		<option value="Bank Mandiri">Bank Mandiri</option>
																		<option value="BCA">BCA</option>
																		<option value="BRI">BRI</option>
																		<option value="BNI">BNI</option>
																		<option value="BTPN">BTPN</option>
																	</select>
																</div>
															</div>
															<div class="col-sm-12 col-md-12">
																<div class="mb-3">
																	<label class="form-label">No.Rekening Desa</label>
																	<input class="form-control" type="text" name="rek_desa" placeholder="No. Rekening Desa" value="<?php echo $this->session->userdata('rek_desa')?>" readonly>
																</div>
															</div>
														</div>
													</div>
													<div class="card-footer text-end">
														<button class="btn btn-primary" type="submit">Simpan Form</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="modalEditForm" tabindex="-1" role="dialog" aria-labelledby="modalEditForm" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">Edit Form</h5>
												<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<form class="card" action="<?php echo site_url('form1/edit_Form');?>" method="post">
													<div class="card-body">
														<div class="row">
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Tahun Form</label>
																	<select name="edit_tahun_form" class="form-control btn-square">
																		<?php
																		foreach ($this->session->userdata('form1_bumdes')->result_array() as $row) {?>
																			<option value="<?php echo $row['tahun_form'] ?>"><?php echo $row['tahun_form'] ?></option>
																		<?php } ?>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="card-body">
														<div class="row">
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Penyertaan Modal</label>
																	<input class="form-control" type="number" min="0" name="edit_penyertaan_modal" placeholder="" value="" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">PADes</label>
																	<input class="form-control" type="number" min="0" name="edit_pa_des" placeholder="" value="" required>
																</div>
															</div>
														</div>
													</div>
													<div class="card-footer text-end">
														<button class="btn btn-primary" type="submit">Simpan Form</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="table-responsive">
									<table class="display compact" id="form1_bumdes">
										<thead class="bg-primary">
										</thead>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } else if($this->session->userdata('is_level')==='Desa'){ ?>
	<div class="page-body">
		<div class="container-fluid">
			<div class="page-header">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header">
								<h5>Form 1 Kelurahan/Desa</h5>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="display compact" id="form1_kelurahan">
										<thead class="bg-primary">
										</thead>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } else if($this->session->userdata('is_level')==='Kecamatan'){ ?>
	<div class="page-body">
		<div class="container-fluid">
			<div class="page-header">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header">
								<h5>Form 1 Kecamatan</h5>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="display compact" id="form1_kecamatan">
										<thead class="bg-primary">
										</thead>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } else if($this->session->userdata('is_level')==='Kabupaten'){ ?>
	<div class="page-body">
		<div class="container-fluid">
			<div class="page-header">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header">
								<h5>Form 1 Kabupaten/Kota</h5>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="display compact" id="form1_kabupaten">
										<thead class="bg-primary">
										</thead>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } else if($this->session->userdata('is_level')==='Provinsi'){ ?>
	<div class="page-body">
		<div class="container-fluid">
			<div class="page-header">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header">
								<h5>
									Form 1 Provinsi
									<div class="pull-right btn-group" role="group" aria-label="Basic example">
										<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalTambahForm">Tambah Form</button>
										<button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#modalEditForm">Edit Form</button>
										<button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">Delete Form</button>
									</div>
								</h5>
							</div>
							<div class="card-body">
								<div class="modal fade" id="modalTambahForm" tabindex="-1" role="dialog" aria-labelledby="modalTambahForm" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">Tambah Form</h5>
												<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<form class="card" action="<?php echo site_url('form1/tambah_Form1_Provinsi');?>" method="post">
													<div class="card-body">
														<div class="row">
															<div class="col-md-12">
																<div class="mb-2">
																	<label class="col-form-label">Pilih BUMDes</label>
																	<select name="daftar_bumdes" class="js-example-placeholder-multiple col-sm-12" multiple="multiple">
																		<?php
																		foreach ($this->session->userdata('daftar_bumdes')->result_array() as $row) {?>
																			<option value="<?php echo $row['id_bumdes'] ?>,<?php echo $row['id_kecamatan'] ?>"><?php echo $row['nama_bumdes'] ?>, Kec.<?php echo $row['nama_kecamatan'] ?></option>
																		<?php } ?>
																	</select>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Penyertaan Modal</label>
																	<input class="form-control" type="number" min="0" name="penyertaan_modal" placeholder="" value="" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">PADes</label>
																	<input class="form-control" type="number" min="0" name="pa_des" placeholder="" value="" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Tahun Form</label>
																	<input class="form-control digits" name="tahun_form" type="number" min="2018" max="<?php echo date("Y"); ?>" step="1" placeholder="" value="" />
																</div>
															</div>
														</div>
													</div>
													<div class="card-footer text-end">
														<button class="btn btn-primary" type="submit">Simpan Form</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="modalEditForm" tabindex="-1" role="dialog" aria-labelledby="modalEditForm" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">Edit Form</h5>
												<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<form class="card" action="<?php echo site_url('form1/edit_Form1_Provinsi');?>" method="post">
													<div class="card-body">
														<div class="row">
															<div class="col-md-12">
																<div class="mb-2">
																	<label class="col-form-label">Pilih BUMDes</label>
																	<select name="daftar_bumdes" class="js-example-placeholder-multiple col-sm-12" multiple="multiple">
																		<?php
																		foreach ($this->session->userdata('daftar_bumdes')->result_array() as $row) {?>
																			<option value="<?php echo $row['id_bumdes'] ?>,<?php echo $row['id_kecamatan'] ?>"><?php echo $row['nama_bumdes'] ?>, Kec.<?php echo $row['nama_kecamatan'] ?></option>
																		<?php } ?>
																	</select>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Penyertaan Modal</label>
																	<input class="form-control" type="number" min="0" name="penyertaan_modal" placeholder="" value="" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">PADes</label>
																	<input class="form-control" type="number" min="0" name="pa_des" placeholder="" value="" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Tahun Form</label>
																	<select name="edit_tahun_form" class="form-control btn-square">
																		<?php
																		foreach ($this->session->userdata('daftar_tahun')->result_array() as $row) {?>
																			<option value="<?php echo $row['tahun_form'] ?>"><?php echo $row['tahun_form'] ?></option>
																		<?php } ?>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="card-footer text-end">
														<button class="btn btn-primary" type="submit">Simpan Form</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="modalDeleteForm" tabindex="-1" role="dialog" aria-labelledby="modalDeleteForm" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">Delete Form</h5>
												<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<form class="card" action="<?php echo site_url('form1/delete_Form1_Provinsi');?>" method="post">
													<div class="card-body">
														<div class="row">
															<div class="col-md-12">
																<div class="mb-2">
																	<label class="col-form-label">Pilih BUMDes</label>
																	<select name="daftar_bumdes" class="js-example-placeholder-multiple col-sm-12" multiple="multiple">
																		<?php
																		foreach ($this->session->userdata('daftar_bumdes')->result_array() as $row) {?>
																			<option value="<?php echo $row['id_bumdes'] ?>,<?php echo $row['id_kecamatan'] ?>"><?php echo $row['nama_bumdes'] ?>, Kec.<?php echo $row['nama_kecamatan'] ?></option>
																		<?php } ?>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="card-body">
														<div class="row">
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Tahun Form</label>
																	<select name="edit_tahun_form" class="form-control btn-square">
																		<?php
																		foreach ($this->session->userdata('daftar_tahun')->result_array() as $row) {?>
																			<option value="<?php echo $row['tahun_form'] ?>"><?php echo $row['tahun_form'] ?></option>
																		<?php } ?>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="card-footer text-end">
														<button class="btn btn-danger" type="submit">Delete Form</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="table-responsive">
									<table class="display compact" id="form1_provinsi">
										<thead class="bg-primary">
										</thead>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } else if($this->session->userdata('is_level')==='Admin'){ ?>
	<div class="page-body">
		<div class="container-fluid">
			<div class="page-header">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header">
								<h5>
									Form 1 Admin
									<div class="pull-right btn-group" role="group" aria-label="Basic example">
										<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalTambahForm">Tambah Form</button>
										<button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#modalEditForm">Edit Form</button>
										<button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#modalDeleteForm">Delete Form</button>
									</div>
								</h5>
							</div>
							<div class="card-body">
								<div class="modal fade" id="modalTambahForm" tabindex="-1" role="dialog" aria-labelledby="modalTambahForm" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">Tambah Form</h5>
												<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<form class="card" action="<?php echo site_url('form1/tambah_Form1_Provinsi');?>" method="post">
													<div class="card-body">
														<div class="row">
															<div class="col-md-12">
																<div class="mb-2">
																	<label class="col-form-label">Pilih BUMDes</label>
																	<select name="daftar_bumdes" class="js-example-placeholder-multiple col-sm-12" multiple="multiple">
																		<?php
																		foreach ($this->session->userdata('daftar_bumdes')->result_array() as $row) {?>
																			<option value="<?php echo $row['id_bumdes'] ?>,<?php echo $row['id_kecamatan'] ?>"><?php echo $row['nama_bumdes'] ?>, Kec.<?php echo $row['nama_kecamatan'] ?></option>
																		<?php } ?>
																	</select>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Penyertaan Modal</label>
																	<input class="form-control" type="number" min="0" name="penyertaan_modal" placeholder="" value="" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">PADes</label>
																	<input class="form-control" type="number" min="0" name="pa_des" placeholder="" value="" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Tahun Form</label>
																	<input class="form-control digits" name="tahun_form" type="number" min="2018" max="<?php echo date("Y"); ?>" step="1" placeholder="" value="" />
																</div>
															</div>
														</div>
													</div>
													<div class="card-footer text-end">
														<button class="btn btn-primary" type="submit">Simpan Form</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="modalEditForm" tabindex="-1" role="dialog" aria-labelledby="modalEditForm" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">Edit Form</h5>
												<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<form class="card" action="<?php echo site_url('form1/edit_Form1_Provinsi');?>" method="post">
													<div class="card-body">
														<div class="row">
															<div class="col-md-12">
																<div class="mb-2">
																	<label class="col-form-label">Pilih BUMDes</label>
																	<select name="daftar_bumdes" class="js-example-placeholder-multiple col-sm-12" multiple="multiple">
																		<?php
																		foreach ($this->session->userdata('daftar_bumdes')->result_array() as $row) {?>
																			<option value="<?php echo $row['id_bumdes'] ?>,<?php echo $row['id_kecamatan'] ?>"><?php echo $row['nama_bumdes'] ?>, Kec.<?php echo $row['nama_kecamatan'] ?></option>
																		<?php } ?>
																	</select>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Penyertaan Modal</label>
																	<input class="form-control" type="number" min="0" name="penyertaan_modal" placeholder="" value="" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">PADes</label>
																	<input class="form-control" type="number" min="0" name="pa_des" placeholder="" value="" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Tahun Form</label>
																	<select name="edit_tahun_form" class="form-control btn-square">
																		<?php
																		foreach ($this->session->userdata('daftar_tahun')->result_array() as $row) {?>
																			<option value="<?php echo $row['tahun_form'] ?>"><?php echo $row['tahun_form'] ?></option>
																		<?php } ?>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="card-footer text-end">
														<button class="btn btn-primary" type="submit">Simpan Form</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="modalDeleteForm" tabindex="-1" role="dialog" aria-labelledby="modalDeleteForm" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLongTitle">Delete Form</h5>
												<button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<form class="card" action="<?php echo site_url('form1/delete_Form1_Provinsi');?>" method="post">
													<div class="card-body">
														<div class="row">
															<div class="col-md-12">
																<div class="mb-2">
																	<label class="col-form-label">Pilih BUMDes</label>
																	<select name="daftar_bumdes" class="js-example-placeholder-multiple col-sm-12" multiple="multiple">
																		<?php
																		foreach ($this->session->userdata('daftar_bumdes')->result_array() as $row) {?>
																			<option value="<?php echo $row['id_bumdes'] ?>,<?php echo $row['id_kecamatan'] ?>"><?php echo $row['nama_bumdes'] ?>, Kec.<?php echo $row['nama_kecamatan'] ?></option>
																		<?php } ?>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="card-body">
														<div class="row">
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Tahun Form</label>
																	<select name="edit_tahun_form" class="form-control btn-square">
																		<?php
																		foreach ($this->session->userdata('daftar_tahun')->result_array() as $row) {?>
																			<option value="<?php echo $row['tahun_form'] ?>"><?php echo $row['tahun_form'] ?></option>
																		<?php } ?>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="card-footer text-end">
														<button class="btn btn-danger" type="submit">Delete Form</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<div class="table-responsive">
									<table class="display compact" id="form1_admin">
										<thead class="bg-primary">
										</thead>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
