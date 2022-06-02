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
									Form 2 BUMDes
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
												<form class="card" action="<?php echo site_url('form2/tambah_Form');?>" method="post">
													<div class="card-body">
														<div class="row">
															<div class="col-sm-12 col-md-12">
																<div class="mb-3">
																	<label class="form-label">Kode BumDes</label>
																	<input class="form-control" type="text" name="kode_bumdes" placeholder="Kode BumDes" value="<?php echo $this->session->userdata('kode_bumdes')?>" readonly>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Nama Bumdes</label>
																	<input class="form-control" type="text" name="nama_bumdes" placeholder="Nama Bumdes" value="<?php echo $this->session->userdata('nama_bumdes')?>" readonly>
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
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Total Nilai Aset</label>
																	<input class="form-control" type="number" min="0" name="total_aset" placeholder="" value="<?php echo $this->session->userdata('total_aset')?>" disabled>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Total Omset</label>
																	<input class="form-control" type="number" min="0" name="total_omset" placeholder="" value="" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Laba Bersih</label>
																	<input class="form-control" type="number" min="0" name="laba_bersih" placeholder="" value="" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">CSR</label>
																	<input class="form-control" type="number" min="0" name="csr" placeholder="" value="" required>
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
												<form class="card" action="<?php echo site_url('form2/edit_Form');?>" method="post">
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
													<div class="card-body">
														<div class="row">
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Total Omset</label>
																	<input class="form-control" type="number" min="0" name="edit_total_omset" placeholder="" value="" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Laba Bersih</label>
																	<input class="form-control" type="number" min="0" name="edit_laba_bersih" placeholder="" value="" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">CSR</label>
																	<input class="form-control" type="number" min="0" name="edit_csr" placeholder="" value="" required>
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
									<table class="display compact" id="form2_bumdes">
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
								<h5>Form 2 Kelurahan/Desa</h5>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<div class="table-responsive">
										<table class="display compact" id="form2_kelurahan">
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
	</div>
<?php } else if($this->session->userdata('is_level')==='Kecamatan'){ ?>
	<div class="page-body">
		<div class="container-fluid">
			<div class="page-header">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header">
								<h5>Form 2 Kecamatan</h5>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<div class="table-responsive">
										<table class="display compact" id="form2_kecamatan">
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
	</div>
<?php } else if($this->session->userdata('is_level')==='Kabupaten'){ ?>
	<div class="page-body">
		<div class="container-fluid">
			<div class="page-header">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header">
								<h5>Form 2 Kabupaten</h5>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<div class="table-responsive">
										<table class="display compact" id="form2_kabupaten">
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
									Form 2
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
												<form class="card" action="<?php echo site_url('form2/tambah_Form2_Provinsi');?>" method="post">
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
																	<label class="form-label">Total Omset</label>
																	<input class="form-control" type="number" min="0" name="total_omset" placeholder="" value="" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Laba Bersih</label>
																	<input class="form-control" type="number" min="0" name="laba_bersih" placeholder="" value="" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">CSR</label>
																	<input class="form-control" type="number" min="0" name="csr" placeholder="" value="" required>
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
												<form class="card" action="<?php echo site_url('form2/edit_Form2_Provinsi');?>" method="post">
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
																	<label class="form-label">Total Omset</label>
																	<input class="form-control" type="number" min="0" name="total_omset" placeholder="" value="" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Laba Bersih</label>
																	<input class="form-control" type="number" min="0" name="laba_bersih" placeholder="" value="" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">CSR</label>
																	<input class="form-control" type="number" min="0" name="csr" placeholder="" value="" required>
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
												<form class="card" action="<?php echo site_url('form2/delete_Form2_Provinsi');?>" method="post">
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
								<div class="table-responsive p-3">
									<table class="display compact" id="form2_provinsi">
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
<?php } else if($this->session->userdata('is_level')==='Admin'){ ?>
	<div class="page-body">
		<div class="container-fluid">
			<div class="page-header">
				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-header">
								<h5>
									Form 2 Admin
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
												<form class="card" action="<?php echo site_url('form2/tambah_Form2_Provinsi');?>" method="post">
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
																	<label class="form-label">Total Omset</label>
																	<input class="form-control" type="number" min="0" name="total_omset" placeholder="" value="" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Laba Bersih</label>
																	<input class="form-control" type="number" min="0" name="laba_bersih" placeholder="" value="" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">CSR</label>
																	<input class="form-control" type="number" min="0" name="csr" placeholder="" value="" required>
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
												<form class="card" action="<?php echo site_url('form2/edit_Form2_Provinsi');?>" method="post">
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
																	<label class="form-label">Total Omset</label>
																	<input class="form-control" type="number" min="0" name="total_omset" placeholder="" value="" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">Laba Bersih</label>
																	<input class="form-control" type="number" min="0" name="laba_bersih" placeholder="" value="" required>
																</div>
															</div>
															<div class="col-md-12">
																<div class="mb-3">
																	<label class="form-label">CSR</label>
																	<input class="form-control" type="number" min="0" name="csr" placeholder="" value="" required>
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
											<form class="card" action="<?php echo site_url('form2/delete_Form2_Provinsi');?>" method="post">
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
							<div class="table-responsive p-3">
								<table class="display compact" id="form2_admin">
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
<?php } ?>
