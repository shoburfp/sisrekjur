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
        <div class="row mt-3">
            <h4 class="mx-auto">Kuesioner Minat Bakat Untuk Siswa Kelas XII SMA Angkasa</h4>
        </div>
        <div class="row mt-3">

            <a href="<?= base_url('ControllerKuesioner/index_ipa'); ?>" type="button" class="btn btn-primary mx-auto">
                Jurusan IPA
            </a>
        </div>
        <div class="row mt-3">

            <a href="<?= base_url('ControllerKuesioner/index_ips'); ?>" type="button" class="btn btn-primary mx-auto">
                Jurusan IPS
            </a>
        </div>
    </div>
</body>

</html>