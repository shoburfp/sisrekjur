<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ControllerKuesioner extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_Siswa' => 'm_siswa']);
    }

    public function index()
    {
        $data   = [
            'title'         => 'Form Kuesioner Minat Bakat Siswa'
            // 'data_siswa' => $this->m_siswa->getAllSiswa()

        ];

        $this->load->view('kuesioner_minbat/index', $data);
        $this->load->view('includes/footer');
    }

    public function index_ipa()
    {
        $data   = [
            'title'         => 'Form Kuesioner Minat Bakat Siswa IPA'
            // 'data_siswa' => $this->m_siswa->getAllSiswa()

        ];
        $data['kelas']      = ['XII-MIA 1', 'XII-MIA 2'];

        $this->load->view('kuesioner_minbat/index_ipa', $data);
        $this->load->view('includes/footer');
    }

    public function index_ips()
    {
        $data   = [
            'title'         => 'Form Kuesioner Minat Bakat Siswa IPS'

        ];
        $data['kelas']      = ['XII-IIS 1'];

        $this->load->view('kuesioner_minbat/index_ips', $data);
        $this->load->view('includes/footer');
    }

    public function done()
    {
        $data   = [
            'title'         => 'Terima Kasih'
        ];

        $this->load->view('kuesioner_minbat/done', $data);
        $this->load->view('includes/footer');
    }

    public function proses()
    {
        $nis = $this->input->post('nis');
        $nama = $this->input->post('nama');
        $kelas = $this->input->post('kelas');
        $per1 = $this->input->post('per1');
        $per2 = $this->input->post('per2');
        $per3 = $this->input->post('per3');
        $per4 = $this->input->post('per4');
        $per5 = $this->input->post('per5');




        $data = [
            'title'  => 'Form Kuesioner Minat Bakat Siswa IPA'
        ];
        $data['kelas'] = ['XII-MIA 1', 'XII-MIA 2'];

        $simpan_data = [
            'nis' => $nis,
            'nama_lengkap' => $nama,
            'kelas' => $kelas,
            'pert1' => $per1,
            'pert2' => $per2,
            'pert3' => $per3,
            'pert4' => $per4,
            'pert5' => $per5,
        ];

        $cek = $this->db->query("SELECT * FROM tbl_kuesioner_ipa where nis='" . $nis . "'")->num_rows();
        if ($cek > 0) {
            $this->session->set_flashdata('flashrekjurgagal', ', Ulangi');
            redirect('ControllerKuesioner/index_ipa');
        } else {
            $this->m_siswa->tambahKuesionerSiswaIpa($simpan_data);
            redirect('ControllerKuesioner/done');
        }

        $this->load->view('kuesioner_minbat/index_ipa', $data);
        $this->load->view('includes/footer');
    }

    public function prosesIps()
    {
        $nis = $this->input->post('nis');
        $nama = $this->input->post('nama');
        $kelas = $this->input->post('kelas');
        $per1 = $this->input->post('per1');
        $per2 = $this->input->post('per2');
        $per3 = $this->input->post('per3');
        $per4 = $this->input->post('per4');
        $per5 = $this->input->post('per5');




        $data = [
            'title'  => 'Form Kuesioner Minat Bakat Siswa IPS'
        ];
        $data['kelas'] = ['XII-IIS 1'];

        $simpan_data = [
            'nis' => $nis,
            'nama_lengkap' => $nama,
            'kelas' => $kelas,
            'pert1' => $per1,
            'pert2' => $per2,
            'pert3' => $per3,
            'pert4' => $per4,
            'pert5' => $per5,
        ];

        $cek = $this->db->query("SELECT * FROM tbl_kuesioner_ips where nis='" . $nis . "'")->num_rows();
        if ($cek > 0) {
            $this->session->set_flashdata('flashrekjurgagal', ', Ulangi');
            redirect('ControllerKuesioner/index_ips');
        } else {
            $this->m_siswa->tambahKuesionerSiswaIps($simpan_data);
            redirect('ControllerKuesioner/done');
        }

        $this->load->view('kuesioner_minbat/index_ips', $data);
        $this->load->view('includes/footer');
    }
}
