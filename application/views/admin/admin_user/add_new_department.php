<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin System </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/admin/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
       
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Add New Department</p>
      
        <form action="" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="New Department" name="department" required />
            
          </div>
          <div class="form-group has-feedback">
            <select name="cat_of_dep" id="cat_of_dep" class="form-control">
				<option value=""><--- department Category---></option>
				<option value="art"> Art</option>
				<option value="science">Science</option>
			</select>
            
          </div>
          <div class="row">
            <div class="col-xs-8">    
                               
            </div><!-- /.col -->
            <div class="col-xs-12 ">
              <input type="submit" class="btn btn-primary form-control px-2" value="Add" />
            </div><!-- /.col -->
          </div>
        </form>

        
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <script src="<?php echo base_url(); ?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
