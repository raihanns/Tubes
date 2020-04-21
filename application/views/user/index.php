<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard User</h1>
    </div>
    <div class="col-lg-4 ">
        <div class="card">
            <img class="card-img-top" src="<?= base_url('assets/img/profile/') . $user['image'] ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $user['nama_depan'] . ' ' . $user['nama_belakang']; ?></h5>
                <p class="card-text"><?= $user['email'] ?></p>
                <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
            </div>
        </div>
    </div>
</main>