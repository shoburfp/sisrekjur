<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Panel Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>tampilan-login.css">
    <!-- toastr alert -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>
    <!-- <div>
        <?php $this->load->view('alert'); ?>
    </div> -->
    <div class="flashdanger-data" data-flashdanger="<?= $this->session->flashdata('flashdanger'); ?>"></div>
    <?php if ($this->session->flashdata('flashdanger')) : ?>
        <!-- <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Gagal!</strong> NIS Sudah Tersedia <?= $this->session->flashdata('flashdanger'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div> -->
    <?php endif; ?>

    <div class="login-form">
        <form action="<?php echo base_url('controllerpanel/aksi_login'); ?>" method="post">
            <div class="avatar">
                <li style="font-size:63px;color:white;margin-left:10px" class="fa fa-user text-center"></li>
            </div>
            <h2 class="text-center">Admin Login</h2>

            <?php if ($this->session->flashdata('flashgagal')) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Gagal Login!</strong> Username atau Password <?= $this->session->flashdata('flashgagal'); ?>.
                </div>
            <?php endif; ?>

            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block" value="login">Sign in</button>
            </div>
        </form>
    </div>
</body>

</html>