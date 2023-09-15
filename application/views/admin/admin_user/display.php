<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/admin/img/apple-icon.png')?>">
	<link rel="icon" type="image/png" href="<?= base_url('assets/admin/img/favicon.png')?>">
	<title>
		Userdashboard
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
</head>
<style>
	
	*{
		
margin:0px;
padding:0px;
	}
	
	.carousel-inner{
		width: 100%;
		height: 100%;
		/* margin-left: 400px; */
		margin-top: 30px;
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
	<!-- slider -->
	<div class="container-fluid">
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= base_url('imges/8.jpg')?>" class="d-block w-100" alt="Here picture">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('imges/7.jpg')?>" class="d-block w-100" alt="Here 2">
    </div>
    <div class="carousel-item">
      <img src="<?= base_url('imges/11.jpg')?>" class="d-block w-100" alt="here 3">
    </div>
  </div>
</div>
	</div>
	<br><div class="container-fluid">
		<div class="row">
	
	<?php foreach ($faculty_id as $facultys) {?>
		
  <section class=" my-5" style="max-width: 18rem;">
      
    <div class="card testimonial-card ">
      <div class="card-up aqua-gradient"></div>
      <div class="avatar mx-auto white">
        <img src="imges/person.png" class="rounded-circle img-fluid"
          alt="faculty"  style="width:70px">
      </div>
      <div class="card-body text-center">
		
         <h6 class="card-title font-weight-bold"><?php echo $facultys['first_name'], $facultys['last_name']?></h6> 
       <hr>
       <th>Department:</th>
		<td><?php echo $facultys['department']?></td> <br>
		<th class="text-center text-uppercase text-dark  font-weight-bolder opacity-7">Description :</th>
		<td><?php echo $facultys['faculty_role']?></td><br> 
		 <th>Qualification :</th>
		 <td><?php echo $facultys['level_of_education']?></td><br> 
		<th>Email:</th>
		<td><?php echo $facultys['email']?></td><br>
		<th>Phone No :</th>
		<td><?php echo $facultys['phone_no']?></td> 
      </div>
    </div>
    
  </section> <?php }?>
</div></div>
<!-- end of slider -->	


</body>
<script src="<?= base_url('assets/admin/js/core/popper.min.js')?>"></script>
			<script src="<?= base_url('assets/admin/js/core/bootstrap.min.js')?>"></script>
			<script src="<?= base_url('assets/admin/js/plugins/perfect-scrollbar.min.js')?>"></script>
			<script src="<?= base_url('assets/admin/js/plugins/smooth-scrollbar.min.js')?>"></script>
			<script>
				var win = navigator.platform.indexOf('Win') > -1;
				if (win && document.querySelector('#sidenav-scrollbar')) {
					var options = {
						damping: '0.5'
					}
					Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
				}

			</script>
			<!-- Github buttons -->
			<script async defer src="https://buttons.github.io/buttons.js"></script>
			<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
			<script src="<?= base_url('assets/admin/js/soft-ui-dashboard.min.js?v=1.0.7')?>"></script>
			<script type="text/javascript">
				$(document).ready(function(){
					$('.Sub-btn').click(function(){
						$(this).next('.sub-menu').slideToggle();
					});
				});
			</script>
</html>
