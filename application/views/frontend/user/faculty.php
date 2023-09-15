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
                           <h1 class="text-md-12 text-center">Basic Information</h1>
				
					<div class="form-group " >
						<label for="txt_username"> First Name* </label>
					<input class="form-control" rows="2" name="first_name"placeholder="Enter First Name" type="text" required >	
					</div>
					<div class="form-group ">
						<label for="Lusername" class="form_label"> Last Name* </label>
					<input class="form-control" name="last_name"placeholder="Enter Last Name" type="text" required>
					</div>
					<div class="form-group ">
						<label for="Profile" class="form_label"> Profile Picture* </label>
						<input type="file" name="profile_picture" id="profile_picture"  class="form-control">
					</div>
					<div class="form-group">
						<label for="useremail">User Email* </label>
						<input class="form-control" name="email" placeholder="Enter Address  " type="emial"
						 autocomplete="on" required />
					</div>
					<div class="form-group">
						<label for="password"> password* </label>
						<input class="form-control" name="password" type="password" required />
						
					</div>
					<div class="form-group " >
						<label for="country">  Country* </label>
						<input class="form-control" name="country" placeholder="Enter Country " type="text"
						required />
						<br>
					</div>
					<div class="form-group">
						<select class="form-select" name="Provinces" aria-label="Default select example" required>
						<option value="">Select Province </option>
							<option  value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa </option>
							<option value="Punjab">Punjab</option>
							<option value="Balochistan">Balochistan</option>
							<option value="Sindh">Sindh</option>
						</select></div>
			
				<div class="form-group">

					<label for="city"> City* </label>
					<input class="form-control" name="city" type="text" required/>
				</div>
			
		

			
			<div class="form-group">
  <label for="birthday">Birthday*</label>
  <input type="date" id="birthday" name="birthday"  class="my-2  form-control">

			</div>
			<div class="form-group">
					<label for="level_of_education">level_of_education*</label>
						<select class="form-select" name="level_of_education"  >
						<option><---You are Department ---> </option>
							<option  value="Metric">Metric(10 Grade) </option>
							<option value="FSC">Intermadiate(12 Grade)</option>
							<option value="Associate_Degree">bachelor (14 Grade)</option>
							<option value="BS">bachelor (16 Grade)</option>
							<option value="Master">Master(16 Grade)</option>
							<option value="Mphil">Master(18 Grade)</option>
							<option value="PHD">PHD</option>
							<option value="PostDoc">Post Doc</option>
						</select></div>
			<div class="form-group">
						<label for="designation"> Designation* </label>
						<input class="form-control" name="designation" placeholder="Enter Designation " type="text"
						 autocomplete="on" required />
						
					</div>
			<div class="form-group">
				<label for="Phone_Number" > Phone Number* </label>
				<input class="form-control" name="phone_number" type="text" required/>
			</div>
			<div class="form-group">
				<label for="my-select">Role*</label>
				<br>
						<select class="form-select" name="faculty_role" aria-label="Default select example" required>
						<option value=""> Your Role </option>
							<option  value="faculty">Faculty </option>
							<option value="chairman">Head of Department</option>
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
