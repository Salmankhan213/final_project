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
background-color: brown;
	
	}
	.container{
		width: 80%;
		top: 300px;
		
	}
	form{
		width: 20px;
		margin-top: 150px;border-radius: 20px;
		height: 800px;
		background: white;
	}
	.btn{
		width: 300px;
		border-radius: 10px;
		background-color: brown;
	}
</style>
<body>
	<div class="container">
		<div class="row offset-3">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel-body">
					<form action="" method="post" style="width: 600px;height:auto;">
				<h1 class="text-md offset-3"> Your Skills</h1>
				
				<div class="form-group offset-2" style="width: 400px;">
							
							
				<input type="hidden" name="s_id" value="<?= $user[0]['s_id']; ?>" />
						</div>
						<div class="form-group offset-2" style="width: 400px;">
							<label for="title">title</label>
							
							<input class="form-control" name="title" type="text"  value="<?php echo $user[0]['title'] ?>"/>
						</div>
						<div class="form-group offset-2" style="width: 400px;">
							<label for="description">description </label>
							<textarea class="form-control" name="description" type="text" ><?php echo $user[0]['description']?> </textarea>
						</div> 
						<div class="form-group offset-2 my-1" style="width: 400px;">
						<select class="form-select" name="level_of_skills" selected  value="<?php echo $user[0]['state'];?>" aria-label="Default select example">
						<option value="" class="text-center"><----level_of_skills----></option>
							<option   value="Beginner"<?php if($user[0]['level_of_skill'] == 'Beginner') echo 'selected'; ?>>Beginner</option>
							<option  value="Intermediate"<?php if($user[0]['level_of_skill']=='Intermediate') echo 'selected';?>>Intermediate</option>
							<option  value="<?php if ($user[0]['level_of_skill']=='Expert') echo 'selected';?>">Expert</option>
							
						</select></div>   
						<input type="submit" class=" btn text-light btn-outline-secondary btn-lg offset-3 my-2" name="submit" value="Next">
					</form>
					
				</div>
			</div>
		</div>


		</head>

		<body>

	</div>
</body>

</html>
