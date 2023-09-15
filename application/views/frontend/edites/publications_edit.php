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
	.container{
		width: 40%;
		border-radius: 20px;
            padding: 20px;
            position: relative;
 
         margin-top:-300px
            transform: translate(-50%,30%);
            display: flex;
            flex-direction: column;
            align-content: center;
            margin-top:30px ;
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
	<div class="container">
		<div class="row ">
			<div class="col-md-12 ">
				<div class="panel-body">
					<form action="" method="post" >
					</div>
					 <input type="hidden" name="p_id" value="<?= $user[0]['p_id'];?>">
					 <div class="form-group " >
							<label for="title">Title <small>Link</small>*</label>
							<textarea class="form-control" name="title"  type="text"   required><?php echo $user[0]['title'];?> </textarea>
						</div>
						<div class="form-group " >
							<label for="title">Link*</label>
							<textarea class="form-control" name="link"  type="text"   required><?php echo $user[0]['link'];?> </textarea>
						</div>
						<div class="form-group " >
							<label for="journal">Journal*</label>
							<textarea class="form-control" name="journal"  type="text"   required><?php echo $user[0]['journal'];?> </textarea>
						</div>
						<div class="form-group " >
							<label for="issn"> ISSN </label>
							<input class="form-control" name="issn" type="number" value="<?= $user[0]['issn'];?>" required />
						</div>
						<div class="form-group " >
							<label for="issue"> Issue </label>
							<input class="form-control" name="issue" type="number" value="<?= $user[0]['issue'];?>" required />
						</div>
						<div class="form-group ">
							<label for="year"> Year* </label>
							<input class="form-control" name="year" type="text"value="<?= $user[0]['year'];?>"  pattern="[0-9]{4}" />
						</div>
						<!-- pages_no start -->
						<div class="form-group ">
							<label for="pages"> Pages </label>
							<input class="form-control" name="page_nos" value="<?= $user[0]['page_nos'];?>" type="number" />
						</div>
						<!-- pages_no end -->

						<div class="form-group ">
							<label for="impact_factor"> Impact_factor* </label>
							<input class="form-control" name="impact_factor"value="<?= $user[0]['impact_factor'];?>" type="decimals" />
						</div>
						<div class="form-group ">
							<label for="hec_category"> 	Hec_category* </label>
							<input class="form-control" name="hec_category" value="<?= $user[0]['hec_category'];?>"type="text" required />
						</div>
<input type="submit" class=" btn text-light btn-outline-secondary btn-lg  my-2 form-control"  name="submit" value="Update">
					</form>
					
				</div>
			</div>
		</div>


		</head>

		<body>

	</div>
</body>

</html>
