<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bacha Khan University Charsadda</title>
    <link rel="icon" href="./Asset/bkuc.png">
    <!-- ================= Favicon ================== -->
    <!-- Styles -->
	<link href="<?= base_url()?>assets2/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url()?>assets2/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url()?>assets2/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url()?>assets2/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url()?>assets2/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <link href="<?= base_url()?>assets2/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url()?>assets2/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url()?>assets2/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url()?>assets2/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url()?>assets2/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url()?>assets2/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url()?>assets2/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="<?= base_url()?>assets2/css/theme.css" rel="stylesheet" media="all">
    <link href="<?=  base_url()?>assets/css1/style.css" rel="stylesheet">
   
    <style>
        
    </style>
</head>

<body>


    <div class="header">
 <?php if($experience) {?>       
	<div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 ">
                    <div class="my-md-5 offset-lg-2">
                        <div>
							<table>
								<tbody>
									<tr>
									<th>Name <small>*</small></th>
							<td><h5 class="py-2"><?= $experience[0]['title_fa']?> <?= $experience[0]['first_name']?> <?= $experience[0]['last_name']?></h5></td>
                        	</tr>
							<tr>
							<th>Designition <small>*</small></th>
						<td><h5 class="py-2"><?= $experience[0]['designation']?> </h5></td>
							
							</tr>
								</tbody>
							</table>
				</div>
                    </div>
                   
                </div>
				<div class="col-lg-3">
                    <div class=" my-lg-4">
                        
					<img src="<?= base_url('images/'.$experience[0]['profile_picture']) ?>" alt="" class="img-thumbnail" style="width:10rem; height:10rem;">
                    </div>
                   
                </div>
            </div>
        </div>
    </div> <?php } else { ?> <?php  }?>
<?php $s_no=1; if($publication) { ?>
    <div class="content-wrap vh-100">
        <div class="main">
            <div class="container-fluid">
<div class="row">
<div class="main-containor overflow-hidden m-0 ms-3 ps-3 pl-4 ">
    <div class="vertical"></div>
<div class="containt w-100">
     <i class="fa fa-list"></i>
<div class="basic">
    
    <h2>Research Publication</h2>
    <hr>
    <div class="basic-content">
        <div class="row ">
            <div class="col-12 align-items-center table-responsive">
    <table class="table m-0 table-sm table-bordered ms-3 " id='basic-content-table'>
        
		<thead>
            <th>S.No:</th>
			<th>Title</th>
            <th>Journal Name</th>
			<th>Page(s)</th>
			<th>Issue</th>
			<th>Year</th>
            <th>ISSN</th>
             <th>Impact Factor</th>            
            <th>HEC Category</th>            
 </thead>
		<tr>
			 
			<?php  foreach ($publication as  $publication) {?>
				<tr>
				<th><?php echo $s_no;?></th>
				<td class="bg-secondery "><a href="<?php echo $publication['link'] ?>" target="_blank" class="text-red"><?php echo word_limiter($publication['title'],5) ?></a></td>
		<td><?php echo $publication['journal'] ?></td>
		<td><?php echo $publication['page_nos'] ?></td>
		<td><?php echo $publication['issue'] ?></td>
		<td><?php echo $publication['year'] ?></td>
		<td><?php echo $publication['issn'] ?></td>
		<td><?php echo $publication['impact_factor'] ?></td>
		<td><?php echo $publication['hec_category'] ?></td>
		<?php $s_no++; ?></tr>
	   <?php } ?>
	
 
</table>


    </table></div></div>
   
</div>
</div><?php } else {?>  <?php }?>
<?php if($experience) { ?>
<div class="acdmic">
    <i class="fa fa-graduation-cap"></i>
    <h2 class="my-3">Experience</h2>
    <hr>
    <div class="acadmic-content">
        <div class="row ">
            <div class="col-12 align-items-center table-responsive">
    <table class="table m-0 table-sm table-bordered ms-3">
	<th>S.No:</th>
            <th>Designation</th>
            <th>organization</th>
            <th>From</th>
            <th>To</th></tr>
          </thead>
          <tbody>
		  <?php 	$serialNumber = 1;?>
		  
			<?php foreach($experience as $exp){?>
			<tr >
		  <th ><?php echo $serialNumber; ?></th>
		  <th ><?php echo $exp['title'] ?></th>
		  <th ><?php echo $exp['organization'] ?></th>
		  <th ><?php echo $exp['from'] ?></th>
		  <th ><?php echo $exp['to'] ?></th>
</tr>
<?php $serialNumber++;	 } } else {?>
<?php } ?>
    </table> 
		
<?php if($skills) { ?>
    <table class="table m-0 table-sm table-bordered ms-3">
		<h2 class="my-3">Skills</h2>
	<thead>
            <tr>
			<th>S.No</th>
            <th>Title</th>
            <th class="text-center">Description</th>
            <th class="text-end">Level of Skill</th>
			</tr>
        </thead>
		<tbody>
			<?php $s_no=1;?>
			<?php foreach ($skills as $skills) {?>
			<tr>
				<td><?= $s_no; ?></td>
				<td><?php echo $skills['title'] ?></td>
				<td class="text-center"><?php echo $skills['description'] ?></td>
				<td class="text-end"><?php echo $skills['level_of_skill'] ?></td>
				
			</tr>	<?php } ?>
		</tbody>
    </table></div></div>
</div>
</div>

<?php } else {?>
	<?php } ?>


</div>
</div>
</div>
</div>

    </section>
    
</div>
</div>
    <!-- <script src="./bootstrap/js/bootstrap.min.js"></script> -->

</div>
</div>
</div>


    <!-- fontAwsome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"></script>
    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- sidebar -->
    <!-- <script src="assets/js/lib/bootstrap.min.js"></script> -->
    <script src="assets/js/scripts.js"></script>
    <!-- bootstrap -->
</body>

</html>
