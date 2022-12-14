<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('assets\img\logo-otw.jpg') ?>" class="rounded-circle" width="50" height="50" alt="" srcset="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/tentangKami') ?>">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/fasilitas') ?>">Fasilitas</a>
                </li>
                <?php if ($this->session->userdata('tipe_user') == 'Pengunjung') : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("home/tiket"); ?>">Tiket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("home/transaksi"); ?>">Transaksi</a>
                    </li>
                <?php elseif ($this->session->userdata('tipe_user') == 'Admin') : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("admin"); ?>">Dashboard</a>
                    </li>
                <?php endif ?>
                <?php if ($this->session->userdata("login")) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("auth/logout"); ?>">Logout</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("auth"); ?>">Login</a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>