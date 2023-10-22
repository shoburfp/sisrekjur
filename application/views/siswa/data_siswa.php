<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
        <!-- <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> Data siswa berhasil <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div> -->
    <?php endif; ?>
    <div class="flashdanger-data" data-flashdanger="<?= $this->session->flashdata('flashdanger') ?>"></div>
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


    <div class="row mt-3">
        <div class="col-md-6">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambahData">
                Tambah Data Siswa
            </button>
        </div>
    </div>

    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data siswa" aria-label="Recipient's username" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div> -->

    <div class="row mt-3">
        <div class="col-md-12">
            <h3>Data Siswa</h3>
            <!-- <?php //if(empty($data_siswa)) :
                    ?>
                <div class="alert alert-danger" role="alert">
                    Data siswa tidak ditemukan.
                </div>
            <?php //endif; 
            ?> -->

            <table id="myTable" class="cell-border table table-striped">
                <thead>
                    <tr class="table-info">
                        <th scope="col">No</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data_siswa as $siswa) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $siswa['nis']; ?></td>
                            <td><?= $siswa['nama_lengkap']; ?></td>
                            <td><?= $siswa['kelas']; ?></td>
                            <td align="center">
                                <a href="<?= base_url(''); ?>siswa/hapus/<?= $siswa['nis']; ?>" class="badge badge-danger tombol-hapus">Delete</a>
                                <a href="" class="badge badge-success" data-toggle="modal" data-target="#modalUpdateData<?= $siswa['nis']; ?>">Update</a>
                                <a href="" class="badge badge-primary" data-toggle="modal" data-target="#modalDetailData<?= $siswa['nis']; ?>">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<!-- Awal Modal -->
<!-- Modal Tambah Data-->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('siswa/tambah'); ?>" method="post">
                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input type="text" name="nis" class="form-control" id="nis" required>
                        <small class="form-text text-danger"><?= form_error('nis'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="nama" required>
                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select class="form-control" id="kelas" name="kelas" required>
                            <option value="" selected>Pilih</option>
                            <?php foreach ($kelas as $kls) : ?>
                                <option value="<?= $kls; ?>"><?= $kls; ?></option>
                            <?php endforeach; ?>
                            <!-- <option value="">--Pilih Kelas--</option>
                <option value="XII-MIA 1">XII-MIA 1</option>
                <option value="XII-MIA 2">XII-MIA 2</option>
                <option value="XII-IIS 1">XII-IIS 1</option> -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" required>
                        <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="jenkel">Jenis Kelamin</label>
                        <select class="form-control" id="jenkel" name="jenkel" required>
                            <option value="">--Pilih Jenis Kelamin--</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pwlogin">Password Login</label>
                        <input type="text" name="pwlogin" class="form-control" id="pwlogin" required>
                        <small class="form-text text-danger"><?= form_error('pwlogin'); ?></small>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal -->


<!-- Awal Modal -->
<!-- Modal Update Data-->
<?php
foreach ($data_siswa as $siswa) : ?>

    <div class="modal fade" id="modalUpdateData<?= $siswa['nis']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Update Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url(''); ?>siswa/update/<?= $siswa['nis']; ?>" method="post">
                        <input type="hidden" name="id" value="<?= $siswa['nis']; ?>">
                        <div class="form-group">
                            <label for="nis">NIS</label>
                            <input type="text" name="nis" class="form-control" id="nis" value="<?= $siswa['nis']; ?>" required>
                            <small class="form-text text-danger"><?= form_error('nis'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $siswa['nama_lengkap']; ?>" required>
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <select class="form-control" id="kelas" name="kelas">
                                <?php foreach ($kelas as $kls) : ?>
                                    <?php if ($kls == $siswa['kelas']) : ?>
                                        <option value="<?= $kls; ?>" selected><?= $kls; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $kls; ?>"><?= $kls; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $siswa['alamat']; ?>" required>
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenkel">Jenis Kelamin</label>
                            <select class="form-control" id="jenkel" name="jenkel">
                                <?php foreach ($jenkel as $jkl) : ?>
                                    <?php if ($jkl == $siswa['jenkel']) : ?>
                                        <option value="<?= $jkl; ?>" selected><?= $jkl; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $jkl; ?>"><?= $jkl; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pwlogin">Password Login</label>
                            <input type="text" name="pwlogin" class="form-control" id="pwlogin" value="<?= $siswa['pw_login']; ?>" required>
                            <small class="form-text text-danger"><?= form_error('pwlogin'); ?></small>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- End Modal -->

<!-- Awal Modal -->
<!-- Modal Detail Data-->
<?php
foreach ($data_siswa as $siswa) : ?>

    <div class="modal fade" id="modalDetailData<?= $siswa['nis']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <table border="0">
                        <tr>
                            <td>
                                <h5 class="card-title"><?= $siswa['nama_lengkap']; ?></h5>
                            </td>
                            <td valign="top">
                                <span class="badge badge-pill badge-success"><?= $siswa['nis']; ?></span>
                            </td>
                        </tr>
                    </table>


                    <table class="table table-sm" style="width:70%">
                        <tbody>
                            <tr>
                                <td>Kelas</td>
                                <td>:</td>
                                <td><?= $siswa['kelas']; ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td><?= $siswa['jenkel']; ?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><?= $siswa['alamat']; ?></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- End Modal -->