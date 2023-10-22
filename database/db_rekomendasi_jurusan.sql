-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2022 at 06:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rekomendasi_jurusan`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `h_siswa`
-- (See below for the actual view)
--
CREATE TABLE `h_siswa` (
`nis` int(32)
,`nama_lengkap` varchar(128)
,`kelas` varchar(11)
,`rekjur` varchar(32)
,`minbat_rekjur` varchar(128)
);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login_admin`
--

CREATE TABLE `tbl_login_admin` (
  `id_tbl_login` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login_admin`
--

INSERT INTO `tbl_login_admin` (`id_tbl_login`, `name`, `username`, `password`) VALUES
(1, 'Ferdiansyah', 'admin1', 'adminangkasa1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_minbat_ipa`
--

CREATE TABLE `tbl_minbat_ipa` (
  `id_minbat` int(11) NOT NULL,
  `nis` int(32) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kelas` varchar(32) NOT NULL,
  `minbat_rekjur` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_minbat_ipa`
--

INSERT INTO `tbl_minbat_ipa` (`id_minbat`, `nis`, `nama`, `kelas`, `minbat_rekjur`) VALUES
(0, 191072, 'Agnes Vigili Dirgatri', 'XII-MIA 1', 'Kecerdasan Visual (Teknik Sipil)'),
(0, 191073, 'Ahmad Nursyam Jaya', 'XII-MIA 1', 'Kecerdasan Interpersonal (Kedokteran)'),
(0, 191074, 'Ahmad Rakha Sadhiq', 'XII-MIA 1', 'Kecerdasan Logis (Teknik Informatika)'),
(0, 191075, 'Ahmadan Fatrah Rusnan', 'XII-MIA 1', 'Kecerdasan Visual (Teknik Sipil)'),
(0, 191076, 'Anastasya Syahratuul Andara', 'XII-MIA 1', 'Kecerdasan Logis (Teknik Informatika)'),
(0, 191107, 'Aathifah Kurnia Yusman', 'XII-MIA 2', 'Kecerdasan Logis (Teknik Informatika)'),
(0, 191108, 'Ajen Pitrah Sari Manggama', 'XII-MIA 2', 'Kecerdasan Visual (Teknik Sipil)'),
(0, 191109, 'Aliftiawanto Abi Nursyahid', 'XII-MIA 2', 'Kecerdasan Visual (Teknik Sipil)'),
(0, 191110, 'Apriliani', 'XII-MIA 2', 'Kecerdasan Interpersonal (Kedokteran)'),
(0, 191113, 'Devi Meilani Hustyorini Kalijanti', 'XII-MIA 2', 'Kecerdasan Interpersonal (Kedokteran)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_minbat_ips`
--

CREATE TABLE `tbl_minbat_ips` (
  `id_minbat` int(11) NOT NULL,
  `nis` int(32) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kelas` varchar(32) NOT NULL,
  `minbat_rekjur` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_minbat_ips`
--

INSERT INTO `tbl_minbat_ips` (`id_minbat`, `nis`, `nama`, `kelas`, `minbat_rekjur`) VALUES
(0, 191002, 'Alfriani Karni Romba', 'XII-IIS 1', 'Kecerdasan verbal (Ilmu Politik)'),
(0, 191005, 'Arni Ruru', 'XII-IIS 1', 'Kecerdasan Logis (Akuntansi)'),
(0, 191006, 'Betriks Evangelica Lebang', 'XII-IIS 1', 'Kecerdasan verbal (Ilmu Politik)'),
(0, 191007, 'Chrizant Gryfveinka Immanuella', 'XII-IIS 1', 'Kecerdasan Interpersonal (Psikologi)'),
(0, 191008, 'Cut Asmajriah Febrinasari', 'XII-IIS 1', 'Kecerdasan Logis (Akuntansi)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_rekjur_ipa`
--

CREATE TABLE `tbl_nilai_rekjur_ipa` (
  `id_rekjur_nilai` int(11) NOT NULL,
  `nis` int(32) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `rekjur` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nilai_rekjur_ipa`
--

INSERT INTO `tbl_nilai_rekjur_ipa` (`id_rekjur_nilai`, `nis`, `nama`, `rekjur`) VALUES
(0, 191072, 'Agnes Vigili Dirgatri', 'Teknik Sipil'),
(0, 191073, 'Ahmad Nursyam Jaya', 'Teknik Informatika'),
(0, 191074, 'Ahmad Rakha Sadhiq', 'Teknik Informatika'),
(0, 191075, 'Ahmadan Fatrah Rusnan', 'Teknik Sipil'),
(0, 191076, 'Anastasya Syahratuul Andara', 'Teknik Informatika'),
(0, 191107, 'Aathifah Kurnia Yusman', 'Kedokteran'),
(0, 191108, 'Ajen Pitrah Sari Manggama', 'Kedokteran'),
(0, 191109, 'Aliftiawanto Abi Nursyahid', 'Kedokteran'),
(0, 191110, 'Apriliani', 'Kedokteran'),
(0, 191113, 'Devi Meilani Hustyorini Kalijanti', 'Kedokteran');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_rekjur_ips`
--

CREATE TABLE `tbl_nilai_rekjur_ips` (
  `id_table` int(11) NOT NULL,
  `nis` int(32) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `rekjur` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nilai_rekjur_ips`
--

INSERT INTO `tbl_nilai_rekjur_ips` (`id_table`, `nis`, `nama`, `rekjur`) VALUES
(0, 191002, 'Alfriani Karni Romba', 'Psikologi'),
(0, 191005, 'Arni Ruru', 'Ilmu Politik'),
(0, 191006, 'Betriks Evangelica Lebang', 'Ilmu Politik'),
(0, 191007, 'Chrizant Gryfveinka Immanuella', 'Ilmu Politik'),
(0, 191008, 'Cut Asmajriah Febrinasari', 'Ilmu Politik');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_siswa_ipa`
--

CREATE TABLE `tbl_nilai_siswa_ipa` (
  `id_tbl_nilai` int(11) NOT NULL,
  `nis` int(32) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `kelas` varchar(32) NOT NULL,
  `nilaibio_s1` int(11) NOT NULL,
  `nilaibio_s2` int(11) NOT NULL,
  `nilaibio_s3` int(11) NOT NULL,
  `nilaibio_s4` int(11) NOT NULL,
  `nilaibio_s5` int(11) NOT NULL,
  `nilai_rata_bio` double NOT NULL,
  `nilaimtk_s1` int(11) NOT NULL,
  `nilaimtk_s2` int(11) NOT NULL,
  `nilaimtk_s3` int(11) NOT NULL,
  `nilaimtk_s4` int(11) NOT NULL,
  `nilaimtk_s5` int(11) NOT NULL,
  `nilai_rata_mtk` double NOT NULL,
  `nilaiinggris_s1` int(11) NOT NULL,
  `nilaiinggris_s2` int(11) NOT NULL,
  `nilaiinggris_s3` int(11) NOT NULL,
  `nilaiinggris_s4` int(11) NOT NULL,
  `nilaiinggris_s5` int(11) NOT NULL,
  `nilai_rata_inggris` double NOT NULL,
  `nilaifisika_s1` int(11) NOT NULL,
  `nilaifisika_s2` int(11) NOT NULL,
  `nilaifisika_s3` int(11) NOT NULL,
  `nilaifisika_s4` int(11) NOT NULL,
  `nilaifisika_s5` int(11) NOT NULL,
  `nilai_rata_fisika` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilai_siswa_ipa`
--

INSERT INTO `tbl_nilai_siswa_ipa` (`id_tbl_nilai`, `nis`, `nama_lengkap`, `kelas`, `nilaibio_s1`, `nilaibio_s2`, `nilaibio_s3`, `nilaibio_s4`, `nilaibio_s5`, `nilai_rata_bio`, `nilaimtk_s1`, `nilaimtk_s2`, `nilaimtk_s3`, `nilaimtk_s4`, `nilaimtk_s5`, `nilai_rata_mtk`, `nilaiinggris_s1`, `nilaiinggris_s2`, `nilaiinggris_s3`, `nilaiinggris_s4`, `nilaiinggris_s5`, `nilai_rata_inggris`, `nilaifisika_s1`, `nilaifisika_s2`, `nilaifisika_s3`, `nilaifisika_s4`, `nilaifisika_s5`, `nilai_rata_fisika`) VALUES
(23, 191072, 'Agnes Vigili Dirgatri', 'XII-MIA 1', 85, 85, 85, 0, 84, 67.8, 62, 79, 65, 88, 83, 75.4, 88, 80, 81, 83, 88, 84, 84, 88, 76, 85, 84, 83.4),
(24, 191073, 'Ahmad Nursyam Jaya', 'XII-MIA 1', 81, 81, 84, 85, 85, 83.2, 84, 86, 87, 88, 91, 87.2, 90, 89, 92, 87, 92, 90, 86, 84, 86, 90, 86, 86.4),
(25, 191074, 'Ahmad Rakha Sadhiq', 'XII-MIA 1', 80, 81, 84, 85, 86, 83.2, 82, 80, 84, 85, 89, 84, 86, 84, 88, 85, 93, 87.2, 88, 86, 86, 88, 84, 86.4),
(26, 191075, 'Ahmadan Fatrah Rusnan', 'XII-MIA 1', 80, 81, 85, 85, 84, 83, 80, 81, 84, 85, 88, 83.6, 90, 85, 87, 80, 91, 86.6, 88, 87, 87, 89, 83, 86.8),
(27, 191076, 'Anastasya Syahratuul Andara', 'XII-MIA 1', 84, 84, 84, 85, 86, 84.6, 85, 87, 88, 89, 92, 88.2, 89, 90, 92, 82, 91, 88.8, 87, 88, 88, 90, 86, 87.8),
(28, 191107, 'Aathifah Kurnia Yusman', 'XII-MIA 2', 85, 84, 84, 84, 85, 84.4, 78, 80, 84, 85, 86, 82.6, 96, 92, 92, 94, 91, 93, 84, 85, 86, 87, 84, 85.2),
(29, 191108, 'Ajen Pitrah Sari Manggama', 'XII-MIA 2', 85, 84, 83, 84, 86, 84.4, 78, 80, 84, 85, 80, 81.4, 93, 87, 89, 79, 84, 86.4, 84, 85, 85, 87, 84, 85),
(30, 191109, 'Aliftiawanto Abi Nursyahid', 'XII-MIA 2', 84, 83, 83, 84, 86, 84, 78, 80, 84, 85, 84, 82.2, 90, 83, 86, 87, 90, 87.2, 84, 85, 85, 88, 84, 85.2),
(31, 191110, 'Apriliani', 'XII-MIA 2', 86, 86, 83, 75, 86, 83.2, 79, 80, 84, 75, 84, 80.4, 87, 83, 86, 78, 86, 84, 85, 85, 85, 85, 84, 84.8),
(32, 191113, 'Devi Meilani Hustyorini Kalijanti', 'XII-MIA 2', 80, 79, 84, 84, 85, 82.4, 79, 80, 82, 84, 84, 81.8, 84, 85, 87, 85, 89, 86, 85, 85, 86, 88, 84, 85.6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_siswa_ips`
--

CREATE TABLE `tbl_nilai_siswa_ips` (
  `id_tbl_nilai` int(11) NOT NULL,
  `nis` int(32) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `kelas` varchar(32) NOT NULL,
  `nilaieko_s1` int(11) NOT NULL,
  `nilaieko_s2` int(11) NOT NULL,
  `nilaieko_s3` int(11) NOT NULL,
  `nilaieko_s4` int(11) NOT NULL,
  `nilaieko_s5` int(11) NOT NULL,
  `nilai_rata_eko` double NOT NULL,
  `nilaimtk_s1` int(11) NOT NULL,
  `nilaimtk_s2` int(11) NOT NULL,
  `nilaimtk_s3` int(11) NOT NULL,
  `nilaimtk_s4` int(11) NOT NULL,
  `nilaimtk_s5` int(11) NOT NULL,
  `nilai_rata_mtk` double NOT NULL,
  `nilaiinggris_s1` int(11) NOT NULL,
  `nilaiinggris_s2` int(11) NOT NULL,
  `nilaiinggris_s3` int(11) NOT NULL,
  `nilaiinggris_s4` int(11) NOT NULL,
  `nilaiinggris_s5` int(11) NOT NULL,
  `nilai_rata_inggris` double NOT NULL,
  `nilaippkn_s1` int(11) NOT NULL,
  `nilaippkn_s2` int(11) NOT NULL,
  `nilaippkn_s3` int(11) NOT NULL,
  `nilaippkn_s4` int(11) NOT NULL,
  `nilaippkn_s5` int(11) NOT NULL,
  `nilai_rata_ppkn` double NOT NULL,
  `nilaisosio_s1` int(11) NOT NULL,
  `nilaisosio_s2` int(11) NOT NULL,
  `nilaisosio_s3` int(11) NOT NULL,
  `nilaisosio_s4` int(11) NOT NULL,
  `nilaisosio_s5` int(11) NOT NULL,
  `nilai_rata_sosio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilai_siswa_ips`
--

INSERT INTO `tbl_nilai_siswa_ips` (`id_tbl_nilai`, `nis`, `nama_lengkap`, `kelas`, `nilaieko_s1`, `nilaieko_s2`, `nilaieko_s3`, `nilaieko_s4`, `nilaieko_s5`, `nilai_rata_eko`, `nilaimtk_s1`, `nilaimtk_s2`, `nilaimtk_s3`, `nilaimtk_s4`, `nilaimtk_s5`, `nilai_rata_mtk`, `nilaiinggris_s1`, `nilaiinggris_s2`, `nilaiinggris_s3`, `nilaiinggris_s4`, `nilaiinggris_s5`, `nilai_rata_inggris`, `nilaippkn_s1`, `nilaippkn_s2`, `nilaippkn_s3`, `nilaippkn_s4`, `nilaippkn_s5`, `nilai_rata_ppkn`, `nilaisosio_s1`, `nilaisosio_s2`, `nilaisosio_s3`, `nilaisosio_s4`, `nilaisosio_s5`, `nilai_rata_sosio`) VALUES
(16, 191002, 'Alfriani Karni Romba', 'XII-IIS 1', 86, 89, 90, 92, 93, 90, 81, 84, 84, 85, 82, 83.2, 91, 87, 90, 88, 91, 89.4, 86, 92, 86, 89, 92, 89, 86, 78, 86, 90, 93, 86.6),
(17, 191005, 'Arni Ruru', 'XII-IIS 1', 82, 87, 82, 82, 87, 84, 77, 79, 80, 81, 79, 79.2, 83, 86, 82, 81, 86, 83.6, 84, 91, 86, 85, 86, 86.4, 84, 86, 86, 87, 87, 86),
(18, 191006, 'Betriks Evangelica Lebang', 'XII-IIS 1', 87, 88, 82, 82, 87, 85.2, 77, 79, 78, 80, 77, 78.2, 83, 78, 77, 79, 83, 80, 85, 84, 85, 87, 86, 85.4, 85, 80, 86, 82, 88, 84.2),
(19, 191007, 'Chrizant Gryfveinka Immanuella', 'XII-IIS 1', 87, 88, 82, 82, 88, 85.4, 78, 82, 83, 84, 80, 81.4, 84, 82, 81, 84, 88, 83.8, 82, 84, 84, 85, 87, 84.4, 84, 85, 86, 82, 89, 85.2),
(20, 191008, 'Cut Asmajriah Febrinasari', 'XII-IIS 1', 81, 88, 84, 92, 93, 87.6, 80, 80, 80, 82, 78, 80, 86, 85, 83, 76, 82, 82.4, 84, 85, 85, 85, 89, 85.6, 84, 85, 85, 86, 88, 85.6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis` int(32) NOT NULL,
  `nama_lengkap` varchar(128) NOT NULL,
  `kelas` varchar(11) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `jenkel` varchar(32) NOT NULL,
  `pw_login` varchar(64) NOT NULL,
  `id_table` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `nama_lengkap`, `kelas`, `alamat`, `jenkel`, `pw_login`, `id_table`) VALUES
(191002, 'Alfriani Karni Romba', 'XII-IIS 1', '#', 'Perempuan', '191002', 0),
(191005, 'Arni Ruru', 'XII-IIS 1', '#', 'Perempuan', '191005', 0),
(191006, 'Betriks Evangelica Lebang', 'XII-IIS 1', '#', 'Perempuan', '191006', 0),
(191007, 'Chrizant Gryfveinka Immanuella', 'XII-IIS 1', '#', 'Perempuan', '191007', 0),
(191008, 'Cut Asmajriah Febrinasari', 'XII-IIS 1', '#', 'Perempuan', '191008', 0),
(191072, 'Agnes Vigili Dirgatri', 'XII-MIA 1', '#', 'Perempuan', '191072', 2),
(191073, 'Ahmad Nursyam Jaya', 'XII-MIA 1', '#', 'Laki-Laki', '191073', 0),
(191074, 'Ahmad Rakha Sadhiq', 'XII-MIA 1', '#', 'Laki-Laki', '191074', 0),
(191075, 'Ahmadan Fatrah Rusnan', 'XII-MIA 1', '#', 'Laki-Laki', '191075', 0),
(191076, 'Anastasya Syahratuul Andara', 'XII-MIA 1', '#', 'Perempuan', '191076', 0),
(191107, 'Aathifah Kurnia Yusman', 'XII-MIA 2', '#', 'Perempuan', '191107', 0),
(191108, 'Ajen Pitrah Sari Manggama', 'XII-MIA 2', '#', 'Perempuan', '191108', 0),
(191109, 'Aliftiawanto Abi Nursyahid', 'XII-MIA 2', '#', 'Laki-Laki', '191109', 0),
(191110, 'Apriliani', 'XII-MIA 2', '#', 'Perempuan', '191110', 0),
(191113, 'Devi Meilani Hustyorini Kalijanti', 'XII-MIA 2', '#', 'Perempuan', '191113', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_siswa_ipa`
-- (See below for the actual view)
--
CREATE TABLE `v_siswa_ipa` (
`nis` int(32)
,`nama_lengkap` varchar(128)
,`kelas` varchar(11)
,`rekjur` varchar(32)
);

-- --------------------------------------------------------

--
-- Structure for view `h_siswa`
--
DROP TABLE IF EXISTS `h_siswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `h_siswa`  AS SELECT `tbl_siswa`.`nis` AS `nis`, `tbl_siswa`.`nama_lengkap` AS `nama_lengkap`, `tbl_siswa`.`kelas` AS `kelas`, `tbl_nilai_rekjur_ipa`.`rekjur` AS `rekjur`, `tbl_minbat_ipa`.`minbat_rekjur` AS `minbat_rekjur` FROM ((`tbl_siswa` join `tbl_nilai_rekjur_ipa` on(`tbl_siswa`.`nis` = `tbl_nilai_rekjur_ipa`.`nis`)) join `tbl_minbat_ipa` on(`tbl_siswa`.`nis` = `tbl_minbat_ipa`.`nis`)) ;

-- --------------------------------------------------------

--
-- Structure for view `v_siswa_ipa`
--
DROP TABLE IF EXISTS `v_siswa_ipa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_siswa_ipa`  AS SELECT `tbl_siswa`.`nis` AS `nis`, `tbl_siswa`.`nama_lengkap` AS `nama_lengkap`, `tbl_siswa`.`kelas` AS `kelas`, `tbl_nilai_rekjur_ipa`.`rekjur` AS `rekjur` FROM (`tbl_siswa` join `tbl_nilai_rekjur_ipa`) WHERE `tbl_siswa`.`nis` = `tbl_nilai_rekjur_ipa`.`nis` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_login_admin`
--
ALTER TABLE `tbl_login_admin`
  ADD PRIMARY KEY (`id_tbl_login`);

--
-- Indexes for table `tbl_minbat_ipa`
--
ALTER TABLE `tbl_minbat_ipa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tbl_minbat_ips`
--
ALTER TABLE `tbl_minbat_ips`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tbl_nilai_rekjur_ipa`
--
ALTER TABLE `tbl_nilai_rekjur_ipa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tbl_nilai_rekjur_ips`
--
ALTER TABLE `tbl_nilai_rekjur_ips`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tbl_nilai_siswa_ipa`
--
ALTER TABLE `tbl_nilai_siswa_ipa`
  ADD PRIMARY KEY (`id_tbl_nilai`);

--
-- Indexes for table `tbl_nilai_siswa_ips`
--
ALTER TABLE `tbl_nilai_siswa_ips`
  ADD PRIMARY KEY (`id_tbl_nilai`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login_admin`
--
ALTER TABLE `tbl_login_admin`
  MODIFY `id_tbl_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_nilai_siswa_ipa`
--
ALTER TABLE `tbl_nilai_siswa_ipa`
  MODIFY `id_tbl_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_nilai_siswa_ips`
--
ALTER TABLE `tbl_nilai_siswa_ips`
  MODIFY `id_tbl_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
