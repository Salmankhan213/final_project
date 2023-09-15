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
background-color: rgb(247, 239, 239);
	
	}
	.containor{
		width: 40%;
		border-radius: 20px;
            padding: 20px;
            position: relative;
            left: 50%;
            /* top: 30%; */
            transform: translate(-50%,30%);
            display: flex;
            flex-direction: column;
            align-content: center;
            margin-top:-11rem ;
            background-color: white;
            box-shadow: 1px 1px 30px -20px rgba(85, 84, 84, 0.856);
		
	}
	.h2{
	text-align: center;
	font-size: 50px;
	}
	
	.btn{
		border-radius: 10px;
		background-color: brown;
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
			<div class="col-md-12 ">
				<div class="panel-body">
					<form action=" " method="post" >
					<h3 class="h2">Your Experience</h3>
					<hr>
					
					<div class="form-group">
						<select  name='foreginkey' class="form-select" aria-label="Default">
							<?php foreach($faculty->result() as $faculty) ?>
							<option value="<?= $faculty->id; ?>"><?= $faculty->first_name; ?>
							<?= $faculty->last_name; ?></option>
							<!--  -->
						</select></div>
						
						<div class="form-group">
							<label for="title">Title* </label>
							<textarea class="form-control" name="title"  type="text"  > </textarea>
						</div>
						<div class="form-group">
							<label for="organization">Organization* </label>
							<textarea class="form-control" name="organization"  type="text"  > </textarea>
						</div>
						<div class="form-group">
							<label for="fromdate"> From* </label>
							<input class="form-control" name="fromdate" type="text" placeholder="YYYY" pattern="[0-9]{4}" />
						
						</div>

						<div class="form-group ">
							<label for="todate"> To* </label>
							<input class="form-control" name="todate" type="text" placeholder="YYYY" pattern="[0-9]{4}"  />
						
						</div>
						<div class="form-group">
							<label for="currently_working">currently working* </label>
							<textarea class="form-control" name="currently_working"  type="text"  > </textarea>
						</div>
						<div class="form-group">
							<label for="Address">working Address* </label>
							<textarea class="form-control" name="Address"  type="text"  > </textarea>
						</div>
						<div class="form-group">
								<input type="submit" class=" btn text-light btn-outline-danger btn-lg form-control  my-2" 
								name="submit" value="Submit Experience">
						</div>
					</form>
					
				</div>
			</div>
		</div>
</div>
</body>

</html>
