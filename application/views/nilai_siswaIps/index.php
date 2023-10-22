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
            </button>
        </div>
    </div>

    <div class="row mt-3">
        <!-- <div class="col md-12"> -->
        <h3>Nilai Rata-Rata Siswa IPS</h3>

        <div class="table-responsive">
            <table class="table" id="myTable">
                <thead>
                    <tr class="table-info">
                        <th scope="col">No</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Nilai Ekonomi</th>
                        <th scope="col">Nilai MTK</th>
                        <th scope="col">Nilai B.Inggris</th>
                        <th scope="col">Nilai PPKN</th>
                        <th scope="col">Nilai Sosiologi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($nilai_siswa_ips as $nilai_ips) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $nilai_ips['nis']; ?></td>
                            <td><?= $nilai_ips['nama_lengkap']; ?></td>
                            <td><?= $nilai_ips['kelas']; ?></td>
                            <td><?= $nilai_ips['nilai_rata_eko']; ?></td>
                            <td><?= $nilai_ips['nilai_rata_mtk']; ?></td>
                            <td><?= $nilai_ips['nilai_rata_inggris']; ?></td>
                            <td><?= $nilai_ips['nilai_rata_ppkn']; ?></td>
                            <td><?= $nilai_ips['nilai_rata_sosio']; ?></td>
                            <td>
                                <a href="<?= base_url(''); ?>controllernilaiips/hapus/<?= $nilai_ips['nis']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">Delete</a>
                                <a href="" class="badge badge-success" data-toggle="modal" data-target="#modalUpdateData<?= $nilai_ips['id_tbl_nilai']; ?>">Update</a>
                                <a href="" class="badge badge-primary" data-toggle="modal" data-target="#modalDetailData<?= $nilai_ips['id_tbl_nilai']; ?>">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

</div>

<!-- Awal Modal -->
<!-- Modal Tambah Data-->
<div class="modal fade" id="modalTambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Nilai Siswa IPS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ui-front">
                <form action="<?= base_url('controllernilaiips/tambah'); ?>" method="post">
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

                    <!-- Form Nilai Rata Rata Ekonomi -->
                    <label for="nilai_ekonomi">Nilai Rata-Rata Ekonomi (Per Semester)</label>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" placeholder="Nilai S1" name="ekonomiS1" class="form-control number" id="ekonomiS1" min="0" max="100" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S2" name="ekonomiS2" class="form-control number" id="ekonomiS2" min="0" max="100" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S3" name="ekonomiS3" class="form-control number" id="ekonomiS3" min="0" max="100" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S4" name="ekonomiS4" class="form-control number" id="ekonomiS4" min="0" max="100" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S5" name="ekonomiS5" class="form-control number" id="ekonomiS5" min="0" max="100" onkeypress="return isNumberKey(event)" required>
                        </div>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <center>
                            <a type="button" class="btn btn-secondary" id="hitungEkonomi" style="color:white">Hitung</a>
                        </center>
                        <p></p>
                        <input type="text" placeholder="Nilai Rata-Rata Ekonomi" name="nilai_ekonomi" class="form-control" id="nilai_ekonomi" readonly>
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
                        <input type="text" placeholder="Nilai Rata-Rata Matematika" name="nilai_mtk" class="form-control" id="nilai_mtk" readonly>
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
                        <input type="text" placeholder="Nilai Rata-Rata Bahasa Inggris" name="nilai_inggris" class="form-control" id="nilai_inggris" readonly>
                    </div>

                    <!-- Form Nilai Rata Rata PPKN -->
                    <label for="nilai_ppkn">Nilai Rata-Rata PPKN (Per Semester)</label>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" placeholder="Nilai S1" name="ppkn_s1" class="form-control" id="ppkn_s1" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S2" name="ppkn_s2" class="form-control" id="ppkn_s2" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S3" name="ppkn_s3" class="form-control" id="ppkn_s3" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S4" name="ppkn_s4" class="form-control" id="ppkn_s4" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S5" name="ppkn_s5" class="form-control" id="ppkn_s5" onkeypress="return isNumberKey(event)" required>
                        </div>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <center>
                            <a class="btn btn-secondary" id="hitungPpkn" style="color:white">Hitung</a>
                        </center>
                        <p></p>
                        <input type="text" placeholder="Nilai Rata-Rata Bahasa PPKN" name="nilai_ppkn" class="form-control" id="nilai_ppkn" readonly>
                    </div>

                    <!-- Form Nilai Rata Rata Sosiologi -->
                    <label for="nilai_sosio">Nilai Rata-Rata Sosiologi (Per Semester)</label>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" placeholder="Nilai S1" name="sosio_s1" class="form-control" id="sosio_s1" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S2" name="sosio_s2" class="form-control" id="sosio_s2" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S3" name="sosio_s3" class="form-control" id="sosio_s3" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S4" name="sosio_s4" class="form-control" id="sosio_s4" onkeypress="return isNumberKey(event)" required>
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Nilai S5" name="sosio_s5" class="form-control" id="sosio_s5" onkeypress="return isNumberKey(event)" required>
                        </div>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <center>
                            <a class="btn btn-secondary" id="hitungSosio" style="color:white">Hitung</a>
                        </center>
                        <p></p>
                        <input type="text" placeholder="Nilai Rata-Rata Bahasa Sosiologi" name="nilai_sosio" class="form-control" id="nilai_sosio" readonly>
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
foreach ($nilai_siswa_ips as $nilai_ips) : ?>

    <div class="modal fade" id="modalUpdateData<?= $nilai_ips['id_tbl_nilai']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Update Nilai Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body ui-front">
                    <form action="<?= base_url('controllernilaiips/update'); ?>" method="post">
                        <input type="hidden" name="id" value="<?= $nilai_ips['id_tbl_nilai']; ?>">
                        <div class="form-group">
                            <label for="nis">NIS</label>
                            <input list="data_nis" type="text" name="nis" class="form-control" value="<?= $nilai_ips['nis']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" value="<?= $nilai_ips['nama_lengkap']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" name="kelas" class="form-control" id="kelas" value="<?= $nilai_ips['kelas']; ?>" readonly>
                        </div>

                        <!-- Form Nilai Rata Rata Biologi -->
                        <label for="nilai_ekonomi">Nilai Rata-Rata Ekonomi (Per Semester)</label>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" placeholder="Nilai S1" value="<?= $nilai_ips['nilaieko_s1']; ?>" name="ekonomiS1" class="form-control number" id="ekonomiS1<?= $nilai_ips['id_tbl_nilai']; ?>" min="0" max="100" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S2" value="<?= $nilai_ips['nilaieko_s2']; ?>" name="ekonomiS2" class="form-control number" id="ekonomiS2<?= $nilai_ips['id_tbl_nilai']; ?>" min="0" max="100" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S3" value="<?= $nilai_ips['nilaieko_s3']; ?>" name="ekonomiS3" class="form-control number" id="ekonomiS3<?= $nilai_ips['id_tbl_nilai']; ?>" min="0" max="100" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S4" value="<?= $nilai_ips['nilaieko_s4']; ?>" name="ekonomiS4" class="form-control number" id="ekonomiS4<?= $nilai_ips['id_tbl_nilai']; ?>" min="0" max="100" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S5" value="<?= $nilai_ips['nilaieko_s5']; ?>" name="ekonomiS5" class="form-control number" id="ekonomiS5<?= $nilai_ips['id_tbl_nilai']; ?>" min="0" max="100" onkeypress="return isNumberKey(event)" required>
                            </div>
                        </div>
                        <p></p>
                        <div class="form-group">
                            <center>
                                <a type="button" class="btn btn-secondary" id="hitungEkonomi<?= $nilai_ips['id_tbl_nilai']; ?>" style="color:white">Hitung</a>
                            </center>
                            <p></p>
                            <input type="text" placeholder="Nilai Rata-Rata Ekonomi" value="<?= $nilai_ips['nilai_rata_eko']; ?>" name="nilai_ekonomi" class="form-control" id="nilai_ekonomi<?= $nilai_ips['id_tbl_nilai']; ?>" readonly>
                        </div>

                        <!-- Form Nilai Rata Rata Matematika -->
                        <label for="nilai_mtk">Nilai Rata-Rata Matematika (Per Semester)</label>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" placeholder="Nilai S1" value="<?= $nilai_ips['nilaimtk_s1']; ?>" name="mtk_s1" class="form-control" id="mtk_s1<?= $nilai_ips['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S2" value="<?= $nilai_ips['nilaimtk_s2']; ?>" name="mtk_s2" class="form-control" id="mtk_s2<?= $nilai_ips['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S3" value="<?= $nilai_ips['nilaimtk_s3']; ?>" name="mtk_s3" class="form-control" id="mtk_s3<?= $nilai_ips['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S4" value="<?= $nilai_ips['nilaimtk_s4']; ?>" name="mtk_s4" class="form-control" id="mtk_s4<?= $nilai_ips['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S5" value="<?= $nilai_ips['nilaimtk_s5']; ?>" name="mtk_s5" class="form-control" id="mtk_s5<?= $nilai_ips['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                        </div>
                        <p></p>
                        <div class="form-group">
                            <center>
                                <a class="btn btn-secondary" id="hitungmtk<?= $nilai_ips['id_tbl_nilai']; ?>" style="color:white">Hitung</a>
                            </center>
                            <p></p>
                            <input type="text" placeholder="Nilai Rata-Rata Matematika" value="<?= $nilai_ips['nilai_rata_mtk']; ?>" name="nilai_mtk" class="form-control" id="nilai_mtk<?= $nilai_ips['id_tbl_nilai']; ?>" readonly>
                        </div>

                        <!-- Form Nilai Rata Rata Bahasa Inggris -->
                        <label for="nilai_inggris">Nilai Rata-Rata Bahasa Inggris (Per Semester)</label>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" placeholder="Nilai S1" value="<?= $nilai_ips['nilaiinggris_s1']; ?>" name="inggris_s1" class="form-control" id="inggris_s1<?= $nilai_ips['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S2" value="<?= $nilai_ips['nilaiinggris_s2']; ?>" name="inggris_s2" class="form-control" id="inggris_s2<?= $nilai_ips['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S3" value="<?= $nilai_ips['nilaiinggris_s3']; ?>" name="inggris_s3" class="form-control" id="inggris_s3<?= $nilai_ips['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S4" value="<?= $nilai_ips['nilaiinggris_s4']; ?>" name="inggris_s4" class="form-control" id="inggris_s4<?= $nilai_ips['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S5" value="<?= $nilai_ips['nilaiinggris_s5']; ?>" name="inggris_s5" class="form-control" id="inggris_s5<?= $nilai_ips['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                        </div>
                        <p></p>
                        <div class="form-group">
                            <center>
                                <a class="btn btn-secondary" id="hitunginggris<?= $nilai_ips['id_tbl_nilai']; ?>" style="color:white">Hitung</a>
                            </center>
                            <p></p>
                            <input type="text" placeholder="Nilai Rata-Rata Bahasa Inggris" value="<?= $nilai_ips['nilai_rata_inggris']; ?>" name="nilai_inggris" class="form-control" id="nilai_inggris<?= $nilai_ips['id_tbl_nilai']; ?>" readonly>
                        </div>

                        <!-- Form Nilai Rata Rata PPKN -->
                        <label for="nilai_ppkn">Nilai Rata-Rata PPKN (Per Semester)</label>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" placeholder="Nilai S1" value="<?= $nilai_ips['nilaippkn_s1']; ?>" name="ppkn_s1" class="form-control" id="ppkn_s1<?= $nilai_ips['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S2" value="<?= $nilai_ips['nilaippkn_s2']; ?>" name="ppkn_s2" class="form-control" id="ppkn_s2<?= $nilai_ips['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S3" value="<?= $nilai_ips['nilaippkn_s3']; ?>" name="ppkn_s3" class="form-control" id="ppkn_s3<?= $nilai_ips['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S4" value="<?= $nilai_ips['nilaippkn_s4']; ?>" name="ppkn_s4" class="form-control" id="ppkn_s4<?= $nilai_ips['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S5" value="<?= $nilai_ips['nilaippkn_s5']; ?>" name="ppkn_s5" class="form-control" id="ppkn_s5<?= $nilai_ips['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                        </div>
                        <p></p>
                        <div class="form-group">
                            <center>
                                <a class="btn btn-secondary" id="hitungPpkn<?= $nilai_ips['id_tbl_nilai']; ?>" style="color:white">Hitung</a>
                            </center>
                            <p></p>
                            <input type="text" placeholder="Nilai Rata-Rata PPKN" value="<?= $nilai_ips['nilai_rata_ppkn']; ?>" name="nilai_ppkn" class="form-control" id="nilai_ppkn<?= $nilai_ips['id_tbl_nilai']; ?>" readonly>
                        </div>

                        <!-- Form Nilai Rata Rata Sosiologi -->
                        <label for="nilai_sosio">Nilai Rata-Rata Sosiologi (Per Semester)</label>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" placeholder="Nilai S1" value="<?= $nilai_ips['nilaisosio_s1']; ?>" name="sosio_s1" class="form-control" id="sosio_s1<?= $nilai_ips['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S2" value="<?= $nilai_ips['nilaisosio_s2']; ?>" name="sosio_s2" class="form-control" id="sosio_s2<?= $nilai_ips['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S3" value="<?= $nilai_ips['nilaisosio_s3']; ?>" name="sosio_s3" class="form-control" id="sosio_s3<?= $nilai_ips['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S4" value="<?= $nilai_ips['nilaisosio_s4']; ?>" name="sosio_s4" class="form-control" id="sosio_s4<?= $nilai_ips['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                            <div class="col">
                                <input type="text" placeholder="Nilai S5" value="<?= $nilai_ips['nilaisosio_s5']; ?>" name="sosio_s5" class="form-control" id="sosio_s5<?= $nilai_ips['id_tbl_nilai']; ?>" onkeypress="return isNumberKey(event)" required>
                            </div>
                        </div>
                        <p></p>
                        <div class="form-group">
                            <center>
                                <a class="btn btn-secondary" id="hitungSosio<?= $nilai_ips['id_tbl_nilai']; ?>" style="color:white">Hitung</a>
                            </center>
                            <p></p>
                            <input type="text" placeholder="Nilai Rata-Rata Sosiologi" value="<?= $nilai_ips['nilai_rata_sosio']; ?>" name="nilai_sosio" class="form-control" id="nilai_sosio<?= $nilai_ips['id_tbl_nilai']; ?>" readonly>
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
foreach ($nilai_siswa_ips as $nilai_ips) : ?>

    <div class="modal fade" id="modalDetailData<?= $nilai_ips['id_tbl_nilai']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Nilai Rata-Rata Siswa IPS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <h3>
                        <?= $nilai_ips['nis']; ?>
                        <small class="text-muted"><?= $nilai_ips['nama_lengkap']; ?></small>
                    </h3>
                    <hr>

                    <div class="row">
                        <div class="col">
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Nilai Ekonomi</h4>
                                <p style="color: black;">Semester I : <?= $nilai_ips['nilaieko_s1']; ?></p>
                                <p style="color: black;">Semester II : <?= $nilai_ips['nilaieko_s2']; ?></p>
                                <p style="color: black;">Semester III : <?= $nilai_ips['nilaieko_s3']; ?></p>
                                <p style="color: black;">Semester IV : <?= $nilai_ips['nilaieko_s4']; ?></p>
                                <p style="color: black;">Semester V : <?= $nilai_ips['nilaieko_s5']; ?></p>
                                <hr>
                                <p style="color: black;">Nilai rata-rata : <?= $nilai_ips['nilai_rata_eko']; ?></p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="alert alert-success" role="alert">
                                <h5 class="alert-heading">Nilai Matematika</h5>
                                <p style="color: black;">Semester I : <?= $nilai_ips['nilaimtk_s1']; ?></p>
                                <p style="color: black;">Semester II : <?= $nilai_ips['nilaimtk_s2']; ?></p>
                                <p style="color: black;">Semester III : <?= $nilai_ips['nilaimtk_s3']; ?></p>
                                <p style="color: black;">Semester IV : <?= $nilai_ips['nilaimtk_s4']; ?></p>
                                <p style="color: black;">Semester V : <?= $nilai_ips['nilaimtk_s5']; ?></p>
                                <hr>
                                <p style="color: black;">Nilai rata-rata : <?= $nilai_ips['nilai_rata_mtk']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Nilai B.Inggris</h4>
                                <p style="color: black;">Semester I : <?= $nilai_ips['nilaiinggris_s1']; ?></p>
                                <p style="color: black;">Semester II : <?= $nilai_ips['nilaiinggris_s2']; ?></p>
                                <p style="color: black;">Semester III : <?= $nilai_ips['nilaiinggris_s3']; ?></p>
                                <p style="color: black;">Semester IV : <?= $nilai_ips['nilaiinggris_s4']; ?></p>
                                <p style="color: black;">Semester V : <?= $nilai_ips['nilaiinggris_s5']; ?></p>
                                <hr>
                                <p style="color: black;">Nilai rata-rata : <?= $nilai_ips['nilai_rata_inggris']; ?></p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Nilai PPKN</h4>
                                <p style="color: black;">Semester I : <?= $nilai_ips['nilaippkn_s1']; ?></p>
                                <p style="color: black;">Semester II : <?= $nilai_ips['nilaippkn_s2']; ?></p>
                                <p style="color: black;">Semester III : <?= $nilai_ips['nilaippkn_s3']; ?></p>
                                <p style="color: black;">Semester IV : <?= $nilai_ips['nilaippkn_s4']; ?></p>
                                <p style="color: black;">Semester V : <?= $nilai_ips['nilaippkn_s5']; ?></p>
                                <hr>
                                <p style="color: black;">Nilai rata-rata : <?= $nilai_ips['nilai_rata_ppkn']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Nilai Sosiologi</h4>
                        <p style="color: black;">Semester I : <?= $nilai_ips['nilaisosio_s1']; ?></p>
                        <p style="color: black;">Semester II : <?= $nilai_ips['nilaisosio_s2']; ?></p>
                        <p style="color: black;">Semester III : <?= $nilai_ips['nilaisosio_s3']; ?></p>
                        <p style="color: black;">Semester IV : <?= $nilai_ips['nilaisosio_s4']; ?></p>
                        <p style="color: black;">Semester V : <?= $nilai_ips['nilaisosio_s5']; ?></p>
                        <hr>
                        <p style="color: black;">Nilai rata-rata : <?= $nilai_ips['nilai_rata_sosio']; ?></p>
                    </div>
                    <div class="row">

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
        <option value="<?php echo $u['nis'];
                        echo " | "; ?><?php echo $u['nama_lengkap']; ?>">
        </option>
    <?php endforeach ?>
</datalist>

<script>
    function autofill() {
        var nis = document.getElementById('nis').value;
        $.ajax({
            url: "<?php echo base_url(); ?>ControllerNilaiIps/cari",
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
    $('#hitungEkonomi').click(function(e) {
        let ekonomiS1 = parseInt($('#ekonomiS1').val())
        let ekonomiS2 = parseInt($('#ekonomiS2').val())
        let ekonomiS3 = parseInt($('#ekonomiS3').val())
        let ekonomiS4 = parseInt($('#ekonomiS4').val())
        let ekonomiS5 = parseInt($('#ekonomiS5').val())

        if (Number.isNaN(ekonomiS1) || Number.isNaN(ekonomiS2) || Number.isNaN(ekonomiS3) || Number.isNaN(ekonomiS4) || Number.isNaN(ekonomiS5)) {
            alert("Masih ada nilai yang kosong")
        }

        hasil = hitung_nilai(ekonomiS1, ekonomiS2, ekonomiS3, ekonomiS4, ekonomiS5)

        if (Number.isNaN(hasil)) {
            hasil = null
        }
        $('#nilai_ekonomi').val(hasil)

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

    $('#hitungPpkn').click(function(e) {
        let ppkn_s1 = parseInt($('#ppkn_s1').val())
        let ppkn_s2 = parseInt($('#ppkn_s2').val())
        let ppkn_s3 = parseInt($('#ppkn_s3').val())
        let ppkn_s4 = parseInt($('#ppkn_s4').val())
        let ppkn_s5 = parseInt($('#ppkn_s5').val())

        if (Number.isNaN(ppkn_s1) || Number.isNaN(ppkn_s2) || Number.isNaN(ppkn_s3) || Number.isNaN(ppkn_s4) || Number.isNaN(ppkn_s5)) {
            alert("Masih ada nilai yang kosong")
        }

        hasil = hitung_nilai(ppkn_s1, ppkn_s2, ppkn_s3, ppkn_s4, ppkn_s5)

        if (Number.isNaN(hasil)) {
            hasil = null
        }
        $('#nilai_ppkn').val(hasil)

    });

    $('#hitungSosio').click(function(e) {
        let sosio_s1 = parseInt($('#sosio_s1').val())
        let sosio_s2 = parseInt($('#sosio_s2').val())
        let sosio_s3 = parseInt($('#sosio_s3').val())
        let sosio_s4 = parseInt($('#sosio_s4').val())
        let sosio_s5 = parseInt($('#sosio_s5').val())

        if (Number.isNaN(sosio_s1) || Number.isNaN(sosio_s2) || Number.isNaN(sosio_s3) || Number.isNaN(sosio_s4) || Number.isNaN(sosio_s5)) {
            alert("Masih ada nilai yang kosong")
        }

        hasil = hitung_nilai(sosio_s1, sosio_s2, sosio_s3, sosio_s4, sosio_s5)

        if (Number.isNaN(hasil)) {
            hasil = null
        }
        $('#nilai_sosio').val(hasil)

    });

    function hitung_nilai(x1, x2, x3, x4, x5) {
        result = (x1 + x2 + x3 + x4 + x5) / 5;
        return result;
    };

    <?php
    foreach ($nilai_siswa_ips as $nilai_ips) : ?>

        $('#hitungEkonomi<?= $nilai_ips['id_tbl_nilai']; ?>').click(function(e) {
            let ekonomiS1 = parseInt($('#ekonomiS1<?= $nilai_ips['id_tbl_nilai']; ?>').val())
            let ekonomiS2 = parseInt($('#ekonomiS2<?= $nilai_ips['id_tbl_nilai']; ?>').val())
            let ekonomiS3 = parseInt($('#ekonomiS3<?= $nilai_ips['id_tbl_nilai']; ?>').val())
            let ekonomiS4 = parseInt($('#ekonomiS4<?= $nilai_ips['id_tbl_nilai']; ?>').val())
            let ekonomiS5 = parseInt($('#ekonomiS5<?= $nilai_ips['id_tbl_nilai']; ?>').val())

            if (Number.isNaN(ekonomiS1) || Number.isNaN(ekonomiS2) || Number.isNaN(ekonomiS3) || Number.isNaN(ekonomiS4) || Number.isNaN(ekonomiS5)) {
                alert("Masih ada nilai yang kosong")
            }

            hasil = hitung_nilaiUpdate(ekonomiS1, ekonomiS2, ekonomiS3, ekonomiS4, ekonomiS5)

            if (Number.isNaN(hasil)) {
                hasil = null
            }
            $('#nilai_ekonomi<?= $nilai_ips['id_tbl_nilai']; ?>').val(hasil)

        });

        $('#hitungmtk<?= $nilai_ips['id_tbl_nilai']; ?>').click(function(e) {
            let mtk_s1 = parseInt($('#mtk_s1<?= $nilai_ips['id_tbl_nilai']; ?>').val())
            let mtk_s2 = parseInt($('#mtk_s2<?= $nilai_ips['id_tbl_nilai']; ?>').val())
            let mtk_s3 = parseInt($('#mtk_s3<?= $nilai_ips['id_tbl_nilai']; ?>').val())
            let mtk_s4 = parseInt($('#mtk_s4<?= $nilai_ips['id_tbl_nilai']; ?>').val())
            let mtk_s5 = parseInt($('#mtk_s5<?= $nilai_ips['id_tbl_nilai']; ?>').val())

            if (Number.isNaN(mtk_s1) || Number.isNaN(mtk_s2) || Number.isNaN(mtk_s3) || Number.isNaN(mtk_s4) || Number.isNaN(mtk_s5)) {
                alert("Masih ada nilai yang kosong")
            }

            hasil = hitung_nilaiUpdate(mtk_s1, mtk_s2, mtk_s3, mtk_s4, mtk_s5)

            if (Number.isNaN(hasil)) {
                hasil = null
            }
            $('#nilai_mtk<?= $nilai_ips['id_tbl_nilai']; ?>').val(hasil)

        });

        $('#hitunginggris<?= $nilai_ips['id_tbl_nilai']; ?>').click(function(e) {
            let inggris_s1 = parseInt($('#inggris_s1<?= $nilai_ips['id_tbl_nilai']; ?>').val())
            let inggris_s2 = parseInt($('#inggris_s2<?= $nilai_ips['id_tbl_nilai']; ?>').val())
            let inggris_s3 = parseInt($('#inggris_s3<?= $nilai_ips['id_tbl_nilai']; ?>').val())
            let inggris_s4 = parseInt($('#inggris_s4<?= $nilai_ips['id_tbl_nilai']; ?>').val())
            let inggris_s5 = parseInt($('#inggris_s5<?= $nilai_ips['id_tbl_nilai']; ?>').val())

            if (Number.isNaN(inggris_s1) || Number.isNaN(inggris_s2) || Number.isNaN(inggris_s3) || Number.isNaN(inggris_s4) || Number.isNaN(inggris_s5)) {
                alert("Masih ada nilai yang kosong")
            }

            hasil = hitung_nilaiUpdate(inggris_s1, inggris_s2, inggris_s3, inggris_s4, inggris_s5)

            if (Number.isNaN(hasil)) {
                hasil = null
            }
            $('#nilai_inggris<?= $nilai_ips['id_tbl_nilai']; ?>').val(hasil)

        });

        $('#hitungPpkn<?= $nilai_ips['id_tbl_nilai']; ?>').click(function(e) {
            let ppkn_s1 = parseInt($('#ppkn_s1<?= $nilai_ips['id_tbl_nilai']; ?>').val())
            let ppkn_s2 = parseInt($('#ppkn_s2<?= $nilai_ips['id_tbl_nilai']; ?>').val())
            let ppkn_s3 = parseInt($('#ppkn_s3<?= $nilai_ips['id_tbl_nilai']; ?>').val())
            let ppkn_s4 = parseInt($('#ppkn_s4<?= $nilai_ips['id_tbl_nilai']; ?>').val())
            let ppkn_s5 = parseInt($('#ppkn_s5<?= $nilai_ips['id_tbl_nilai']; ?>').val())

            if (Number.isNaN(ppkn_s1) || Number.isNaN(ppkn_s2) || Number.isNaN(ppkn_s3) || Number.isNaN(ppkn_s4) || Number.isNaN(ppkn_s5)) {
                alert("Masih ada nilai yang kosong")
            }

            hasil = hitung_nilaiUpdate(ppkn_s1, ppkn_s2, ppkn_s3, ppkn_s4, ppkn_s5)

            if (Number.isNaN(hasil)) {
                hasil = null
            }
            $('#nilai_ppkn<?= $nilai_ips['id_tbl_nilai']; ?>').val(hasil)

        });

        $('#hitungSosio<?= $nilai_ips['id_tbl_nilai']; ?>').click(function(e) {
            let sosio_s1 = parseInt($('#sosio_s1<?= $nilai_ips['id_tbl_nilai']; ?>').val())
            let sosio_s2 = parseInt($('#sosio_s2<?= $nilai_ips['id_tbl_nilai']; ?>').val())
            let sosio_s3 = parseInt($('#sosio_s3<?= $nilai_ips['id_tbl_nilai']; ?>').val())
            let sosio_s4 = parseInt($('#sosio_s4<?= $nilai_ips['id_tbl_nilai']; ?>').val())
            let sosio_s5 = parseInt($('#sosio_s5<?= $nilai_ips['id_tbl_nilai']; ?>').val())

            if (Number.isNaN(sosio_s1) || Number.isNaN(sosio_s2) || Number.isNaN(sosio_s3) || Number.isNaN(sosio_s4) || Number.isNaN(sosio_s5)) {
                alert("Masih ada nilai yang kosong")
            }

            hasil = hitung_nilaiUpdate(sosio_s1, sosio_s2, sosio_s3, sosio_s4, sosio_s5)

            if (Number.isNaN(hasil)) {
                hasil = null
            }
            $('#nilai_sosio<?= $nilai_ips['id_tbl_nilai']; ?>').val(hasil)

        });

        function hitung_nilaiUpdate(x1, x2, x3, x4, x5) {
            result = (x1 + x2 + x3 + x4 + x5) / 5;
            return result;
        };

    <?php endforeach; ?>
</script>