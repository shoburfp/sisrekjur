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
                    <form action="<?= base_url('controllerjuripa/proses'); ?>" method="post">
                        <div class="form-group">
                            <label for="nis">NIS</label>
                            <input list="data_nis" type="text" name="nis" class="form-control" id="nis" onchange="return autofill();">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="nama_lengkap" readonly>
                        </div>
                        <div class="form-group">
                            <label for="nrBio">Nilai Rata-Rata Biologi</label>
                            <input type="text" name="nrBio" class="form-control" id="nrBio" readonly>
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
                            <label for="nrfisika">Nilai Rata-Rata fisika</label>
                            <input type="text" name="nrfisika" class="form-control" id="nrfisika" readonly>
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
                            <h6>Bio kurang : <?php if (isset($bio_kurang)) {
                                                    echo $bio_kurang;
                                                } ?></h6>
                            <h6>Bio Cukup : <?php if (isset($bio_cukup)) {
                                                echo $bio_cukup;
                                            } ?></h6>
                            <h6>Bio Baik : <?php if (isset($bio_baik)) {
                                                echo $bio_baik;
                                            } ?></h6>
                            <h6>Bio Sangat Baik : <?php if (isset($bio_sb)) {
                                                        echo $bio_sb;
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
                            <h6>fisika kurang : <?php if (isset($fisika_kurang)) {
                                                    echo $fisika_kurang;
                                                } ?></h6>
                            <h6>fisika Cukup : <?php if (isset($fisika_cukup)) {
                                                    echo $fisika_cukup;
                                                } ?></h6>
                            <h6>fisika Baik : <?php if (isset($fisika_baik)) {
                                                    echo $fisika_baik;
                                                } ?></h6>
                            <h6>fisika Sangat Baik : <?php if (isset($fisika_sb)) {
                                                            echo $fisika_sb;
                                                        } ?></h6>
                        </div>
                    </div>
                </div>
            </div>

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Kedokteran</button>
                    <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Teknik Informatika</button>
                    <button class="nav-link" id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Teknik Sipil</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr style="background-color: yellow;">
                                <td colspan="7" align="center">Kedokteran</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">No</th>
                                <th scope="row">Bio</th>
                                <th scope="row">B. Inggris</th>
                                <th scope="row">αp</th>
                                <th scope="row">Z Rumus</th>
                                <th scope="row">z hasil</th>
                                <th scope="row">αp * z</th>
                            </tr>
                            <tr>
                                <td>1</th>
                                <td><?php if (isset($bio_kurang)) {
                                        echo $bio_kurang;
                                    } ?></td>
                                <td><?php if (isset($inggris_kurang)) {
                                        echo $inggris_kurang;
                                    } ?></td>
                                <td><?php if (isset($kedokteranR1)) {
                                        echo $kedokteranR1;
                                    } ?></td>
                                <td><?php if (isset($zrumusR1K)) {
                                        echo $zrumusR1K;
                                    } ?></td>
                                <td><?php if (isset($zhasilR1K)) {
                                        echo $zhasilR1K;
                                    } ?></td>
                                <td><?php if (isset($pzR1K)) {
                                        echo $pzR1K;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>2</th>
                                <td><?php if (isset($bio_kurang)) {
                                        echo $bio_kurang;
                                    } ?></td>
                                <td><?php if (isset($inggris_cukup)) {
                                        echo $inggris_cukup;
                                    } ?></td>
                                <td><?php if (isset($kedokteranR2)) {
                                        echo $kedokteranR2;
                                    } ?></td>
                                <td><?php if (isset($zrumusR2K)) {
                                        echo $zrumusR2K;
                                    } ?></td>
                                <td><?php if (isset($zhasilR2K)) {
                                        echo $zhasilR2K;
                                    } ?></td>
                                <td><?php if (isset($pzR2K)) {
                                        echo $pzR2K;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>3</th>
                                <td><?php if (isset($bio_kurang)) {
                                        echo $bio_kurang;
                                    } ?></td>
                                <td><?php if (isset($inggris_baik)) {
                                        echo $inggris_baik;
                                    } ?></td>
                                <td><?php if (isset($kedokteranR3)) {
                                        echo $kedokteranR3;
                                    } ?></td>
                                <td><?php if (isset($zrumusR3K)) {
                                        echo $zrumusR3K;
                                    } ?></td>
                                <td><?php if (isset($zhasilR3K)) {
                                        echo $zhasilR3K;
                                    } ?></td>
                                <td><?php if (isset($pzR3K)) {
                                        echo $pzR3K;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>4</th>
                                <td><?php if (isset($bio_kurang)) {
                                        echo $bio_kurang;
                                    } ?></td>
                                <td><?php if (isset($inggris_sb)) {
                                        echo $inggris_sb;
                                    } ?></td>
                                <td><?php if (isset($kedokteranR4)) {
                                        echo $kedokteranR4;
                                    } ?></td>
                                <td><?php if (isset($zrumusR4K)) {
                                        echo $zrumusR4K;
                                    } ?></td>
                                <td><?php if (isset($zhasilR4K)) {
                                        echo $zhasilR4K;
                                    } ?></td>
                                <td><?php if (isset($pzR4K)) {
                                        echo $pzR4K;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>5</th>
                                <td><?php if (isset($bio_cukup)) {
                                        echo $bio_cukup;
                                    } ?></td>
                                <td><?php if (isset($inggris_kurang)) {
                                        echo $inggris_kurang;
                                    } ?></td>
                                <td><?php if (isset($kedokteranR5)) {
                                        echo $kedokteranR5;
                                    } ?></td>
                                <td><?php if (isset($zrumusR5K)) {
                                        echo $zrumusR5K;
                                    } ?></td>
                                <td><?php if (isset($zhasilR5K)) {
                                        echo $zhasilR5K;
                                    } ?></td>
                                <td><?php if (isset($pzR5K)) {
                                        echo $pzR5K;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>6</th>
                                <td><?php if (isset($bio_cukup)) {
                                        echo $bio_cukup;
                                    } ?></td>
                                <td><?php if (isset($inggris_cukup)) {
                                        echo $inggris_cukup;
                                    } ?></td>
                                <td><?php if (isset($kedokteranR6)) {
                                        echo $kedokteranR6;
                                    } ?></td>
                                <td><?php if (isset($zrumusR6K)) {
                                        echo $zrumusR6K;
                                    } ?></td>
                                <td><?php if (isset($zhasilR6K)) {
                                        echo $zhasilR6K;
                                    } ?></td>
                                <td><?php if (isset($pzR6K)) {
                                        echo $pzR6K;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>7</th>
                                <td><?php if (isset($bio_cukup)) {
                                        echo $bio_cukup;
                                    } ?></td>
                                <td><?php if (isset($inggris_baik)) {
                                        echo $inggris_baik;
                                    } ?></td>
                                <td><?php if (isset($kedokteranR7)) {
                                        echo $kedokteranR7;
                                    } ?></td>
                                <td><?php if (isset($zrumusR7K)) {
                                        echo $zrumusR7K;
                                    } ?></td>
                                <td><?php if (isset($zhasilR7K)) {
                                        echo $zhasilR7K;
                                    } ?></td>
                                <td><?php if (isset($pzR7K)) {
                                        echo $pzR7K;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>8</th>
                                <td><?php if (isset($bio_cukup)) {
                                        echo $bio_cukup;
                                    } ?></td>
                                <td><?php if (isset($inggris_sb)) {
                                        echo $inggris_sb;
                                    } ?></td>
                                <td><?php if (isset($kedokteranR8)) {
                                        echo $kedokteranR8;
                                    } ?></td>
                                <td><?php if (isset($zrumusR8K)) {
                                        echo $zrumusR8K;
                                    } ?></td>
                                <td><?php if (isset($zhasilR8K)) {
                                        echo $zhasilR8K;
                                    } ?></td>
                                <td><?php if (isset($pzR8K)) {
                                        echo $pzR8K;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>9</th>
                                <td><?php if (isset($bio_baik)) {
                                        echo $bio_baik;
                                    } ?></td>
                                <td><?php if (isset($inggris_kurang)) {
                                        echo $inggris_kurang;
                                    } ?></td>
                                <td><?php if (isset($kedokteranR9)) {
                                        echo $kedokteranR9;
                                    } ?></td>
                                <td><?php if (isset($zrumusR9K)) {
                                        echo $zrumusR9K;
                                    } ?></td>
                                <td><?php if (isset($zhasilR9K)) {
                                        echo $zhasilR9K;
                                    } ?></td>
                                <td><?php if (isset($pzR9K)) {
                                        echo $pzR9K;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>10</th>
                                <td><?php if (isset($bio_baik)) {
                                        echo $bio_baik;
                                    } ?></td>
                                <td><?php if (isset($inggris_cukup)) {
                                        echo $inggris_cukup;
                                    } ?></td>
                                <td><?php if (isset($kedokteranR10)) {
                                        echo $kedokteranR10;
                                    } ?></td>
                                <td><?php if (isset($zrumusR10K)) {
                                        echo $zrumusR10K;
                                    } ?></td>
                                <td><?php if (isset($zhasilR10K)) {
                                        echo $zhasilR10K;
                                    } ?></td>
                                <td><?php if (isset($pzR10K)) {
                                        echo $pzR10K;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>11</th>
                                <td><?php if (isset($bio_baik)) {
                                        echo $bio_baik;
                                    } ?></td>
                                <td><?php if (isset($inggris_baik)) {
                                        echo $inggris_baik;
                                    } ?></td>
                                <td><?php if (isset($kedokteranR11)) {
                                        echo $kedokteranR11;
                                    } ?></td>
                                <td><?php if (isset($zrumusR11K)) {
                                        echo $zrumusR11K;
                                    } ?></td>
                                <td><?php if (isset($zhasilR11K)) {
                                        echo $zhasilR11K;
                                    } ?></td>
                                <td><?php if (isset($pzR11K)) {
                                        echo $pzR11K;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>12</th>
                                <td><?php if (isset($bio_baik)) {
                                        echo $bio_baik;
                                    } ?></td>
                                <td><?php if (isset($inggris_sb)) {
                                        echo $inggris_sb;
                                    } ?></td>
                                <td><?php if (isset($kedokteranR12)) {
                                        echo $kedokteranR12;
                                    } ?></td>
                                <td><?php if (isset($zrumusR12K)) {
                                        echo $zrumusR12K;
                                    } ?></td>
                                <td><?php if (isset($zhasilR12K)) {
                                        echo $zhasilR12K;
                                    } ?></td>
                                <td><?php if (isset($pzR12K)) {
                                        echo $pzR12K;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>13</th>
                                <td><?php if (isset($bio_sb)) {
                                        echo $bio_sb;
                                    } ?></td>
                                <td><?php if (isset($inggris_kurang)) {
                                        echo $inggris_kurang;
                                    } ?></td>
                                <td><?php if (isset($kedokteranR13)) {
                                        echo $kedokteranR13;
                                    } ?></td>
                                <td><?php if (isset($zrumusR13K)) {
                                        echo $zrumusR13K;
                                    } ?></td>
                                <td><?php if (isset($zhasilR13K)) {
                                        echo $zhasilR13K;
                                    } ?></td>
                                <td><?php if (isset($pzR13K)) {
                                        echo $pzR13K;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>14</th>
                                <td><?php if (isset($bio_sb)) {
                                        echo $bio_sb;
                                    } ?></td>
                                <td><?php if (isset($inggris_cukup)) {
                                        echo $inggris_cukup;
                                    } ?></td>
                                <td><?php if (isset($kedokteranR14)) {
                                        echo $kedokteranR14;
                                    } ?></td>
                                <td><?php if (isset($zrumusR14K)) {
                                        echo $zrumusR14K;
                                    } ?></td>
                                <td><?php if (isset($zhasilR14K)) {
                                        echo $zhasilR14K;
                                    } ?></td>
                                <td><?php if (isset($pzR14K)) {
                                        echo $pzR14K;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>15</th>
                                <td><?php if (isset($bio_sb)) {
                                        echo $bio_sb;
                                    } ?></td>
                                <td><?php if (isset($inggris_baik)) {
                                        echo $inggris_baik;
                                    } ?></td>
                                <td><?php if (isset($kedokteranR15)) {
                                        echo $kedokteranR15;
                                    } ?></td>
                                <td><?php if (isset($zrumusR15K)) {
                                        echo $zrumusR15K;
                                    } ?></td>
                                <td><?php if (isset($zhasilR15K)) {
                                        echo $zhasilR15K;
                                    } ?></td>
                                <td><?php if (isset($pzR15K)) {
                                        echo $pzR15K;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>16</th>
                                <td><?php if (isset($bio_sb)) {
                                        echo $bio_sb;
                                    } ?></td>
                                <td><?php if (isset($inggris_sb)) {
                                        echo $inggris_sb;
                                    } ?></td>
                                <td><?php if (isset($kedokteranR16)) {
                                        echo $kedokteranR16;
                                    } ?></td>
                                <td><?php if (isset($zrumusR16K)) {
                                        echo $zrumusR16K;
                                    } ?></td>
                                <td><?php if (isset($zhasilR16K)) {
                                        echo $zhasilR16K;
                                    } ?></td>
                                <td><?php if (isset($pzR16K)) {
                                        echo $pzR16K;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td colspan="3">TOTAL</th>
                                <td><?php if (isset($sumPK)) {
                                        echo $sumPK;
                                    } ?></td>
                                <td></td>
                                <td></td>
                                <td><?php if (isset($sumPZK)) {
                                        echo $sumPZK;
                                    } ?></td>
                            </tr>
                            <tr style="background-color: yellow;">
                                <td colspan="7">Nilai Z / Rata-Rata Berbobot = <?php if (isset($nilaizKedokteran)) {
                                                                                    echo $nilaizKedokteran;
                                                                                } ?></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr style="background-color: yellow;">
                                <td colspan="7" align="center">Teknik Informatika</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">No</th>
                                <th scope="row">MTK</th>
                                <th scope="row">B. Inggris</th>
                                <th scope="row">αp</th>
                                <th scope="row">Z Rumus</th>
                                <th scope="row">z hasil</th>
                                <th scope="row">αp * z</th>
                            </tr>
                            <tr>
                                <td>1</th>
                                <td><?php if (isset($mtk_kurang)) {
                                        echo $mtk_kurang;
                                    } ?></td>
                                <td><?php if (isset($inggris_kurang)) {
                                        echo $inggris_kurang;
                                    } ?></td>
                                <td><?php if (isset($TInformatikaR1)) {
                                        echo $TInformatikaR1;
                                    } ?></td>
                                <td><?php if (isset($zrumusR1TI)) {
                                        echo $zrumusR1TI;
                                    } ?></td>
                                <td><?php if (isset($zhasilR1TI)) {
                                        echo $zhasilR1TI;
                                    } ?></td>
                                <td><?php if (isset($pzR1TI)) {
                                        echo $pzR1TI;
                                    } ?></td>

                            </tr>
                            <tr>
                                <td>2</th>
                                <td><?php if (isset($mtk_kurang)) {
                                        echo $mtk_kurang;
                                    } ?></td>
                                <td><?php if (isset($inggris_cukup)) {
                                        echo $inggris_cukup;
                                    } ?></td>
                                <td><?php if (isset($TInformatikaR2)) {
                                        echo $TInformatikaR2;
                                    } ?></td>
                                <td><?php if (isset($zrumusR2TI)) {
                                        echo $zrumusR2TI;
                                    } ?></td>
                                <td><?php if (isset($zhasilR2TI)) {
                                        echo $zhasilR2TI;
                                    } ?></td>
                                <td><?php if (isset($pzR2TI)) {
                                        echo $pzR2TI;
                                    } ?></td>

                            </tr>
                            <tr>
                                <td>3</th>
                                <td><?php if (isset($mtk_kurang)) {
                                        echo $mtk_kurang;
                                    } ?></td>
                                <td><?php if (isset($inggris_baik)) {
                                        echo $inggris_baik;
                                    } ?></td>
                                <td><?php if (isset($TInformatikaR3)) {
                                        echo $TInformatikaR3;
                                    } ?></td>
                                <td><?php if (isset($zrumusR3TI)) {
                                        echo $zrumusR3TI;
                                    } ?></td>
                                <td><?php if (isset($zhasilR3TI)) {
                                        echo $zhasilR3TI;
                                    } ?></td>
                                <td><?php if (isset($pzR3TI)) {
                                        echo $pzR3TI;
                                    } ?></td>

                            </tr>
                            <tr>
                                <td>4</th>
                                <td><?php if (isset($mtk_kurang)) {
                                        echo $mtk_kurang;
                                    } ?></td>
                                <td><?php if (isset($inggris_sb)) {
                                        echo $inggris_sb;
                                    } ?></td>
                                <td><?php if (isset($TInformatikaR4)) {
                                        echo $TInformatikaR4;
                                    } ?></td>
                                <td><?php if (isset($zrumusR4TI)) {
                                        echo $zrumusR4TI;
                                    } ?></td>
                                <td><?php if (isset($zhasilR4TI)) {
                                        echo $zhasilR4TI;
                                    } ?></td>
                                <td><?php if (isset($pzR4TI)) {
                                        echo $pzR4TI;
                                    } ?></td>

                            </tr>
                            <tr>
                                <td>5</th>
                                <td><?php if (isset($mtk_cukup)) {
                                        echo $mtk_cukup;
                                    } ?></td>
                                <td><?php if (isset($inggris_kurang)) {
                                        echo $inggris_kurang;
                                    } ?></td>
                                <td><?php if (isset($TInformatikaR5)) {
                                        echo $TInformatikaR5;
                                    } ?></td>
                                <td><?php if (isset($zrumusR5TI)) {
                                        echo $zrumusR5TI;
                                    } ?></td>
                                <td><?php if (isset($zhasilR5TI)) {
                                        echo $zhasilR5TI;
                                    } ?></td>
                                <td><?php if (isset($pzR5TI)) {
                                        echo $pzR5TI;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>6</th>
                                <td><?php if (isset($mtk_cukup)) {
                                        echo $mtk_cukup;
                                    } ?></td>
                                <td><?php if (isset($inggris_cukup)) {
                                        echo $inggris_cukup;
                                    } ?></td>
                                <td><?php if (isset($TInformatikaR6)) {
                                        echo $TInformatikaR6;
                                    } ?></td>
                                <td><?php if (isset($zrumusR6TI)) {
                                        echo $zrumusR6TI;
                                    } ?></td>
                                <td><?php if (isset($zhasilR6TI)) {
                                        echo $zhasilR6TI;
                                    } ?></td>
                                <td><?php if (isset($pzR6TI)) {
                                        echo $pzR6TI;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>7</th>
                                <td><?php if (isset($mtk_cukup)) {
                                        echo $mtk_cukup;
                                    } ?></td>
                                <td><?php if (isset($inggris_baik)) {
                                        echo $inggris_baik;
                                    } ?></td>
                                <td><?php if (isset($TInformatikaR7)) {
                                        echo $TInformatikaR7;
                                    } ?></td>
                                <td><?php if (isset($zrumusR7TI)) {
                                        echo $zrumusR7TI;
                                    } ?></td>
                                <td><?php if (isset($zhasilR7TI)) {
                                        echo $zhasilR7TI;
                                    } ?></td>
                                <td><?php if (isset($pzR7TI)) {
                                        echo $pzR7TI;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>8</th>
                                <td><?php if (isset($mtk_cukup)) {
                                        echo $mtk_cukup;
                                    } ?></td>
                                <td><?php if (isset($inggris_sb)) {
                                        echo $inggris_sb;
                                    } ?></td>
                                <td><?php if (isset($TInformatikaR8)) {
                                        echo $TInformatikaR8;
                                    } ?></td>
                                <td><?php if (isset($zrumusR8TI)) {
                                        echo $zrumusR8TI;
                                    } ?></td>
                                <td><?php if (isset($zhasilR8TI)) {
                                        echo $zhasilR8TI;
                                    } ?></td>
                                <td><?php if (isset($pzR8TI)) {
                                        echo $pzR8TI;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>9</th>
                                <td><?php if (isset($mtk_baik)) {
                                        echo $mtk_baik;
                                    } ?></td>
                                <td><?php if (isset($inggris_kurang)) {
                                        echo $inggris_kurang;
                                    } ?></td>
                                <td><?php if (isset($TInformatikaR9)) {
                                        echo $TInformatikaR9;
                                    } ?></td>
                                <td><?php if (isset($zrumusR9TI)) {
                                        echo $zrumusR9TI;
                                    } ?></td>
                                <td><?php if (isset($zhasilR9TI)) {
                                        echo $zhasilR9TI;
                                    } ?></td>
                                <td><?php if (isset($pzR9TI)) {
                                        echo $pzR9TI;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>10</th>
                                <td><?php if (isset($mtk_baik)) {
                                        echo $mtk_baik;
                                    } ?></td>
                                <td><?php if (isset($inggris_cukup)) {
                                        echo $inggris_cukup;
                                    } ?></td>
                                <td><?php if (isset($TInformatikaR10)) {
                                        echo $TInformatikaR10;
                                    } ?></td>
                                <td><?php if (isset($zrumusR10TI)) {
                                        echo $zrumusR10TI;
                                    } ?></td>
                                <td><?php if (isset($zhasilR10TI)) {
                                        echo $zhasilR10TI;
                                    } ?></td>
                                <td><?php if (isset($pzR10TI)) {
                                        echo $pzR10TI;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>11</th>
                                <td><?php if (isset($mtk_baik)) {
                                        echo $mtk_baik;
                                    } ?></td>
                                <td><?php if (isset($inggris_baik)) {
                                        echo $inggris_baik;
                                    } ?></td>
                                <td><?php if (isset($TInformatikaR11)) {
                                        echo $TInformatikaR11;
                                    } ?></td>
                                <td><?php if (isset($zrumusR11TI)) {
                                        echo $zrumusR11TI;
                                    } ?></td>
                                <td><?php if (isset($zhasilR11TI)) {
                                        echo $zhasilR11TI;
                                    } ?></td>
                                <td><?php if (isset($pzR11TI)) {
                                        echo $pzR11TI;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>12</th>
                                <td><?php if (isset($mtk_baik)) {
                                        echo $mtk_baik;
                                    } ?></td>
                                <td><?php if (isset($inggris_sb)) {
                                        echo $inggris_sb;
                                    } ?></td>
                                <td><?php if (isset($TInformatikaR12)) {
                                        echo $TInformatikaR12;
                                    } ?></td>
                                <td><?php if (isset($zrumusR12TI)) {
                                        echo $zrumusR12TI;
                                    } ?></td>
                                <td><?php if (isset($zhasilR12TI)) {
                                        echo $zhasilR12TI;
                                    } ?></td>
                                <td><?php if (isset($pzR12TI)) {
                                        echo $pzR12TI;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>13</th>
                                <td><?php if (isset($mtk_sb)) {
                                        echo $mtk_sb;
                                    } ?></td>
                                <td><?php if (isset($inggris_kurang)) {
                                        echo $inggris_kurang;
                                    } ?></td>
                                <td><?php if (isset($TInformatikaR13)) {
                                        echo $TInformatikaR13;
                                    } ?></td>
                                <td><?php if (isset($zrumusR13TI)) {
                                        echo $zrumusR13TI;
                                    } ?></td>
                                <td><?php if (isset($zhasilR13TI)) {
                                        echo $zhasilR13TI;
                                    } ?></td>
                                <td><?php if (isset($pzR13TI)) {
                                        echo $pzR13TI;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>14</th>
                                <td><?php if (isset($mtk_sb)) {
                                        echo $mtk_sb;
                                    } ?></td>
                                <td><?php if (isset($inggris_cukup)) {
                                        echo $inggris_cukup;
                                    } ?></td>
                                <td><?php if (isset($TInformatikaR14)) {
                                        echo $TInformatikaR14;
                                    } ?></td>
                                <td><?php if (isset($zrumusR14TI)) {
                                        echo $zrumusR14TI;
                                    } ?></td>
                                <td><?php if (isset($zhasilR14TI)) {
                                        echo $zhasilR14TI;
                                    } ?></td>
                                <td><?php if (isset($pzR14TI)) {
                                        echo $pzR14TI;
                                    } ?></td>
                            <tr>
                                <td>15</th>
                                <td><?php if (isset($mtk_sb)) {
                                        echo $mtk_sb;
                                    } ?></td>
                                <td><?php if (isset($inggris_baik)) {
                                        echo $inggris_baik;
                                    } ?></td>
                                <td><?php if (isset($TInformatikaR15)) {
                                        echo $TInformatikaR15;
                                    } ?></td>
                                <td><?php if (isset($zrumusR15TI)) {
                                        echo $zrumusR15TI;
                                    } ?></td>
                                <td><?php if (isset($zhasilR15TI)) {
                                        echo $zhasilR15TI;
                                    } ?></td>
                                <td><?php if (isset($pzR15TIP)) {
                                        echo $pzR15TI;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>16</th>
                                <td><?php if (isset($mtk_sb)) {
                                        echo $mtk_sb;
                                    } ?></td>
                                <td><?php if (isset($inggris_sb)) {
                                        echo $inggris_sb;
                                    } ?></td>
                                <td><?php if (isset($TInformatikaR16)) {
                                        echo $TInformatikaR16;
                                    } ?></td>
                                <td><?php if (isset($zrumusR16TI)) {
                                        echo $zrumusR16TI;
                                    } ?></td>
                                <td><?php if (isset($zhasilR16TI)) {
                                        echo $zhasilR16TI;
                                    } ?></td>
                                <td><?php if (isset($pzR16TI)) {
                                        echo $pzR16TI;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td colspan="3">TOTAL</th>
                                <td><?php if (isset($sumPTI)) {
                                        echo $sumPTI;
                                    } ?></td>
                                <td></td>
                                <td></td>
                                <td><?php if (isset($sumPZTI)) {
                                        echo $sumPZTI;
                                    } ?></td>
                            </tr>
                            <tr style="background-color: yellow;">
                                <td colspan="7">Nilai Z / Rata-Rata Berbobot = <?php if (isset($nilaizTInformatika)) {
                                                                                    echo $nilaizTInformatika;
                                                                                } ?></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr style="background-color: yellow;">
                                <td colspan="7" align="center">Teknik Sipil</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">No</th>
                                <th scope="row">fisika</th>
                                <th scope="row">MTK</th>
                                <th scope="row">αp</th>
                                <th scope="row">Z Rumus</th>
                                <th scope="row">z hasil</th>
                                <th scope="row">αp * z</th>
                            </tr>
                            <tr>
                                <td>1</th>
                                <td><?php if (isset($fisika_kurang)) {
                                        echo $fisika_kurang;
                                    } ?></td>
                                <td><?php if (isset($mtk_kurang)) {
                                        echo $mtk_kurang;
                                    } ?></td>
                                <td><?php if (isset($tekniksipilR1)) {
                                        echo $tekniksipilR1;
                                    } ?></td>
                                <td><?php if (isset($zrumusR1TS)) {
                                        echo $zrumusR1TS;
                                    } ?></td>
                                <td><?php if (isset($zhasilR1TS)) {
                                        echo $zhasilR1TS;
                                    } ?></td>
                                <td><?php if (isset($pzR1TS)) {
                                        echo $pzR1TS;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>2</th>
                                <td><?php if (isset($fisika_kurang)) {
                                        echo $fisika_kurang;
                                    } ?></td>
                                <td><?php if (isset($mtk_cukup)) {
                                        echo $mtk_cukup;
                                    } ?></td>
                                <td><?php if (isset($tekniksipilR2)) {
                                        echo $tekniksipilR2;
                                    } ?></td>
                                <td><?php if (isset($zrumusR2TS)) {
                                        echo $zrumusR2TS;
                                    } ?></td>
                                <td><?php if (isset($zhasilR2TS)) {
                                        echo $zhasilR2TS;
                                    } ?></td>
                                <td><?php if (isset($pzR2TS)) {
                                        echo $pzR2TS;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>3</th>
                                <td><?php if (isset($fisika_kurang)) {
                                        echo $fisika_kurang;
                                    } ?></td>
                                <td><?php if (isset($mtk_baik)) {
                                        echo $mtk_baik;
                                    } ?></td>
                                <td><?php if (isset($tekniksipilR3)) {
                                        echo $tekniksipilR3;
                                    } ?></td>
                                <td><?php if (isset($zrumusR3TS)) {
                                        echo $zrumusR3TS;
                                    } ?></td>
                                <td><?php if (isset($zhasilR3TS)) {
                                        echo $zhasilR3TS;
                                    } ?></td>
                                <td><?php if (isset($pzR3TS)) {
                                        echo $pzR3TS;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>4</th>
                                <td><?php if (isset($fisika_kurang)) {
                                        echo $fisika_kurang;
                                    } ?></td>
                                <td><?php if (isset($mtk_sb)) {
                                        echo $mtk_sb;
                                    } ?></td>
                                <td><?php if (isset($tekniksipilR4)) {
                                        echo $tekniksipilR4;
                                    } ?></td>
                                <td><?php if (isset($zrumusR4TS)) {
                                        echo $zrumusR4TS;
                                    } ?></td>
                                <td><?php if (isset($zhasilR4TS)) {
                                        echo $zhasilR4TS;
                                    } ?></td>
                                <td><?php if (isset($pzR4TS)) {
                                        echo $pzR4TS;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>5</th>
                                <td><?php if (isset($fisika_cukup)) {
                                        echo $fisika_cukup;
                                    } ?></td>
                                <td><?php if (isset($mtk_kurang)) {
                                        echo $mtk_kurang;
                                    } ?></td>
                                <td><?php if (isset($tekniksipilR5)) {
                                        echo $tekniksipilR5;
                                    } ?></td>
                                <td><?php if (isset($zrumusR5TS)) {
                                        echo $zrumusR5TS;
                                    } ?></td>
                                <td><?php if (isset($zhasilR5TS)) {
                                        echo $zhasilR5TS;
                                    } ?></td>
                                <td><?php if (isset($pzR5TS)) {
                                        echo $pzR5TS;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>6</th>
                                <td><?php if (isset($fisika_cukup)) {
                                        echo $fisika_cukup;
                                    } ?></td>
                                <td><?php if (isset($mtk_cukup)) {
                                        echo $mtk_cukup;
                                    } ?></td>
                                <td><?php if (isset($tekniksipilR6)) {
                                        echo $tekniksipilR6;
                                    } ?></td>
                                <td><?php if (isset($zrumusR6TS)) {
                                        echo $zrumusR6TS;
                                    } ?></td>
                                <td><?php if (isset($zhasilR6TS)) {
                                        echo $zhasilR6TS;
                                    } ?></td>
                                <td><?php if (isset($pzR6TS)) {
                                        echo $pzR6TS;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>7</th>
                                <td><?php if (isset($fisika_cukup)) {
                                        echo $fisika_cukup;
                                    } ?></td>
                                <td><?php if (isset($mtk_baik)) {
                                        echo $mtk_baik;
                                    } ?></td>
                                <td><?php if (isset($tekniksipilR7)) {
                                        echo $tekniksipilR7;
                                    } ?></td>
                                <td><?php if (isset($zrumusR7TS)) {
                                        echo $zrumusR7TS;
                                    } ?></td>
                                <td><?php if (isset($zhasilR7TS)) {
                                        echo $zhasilR7TS;
                                    } ?></td>
                                <td><?php if (isset($pzR7TS)) {
                                        echo $pzR7TS;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>8</th>
                                <td><?php if (isset($fisika_cukup)) {
                                        echo $fisika_cukup;
                                    } ?></td>
                                <td><?php if (isset($mtk_sb)) {
                                        echo $mtk_sb;
                                    } ?></td>
                                <td><?php if (isset($tekniksipilR8)) {
                                        echo $tekniksipilR8;
                                    } ?></td>
                                <td><?php if (isset($zrumusR8TS)) {
                                        echo $zrumusR8TS;
                                    } ?></td>
                                <td><?php if (isset($zhasilR8TS)) {
                                        echo $zhasilR8TS;
                                    } ?></td>
                                <td><?php if (isset($pzR8TS)) {
                                        echo $pzR8TS;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>9</th>
                                <td><?php if (isset($fisika_baik)) {
                                        echo $fisika_baik;
                                    } ?></td>
                                <td><?php if (isset($mtk_kurang)) {
                                        echo $mtk_kurang;
                                    } ?></td>
                                <td><?php if (isset($tekniksipilR9)) {
                                        echo $tekniksipilR9;
                                    } ?></td>
                                <td><?php if (isset($zrumusR9TS)) {
                                        echo $zrumusR9TS;
                                    } ?></td>
                                <td><?php if (isset($zhasilR9TS)) {
                                        echo $zhasilR9TS;
                                    } ?></td>
                                <td><?php if (isset($pzR9TS)) {
                                        echo $pzR9TS;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>10</th>
                                <td><?php if (isset($fisika_baik)) {
                                        echo $fisika_baik;
                                    } ?></td>
                                <td><?php if (isset($mtk_cukup)) {
                                        echo $mtk_cukup;
                                    } ?></td>
                                <td><?php if (isset($tekniksipilR10)) {
                                        echo $tekniksipilR10;
                                    } ?></td>
                                <td><?php if (isset($zrumusR10TS)) {
                                        echo $zrumusR10TS;
                                    } ?></td>
                                <td><?php if (isset($zhasilR10TS)) {
                                        echo $zhasilR10TS;
                                    } ?></td>
                                <td><?php if (isset($pzR10TS)) {
                                        echo $pzR10TS;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>11</th>
                                <td><?php if (isset($fisika_baik)) {
                                        echo $fisika_baik;
                                    } ?></td>
                                <td><?php if (isset($mtk_baik)) {
                                        echo $mtk_baik;
                                    } ?></td>
                                <td><?php if (isset($tekniksipilR11)) {
                                        echo $tekniksipilR11;
                                    } ?></td>
                                <td><?php if (isset($zrumusR11TS)) {
                                        echo $zrumusR11TS;
                                    } ?></td>
                                <td><?php if (isset($zhasilR11TS)) {
                                        echo $zhasilR11TS;
                                    } ?></td>
                                <td><?php if (isset($pzR11TS)) {
                                        echo $pzR11TS;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>12</th>
                                <td><?php if (isset($fisika_baik)) {
                                        echo $fisika_baik;
                                    } ?></td>
                                <td><?php if (isset($mtk_sb)) {
                                        echo $mtk_sb;
                                    } ?></td>
                                <td><?php if (isset($tekniksipilR12)) {
                                        echo $tekniksipilR12;
                                    } ?></td>
                                <td><?php if (isset($zrumusR12TS)) {
                                        echo $zrumusR12TS;
                                    } ?></td>
                                <td><?php if (isset($zhasilR12TS)) {
                                        echo $zhasilR12TS;
                                    } ?></td>
                                <td><?php if (isset($pzR12TS)) {
                                        echo $pzR12TS;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>13</th>
                                <td><?php if (isset($fisika_sb)) {
                                        echo $fisika_sb;
                                    } ?></td>
                                <td><?php if (isset($mtk_kurang)) {
                                        echo $mtk_kurang;
                                    } ?></td>
                                <td><?php if (isset($tekniksipilR13)) {
                                        echo $tekniksipilR13;
                                    } ?></td>
                                <td><?php if (isset($zrumusR13TS)) {
                                        echo $zrumusR13TS;
                                    } ?></td>
                                <td><?php if (isset($zhasilR13TS)) {
                                        echo $zhasilR13TS;
                                    } ?></td>
                                <td><?php if (isset($pzR13TS)) {
                                        echo $pzR13TS;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>14</th>
                                <td><?php if (isset($fisika_sb)) {
                                        echo $fisika_sb;
                                    } ?></td>
                                <td><?php if (isset($mtk_cukup)) {
                                        echo $mtk_cukup;
                                    } ?></td>
                                <td><?php if (isset($tekniksipilR14)) {
                                        echo $tekniksipilR14;
                                    } ?></td>
                                <td><?php if (isset($zrumusR14TS)) {
                                        echo $zrumusR14TS;
                                    } ?></td>
                                <td><?php if (isset($zhasilR14TS)) {
                                        echo $zhasilR14TS;
                                    } ?></td>
                                <td><?php if (isset($pzR14TS)) {
                                        echo $pzR14TS;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>15</th>
                                <td><?php if (isset($fisika_sb)) {
                                        echo $fisika_sb;
                                    } ?></td>
                                <td><?php if (isset($mtk_baik)) {
                                        echo $mtk_baik;
                                    } ?></td>
                                <td><?php if (isset($tekniksipilR15)) {
                                        echo $tekniksipilR15;
                                    } ?></td>
                                <td><?php if (isset($zrumusR15TS)) {
                                        echo $zrumusR15TS;
                                    } ?></td>
                                <td><?php if (isset($zhasilR15TS)) {
                                        echo $zhasilR15TS;
                                    } ?></td>
                                <td><?php if (isset($pzR15TS)) {
                                        echo $pzR15TS;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td>16</th>
                                <td><?php if (isset($fisika_sb)) {
                                        echo $fisika_sb;
                                    } ?></td>
                                <td><?php if (isset($mtk_sb)) {
                                        echo $mtk_sb;
                                    } ?></td>
                                <td><?php if (isset($tekniksipilR16)) {
                                        echo $tekniksipilR16;
                                    } ?></td>
                                <td><?php if (isset($zrumusR16TS)) {
                                        echo $zrumusR16TS;
                                    } ?></td>
                                <td><?php if (isset($zhasilR16TS)) {
                                        echo $zhasilR16TS;
                                    } ?></td>
                                <td><?php if (isset($pzR16TS)) {
                                        echo $pzR16TS;
                                    } ?></td>
                            </tr>
                            <tr>
                                <td colspan="3">TOTAL</th>
                                <td><?php if (isset($sumPTS)) {
                                        echo $sumPTS;
                                    } ?></td>

                                <td></td>
                                <td></td>
                                <td><?php if (isset($sumPZTS)) {
                                        echo $sumPZTS;
                                    } ?></td>

                            </tr>
                            <tr style="background-color: yellow;">
                                <td colspan="7">Nilai Z / Rata-Rata Berbobot = <?php if (isset($nilaiztekniksipil)) {
                                                                                    echo $nilaiztekniksipil;
                                                                                } ?></th>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <center>
                <h6> Hasil Rekomendasi Jurusan Anda Adalah : </h6>
                <h5><i><strong><?php if (isset($jurusan_ipa)) {
                                    echo $jurusan_ipa;
                                } ?></strong></i></h5>

            </center>

            <div class="mt-3">
                <center>
                    <a href="<?= base_url('controllerjuripa/index'); ?>" type="button" class="btn btn-secondary">
                        Kembali
                    </a>
                </center>
            </div>

            <div class="mt-3"></div>

        </div>