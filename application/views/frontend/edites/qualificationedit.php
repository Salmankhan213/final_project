
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>cv</title>
	<link rel="stylesheet" href="<?php echo base_url("bootstrap-icons");?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css");?>">
</head>
<style>
		body{
margin: 0px;
background-color: rgb(238, 241, 241);
	
	}
	.container{
		width: 40%;
            /* padding: 20px; */
            position: relative;
			border-radius: 17px;

            left: 20%;
         
            transform: translate(-50%,30%);	
            /* display: flex; */
            flex-direction: column;
            align-content: center;
            /* margin-top:-429px ; */
            background-color: white;
            box-shadow: 1px 1px 30px -20px rgba(85, 84, 84, 0.856);
	}
	hr{
        height: 9px;
            background-color: #e9e9f1;
            
        }
	
	.heading{
		padding-left: 100px;
	}
	
	form{
		width: 500px;
		height:auto;
	}
	.btn{
		
		border-radius: 10px;
		background-color: brown;
	}@media screen and (max-width:805px) {
         .container{
                width: 300px;
            }
			form{
				width:200px;
			}
            
        }   
</style>
<body>
	<div class="container">
		<div class="row ">
			<div class="col-md-6 ">
				<div class="panel-body">
				
				
					<form action="" method="post" >
						<h1 class="text-md heading"> Qualification</h1>
						<hr>
					
					<div class="form-group">
						<input type="hidden" name="q_id" value="<?= $user[0]['id']; ?>" />
					    <label for="level_of_education">level_of_education*</label>
						<select class="form-select" name="level_of_education"  value="<?php echo $user[0]['level_of_education'];?>"  >
							<option  value="Secondary School Certificate/ Matriculation/ 0-level" <?php if($user[0]['level_of_education'] == 'Secondary School Certificate/ Matriculation/ 0-level') echo 'selected'; ?>>Secondary School Certificate/ Matriculation/ 0-level</option>
							<option value="Higher Secondary School Certificate/ Intermediate/ A-level" <?php if($user[0]['level_of_education'] == 'Higher Secondary School Certificate/ Intermediate/ A-level') echo 'selected'; ?>>Higher Secondary School Certificate/ Intermediate/ A-level</option>
							<option value="ACCA" <?php if($user[0]['level_of_education'] == 'ACCA') echo 'selected'; ?>>ACCA</option>
							<option value="Bachelor (14 Years)Degree" <?php if($user[0]['level_of_education'] == 'Bachelor (14 Years)Degree') echo 'selected'; ?>>Bachelor (14 Years)Degree</option>
							<option value="Bachelor (15 Years)Degree"<?php if($user[0]['level_of_education'] == 'Bachelor (15 Years)Degree') echo 'selected'; ?>>Bachelor (15 Years)Degree</option>
							<option value="Bachelor (16 Years)Degree"<?php if($user[0]['level_of_education'] == 'Bachelor (16 Years)Degree') echo 'selected'; ?>>Bachelor (16 Years)Degree</option>
							<option value="Master (16 Years)Degree"<?php if($user[0]['level_of_education'] == 'Master (16 Years)Degree') echo 'selected'; ?>>Master (16 Years)Degree</option>
							<option value="Master(17 Years)Degree"<?php if($user[0]['level_of_education'] == 'Master(17 Years)Degree') echo 'selected'; ?>>Master(17 Years)Degree</option>
							<option value="Master/Ms (18 Years)Degree"<?php if($user[0]['level_of_education'] == 'Master/Ms (18 Years)Degree') echo 'selected'; ?>>Master/Ms (18 Years)Degree</option>
							<option value="M-Phil/(18 Years)Degree"<?php if($user[0]['level_of_education'] == 'M-Phil/(18 Years)Degree') echo 'selected'; ?>>M-Phil/(18 Years)Degree</option>
							<option value="Doctorate Degree"<?php if($user[0]['level_of_education'] == 'Doctorate Degree') echo 'selected'; ?>>Doctorate Degree</option>
							<option value="MS leading to PhD"<?php if($user[0]['level_of_education'] == 'MS leading to PhD') echo 'selected'; ?>>MS leading to PhD</option>
							<option value="Post Doctorate"<?php if($user[0]['level_of_education'] == 'Post Doctorate') echo 'selected'; ?>>Post Doctorate</option>
						</select>
					</div>
					<div class="form-group">
							<label for="Address">Education Address </label>
							<textarea rows="5" class="form-control" name="address" ><?php echo $user[0]['address'];?></textarea>
						</div>
						<div class="form-group">
							<label for="from"> From* </label>
							<!-- <input class="form-control" name="fromdate" type="text" /> -->
							<input type="text" name="fromdate" value="<?php echo $user[0]['from_date'];?>" placeholder="YYYY" class="form-control" pattern="[0-9]{4}">
						</div>
						<div class="form-group">
							<label for="todate"> To* </label>
							<input class="form-control" name="todate"  value="<?php echo $user[0]['to_date'];?>"type="text"   placeholder="YYYY" class="form-control"  pattern="[0-9]{4}">
						</div>
					
						<div class="form-group">
							<input type="submit" class=" btn text-light  btn-outline-danger form-control my-3" name="submit" value="Update Qualification">
					</div>
								</form>
					
				</div>
			</div>
		</div>


		</head>

		<body>

	</div>
</body>

</html>
