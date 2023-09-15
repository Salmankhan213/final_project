<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome to profile information </title>
	<!-- CSS only -->

	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css");?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/bootstrap-icons");?> ">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/style.css");?> ">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<!-- <script src=" <?php echo base_url("asssets/jquery")?>"></script> -->

</head>
<style>
	.navbar-nav li a {
    color: white !important;
    text-decoration: none;
}
	 .dropdown:hover > .dropdown-menu{
            display: block;

        }
	.navbar{
		color:#333333;
		height:5rem;
		background-color:  #600300;
		
	}
	
	.dropdown-menu{
		background-color: #002147;
	}
	.dropdown-item{
		color:white;
	}
	 .dropdown-item:hover{
		background-color:#002147;

		color:yellow;
	}

.carousel-item {
            transition: -webkit-transform 0.5s ease;
            transition: transform 0.5s ease;
            transition: transform 0.5s ease, -webkit-transform 0.5s ease;
            -webkit-backface-visibility: visible;
            backface-visibility: visible;
			background:white;
        }
        .carousel-caption {        
            top: 300px;
            text-transform: uppercase;
            width: 100%;
            right: 0;
            left: 0;
         color:white;
		  text-align:center; 
 }
 .carousel-caption ,h5{
	font-weight: bolder;
	font-size:50px;
	
 }


</style>

<body>
	

<nav class="navbar navbar-expand-lg  text-uppercase fixed-top ">
        <div class="container-fluid">
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
							
						<div class="dropdown ">
							<a id="my-dropdown" class=" dropdown-toggle active nav-link nav-link  text-uppercase text-white" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Faculties of Science</a>
							<div class="dropdown-menu" aria-labelledby="my-dropdown">
								
								<?php  foreach ( $departmentscience as  $department) {?>
						<li><a class=" dropdown-item text-uppercase" href="<?= base_url('User/getdepartment/')?>?dep_id=<?php echo $department->dep_id; ?>"><i class="icon-chevron-right"></i><?= $department->department_name; ?> </a></li>
						<li><hr class="dropdown-divider bg-white"></li>
		<?php		}?>
							</div>
						</div>
						<div class="dropdown mx-5">
							<a id="my-dropdown" class=" dropdown-toggle nav-link  text-uppercase text-white" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Faculties of Arts</a>
							<div class="dropdown-menu" aria-labelledby="my-dropdown">
								
								<?php  foreach ( $departmentart as  $department) {?>
						<li><a class=" dropdown-item text-uppercase" href="<?= base_url('User/getdepartment/')?>?dep_id=<?php echo $department->dep_id; ?>"><i class="icon-chevron-right"></i><?= $department->department_name; ?> </a></li>
						<li><hr class="dropdown-divider bg-white"></li>
		<?php		}?>
							</div>
						</div>
           
				  
				</ul>
              </li>
            </ul><div class="text-md-end">
             <a href="<?php echo base_url('login/');?>" type="button"
					class="btn btn-outline-light justify-content-center col-6 col-lg-auto me-md-4 mb-3  mb-md-0">Sign
					In</a>
         
        </div>
          </div>
        </div>
 </nav>
 
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
		  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
		  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner bg-white">
		  <div class="carousel-item active">
		  <img src="<?= base_url('images/9.jpg')?>" class="d-block w-100 " alt="Here picture">
			<div class="carousel-caption d-none d-md-block">
			  <h5 class="fw-Bolded">Welcome</h5>
			  <p>Faculty Profile Management System</p>
			</div>
		  </div>
		  <div class="carousel-item">
			<img src="<?= base_url('images/12.jpg')?>" class="d-block w-100" alt="..." >
			<div class="carousel-caption d-none d-md-block">
			  <h5>Welcome</h5>
			  <p>Faculty Profile Management System</p>
			</div>
		  </div>
		  <div class="carousel-item">
		  <div class="carousel-caption d-none d-md-inline  mx-0" >
			  <h5 class="text-center m-center">Welcome</h5>
			  <p>Faculty Profile Management System </p>
			</div>
			<img src="<?= base_url('images/9.jpg')?>"class="d-block w-100"  alt="...">
		   
		  </div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
		  <span class="carousel-control-prev" aria-hidden="true"></span>
		  <span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
		  <span class="carousel-control-next" aria-hidden="true"></span>
		  <span class="visually-hidden">Next</span>
		</button>
	  </div>
			  
		  <div class="container">
			  <div class="row">
				  <div class="col-md-12">
					  <h1 class=" text-uppercase offset-md-5  fw-bold text-muted ">About</h1>
					  <p class="text-start  text-muted fw-25">A Faculty Profile Management System is a valuable tool for educational institutions, as it allows for the organization and management of faculty information <br>in a centralized location. With a Faculty Profile Management System, institutions can easily track and update faculty credentials, research interests, and more. This system also allows faculty members to easily update and maintain their own profiles, reducing the workload of administrative staff. By implementing a Faculty Profile Management System, institutions can streamline their processes and improve the accuracy and accessibility of faculty information. In addition, the system can serve as a resource for students, helping them to easily locate and connect with faculty members who align with their academic interests. </p>
				  </div>
				  </div>
	  </div>
  </div>
	
	
	<!-- <script src="<?= base_url('assets/js/bootstrap.bundle.min.js')?>"></script> -->
	<script src="<?= base_url('assets/admin/js/core/popper.min.js')?>"></script>
	<script src="<?= base_url('assets/admin/js/core/bootstrap.min.js')?>"></script>
	<script src="<?= base_url('assets/admin/js/plugins/perfect-scrollbar.min.js')?>"></script>
	<script src="<?= base_url('assets/admin/js/plugins/smooth-scrollbar.min.js')?>"></script><?php  $this->load->view('frontend/include/footer') ?>
</body>

</html>
