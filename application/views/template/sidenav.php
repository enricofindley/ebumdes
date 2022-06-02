<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php if($this->session->userdata('is_level')==='Bumdes'){ ?>
	<div class="page-body-wrapper horizontal-menu">
	<!-- Page Sidebar Start-->
		<header class="main-nav">
			<div class="sidebar-user text-center">
				<a class="setting-primary" href="<?=base_url()?>index.php/profil"><i data-feather="settings"></i></a>
				<img class="img-90 rounded-circle" src="<?= base_url()?>assets/images/dashboard/1.png" alt="">
				<h6 class="mt-3 f-14 f-w-600">Bumdes <?php echo $this->session->userdata('nama_bumdes')?></h6>
				<p class="mb-0 font-roboto">Klasifikasi : <?php echo $this->session->userdata('klasifikasi_bumdes')?></p>
				<ul>
					<li><span>Kecamatan</span>
						<p><?php echo $this->session->userdata('nama_kecamatan')?></p>
					</li>
					<li><span>Kabupaten</span>
						<p><?php echo $this->session->userdata('nama_kabupaten')?></p>
					</li>
				</ul>
			</div>
			<nav>
				<div class="main-navbar">
					<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
					<div id="mainnav">
						<ul class="nav-menu custom-scrollbar">
							<li class="back-btn">
								<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
							</li>
							<li class="sidebar-main-title">
								<div>
									<h6>Menu</h6>
								</div>
							</li>
							<li class="dropdown"><a class="nav-link menu-title" href="<?php base_url()?>bumdes"><i data-feather="home"></i><span>Dashboard</span></a>
							</li>
							<li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="file-text"></i><span>Form</span></a>
								<ul class="nav-submenu menu-content">
									<li><a href="<?php base_url()?>form1">Form 1</a></li>
									<li><a href="<?php base_url()?>form2">Form 2</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
				</div>
			</nav>
		</header>
		<!-- Page Sidebar Ends-->
<?php } elseif($this->session->userdata('is_level')==='Admin'){?>
		<div class="page-body-wrapper horizontal-menu">
			<!-- Page Sidebar Start-->
			<header class="main-nav">
				<div class="sidebar-user text-center">
					<img class="img-90 rounded-circle" src="<?= base_url()?>assets/images/dashboard/1.png" alt="">
					<h6 class="mt-3 f-14 f-w-600">Admin</h6>
				</div>
				<nav>
					<div class="main-navbar">
						<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
						<div id="mainnav">
							<ul class="nav-menu custom-scrollbar">
								<li class="back-btn">
									<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
								</li>
								<li class="sidebar-main-title">
									<div>
										<h6>Menu</h6>
									</div>
								</li>
								<li class="dropdown"><a class="nav-link menu-title" href="<?php base_url()?>admin"><i data-feather="home"></i><span>Dashboard</span></a>
								</li>
								<li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="file-text"></i><span>Form</span></a>
									<ul class="nav-submenu menu-content">
										<li><a href="<?php base_url()?>form1">Form 1</a></li>
										<li><a href="<?php base_url()?>form2">Form 2</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
					</div>
				</nav>
			</header>
			<!-- Page Sidebar Ends-->
<?php } elseif($this->session->userdata('is_level')==='Provinsi'){?>
			<div class="page-body-wrapper horizontal-menu">
				<!-- Page Sidebar Start-->
				<header class="main-nav">
					<div class="sidebar-user text-center">
						<a class="setting-primary" href="<?=base_url()?>index.php/profil"><i data-feather="settings"></i></a>
						<img class="img-90 rounded-circle" src="<?= base_url()?>assets/images/dashboard/1.png" alt="">
						<h6 class="mt-3 f-14 f-w-600">Provinsi <?php echo $this->session->userdata('nama') ?></h6>
					</div>
					<nav>
						<div class="main-navbar">
							<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
							<div id="mainnav">
								<ul class="nav-menu custom-scrollbar">
									<li class="back-btn">
										<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
									</li>
									<li class="sidebar-main-title">
										<div>
											<h6>Menu</h6>
										</div>
									</li>
									<li class="dropdown"><a class="nav-link menu-title" href="<?php base_url()?>provinsi"><i data-feather="home"></i><span>Dashboard</span></a>
									</li>
									<li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="file-text"></i><span>Form</span></a>
										<ul class="nav-submenu menu-content">
											<li><a href="<?php base_url()?>form1">Form 1</a></li>
											<li><a href="<?php base_url()?>form2">Form 2</a></li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
						</div>
					</nav>
				</header>
				<!-- Page Sidebar Ends-->
<?php } elseif($this->session->userdata('is_level')==='Kabupaten'){?>
				<div class="page-body-wrapper horizontal-menu">
					<!-- Page Sidebar Start-->
					<header class="main-nav">
						<div class="sidebar-user text-center">
							<a class="setting-primary" href="<?=base_url()?>index.php/profil"><i data-feather="settings"></i></a>
							<img class="img-90 rounded-circle" src="<?= base_url()?>assets/images/dashboard/1.png" alt="">
							<h6 class="mt-3 f-14 f-w-600">Kabupaten/Kota <?php echo $this->session->userdata('nama_kabupaten') ?></h6>
						</div>
						<nav>
							<div class="main-navbar">
								<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
								<div id="mainnav">
									<ul class="nav-menu custom-scrollbar">
										<li class="back-btn">
											<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
										</li>
										<li class="sidebar-main-title">
											<div>
												<h6>Menu</h6>
											</div>
										</li>
										<li class="dropdown"><a class="nav-link menu-title" href="<?php base_url()?>kabupaten"><i data-feather="home"></i><span>Dashboard</span></a>
										</li>
										<li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="file-text"></i><span>Form</span></a>
											<ul class="nav-submenu menu-content">
												<li><a href="<?php base_url()?>form1">Form 1</a></li>
												<li><a href="<?php base_url()?>form2">Form 2</a></li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
							</div>
						</nav>
					</header>
					<!-- Page Sidebar Ends-->
<?php } elseif($this->session->userdata('is_level')==='Kecamatan'){?>
					<div class="page-body-wrapper horizontal-menu">
						<!-- Page Sidebar Start-->
						<header class="main-nav">
							<div class="sidebar-user text-center">
								<a class="setting-primary" href="<?=base_url()?>index.php/profil"><i data-feather="settings"></i></a>
								<img class="img-90 rounded-circle" src="<?= base_url()?>assets/images/dashboard/1.png" alt="">
								<h6 class="mt-3 f-14 f-w-600">Kecamatan <?php echo $this->session->userdata('nama_kecamatan') ?></h6>
								<p class="mb-0 font-roboto">Kabupaten/Kota <?php echo $this->session->userdata('nama_kabupaten')?></p>
							</div>
							<nav>
								<div class="main-navbar">
									<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
									<div id="mainnav">
										<ul class="nav-menu custom-scrollbar">
											<li class="back-btn">
												<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
											</li>
											<li class="sidebar-main-title">
												<div>
													<h6>Menu</h6>
												</div>
											</li>
											<li class="dropdown"><a class="nav-link menu-title" href="<?php base_url()?>kecamatan"><i data-feather="home"></i><span>Dashboard</span></a>
											</li>
											<li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="file-text"></i><span>Form</span></a>
												<ul class="nav-submenu menu-content">
													<li><a href="<?php base_url()?>form1">Form 1</a></li>
													<li><a href="<?php base_url()?>form2">Form 2</a></li>
												</ul>
											</li>
										</ul>
									</div>
									<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
								</div>
							</nav>
						</header>
						<!-- Page Sidebar Ends-->
<?php } elseif($this->session->userdata('is_level')==='Desa'){?>
						<div class="page-body-wrapper horizontal-menu">
							<!-- Page Sidebar Start-->
							<header class="main-nav">
								<div class="sidebar-user text-center">
									<a class="setting-primary" href="<?=base_url()?>index.php/profil"><i data-feather="settings"></i></a>
									<img class="img-90 rounded-circle" src="<?= base_url()?>assets/images/dashboard/1.png" alt="">
									<h6 class="mt-3 f-14 f-w-600">Desa <?php echo $this->session->userdata('nama_kelurahan') ?></h6>
									<ul>
										<li><span>Kecamatan</span>
											<p><?php echo $this->session->userdata('nama_kecamatan')?></p>
										</li>
										<li><span>Kabupaten</span>
											<p><?php echo $this->session->userdata('nama_kabupaten')?></p>
										</li>
									</ul>
								</div>
								<nav>
									<div class="main-navbar">
										<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
										<div id="mainnav">
											<ul class="nav-menu custom-scrollbar">
												<li class="back-btn">
													<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
												</li>
												<li class="sidebar-main-title">
													<div>
														<h6>Menu</h6>
													</div>
												</li>
												<li class="dropdown"><a class="nav-link menu-title" href="<?php base_url()?>kelurahan"><i data-feather="home"></i><span>Dashboard</span></a>
												</li>
												<li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="file-text"></i><span>Form</span></a>
													<ul class="nav-submenu menu-content">
														<li><a href="<?php base_url()?>form1">Form 1</a></li>
														<li><a href="<?php base_url()?>form2">Form 2</a></li>
													</ul>
												</li>
											</ul>
										</div>
										<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
									</div>
								</nav>
							</header>
							<!-- Page Sidebar Ends-->
<?php } ?>
