<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php if($this->session->userdata('is_level')==='Bumdes'){ ?>
<div class="page-body">
	<div class="container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-6">
					<h3>Edit Profile</h3>
				</div>
			</div>
		</div>
	</div>
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="edit-profile">
			<div class="row">
				<div class="col-xl-12">
					<form class="card" action="<?php echo site_url('profil/updateProfil');?>" method="post">
						<div class="card-header pb-0">
							<h4 class="card-title mb-0">Profil Bumdes</h4>
							<div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-5">
									<div class="mb-3">
										<label class="form-label">Nama Bumdes</label>
										<input class="form-control" type="text" name="nama_bumdes" placeholder="Nama Bumdes" value="<?php echo $this->session->userdata('nama_bumdes')?>">
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="mb-3">
										<label class="form-label">Username</label>
										<input class="form-control" type="text" name="username" placeholder="Username" value="<?php echo $this->session->userdata('username')?>">
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="mb-3">
										<label class="form-label">Ubah Password</label>
										<input class="form-control" type="text" name="password" placeholder="Masukkan Password Baru" value="">
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="mb-3">
										<label class="form-label">Nama Ketua/Direktur</label>
										<input class="form-control" type="text" name="nama_direktur" placeholder="Nama Ketua/Direktur" value="<?php echo $this->session->userdata('nama_direktur')?>">
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="mb-3">
										<label class="form-label">No.HP Ketua/Direktur</label>
										<input class="form-control" type="text" name="hp_direktur" placeholder="No.HP Ketua/Direktur" value="<?php echo $this->session->userdata('hp_direktur')?>">
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="mb-3">
										<label class="form-label">No. Sertifikat</label>
										<input class="form-control" type="text" name="no_sertifikat" placeholder="No.Sertifikat" value="<?php echo $this->session->userdata('no_sertifikat')?>">
									</div>
								</div>
								<div class="col-sm-6 col-md-3">
									<div class="mb-3">
										<label class="form-label">Total Aset BUMDes</label>
										<input class="form-control" type="number" name="total_aset" placeholder="Total Aset BUMDes" value="<?php echo $this->session->userdata('total_aset')?>">
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Alamat Kantor Bumdes</label>
										<input class="form-control" type="text" name="alamat_bumdes" placeholder="Alamat Kantor Bumdes" value="<?php echo $this->session->userdata('alamat_bumdes')?>">
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="mb-3">
										<label class="form-label">Kode BumDes</label>
										<input class="form-control" type="text" name="kode_bumdes" placeholder="Kode BumDes" value="<?php echo $this->session->userdata('kode_bumdes')?>">
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="mb-3">
										<label class="form-label">Kategori Usaha</label>
										<select name="kategori_usaha" class="form-control btn-square">
											<option value="<?php echo $this->session->userdata('kategori_usaha')?>"><?php echo $this->session->userdata('kategori_usaha')?></option>
											<option value="Barang">Barang</option>
											<option value="Jasa">Jasa</option>
											<option value="Barang dan Jasa">Barang dan Jasa</option>
											<option value="Lainnya">Lainnya</option>
										</select>
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="mb-3">
										<label class="form-label">Status Badan Hukum</label>
										<select name="status_badan_hukum" class="form-control btn-square">
											<option value="<?php echo $this->session->userdata('status_badan_hukum')?>"><?php echo $this->session->userdata('status_badan_hukum')?></option>
											<option value="Berbadan Hukum dari Kemenkumham">Berbadan Hukum dari Kemenkumham</option>
											<option value="Proses Pendaftaran ke Kemendes">Proses Pendaftaran ke Kemendes</option>
											<option value="Belum Mendaftar ke Kemendes">Belum Mendaftar ke Kemendes</option>
										</select>
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="mb-3">
										<label class="form-label">Jenis Usaha Bumdes</label>
										<input class="form-control" type="text" name="jenis_usaha" placeholder="Jenis Usaha" value="<?php echo $this->session->userdata('jenis_usaha')?>">
									</div>
								</div>
								<div class="col-md-4">
									<div class="mb-3">
										<label class="form-label">Klasifikasi Bumdes</label>
										<select name="klasifikasi_bumdes" class="form-control btn-square">
											<option value="<?php echo $this->session->userdata('klasifikasi_bumdes')?>"><?php echo $this->session->userdata('klasifikasi_bumdes')?></option>
											<option value="Tumbuh">Tumbuh</option>
											<option value="Berkembang">Berkembang</option>
											<option value="Dasar">Dasar</option>
											<option value="Maju">Maju</option>
											<option value="Berjaya">Berjaya</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="mb-3">
										<label class="form-label">Jenis Marketing</label>
										<select name="online_marketing" class="form-control btn-square">
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
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">NPWP Bumdes</label>
										<input class="form-control" type="text" name="npwp_bumdes" placeholder="Masukkan NPWP Bumdes . . ." value="<?php echo $this->session->userdata('npwp_bumdes') ?>">
									</div>
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Bank</label>
										<select name="bank_rek_bumdes" class="form-control btn-square">
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
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">No.Rekening Bumdes</label>
										<input class="form-control" name="rek_bumdes" type="text" placeholder="08xxxxxxxxxx" value="<?php echo $this->session->userdata('rek_bumdes')?>">
									</div>
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Status Internet</label>
										<select name="is_blankspot" class="form-control btn-square">
											<option value="<?php echo $this->session->userdata('is_blankspot')?>"><?php echo $this->session->userdata('is_blankspot')?></option>
											<option value="Blankspot">Blankspot</option>
											<option value="Online">Online</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Berita Acara Pembentukan</label>
										<input class="form-control" type="text" name="berita_acara_pembentukan" placeholder="Berita Acara Pembentukan" value="<?php echo $this->session->userdata('berita_acara_pembentukan')?>">
									</div>
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Nomor Peraturan Desa</label>
										<input class="form-control" type="text" name="no_peraturan_desa" placeholder="Nomor Peraturan Desa" value="<?php echo $this->session->userdata('no_peraturan_desa')?>">
									</div>
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Nomor SK Pengurus</label>
										<input class="form-control" type="text" name="no_sk_pengurus" placeholder="Nomor SK Pengurus" value="<?php echo $this->session->userdata('no_sk_pengurus')?>">
									</div>
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">AD / ART</label>
										<input class="form-control" type="text" name="ad_art" placeholder="AD / ART" value="<?php echo $this->session->userdata('ad_art')?>">
									</div>
								</div>
								<div class="col-md-12">
									<div>
										<label class="form-label">Aset Bumdes</label>
										<textarea class="form-control" rows="5" name="aset_bumdes" placeholder="Masukkan Aset Bumdes . . ."><?php echo $this->session->userdata('aset_bumdes')?></textarea>
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
								<div class="col-sm-6 col-md-6">
									<div class="mb-3">
										<label class="form-label">Nama Kepala Desa</label>
										<input class="form-control" name="nama_kades" type="text" placeholder="Nama Kepala Desa" value="<?php echo $this->session->userdata('nama_kades')?>">
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="mb-3">
										<label class="form-label">No.HP Kepala Desa</label>
										<input class="form-control" name="hp_kades" type="text" placeholder="08xxxxxxxxxx" value="<?php echo $this->session->userdata('hp_kades')?>">
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="mb-3">
										<label class="form-label">NPWP Desa</label>
										<input class="form-control" type="text" name="npwp_desa" placeholder="Masukkan NPWP Bumdes . . ." value="<?php echo $this->session->userdata('npwp_desa')?>">
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="mb-3">
										<label class="form-label">Bank</label>
										<select name="bank_rek_desa" class="form-control btn-square">
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
								<div class="col-sm-6 col-md-4">
									<div class="mb-3">
										<label class="form-label">No.Rekening Desa</label>
										<input class="form-control" type="text" name="rek_desa" placeholder="No. Rekening Desa" value="<?php echo $this->session->userdata('rek_desa')?>">
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer text-end">
							<button class="btn btn-primary" type="submit">Update Profil</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Container-fluid Ends-->
</div>
<?php } elseif($this->session->userdata('is_level')==='Provinsi'){?>
<div class="page-body">
	<div class="container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-6">
					<h3>Edit Profile</h3>
				</div>
			</div>
		</div>
	</div>
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="edit-profile">
			<div class="row">
				<div class="col-xl-12">
					<form class="card" action="<?php echo site_url('profil/updateProfilOther');?>" method="post">
						<div class="card-header pb-0">
							<h4 class="card-title mb-0">Profil Provinsi</h4>
							<div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-5">
									<div class="mb-3">
										<label class="form-label">Username</label>
										<input class="form-control" type="text" name="username" placeholder="Username" value="<?php echo $this->session->userdata('username')?>">
									</div>
								</div>
								<div class="col-md-5">
									<div class="mb-3">
										<label class="form-label">Ubah Password</label>
										<input class="form-control" type="text" name="password" placeholder="Password" value="">
									</div>
								</div>
							</div>
						</div>

						<div class="card-footer text-end">
							<button class="btn btn-primary" type="submit">Update Profil</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Container-fluid Ends-->
</div>
<?php } elseif($this->session->userdata('is_level')==='Kabupaten'){?>
	<div class="page-body">
		<div class="container-fluid">
			<div class="page-header">
				<div class="row">
					<div class="col-sm-6">
						<h3>Edit Profile</h3>
					</div>
				</div>
			</div>
		</div>
		<!-- Container-fluid starts-->
		<div class="container-fluid">
			<div class="edit-profile">
				<div class="row">
					<div class="col-xl-12">
						<form class="card" action="<?php echo site_url('profil/updateProfilOther');?>" method="post">
							<div class="card-header pb-0">
								<h4 class="card-title mb-0">Profil Kabupaten</h4>
								<div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-md-5">
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input class="form-control" type="text" name="username" placeholder="Username" value="<?php echo $this->session->userdata('username')?>">
										</div>
									</div>
									<div class="col-md-5">
										<div class="mb-3">
											<label class="form-label">Ubah Password</label>
											<input class="form-control" type="text" name="password" placeholder="Password" value="">
										</div>
									</div>
								</div>
							</div>

							<div class="card-footer text-end">
								<button class="btn btn-primary" type="submit">Update Profil</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Container-fluid Ends-->
	</div>
<?php } elseif($this->session->userdata('is_level')==='Kecamatan'){?>
	<div class="page-body">
		<div class="container-fluid">
			<div class="page-header">
				<div class="row">
					<div class="col-sm-6">
						<h3>Edit Profile</h3>
					</div>
				</div>
			</div>
		</div>
		<!-- Container-fluid starts-->
		<div class="container-fluid">
			<div class="edit-profile">
				<div class="row">
					<div class="col-xl-12">
						<form class="card" action="<?php echo site_url('profil/updateProfilOther');?>" method="post">
							<div class="card-header pb-0">
								<h4 class="card-title mb-0">Profil Kecamatan</h4>
								<div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-md-5">
										<div class="mb-3">
											<label class="form-label">Username</label>
											<input class="form-control" type="text" name="username" placeholder="Username" value="<?php echo $this->session->userdata('username')?>">
										</div>
									</div>
									<div class="col-md-5">
										<div class="mb-3">
											<label class="form-label">Ubah Password</label>
											<input class="form-control" type="text" name="password" placeholder="Password" value="">
										</div>
									</div>
								</div>
							</div>

							<div class="card-footer text-end">
								<button class="btn btn-primary" type="submit">Update Profil</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Container-fluid Ends-->
	</div>
<?php } elseif($this->session->userdata('is_level')==='Desa'){ ?>
<div class="page-body">
	<div class="container-fluid">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-6">
					<h3>Edit Profile</h3>
				</div>
			</div>
		</div>
	</div>
	<!-- Container-fluid starts-->
	<div class="container-fluid">
		<div class="edit-profile">
			<div class="row">
				<div class="col-xl-12">
					<form class="card" action="<?php echo site_url('profil/updateProfilOther');?>" method="post">
						<div class="card-header pb-0">
							<h4 class="card-title mb-0">Profil Desa</h4>
							<div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-5">
									<div class="mb-3">
										<label class="form-label">Username</label>
										<input class="form-control" type="text" name="username" placeholder="Username" value="<?php echo $this->session->userdata('username')?>">
									</div>
								</div>
								<div class="col-md-5">
									<div class="mb-3">
										<label class="form-label">Ubah Password</label>
										<input class="form-control" type="text" name="password" placeholder="Password" value="">
									</div>
								</div>
							</div>
						</div>

						<div class="card-footer text-end">
							<button class="btn btn-primary" type="submit">Update Profil</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Container-fluid Ends-->
</div>
<?php } ?>
