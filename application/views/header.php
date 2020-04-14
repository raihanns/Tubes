<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Part 12 : Membuat Navigation bar Bootstrap</title>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>"/>
	<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>
   <nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="https://www.malasngoding.com">Malas Ngoding</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">				
				<li class="active"><a href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a></li>
				<li><a href="#">Profil</a></li>
				<li><a href="#">Tentang Kami</a></li> 
				<li><a href="#">Kontak</a></li> 
				<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Tutorial
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">HTML</a></li>
						<li><a href="#">CSS</a></li>
						<li><a href="#">Bootstrap</a></li> 
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo base_url('register/index'); ?>"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>
</body>
</html>