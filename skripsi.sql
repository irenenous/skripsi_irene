
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

INSERT INTO `eo` (`id_eo`, `email_eo`, `password_eo`, `foto_eo`, `nama_eo`, `ket_eo`, `alamat_eo`, `nohp_eo`, `foto_ktp`, `fotodiri_ktp`, `foto_alamat`, `foto_siup`, `tahun_diri`, `link_web`, `status`) VALUES
(1, 'excellenteo@gmail.com', '123456', '', '', '', '', '', '', '', '', '', 0, '', ''),
(2, 'groovyeo@gmail.com', '', '', '', '', '', '', '', '', '', '', 0, '', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`) VALUES
(1, 'Ambon'),
(2, 'Balikpapan'),
(3, 'Banda Aceh'),
(4, 'Bandar Lampung'),
(5, 'Bandung'),
(6, 'Banjar'),
(7, 'Banjarbaru'),
(8, 'Banjarmasin'),
(9, 'Batam'),
(10, 'Batu'),
(11, 'Bau-Bau'),
(12, 'Bekasi'),
(13, 'Bengkulu'),
(14, 'Bima'),
(15, 'Binjai'),
(16, 'Bitung'),
(17, 'Blitar'),
(18, 'Bogor'),
(19, 'Bontang'),
(20, 'Bukittinggi'),
(21, 'Cilegon'),
(22, 'Cimahi'),
(23, 'Cirebon'),
(24, 'Denpasar'),
(25, 'Depok'),
(26, 'Dumai'),
(27, 'Gorontalo'),
(28, 'Jambi'),
(29, 'Jayapura'),
(30, 'Kediri'),
(31, 'Kendari'),
(32, 'Jakarta Barat'),
(33, 'Jakarta Pusat'),
(34, 'Jakarta Selatan'),
(35, 'Jakarta Timur'),
(36, 'Jakarta Utara'),
(37, 'Kotamobagu'),
(38, 'Kupang'),
(39, 'Langsa'),
(40, 'Lhokseumawe'),
(41, 'Lubuklinggau'),
(42, 'Madiun'),
(43, 'Magelang'),
(44, 'Makassar'),
(45, 'Malang'),
(46, 'Manado'),
(47, 'Mataram'),
(48, 'Medan'),
(49, 'Metro'),
(50, 'Meulaboh'),
(51, 'Mojokerto'),
(52, 'Padang'),
(53, 'Padang Sidempuan'),
(54, 'Padangpanjang'),
(55, 'Pagaralam'),
(56, 'Palangkaraya'),
(57, 'Palembang'),
(58, 'Palu'),
(59, 'Pangkalpinang'),
(60, 'Parepare'),
(61, 'Pariaman'),
(62, 'Pasuruan'),
(63, 'Payakumbuh'),
(64, 'Pekalongan'),
(65, 'Pekanbaru'),
(66, 'Pematangsiantar'),
(67, 'Pontianak'),
(68, 'Prabumulih'),
(69, 'Probolinggo'),
(70, 'Purwokerto'),
(71, 'Sabang'),
(72, 'Salatiga'),
(73, 'Samarinda'),
(74, 'Sawahlunto'),
(75, 'Semarang'),
(76, 'Serang'),
(77, 'Sibolga'),
(78, 'Singkawang'),
(79, 'Solok'),
(80, 'Sorong'),
(81, 'Subulussalam'),
(82, 'Sukabumi'),
(83, 'Sungai Penuh'),
(84, 'Surabaya'),
(85, 'Surakarta'),
(86, 'Tangerang'),
(87, 'Tangerang Selatan'),
(88, 'Tanjungbalai'),
(89, 'Tanjungpinang'),
(90, 'Tarakan'),
(91, 'Tasikmalaya'),
(92, 'Tebingtinggi'),
(93, 'Tegal'),
(94, 'Ternate'),
(95, 'Tidore Kepulauan'),
(96, 'Tomohon'),
(97, 'Tual'),
(98, 'Yogyakarta'),
(99, 'Palopo');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_provinsi` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_provinsi`, `id_kota`) VALUES
(19, 1),
(14, 2),
(1, 3),
(18, 4),
(8, 5),
(8, 6),
(12, 7),
(12, 8),
(25, 9),
(10, 10),
(29, 11),
(8, 12),
(4, 13),
(21, 14),
(33, 15),
(30, 16),
(8, 17),
(10, 18),
(14, 19),
(31, 20),
(3, 21),
(8, 22),
(8, 23),
(2, 24),
(8, 25),
(25, 26),
(5, 27),
(7, 28),
(23, 29),
(10, 30),
(29, 31),
(6, 32),
(6, 33),
(6, 34),
(6, 35),
(6, 36),
(30, 37),
(22, 38),
(1, 39),
(1, 40),
(32, 41),
(10, 42),
(9, 43),
(27, 44),
(10, 45),
(30, 46),
(21, 47),
(33, 48),
(18, 49),
(1, 50),
(10, 51),
(31, 52),
(33, 53),
(31, 54),
(32, 55),
(13, 56),
(32, 57),
(28, 58),
(16, 59),
(27, 60),
(31, 61),
(10, 62),
(31, 63),
(9, 64),
(25, 65),
(33, 66),
(11, 67),
(32, 68),
(10, 69),
(9, 70),
(1, 71),
(9, 72),
(14, 73),
(31, 74),
(9, 75),
(3, 76),
(33, 77),
(11, 78),
(31, 79),
(24, 80),
(1, 81),
(8, 82),
(7, 83),
(10, 84),
(9, 85),
(3, 86),
(3, 87),
(33, 88),
(17, 89),
(15, 90),
(8, 91),
(33, 92),
(9, 93),
(20, 94),
(20, 95),
(30, 96),
(19, 97),
(34, 98),
(27, 99);

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
(7, 'IRENE - hamtaro-most-inspirational-quotes-resolution_519728.jpg', 'hehehe');

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
  ADD UNIQUE KEY `id_eo` (`id_eo`);

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
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD KEY `id_kota` (`id_kota`),
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
  MODIFY `id_eo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
