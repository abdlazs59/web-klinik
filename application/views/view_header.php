<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Klinik Sehat Sejahtera</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Klinik Sehat Sejahtera</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarMaster" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Master Data
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarMaster">
                        <a class="dropdown-item" href="<?= base_url("users") ?>">Data User</a>
                        <a class="dropdown-item" href="<?= base_url("dokter") ?>">Data Dokter</a>
                        <a class="dropdown-item" href="<?= base_url("pasien") ?>">Data Pasien</a>
                        <a class="dropdown-item" href="<?= base_url("obat") ?>">Data Obat</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("kunjungan"); ?>">Kunjungan/Berobat</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLaporan" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Laporan
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarLaporan">
                        <a class="dropdown-item" href="<?= base_url("laporan/data_dokter") ?>">Data Dokter</a>
                        <a class="dropdown-item" href="<?= base_url("laporan/data_pasien") ?>">Data Pasien</a>
                        <a class="dropdown-item" href="<?= base_url("laporan/data_kunjungan") ?>">Data Kunjungan</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url("auth/logout"); ?>">Logout</a>
                </li>

            </ul>
        </div>
    </nav>