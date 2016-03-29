-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2016 at 02:18 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eproposal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `epro_desa`
--

CREATE TABLE IF NOT EXISTS `epro_desa` (
  `id` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `nama_desa` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `epro_detil_kabupaten_datapengangguran`
--

CREATE TABLE IF NOT EXISTS `epro_detil_kabupaten_datapengangguran` (
  `id_kabupaten` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `jumlah_pengangguran` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `epro_detil_kabupaten_informasi`
--

CREATE TABLE IF NOT EXISTS `epro_detil_kabupaten_informasi` (
  `id_kabupaten` int(11) NOT NULL,
  `logo` varchar(256) DEFAULT NULL,
  `nama_walikota` varchar(256) DEFAULT NULL,
  `nama_dinas` varchar(255) DEFAULT NULL,
  `nama_kepala_dinas` varchar(255) DEFAULT NULL,
  `nip_kepala_dinas` varchar(255) DEFAULT NULL,
  `alamat` text,
  `notelp` varchar(255) DEFAULT NULL,
  `alamat_fax` varchar(255) DEFAULT NULL,
  `email_dinas` varchar(255) DEFAULT NULL,
  `nomor_kontak_kepala_dinas` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `epro_detil_kabupaten_jumlahpenduduk`
--

CREATE TABLE IF NOT EXISTS `epro_detil_kabupaten_jumlahpenduduk` (
  `id_kabupaten` int(11) NOT NULL,
  `jumlah_pria` int(11) NOT NULL,
  `jumlah_wanita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `epro_detil_kabupaten_perdask`
--

CREATE TABLE IF NOT EXISTS `epro_detil_kabupaten_perdask` (
  `id_kabupaten` int(11) NOT NULL,
  `judul` varchar(256) DEFAULT NULL,
  `file_sk` varchar(256) DEFAULT NULL,
  `tanggal_penetapan` varchar(256) DEFAULT NULL,
  `released_date` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `epro_hasilverifikasi`
--

CREATE TABLE IF NOT EXISTS `epro_hasilverifikasi` (
  `id_proposal` int(11) NOT NULL,
  `rjpmd` enum('sesuai','cukup','tidak sesuai') DEFAULT NULL COMMENT 'Kesesuaian Proposal dengan RPJMD Provinsi',
  `rtrw` enum('sesuai','cukup','tidak sesuai') DEFAULT NULL COMMENT 'Kesesuaian Proposal dengan RTRW Setempat',
  `kawasan_komoditas` enum('sesuai','cukup','tidak sesuai') DEFAULT NULL COMMENT 'Kesesuaian Proposal dengan Pengembang Kawasan Komoditas',
  `prioritas_provinsi` enum('sesuai','cukup','tidak sesuai') DEFAULT NULL COMMENT 'Kesesuaian Proposal dengan Prioritas Program Provinsi',
  `sasaran_provinsi` enum('sesuai','cukup','tidak sesuai') DEFAULT NULL COMMENT 'Kesesuaian Proposal dengan Target/Sasaran Provinsi',
  `database_proposal` enum('sesuai','cukup','tidak sesuai') DEFAULT NULL COMMENT 'Kelengkapan Database pada Proposal',
  `pengesahan` varchar(256) NOT NULL,
  `released_date` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `epro_history_verifikasi`
--

CREATE TABLE IF NOT EXISTS `epro_history_verifikasi` (
  `id_proposal` int(11) NOT NULL,
  `status` int(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `released_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `epro_kabupaten`
--

CREATE TABLE IF NOT EXISTS `epro_kabupaten` (
  `id` int(11) NOT NULL,
  `id_province` int(11) NOT NULL,
  `jenis_wilayah` enum('kabupaten','kota') NOT NULL,
  `nama_kota` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `epro_kecamatan`
--

CREATE TABLE IF NOT EXISTS `epro_kecamatan` (
  `id` int(11) NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `nama_kecamatan` varchar(256) NOT NULL,
  `kodepos` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `epro_konten_proposal`
--

CREATE TABLE IF NOT EXISTS `epro_konten_proposal` (
  `id_proposal` int(11) NOT NULL,
  `konten_proposal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `epro_lampiran`
--

CREATE TABLE IF NOT EXISTS `epro_lampiran` (
  `id_proposal` int(11) NOT NULL,
  `file_konten` varchar(256) DEFAULT NULL,
  `file_rancangan_anggaran` varchar(256) DEFAULT NULL,
  `file_lampiran_lainnya` varchar(256) DEFAULT NULL,
  `released_date` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `epro_proposal`
--

CREATE TABLE IF NOT EXISTS `epro_proposal` (
  `id` int(11) NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `catatan` text COMMENT 'apabila ada catatan khusus',
  `program` varchar(256) NOT NULL COMMENT 'program proposal',
  `kegiatan` varchar(256) NOT NULL COMMENT 'nama kegiatan ',
  `tahun_anggaran` int(4) NOT NULL COMMENT 'tahun proposal diajukan',
  `nomor_sk` varchar(256) DEFAULT NULL COMMENT 'nomor sk',
  `released_date` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL COMMENT 'status proposal'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `epro_proposal`
--

INSERT INTO `epro_proposal` (`id`, `id_kabupaten`, `catatan`, `program`, `kegiatan`, `tahun_anggaran`, `nomor_sk`, `released_date`, `status`) VALUES
(3, 1, NULL, 'PROGRAM PENEMPATAN DAN PEMBERDAYAAN TENAGA KERJA', 'PEMBERDAYAAN MASYARAKAT MELALUI PADAT KARYA PRODUKTIF', 2016, NULL, '12/02/2016', 'draft'),
(4, 2, NULL, 'PROGRAM PENEMPATAN DAN PEMBERDAYAAN TENAGA KERJA', 'PEMBERDAYAAN MASYARAKAT MELALUI PADAT KARYA INFRASTRUKTUR', 2016, NULL, '12/02/2016', 'draft');

-- --------------------------------------------------------

--
-- Table structure for table `epro_province`
--

CREATE TABLE IF NOT EXISTS `epro_province` (
  `id` int(11) NOT NULL,
  `nama_province` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `epro_rinciankegiatan`
--

CREATE TABLE IF NOT EXISTS `epro_rinciankegiatan` (
  `id_proposal` int(11) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `biaya_provinsi` int(11) DEFAULT NULL COMMENT 'biaya dari daerah ke provinsi',
  `biaya_instansi` int(11) DEFAULT NULL COMMENT 'biaya dari daerah ke instansi pusat',
  `biaya_kppn` int(11) DEFAULT NULL COMMENT 'biaya dari daerah ke KPPN',
  `released_date` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `epro_user`
--

CREATE TABLE IF NOT EXISTS `epro_user` (
  `id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL COMMENT 'kabupaten',
  `user` varchar(256) NOT NULL,
  `status` enum('active','disabled') NOT NULL COMMENT 'status account'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `epro_desa`
--
ALTER TABLE `epro_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epro_kabupaten`
--
ALTER TABLE `epro_kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epro_kecamatan`
--
ALTER TABLE `epro_kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epro_proposal`
--
ALTER TABLE `epro_proposal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epro_province`
--
ALTER TABLE `epro_province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epro_user`
--
ALTER TABLE `epro_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `epro_desa`
--
ALTER TABLE `epro_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `epro_kabupaten`
--
ALTER TABLE `epro_kabupaten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `epro_kecamatan`
--
ALTER TABLE `epro_kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `epro_proposal`
--
ALTER TABLE `epro_proposal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `epro_province`
--
ALTER TABLE `epro_province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `epro_user`
--
ALTER TABLE `epro_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
