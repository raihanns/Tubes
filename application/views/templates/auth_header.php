<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>
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
					<li><a href="<?php echo base_url('hospital/index') ?>">Hospitals</a></li>
					<li><a href="<?php echo base_url('about/index') ?>">About Us</a></li>
				</ul>
				<ul class="nav navbar-nav ml-auto">
					<li><a id="contact" href="<?php echo base_url('contact/index') ?>"><button class="get-happier" id="bcontact" type="button">Contact Us</button></a></li>
					<li class="active"><a id="underline" href="<?php echo base_url('auth') ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
