<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Aplikasi E-BumDes">
	<meta name="keywords" content="bumdes, bumdes lampung, ebumdes, e-bumdes">
	<meta name="author" content="Enrico Findley">
	<link rel="icon" href="<?=base_url()?>assets/images/favicon.png" type="image/x-icon">
	<link rel="shortcut icon" href="<?=base_url()?>assets/images/favicon.png" type="image/x-icon">
	<title>E-Bumdes</title>
	<!-- Google font-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
	<!-- Font Awesome-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/fontawesome.css">
	<!-- ico-font-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/icofont.css">
	<!-- Themify icon-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/themify.css">
	<!-- Flag icon-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/flag-icon.css">
	<!-- Feather icon-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/feather-icon.css">
	<!-- Plugins css start-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/datatables.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/select2.css">
	<!-- Plugins css Ends-->
	<!-- Bootstrap css-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.css">
	<!-- App css-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
	<link id="color" rel="stylesheet" href="<?=base_url()?>assets/css/color-6.css" media="screen">
	<!-- Responsive css-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/responsive.css">
</head>

<body>
	<div class="loader-wrapper">
		<div class="theme-loader">
			<div class="loader-p"></div>
		</div>
	</div>
	<div class="page-wrapper" id="pageWrapper">
	<!-- Page Header Start-->
		<div class="page-main-header">
			<div class="main-header-right row m-0">
				<div class="main-header-left">
					<div class="logo-wrapper"><a href="#"><img class="img-fluid" src="<?=base_url()?>assets/images/logo/logo.png" alt=""></a></div>
					<div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
				</div>
				<div class="nav-right col pull-right right-menu p-0">
					<ul class="nav-menus">
						<li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
						<li class="onhover-dropdown p-0">
							<a href="<?php echo site_url('login/logout');?>"><button class="btn btn-primary-light" type="button"><i data-feather="log-out"></i>Log out</button></a>
						</li>
					</ul>
				</div>
				<div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
			</div>
		</div>
	<!-- Page Header Ends -->
