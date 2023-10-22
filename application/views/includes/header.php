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
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
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

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #EAF6F6;">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('dashboard/load_dashboard'); ?>">SISREKJUR</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="<?= base_url('dashboard/load_dashboard'); ?>">Home <span class="sr-only">(current)</span></a>
          <a class="nav-link" href="<?= base_url('siswa/index'); ?>">Data Siswa</a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
              Nilai Siswa
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="<?= base_url('nilaisiswa/index'); ?>">Jurusan IPA</a>
              <a class="dropdown-item" href="<?= base_url('ControllerNilaiIps/index'); ?>">Jurusan IPS</a>
            </div>
          </li>
          <a class="nav-link" href="#">Jurusan</a>
        </div>
      </div>

      <!-- Nav Item - User Information -->
      <div class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 medium">Welcome, <?php echo $this->session->userdata("nama"); ?></span>
          <img src="<?= base_url(); ?>assets/img/logo_angkasa.png" alt="" style="width: 40px; height: 40px; border-radius:50%;">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="<?= base_url('controllerpanel/index'); ?>">
            Logout
          </a>
        </div>
      </div>

    </div>
  </nav>