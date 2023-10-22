<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ControllerNilaiIps extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_Siswa' => 'm_siswa']);
    }

    public function index()
    {
        $data   = [
            'title'         => 'Nilai Siswa IPS',
            'data_siswa'    => $this->db->query('SELECT * FROM tbl_siswa')->result_array(),
            'record'    => $this->m_siswa->getKelasIps(),
            'nilai_siswa_ips' => $this->m_siswa->getAllNilaiSiswaIps()
        ];

        $this->load->view('includes/headerr', $data);
        $this->load->view('nilai_siswaIps/index', $data);
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
        $this->m_siswa->hapusNilaiSiswaIps($id);
        $this->m_siswa->hapusDataRekjurIps($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('controllernilaiips');
    }

    public function tambah()
    {

        $cek = $this->db->query("SELECT * FROM tbl_nilai_siswa_ips where nis='" . $this->input->post('nis') . "'")->num_rows();
        if ($cek <= 0) {
        $this->m_siswa->tambahNilaiSiswaIps();
        $this->session->set_flashdata('flash', 'Ditambahkan');
        redirect('controllernilaiips/index');
        } else{

            $this->session->set_flashdata('flashdanger', ', Ulangi');

            redirect('controllernilaiips/index');
        }
    }

    public function update($id)
    {
        $data['nilai_siswa_ips_id'] = $this->m_siswa->getSiswaById($id);

        $this->m_siswa->updateNilaiSiswaIps();
        $this->session->set_flashdata('flash', 'Diupdate');
        redirect('controllernilaiips');
    }
}
