<main id="pagenya" role="main" class="col-10" style="left:10%;">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 style="padding-top:80px;" class="h2"><?= $title; ?></h1>
    </div>
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('admin/news/'); ?>" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Isi Berita</label>
            <textarea class="form-control" id="isi" name="isi" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file" id="foto" name="foto">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</main>