<script type="text/javascript">
    function isNumberKey(evt) {

        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

        return true;
    }
</script>

<div class="container">

    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>

        <!-- <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> Nilai siswa berhasil <?= $this->session->flashdata('flash'); ?>.
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
                <div class="alert alert-success alert-dismissible fade show" role="alert">
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
                Tambah Nilai Siswa
                </a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col md-12">
            <h3>Nilai Rata-Rata Siswa IPA</h3>

            <table class="cell-border table table-striped" id="myTable">
                <thead>
                    <tr class="table-info">
                        <th scope="col">No</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Nilai Biologi</th>
                        <th scope="col">Nilai MTK</th>
                        <th scope="col">Nilai B.Inggris</th>
                        <th scope="col">Nilai Fisika</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($nilai_siswa_ipa as $nilai_ipa) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $nilai_ipa['nis']; ?></td>
                            <td><?= $nilai_ipa['nama_lengkap']; ?></td>
                            <td><?= $nilai_ipa['kelas']; ?></td>
                            <td><?= $nilai_ipa['nilai_rata_bio']; ?></td>
                            <td><?= $nilai_ipa['nilai_rata_mtk']; ?></td>
                            <td><?= $nilai_ipa['nilai_rata_inggris']; ?></td>
                            <td><?= $nilai_ipa['nilai_rata_fisika']; ?></td>
                            <td>
                                <a href="<?= base_url(''); ?>nilaisiswa/hapus/<?= $nilai_ipa['nis']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">Delete</a>
                                <a href="" class="badge badge-success" data-toggle="modal" data-target="#modalUpdateData<?= $nilai_ipa['id_tbl_nilai']; ?>">Update</a>
                                <a href="" class="badge badge-primary" data-toggle="modal" data-target="#modalDetailData<?= $nilai_ipa['id_tbl_nilai']; ?>">Detail</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Nilai Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ui-front">
                <form action="<?= base_url('nilaisiswa/tambah'); ?>" method="post">
                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input list="data_nis" type="text" name="nis" class="form-control" id="nis" onchange="return autofill();">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" readonly>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" name="kelas" class="form-control" id="kelas" readonly>
                    </div>

                    <!-- Form Nilai Rata Rata Biologi -->
                    <label for="nilai_biologi">Nilai Rata-Rata Biologi (Per Semester)</label>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" placeholder="Nilai S1" name="biologiS1" class="form-control number" id="biologiS1" min="0" max="100" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S2" name="biologiS2" class="form-control number" id="biologiS2" min="0" max="100" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S3" name="biologiS3" class="form-control number" id="biologiS3" min="0" max="100" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S4" name="biologiS4" class="form-control number" id="biologiS4" min="0" max="100" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S5" name="biologiS5" class="form-control number" id="biologiS5" min="0" max="100" onkeypress="return isNumberKey(event)" required>
                        </div>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <center>
                            <a type="button" class="btn btn-secondary" id="hitungBiology" style="color:white">Hitung</a>
                        </center>
                        <p></p>
                        <input type="text" placeholder="Nilai Rata-Rata Biologi" name="nilai_biologi" class="form-control" id="nilai_biologi" readonly required>
                    </div>

                    <!-- Form Nilai Rata Rata Matematika -->
                    <label for="nilai_mtk">Nilai Rata-Rata Matematika (Per Semester)</label>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" placeholder="Nilai S1" name="mtk_s1" class="form-control" id="mtk_s1" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S2" name="mtk_s2" class="form-control" id="mtk_s2" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S3" name="mtk_s3" class="form-control" id="mtk_s3" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S4" name="mtk_s4" class="form-control" id="mtk_s4" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S5" name="mtk_s5" class="form-control" id="mtk_s5" onkeypress="return isNumberKey(event)" required>
                        </div>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <center>
                            <a class="btn btn-secondary" id="hitungmtk" style="color:white">Hitung</a>
                        </center>
                        <p></p>
                        <input type="text" placeholder="Nilai Rata-Rata Matematika" name="nilai_mtk" class="form-control" id="nilai_mtk" readonly required>
                    </div>

                    <!-- Form Nilai Rata Rata Bahasa Inggris -->
                    <label for="nilai_inggris">Nilai Rata-Rata Bahasa Inggris (Per Semester)</label>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" placeholder="Nilai S1" name="inggris_s1" class="form-control" id="inggris_s1" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S2" name="inggris_s2" class="form-control" id="inggris_s2" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S3" name="inggris_s3" class="form-control" id="inggris_s3" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S4" name="inggris_s4" class="form-control" id="inggris_s4" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S5" name="inggris_s5" class="form-control" id="inggris_s5" onkeypress="return isNumberKey(event)" required>
                        </div>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <center>
                            <a class="btn btn-secondary" id="hitunginggris" style="color:white">Hitung</a>
                        </center>
                        <p></p>
                        <input type="text" placeholder="Nilai Rata-Rata Bahasa Inggris" name="nilai_inggris" class="form-control" id="nilai_inggris" readonly required>
                    </div>

                    <!-- Form Nilai Rata Rata fisika -->
                    <label for="nilai_fisika">Nilai Rata-Rata Fisika (Per Semester)</label>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" placeholder="Nilai S1" name="fisika_s1" class="form-control" id="fisika_s1" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S2" name="fisika_s2" class="form-control" id="fisika_s2" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S3" name="fisika_s3" class="form-control" id="fisika_s3" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S4" name="fisika_s4" class="form-control" id="fisika_s4" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S5" name="fisika_s5" class="form-control" id="fisika_s5" onkeypress="return isNumberKey(event)" required>
                        </div>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <center>
                            <a class="btn btn-secondary" id="hitungfisika" style="color:white">Hitung</a>
                        </center>
                        <p></p>
                        <input type="text" placeholder="Nilai Rata-Rata Fisika" name="nilai_fisika" class="form-control" id="nilai_fisika" readonly required>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Nilai</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal Update Data-->
<?php
foreach ($nilai_siswa_ipa as $nilai_ipa) : ?>

    <div class="modal fade" id="modalUpdateData<?= $nilai_ipa['id_tbl_nilai']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Update Nilai Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ui-front">
                    <form action="<?= base_url('nilaisiswa/update'); ?>" method="post">
                        <input type="hidden" name="id" value="<?= $nilai_ipa['id_tbl_nilai']; ?>">
                        <div class="form-group">
                            <label for="nis">NIS</label>
                            <input list="data_nis" type="text" name="nis" class="form-control" value="<?= $nilai_ipa['nis']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" value="<?= $nilai_ipa['nama_lengkap']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" name="kelas" class="form-control" id="kelas" value="<?= $nilai_ipa['kelas']; ?>" readonly>
                        </div>

                        <!-- Form Nilai Rata Rata Biologi -->
                        <label for="nilai_biologi">Nilai Rata-Rata Biologi (Per Semester)</label>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" placeholder="Nilai S1" value="<?= $nilai_ipa['nilaibio_s1']; ?>" name="biologiS1" class="form-control number" id="biologiS1<?= $nilai_ipa['id_tbl_nilai']; ?>" min="0" max="100" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S2" value="<?= $nilai_ipa['nilaibio_s2']; ?>" name="biologiS2" class="form-control number" id="biologiS2<?= $nilai_ipa['id_tbl_nilai']; ?>" min="0" max="100" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S3" value="<?= $nilai_ipa['nilaibio_s3']; ?>" name="biologiS3" class="form-control number" id="biologiS3<?= $nilai_ipa['id_tbl_nilai']; ?>" min="0" max="100" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S4" value="<?= $nilai_ipa['nilaibio_s4']; ?>" name="biologiS4" class="form-control number" id="biologiS4<?= $nilai_ipa['id_tbl_nilai']; ?>" min="0" max="100" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S5" value="<?= $nilai_ipa['nilaibio_s5']; ?>" name="biologiS5" class="form-control number" id="biologiS5<?= $nilai_ipa['id_tbl_nilai']; ?>" min="0" max="100" onkeypress="return isNumberKey(event)" required>
                            </div>
                        </div>
                        <p></p>
                        <div class="form-group">
                            <center>
                                <a type="button" class="btn btn-secondary" id="hitungBiology<?= $nilai_ipa['id_tbl_nilai']; ?>" style="color:white">Hitung</a>
                            </center>
                            <p></p>
                            <input type="text" placeholder="Nilai Rata-Rata Biologi" value="<?= $nilai_ipa['nilai_rata_bio']; ?>" name="nilai_biologi" class="form-control" id="nilai_biologi<?= $nilai_ipa['id_tbl_nilai']; ?>" readonly>
                        </div>

                        <!-- Form Nilai Rata Rata Matematika -->
                        <label for="nilai_mtk">Nilai Rata-Rata Matematika (Per Semester)</label>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" placeholder="Nilai S1" value="<?= $nilai_ipa['nilaimtk_s1']; ?>" name="mtk_s1" class="form-control" id="mtk_s1<?= $nilai_ipa['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S2" value="<?= $nilai_ipa['nilaimtk_s2']; ?>" name="mtk_s2" class="form-control" id="mtk_s2<?= $nilai_ipa['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S3" value="<?= $nilai_ipa['nilaimtk_s3']; ?>" name="mtk_s3" class="form-control" id="mtk_s3<?= $nilai_ipa['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S4" value="<?= $nilai_ipa['nilaimtk_s4']; ?>" name="mtk_s4" class="form-control" id="mtk_s4<?= $nilai_ipa['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S5" value="<?= $nilai_ipa['nilaimtk_s5']; ?>" name="mtk_s5" class="form-control" id="mtk_s5<?= $nilai_ipa['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                        </div>
                        <p></p>
                        <div class="form-group">
                            <center>
                                <a class="btn btn-secondary" id="hitungmtk<?= $nilai_ipa['id_tbl_nilai']; ?>" style="color:white">Hitung</a>
                            </center>
                            <p></p>
                            <input type="text" placeholder="Nilai Rata-Rata Matematika" value="<?= $nilai_ipa['nilai_rata_mtk']; ?>" name="nilai_mtk" class="form-control" id="nilai_mtk<?= $nilai_ipa['id_tbl_nilai']; ?>" readonly>
                        </div>

                        <!-- Form Nilai Rata Rata Bahasa Inggris -->
                        <label for="nilai_inggris">Nilai Rata-Rata Bahasa Inggris (Per Semester)</label>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" placeholder="Nilai S1" value="<?= $nilai_ipa['nilaiinggris_s1']; ?>" name="inggris_s1" class="form-control" id="inggris_s1<?= $nilai_ipa['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S2" value="<?= $nilai_ipa['nilaiinggris_s2']; ?>" name="inggris_s2" class="form-control" id="inggris_s2<?= $nilai_ipa['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S3" value="<?= $nilai_ipa['nilaiinggris_s3']; ?>" name="inggris_s3" class="form-control" id="inggris_s3<?= $nilai_ipa['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S4" value="<?= $nilai_ipa['nilaiinggris_s4']; ?>" name="inggris_s4" class="form-control" id="inggris_s4<?= $nilai_ipa['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S5" value="<?= $nilai_ipa['nilaiinggris_s5']; ?>" name="inggris_s5" class="form-control" id="inggris_s5<?= $nilai_ipa['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                        </div>
                        <p></p>
                        <div class="form-group">
                            <center>
                                <a class="btn btn-secondary" id="hitunginggris<?= $nilai_ipa['id_tbl_nilai']; ?>" style="color:white">Hitung</a>
                            </center>
                            <p></p>
                            <input type="text" placeholder="Nilai Rata-Rata Bahasa Inggris" value="<?= $nilai_ipa['nilai_rata_inggris']; ?>" name="nilai_inggris" class="form-control" id="nilai_inggris<?= $nilai_ipa['id_tbl_nilai']; ?>" readonly>
                        </div>

                        <!-- Form Nilai Rata Rata fisika -->
                        <label for="nilai_fisika">Nilai Rata-Rata fisika (Per Semester)</label>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" placeholder="Nilai S1" value="<?= $nilai_ipa['nilaifisika_s1']; ?>" name="fisika_s1" class="form-control" id="fisika_s1<?= $nilai_ipa['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S2" value="<?= $nilai_ipa['nilaifisika_s2']; ?>" name="fisika_s2" class="form-control" id="fisika_s2<?= $nilai_ipa['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S3" value="<?= $nilai_ipa['nilaifisika_s3']; ?>" name="fisika_s3" class="form-control" id="fisika_s3<?= $nilai_ipa['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S4" value="<?= $nilai_ipa['nilaifisika_s4']; ?>" name="fisika_s4" class="form-control" id="fisika_s4<?= $nilai_ipa['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S5" value="<?= $nilai_ipa['nilaifisika_s5']; ?>" name="fisika_s5" class="form-control" id="fisika_s5<?= $nilai_ipa['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                        </div>
                        <p></p>
                        <div class="form-group">
                            <center>
                                <a class="btn btn-secondary" id="hitungfisika<?= $nilai_ipa['id_tbl_nilai']; ?>" style="color:white">Hitung</a>
                            </center>
                            <p></p>
                            <input type="text" placeholder="Nilai Rata-Rata Bahasa fisika" value="<?= $nilai_ipa['nilai_rata_fisika']; ?>" name="nilai_fisika" class="form-control" id="nilai_fisika<?= $nilai_ipa['id_tbl_nilai']; ?>" readonly>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Nilai</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- End Modal -->

<!-- Modal Detail Data-->
<?php
foreach ($nilai_siswa_ipa as $nilai_ipa) : ?>

    <div class="modal fade" id="modalDetailData<?= $nilai_ipa['id_tbl_nilai']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Nilai Rata-Rata Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <h3>
                        <?= $nilai_ipa['nis']; ?>
                        <small class="text-muted"><?= $nilai_ipa['nama_lengkap']; ?></small>
                    </h3>
                    <hr>

                    <div class="row">
                        <div class="col">
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Nilai Biologi</h4>
                                <p style="color: black;">Semester I : <?= $nilai_ipa['nilaibio_s1']; ?></p>
                                <p style="color: black;">Semester II : <?= $nilai_ipa['nilaibio_s2']; ?></p>
                                <p style="color: black;">Semester III : <?= $nilai_ipa['nilaibio_s3']; ?></p>
                                <p style="color: black;">Semester IV : <?= $nilai_ipa['nilaibio_s4']; ?></p>
                                <p style="color: black;">Semester V : <?= $nilai_ipa['nilaibio_s5']; ?></p>
                                <hr>
                                <p style="color: black;">Nilai rata-rata : <?= $nilai_ipa['nilai_rata_bio']; ?></p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="alert alert-success" role="alert">
                                <h5 class="alert-heading">Nilai Matematika</h5>
                                <p style="color: black;">Semester I : <?= $nilai_ipa['nilaimtk_s1']; ?></p>
                                <p style="color: black;">Semester II : <?= $nilai_ipa['nilaimtk_s2']; ?></p>
                                <p style="color: black;">Semester III : <?= $nilai_ipa['nilaimtk_s3']; ?></p>
                                <p style="color: black;">Semester IV : <?= $nilai_ipa['nilaimtk_s4']; ?></p>
                                <p style="color: black;">Semester V : <?= $nilai_ipa['nilaimtk_s5']; ?></p>
                                <hr>
                                <p style="color: black;">Nilai rata-rata : <?= $nilai_ipa['nilai_rata_mtk']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Nilai B.Inggris</h4>
                                <p style="color: black;">Semester I : <?= $nilai_ipa['nilaiinggris_s1']; ?></p>
                                <p style="color: black;">Semester II : <?= $nilai_ipa['nilaiinggris_s2']; ?></p>
                                <p style="color: black;">Semester III : <?= $nilai_ipa['nilaiinggris_s3']; ?></p>
                                <p style="color: black;">Semester IV : <?= $nilai_ipa['nilaiinggris_s4']; ?></p>
                                <p style="color: black;">Semester V : <?= $nilai_ipa['nilaiinggris_s5']; ?></p>
                                <hr>
                                <p style="color: black;">Nilai rata-rata : <?= $nilai_ipa['nilai_rata_inggris']; ?></p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Nilai Fisika</h4>
                                <p style="color: black;">Semester I : <?= $nilai_ipa['nilaifisika_s1']; ?></p>
                                <p style="color: black;">Semester II : <?= $nilai_ipa['nilaifisika_s2']; ?></p>
                                <p style="color: black;">Semester III : <?= $nilai_ipa['nilaifisika_s3']; ?></p>
                                <p style="color: black;">Semester IV : <?= $nilai_ipa['nilaifisika_s4']; ?></p>
                                <p style="color: black;">Semester V : <?= $nilai_ipa['nilaifisika_s5']; ?></p>
                                <hr>
                                <p style="color: black;">Nilai rata-rata : <?= $nilai_ipa['nilai_rata_fisika']; ?></p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- End Modal -->

<script src="<?php echo base_url(); ?>assets/js/ajax.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<datalist id="data_nis">
    <?php foreach ($record as $u) : ?>
        <option value="<?php echo $u['nis']; ?>"><?php echo $u['nama_lengkap']; ?></option>
    <?php endforeach ?>
</datalist>

<script>
    function autofill() {
        var nis = document.getElementById('nis').value;
        $.ajax({
            url: "<?php echo base_url(); ?>NilaiSiswa/cari",
            data: '&nis=' + nis,
            success: function(data) {
                var hasil = JSON.parse(data);

                $.each(hasil, function(key, val) {

                    document.getElementById('nis').value = val.nis;
                    document.getElementById('nama_lengkap').value = val.nama_lengkap;
                    document.getElementById('kelas').value = val.kelas;

                });
            }
        });
    }
</script>

<!-- Jquery Hitung Nilai Rata-Rata -->
<script>
    $('#hitungBiology').click(function(e) {
        let biologiS1 = parseInt($('#biologiS1').val())
        let biologiS2 = parseInt($('#biologiS2').val())
        let biologiS3 = parseInt($('#biologiS3').val())
        let biologiS4 = parseInt($('#biologiS4').val())
        let biologiS5 = parseInt($('#biologiS5').val())

        if (Number.isNaN(biologiS1) || Number.isNaN(biologiS2) || Number.isNaN(biologiS3) || Number.isNaN(biologiS4) || Number.isNaN(biologiS5)) {
            alert("Masih ada nilai yang kosong")
        }

        hasil = hitung_nilai(biologiS1, biologiS2, biologiS3, biologiS4, biologiS5)

        if (Number.isNaN(hasil)) {
            hasil = null
        }
        $('#nilai_biologi').val(hasil)

    });

    $('#hitungmtk').click(function(e) {
        let mtk_s1 = parseInt($('#mtk_s1').val())
        let mtk_s2 = parseInt($('#mtk_s2').val())
        let mtk_s3 = parseInt($('#mtk_s3').val())
        let mtk_s4 = parseInt($('#mtk_s4').val())
        let mtk_s5 = parseInt($('#mtk_s5').val())

        if (Number.isNaN(mtk_s1) || Number.isNaN(mtk_s2) || Number.isNaN(mtk_s3) || Number.isNaN(mtk_s4) || Number.isNaN(mtk_s5)) {
            alert("Masih ada nilai yang kosong")
        }

        hasil = hitung_nilai(mtk_s1, mtk_s2, mtk_s3, mtk_s4, mtk_s5)

        if (Number.isNaN(hasil)) {
            hasil = null
        }
        $('#nilai_mtk').val(hasil)

    });

    $('#hitunginggris').click(function(e) {
        let inggris_s1 = parseInt($('#inggris_s1').val())
        let inggris_s2 = parseInt($('#inggris_s2').val())
        let inggris_s3 = parseInt($('#inggris_s3').val())
        let inggris_s4 = parseInt($('#inggris_s4').val())
        let inggris_s5 = parseInt($('#inggris_s5').val())

        if (Number.isNaN(inggris_s1) || Number.isNaN(inggris_s2) || Number.isNaN(inggris_s3) || Number.isNaN(inggris_s4) || Number.isNaN(inggris_s5)) {
            alert("Masih ada nilai yang kosong")
        }

        hasil = hitung_nilai(inggris_s1, inggris_s2, inggris_s3, inggris_s4, inggris_s5)

        if (Number.isNaN(hasil)) {
            hasil = null
        }
        $('#nilai_inggris').val(hasil)

    });

    $('#hitungfisika').click(function(e) {
        let fisika_s1 = parseInt($('#fisika_s1').val())
        let fisika_s2 = parseInt($('#fisika_s2').val())
        let fisika_s3 = parseInt($('#fisika_s3').val())
        let fisika_s4 = parseInt($('#fisika_s4').val())
        let fisika_s5 = parseInt($('#fisika_s5').val())

        if (Number.isNaN(fisika_s1) || Number.isNaN(fisika_s2) || Number.isNaN(fisika_s3) || Number.isNaN(fisika_s4) || Number.isNaN(fisika_s5)) {
            alert("Masih ada nilai yang kosong")
        }

        hasil = hitung_nilai(fisika_s1, fisika_s2, fisika_s3, fisika_s4, fisika_s5)

        if (Number.isNaN(hasil)) {
            hasil = null
        }
        $('#nilai_fisika').val(hasil)

    });

    function hitung_nilai(x1, x2, x3, x4, x5) {
        result = (x1 + x2 + x3 + x4 + x5) / 5;
        return result;
    };

    <?php
    foreach ($nilai_siswa_ipa as $nilai_ipa) : ?>

        $('#hitungBiology<?= $nilai_ipa['id_tbl_nilai']; ?>').click(function(e) {
            let biologiS1 = parseInt($('#biologiS1<?= $nilai_ipa['id_tbl_nilai']; ?>').val())
            let biologiS2 = parseInt($('#biologiS2<?= $nilai_ipa['id_tbl_nilai']; ?>').val())
            let biologiS3 = parseInt($('#biologiS3<?= $nilai_ipa['id_tbl_nilai']; ?>').val())
            let biologiS4 = parseInt($('#biologiS4<?= $nilai_ipa['id_tbl_nilai']; ?>').val())
            let biologiS5 = parseInt($('#biologiS5<?= $nilai_ipa['id_tbl_nilai']; ?>').val())

            if (Number.isNaN(biologiS1) || Number.isNaN(biologiS2) || Number.isNaN(biologiS3) || Number.isNaN(biologiS4) || Number.isNaN(biologiS5)) {
                alert("Masih ada nilai yang kosong")
            }

            hasil = hitung_nilaiUpdate(biologiS1, biologiS2, biologiS3, biologiS4, biologiS5)

            if (Number.isNaN(hasil)) {
                hasil = null
            }
            $('#nilai_biologi<?= $nilai_ipa['id_tbl_nilai']; ?>').val(hasil)

        });

        $('#hitungmtk<?= $nilai_ipa['id_tbl_nilai']; ?>').click(function(e) {
            let mtk_s1 = parseInt($('#mtk_s1<?= $nilai_ipa['id_tbl_nilai']; ?>').val())
            let mtk_s2 = parseInt($('#mtk_s2<?= $nilai_ipa['id_tbl_nilai']; ?>').val())
            let mtk_s3 = parseInt($('#mtk_s3<?= $nilai_ipa['id_tbl_nilai']; ?>').val())
            let mtk_s4 = parseInt($('#mtk_s4<?= $nilai_ipa['id_tbl_nilai']; ?>').val())
            let mtk_s5 = parseInt($('#mtk_s5<?= $nilai_ipa['id_tbl_nilai']; ?>').val())

            if (Number.isNaN(mtk_s1) || Number.isNaN(mtk_s2) || Number.isNaN(mtk_s3) || Number.isNaN(mtk_s4) || Number.isNaN(mtk_s5)) {
                alert("Masih ada nilai yang kosong")
            }

            hasil = hitung_nilaiUpdate(mtk_s1, mtk_s2, mtk_s3, mtk_s4, mtk_s5)

            if (Number.isNaN(hasil)) {
                hasil = null
            }
            $('#nilai_mtk<?= $nilai_ipa['id_tbl_nilai']; ?>').val(hasil)

        });

        $('#hitunginggris<?= $nilai_ipa['id_tbl_nilai']; ?>').click(function(e) {
            let inggris_s1 = parseInt($('#inggris_s1<?= $nilai_ipa['id_tbl_nilai']; ?>').val())
            let inggris_s2 = parseInt($('#inggris_s2<?= $nilai_ipa['id_tbl_nilai']; ?>').val())
            let inggris_s3 = parseInt($('#inggris_s3<?= $nilai_ipa['id_tbl_nilai']; ?>').val())
            let inggris_s4 = parseInt($('#inggris_s4<?= $nilai_ipa['id_tbl_nilai']; ?>').val())
            let inggris_s5 = parseInt($('#inggris_s5<?= $nilai_ipa['id_tbl_nilai']; ?>').val())

            if (Number.isNaN(inggris_s1) || Number.isNaN(inggris_s2) || Number.isNaN(inggris_s3) || Number.isNaN(inggris_s4) || Number.isNaN(inggris_s5)) {
                alert("Masih ada nilai yang kosong")
            }

            hasil = hitung_nilaiUpdate(inggris_s1, inggris_s2, inggris_s3, inggris_s4, inggris_s5)

            if (Number.isNaN(hasil)) {
                hasil = null
            }
            $('#nilai_inggris<?= $nilai_ipa['id_tbl_nilai']; ?>').val(hasil)

        });

        $('#hitungfisika<?= $nilai_ipa['id_tbl_nilai']; ?>').click(function(e) {
            let fisika_s1 = parseInt($('#fisika_s1<?= $nilai_ipa['id_tbl_nilai']; ?>').val())
            let fisika_s2 = parseInt($('#fisika_s2<?= $nilai_ipa['id_tbl_nilai']; ?>').val())
            let fisika_s3 = parseInt($('#fisika_s3<?= $nilai_ipa['id_tbl_nilai']; ?>').val())
            let fisika_s4 = parseInt($('#fisika_s4<?= $nilai_ipa['id_tbl_nilai']; ?>').val())
            let fisika_s5 = parseInt($('#fisika_s5<?= $nilai_ipa['id_tbl_nilai']; ?>').val())

            if (Number.isNaN(fisika_s1) || Number.isNaN(fisika_s2) || Number.isNaN(fisika_s3) || Number.isNaN(fisika_s4) || Number.isNaN(fisika_s5)) {
                alert("Masih ada nilai yang kosong")
            }

            hasil = hitung_nilaiUpdate(fisika_s1, fisika_s2, fisika_s3, fisika_s4, fisika_s5)

            if (Number.isNaN(hasil)) {
                hasil = null
            }
            $('#nilai_fisika<?= $nilai_ipa['id_tbl_nilai']; ?>').val(hasil)

        });

        function hitung_nilaiUpdate(x1, x2, x3, x4, x5) {
            result = (x1 + x2 + x3 + x4 + x5) / 5;
            return result;
        };

    <?php endforeach; ?>
</script>