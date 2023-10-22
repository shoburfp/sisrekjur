// flash-sukses
const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal.fire(
        'Data Siswa  ' ,
        'Berhasil ' + flashData,
        'success'
        )
    }




    // flash-gagal
const flashDataDanger = $('.flashdanger-data').data('flashdanger');

if (flashDataDanger) {
    Swal.fire({
        icon: 'error',
        title: 'Ooopss....',
        text: 'NIS Telah Tersedia',
        footer: 'Silahkan Input NIS Baru'
        })
    }



// tombol-hapus
$('.tombol-hapus').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Data Siswa Akan Dihapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus Data!'
        }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = href;
        }
        })


});

