<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ControllerMinatBakatIps extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_Siswa' => 'm_siswa']);
    }

    public function index()
    {
        $data   = [
            'title'         => 'Minat Bakat IPS',
            'data_siswa' => $this->m_siswa->getAllMinbatIps()

        ];

        $this->load->view('includes/headerr', $data);
        $this->load->view('jurusan_ips/minatbakat', $data);
        $this->load->view('includes/js_minbat_ips');
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
        $cari = $this->m_siswa->cariMinatBakatIps($nis)->result();
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

        if (($per1 == 'R1') == TRUE) {
            $verbal1 = 1;
            $logis1 = 0;

            $interpersonal1 = 0;
        } else if (($per1 == 'R6') == TRUE) {
            $verbal1 = 0;
            $logis1 = 1;

            $interpersonal1 = 0;
        } else if (($per1 == 'R16') == TRUE) {

            $logis1 = 0;
            $verbal1 = 0;
            $interpersonal1 = 1;
        }

        // per2
        if (($per2 == 'R2') == TRUE) {

            $logis2 = 0;
            $verbal2 = 1;
            $interpersonal2 = 0;
        } else if (($per2 == 'R7') == TRUE) {

            $logis2 = 1;
            $verbal2 = 0;
            $interpersonal2 = 0;
        } else if (($per2 == 'R17') == TRUE) {

            $logis2 = 0;
            $verbal2 = 0;
            $interpersonal2 = 1;
        }

        if (($per3 == 'R3') == TRUE) {

            $logis3 = 0;
            $verbal3 = 1;
            $interpersonal3 = 0;
        } else if (($per3 == 'R8') == TRUE) {

            $logis3 = 1;
            $verbal3 = 0;
            $interpersonal3 = 0;
        } else if (($per3 == 'R18') == TRUE) {

            $logis3 = 0;
            $verbal3 = 0;
            $interpersonal3 = 1;
        }

        // per4
        if (($per4 == 'R4') == TRUE) {

            $logis4 = 0;
            $verbal4 = 1;
            $interpersonal4 = 0;
        } else if (($per4 == 'R9') == TRUE) {

            $logis4 = 1;
            $verbal4 = 0;
            $interpersonal4 = 0;
        } else if (($per4 == 'R19') == TRUE) {

            $logis4 = 0;
            $verbal4 = 0;
            $interpersonal4 = 1;
        }

        // per5
        if (($per5 == 'R5') == TRUE) {

            $logis5 = 0;
            $verbal5 = 1;
            $interpersonal5 = 0;
        } else if (($per5 == 'R10') == TRUE) {

            $logis5 = 1;
            $verbal5 = 0;
            $interpersonal5 = 0;
        } else if (($per5 == 'R20') == TRUE) {

            $logis5 = 0;
            $verbal5 = 0;
            $interpersonal5 = 1;
        }

        // hasil

        $hasillogis = ($logis1 + $logis2 + $logis3 + $logis4 + $logis5);
        $hasilverbal = ($verbal1 + $verbal2 + $verbal3 + $verbal4 + $verbal5);
        $hasilinterpersonal = ($interpersonal1 + $interpersonal2 + $interpersonal3 + $interpersonal4 + $interpersonal5);


        if (($hasillogis > $hasilverbal) && ($hasillogis > $hasilinterpersonal)) {
            $minat_bakat = "Kecerdasan Logis (Akuntansi)";
        } else if (($hasilverbal > $hasillogis) && ($hasilverbal > $hasilinterpersonal)) {
            $minat_bakat = "Kecerdasan verbal (Ilmu Politik)";
        } else if (($hasilinterpersonal > $hasillogis) && ($hasilinterpersonal > $hasilverbal)) {
            $minat_bakat = "Kecerdasan Interpersonal (Psikologi)";
        } else if (($hasillogis = $hasilverbal) && ($hasilverbal = $hasilinterpersonal)) {
            $minat_bakat = "Kecerdasan Verbal (Ilmu Politik)";
        } else if (($hasillogis = $hasilverbal) && ($hasillogis = $hasilinterpersonal)) {
            $minat_bakat = "Kecerdasan Logis (Akuntansi)";
        } else if (($hasilinterpersonal = $hasilverbal) && ($hasilinterpersonal = $hasillogis)) {
            $minat_bakat = "Kecerdasan Interpersonal (Psikologi)";
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
            'title'  => 'Minat Bakat IPS',
            'data_siswa' =>  $this->m_siswa->getAllSiswa(),
            'nis' => $nis,
            'nama' => $nama,


            'per1' => $per1,
            'per2' => $per2,
            'per3' => $per3,
            'per4' => $per4,


            'logis1' => $logis1,
            'logis2' => $logis2,
            'logis3' => $logis3,
            'logis4' => $logis4,
            'verbal1' => $verbal1,
            'verbal2' => $verbal2,
            'verbal3' => $verbal3,
            'verbal4' => $verbal4,
            'interpersonal1' => $interpersonal1,
            'interpersonal2' => $interpersonal2,
            'interpersonal3' => $interpersonal3,
            'interpersonal4' => $interpersonal4,


            'hasillogis' => $hasillogis,
            'hasilverbal' => $hasilverbal,
            'hasilinterpersonal' => $hasilinterpersonal,

            'minat_bakat' => $minat_bakat
        ];

        $simpan_data = [
            'nis' => $nis,
            'nama' => $nama,

            'minbat_rekjur' => $minat_bakat
        ];


        $cek = $this->db->query("SELECT * FROM tbl_minbat_ips where nis='" . $nis . "'")->num_rows();
        if ($cek > 0) {
            $this->session->set_flashdata('flashrekjurgagal', ', Ulangi');
            redirect('controllerminatbakatips/index');
        } else {
            $this->m_siswa->tambahMinbatSiswaIps($simpan_data);
            $this->session->set_flashdata('flashrekjursukses', 'Diproses');
        }



        $this->session->set_flashdata('flashhh', 'Diproses');
        $this->load->view('includes/headerr', $data);
        $this->load->view('jurusan_ips/minatbakat', $data);
        $this->load->view('includes/js_minbat_ips');
        $this->load->view('includes/footer');
    }
}
