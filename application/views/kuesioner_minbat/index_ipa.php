<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">

    <title><?= $title; ?></title>
</head>

<body>
    <div class="container">
        <div class="row mt-4">
            <h3 class="mx-auto"><?= $title; ?></h3>
        </div>

        <!-- Alert Sukses -->
        <div class="flashminbatsukses-data" data-flashdataminbatsukses="<?= $this->session->flashdata('flashminbatsukses'); ?>"></div>
        <?php if ($this->session->flashdata('flashminbatsukses')) : ?>
        <?php endif; ?>

        <!-- Alert Gagal -->
        <div class="flashrekjurgagal-data" data-flashdatarekjurgagal="<?= $this->session->flashdata('flashrekjurgagal') ?>"></div>
        <?php if ($this->session->flashdata('flashrekjurgagal')) : ?>
        <?php endif; ?>



        <div class="row mt-3">
            <div class="col-md-8 mx-auto">
                <form action="<?= base_url('ControllerKuesioner/proses'); ?>" method="post">
                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input list="data_nis" type="text" name="nis" class="form-control" id="nis" onchange="return autofill();">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="nama_lengkap">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select class="form-control" id="kelas" name="kelas" required>
                            <option value="" selected>-- Pilih Kelas --</option>
                            <?php foreach ($kelas as $kls) : ?>
                                <option value="<?= $kls; ?>"><?= $kls; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <select class="form-control" name="per1" required>
                        <option value="">--Pilih Jawaban Anda--</option>
                        <!-- R6 -->
                        <option value="Saya sangat menyukai matematika">Saya sangat menyukai matematika</option>
                        <!-- R11 -->
                        <option value="Saya suka melihat peta daripada petunjuk tertulis mengenai letak suatu tempat">Saya suka melihat peta daripada petunjuk tertulis mengenai letak suatu tempat</option>
                        <!-- R16 -->
                        <option value="Saya bergaul dengan baik">Saya bergaul dengan baik</option>
                    </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-8 mx-auto">
                <select class="form-control" name="per2" required>
                    <option value="">--Pilih Jawaban Anda--</option>
                    <!-- R7 -->
                    <option value="Saya menyukai permainan yang menggunakan logika">Saya menyukai permainan yang menggunakan logika</option>
                    <!-- R12 -->
                    <option value="Saya sering melamun">Saya sering melamun</option>
                    <!-- R17 -->
                    <option value="Saya senang dengan aktivitas sosial">Saya senang dengan aktivitas sosial</option>
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-8 mx-auto">
                <select class="form-control" name="per3" required>
                    <option value="">--Pilih Jawaban Anda--</option>
                    <!-- R8 -->
                    <option value="Saya senang jika berhasil menyelesaikan soal matematika">Saya senang jika berhasil menyelesaikan soal matematika</option>
                    <!-- R13 -->
                    <option value="Saya hobi fotografi">Saya hobi fotografi</option>
                    <!-- R18 -->
                    <option value="Saya memiliki banyak teman dekat">Saya memiliki banyak teman dekat</option>
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-8 mx-auto">
                <select class="form-control" name="per4" required>
                    <option value="">--Pilih Jawaban Anda--</option>
                    <!-- R9 -->
                    <option value="Saya mengurutkan sesuatu agar mudah diingat">Saya mengurutkan sesuatu agar mudah diingat</option>
                    <!-- R14 -->
                    <option value="Saya senang menggambar dan menciptakan desain">Saya senang menggambar dan menciptakan desain</option>
                    <!-- R19 -->
                    <option value="Saya senang mengajar orang lain">Saya senang mengajar orang lain</option>
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-8 mx-auto">
                <select class="form-control" name="per5" required>
                    <option value="">--Pilih Jawaban Anda--</option>
                    <!-- R10 -->
                    <option value="Penasaran Dengan Cara Kerja Suatu Benda">Penasaran Dengan Cara Kerja Suatu Benda</option>
                    <!-- R15 -->
                    <option value="Senang Mengingat Melalui Diagram">Senang Mengingat Melalui Diagram</option>
                    <!-- R20 -->
                    <option value="Senang Bekerja Dalam Sebuah Tim">Senang Bekerja Dalam Sebuah Tim</option>
                </select>
            </div>
        </div>

        <div class="row mt-2 mx-auto">
            <div class="col-md-6 mx-auto">
                <button type="submit" class="btn btn-primary float-right" style="margin-left: 5px;" name="btnProses" id="btnProses">
                    Proses
                </button>
                <a class="btn btn-secondary float-right" href="<?= base_url('ControllerKuesioner/index_ipa'); ?>">Reset</a>
            </div>
        </div>
        </form>
</body>

</html>