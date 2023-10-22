<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
            <?= $title ?>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $data_siswa['nis']; ?>">
                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input type="text" name="nis" class="form-control" id="nis" value="<?= $data_siswa['nis']; ?>">
                        <small class="form-text text-danger"><?= form_error('nis'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="<?= $data_siswa['nama_lengkap']; ?>">
                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select class="form-control" id="kelas" name="kelas">
                            <?php foreach($kelas as $kls) :?>
                                <?php if($kls == $data_siswa['kelas']) :?>
                                    <option value="<?= $kls; ?>" selected><?= $kls; ?></option>
                                <?php else :?>
                                    <option value="<?= $kls; ?>"><?= $kls; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $data_siswa['alamat']; ?>">
                        <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="jenkel">Jenis Kelamin</label>
                        <select class="form-control" id="jenkel" name="jenkel">
                            <?php foreach($jenkel as $jkl) :?>
                                <?php if($jkl == $data_siswa['jenkel']) :?>
                                    <option value="<?= $jkl; ?>" selected><?= $jkl; ?></option>
                                <?php else :?>
                                    <option value="<?= $jkl; ?>"><?= $jkl; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pwlogin">Password Login</label>
                        <input type="text" name="pwlogin" class="form-control" id="pwlogin" value="<?= $data_siswa['pw_login']; ?>">
                        <small class="form-text text-danger"><?= form_error('pwlogin'); ?></small>
                    </div>
                    <button type="submit" name="update" class="btn btn-primary float-right">
                        Update Data
                    </button>
                </form>
            </div>
        </div>
            
        </div>
    </div>

</div>