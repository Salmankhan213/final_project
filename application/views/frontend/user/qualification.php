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
	.containor{
		width: 40%;
            padding: 20px;
            position: relative;
			border-radius: 17px;

            left: 50%;
            top: 30%;
            transform: translate(-50%,30%);	
            display: flex;
            flex-direction: column;
            align-content: center;
            margin-top:-13rem ;
            background-color: white;
            box-shadow: 1px 1px 30px -20px rgba(85, 84, 84, 0.856);
	}
	hr{
        height: 9px;
            background-color: #e9e9f1;
            
        }
	form{
		width: 100%;
	
		
	}
	.heading{
		padding-left: 100px;
	}
	
	.btn{
		
		border-radius: 10px;
		background-color: brown;
	}@media screen and (max-width:805px) {
         .containor{
                width: 300px;
            }
            
        }   
</style>
<body>
	<div class="containor">
	<?php 	$this->load->helper('form');
        $error = $this->session->flashdata('compare_dates');
        if($error)
        {
            ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $error; ?>                    
            </div>
        <?php }?>
		<div class="row ">
			<div class="col-md-6 ">
				<div class="panel-body">
				
				
					<form action="" method="POST" style="width: 500px;height:auto;">
						<h1 class="text-md heading"> Qualification</h1>
						<hr>
						<div class="form-group">
						<label for="name"></label>
							<select class="form-select"   name="foreign_key"   aria-label="defult">
							<?php foreach($faculty->result() as $faculty ) : ?>
								<option  value="<?=  $faculty->id  ?> "><?=  $faculty->first_name; ?>
								<?=  $faculty->last_name; ?></option>
								
							<?php endforeach ;?>
							</select>
						</div>
						<div class="form-group my-1">
					<label for="level_of_education">Level of Education*</label>
						<select class="form-select" name="level_of_education"  >
						<option><---level_of_education ---> </option>
							<option value="Secondary School Certificate/ Matriculation/ 0-level">Secondary School Certificate/ Matriculation/ 0-level</option>
							<option value="Higher Secondary School Certificate/ Intermediate/ A-level">Higher Secondary School Certificate/ Intermediate/ A-level</option>
							<option value="ACCA">ACCA</option>
							<option value="Bachelor (14 Years)Degree">Bachelor (14 Years)Degree</option>
							<option value="Bachelor (15 Years)Degree">Bachelor (15 Years)Degree</option>
							<option value="Bachelor (16 Years)Degree">Bachelor (16 Years)Degree</option>
							<option value="Master (16 Years)Degree">Master (16 Years)Degree</option>
							<option value="Master(17 Years)Degree">Master (17 Years)Degree</option>
							<option value="Master/Ms (18 Years)Degree">Master/Ms (18 Years)Degree</option>
							<option value="M-Phil/(18 Years)Degree">M.Phil/(18 Years)Degree</option>
							<option value="Doctorate Degree">Doctorate Degree</option>
							<option value="MS leading to PhD">MS leading to PhD</option>
							<option value="Post Doctorate">Post Doctorate</option>
						</select>
					</div>
						<div class="form-group my-1">
							<label for="Address">University/Institution*</label>
							<textarea rows="5" class="form-control" name="address" required></textarea>
						</div>
						<div class="form-group">
							<label for="from"> From* </label>
							<!-- <input class="form-control" name="fromdate" type="text" /> -->
							<input type="text" name="fromdate"  placeholder="YYYY" class="form-control" pattern="[0-9]{4}">
						</div>
						<div class="form-group">
							<label for="todate"> To* </label>
							<input class="form-control" name="todate" type="text"   placeholder="YYYY" class="form-control"  pattern="[0-9]{4}">
						</div><div class="form-group">
							<input type="submit" class=" btn text-light  btn-outline-danger form-control my-3" name="submit" value="Add Qualification">
					</div>
				</form>
			</div>
			</div>
		</div>
	</div>
</body>

</html>
