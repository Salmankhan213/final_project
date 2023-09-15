<!DOCTYPE html>
<html lang="en">
<style>
	ul li .dropdown-menu{
		background-color: #002147;
	}
	ul li .dropdown-item{
		color:white;
	}
	ul li .dropdown-item:hover{
		background-color:#002147;

		color:yellow;
	}
</style>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/admin/img/apple-icon.png')?>">
	<link rel="icon" type="image/png" href="<?= base_url('images/logo.jpeg')?>">
	<title>
		Admindashboard
	</title>
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<!-- Nucleo Icons -->
	<link href="<?= base_url('assets/admin/css/nucleo-icons.css" rel="stylesheet')?>" />
	<link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
	<!-- Font Awesome Icons -->
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<link href="<?= base_url('assets/admin/css/nucleo-svg.css')?>" rel="stylesheet" />
	<!-- CSS Files -->
	<link id="pagestyle" href="<?= base_url('assets/admin/css/soft-ui-dashboard.css?v=1.0.7')?>" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
	<aside class="sidenav navbar navbar-vertical bg-dark navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-light "
		id="sidenav-main">
		<div class="sidenav-header">
			<i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
				aria-hidden="true" id="iconSidenav"></i>
			<a class="navbar-brand m-0" href=" https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html "
				target="_blank">
				<span class="ms-1 font-weight-bold">Admin Dashboard</span>
			</a>
		</div>
		<hr class="horizontal dark mt-0">
		<ul class="navbar-nav">

		<li class="nav-item">
					<a class="nav-link  active my-2" href="<?= base_url('admindashboard/add_new_dep'); ?>">
						<span class="nav-link-text ms-1  py-2">Add New Department</span>
					</a>
</li>
		<li class="nav-item">
					<a class="nav-link  active" href="<?= base_url('admin/add_admin')?>">
					<span class="nav-link-text ms-1 py-2">Add New Admin</span>
					</a>
</li>

				<li class="nav-item my-2">
					<a class="nav-link  active" href="<?= base_url('admin/admin_get')?>">
					<span class="nav-link-text ms-1  py-2">View of admin,s</span>
</a>
</li>
         	<li class="nav-item  my-2">
					<a class="nav-link active" href="<?php echo base_url('admin')?>">
						
					<i class="fa fa-sign-out  py-2" aria-hidden="true"></i><span class="nav-link-text ms-1 text-dark">Logout</span>
					</a>
				</li>
			</ul>
	
	</aside>
	
	<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
		<!-- Navbar -->
		<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl bg-dark" id="navbarBlur"
			navbar-scroll="true">
			<div class="container-fluid py-1 px-3">
				<nav aria-label="breadcrumb">

					<h6 class="font-weight-bolder text-light mb-0">AdminDashboard</h6>
					
				</nav>
				<div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
					<div class="ms-md-auto  ">
						<form method="post" action="<?php echo base_url('admindashboard/index') ?>">
						<!-- <select name="faculty_id" id="" style="height:30px; width:250px;">
							<option value="">All Department</option>
							<?php foreach($data as $usersearch) {?>
							<option value="<?php echo $usersearch['id']?>"><?= $usersearch['department']?></option> <?php }?>
						</select> -->
						<input type="text" name="keyword" palceholder="Search" class="me-1">
					<button type="submit" name="submit" >Search</buttton>
						</form>
					</div>
					<ul class="navbar-nav  justify-content-end">

						<li class="nav-item d-flex align-items-center">
							<a href="<?php echo  base_url('admin')?>" class="nav-link text-body font-weight-bold px-0">
								<i class="fa fa-user me-sm-1"></i>
								<span class="d-sm-inline d-none">Logout</span>
							</a>
						</li>
					</ul>
					</li>
					</li>
					</ul>
				</div>
			</div>
		</nav>
						
