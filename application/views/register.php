<!DOCTYPE html>
<html>
    <head>
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>"/>
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Register</title>
	</head>
	
	<body>
		<form action="<?= site_url('register/register') ?>" method="post" enctype="multipart/form-data">
			<h2>REGISTER</h2>
			<?php if(isset($_SESSION['error'])) { ?>
			<div class="alert alert-danger" role="alert">
				<?= $_SESSION['error'] ?>
			</div>
            <?php } ?>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-sm-6">
                        <label for="inputNamaDepan">Nama Depan</label>
                        <input type="text" class="form-control" name="nama_depan" required>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputNamaBelakang">Nama Belakang</label>
                        <input type="text" class="form-control" name="nama_belakang" required>
                    </div>
                </div>
            </div>
			<div class="form-group">
                <label for="inputUsername">Username</label>
				<input type="text" class="form-control" name="username"  required>
			</div>
			<div class="form-group">
                <label for="inputEmail">Email</label>
				<input type="text" class="form-control" name="email"  required>
			</div>
			<div class="form-group">
                <label for="inputPassword">Password</label>
				<input type="password" class="form-control" name="password" required>
			</div>
			<div class="form-group">
                <label for="inputRePassword">Re-Enter Password</label>
				<input type="password" class="form-control" name="re-password" required>
			</div>
			<button type="submit" class="btn btn-primary button1">Submit</button>
		</form>
		<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
	</body>
</html>