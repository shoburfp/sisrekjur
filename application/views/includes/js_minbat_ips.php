<script src="<?php echo base_url(); ?>assets/js/ajax.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<datalist id="data_nis">
    <?php foreach ($data_siswa as $u) : ?>
        <option value="<?php echo $u['nis']; ?>"><?php echo $u['nama_lengkap']; ?></option>
    <?php endforeach ?>
</datalist>

<script>
    function autofill() {
        var nis = document.getElementById('nis').value;
        $.ajax({
            url: "<?php echo base_url(); ?>ControllerMinatBakatIps/cari",
            data: '&nis=' + nis,
            success: function(data) {
                var hasil = JSON.parse(data);

                $.each(hasil, function(key, val) {

                    document.getElementById('nis').value = val.nis;
                    document.getElementById('nama_lengkap').value = val.nama_lengkap;
                    document.getElementById('per1').value = val.pert1;
                    document.getElementById('per2').value = val.pert2;
                    document.getElementById('per3').value = val.pert3;
                    document.getElementById('per4').value = val.pert4;
                    document.getElementById('per5').value = val.pert5;

                });
            }
        });
    }
</script>