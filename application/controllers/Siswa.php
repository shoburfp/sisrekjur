<?php

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_Siswa' => 'm_siswa']);
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title']      = 'Data Siswa';
        $data['data_siswa'] = $this->m_siswa->getAllSiswa();
        $data['kelas']      = ['XII-MIA 1', 'XII-MIA 2', 'XII-IIS 1'];
        $data['jenkel']      = ['Laki-Laki', 'Perempuan'];
        // if($this->input->post('keyword')) {
        //     $data['data_siswa'] = $this->m_siswa->cariDataSiswa();
        // }
        $this->load->view('includes/headerr', $data);
        $this->load->view('siswa/data_siswa');
        $this->load->view('includes/footer');
    }

    public function tambah()
    {
        //$data['title']      = 'Form Tambah Data Siswa';

        $cek = $this->db->query("SELECT * FROM tbl_siswa where nis='" . $this->input->post('nis') . "'")->num_rows();
        if ($cek <= 0) {

            $this->m_siswa->tambahDataSiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('siswa/index');
        } else {

            $this->session->set_flashdata('flashdanger', ', Ulangi');

            redirect('siswa/index');
        }

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nis', 'NIS', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('pwlogin', 'Password Login', 'required');
        //if($this->form_validation->run() == FALSE ) {
        //$this->load->view('includes/header', $data);
        //$this->load->view('siswa/tambah');
        // $this->load->view('includes/footer');
        //} else {

        //xa}
    }

    public function hapus($id)
    {
        $this->m_siswa->hapusDataSiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('siswa');
    }

    public function detail($id)
    {
        $data['title']      = 'Detail Data Siswa';
        $data['data_siswa'] = $this->m_siswa->getSiswaById($id);
        $this->load->view('includes/headerr', $data);
        $this->load->view('siswa/detail');
        $this->load->view('includes/footer');
    }

    public function update($id)
    {
        $data['title']      = 'Form Update Data Siswa';
        $data['data_siswa_id'] = $this->m_siswa->getSiswaById($id);
        $data['kelas']      = ['XII-MIA 1', 'XII-MIA 2', 'XII-IIS 1'];
        $data['jenkel']      = ['Laki-Laki', 'Perempuan'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nis', 'NIS', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('pwlogin', 'Password Login', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('includes/headerr', $data);
            $this->load->view('siswa/update', $data);
            $this->load->view('includes/footer');
        } else {
            $this->m_siswa->updateDataSiswa();
            $this->session->set_flashdata('flash', 'Diupdate');
            redirect('siswa/index');
        }
    }

    public function tampilJsonSiswa()
    {
        $a = array();
        $datasiswa = $this->m_siswa->getAllSiswa();

        echo json_encode($datasiswa, TRUE);
    }
}
