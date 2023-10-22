<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ControllerJurIps extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_Siswa' => 'm_siswa']);
    }

    public function index()
    {
        $data   = [
            'title'         => 'Jurusan Siswa IPS'
        ];

        $this->load->view('includes/headerr', $data);
        $this->load->view('jurusan_ips/index', $data);
        $this->load->view('includes/footer');
    }

    public function fuzzyfikasi()
    {
        $data   = [
            'title'         => 'Fuzzyfikasi',
            'nilai_siswa_ips' => $this->m_siswa->getAllNilaiSiswaIps()
        ];

        $this->load->view('includes/headerr', $data);
        $this->load->view('jurusan_ips/fuzzyfikasi', $data);
        $this->load->view('includes/js_ips');
        $this->load->view('includes/footer');
    }

    public function cari()
    {
        $nis = $_GET['nis'];
        $cari = $this->m_siswa->cariJurIps($nis)->result();
        echo json_encode($cari);
    }

    public function proses()
    {
        $nis = $this->input->post('nis');
        $nama = $this->input->post('nama');
        $nilairataekonomi = $this->input->post('nrEko');
        $nilairatamtk = $this->input->post('nrMtk');
        $nilairatainggris = $this->input->post('nrInggris');
        $nilairatappkn = $this->input->post('nrPpkn');
        $nilairatasosio = $this->input->post('nrSosio');

        //Ekonomi
        //Derajat Keanggotaan Ekonomi Kurang
        if (((30 <= $nilairataekonomi) && ($nilairataekonomi <= 40)) == TRUE) {
            $ekonomiKurang = 1;
        } elseif (((40 < $nilairataekonomi) && ($nilairataekonomi < 50)) == TRUE) {
            $ekonomiKurang = (50 - $nilairataekonomi) / (50 - 40);
        } elseif (($nilairataekonomi >= 50) == TRUE) {
            $ekonomiKurang = 0;
        }

        //Derajat Keanggotaan Ekonomi Cukup
        if (((50 <= $nilairataekonomi) && ($nilairataekonomi <= 60)) == TRUE) {
            $ekonomiCukup = 1;
        } elseif (((40 < $nilairataekonomi) && ($nilairataekonomi < 50)) == TRUE) {
            $ekonomiCukup = ($nilairataekonomi - 40) / (50 - 40);
        } elseif (((60 < $nilairataekonomi) && ($nilairataekonomi < 70)) == TRUE) {
            $ekonomiCukup = (70 - $nilairataekonomi) / (70 - 60);
        } elseif ((($nilairataekonomi <= 40) || ($nilairataekonomi >= 70)) == TRUE) {
            $ekonomiCukup = 0;
        }

        //Derajat Keanggotaan Ekonomi Baik
        if (((70 <= $nilairataekonomi) && ($nilairataekonomi <= 80)) == TRUE) {
            $ekonomiBaik = 1;
        } elseif (((60 <= $nilairataekonomi) && ($nilairataekonomi <= 70)) == TRUE) {
            $ekonomiBaik = ($nilairataekonomi - 60) / (70 - 60);
        } elseif (((80 <= $nilairataekonomi) && ($nilairataekonomi <= 90)) == TRUE) {
            $ekonomiBaik = (90 - $nilairataekonomi) / (90 - 80);
        } elseif ((($nilairataekonomi <= 60) || ($nilairataekonomi >= 90)) == TRUE) {
            $ekonomiBaik = 0;
        }

        //Derajat Keanggotaan Ekonomi Sangat Baik
        if (((90 <= $nilairataekonomi) && ($nilairataekonomi <= 100)) == TRUE) {
            $ekonomiSb = 1;
        } elseif (((80 <= $nilairataekonomi) && ($nilairataekonomi <= 90)) == TRUE) {
            $ekonomiSb = ($nilairataekonomi - 80) / (90 - 80);
        } elseif (($nilairataekonomi <= 80) == TRUE) {
            $ekonomiSb = 0;
        }

        //MATEMATIKA
        //Derajat Keanggotaan Matematika Kurang
        if (((30 <= $nilairatamtk) && ($nilairatamtk <= 40)) == TRUE) {
            $mtkKurang = 1;
        } elseif (((40 < $nilairatamtk) && ($nilairatamtk < 50)) == TRUE) {
            $mtkKurang = (50 - $nilairatamtk) / (50 - 40);
        } elseif (($nilairatamtk >= 50) == TRUE) {
            $mtkKurang = 0;
        }

        //Derajat Keanggotaan Matematika Cukup
        if (((50 <= $nilairatamtk) && ($nilairatamtk <= 60)) == TRUE) {
            $mtkCukup = 1;
        } elseif (((40 < $nilairatamtk) && ($nilairatamtk < 50)) == TRUE) {
            $mtkCukup = ($nilairatamtk - 40) / (50 - 40);
        } elseif (((60 < $nilairatamtk) && ($nilairatamtk < 70)) == TRUE) {
            $mtkCukup = (70 - $nilairatamtk) / (70 - 60);
        } elseif ((($nilairatamtk <= 40) || ($nilairatamtk >= 70)) == TRUE) {
            $mtkCukup = 0;
        }

        //Derajat Keanggotaan Matematika Baik
        if (((70 <= $nilairatamtk) && ($nilairatamtk <= 80)) == TRUE) {
            $mtkBaik = 1;
        } elseif (((60 <= $nilairatamtk) && ($nilairatamtk <= 70)) == TRUE) {
            $mtkBaik = ($nilairatamtk - 60) / (70 - 60);
        } elseif (((80 <= $nilairatamtk) && ($nilairatamtk <= 90)) == TRUE) {
            $mtkBaik = (90 - $nilairatamtk) / (90 - 80);
        } elseif ((($nilairatamtk <= 60) || ($nilairatamtk >= 90)) == TRUE) {
            $mtkBaik = 0;
        }

        //Derajat Keanggotaan Matematika Sangat Baik
        if (((90 <= $nilairatamtk) && ($nilairatamtk <= 100)) == TRUE) {
            $mtkSb = 1;
        } elseif (((80 <= $nilairatamtk) && ($nilairatamtk <= 90)) == TRUE) {
            $mtkSb = ($nilairatamtk - 80) / (90 - 80);
        } elseif (($nilairatamtk <= 80) == TRUE) {
            $mtkSb = 0;
        }

        //B. INGGRIS
        //Derajat Keanggotaan B. Inggris Kurang
        if (((30 <= $nilairatainggris) && ($nilairatainggris <= 40)) == TRUE) {
            $inggrisKurang = 1;
        } elseif (((40 < $nilairatainggris) && ($nilairatainggris < 50)) == TRUE) {
            $inggrisKurang = (50 - $nilairatainggris) / (50 - 40);
        } elseif (($nilairatainggris >= 50) == TRUE) {
            $inggrisKurang = 0;
        }

        //Derajat Keanggotaan B. Inggris Cukup
        if (((50 <= $nilairatainggris) && ($nilairatainggris <= 60)) == TRUE) {
            $inggrisCukup = 1;
        } elseif (((40 < $nilairatainggris) && ($nilairatainggris < 50)) == TRUE) {
            $inggrisCukup = ($nilairatainggris - 40) / (50 - 40);
        } elseif (((60 < $nilairatainggris) && ($nilairatainggris < 70)) == TRUE) {
            $inggrisCukup = (70 - $nilairatainggris) / (70 - 60);
        } elseif ((($nilairatainggris <= 40) || ($nilairatainggris >= 70)) == TRUE) {
            $inggrisCukup = 0;
        }

        //Derajat Keanggotaan B. Inggris Baik
        if (((70 <= $nilairatainggris) && ($nilairatainggris <= 80)) == TRUE) {
            $inggrisBaik = 1;
        } elseif (((60 <= $nilairatainggris) && ($nilairatainggris <= 70)) == TRUE) {
            $inggrisBaik = ($nilairatainggris - 60) / (70 - 60);
        } elseif (((80 <= $nilairatainggris) && ($nilairatainggris <= 90)) == TRUE) {
            $inggrisBaik = (90 - $nilairatainggris) / (90 - 80);
        } elseif ((($nilairatainggris <= 60) || ($nilairatainggris >= 90)) == TRUE) {
            $inggrisBaik = 0;
        }

        //Derajat Keanggotaan B. Inggris Sangat Baik
        if (((90 <= $nilairatainggris) && ($nilairatainggris <= 100)) == TRUE) {
            $inggrisSb = 1;
        } elseif (((80 <= $nilairatainggris) && ($nilairatainggris <= 90)) == TRUE) {
            $inggrisSb = ($nilairatainggris - 80) / (90 - 80);
        } elseif (($nilairatainggris <= 80) == TRUE) {
            $inggrisSb = 0;
        }

        //PPKN
        //Derajat Keanggotaan PPKN Kurang
        if (((30 <= $nilairatappkn) && ($nilairatappkn <= 40)) == TRUE) {
            $ppknKurang = 1;
        } elseif (((40 < $nilairatappkn) && ($nilairatappkn < 50)) == TRUE) {
            $ppknKurang = (50 - $nilairatappkn) / (50 - 40);
        } elseif (($nilairatappkn >= 50) == TRUE) {
            $ppknKurang = 0;
        }

        //Derajat Keanggotaan PPKN Cukup
        if (((50 <= $nilairatappkn) && ($nilairatappkn <= 60)) == TRUE) {
            $ppknCukup = 1;
        } elseif (((40 < $nilairatappkn) && ($nilairatappkn < 50)) == TRUE) {
            $ppknCukup = ($nilairatappkn - 40) / (50 - 40);
        } elseif (((60 < $nilairatappkn) && ($nilairatappkn < 70)) == TRUE) {
            $ppknCukup = (70 - $nilairatappkn) / (70 - 60);
        } elseif ((($nilairatappkn <= 40) || ($nilairatappkn >= 70)) == TRUE) {
            $ppknCukup = 0;
        }

        //Derajat Keanggotaan PPKN Baik
        if (((70 <= $nilairatappkn) && ($nilairatappkn <= 80)) == TRUE) {
            $ppknBaik = 1;
        } elseif (((60 <= $nilairatappkn) && ($nilairatappkn <= 70)) == TRUE) {
            $ppknBaik = ($nilairatappkn - 60) / (70 - 60);
        } elseif (((80 <= $nilairatappkn) && ($nilairatappkn <= 90)) == TRUE) {
            $ppknBaik = (90 - $nilairatappkn) / (90 - 80);
        } elseif ((($nilairatappkn <= 60) || ($nilairatappkn >= 90)) == TRUE) {
            $ppknBaik = 0;
        }

        //Derajat Keanggotaan PPKN Sangat Baik
        if (((90 <= $nilairatappkn) && ($nilairatappkn <= 100)) == TRUE) {
            $ppknSb = 1;
        } elseif (((80 <= $nilairatappkn) && ($nilairatappkn <= 90)) == TRUE) {
            $ppknSb = ($nilairatappkn - 80) / (90 - 80);
        } elseif (($nilairatappkn <= 80) == TRUE) {
            $ppknSb = 0;
        }

        //SOSIOLOGI
        //Derajat Keanggotaan SOSIOLOGI Kurang
        if (((30 <= $nilairatasosio) && ($nilairatasosio <= 40)) == TRUE) {
            $sosioKurang = 1;
        } elseif (((40 < $nilairatasosio) && ($nilairatasosio < 50)) == TRUE) {
            $sosioKurang = (50 - $nilairatasosio) / (50 - 40);
        } elseif (($nilairatasosio >= 50) == TRUE) {
            $sosioKurang = 0;
        }

        //Derajat Keanggotaan SOSIOLOGI Cukup
        if (((50 <= $nilairatasosio) && ($nilairatasosio <= 60)) == TRUE) {
            $sosioCukup = 1;
        } elseif (((40 < $nilairatasosio) && ($nilairatasosio < 50)) == TRUE) {
            $sosioCukup = ($nilairatasosio - 40) / (50 - 40);
        } elseif (((60 < $nilairatasosio) && ($nilairatasosio < 70)) == TRUE) {
            $sosioCukup = (70 - $nilairatasosio) / (70 - 60);
        } elseif ((($nilairatasosio <= 40) || ($nilairatasosio >= 70)) == TRUE) {
            $sosioCukup = 0;
        }

        //Derajat Keanggotaan SOSIOLOGI Baik
        if (((70 <= $nilairatasosio) && ($nilairatasosio <= 80)) == TRUE) {
            $sosioBaik = 1;
        } elseif (((60 <= $nilairatasosio) && ($nilairatasosio <= 70)) == TRUE) {
            $sosioBaik = ($nilairatasosio - 60) / (70 - 60);
        } elseif (((80 <= $nilairatasosio) && ($nilairatasosio <= 90)) == TRUE) {
            $sosioBaik = (90 - $nilairatasosio) / (90 - 80);
        } elseif ((($nilairatasosio <= 60) || ($nilairatasosio >= 90)) == TRUE) {
            $sosioBaik = 0;
        }

        //Derajat Keanggotaan SOSIOLOGI Sangat Baik
        if (((90 <= $nilairatasosio) && ($nilairatasosio <= 100)) == TRUE) {
            $sosioSb = 1;
        } elseif (((80 <= $nilairatasosio) && ($nilairatasosio <= 90)) == TRUE) {
            $sosioSb = ($nilairatasosio - 80) / (90 - 80);
        } elseif (($nilairatasosio <= 80) == TRUE) {
            $sosioSb = 0;
        }

        //Predikat akuntansi
        $akuntansiR1 = min($ekonomiKurang, $mtkKurang);
        $akuntansiR2 = min($ekonomiKurang, $mtkCukup);
        $akuntansiR3 = min($ekonomiKurang, $mtkBaik);
        $akuntansiR4 = min($ekonomiKurang, $mtkSb);
        $akuntansiR5 = min($ekonomiCukup, $mtkKurang);
        $akuntansiR6 = min($ekonomiCukup, $mtkCukup);
        $akuntansiR7 = min($ekonomiCukup, $mtkBaik);
        $akuntansiR8 = min($ekonomiCukup, $mtkSb);
        $akuntansiR9 = min($ekonomiBaik, $mtkKurang);
        $akuntansiR10 = min($ekonomiBaik, $mtkCukup);
        $akuntansiR11 = min(round($ekonomiBaik, 2), $mtkBaik);
        $akuntansiR12 = min(round($ekonomiBaik, 2), $mtkSb);
        $akuntansiR13 = min($ekonomiSb, $mtkKurang);
        $akuntansiR14 = min($ekonomiSb, $mtkCukup);
        $akuntansiR15 = min($ekonomiSb, $mtkBaik);
        $akuntansiR16 = min($ekonomiSb, $mtkSb);

        //Z RUMUS akuntansi
        $zrumusR1A = '30 - z / 30 - 20 = ' . $akuntansiR1;
        $zrumusR2A = 'z - 40 / 50 - 40 = ' . $akuntansiR2;
        $zrumusR3A = 'z - 40 / 50 - 40 = ' . $akuntansiR3;
        $zrumusR4A = 'z - 60 / 70 - 60 = ' . $akuntansiR4;
        $zrumusR5A = 'z - 20 / 30 - 20 = ' . $akuntansiR5;
        $zrumusR6A = 'z - 40 / 50 - 40 = ' . $akuntansiR6;
        $zrumusR7A = 'z - 60 / 70 - 60 = ' . $akuntansiR7;
        $zrumusR8A = 'z - 60 / 70 - 60 = ' . $akuntansiR8;
        $zrumusR9A = 'z - 40 / 50 - 40 = ' . $akuntansiR9;
        $zrumusR10A = 'z - 40 / 50 - 40 = ' . $akuntansiR10;
        $zrumusR11A = 'z - 60 / 70 - 60 = ' . $akuntansiR11;
        $zrumusR12A = 'z - 60 / 70 - 60 = ' . $akuntansiR12;
        $zrumusR13A = 'z - 40 / 50 - 40 = ' . $akuntansiR13;
        $zrumusR14A = 'z - 60 / 70 - 60 = ' . $akuntansiR14;
        $zrumusR15A = 'z - 60 / 70 - 60 = ' . $akuntansiR15;
        $zrumusR16A = 'z - 80 / 90 - 80 = ' . $akuntansiR16;


        //Z HASIL akuntansi
        $zhasilR1A = - (($akuntansiR1 * (30 - 20)) - 30);
        $zhasilR2A = ($akuntansiR2 * (50 - 40)) + 40;
        $zhasilR3A = ($akuntansiR3 * (50 - 40)) + 40;
        $zhasilR4A = ($akuntansiR4 * (70 - 60)) + 60;
        $zhasilR5A = ($akuntansiR5 * (30 - 20)) + 20;
        $zhasilR6A = ($akuntansiR6 * (50 - 40)) + 40;
        $zhasilR7A = ($akuntansiR7 * (70 - 60)) + 60;
        $zhasilR8A = ($akuntansiR8 * (70 - 60)) + 60;
        $zhasilR9A = ($akuntansiR9 * (50 - 40)) + 40;
        $zhasilR10A = ($akuntansiR10 * (50 - 40)) + 40;
        $zhasilR11A = ($akuntansiR11 * (70 - 60)) + 60;
        $zhasilR12A = ($akuntansiR12 * (70 - 60)) + 60;
        $zhasilR13A = ($akuntansiR13 * (50 - 40)) + 40;
        $zhasilR14A = ($akuntansiR14 * (70 - 60)) + 60;
        $zhasilR15A = ($akuntansiR15 * (70 - 60)) + 60;
        $zhasilR16A = ($akuntansiR16 * (90 - 80)) + 80;


        //P*Z akuntansi
        $pzR1A = $akuntansiR1 * $zhasilR1A;
        $pzR2A = $akuntansiR2 * $zhasilR2A;
        $pzR3A = $akuntansiR3 * $zhasilR3A;
        $pzR4A = $akuntansiR4 * $zhasilR4A;
        $pzR5A = $akuntansiR5 * $zhasilR5A;
        $pzR6A = $akuntansiR6 * $zhasilR6A;
        $pzR7A = $akuntansiR7 * $zhasilR7A;
        $pzR8A = $akuntansiR8 * $zhasilR8A;
        $pzR9A = $akuntansiR9 * $zhasilR9A;
        $pzR10A = $akuntansiR10 * $zhasilR10A;
        $pzR11A = round(($akuntansiR11 * $zhasilR11A), 2);
        $pzR12A = round(($akuntansiR12 * $zhasilR12A), 2);
        $pzR13A = $akuntansiR13 * $zhasilR13A;
        $pzR14A = $akuntansiR14 * $zhasilR14A;
        $pzR15A = round(($akuntansiR15 * $zhasilR15A), 2);
        $pzR16A = round(($akuntansiR16 * $zhasilR16A), 2);

        //SUM PREDIKAT AKUNTANSI
        $array = array($akuntansiR1, $akuntansiR2, $akuntansiR3, $akuntansiR4, $akuntansiR5, $akuntansiR6, $akuntansiR7, $akuntansiR8, $akuntansiR9, $akuntansiR10, $akuntansiR11, $akuntansiR12, $akuntansiR13, $akuntansiR14, $akuntansiR15, $akuntansiR16);
        $sumPA = array_sum($array);

        //SUM PREDIKAT*Z AKUNTANSI
        $arr = array($pzR1A, $pzR2A, $pzR3A, $pzR4A, $pzR5A, $pzR6A, $pzR7A, $pzR8A, $pzR9A, $pzR10A, $pzR11A, $pzR12A, $pzR13A, $pzR14A, $pzR15A, $pzR16A);
        $sumPZA = array_sum($arr);

        //NILAI Z AKUNTANSI
        $nilaizAkuntansi = round(($sumPZA / $sumPA), 2);

        //Predikat PSIKOLOGI
        $PsikologiR1 = min($sosioKurang, $inggrisKurang);
        $PsikologiR2 = min($sosioKurang, $inggrisCukup);
        $PsikologiR3 = min($sosioKurang, $inggrisBaik);
        $PsikologiR4 = min($sosioKurang, $inggrisSb);
        $PsikologiR5 = min($sosioCukup, $inggrisKurang);
        $PsikologiR6 = min($sosioCukup, $inggrisCukup);
        $PsikologiR7 = min($sosioCukup, $inggrisBaik);
        $PsikologiR8 = min($sosioCukup, $inggrisSb);
        $PsikologiR9 = min($sosioBaik, $inggrisKurang);
        $PsikologiR10 = min($sosioBaik, $inggrisCukup);
        $PsikologiR11 = min(round($sosioBaik, 2), $inggrisBaik);
        $PsikologiR12 = min(round($sosioBaik, 2), $inggrisSb);
        $PsikologiR13 = min($sosioSb, $inggrisKurang);
        $PsikologiR14 = min($sosioSb, $inggrisCukup);
        $PsikologiR15 = min($sosioSb, $inggrisBaik);
        $PsikologiR16 = min($sosioSb, $inggrisSb);

        //Z RUMUS PSIKOLOGI
        $zrumusR1P = '30 - z / 30 - 20 = ' . $PsikologiR1;
        $zrumusR2P = 'z - 40 / 50 - 40 = ' . $PsikologiR2;
        $zrumusR3P = 'z - 40 / 50 - 40 = ' . $PsikologiR3;
        $zrumusR4P = 'z - 60 / 70 - 60 = ' . $PsikologiR4;
        $zrumusR5P = 'z - 20 / 30 - 20 = ' . $PsikologiR5;
        $zrumusR6P = 'z - 40 / 50 - 40 = ' . $PsikologiR6;
        $zrumusR7P = 'z - 60 / 70 - 60 = ' . $PsikologiR7;
        $zrumusR8P = 'z - 60 / 70 - 60 = ' . $PsikologiR8;
        $zrumusR9P = 'z - 40 / 50 - 40 = ' . $PsikologiR9;
        $zrumusR10P = 'z - 40 / 50 - 40 = ' . $PsikologiR10;
        $zrumusR11P = 'z - 60 / 70 - 60 = ' . $PsikologiR11;
        $zrumusR12P = 'z - 60 / 70 - 60 = ' . $PsikologiR12;
        $zrumusR13P = 'z - 40 / 50 - 40 = ' . $PsikologiR13;
        $zrumusR14P = 'z - 60 / 70 - 60 = ' . $PsikologiR14;
        $zrumusR15P = 'z - 60 / 70 - 60 = ' . $PsikologiR15;
        $zrumusR16P = 'z - 80 / 90 - 80 = ' . $PsikologiR16;


        //Z HASIL PSIKOLOGI
        $zhasilR1P = - (($PsikologiR1 * (30 - 20)) - 30);
        $zhasilR2P = ($PsikologiR2 * (50 - 40)) + 40;
        $zhasilR3P = ($PsikologiR3 * (50 - 40)) + 40;
        $zhasilR4P = ($PsikologiR4 * (70 - 60)) + 60;
        $zhasilR5P = ($PsikologiR5 * (30 - 20)) + 20;
        $zhasilR6P = ($PsikologiR6 * (50 - 40)) + 40;
        $zhasilR7P = ($PsikologiR7 * (70 - 60)) + 60;
        $zhasilR8P = ($PsikologiR8 * (70 - 60)) + 60;
        $zhasilR9P = ($PsikologiR9 * (50 - 40)) + 40;
        $zhasilR10P = ($PsikologiR10 * (50 - 40)) + 40;
        $zhasilR11P = ($PsikologiR11 * (70 - 60)) + 60;
        $zhasilR12P = ($PsikologiR12 * (70 - 60)) + 60;
        $zhasilR13P = ($PsikologiR13 * (50 - 40)) + 40;
        $zhasilR14P = ($PsikologiR14 * (70 - 60)) + 60;
        $zhasilR15P = ($PsikologiR15 * (70 - 60)) + 60;
        $zhasilR16P = ($PsikologiR16 * (90 - 80)) + 80;


        //P*Z PSIKOLOGI
        $pzR1P = $PsikologiR1 * $zhasilR1P;
        $pzR2P = $PsikologiR2 * $zhasilR2P;
        $pzR3P = $PsikologiR3 * $zhasilR3P;
        $pzR4P = $PsikologiR4 * $zhasilR4P;
        $pzR5P = $PsikologiR5 * $zhasilR5P;
        $pzR6P = $PsikologiR6 * $zhasilR6P;
        $pzR7P = $PsikologiR7 * $zhasilR7P;
        $pzR8P = $PsikologiR8 * $zhasilR8P;
        $pzR9P = $PsikologiR9 * $zhasilR9P;
        $pzR10P = $PsikologiR10 * $zhasilR10P;
        $pzR11P = round(($PsikologiR11 * $zhasilR11P), 2);
        $pzR12P = round(($PsikologiR12 * $zhasilR12P), 2);
        $pzR13P = $PsikologiR13 * $zhasilR13P;
        $pzR14P = $PsikologiR14 * $zhasilR14P;
        $pzR15P = round(($PsikologiR15 * $zhasilR15P), 2);
        $pzR16P = round(($PsikologiR16 * $zhasilR16P), 2);

        //SUM PREDIKAT PSIKOLOGI
        $array = array($PsikologiR1, $PsikologiR2, $PsikologiR3, $PsikologiR4, $PsikologiR5, $PsikologiR6, $PsikologiR7, $PsikologiR8, $PsikologiR9, $PsikologiR10, $PsikologiR11, $PsikologiR12, $PsikologiR13, $PsikologiR14, $PsikologiR15, $PsikologiR16);
        $sumPP = array_sum($array);

        //SUM PREDIKAT*Z PSIKOLOGI
        $arr = array($pzR1P, $pzR2P, $pzR3P, $pzR4P, $pzR5P, $pzR6P, $pzR7P, $pzR8P, $pzR9P, $pzR10P, $pzR11P, $pzR12P, $pzR13P, $pzR14P, $pzR15P, $pzR16P);
        $sumPZP = array_sum($arr);

        //NILAI Z PSIKOLOGI
        $nilaizPsikologi = round(($sumPZP / $sumPP), 2);

        //Predikat ILMU POLITIK
        $ilpolR1 = min($ppknKurang, $sosioKurang);
        $ilpolR2 = min($ppknKurang, $sosioCukup);
        $ilpolR3 = min($ppknKurang, $sosioBaik);
        $ilpolR4 = min($ppknKurang, $sosioSb);
        $ilpolR5 = min($ppknCukup, $sosioKurang);
        $ilpolR6 = min($ppknCukup, $sosioCukup);
        $ilpolR7 = min($ppknCukup, $sosioBaik);
        $ilpolR8 = min($ppknCukup, $sosioSb);
        $ilpolR9 = min($ppknBaik, $sosioKurang);
        $ilpolR10 = min($ppknBaik, $sosioCukup);
        $ilpolR11 = min(round($ppknBaik, 2), $sosioBaik);
        $ilpolR12 = min(round($ppknBaik, 2), $sosioSb);
        $ilpolR13 = min($ppknSb, $sosioKurang);
        $ilpolR14 = min($ppknSb, $sosioCukup);
        $ilpolR15 = min($ppknSb, $sosioBaik);
        $ilpolR16 = min($ppknSb, $sosioSb);

        //Z RUMUS ilpol
        $zrumusR1IP = '30 - z / 30 - 20 = ' . $ilpolR1;
        $zrumusR2IP = 'z - 40 / 50 - 40 = ' . $ilpolR2;
        $zrumusR3IP = 'z - 40 / 50 - 40 = ' . $ilpolR3;
        $zrumusR4IP = 'z - 60 / 70 - 60 = ' . $ilpolR4;
        $zrumusR5IP = 'z - 20 / 30 - 20 = ' . $ilpolR5;
        $zrumusR6IP = 'z - 40 / 50 - 40 = ' . $ilpolR6;
        $zrumusR7IP = 'z - 60 / 70 - 60 = ' . $ilpolR7;
        $zrumusR8IP = 'z - 60 / 70 - 60 = ' . $ilpolR8;
        $zrumusR9IP = 'z - 40 / 50 - 40 = ' . $ilpolR9;
        $zrumusR10IP = 'z - 40 / 50 - 40 = ' . $ilpolR10;
        $zrumusR11IP = 'z - 60 / 70 - 60 = ' . $ilpolR11;
        $zrumusR12IP = 'z - 60 / 70 - 60 = ' . $ilpolR12;
        $zrumusR13IP = 'z - 40 / 50 - 40 = ' . $ilpolR13;
        $zrumusR14IP = 'z - 60 / 70 - 60 = ' . $ilpolR14;
        $zrumusR15IP = 'z - 60 / 70 - 60 = ' . $ilpolR15;
        $zrumusR16IP = 'z - 80 / 90 - 80 = ' . $ilpolR16;


        //Z HASIL ilpol
        $zhasilR1IP = - (($ilpolR1 * (30 - 20)) - 30);
        $zhasilR2IP = ($ilpolR2 * (50 - 40)) + 40;
        $zhasilR3IP = ($ilpolR3 * (50 - 40)) + 40;
        $zhasilR4IP = ($ilpolR4 * (70 - 60)) + 60;
        $zhasilR5IP = ($ilpolR5 * (30 - 20)) + 20;
        $zhasilR6IP = ($ilpolR6 * (50 - 40)) + 40;
        $zhasilR7IP = ($ilpolR7 * (70 - 60)) + 60;
        $zhasilR8IP = ($ilpolR8 * (70 - 60)) + 60;
        $zhasilR9IP = ($ilpolR9 * (50 - 40)) + 40;
        $zhasilR10IP = ($ilpolR10 * (50 - 40)) + 40;
        $zhasilR11IP = ($ilpolR11 * (70 - 60)) + 60;
        $zhasilR12IP = ($ilpolR12 * (70 - 60)) + 60;
        $zhasilR13IP = ($ilpolR13 * (50 - 40)) + 40;
        $zhasilR14IP = ($ilpolR14 * (70 - 60)) + 60;
        $zhasilR15IP = ($ilpolR15 * (70 - 60)) + 60;
        $zhasilR16IP = ($ilpolR16 * (90 - 80)) + 80;


        //P*Z ilpol
        $pzR1IP = $ilpolR1 * $zhasilR1IP;
        $pzR2IP = $ilpolR2 * $zhasilR2IP;
        $pzR3IP = $ilpolR3 * $zhasilR3IP;
        $pzR4IP = $ilpolR4 * $zhasilR4IP;
        $pzR5IP = $ilpolR5 * $zhasilR5IP;
        $pzR6IP = $ilpolR6 * $zhasilR6IP;
        $pzR7IP = $ilpolR7 * $zhasilR7IP;
        $pzR8IP = $ilpolR8 * $zhasilR8IP;
        $pzR9IP = $ilpolR9 * $zhasilR9IP;
        $pzR10IP = $ilpolR10 * $zhasilR10IP;
        $pzR11IP = round(($ilpolR11 * $zhasilR11IP), 2);
        $pzR12IP = round(($ilpolR12 * $zhasilR12IP), 2);
        $pzR13IP = $ilpolR13 * $zhasilR13IP;
        $pzR14IP = $ilpolR14 * $zhasilR14IP;
        $pzR15IP = round(($ilpolR15 * $zhasilR15IP), 2);
        $pzR16IP = round(($ilpolR16 * $zhasilR16IP), 2);

        //SUM PREDIKAT ilpol
        $array = array($ilpolR1, $ilpolR2, $ilpolR3, $ilpolR4, $ilpolR5, $ilpolR6, $ilpolR7, $ilpolR8, $ilpolR9, $ilpolR10, $ilpolR11, $ilpolR12, $ilpolR13, $ilpolR14, $ilpolR15, $ilpolR16);
        $sumPIP = array_sum($array);

        //SUM PREDIKAT*Z FARMASI
        $arr = array($pzR1IP, $pzR2IP, $pzR3IP, $pzR4IP, $pzR5IP, $pzR6IP, $pzR7IP, $pzR8IP, $pzR9IP, $pzR10IP, $pzR11IP, $pzR12IP, $pzR13IP, $pzR14IP, $pzR15IP, $pzR16IP);
        $sumPZIP = array_sum($arr);

        //NILAI Z FARNMASI
        $nilaizIlmuPolitik = round(($sumPZIP / $sumPIP), 2);

        //Rekomendasi Jurusan IPS
        if (($nilaizAkuntansi > $nilaizPsikologi) && ($nilaizAkuntansi > $nilaizIlmuPolitik)) {
            $jurusan_ips = 'Akuntansi';
            $z_index = $nilaizAkuntansi;
        } else if (($nilaizPsikologi > $nilaizAkuntansi) && ($nilaizPsikologi > $nilaizIlmuPolitik)) {
            $jurusan_ips = 'Psikologi';
            $z_index = $nilaizPsikologi;
        } else if (($nilaizIlmuPolitik > $nilaizAkuntansi) && ($nilaizIlmuPolitik > $nilaizPsikologi)) {
            $jurusan_ips = 'Ilmu Politik';
            $z_index = $nilaizIlmuPolitik;
        } else {
            $jurusan_ips = 'Error';
            $z_index = 0;
        }

        $data   = [
            'title'         => 'Fuzzyfikasi',
            'nilai_siswa_ips' => $this->m_siswa->getAllNilaiSiswaIps(),
            'ekonomi_kurang' => round($ekonomiKurang, 2),
            'ekonomi_cukup' => round($ekonomiCukup, 2),
            'ekonomi_baik' => round($ekonomiBaik, 2),
            'ekonomi_sb' => round($ekonomiSb, 2),
            'mtk_kurang' => round($mtkKurang, 2),
            'mtk_cukup' => round($mtkCukup, 2),
            'mtk_baik' => round($mtkBaik, 2),
            'mtk_sb' => round($mtkSb, 2),
            'inggris_kurang' => round($inggrisKurang, 2),
            'inggris_cukup' => round($inggrisCukup, 2),
            'inggris_baik' => round($inggrisBaik, 2),
            'inggris_sb' => round($inggrisSb, 2),
            'ppkn_kurang' => round($ppknKurang, 2),
            'ppkn_cukup' => round($ppknCukup, 2),
            'ppkn_baik' => round($ppknBaik, 2),
            'ppkn_sb' => round($ppknSb, 2),
            'sosio_kurang' => round($sosioKurang, 2),
            'sosio_cukup' => round($sosioCukup, 2),
            'sosio_baik' => round($sosioBaik, 2),
            'sosio_sb' => round($sosioSb, 2),
            'akuntansiR1' => $akuntansiR1,
            'akuntansiR2' => $akuntansiR2,
            'akuntansiR3' => $akuntansiR3,
            'akuntansiR4' => $akuntansiR4,
            'akuntansiR5' => $akuntansiR5,
            'akuntansiR6' => $akuntansiR6,
            'akuntansiR7' => $akuntansiR7,
            'akuntansiR8' => $akuntansiR8,
            'akuntansiR9' => $akuntansiR9,
            'akuntansiR10' => $akuntansiR10,
            'akuntansiR11' => $akuntansiR11,
            'akuntansiR12' => $akuntansiR12,
            'akuntansiR13' => $akuntansiR13,
            'akuntansiR14' => $akuntansiR14,
            'akuntansiR15' => $akuntansiR15,
            'akuntansiR16' => $akuntansiR16,
            'zrumusR1A' => $zrumusR1A,
            'zrumusR2A' => $zrumusR2A,
            'zrumusR3A' => $zrumusR3A,
            'zrumusR4A' => $zrumusR4A,
            'zrumusR5A' => $zrumusR5A,
            'zrumusR6A' => $zrumusR6A,
            'zrumusR7A' => $zrumusR7A,
            'zrumusR8A' => $zrumusR8A,
            'zrumusR9A' => $zrumusR9A,
            'zrumusR10A' => $zrumusR10A,
            'zrumusR11A' => $zrumusR11A,
            'zrumusR12A' => $zrumusR12A,
            'zrumusR13A' => $zrumusR13A,
            'zrumusR14A' => $zrumusR14A,
            'zrumusR15A' => $zrumusR15A,
            'zrumusR16A' => $zrumusR16A,
            'zhasilR1A' => $zhasilR1A,
            'zhasilR2A' => $zhasilR2A,
            'zhasilR3A' => $zhasilR3A,
            'zhasilR4A' => $zhasilR4A,
            'zhasilR5A' => $zhasilR5A,
            'zhasilR6A' => $zhasilR6A,
            'zhasilR7A' => $zhasilR7A,
            'zhasilR8A' => $zhasilR8A,
            'zhasilR9A' => $zhasilR9A,
            'zhasilR10A' => $zhasilR10A,
            'zhasilR11A' => $zhasilR11A,
            'zhasilR12A' => $zhasilR12A,
            'zhasilR13A' => $zhasilR13A,
            'zhasilR14A' => $zhasilR14A,
            'zhasilR15A' => $zhasilR15A,
            'zhasilR16A' => $zhasilR16A,
            'pzR1A' => $pzR1A,
            'pzR2A' => $pzR2A,
            'pzR3A' => $pzR3A,
            'pzR4A' => $pzR4A,
            'pzR5A' => $pzR5A,
            'pzR6A' => $pzR6A,
            'pzR7A' => $pzR7A,
            'pzR8A' => $pzR8A,
            'pzR9A' => $pzR9A,
            'pzR10A' => $pzR10A,
            'pzR11A' => $pzR11A,
            'pzR12A' => $pzR12A,
            'pzR13A' => $pzR13A,
            'pzR14A' => $pzR14A,
            'pzR15A' => $pzR15A,
            'pzR16A' => $pzR16A,
            'sumPA' => $sumPA,
            'sumPZA' => $sumPZA,
            'nilaizAkuntansi' => $nilaizAkuntansi,

            'PsikologiR1' => $PsikologiR1,
            'PsikologiR2' => $PsikologiR2,
            'PsikologiR3' => $PsikologiR3,
            'PsikologiR4' => $PsikologiR4,
            'PsikologiR5' => $PsikologiR5,
            'PsikologiR6' => $PsikologiR6,
            'PsikologiR7' => $PsikologiR7,
            'PsikologiR8' => $PsikologiR8,
            'PsikologiR9' => $PsikologiR9,
            'PsikologiR10' => $PsikologiR10,
            'PsikologiR11' => $PsikologiR11,
            'PsikologiR12' => $PsikologiR12,
            'PsikologiR13' => $PsikologiR13,
            'PsikologiR14' => $PsikologiR14,
            'PsikologiR15' => $PsikologiR15,
            'PsikologiR16' => $PsikologiR16,
            'zrumusR1P' => $zrumusR1P,
            'zrumusR2P' => $zrumusR2P,
            'zrumusR3P' => $zrumusR3P,
            'zrumusR4P' => $zrumusR4P,
            'zrumusR5P' => $zrumusR5P,
            'zrumusR6P' => $zrumusR6P,
            'zrumusR7P' => $zrumusR7P,
            'zrumusR8P' => $zrumusR8P,
            'zrumusR9P' => $zrumusR9P,
            'zrumusR10P' => $zrumusR10P,
            'zrumusR11P' => $zrumusR11P,
            'zrumusR12P' => $zrumusR12P,
            'zrumusR13P' => $zrumusR13P,
            'zrumusR14P' => $zrumusR14P,
            'zrumusR15P' => $zrumusR15P,
            'zrumusR16P' => $zrumusR16P,
            'zhasilR1P' => $zhasilR1P,
            'zhasilR2P' => $zhasilR2P,
            'zhasilR3P' => $zhasilR3P,
            'zhasilR4P' => $zhasilR4P,
            'zhasilR5P' => $zhasilR5P,
            'zhasilR6P' => $zhasilR6P,
            'zhasilR7P' => $zhasilR7P,
            'zhasilR8P' => $zhasilR8P,
            'zhasilR9P' => $zhasilR9P,
            'zhasilR10P' => $zhasilR10P,
            'zhasilR11P' => $zhasilR11P,
            'zhasilR12P' => $zhasilR12P,
            'zhasilR13P' => $zhasilR13P,
            'zhasilR14P' => $zhasilR14P,
            'zhasilR15P' => $zhasilR15P,
            'zhasilR16P' => $zhasilR16P,
            'pzR1P' => $pzR1P,
            'pzR2P' => $pzR2P,
            'pzR3P' => $pzR3P,
            'pzR4P' => $pzR4P,
            'pzR5P' => $pzR5P,
            'pzR6P' => $pzR6P,
            'pzR7P' => $pzR7P,
            'pzR8P' => $pzR8P,
            'pzR9P' => $pzR9P,
            'pzR10P' => $pzR10P,
            'pzR11P' => $pzR11P,
            'pzR12P' => $pzR12P,
            'pzR13P' => $pzR13P,
            'pzR14P' => $pzR14P,
            'pzR15P' => $pzR15P,
            'pzR16P' => $pzR16P,
            'sumPP' => $sumPP,
            'sumPZP' => $sumPZP,
            'nilaizPsikologi' => $nilaizPsikologi,

            'ilpolR1' => $ilpolR1,
            'ilpolR2' => $ilpolR2,
            'ilpolR3' => $ilpolR3,
            'ilpolR4' => $ilpolR4,
            'ilpolR5' => $ilpolR5,
            'ilpolR6' => $ilpolR6,
            'ilpolR7' => $ilpolR7,
            'ilpolR8' => $ilpolR8,
            'ilpolR9' => $ilpolR9,
            'ilpolR10' => $ilpolR10,
            'ilpolR11' => $ilpolR11,
            'ilpolR12' => $ilpolR12,
            'ilpolR13' => $ilpolR13,
            'ilpolR14' => $ilpolR14,
            'ilpolR15' => $ilpolR15,
            'ilpolR16' => $ilpolR16,
            'zrumusR1IP' => $zrumusR1IP,
            'zrumusR2IP' => $zrumusR2IP,
            'zrumusR3IP' => $zrumusR3IP,
            'zrumusR4IP' => $zrumusR4IP,
            'zrumusR5IP' => $zrumusR5IP,
            'zrumusR6IP' => $zrumusR6IP,
            'zrumusR7IP' => $zrumusR7IP,
            'zrumusR8IP' => $zrumusR8IP,
            'zrumusR9IP' => $zrumusR9IP,
            'zrumusR10IP' => $zrumusR10IP,
            'zrumusR11IP' => $zrumusR11IP,
            'zrumusR12IP' => $zrumusR12IP,
            'zrumusR13IP' => $zrumusR13IP,
            'zrumusR14IP' => $zrumusR14IP,
            'zrumusR15IP' => $zrumusR15IP,
            'zrumusR16IP' => $zrumusR16IP,
            'zhasilR1IP' => $zhasilR1IP,
            'zhasilR2IP' => $zhasilR2IP,
            'zhasilR3IP' => $zhasilR3IP,
            'zhasilR4IP' => $zhasilR4IP,
            'zhasilR5IP' => $zhasilR5IP,
            'zhasilR6IP' => $zhasilR6IP,
            'zhasilR7IP' => $zhasilR7IP,
            'zhasilR8IP' => $zhasilR8IP,
            'zhasilR9IP' => $zhasilR9IP,
            'zhasilR10IP' => $zhasilR10IP,
            'zhasilR11IP' => $zhasilR11IP,
            'zhasilR12IP' => $zhasilR12IP,
            'zhasilR13IP' => $zhasilR13IP,
            'zhasilR14IP' => $zhasilR14IP,
            'zhasilR15IP' => $zhasilR15IP,
            'zhasilR16IP' => $zhasilR16IP,
            'pzR1IP' => $pzR1IP,
            'pzR2IP' => $pzR2IP,
            'pzR3IP' => $pzR3IP,
            'pzR4IP' => $pzR4IP,
            'pzR5IP' => $pzR5IP,
            'pzR6IP' => $pzR6IP,
            'pzR7IP' => $pzR7IP,
            'pzR8IP' => $pzR8IP,
            'pzR9IP' => $pzR9IP,
            'pzR10IP' => $pzR10IP,
            'pzR11IP' => $pzR11IP,
            'pzR12IP' => $pzR12IP,
            'pzR13IP' => $pzR13IP,
            'pzR14IP' => $pzR14IP,
            'pzR15IP' => $pzR15IP,
            'pzR16IP' => $pzR16IP,
            'sumPIP' => $sumPIP,
            'sumPZIP' => $sumPZIP,
            'nilaizIlmuPolitik' => $nilaizIlmuPolitik,

            'z_index' => $z_index,

            'jurusan_ips' => $jurusan_ips,
        ];

        $simpan_data = [
            'nis' => $nis,
            'nama' => $nama,
            'ekonomi_kurang' => round($ekonomiKurang, 2),
            'ekonomi_cukup' => round($ekonomiCukup, 2),
            'ekonomi_baik' => round($ekonomiBaik, 2),
            'ekonomi_sb' => round($ekonomiSb, 2),
            'mtk_kurang' => round($mtkKurang, 2),
            'mtk_cukup' => round($mtkCukup, 2),
            'mtk_baik' => round($mtkBaik, 2),
            'mtk_sb' => round($mtkSb, 2),
            'inggris_kurang' => round($inggrisKurang, 2),
            'inggris_cukup' => round($inggrisCukup, 2),
            'inggris_baik' => round($inggrisBaik, 2),
            'inggris_sb' => round($inggrisSb, 2),
            'ppkn_kurang' => round($ppknKurang, 2),
            'ppkn_cukup' => round($ppknCukup, 2),
            'ppkn_baik' => round($ppknBaik, 2),
            'ppkn_sb' => round($ppknSb, 2),
            'sosio_kurang' => round($sosioKurang, 2),
            'sosio_cukup' => round($sosioCukup, 2),
            'sosio_baik' => round($sosioBaik, 2),
            'sosio_sb' => round($sosioSb, 2),
            'z_index' => $z_index,
            'rekjur' => $jurusan_ips
        ];


        $cek = $this->db->query("SELECT * FROM tbl_nilai_rekjur_ips where nis='" . $nis . "'")->num_rows();
        if ($cek > 0) {
            $this->session->set_flashdata('flashrekjurgagal', ', Ulangi');
            redirect('controllerjurips/fuzzyfikasi');
        } else {
            $this->m_siswa->tambahRekjurSiswaIps($simpan_data);
            $this->session->set_flashdata('flashrekjursukses', 'Diproses');
        }



        $this->session->set_flashdata('flashh', 'Diproses');
        $this->load->view('includes/headerr', $data);
        $this->load->view('jurusan_ips/fuzzyfikasi', $data);
        $this->load->view('includes/js');
        $this->load->view('includes/footer');
        // var_dump($a['a']);
    }
}
