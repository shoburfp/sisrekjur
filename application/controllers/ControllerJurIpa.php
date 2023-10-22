<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ControllerJurIpa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['M_Siswa' => 'm_siswa']);
    }

    public function index()
    {
        $data   = [
            'title'         => 'Jurusan Siswa IPA'
        ];

        $this->load->view('includes/headerr', $data);
        $this->load->view('jurusan_ipa/index', $data);
        $this->load->view('includes/footer');
    }

    public function fuzzyfikasi()
    {
        $data   = [
            'title'         => 'Fuzzyfikasi',
            'nilai_siswa_ipa' => $this->m_siswa->getAllNilaiSiswaIpa()
        ];

        $this->load->view('includes/headerr', $data);
        $this->load->view('jurusan_ipa/fuzzyfikasi', $data);
        $this->load->view('includes/js');
        $this->load->view('includes/footer');
    }

    public function cari()
    {
        $nis = $_GET['nis'];
        $cari = $this->m_siswa->cariJurIpa($nis)->result();
        echo json_encode($cari);
    }

    public function proses()
    {
        $nis = $this->input->post('nis');
        $nama = $this->input->post('nama');
        $nilairatabio = $this->input->post('nrBio');
        $nilairatamtk = $this->input->post('nrMtk');
        $nilairatainggris = $this->input->post('nrInggris');
        $nilairatafisika = $this->input->post('nrfisika');

        //BIOLOGI
        //Derajat Keanggotaan Biologi Kurang
        if (((30 <= $nilairatabio) && ($nilairatabio <= 40)) == TRUE) {
            $bioKurang = 1;
        } elseif (((40 < $nilairatabio) && ($nilairatabio < 50)) == TRUE) {
            $bioKurang = (50 - $nilairatabio) / (50 - 40);
        } elseif (($nilairatabio >= 50) == TRUE) {
            $bioKurang = 0;
        }

        //Derajat Keanggotaan Biologi Cukup
        if (((50 <= $nilairatabio) && ($nilairatabio <= 60)) == TRUE) {
            $bioCukup = 1;
        } elseif (((40 < $nilairatabio) && ($nilairatabio < 50)) == TRUE) {
            $bioCukup = ($nilairatabio - 40) / (50 - 40);
        } elseif (((60 < $nilairatabio) && ($nilairatabio < 70)) == TRUE) {
            $bioCukup = (70 - $nilairatabio) / (70 - 60);
        } elseif ((($nilairatabio <= 40) || ($nilairatabio >= 70)) == TRUE) {
            $bioCukup = 0;
        }

        //Derajat Keanggotaan Biologi Baik
        if (((70 <= $nilairatabio) && ($nilairatabio <= 80)) == TRUE) {
            $bioBaik = 1;
        } elseif (((60 <= $nilairatabio) && ($nilairatabio <= 70)) == TRUE) {
            $bioBaik = ($nilairatabio - 60) / (70 - 60);
        } elseif (((80 <= $nilairatabio) && ($nilairatabio <= 90)) == TRUE) {
            $bioBaik = (90 - $nilairatabio) / (90 - 80);
        } elseif ((($nilairatabio <= 60) || ($nilairatabio >= 90)) == TRUE) {
            $bioBaik = 0;
        }

        //Derajat Keanggotaan Biologi Sangat Baik
        if (((90 <= $nilairatabio) && ($nilairatabio <= 100)) == TRUE) {
            $bioSb = 1;
        } elseif (((80 <= $nilairatabio) && ($nilairatabio <= 90)) == TRUE) {
            $bioSb = ($nilairatabio - 80) / (90 - 80);
        } elseif (($nilairatabio <= 80) == TRUE) {
            $bioSb = 0;
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

        //fisika
        //Derajat Keanggotaan fisika Kurang
        if (((30 <= $nilairatafisika) && ($nilairatafisika <= 40)) == TRUE) {
            $fisikaKurang = 1;
        } elseif (((40 < $nilairatafisika) && ($nilairatafisika < 50)) == TRUE) {
            $fisikaKurang = (50 - $nilairatafisika) / (50 - 40);
        } elseif (($nilairatafisika >= 50) == TRUE) {
            $fisikaKurang = 0;
        }

        //Derajat Keanggotaan fisika Cukup
        if (((50 <= $nilairatafisika) && ($nilairatafisika <= 60)) == TRUE) {
            $fisikaCukup = 1;
        } elseif (((40 < $nilairatafisika) && ($nilairatafisika < 50)) == TRUE) {
            $fisikaCukup = ($nilairatafisika - 40) / (50 - 40);
        } elseif (((60 < $nilairatafisika) && ($nilairatafisika < 70)) == TRUE) {
            $fisikaCukup = (70 - $nilairatafisika) / (70 - 60);
        } elseif ((($nilairatafisika <= 40) || ($nilairatafisika >= 70)) == TRUE) {
            $fisikaCukup = 0;
        }

        //Derajat Keanggotaan fisika Baik
        if (((70 <= $nilairatafisika) && ($nilairatafisika <= 80)) == TRUE) {
            $fisikaBaik = 1;
        } elseif (((60 <= $nilairatafisika) && ($nilairatafisika <= 70)) == TRUE) {
            $fisikaBaik = ($nilairatafisika - 60) / (70 - 60);
        } elseif (((80 <= $nilairatafisika) && ($nilairatafisika <= 90)) == TRUE) {
            $fisikaBaik = (90 - $nilairatafisika) / (90 - 80);
        } elseif ((($nilairatafisika <= 60) || ($nilairatafisika >= 90)) == TRUE) {
            $fisikaBaik = 0;
        }

        //Derajat Keanggotaan fisika Sangat Baik
        if (((90 <= $nilairatafisika) && ($nilairatafisika <= 100)) == TRUE) {
            $fisikaSb = 1;
        } elseif (((80 <= $nilairatafisika) && ($nilairatafisika <= 90)) == TRUE) {
            $fisikaSb = ($nilairatafisika - 80) / (90 - 80);
        } elseif (($nilairatafisika <= 80) == TRUE) {
            $fisikaSb = 0;
        }

        //Predikat Kedokteran
        $kedokteranR1 = min($bioKurang, $inggrisKurang);
        $kedokteranR2 = min($bioKurang, $inggrisCukup);
        $kedokteranR3 = min($bioKurang, $inggrisBaik);
        $kedokteranR4 = min($bioKurang, $inggrisSb);
        $kedokteranR5 = min($bioCukup, $inggrisKurang);
        $kedokteranR6 = min($bioCukup, $inggrisCukup);
        $kedokteranR7 = min($bioCukup, $inggrisBaik);
        $kedokteranR8 = min($bioCukup, $inggrisSb);
        $kedokteranR9 = min($bioBaik, $inggrisKurang);
        $kedokteranR10 = min($bioBaik, $inggrisCukup);
        $kedokteranR11 = min(round($bioBaik, 2), $inggrisBaik);
        $kedokteranR12 = min(round($bioBaik, 2), $inggrisSb);
        $kedokteranR13 = min($bioSb, $inggrisKurang);
        $kedokteranR14 = min($bioSb, $inggrisCukup);
        $kedokteranR15 = min($bioSb, $inggrisBaik);
        $kedokteranR16 = min($bioSb, $inggrisSb);

        //Z RUMUS KEDOKTERAN
        $zrumusR1K = '30 - z / 30 - 20 = ' . $kedokteranR1;
        $zrumusR2K = 'z - 40 / 50 - 40 = ' . $kedokteranR2;
        $zrumusR3K = 'z - 40 / 50 - 40 = ' . $kedokteranR3;
        $zrumusR4K = 'z - 60 / 70 - 60 = ' . $kedokteranR4;
        $zrumusR5K = 'z - 20 / 30 - 20 = ' . $kedokteranR5;
        $zrumusR6K = 'z - 40 / 50 - 40 = ' . $kedokteranR6;
        $zrumusR7K = 'z - 60 / 70 - 60 = ' . $kedokteranR7;
        $zrumusR8K = 'z - 60 / 70 - 60 = ' . $kedokteranR8;
        $zrumusR9K = 'z - 40 / 50 - 40 = ' . $kedokteranR9;
        $zrumusR10K = 'z - 40 / 50 - 40 = ' . $kedokteranR10;
        $zrumusR11K = 'z - 60 / 70 - 60 = ' . $kedokteranR11;
        $zrumusR12K = 'z - 60 / 70 - 60 = ' . $kedokteranR12;
        $zrumusR13K = 'z - 40 / 50 - 40 = ' . $kedokteranR13;
        $zrumusR14K = 'z - 60 / 70 - 60 = ' . $kedokteranR14;
        $zrumusR15K = 'z - 60 / 70 - 60 = ' . $kedokteranR15;
        $zrumusR16K = 'z - 80 / 90 - 80 = ' . $kedokteranR16;


        //Z HASIL KEDOKTERAN
        $zhasilR1K = - (($kedokteranR1 * (30 - 20)) - 30);
        $zhasilR2K = ($kedokteranR2 * (50 - 40)) + 40;
        $zhasilR3K = ($kedokteranR3 * (50 - 40)) + 40;
        $zhasilR4K = ($kedokteranR4 * (70 - 60)) + 60;
        $zhasilR5K = ($kedokteranR5 * (30 - 20)) + 20;
        $zhasilR6K = ($kedokteranR6 * (50 - 40)) + 40;
        $zhasilR7K = ($kedokteranR7 * (70 - 60)) + 60;
        $zhasilR8K = ($kedokteranR8 * (70 - 60)) + 60;
        $zhasilR9K = ($kedokteranR9 * (50 - 40)) + 40;
        $zhasilR10K = ($kedokteranR10 * (50 - 40)) + 40;
        $zhasilR11K = ($kedokteranR11 * (70 - 60)) + 60;
        $zhasilR12K = ($kedokteranR12 * (70 - 60)) + 60;
        $zhasilR13K = ($kedokteranR13 * (50 - 40)) + 40;
        $zhasilR14K = ($kedokteranR14 * (70 - 60)) + 60;
        $zhasilR15K = ($kedokteranR15 * (70 - 60)) + 60;
        $zhasilR16K = ($kedokteranR16 * (90 - 80)) + 80;


        //P*Z KEDOKTERAN
        $pzR1K = $kedokteranR1 * $zhasilR1K;
        $pzR2K = $kedokteranR2 * $zhasilR2K;
        $pzR3K = $kedokteranR3 * $zhasilR3K;
        $pzR4K = $kedokteranR4 * $zhasilR4K;
        $pzR5K = $kedokteranR5 * $zhasilR5K;
        $pzR6K = $kedokteranR6 * $zhasilR6K;
        $pzR7K = $kedokteranR7 * $zhasilR7K;
        $pzR8K = $kedokteranR8 * $zhasilR8K;
        $pzR9K = $kedokteranR9 * $zhasilR9K;
        $pzR10K = $kedokteranR10 * $zhasilR10K;
        $pzR11K = round(($kedokteranR11 * $zhasilR11K), 2);
        $pzR12K = round(($kedokteranR12 * $zhasilR12K), 2);
        $pzR13K = $kedokteranR13 * $zhasilR13K;
        $pzR14K = $kedokteranR14 * $zhasilR14K;
        $pzR15K = round(($kedokteranR15 * $zhasilR15K), 2);
        $pzR16K = round(($kedokteranR16 * $zhasilR16K), 2);

        //SUM PREDIKAT KEDOKTERAN
        $array = array($kedokteranR1, $kedokteranR2, $kedokteranR3, $kedokteranR4, $kedokteranR5, $kedokteranR6, $kedokteranR7, $kedokteranR8, $kedokteranR9, $kedokteranR10, $kedokteranR11, $kedokteranR12, $kedokteranR13, $kedokteranR14, $kedokteranR15, $kedokteranR16);
        $sumPK = array_sum($array);

        //SUM PREDIKAT*Z KEDOKTERAN
        $arr = array($pzR1K, $pzR2K, $pzR3K, $pzR4K, $pzR5K, $pzR6K, $pzR7K, $pzR8K, $pzR9K, $pzR10K, $pzR11K, $pzR12K, $pzR13K, $pzR14K, $pzR15K, $pzR16K);
        $sumPZK = array_sum($arr);

        //NILAI Z KEDOKTERAN
        $nilaizKedokteran = round(($sumPZK / $sumPK), 2);

        //Predikat TEKNIK INFORMATIKA
        $TInformatikaR1 = min($mtkKurang, $inggrisKurang);
        $TInformatikaR2 = min($mtkKurang, $inggrisCukup);
        $TInformatikaR3 = min($mtkKurang, $inggrisBaik);
        $TInformatikaR4 = min($mtkKurang, $inggrisSb);
        $TInformatikaR5 = min($mtkCukup, $inggrisKurang);
        $TInformatikaR6 = min($mtkCukup, $inggrisCukup);
        $TInformatikaR7 = min($mtkCukup, $inggrisBaik);
        $TInformatikaR8 = min($mtkCukup, $inggrisSb);
        $TInformatikaR9 = min($mtkBaik, $inggrisKurang);
        $TInformatikaR10 = min($mtkBaik, $inggrisCukup);
        $TInformatikaR11 = min(round($mtkBaik, 2), $inggrisBaik);
        $TInformatikaR12 = min(round($mtkBaik, 2), $inggrisSb);
        $TInformatikaR13 = min($mtkSb, $inggrisKurang);
        $TInformatikaR14 = min($mtkSb, $inggrisCukup);
        $TInformatikaR15 = min($mtkSb, $inggrisBaik);
        $TInformatikaR16 = min($mtkSb, $inggrisSb);

        //Z RUMUS TEKNIK INFORMATIKA
        $zrumusR1TI = '30 - z / 30 - 20 = ' . $TInformatikaR1;
        $zrumusR2TI = 'z - 40 / 50 - 40 = ' . $TInformatikaR2;
        $zrumusR3TI = 'z - 40 / 50 - 40 = ' . $TInformatikaR3;
        $zrumusR4TI = 'z - 60 / 70 - 60 = ' . $TInformatikaR4;
        $zrumusR5TI = 'z - 20 / 30 - 20 = ' . $TInformatikaR5;
        $zrumusR6TI = 'z - 40 / 50 - 40 = ' . $TInformatikaR6;
        $zrumusR7TI = 'z - 60 / 70 - 60 = ' . $TInformatikaR7;
        $zrumusR8TI = 'z - 60 / 70 - 60 = ' . $TInformatikaR8;
        $zrumusR9TI = 'z - 40 / 50 - 40 = ' . $TInformatikaR9;
        $zrumusR10TI = 'z - 40 / 50 - 40 = ' . $TInformatikaR10;
        $zrumusR11TI = 'z - 60 / 70 - 60 = ' . $TInformatikaR11;
        $zrumusR12TI = 'z - 60 / 70 - 60 = ' . $TInformatikaR12;
        $zrumusR13TI = 'z - 40 / 50 - 40 = ' . $TInformatikaR13;
        $zrumusR14TI = 'z - 60 / 70 - 60 = ' . $TInformatikaR14;
        $zrumusR15TI = 'z - 60 / 70 - 60 = ' . $TInformatikaR15;
        $zrumusR16TI = 'z - 80 / 90 - 80 = ' . $TInformatikaR16;


        //Z HASIL TEKNIK INFORMATIKA
        $zhasilR1TI = - (($TInformatikaR1 * (30 - 20)) - 30);
        $zhasilR2TI = ($TInformatikaR2 * (50 - 40)) + 40;
        $zhasilR3TI = ($TInformatikaR3 * (50 - 40)) + 40;
        $zhasilR4TI = ($TInformatikaR4 * (70 - 60)) + 60;
        $zhasilR5TI = ($TInformatikaR5 * (30 - 20)) + 20;
        $zhasilR6TI = ($TInformatikaR6 * (50 - 40)) + 40;
        $zhasilR7TI = ($TInformatikaR7 * (70 - 60)) + 60;
        $zhasilR8TI = ($TInformatikaR8 * (70 - 60)) + 60;
        $zhasilR9TI = ($TInformatikaR9 * (50 - 40)) + 40;
        $zhasilR10TI = ($TInformatikaR10 * (50 - 40)) + 40;
        $zhasilR11TI = ($TInformatikaR11 * (70 - 60)) + 60;
        $zhasilR12TI = ($TInformatikaR12 * (70 - 60)) + 60;
        $zhasilR13TI = ($TInformatikaR13 * (50 - 40)) + 40;
        $zhasilR14TI = ($TInformatikaR14 * (70 - 60)) + 60;
        $zhasilR15TI = ($TInformatikaR15 * (70 - 60)) + 60;
        $zhasilR16TI = ($TInformatikaR16 * (90 - 80)) + 80;


        //P*Z TEKNIK INFORMATIKA
        $pzR1TI = $TInformatikaR1 * $zhasilR1TI;
        $pzR2TI = $TInformatikaR2 * $zhasilR2TI;
        $pzR3TI = $TInformatikaR3 * $zhasilR3TI;
        $pzR4TI = $TInformatikaR4 * $zhasilR4TI;
        $pzR5TI = $TInformatikaR5 * $zhasilR5TI;
        $pzR6TI = $TInformatikaR6 * $zhasilR6TI;
        $pzR7TI = $TInformatikaR7 * $zhasilR7TI;
        $pzR8TI = $TInformatikaR8 * $zhasilR8TI;
        $pzR9TI = $TInformatikaR9 * $zhasilR9TI;
        $pzR10TI = $TInformatikaR10 * $zhasilR10TI;
        $pzR11TI = round(($TInformatikaR11 * $zhasilR11TI), 2);
        $pzR12TI = round(($TInformatikaR12 * $zhasilR12TI), 2);
        $pzR13TI = $TInformatikaR13 * $zhasilR13TI;
        $pzR14TI = $TInformatikaR14 * $zhasilR14TI;
        $pzR15TI = round(($TInformatikaR15 * $zhasilR15TI), 2);
        $pzR16TI = round(($TInformatikaR16 * $zhasilR16TI), 2);

        //SUM PREDIKAT TEKNIK INFORMATIKA
        $array = array($TInformatikaR1, $TInformatikaR2, $TInformatikaR3, $TInformatikaR4, $TInformatikaR5, $TInformatikaR6, $TInformatikaR7, $TInformatikaR8, $TInformatikaR9, $TInformatikaR10, $TInformatikaR11, $TInformatikaR12, $TInformatikaR13, $TInformatikaR14, $TInformatikaR15, $TInformatikaR16);
        $sumPTI = array_sum($array);

        //SUM PREDIKAT*Z TEKNIK INFORMATIKA
        $arr = array($pzR1TI, $pzR2TI, $pzR3TI, $pzR4TI, $pzR5TI, $pzR6TI, $pzR7TI, $pzR8TI, $pzR9TI, $pzR10TI, $pzR11TI, $pzR12TI, $pzR13TI, $pzR14TI, $pzR15TI, $pzR16TI);
        $sumPZTI = array_sum($arr);

        //NILAI Z TEKNIK INFORMATIKA
        $nilaizTInformatika = round(($sumPZTI / $sumPTI), 2);

        //Predikat tekniksipil
        $tekniksipilR1 = min($fisikaKurang, $mtkKurang);
        $tekniksipilR2 = min($fisikaKurang, $mtkCukup);
        $tekniksipilR3 = min($fisikaKurang, $mtkBaik);
        $tekniksipilR4 = min($fisikaKurang, $mtkSb);
        $tekniksipilR5 = min($fisikaCukup, $mtkKurang);
        $tekniksipilR6 = min($fisikaCukup, $mtkCukup);
        $tekniksipilR7 = min($fisikaCukup, $mtkBaik);
        $tekniksipilR8 = min($fisikaCukup, $mtkSb);
        $tekniksipilR9 = min($fisikaBaik, $mtkKurang);
        $tekniksipilR10 = min($fisikaBaik, $mtkCukup);
        $tekniksipilR11 = min(round($fisikaBaik, 2), $mtkBaik);
        $tekniksipilR12 = min(round($fisikaBaik, 2), $mtkSb);
        $tekniksipilR13 = min($fisikaSb, $mtkKurang);
        $tekniksipilR14 = min($fisikaSb, $mtkCukup);
        $tekniksipilR15 = min($fisikaSb, $mtkBaik);
        $tekniksipilR16 = min($fisikaSb, $mtkSb);

        //Z RUMUS tekniksipil
        $zrumusR1TS = '30 - z / 30 - 20 = ' . $tekniksipilR1;
        $zrumusR2TS = 'z - 40 / 50 - 40 = ' . $tekniksipilR2;
        $zrumusR3TS = 'z - 40 / 50 - 40 = ' . $tekniksipilR3;
        $zrumusR4TS = 'z - 60 / 70 - 60 = ' . $tekniksipilR4;
        $zrumusR5TS = 'z - 20 / 30 - 20 = ' . $tekniksipilR5;
        $zrumusR6TS = 'z - 40 / 50 - 40 = ' . $tekniksipilR6;
        $zrumusR7TS = 'z - 60 / 70 - 60 = ' . $tekniksipilR7;
        $zrumusR8TS = 'z - 60 / 70 - 60 = ' . $tekniksipilR8;
        $zrumusR9TS = 'z - 40 / 50 - 40 = ' . $tekniksipilR9;
        $zrumusR10TS = 'z - 40 / 50 - 40 = ' . $tekniksipilR10;
        $zrumusR11TS = 'z - 60 / 70 - 60 = ' . $tekniksipilR11;
        $zrumusR12TS = 'z - 60 / 70 - 60 = ' . $tekniksipilR12;
        $zrumusR13TS = 'z - 40 / 50 - 40 = ' . $tekniksipilR13;
        $zrumusR14TS = 'z - 60 / 70 - 60 = ' . $tekniksipilR14;
        $zrumusR15TS = 'z - 60 / 70 - 60 = ' . $tekniksipilR15;
        $zrumusR16TS = 'z - 80 / 90 - 80 = ' . $tekniksipilR16;


        //Z HASIL tekniksipil
        $zhasilR1TS = - (($tekniksipilR1 * (30 - 20)) - 30);
        $zhasilR2TS = ($tekniksipilR2 * (50 - 40)) + 40;
        $zhasilR3TS = ($tekniksipilR3 * (50 - 40)) + 40;
        $zhasilR4TS = ($tekniksipilR4 * (70 - 60)) + 60;
        $zhasilR5TS = ($tekniksipilR5 * (30 - 20)) + 20;
        $zhasilR6TS = ($tekniksipilR6 * (50 - 40)) + 40;
        $zhasilR7TS = ($tekniksipilR7 * (70 - 60)) + 60;
        $zhasilR8TS = ($tekniksipilR8 * (70 - 60)) + 60;
        $zhasilR9TS = ($tekniksipilR9 * (50 - 40)) + 40;
        $zhasilR10TS = ($tekniksipilR10 * (50 - 40)) + 40;
        $zhasilR11TS = ($tekniksipilR11 * (70 - 60)) + 60;
        $zhasilR12TS = ($tekniksipilR12 * (70 - 60)) + 60;
        $zhasilR13TS = ($tekniksipilR13 * (50 - 40)) + 40;
        $zhasilR14TS = ($tekniksipilR14 * (70 - 60)) + 60;
        $zhasilR15TS = ($tekniksipilR15 * (70 - 60)) + 60;
        $zhasilR16TS = ($tekniksipilR16 * (90 - 80)) + 80;


        //P*Z tekniksipil
        $pzR1TS = $tekniksipilR1 * $zhasilR1TS;
        $pzR2TS = $tekniksipilR2 * $zhasilR2TS;
        $pzR3TS = $tekniksipilR3 * $zhasilR3TS;
        $pzR4TS = $tekniksipilR4 * $zhasilR4TS;
        $pzR5TS = $tekniksipilR5 * $zhasilR5TS;
        $pzR6TS = $tekniksipilR6 * $zhasilR6TS;
        $pzR7TS = $tekniksipilR7 * $zhasilR7TS;
        $pzR8TS = $tekniksipilR8 * $zhasilR8TS;
        $pzR9TS = $tekniksipilR9 * $zhasilR9TS;
        $pzR10TS = $tekniksipilR10 * $zhasilR10TS;
        $pzR11TS = round(($tekniksipilR11 * $zhasilR11TS), 2);
        $pzR12TS = round(($tekniksipilR12 * $zhasilR12TS), 2);
        $pzR13TS = $tekniksipilR13 * $zhasilR13TS;
        $pzR14TS = $tekniksipilR14 * $zhasilR14TS;
        $pzR15TS = round(($tekniksipilR15 * $zhasilR15TS), 2);
        $pzR16TS = round(($tekniksipilR16 * $zhasilR16TS), 2);

        //SUM PREDIKAT tekniksipil
        $array = array($tekniksipilR1, $tekniksipilR2, $tekniksipilR3, $tekniksipilR4, $tekniksipilR5, $tekniksipilR6, $tekniksipilR7, $tekniksipilR8, $tekniksipilR9, $tekniksipilR10, $tekniksipilR11, $tekniksipilR12, $tekniksipilR13, $tekniksipilR14, $tekniksipilR15, $tekniksipilR16);
        $sumPTS = array_sum($array);

        //SUM PREDIKAT*Z tekniksipil
        $arr = array($pzR1TS, $pzR2TS, $pzR3TS, $pzR4TS, $pzR5TS, $pzR6TS, $pzR7TS, $pzR8TS, $pzR9TS, $pzR10TS, $pzR11TS, $pzR12TS, $pzR13TS, $pzR14TS, $pzR15TS, $pzR16TS);
        $sumPZTS = array_sum($arr);

        //NILAI Z Teknik Sipil
        $nilaiztekniksipil = round(($sumPZTS / $sumPTS), 2);

        //Rekomendasi Jurusan IPA
        if (($nilaizKedokteran > $nilaizTInformatika) && ($nilaizKedokteran > $nilaiztekniksipil)) {
            $jurusan_ipa = 'Kedokteran';
            $z_index = $nilaizKedokteran;
        } else if (($nilaizTInformatika > $nilaizKedokteran) && ($nilaizTInformatika > $nilaiztekniksipil)) {
            $jurusan_ipa = 'Teknik Informatika';
            $z_index = $nilaizTInformatika;
        } else if (($nilaiztekniksipil > $nilaizKedokteran) && ($nilaiztekniksipil > $nilaizTInformatika)) {
            $jurusan_ipa = 'Teknik Sipil';
            $z_index = $nilaiztekniksipil;
        } elseif (($nilaizKedokteran == $nilaizTInformatika) && ($nilaizKedokteran > $nilaiztekniksipil)) {
            $jurusan_ipa = 'Kedokteran atau Teknik Informatika';
            $z_index = $nilaizKedokteran;
        } elseif (($nilaizKedokteran == $nilaiztekniksipil) && ($nilaizKedokteran > $nilaizTInformatika)) {
            $jurusan_ipa = 'Kedokteran atau Teknik Sipil';
            $z_index = $nilaiztekniksipil;
        } elseif (($nilaizTInformatika == $nilaiztekniksipil) && ($nilaizTInformatika > $nilaizKedokteran)) {
            $jurusan_ipa = 'Teknik Informatika atau Teknik Sipil';
            $z_index = $nilaizTInformatika;
        } else {
            $jurusan_ipa = 'Error';
            $z_index = 0;
        }

        $data   = [
            'title'         => 'Fuzzyfikasi',
            'nilai_siswa_ipa' => $this->m_siswa->getAllNilaiSiswaIpa(),
            'bio_kurang' => round($bioKurang, 2),
            'bio_cukup' => round($bioCukup, 2),
            'bio_baik' => round($bioBaik, 2),
            'bio_sb' => round($bioSb, 2),
            'mtk_kurang' => round($mtkKurang, 2),
            'mtk_cukup' => round($mtkCukup, 2),
            'mtk_baik' => round($mtkBaik, 2),
            'mtk_sb' => round($mtkSb, 2),
            'inggris_kurang' => round($inggrisKurang, 2),
            'inggris_cukup' => round($inggrisCukup, 2),
            'inggris_baik' => round($inggrisBaik, 2),
            'inggris_sb' => round($inggrisSb, 2),
            'fisika_kurang' => round($fisikaKurang, 2),
            'fisika_cukup' => round($fisikaCukup, 2),
            'fisika_baik' => round($fisikaBaik, 2),
            'fisika_sb' => round($fisikaSb, 2),
            'kedokteranR1' => $kedokteranR1,
            'kedokteranR2' => $kedokteranR2,
            'kedokteranR3' => $kedokteranR3,
            'kedokteranR4' => $kedokteranR4,
            'kedokteranR5' => $kedokteranR5,
            'kedokteranR6' => $kedokteranR6,
            'kedokteranR7' => $kedokteranR7,
            'kedokteranR8' => $kedokteranR8,
            'kedokteranR9' => $kedokteranR9,
            'kedokteranR10' => $kedokteranR10,
            'kedokteranR11' => $kedokteranR11,
            'kedokteranR12' => $kedokteranR12,
            'kedokteranR13' => $kedokteranR13,
            'kedokteranR14' => $kedokteranR14,
            'kedokteranR15' => $kedokteranR15,
            'kedokteranR16' => $kedokteranR16,
            'zrumusR1K' => $zrumusR1K,
            'zrumusR2K' => $zrumusR2K,
            'zrumusR3K' => $zrumusR3K,
            'zrumusR4K' => $zrumusR4K,
            'zrumusR5K' => $zrumusR5K,
            'zrumusR6K' => $zrumusR6K,
            'zrumusR7K' => $zrumusR7K,
            'zrumusR8K' => $zrumusR8K,
            'zrumusR9K' => $zrumusR9K,
            'zrumusR10K' => $zrumusR10K,
            'zrumusR11K' => $zrumusR11K,
            'zrumusR12K' => $zrumusR12K,
            'zrumusR13K' => $zrumusR13K,
            'zrumusR14K' => $zrumusR14K,
            'zrumusR15K' => $zrumusR15K,
            'zrumusR16K' => $zrumusR16K,
            'zhasilR1K' => $zhasilR1K,
            'zhasilR2K' => $zhasilR2K,
            'zhasilR3K' => $zhasilR3K,
            'zhasilR4K' => $zhasilR4K,
            'zhasilR5K' => $zhasilR5K,
            'zhasilR6K' => $zhasilR6K,
            'zhasilR7K' => $zhasilR7K,
            'zhasilR8K' => $zhasilR8K,
            'zhasilR9K' => $zhasilR9K,
            'zhasilR10K' => $zhasilR10K,
            'zhasilR11K' => $zhasilR11K,
            'zhasilR12K' => $zhasilR12K,
            'zhasilR13K' => $zhasilR13K,
            'zhasilR14K' => $zhasilR14K,
            'zhasilR15K' => $zhasilR15K,
            'zhasilR16K' => $zhasilR16K,
            'pzR1K' => $pzR1K,
            'pzR2K' => $pzR2K,
            'pzR3K' => $pzR3K,
            'pzR4K' => $pzR4K,
            'pzR5K' => $pzR5K,
            'pzR6K' => $pzR6K,
            'pzR7K' => $pzR7K,
            'pzR8K' => $pzR8K,
            'pzR9K' => $pzR9K,
            'pzR10K' => $pzR10K,
            'pzR11K' => $pzR11K,
            'pzR12K' => $pzR12K,
            'pzR13K' => $pzR13K,
            'pzR14K' => $pzR14K,
            'pzR15K' => $pzR15K,
            'pzR16K' => $pzR16K,
            'sumPK' => $sumPK,
            'sumPZK' => $sumPZK,
            'nilaizKedokteran' => $nilaizKedokteran,

            'TInformatikaR1' => $TInformatikaR1,
            'TInformatikaR2' => $TInformatikaR2,
            'TInformatikaR3' => $TInformatikaR3,
            'TInformatikaR4' => $TInformatikaR4,
            'TInformatikaR5' => $TInformatikaR5,
            'TInformatikaR6' => $TInformatikaR6,
            'TInformatikaR7' => $TInformatikaR7,
            'TInformatikaR8' => $TInformatikaR8,
            'TInformatikaR9' => $TInformatikaR9,
            'TInformatikaR10' => $TInformatikaR10,
            'TInformatikaR11' => $TInformatikaR11,
            'TInformatikaR12' => $TInformatikaR12,
            'TInformatikaR13' => $TInformatikaR13,
            'TInformatikaR14' => $TInformatikaR14,
            'TInformatikaR15' => $TInformatikaR15,
            'TInformatikaR16' => $TInformatikaR16,
            'zrumusR1TI' => $zrumusR1TI,
            'zrumusR2TI' => $zrumusR2TI,
            'zrumusR3TI' => $zrumusR3TI,
            'zrumusR4TI' => $zrumusR4TI,
            'zrumusR5TI' => $zrumusR5TI,
            'zrumusR6TI' => $zrumusR6TI,
            'zrumusR7TI' => $zrumusR7TI,
            'zrumusR8TI' => $zrumusR8TI,
            'zrumusR9TI' => $zrumusR9TI,
            'zrumusR10TI' => $zrumusR10TI,
            'zrumusR11TI' => $zrumusR11TI,
            'zrumusR12TI' => $zrumusR12TI,
            'zrumusR13TI' => $zrumusR13TI,
            'zrumusR14TI' => $zrumusR14TI,
            'zrumusR15TI' => $zrumusR15TI,
            'zrumusR16TI' => $zrumusR16TI,
            'zhasilR1TI' => $zhasilR1TI,
            'zhasilR2TI' => $zhasilR2TI,
            'zhasilR3TI' => $zhasilR3TI,
            'zhasilR4TI' => $zhasilR4TI,
            'zhasilR5TI' => $zhasilR5TI,
            'zhasilR6TI' => $zhasilR6TI,
            'zhasilR7TI' => $zhasilR7TI,
            'zhasilR8TI' => $zhasilR8TI,
            'zhasilR9TI' => $zhasilR9TI,
            'zhasilR10TI' => $zhasilR10TI,
            'zhasilR11TI' => $zhasilR11TI,
            'zhasilR12TI' => $zhasilR12TI,
            'zhasilR13TI' => $zhasilR13TI,
            'zhasilR14TI' => $zhasilR14TI,
            'zhasilR15TI' => $zhasilR15TI,
            'zhasilR16TI' => $zhasilR16TI,
            'pzR1TI' => $pzR1TI,
            'pzR2TI' => $pzR2TI,
            'pzR3TI' => $pzR3TI,
            'pzR4TI' => $pzR4TI,
            'pzR5TI' => $pzR5TI,
            'pzR6TI' => $pzR6TI,
            'pzR7TI' => $pzR7TI,
            'pzR8TI' => $pzR8TI,
            'pzR9TI' => $pzR9TI,
            'pzR10TI' => $pzR10TI,
            'pzR11TI' => $pzR11TI,
            'pzR12TI' => $pzR12TI,
            'pzR13TI' => $pzR13TI,
            'pzR14TI' => $pzR14TI,
            'pzR15TI' => $pzR15TI,
            'pzR16TI' => $pzR16TI,
            'sumPTI' => $sumPTI,
            'sumPZTI' => $sumPZTI,
            'nilaizTInformatika' => $nilaizTInformatika,

            'tekniksipilR1' => $tekniksipilR1,
            'tekniksipilR2' => $tekniksipilR2,
            'tekniksipilR3' => $tekniksipilR3,
            'tekniksipilR4' => $tekniksipilR4,
            'tekniksipilR5' => $tekniksipilR5,
            'tekniksipilR6' => $tekniksipilR6,
            'tekniksipilR7' => $tekniksipilR7,
            'tekniksipilR8' => $tekniksipilR8,
            'tekniksipilR9' => $tekniksipilR9,
            'tekniksipilR10' => $tekniksipilR10,
            'tekniksipilR11' => $tekniksipilR11,
            'tekniksipilR12' => $tekniksipilR12,
            'tekniksipilR13' => $tekniksipilR13,
            'tekniksipilR14' => $tekniksipilR14,
            'tekniksipilR15' => $tekniksipilR15,
            'tekniksipilR16' => $tekniksipilR16,
            'zrumusR1TS' => $zrumusR1TS,
            'zrumusR2TS' => $zrumusR2TS,
            'zrumusR3TS' => $zrumusR3TS,
            'zrumusR4TS' => $zrumusR4TS,
            'zrumusR5TS' => $zrumusR5TS,
            'zrumusR6TS' => $zrumusR6TS,
            'zrumusR7TS' => $zrumusR7TS,
            'zrumusR8TS' => $zrumusR8TS,
            'zrumusR9TS' => $zrumusR9TS,
            'zrumusR10TS' => $zrumusR10TS,
            'zrumusR11TS' => $zrumusR11TS,
            'zrumusR12TS' => $zrumusR12TS,
            'zrumusR13TS' => $zrumusR13TS,
            'zrumusR14TS' => $zrumusR14TS,
            'zrumusR15TS' => $zrumusR15TS,
            'zrumusR16TS' => $zrumusR16TS,
            'zhasilR1TS' => $zhasilR1TS,
            'zhasilR2TS' => $zhasilR2TS,
            'zhasilR3TS' => $zhasilR3TS,
            'zhasilR4TS' => $zhasilR4TS,
            'zhasilR5TS' => $zhasilR5TS,
            'zhasilR6TS' => $zhasilR6TS,
            'zhasilR7TS' => $zhasilR7TS,
            'zhasilR8TS' => $zhasilR8TS,
            'zhasilR9TS' => $zhasilR9TS,
            'zhasilR10TS' => $zhasilR10TS,
            'zhasilR11TS' => $zhasilR11TS,
            'zhasilR12TS' => $zhasilR12TS,
            'zhasilR13TS' => $zhasilR13TS,
            'zhasilR14TS' => $zhasilR14TS,
            'zhasilR15TS' => $zhasilR15TS,
            'zhasilR16TS' => $zhasilR16TS,
            'pzR1TS' => $pzR1TS,
            'pzR2TS' => $pzR2TS,
            'pzR3TS' => $pzR3TS,
            'pzR4TS' => $pzR4TS,
            'pzR5TS' => $pzR5TS,
            'pzR6TS' => $pzR6TS,
            'pzR7TS' => $pzR7TS,
            'pzR8TS' => $pzR8TS,
            'pzR9TS' => $pzR9TS,
            'pzR10TS' => $pzR10TS,
            'pzR11TS' => $pzR11TS,
            'pzR12TS' => $pzR12TS,
            'pzR13TS' => $pzR13TS,
            'pzR14TS' => $pzR14TS,
            'pzR15TS' => $pzR15TS,
            'pzR16TS' => $pzR16TS,
            'sumPTS' => $sumPTS,
            'sumPZTS' => $sumPZTS,
            'nilaiztekniksipil' => $nilaiztekniksipil,

            'z_index' => $z_index,

            'jurusan_ipa' => $jurusan_ipa,
        ];

        $simpan_data = [
            'nis' => $nis,
            'nama' => $nama,
            'bio_kurang' => round($bioKurang, 2),
            'bio_cukup' => round($bioCukup, 2),
            'bio_baik' => round($bioBaik, 2),
            'bio_sb' => round($bioSb, 2),
            'mtk_kurang' => round($mtkKurang, 2),
            'mtk_cukup' => round($mtkCukup, 2),
            'mtk_baik' => round($mtkBaik, 2),
            'mtk_sb' => round($mtkSb, 2),
            'inggris_kurang' => round($inggrisKurang, 2),
            'inggris_cukup' => round($inggrisCukup, 2),
            'inggris_baik' => round($inggrisBaik, 2),
            'inggris_sb' => round($inggrisSb, 2),
            'fisika_kurang' => round($fisikaKurang, 2),
            'fisika_cukup' => round($fisikaCukup, 2),
            'fisika_baik' => round($fisikaBaik, 2),
            'fisika_sb' => round($fisikaSb, 2),
            'z_index' => $z_index,
            'rekjur' => $jurusan_ipa,

        ];

        $cek = $this->db->query("SELECT * FROM tbl_nilai_rekjur_ipa where nis='" . $nis . "'")->num_rows();
        if ($cek > 0) {
            $this->session->set_flashdata('flashrekjurgagal', ', Ulangi');
            redirect('controllerjuripa/fuzzyfikasi');
        } else {
            $this->m_siswa->tambahRekjurSiswaIpa($simpan_data);
            $this->session->set_flashdata('flashrekjursukses', 'Diproses');
        }



        $this->load->view('includes/headerr', $data);
        $this->load->view('jurusan_ipa/fuzzyfikasi', $data);
        $this->load->view('includes/js');
        $this->load->view('includes/footer');
        // var_dump($a['a']);
    }
}
