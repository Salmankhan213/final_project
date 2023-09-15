<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>cv</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css");?>">
</head>
<style>
	body{
		background: rgb(236, 235, 233);
		margin-top: 0%;
	}
	.container{
		margin-top: 20px;
		background-color: white;
		width: 50%;
		/* display:flex ; */
		border-radius: 10px;
		position: relative;
		float:center;
	}
	form{
		width: 100%;
	}
	
	.btn{
		border-radius: 9px;
	}
</style>
<body>
	<div class="container">
		 
		<div class="row ">
			<div class="col-lg-12">
				<div class="panel-body">
				
					<form action="" method="POST"   enctype="multipart/form-data">
					<div class="col-md-12">
                  <h1 class="text-md-12 text-center">Basic Information</h1>
				  <div class="col-md-8">
                <?php echo validation_errors('<div class="alert alert-danger alert-dismissable offset-1">', ' <button type="button" class="close mx-2" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
            </div>
					<div class="form-group " >
						<label for="txt_username"> First Name* </label>
					<input class="form-control" name="first_name"placeholder="Enter First Name" type="text" required >	
					</div>
					<div class="form-group ">
						<label for="Lusername" class="form_label"> Last Name* </label>
					<input class="form-control" name="last_name"placeholder="Enter Last Name" type="text" required>
					</div>
					
					<div class="form-group">
						<label for="useremail">User Email* </label>
						<input class="form-control" name="email" placeholder="Enter Email  " type="emial"
						 autocomplete="on" required />
						 <?php echo validation_errors('this Email already exist!')?>
					</div>
					<div class="form-group">
						<label for="password"> password* </label>
						<input class="form-control" name="password" type="password" required />
						
					
					<div class="form-group">
					<label for="">Department*</label>
<select class="form-select" name="department">
    <option><---your Department ---> </option>
    <?php foreach ($department as $dept) { ?>
        <option value="<?= $dept['dep_id']; ?>" class="text-uppercase"><?= $dept['department_name']; ?></option>
    <?php } ?>
</select>

						
					</div>
			<div class="form-group">
				<label for="my-select">Role*</label>
				<br>
						<select class="form-select" name="faculty_role" aria-label="Default select example" required>
						<option value=""> Your Role </option>
							<option  value="faculty">Faculty </option>
							<option value="Head Of Department">Head Of Department</option>
						</select>
			</div>
			<br>
				<input type="submit" name="submit" class="btn btn-danger form-control text-uppercase text-center" value="Submit " >

			<br>
</form>
		</div>
	</div>
	</div>
	</div>
	</head>
</body>

</html>
