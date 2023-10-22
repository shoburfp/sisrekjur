<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style-navbar.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style-font.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style_dashboard.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/sb-admin-2.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <!-- toastr alert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />
    <title><?php echo $title; ?></title>

    <!-- <style>
      tr:nth-child(even) {background-color: #c2c2c2;}
    </style> -->

</head>

<body>
    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-11 col-xl-2">
                    <h1 class="mb-0 site-logo"><a href="<?= base_url('dashboard/load_dashboard'); ?>" style="color: #0078AA;">SISREKJUR</a></h1>
                </div>

                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li><a href="<?= base_url('dashboard/load_dashboard'); ?>"><span>Home</span></a></li>
                            <li><a href="<?= base_url('siswa/index'); ?>"><span>Data Siswa</span></a></li>
                            <li class="has-children">
                                <a href="#"><span>Nilai Siswa</span></a>
                                <ul class="dropdown arrow-top">
                                    <li><a href="<?= base_url('nilaisiswa/index'); ?>">Nilai Siswa IPA</a></li>
                                    <li><a href="<?= base_url('ControllerNilaiIps/index'); ?>">Nilai Siswa IPS</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#"><span>Rekomendasi</span></a>
                                <ul class="dropdown arrow-top">
                                    <li><a href="<?= base_url('controllerjuripa/index'); ?>">Jurusan IPA</a></li>
                                    <li><a href="<?= base_url('controllerjurips/index'); ?>">Jurusan IPS</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#"><span>Hasil</span></a>
                                <ul class="dropdown arrow-top">
                                    <li><a href="<?= base_url('controllerhasilipa/index'); ?>">Data IPA</a></li>
                                    <li><a href="<?= base_url('controllerhasilips/index'); ?>">Data IPS</a></li>
                                </ul>
                            </li>
                            <li class="has-children active">
                                <a href="#"><span>Logout</span></a>
                                <ul class="dropdown arrow-top">
                                    <li style="text-align: center; margin-bottom: 10px; margin-top: 5px; color:#0078AA;">Hello, <?php echo $this->session->userdata("nama"); ?></li>
                                    <li class="btn btn-info" style="text-align: center; color: white;"><a href="<?= base_url('controllerpanel/index'); ?>">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>


                <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-gray"><span class="icon-menu h3"></span></a></div>

            </div>

        </div>
        </div>

    </header>