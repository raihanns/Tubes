<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('user'); ?>">
                            <span data-feather="home"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">
                            <span data-feather="shield"></span>
                            Rumah Sakit
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('user/members'); ?>">
                            <span data-feather="users"></span>
                            Members
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">
                            <span data-feather="bar-chart-2"></span>
                            Reports
                        </a>
                    </li>
                </ul>
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>KATEGORI</span>
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">
                            <span data-feather="file"></span>
                            Penyakit
                        </a>
                    </li>
                </ul>
                <ul></ul>
                <ul></ul>
                <ul></ul>
                <ul><a class="nav-link" href="<?= base_url('auth/logout'); ?>"><span data-feather="log-out"></span>Logout</a></ul>

            </div>
        </nav>