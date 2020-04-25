<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no" />
	<meta name="description" content="">
	<title><?= $title ?></title>
	
	<link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>"/>
	<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/style.css?d='); echo time(); ?>" />

</head>
<body>
	<nav class="navbar navbar-expand fixed-top mb">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url(); ?>">HealtHub</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="dropdown">
					<a id="dropdownMenuButton" href="#">Disease Wiki
						<ul class="dropdown-menu">
							<li><a href="#">Virus</a></li>
							<li><a href="#">Bakteri</a></li>
						</ul>
					</li>
					<li><a href="<?php echo base_url('Hospital') ?>">Hospitals</a></li>
					<li><a href="<?php echo base_url('about/index') ?>">About Us</a></li>
				</ul>
				<ul class="nav navbar-nav ml-auto">
					<li><a id="contact" href="<?php echo base_url('contact/index') ?>"><button class="get-happier" id="bcontact" type="button">Contact Us</button></a></li>
					<li><a onclick="openNav()" style="padding-bottom:16px;"><span data-feather="menu"></span></a>
						<!-- <div class="dropdown-menu dropdown-menu-right">
							<a class="dropdown-item" ><img src="assets/images/avatar.png"> Nama User tolong sambungin</a>
							<div class="dropdown-divider"></div>
							<button class="dropdown-item" type="button" style="border-radius:0;" data-toggle="modal" data-target="#editprofil"><span data-feather="settings"></span> Edit Profil</button>
							<button class="dropdown-item" type="button" style="border-radius:0;"><span data-feather="log-out"></span><a href="<?php echo base_url('Main'); ?>" style="color:black;"> Logout</a></button>
						</div> -->
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>

<!-- script sidebar -->

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("pagenya").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("pagenya").style.marginLeft= "0";
}
</script>


<!-- modal edit profil -->

<div class="modal" id="editprofil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Edit Profil</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- isi form ini -->
        <form method="post" action="  ">
			<div class="col-12"><img src="assets/images/avatar.png"></div>
			<div class="form-group">
				<label for="formGroupExampleInput">Nama Depan</label>
				<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Depan" name="namadepan"  value="" required>
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput">Nama Belakang</label>
				<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Belakang" name="namabelakang"  value="" required>
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput2">Email</label>
				<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email" name="email" value="" required>
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput2">Password</label>
				<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Password" name="password" value="" required>
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text">Profile Picture</span>
				</div>
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="uploadImage" name="uploadImage" accept='image/*' required>
					<label class="custom-file-label text-left" for="uploadImage">Choose file</label>
				</div>
			</div>
        </div>
        <div class="modal-footer">
          	<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        	<input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- modal medical appointment -->

<div class="modal" id="medapp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Medical Appointment</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- isi form ini -->
        <form method="post" action="  ">
			<div class="col-12"><p id="brand" style="color:black; padding-top:10px;">HealtHub</p></div>
			<div class="form-group">
				<label for="formGroupExampleInput">Rumah Sakit</label>
				<select class="form-control" id="formGroupExampleInput2" name="rumahsakit" required>
					<option value="" selected></option>
					<?php foreach ($dataJ as $c ) {?>
						<option value=""></option>
					<?php } ?>
				</select>  
			</div>
			<div class="form-group">
				<label for="formGroupExampleInput">Jam</label>
				<select class="form-control" id="formGroupExampleInput2" name="jam" required>
					<option value="" selected></option>
					<?php foreach ($dataJ as $c ) {?>
						<option value=""></option>
					<?php } ?>
				</select>  
			</div>
        </div>
        <div class="modal-footer">
          	<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        	<input  type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
        </div>
        </form>
      </div>
    </div>
  </div>
</div>