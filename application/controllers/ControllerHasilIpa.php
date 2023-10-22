<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ControllerHasilIpa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_Siswa' => 'm_siswa']);
    }

    public function index()
    {
        $data   = [
            'title'         => 'Hasil Data IPA',
        ];
        $this->load->view('includes/headerr', $data);
        $this->load->view('hasil_ipa/index', $data);
        $this->load->view('includes/footer');
    }

    public function ipa_nilai()
    {
        $data   = [
            'title'         => 'Hasil Data IPA',
            'data' => $this->db->query('SELECT * FROM tbl_nilai_rekjur_ipa')->result_array(),
            'record' => $this->m_siswa->getKelasIpa(),
        ];

        $this->load->view('includes/headerr', $data);
        $this->load->view('hasil_ipa/ipa_nilai', $data);
        $this->load->view('includes/footer');
    }

    public function ipa_minbat()
    {
        $data   = [
            'title'         => 'Hasil Data IPA',
            'dataa' => $this->db->query('SELECT * FROM tbl_minbat_ipa')->result_array(),
            'record' => $this->m_siswa->getKelasIpa(),
        ];

        $this->load->view('includes/headerr', $data);
        $this->load->view('hasil_ipa/ipa_rekjur', $data);
        $this->load->view('includes/footer');
    }

    public function hapus($id)
    {
        $this->m_siswa->hapusHasilRekjurNilaiIpa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('ControllerHasilIpa/ipa_nilai');
    }

    public function hapus2($id)
    {
        $this->m_siswa->hapusHasilRekjurMinbatIpa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('ControllerHasilIpa/ipa_minbat');
    }
}
