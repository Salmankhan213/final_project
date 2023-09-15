<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/admin/img/apple-icon.png')?>">
	<link rel="icon" type="image/png" href="<?= base_url('assets/admin/img/favicon.png')?>">
	<title>
		admins
	</title>
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<!-- Nucleo Icons -->
	<link href="<?= base_url('assets/admin/css/nucleo-icons.css" rel="stylesheet')?>" />
	<link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
	<!-- Font Awesome Icons -->
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<link href="<?= base_url('assets/admin/css/nucleo-svg.css')?>" rel="stylesheet" />
	<!-- CSS Files -->
	<link id="pagestyle" href="<?= base_url('assets/admin/css/soft-ui-dashboard.css?v=1.0.7')?>" rel="stylesheet" />
<body>
	<div class="container mt-5">
		<table class="table table-light">
			<thead class="thead-light">
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Password</th>
					<th>Role</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($admins as $admin) :?>
				<tr>
					<td><?php echo $admin->name?></td>
					<td><?php echo $admin->email?></td>
					<td><?php echo $admin->password?></td>
					<td><?php echo $admin->role?></td>
					<td><a href="<?php echo base_url('admin/admins_update/').$admin->id; ?>" class="btn btn-primary">Update</a></td>
				<td>	<a href="<?php echo base_url('admin/admin_delete/').$admin->id;?>" class="btn btn-danger">Delete</a></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
			
		</table>
	</div>
	
</body>
</html>
