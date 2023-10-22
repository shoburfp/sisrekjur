<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
            <?= $title ?>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input type="text" name="nis" class="form-control" id="nis">
                        <small class="form-text text-danger"><?= form_error('nis'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select class="form-control" id="kelas" name="kelas">
                            <option value="">--Pilih Kelas--</option>
                            <option value="IPA 1">IPA 1</option>
                            <option value="IPA 2">IPA 2</option>
                            <option value="IPS 1">IPS 1</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat">
                        <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="jenkel">Jenis Kelamin</label>
                        <select class="form-control" id="jenkel" name="jenkel">
                            <option value="">--Pilih Jenis Kelamin--</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pwlogin">Password Login</label>
                        <input type="text" name="pwlogin" class="form-control" id="pwlogin">
                        <small class="form-text text-danger"><?= form_error('pwlogin'); ?></small>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">
                        Tambah Data
                    </button>
                </form>
            </div>
        </div>
            
        </div>
    </div>

</div>