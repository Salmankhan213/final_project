<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/admin/img/apple-icon.png')?>">
	<link rel="icon" type="image/png" href="<?= base_url('assets/admin/img/favicon.png')?>">
	<title>
		Userdashboard
	</title>
	<!--     Fonts and icons     -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
	
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<!-- Nucleo Icons -->
	<link href="<?= base_url('assets/admin/css/nucleo-icons.css" rel="stylesheet')?>" />
	<link href="<?= base_url('assets/admin/css/nucleo-svg.css')?>" rel="stylesheet" />
	<!-- Font Awesome Icons -->
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<link href="<?= base_url('assets/admin/css/nucleo-svg.css')?>" rel="stylesheet" />
	<!-- CSS Files -->
	<link id="pagestyle" href="<?= base_url('assets/admin/css/soft-ui-dashboard.css?v=1.0.7')?>" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
	<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-light "
		id="sidenav-main">
		<div class="sidenav-header">
			<i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
				aria-hidden="true" id="iconSidenav"></i>
			<a class="navbar-brand m-0" href=" https://demos.creative-tim.com/soft-ui-dashboard/pages/dashboard.html "
				target="_blank">
				<span class="ms-1 font-weight-bold text-capitalize">user Dashboard</span>
			</a>
		</div>
		
		<hr class="horizontal dark mt-0">
		<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
			<ul class="navbar-nav bg-light">
				<li class="nav-item mt-0">
					<a class="nav-link  bg-light active" href="">
						<div
							class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1"
								xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<title>shop </title>
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF"
										fill-rule="nonzero">
										<g transform="translate(1716.000000, 291.000000)">
											<g transform="translate(0.000000, 148.000000)">
												<path class="color-background opacity-6"
													d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z">
												</path>
												<path class="color-background"
													d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
												</path>
											</g>
										</g>
									</g>
								</g>
							</svg>
						</div>
						<span class="nav-link-text ms-1 text-dark">Dashboard</span>
					</a>
				</li>
				<br>
				<li class="nav-item ">
					<a class="nav-link bg-light active " href="#publication">
						<div
							class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
							<svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1"
								xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<title>office</title>
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF"
										fill-rule="nonzero">
										<g transform="translate(1716.000000, 291.000000)">
											<g id="office" transform="translate(153.000000, 2.000000)">
												<path class="color-background opacity-6"
													d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z">
												</path>
												<path class="color-background"
													d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z">
												</path>
											</g>
										</g>
									</g>
								</g>
							</svg>
						</div>
					
						<span class="nav-link-text ms-1 text-dark">Tables</span>
					</a>

				</li>

               <li class="nav-item ">
					<a class="nav-link bg-light active bg-light	 my-4" href="<?php echo base_url('login/logout')?>">
						
						<i class="fa fa-sign-out" aria-hidden="true"></i><span class="nav-link-text ms-1 text-dark">Logout</span>
					</a>
				</li>
			</ul>
		</div>

	</aside>
	<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
		<!-- Navbar -->
		<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl bg-light" id="navbarBlur"
			navbar-scroll="true">
			<div class="container-fluid py-1 px-3">
				<nav aria-label="breadcrumb">
<?php if($data['profile_picture']){?>
				<img src="images/<?php echo $data['profile_picture']; ?>" alt="profile" class="rounded-circle " style="width:50px; height:50px;">
<?php } else {?>
	<img src="<?= base_url('images/images.png');?>" alt="profile" class="rounded-circle " style="width:50px; height:50px;">plz Enter Profile Picture <?php }?>
	</nav>
				<div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-0" id="navbar">
					<div class="ms-md-auto  ">
						<div class="input-group">
							<span class="input-group-text "><i class="fas fa-search"
									aria-hidden="true"></i></span>
							<input type="text" class="form-control" placeholder="Search ">
						</div>
					</div>
					
					<ul class="navbar-nav  justify-content-end">

						<li class="nav-item d-flex align-items-center">
							<a href="<?php echo base_url('login/logout')?>" class="nav-link text-body font-weight-bold px-0">
								<i class="fa fa-sign-out me-sm-1">
								</i>
							</a>
						</li>
					</ul>
					</li>
					</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- End Navbar -->
		<!-- basic information -->
		<div class="container py-4">
			<div class="row">
				<div class="col-12">
				
					<div class="card mb-4">
						<div class="card-header pb-0">
							<h6>Basic Information</h6>
						</div>

						<div class="card-body px-0 pt-0 ">
							<div class="table-responsive p-0">
								<table class="table align-items-center mb-0">
									<thead>
										<tr>
											<th
												class="text-uppercase text-dark  font-weight-bolder text-lg opacity-9">
												First Name</th>
											<th
												class="text-uppercase text-dark  font-weight-bolder opacity-7 ">
												Last Name</th>
											<th
												class="text-center text-uppercase text-dark font-weight-bolder opacity-7">
												Email</th>
												<th
											class="text-center text-uppercase text-dark  font-weight-bolder opacity-7">
											Designation</th>
											<th class="text-center text-uppercase text-dark font-weight-bolder opacity-7">
												Contry</th>
											<th
											
												class="text-center text-uppercase text-dark  font-weight-bolder opacity-7">
												State</th>
												
											<th
												class="text-center text-uppercase text-dark  font-weight-bolder opacity-7">
												City</th>
											<th
												class="text-center text-uppercase text-dark  font-weight-bolder opacity-7">
												Date Of Birth</th>
												<th
												class="text-center text-uppercase text-dark  font-weight-bolder opacity-7">
												Department</th>
												<th
												class="text-uppercase text-dark  font-weight-bolder text-lg opacity-7">
												Role</th>
									
											<th class="text-center text-uppercase text-dark  font-weight-bolder opacity-7">
												Phone No</th>
											<th class="text-dark  text-uppercase">Edit</th>
											<th class="text-dark text-uppercase">Delete</th>
										</tr>
									</thead>
									<?php if (isset($data)){?>
									<tbody>
										<tr>
											<td>
											<?php echo $data['first_name']?>
											</td>
											<td>
											<?php echo $data['last_name']?>
											</td>
											<td class=" text-center text-sm">
											<?php echo $data['email']?>
											</td>
											<!-- <td class="align-middle text-center">
												<span class="text-secondary text-xs font-weight-bold"><?php echo $data['password']?></span>
											</td> -->
											<td class="align-middle text-center">
											<?php echo $data['designation']?>
											</td>
											<td class="align-middle">
											<?php echo $data['country']?>
											</td>
											
											<td class=" text-center text-sm">
											<?php echo $data['state']?>
											</td>
											<td class=" text-center text-sm">
											<?php echo $data['city']?>
											</td>
											<td class=" text-center text-sm">
											<?php echo $data['date_birth']?>
											</td>
                                            <td class=" text-center text-sm">
											<?php echo $data['department_name']?>
											</td>
											<td class=" text-center text-sm">
											<?php echo $data['faculty_role']?>
											</td>
											<td class=" text-center text-sm">
											<?php echo $data['phone_no']?>
											</td>
											
											<td>	<a href="<?php echo base_url('faculty/update/').$data['id'];?>" class="btn btn-primary">edit</a>
					</td>
						<td><a href="<?php echo base_url('faculty/deletefaculty/').$data['id']; ?>" class="btn btn-danger">Delete</a></td>
											
										</tr>
									</tbody>
<?php } else {
							?>
							<td>Enter Your Prosonal Data</td> <?php } ?>
							
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- qualification -->
		<div class="container ">
			<div class="row">
				<div class="col-12">
					<a href="<?php echo base_url('qualification/index')  ?>" class=" btn   btn-lg bg-gradient-primary">Add qualification</a>
					<br>
					<div class="card mb-4">
						<div class="card-header pb-0">

							<h6>Your qualification </h6>
							<div class="card-body px-0 pt-0 ">

								<div class="table-responsive p-0">
									<table class="table align-items-center mb-0">
										<thead>
											<tr>
												
												<th
													class="text-center text-uppercase text-dark  font-weight-bolder ">
													Level of Eduction</th>
												<th
													class="text-center text-uppercase text-dark  font-weight-bolder ">
													Adress of your Eduction</th>
												<th
													class="text-center text-uppercase text-dark  font-weight-bolder ">
													From</th>
												<th
													class="text-center text-uppercase text-dark  font-weight-bolder ">
													To</th>
													<th class="text-dark text-uppercase">Edit</th>
												<th class="text-dark text-uppercase">Delete</th>
											</tr>
										</thead>
										<?php if ($get_qual) { 
							foreach($get_qual as $qual_row) {  ?>
										<tbody>
											<tr>
											
												<td class=" text-center text-sm">
												<?php echo $qual_row['level_of_education'];?>
												</td>
												<td class="align-middle text-center">
													<span class="text-secondary text-xs font-weight-bold"><?php echo $qual_row['address'];?></span>
												</td>
												<td class="align-middle">
												<?php echo $qual_row['from_date'];?>
												</td>
												<td class=" text-center text-sm">
												<?php echo $qual_row['to_date'];?>
												</td>
												<td>	<a href="<?php echo base_url('qualification/update/').$qual_row['q_id']?>" class="btn btn-primary">edit</a>
					</td>
						<td><a href="<?php echo base_url('qualification/deletequalification/').$qual_row['q_id']?>" class="btn btn-danger">Delete</a>
													
												</td>
											</tr>
											</tbody>
											<?php } } else { ?>
							<td>Your Qualification</td> <?php  } ?>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- skills -->
			<div class="container py-4">
				<div class="row">
					<div class="col-12">
						<a href="<?php echo base_url('skills/index')?>" class="btn   btn-lg bg-gradient-primary">Add skills</a> <br>
						<div class="card mb-4">
							<div class="card-header pb-0">
								<h6>your Skills </h6>
							</div>

							<div class="card-body px-0 pt-0 ">
								<div class="table-responsive p-0">
									<table class="table align-items-center mb-0">
										<thead>
											<tr>
												
												<th
													class="text-center text-uppercase text-dark  font-weight-bolder opacity-7">
													Title</th>
												<th
													class="text-center text-uppercase text-dark  font-weight-bolder opacity-7">
													Description</th>
													<th
													class="text-center text-uppercase text-dark  font-weight-bolder opacity-7">
													level of skills</th>
													<th class="text-dark text-uppercase">Edit</th>
												<th class="text-dark text-uppercase">Delete</th>
											</tr>
										</thead>
										<?php if ($user){
						foreach ($user as $value) {?>
										<tbody>
											<tr>
												
												<td class=" text-center text-sm">
												<?php echo $value['title']?>
												</td>
											
												<td class="align-middle  text-center">
												<?php echo $value['description'] ?>
												</td>
												<td class="align-middle  text-center">
												<?php echo $value['level_of_skill'] ?>
												</td>
												<td >

												<a href="<?php echo base_url('skills/update_skill/').$value['s_id']?>"   name="Update" class="btn btn-primary ">Edit </a>
						</td>
                             <td >  <a href="<?= base_url('skills/deleteskill/').$value['s_id']?>"class="btn btn-danger ">Delete</a>
                                              </td>
											</tr>
                                  </tbody>	
								  <?php } } else {?>
						<th>add skills</th><?php } ?>	
				             	</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Exprience  -->
			<div class="container-fluid py-4">
				<div class="row">
					<div class="col-12">
						<a href="<?php echo base_url('experience')?> " class="btn   btn-lg bg-gradient-primary">Add new Exprience</a> <br>
						<br>
						<div class="card mb-4">
							<div class="card-header pb-0">
								<h6>Your Exprience</h6>
							</div>

							<div class="card-body px-0 pt-0 ">
								<div class="table-responsive p-0">
									<table class="table align-items-center mb-0">
										<thead>
											<tr>
												
												<th
													class="text-center text-uppercase text-dark  font-weight-bolder">
													Title</th>
												<th
													class="text-center text-uppercase text-dark  font-weight-bolder">
													Organization</th>
												<th
													class="text-center text-uppercase text-dark  font-weight-bolder">
													From</th>
												<th
													class="text-center text-uppercase text-dark  font-weight-bolder">
													To</th>
												
												<th class="text-center text-uppercase text-dark  font-weight-bolder">
													currently working</th>
												<th
													class="text-center text-uppercase text-dark  font-weight-bolder">
													address</th>
												<th class="text-dark text-uppercase">Edit</th>
												<th class="text-dark text-uppercase">Delete</th>
											</tr>
										</thead>
										<?php if ($user_data) {
							foreach($user_data as $value){?><tbody>
											<tr>
												
												<td class=" text-center text-sm">
													<?php echo $value['title'];?>
												</td>
												
												<td class="align-middle">
													<?php echo $value['organization'];?>
												</td>
												<td class=" text-center text-sm">
												<?php echo $value['from'];?>
												</td>
												<td class=" text-center text-sm">
												<?php echo $value['to'];?>
												</td>
												<td class=" text-center text-sm">
													<?php echo $value['currently_working_here'];?>
												</td>

												<td class=" text-center text-sm">
													<?php echo $value['address'];?>
												</td>
												<td>	
								<a href="<?php echo base_url('experience/update_exprience/').$value['e_id']?>" type="button"  name="Update" class="btn btn-primary">Edit</a>
							</td>
								<td>	
									<a href="<?= base_url ('experience/deleteexperience/').$value['e_id']?>" class="btn btn-danger">Delete</a>
							</td> 
											</tr>
											<?php
						}}
						else
						{ ?>
                    <td> Your Experience </td>
							<?php
						}
						?>
                                   </tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--publication  -->
	<section id="publication" class="publication">
	<div class="container-fluid py-4">
				<div class="row">
					<div class="col-12">
						<a href="<?php  echo base_url('Publications')?>" id="sa" class="btn   btn-lg bg-gradient-primary">Add publication</a> <br>
						<br>
						<div class="card mb-4">
							<div class="card-header pb-0">
								<h6>Your Publication </h6>
							</div>

							<div class="card-body px-0 pt-0 ">
								<div class="table-responsive p-0">
									<table class="table align-items-center mb-0">
										<thead>
											<tr>
											<th
													class="text-center text-uppercase text-secondary  font-weight-bolder">
													Title</th>
												<th
													class="text-center text-uppercase text-secondary  font-weight-bolder">
													Journal</th>
												<th
													class="text-center text-uppercase text-secondary  font-weight-bolder">
													Issn</th>
												<th
													class="text-center text-uppercase text-secondary font-weight-bolder">
													Year </th>
												
												<th class="text-center text-uppercase text-secondary font-weight-bolder">
												(Page)s </th>
												<th
													class="text-center text-uppercase text-secondary  font-weight-bolder">
													impact factor</th>
												<th
													class="text-center text-uppercase text-secondary  font-weight-bolder">
													hec category</th>
												
												
												<th class="text-secondary ">Edit</th>
												<th class=" text-secondary ">Delete </th>
											</tr>
										</thead>
										<?php if ($get_publication) {
							foreach ($get_publication as $value){?>
										<tbody>
											<tr>
											<td class=" text-center text-sm">
												<?php echo $value['title'];?>
												</td>
												<td class=" text-center text-sm">
												<?php echo $value['journal'];?>
												</td>
												
												<td class="align-middle text-center">
													<span class="text-secondary text-xs font-weight-bold"><?php echo $value['issn'];?></span>
												</td>
												<td class="align-middle">
												<?php echo $value['year'];?>
												</td>
												<td class=" text-center text-sm">
												<?php echo $value['page_nos'];?>
												</td>
												<td class=" text-center text-sm">
												<?php echo $value['impact_factor'];?>
												</td>
												<td class=" text-center text-sm">
												<?php echo $value['hec_category'];?>
												</td>
												<td>	<a type="submit" href="<?php echo base_url('Publications/publication_update/').$value['p_id']?>" name="submit" class="btn btn-primary ">Edit</a>
							</td>
								<td>	
									<a href="<?php echo base_url('Publications/deletepublication/').$value['p_id']?>" class="btn btn-danger"  >Delete</a>
							
							</td>
						</tr>
				</tbody>
			<?php
										}}
						else
						{ ?>
                    <td> Your publication </td>
							<?php
						}
						?>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
			<!-- languages -->
			<div class="container-fluid py-4">
				<div class="row">
					<div class="col-12">
						<a href="<?php echo base_url('languages')?>" class="btn   btn-lg bg-gradient-primary">Add languages</a> <br>
						
						<div class="card mb-4">
							<div class="card-header pb-0">
								<h6>Your languages </h6>
							</div>

							<div class="card-body px-0 pt-0 ">
								<div class="table-responsive p-0">
									<table class="table align-items-center mb-0">
										<thead>
											<tr>
												<th
													class="text-center text-uppercase text-dark  font-weight-bolder">
													description </th>
												
												<th class="text-secondary text-uppercase">Edit</th>
												<th class="text-secondary text-uppercase">Delete</th>
											</tr>
										</thead>
										<?php if($get_lag) {
						 foreach ($get_lag as $value)  { ?>
										<tbody>
											<tr>
												<td class="align-middle text-center">
													<span class="text-secondary text-xs font-weight-bold"><?php echo $value['description'];?></span>
												</td>
												<td>	<a href="<?php echo base_url('Languages/update_language/').$value['l_id']?>"  name="update" class="btn btn-primary">Edit</a>
							</td>
								<td>	<a href="<?php echo base_url('Languages/deletelanguage/').$value['l_id']?>"  name="Delete" class="btn btn-danger">Delete</a>
								</td> 
											</tr>
					</tbody>
					<?php }} else {  ?>
							<td>Your Laguages</td>
						     	<?php } ?>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--   Core JS Files   -->
			<script src="<?= base_url('assets/admin/js/core/popper.min.js')?>"></script>
			<script src="<?= base_url('assets/admin/js/core/bootstrap.min.js')?>"></script>
			<script src="<?= base_url('assets/admin/js/plugins/perfect-scrollbar.min.js')?>"></script>
			<script src="<?= base_url('assets/admin/js/plugins/smooth-scrollbar.min.js')?>"></script>
			<script>
				var win = navigator.platform.indexOf('Win') > -1;
				if (win && document.querySelector('#sidenav-scrollbar')) {
					var options = {
						damping: '0.5'
					}
					Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
				}

			</script>
			<!-- Github buttons -->
			<script async defer src="https://buttons.github.io/buttons.js"></script>
			<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
			<script src="<?= base_url('assets/admin/js/soft-ui-dashboard.min.js?v=1.0.7')?>"></script>
			<script type="text/javascript">
				$(document).ready(function(){
					$('.Sub-btn').click(function(){
						$(this).next('.sub-menu').slideToggle();
					});
				});
			</script>
</body>

</html>
