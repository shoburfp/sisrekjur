<div class="container">
    <div class="row mt-4">
        <h3 class="mx-auto">Minat Bakat IPA</h3>
    </div>

    <!-- Alert Sukses -->
    <div class="flashrekjursukses-data" data-flashdatarekjursukses="<?= $this->session->flashdata('flashrekjursukses'); ?>"></div>
    <?php if ($this->session->flashdata('flashrekjursukses')) : ?>
    <?php endif; ?>

    <!-- Alert Sukses -->
    <div class="flashrekjurgagal-data" data-flashdatarekjurgagal="<?= $this->session->flashdata('flashrekjurgagal') ?>"></div>
    <?php if ($this->session->flashdata('flashrekjurgagal')) : ?>
    <?php endif; ?>



    <div class="row mt-3">
        <div class="col-md-8 mx-auto">
            <form action="<?= base_url('ControllerMinatBakatIpa/proses'); ?>" method="post">
                <div class="form-group">
                    <label for="nis">NIS</label>
                    <input list="data_nis" type="text" name="nis" class="form-control" id="nis" onchange="return autofill();">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="nama_lengkap" readonly>
                </div>
                <div class="form-group">
                    <label for="pert">Hasil Kuesioner</label>
                    <input type="text" name="per1" class="form-control" id="per1" readonly>
                </div>
                <div class="form-group">
                    <input type="text" name="per2" class="form-control" id="per2" readonly>
                </div>
                <div class="form-group">
                    <input type="text" name="per3" class="form-control" id="per3" readonly>
                </div>
                <div class="form-group">
                    <input type="text" name="per4" class="form-control" id="per4" readonly>
                </div>
                <div class="form-group">
                    <input type="text" name="per5" class="form-control" id="per5" readonly>
                </div>

        </div>
    </div>

    <center>
        <h6> Hasil Tes Minat Bakat Anda Lebih Cenderung Ke : </h6>
        <h5><i><strong><?php if (isset($minat_bakat)) {
                            echo $minat_bakat;
                        } ?></strong></i></h5>

    </center>



    <div class="row mt-2 mx-auto">
        <div class="col-md-6 mx-auto">
            <button type="submit" class="btn btn-primary float-right" style="margin-left: 5px;" name="btnProses" id="btnProses">
                Proses
            </button>
            <a class="btn btn-secondary float-right" href="<?= base_url('ControllerMinatBakatIpa/index'); ?>">Reset</a>
        </div>
    </div>
    <div class="row mt-3"></div>
    </form>