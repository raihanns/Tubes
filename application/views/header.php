<!DOCTYPE html>
<html>
<head>
	<!-- <title></title> -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>"/>
	<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>
   <nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo base_url(); ?>">HealtHub</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">				
				<li><a href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a></li>
				<li><a href="#">Tentang Kami</a></li> 
				<li><a href="#">Kontak</a></li> 
				<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Informasi
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Penyakit</a></li>
						<li><a href="#">Obat-obat</a></li>
						<li><a href="#">Rumah Sakit</a></li> 
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo base_url('register/index'); ?>"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
				<li class="active"><a href="<?= site_url('login/index') ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>


</body>
</html>