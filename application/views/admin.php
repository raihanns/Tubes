<!DOCTYPE html>
<html>
    <head>
		<title>Admin</title>
	</head>

	<body>
		<h1>HALOOO <?php echo $_SESSION['username']; ?></h1>
		<p><a href="<?= site_url('admin/logout') ?>">Logout</a></p>
	</body>
</html>