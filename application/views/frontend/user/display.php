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
		background:white;	
	}
	
#navbar{
	background-color: #410606;
	color: white;
}


</style>
<body  >

	 <?php if( $department){?>
			<nav class="navbar navbar-expand-lg   my-5 w-100 " id="navbar">
				
				<button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div id="my-nav" class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item ">
							<h1 class="text-white ">Department of <?php echo $department[0]['department_name'] ?> Faculty</h1>
						</li>
						
					</ul>
				</div>
			</nav>
			
		<div class="container-fluid">
		<div class="row">
			 <div class="col-12 col-md-12 ">
				<div class="card">
		
					<div class="card-body  ">
						<div class="table-responsive table-scripted">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>S.No:</th>
										<th>name</th>
										<th>Designation</th>
										<th>Email ID</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
							
								<?php 	$serialNumber = 1;?>
									<?php  foreach ( $department as $facultys) { ?>
									<tr>
										
									    <th><?php echo $serialNumber; ?></th>
										<td class="text-primary"> <?= $facultys['title_fa'] ?> <?= $facultys['first_name'] ?> <?= $facultys['last_name'] ?></td>
										<td><?= $facultys['designation'] ?></td>
										<td><a href="mailto:<?= $facultys['email'] ?>"><?= $facultys['email'] ?></a></td>
										<td><a href="<?php echo base_url('moreinfo/index') ?>?pid=<?php echo $facultys['id']?>" class="text-primary">View Profile</a></td>
									</tr>
								<?php 	$serialNumber++; ?>
									<?php } ?>
								</tbody>
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
	 <?php }  else {?> <h3 class="text-muted text-center my-5">Data not Found</h3> <?php } ?>
	
</body>
<script src="<?= base_url('assets/admin/js/core/popper.min.js')?>"></script>
			<script src="<?= base_url('assets/admin/js/core/bootstrap.min.js')?>"></script>
			<script src="<?= base_url('assets/admin/js/plugins/perfect-scrollbar.min.js')?>"></script>
			<script src="<?= base_url('assets/admin/js/plugins/smooth-scrollbar.min.js')?>"></script>
			
</html>
