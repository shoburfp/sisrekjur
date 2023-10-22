<script src="<?php echo base_url(); ?>assets/js/ajax.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<datalist id="data_nis">
    <?php foreach ($nilai_siswa_ipa as $u) : ?>
        <option value="<?php echo $u['nis']; ?>"><?php echo $u['nama_lengkap']; ?></option>
    <?php endforeach ?>
</datalist>

<script>
    function autofill() {
        var nis = document.getElementById('nis').value;
        $.ajax({
            url: "<?php echo base_url(); ?>controllerjuripa/cari",
            data: '&nis=' + nis,
            success: function(data) {
                var hasil = JSON.parse(data);

                $.each(hasil, function(key, val) {

                    document.getElementById('nis').value = val.nis;
                    document.getElementById('nama_lengkap').value = val.nama_lengkap;
                    document.getElementById('nrBio').value = val.nilai_rata_bio;
                    document.getElementById('nrMtk').value = val.nilai_rata_mtk;
                    document.getElementById('nrInggris').value = val.nilai_rata_inggris;
                    document.getElementById('nrfisika').value = val.nilai_rata_fisika;

                });
            }
        });
    }
</script>