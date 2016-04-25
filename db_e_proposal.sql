-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Apr 2016 pada 07.44
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_e_proposal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `epro_activities_user`
--

CREATE TABLE `epro_activities_user` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `description` varchar(256) NOT NULL,
  `date` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `epro_activities_user`
--

INSERT INTO `epro_activities_user` (`id`, `id_user`, `description`, `date`) VALUES
(1, 5, 'Akses Profil Saya', '2016-03-31 12:44:31'),
(2, 5, 'Persetujuan Akses Pegawai', '2016-03-31 12:44:34'),
(3, 5, 'Persetujuan Akses Pegawai', '2016-03-31 12:44:39'),
(4, 5, 'Akses Profil Saya', '2016-03-31 12:44:43'),
(5, 5, 'Melakukan update status disabled', '2016-03-31 12:46:41'),
(6, 5, 'update status activepada userYudhi', '2016-03-31 12:50:11'),
(7, 5, 'update status disabledpada user Yudhi', '2016-03-31 12:50:46'),
(8, 5, 'update status active pada user Yudhi Prabowo', '2016-03-31 12:51:33'),
(9, 5, 'update status aktif pada user Yudhi Prabowo', '2016-03-31 13:48:56'),
(10, 5, 'update status tidak aktif pada user Yudhi Prabowo', '2016-03-31 13:48:59'),
(11, 5, 'update status admin instansi provinsi pada user list_hakakses', '2016-03-31 14:46:19'),
(12, 5, 'update status admin instansi pusat pada user list_hakakses', '2016-03-31 14:51:32'),
(13, 5, 'update status aktif pada user Yudhi Prabowo', '2016-03-31 14:51:35'),
(14, 5, 'update status tidak aktif pada user Yudhi Prabowo', '2016-03-31 14:51:42'),
(15, 5, 'update status admin instansi provinsi pada user list_hakakses', '2016-03-31 14:55:58'),
(16, 5, 'update status  pada user list_hakakses', '2016-03-31 14:56:57'),
(17, 5, 'update status tidak aktif pada user Yudhi Prabowo', '2016-03-31 15:11:30'),
(18, 5, 'update status admin instansi pusat pada user list_hakakses', '2016-03-31 15:11:34'),
(19, 5, 'update status admin instansi pusat pada user list_hakakses', '2016-03-31 15:11:55'),
(20, 5, 'update status tidak aktif pada user Yudhi Prabowo', '2016-03-31 15:12:05'),
(21, 5, 'update status instansi pusat pada user list_hakakses', '2016-03-31 15:12:11'),
(22, 5, 'update status tidak aktif pada user Yudhi Prabowo', '2016-03-31 15:14:08'),
(23, 5, 'update status  pada user Yudhi Prabowo', '2016-03-31 15:14:14'),
(24, 5, 'update status  pada user Joko Prambodo', '2016-03-31 15:20:42'),
(25, 5, 'update status tidak aktif pada user Yudhi Prabowo', '2016-03-31 15:42:11'),
(26, 5, 'update status aktif pada user Yudhi Prabowo', '2016-03-31 15:42:14'),
(27, 5, 'update status tidak aktif pada user Yudhi Prabowo', '2016-03-31 15:42:17'),
(28, 5, 'update status tidak aktif pada user Yudhi Prabowo', '2016-03-31 15:42:53'),
(29, 5, 'update status aktif pada user Yudhi Prabowo', '2016-03-31 15:42:57'),
(30, 1, 'sign in', '2016-04-01 13:16:46'),
(31, 0, 'sign out', '2016-04-01 13:27:04'),
(32, 1, 'sign in', '2016-04-01 13:27:50'),
(33, 0, 'sign out', '2016-04-01 14:27:54'),
(34, 1, 'sign in', '2016-04-01 14:27:58'),
(35, 1, 'sign out', '2016-04-01 14:29:15'),
(36, 1, 'sign in', '2016-04-01 14:29:21'),
(37, 1, 'sign in', '2016-04-06 09:31:37'),
(38, 1, 'update status  pada user Joko Prambodo', '2016-04-06 09:32:35'),
(39, 1, 'sign in', '2016-04-06 17:03:39'),
(40, 1, 'update status aktif pada user dendy indrawan', '2016-04-06 17:04:04'),
(41, 1, 'update status  pada user dendy indrawan', '2016-04-06 17:04:31'),
(42, 1, 'update status  pada user dendy indrawan', '2016-04-06 17:04:45'),
(43, 1, 'sign out', '2016-04-06 17:04:52'),
(44, 6, 'sign in', '2016-04-06 17:05:09'),
(45, 6, 'sign out', '2016-04-06 17:32:35'),
(46, 6, 'sign in', '2016-04-06 17:48:06'),
(47, 1, 'sign in', '2016-04-11 14:33:32'),
(48, 1, 'sign in', '2016-04-12 15:24:21'),
(49, 1, 'sign in', '2016-04-13 11:12:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `epro_desa`
--

CREATE TABLE `epro_desa` (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `id_kecamatan` int(11) UNSIGNED ZEROFILL NOT NULL,
  `nama_desa` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `epro_detil_kabupaten_datapengangguran`
--

CREATE TABLE `epro_detil_kabupaten_datapengangguran` (
  `id_kabupaten` int(11) UNSIGNED ZEROFILL NOT NULL,
  `tahun` int(11) NOT NULL,
  `jumlah_pengangguran` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `epro_detil_kabupaten_informasi`
--

CREATE TABLE `epro_detil_kabupaten_informasi` (
  `id_kabupaten` int(11) UNSIGNED ZEROFILL NOT NULL,
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
-- Struktur dari tabel `epro_detil_kabupaten_jumlahpenduduk`
--

CREATE TABLE `epro_detil_kabupaten_jumlahpenduduk` (
  `id_kabupaten` int(11) UNSIGNED ZEROFILL NOT NULL,
  `jumlah_pria` int(11) NOT NULL,
  `jumlah_wanita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `epro_detil_kabupaten_perdask`
--

CREATE TABLE `epro_detil_kabupaten_perdask` (
  `id_kabupaten` int(11) UNSIGNED ZEROFILL NOT NULL,
  `judul` varchar(256) DEFAULT NULL,
  `file_sk` varchar(256) DEFAULT NULL,
  `tanggal_penetapan` varchar(256) DEFAULT NULL,
  `released_date` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `epro_hasilverifikasi`
--

CREATE TABLE `epro_hasilverifikasi` (
  `id_proposal` int(11) UNSIGNED ZEROFILL NOT NULL,
  `rpjmd` enum('sesuai','cukup','tidak sesuai') DEFAULT NULL COMMENT 'Kesesuaian Proposal dengan RPJMD Provinsi',
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
-- Struktur dari tabel `epro_history_verifikasi`
--

CREATE TABLE `epro_history_verifikasi` (
  `id_proposal` int(11) UNSIGNED ZEROFILL NOT NULL,
  `status` int(255) NOT NULL,
  `id_user` int(11) UNSIGNED ZEROFILL NOT NULL,
  `released_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `epro_kabupaten`
--

CREATE TABLE `epro_kabupaten` (
  `id` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `jenis_wilayah` enum('kabupaten','kota') NOT NULL,
  `nama_kota` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `epro_kabupaten`
--

INSERT INTO `epro_kabupaten` (`id`, `id_provinsi`, `jenis_wilayah`, `nama_kota`) VALUES
(1, 1, 'kabupaten', 'kabupaten Aceh Barat'),
(2, 1, 'kabupaten', 'Kabupaten Aceh Barat Daya'),
(3, 1, 'kabupaten', 'Kabupaten Aceh Besar'),
(4, 1, 'kabupaten', 'Kabupaten Aceh Jaya'),
(5, 1, 'kabupaten', 'Kabupaten Aceh Selatan'),
(6, 1, 'kabupaten', 'Kabupaten Aceh Singkil'),
(7, 1, 'kabupaten', 'Kabupaten Aceh Tamiang'),
(8, 1, 'kabupaten', 'Kabupaten Aceh Tengah'),
(9, 1, 'kabupaten', 'Kabupaten Aceh Tenggara'),
(10, 1, 'kabupaten', 'Kabupaten Aceh Timur'),
(11, 1, 'kabupaten', 'Kabupaten Aceh Utara'),
(12, 1, 'kabupaten', 'Kabupaten Bener Meriah'),
(13, 1, 'kabupaten', 'Kabupaten Bireuen'),
(14, 1, 'kabupaten', 'Kabupaten Gayo Lues'),
(15, 1, 'kabupaten', 'Kabupaten Nagan Raya'),
(16, 1, 'kabupaten', 'Kabupaten Pidie'),
(17, 1, 'kabupaten', 'Kabupaten Pidie Jaya'),
(18, 1, 'kabupaten', 'Kabupaten Simeulue'),
(19, 1, 'kota', 'Kota Banda Aceh'),
(20, 1, 'kota', 'Kota Langsa'),
(21, 1, 'kota', 'Kota Lhokseumawe'),
(22, 1, 'kota', 'Kota Sabang'),
(23, 1, 'kota', 'Kota Subulussalam'),
(24, 2, 'kabupaten', 'Kabupaten Asahan'),
(25, 2, 'kabupaten', 'Kabupaten Batu Bara'),
(26, 2, 'kabupaten', 'Kabupaten Dairi'),
(27, 2, 'kabupaten', 'Kabupaten Deli Serdang'),
(28, 2, 'kabupaten', 'Kabupaten Humbang Hasundutan'),
(29, 2, 'kabupaten', 'Kabupaten Karo'),
(30, 2, 'kabupaten', 'Kabupaten Labuhan Batu'),
(31, 2, 'kabupaten', 'Kabupaten Labuhan Batu Selatan'),
(32, 2, 'kabupaten', 'Kabupaten Labuhan Batu Utara'),
(33, 2, 'kabupaten', 'Kabupaten Langkat'),
(34, 2, 'kabupaten', 'Kabupaten Mandailing Natal'),
(35, 2, 'kabupaten', 'Kabupaten Nias'),
(36, 2, 'kabupaten', 'Kabupaten Nias Barat'),
(37, 2, 'kabupaten', 'Kabupaten Nias Selatan'),
(38, 2, 'kabupaten', 'Kabupaten Nias Utara'),
(39, 2, 'kabupaten', 'Kabupaten Padang Lawas'),
(40, 2, 'kabupaten', 'Kabupaten Padang Lawas Utara'),
(41, 2, 'kabupaten', 'Kabupaten Pakpak Bharat'),
(42, 2, 'kabupaten', 'Kabupaten Samosir'),
(43, 2, 'kabupaten', 'Kabupaten Serdang Bedagai'),
(44, 2, 'kabupaten', 'Kabupaten Simalungun'),
(45, 2, 'kabupaten', 'Kabupaten Tapanuli Selatan'),
(46, 2, 'kabupaten', 'Kabupaten Tapanuli Tengah'),
(47, 2, 'kabupaten', 'Kabupaten Tapanuli Utara'),
(48, 2, 'kabupaten', 'Kabupaten Toba Samosir'),
(49, 2, 'kota', 'Kota Binjai'),
(50, 2, 'kota', 'Kota Gunung Sitoli'),
(51, 2, 'kota', 'Kota Medan'),
(52, 2, 'kota', 'Kota Padangsidimpuan'),
(53, 2, 'kota', 'Kota Pematang Siantar'),
(54, 2, 'kota', 'Kota Sibolga'),
(55, 2, 'kota', 'Kota Tanjung Balai'),
(56, 2, 'kota', 'Kota Tebing Tinggi'),
(57, 3, 'kabupaten', 'Kabupaten Agam'),
(58, 3, 'kabupaten', 'Kabupaten Dharmasraya'),
(59, 3, 'kabupaten', 'Kabupaten Kepulauan Mentawai'),
(60, 3, 'kabupaten', 'Kabupaten Lima Puluh Kota'),
(61, 3, 'kabupaten', 'Kabupaten Padang Pariaman'),
(62, 3, 'kabupaten', 'Kabupaten Pasaman'),
(63, 3, 'kabupaten', 'Kabupaten Pasaman Barat'),
(64, 3, 'kabupaten', 'Kabupaten Pesisir Selatan'),
(65, 3, 'kabupaten', 'Kabupaten Sijunjung'),
(66, 3, 'kabupaten', 'Kabupaten Solok'),
(67, 3, 'kabupaten', 'Kabupaten Solok Selatan'),
(68, 3, 'kabupaten', 'Kabupaten Tanah Datar'),
(69, 3, 'kota', 'Kota Bukittinggi'),
(70, 3, 'kota', 'Kota Padang'),
(71, 3, 'kota', 'Kota Padangpanjang'),
(72, 3, 'kota', 'Kota Pariaman'),
(73, 3, 'kota', 'Kota Payakumbuh'),
(74, 3, 'kota', 'Kota Sawahlunto'),
(75, 3, 'kota', 'Kota Solok'),
(76, 4, 'kabupaten', 'Kabupaten Bengkalis'),
(77, 4, 'kabupaten', 'Kabupaten Indragiri Hilir '),
(78, 4, 'kabupaten', 'Kabupaten Indragiri Hulu '),
(79, 4, 'kabupaten', 'Kabupaten Kampar'),
(80, 4, 'kabupaten', 'Kabupaten Kepulauan Meranti '),
(81, 4, 'kabupaten', 'Kabupaten Kuantan Singingi '),
(82, 4, 'kabupaten', 'Kabupaten Pelalawan '),
(83, 4, 'kabupaten', 'Kabupaten Rokan Hilir '),
(84, 4, 'kabupaten', 'Kabupaten Rokan Hulu '),
(85, 4, 'kabupaten', 'Kabupaten Siak'),
(86, 4, 'kota', 'Kota Dumai'),
(87, 4, 'kota', 'Kota Pekanbaru'),
(88, 5, 'kabupaten', 'Kabupaten Batanghari'),
(89, 5, 'kabupaten', 'Kabupaten Bungo'),
(90, 5, 'kabupaten', 'Kabupaten Kerinci'),
(91, 5, 'kabupaten', 'Kabupaten Merangin'),
(92, 5, 'kabupaten', 'Kabupaten Muaro Jambi'),
(93, 5, 'kabupaten', 'Kabupaten Sarolangun'),
(94, 5, 'kabupaten', 'Kabupaten Tanjung Jabung Barat'),
(95, 5, 'kabupaten', 'Kabupaten Tanjung Jabung Timur'),
(96, 5, 'kabupaten', 'Kabupaten Tebo'),
(97, 5, 'kota', 'Kota Jambi'),
(98, 5, 'kota', 'Kota Sungai Penuh'),
(99, 6, 'kabupaten', 'Kabupaten Banyuasin'),
(100, 6, 'kabupaten', 'Kabupaten Empat Lawang'),
(101, 6, 'kabupaten', 'Kabupaten Lahat'),
(102, 6, 'kabupaten', 'Kabupaten Muara Enim'),
(103, 6, 'kabupaten', 'Kabupaten Musi Banyuasin'),
(104, 6, 'kabupaten', 'Kabupaten Musi Rawas'),
(105, 6, 'kabupaten', 'Kabupaten Musi Rawas Utara'),
(106, 6, 'kabupaten', 'Kabupaten Ogan Ilir'),
(107, 6, 'kabupaten', 'Kabupaten Ogan Komering Ilir'),
(108, 6, 'kabupaten', 'Kabupaten Ogan Komering Ulu'),
(109, 6, 'kabupaten', 'Kabupaten Ogan Komering Ulu Selatan'),
(110, 6, 'kabupaten', 'Kabupaten Ogan Komering Ulu Timur'),
(111, 6, 'kabupaten', 'Kabupaten Penukal Abab Lematang Ilir'),
(112, 6, 'kota', 'Kota Lubuklinggau'),
(113, 6, 'kota', 'Kota Pagar Alam'),
(114, 6, 'kota', 'Kota Palembang'),
(115, 6, 'kota', 'Kota Prabumulih'),
(116, 7, 'kabupaten', 'Kabupaten Bengkulu Selatan'),
(117, 7, 'kabupaten', 'Kabupaten Bengkulu Tengah'),
(118, 7, 'kabupaten', 'Kabupaten Bengkulu Utara'),
(119, 7, 'kabupaten', 'Kabupaten Kaur'),
(120, 7, 'kabupaten', 'Kabupaten Kepahiang'),
(121, 7, 'kabupaten', 'Kabupaten Lebong'),
(122, 7, 'kabupaten', 'Kabupaten Mukomuko'),
(123, 7, 'kabupaten', 'Kabupaten Rejang Lebong'),
(124, 7, 'kabupaten', 'Kabupaten Seluma'),
(125, 7, 'kota', 'Kota Bengkulu'),
(126, 8, 'kabupaten', 'Kabupaten lampung Barat'),
(127, 8, 'kabupaten', 'Kabupaten Lampung Selatan'),
(128, 8, 'kabupaten', 'Kabupaten Lampung Tengah'),
(129, 8, 'kabupaten', 'Kabupaten Lampung Timur'),
(130, 8, 'kabupaten', 'Kabupaten Lampung Utara'),
(131, 8, 'kabupaten', 'Kabupaten Mesuji'),
(132, 8, 'kabupaten', 'Kabupaten Pasawaran'),
(133, 8, 'kabupaten', 'Kabupaten Pringsewu'),
(134, 8, 'kabupaten', 'Kabupaten Tanggamus'),
(135, 8, 'kabupaten', 'Kabupaten Tulang banwang'),
(136, 8, 'kabupaten', 'Kabupaten Tulang Bawang barat'),
(137, 8, 'kabupaten', 'Kabupaten Way Kanan'),
(138, 8, 'kabupaten', 'Kabupaten Pesisir Barat'),
(139, 8, 'kota', 'Kota Bandar Lampung'),
(140, 8, 'kota', 'Kota Metro'),
(141, 9, 'kabupaten', 'Kabupaten Bangka'),
(142, 9, 'kabupaten', 'Kabupaten Bangka Barat'),
(143, 9, 'kabupaten', 'Kabupaten Bangka Selatan'),
(144, 9, 'kabupaten', 'Kabupaten Bangka Tengah'),
(145, 9, 'kabupaten', 'Kabupaten Belitung'),
(146, 9, 'kabupaten', 'Kabupaten Belitung Timur'),
(147, 9, 'kota', 'Kota Pangkal Pinang'),
(148, 10, 'kabupaten', 'Kabupaten Bintan'),
(149, 10, 'kabupaten', 'Kabupaten Karimun'),
(150, 10, 'kabupaten', 'Kabupaten Kepulauan Anambas'),
(151, 10, 'kabupaten', 'Kabupaten Lingga'),
(152, 10, 'kabupaten', 'Kabupaten Natuna'),
(153, 10, 'kota', 'Kota Batam'),
(154, 10, 'kota', 'Kota Tanjung Pinang'),
(155, 11, 'kabupaten', 'Kabupaten Kepulauan Seribu'),
(156, 11, 'kota', 'Kota Jakarta Barat'),
(157, 11, 'kota', 'Kota Jakarta Pusat'),
(158, 11, 'kota', 'Kota Jakarta Selatan'),
(159, 11, 'kota', 'Kota Jakarta Timur'),
(160, 11, 'kota', 'Kota Jakarta Utara'),
(161, 12, 'kabupaten', 'Kabupaten Bandung'),
(162, 12, 'kabupaten', 'Kabupaten Bandung Barat'),
(163, 12, 'kabupaten', 'Kabupaten Bekasi'),
(164, 12, 'kabupaten', 'Kabupaten Bogor'),
(165, 12, 'kabupaten', 'Kabupaten Ciamis'),
(166, 12, 'kabupaten', 'Kabupaten Cianjur'),
(167, 12, 'kabupaten', 'Kabupaten Cirebon'),
(168, 12, 'kabupaten', 'Kabupaten Garut'),
(169, 12, 'kabupaten', 'Kabupaten Indramayu'),
(170, 12, 'kabupaten', 'Kabupaten Karawang'),
(171, 12, 'kabupaten', 'Kabupaten Kuningan'),
(172, 12, 'kabupaten', 'Kabupaten Majalengka'),
(173, 12, 'kabupaten', 'Kabupaten Pangandaran'),
(174, 12, 'kabupaten', 'Kabupaten Purwakarta'),
(175, 12, 'kabupaten', 'Kabupaten Subang'),
(176, 12, 'kabupaten', 'Kabupaten Sukabumi'),
(177, 12, 'kabupaten', 'Kabupaten Sumedang'),
(178, 12, 'kabupaten', 'Kabupaten Tasikmalaya'),
(179, 12, 'kota', 'Kota Bandung'),
(180, 12, 'kota', 'Kota Banjar'),
(181, 12, 'kota', 'Kota Bekasi'),
(182, 12, 'kota', 'Kota Bogor'),
(183, 12, 'kota', 'Kota Cimahi'),
(184, 12, 'kota', 'Kota Cirebon'),
(185, 12, 'kota', 'Kota Depok'),
(186, 12, 'kota', 'Kota Sukabumi'),
(187, 12, 'kota', 'Kota Tasikmalaya'),
(188, 13, 'kabupaten', 'Kabupaten Banjarnegara'),
(189, 13, 'kabupaten', 'Kabupaten Banyumas'),
(190, 13, 'kabupaten', 'Kabupaten Batang'),
(191, 13, 'kabupaten', 'Kabupaten Blora'),
(192, 13, 'kabupaten', 'Kabupaten Boyolali'),
(193, 13, 'kabupaten', 'Kabupaten Brebes'),
(194, 13, 'kabupaten', 'Kabupaten Cilacap'),
(195, 13, 'kabupaten', 'Kabupaten Demak'),
(196, 13, 'kabupaten', 'Kabupaten Grobogan'),
(197, 13, 'kabupaten', 'Kabupaten Jepara'),
(198, 13, 'kabupaten', 'Kabupaten Karanganyar'),
(199, 13, 'kabupaten', 'Kabupaten Kebumen'),
(200, 13, 'kabupaten', 'Kabupaten Kendal'),
(201, 13, 'kabupaten', 'Kabupaten Klaten'),
(202, 13, 'kabupaten', 'Kabupaten Kudus'),
(203, 13, 'kabupaten', 'Kabupaten Magelang'),
(204, 13, 'kabupaten', 'Kabupaten Pati'),
(205, 13, 'kabupaten', 'Kabupaten Pekalongan'),
(206, 13, 'kabupaten', 'Kabupaten Pemalang'),
(207, 13, 'kabupaten', 'Kabupaten Purbalingga'),
(208, 13, 'kabupaten', 'Kabupaten Purworejo'),
(209, 13, 'kabupaten', 'Kabupaten Rembang'),
(210, 13, 'kabupaten', 'Kabupaten Semarang'),
(211, 13, 'kabupaten', 'Kabupaten Sragen'),
(212, 13, 'kabupaten', 'Kabupaten Sukoharjo'),
(213, 13, 'kabupaten', 'Kabupaten Tegal'),
(214, 13, 'kabupaten', 'Kabupaten Temanggung'),
(215, 13, 'kabupaten', 'Kabupaten Wonogiri'),
(216, 13, 'kabupaten', 'Kabupaten Wonosobo'),
(217, 13, 'kota', 'Kota Magelang'),
(218, 13, 'kota', 'Kota Pekalongan'),
(219, 13, 'kota', 'Kota Salatiga'),
(220, 13, 'kota', 'Kota Semarang'),
(221, 13, 'kota', 'Kota Surakarta'),
(222, 13, 'kota', 'Kota Tegal'),
(223, 14, 'kabupaten', 'Kabupaten Bantul'),
(224, 14, 'kabupaten', 'Kabupaten Gunungkidul'),
(225, 14, 'kabupaten', 'Kabupaten Kulon Progo'),
(226, 14, 'kabupaten', 'Kabupaten Sleman'),
(227, 14, 'kota', 'Kota Yogyakarta'),
(228, 15, 'kabupaten', 'Kabupaten Bangkalan'),
(229, 15, 'kabupaten', 'Kabupaten Banyuwangi'),
(230, 15, 'kabupaten', 'Kabupaten Blitar'),
(231, 15, 'kabupaten', 'Kabupaten Bojonegoro'),
(232, 15, 'kabupaten', 'Kabupaten Bondowoso'),
(233, 15, 'kabupaten', 'Kabupaten Gresik'),
(234, 15, 'kabupaten', 'Kabupaten Jember'),
(235, 15, 'kabupaten', 'Kabupaten Jombang'),
(236, 15, 'kabupaten', 'Kabupaten Kediri'),
(237, 15, 'kabupaten', 'Kabupaten Lamongan'),
(238, 15, 'kabupaten', 'Kabupaten Lumajang'),
(239, 15, 'kabupaten', 'Kabupaten Madiun'),
(240, 15, 'kabupaten', 'Kabupaten Magetan'),
(241, 15, 'kabupaten', 'Kabupaten Malang'),
(242, 15, 'kabupaten', 'Kabupaten Mojokerto'),
(243, 15, 'kabupaten', 'Kabupaten Nganjuk'),
(244, 15, 'kabupaten', 'Kabupaten Ngawi'),
(245, 15, 'kabupaten', 'Kabupaten Pacitan'),
(246, 15, 'kabupaten', 'Kabupaten Pamekasan'),
(247, 15, 'kabupaten', 'Kabupaten Pasuruan'),
(248, 15, 'kabupaten', 'Kabupaten Ponorogo'),
(249, 15, 'kabupaten', 'Kabupaten Probolinggo'),
(250, 15, 'kabupaten', 'Kabupaten Sampang'),
(251, 15, 'kabupaten', 'Kabupaten Sidoarjo'),
(252, 15, 'kabupaten', 'Kabupaten Situbondo'),
(253, 15, 'kabupaten', 'Kabupaten Sumenep'),
(254, 15, 'kabupaten', 'Kabupaten Trenggalek'),
(255, 15, 'kabupaten', 'Kabupaten Tuban'),
(256, 15, 'kabupaten', 'Kabupaten Tulungagung'),
(257, 15, 'kota', 'Kota Batu'),
(258, 15, 'kota', 'Kota Blitar'),
(259, 15, 'kota', 'Kota Kediri'),
(260, 15, 'kota', 'Kota Madiun'),
(261, 15, 'kota', 'Kota Malang'),
(262, 15, 'kota', 'Kota Mojokerto'),
(263, 15, 'kota', 'Kota Pasuruan'),
(264, 15, 'kota', 'Kota Probolinggo'),
(265, 15, 'kota', 'Kota Surabaya'),
(266, 16, 'kabupaten', 'Kabupaten Lebak'),
(267, 16, 'kabupaten', 'Kabupaten Pandeglang'),
(268, 16, 'kabupaten', 'Kabupaten Serang'),
(269, 16, 'kabupaten', 'Kabupaten Tangerang'),
(270, 16, 'kota', 'Kota Cilegon'),
(271, 16, 'kota', 'Kota Serang'),
(272, 16, 'kota', 'Kota Tangerang'),
(273, 16, 'kota', 'Kota Tangerang Selatan'),
(274, 17, 'kabupaten', 'Kabupaten Badung'),
(275, 17, 'kabupaten', 'Kabupaten Bangli'),
(276, 17, 'kabupaten', 'Kabupaten Buleleng'),
(277, 17, 'kabupaten', 'Kabupaten Gianyar'),
(278, 17, 'kabupaten', 'Kabupaten Jembrana'),
(279, 17, 'kabupaten', 'Kabupaten Karangasem'),
(280, 17, 'kabupaten', 'Kabupaten Klungkung'),
(281, 17, 'kabupaten', 'Kabupaten Tabanan'),
(282, 17, 'kota', 'Kota Denpasar'),
(283, 18, 'kabupaten', 'Kabupaten Bima'),
(284, 18, 'kabupaten', 'Kabupaten Dompu'),
(285, 18, 'kabupaten', 'Kabupaten Lombok Barat'),
(286, 18, 'kabupaten', 'Kabupaten Lombok Tengah'),
(287, 18, 'kabupaten', 'Kabupaten Lombok Timur'),
(288, 18, 'kabupaten', 'Kabupaten Lombok Utara'),
(289, 18, 'kabupaten', 'Kabupaten Sumbawa'),
(290, 18, 'kabupaten', 'Kabupaten Sumbawa Barat'),
(291, 18, 'kota', 'Kota Bima'),
(292, 18, 'kota', 'Kota Mataram'),
(293, 19, 'kabupaten', 'Kabupaten Alor'),
(294, 19, 'kabupaten', 'Kabupaten Belu'),
(295, 19, 'kabupaten', 'Kabupaten Ende'),
(296, 19, 'kabupaten', 'Kabupaten Flores Timur'),
(297, 19, 'kabupaten', 'Kabupaten Kupang'),
(298, 19, 'kabupaten', 'Kabupaten Lembata'),
(299, 19, 'kabupaten', 'Kabupaten Malaka'),
(300, 19, 'kabupaten', 'Kabupaten Manggarai'),
(301, 19, 'kabupaten', 'Kabupaten Manggarai Barat'),
(302, 19, 'kabupaten', 'Kabupaten Manggarai Timur'),
(303, 19, 'kabupaten', 'Kabupaten Ngada'),
(304, 19, 'kabupaten', 'Kabupaten Nagekeo'),
(305, 19, 'kabupaten', 'Kabupaten Rote Ndao'),
(306, 19, 'kabupaten', 'Kabupaten Sabu Raijua'),
(307, 19, 'kabupaten', 'Kabupaten Sikka'),
(308, 19, 'kabupaten', 'Kabupaten Sumba Barat'),
(309, 19, 'kabupaten', 'Kabupaten Sumba Barat Daya'),
(310, 19, 'kabupaten', 'Kabupaten Sumba Tengah'),
(311, 19, 'kabupaten', 'Kabupaten Sumba Timur'),
(312, 19, 'kabupaten', 'Kabupaten Timor Tengah Selatan'),
(313, 19, 'kabupaten', 'Kabupaten Timor Tengah Utara'),
(314, 19, 'kota', 'Kota Kupang'),
(315, 20, 'kabupaten', 'Kabupaten Bengkayang'),
(316, 20, 'kabupaten', 'Kabupaten Kapuas Hulu'),
(317, 20, 'kabupaten', 'Kabupaten Kayong Utara'),
(318, 20, 'kabupaten', 'Kabupaten Ketapang'),
(319, 20, 'kabupaten', 'Kabupaten Kubu Raya'),
(320, 20, 'kabupaten', 'Kabupaten Landak'),
(321, 20, 'kabupaten', 'Kabupaten Melawi'),
(322, 20, 'kabupaten', 'Kabupaten Mempawah'),
(323, 20, 'kabupaten', 'Kabupaten Sambas'),
(324, 20, 'kabupaten', 'Kabupaten Sanggau'),
(325, 20, 'kabupaten', 'Kabupaten Sekadau'),
(326, 20, 'kabupaten', 'Kabupaten Sintang'),
(327, 20, 'kota', 'Kota Pontianak'),
(328, 20, 'kota', 'Kota Singkawang'),
(329, 21, 'kabupaten', 'Kabupaten Barito Selatan'),
(330, 21, 'kabupaten', 'Kabupaten Barito Timur'),
(331, 21, 'kabupaten', 'Kabupaten Barito Utara'),
(332, 21, 'kabupaten', 'Kabupaten Gunung Mas'),
(333, 21, 'kabupaten', 'Kabupaten Kapuas'),
(334, 21, 'kabupaten', 'Kabupaten Katingan'),
(335, 21, 'kabupaten', 'Kabupaten Kotawaringin Barat'),
(336, 21, 'kabupaten', 'Kabupaten Kotawaringin Timur'),
(337, 21, 'kabupaten', 'Kabupaten Lamandau'),
(338, 21, 'kabupaten', 'Kabupaten Murung Raya'),
(339, 21, 'kabupaten', 'Kabupaten Pulang Pisau'),
(340, 21, 'kabupaten', 'Kabupaten Sukamara'),
(341, 21, 'kabupaten', 'Kabupaten Seruyan'),
(342, 21, 'kota', 'Kota Palangka Raya'),
(343, 22, 'kabupaten', 'Kabupaten Balangan'),
(344, 22, 'kabupaten', 'Kabupaten Banjar'),
(345, 22, 'kabupaten', 'Kabupaten Barito Kuala'),
(346, 22, 'kabupaten', 'Kabupaten Hulu Sungai Selatan'),
(347, 22, 'kabupaten', 'Kabupaten Hulu Sungai Tengah'),
(348, 22, 'kabupaten', 'Kabupaten Hulu Sungai Utara'),
(349, 22, 'kabupaten', 'Kabupaten Kotabaru'),
(350, 22, 'kabupaten', 'Kabupaten Tabalong'),
(351, 22, 'kabupaten', 'Kabupaten Tanah Bumbu'),
(352, 22, 'kabupaten', 'Kabupaten Tanah Laut'),
(353, 22, 'kabupaten', 'Kabupaten Tapin'),
(354, 22, 'kota', 'Kota Banjarbaru'),
(355, 22, 'kota', 'Kota Banjarmasin'),
(356, 23, 'kabupaten', 'Kabupaten Berau'),
(357, 23, 'kabupaten', 'Kabupaten Kutai Barat'),
(358, 23, 'kabupaten', 'Kabupaten Kutai Kartanegara'),
(359, 23, 'kabupaten', 'Kabupaten Kutai Timur'),
(360, 23, 'kabupaten', 'Kabupaten Mahakam Ulu'),
(361, 23, 'kabupaten', 'Kabupaten Paser'),
(362, 23, 'kabupaten', 'Kabupaten Penajam Paser Utara'),
(363, 23, 'kota', 'Kota Balikpapan'),
(364, 23, 'kota', 'Kota Bontang'),
(365, 23, 'kota', 'Kota Samarinda'),
(366, 24, 'kabupaten', 'Kabupaten Bolaang Mongondow'),
(367, 24, 'kabupaten', 'Kabupaten Bolaang Mongondow Selatan'),
(368, 24, 'kabupaten', 'Kabupaten Bolaang Mongondow Timur'),
(369, 24, 'kabupaten', 'Kabupaten Bolaang Mongondow Utara'),
(370, 24, 'kabupaten', 'Kabupaten Kepulauan Sangihe'),
(371, 24, 'kabupaten', 'Kabupaten Kepulauan Siau Tagulandang Biaro'),
(372, 24, 'kabupaten', 'Kabupaten Kepulauan Talaud'),
(373, 24, 'kabupaten', 'Kabupaten Minahasa'),
(374, 24, 'kabupaten', 'Kabupaten Minahasa Selatan'),
(375, 24, 'kabupaten', 'Kabupaten Minahasa Tenggara'),
(376, 24, 'kabupaten', 'Kabupaten Minahasa Utara'),
(377, 24, 'kota', 'Kota Bitung'),
(378, 24, 'kota', 'Kota Kotamobagu'),
(379, 24, 'kota', 'Kota Manado'),
(380, 24, 'kota', 'Kota Tomohon'),
(381, 25, 'kabupaten', 'Kabupaten Banggai'),
(382, 25, 'kabupaten', 'Kabupaten Banggai Kepulauan'),
(383, 25, 'kabupaten', 'Kabupaten Banggai Laut'),
(384, 25, 'kabupaten', 'Kabupaten Buol'),
(385, 25, 'kabupaten', 'Kabupaten Donggala'),
(386, 25, 'kabupaten', 'Kabupaten Morowali'),
(387, 25, 'kabupaten', 'Kabupaten Morowali Utara'),
(388, 25, 'kabupaten', 'Kabupaten Parigi Moutong'),
(389, 25, 'kabupaten', 'Kabupaten Poso'),
(390, 25, 'kabupaten', 'Kabupaten Sigi'),
(391, 25, 'kabupaten', 'Kabupaten Tojo Una-Una'),
(392, 25, 'kabupaten', 'Kabupaten Tolitoli'),
(393, 25, 'kota', 'Kota Palu'),
(394, 26, 'kabupaten', 'Kabupaten Bantaeng'),
(395, 26, 'kabupaten', 'Kabupaten Barru'),
(396, 26, 'kabupaten', 'Kabupaten Bone'),
(397, 26, 'kabupaten', 'Kabupaten Bulukumba'),
(398, 26, 'kabupaten', 'Kabupaten Enrekang'),
(399, 26, 'kabupaten', 'Kabupaten Gowa'),
(400, 26, 'kabupaten', 'Kabupaten Jeneponto'),
(401, 26, 'kabupaten', 'Kabupaten Kepulauan Selayar'),
(402, 26, 'kabupaten', 'Kabupaten Luwu'),
(403, 26, 'kabupaten', 'Kabupaten Luwu Timur'),
(404, 26, 'kabupaten', 'Kabupaten Luwu Utara'),
(405, 26, 'kabupaten', 'Kabupaten Maros'),
(406, 26, 'kabupaten', 'Kabupaten Pangkajene dan Kepulauan'),
(407, 26, 'kabupaten', 'Kabupaten Pinrang'),
(408, 26, 'kabupaten', 'Kabupaten Sidenreng Rappang'),
(409, 26, 'kabupaten', 'Kabupaten Sinjai'),
(410, 26, 'kabupaten', 'Kabupaten Soppeng'),
(411, 26, 'kabupaten', 'Kabupaten Takalar'),
(412, 26, 'kabupaten', 'Kabupaten Tana Toraja'),
(413, 26, 'kabupaten', 'Kabupaten Toraja Utara'),
(414, 26, 'kabupaten', 'Kabupaten Wajo'),
(415, 26, 'kota', 'Kota Makassar'),
(416, 26, 'kota', 'Kota Palopo'),
(417, 26, 'kota', 'Kota Parepare'),
(418, 27, 'kabupaten', 'Kabupaten Bombana'),
(419, 27, 'kabupaten', 'Kabupaten Buton'),
(420, 27, 'kabupaten', 'Kabupaten Buton Selatan'),
(421, 27, 'kabupaten', 'Kabupaten Buton Tengah'),
(422, 27, 'kabupaten', 'Kabupaten Buton Utara'),
(423, 27, 'kabupaten', 'Kabupaten Kolaka'),
(424, 27, 'kabupaten', 'Kabupaten Kolaka Timur'),
(425, 27, 'kabupaten', 'Kabupaten Kolaka Utara'),
(426, 27, 'kabupaten', 'Kabupaten Konawe'),
(427, 27, 'kabupaten', 'Kabupaten Konawe Kepulauan'),
(428, 27, 'kabupaten', 'Kabupaten Konawe Selatan'),
(429, 27, 'kabupaten', 'Kabupaten Konawe Utara'),
(430, 27, 'kabupaten', 'Kabupaten Muna'),
(431, 27, 'kabupaten', 'Kabupaten Muna Barat'),
(432, 27, 'kabupaten', 'Kabupaten Wakatobi'),
(433, 27, 'kota', 'Kota Bau-Bau'),
(434, 27, 'kota', 'Kota Kendari'),
(435, 28, 'kabupaten', 'Kabupaten Boalemo'),
(436, 28, 'kabupaten', 'Kabupaten Bone Bolango'),
(437, 28, 'kabupaten', 'Kabupaten Gorontalo'),
(438, 28, 'kabupaten', 'Kabupaten Gorontalo Utara'),
(439, 28, 'kabupaten', 'Kabupaten Pohuwato'),
(440, 28, 'kota', 'Kota Gorontalo'),
(441, 29, 'kabupaten', 'Kabupaten Buru'),
(442, 29, 'kabupaten', 'Kabupaten Buru Selatan'),
(443, 29, 'kabupaten', 'Kabupaten Kepulauan Aru'),
(444, 29, 'kabupaten', 'Kabupaten Maluku Barat Daya'),
(445, 29, 'kabupaten', 'Kabupaten Maluku Tengah'),
(446, 29, 'kabupaten', 'Kabupaten Maluku Tenggara'),
(447, 29, 'kabupaten', 'Kabupaten Maluku Tenggara Barat'),
(448, 29, 'kabupaten', 'Kabupaten Seram Bagian Barat'),
(449, 29, 'kabupaten', 'Kabupaten Seram Bagian Timur'),
(450, 29, 'kota', 'Kota Ambon'),
(451, 29, 'kota', 'Kota Tual'),
(452, 30, 'kabupaten', 'Kabupaten Halmahera Barat'),
(453, 30, 'kabupaten', 'Kabupaten Halmahera Tengah'),
(454, 30, 'kabupaten', 'Kabupaten Halmahera Timur'),
(455, 30, 'kabupaten', 'Kabupaten Halmahera Selatan'),
(456, 30, 'kabupaten', 'Kabupaten Halmahera Utara'),
(457, 30, 'kabupaten', 'Kabupaten Kepulauan Sula'),
(458, 30, 'kabupaten', 'Kabupaten Pulau Morotai'),
(459, 30, 'kabupaten', 'Kabupaten Pulau Taliabu'),
(460, 30, 'kota', 'Kota Ternate'),
(461, 30, 'kota', 'Kota Tidore Kepulauan'),
(462, 31, 'kabupaten', 'Kabupaten Asmat'),
(463, 31, 'kabupaten', 'Kabupaten Biak Numfor'),
(464, 31, 'kabupaten', 'Kabupaten Boven Digoel'),
(465, 31, 'kabupaten', 'Kabupaten Deiyai'),
(466, 31, 'kabupaten', 'Kabupaten Dogiyai'),
(467, 31, 'kabupaten', 'Kabupaten Intan Jaya'),
(468, 31, 'kabupaten', 'Kabupaten Jayapura'),
(469, 31, 'kabupaten', 'Kabupaten Jayawijaya'),
(470, 31, 'kabupaten', 'Kabupaten Keerom'),
(471, 31, 'kabupaten', 'Kabupaten Kepulauan Yapen'),
(472, 31, 'kabupaten', 'Kabupaten Lanny Jaya'),
(473, 31, 'kabupaten', 'Kabupaten Mamberamo Raya'),
(474, 31, 'kabupaten', 'Kabupaten Mamberamo Tengah'),
(475, 31, 'kabupaten', 'Kabupaten Mappi'),
(476, 31, 'kabupaten', 'Kabupaten Merauke'),
(477, 31, 'kabupaten', 'Kabupaten Mimika'),
(478, 31, 'kabupaten', 'Kabupaten Nabire'),
(479, 31, 'kabupaten', 'Kabupaten Nduga'),
(480, 31, 'kabupaten', 'Kabupaten Paniai'),
(481, 31, 'kabupaten', 'Kabupaten Pegunungan Bintang'),
(482, 31, 'kabupaten', 'Kabupaten Puncak'),
(483, 31, 'kabupaten', 'Kabupaten Puncak Jaya'),
(484, 31, 'kabupaten', 'Kabupaten Sarmi'),
(485, 31, 'kabupaten', 'Kabupaten Supiori'),
(486, 31, 'kabupaten', 'Kabupaten Tolikara'),
(487, 31, 'kabupaten', 'Kabupaten Waropen'),
(488, 31, 'kabupaten', 'Kabupaten Yahukimo'),
(489, 31, 'kabupaten', 'Kabupaten Yalimo'),
(490, 32, 'kota', 'Kota Jayapura');

-- --------------------------------------------------------

--
-- Struktur dari tabel `epro_kecamatan`
--

CREATE TABLE `epro_kecamatan` (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `id_kabupaten` int(11) UNSIGNED ZEROFILL NOT NULL,
  `nama_kecamatan` varchar(256) NOT NULL,
  `kodepos` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `epro_kegiatan`
--

CREATE TABLE `epro_kegiatan` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `epro_kegiatan`
--

INSERT INTO `epro_kegiatan` (`id`, `nama_kegiatan`) VALUES
(1, 'Padat Karya Produktif'),
(2, 'Padat Karya Infrastruktur'),
(3, 'Teknologi Tepat Guna'),
(4, 'Tenaga Kerja Mandiri'),
(5, 'Informasi Bursa Kerja Online');

-- --------------------------------------------------------

--
-- Struktur dari tabel `epro_konten_proposal`
--

CREATE TABLE `epro_konten_proposal` (
  `id_proposal` int(11) UNSIGNED ZEROFILL NOT NULL,
  `konten_proposal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `epro_lampiran`
--

CREATE TABLE `epro_lampiran` (
  `id_proposal` int(11) UNSIGNED ZEROFILL NOT NULL,
  `file_konten` varchar(256) DEFAULT NULL,
  `file_rancangan_anggaran` varchar(256) DEFAULT NULL,
  `file_lampiran_lainnya` varchar(256) DEFAULT NULL,
  `released_date` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `epro_profile`
--

CREATE TABLE `epro_profile` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `epro_profile`
--

INSERT INTO `epro_profile` (`id`, `email`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `epro_proposal`
--

CREATE TABLE `epro_proposal` (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `id_kabupaten` int(11) UNSIGNED ZEROFILL NOT NULL,
  `catatan` text COMMENT 'apabila ada catatan khusus',
  `program` varchar(256) NOT NULL COMMENT 'program proposal',
  `kegiatan` varchar(256) NOT NULL COMMENT 'nama kegiatan ',
  `tahun_anggaran` int(4) NOT NULL COMMENT 'tahun proposal diajukan',
  `nomor_sk` varchar(256) DEFAULT NULL COMMENT 'nomor sk',
  `released_date` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL COMMENT 'status proposal'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `epro_proposal`
--

INSERT INTO `epro_proposal` (`id`, `id_kabupaten`, `catatan`, `program`, `kegiatan`, `tahun_anggaran`, `nomor_sk`, `released_date`, `status`) VALUES
(00000000003, 00000000001, NULL, 'PROGRAM PENEMPATAN DAN PEMBERDAYAAN TENAGA KERJA', 'PEMBERDAYAAN MASYARAKAT MELALUI PADAT KARYA PRODUKTIF', 2016, NULL, '12/02/2016', 'draft'),
(00000000004, 00000000002, NULL, 'PROGRAM PENEMPATAN DAN PEMBERDAYAAN TENAGA KERJA', 'PEMBERDAYAAN MASYARAKAT MELALUI PADAT KARYA INFRASTRUKTUR', 2016, NULL, '12/02/2016', 'draft');

-- --------------------------------------------------------

--
-- Struktur dari tabel `epro_provinsi`
--

CREATE TABLE `epro_provinsi` (
  `id` int(11) NOT NULL,
  `nama_provinsi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `epro_provinsi`
--

INSERT INTO `epro_provinsi` (`id`, `nama_provinsi`) VALUES
(1, 'Nanggroe Aceh Darussalaam'),
(2, 'Sumatra Utara'),
(3, 'Sumatra Barat'),
(4, 'Riau'),
(5, 'Jambi'),
(6, 'Sumatra Selatan'),
(7, 'Bengkulu'),
(8, 'Lampung'),
(9, 'Kep. Bangka Belitung'),
(10, 'Kep. Riau'),
(11, 'DKI Jakarta'),
(12, 'Jawa Barat'),
(13, 'Jawa Tengah'),
(14, 'DI Yogyakarta'),
(15, 'Jawa Timur'),
(16, 'Banten'),
(17, 'Bali'),
(18, 'Nusa Tenggara Barat'),
(19, 'Nusa Tenggara Timur'),
(20, 'Kalimantan Barat'),
(21, 'Kalimantan Tengah'),
(22, 'Kalimantan Selatan'),
(23, 'Kalimantan Timur'),
(24, 'Sulawesi Utara'),
(25, 'Sulawesi Tengah'),
(26, 'Sulawesi Selatan'),
(27, 'Sulawesi Tenggara'),
(28, 'Gorontalo'),
(29, 'Maluku'),
(30, 'Maluku Utara'),
(31, 'Papua'),
(32, 'Irian Jaya Barat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `epro_rinciankegiatan`
--

CREATE TABLE `epro_rinciankegiatan` (
  `id_proposal` int(11) UNSIGNED ZEROFILL NOT NULL,
  `id_desa` int(11) UNSIGNED ZEROFILL NOT NULL,
  `biaya_provinsi` int(11) DEFAULT NULL COMMENT 'biaya dari daerah ke provinsi',
  `biaya_instansi` int(11) DEFAULT NULL COMMENT 'biaya dari daerah ke instansi pusat',
  `biaya_kppn` int(11) DEFAULT NULL COMMENT 'biaya dari daerah ke KPPN',
  `released_date` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `epro_sub_kegiatan`
--

CREATE TABLE `epro_sub_kegiatan` (
  `id` int(11) NOT NULL,
  `id_kegiatan` int(11) NOT NULL,
  `nama_sub_kegiatan` varchar(256) NOT NULL,
  `anggaran_maks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `epro_sub_kegiatan`
--

INSERT INTO `epro_sub_kegiatan` (`id`, `id_kegiatan`, `nama_sub_kegiatan`, `anggaran_maks`) VALUES
(1, 2, 'Membangun Jalan Desa', NULL),
(2, 2, 'Membangun Gorong-gorong', NULL),
(3, 2, 'Membangun pasar desa', NULL),
(4, 2, 'membangun talut', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `epro_user`
--

CREATE TABLE `epro_user` (
  `id` int(11) UNSIGNED ZEROFILL NOT NULL,
  `id_lokasi` int(11) UNSIGNED ZEROFILL NOT NULL COMMENT 'kabupaten',
  `nip` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `profile_picture` varchar(256) DEFAULT NULL,
  `role` enum('admin','admin instansi provinsi','admin instansi pusat','admin instansi kab/kota','instansi pusat','instansi provinsi') DEFAULT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) DEFAULT NULL,
  `notelp` int(11) DEFAULT NULL,
  `sk` varchar(256) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` enum('aktif','tidak aktif','baru') NOT NULL COMMENT 'status account',
  `reset_password` varchar(255) DEFAULT NULL COMMENT 'Password yang di reset oleh sistem (sebelum di encrypt)',
  `forgot_pass_code` varchar(50) DEFAULT NULL COMMENT 'Kode untuk link change password',
  `forgot_pass_date` varchar(50) DEFAULT NULL,
  `ip_address` varchar(15) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `modified_by` varchar(25) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `epro_user`
--

INSERT INTO `epro_user` (`id`, `id_lokasi`, `nip`, `username`, `profile_picture`, `role`, `nama_depan`, `nama_belakang`, `notelp`, `sk`, `password`, `email`, `status`, `reset_password`, `forgot_pass_code`, `forgot_pass_date`, `ip_address`, `created_by`, `created_date`, `modified_by`, `modified_date`) VALUES
(00000000001, 00000000120, '', 'administrator', '', 'admin', 'First', 'Last', NULL, NULL, '601f1889667efaebb33b8c12572835da3f027f78', 'deby.natazha@gmail.com', 'aktif', '', '', '', '127.0.0.1', NULL, NULL, NULL, NULL),
(00000000003, 00000000145, '122202229212', NULL, NULL, 'admin instansi kab/kota', 'Yudhi', 'Prabowo', NULL, NULL, '348162101fc6f7e624681b7400b085eeac6df7bd', 'poonix27@gmail.com', 'baru', NULL, NULL, NULL, '192.168.0.104', NULL, '2016-03-30 12:49:23', NULL, NULL),
(00000000004, 00000000159, '526662212221', NULL, NULL, 'admin instansi kab/kota', 'Joko', 'Prambodo', NULL, NULL, '8cb2237d0679ca88db6464eac60da96345513964', 'yudhiiprabowo@gmail.com', 'baru', NULL, NULL, NULL, '192.168.0.104', NULL, '2016-03-30 13:52:53', NULL, NULL),
(00000000005, 00000000024, '1000299921', NULL, NULL, 'admin', 'Roni', 'Setyawan', NULL, NULL, '85a54d064b9f7083bf3b24ea5981bde22b1ebcf6', 'pclassic_lover@yahoo.co.id', 'aktif', NULL, NULL, NULL, '192.168.0.104', NULL, '2016-03-30 16:51:38', NULL, NULL),
(00000000006, 00000000158, '197807042003121001', NULL, NULL, 'admin instansi kab/kota', 'dendy', 'indrawan', NULL, NULL, '7c4a8d09ca3762af61e59520943dc26494f8941b', 'dendy.indrawan@gmail.com', 'aktif', NULL, NULL, NULL, '36.66.80.66', NULL, '2016-04-06 17:02:41', NULL, NULL);

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
-- Indexes for table `epro_profile`
--
ALTER TABLE `epro_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epro_proposal`
--
ALTER TABLE `epro_proposal`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `epro_activities_user`
--
ALTER TABLE `epro_activities_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `epro_desa`
--
ALTER TABLE `epro_desa`
  MODIFY `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `epro_kabupaten`
--
ALTER TABLE `epro_kabupaten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=491;
--
-- AUTO_INCREMENT for table `epro_kecamatan`
--
ALTER TABLE `epro_kecamatan`
  MODIFY `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `epro_kegiatan`
--
ALTER TABLE `epro_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `epro_profile`
--
ALTER TABLE `epro_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `epro_proposal`
--
ALTER TABLE `epro_proposal`
  MODIFY `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `epro_provinsi`
--
ALTER TABLE `epro_provinsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `epro_sub_kegiatan`
--
ALTER TABLE `epro_sub_kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `epro_user`
--
ALTER TABLE `epro_user`
  MODIFY `id` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
