<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ControllerMinatBakatIpa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_Siswa' => 'm_siswa']);
    }

    public function index()
    {
        $data   = [
            'title'         => 'Minat Bakat IPA',
            'data_siswa' => $this->m_siswa->getAllMinbatIpa()

        ];

        $this->load->view('includes/headerr', $data);
        $this->load->view('jurusan_ipa/minatbakat', $data);
        $this->load->view('includes/js_minbat_ipa');
        $this->load->view('includes/footer');
    }

    // public function minatbakat()
    // {
    //     $data   = [
    //         'title'         => 'minatbakat',
    //         'nilai_siswa_ipa' => $this->m_siswa->getAllNilaiSiswaIpa()
    //     ];

    //     $this->load->view('includes/headerr', $data);
    //     $this->load->view('jurusan_ipa/minatbakat', $data);
    //     $this->load->view('includes/js_minbat_ipa');
    //     $this->load->view('includes/footer');
    // }

    public function cari()
    {
        $nis = $_GET['nis'];
        $cari = $this->m_siswa->cariMinatBakatIpa($nis)->result();
        echo json_encode($cari);
    }

    // public function minat()
    // {
    //     $data   = [
    //         'title'         => 'minat',
    //         ['data_siswa'] => $this->m_siswa->getAllSiswa()
    //     ];


    //     $this->m_siswa->minatBakatSiswaIpa();
    //     $this->session->set_flashdata('flash', 'Ditambahkan');
    //     $this->load->view('includes/js_minbat_ipa');
    //     redirect('controllerminatbakatipa/index');
    // }

    public function proses()
    {
        $nis = $this->input->post('nis');
        $nama = $this->input->post('nama');

        $per1 = $this->input->post('per1');
        $per2 = $this->input->post('per2');
        $per3 = $this->input->post('per3');
        $per4 = $this->input->post('per4');
        $per5 = $this->input->post('per5');



        // per1

        if (($per1 == 'Saya sangat menyukai matematika') == TRUE) {

            $logis1 = 1;
            $visual1 = 0;
            $interpersonal1 = 0;
        } else if (($per1 == 'Saya suka melihat peta daripada petunjuk tertulis mengenai letak suatu tempat') == TRUE) {

            $logis1 = 0;
            $visual1 = 1;
            $interpersonal1 = 0;
        } else if (($per1 == 'Saya bergaul dengan baik') == TRUE) {

            $logis1 = 0;
            $visual1 = 0;
            $interpersonal1 = 1;
        }

        // per2
        if (($per2 == 'Saya menyukai permainan yang menggunakan logika') == TRUE) {

            $logis2 = 1;
            $visual2 = 0;
            $interpersonal2 = 0;
        } else if (($per2 == 'Saya sering melamun') == TRUE) {

            $logis2 = 0;
            $visual2 = 1;
            $interpersonal2 = 0;
        } else if (($per2 == 'Saya senang dengan aktivitas sosial') == TRUE) {

            $logis2 = 0;
            $visual2 = 0;
            $interpersonal2 = 1;
        }

        if (($per3 == 'Saya senang jika berhasil menyelesaikan soal matematika') == TRUE) {

            $logis3 = 1;
            $visual3 = 0;
            $interpersonal3 = 0;
        } else if (($per3 == 'Saya hobi fotografi') == TRUE) {

            $logis3 = 0;
            $visual3 = 1;
            $interpersonal3 = 0;
        } else if (($per3 == 'Saya memiliki banyak teman dekat') == TRUE) {

            $logis3 = 0;
            $visual3 = 0;
            $interpersonal3 = 1;
        }

        // per4
        if (($per4 == 'Saya mengurutkan sesuatu agar mudah diingat') == TRUE) {

            $logis4 = 1;
            $visual4 = 0;
            $interpersonal4 = 0;
        } else if (($per4 == 'Saya senang menggambar dan menciptakan desain') == TRUE) {

            $logis4 = 0;
            $visual4 = 1;
            $interpersonal4 = 0;
        } else if (($per4 == 'Saya senang mengajar orang lain') == TRUE) {

            $logis4 = 0;
            $visual4 = 0;
            $interpersonal4 = 1;
        }

        // per5
        if (($per5 == 'Penasaran Dengan Cara Kerja Suatu Benda') == TRUE) {

            $logis5 = 1;
            $visual5 = 0;
            $interpersonal5 = 0;
        } else if (($per5 == 'Senang Mengingat Melalui Diagram') == TRUE) {

            $logis5 = 0;
            $visual5 = 1;
            $interpersonal5 = 0;
        } else if (($per5 == 'Senang Bekerja Dalam Sebuah Tim') == TRUE) {

            $logis5 = 0;
            $visual5 = 0;
            $interpersonal5 = 1;
        }

        // hasil

        $hasillogis = ($logis1 + $logis2 + $logis3 + $logis4 + $logis5);
        $hasilvisual = ($visual1 + $visual2 + $visual3 + $visual4 + $visual5);
        $hasilinterpersonal = ($interpersonal1 + $interpersonal2 + $interpersonal3 + $interpersonal4 + $interpersonal5);


        if (($hasillogis > $hasilvisual) && ($hasillogis > $hasilinterpersonal)) {
            $minat_bakat = "Kecerdasan Logis (Teknik Informatika)";
        } else if (($hasilvisual > $hasillogis) && ($hasilvisual > $hasilinterpersonal)) {
            $minat_bakat = "Kecerdasan Visual (Teknik Sipil)";
        } else if (($hasilinterpersonal > $hasillogis) && ($hasilinterpersonal > $hasilvisual)) {
            $minat_bakat = "Kecerdasan Interpersonal (Kedokteran)";
        } else if (($hasillogis = $hasilvisual) && ($hasilvisual = $hasilinterpersonal)) {
            $minat_bakat = "Kecerdasan Visual (Teknik Sipil)";
        } else if (($hasillogis = $hasilvisual) && ($hasillogis = $hasilinterpersonal)) {
            $minat_bakat = "Kecerdasan Logis (Teknik Informatika)";
        } else if (($hasilinterpersonal = $hasilvisual) && ($hasilinterpersonal = $hasillogis)) {
            $minat_bakat = "Kecerdasan Interpersonal (Kedokteran)";
        } else {
            $minat_bakat = "Error";
        }


        // Rule Minat Bakat
        // if ((($per1 == "R1") && ($per2 == "R2") && ($per3 == "R3") && ($per4 == "R4")) == TRUE) {
        //       $minat_bakat = 'verbal';
        //  } else {
        //      $minat_bakat  = 'errror';
        //  } //


        $data = [
            'title'  => 'Minat Bakat IPA',
            'data_siswa' =>  $this->m_siswa->getAllMinbatIpa(),
            'nis' => $nis,
            'nama' => $nama,


            'per1' => $per1,
            'per2' => $per2,
            'per3' => $per3,
            'per4' => $per4,
            'per5' => $per5,


            'logis1' => $logis1,
            'logis2' => $logis2,
            'logis3' => $logis3,
            'logis4' => $logis4,
            'visual1' => $visual1,
            'visual2' => $visual2,
            'visual3' => $visual3,
            'visual4' => $visual4,
            'interpersonal1' => $interpersonal1,
            'interpersonal2' => $interpersonal2,
            'interpersonal3' => $interpersonal3,
            'interpersonal4' => $interpersonal4,


            'hasillogis' => $hasillogis,
            'hasilvisual' => $hasilvisual,
            'hasilinterpersonal' => $hasilinterpersonal,

            'minat_bakat' => $minat_bakat
        ];

        $simpan_data = [
            'nis' => $nis,
            'nama' => $nama,

            'minbat_rekjur' => $minat_bakat
        ];

        $cek = $this->db->query("SELECT * FROM tbl_minbat_ipa where nis='" . $nis . "'")->num_rows();
        if ($cek > 0) {
            $this->session->set_flashdata('flashrekjurgagal', ', Ulangi');
            redirect('controllerminatbakatipa/index');
        } else {
            $this->m_siswa->tambahMinbatSiswaIpa($simpan_data);
            $this->session->set_flashdata('flashrekjursukses', 'Diproses');
        }




        $this->load->view('includes/headerr', $data);
        $this->load->view('jurusan_ipa/minatbakat', $data);
        $this->load->view('includes/js_minbat_ipa');
        $this->load->view('includes/footer');
    }
}
