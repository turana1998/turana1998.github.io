
<?php
ob_start();
 require_once "../settings/code/admin.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
	<title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
	<link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
	<link href="../assets/node_modules/toast-master/css/jquery.toast.css" rel="stylesheet">
	<link href="dist/css/style.min.css" rel="stylesheet">
	<link href="dist/css/pages/dashboard1.css" rel="stylesheet">
	<link rel="stylesheet" href="../assets/node_modules/dropify/dist/css/dropify.min.css">

	<?php  if($General->PageNameGet()=="blog-list" || $General->PageNameGet()=="portfolio-kat-siyahi" || $General->PageNameGet()=="portfolio-siyahi" || $General->PageNameGet()=="blog-kat-list"){?>
	<link href="../assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/node_modules/switchery/dist/switchery.min.css" rel="stylesheet" />
    <link href="../assets/node_modules/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="../assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="../assets/node_modules/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="../assets/node_modules/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
	<?php }?>
    <link href="dist/css/pages/form-icheck.css" rel="stylesheet">
	<link href="../assets/node_modules/icheck/skins/all.css" rel="stylesheet">
</head>

<body class="skin-default-dark fixed-layout">
	
	<div id="main-wrapper">
		<header class="topbar">
			<nav class="navbar top-navbar navbar-expand-md navbar-dark">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">
						<!-- Logo icon --><b>
							<!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
							<!-- Dark Logo icon -->
							<img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
							<!-- Light Logo icon -->
							<img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
						</b>
						<!--End Logo icon -->
						<!-- Logo text --><span>
						 <!-- dark Logo text -->
						 <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
						 <!-- Light Logo text -->    
						 <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
				</div>
				<!-- ============================================================== -->
				<!-- End Logo -->
				<!-- ============================================================== -->
				<div class="navbar-collapse">
					<!-- ============================================================== -->
					<!-- toggle and nav items -->
					<!-- ============================================================== -->
					<ul class="navbar-nav mr-auto">
						<!-- This is  -->
						<li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
						<li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
						
					</ul>
					<!-- ============================================================== -->
					<!-- User profile and search -->
					<!-- ============================================================== -->
					<ul class="navbar-nav my-lg-0">
						<!-- ============================================================== -->
						<!-- Comment -->
						<!-- ============================================================== -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-email"></i>
								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
							</a>
							<div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
								<ul>
									<li>
										<div class="drop-title">Notifications</div>
									</li>
									<li>
										<div class="message-center">
											<!-- Message -->
											<a href="javascript:void(0)">
												<div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
												<div class="mail-contnet">
													<h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
											</a>
											<!-- Message -->
											<a href="javascript:void(0)">
												<div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
												<div class="mail-contnet">
													<h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
											</a>
											<!-- Message -->
											<a href="javascript:void(0)">
												<div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
												<div class="mail-contnet">
													<h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
											</a>
											<!-- Message -->
											<a href="javascript:void(0)">
												<div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
												<div class="mail-contnet">
													<h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
											</a>
										</div>
									</li>
									<li>
										<a class="nav-link text-center link" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
									</li>
								</ul>
							</div>
						</li></ul>
				</div>
			</nav>
		</header>