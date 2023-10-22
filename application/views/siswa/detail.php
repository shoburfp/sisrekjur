<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <?= $title; ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $data_siswa['nama_lengkap']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $data_siswa['nis']; ?></h6>
                    <p class="card-text"><?= $data_siswa['kelas']; ?></p>
                    <a href="<?= base_url(); ?>siswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>