<?php 
if (!($this->session->has_userdata('logged') && $this->session->userdata('logged') == true)) {
    $this->session->set_flashdata('failed_msg', 'Login terlebih dahulu untuk melanjutkan.');
    redirect(base_url());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Laundry</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/loader.css" rel="stylesheet">

    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
            <div class="sidebar-heading text-center border-bottom pt-3 pb-3 poppins-font">
                <img src="<?= base_url(); ?>assets/img/logo.png" alt="" class="brand-logo"> Clean Laundry
            </div>
            <div class="list-group list-group-flush">
                <a href="<?= site_url(); ?>/dasbor" class="list-group-item list-group-item-action <?php if($page_name == "dasbor"){echo 'active disabled';} ?>">
                    <i class="fa fa-tachometer-alt side-nav-icon" aria-hidden="true"></i>Dasbor
                </a>
                <a href="<?= site_url(); ?>/paket_laundry" class="list-group-item list-group-item-action <?php if($page_name == "paket_laundry"){echo 'active disabled';} ?>">
                    <i class="fa fa-box side-nav-icon" aria-hidden="true"></i>Paket Laundry
                </a>
                <button class="list-group-item list-group-item-action <?php if($page_name[0] == "data_pelanggan"){echo 'active';} ?>" id="customer-collapse-btn" type="button" data-toggle="collapse" data-target="#customer-collapse" aria-expanded="false" aria-controls="customer-collapse">
                    <i class="fa fa-user-cog side-nav-icon" aria-hidden="true"></i>Data Pelanggan<i class="fa fa-chevron-down float-right mt-1 <?php if($page_name[0] == "data_pelanggan"){echo 'collapse-active';} ?>" aria-hidden="true" id="customer-collapse-logo"></i>
                </button>
                <div class="collapse" id="customer-collapse">
                    <div class="card card-body rounded-0 p-0">
                        <div class="card-text">
                            <a href="<?= site_url(); ?>/data_member" class="list-group-item list-group-item-action border-0 pt-2 pb-2 <?php if($page_name[1] == "data_member"){echo 'active disabled';} ?>">
                                <ul class="m-0"><li>Member</li></ul>
                            </a>
                            <a href="<?= site_url(); ?>/data_non_member" class="list-group-item list-group-item-action border-0 pt-2 pb-2 <?php if($page_name[1] == "data_non_member"){echo 'active disabled';} ?>">
                                <ul class="m-0"><li>Non-Member</li></ul>
                            </a>
                        </div>
                    </div>
                </div>
                <button class="list-group-item list-group-item-action <?php if($page_name[0] == "data_transaksi"){echo 'active';} ?>" id="transaction-collapse-btn" type="button" data-toggle="collapse" data-target="#transaction-collapse" aria-expanded="false" aria-controls="transaction-collapse">
                    <i class="fa fa-money-bill side-nav-icon" aria-hidden="true"></i>Data Transaksi<i class="fa fa-chevron-down float-right mt-1 <?php if($page_name[0] == "data_transaksi"){echo 'collapse-active';} ?>" aria-hidden="true" id="transaction-collapse-logo"></i>
                </button>
                <div class="collapse" id="transaction-collapse">
                    <div class="card card-body rounded-0 p-0">
                        <div class="card-text">
                            <a href="<?= site_url(); ?>/transaksi_member" class="list-group-item list-group-item-action border-0 pt-2 pb-2 <?php if($page_name[1] == "transaksi_member"){echo 'active disabled';} ?>">
                                <ul class="m-0"><li>Member</li></ul>
                            </a>
                            <a href="<?= site_url(); ?>/transaksi_non_member" class="list-group-item list-group-item-action border-0 pt-2 pb-2 <?php if($page_name[1] == "transaksi_non_member"){echo 'active disabled';} ?>">
                                <ul class="m-0"><li>Non-Member</li></ul>
                            </a>
                        </div>
                    </div>
                </div>
                <?php if($this->session->userdata('status') == 'admin'): ?>
                <a href="<?= site_url(); ?>/data_pengguna" class="list-group-item list-group-item-action <?php if($page_name == "data_pengguna"){echo 'active disabled';} ?>">
                    <i class="fa fa-user side-nav-icon" aria-hidden="true"></i>Data Pengguna
                </a>
                <a href="<?= site_url(); ?>/cabang_toko" class="list-group-item list-group-item-action <?php if($page_name == "cabang_toko"){echo 'active disabled';} ?>">
                    <i class="fa fa-store side-nav-icon" aria-hidden="true"></i>Cabang Toko
                </a>
                <?php endif; ?>
                <a href="<?= site_url(); ?>/laporan" class="list-group-item list-group-item-action <?php if($page_name == "laporan"){echo 'active disabled';} ?>">
                    <i class="fa fa-file side-nav-icon" aria-hidden="true"></i>Laporan
                </a>
            </div>
        </div>

        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg border-bottom shadow-sm">
                <button class="btn" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></button>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                            <button class="btn nav-link dropdown-toggle text-dark" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?= base_url(); ?>assets/img/myphoto.jpg" alt="" class="img-fluid rounded-circle user-photo">
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <span class="dropdown-item disabled text-center text-capitalize"><?= $this->session->userdata('nama_lengkap'); ?></span>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= site_url(); ?>/pengaturan">
                                    <i class="fa fa-cog dropdown-logo" aria-hidden="true"></i>Pengaturan
                                </a>
                                <a class="dropdown-item" href="<?= site_url(); ?>/logout">
                                    <i class="fas fa-sign-out-alt dropdown-logo" aria-hidden="true"></i>Keluar
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid poppins-font pb-5">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="content-loader-wrapper">
                                <div class="loadingio-spinner-pulse-9sejq2cy4il">
                                    <div class="ldio-b9hv0ciw3a">
                                        <div></div><div></div><div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>