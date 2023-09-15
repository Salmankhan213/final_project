<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>
		department
	</title>
	
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
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<!-- Nucleo Icons -->
	<link href="<?= base_url('assets/admin/css/nucleo-icons.css" rel="stylesheet')?>" />
	<link href="<?= base_url('assets/admin/css/nucleo-svg.css')?>" rel="stylesheet" />
	<!-- Font Awesome Icons -->
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<link href="<?= base_url('assets/admin/css/nucleo-svg.css')?>" rel="stylesheet" />
	<!-- CSS Files -->
	<link id="pagestyle" href="<?= base_url('assets/admin/css/soft-ui-dashboard.css?v=1.0.7')?>" rel="stylesheet" />
</head>
<style>
	
	*{
		
margin:0px;
padding:0px;
	}
	body{
		background:rgb(243, 241, 241); 	
	}
	
	
	.w-100{
		height:500px;
	}
	.card-img-top{
		width: 10rem;
		margin: 30px;
	}
	.card-body{
		background-color: #f5f7fa;
	}
	

</style>
<body>
	<?php if ($faculty_id ){?>
<div class="container-fluid mt-5">

	<h1 class="text-center text-white">Wellcome to <?php echo $faculty_id[0]['department']?> Department</h1>
			<h5 class="text-center mb-3 text-light">Here all the <?php echo $faculty_id[0]['department']?> Department Faculty Members </h5>
			
	
<?php  foreach ( $faculty_id as $facultys) { ?>
	<div class="row bg-white shadow rounded-3 justify-content-between p-3 mb-3">
		<div class="col-lg-7 col-12 borde d-flex align-items-center flex-wrap">
			<div class="col-8 col-lg-4 m-auto shadow rounded-3 mb-3 mb-lg-0"><img src="<?= base_url('images/'.$facultys['profile_picture']) ?>" alt="" class="img-fluid" style="width:100%; height:20rem;"></div>
			<div class="col-lg-6 col-12 mb-2 mb-lg-0">
				<ul type="none">
					<li class="mb-"><span class="text-dark fs-5 fw-bold">Name:</span> <span class="fs-5 fw-light"><?= $facultys['first_name'] ?><?= $facultys['last_name'] ?></span></li>
					<li class="mb-"><span class="text-dark fs-5 fw-bold">Department:</span> <span class="fs-5 fw-light"><?= $facultys['department'] ?></span></li>
					<li class="mb-"><span class="text-dark fs-5 fw-bold">Description:</span> <span class="fs-5 fw-light"><?= $facultys['faculty_role'] ?></span></li>
					<li class="mb-"><span class="text-dark fs-5 fw-bold">High Qualification:</span> <span class="fs-5 fw-light"><?= $facultys['level_of_education'] ?></span></li>
					<li class="mb-"><span class="text-dark fs-5 fw-bold">Email:</span> <span class="fs-5 fw-light"><?= $facultys['email'] ?></span></li>
					<li class="mb-"><span class="text-dark fs-5 fw-bold">Phone.no:</span> <span class="fs-5 fw-light"><?= $facultys['phone_no'] ?></span></li>
					
				</ul>
			</div>
		</div>
		<div class="col-lg-2 d-flex align-items-center justify-content-lg-end px-5">
			<a href="<?php echo base_url('moreinfo/index') ?>?pid=<?php echo $facultys['id']?>" class="btn btn-warning shadow">More Info</a>
		</div>
	</div>
</div>
<?php  }} else {   } ?>
</body>
<script src="<?= base_url('assets/admin/js/core/popper.min.js')?>"></script>
			<script src="<?= base_url('assets/admin/js/core/bootstrap.min.js')?>"></script>
			<script src="<?= base_url('assets/admin/js/plugins/perfect-scrollbar.min.js')?>"></script>
			<script src="<?= base_url('assets/admin/js/plugins/smooth-scrollbar.min.js')?>"></script>
			
</html>
