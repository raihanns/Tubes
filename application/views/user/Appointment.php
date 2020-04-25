<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="<?= base_url('assets/css/style.css?d='); echo time(); ?>" />
</head>

<body>
    <div id="registerbg" class="row">
        <div class="col-6"></div>
        <div class="col-6 " id="boxformlogin">
        <form id="formregister" action="<?= site_url('auth/register') ?>" method="post">
            <h2>Appointment</h2>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-sm-6">
                        <label for="inputHospital">Nama Depan</label>
                        <input type="text" class="form-control" name="nama_depan" value="<?= set_value('nama_depan') ?>" required>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputJam">Nama Belakang</label>
                        <input type="text" class="form-control" name="nama_belakang" value="<?= set_value('nama_belakang') ?>" required>
                    </div>
                </div>
            <button type="submit" class="btn btn-primary button1">Submit</button>
        </form>
        </div>
    </div>
	</body>
