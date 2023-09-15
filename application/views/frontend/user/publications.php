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
		margin-top: 20px;
		border-radius: 20px;
		height: 800px;
		background: white;
	}
	.btn{
		width: 300px;
		border-radius: 10px;
		background-color: brown;
	}
	h3{
		text-align: center;
	}
</style>
<body>
	<div class="container">
		<div class="row offset-3">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel-body">
					<form action="" method="post" style="width: 600px;height:auto;">
					
					<h3>Faculty publication</h3>
					
						<div class="form-group">
							
							<select name="foreignkey"  class="form-control form-select offset-2"  style="width: 400px;" required="required">
							<?php foreach($faculty->result() as $faculty) :?>	
							<option value="<?= $faculty->id; ?>">
						       <?= $faculty->first_name;?>
							   <?= $faculty->last_name;?>
                               <?php endforeach;?>
						</option> 
						
							</select>
							
						</div>
						<div class="form-group offset-2" style="width: 400px;">
							<label for="title">Title*</label>
							<textarea class="form-control" name="title"  type="text"  required> </textarea>
						</div>
						<div class="form-group offset-2" style="width: 400px;">
							<label for="title">Link*</label>
							<textarea class="form-control" name="link"  type="text"  required> </textarea>
						</div>
						<div class="form-group offset-2" style="width: 400px;">
							<label for="journal">Journal*</label>
							<textarea class="form-control" name="journal"  type="text"  required> </textarea>
						</div>
						<div class="form-group offset-2" style="width: 400px;">
							<label for="issn"> ISSN </label>
							<input class="form-control" name="issn" type="number" required />
						</div>
						<div class="form-group offset-2" style="width: 400px;">
							<label for="title">Issue*</label>
							<input class="form-control" name="issue"  type="number"  required> 
						</div>
						<div class="form-group offset-2" style="width: 400px;">
							<label for="year"> Year* </label>
							<input class="form-control" name="year" type="text" pattern="[0-9]{4}" />
						</div>
						<!-- pages_no start -->
						<div class="form-group offset-2" style="width: 400px;">
							<label for="pages"> Pages </label>
							<input class="form-control" name="page_nos" type="number" />
						</div>
						<!-- pages_no end -->

						<div class="form-group offset-2" style="width: 400px;">
							<label for="impact_factor"> Impact_factor* </label>
							<input class="form-control" name="impact_factor" type="decimals" />
						</div>
						<div class="form-group offset-2" style="width: 400px;">
							<label for="hec_category"> 	Hec_category* </label>
							<input class="form-control" name="hec_category" type="text" required />
						</div>
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
