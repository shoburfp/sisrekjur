<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ControllerHasilIps extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_Siswa' => 'm_siswa']);
    }

    public function index()
    {
        $data   = [
            'title'         => 'Hasil Data IPs',
            'data_join' => $this->db->query('SELECT tbl_siswa.nis,tbl_siswa.nama_lengkap,tbl_siswa.kelas,tbl_nilai_rekjur_ips.rekjur,tbl_minbat_ips.minbat_rekjur 
            FROM tbl_siswa INNER JOIN tbl_nilai_rekjur_ips 
            ON tbl_siswa.nis=tbl_nilai_rekjur_ips.nis 
            INNER JOIN tbl_minbat_ips 
            ON tbl_siswa.nis=tbl_minbat_ips.nis')->result_array(),
            'record' => $this->m_siswa->getKelasIps(),


        ];

        $this->load->view('includes/headerr', $data);
        $this->load->view('hasil_ips/index', $data);

        $this->load->view('includes/footer');
    }
}
