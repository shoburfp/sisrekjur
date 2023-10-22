// flash-sukses
const flashDataRekjurSukses = $('.flashrekjursukses-data').data('flashdatarekjursukses');

if (flashDataRekjurSukses) {
    Swal.fire(
        'Data Siswa  ',
        'Berhasil Diproses',
        'success'
    )
}

const flashDataMinbatSukses = $('.flashminbatsukses-data').data('flashdataminbatsukses');

if (flashDataMinbatSukses) {
    Swal.fire(
        'Terima Kasih Telah Mengisi Kuesioner',
        'Berhasil Diproses',
        'success'
    )
}


const flashDataRekjurGagal = $('.flashrekjurgagal-data').data('flashdatarekjurgagal');

if (flashDataRekjurGagal) {

    Swal.fire({
        icon: 'error',
        title: 'Ooopss....',
        text: 'Data Siswa Telah Tersedia',
        footer: 'Silahkan Input Data Baru'
    })
}