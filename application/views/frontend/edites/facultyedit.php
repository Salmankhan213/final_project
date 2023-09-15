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
		background: rgb(248, 244, 244);
		margin-top:0%;
	}
	.container{
		width: 40%;
            padding: 20px;
            position: relative;
			border-radius: 17px;
            left: 20%;
            top: 10%;
			margin-top: -200px;
            transform: translate(-50%,30%);	
            display: flex;
            flex-direction: column;
            align-content: center;
            background-color: white;
            box-shadow: 1px 1px 30px -20px rgba(85, 84, 84, 0.856);
	}
	.h1{
		margin-left: 30%;
	}
	.btn
	{
		color: brown;
	}
	
</style>
<body>
	<div class="container">
		
		
		<div class="row">
		
			<div class="col-md-12 col-md">
				<div class="panel-body">
				
					<form action="<?= site_url('faculty/update')?>" method="POST"  enctype="multipart/form-data" >
 
            
					<h1 class="h1">Your Details </h1>
					<label for="">Title*</label>
					<?php echo $user[0]['title_fa'] ?>
				<select name="title" id="" class="form-control" selected value="<?php echo $user[0]['title_fa'] ?>" aria-label="Default select example">
					<option value="">Select Title!</option>
					<option value="Mr."<?php if($user[0]['title_fa'] == 'Mr.') echo 'selected'; ?> >Mr.</option>
					<option value="Dr."<?php if($user[0]['title_fa'] == 'Dr.') echo 'selected'; ?> >Dr.</option>
					<option value="Ms."<?php if($user[0]['title_fa'] == 'Ms.') echo 'selected'; ?> >Ms.</option>
				</select>  	
					<div class="form-group">
					<input type="hidden" name="f_id" value="<?php  echo $user[0]['id'];?>">
						<label for="txt_username"> First Name </label>
					<input class="form-control" name="first_name" value="<?php echo $user[0]['first_name'];?>" type="text"  >	
					</div>
					<div class="form-group " >
						<label for="Lusername" class="form_label"> Last Name </label>
					<input class="form-control" name="last_name" value="<?php echo $user[0]['last_name'];?>"  type="text">
					</div>
					<div class="form-group" >
						<label for="useremail">User Email </label>
						<input class="form-control" name="email" value="<?php echo $user[0]['email'];?>" type="emial"
						 autocomplete="on" />
							
					</div>
					<div class="form-group" >
						<label for="password"> password </label>
						<input class="form-control" name="password" value="<?php echo $user[0]['password'];?>" type="password" />
					</div>
					<div class="form-group" >
						<label for="password"> Profile </label>
						<input class="form-control" name="profile_picture" value="" type="file" />
					</div>
					<div class="form-group" >
						<label for="designation"> designation </label>
						<input class="form-control" name="designation" value="<?php echo $user[0]['designation'];?>" type="text" />
					</div>
					<div class="form-group " >
						<label for="country">  Country </label>
						<input class="form-control" name="country" value="<?php echo $user[0]['country'];?>" type="text"
						 />
						<br>
					</div>
					<div class="form-group" >
						<select class="form-select" name="Provinces" selected  value="<?php echo $user[0]['state'];?>" aria-label="Default select example">
						<option value="">Select Province </option>
							<option   value="Khyber Pakhtunkhwa"<?php if($user[0]['state'] == 'Khyber Pakhtunkhwa') echo 'selected'; ?>>Khyber Pakhtunkhwa </option>
							<option  value="Punjab"<?php if($user[0]['state']=='Punjab') echo 'selected';?>>Punjab</option>
							<option  value="Balochistan<?php if ($user[0]['state']=='Balochistan') echo 'selected';?>">Balochistan</option>
							<option  value="Sindh<?php  if($user[0]['state']=='Sindh') echo 'selected';?>">Sindh</option>
						</select></div>
			
				<div class="form-group" >

					<label for="city"> city </label>
					<input class="form-control" name="city" value="<?php echo $user[0]['city'];?>" type="text" />
				</div>
			
		

			
			<div class="form-group" >
  <label for="birthday">Birthday</label>
  <input type="date" id="birthday"  max="2010-12-31" min="1947-12-31" name="birthday" value="<?php echo $user[0]['date_birth'];?>"  class="my-2 form-control ">
</div>
<div class="form-group">
					<div class="form-group">
					<label for="department_id">Department</label>
<select class="form-control" id="department_id" name="department_id">
    <?php foreach ($departments as $department): ?>
        <option value="<?php echo $department['dep_id']; ?>" <?php if ($department['dep_id'] == $user[0]['department_id']) echo 'selected'; ?>>
            <?php echo $department['department_name']; ?>
        </option>
    <?php endforeach; ?>
</select>


    </div>
					</div>
			<div class="form-group" >
				<label for="Phone_Number"> Phone Number </label>
				<input class="form-control " value="<?php echo $user[0]['phone_no'];?>" name="phone_number" type="number" />
			</div>
			<br>
				<input type="submit" name="submit" class="btn btn-danger text-light  form-control" value="Update">

			<br>
</form>
		</div>
	</div>
	</div>
	</div>
	</head>
</body>

</html>
