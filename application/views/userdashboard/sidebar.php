<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dishboard</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/user/style.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" ></script>
</head>
<style>

    .logo{
        margin-left: 20px;
        font-size: 20px;
       text-decoration: solid;
      color: crimson;
 margin: 20px 30px  30px 30px;
  text-align: center;
  /* text-transform: uppercase; */

    }
	.delete{ text-decoration: none;
		color: aliceblue;
		font-size: 20px;
	}
	a .fa-xmark{
		color: aliceblue;
		font-size: 40px;
		margin-left: 20px;
	}
	@media screen {
		.sidebar{
			width: 200px;	
		}
	}
</style>
<body>
    <div class="sidebar">
 <div class="logo">
 <span  ><b> User Interface</b></span>
 </div>
        <div class="menu"> 
            <div class="item"><a href="#"><i class="fas fa-desktop"></i>Dashboard</a></div>
			<div class="item"><a href="#"><i class="fas fa-home"></i>Home</a></div>
            <div class="item">
                <a class="Sub-btn"><i class="fas fa-list"></i>Profile <i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
            	<a class="Sub-btn"><i class="fas fa-list"></i>Update Profile <i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="#" class="Sub-item">Update Personal Details</a>
                    <a href="#" class="Sub-item">Update Education</a>
                    <a href="#" class="Sub-item">Update Experiance</a>
					<a href="#" class="Sub-item">Update Skills</a>
                </div>
                    <a href="#" class="Sub-item">Publication</a>
                    <a href="#" class="Sub-item">Application Form</a>
                </div>
            </div>
            <div class="item"><a href="#"><i class="fas fa-user"></i>Jobs</a></div>
     <div class="delete"> <a href="<?php echo base_url('login/logout')?>" ><i class="fa-sharp fa-solid fa-xmark"></i>logout</a></li>
	  <!-- <li><a href="login.php"> Logout</a> --></div>
        </div>
    </div>
	
    <script type="text/javascript">
        $(document).ready(function(){
            $('.Sub-btn').click(function(){
                $(this).next('.sub-menu').slideToggle();
            });
        });
    </script>

</body>
</html>
