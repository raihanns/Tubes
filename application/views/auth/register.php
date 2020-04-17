<form action="<?= site_url('auth/register') ?>" method="post">
    <h2>REGISTER</h2>
    <!-- <?php if (isset($_SESSION['error'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?= $_SESSION['error'] ?>
        </div>
    <?php } ?> -->

    <div class="form-group">
        <div class="form-row">
            <div class="col-sm-6">
                <label for="inputNamaDepan">Nama Depan</label>
                <input type="text" class="form-control" name="nama_depan" value="<?= set_value('nama_depan') ?>" required>
            </div>
            <div class="col-sm-6">
                <label for="inputNamaBelakang">Nama Belakang</label>
                <input type="text" class="form-control" name="nama_belakang" value="<?= set_value('nama_belakang') ?>" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="inputUsername">Username</label>
        <input type="text" class="form-control" name="username" value="<?= set_value('username') ?>" required>
        <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
    </div>
    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="text" class="form-control" name="email" value="<?= set_value('email') ?>" required>
        <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" name="password" required>
        <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
    </div>
    <div class="form-group">
        <label for="inputRePassword">Re-Enter Password</label>
        <input type="password" class="form-control" name="repassword" required>
    </div>
    <button type="submit" class="btn btn-primary button1">Submit</button>
    <p>Sudah memiliki akun? <a href="<?= base_url('auth') ?>">Login!</a></p>
</form>