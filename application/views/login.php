<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Aplikasi E-BumDes Smart Village Lampung">
	<meta name="keywords" content="smartvillage, smartvillage lampung, bumdes, bumdes lampung, ebumdes, e-bumdes, e-bumdes lampung">
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
<!-- Loader starts-->
<div class="loader-wrapper">
	<div class="theme-loader">
		<div class="loader-p"></div>
	</div>
</div>
<!-- Loader ends-->
<!-- page-wrapper Start-->
<section>
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-12">
				<div class="login-card">
					<form class="theme-form login-form" action="<?php echo site_url('login/auth');?>" method="post">
						<h4>Login</h4>
						<h6>Selamat Datang di Aplikasi E-BUMDes</h6>
						<?php
						if($this->session->flashdata('passError')){
							?>
							<div class="alert alert-danger dark alert-dismissible fade show" role="alert">
								<p>Wrong Password !!!</p>
								<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php } elseif($this->session->flashdata('userError')) {?>
							<div class="alert alert-danger dark alert-dismissible fade show" role="alert">
								<p>Wrong Username !!!</p>
								<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php } elseif($this->session->flashdata('notUser')){ ?>
						<div class="alert alert-danger dark alert-dismissible fade show" role="alert">
							<p>User Tidak Terdaftar !!!</p>
							<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
						<?php } ?>

						<div class="form-group">
							<label>Username</label>
							<div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
								<input class="form-control" name="username" type="text" required="" placeholder="Username">
							</div>
						</div>
						<div class="form-group">
							<label>Password</label>
							<div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
								<input class="form-control" name="password" type="password" name="login[password]" required="" placeholder="Password">
							</div>
						</div>
						<div class="form-group">
							<button class="btn btn-primary btn-block" type="submit">Sign in</button>
						</div>
						<p>Copyright &copy; 2022 <a class="ms-2" href="https://smartvillage.co.id">Smart Village Lampung</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- page-wrapper end-->
<script src="<?=base_url()?>assets/js/jquery-3.5.1.min.js"></script>
<!-- feather icon js-->
<script src="<?=base_url()?>assets/js/icons/feather-icon/feather.min.js"></script>
<script src="<?=base_url()?>assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- Sidebar jquery-->
<script src="<?=base_url()?>assets/js/sidebar-menu.js"></script>
<script src="<?=base_url()?>assets/js/config.js"></script>
<!-- Bootstrap js-->
<script src="<?=base_url()?>assets/js/bootstrap/popper.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap/bootstrap.min.js"></script>
<!-- Plugins JS start-->
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="<?=base_url()?>assets/js/script.js"></script>
<!-- login js-->
</body>
</html>
