-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2016 at 01:03 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_e_proposal`
--

-- --------------------------------------------------------

--
-- Table structure for table `epro_activities_user`
--

CREATE TABLE IF NOT EXISTS `epro_activities_user` (
`id` int(11) unsigned zerofill NOT NULL,
  `id_user` int(11) unsigned zerofill NOT NULL,
  `description` varchar(256) NOT NULL,
  `date` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `epro_activities_user`
--

INSERT INTO `epro_activities_user` (`id`, `id_user`, `description`, `date`) VALUES
(00000000001, 00000000005, 'Akses Profil Saya', '2016-03-31 12:44:31'),
(00000000002, 00000000005, 'Persetujuan Akses Pegawai', '2016-03-31 12:44:34'),
(00000000003, 00000000005, 'Persetujuan Akses Pegawai', '2016-03-31 12:44:39'),
(00000000004, 00000000005, 'Akses Profil Saya', '2016-03-31 12:44:43'),
(00000000005, 00000000005, 'Melakukan update status disabled', '2016-03-31 12:46:41'),
(00000000006, 00000000005, 'update status activepada userYudhi', '2016-03-31 12:50:11'),
(00000000007, 00000000005, 'update status disabledpada user Yudhi', '2016-03-31 12:50:46'),
(00000000008, 00000000005, 'update status active pada user Yudhi Prabowo', '2016-03-31 12:51:33'),
(00000000009, 00000000005, 'update status aktif pada user Yudhi Prabowo', '2016-03-31 13:48:56'),
(00000000010, 00000000005, 'update status tidak aktif pada user Yudhi Prabowo', '2016-03-31 13:48:59'),
(00000000011, 00000000005, 'update status admin instansi provinsi pada user list_hakakses', '2016-03-31 14:46:19'),
(00000000012, 00000000005, 'update status admin instansi pusat pada user list_hakakses', '2016-03-31 14:51:32'),
(00000000013, 00000000005, 'update status aktif pada user Yudhi Prabowo', '2016-03-31 14:51:35'),
(00000000014, 00000000005, 'update status tidak aktif pada user Yudhi Prabowo', '2016-03-31 14:51:42'),
(00000000015, 00000000005, 'update status admin instansi provinsi pada user list_hakakses', '2016-03-31 14:55:58'),
(00000000016, 00000000005, 'update status  pada user list_hakakses', '2016-03-31 14:56:57'),
(00000000017, 00000000005, 'update status tidak aktif pada user Yudhi Prabowo', '2016-03-31 15:11:30'),
(00000000018, 00000000005, 'update status admin instansi pusat pada user list_hakakses', '2016-03-31 15:11:34'),
(00000000019, 00000000005, 'update status admin instansi pusat pada user list_hakakses', '2016-03-31 15:11:55'),
(00000000020, 00000000005, 'update status tidak aktif pada user Yudhi Prabowo', '2016-03-31 15:12:05'),
(00000000021, 00000000005, 'update status instansi pusat pada user list_hakakses', '2016-03-31 15:12:11'),
(00000000022, 00000000005, 'update status tidak aktif pada user Yudhi Prabowo', '2016-03-31 15:14:08'),
(00000000023, 00000000005, 'update status  pada user Yudhi Prabowo', '2016-03-31 15:14:14'),
(00000000024, 00000000005, 'update status  pada user Joko Prambodo', '2016-03-31 15:20:42'),
(00000000025, 00000000005, 'update status tidak aktif pada user Yudhi Prabowo', '2016-03-31 15:42:11'),
(00000000026, 00000000005, 'update status aktif pada user Yudhi Prabowo', '2016-03-31 15:42:14'),
(00000000027, 00000000005, 'update status tidak aktif pada user Yudhi Prabowo', '2016-03-31 15:42:17'),
(00000000028, 00000000005, 'update status tidak aktif pada user Yudhi Prabowo', '2016-03-31 15:42:53'),
(00000000029, 00000000005, 'update status aktif pada user Yudhi Prabowo', '2016-03-31 15:42:57'),
(00000000030, 00000000001, 'sign in', '2016-04-01 13:16:46'),
(00000000031, 00000000000, 'sign out', '2016-04-01 13:27:04'),
(00000000032, 00000000001, 'sign in', '2016-04-01 13:27:50'),
(00000000033, 00000000000, 'sign out', '2016-04-01 14:27:54'),
(00000000034, 00000000001, 'sign in', '2016-04-01 14:27:58'),
(00000000035, 00000000001, 'sign out', '2016-04-01 14:29:15'),
(00000000036, 00000000001, 'sign in', '2016-04-01 14:29:21'),
(00000000037, 00000000001, 'sign in', '2016-04-06 09:31:37'),
(00000000038, 00000000001, 'update status  pada user Joko Prambodo', '2016-04-06 09:32:35'),
(00000000039, 00000000001, 'sign in', '2016-04-06 17:03:39'),
(00000000040, 00000000001, 'update status aktif pada user dendy indrawan', '2016-04-06 17:04:04'),
(00000000041, 00000000001, 'update status  pada user dendy indrawan', '2016-04-06 17:04:31'),
(00000000042, 00000000001, 'update status  pada user dendy indrawan', '2016-04-06 17:04:45'),
(00000000043, 00000000001, 'sign out', '2016-04-06 17:04:52'),
(00000000044, 00000000006, 'sign in', '2016-04-06 17:05:09'),
(00000000045, 00000000006, 'sign out', '2016-04-06 17:32:35'),
(00000000046, 00000000006, 'sign in', '2016-04-06 17:48:06'),
(00000000047, 00000000001, 'sign in', '2016-04-11 14:33:32'),
(00000000048, 00000000001, 'sign in', '2016-04-12 15:24:21'),
(00000000049, 00000000001, 'sign in', '2016-04-13 11:12:26'),
(00000000050, 00000000001, 'sign in', '2016-04-13 13:42:30'),
(00000000051, 00000000001, 'sign in', '2016-04-14 15:59:43'),
(00000000052, 00000000001, 'sign in', '2016-04-15 14:32:49'),
(00000000053, 00000000001, 'sign in', '2016-04-15 14:33:20'),
(00000000054, 00000000001, 'sign in', '2016-04-15 14:34:04'),
(00000000055, 00000000001, 'sign out', '2016-04-15 14:34:15'),
(00000000056, 00000000001, 'sign in', '2016-04-15 14:45:26'),
(00000000057, 00000000001, 'sign in', '2016-04-15 14:48:35'),
(00000000058, 00000000001, 'sign out', '2016-04-15 15:34:10'),
(00000000059, 00000000001, 'sign in', '2016-04-15 15:34:15'),
(00000000060, 00000000001, 'sign out', '2016-04-15 16:41:54'),
(00000000061, 00000000001, 'sign in', '2016-04-15 16:41:59'),
(00000000062, 00000000001, 'sign out', '2016-04-15 19:53:01'),
(00000000063, 00000000001, 'sign in', '2016-04-18 11:13:00'),
(00000000064, 00000000002, 'sign out', '2016-04-18 13:24:36'),
(00000000065, 00000000001, 'sign in', '2016-04-18 13:24:48'),
(00000000066, 00000000001, 'sign out', '2016-04-18 16:47:34'),
(00000000067, 00000000001, 'sign in', '2016-04-18 16:53:10'),
(00000000068, 00000000001, 'sign in', '2016-04-19 12:17:55'),
(00000000069, 00000000001, 'sign out', '2016-04-19 14:01:59'),
(00000000070, 00000000001, 'sign in', '2016-04-19 14:02:05'),
(00000000071, 00000000001, 'sign in', '2016-04-20 00:04:28'),
(00000000072, 00000000001, 'sign in', '2016-04-20 14:32:38'),
(00000000073, 00000000001, 'sign in', '2016-04-20 15:22:59'),
(00000000074, 00000000001, 'sign in', '2016-04-20 15:42:14'),
(00000000075, 00000000001, 'sign in', '2016-04-21 12:23:02'),
(00000000076, 00000000001, 'sign in', '2016-04-21 12:41:05'),
(00000000077, 00000000001, 'sign in', '2016-04-21 17:00:40'),
(00000000078, 00000000001, 'sign in', '2016-04-22 08:12:44'),
(00000000079, 00000000001, 'sign in', '2016-04-22 09:50:04'),
(00000000080, 00000000001, 'sign in', '2016-04-22 10:13:39'),
(00000000081, 00000000001, 'sign in', '2016-04-22 12:40:39'),
(00000000082, 00000000001, 'sign in', '2016-04-23 05:26:28'),
(00000000083, 00000000001, 'sign out', '2016-04-23 06:10:19'),
(00000000084, 00000000001, 'sign in', '2016-04-23 06:10:25'),
(00000000085, 00000000001, 'sign in', '2016-04-23 14:14:12'),
(00000000086, 00000000001, 'sign out', '2016-04-23 15:11:26'),
(00000000087, 00000000001, 'sign in', '2016-04-23 22:05:28'),
(00000000088, 00000000001, 'sign in', '2016-04-23 22:05:51'),
(00000000089, 00000000001, 'sign out', '2016-04-23 22:08:00'),
(00000000090, 00000000001, 'sign in', '2016-04-23 22:08:13'),
(00000000091, 00000000001, 'sign in', '2016-04-24 07:30:39'),
(00000000092, 00000000001, 'sign in', '2016-04-24 19:18:31'),
(00000000093, 00000000001, 'sign out', '2016-04-24 21:40:13'),
(00000000094, 00000000001, 'sign in', '2016-04-24 21:40:19'),
(00000000095, 00000000001, 'sign out', '2016-04-24 21:40:31'),
(00000000096, 00000000001, 'sign in', '2016-04-24 21:40:36'),
(00000000097, 00000000001, 'sign out', '2016-04-24 21:43:13'),
(00000000098, 00000000001, 'sign in', '2016-04-24 21:46:58'),
(00000000099, 00000000001, 'sign out', '2016-04-24 21:50:58'),
(00000000100, 00000000001, 'sign in', '2016-04-24 21:53:47'),
(00000000101, 00000000001, 'sign out', '2016-04-24 21:53:49'),
(00000000102, 00000000002, 'sign in', '2016-04-24 21:54:16'),
(00000000103, 00000000002, 'sign out', '2016-04-24 21:58:40'),
(00000000104, 00000000007, 'sign in', '2016-04-24 21:58:46'),
(00000000105, 00000000001, 'sign in', '2016-04-25 02:42:04'),
(00000000106, 00000000001, 'sign in', '2016-04-25 15:42:21'),
(00000000107, 00000000001, 'sign in', '2016-04-25 16:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `epro_desa`
--

CREATE TABLE IF NOT EXISTS `epro_desa` (
`id` int(11) unsigned zerofill NOT NULL,
  `id_kecamatan` int(11) unsigned zerofill NOT NULL,
  `nama_desa` varchar(256) NOT NULL,
  `is_active` tinyint(4) NOT NULL COMMENT '1=active, 0=inactive',
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `epro_kabupaten`
--

CREATE TABLE IF NOT EXISTS `epro_kabupaten` (
`id` int(11) unsigned zerofill NOT NULL,
  `id_provinsi` int(11) unsigned zerofill NOT NULL,
  `jenis_wilayah` enum('kabupaten','kota') NOT NULL,
  `nama_kota` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL COMMENT '1=active, 0=inactive',
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=494 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `epro_kabupaten`
--

INSERT INTO `epro_kabupaten` (`id`, `id_provinsi`, `jenis_wilayah`, `nama_kota`, `is_active`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(00000000001, 00000000001, 'kabupaten', 'Kabupaten Aceh Barat', 1, 'administrator', '2016-03-30 12:49:23', '00000000001', '2016-04-22 17:09:18'),
(00000000002, 00000000001, 'kabupaten', 'Kabupaten Aceh Barat Daya', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000003, 00000000001, 'kabupaten', 'Kabupaten Aceh Besar', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000004, 00000000001, 'kabupaten', 'Kabupaten Aceh Jaya', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000005, 00000000001, 'kabupaten', 'Kabupaten Aceh Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000006, 00000000001, 'kabupaten', 'Kabupaten Aceh Singkil', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000007, 00000000001, 'kabupaten', 'Kabupaten Aceh Tamiang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000008, 00000000001, 'kabupaten', 'Kabupaten Aceh Tengah', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000009, 00000000001, 'kabupaten', 'Kabupaten Aceh Tenggara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000010, 00000000001, 'kabupaten', 'Kabupaten Aceh Timur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000011, 00000000001, 'kabupaten', 'Kabupaten Aceh Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000012, 00000000001, 'kabupaten', 'Kabupaten Bener Meriah', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000013, 00000000001, 'kabupaten', 'Kabupaten Bireuen', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000014, 00000000001, 'kabupaten', 'Kabupaten Gayo Lues', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000015, 00000000001, 'kabupaten', 'Kabupaten Nagan Raya', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000016, 00000000001, 'kabupaten', 'Kabupaten Pidie', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000017, 00000000001, 'kabupaten', 'Kabupaten Pidie Jaya', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000018, 00000000001, 'kabupaten', 'Kabupaten Simeulue', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000019, 00000000001, 'kota', 'Kota Banda Aceh', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000020, 00000000001, 'kota', 'Kota Langsa', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000021, 00000000001, 'kota', 'Kota Lhokseumawe', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000022, 00000000001, 'kota', 'Kota Sabang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000023, 00000000001, 'kota', 'Kota Subulussalam', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000024, 00000000002, 'kabupaten', 'Kabupaten Asahan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000025, 00000000002, 'kabupaten', 'Kabupaten Batu Bara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000026, 00000000002, 'kabupaten', 'Kabupaten Dairi', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000027, 00000000002, 'kabupaten', 'Kabupaten Deli Serdang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000028, 00000000002, 'kabupaten', 'Kabupaten Humbang Hasundutan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000029, 00000000002, 'kabupaten', 'Kabupaten Karo', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000030, 00000000002, 'kabupaten', 'Kabupaten Labuhan Batu', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000031, 00000000002, 'kabupaten', 'Kabupaten Labuhan Batu Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000032, 00000000002, 'kabupaten', 'Kabupaten Labuhan Batu Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000033, 00000000002, 'kabupaten', 'Kabupaten Langkat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000034, 00000000002, 'kabupaten', 'Kabupaten Mandailing Natal', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000035, 00000000002, 'kabupaten', 'Kabupaten Nias', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000036, 00000000002, 'kabupaten', 'Kabupaten Nias Barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000037, 00000000002, 'kabupaten', 'Kabupaten Nias Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000038, 00000000002, 'kabupaten', 'Kabupaten Nias Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000039, 00000000002, 'kabupaten', 'Kabupaten Padang Lawas', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000040, 00000000002, 'kabupaten', 'Kabupaten Padang Lawas Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000041, 00000000002, 'kabupaten', 'Kabupaten Pakpak Bharat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000042, 00000000002, 'kabupaten', 'Kabupaten Samosir', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000043, 00000000002, 'kabupaten', 'Kabupaten Serdang Bedagai', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000044, 00000000002, 'kabupaten', 'Kabupaten Simalungun', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000045, 00000000002, 'kabupaten', 'Kabupaten Tapanuli Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000046, 00000000002, 'kabupaten', 'Kabupaten Tapanuli Tengah', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000047, 00000000002, 'kabupaten', 'Kabupaten Tapanuli Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000048, 00000000002, 'kabupaten', 'Kabupaten Toba Samosir', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000049, 00000000002, 'kota', 'Kota Binjai', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000050, 00000000002, 'kota', 'Kota Gunung Sitoli', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000051, 00000000002, 'kota', 'Kota Medan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000052, 00000000002, 'kota', 'Kota Padangsidimpuan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000053, 00000000002, 'kota', 'Kota Pematang Siantar', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000054, 00000000002, 'kota', 'Kota Sibolga', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000055, 00000000002, 'kota', 'Kota Tanjung Balai', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000056, 00000000002, 'kota', 'Kota Tebing Tinggi', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000057, 00000000003, 'kabupaten', 'Kabupaten Agam', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000058, 00000000003, 'kabupaten', 'Kabupaten Dharmasraya', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000059, 00000000003, 'kabupaten', 'Kabupaten Kepulauan Mentawai', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000060, 00000000003, 'kabupaten', 'Kabupaten Lima Puluh Kota', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000061, 00000000003, 'kabupaten', 'Kabupaten Padang Pariaman', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000062, 00000000003, 'kabupaten', 'Kabupaten Pasaman', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000063, 00000000003, 'kabupaten', 'Kabupaten Pasaman Barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000064, 00000000003, 'kabupaten', 'Kabupaten Pesisir Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000065, 00000000003, 'kabupaten', 'Kabupaten Sijunjung', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000066, 00000000003, 'kabupaten', 'Kabupaten Solok', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000067, 00000000003, 'kabupaten', 'Kabupaten Solok Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000068, 00000000003, 'kabupaten', 'Kabupaten Tanah Datar', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000069, 00000000003, 'kota', 'Kota Bukittinggi', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000070, 00000000003, 'kota', 'Kota Padang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000071, 00000000003, 'kota', 'Kota Padangpanjang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000072, 00000000003, 'kota', 'Kota Pariaman', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000073, 00000000003, 'kota', 'Kota Payakumbuh', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000074, 00000000003, 'kota', 'Kota Sawahlunto', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000075, 00000000003, 'kota', 'Kota Solok', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000076, 00000000004, 'kabupaten', 'Kabupaten Bengkalis', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000077, 00000000004, 'kabupaten', 'Kabupaten Indragiri Hilir ', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000078, 00000000004, 'kabupaten', 'Kabupaten Indragiri Hulu ', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000079, 00000000004, 'kabupaten', 'Kabupaten Kampar', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000080, 00000000004, 'kabupaten', 'Kabupaten Kepulauan Meranti ', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000081, 00000000004, 'kabupaten', 'Kabupaten Kuantan Singingi ', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000082, 00000000004, 'kabupaten', 'Kabupaten Pelalawan ', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000083, 00000000004, 'kabupaten', 'Kabupaten Rokan Hilir ', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000084, 00000000004, 'kabupaten', 'Kabupaten Rokan Hulu ', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000085, 00000000004, 'kabupaten', 'Kabupaten Siak', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000086, 00000000004, 'kota', 'Kota Dumai', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000087, 00000000004, 'kota', 'Kota Pekanbaru', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000088, 00000000005, 'kabupaten', 'Kabupaten Batanghari', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000089, 00000000005, 'kabupaten', 'Kabupaten Bungo', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000090, 00000000005, 'kabupaten', 'Kabupaten Kerinci', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000091, 00000000005, 'kabupaten', 'Kabupaten Merangin', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000092, 00000000005, 'kabupaten', 'Kabupaten Muaro Jambi', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000093, 00000000005, 'kabupaten', 'Kabupaten Sarolangun', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000094, 00000000005, 'kabupaten', 'Kabupaten Tanjung Jabung Barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000095, 00000000005, 'kabupaten', 'Kabupaten Tanjung Jabung Timur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000096, 00000000005, 'kabupaten', 'Kabupaten Tebo', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000097, 00000000005, 'kota', 'Kota Jambi', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000098, 00000000005, 'kota', 'Kota Sungai Penuh', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000099, 00000000006, 'kabupaten', 'Kabupaten Banyuasin', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000100, 00000000006, 'kabupaten', 'Kabupaten Empat Lawang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000101, 00000000006, 'kabupaten', 'Kabupaten Lahat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000102, 00000000006, 'kabupaten', 'Kabupaten Muara Enim', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000103, 00000000006, 'kabupaten', 'Kabupaten Musi Banyuasin', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000104, 00000000006, 'kabupaten', 'Kabupaten Musi Rawas', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000105, 00000000006, 'kabupaten', 'Kabupaten Musi Rawas Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000106, 00000000006, 'kabupaten', 'Kabupaten Ogan Ilir', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000107, 00000000006, 'kabupaten', 'Kabupaten Ogan Komering Ilir', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000108, 00000000006, 'kabupaten', 'Kabupaten Ogan Komering Ulu', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000109, 00000000006, 'kabupaten', 'Kabupaten Ogan Komering Ulu Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000110, 00000000006, 'kabupaten', 'Kabupaten Ogan Komering Ulu Timur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000111, 00000000006, 'kabupaten', 'Kabupaten Penukal Abab Lematang Ilir', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000112, 00000000006, 'kota', 'Kota Lubuklinggau', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000113, 00000000006, 'kota', 'Kota Pagar Alam', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000114, 00000000006, 'kota', 'Kota Palembang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000115, 00000000006, 'kota', 'Kota Prabumulih', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000116, 00000000007, 'kabupaten', 'Kabupaten Bengkulu Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000117, 00000000007, 'kabupaten', 'Kabupaten Bengkulu Tengah', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000118, 00000000007, 'kabupaten', 'Kabupaten Bengkulu Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000119, 00000000007, 'kabupaten', 'Kabupaten Kaur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000120, 00000000007, 'kabupaten', 'Kabupaten Kepahiang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000121, 00000000007, 'kabupaten', 'Kabupaten Lebong', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000122, 00000000007, 'kabupaten', 'Kabupaten Mukomuko', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000123, 00000000007, 'kabupaten', 'Kabupaten Rejang Lebong', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000124, 00000000007, 'kabupaten', 'Kabupaten Seluma', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000125, 00000000007, 'kota', 'Kota Bengkulu', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000126, 00000000008, 'kabupaten', 'Kabupaten lampung Barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000127, 00000000008, 'kabupaten', 'Kabupaten Lampung Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000128, 00000000008, 'kabupaten', 'Kabupaten Lampung Tengah', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000129, 00000000008, 'kabupaten', 'Kabupaten Lampung Timur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000130, 00000000008, 'kabupaten', 'Kabupaten Lampung Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000131, 00000000008, 'kabupaten', 'Kabupaten Mesuji', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000132, 00000000008, 'kabupaten', 'Kabupaten Pasawaran', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000133, 00000000008, 'kabupaten', 'Kabupaten Pringsewu', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000134, 00000000008, 'kabupaten', 'Kabupaten Tanggamus', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000135, 00000000008, 'kabupaten', 'Kabupaten Tulang banwang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000136, 00000000008, 'kabupaten', 'Kabupaten Tulang Bawang barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000137, 00000000008, 'kabupaten', 'Kabupaten Way Kanan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000138, 00000000008, 'kabupaten', 'Kabupaten Pesisir Barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000139, 00000000008, 'kota', 'Kota Bandar Lampung', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000140, 00000000008, 'kota', 'Kota Metro', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000141, 00000000009, 'kabupaten', 'Kabupaten Bangka', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000142, 00000000009, 'kabupaten', 'Kabupaten Bangka Barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000143, 00000000009, 'kabupaten', 'Kabupaten Bangka Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000144, 00000000009, 'kabupaten', 'Kabupaten Bangka Tengah', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000145, 00000000009, 'kabupaten', 'Kabupaten Belitung', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000146, 00000000009, 'kabupaten', 'Kabupaten Belitung Timur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000147, 00000000009, 'kota', 'Kota Pangkal Pinang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000148, 00000000010, 'kabupaten', 'Kabupaten Bintan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000149, 00000000010, 'kabupaten', 'Kabupaten Karimun', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000150, 00000000010, 'kabupaten', 'Kabupaten Kepulauan Anambas', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000151, 00000000010, 'kabupaten', 'Kabupaten Lingga', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000152, 00000000010, 'kabupaten', 'Kabupaten Natuna', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000153, 00000000010, 'kota', 'Kota Batam', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000154, 00000000010, 'kota', 'Kota Tanjung Pinang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000155, 00000000011, 'kabupaten', 'Kabupaten Kepulauan Seribu', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000156, 00000000011, 'kota', 'Kota Jakarta Barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000157, 00000000011, 'kota', 'Kota Jakarta Pusat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000158, 00000000011, 'kota', 'Kota Jakarta Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000159, 00000000011, 'kota', 'Kota Jakarta Timur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000160, 00000000011, 'kota', 'Kota Jakarta Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000161, 00000000012, 'kabupaten', 'Kabupaten Bandung', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000162, 00000000012, 'kabupaten', 'Kabupaten Bandung Barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000163, 00000000012, 'kabupaten', 'Kabupaten Bekasi', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000164, 00000000012, 'kabupaten', 'Kabupaten Bogor', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000165, 00000000012, 'kabupaten', 'Kabupaten Ciamis', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000166, 00000000012, 'kabupaten', 'Kabupaten Cianjur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000167, 00000000012, 'kabupaten', 'Kabupaten Cirebon', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000168, 00000000012, 'kabupaten', 'Kabupaten Garut', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000169, 00000000012, 'kabupaten', 'Kabupaten Indramayu', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000170, 00000000012, 'kabupaten', 'Kabupaten Karawang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000171, 00000000012, 'kabupaten', 'Kabupaten Kuningan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000172, 00000000012, 'kabupaten', 'Kabupaten Majalengka', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000173, 00000000012, 'kabupaten', 'Kabupaten Pangandaran', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000174, 00000000012, 'kabupaten', 'Kabupaten Purwakarta', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000175, 00000000012, 'kabupaten', 'Kabupaten Subang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000176, 00000000012, 'kabupaten', 'Kabupaten Sukabumi', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000177, 00000000012, 'kabupaten', 'Kabupaten Sumedang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000178, 00000000012, 'kabupaten', 'Kabupaten Tasikmalaya', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000179, 00000000012, 'kota', 'Kota Bandung', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000180, 00000000012, 'kota', 'Kota Banjar', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000181, 00000000012, 'kota', 'Kota Bekasi', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000182, 00000000012, 'kota', 'Kota Bogor', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000183, 00000000012, 'kota', 'Kota Cimahi', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000184, 00000000012, 'kota', 'Kota Cirebon', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000185, 00000000012, 'kota', 'Kota Depok', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000186, 00000000012, 'kota', 'Kota Sukabumi', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000187, 00000000012, 'kota', 'Kota Tasikmalaya', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000188, 00000000013, 'kabupaten', 'Kabupaten Banjarnegara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000189, 00000000013, 'kabupaten', 'Kabupaten Banyumas', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000190, 00000000013, 'kabupaten', 'Kabupaten Batang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000191, 00000000013, 'kabupaten', 'Kabupaten Blora', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000192, 00000000013, 'kabupaten', 'Kabupaten Boyolali', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000193, 00000000013, 'kabupaten', 'Kabupaten Brebes', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000194, 00000000013, 'kabupaten', 'Kabupaten Cilacap', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000195, 00000000013, 'kabupaten', 'Kabupaten Demak', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000196, 00000000013, 'kabupaten', 'Kabupaten Grobogan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000197, 00000000013, 'kabupaten', 'Kabupaten Jepara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000198, 00000000013, 'kabupaten', 'Kabupaten Karanganyar', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000199, 00000000013, 'kabupaten', 'Kabupaten Kebumen', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000200, 00000000013, 'kabupaten', 'Kabupaten Kendal', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000201, 00000000013, 'kabupaten', 'Kabupaten Klaten', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000202, 00000000013, 'kabupaten', 'Kabupaten Kudus', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000203, 00000000013, 'kabupaten', 'Kabupaten Magelang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000204, 00000000013, 'kabupaten', 'Kabupaten Pati', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000205, 00000000013, 'kabupaten', 'Kabupaten Pekalongan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000206, 00000000013, 'kabupaten', 'Kabupaten Pemalang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000207, 00000000013, 'kabupaten', 'Kabupaten Purbalingga', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000208, 00000000013, 'kabupaten', 'Kabupaten Purworejo', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000209, 00000000013, 'kabupaten', 'Kabupaten Rembang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000210, 00000000013, 'kabupaten', 'Kabupaten Semarang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000211, 00000000013, 'kabupaten', 'Kabupaten Sragen', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000212, 00000000013, 'kabupaten', 'Kabupaten Sukoharjo', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000213, 00000000013, 'kabupaten', 'Kabupaten Tegal', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000214, 00000000013, 'kabupaten', 'Kabupaten Temanggung', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000215, 00000000013, 'kabupaten', 'Kabupaten Wonogiri', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000216, 00000000013, 'kabupaten', 'Kabupaten Wonosobo', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000217, 00000000013, 'kota', 'Kota Magelang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000218, 00000000013, 'kota', 'Kota Pekalongan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000219, 00000000013, 'kota', 'Kota Salatiga', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000220, 00000000013, 'kota', 'Kota Semarang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000221, 00000000013, 'kota', 'Kota Surakarta', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000222, 00000000013, 'kota', 'Kota Tegal', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000223, 00000000014, 'kabupaten', 'Kabupaten Bantul', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000224, 00000000014, 'kabupaten', 'Kabupaten Gunungkidul', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000225, 00000000014, 'kabupaten', 'Kabupaten Kulon Progo', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000226, 00000000014, 'kabupaten', 'Kabupaten Sleman', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000227, 00000000014, 'kota', 'Kota Yogyakarta', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000228, 00000000015, 'kabupaten', 'Kabupaten Bangkalan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000229, 00000000015, 'kabupaten', 'Kabupaten Banyuwangi', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000230, 00000000015, 'kabupaten', 'Kabupaten Blitar', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000231, 00000000015, 'kabupaten', 'Kabupaten Bojonegoro', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000232, 00000000015, 'kabupaten', 'Kabupaten Bondowoso', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000233, 00000000015, 'kabupaten', 'Kabupaten Gresik', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000234, 00000000015, 'kabupaten', 'Kabupaten Jember', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000235, 00000000015, 'kabupaten', 'Kabupaten Jombang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000236, 00000000015, 'kabupaten', 'Kabupaten Kediri', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000237, 00000000015, 'kabupaten', 'Kabupaten Lamongan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000238, 00000000015, 'kabupaten', 'Kabupaten Lumajang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000239, 00000000015, 'kabupaten', 'Kabupaten Madiun', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000240, 00000000015, 'kabupaten', 'Kabupaten Magetan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000241, 00000000015, 'kabupaten', 'Kabupaten Malang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000242, 00000000015, 'kabupaten', 'Kabupaten Mojokerto', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000243, 00000000015, 'kabupaten', 'Kabupaten Nganjuk', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000244, 00000000015, 'kabupaten', 'Kabupaten Ngawi', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000245, 00000000015, 'kabupaten', 'Kabupaten Pacitan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000246, 00000000015, 'kabupaten', 'Kabupaten Pamekasan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000247, 00000000015, 'kabupaten', 'Kabupaten Pasuruan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000248, 00000000015, 'kabupaten', 'Kabupaten Ponorogo', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000249, 00000000015, 'kabupaten', 'Kabupaten Probolinggo', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000250, 00000000015, 'kabupaten', 'Kabupaten Sampang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000251, 00000000015, 'kabupaten', 'Kabupaten Sidoarjo', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000252, 00000000015, 'kabupaten', 'Kabupaten Situbondo', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000253, 00000000015, 'kabupaten', 'Kabupaten Sumenep', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000254, 00000000015, 'kabupaten', 'Kabupaten Trenggalek', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000255, 00000000015, 'kabupaten', 'Kabupaten Tuban', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000256, 00000000015, 'kabupaten', 'Kabupaten Tulungagung', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000257, 00000000015, 'kota', 'Kota Batu', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000258, 00000000015, 'kota', 'Kota Blitar', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000259, 00000000015, 'kota', 'Kota Kediri', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000260, 00000000015, 'kota', 'Kota Madiun', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000261, 00000000015, 'kota', 'Kota Malang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000262, 00000000015, 'kota', 'Kota Mojokerto', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000263, 00000000015, 'kota', 'Kota Pasuruan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000264, 00000000015, 'kota', 'Kota Probolinggo', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000265, 00000000015, 'kota', 'Kota Surabaya', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000266, 00000000016, 'kabupaten', 'Kabupaten Lebak', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000267, 00000000016, 'kabupaten', 'Kabupaten Pandeglang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000268, 00000000016, 'kabupaten', 'Kabupaten Serang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000269, 00000000016, 'kabupaten', 'Kabupaten Tangerang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000270, 00000000016, 'kota', 'Kota Cilegon', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000271, 00000000016, 'kota', 'Kota Serang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000272, 00000000016, 'kota', 'Kota Tangerang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000273, 00000000016, 'kota', 'Kota Tangerang Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000274, 00000000017, 'kabupaten', 'Kabupaten Badung', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000275, 00000000017, 'kabupaten', 'Kabupaten Bangli', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000276, 00000000017, 'kabupaten', 'Kabupaten Buleleng', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000277, 00000000017, 'kabupaten', 'Kabupaten Gianyar', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000278, 00000000017, 'kabupaten', 'Kabupaten Jembrana', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000279, 00000000017, 'kabupaten', 'Kabupaten Karangasem', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000280, 00000000017, 'kabupaten', 'Kabupaten Klungkung', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000281, 00000000017, 'kabupaten', 'Kabupaten Tabanan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000282, 00000000017, 'kota', 'Kota Denpasar', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000283, 00000000018, 'kabupaten', 'Kabupaten Bima', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000284, 00000000018, 'kabupaten', 'Kabupaten Dompu', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000285, 00000000018, 'kabupaten', 'Kabupaten Lombok Barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000286, 00000000018, 'kabupaten', 'Kabupaten Lombok Tengah', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000287, 00000000018, 'kabupaten', 'Kabupaten Lombok Timur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000288, 00000000018, 'kabupaten', 'Kabupaten Lombok Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000289, 00000000018, 'kabupaten', 'Kabupaten Sumbawa', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000290, 00000000018, 'kabupaten', 'Kabupaten Sumbawa Barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000291, 00000000018, 'kota', 'Kota Bima', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000292, 00000000018, 'kota', 'Kota Mataram', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000293, 00000000019, 'kabupaten', 'Kabupaten Alor', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000294, 00000000019, 'kabupaten', 'Kabupaten Belu', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000295, 00000000019, 'kabupaten', 'Kabupaten Ende', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000296, 00000000019, 'kabupaten', 'Kabupaten Flores Timur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000297, 00000000019, 'kabupaten', 'Kabupaten Kupang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000298, 00000000019, 'kabupaten', 'Kabupaten Lembata', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000299, 00000000019, 'kabupaten', 'Kabupaten Malaka', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000300, 00000000019, 'kabupaten', 'Kabupaten Manggarai', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000301, 00000000019, 'kabupaten', 'Kabupaten Manggarai Barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000302, 00000000019, 'kabupaten', 'Kabupaten Manggarai Timur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000303, 00000000019, 'kabupaten', 'Kabupaten Ngada', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000304, 00000000019, 'kabupaten', 'Kabupaten Nagekeo', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000305, 00000000019, 'kabupaten', 'Kabupaten Rote Ndao', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000306, 00000000019, 'kabupaten', 'Kabupaten Sabu Raijua', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000307, 00000000019, 'kabupaten', 'Kabupaten Sikka', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000308, 00000000019, 'kabupaten', 'Kabupaten Sumba Barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000309, 00000000019, 'kabupaten', 'Kabupaten Sumba Barat Daya', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000310, 00000000019, 'kabupaten', 'Kabupaten Sumba Tengah', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000311, 00000000019, 'kabupaten', 'Kabupaten Sumba Timur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000312, 00000000019, 'kabupaten', 'Kabupaten Timor Tengah Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000313, 00000000019, 'kabupaten', 'Kabupaten Timor Tengah Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000314, 00000000019, 'kota', 'Kota Kupang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000315, 00000000020, 'kabupaten', 'Kabupaten Bengkayang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000316, 00000000020, 'kabupaten', 'Kabupaten Kapuas Hulu', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000317, 00000000020, 'kabupaten', 'Kabupaten Kayong Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000318, 00000000020, 'kabupaten', 'Kabupaten Ketapang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000319, 00000000020, 'kabupaten', 'Kabupaten Kubu Raya', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000320, 00000000020, 'kabupaten', 'Kabupaten Landak', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000321, 00000000020, 'kabupaten', 'Kabupaten Melawi', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000322, 00000000020, 'kabupaten', 'Kabupaten Mempawah', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000323, 00000000020, 'kabupaten', 'Kabupaten Sambas', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000324, 00000000020, 'kabupaten', 'Kabupaten Sanggau', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000325, 00000000020, 'kabupaten', 'Kabupaten Sekadau', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000326, 00000000020, 'kabupaten', 'Kabupaten Sintang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000327, 00000000020, 'kota', 'Kota Pontianak', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000328, 00000000020, 'kota', 'Kota Singkawang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000329, 00000000021, 'kabupaten', 'Kabupaten Barito Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000330, 00000000021, 'kabupaten', 'Kabupaten Barito Timur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000331, 00000000021, 'kabupaten', 'Kabupaten Barito Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000332, 00000000021, 'kabupaten', 'Kabupaten Gunung Mas', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000333, 00000000021, 'kabupaten', 'Kabupaten Kapuas', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000334, 00000000021, 'kabupaten', 'Kabupaten Katingan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000335, 00000000021, 'kabupaten', 'Kabupaten Kotawaringin Barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000336, 00000000021, 'kabupaten', 'Kabupaten Kotawaringin Timur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000337, 00000000021, 'kabupaten', 'Kabupaten Lamandau', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000338, 00000000021, 'kabupaten', 'Kabupaten Murung Raya', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000339, 00000000021, 'kabupaten', 'Kabupaten Pulang Pisau', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000340, 00000000021, 'kabupaten', 'Kabupaten Sukamara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000341, 00000000021, 'kabupaten', 'Kabupaten Seruyan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000342, 00000000021, 'kota', 'Kota Palangka Raya', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000343, 00000000022, 'kabupaten', 'Kabupaten Balangan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000344, 00000000022, 'kabupaten', 'Kabupaten Banjar', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000345, 00000000022, 'kabupaten', 'Kabupaten Barito Kuala', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000346, 00000000022, 'kabupaten', 'Kabupaten Hulu Sungai Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000347, 00000000022, 'kabupaten', 'Kabupaten Hulu Sungai Tengah', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000348, 00000000022, 'kabupaten', 'Kabupaten Hulu Sungai Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000349, 00000000022, 'kabupaten', 'Kabupaten Kotabaru', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000350, 00000000022, 'kabupaten', 'Kabupaten Tabalong', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000351, 00000000022, 'kabupaten', 'Kabupaten Tanah Bumbu', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000352, 00000000022, 'kabupaten', 'Kabupaten Tanah Laut', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000353, 00000000022, 'kabupaten', 'Kabupaten Tapin', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000354, 00000000022, 'kota', 'Kota Banjarbaru', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000355, 00000000022, 'kota', 'Kota Banjarmasin', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000356, 00000000023, 'kabupaten', 'Kabupaten Berau', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000357, 00000000023, 'kabupaten', 'Kabupaten Kutai Barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000358, 00000000023, 'kabupaten', 'Kabupaten Kutai Kartanegara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000359, 00000000023, 'kabupaten', 'Kabupaten Kutai Timur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000360, 00000000023, 'kabupaten', 'Kabupaten Mahakam Ulu', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000361, 00000000023, 'kabupaten', 'Kabupaten Paser', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000362, 00000000023, 'kabupaten', 'Kabupaten Penajam Paser Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000363, 00000000023, 'kota', 'Kota Balikpapan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000364, 00000000023, 'kota', 'Kota Bontang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000365, 00000000023, 'kota', 'Kota Samarinda', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000366, 00000000024, 'kabupaten', 'Kabupaten Bolaang Mongondow', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000367, 00000000024, 'kabupaten', 'Kabupaten Bolaang Mongondow Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000368, 00000000024, 'kabupaten', 'Kabupaten Bolaang Mongondow Timur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000369, 00000000024, 'kabupaten', 'Kabupaten Bolaang Mongondow Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000370, 00000000024, 'kabupaten', 'Kabupaten Kepulauan Sangihe', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000371, 00000000024, 'kabupaten', 'Kabupaten Kepulauan Siau Tagulandang Biaro', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000372, 00000000024, 'kabupaten', 'Kabupaten Kepulauan Talaud', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000373, 00000000024, 'kabupaten', 'Kabupaten Minahasa', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000374, 00000000024, 'kabupaten', 'Kabupaten Minahasa Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000375, 00000000024, 'kabupaten', 'Kabupaten Minahasa Tenggara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000376, 00000000024, 'kabupaten', 'Kabupaten Minahasa Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000377, 00000000024, 'kota', 'Kota Bitung', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000378, 00000000024, 'kota', 'Kota Kotamobagu', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000379, 00000000024, 'kota', 'Kota Manado', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000380, 00000000024, 'kota', 'Kota Tomohon', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000381, 00000000025, 'kabupaten', 'Kabupaten Banggai', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000382, 00000000025, 'kabupaten', 'Kabupaten Banggai Kepulauan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000383, 00000000025, 'kabupaten', 'Kabupaten Banggai Laut', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000384, 00000000025, 'kabupaten', 'Kabupaten Buol', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000385, 00000000025, 'kabupaten', 'Kabupaten Donggala', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000386, 00000000025, 'kabupaten', 'Kabupaten Morowali', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000387, 00000000025, 'kabupaten', 'Kabupaten Morowali Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000388, 00000000025, 'kabupaten', 'Kabupaten Parigi Moutong', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000389, 00000000025, 'kabupaten', 'Kabupaten Poso', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000390, 00000000025, 'kabupaten', 'Kabupaten Sigi', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000391, 00000000025, 'kabupaten', 'Kabupaten Tojo Una-Una', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000392, 00000000025, 'kabupaten', 'Kabupaten Tolitoli', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000393, 00000000025, 'kota', 'Kota Palu', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000394, 00000000026, 'kabupaten', 'Kabupaten Bantaeng', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000395, 00000000026, 'kabupaten', 'Kabupaten Barru', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000396, 00000000026, 'kabupaten', 'Kabupaten Bone', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000397, 00000000026, 'kabupaten', 'Kabupaten Bulukumba', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000398, 00000000026, 'kabupaten', 'Kabupaten Enrekang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000399, 00000000026, 'kabupaten', 'Kabupaten Gowa', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000400, 00000000026, 'kabupaten', 'Kabupaten Jeneponto', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000401, 00000000026, 'kabupaten', 'Kabupaten Kepulauan Selayar', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000402, 00000000026, 'kabupaten', 'Kabupaten Luwu', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000403, 00000000026, 'kabupaten', 'Kabupaten Luwu Timur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000404, 00000000026, 'kabupaten', 'Kabupaten Luwu Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000405, 00000000026, 'kabupaten', 'Kabupaten Maros', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000406, 00000000026, 'kabupaten', 'Kabupaten Pangkajene dan Kepulauan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000407, 00000000026, 'kabupaten', 'Kabupaten Pinrang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000408, 00000000026, 'kabupaten', 'Kabupaten Sidenreng Rappang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000409, 00000000026, 'kabupaten', 'Kabupaten Sinjai', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000410, 00000000026, 'kabupaten', 'Kabupaten Soppeng', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000411, 00000000026, 'kabupaten', 'Kabupaten Takalar', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000412, 00000000026, 'kabupaten', 'Kabupaten Tana Toraja', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000413, 00000000026, 'kabupaten', 'Kabupaten Toraja Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000414, 00000000026, 'kabupaten', 'Kabupaten Wajo', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000415, 00000000026, 'kota', 'Kota Makassar', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000416, 00000000026, 'kota', 'Kota Palopo', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000417, 00000000026, 'kota', 'Kota Parepare', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000418, 00000000027, 'kabupaten', 'Kabupaten Bombana', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000419, 00000000027, 'kabupaten', 'Kabupaten Buton', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000420, 00000000027, 'kabupaten', 'Kabupaten Buton Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000421, 00000000027, 'kabupaten', 'Kabupaten Buton Tengah', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000422, 00000000027, 'kabupaten', 'Kabupaten Buton Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000423, 00000000027, 'kabupaten', 'Kabupaten Kolaka', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000424, 00000000027, 'kabupaten', 'Kabupaten Kolaka Timur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000425, 00000000027, 'kabupaten', 'Kabupaten Kolaka Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000426, 00000000027, 'kabupaten', 'Kabupaten Konawe', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000427, 00000000027, 'kabupaten', 'Kabupaten Konawe Kepulauan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000428, 00000000027, 'kabupaten', 'Kabupaten Konawe Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000429, 00000000027, 'kabupaten', 'Kabupaten Konawe Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000430, 00000000027, 'kabupaten', 'Kabupaten Muna', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL);
INSERT INTO `epro_kabupaten` (`id`, `id_provinsi`, `jenis_wilayah`, `nama_kota`, `is_active`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(00000000431, 00000000027, 'kabupaten', 'Kabupaten Muna Barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000432, 00000000027, 'kabupaten', 'Kabupaten Wakatobi', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000433, 00000000027, 'kota', 'Kota Bau-Bau', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000434, 00000000027, 'kota', 'Kota Kendari', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000435, 00000000028, 'kabupaten', 'Kabupaten Boalemo', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000436, 00000000028, 'kabupaten', 'Kabupaten Bone Bolango', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000437, 00000000028, 'kabupaten', 'Kabupaten Gorontalo', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000438, 00000000028, 'kabupaten', 'Kabupaten Gorontalo Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000439, 00000000028, 'kabupaten', 'Kabupaten Pohuwato', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000440, 00000000028, 'kota', 'Kota Gorontalo', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000441, 00000000029, 'kabupaten', 'Kabupaten Buru', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000442, 00000000029, 'kabupaten', 'Kabupaten Buru Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000443, 00000000029, 'kabupaten', 'Kabupaten Kepulauan Aru', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000444, 00000000029, 'kabupaten', 'Kabupaten Maluku Barat Daya', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000445, 00000000029, 'kabupaten', 'Kabupaten Maluku Tengah', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000446, 00000000029, 'kabupaten', 'Kabupaten Maluku Tenggara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000447, 00000000029, 'kabupaten', 'Kabupaten Maluku Tenggara Barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000448, 00000000029, 'kabupaten', 'Kabupaten Seram Bagian Barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000449, 00000000029, 'kabupaten', 'Kabupaten Seram Bagian Timur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000450, 00000000029, 'kota', 'Kota Ambon', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000451, 00000000029, 'kota', 'Kota Tual', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000452, 00000000030, 'kabupaten', 'Kabupaten Halmahera Barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000453, 00000000030, 'kabupaten', 'Kabupaten Halmahera Tengah', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000454, 00000000030, 'kabupaten', 'Kabupaten Halmahera Timur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000455, 00000000030, 'kabupaten', 'Kabupaten Halmahera Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000456, 00000000030, 'kabupaten', 'Kabupaten Halmahera Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000457, 00000000030, 'kabupaten', 'Kabupaten Kepulauan Sula', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000458, 00000000030, 'kabupaten', 'Kabupaten Pulau Morotai', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000459, 00000000030, 'kabupaten', 'Kabupaten Pulau Taliabu', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000460, 00000000030, 'kota', 'Kota Ternate', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000461, 00000000030, 'kota', 'Kota Tidore Kepulauan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000462, 00000000031, 'kabupaten', 'Kabupaten Asmat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000463, 00000000031, 'kabupaten', 'Kabupaten Biak Numfor', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000464, 00000000031, 'kabupaten', 'Kabupaten Boven Digoel', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000465, 00000000031, 'kabupaten', 'Kabupaten Deiyai', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000466, 00000000031, 'kabupaten', 'Kabupaten Dogiyai', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000467, 00000000031, 'kabupaten', 'Kabupaten Intan Jaya', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000468, 00000000031, 'kabupaten', 'Kabupaten Jayapura', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000469, 00000000031, 'kabupaten', 'Kabupaten Jayawijaya', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000470, 00000000031, 'kabupaten', 'Kabupaten Keerom', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000471, 00000000031, 'kabupaten', 'Kabupaten Kepulauan Yapen', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000472, 00000000031, 'kabupaten', 'Kabupaten Lanny Jaya', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000473, 00000000031, 'kabupaten', 'Kabupaten Mamberamo Raya', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000474, 00000000031, 'kabupaten', 'Kabupaten Mamberamo Tengah', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000475, 00000000031, 'kabupaten', 'Kabupaten Mappi', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000476, 00000000031, 'kabupaten', 'Kabupaten Merauke', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000477, 00000000031, 'kabupaten', 'Kabupaten Mimika', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000478, 00000000031, 'kabupaten', 'Kabupaten Nabire', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000479, 00000000031, 'kabupaten', 'Kabupaten Nduga', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000480, 00000000031, 'kabupaten', 'Kabupaten Paniai', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000481, 00000000031, 'kabupaten', 'Kabupaten Pegunungan Bintang', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000482, 00000000031, 'kabupaten', 'Kabupaten Puncak', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000483, 00000000031, 'kabupaten', 'Kabupaten Puncak Jaya', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000484, 00000000031, 'kabupaten', 'Kabupaten Sarmi', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000485, 00000000031, 'kabupaten', 'Kabupaten Supiori', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000486, 00000000031, 'kabupaten', 'Kabupaten Tolikara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000487, 00000000031, 'kabupaten', 'Kabupaten Waropen', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000488, 00000000031, 'kabupaten', 'Kabupaten Yahukimo', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000489, 00000000031, 'kabupaten', 'Kabupaten Yalimo', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000490, 00000000032, 'kota', 'Kota Jayapura', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `epro_kecamatan`
--

CREATE TABLE IF NOT EXISTS `epro_kecamatan` (
`id` int(11) unsigned zerofill NOT NULL,
  `id_kabupaten` int(11) unsigned zerofill NOT NULL,
  `nama_kecamatan` varchar(256) NOT NULL,
  `kodepos` varchar(256) NOT NULL,
  `is_active` tinyint(4) NOT NULL COMMENT '1=active, 0=inactive',
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `epro_kegiatan`
--

CREATE TABLE IF NOT EXISTS `epro_kegiatan` (
`id` int(11) unsigned zerofill NOT NULL,
  `nama_kegiatan` varchar(256) NOT NULL,
  `is_active` tinyint(4) NOT NULL COMMENT '1=active, 0=inactive',
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `epro_kegiatan`
--

INSERT INTO `epro_kegiatan` (`id`, `nama_kegiatan`, `is_active`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(00000000001, 'Padat Karya Produktif', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000002, 'Padat Karya Infrastruktur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000003, 'Teknologi Tepat Guna', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000004, 'Tenaga Kerja Mandiri', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000005, 'Informasi Bursa Kerja Online', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `epro_proposal`
--

CREATE TABLE IF NOT EXISTS `epro_proposal` (
`id` int(11) unsigned zerofill NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `catatan` text COMMENT 'apabila ada catatan khusus',
  `judul_proposal` varchar(255) NOT NULL COMMENT 'program proposal',
  `nama_kegiatan` varchar(255) NOT NULL COMMENT 'nama kegiatan ',
  `latar_belakang` text NOT NULL,
  `tahun_anggaran` int(4) NOT NULL COMMENT 'tahun proposal diajukan',
  `nomor_sk` varchar(255) DEFAULT NULL COMMENT 'nomor sk',
  `jumlah_pengangguran` int(11) NOT NULL,
  `jumlah_penduduk` int(11) NOT NULL,
  `status` varchar(255) NOT NULL COMMENT 'status proposal',
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `epro_proposal`
--

INSERT INTO `epro_proposal` (`id`, `provinsi`, `kabupaten`, `catatan`, `judul_proposal`, `nama_kegiatan`, `latar_belakang`, `tahun_anggaran`, `nomor_sk`, `jumlah_pengangguran`, `jumlah_penduduk`, `status`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(00000000003, '', '00000000001', NULL, 'PROGRAM PENEMPATAN DAN PEMBERDAYAAN TENAGA KERJA', 'PEMBERDAYAAN MASYARAKAT MELALUI PADAT KARYA PRODUKTIF', '', 2016, NULL, 0, 0, 'draft', 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000004, '', '00000000002', NULL, 'PROGRAM PENEMPATAN DAN PEMBERDAYAAN TENAGA KERJA', 'PEMBERDAYAAN MASYARAKAT MELALUI PADAT KARYA INFRASTRUKTUR', '', 2016, NULL, 0, 0, 'draft', 'administrator', '2016-03-30 12:49:23', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `epro_proposal_administrasi`
--

CREATE TABLE IF NOT EXISTS `epro_proposal_administrasi` (
`id` int(11) unsigned zerofill NOT NULL,
  `id_proposal` int(11) unsigned zerofill NOT NULL,
  `biaya_provinsi` int(11) DEFAULT NULL COMMENT 'biaya dari daerah ke provinsi',
  `biaya_instansi` int(11) DEFAULT NULL COMMENT 'biaya dari daerah ke instansi pusat',
  `biaya_kppn` int(11) DEFAULT NULL COMMENT 'biaya dari daerah ke KPPN',
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_by` int(255) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `epro_proposal_detail`
--

CREATE TABLE IF NOT EXISTS `epro_proposal_detail` (
`id` int(11) unsigned zerofill NOT NULL,
  `id_proposal` int(11) unsigned zerofill NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `sub_kegiatan` varchar(255) NOT NULL,
  `konten_proposal` text,
  `lampiran_proposal` varchar(255) DEFAULT NULL,
  `lampiran_rab` varchar(255) DEFAULT NULL,
  `total_anggaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `epro_proposal_verifikasi`
--

CREATE TABLE IF NOT EXISTS `epro_proposal_verifikasi` (
`id` int(11) unsigned zerofill NOT NULL,
  `id_proposal` int(11) unsigned zerofill NOT NULL,
  `id_user` int(11) unsigned zerofill NOT NULL,
  `tingkat_verifikasi` enum('provinsi','pusat') NOT NULL COMMENT 'User yang melakukan persetujuan/penolakan',
  `catatan` text NOT NULL,
  `status_verifikasi` enum('diterima','ditolak') NOT NULL,
  `created_by` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(255) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `epro_provinsi`
--

CREATE TABLE IF NOT EXISTS `epro_provinsi` (
`id` int(11) unsigned zerofill NOT NULL,
  `nama_provinsi` varchar(256) NOT NULL,
  `is_active` tinyint(4) NOT NULL COMMENT '1=active, 0=inactive',
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `epro_provinsi`
--

INSERT INTO `epro_provinsi` (`id`, `nama_provinsi`, `is_active`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(00000000001, 'Nanggroe Aceh Darussalaam', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000002, 'Sumatra Utara', 1, 'administrator', '2016-03-30 12:49:23', '00000000001', '2016-04-21 18:17:29'),
(00000000003, 'Sumatra Barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000004, 'Riau', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000005, 'Jambi', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000006, 'Sumatra Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000007, 'Bengkulu', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000008, 'Lampung', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000009, 'Kep. Bangka Belitung', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000010, 'Kep. Riau', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000011, 'DKI Jakarta', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000012, 'Jawa Barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000013, 'Jawa Tengah', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000014, 'DI Yogyakarta', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000015, 'Jawa Timur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000016, 'Banten', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000017, 'Bali', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000018, 'Nusa Tenggara Barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000019, 'Nusa Tenggara Timur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000020, 'Kalimantan Barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000021, 'Kalimantan Tengah', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000022, 'Kalimantan Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000023, 'Kalimantan Timur', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000024, 'Sulawesi Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000025, 'Sulawesi Tengah', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000026, 'Sulawesi Selatan', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000027, 'Sulawesi Tenggara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000028, 'Gorontalo', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000029, 'Maluku', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000030, 'Maluku Utara', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000031, 'Papua', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000032, 'Irian Jaya Barat', 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `epro_sub_kegiatan`
--

CREATE TABLE IF NOT EXISTS `epro_sub_kegiatan` (
`id` int(11) unsigned zerofill NOT NULL,
  `id_kegiatan` int(11) unsigned zerofill NOT NULL,
  `nama_sub_kegiatan` varchar(256) NOT NULL,
  `anggaran_maks` int(11) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL COMMENT '1=active, 0=inactive',
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_by` varchar(255) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `epro_sub_kegiatan`
--

INSERT INTO `epro_sub_kegiatan` (`id`, `id_kegiatan`, `nama_sub_kegiatan`, `anggaran_maks`, `is_active`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(00000000001, 00000000002, 'Membangun Jalan Desa', NULL, 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000002, 00000000002, 'Membangun Gorong-gorong', NULL, 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000003, 00000000002, 'Membangun Pasar Desa', NULL, 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000004, 00000000002, 'Membangun Talut', NULL, 1, 'administrator', '2016-03-30 12:49:23', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `epro_user`
--

CREATE TABLE IF NOT EXISTS `epro_user` (
`id` int(11) unsigned zerofill NOT NULL,
  `id_user_group` int(11) unsigned zerofill NOT NULL,
  `id_satuan_kerja` int(11) unsigned zerofill NOT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kabupaten` varchar(255) DEFAULT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `foto_profil` varchar(255) DEFAULT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) DEFAULT NULL,
  `nomor_telepon` varchar(50) NOT NULL,
  `sk` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `reset_password` varchar(255) DEFAULT NULL COMMENT 'Password yang di reset oleh sistem (sebelum di encrypt)',
  `forgot_pass_code` varchar(50) DEFAULT NULL COMMENT 'Kode untuk link change password',
  `forgot_pass_date` varchar(50) DEFAULT NULL,
  `ip_address` varchar(15) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_by` varchar(25) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `epro_user`
--

INSERT INTO `epro_user` (`id`, `id_user_group`, `id_satuan_kerja`, `provinsi`, `kabupaten`, `nip`, `foto_profil`, `nama_depan`, `nama_belakang`, `nomor_telepon`, `sk`, `password`, `email`, `is_active`, `reset_password`, `forgot_pass_code`, `forgot_pass_date`, `ip_address`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(00000000001, 00000000001, 00000000000, 'Jambi', 'Kabupaten Tebo', 'XYZ12345678ABCD', 'profil-00000000001.jpg', 'Admin ABCD', 'XYZAD', '021123456785123', NULL, '601f1889667efaebb33b8c12572835da3f027f78', 'deby.natazha@gmail.com', 1, NULL, NULL, NULL, '127.0.0.1', 'administrator', '2016-03-30 12:49:23', '00000000001', '2016-04-25 17:31:48'),
(00000000003, 00000000002, 00000000000, NULL, NULL, '122202229212', NULL, 'Yudhi', 'Prabowo', '', NULL, '348162101fc6f7e624681b7400b085eeac6df7bd', 'poonix27@gmail.com', 3, NULL, NULL, NULL, '192.168.0.104', 'administrator', '2016-03-30 12:49:23', NULL, NULL),
(00000000006, 00000000002, 00000000000, 'Riau', 'Kabupaten Kuantan Singingi ', '197807042003121001', NULL, 'Dendy', 'Indrawan', '', NULL, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'dendy.indrawan@gmail.com', 1, NULL, NULL, NULL, '36.66.80.66', 'administrator', '2016-04-06 17:02:41', '00000000001', '2016-04-23 14:14:31'),
(00000000007, 00000000004, 00000000000, 'Nanggroe Aceh Darussalaam', 'Kabupaten Aceh Utara', '12123', NULL, 'Db', 'Ntz', '123123', NULL, '601f1889667efaebb33b8c12572835da3f027f78', 'deby.natazha@yahoo.co.id', 1, NULL, NULL, NULL, '', '00000000001', '2016-04-24 19:51:48', '00000000007', '2016-04-25 00:23:50'),
(00000000009, 00000000002, 00000000000, 'Nanggroe Aceh Darussalaam', 'Kabupaten Aceh Besar', '12313', NULL, 'Test ', 'Saty', '123123', NULL, '601f1889667efaebb33b8c12572835da3f027f78', 'deby.natazhaa@yahoo.co.id', 1, NULL, NULL, NULL, '', '00000000001', '2016-04-24 20:42:47', '00000000007', '2016-04-25 00:24:03');

-- --------------------------------------------------------

--
-- Table structure for table `epro_user_group`
--

CREATE TABLE IF NOT EXISTS `epro_user_group` (
`id` int(11) unsigned zerofill NOT NULL,
  `definisi` varchar(50) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `epro_user_group`
--

INSERT INTO `epro_user_group` (`id`, `definisi`, `created_by`, `created_date`) VALUES
(00000000001, 'administrator', 'administrator', '2016-04-14 14:18:00'),
(00000000002, 'instansi kabupaten/kota', 'administrator', '2016-04-14 14:18:00'),
(00000000003, 'instansi provinsi', 'administrator', '2016-04-14 14:18:00'),
(00000000004, 'instansi pusat', 'administrator', '2016-04-14 14:18:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `epro_activities_user`
--
ALTER TABLE `epro_activities_user`
 ADD PRIMARY KEY (`id`);

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
-- Indexes for table `epro_kegiatan`
--
ALTER TABLE `epro_kegiatan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epro_proposal`
--
ALTER TABLE `epro_proposal`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epro_proposal_administrasi`
--
ALTER TABLE `epro_proposal_administrasi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epro_proposal_detail`
--
ALTER TABLE `epro_proposal_detail`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epro_proposal_verifikasi`
--
ALTER TABLE `epro_proposal_verifikasi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epro_provinsi`
--
ALTER TABLE `epro_provinsi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epro_sub_kegiatan`
--
ALTER TABLE `epro_sub_kegiatan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epro_user`
--
ALTER TABLE `epro_user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epro_user_group`
--
ALTER TABLE `epro_user_group`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `epro_activities_user`
--
ALTER TABLE `epro_activities_user`
MODIFY `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `epro_desa`
--
ALTER TABLE `epro_desa`
MODIFY `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `epro_kabupaten`
--
ALTER TABLE `epro_kabupaten`
MODIFY `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=494;
--
-- AUTO_INCREMENT for table `epro_kecamatan`
--
ALTER TABLE `epro_kecamatan`
MODIFY `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `epro_kegiatan`
--
ALTER TABLE `epro_kegiatan`
MODIFY `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `epro_proposal`
--
ALTER TABLE `epro_proposal`
MODIFY `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `epro_proposal_administrasi`
--
ALTER TABLE `epro_proposal_administrasi`
MODIFY `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `epro_proposal_detail`
--
ALTER TABLE `epro_proposal_detail`
MODIFY `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `epro_proposal_verifikasi`
--
ALTER TABLE `epro_proposal_verifikasi`
MODIFY `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `epro_provinsi`
--
ALTER TABLE `epro_provinsi`
MODIFY `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `epro_sub_kegiatan`
--
ALTER TABLE `epro_sub_kegiatan`
MODIFY `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `epro_user`
--
ALTER TABLE `epro_user`
MODIFY `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `epro_user_group`
--
ALTER TABLE `epro_user_group`
MODIFY `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
