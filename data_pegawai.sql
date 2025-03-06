-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2025 at 11:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `nip` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `l` varchar(30) NOT NULL,
  `golongan` varchar(30) NOT NULL,
  `eselon` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `tempat_tugas` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `unit_kerja` varchar(30) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `npwp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`nip`, `nama`, `tempat_lahir`, `alamat`, `tanggal_lahir`, `l`, `golongan`, `eselon`, `jabatan`, `tempat_tugas`, `agama`, `unit_kerja`, `no_hp`, `npwp`) VALUES
(1213056901, 'Saifulloh Rifai', 'Banjarnegara', 'Jl. Melon No.16 Dian Asri', '15-03-1968', 'L', 'IV/e', 'I', 'Kepala sekretariat utama', 'Jakarta', 'Islam', '', '', ''),
(1213056902, '', '', 'Jl.Golf Komp Bokosuranal No.39', '27-08-1968', 'L', 'IV/a', '', 'Penyusun Laporan Keuangan', '', 'Islam', '', '', ''),
(1213056903, '', '', 'Jl.Mendut III, Puri Nirwana 1 ', '10-07-1987', 'L', 'III/e', '', 'Surveyor Pemetaan Pertama', '', 'Islam', '', '', ''),
(1213056904, '', '', 'Perum Jombor Baru', '03-05-1987', 'L', 'III/b', '', 'Analis Data Survei dan Pemetaa', '', 'Islam', '', '', ''),
(1213056905, '', 'Trengalek', 'Trengalek', '07-07-1992', 'L', 'III/a', '', 'Perancang Per-UU-an Utama IV/e', '', 'Islam', '', '', ''),
(1213056906, '', '', 'Bella Casa Residence Blok E.1 ', '05-06-1963', 'L', 'IV/c', 'II', 'Kepala Biro Perencanaan, Penga', '', 'Islam', '', '', ''),
(1213056907, '', '', 'Jl Pelita 1/18 Kedung Halang T', '07-11-1952', 'L', 'IV/e', '', 'Widyaiswara Utama IV/e', '', 'Islam', '', '', ''),
(1213056908, '', '', 'Komp. BAKOSURTANAL CIKARET', '12-09-1954', 'L', 'IV/e', '', '', '', 'Islam', '', '', ''),
(1213056909, '', '', 'Cigadung Selatan II/135', '30-11-1966', 'L', 'IV/d', '', '', '', 'Islam ', '', '', ''),
(1313056909, '', '', 'Jl Raya Tegar Beriman Gg H Jai', '04-12- 1962', 'L', 'IV/c', '', 'Analis Kepegawaian Madya IV/b', '', 'Islam', '', '', ''),
(1323056909, '', '', '', '03-07- 1963', 'L', 'IV/b', '', '', '', 'Islam', '', '', ''),
(1333056909, '', '', 'Jl.Kupu-kupu Blok NJ 16. RT.03', '22-08- 1970', 'L', 'IV/a', '', 'Kepala Sub Bidang Kerjasama da', '', 'Islam', '', '', ''),
(1343056909, '', '', 'Kp. Sawah RT.01/11 No.27', '11-10- 1958', 'L', 'III/d', '', 'Analis Hukum', '', 'Islam', '', '', ''),
(1353056909, '', '', 'Jl. Kebon Pedes Gang Pacilong ', '14-12- 1967', 'L', 'III/c', '', 'Peneliti Pertama  III/b', '', 'Islam', '', '', ''),
(1363056909, '', '', 'Jl Setasiun No 294 RT 06 RW 01', '09-04- 1983', 'L', 'III/c', '', 'Surveyor Pemetaan  Muda', '', 'Islam', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `nip` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
