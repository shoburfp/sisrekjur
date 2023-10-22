<div class="container">
    <h3 class="mt-4 mb-4">Data Hasil Rekomendasi Jurusan IPS</h3>
    <div class="row mt-3">
        <div class="col-md-12">

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
                        <th scope="col">Rekjur Nilai</th>
                        <th scope="col">Rekjur Minat Bakat</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($data_join as $hasil) : ?>

                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $hasil['nis']; ?></td>
                            <td><?= $hasil['nama_lengkap']; ?></td>
                            <td><?= $hasil['kelas']; ?></td>
                            <td><?= $hasil['rekjur']; ?></td>
                            <td><?= $hasil['minbat_rekjur']; ?></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>