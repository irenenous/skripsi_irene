-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2018 at 04:06 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_reminder`
--

CREATE TABLE `app_reminder` (
  `id_reminder` int(11) NOT NULL,
  `id_eo` int(11) NOT NULL,
  `tgl_reminder` varchar(50) NOT NULL,
  `wkt_reminder` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ket_reminder` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

CREATE TABLE `bookmark` (
  `id_bookmark` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_eo` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookmark`
--

INSERT INTO `bookmark` (`id_bookmark`, `id_user`, `id_eo`, `status`) VALUES
(6, 9, 118, 'BOOKMARKED'),
(7, 1, 118, 'BOOKMARKED');

-- --------------------------------------------------------

--
-- Table structure for table `eo`
--

CREATE TABLE `eo` (
  `id_eo` int(11) NOT NULL,
  `email_eo` varchar(50) NOT NULL,
  `password_eo` varchar(20) NOT NULL,
  `foto_eo` text NOT NULL,
  `nama_eo` varchar(100) NOT NULL,
  `ket_eo` varchar(1000) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `alamat_eo` varchar(500) NOT NULL,
  `nohp_eo` varchar(15) NOT NULL,
  `foto_ktp` text NOT NULL,
  `fotodiri_ktp` text NOT NULL,
  `foto_alamat` text NOT NULL,
  `foto_siup` text NOT NULL,
  `tahun_diri` int(5) NOT NULL,
  `link_web` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eo`
--

INSERT INTO `eo` (`id_eo`, `email_eo`, `password_eo`, `foto_eo`, `nama_eo`, `ket_eo`, `id_provinsi`, `id_kota`, `alamat_eo`, `nohp_eo`, `foto_ktp`, `fotodiri_ktp`, `foto_alamat`, `foto_siup`, `tahun_diri`, `link_web`, `status`) VALUES
(118, 'groovyeo@gmail.com', '123456', 'image-eo/groovy.png', 'Groovy EO', 'best eo in jkt', 8, 12, 'jl. permata', '0812-5038-1343', 'image-eo/desktop-backgrounds-quotes-tumblr-hd.jpg', 'image-eo/friendship-quotes-hd-wallpaper_052819784.jpg', 'image-eo/hamtaro-most-inspirational-quotes-resolution_519728.jpg', 'image-eo/scenery-wallpaper-hd-beach-HD.jpg', 2018, 'www.groovy-eo.com', 'VERIFIED'),
(119, 'excellenteo@gmail.com', '1234567', 'image-eo/Summer-hd-quote-wallpaper.png', 'Excellent EO', 'Great event organizer company ever!', 11, 67, 'Jl. Sei Raya Dalam', '0896-4321-5679', 'image-eo/scenery-wallpaper-hd-beach-HD.jpg', 'image-eo/Nice-good-morning-quote-hd-high-resolution-images.jpg', 'image-eo/desktop-backgrounds-quotes-tumblr-hd.jpg', 'image-eo/hamtaro-most-inspirational-quotes-resolution_519728.jpg', 2012, 'www.excellenteo.com', 'VERIFIED');

-- --------------------------------------------------------

--
-- Table structure for table `fuzzy`
--

CREATE TABLE `fuzzy` (
  `id_fuzzy` int(11) NOT NULL,
  `nama_fuzzy` varchar(20) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fuzzy`
--

INSERT INTO `fuzzy` (`id_fuzzy`, `nama_fuzzy`, `nilai`) VALUES
(1, 'Sangat Kurang', 0.2),
(2, 'Kurang', 0.4),
(3, 'Cukup', 0.6),
(4, 'Baik', 0.8),
(5, 'Sangat Baik', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Wedding Organizer'),
(2, 'Birthday Organizer'),
(3, 'Private Party Organizer'),
(4, 'Music & Entertainment Organizer'),
(5, 'Meeting, Incentive, Convention and Exhibition (MICE) Organizer'),
(6, 'Brand Activation Organizer'),
(7, 'Prom & Reunion Organizer');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_eo`
--

CREATE TABLE `kategori_eo` (
  `id_eo` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_eo`
--

INSERT INTO `kategori_eo` (`id_eo`, `id_kategori`) VALUES
(118, 1),
(118, 2),
(118, 4),
(119, 4);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(50) NOT NULL,
  `id_provinsi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`, `id_provinsi`) VALUES
(1, 'Ambon', 19),
(2, 'Balikpapan', 14),
(3, 'Banda Aceh', 1),
(4, 'Bandar Lampung', 18),
(5, 'Bandung', 8),
(6, 'Banjar', 8),
(7, 'Banjarbaru', 12),
(8, 'Banjarmasin', 12),
(9, 'Batam', 25),
(10, 'Batu', 10),
(11, 'Bau-Bau', 29),
(12, 'Bekasi', 8),
(13, 'Bengkulu', 4),
(14, 'Bima', 21),
(15, 'Binjai', 33),
(16, 'Bitung', 30),
(17, 'Blitar', 8),
(18, 'Bogor', 10),
(19, 'Bontang', 14),
(20, 'Bukittinggi', 31),
(21, 'Cilegon', 3),
(22, 'Cimahi', 8),
(23, 'Cirebon', 8),
(24, 'Denpasar', 2),
(25, 'Depok', 8),
(26, 'Dumai', 25),
(27, 'Gorontalo', 5),
(28, 'Jambi', 7),
(29, 'Jayapura', 23),
(30, 'Kediri', 10),
(31, 'Kendari', 29),
(32, 'Jakarta Barat', 6),
(33, 'Jakarta Pusat', 6),
(34, 'Jakarta Selatan', 6),
(35, 'Jakarta Timur', 6),
(36, 'Jakarta Utara', 6),
(37, 'Kotamobagu', 30),
(38, 'Kupang', 22),
(39, 'Langsa', 1),
(40, 'Lhokseumawe', 1),
(41, 'Lubuklinggau', 32),
(42, 'Madiun', 10),
(43, 'Magelang', 9),
(44, 'Makassar', 27),
(45, 'Malang', 10),
(46, 'Manado', 30),
(47, 'Mataram', 21),
(48, 'Medan', 33),
(49, 'Metro', 18),
(50, 'Meulaboh', 1),
(51, 'Mojokerto', 10),
(52, 'Padang', 31),
(53, 'Padang Sidempuan', 33),
(54, 'Padangpanjang', 31),
(55, 'Pagaralam', 32),
(56, 'Palangkaraya', 13),
(57, 'Palembang', 32),
(58, 'Palu', 28),
(59, 'Pangkalpinang', 16),
(60, 'Parepare', 27),
(61, 'Pariaman', 31),
(62, 'Pasuruan', 10),
(63, 'Payakumbuh', 31),
(64, 'Pekalongan', 9),
(65, 'Pekanbaru', 25),
(66, 'Pematangsiantar', 33),
(67, 'Pontianak', 11),
(68, 'Prabumulih', 32),
(69, 'Probolinggo', 10),
(70, 'Purwokerto', 9),
(71, 'Sabang', 1),
(72, 'Salatiga', 9),
(73, 'Samarinda', 14),
(74, 'Sawahlunto', 31),
(75, 'Semarang', 9),
(76, 'Serang', 3),
(77, 'Sibolga', 33),
(78, 'Singkawang', 11),
(79, 'Solok', 31),
(80, 'Sorong', 24),
(81, 'Subulussalam', 1),
(82, 'Sukabumi', 8),
(83, 'Sungai Penuh', 7),
(84, 'Surabaya', 10),
(85, 'Surakarta', 9),
(86, 'Tangerang', 3),
(87, 'Tangerang Selatan', 3),
(88, 'Tanjungbalai', 33),
(89, 'Tanjungpinang', 17),
(90, 'Tarakan', 15),
(91, 'Tasikmalaya', 8),
(92, 'Tebingtinggi', 33),
(93, 'Tegal', 9),
(94, 'Ternate', 20),
(95, 'Tidore Kepulauan', 20),
(96, 'Tomohon', 30),
(97, 'Tual', 19),
(98, 'Yogyakarta', 34),
(99, 'Palopo', 27);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(20) NOT NULL,
  `jenis_kriteria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `jenis_kriteria`) VALUES
(1, 'Budget', 'COST'),
(2, 'Reputasi', 'BENEFIT'),
(3, 'Fasilitas & Layanan', 'BENEFIT'),
(4, 'Konsep & Dekorasi', 'BENEFIT');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_budget`
--

CREATE TABLE `kriteria_budget` (
  `id_kriteria_budget` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `detail_kriteria1` varchar(30) NOT NULL,
  `id_fuzzy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_budget`
--

INSERT INTO `kriteria_budget` (`id_kriteria_budget`, `id_kriteria`, `detail_kriteria1`, `id_fuzzy`) VALUES
(1, 1, '> 30.000.000', 1),
(2, 1, '> 20.000.000 - 30.000.000', 2),
(3, 1, '> 10.000.000 - 20.000.000', 3),
(4, 1, '5.000.000 - 10.000.000', 4),
(5, 1, '< 5.000.000', 5);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_eo`
--

CREATE TABLE `kriteria_eo` (
  `id_kriteria_eo` int(11) NOT NULL,
  `id_eo` int(11) NOT NULL,
  `id_kriteria_budget` int(11) NOT NULL,
  `id_kriteria_reputasi` int(11) NOT NULL,
  `id_kriteria_fasilitas` int(11) NOT NULL,
  `id_kriteria_konsep` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_eo`
--

INSERT INTO `kriteria_eo` (`id_kriteria_eo`, `id_eo`, `id_kriteria_budget`, `id_kriteria_reputasi`, `id_kriteria_fasilitas`, `id_kriteria_konsep`) VALUES
(1, 118, 5, 3, 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_fasilitas`
--

CREATE TABLE `kriteria_fasilitas` (
  `id_kriteria_fasilitas` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `detail_kriteria3` varchar(30) NOT NULL,
  `id_fuzzy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_fasilitas`
--

INSERT INTO `kriteria_fasilitas` (`id_kriteria_fasilitas`, `id_kriteria`, `detail_kriteria3`, `id_fuzzy`) VALUES
(1, 3, 'Tidak Banyak', 2),
(2, 3, 'Cukup', 3),
(3, 3, 'Banyak', 4),
(4, 3, 'Sangat Banyak', 5);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_konsep`
--

CREATE TABLE `kriteria_konsep` (
  `id_kriteria_konsep` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `detail_kriteria4` varchar(30) NOT NULL,
  `id_fuzzy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_konsep`
--

INSERT INTO `kriteria_konsep` (`id_kriteria_konsep`, `id_kriteria`, `detail_kriteria4`, `id_fuzzy`) VALUES
(1, 4, 'Kurang Baik', 2),
(2, 4, 'Cukup Baik', 3),
(3, 4, 'Baik', 4),
(4, 4, 'Sangat Baik', 5);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_reputasi`
--

CREATE TABLE `kriteria_reputasi` (
  `id_kriteria_reputasi` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `detail_kriteria2` varchar(30) NOT NULL,
  `id_fuzzy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_reputasi`
--

INSERT INTO `kriteria_reputasi` (`id_kriteria_reputasi`, `id_kriteria`, `detail_kriteria2`, `id_fuzzy`) VALUES
(1, 2, '0 - 1.49', 2),
(2, 2, '1.5 - 2.99', 3),
(3, 2, '3.0 - 4.49', 4),
(4, 2, '4.5 - 5.0', 5);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(10) NOT NULL,
  `id_eo` int(11) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `jenis_paket` varchar(50) NOT NULL,
  `harga_paket` bigint(20) NOT NULL,
  `ket_paket` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `id_eo`, `nama_paket`, `jenis_paket`, `harga_paket`, `ket_paket`) VALUES
(28, 118, 'Fun Surprise', 'Birthday', 2000000, 'sasasa'),
(29, 118, 'Emerald', 'Wedding Party', 3000000, 'lalala'),
(30, 118, 'Gold', 'Birthday Party', 500000, 'yeay'),
(33, 119, 'Cool', 'Wedding Party', 5500000, 'hehe');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_eo` int(11) NOT NULL,
  `tgl_pesan` varchar(50) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `pesan` varchar(1000) NOT NULL,
  `status` varchar(20) NOT NULL,
  `sender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_user`, `id_eo`, `tgl_pesan`, `subjek`, `pesan`, `status`, `sender`) VALUES
(1, 1, 118, '11/05/2018 06:14:26 PM', 'hai', 'helo', 'READ', 'KLIEN'),
(2, 9, 118, '11/05/2018 09:22:23 PM', 'lala', 'hahihuheho', 'READ', 'KLIEN'),
(3, 1, 118, '11/11/2018 12:58:11 PM', 'hai', 'lala', 'READ', 'EO'),
(10, 1, 118, '11/11/2018 01:01:14 PM', 'hai', 'h', 'READ', 'EO'),
(11, 1, 118, '11/11/2018 01:33:02 PM', 'hai', 'safasdf', 'READ', 'EO'),
(12, 1, 118, '11/11/2018 01:50:52 PM', 'hai', 'HAHAHA', 'READ', 'EO'),
(14, 1, 118, '11/11/2018 01:58:38 PM', 'hai', 'aaaaae', 'READ', 'EO'),
(16, 1, 118, '11/12/2018 02:38:50 PM', 'hai', 'mau nanya', 'READ', 'KLIEN'),
(17, 1, 119, '11/12/2018 02:43:52 PM', 'lokasi', 'lokasi ', 'SENT', 'KLIEN'),
(18, 1, 118, '11/14/2018 07:00:17 PM', 'hai', 'bisa dibantu?', 'READ', 'EO'),
(19, 9, 118, '11/14/2018 08:36:44 PM', 'lala', '?', 'READ', 'EO'),
(20, 9, 118, '11/14/2018 08:51:37 PM', 'lala', 'saya mau nanya pricelistnya', 'READ', 'KLIEN'),
(21, 9, 118, '11/14/2018 08:52:20 PM', 'lala', 'oke', 'READ', 'EO');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int(11) NOT NULL,
  `id_eo` int(11) NOT NULL,
  `foto` text NOT NULL,
  `ket_foto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `id_eo`, `foto`, `ket_foto`) VALUES
(4, 118, 'portfolio/hamtaro-most-inspirational-quotes-resolution_519728.jpg', '123');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'Aceh'),
(2, 'Bali'),
(3, 'Banten'),
(4, 'Bengkulu'),
(5, 'Gorontalo'),
(6, 'Jakarta'),
(7, 'Jambi'),
(8, 'Jawa Barat'),
(9, 'Jawa Tengah'),
(10, 'Jawa Timur'),
(11, 'Kalimantan Barat'),
(12, 'Kalimantan Selatan'),
(13, 'Kalimantan Tengah'),
(14, 'Kalimantan Timur'),
(15, 'Kalimantan Utara'),
(16, 'Kepulauan Bangka Belitung'),
(17, 'Kepulauan Riau'),
(18, 'Lampung'),
(19, 'Maluku'),
(20, 'Maluku Utara'),
(21, 'Nusa Tenggara Barat'),
(22, 'Nusa Tenggara Timur'),
(23, 'Papua'),
(24, 'Papua Barat'),
(25, 'Riau'),
(26, 'Sulawesi Barat'),
(27, 'Sulawesi Selatan'),
(28, 'Sulawesi Tengah'),
(29, 'Sulawesi Tenggara'),
(30, 'Sulawesi Utara'),
(31, 'Sumatera Barat'),
(32, 'Sumatera Selatan'),
(33, 'Sumatera Utara'),
(34, 'Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `request_layanan`
--

CREATE TABLE `request_layanan` (
  `id_request` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_eo` int(11) NOT NULL,
  `tgl_request` varchar(50) NOT NULL,
  `tgl_acara` varchar(50) NOT NULL,
  `tipe_acara` varchar(100) NOT NULL,
  `lokasi_acara` varchar(200) NOT NULL,
  `jml_peserta` int(11) NOT NULL,
  `durasi_acara` varchar(100) NOT NULL,
  `ket_acara` varchar(1000) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_layanan`
--

INSERT INTO `request_layanan` (`id_request`, `id_user`, `id_eo`, `tgl_request`, `tgl_acara`, `tipe_acara`, `lokasi_acara`, `jml_peserta`, `durasi_acara`, `ket_acara`, `id_paket`, `nama`, `nohp`, `email`, `status`) VALUES
(24, 1, 118, '11/14/2018 09:48:44 PM', '11/22/2018', 's', 's', 1, '1 hours,0 minutes,0 seconds', 's', 29, 'Irene A', '0812-5038-1341', 'irenenous@yahoo.com', 'READ');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_user` int(11) NOT NULL,
  `id_eo` int(11) NOT NULL,
  `tgl_review` varchar(20) NOT NULL,
  `rating` int(11) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_user`, `id_eo`, `tgl_review`, `rating`, `keterangan`) VALUES
(1, 118, '11/06/2018', 3, 'Bagus banget pelayanannya!'),
(9, 118, '11/06/2018', 5, 'Very impressed with Groovy EOâ€™s fast response and quality of work. Willing to work extra & with scope added. Very knowledgeable and experienced in their design and execution. Thumbs up!'),
(1, 118, '11/11/2018', 3, 'Jelek');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `nohp_user` varchar(50) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `foto_user` text NOT NULL,
  `role` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `nohp_user`, `email_user`, `password_user`, `foto_user`, `role`, `status`) VALUES
(1, 'Irene A', '0812-5038-1341', 'irenenous@yahoo.com', '12345', 'image-user/151014-102414.png', 'KLIEN', 'ACTIVE'),
(2, 'Ivennia', '081250381346', 'aivennia@yahoo.com', '123456', 'image-user/admin.png', 'ADMIN', 'ACTIVE'),
(9, 'Albert', '0822-3456-7890', 'albert@yahoo.com', '123456', 'image-user/you-cant-cross-the-sea-quotes-qhd-wallpaper-2560x2560.jpg', 'KLIEN', 'ACTIVE'),
(10, 'Bella', '0812-5678-3421', 'bella@yahoo.com', '123456', 'image-user/user-image.jpg', 'KLIEN', 'PENDING');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_reminder`
--
ALTER TABLE `app_reminder`
  ADD PRIMARY KEY (`id_reminder`),
  ADD KEY `id_eo` (`id_eo`);

--
-- Indexes for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD PRIMARY KEY (`id_bookmark`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_eo` (`id_eo`);

--
-- Indexes for table `eo`
--
ALTER TABLE `eo`
  ADD PRIMARY KEY (`id_eo`),
  ADD UNIQUE KEY `email` (`email_eo`),
  ADD UNIQUE KEY `username_eo` (`id_eo`),
  ADD UNIQUE KEY `id_eo` (`id_eo`),
  ADD KEY `id_provinsi` (`id_provinsi`),
  ADD KEY `id_kota` (`id_kota`);

--
-- Indexes for table `fuzzy`
--
ALTER TABLE `fuzzy`
  ADD PRIMARY KEY (`id_fuzzy`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_eo`
--
ALTER TABLE `kategori_eo`
  ADD KEY `id_eo` (`id_eo`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `kriteria_budget`
--
ALTER TABLE `kriteria_budget`
  ADD PRIMARY KEY (`id_kriteria_budget`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `id_fuzzy` (`id_fuzzy`),
  ADD KEY `id_kriteria_2` (`id_kriteria`);

--
-- Indexes for table `kriteria_eo`
--
ALTER TABLE `kriteria_eo`
  ADD PRIMARY KEY (`id_kriteria_eo`),
  ADD UNIQUE KEY `id_eo` (`id_eo`),
  ADD KEY `id_kriteria_budget` (`id_kriteria_budget`),
  ADD KEY `id_kriteria_reputasi` (`id_kriteria_reputasi`),
  ADD KEY `id_kriteria_fasilitas` (`id_kriteria_fasilitas`),
  ADD KEY `id_kriteria_konsep` (`id_kriteria_konsep`);

--
-- Indexes for table `kriteria_fasilitas`
--
ALTER TABLE `kriteria_fasilitas`
  ADD PRIMARY KEY (`id_kriteria_fasilitas`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `id_fuzzy` (`id_fuzzy`);

--
-- Indexes for table `kriteria_konsep`
--
ALTER TABLE `kriteria_konsep`
  ADD PRIMARY KEY (`id_kriteria_konsep`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `id_fuzzy` (`id_fuzzy`);

--
-- Indexes for table `kriteria_reputasi`
--
ALTER TABLE `kriteria_reputasi`
  ADD PRIMARY KEY (`id_kriteria_reputasi`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `id_fuzzy` (`id_fuzzy`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `id_eo` (`id_eo`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_eo` (`id_eo`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `request_layanan`
--
ALTER TABLE `request_layanan`
  ADD PRIMARY KEY (`id_request`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_eo` (`id_eo`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_eo` (`id_eo`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email_user` (`email_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_reminder`
--
ALTER TABLE `app_reminder`
  MODIFY `id_reminder` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `id_bookmark` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `eo`
--
ALTER TABLE `eo`
  MODIFY `id_eo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT for table `fuzzy`
--
ALTER TABLE `fuzzy`
  MODIFY `id_fuzzy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kriteria_budget`
--
ALTER TABLE `kriteria_budget`
  MODIFY `id_kriteria_budget` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kriteria_eo`
--
ALTER TABLE `kriteria_eo`
  MODIFY `id_kriteria_eo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kriteria_fasilitas`
--
ALTER TABLE `kriteria_fasilitas`
  MODIFY `id_kriteria_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kriteria_konsep`
--
ALTER TABLE `kriteria_konsep`
  MODIFY `id_kriteria_konsep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kriteria_reputasi`
--
ALTER TABLE `kriteria_reputasi`
  MODIFY `id_kriteria_reputasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `request_layanan`
--
ALTER TABLE `request_layanan`
  MODIFY `id_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategori_eo`
--
ALTER TABLE `kategori_eo`
  ADD CONSTRAINT `id_eo_constraint` FOREIGN KEY (`id_eo`) REFERENCES `eo` (`id_eo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_kategori_constraint` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
