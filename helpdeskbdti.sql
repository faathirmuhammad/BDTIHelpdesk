-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2019 at 04:51 AM
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
-- Table structure for table `barang_keluars`
--

CREATE TABLE `barang_keluars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tiket_id` bigint(20) UNSIGNED NOT NULL,
  `barang_id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang_keluars`
--

INSERT INTO `barang_keluars` (`id`, `tiket_id`, `barang_id`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 2, '2019-07-31 02:21:32', '2019-07-31 02:21:32');

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
(11, '2019_07_04_063922_tiket', 1),
(12, '2019_07_30_120136_create_persediaans_table', 1),
(14, '2019_07_31_084838_create_barang_keluars_table', 2);

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
(1, 'Baktianto Lutfan Suryono S.T.', 'Banjarbaru', 'CV Budiman Utama (Persero) Tbk', '25', '867', '(+62) 715 0574 260', NULL, NULL),
(2, 'Yosef Kurniawan', 'Solok', 'PT Wijayanti Saragih Tbk', '24', '380', '0345 8058 9426', NULL, NULL),
(3, 'Emil Hidayat', 'Prabumulih', 'PD Rajata Safitri (Persero) Tbk', '23', '263', '0320 8279 294', NULL, NULL),
(4, 'Gandewa Mansur', 'Parepare', 'UD Saragih Halimah', '4', '76', '(+62) 324 1578 9081', NULL, NULL),
(5, 'Raditya Gunarto M.Kom.', 'Bima', 'Perum Nasyiah Maheswara', '16', '128', '0840 0943 0883', NULL, NULL),
(6, 'Nilam Suryatmi', 'Gorontalo', 'Perum Tarihoran (Persero) Tbk', '18', '14', '0701 5022 978', NULL, NULL),
(7, 'Siti Riyanti', 'Tual', 'Perum Hardiansyah Rahayu', '16', '112', '0996 4653 587', NULL, NULL),
(8, 'Karma Sitorus', 'Palu', 'CV Mandasari Rahmawati', '16', '24', '(+62) 637 3580 150', NULL, NULL),
(9, 'Jamalia Laksita', 'Malang', 'UD Suwarno Zulkarnain', '24', '808', '(+62) 847 481 626', NULL, NULL),
(10, 'Ira Suryatmi', 'Tegal', 'UD Hastuti Fujiati', '8', '779', '0458 9791 497', NULL, NULL),
(11, 'Parman Narpati S.Pd', 'Padangpanjang', 'PT Safitri Wahyudin (Persero) Tbk', '16', '26', '(+62) 801 6252 564', NULL, NULL),
(12, 'Kania Usamah', 'Sukabumi', 'Perum Sitompul Nasyidah Tbk', '24', '361', '(+62) 22 3047 244', NULL, NULL),
(13, 'Sarah Padmasari', 'Sukabumi', 'Perum Hardiansyah (Persero) Tbk', '4', '492', '(+62) 703 7264 7942', NULL, NULL),
(14, 'Lalita Suartini', 'Medan', 'PD Jailani', '25', '355', '0356 4587 337', NULL, NULL),
(15, 'Emas Nasim Nainggolan', 'Malang', 'Perum Hidayat Palastri (Persero) Tbk', '17', '808', '0523 9618 970', NULL, NULL),
(16, 'Salman Rajasa', 'Mojokerto', 'Perum Kurniawan', '7', '922', '0783 2868 584', NULL, NULL),
(17, 'Kenes Pradipta M.M.', 'Administrasi Jakarta Pusat', 'Perum Nasyiah', '21', '719', '0860 9253 3935', NULL, NULL),
(18, 'Safina Nilam Farida', 'Administrasi Jakarta Pusat', 'Perum Permata Tbk', '18', '253', '(+62) 747 7009 434', NULL, NULL),
(19, 'Ganda Manullang', 'Tasikmalaya', 'Perum Nashiruddin (Persero) Tbk', '9', '517', '(+62) 749 4194 7352', NULL, NULL),
(20, 'Sabri Warta Habibi', 'Batam', 'Perum Nasyidah Situmorang', '4', '184', '0533 8587 0990', NULL, NULL),
(21, 'Ellis Nasyidah', 'Cimahi', 'UD Riyanti', '5', '178', '(+62) 825 506 308', NULL, NULL),
(22, 'Prayoga Waluyo', 'Malang', 'UD Sudiati Tbk', '7', '403', '0256 4357 298', NULL, NULL),
(23, 'Irma Lailasari', 'Samarinda', 'PT Tarihoran (Persero) Tbk', '7', '21', '0826 4882 5317', NULL, NULL),
(24, 'Xanana Suryono', 'Bukittinggi', 'UD Wibisono Nugroho', '1', '203', '(+62) 321 6011 9855', NULL, NULL),
(25, 'Bagus Kusuma Wahyudin', 'Bengkulu', 'PT Nababan (Persero) Tbk', '23', '175', '(+62) 401 2235 909', NULL, NULL),
(26, 'Najwa Nuraini', 'Jayapura', 'Perum Safitri Suryatmi Tbk', '6', '155', '(+62) 21 1594 9866', NULL, NULL),
(27, 'Siti Prastuti', 'Madiun', 'Perum Agustina', '1', '939', '(+62) 522 8258 3718', NULL, NULL),
(28, 'Oman Salahudin', 'Salatiga', 'PD Siregar (Persero) Tbk', '2', '565', '(+62) 965 8914 197', NULL, NULL),
(29, 'Atma Uwais S.E.', 'Blitar', 'PT Wasita Mansur (Persero) Tbk', '7', '678', '(+62) 720 4005 8369', NULL, NULL),
(30, 'Ajimin Mustofa Pradipta', 'Bitung', 'UD Salahudin Wacana', '24', '800', '0860 019 244', NULL, NULL),
(31, 'Abyasa Najmudin', 'Tangerang Selatan', 'PT Jailani Yulianti', '3', '162', '(+62) 271 4955 2060', NULL, NULL),
(32, 'Farhunnisa Nasyiah M.Ak', 'Bekasi', 'Perum Firgantoro Yolanda', '20', '131', '(+62) 654 7038 8136', NULL, NULL),
(33, 'Lasmanto Cahya Mansur S.E.I', 'Sukabumi', 'CV Maryadi Gunarto Tbk', '21', '985', '0278 4933 8911', NULL, NULL),
(34, 'Kamal Kenes Wacana', 'Banjar', 'CV Putra Sitompul', '15', '53', '(+62) 287 4922 4395', NULL, NULL),
(35, 'Ciaobella Talia Padmasari', 'Padangsidempuan', 'CV Januar Januar', '6', '674', '0958 3592 837', NULL, NULL),
(36, 'Harsanto Gilang Anggriawan M.Ak', 'Dumai', 'CV Mardhiyah', '20', '349', '0590 3670 429', NULL, NULL),
(37, 'Wardi Maryadi', 'Banda Aceh', 'CV Palastri', '11', '55', '0753 6932 4544', NULL, NULL),
(38, 'Eka Yuliarti', 'Pematangsiantar', 'Perum Purnawati (Persero) Tbk', '23', '905', '0648 3066 932', NULL, NULL),
(39, 'Kawaya Uwais', 'Payakumbuh', 'PT Simanjuntak Suartini Tbk', '18', '366', '029 2316 1805', NULL, NULL),
(40, 'Margana Pranata Hidayanto', 'Denpasar', 'PT Mayasari Suartini Tbk', '1', '214', '(+62) 334 2009 4062', NULL, NULL),
(41, 'Lukman Reksa Kusumo', 'Kediri', 'Perum Pratiwi (Persero) Tbk', '4', '322', '(+62) 586 3062 840', NULL, NULL),
(42, 'Rendy Kenes Januar S.Farm', 'Tasikmalaya', 'PD Suryatmi', '8', '649', '(+62) 323 7680 3690', NULL, NULL),
(43, 'Rahmi Nurdiyanti', 'Semarang', 'PD Salahudin', '17', '586', '(+62) 623 4665 1988', NULL, NULL),
(44, 'Aurora Utami S.Pt', 'Bandar Lampung', 'Perum Nasyiah', '8', '423', '(+62) 841 0727 733', NULL, NULL),
(45, 'Jasmin Rahmawati', 'Bengkulu', 'PT Wasita Mardhiyah', '11', '128', '(+62) 843 995 721', NULL, NULL),
(46, 'Lanjar Kariman Tarihoran S.Farm', 'Prabumulih', 'CV Prayoga (Persero) Tbk', '11', '216', '(+62) 306 6890 574', NULL, NULL),
(47, 'Salimah Rahmawati S.Farm', 'Kendari', 'Perum Uyainah Tbk', '15', '749', '(+62) 883 4478 6714', NULL, NULL),
(48, 'Cawisono Hidayanto', 'Gunungsitoli', 'UD Puspita Prastuti', '22', '33', '(+62) 307 5632 4722', NULL, NULL),
(49, 'Daliman Saputra', 'Pagar Alam', 'CV Hidayanto Tbk', '20', '855', '(+62) 960 8066 796', NULL, NULL),
(50, 'Jayeng Sihotang', 'Palembang', 'CV Situmorang Anggriawan Tbk', '10', '950', '(+62) 969 3403 659', NULL, NULL),
(51, 'Hendri Banara Wibisono', 'Tangerang', 'PT Saputra Novitasari', '4', '984', '0876 171 476', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `persediaans`
--

CREATE TABLE `persediaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barang_id` bigint(20) UNSIGNED NOT NULL,
  `nomorspk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalspk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalbarangmasuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persediaans`
--

INSERT INTO `persediaans` (`id`, `barang_id`, `nomorspk`, `tanggalspk`, `tanggalbarangmasuk`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 1, '984324029809', '2019-07-02', '2019-07-12', '20', '2019-07-30 18:26:29', '2019-07-30 18:26:29'),
(2, 1, '12313123', '2019-07-10', '2019-07-12', '5', '2019-07-30 18:38:11', '2019-07-30 18:38:11'),
(3, 2, '4535', '2019-07-01', '2019-07-12', '3', '2019-07-30 18:50:30', '2019-07-30 18:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `persediaan_barangs`
--

CREATE TABLE `persediaan_barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persediaan_barangs`
--

INSERT INTO `persediaan_barangs` (`id`, `nama_barang`, `satuan`, `created_at`, `updated_at`) VALUES
(1, 'KERTAS', 'RIM', '2019-07-30 05:32:55', '2019-07-30 05:32:55'),
(2, 'KABEL LAN', 'METER', '2019-07-30 18:50:03', '2019-07-30 18:50:03');

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
(1, 'Lidya Hastuti S.Sos', '(+62) 616 7033 676', 'voluptatem', NULL, NULL),
(2, 'Nyana Hutasoit', '0961 0289 1448', 'eos', NULL, NULL),
(3, 'Putri Usada', '(+62) 960 8029 0977', 'est', NULL, NULL),
(4, 'Jasmani Sitorus', '(+62) 710 1109 914', 'praesentium', NULL, NULL),
(5, 'Ajeng Yulianti', '0354 7715 537', 'distinctio', NULL, NULL),
(6, 'Oni Oliva Hastuti S.IP', '(+62) 780 4538 0494', 'error', NULL, NULL),
(7, 'Rachel Prastuti S.Pd', '0423 2959 2298', 'ratione', NULL, NULL),
(8, 'Viktor Maman Uwais', '(+62) 653 7649 6193', 'doloremque', NULL, NULL),
(9, 'Ajimin Hardiansyah', '(+62) 890 4511 8484', 'ea', NULL, NULL),
(10, 'Pangestu Pangestu M.Pd', '0849 5652 2062', 'asperiores', NULL, NULL),
(11, 'Ibrahim Harjo Putra S.Gz', '(+62) 887 0769 455', 'rem', NULL, NULL),
(12, 'Wadi Gunarto S.E.I', '(+62) 535 9910 8379', 'doloremque', NULL, NULL),
(13, 'Najwa Rahimah', '(+62) 425 3448 898', 'quidem', NULL, NULL),
(14, 'Aisyah Usyi Sudiati', '(+62) 902 1481 680', 'quis', NULL, NULL),
(15, 'Padma Prastuti', '(+62) 21 3259 013', 'amet', NULL, NULL),
(16, 'Jessica Puspasari', '(+62) 244 5629 374', 'at', NULL, NULL),
(17, 'Daru Santoso', '(+62) 934 7352 601', 'esse', NULL, NULL),
(18, 'Juli Agustina', '0214 8482 742', 'iure', NULL, NULL),
(19, 'Ikin Thamrin', '0664 1685 625', 'quod', NULL, NULL),
(20, 'Nadine Lalita Usamah', '0919 2228 648', 'voluptatibus', NULL, NULL),
(21, 'Septi Wulan Wahyuni', '(+62) 442 6393 1253', 'dolorem', NULL, NULL),
(22, 'Syahrini Usada', '0844 306 948', 'repudiandae', NULL, NULL),
(23, 'Humaira Agustina', '029 2632 992', 'consequuntur', NULL, NULL),
(24, 'Citra Kuswandari', '(+62) 966 6146 504', 'explicabo', NULL, NULL),
(25, 'Argono Dabukke', '(+62) 328 7903 961', 'sunt', NULL, NULL),
(26, 'Gadang Saptono', '(+62) 532 6880 1834', 'magni', NULL, NULL),
(27, 'Yani Zelaya Halimah S.H.', '(+62) 20 4484 712', 'voluptate', NULL, NULL),
(28, 'Yessi Nuraini', '0514 9084 6431', 'quam', NULL, NULL),
(29, 'Elvina Halima Lailasari', '(+62) 837 1295 988', 'enim', NULL, NULL),
(30, 'Kawaya Prabowo S.I.Kom', '(+62) 542 5926 830', 'dolore', NULL, NULL),
(31, 'Kuncara Dabukke S.Sos', '0461 2915 908', 'molestiae', NULL, NULL),
(32, 'Ajiono Sirait', '(+62) 221 6150 531', 'est', NULL, NULL),
(33, 'Kanda Maulana S.Psi', '0242 3940 2139', 'voluptate', NULL, NULL),
(34, 'Jamal Panji Maheswara', '(+62) 979 4454 4893', 'et', NULL, NULL),
(35, 'Puspa Tina Safitri S.I.Kom', '(+62) 675 7079 6201', 'reprehenderit', NULL, NULL),
(36, 'Indah Kania Nurdiyanti', '0367 7321 932', 'ipsam', NULL, NULL),
(37, 'Sari Mardhiyah', '0836 3064 141', 'nihil', NULL, NULL),
(38, 'Hesti Usada', '(+62) 302 5554 7150', 'dolorum', NULL, NULL),
(39, 'Zulfa Widiastuti', '0920 0561 424', 'quis', NULL, NULL),
(40, 'Nyoman Karja Uwais', '0803 989 361', 'et', NULL, NULL),
(41, 'Malika Yuniar', '0996 6411 4423', 'eius', NULL, NULL),
(42, 'Rika Wulandari S.Kom', '0778 0117 1101', 'quis', NULL, NULL),
(43, 'Zaenab Suartini', '(+62) 269 4014 700', 'temporibus', NULL, NULL),
(44, 'Setya Caturangga Mustofa S.Pd', '(+62) 280 3598 3341', 'possimus', NULL, NULL),
(45, 'Karsana Hidayat', '(+62) 762 2398 0710', 'optio', NULL, NULL),
(46, 'Johan Respati Winarno S.Sos', '(+62) 825 814 248', 'qui', NULL, NULL),
(47, 'Sadina Permata', '(+62) 28 1917 4029', 'sapiente', NULL, NULL),
(48, 'Wisnu Permadi M.TI.', '0930 8249 6589', 'fugiat', NULL, NULL),
(49, 'Oliva Almira Yulianti', '(+62) 836 3966 879', 'occaecati', NULL, NULL),
(50, 'Marsudi Yosef Dongoran', '0770 9241 927', 'aliquam', NULL, NULL),
(51, 'Yulia Vera Riyanti', '(+62) 26 9800 158', 'maiores', NULL, NULL);

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
(1, 'Salimah Titin Wulandari S.E.I', 'Tual', 'Perum Laksmiwati Kurniawan (Persero) Tbk', '4', '874', '(+62) 677 7234 6691', NULL, NULL),
(2, 'Wardaya Mursita Hidayanto M.Kom.', 'Singkawang', 'Perum Rahmawati Wijayanti (Persero) Tbk', '18', '474', '0782 7609 839', NULL, NULL),
(3, 'Damar Samosir S.Psi', 'Pematangsiantar', 'PD Yuliarti', '12', '296', '0590 5533 785', NULL, NULL),
(4, 'Danuja Dabukke S.Pt', 'Metro', 'PD Widodo Hariyah', '15', '243', '(+62) 430 0381 640', NULL, NULL),
(5, 'Elvin Hardi Widodo S.E.', 'Bogor', 'PD Astuti Yuniar Tbk', '20', '610', '0828 351 926', NULL, NULL),
(6, 'Narji Hidayat S.Gz', 'Cilegon', 'UD Najmudin', '3', '563', '0859 3009 045', NULL, NULL),
(7, 'Koko Gatot Pranowo S.Gz', 'Mataram', 'PT Tampubolon', '24', '62', '0346 1937 6315', NULL, NULL),
(8, 'Yunita Nurdiyanti M.Kom.', 'Pekalongan', 'PT Pratama Yuliarti Tbk', '3', '838', '0753 2466 6832', NULL, NULL),
(9, 'Danu Putra', 'Pasuruan', 'UD Ardianto', '19', '732', '(+62) 291 5653 2193', NULL, NULL),
(10, 'Melinda Winarsih', 'Palu', 'CV Laksita', '6', '566', '(+62) 354 3341 3246', NULL, NULL),
(11, 'Bajragin Edison Sihombing S.H.', 'Banjarbaru', 'PT Winarsih (Persero) Tbk', '19', '54', '(+62) 28 8306 713', NULL, NULL),
(12, 'Novi Wahyuni S.IP', 'Tarakan', 'Perum Hassanah', '10', '743', '0998 0460 402', NULL, NULL),
(13, 'Iriana Olivia Hariyah', 'Medan', 'PT Sihombing Tbk', '4', '621', '0871 5244 8038', NULL, NULL),
(14, 'Bakti Wasita M.Farm', 'Binjai', 'PT Prabowo Sitorus Tbk', '9', '943', '0287 3748 415', NULL, NULL),
(15, 'Lukman Prabowo M.M.', 'Dumai', 'CV Winarsih Nasyidah', '16', '968', '0429 2297 171', NULL, NULL),
(16, 'Oliva Prastuti', 'Ambon', 'Perum Samosir', '15', '348', '(+62) 964 3252 2950', NULL, NULL),
(17, 'Paiman Sirait', 'Langsa', 'CV Hutapea Andriani (Persero) Tbk', '16', '433', '0393 8443 521', NULL, NULL),
(18, 'Kamidin Akarsana Natsir S.Psi', 'Lhokseumawe', 'PT Januar Wijayanti', '14', '949', '0975 7271 5717', NULL, NULL),
(19, 'Kania Permata M.M.', 'Payakumbuh', 'PT Maryadi Jailani', '12', '742', '(+62) 803 4002 7584', NULL, NULL),
(20, 'Lulut Asmianto Siregar', 'Subulussalam', 'CV Habibi', '1', '399', '0949 3220 4005', NULL, NULL),
(21, 'Jasmin Nasyiah', 'Jambi', 'CV Tamba Tbk', '6', '956', '0635 0634 2274', NULL, NULL),
(22, 'Cici Farhunnisa Kusmawati', 'Samarinda', 'PD Wahyuni Wasita (Persero) Tbk', '22', '703', '(+62) 997 7447 820', NULL, NULL),
(23, 'Laila Handayani S.T.', 'Banda Aceh', 'CV Puspita Mandasari Tbk', '22', '692', '(+62) 731 4655 6895', NULL, NULL),
(24, 'Jarwa Hardiansyah', 'Samarinda', 'CV Halimah Haryanto', '24', '198', '0564 1964 864', NULL, NULL),
(25, 'Genta Qori Sudiati', 'Balikpapan', 'UD Maulana Tbk', '1', '89', '0833 4936 0606', NULL, NULL),
(26, 'Ikhsan Cakrabirawa Habibi', 'Bau-Bau', 'PD Napitupulu (Persero) Tbk', '5', '400', '021 6327 2900', NULL, NULL),
(27, 'Dacin Waskita', 'Pagar Alam', 'UD Mardhiyah Hastuti (Persero) Tbk', '9', '245', '0574 6638 985', NULL, NULL),
(28, 'Melinda Dewi Halimah S.E.I', 'Banjar', 'UD Anggraini Uyainah Tbk', '22', '885', '(+62) 26 0452 7855', NULL, NULL),
(29, 'Edison Pradana M.Ak', 'Kupang', 'CV Dabukke Sitorus (Persero) Tbk', '8', '508', '(+62) 296 4495 2266', NULL, NULL),
(30, 'Zelda Zaenab Namaga S.Sos', 'Tanjungbalai', 'PD Novitasari Tbk', '19', '778', '0259 4376 3439', NULL, NULL),
(31, 'Tirta Kusumo', 'Balikpapan', 'PT Pudjiastuti Hartati Tbk', '22', '26', '0237 9366 9715', NULL, NULL),
(32, 'Paris Pudjiastuti S.E.I', 'Sabang', 'PT Latupono Waskita (Persero) Tbk', '7', '89', '(+62) 451 4015 2475', NULL, NULL),
(33, 'Laila Suryatmi', 'Mojokerto', 'UD Yulianti Susanti Tbk', '15', '252', '0533 1750 818', NULL, NULL),
(34, 'Zulaikha Rahmawati', 'Sawahlunto', 'PD Susanti Wasita', '1', '62', '0511 9109 877', NULL, NULL),
(35, 'Waluyo Bahuwarna Ramadan', 'Palopo', 'UD Hasanah', '6', '851', '(+62) 732 9141 1225', NULL, NULL),
(36, 'Cinta Agustina M.Ak', 'Medan', 'Perum Kuswoyo (Persero) Tbk', '23', '336', '(+62) 875 8989 4737', NULL, NULL),
(37, 'Diana Kamila Namaga S.T.', 'Lubuklinggau', 'PT Hariyah', '17', '548', '0833 0517 261', NULL, NULL),
(38, 'Maras Januar', 'Lhokseumawe', 'CV Hidayanto Usada', '8', '405', '(+62) 862 286 641', NULL, NULL),
(39, 'Anastasia Cinthia Puspasari', 'Sibolga', 'UD Wahyuni Sihombing', '22', '142', '(+62) 994 9335 359', NULL, NULL),
(40, 'Satya Warji Narpati M.Pd', 'Tanjung Pinang', 'Perum Sitompul Hidayanto', '7', '739', '(+62) 763 0890 266', NULL, NULL),
(41, 'Daniswara Nugroho', 'Tebing Tinggi', 'CV Hutasoit Saptono', '11', '311', '(+62) 449 5918 758', NULL, NULL),
(42, 'Gamanto Maryadi', 'Bau-Bau', 'UD Hartati Hutapea (Persero) Tbk', '19', '893', '0869 012 140', NULL, NULL),
(43, 'Kartika Alika Usamah', 'Pariaman', 'UD Palastri', '6', '733', '(+62) 568 2925 643', NULL, NULL),
(44, 'Cawuk Wasis Prayoga', 'Tasikmalaya', 'CV Oktaviani Habibi', '18', '800', '(+62) 699 8329 141', NULL, NULL),
(45, 'Banawa Sihombing', 'Prabumulih', 'Perum Wulandari Oktaviani', '20', '342', '(+62) 22 9366 3495', NULL, NULL),
(46, 'Lintang Diah Kuswandari', 'Surabaya', 'UD Siregar Tbk', '15', '423', '(+62) 562 9621 112', NULL, NULL),
(47, 'Qori Puspita', 'Lhokseumawe', 'PD Mardhiyah Susanti Tbk', '17', '973', '0562 4721 2535', NULL, NULL),
(48, 'Vivi Latika Mandasari S.IP', 'Gorontalo', 'PD Winarsih Wulandari (Persero) Tbk', '14', '264', '0650 1298 7672', NULL, NULL),
(49, 'Tasdik Garang Irawan', 'Gorontalo', 'CV Hastuti Hutapea', '25', '152', '0829 4676 624', NULL, NULL),
(50, 'Puji Sudiati', 'Mataram', 'CV Mulyani Nababan', '24', '775', '0223 2666 7908', NULL, NULL),
(51, 'Halima Widiastuti', 'Kupang', 'PD Pranowo Tbk', '7', '711', '0882 741 294', NULL, NULL);

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
(1, 'Farah Wulandari S.E.', 'Cirebon', 'UD Saefullah', '8', '599', '0559 8760 609', NULL, NULL),
(2, 'Najib Wibowo', 'Pematangsiantar', 'PD Agustina', '17', '848', '0579 8136 2764', NULL, NULL),
(3, 'Patricia Andriani', 'Semarang', 'PT Mardhiyah Prasetyo', '8', '324', '0297 5883 4269', NULL, NULL),
(4, 'Yoga Utama', 'Palembang', 'PD Pradipta', '2', '85', '(+62) 878 1747 996', NULL, NULL),
(5, 'Sakura Wahyuni', 'Medan', 'Perum Mayasari Tbk', '7', '377', '(+62) 24 3594 958', NULL, NULL),
(6, 'Ganda Mahdi Jailani S.T.', 'Subulussalam', 'PT Laksita Melani', '23', '133', '(+62) 795 7549 814', NULL, NULL),
(7, 'Hartana Cakrabirawa Samosir', 'Kotamobagu', 'CV Pertiwi', '6', '350', '0666 0727 9251', NULL, NULL),
(8, 'Karya Mandala', 'Pontianak', 'PT Hidayat Wijaya Tbk', '25', '612', '(+62) 421 3295 5868', NULL, NULL),
(9, 'Yuni Laksmiwati S.IP', 'Bekasi', 'PT Yulianti Suwarno Tbk', '13', '852', '(+62) 859 8494 258', NULL, NULL),
(10, 'Maya Namaga', 'Madiun', 'PD Namaga Tbk', '14', '571', '(+62) 888 389 510', NULL, NULL),
(11, 'Garda Cengkal Mahendra S.E.', 'Bekasi', 'Perum Nainggolan Nainggolan (Persero) Tbk', '3', '213', '(+62) 685 7141 1919', NULL, NULL),
(12, 'Edward Galiono Mahendra', 'Probolinggo', 'PD Utama', '25', '882', '0369 8458 2468', NULL, NULL),
(13, 'Laras Ana Mulyani S.Pd', 'Kediri', 'CV Wibisono Tbk', '9', '85', '0274 8746 369', NULL, NULL),
(14, 'Darsirah Bagas Wasita', 'Batu', 'Perum Lailasari Nurdiyanti (Persero) Tbk', '8', '618', '(+62) 614 5466 5085', NULL, NULL),
(15, 'Jagapati Kuncara Jailani', 'Palembang', 'PD Anggraini', '17', '779', '0842 623 784', NULL, NULL),
(16, 'Laila Pudjiastuti', 'Banda Aceh', 'PT Handayani Firmansyah', '12', '141', '(+62) 808 3776 5352', NULL, NULL),
(17, 'Ellis Bella Melani', 'Padangpanjang', 'UD Firmansyah', '14', '782', '0829 9982 735', NULL, NULL),
(18, 'Yessi Paulin Rahimah', 'Tarakan', 'UD Haryanti Rajata (Persero) Tbk', '21', '631', '0802 9787 6735', NULL, NULL),
(19, 'Olivia Melani S.T.', 'Tanjungbalai', 'PT Hassanah Permadi', '10', '743', '0745 0623 896', NULL, NULL),
(20, 'Rina Kamila Pratiwi S.Kom', 'Ternate', 'Perum Haryanto Yuliarti Tbk', '15', '834', '0546 9639 268', NULL, NULL),
(21, 'Wulan Oktaviani', 'Batu', 'CV Rahmawati Tbk', '14', '563', '(+62) 844 4688 6109', NULL, NULL),
(22, 'Uda Prasasta', 'Mojokerto', 'PT Rahmawati Safitri Tbk', '18', '541', '0336 9931 5534', NULL, NULL),
(23, 'Vinsen Lega Kusumo', 'Balikpapan', 'PD Nainggolan (Persero) Tbk', '9', '308', '0738 2967 9377', NULL, NULL),
(24, 'Mutia Puspasari M.TI.', 'Padangpanjang', 'PD Sudiati Halimah', '13', '179', '0759 1683 0940', NULL, NULL),
(25, 'Gading Saputra', 'Sorong', 'Perum Utami Iswahyudi (Persero) Tbk', '19', '294', '0361 3690 4222', NULL, NULL),
(26, 'Umi Usamah S.Ked', 'Jayapura', 'CV Kuswandari (Persero) Tbk', '15', '620', '(+62) 203 7514 5002', NULL, NULL),
(27, 'Hana Laksita', 'Palu', 'Perum Zulaika', '12', '428', '0882 5437 2838', NULL, NULL),
(28, 'Winda Fitria Mandasari S.Pd', 'Pekalongan', 'PT Gunawan Prasetyo (Persero) Tbk', '14', '117', '0843 297 330', NULL, NULL),
(29, 'Daniswara Mustofa S.E.I', 'Administrasi Jakarta Selatan', 'Perum Nurdiyanti Suryatmi (Persero) Tbk', '8', '567', '(+62) 939 5219 009', NULL, NULL),
(30, 'Putri Putri Wulandari S.Psi', 'Subulussalam', 'UD Astuti Wacana Tbk', '12', '497', '(+62) 743 3476 105', NULL, NULL),
(31, 'Wani Kusmawati', 'Pasuruan', 'Perum Waskita (Persero) Tbk', '7', '648', '0653 9918 0652', NULL, NULL),
(32, 'Ophelia Malika Farida S.T.', 'Ternate', 'UD Anggraini (Persero) Tbk', '14', '455', '(+62) 779 3729 7912', NULL, NULL),
(33, 'Prayogo Sinaga', 'Probolinggo', 'Perum Hariyah Tbk', '11', '227', '0886 166 181', NULL, NULL),
(34, 'Raden Nainggolan', 'Pekalongan', 'PD Fujiati Riyanti Tbk', '17', '262', '(+62) 795 0460 6878', NULL, NULL),
(35, 'Raden Dono Natsir', 'Bandar Lampung', 'PD Anggraini Hassanah', '7', '13', '0901 5272 5758', NULL, NULL),
(36, 'Kusuma Jais Najmudin', 'Bima', 'UD Marpaung Tbk', '24', '35', '(+62) 707 7173 8222', NULL, NULL),
(37, 'Wawan Lasmono Kuswoyo', 'Banda Aceh', 'PD Zulaika Saefullah', '12', '750', '(+62) 229 7096 5544', NULL, NULL),
(38, 'Diana Winarsih', 'Salatiga', 'CV Handayani', '21', '459', '023 0116 745', NULL, NULL),
(39, 'Amalia Pratiwi', 'Pontianak', 'CV Maryadi Permadi', '24', '121', '0887 4546 7729', NULL, NULL),
(40, 'Jais Gara Permadi S.I.Kom', 'Malang', 'UD Rajata', '16', '234', '(+62) 508 1285 987', NULL, NULL),
(41, 'Naradi Lembah Marbun', 'Cimahi', 'PD Andriani (Persero) Tbk', '21', '491', '0705 1363 769', NULL, NULL),
(42, 'Diah Prastuti', 'Tangerang', 'PD Melani Tbk', '13', '417', '0623 2310 1552', NULL, NULL),
(43, 'Cornelia Ciaobella Wahyuni M.M.', 'Tangerang', 'Perum Padmasari (Persero) Tbk', '24', '114', '(+62) 822 224 320', NULL, NULL),
(44, 'Kasiran Mandala', 'Bukittinggi', 'Perum Tarihoran Sudiati', '3', '926', '0927 3771 099', NULL, NULL),
(45, 'Jarwadi Mahendra', 'Prabumulih', 'UD Waskita (Persero) Tbk', '2', '594', '(+62) 405 7176 916', NULL, NULL),
(46, 'Umar Galih Haryanto S.Gz', 'Jambi', 'CV Namaga Thamrin (Persero) Tbk', '10', '220', '0347 1190 8102', NULL, NULL),
(47, 'Gandewa Saputra S.E.', 'Makassar', 'PT Mardhiyah Tbk', '12', '361', '(+62) 314 2163 907', NULL, NULL),
(48, 'Bahuwirya Sihotang S.Pd', 'Mojokerto', 'PD Manullang (Persero) Tbk', '25', '166', '0689 6770 2887', NULL, NULL),
(49, 'Kawaya Salahudin', 'Payakumbuh', 'Perum Pangestu Hastuti', '10', '240', '0286 4524 372', NULL, NULL),
(50, 'Saadat Santoso', 'Metro', 'CV Mulyani Hastuti (Persero) Tbk', '13', '16', '0886 138 532', NULL, NULL),
(51, 'Talia Kayla Wastuti', 'Tomohon', 'CV Hariyah Sihombing', '18', '694', '0874 7499 7548', NULL, NULL);

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
  `jumlah` int(11) DEFAULT NULL,
  `petugas` bigint(20) UNSIGNED NOT NULL,
  `status` bigint(20) UNSIGNED NOT NULL,
  `jenis` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tikets`
--

INSERT INTO `tikets` (`id`, `nomor`, `nomor_nota_dinas`, `jenispelapor`, `pelapor`, `phone_pelapor`, `email_pelapor`, `permasalahan`, `kasus`, `barang`, `jumlah`, `petugas`, `status`, `jenis`, `created_at`, `updated_at`) VALUES
(2, '3482019', NULL, 'Pegawai', 3, '+6289674903698', 'faathir.muhammad@gmail.com', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar dictum elit et tempus. Nulla lobortis sollicitudin nulla. Curabitur elementum massa a odio pulvinar luctus. Morbi faucibus commodo tortor, ut feugiat nibh sollicitudin nec. Integer pretium aliquam libero, sed sagittis nibh molestie ac.</p>', 1, 2, 3, 9, 1, 3, '2019-07-31 02:21:32', '2019-07-31 02:21:32'),
(4, '2142019', NULL, 'Pegawai', 3, '+6289674903698', 'faathir.muhammad@gmail.com', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar dictum elit et tempus. Nulla lobortis sollicitudin nulla. Curabitur elementum massa a odio pulvinar luctus. Morbi faucibus commodo tortor, ut feugiat nibh sollicitudin nec. Integer pretium aliquam libero, sed sagittis nibh molestie ac. Suspendisse molestie elit urna, eget consectetur lacus ultricies id. Curabitur semper ullamcorper condimentum.</p>', 2, NULL, NULL, 5, 1, 3, '2019-08-04 18:07:53', '2019-08-04 18:07:53'),
(10, '6932019', NULL, 'Pegawai', 4, '+6289674903698', 'faathir.muhammad@gmail.com', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar dictum elit et tempus. Nulla lobortis sollicitudin nulla. Curabitur elementum massa a odio pulvinar luctus. Morbi faucibus commodo tortor, ut feugiat nibh sollicitudin nec. Integer pretium aliquam libero, sed sagittis nibh molestie ac. Suspendisse molestie elit urna, eget consectetur lacus ultricies id. Curabitur semper ullamcorper condimentum.</p>\r\n<p>Nam nibh neque, venenatis at purus et, placerat iaculis nisi. Suspendisse potenti. Aliquam elementum ac orci et commodo. Aliquam eu nulla sed ligula auctor molestie. Fusce sollicitudin elit ultrices risus lobortis varius. Nulla pellentesque scelerisque magna, quis pretium odio bibendum ac. Aliquam ante ligula, pellentesque tincidunt nunc sed, auctor convallis orci.</p>', 5, NULL, NULL, 48, 2, 4, '2019-08-04 19:32:25', '2019-08-04 19:32:25');

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
-- Indexes for table `barang_keluars`
--
ALTER TABLE `barang_keluars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barang_keluars_tiket_id_foreign` (`tiket_id`),
  ADD KEY `barang_keluars_barang_id_foreign` (`barang_id`);

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
-- Indexes for table `persediaans`
--
ALTER TABLE `persediaans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `persediaans_barang_id_foreign` (`barang_id`);

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
  ADD KEY `tikets_petugas_foreign` (`petugas`),
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
-- AUTO_INCREMENT for table `barang_keluars`
--
ALTER TABLE `barang_keluars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pelaporlains`
--
ALTER TABLE `pelaporlains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `persediaans`
--
ALTER TABLE `persediaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `persediaan_barangs`
--
ALTER TABLE `persediaan_barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

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
-- Constraints for table `barang_keluars`
--
ALTER TABLE `barang_keluars`
  ADD CONSTRAINT `barang_keluars_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `persediaan_barangs` (`id`),
  ADD CONSTRAINT `barang_keluars_tiket_id_foreign` FOREIGN KEY (`tiket_id`) REFERENCES `tikets` (`id`);

--
-- Constraints for table `persediaans`
--
ALTER TABLE `persediaans`
  ADD CONSTRAINT `persediaans_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `persediaan_barangs` (`id`);

--
-- Constraints for table `tikets`
--
ALTER TABLE `tikets`
  ADD CONSTRAINT `tikets_barang_foreign` FOREIGN KEY (`barang`) REFERENCES `persediaan_barangs` (`id`),
  ADD CONSTRAINT `tikets_jenis_foreign` FOREIGN KEY (`jenis`) REFERENCES `jenis_tikets` (`id`),
  ADD CONSTRAINT `tikets_kasus_foreign` FOREIGN KEY (`kasus`) REFERENCES `daftar_kasuses` (`id`),
  ADD CONSTRAINT `tikets_pelapor_foreign` FOREIGN KEY (`pelapor`) REFERENCES `pelaporlains` (`id`),
  ADD CONSTRAINT `tikets_petugas_foreign` FOREIGN KEY (`petugas`) REFERENCES `petugas` (`id`),
  ADD CONSTRAINT `tikets_status_foreign` FOREIGN KEY (`status`) REFERENCES `status_kasuses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
