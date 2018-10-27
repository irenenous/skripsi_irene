-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2018 at 06:59 PM
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
(1, 'excellenteo@gmail.com', '123456', '', '', '', 0, 0, '', '', '', '', '', '', 0, '', ''),
(2, 'groovyeo@gmail.com', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, '', ''),
(3, 'sasa@yahoo.com', 'sa', 'Array', 'sa', 'sa', 0, 0, 'sa', '2212', 'image-eo/IRENE - friendship-quotes-hd-wallpaper_052819784.jpg', 'image-eo/IRENE - desktop-backgrounds-quotes-tumblr-hd.jpg', 'image-eo/IRENE - Summer-hd-quote-wallpaper.png', 'image-eo/IRENE - P_20150905_163642_BF_p.jpg', 2018, 'sa', 'PENDING'),
(10, 'asdf@asdf.asdf', 'asdf', 'Array', 'asdf', 'asdf', 3, 0, 'dfasdf', '8125-0381-345', 'image-eo/IRENE - hamtaro-most-inspirational-quotes-resolution_519728.jpg', 'image-eo/IRENE - 151014-102414.png', 'image-eo/IRENE - IMG_9268.JPG', 'image-eo/IRENE - 151014-102414.png', 2017, 'asdf', 'PENDING'),
(13, 'ireneandriani1998@rocketmail.com', 'saa', 'image-eo/IRENE - hamtaro-most-inspirational-quotes-resolution_519728.jpg', 'sa', 'sa', 3, 0, 'sa', '8125-0381-345', 'image-eo/IRENE - hamtaro-most-inspirational-quotes-resolution_519728.jpg', 'image-eo/IRENE - IMG_9268.JPG', 'image-eo/IRENE - 151014-101849.png', 'image-eo/IRENE - 151014-102414.png', 2018, 'ww', 'PENDING'),
(24, 'lala123@yahoo.com', '12345', 'image-eo/IRENE - Summer-hd-quote-wallpaper.png', 'LaLa', 'sa', 8, 6, 'sa', '1212-1212-1212', 'image-eo/IRENE - friendship-quotes-hd-wallpaper_052819784.jpg', 'image-eo/IRENE - desktop-backgrounds-quotes-tumblr-hd.jpg', 'image-eo/IRENE - Nice-good-morning-quote-hd-high-resolution-images.jpg', 'image-eo/IRENE - 151014-101849.png', 2018, 'sa', 'PENDING');

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
(24, 3);

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
(11, 'Bau-Bau', 0),
(12, 'Bekasi', 0),
(13, 'Bengkulu', 0),
(14, 'Bima', 0),
(15, 'Binjai', 0),
(16, 'Bitung', 0),
(17, 'Blitar', 0),
(18, 'Bogor', 0),
(19, 'Bontang', 0),
(20, 'Bukittinggi', 0),
(21, 'Cilegon', 0),
(22, 'Cimahi', 0),
(23, 'Cirebon', 0),
(24, 'Denpasar', 0),
(25, 'Depok', 0),
(26, 'Dumai', 0),
(27, 'Gorontalo', 0),
(28, 'Jambi', 0),
(29, 'Jayapura', 0),
(30, 'Kediri', 0),
(31, 'Kendari', 0),
(32, 'Jakarta Barat', 0),
(33, 'Jakarta Pusat', 0),
(34, 'Jakarta Selatan', 0),
(35, 'Jakarta Timur', 0),
(36, 'Jakarta Utara', 0),
(37, 'Kotamobagu', 0),
(38, 'Kupang', 0),
(39, 'Langsa', 0),
(40, 'Lhokseumawe', 0),
(41, 'Lubuklinggau', 0),
(42, 'Madiun', 0),
(43, 'Magelang', 0),
(44, 'Makassar', 0),
(45, 'Malang', 0),
(46, 'Manado', 0),
(47, 'Mataram', 0),
(48, 'Medan', 0),
(49, 'Metro', 0),
(50, 'Meulaboh', 0),
(51, 'Mojokerto', 0),
(52, 'Padang', 0),
(53, 'Padang Sidempuan', 0),
(54, 'Padangpanjang', 0),
(55, 'Pagaralam', 0),
(56, 'Palangkaraya', 0),
(57, 'Palembang', 0),
(58, 'Palu', 0),
(59, 'Pangkalpinang', 0),
(60, 'Parepare', 0),
(61, 'Pariaman', 0),
(62, 'Pasuruan', 0),
(63, 'Payakumbuh', 0),
(64, 'Pekalongan', 0),
(65, 'Pekanbaru', 0),
(66, 'Pematangsiantar', 0),
(67, 'Pontianak', 0),
(68, 'Prabumulih', 0),
(69, 'Probolinggo', 0),
(70, 'Purwokerto', 0),
(71, 'Sabang', 0),
(72, 'Salatiga', 0),
(73, 'Samarinda', 0),
(74, 'Sawahlunto', 0),
(75, 'Semarang', 0),
(76, 'Serang', 0),
(77, 'Sibolga', 0),
(78, 'Singkawang', 0),
(79, 'Solok', 0),
(80, 'Sorong', 0),
(81, 'Subulussalam', 0),
(82, 'Sukabumi', 0),
(83, 'Sungai Penuh', 0),
(84, 'Surabaya', 0),
(85, 'Surakarta', 0),
(86, 'Tangerang', 0),
(87, 'Tangerang Selatan', 0),
(88, 'Tanjungbalai', 0),
(89, 'Tanjungpinang', 0),
(90, 'Tarakan', 0),
(91, 'Tasikmalaya', 0),
(92, 'Tebingtinggi', 0),
(93, 'Tegal', 0),
(94, 'Ternate', 0),
(95, 'Tidore Kepulauan', 0),
(96, 'Tomohon', 0),
(97, 'Tual', 0),
(98, 'Yogyakarta', 0),
(99, 'Palopo', 0);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(10) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `jenis_paket` varchar(100) NOT NULL,
  `harga_paket` varchar(1000) NOT NULL,
  `ket_paket` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `jenis_paket`, `harga_paket`, `ket_paket`) VALUES
(2, 'Emerald Blue', 'Wedding', '3.000.000', 'Include MC');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int(11) NOT NULL,
  `foto` text NOT NULL,
  `ket_foto` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `foto`, `ket_foto`) VALUES
(1, 'b2.jpg', '17th'),
(5, '13792.jpg', '34'),
(6, 'o4.png', '234'),
(7, 'IRENE - hamtaro-most-inspirational-quotes-resolution_519728.jpg', 'hehehe'),
(8, 'IRENE - Summer-hd-quote-wallpaper.png', 'lala');

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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `nohp_user` varchar(50) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `foto_user` text NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `nohp_user`, `email_user`, `password_user`, `foto_user`, `status`) VALUES
(1, 'Irene', '081250381345', 'irenenous@yahoo.com', '123456', '', 'ACTIVE'),
(2, 'Ivennia', '081250381346', 'aivennia@yahoo.com', '12345', '', 'ACTIVE');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eo`
--
ALTER TABLE `eo`
  MODIFY `id_eo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
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
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
