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
						
						<select class="form-select" selected name="skillfaculty" aria-lable="default">
						<?php foreach ($faculty->result() as $faculty) :?>
							 <option value="<?= $faculty->id ?>" selected > <?= $faculty->first_name;?>
                              <?= $faculty->last_name;?>
							</option>	
							<?php endforeach?>
                        </select>
						</div>
						<div class="form-group offset-2" style="width: 400px;">
							<label for="title">title</label>
							<input class="form-control" name="title" type="text"  placeholder="Enter Title"/>
						</div>
						<div class="form-group offset-2" style="width: 400px;">
							<label for="description">description </label>
							<textarea class="form-control" name="description" type="text" > </textarea>
						</div>
						<div class="form-group offset-2 my-1">
						<select class="form-select" name="level_of_skill" aria-label="Default select example" required style="width: 400px;">
						<option value="" class="text-center"><----- level_of_skills  -----> </option>
							<option  value="Beginner">Beginner</option>
							<option value="Intermediate">Intermediate</option>
							<option value="Expert">Expert</option>
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
