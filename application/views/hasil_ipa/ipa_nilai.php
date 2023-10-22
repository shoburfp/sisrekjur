<div class="container">

    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <?php endif; ?>

    <div class="flashdanger-data" data-flashdanger="<?= $this->session->flashdata('flashdanger') ?>"></div>
    <?php if ($this->session->flashdata('flashdanger')) : ?>
    <?php endif; ?>

    <h3 class="mt-4 mb-4">Data Hasil Rekomendasi Jurusan IPA</h3>
    <div class="row mt-3">
        <div class="col-md-12">

            <table id="myTable" class="cell-border table table-striped">
                <thead>
                    <tr class="table-info">
                        <th scope="col">No</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Rekjur Nilai</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data as $hasil) : ?>

                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $hasil['nis']; ?></td>
                            <td><?= $hasil['nama']; ?></td>
                            <td><?= $hasil['rekjur']; ?></td>
                            <td><a href="<?= base_url(''); ?>ControllerHasilIpa/hapus/<?= $hasil['nis']; ?>" class="badge badge-danger" onclick="return confirm('yakin?');">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>