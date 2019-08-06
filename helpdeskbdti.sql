-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 06:13 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdeskbdti`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_kasuses`
--

CREATE TABLE `daftar_kasuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kasus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftar_kasuses`
--

INSERT INTO `daftar_kasuses` (`id`, `kasus`, `created_at`, `updated_at`) VALUES
(1, 'Internet dan Jaringan', NULL, NULL),
(2, 'Sistem Operasi', NULL, NULL),
(3, 'Hardware', NULL, NULL),
(4, 'Software', NULL, NULL),
(5, 'Aplikasi Internal', NULL, NULL),
(6, 'Pengembangan Jaringan', NULL, NULL),
(7, 'Lain-lain', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tikets`
--

CREATE TABLE `jenis_tikets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_tikets`
--

INSERT INTO `jenis_tikets` (`id`, `jenis`, `created_at`, `updated_at`) VALUES
(1, 'Nota Dinas', NULL, NULL),
(2, 'Phone', NULL, NULL),
(3, 'Whatsapp', NULL, NULL),
(4, 'Langsung', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_04_063702_create_daftar_kasuses_table', 1),
(4, '2019_07_04_063716_create_persediaan_barangs_table', 1),
(5, '2019_07_04_063729_create_jenis_tikets_table', 1),
(6, '2019_07_04_063746_create_status_kasuses_table', 1),
(7, '2019_07_04_063757_create_petugas_table', 1),
(8, '2019_07_04_063820_create_sigotas_table', 1),
(9, '2019_07_04_063831_create_siaps_table', 1),
(10, '2019_07_04_063842_create_pelapor_lains_table', 1),
(11, '2019_07_04_063922_tiket', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelaporlains`
--

CREATE TABLE `pelaporlains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fraksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gedung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lantai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ruang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelaporlains`
--

INSERT INTO `pelaporlains` (`id`, `nama`, `fraksi`, `gedung`, `lantai`, `ruang`, `telp`, `created_at`, `updated_at`) VALUES
(1, 'Nyana Waluyo', 'Prabumulih', 'PD Nashiruddin (Persero) Tbk', '6', '146', '0626 6488 6102', NULL, NULL),
(2, 'Zelda Wahyuni', 'Bandar Lampung', 'Perum Simbolon', '14', '858', '0856 836 075', NULL, NULL),
(3, 'Raisa Mayasari S.E.I', 'Gunungsitoli', 'PT Yuniar (Persero) Tbk', '2', '905', '(+62) 736 7833 0077', NULL, NULL),
(4, 'Indah Mala Rahmawati S.H.', 'Surakarta', 'CV Sitompul Napitupulu (Persero) Tbk', '12', '279', '(+62) 599 1347 050', NULL, NULL),
(5, 'Utama Rudi Sinaga', 'Administrasi Jakarta Barat', 'PT Wibisono', '5', '533', '0418 8917 1474', NULL, NULL),
(6, 'Wakiman Hakim', 'Binjai', 'PT Dabukke Tbk', '4', '465', '(+62) 952 8736 6057', NULL, NULL),
(7, 'Mala Lestari S.E.', 'Palopo', 'PT Firgantoro Tbk', '9', '801', '(+62) 636 2216 081', NULL, NULL),
(8, 'Galih Daniswara Wibisono S.Ked', 'Metro', 'CV Maheswara Mandasari Tbk', '20', '987', '0616 3943 631', NULL, NULL),
(9, 'Paramita Laksmiwati', 'Sungai Penuh', 'PT Purnawati', '7', '453', '(+62) 347 1372 034', NULL, NULL),
(10, 'Uli Suryatmi S.Pt', 'Jayapura', 'PT Usada', '25', '513', '0521 9798 7853', NULL, NULL),
(11, 'Zahra Wahyuni', 'Sibolga', 'CV Lestari Tampubolon Tbk', '20', '339', '(+62) 570 6445 854', NULL, NULL),
(12, 'Ajiono Hartana Halim', 'Administrasi Jakarta Selatan', 'PT Haryanto (Persero) Tbk', '3', '708', '024 2442 0978', NULL, NULL),
(13, 'Empluk Budiman', 'Serang', 'Perum Lestari Tbk', '7', '274', '0531 9535 1805', NULL, NULL),
(14, 'Edi Santoso', 'Tomohon', 'UD Sihombing', '6', '687', '0890 3726 9080', NULL, NULL),
(15, 'Nova Purnawati', 'Sukabumi', 'PT Novitasari (Persero) Tbk', '21', '870', '(+62) 889 750 187', NULL, NULL),
(16, 'Kala Cawuk Zulkarnain', 'Lhokseumawe', 'PT Zulaika Kuswandari Tbk', '20', '238', '(+62) 21 8979 7458', NULL, NULL),
(17, 'Surya Siregar M.Ak', 'Administrasi Jakarta Selatan', 'CV Tampubolon', '4', '28', '(+62) 820 6131 1359', NULL, NULL),
(18, 'Warji Pranata Saefullah', 'Surabaya', 'UD Sudiati Mayasari', '8', '649', '0519 4806 9706', NULL, NULL),
(19, 'Bambang Rendy Pranowo', 'Kotamobagu', 'PD Wasita Tbk', '1', '647', '(+62) 536 8256 730', NULL, NULL),
(20, 'Harjasa Megantara', 'Palangka Raya', 'UD Mandasari (Persero) Tbk', '3', '369', '0567 1426 6920', NULL, NULL),
(21, 'Elisa Utami', 'Bima', 'Perum Yuliarti Tbk', '1', '117', '(+62) 598 1211 007', NULL, NULL),
(22, 'Jatmiko Jailani', 'Pasuruan', 'PT Maryati', '3', '945', '(+62) 990 3999 0645', NULL, NULL),
(23, 'Sabar Waluyo Pratama S.E.', 'Bau-Bau', 'PD Mangunsong Manullang', '13', '46', '0862 602 252', NULL, NULL),
(24, 'Ghaliyati Sabrina Hassanah', 'Bitung', 'UD Astuti Sihotang (Persero) Tbk', '18', '787', '0506 3972 4434', NULL, NULL),
(25, 'Taswir Prabowo', 'Mataram', 'CV Widiastuti', '15', '152', '(+62) 523 7018 560', NULL, NULL),
(26, 'Fathonah Agustina', 'Lubuklinggau', 'CV Santoso (Persero) Tbk', '2', '500', '(+62) 20 3471 8359', NULL, NULL),
(27, 'Bagiya Utama', 'Gunungsitoli', 'CV Zulaika Nurdiyanti', '10', '943', '(+62) 400 1811 0892', NULL, NULL),
(28, 'Drajat Januar S.E.', 'Banjarbaru', 'Perum Laksita Sinaga Tbk', '7', '229', '(+62) 294 0732 288', NULL, NULL),
(29, 'Edi Niyaga Mustofa S.Farm', 'Bandung', 'UD Fujiati Melani', '22', '828', '(+62) 25 9252 827', NULL, NULL),
(30, 'Alika Dinda Prastuti', 'Sibolga', 'UD Susanti Tbk', '2', '146', '(+62) 478 2328 258', NULL, NULL),
(31, 'Lala Farida M.Pd', 'Banjar', 'PD Oktaviani', '14', '793', '(+62) 860 2533 498', NULL, NULL),
(32, 'Daliman Ibun Napitupulu', 'Kendari', 'PD Hidayat Wulandari', '13', '543', '(+62) 26 7798 5056', NULL, NULL),
(33, 'Kenes Prabowo', 'Yogyakarta', 'UD Rajata Wibisono', '20', '28', '(+62) 527 0778 449', NULL, NULL),
(34, 'Prabawa Yono Habibi', 'Pekanbaru', 'PD Sinaga', '7', '621', '(+62) 280 0094 104', NULL, NULL),
(35, 'Tami Wijayanti', 'Parepare', 'Perum Astuti Tbk', '9', '865', '0797 9030 3317', NULL, NULL),
(36, 'Taufan Firmansyah', 'Padangpanjang', 'Perum Mulyani Usamah', '4', '398', '0736 3507 366', NULL, NULL),
(37, 'Rahmi Usada', 'Surabaya', 'Perum Hakim', '2', '748', '(+62) 715 1721 8162', NULL, NULL),
(38, 'Endah Tiara Hariyah', 'Gunungsitoli', 'Perum Setiawan Tbk', '5', '358', '0813 8250 474', NULL, NULL),
(39, 'Warsa Natsir', 'Bima', 'PD Melani Farida', '18', '873', '(+62) 902 1952 8534', NULL, NULL),
(40, 'Endra Irawan', 'Surakarta', 'UD Prayoga Usamah (Persero) Tbk', '10', '150', '021 4015 063', NULL, NULL),
(41, 'Yessi Puspita', 'Administrasi Jakarta Barat', 'Perum Prasasta Siregar', '7', '18', '0907 5051 3049', NULL, NULL),
(42, 'Raden Januar', 'Tebing Tinggi', 'UD Kusmawati Tbk', '4', '769', '(+62) 657 2911 4211', NULL, NULL),
(43, 'Ina Suartini', 'Pariaman', 'PD Sudiati', '4', '775', '(+62) 399 3341 667', NULL, NULL),
(44, 'Paiman Nainggolan', 'Samarinda', 'CV Sudiati', '21', '279', '0867 6836 400', NULL, NULL),
(45, 'Karja Purwadi Marbun S.Pd', 'Ambon', 'Perum Haryanti Prastuti', '16', '926', '0880 169 065', NULL, NULL),
(46, 'Salsabila Andriani S.H.', 'Langsa', 'CV Agustina Tbk', '17', '662', '(+62) 669 7917 9403', NULL, NULL),
(47, 'Ika Kuswandari', 'Ambon', 'Perum Usada', '25', '731', '0897 7307 400', NULL, NULL),
(48, 'Karta Sihotang S.I.Kom', 'Palangka Raya', 'Perum Pratama', '9', '123', '0743 9007 2252', NULL, NULL),
(49, 'Hana Yance Palastri', 'Binjai', 'UD Setiawan Najmudin', '5', '989', '(+62) 907 3778 806', NULL, NULL),
(50, 'Ade Suartini', 'Surakarta', 'CV Prasetyo Nuraini', '5', '940', '0832 994 140', NULL, NULL),
(51, 'Genta Hani Novitasari S.Pd', 'Pagar Alam', 'PD Wulandari (Persero) Tbk', '11', '707', '(+62) 739 2599 630', NULL, NULL),
(52, 'Faathir Muhammad', 'Golongan Karya', 'Nusantara Dua', '13', '1318', '456464645646', '2019-07-07 03:47:08', '2019-07-07 03:47:08'),
(53, 'Faathir Muhammad', 'Golongan Karya', 'Nusantara Dua', '13', '1318', '456464645646', '2019-07-07 03:47:37', '2019-07-07 03:47:37');

-- --------------------------------------------------------

--
-- Table structure for table `persediaan_barangs`
--

CREATE TABLE `persediaan_barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_spk` date NOT NULL,
  `nomor_spk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_barang_masuk` date NOT NULL,
  `jumlah_barang_masuk` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persediaan_barangs`
--

INSERT INTO `persediaan_barangs` (`id`, `nama_barang`, `satuan`, `tanggal_spk`, `nomor_spk`, `tanggal_barang_masuk`, `jumlah_barang_masuk`, `created_at`, `updated_at`) VALUES
(1, 'est', 'sm', '2013-11-16', '2791', '1992-05-17', 6, NULL, NULL),
(2, 'porro', 'sldx', '1991-03-27', '8251', '1990-03-22', 4, NULL, NULL),
(3, 'sit', 'umj', '1971-05-17', '1847', '2005-12-25', 36, NULL, NULL),
(4, 'et', 'fig', '2012-01-17', '1343', '1988-01-09', 97, NULL, NULL),
(5, 'odio', 'sse', '2008-02-14', '8605', '2006-05-05', 89, NULL, NULL),
(6, 'in', 'cfs', '1980-04-20', '3146', '1991-01-08', 6, NULL, NULL),
(7, 'rerum', 'svc', '1978-09-17', '9966', '2009-02-02', 32, NULL, NULL),
(8, 'quo', 'odb', '1977-09-03', '2903', '1999-01-30', 71, NULL, NULL),
(9, 'qui', 'vsf', '2002-01-02', '4455', '1999-06-13', 39, NULL, NULL),
(10, 'provident', 'vss', '1984-03-06', '3965', '1995-09-04', 70, NULL, NULL),
(11, 'esse', 'rm', '1971-11-23', '1129', '1983-10-03', 65, NULL, NULL),
(12, 'enim', 'sldx', '1975-07-12', '3532', '1989-06-20', 68, NULL, NULL),
(13, 'nostrum', 'esf', '1977-12-31', '9436', '1972-12-01', 16, NULL, NULL),
(14, 'autem', 'ahead', '1998-08-20', '8909', '1971-01-16', 60, NULL, NULL),
(15, 'facere', 'npx', '2018-05-17', '7914', '1982-12-19', 94, NULL, NULL),
(16, 'voluptatibus', 'dart', '2013-08-15', '6536', '1988-07-07', 68, NULL, NULL),
(17, 'quaerat', 'xdm', '2002-01-06', '5318', '1996-02-03', 54, NULL, NULL),
(18, 'qui', '3g2', '1994-08-07', '5420', '2019-03-29', 24, NULL, NULL),
(19, 'maiores', 'sm', '2001-10-27', '2795', '1982-06-16', 10, NULL, NULL),
(20, 'et', 'p', '2009-12-11', '5770', '1988-03-10', 18, NULL, NULL),
(21, 'aut', 'utz', '2005-10-08', '2350', '1994-04-22', 47, NULL, NULL),
(22, 'nam', 'z1', '2007-02-21', '3292', '2018-08-25', 74, NULL, NULL),
(23, 'rerum', 'mpy', '2014-11-30', '7838', '1989-02-17', 79, NULL, NULL),
(24, 'quia', 'aac', '1977-11-12', '2978', '2015-02-16', 29, NULL, NULL),
(25, 'labore', 'bat', '1970-11-13', '5668', '2013-07-01', 47, NULL, NULL),
(26, 'porro', 'ivp', '2012-03-15', '5608', '2005-05-17', 87, NULL, NULL),
(27, 'qui', 'prc', '2017-04-14', '5861', '1981-01-03', 36, NULL, NULL),
(28, 'voluptatem', 'tpt', '1989-08-15', '2429', '1982-03-14', 5, NULL, NULL),
(29, 'veniam', 'ulx', '1996-09-27', '5887', '1994-11-06', 81, NULL, NULL),
(30, 'harum', 'vcf', '1980-02-24', '7394', '1998-05-18', 44, NULL, NULL),
(31, 'quam', 'sxg', '2017-08-30', '2239', '1979-01-27', 54, NULL, NULL),
(32, 'sapiente', 'dxf', '2002-01-26', '2982', '1976-04-08', 44, NULL, NULL),
(33, 'minima', 'chat', '1989-01-29', '9049', '1982-05-03', 24, NULL, NULL),
(34, 'est', 'wmlsc', '1995-03-11', '3982', '2003-02-13', 62, NULL, NULL),
(35, 'aut', 'atom', '1991-07-11', '4344', '1970-04-28', 20, NULL, NULL),
(36, 'optio', 'gca', '1970-01-05', '9408', '2010-02-13', 21, NULL, NULL),
(37, 'consectetur', 'dot', '2012-01-23', '2569', '1993-06-27', 66, NULL, NULL),
(38, 'voluptas', 'semf', '2007-02-22', '2595', '1999-02-07', 40, NULL, NULL),
(39, 'ea', 'pfb', '2006-02-15', '6719', '1977-10-17', 51, NULL, NULL),
(40, 'voluptatem', 'woff', '1975-03-18', '1530', '2018-10-16', 77, NULL, NULL),
(41, 'necessitatibus', 'vcard', '1983-01-06', '6447', '1978-12-01', 75, NULL, NULL),
(42, 'dolores', 'kpt', '1974-01-24', '4006', '2002-09-28', 24, NULL, NULL),
(43, 'architecto', 'tif', '2003-09-28', '7812', '2018-11-06', 6, NULL, NULL),
(44, 'ex', 'xps', '1996-01-29', '6497', '2004-06-05', 11, NULL, NULL),
(45, 'non', 'dsc', '1981-08-29', '4948', '1998-10-13', 88, NULL, NULL),
(46, 'sed', 'aac', '1983-04-03', '3459', '1998-06-21', 2, NULL, NULL),
(47, 'sed', 'epub', '2008-04-26', '1984', '1983-07-04', 39, NULL, NULL),
(48, 'a', 'rmp', '2006-05-15', '9936', '1984-06-07', 22, NULL, NULL),
(49, 'animi', 'msf', '1973-03-17', '9541', '1973-10-20', 4, NULL, NULL),
(50, 'natus', 'ims', '1971-01-29', '1515', '2003-12-18', 19, NULL, NULL),
(51, 'omnis', 'xbm', '2016-07-24', '1898', '1995-07-16', 82, NULL, NULL),
(52, 'Kertas', 'rim', '2019-10-05', '984324029809', '2018-12-23', 15, '2019-07-08 18:20:15', '2019-07-08 18:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spesialisasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `nama`, `phone`, `spesialisasi`, `created_at`, `updated_at`) VALUES
(1, 'Chelsea Hassanah S.Pd', '022 8677 0752', 'repellendus', NULL, NULL),
(2, 'Raisa Nurdiyanti', '(+62) 554 0777 9415', 'est', NULL, NULL),
(3, 'Indah Wahyuni', '0671 5903 3893', 'aut', NULL, NULL),
(4, 'Puspa Astuti', '0345 7791 700', 'voluptatem', NULL, NULL),
(5, 'Anita Unjani Yuniar', '(+62) 525 9113 3073', 'omnis', NULL, NULL),
(6, 'Chelsea Zahra Palastri', '(+62) 989 7715 9938', 'et', NULL, NULL),
(7, 'Muhammad Budiman', '027 7200 844', 'sequi', NULL, NULL),
(8, 'Zulaikha Maryati', '(+62) 797 6996 0257', 'eligendi', NULL, NULL),
(9, 'Ana Pudjiastuti', '0523 2670 1889', 'quia', NULL, NULL),
(10, 'Nova Novi Aryani', '(+62) 499 8494 5833', 'id', NULL, NULL),
(11, 'Darijan Dartono Natsir', '(+62) 528 1628 8769', 'est', NULL, NULL),
(12, 'Prayogo Gara Hardiansyah S.Pd', '(+62) 842 4828 454', 'sint', NULL, NULL),
(13, 'Himawan Damanik', '(+62) 929 5765 3463', 'facilis', NULL, NULL),
(14, 'Slamet Adriansyah', '(+62) 972 3644 524', 'enim', NULL, NULL),
(15, 'Azalea Siti Puspasari S.Pt', '0275 3540 2782', 'et', NULL, NULL),
(16, 'Darman Rajata', '(+62) 873 6999 1163', 'error', NULL, NULL),
(17, 'Suci Gabriella Widiastuti S.Ked', '(+62) 908 4517 111', 'qui', NULL, NULL),
(18, 'Eka Melani S.Psi', '(+62) 310 0421 217', 'quo', NULL, NULL),
(19, 'Ulva Maya Nasyiah S.Sos', '(+62) 683 3022 3022', 'eos', NULL, NULL),
(20, 'Rusman Maulana', '0551 9168 3488', 'eligendi', NULL, NULL),
(21, 'Johan Rajata', '(+62) 24 7523 5063', 'quas', NULL, NULL),
(22, 'Oman Prasetyo M.Farm', '029 2772 7638', 'doloribus', NULL, NULL),
(23, 'Kani Halimah', '0372 3697 3783', 'sed', NULL, NULL),
(24, 'Asirwada Irawan', '(+62) 781 6237 111', 'praesentium', NULL, NULL),
(25, 'Cinta Zelda Andriani M.Kom.', '0676 6652 737', 'eveniet', NULL, NULL),
(26, 'Cahyo Situmorang', '0344 7928 035', 'ut', NULL, NULL),
(27, 'Ade Nova Pratiwi S.Gz', '0458 6176 291', 'quis', NULL, NULL),
(28, 'Dewi Handayani', '0846 0727 4697', 'aut', NULL, NULL),
(29, 'Darimin Prasetyo', '(+62) 441 3225 392', 'earum', NULL, NULL),
(30, 'Kartika Kamila Zulaika M.Ak', '0215 6312 2457', 'libero', NULL, NULL),
(31, 'Reksa Wawan Prayoga S.E.', '(+62) 712 9496 9167', 'consequatur', NULL, NULL),
(32, 'Harjaya Hidayat', '0379 7758 253', 'laborum', NULL, NULL),
(33, 'Widya Yolanda', '0834 4091 738', 'rerum', NULL, NULL),
(34, 'Prima Marpaung S.I.Kom', '0868 671 126', 'doloribus', NULL, NULL),
(35, 'Wadi Prasasta', '0309 7587 6785', 'assumenda', NULL, NULL),
(36, 'Emas Jailani', '0441 2350 628', 'eos', NULL, NULL),
(37, 'Titi Anggraini', '(+62) 752 6767 8559', 'hic', NULL, NULL),
(38, 'Nilam Laksita', '0766 6148 8103', 'et', NULL, NULL),
(39, 'Gading Wibowo', '0523 7878 7091', 'animi', NULL, NULL),
(40, 'Zalindra Purwanti M.M.', '(+62) 762 1147 4583', 'corrupti', NULL, NULL),
(41, 'Edi Tugiman Widodo M.Farm', '0491 0849 6561', 'voluptas', NULL, NULL),
(42, 'Humaira Oktaviani', '0403 8215 663', 'eum', NULL, NULL),
(43, 'Laras Fitria Nasyidah', '(+62) 634 9478 461', 'quam', NULL, NULL),
(44, 'Anita Rahmawati S.H.', '(+62) 854 7368 640', 'consequatur', NULL, NULL),
(45, 'Unjani Widiastuti', '0352 7989 2716', 'aut', NULL, NULL),
(46, 'Taufan Marsudi Manullang S.T.', '(+62) 219 2072 2606', 'eveniet', NULL, NULL),
(47, 'Bagas Sirait', '025 6618 2316', 'ducimus', NULL, NULL),
(48, 'Lurhur Irawan', '(+62) 594 3806 0796', 'quo', NULL, NULL),
(49, 'Sabri Megantara M.Pd', '(+62) 713 3391 401', 'commodi', NULL, NULL),
(50, 'Danuja Irawan', '0342 0219 4098', 'et', NULL, NULL),
(51, 'Galih Jarwadi Hutagalung M.M.', '(+62) 802 7151 577', 'nulla', NULL, NULL),
(52, 'Faathir Muhammad', '089674903698', 'IT', '2019-07-08 00:14:13', '2019-07-08 00:14:13'),
(53, 'Jono', '123456789', 'Jaringan', '2019-07-08 18:00:04', '2019-07-08 18:00:04'),
(54, 'Alfred', '777788889999', 'ERP', '2019-07-08 18:12:44', '2019-07-08 18:12:44');

-- --------------------------------------------------------

--
-- Table structure for table `siaps`
--

CREATE TABLE `siaps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fraksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gedung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lantai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siaps`
--

INSERT INTO `siaps` (`id`, `nama`, `fraksi`, `gedung`, `lantai`, `ruang`, `telp`, `created_at`, `updated_at`) VALUES
(1, 'Taufan Jais Irawan M.M.', 'Banda Aceh', 'UD Novitasari Tbk', '6', '939', '(+62) 911 6518 107', NULL, NULL),
(2, 'Gambira Darijan Pranowo S.Kom', 'Administrasi Jakarta Timur', 'Perum Ardianto', '10', '601', '(+62) 598 4342 114', NULL, NULL),
(3, 'Gilda Purnawati', 'Gorontalo', 'Perum Pratiwi', '11', '938', '0371 7432 8487', NULL, NULL),
(4, 'Praba Salahudin', 'Sawahlunto', 'CV Gunarto Irawan', '25', '623', '(+62) 302 5772 205', NULL, NULL),
(5, 'Ghani Saragih', 'Bau-Bau', 'Perum Widodo Samosir (Persero) Tbk', '19', '432', '(+62) 429 8126 098', NULL, NULL),
(6, 'Yance Ghaliyati Mandasari S.Kom', 'Madiun', 'PT Rahimah Padmasari (Persero) Tbk', '10', '439', '(+62) 630 9125 5396', NULL, NULL),
(7, 'Yunita Hastuti M.Farm', 'Tual', 'CV Sihombing (Persero) Tbk', '1', '852', '0483 4318 926', NULL, NULL),
(8, 'Puput Yuliarti', 'Tomohon', 'PT Puspasari (Persero) Tbk', '11', '760', '023 9362 895', NULL, NULL),
(9, 'Hasna Mandasari', 'Padang', 'PT Widodo Rajata', '24', '537', '0856 902 706', NULL, NULL),
(10, 'Argono Widodo S.Ked', 'Tidore Kepulauan', 'PT Yulianti Tbk', '5', '292', '(+62) 27 8295 850', NULL, NULL),
(11, 'Clara Nurdiyanti', 'Bau-Bau', 'CV Sinaga', '17', '948', '0447 6647 3699', NULL, NULL),
(12, 'Paiman Pradipta', 'Ambon', 'CV Halimah (Persero) Tbk', '16', '749', '0855 8611 407', NULL, NULL),
(13, 'Eluh Cengkir Prayoga M.Farm', 'Administrasi Jakarta Barat', 'UD Mandala Prakasa', '9', '101', '(+62) 790 6242 2456', NULL, NULL),
(14, 'Michelle Yolanda', 'Dumai', 'UD Haryanto', '3', '930', '(+62) 552 6346 827', NULL, NULL),
(15, 'Jagapati Tampubolon', 'Balikpapan', 'CV Puspita Nasyiah (Persero) Tbk', '7', '545', '0630 3762 407', NULL, NULL),
(16, 'Dimaz Kadir Prasetyo', 'Sawahlunto', 'Perum Astuti Tbk', '6', '704', '0282 0174 622', NULL, NULL),
(17, 'Cindy Amelia Riyanti', 'Salatiga', 'PD Susanti Tbk', '14', '990', '(+62) 756 5228 7350', NULL, NULL),
(18, 'Bahuraksa Putra', 'Serang', 'UD Widodo Kuswoyo Tbk', '6', '594', '0675 5996 6469', NULL, NULL),
(19, 'Makuta Mandala', 'Magelang', 'PT Budiyanto', '22', '969', '(+62) 643 1480 4944', NULL, NULL),
(20, 'Gawati Halimah', 'Tebing Tinggi', 'Perum Rahayu', '10', '895', '0250 4579 6725', NULL, NULL),
(21, 'Sari Wulandari', 'Batam', 'Perum Gunawan Tbk', '3', '524', '0739 4265 935', NULL, NULL),
(22, 'Queen Cinta Usamah S.Kom', 'Bandung', 'PT Halimah Hakim', '16', '446', '(+62) 865 171 800', NULL, NULL),
(23, 'Carla Puspita', 'Balikpapan', 'PD Maryati Tbk', '25', '478', '0416 1883 6612', NULL, NULL),
(24, 'Putri Namaga S.Pt', 'Pangkal Pinang', 'PD Sihombing Purwanti', '18', '919', '(+62) 417 9058 0145', NULL, NULL),
(25, 'Bahuwarna Prasasta', 'Kendari', 'Perum Latupono Prasasta', '7', '279', '0646 3506 0189', NULL, NULL),
(26, 'Ajiman Tri Samosir', 'Dumai', 'UD Gunawan', '12', '484', '(+62) 539 5847 9966', NULL, NULL),
(27, 'Widya Nadia Pratiwi S.I.Kom', 'Makassar', 'PD Wahyudin Mayasari', '10', '240', '0958 5978 3764', NULL, NULL),
(28, 'Uda Kenari Budiman S.Gz', 'Singkawang', 'UD Yuliarti Halim', '19', '752', '027 6505 8352', NULL, NULL),
(29, 'Gilang Kenzie Saputra', 'Banjar', 'Perum Wahyuni Sihombing Tbk', '5', '156', '(+62) 795 8751 354', NULL, NULL),
(30, 'Kasiyah Suryatmi S.Psi', 'Makassar', 'PD Haryanti Lestari Tbk', '8', '167', '(+62) 999 3007 4222', NULL, NULL),
(31, 'Gabriella Kusmawati', 'Solok', 'UD Kuswandari', '17', '447', '(+62) 520 6630 0391', NULL, NULL),
(32, 'Wulan Permata S.E.I', 'Serang', 'Perum Widiastuti Prastuti (Persero) Tbk', '16', '976', '028 2327 7450', NULL, NULL),
(33, 'Praba Prasetyo', 'Gorontalo', 'UD Suryono', '22', '443', '(+62) 851 2978 817', NULL, NULL),
(34, 'Jane Novitasari S.Gz', 'Manado', 'PD Wahyuni (Persero) Tbk', '5', '932', '(+62) 696 4671 623', NULL, NULL),
(35, 'Rachel Mardhiyah', 'Banjar', 'UD Prastuti Agustina Tbk', '3', '26', '0536 1758 484', NULL, NULL),
(36, 'Sarah Yuliarti M.TI.', 'Tasikmalaya', 'CV Nugroho (Persero) Tbk', '4', '616', '026 8091 0412', NULL, NULL),
(37, 'Unjani Septi Pudjiastuti', 'Palangka Raya', 'Perum Prayoga Firgantoro (Persero) Tbk', '3', '787', '025 8905 455', NULL, NULL),
(38, 'Gamanto Nasrullah Sitompul M.Kom.', 'Subulussalam', 'Perum Prastuti Mandala (Persero) Tbk', '5', '195', '(+62) 895 1803 881', NULL, NULL),
(39, 'Nasim Empluk Haryanto', 'Denpasar', 'PD Astuti', '21', '882', '0557 0025 580', NULL, NULL),
(40, 'Gada Hakim S.E.I', 'Jayapura', 'PD Wulandari', '12', '747', '(+62) 753 7301 0984', NULL, NULL),
(41, 'Usyi Halimah', 'Solok', 'PT Kuswandari Wulandari Tbk', '23', '632', '024 3955 601', NULL, NULL),
(42, 'Carla Ade Hariyah M.Ak', 'Bekasi', 'Perum Utami (Persero) Tbk', '5', '203', '(+62) 964 3425 7550', NULL, NULL),
(43, 'Prayoga Lazuardi', 'Sabang', 'PD Maryati Wijayanti (Persero) Tbk', '7', '873', '(+62) 733 8087 4420', NULL, NULL),
(44, 'Oliva Fujiati', 'Tasikmalaya', 'PT Januar Safitri', '19', '586', '(+62) 656 3497 9938', NULL, NULL),
(45, 'Harjo Nababan S.IP', 'Solok', 'CV Permadi', '1', '435', '(+62) 27 1548 5898', NULL, NULL),
(46, 'Hafshah Riyanti', 'Banda Aceh', 'UD Permata', '11', '775', '(+62) 612 9549 604', NULL, NULL),
(47, 'Hendri Santoso', 'Medan', 'UD Haryanti', '24', '697', '(+62) 984 8718 349', NULL, NULL),
(48, 'Gawati Prastuti', 'Balikpapan', 'CV Palastri Tbk', '2', '531', '(+62) 683 7533 718', NULL, NULL),
(49, 'Nrima Gunarto', 'Parepare', 'PT Maulana (Persero) Tbk', '21', '107', '(+62) 871 199 081', NULL, NULL),
(50, 'Uda Permadi S.Gz', 'Cimahi', 'CV Anggraini Mahendra', '8', '94', '0437 7152 0259', NULL, NULL),
(51, 'Sari Anggraini', 'Pangkal Pinang', 'PD Mandala Tbk', '23', '308', '0325 8455 594', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sigotas`
--

CREATE TABLE `sigotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fraksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gedung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lantai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sigotas`
--

INSERT INTO `sigotas` (`id`, `nama`, `fraksi`, `gedung`, `lantai`, `ruang`, `telp`, `created_at`, `updated_at`) VALUES
(1, 'Hana Haryanti', 'Binjai', 'CV Nurdiyanti (Persero) Tbk', '24', '456', '(+62) 745 2309 7968', NULL, NULL),
(2, 'Tantri Namaga', 'Kotamobagu', 'PT Mandasari Tbk', '20', '745', '0805 2030 396', NULL, NULL),
(3, 'Lintang Vanya Suryatmi', 'Balikpapan', 'UD Santoso Tbk', '1', '398', '0777 6412 298', NULL, NULL),
(4, 'Harjasa Iswahyudi', 'Tanjung Pinang', 'PD Permata', '24', '590', '(+62) 491 5733 563', NULL, NULL),
(5, 'Mila Usada', 'Bontang', 'PD Natsir Maryati', '4', '60', '0572 5915 8738', NULL, NULL),
(6, 'Mutia Riyanti', 'Bandung', 'Perum Riyanti', '12', '880', '0830 2691 579', NULL, NULL),
(7, 'Fitriani Aurora Lestari', 'Manado', 'UD Kusumo Zulaika', '12', '773', '0955 2596 4757', NULL, NULL),
(8, 'Johan Sihombing', 'Pariaman', 'PT Suwarno Kuswandari Tbk', '19', '378', '0717 4659 1652', NULL, NULL),
(9, 'Kawaca Soleh Gunarto S.Sos', 'Prabumulih', 'Perum Jailani Lazuardi', '11', '251', '(+62) 388 6421 417', NULL, NULL),
(10, 'Gangsar Maryanto Nababan S.T.', 'Surabaya', 'CV Hakim Zulaika', '7', '120', '0952 7285 5779', NULL, NULL),
(11, 'Dipa Mursita Dabukke', 'Malang', 'PT Fujiati Susanti (Persero) Tbk', '6', '224', '(+62) 282 5774 2464', NULL, NULL),
(12, 'Jelita Almira Riyanti', 'Pekalongan', 'CV Prasasta Rahmawati Tbk', '18', '862', '(+62) 454 8614 827', NULL, NULL),
(13, 'Umar Iswahyudi', 'Magelang', 'CV Agustina (Persero) Tbk', '14', '797', '(+62) 834 6730 4438', NULL, NULL),
(14, 'Imam Narji Nashiruddin', 'Balikpapan', 'CV Prakasa (Persero) Tbk', '3', '505', '(+62) 672 0319 5602', NULL, NULL),
(15, 'Ratna Rahmawati', 'Dumai', 'CV Agustina', '10', '53', '(+62) 234 6361 137', NULL, NULL),
(16, 'Clara Hafshah Riyanti', 'Bengkulu', 'PD Suwarno Wahyudin', '13', '496', '(+62) 26 2792 470', NULL, NULL),
(17, 'Baktianto Saptono', 'Medan', 'PT Suryatmi Utami', '8', '259', '0811 4768 9088', NULL, NULL),
(18, 'Galak Prakasa', 'Lhokseumawe', 'Perum Safitri Prasetya', '15', '864', '0240 5438 568', NULL, NULL),
(19, 'Tina Betania Suartini', 'Bontang', 'UD Astuti Mahendra (Persero) Tbk', '8', '562', '(+62) 303 8659 2253', NULL, NULL),
(20, 'Banawi Pradipta S.Gz', 'Administrasi Jakarta Barat', 'UD Narpati Lazuardi', '23', '510', '0924 3579 1223', NULL, NULL),
(21, 'Tari Sadina Astuti S.H.', 'Palembang', 'CV Laksita', '10', '689', '0582 2833 774', NULL, NULL),
(22, 'Sakura Rahimah S.I.Kom', 'Palembang', 'UD Wahyuni Wibisono Tbk', '15', '206', '0866 034 690', NULL, NULL),
(23, 'Panca Haryanto', 'Solok', 'PT Tamba', '21', '905', '0870 000 850', NULL, NULL),
(24, 'Intan Halimah', 'Bekasi', 'UD Permadi Tbk', '12', '739', '0270 3943 1436', NULL, NULL),
(25, 'Clara Halima Pratiwi', 'Banjarmasin', 'PT Halimah Hastuti (Persero) Tbk', '13', '548', '0812 799 849', NULL, NULL),
(26, 'Titi Hastuti', 'Palopo', 'CV Megantara (Persero) Tbk', '18', '445', '0313 2357 277', NULL, NULL),
(27, 'Betania Siska Yolanda', 'Padangpanjang', 'UD Suwarno (Persero) Tbk', '16', '900', '0553 6562 5753', NULL, NULL),
(28, 'Yuni Mardhiyah', 'Semarang', 'CV Maryati', '22', '860', '0589 7992 356', NULL, NULL),
(29, 'Bakiadi Saefullah', 'Padangsidempuan', 'PD Mayasari (Persero) Tbk', '14', '933', '024 2328 0491', NULL, NULL),
(30, 'Eka Sihombing', 'Sabang', 'CV Yuliarti Situmorang', '2', '285', '(+62) 841 469 218', NULL, NULL),
(31, 'Irma Yuliarti S.IP', 'Pasuruan', 'PD Firgantoro Tbk', '20', '301', '0404 8461 522', NULL, NULL),
(32, 'Argono Prasetyo S.H.', 'Tegal', 'Perum Nasyiah Hidayanto (Persero) Tbk', '7', '28', '029 8851 3203', NULL, NULL),
(33, 'Cakrabuana Vero Tamba S.I.Kom', 'Makassar', 'UD Permadi', '8', '360', '0530 7019 7510', NULL, NULL),
(34, 'Tedi Carub Pranowo', 'Gunungsitoli', 'UD Anggraini Tbk', '2', '737', '021 4880 719', NULL, NULL),
(35, 'Mulyanto Karja Wibisono', 'Pariaman', 'Perum Wasita Hasanah (Persero) Tbk', '15', '98', '(+62) 26 3343 280', NULL, NULL),
(36, 'Vivi Permata', 'Mataram', 'UD Tampubolon (Persero) Tbk', '23', '688', '0367 5885 863', NULL, NULL),
(37, 'Zulfa Pertiwi', 'Sawahlunto', 'PT Marbun Tbk', '5', '451', '(+62) 512 3760 6447', NULL, NULL),
(38, 'Koko Eja Jailani', 'Bontang', 'CV Widodo Uwais (Persero) Tbk', '16', '70', '0679 0261 479', NULL, NULL),
(39, 'Zamira Silvia Farida S.I.Kom', 'Malang', 'Perum Yuliarti Permata', '23', '912', '(+62) 964 0653 0187', NULL, NULL),
(40, 'Siska Hastuti', 'Ambon', 'PD Megantara Hartati', '17', '351', '0844 391 478', NULL, NULL),
(41, 'Julia Farah Zulaika', 'Yogyakarta', 'CV Saputra Haryanti Tbk', '15', '850', '(+62) 890 3367 3211', NULL, NULL),
(42, 'Oskar Situmorang', 'Palembang', 'Perum Nasyidah Situmorang', '17', '281', '0682 9103 3202', NULL, NULL),
(43, 'Paiman Gunarto', 'Jambi', 'CV Siregar Prasetya', '20', '77', '(+62) 611 8825 2275', NULL, NULL),
(44, 'Jindra Samosir S.E.', 'Cirebon', 'CV Hartati Sirait', '15', '971', '0943 2528 4465', NULL, NULL),
(45, 'Jinawi Bambang Prasetya', 'Sibolga', 'PD Kuswoyo Sitompul', '20', '711', '0968 8366 8053', NULL, NULL),
(46, 'Jasmin Nuraini S.Farm', 'Sibolga', 'PT Nurdiyanti Simbolon', '7', '9', '0304 2378 8718', NULL, NULL),
(47, 'Nilam Astuti', 'Pematangsiantar', 'PD Prayoga Purwanti Tbk', '18', '182', '(+62) 580 3911 806', NULL, NULL),
(48, 'Sadina Wastuti', 'Magelang', 'UD Lazuardi (Persero) Tbk', '6', '483', '0251 5046 725', NULL, NULL),
(49, 'Oni Halimah', 'Pekanbaru', 'PT Mansur Tbk', '14', '9', '0962 5164 098', NULL, NULL),
(50, 'Puji Utami S.I.Kom', 'Serang', 'PD Purnawati (Persero) Tbk', '15', '419', '(+62) 238 9639 355', NULL, NULL),
(51, 'Putu Harjasa Pranowo', 'Kediri', 'PT Kusumo Napitupulu', '9', '358', '0826 624 656', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status_kasuses`
--

CREATE TABLE `status_kasuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_kasuses`
--

INSERT INTO `status_kasuses` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Open', NULL, NULL),
(2, 'Pending', NULL, NULL),
(3, 'On Hold', NULL, NULL),
(4, 'Closed', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tikets`
--

CREATE TABLE `tikets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_nota_dinas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenispelapor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelapor` bigint(20) UNSIGNED NOT NULL,
  `phone_pelapor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_pelapor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permasalahan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `kasus` bigint(20) UNSIGNED NOT NULL,
  `barang` bigint(20) UNSIGNED DEFAULT NULL,
  `jumlah` bigint(20) DEFAULT NULL,
  `petugases` bigint(20) UNSIGNED NOT NULL,
  `status` bigint(20) UNSIGNED NOT NULL,
  `jenis` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tikets`
--

INSERT INTO `tikets` (`id`, `nomor`, `nomor_nota_dinas`, `jenispelapor`, `pelapor`, `phone_pelapor`, `email_pelapor`, `permasalahan`, `kasus`, `barang`, `jumlah`, `petugases`, `status`, `jenis`, `created_at`, `updated_at`) VALUES
(1, '6172019', NULL, 'Pegawai', 1, '+6289674903698', 'faathir.muhammad@gmail.com', '<p>test number one</p>', 2, NULL, 0, 9, 1, 2, '2019-07-07 02:26:24', '2019-07-07 02:26:24'),
(7, '8912019', 'dfsdffwerwr', 'Anggota', 4, '+6289674903698', 'faathir.muhammad@gmail.com', '<p>test number four</p>', 1, 49, 50, 44, 2, 1, '2019-07-07 03:37:26', '2019-07-07 03:37:26'),
(8, '9632019', NULL, 'Lain-lain', 53, '+6289674903698', 'faathir.muhammad@gmail.com', '<p>Test number five</p>', 2, NULL, NULL, 14, 4, 2, '2019-07-07 03:47:37', '2019-07-07 05:35:51'),
(9, '72019', NULL, 'Pegawai', 20, '324234324234', 'faathir.muhammad@gmail.com', '<h3>Hello World</h3>\r\n<p>this is a test posts</p>\r\n<table style=\"width: 100%; border-collapse: collapse;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 20%;\">this</td>\r\n<td style=\"width: 20%;\">is&nbsp;</td>\r\n<td style=\"width: 20%;\">just</td>\r\n<td style=\"width: 20%;\">a</td>\r\n<td style=\"width: 20%;\">test</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 20%;\">&nbsp;</td>\r\n<td style=\"width: 20%;\">&nbsp;</td>\r\n<td style=\"width: 20%;\">&nbsp;</td>\r\n<td style=\"width: 20%;\">&nbsp;</td>\r\n<td style=\"width: 20%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 20%;\">&nbsp;</td>\r\n<td style=\"width: 20%;\">&nbsp;</td>\r\n<td style=\"width: 20%;\">&nbsp;</td>\r\n<td style=\"width: 20%;\">&nbsp;</td>\r\n<td style=\"width: 20%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 20%;\">&nbsp;</td>\r\n<td style=\"width: 20%;\">&nbsp;</td>\r\n<td style=\"width: 20%;\">&nbsp;</td>\r\n<td style=\"width: 20%;\">&nbsp;</td>\r\n<td style=\"width: 20%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 20%;\">&nbsp;</td>\r\n<td style=\"width: 20%;\">&nbsp;</td>\r\n<td style=\"width: 20%;\">&nbsp;</td>\r\n<td style=\"width: 20%;\">&nbsp;</td>\r\n<td style=\"width: 20%;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>', 5, NULL, NULL, 44, 1, 3, '2019-07-07 06:11:20', '2019-07-07 06:11:20'),
(10, '1002019', NULL, 'Pegawai', 4, '+6289674903698', 'faathir.muhammad@gmail.com', '<table style=\"width: 100%; border-collapse: collapse; border-style: solid;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 11.1111%;\">test</td>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n<td style=\"width: 11.1111%;\">&nbsp;</td>\r\n<td style=\"width: 11.1111%;\">test</td>\r\n</tr>\r\n</tbody>\r\n</table>', 6, NULL, NULL, 44, 2, 2, '2019-07-07 06:15:55', '2019-07-07 06:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_kasuses`
--
ALTER TABLE `daftar_kasuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_tikets`
--
ALTER TABLE `jenis_tikets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelaporlains`
--
ALTER TABLE `pelaporlains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persediaan_barangs`
--
ALTER TABLE `persediaan_barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siaps`
--
ALTER TABLE `siaps`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siaps_id_unique` (`id`);

--
-- Indexes for table `sigotas`
--
ALTER TABLE `sigotas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sigotas_id_unique` (`id`);

--
-- Indexes for table `status_kasuses`
--
ALTER TABLE `status_kasuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tikets`
--
ALTER TABLE `tikets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tikets_pelapor_foreign` (`pelapor`),
  ADD KEY `tikets_kasus_foreign` (`kasus`),
  ADD KEY `tikets_barang_foreign` (`barang`),
  ADD KEY `tikets_petugas_foreign` (`petugases`),
  ADD KEY `tikets_status_foreign` (`status`),
  ADD KEY `tikets_jenis_foreign` (`jenis`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_kasuses`
--
ALTER TABLE `daftar_kasuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jenis_tikets`
--
ALTER TABLE `jenis_tikets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pelaporlains`
--
ALTER TABLE `pelaporlains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `persediaan_barangs`
--
ALTER TABLE `persediaan_barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `siaps`
--
ALTER TABLE `siaps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `sigotas`
--
ALTER TABLE `sigotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `status_kasuses`
--
ALTER TABLE `status_kasuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tikets`
--
ALTER TABLE `tikets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tikets`
--
ALTER TABLE `tikets`
  ADD CONSTRAINT `tikets_barang_foreign` FOREIGN KEY (`barang`) REFERENCES `persediaan_barangs` (`id`),
  ADD CONSTRAINT `tikets_jenis_foreign` FOREIGN KEY (`jenis`) REFERENCES `jenis_tikets` (`id`),
  ADD CONSTRAINT `tikets_kasus_foreign` FOREIGN KEY (`kasus`) REFERENCES `daftar_kasuses` (`id`),
  ADD CONSTRAINT `tikets_pelapor_foreign` FOREIGN KEY (`pelapor`) REFERENCES `pelaporlains` (`id`),
  ADD CONSTRAINT `tikets_petugas_foreign` FOREIGN KEY (`petugases`) REFERENCES `petugas` (`id`),
  ADD CONSTRAINT `tikets_status_foreign` FOREIGN KEY (`status`) REFERENCES `status_kasuses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
