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
		color: red;
	}
	
</style>
<body>
	<div class="container">
		
		
		<div class="row">
			<div class="col-md-12 col-md">
				<div class="panel-body">
				
					<form action="" method="POST"  >
 
            
					<h1 class="h1">Your Details </h1>
					<div class="form-group">
					<input type="hidden" name="f_id" value="<?php  echo $user['id'];?>">
						<label for="txt_username"> First Name* </label>
					<input class="form-control" name="first_name" value="<?php echo $user['first_name'];?>" type="text"  >	
					</div>
					<div class="form-group " >
						<label for="Lusername" class="form_label"> Last Name* </label>
					<input class="form-control" name="last_name" value="<?php echo $user['last_name'];?>"  type="text">
					</div>
					<div class="form-group" >
						<label for="useremail">User Email* </label>
						<input class="form-control" name="email" value="<?php echo $user['email'];?>" type="emial"
						 autocomplete="on" />
							
					</div>
					<div class="form-group" >
						<label for="password"> password* </label>
						<input class="form-control" name="password" value="<?php echo $user['password'];?>" type="password" />
						
					</div>
					<div class="form-group">
        <label for="department_id">Department</label>
        <select class="form-control" id="department_id" name="department_id">
            <option value="">Select Department</option>
            <?php foreach ($departments as $department) { ?>
                <option value="<?php echo $department['dep_id']; ?>" <?php if ($department['dep_id'] == $user['department_id']) echo 'selected'; ?>><?php echo $department['department_name']; ?></option>
            <?php } ?>
        </select>
    </div>
			


<div class="form-group" >
	<label for="role">Your Role*</label>
	<select class="form-select" name="faculty_role" <?php echo $user[0]['faculty_role'];?> aria-label="Default select example">
    <option value="">Your Role</option>
    <option value="Faculty" <?php if(!empty($user) && $user['faculty_role'] == 'Faculty') echo 'selected'; ?>>Faculty</option>
    <option value="head of department" <?php if(!empty($user) && $user['faculty_role'] == 'head of department') echo 'selected'; ?>>Head of Department</option>
</select>


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
