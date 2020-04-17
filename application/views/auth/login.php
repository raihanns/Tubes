    <form action="<?= base_url('auth'); ?>" method="post">
        <h2>Login</h2>
        <?php if (isset($_SESSION['error_message'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?= $_SESSION['error_message'] ?>
            </div>
        <?php } ?>
        <?= $this->session->flashdata('message'); ?>
        <div class="form-group">
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?= set_value('username'); ?>" required>
            <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
            <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
        </div>
        <button type="submit" class="btn btn-primary button1">Login</button>
        <p>Don't have an account? <a href="<?= site_url('auth/register') ?>">Register here</a></p>
    </form>