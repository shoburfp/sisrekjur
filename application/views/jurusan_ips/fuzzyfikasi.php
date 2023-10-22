<div class="container">
    <div class="row mt-4">
        <h3 class="mx-auto">Proses Fuzzyfikasi</h3>
    </div>

    <div class="row mt-3">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header mx-auto">
                    Fuzzyfikasi
                </div>

                <!-- Alert Sukses -->
                <div class="flashrekjursukses-data" data-flashdatarekjursukses="<?= $this->session->flashdata('flashrekjursukses'); ?>"></div>
                <?php if ($this->session->flashdata('flashrekjursukses')) : ?>
                <?php endif; ?>

                <!-- Alert Sukses -->
                <div class="flashrekjurgagal-data" data-flashdatarekjurgagal="<?= $this->session->flashdata('flashrekjurgagal') ?>"></div>
                <?php if ($this->session->flashdata('flashrekjurgagal')) : ?>
                <?php endif; ?>

                <div class="card-body">
                    <form action="<?= base_url('controllerjurips/proses'); ?>" method="post">
                        <div class="form-group">
                            <label for="nis">NIS</label>
                            <input list="data_nis" type="text" name="nis" class="form-control" id="nis" onchange="return autofill();">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="nama_lengkap" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nrEko">Nilai Rata-Rata Eko</label>
                            <input type="text" name="nrEko" class="form-control" id="nrEko" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nrMtk">Nilai Rata-Rata Matematika</label>
                            <input type="text" name="nrMtk" class="form-control" id="nrMtk" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nrInggris">Nilai Rata-Rata B. Inggris</label>
                            <input type="text" name="nrInggris" class="form-control" id="nrInggris" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nrPpkn">Nilai Rata-Rata PPKN</label>
                            <input type="text" name="nrPpkn" class="form-control" id="nrPpkn" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nrSosio">Nilai Rata-Rata SOSIOLOGI</label>
                            <input type="text" name="nrSosio" class="form-control" id="nrSosio" readonly>
                        </div>
                        <button type="submit" class="btn btn-primary float-right" style="margin-left: 5px;" name="btnProses" id="btnProses">
                            Proses
                        </button>
                        <button type="reset" class="btn btn-secondary float-right" name="btnProses" id="btnProses">
                            Reset
                        </button>
                    </form>
                </div>
            </div>

            <center>
                <p class="mt-3">
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseHasilFuzzy" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Lihat Hasil Fuzzyfikasi
                    </a>
                    <a class="btn btn-primary" data-toggle="modal" href="#modalRulesTsukamoto" role="button" data-target="#staticBackdrop">
                        Lihat Rules Tsukamoto
                    </a>
                </p>
            </center>

            <!-- Modal Rules Tsukamoto -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Rules Tsukamoto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Mata Pelajaran 1</th>
                                        <th scope="col">Mata Pelajaran 2</th>
                                        <th scope="col">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Kurang</td>
                                        <td>Kurang</td>
                                        <td>Sangat Buruk</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Kurang</td>
                                        <td>Cukup</td>
                                        <td>Cukup</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Kurang</td>
                                        <td>Baik</td>
                                        <td>Cukup</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Kurang</td>
                                        <td>Sangat Baik</td>
                                        <td>Baik</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Cukup</td>
                                        <td>Kurang</td>
                                        <td>Kurang</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Cukup</td>
                                        <td>Cukup</td>
                                        <td>Cukup</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Cukup</td>
                                        <td>Baik</td>
                                        <td>Baik</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Cukup</td>
                                        <td>Sangat Baik</td>
                                        <td>Baik</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Baik</td>
                                        <td>Buruk</td>
                                        <td>Cukup</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>Baik</td>
                                        <td>Cukup</td>
                                        <td>Cukup</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td>Baik</td>
                                        <td>Baik</td>
                                        <td>Baik</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td>Baik</td>
                                        <td>Sangat Baik</td>
                                        <td>Baik</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13</th>
                                        <td>Sangat Baik</td>
                                        <td>Buruk</td>
                                        <td>Cukup</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">14</th>
                                        <td>Sangat Baik</td>
                                        <td>Cukup</td>
                                        <td>Baik</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">15</th>
                                        <td>Sangat Baik</td>
                                        <td>Baik</td>
                                        <td>Baik</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">16</th>
                                        <td>Sangat Baik</td>
                                        <td>Sangat Baik</td>
                                        <td>Sangat Baik</td>
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


            <!-- Fuzzyfikasi -->
            <div class="collapse" id="collapseHasilFuzzy">
                <div class="card card-body">
                    <div class="form-row">
                        <div class="col">
                            <h6>Ekonomi kurang : <?php if (isset($ekonomi_kurang)) {
                                                        echo $ekonomi_kurang;
                                                    } ?></h6>
                            <h6>Ekonomi Cukup : <?php if (isset($ekonomi_cukup)) {
                                                    echo $ekonomi_cukup;
                                                } ?></h6>
                            <h6>Ekonomi Baik : <?php if (isset($ekonomi_baik)) {
                                                    echo $ekonomi_baik;
                                                } ?></h6>
                            <h6>Ekonomi Sangat Baik : <?php if (isset($ekonomi_sb)) {
                                                            echo $ekonomi_sb;
                                                        } ?></h6>
                        </div>
                        <div class="col">
                            <h6>Mtk kurang : <?php if (isset($mtk_kurang)) {
                                                    echo $mtk_kurang;
                                                } ?></h6>
                            <h6>Mtk Cukup : <?php if (isset($mtk_cukup)) {
                                                echo $mtk_cukup;
                                            } ?></h6>
                            <h6>Mtk Baik : <?php if (isset($mtk_baik)) {
                                                echo $mtk_baik;
                                            } ?></h6>
                            <h6>Mtk Sangat Baik : <?php if (isset($mtk_sb)) {
                                                        echo $mtk_sb;
                                                    } ?></h6>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col">
                            <h6>Inggris kurang : <?php if (isset($inggris_kurang)) {
                                                        echo $inggris_kurang;
                                                    } ?></h6>
                            <h6>Inggris Cukup : <?php if (isset($inggris_cukup)) {
                                                    echo $inggris_cukup;
                                                } ?></h6>
                            <h6>Inggris Baik : <?php if (isset($inggris_baik)) {
                                                    echo $inggris_baik;
                                                } ?></h6>
                            <h6>Inggris Sangat Baik : <?php if (isset($inggris_sb)) {
                                                            echo $inggris_sb;
                                                        } ?></h6>
                        </div>
                        <div class="col">
                            <h6>PPKN kurang : <?php if (isset($ppkn_kurang)) {
                                                    echo $ppkn_kurang;
                                                } ?></h6>
                            <h6>PPKN Cukup : <?php if (isset($ppkn_cukup)) {
                                                    echo $ppkn_cukup;
                                                } ?></h6>
                            <h6>PPKN Baik : <?php if (isset($ppkn_baik)) {
                                                echo $ppkn_baik;
                                            } ?></h6>
                            <h6>PPKN Sangat Baik : <?php if (isset($ppkn_sb)) {
                                                        echo $ppkn_sb;
                                                    } ?></h6>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row mx-auto">
                        <div class="col">
                            <h6>Sosiologi kurang : <?php if (isset($sosio_kurang)) {
                                                        echo $sosio_kurang;
                                                    } ?></h6>
                            <h6>Sosiologi Cukup : <?php if (isset($sosio_cukup)) {
                                                        echo $sosio_cukup;
                                                    } ?></h6>
                            <h6>Sosiologi Baik : <?php if (isset($sosio_baik)) {
                                                        echo $sosio_baik;
                                                    } ?></h6>
                            <h6>Sosiologi Sangat Baik : <?php if (isset($sosio_sb)) {
                                                            echo $sosio_sb;
                                                        } ?></h6>
                        </div>
                    </div>
                </div>
            </div>

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Akuntansi</button>
                    <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Psikologi</button>
                    <button class="nav-link" id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Ilmu Politik</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr style="background-color: yellow;">
                                <td colspan="7" align="center">Akuntansi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">No</th>
                                <th scope="row">Ekonomi</th>
                                <th scope="row">MTK</th>
                                <th scope="row">αp</th>
                                <th scope="row">Z Rumus</th>
                                <th scope="row">z hasil</th>
                                <th scope="row">αp * z</th>
                            </tr>
                            <tr>
                                <td>1</th>
                                <td><?php if (isset($ekonomi_kurang)) {
                                        echo $ekonomi_kurang;
                                    } ?></td>
                                <td><?php if (isset($mtk_kurang)) {
                                        echo $mtk_kurang;
                                    } ?></td>
                                <td><?php if (isset($akuntansiR1)) {
                                        echo $akuntansiR1;
                                    } ?></td>
                                <td><?php if (isset($zrumusR1A)) {
                                        echo $zrumusR1A;
                                    } ?></td>
                                <td><?php if (isset($zhasilR1A)) {
                                        echo $zhasilR1A;
                                    } ?></td>
                                <td><?php if (isset($pzR1A)) {
                                        echo $pzR1A;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>2</th>
                                <td><?php if (isset($ekonomi_kurang)) {
                                        echo $ekonomi_kurang;
                                    } ?></td>
                                <td><?php if (isset($mtk_cukup)) {
                                        echo $mtk_cukup;
                                    } ?></td>
                                <td><?php if (isset($akuntansiR2)) {
                                        echo $akuntansiR2;
                                    } ?></td>
                                <td><?php if (isset($zrumusR2A)) {
                                        echo $zrumusR2A;
                                    } ?></td>
                                <td><?php if (isset($zhasilR2A)) {
                                        echo $zhasilR2A;
                                    } ?></td>
                                <td><?php if (isset($pzR2A)) {
                                        echo $pzR2A;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>3</th>
                                <td><?php if (isset($ekonomi_kurang)) {
                                        echo $ekonomi_kurang;
                                    } ?></td>
                                <td><?php if (isset($mtk_baik)) {
                                        echo $mtk_baik;
                                    } ?></td>
                                <td><?php if (isset($akuntansiR3)) {
                                        echo $akuntansiR3;
                                    } ?></td>
                                <td><?php if (isset($zrumusR3A)) {
                                        echo $zrumusR3A;
                                    } ?></td>
                                <td><?php if (isset($zhasilR3A)) {
                                        echo $zhasilR3A;
                                    } ?></td>
                                <td><?php if (isset($pzR3A)) {
                                        echo $pzR3A;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>4</th>
                                <td><?php if (isset($ekonomi_kurang)) {
                                        echo $ekonomi_kurang;
                                    } ?></td>
                                <td><?php if (isset($mtk_sb)) {
                                        echo $mtk_sb;
                                    } ?></td>
                                <td><?php if (isset($akuntansiR4)) {
                                        echo $akuntansiR4;
                                    } ?></td>
                                <td><?php if (isset($zrumusR4A)) {
                                        echo $zrumusR4A;
                                    } ?></td>
                                <td><?php if (isset($zhasilR4A)) {
                                        echo $zhasilR4A;
                                    } ?></td>
                                <td><?php if (isset($pzR4A)) {
                                        echo $pzR4A;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>5</th>
                                <td><?php if (isset($ekonomi_cukup)) {
                                        echo $ekonomi_cukup;
                                    } ?></td>
                                <td><?php if (isset($mtk_kurang)) {
                                        echo $mtk_kurang;
                                    } ?></td>
                                <td><?php if (isset($akuntansiR5)) {
                                        echo $akuntansiR5;
                                    } ?></td>
                                <td><?php if (isset($zrumusR5A)) {
                                        echo $zrumusR5A;
                                    } ?></td>
                                <td><?php if (isset($zhasilR5A)) {
                                        echo $zhasilR5A;
                                    } ?></td>
                                <td><?php if (isset($pzR5A)) {
                                        echo $pzR5A;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>6</th>
                                <td><?php if (isset($ekonomi_cukup)) {
                                        echo $ekonomi_cukup;
                                    } ?></td>
                                <td><?php if (isset($mtk_cukup)) {
                                        echo $mtk_cukup;
                                    } ?></td>
                                <td><?php if (isset($AkuntansiR6)) {
                                        echo $AkuntansiR6;
                                    } ?></td>
                                <td><?php if (isset($zrumusR6A)) {
                                        echo $zrumusR6A;
                                    } ?></td>
                                <td><?php if (isset($zhasilR6A)) {
                                        echo $zhasilR6A;
                                    } ?></td>
                                <td><?php if (isset($pzR6A)) {
                                        echo $pzR6A;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>7</th>
                                <td><?php if (isset($ekonomi_cukup)) {
                                        echo $ekonomi_cukup;
                                    } ?></td>
                                <td><?php if (isset($mtk_baik)) {
                                        echo $mtk_baik;
                                    } ?></td>
                                <td><?php if (isset($akuntansiR7)) {
                                        echo $akuntansiR7;
                                    } ?></td>
                                <td><?php if (isset($zrumusR7A)) {
                                        echo $zrumusR7A;
                                    } ?></td>
                                <td><?php if (isset($zhasilR7A)) {
                                        echo $zhasilR7A;
                                    } ?></td>
                                <td><?php if (isset($pzR7A)) {
                                        echo $pzR7A;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>8</th>
                                <td><?php if (isset($ekonomi_cukup)) {
                                        echo $ekonomi_cukup;
                                    } ?></td>
                                <td><?php if (isset($mtk_sb)) {
                                        echo $mtk_sb;
                                    } ?></td>
                                <td><?php if (isset($akuntansiR8)) {
                                        echo $akuntansiR8;
                                    } ?></td>
                                <td><?php if (isset($zrumusR8A)) {
                                        echo $zrumusR8A;
                                    } ?></td>
                                <td><?php if (isset($zhasilR8A)) {
                                        echo $zhasilR8A;
                                    } ?></td>
                                <td><?php if (isset($pzR8A)) {
                                        echo $pzR8A;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>9</th>
                                <td><?php if (isset($ekonomi_baik)) {
                                        echo $ekonomi_baik;
                                    } ?></td>
                                <td><?php if (isset($mtk_kurang)) {
                                        echo $mtk_kurang;
                                    } ?></td>
                                <td><?php if (isset($akuntansiR9)) {
                                        echo $akuntansiR9;
                                    } ?></td>
                                <td><?php if (isset($zrumusR9A)) {
                                        echo $zrumusR9A;
                                    } ?></td>
                                <td><?php if (isset($zhasilR9A)) {
                                        echo $zhasilR9A;
                                    } ?></td>
                                <td><?php if (isset($pzR9A)) {
                                        echo $pzR9A;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>10</th>
                                <td><?php if (isset($ekonomi_baik)) {
                                        echo $ekonomi_baik;
                                    } ?></td>
                                <td><?php if (isset($mtk_cukup)) {
                                        echo $mtk_cukup;
                                    } ?></td>
                                <td><?php if (isset($akuntansiR10)) {
                                        echo $akuntansiR10;
                                    } ?></td>
                                <td><?php if (isset($zrumusR10A)) {
                                        echo $zrumusR10A;
                                    } ?></td>
                                <td><?php if (isset($zhasilR10A)) {
                                        echo $zhasilR10A;
                                    } ?></td>
                                <td><?php if (isset($pzR10A)) {
                                        echo $pzR10A;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>11</th>
                                <td><?php if (isset($ekonomi_baik)) {
                                        echo $ekonomi_baik;
                                    } ?></td>
                                <td><?php if (isset($mtk_baik)) {
                                        echo $mtk_baik;
                                    } ?></td>
                                <td><?php if (isset($akuntansiR11)) {
                                        echo $akuntansiR11;
                                    } ?></td>
                                <td><?php if (isset($zrumusR11A)) {
                                        echo $zrumusR11A;
                                    } ?></td>
                                <td><?php if (isset($zhasilR11A)) {
                                        echo $zhasilR11A;
                                    } ?></td>
                                <td><?php if (isset($pzR11A)) {
                                        echo $pzR11A;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>12</th>
                                <td><?php if (isset($ekonomi_baik)) {
                                        echo $ekonomi_baik;
                                    } ?></td>
                                <td><?php if (isset($mtk_sb)) {
                                        echo $mtk_sb;
                                    } ?></td>
                                <td><?php if (isset($akuntansiR12)) {
                                        echo $akuntansiR12;
                                    } ?></td>
                                <td><?php if (isset($zrumusR12A)) {
                                        echo $zrumusR12A;
                                    } ?></td>
                                <td><?php if (isset($zhasilR12A)) {
                                        echo $zhasilR12A;
                                    } ?></td>
                                <td><?php if (isset($pzR12A)) {
                                        echo $pzR12A;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>13</th>
                                <td><?php if (isset($ekonomi_sb)) {
                                        echo $ekonomi_sb;
                                    } ?></td>
                                <td><?php if (isset($mtk_kurang)) {
                                        echo $mtk_kurang;
                                    } ?></td>
                                <td><?php if (isset($akuntansiR13)) {
                                        echo $akuntansiR13;
                                    } ?></td>
                                <td><?php if (isset($zrumusR13A)) {
                                        echo $zrumusR13A;
                                    } ?></td>
                                <td><?php if (isset($zhasilR13A)) {
                                        echo $zhasilR13A;
                                    } ?></td>
                                <td><?php if (isset($pzR13A)) {
                                        echo $pzR13A;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>14</th>
                                <td><?php if (isset($ekonomi_sb)) {
                                        echo $ekonomi_sb;
                                    } ?></td>
                                <td><?php if (isset($mtk_cukup)) {
                                        echo $mtk_cukup;
                                    } ?></td>
                                <td><?php if (isset($akuntansiR14)) {
                                        echo $akuntansiR14;
                                    } ?></td>
                                <td><?php if (isset($zrumusR14A)) {
                                        echo $zrumusR14A;
                                    } ?></td>
                                <td><?php if (isset($zhasilR14A)) {
                                        echo $zhasilR14A;
                                    } ?></td>
                                <td><?php if (isset($pzR14A)) {
                                        echo $pzR14A;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>15</th>
                                <td><?php if (isset($ekonomi_sb)) {
                                        echo $ekonomi_sb;
                                    } ?></td>
                                <td><?php if (isset($mtk_baik)) {
                                        echo $mtk_baik;
                                    } ?></td>
                                <td><?php if (isset($akuntansiR15)) {
                                        echo $akuntansiR15;
                                    } ?></td>
                                <td><?php if (isset($zrumusR15A)) {
                                        echo $zrumusR15A;
                                    } ?></td>
                                <td><?php if (isset($zhasilR15A)) {
                                        echo $zhasilR15A;
                                    } ?></td>
                                <td><?php if (isset($pzR15A)) {
                                        echo $pzR15A;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>16</th>
                                <td><?php if (isset($ekonomi_sb)) {
                                        echo $ekonomi_sb;
                                    } ?></td>
                                <td><?php if (isset($mtk_sb)) {
                                        echo $mtk_sb;
                                    } ?></td>
                                <td><?php if (isset($akuntansiR16)) {
                                        echo $akuntansiR16;
                                    } ?></td>
                                <td><?php if (isset($zrumusR16A)) {
                                        echo $zrumusR16A;
                                    } ?></td>
                                <td><?php if (isset($zhasilR16A)) {
                                        echo $zhasilR16A;
                                    } ?></td>
                                <td><?php if (isset($pzR16A)) {
                                        echo $pzR16A;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td colspan="3">TOTAL</th>
                                <td><?php if (isset($sumPA)) {
                                        echo $sumPA;
                                    } ?></td>
                                <td></td>
                                <td></td>
                                <td><?php if (isset($sumPZA)) {
                                        echo $sumPZA;
                                    } ?></td>
                            </tr>
                            <tr style="background-color: yellow;">
                                <td colspan="7">Nilai Z / Rata-Rata Berbobot = <?php if (isset($nilaizAkuntansi)) {
                                                                                    echo $nilaizAkuntansi;
                                                                                } ?></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr style="background-color: yellow;">
                                <td colspan="7" align="center">Psikologi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">No</th>
                                <th scope="row">SOSIOLOGI</th>
                                <th scope="row">B. Inggris</th>
                                <th scope="row">αp</th>
                                <th scope="row">Z Rumus</th>
                                <th scope="row">z hasil</th>
                                <th scope="row">αp * z</th>
                            </tr>
                            <tr>
                                <td>1</th>
                                <td><?php if (isset($sosio_kurang)) {
                                        echo $sosio_kurang;
                                    } ?></td>
                                <td><?php if (isset($inggris_kurang)) {
                                        echo $inggris_kurang;
                                    } ?></td>
                                <td><?php if (isset($PsikologiR1)) {
                                        echo $PsikologiR1;
                                    } ?></td>
                                <td><?php if (isset($zrumusR1P)) {
                                        echo $zrumusR1P;
                                    } ?></td>
                                <td><?php if (isset($zhasilR1P)) {
                                        echo $zhasilR1P;
                                    } ?></td>
                                <td><?php if (isset($pzR1P)) {
                                        echo $pzR1P;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>2</th>
                                <td><?php if (isset($sosio_kurang)) {
                                        echo $sosio_kurang;
                                    } ?></td>
                                <td><?php if (isset($inggris_cukup)) {
                                        echo $inggris_cukup;
                                    } ?></td>
                                <td><?php if (isset($PsikologiR2)) {
                                        echo $PsikologiR2;
                                    } ?></td>
                                <td><?php if (isset($zrumusR2P)) {
                                        echo $zrumusR2P;
                                    } ?></td>
                                <td><?php if (isset($zhasilR2P)) {
                                        echo $zhasilR2P;
                                    } ?></td>
                                <td><?php if (isset($pzR2P)) {
                                        echo $pzR2P;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>3</th>
                                <td><?php if (isset($sosio_kurang)) {
                                        echo $sosio_kurang;
                                    } ?></td>
                                <td><?php if (isset($inggris_baik)) {
                                        echo $inggris_baik;
                                    } ?></td>
                                <td><?php if (isset($PsikologiR3)) {
                                        echo $PsikologiR3;
                                    } ?></td>
                                <td><?php if (isset($zrumusR3P)) {
                                        echo $zrumusR3P;
                                    } ?></td>
                                <td><?php if (isset($zhasilR3P)) {
                                        echo $zhasilR3P;
                                    } ?></td>
                                <td><?php if (isset($pzR3P)) {
                                        echo $pzR3P;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>4</th>
                                <td><?php if (isset($sosio_kurang)) {
                                        echo $sosio_kurang;
                                    } ?></td>
                                <td><?php if (isset($inggris_sb)) {
                                        echo $inggris_sb;
                                    } ?></td>
                                <td><?php if (isset($PsikologiR4)) {
                                        echo $PsikologiR4;
                                    } ?></td>
                                <td><?php if (isset($zrumusR4P)) {
                                        echo $zrumusR4P;
                                    } ?></td>
                                <td><?php if (isset($zhasilR4P)) {
                                        echo $zhasilR4P;
                                    } ?></td>
                                <td><?php if (isset($pzR4P)) {
                                        echo $pzR4P;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>5</th>
                                <td><?php if (isset($sosio_cukup)) {
                                        echo $sosio_cukup;
                                    } ?></td>
                                <td><?php if (isset($inggris_kurang)) {
                                        echo $inggris_kurang;
                                    } ?></td>
                                <td><?php if (isset($PsikologiR5)) {
                                        echo $PsikologiR5;
                                    } ?></td>
                                <td><?php if (isset($zrumusR5P)) {
                                        echo $zrumusR5P;
                                    } ?></td>
                                <td><?php if (isset($zhasilR5P)) {
                                        echo $zhasilR5P;
                                    } ?></td>
                                <td><?php if (isset($pzR5P)) {
                                        echo $pzR5P;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>6</th>
                                <td><?php if (isset($sosio_cukup)) {
                                        echo $sosio_cukup;
                                    } ?></td>
                                <td><?php if (isset($inggris_cukup)) {
                                        echo $inggris_cukup;
                                    } ?></td>
                                <td><?php if (isset($PsikologiR6)) {
                                        echo $PsikologiR6;
                                    } ?></td>
                                <td><?php if (isset($zrumusR6P)) {
                                        echo $zrumusR6P;
                                    } ?></td>
                                <td><?php if (isset($zhasilR6P)) {
                                        echo $zhasilR6P;
                                    } ?></td>
                                <td><?php if (isset($pzR6P)) {
                                        echo $pzR6P;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>7</th>
                                <td><?php if (isset($sosio_cukup)) {
                                        echo $sosio_cukup;
                                    } ?></td>
                                <td><?php if (isset($inggris_baik)) {
                                        echo $inggris_baik;
                                    } ?></td>
                                <td><?php if (isset($PsikologiR7)) {
                                        echo $PsikologiR7;
                                    } ?></td>
                                <td><?php if (isset($zrumusR7P)) {
                                        echo $zrumusR7P;
                                    } ?></td>
                                <td><?php if (isset($zhasilR7P)) {
                                        echo $zhasilR7P;
                                    } ?></td>
                                <td><?php if (isset($pzR7P)) {
                                        echo $pzR7P;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>8</th>
                                <td><?php if (isset($sosio_cukup)) {
                                        echo $sosio_cukup;
                                    } ?></td>
                                <td><?php if (isset($inggris_sb)) {
                                        echo $inggris_sb;
                                    } ?></td>
                                <td><?php if (isset($PsikologiR8)) {
                                        echo $PsikologiR8;
                                    } ?></td>
                                <td><?php if (isset($zrumusR8P)) {
                                        echo $zrumusR8P;
                                    } ?></td>
                                <td><?php if (isset($zhasilR8P)) {
                                        echo $zhasilR8P;
                                    } ?></td>
                                <td><?php if (isset($pzR8P)) {
                                        echo $pzR8P;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>9</th>
                                <td><?php if (isset($sosio_baik)) {
                                        echo $sosio_baik;
                                    } ?></td>
                                <td><?php if (isset($inggris_kurang)) {
                                        echo $inggris_kurang;
                                    } ?></td>
                                <td><?php if (isset($PsikologiR9)) {
                                        echo $PsikologiR9;
                                    } ?></td>
                                <td><?php if (isset($zrumusR9P)) {
                                        echo $zrumusR9P;
                                    } ?></td>
                                <td><?php if (isset($zhasilR9P)) {
                                        echo $zhasilR9P;
                                    } ?></td>
                                <td><?php if (isset($pzR9P)) {
                                        echo $pzR9P;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>10</th>
                                <td><?php if (isset($sosio_baik)) {
                                        echo $sosio_baik;
                                    } ?></td>
                                <td><?php if (isset($inggris_cukup)) {
                                        echo $inggris_cukup;
                                    } ?></td>
                                <td><?php if (isset($PsikologiR10)) {
                                        echo $PsikologiR10;
                                    } ?></td>
                                <td><?php if (isset($zrumusR10P)) {
                                        echo $zrumusR10P;
                                    } ?></td>
                                <td><?php if (isset($zhasilR10P)) {
                                        echo $zhasilR10P;
                                    } ?></td>
                                <td><?php if (isset($pzR10P)) {
                                        echo $pzR10P;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>11</th>
                                <td><?php if (isset($sosio_baik)) {
                                        echo $sosio_baik;
                                    } ?></td>
                                <td><?php if (isset($inggris_baik)) {
                                        echo $inggris_baik;
                                    } ?></td>
                                <td><?php if (isset($PsikologiR11)) {
                                        echo $PsikologiR11;
                                    } ?></td>
                                <td><?php if (isset($zrumusR11P)) {
                                        echo $zrumusR11P;
                                    } ?></td>
                                <td><?php if (isset($zhasilR11P)) {
                                        echo $zhasilR11P;
                                    } ?></td>
                                <td><?php if (isset($pzR11P)) {
                                        echo $pzR11P;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>12</th>
                                <td><?php if (isset($sosio_baik)) {
                                        echo $sosio_baik;
                                    } ?></td>
                                <td><?php if (isset($inggris_sb)) {
                                        echo $inggris_sb;
                                    } ?></td>
                                <td><?php if (isset($PsikologiR12)) {
                                        echo $PsikologiR12;
                                    } ?></td>
                                <td><?php if (isset($zrumusR12P)) {
                                        echo $zrumusR12P;
                                    } ?></td>
                                <td><?php if (isset($zhasilR12P)) {
                                        echo $zhasilR12P;
                                    } ?></td>
                                <td><?php if (isset($pzR12P)) {
                                        echo $pzR12P;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>13</th>
                                <td><?php if (isset($sosio_sb)) {
                                        echo $sosio_sb;
                                    } ?></td>
                                <td><?php if (isset($inggris_kurang)) {
                                        echo $inggris_kurang;
                                    } ?></td>
                                <td><?php if (isset($PsikologiR13)) {
                                        echo $PsikologiR13;
                                    } ?></td>
                                <td><?php if (isset($zrumusR13P)) {
                                        echo $zrumusR13P;
                                    } ?></td>
                                <td><?php if (isset($zhasilR13P)) {
                                        echo $zhasilR13P;
                                    } ?></td>
                                <td><?php if (isset($pzR13P)) {
                                        echo $pzR13P;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>14</th>
                                <td><?php if (isset($sosio_sb)) {
                                        echo $sosio_sb;
                                    } ?></td>
                                <td><?php if (isset($inggris_cukup)) {
                                        echo $inggris_cukup;
                                    } ?></td>
                                <td><?php if (isset($PsikologiR14)) {
                                        echo $PsikologiR14;
                                    } ?></td>
                                <td><?php if (isset($zrumusR14P)) {
                                        echo $zrumusR14P;
                                    } ?></td>
                                <td><?php if (isset($zhasilR14P)) {
                                        echo $zhasilR14P;
                                    } ?></td>
                                <td><?php if (isset($pzR14P)) {
                                        echo $pzR14P;
                                    } ?></td>
                            <tr>
                                <td>15</th>
                                <td><?php if (isset($sosio_sb)) {
                                        echo $sosio_sb;
                                    } ?></td>
                                <td><?php if (isset($inggris_baik)) {
                                        echo $inggris_baik;
                                    } ?></td>
                                <td><?php if (isset($PsikologiR15)) {
                                        echo $PsikologiR15;
                                    } ?></td>
                                <td><?php if (isset($zrumusR15P)) {
                                        echo $zrumusR15P;
                                    } ?></td>
                                <td><?php if (isset($zhasilR15P)) {
                                        echo $zhasilR15P;
                                    } ?></td>
                                <td><?php if (isset($pzR15P)) {
                                        echo $pzR15P;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>16</th>
                                <td><?php if (isset($sosio_sb)) {
                                        echo $sosio_sb;
                                    } ?></td>
                                <td><?php if (isset($inggris_sb)) {
                                        echo $inggris_sb;
                                    } ?></td>
                                <td><?php if (isset($PsikologiR16)) {
                                        echo $PsikologiR16;
                                    } ?></td>
                                <td><?php if (isset($zrumusR16P)) {
                                        echo $zrumusR16P;
                                    } ?></td>
                                <td><?php if (isset($zhasilR16P)) {
                                        echo $zhasilR16P;
                                    } ?></td>
                                <td><?php if (isset($pzR16P)) {
                                        echo $pzR16P;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td colspan="3">TOTAL</th>
                                <td><?php if (isset($sumPP)) {
                                        echo $sumPP;
                                    } ?></td>
                                <td></td>
                                <td></td>
                                <td><?php if (isset($sumPZP)) {
                                        echo $sumPZP;
                                    } ?></td>
                            </tr>
                            <tr style="background-color: yellow;">
                                <td colspan="7">Nilai Z / Rata-Rata Berbobot = <?php if (isset($nilaizPsikologi)) {
                                                                                    echo $nilaizPsikologi;
                                                                                } ?></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr style="background-color: yellow;">
                                <td colspan="7" align="center">ILMU POLITIK</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">No</th>
                                <th scope="row">PPKN</th>
                                <th scope="row">SOSIOLOGI</th>
                                <th scope="row">αp</th>
                                <th scope="row">Z Rumus</th>
                                <th scope="row">z hasil</th>
                                <th scope="row">αp * z</th>
                            </tr>
                            <tr>
                                <td>1</th>
                                <td><?php if (isset($ppkn_kurang)) {
                                        echo $ppkn_kurang;
                                    } ?></td>
                                <td><?php if (isset($sosio_kurang)) {
                                        echo $sosio_kurang;
                                    } ?></td>
                                <td><?php if (isset($ilpolR1)) {
                                        echo $ilpolR1;
                                    } ?></td>
                                <td><?php if (isset($zrumusR1IP)) {
                                        echo $zrumusR1IP;
                                    } ?></td>
                                <td><?php if (isset($zhasilR1IP)) {
                                        echo $zhasilR1IP;
                                    } ?></td>
                                <td><?php if (isset($pzR1IP)) {
                                        echo $pzR1IP;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>2</th>
                                <td><?php if (isset($ppkn_kurang)) {
                                        echo $ppkn_kurang;
                                    } ?></td>
                                <td><?php if (isset($sosio_cukup)) {
                                        echo $sosio_cukup;
                                    } ?></td>
                                <td><?php if (isset($ilpolR2)) {
                                        echo $ilpolR2;
                                    } ?></td>
                                <td><?php if (isset($zrumusR2IP)) {
                                        echo $zrumusR2IP;
                                    } ?></td>
                                <td><?php if (isset($zhasilR2IP)) {
                                        echo $zhasilR2IP;
                                    } ?></td>
                                <td><?php if (isset($pzR2IP)) {
                                        echo $pzR2IP;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>3</th>
                                <td><?php if (isset($ppkn_kurang)) {
                                        echo $ppkn_kurang;
                                    } ?></td>
                                <td><?php if (isset($sosio_baik)) {
                                        echo $sosio_baik;
                                    } ?></td>
                                <td><?php if (isset($ilpolR3)) {
                                        echo $ilpolR3;
                                    } ?></td>
                                <td><?php if (isset($zrumusR3IP)) {
                                        echo $zrumusR3IP;
                                    } ?></td>
                                <td><?php if (isset($zhasilR3IP)) {
                                        echo $zhasilR3IP;
                                    } ?></td>
                                <td><?php if (isset($pzR3IP)) {
                                        echo $pzR3IP;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>4</th>
                                <td><?php if (isset($ppkn_kurang)) {
                                        echo $ppkn_kurang;
                                    } ?></td>
                                <td><?php if (isset($sosio_sb)) {
                                        echo $sosio_sb;
                                    } ?></td>
                                <td><?php if (isset($ilpolR4)) {
                                        echo $ilpolR4;
                                    } ?></td>
                                <td><?php if (isset($zrumusR4IP)) {
                                        echo $zrumusR4IP;
                                    } ?></td>
                                <td><?php if (isset($zhasilR4IP)) {
                                        echo $zhasilR4IP;
                                    } ?></td>
                                <td><?php if (isset($pzR4IP)) {
                                        echo $pzR4IP;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>5</th>
                                <td><?php if (isset($ppkn_cukup)) {
                                        echo $ppkn_cukup;
                                    } ?></td>
                                <td><?php if (isset($sosio_kurang)) {
                                        echo $sosio_kurang;
                                    } ?></td>
                                <td><?php if (isset($ilpolR5)) {
                                        echo $ilpolR5;
                                    } ?></td>
                                <td><?php if (isset($zrumusR5IP)) {
                                        echo $zrumusR5IP;
                                    } ?></td>
                                <td><?php if (isset($zhasilR5IP)) {
                                        echo $zhasilR5IP;
                                    } ?></td>
                                <td><?php if (isset($pzR5IP)) {
                                        echo $pzR5IP;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>6</th>
                                <td><?php if (isset($ppkn_cukup)) {
                                        echo $ppkn_cukup;
                                    } ?></td>
                                <td><?php if (isset($sosio_cukup)) {
                                        echo $sosio_cukup;
                                    } ?></td>
                                <td><?php if (isset($ilpolR6)) {
                                        echo $ilpolR6;
                                    } ?></td>
                                <td><?php if (isset($zrumusR6IP)) {
                                        echo $zrumusR6IP;
                                    } ?></td>
                                <td><?php if (isset($zhasilR6IP)) {
                                        echo $zhasilR6IP;
                                    } ?></td>
                                <td><?php if (isset($pzR6IP)) {
                                        echo $pzR6IP;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>7</th>
                                <td><?php if (isset($ppkn_cukup)) {
                                        echo $ppkn_cukup;
                                    } ?></td>
                                <td><?php if (isset($sosio_baik)) {
                                        echo $sosio_baik;
                                    } ?></td>
                                <td><?php if (isset($ilpolR7)) {
                                        echo $ilpolR7;
                                    } ?></td>
                                <td><?php if (isset($zrumusR7IP)) {
                                        echo $zrumusR7IP;
                                    } ?></td>
                                <td><?php if (isset($zhasilR7IP)) {
                                        echo $zhasilR7IP;
                                    } ?></td>
                                <td><?php if (isset($pzR7IP)) {
                                        echo $pzR7IP;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>8</th>
                                <td><?php if (isset($ppkn_cukup)) {
                                        echo $ppkn_cukup;
                                    } ?></td>
                                <td><?php if (isset($sosio_sb)) {
                                        echo $sosio_sb;
                                    } ?></td>
                                <td><?php if (isset($ilpolR8)) {
                                        echo $ilpolR8;
                                    } ?></td>
                                <td><?php if (isset($zrumusR8IP)) {
                                        echo $zrumusR8IP;
                                    } ?></td>
                                <td><?php if (isset($zhasilR8IP)) {
                                        echo $zhasilR8IP;
                                    } ?></td>
                                <td><?php if (isset($pzR8IP)) {
                                        echo $pzR8IP;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>9</th>
                                <td><?php if (isset($ppkn_baik)) {
                                        echo $ppkn_baik;
                                    } ?></td>
                                <td><?php if (isset($sosio_kurang)) {
                                        echo $sosio_kurang;
                                    } ?></td>
                                <td><?php if (isset($ilpolR9)) {
                                        echo $ilpolR9;
                                    } ?></td>
                                <td><?php if (isset($zrumusR9IP)) {
                                        echo $zrumusR9IP;
                                    } ?></td>
                                <td><?php if (isset($zhasilR9IP)) {
                                        echo $zhasilR9IP;
                                    } ?></td>
                                <td><?php if (isset($pzR9IP)) {
                                        echo $pzR9IP;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>10</th>
                                <td><?php if (isset($ppkn_baik)) {
                                        echo $ppkn_baik;
                                    } ?></td>
                                <td><?php if (isset($sosio_cukup)) {
                                        echo $sosio_cukup;
                                    } ?></td>
                                <td><?php if (isset($ilpolR10)) {
                                        echo $ilpolR10;
                                    } ?></td>
                                <td><?php if (isset($zrumusR10IP)) {
                                        echo $zrumusR10IP;
                                    } ?></td>
                                <td><?php if (isset($zhasilR10IP)) {
                                        echo $zhasilR10IP;
                                    } ?></td>
                                <td><?php if (isset($pzR10IP)) {
                                        echo $pzR10IP;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>11</th>
                                <td><?php if (isset($ppkn_baik)) {
                                        echo $ppkn_baik;
                                    } ?></td>
                                <td><?php if (isset($sosio_baik)) {
                                        echo $sosio_baik;
                                    } ?></td>
                                <td><?php if (isset($ilpolR11)) {
                                        echo $ilpolR11;
                                    } ?></td>
                                <td><?php if (isset($zrumusR11IP)) {
                                        echo $zrumusR11IP;
                                    } ?></td>
                                <td><?php if (isset($zhasilR11IP)) {
                                        echo $zhasilR11IP;
                                    } ?></td>
                                <td><?php if (isset($pzR11IP)) {
                                        echo $pzR11IP;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>12</th>
                                <td><?php if (isset($ppkn_baik)) {
                                        echo $ppkn_baik;
                                    } ?></td>
                                <td><?php if (isset($sosio_sb)) {
                                        echo $sosio_sb;
                                    } ?></td>
                                <td><?php if (isset($ilpolR12)) {
                                        echo $ilpolR12;
                                    } ?></td>
                                <td><?php if (isset($zrumusR12IP)) {
                                        echo $zrumusR12IP;
                                    } ?></td>
                                <td><?php if (isset($zhasilR12IP)) {
                                        echo $zhasilR12IP;
                                    } ?></td>
                                <td><?php if (isset($pzR12IP)) {
                                        echo $pzR12IP;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>13</th>
                                <td><?php if (isset($ppkn_sb)) {
                                        echo $ppkn_sb;
                                    } ?></td>
                                <td><?php if (isset($sosio_kurang)) {
                                        echo $sosio_kurang;
                                    } ?></td>
                                <td><?php if (isset($ilpolR13)) {
                                        echo $ilpolR13;
                                    } ?></td>
                                <td><?php if (isset($zrumusR13IP)) {
                                        echo $zrumusR13IP;
                                    } ?></td>
                                <td><?php if (isset($zhasilR13IP)) {
                                        echo $zhasilR13IP;
                                    } ?></td>
                                <td><?php if (isset($pzR13IP)) {
                                        echo $pzR13IP;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>14</th>
                                <td><?php if (isset($ppkn_sb)) {
                                        echo $ppkn_sb;
                                    } ?></td>
                                <td><?php if (isset($sosio_cukup)) {
                                        echo $sosio_cukup;
                                    } ?></td>
                                <td><?php if (isset($ilpolR14)) {
                                        echo $ilpolR14;
                                    } ?></td>
                                <td><?php if (isset($zrumusR14IP)) {
                                        echo $zrumusR14IP;
                                    } ?></td>
                                <td><?php if (isset($zhasilR14IP)) {
                                        echo $zhasilR14IP;
                                    } ?></td>
                                <td><?php if (isset($pzR14IP)) {
                                        echo $pzR14IP;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>15</th>
                                <td><?php if (isset($ppkn_sb)) {
                                        echo $ppkn_sb;
                                    } ?></td>
                                <td><?php if (isset($sosio_baik)) {
                                        echo $sosio_baik;
                                    } ?></td>
                                <td><?php if (isset($ilpolR15)) {
                                        echo $ilpolR15;
                                    } ?></td>
                                <td><?php if (isset($zrumusR15IP)) {
                                        echo $zrumusR15IP;
                                    } ?></td>
                                <td><?php if (isset($zhasilR15IP)) {
                                        echo $zhasilR15IP;
                                    } ?></td>
                                <td><?php if (isset($pzR15IP)) {
                                        echo $pzR15IP;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>16</th>
                                <td><?php if (isset($ppkn_sb)) {
                                        echo $ppkn_sb;
                                    } ?></td>
                                <td><?php if (isset($sosio_sb)) {
                                        echo $sosio_sb;
                                    } ?></td>
                                <td><?php if (isset($ilpolR16)) {
                                        echo $ilpolR16;
                                    } ?></td>
                                <td><?php if (isset($zrumusR16IP)) {
                                        echo $zrumusR16IP;
                                    } ?></td>
                                <td><?php if (isset($zhasilR16IP)) {
                                        echo $zhasilR16IP;
                                    } ?></td>
                                <td><?php if (isset($pzR16IP)) {
                                        echo $pzR16IP;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td colspan="3">TOTAL</th>
                                <td><?php if (isset($sumPIP)) {
                                        echo $sumPIP;
                                    } ?></td>
                                <td></td>
                                <td></td>
                                <td><?php if (isset($sumPZIP)) {
                                        echo $sumPZIP;
                                    } ?></td>
                            </tr>
                            <tr style="background-color: yellow;">
                                <td colspan="7">Nilai Z / Rata-Rata Berbobot = <?php if (isset($nilaizIlmuPolitik)) {
                                                                                    echo $nilaizIlmuPolitik;
                                                                                } ?></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <center>
                <h6> Hasil Rekomendasi Jurusan Anda Adalah : </h6>
                <h5><i><strong><?php if (isset($jurusan_ips)) {
                                    echo $jurusan_ips;
                                } ?></strong></i></h5>

            </center>

            <div class="mt-3">
                <center>
                    <a href="<?= base_url('controllerjurips/index'); ?>" type="button" class="btn btn-secondary">
                        Kembali
                    </a>
                </center>
            </div>

            <div class="mt-3"></div>

        </div>