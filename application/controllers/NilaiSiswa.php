<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class NilaiSiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_Siswa' => 'm_siswa']);
    }

    public function index()
    {
        $data   = [
            'title'         => 'Nilai Siswa',
            'data_siswa'    => $this->db->query('SELECT * FROM tbl_siswa')->result_array(),
            'record'    => $this->m_siswa->getKelasIpa(),
            'nilai_siswa_ipa' => $this->m_siswa->getAllNilaiSiswaIpa()
        ];

        $this->load->view('includes/headerr', $data);
        $this->load->view('nilai_siswa/index', $data);
        $this->load->view('includes/footer');
    }

    public function cari()
    {
        $nis = $_GET['nis'];
        $cari = $this->m_siswa->cari($nis)->result();
        echo json_encode($cari);
    }

    public function hapus($id)
    {
        $this->m_siswa->hapusNilaiSiswaIpa($id);
        $this->m_siswa->hapusDataRekjurIpa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('nilaisiswa');
    }

    public function tambah()
    {

        $cek = $this->db->query("SELECT * FROM tbl_nilai_siswa_ipa where nis='" . $this->input->post('nis') . "'")->num_rows();
        if ($cek <= 0) {
            $this->m_siswa->tambahNilaiSiswaIpa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('nilaisiswa/index');
        } else {

            $this->session->set_flashdata('flashdanger', ', Ulangi');

            redirect('nilaisiswa/index');
        }
    }

    public function update($id)
    {
        $data['nilai_siswa_ipa_id'] = $this->m_siswa->getSiswaById($id);

        $id = $this->input->post('id', true);
        $this->m_siswa->updateNilaiSiswaIpa();
        $this->session->set_flashdata('flash', 'Diupdate');

        redirect('nilaisiswa/index');
    }
}
