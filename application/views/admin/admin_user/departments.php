
		<!-- End Navbar -->
		<!-- basic information -->
		<div class="container py-4">
			<div class="row">
				<div class="col-12">
					<a href="<?php echo base_url('faculty/admin_create');?>" class=" btn   btn-lg bg-gradient-primary">Add Information</a> <br>
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
												Password</th>
											<th
												class="text-center text-uppercase text-dark font-weight-bolder opacity-7">
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

								<?php if ($usersearch) { foreach ($usersearch as  $value) {?>
									 <tbody>
									   <th><?php echo $value['first_name']?></th>
									   <th><?php echo $value['last_name']?></th>
									   <th><?php echo $value['email']?></th>
									   <th><?php echo $value['password']?></th>
									   <th><?php echo $value['country']?></th>
									   <th><?php echo $value['state']?></th>
									   <th><?php echo $value['city']?></th>
									   <th><?php echo $value['date_birth']?></th>
									   <th><?php echo $value['department']?></th>
									   <th><?php echo $value['faculty_role']?></th>
									   <th><?php echo $value['phone_no']?></th>
									   <td>	<a href="<?php echo base_url('faculty/admin_faculty_update/').$value['id'];?>" class="btn btn-primary">edit</a>
					</td>
						<td><a href="<?php echo base_url('faculty/admin_deletefaculty/').$value['id']; ?>" class="btn btn-danger">Delete</a></td>
											
										</tr>
									 </tbody>
								<?php }  } else { ?>
							  <th>Not Found Result</th> <?php } ?>
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
