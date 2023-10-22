<?php
class M_Siswa extends CI_Model
{
    public function getAllSiswa()
    {
        $query  = $this->db->get('tbl_siswa');
        return $query->result_array();
    }

    public function tambahDataSiswa()
    {
        $data   = [
            "nis" => $this->input->post('nis'),
            "nama_lengkap" => $this->input->post('nama'),
            "kelas" => $this->input->post('kelas'),
            "alamat" => $this->input->post('alamat'),
            "jenkel" => $this->input->post('jenkel'),
            "pw_login" => $this->input->post('pwlogin')
        ];

        $this->db->insert('tbl_siswa', $data);
    }

    public function join()
    {
        $this->db->select('*');
        $this->db->from('tbl__nilai_rekjur_ipa');
        $this->db->join('tbl_siswa', 'tbl_siswa.id_rekjur_nilai = tbl_nilai_rekjur_ipa.id_rekjur_nilai');
        return $this->db->get('');
    }

    public function hapusDataSiswa($id)
    {
        $this->db->where('nis', $id);
        $this->db->delete('tbl_siswa');
    }

    public function getSiswaById($id)
    {
        return $this->db->get_where('tbl_siswa', ['nis' => $id])->row_array();
    }

    public function updateDataSiswa()
    {
        $data   = [
            "nis" => $this->input->post('nis'),
            "nama_lengkap" => $this->input->post('nama'),
            "kelas" => $this->input->post('kelas'),
            "alamat" => $this->input->post('alamat'),
            "jenkel" => $this->input->post('jenkel'),
            "pw_login" => $this->input->post('pwlogin')
        ];

        $this->db->where('nis', $this->input->post('id'));
        $this->db->update('tbl_siswa', $data);
    }

    // public function cariDataSiswa()
    // {
    //     $keyword = $this->input->post('keyword', true);
    //     $this->db->like('nama_lengkap', $keyword);
    //     $this->db->or_like('nis', $keyword);
    //     return $this->db->get('tbl_siswa')->result_array();
    // }

    public function searchNis($title)
    {
        $this->db->like('nis', $title);
        $this->db->order_by('nis', 'ASC');
        $this->db->limit(10);
        return $this->db->get('tbl_siswa')->result();
    }


    //-------------------------------------------------------------------
    // Model Untuk Nilai Siswa IPA
    function cari($nis)
    {
        $query = $this->db->get_where('tbl_siswa', array('nis' => $nis));
        return $query;
    }

    function tampil_data()
    {
        return $this->db->get('tbl_siswa');
    }

    public function getAllNilaiSiswaIpa()
    {
        $query  = $this->db->get('tbl_nilai_siswa_ipa');
        return $query->result_array();
    }

    public function getKelasIpa()
    {
        $this->db->where_in('kelas', array('XII-MIA 1', 'XII-MIA 2'));
        $query = $this->db->get('tbl_siswa');
        return $query->result_array();
    }

    public function hapusNilaiSiswaIpa($id)
    {
        $this->db->where('nis', $id);
        $this->db->delete('tbl_nilai_siswa_ipa');
    }

    public function hapusDataRekjurIpa($id)
    {
        $this->db->where('nis', $id);
        $this->db->delete('tbl_nilai_rekjur_ipa');
    }

    public function tambahNilaiSiswaIpa()
    {
        $data   = [
            "nis" => $this->input->post('nis'),
            "nama_lengkap" => $this->input->post('nama_lengkap'),
            "kelas" => $this->input->post('kelas'),
            "nilaibio_s1" => $this->input->post('biologiS1'),
            "nilaibio_s2" => $this->input->post('biologiS2'),
            "nilaibio_s3" => $this->input->post('biologiS3'),
            "nilaibio_s4" => $this->input->post('biologiS4'),
            "nilaibio_s5" => $this->input->post('biologiS5'),
            "nilai_rata_bio" => $this->input->post('nilai_biologi'),
            "nilaimtk_s1" => $this->input->post('mtk_s1'),
            "nilaimtk_s2" => $this->input->post('mtk_s2'),
            "nilaimtk_s3" => $this->input->post('mtk_s3'),
            "nilaimtk_s4" => $this->input->post('mtk_s4'),
            "nilaimtk_s5" => $this->input->post('mtk_s5'),
            "nilai_rata_mtk" => $this->input->post('nilai_mtk'),
            "nilaiinggris_s1" => $this->input->post('inggris_s1'),
            "nilaiinggris_s2" => $this->input->post('inggris_s2'),
            "nilaiinggris_s3" => $this->input->post('inggris_s3'),
            "nilaiinggris_s4" => $this->input->post('inggris_s4'),
            "nilaiinggris_s5" => $this->input->post('inggris_s5'),
            "nilai_rata_inggris" => $this->input->post('nilai_inggris'),
            "nilaifisika_s1" => $this->input->post('fisika_s1'),
            "nilaifisika_s2" => $this->input->post('fisika_s2'),
            "nilaifisika_s3" => $this->input->post('fisika_s3'),
            "nilaifisika_s4" => $this->input->post('fisika_s4'),
            "nilaifisika_s5" => $this->input->post('fisika_s5'),
            "nilai_rata_fisika" => $this->input->post('nilai_fisika')
        ];

        $this->db->insert('tbl_nilai_siswa_ipa', $data);
    }

    public function updateNilaiSiswaIpa()
    {
        $data   = [
            "nis" => $this->input->post('nis'),
            "nama_lengkap" => $this->input->post('nama_lengkap'),
            "kelas" => $this->input->post('kelas'),
            "nilaibio_s1" => $this->input->post('biologiS1'),
            "nilaibio_s2" => $this->input->post('biologiS2'),
            "nilaibio_s3" => $this->input->post('biologiS3'),
            "nilaibio_s4" => $this->input->post('biologiS4'),
            "nilaibio_s5" => $this->input->post('biologiS5'),
            "nilai_rata_bio" => $this->input->post('nilai_biologi'),
            "nilaimtk_s1" => $this->input->post('mtk_s1'),
            "nilaimtk_s2" => $this->input->post('mtk_s2'),
            "nilaimtk_s3" => $this->input->post('mtk_s3'),
            "nilaimtk_s4" => $this->input->post('mtk_s4'),
            "nilaimtk_s5" => $this->input->post('mtk_s5'),
            "nilai_rata_mtk" => $this->input->post('nilai_mtk'),
            "nilaiinggris_s1" => $this->input->post('inggris_s1'),
            "nilaiinggris_s2" => $this->input->post('inggris_s2'),
            "nilaiinggris_s3" => $this->input->post('inggris_s3'),
            "nilaiinggris_s4" => $this->input->post('inggris_s4'),
            "nilaiinggris_s5" => $this->input->post('inggris_s5'),
            "nilai_rata_inggris" => $this->input->post('nilai_inggris'),
            "nilaifisika_s1" => $this->input->post('fisika_s1'),
            "nilaifisika_s2" => $this->input->post('fisika_s2'),
            "nilaifisika_s3" => $this->input->post('fisika_s3'),
            "nilaifisika_s4" => $this->input->post('fisika_s4'),
            "nilaifisika_s5" => $this->input->post('fisika_s5'),
            "nilai_rata_fisika" => $this->input->post('nilai_fisika')
        ];

        $this->db->where('id_tbl_nilai', $this->input->post('id'));
        $this->db->update('tbl_nilai_siswa_ipa', $data);
    }

    public function getNilaiSiswaIpaById($id)
    {
        return $this->db->get_where('tbl_nilai_siswa_ipa', ['id_tbl_nilai' => $id])->row_array();
    }


    //-------------------------------------------------------------------
    // Model Untuk Nilai Siswa IPS

    public function getAllNilaiSiswaIps()
    {
        $query  = $this->db->get('tbl_nilai_siswa_ips');
        return $query->result_array();
    }

    public function getKelasIps()
    {
        $this->db->where_in('kelas', array('XII-IIS 1'));
        $query = $this->db->get('tbl_siswa');
        return $query->result_array();
    }

    public function hapusNilaiSiswaIps($id)
    {
        $this->db->where('nis', $id);
        $this->db->delete('tbl_nilai_siswa_ips');
    }

    public function hapusDataRekjurIps($id)
    {
        $this->db->where('nis', $id);
        $this->db->delete('tbl_nilai_rekjur_ips');
    }

    public function tambahNilaiSiswaIps()
    {
        $data   = [
            "nis" => $this->input->post('nis'),
            "nama_lengkap" => $this->input->post('nama_lengkap'),
            "kelas" => $this->input->post('kelas'),
            "nilaieko_s1" => $this->input->post('ekonomiS1'),
            "nilaieko_s2" => $this->input->post('ekonomiS2'),
            "nilaieko_s3" => $this->input->post('ekonomiS3'),
            "nilaieko_s4" => $this->input->post('ekonomiS4'),
            "nilaieko_s5" => $this->input->post('ekonomiS5'),
            "nilai_rata_eko" => $this->input->post('nilai_ekonomi'),
            "nilaimtk_s1" => $this->input->post('mtk_s1'),
            "nilaimtk_s2" => $this->input->post('mtk_s2'),
            "nilaimtk_s3" => $this->input->post('mtk_s3'),
            "nilaimtk_s4" => $this->input->post('mtk_s4'),
            "nilaimtk_s5" => $this->input->post('mtk_s5'),
            "nilai_rata_mtk" => $this->input->post('nilai_mtk'),
            "nilaiinggris_s1" => $this->input->post('inggris_s1'),
            "nilaiinggris_s2" => $this->input->post('inggris_s2'),
            "nilaiinggris_s3" => $this->input->post('inggris_s3'),
            "nilaiinggris_s4" => $this->input->post('inggris_s4'),
            "nilaiinggris_s5" => $this->input->post('inggris_s5'),
            "nilai_rata_inggris" => $this->input->post('nilai_inggris'),
            "nilaippkn_s1" => $this->input->post('ppkn_s1'),
            "nilaippkn_s2" => $this->input->post('ppkn_s2'),
            "nilaippkn_s3" => $this->input->post('ppkn_s3'),
            "nilaippkn_s4" => $this->input->post('ppkn_s4'),
            "nilaippkn_s5" => $this->input->post('ppkn_s5'),
            "nilai_rata_ppkn" => $this->input->post('nilai_ppkn'),
            "nilaisosio_s1" => $this->input->post('sosio_s1'),
            "nilaisosio_s2" => $this->input->post('sosio_s2'),
            "nilaisosio_s3" => $this->input->post('sosio_s3'),
            "nilaisosio_s4" => $this->input->post('sosio_s4'),
            "nilaisosio_s5" => $this->input->post('sosio_s5'),
            "nilai_rata_sosio" => $this->input->post('nilai_sosio')
        ];

        $this->db->insert('tbl_nilai_siswa_ips', $data);
    }

    public function updateNilaiSiswaIps()
    {
        $data   = [
            "nis" => $this->input->post('nis'),
            "nama_lengkap" => $this->input->post('nama_lengkap'),
            "kelas" => $this->input->post('kelas'),
            "nilaieko_s1" => $this->input->post('ekonomiS1'),
            "nilaieko_s2" => $this->input->post('ekonomiS2'),
            "nilaieko_s3" => $this->input->post('ekonomiS3'),
            "nilaieko_s4" => $this->input->post('ekonomiS4'),
            "nilaieko_s5" => $this->input->post('ekonomiS5'),
            "nilai_rata_eko" => $this->input->post('nilai_ekonomi'),
            "nilaimtk_s1" => $this->input->post('mtk_s1'),
            "nilaimtk_s2" => $this->input->post('mtk_s2'),
            "nilaimtk_s3" => $this->input->post('mtk_s3'),
            "nilaimtk_s4" => $this->input->post('mtk_s4'),
            "nilaimtk_s5" => $this->input->post('mtk_s5'),
            "nilai_rata_mtk" => $this->input->post('nilai_mtk'),
            "nilaiinggris_s1" => $this->input->post('inggris_s1'),
            "nilaiinggris_s2" => $this->input->post('inggris_s2'),
            "nilaiinggris_s3" => $this->input->post('inggris_s3'),
            "nilaiinggris_s4" => $this->input->post('inggris_s4'),
            "nilaiinggris_s5" => $this->input->post('inggris_s5'),
            "nilai_rata_inggris" => $this->input->post('nilai_inggris'),
            "nilaippkn_s1" => $this->input->post('ppkn_s1'),
            "nilaippkn_s2" => $this->input->post('ppkn_s2'),
            "nilaippkn_s3" => $this->input->post('ppkn_s3'),
            "nilaippkn_s4" => $this->input->post('ppkn_s4'),
            "nilaippkn_s5" => $this->input->post('ppkn_s5'),
            "nilai_rata_ppkn" => $this->input->post('nilai_ppkn'),
            "nilaisosio_s1" => $this->input->post('sosio_s1'),
            "nilaisosio_s2" => $this->input->post('sosio_s2'),
            "nilaisosio_s3" => $this->input->post('sosio_s3'),
            "nilaisosio_s4" => $this->input->post('sosio_s4'),
            "nilaisosio_s5" => $this->input->post('sosio_s5'),
            "nilai_rata_sosio" => $this->input->post('nilai_sosio')
        ];

        $this->db->where('id_tbl_nilai', $this->input->post('id'));
        $this->db->update('tbl_nilai_siswa_ips', $data);
    }

    public function getNilaiSiswaIpsById($id)
    {
        return $this->db->get_where('tbl_nilai_siswa_ips', ['id_tbl_nilai' => $id])->row_array();
    }


    //------------------------------------------------------------
    //Model Jurusan IPA
    function cariJurIpa($nis)
    {
        $query = $this->db->get_where('tbl_nilai_siswa_ipa', array('nis' => $nis));
        return $query;
    }

    public function tambahRekjurSiswaIpa($simpan_data)
    {
        $this->db->insert('tbl_nilai_rekjur_ipa', $simpan_data);
    }


    //------------------------------------------------------------
    //Model Jurusan IPS
    function cariJurIps($nis)
    {
        $query = $this->db->get_where('tbl_nilai_siswa_ips', array('nis' => $nis));
        return $query;
    }

    public function tambahRekjurSiswaIps($simpan_data)
    {
        $this->db->insert('tbl_nilai_rekjur_ips', $simpan_data);
    }


    //------------------------------------------------------------
    //Model Minat Bakat IPA
    function cariMinatBakatIpa($nis)
    {
        $query = $this->db->get_where('tbl_kuesioner_ipa', array('nis' => $nis));
        return $query;
    }

    public function tambahMinbatSiswaIpa($simpan_data)
    {
        $this->db->insert('tbl_minbat_ipa', $simpan_data);
    }

    public function getAllMinbatIpa()
    {
        $query  = $this->db->get('tbl_kuesioner_ipa');
        return $query->result_array();
    }


    //------------------------------------------------------------
    //Model Minat Bakat IPS
    function cariMinatBakatIps($nis)
    {
        $query = $this->db->get_where('tbl_kuesioner_ips', array('nis' => $nis));
        return $query;
    }

    public function tambahMinbatSiswaIps($simpan_data)
    {
        $this->db->insert('tbl_minbat_ips', $simpan_data);
    }

    public function getAllMinbatIps()
    {
        $query  = $this->db->get('tbl_kuesioner_ips');
        return $query->result_array();
    }

    //------------------------
    //Kuesioner IPA
    public function tambahKuesionerSiswaIpa($simpan_data)
    {
        $this->db->insert('tbl_kuesioner_ipa', $simpan_data);
    }

    //------------------------
    //Kuesioner IPS
    public function tambahKuesionerSiswaIps($simpan_data)
    {
        $this->db->insert('tbl_kuesioner_ips', $simpan_data);
    }

    //-------------------------------
    //Hasil IPA Nilai
    public function hapusHasilRekjurNilaiIpa($id)
    {
        $this->db->where('nis', $id);
        $this->db->delete('tbl_nilai_rekjur_ipa');
    }


    //-------------------------------
    //Hasil IPA Minbat
    public function hapusHasilRekjurMinbatIpa($id)
    {
        $this->db->where('nis', $id);
        $this->db->delete('tbl_minbat_ipa');
    }
}
