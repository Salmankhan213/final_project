<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>header</title>
	<!-- CSS only -->

	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css");?> ">
	<link rel="stylesheet" href="<?php echo base_url("assets/bootstrap-icons");?> ">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">


</head>
<style>
	.d-flex{
	background-color: 	rgba(17, 16, 17, 0.6);
	
	}
	.nav{
		margin-inline: 800px;
		height: 60px;
		margin-top: 7px;
		margin-left:80%;

	}
	.logoimg{
		margin-left: 70px;
		margin-top: 7px;
	}
	.btn{
		margin-top: 7px;
	}

</style>

<body>
	<div class="d-flex flex-wrap ">	
<span class="justify-content-lg-start "><img src="<?php echo base_url('imges/logo.jpg');?>" class="rounded-circle logoimg" width="50px"
				height="50px" alt=""></span>

		<ul class="nav col-12 col-lg-auto me-md-4 mb-3 justify-content-end mb-md-0 "></ul>
		<div class="">
			<a href="<?php echo base_url('login/');?>" type="button" class="btn btn-outline-light">Sign In</a>
			<!-- <a href="<?php echo base_url('login/userregister/');?>" type="button" class="btn btn-outline-light ">Sign-up</a> -->
		</div>
	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
		integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

	<script src="<?php echo base_url('assets/jquery')?>"></script>
</body>

</html>
