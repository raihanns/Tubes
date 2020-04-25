<main id="pagenya" role="main" class="col-10" style="left:10%;">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 style="padding-top:80px;" class="h2"><?= $title; ?></h1>
    </div>




    <div class="row">
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
        <?php endif; ?>

        <div class="col-lg">
            <?= $this->session->flashdata('message'); ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newHospitalModal">Add New Hospital</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Slot</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($listHospital as $lh) :  ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $lh['nama']; ?></td>
                            <td><?= $lh['alamat']; ?></td>
                            <td><?= $lh['slot']; ?></td>
                            <td>
                                <a href="" class="badge badge-success" data-toggle="modal" data-target="#editHospitalModal">Edit</a>
                                <a href="<?= base_url('admin/deleteHospital/') . $lh['id']; ?>" class="badge badge-danger" onclick="return confirm('Apakah anda yakin menghapus data ini?');">Delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>



    <!-- Modal Tambah -->
    <div class="modal" id="newHospitalModal" tabindex="-1" role="dialog" aria-labelledby="newHospitalModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newHospitalModalLabel">Add New Hospital</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/listhospital') ?>" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Hospital">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="slot" name="slot" placeholder="Slot">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal" id="editHospitalModal" tabindex="-1" role="dialog" aria-labelledby="editHospitalModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editHospitalModalLabel">Edit Hospital</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url(); ?>Admin/editHospital/<?= $lh['id'] ?>" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                          <input type="text" class="form-control" id="id" name="id" value="<?= $lh['id']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $lh['nama']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $lh['alamat']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="slot" name="slot" value="<?= $lh['slot']; ?>">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>





</main>
