
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
	
    <style>
     
        body{
			margin: 0px;
            background-attachment: fixed;
			background-color: rgb(156, 149, 149);
		
        }
        .containor-fluid{
			border-radius: 30px;
            width: 35%;
            padding: 20px;
            position: relative;
            left: 50%;
            top: 50%;
            transform: translate(-50%,30%);
            display: flex;
            flex-direction: column;
          
            background-color: rgb(250, 229, 229);
           

        }
		.logo{
			display: inline;
			text-align: center;
		}
		input{
			border-radius: 9px;
			width: auto;
		}
        form{
            width: 100%;
        }
				.btn{
					border-radius: 20px;
					width: 200px;
				}
    
        </style>	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css");?>">
</head>
<body>

    <div class="containor-fluid">
	<div class="head">
		
				<h5 class="logo offset-2"><b> Your Languages</b> </h5>
      </div>
    <hr>
	<form action="" method="post">
		<input type="hidden" name="l_id" value="<?= $data[0]['l_id']?>" >
		<?php foreach ($data as $value): ?>
	<div class="form-check">
		<input type="checkbox" name="languages" value="english" id="english" <?php if (in_array('english', explode(',', $value['description']))) { echo "checked"; } ?>>
		<label for="english">English</label>
		
		<br>
		<input type="checkbox" name="languages" value="poshto" id="poshto" <?php if (in_array('poshto', explode(',', $value['description']))) { echo "checked"; } ?>>
		<label for="poshto">Poshto</label>
		
		<br>
		<input type="checkbox" name="languages" value="urdu" id="urdu" <?php if (in_array('urdu', explode(',', $value['description']))) { echo "checked"; } ?>>
		<label for="urdu">Urdu</label>
	</div>
<?php endforeach; ?>

	

        <input type="submit" value="submit" name="submit" class="btn btn-outline-danger offset-3 text-light btn-dark btn-lg"> 
        </form>
      
    </div>
</body>
</html>
