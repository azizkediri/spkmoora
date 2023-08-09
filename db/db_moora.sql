-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 11:31 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_moora`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'epan', 'epan'),
(3, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_alternatif`
--

CREATE TABLE `tabel_alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama` text NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `alamat` text NOT NULL,
  `penghasilan` bigint(20) DEFAULT NULL,
  `sehat` varchar(5) DEFAULT NULL,
  `jujur` varchar(5) DEFAULT NULL,
  `permasalahan` varchar(5) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL,
  `usia` varchar(5) DEFAULT NULL,
  `wni` varchar(5) DEFAULT NULL,
  `berdomisili_di_bojonegoro` varchar(5) DEFAULT NULL,
  `jaminan` varchar(5) DEFAULT NULL,
  `bersedia_di_survei` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_alternatif`
--

INSERT INTO `tabel_alternatif` (`id_alternatif`, `nama`, `jenis_kelamin`, `alamat`, `penghasilan`, `sehat`, `jujur`, `permasalahan`, `status`, `usia`, `wni`, `berdomisili_di_bojonegoro`, `jaminan`, `bersedia_di_survei`) VALUES
(80, 'A1', 'L', 'Kediri', 11000000, 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'tidak'),
(81, 'A2', 'P', 'Malang', 11000000, 'ya', 'tidak', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya'),
(82, 'A3', 'P', 'Surabaya', 3600000, 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_hasil`
--

CREATE TABLE `tabel_hasil` (
  `id_hasil` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nilai` double NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_hasil`
--

INSERT INTO `tabel_hasil` (`id_hasil`, `nama`, `nilai`, `tanggal`, `status`) VALUES
(506, 'A1', 0.35355339059327, '2023-08-07 15:38:30', 'rekomendasi'),
(507, 'A2', 0.35355339059327, '2023-08-07 15:38:30', 'tidak rekomendasi'),
(508, 'A2', 0, '2023-08-07 15:38:30', 'tidak rekomendasi'),
(509, 'A1', 0.35355339059327, '2023-08-07 15:45:42', 'rekomendasi'),
(510, 'A2', 0.35355339059327, '2023-08-07 15:45:42', 'rekomendasi'),
(511, 'A2', 0, '2023-08-07 15:45:42', 'tidak rekomendasi'),
(512, '', 0, '2023-08-07 15:45:42', 'tidak rekomendasi'),
(513, 'aa', 0, '2023-08-07 15:45:42', 'tidak rekomendasi'),
(514, 'A1', 0, '2023-08-09 03:00:46', 'rekomendasi'),
(515, 'A2', 0, '2023-08-09 03:00:46', 'rekomendasi'),
(516, '', 0, '2023-08-09 03:00:46', 'tidak rekomendasi'),
(517, 'aa', 0, '2023-08-09 03:00:46', 'tidak rekomendasi'),
(518, 'A1', 0, '2023-08-09 03:03:29', 'rekomendasi'),
(519, 'A1', 0, '2023-08-09 03:04:22', 'rekomendasi'),
(520, 'A2', 0, '2023-08-09 03:04:22', 'tidak rekomendasi'),
(521, 'A1', 0, '2023-08-09 03:06:05', 'rekomendasi'),
(522, 'A2', 0, '2023-08-09 03:06:05', 'rekomendasi'),
(523, 'A3', 0, '2023-08-09 03:06:05', 'tidak rekomendasi'),
(524, 'A1', 0, '2023-08-09 03:08:54', 'rekomendasi'),
(525, 'A2', 0, '2023-08-09 03:08:54', 'rekomendasi'),
(526, 'A3', 0, '2023-08-09 03:08:54', 'tidak rekomendasi'),
(527, 'A1', 0, '2023-08-09 03:11:33', 'rekomendasi'),
(528, 'A2', 0, '2023-08-09 03:11:33', 'rekomendasi'),
(529, 'A3', 0, '2023-08-09 03:11:33', 'tidak rekomendasi'),
(530, 'A1', 0, '2023-08-09 03:12:52', 'rekomendasi'),
(531, 'A2', 0, '2023-08-09 03:12:52', 'tidak rekomendasi'),
(532, 'A1', 0, '2023-08-09 03:14:22', 'rekomendasi'),
(533, 'A2', 0, '2023-08-09 03:14:22', 'tidak rekomendasi'),
(534, 'A1', 0, '2023-08-09 03:14:51', 'rekomendasi'),
(535, 'A2', 0, '2023-08-09 03:14:51', 'tidak rekomendasi'),
(536, 'A1', 0, '2023-08-09 03:22:34', 'rekomendasi'),
(537, 'A2', 0, '2023-08-09 03:22:34', 'tidak rekomendasi'),
(538, 'A1', 0, '2023-08-09 03:31:52', 'rekomendasi'),
(539, 'A2', 0, '2023-08-09 03:31:52', 'tidak rekomendasi'),
(540, 'A4', 0, '2023-08-09 03:31:52', 'tidak rekomendasi'),
(541, 'A5', 0, '2023-08-09 03:31:52', 'tidak rekomendasi'),
(542, 'A5', 0, '2023-08-09 03:31:52', 'tidak rekomendasi'),
(543, 'A5', 0, '2023-08-09 03:31:52', 'tidak rekomendasi'),
(544, 'A1', 0, '2023-08-09 03:34:10', 'rekomendasi'),
(545, 'A2', 0.35355339059327, '2023-08-09 03:34:10', 'rekomendasi'),
(546, 'A3', 0.35355339059327, '2023-08-09 03:34:10', 'tidak rekomendasi'),
(547, 'A1', 0, '2023-08-09 03:40:05', 'rekomendasi'),
(548, 'A2', 0.35355339059327, '2023-08-09 03:40:05', 'rekomendasi'),
(549, 'A3', 0.35355339059327, '2023-08-09 03:40:05', 'tidak rekomendasi'),
(550, 'A1', 0, '2023-08-09 03:40:30', 'rekomendasi'),
(551, 'A2', 0.35355339059327, '2023-08-09 03:40:30', 'rekomendasi'),
(552, 'A3', 0.35355339059327, '2023-08-09 03:40:30', 'tidak rekomendasi'),
(553, 'A1', 0, '2023-08-09 03:41:43', 'rekomendasi'),
(554, 'A2', 0.35355339059327, '2023-08-09 03:41:43', 'rekomendasi'),
(555, 'A3', 0.35355339059327, '2023-08-09 03:41:43', 'tidak rekomendasi'),
(556, 'A1', 0, '2023-08-09 03:42:47', 'rekomendasi'),
(557, 'A2', 0.35355339059327, '2023-08-09 03:42:47', 'rekomendasi'),
(558, 'A3', 0.35355339059327, '2023-08-09 03:42:47', 'tidak rekomendasi'),
(559, 'A1', 0, '2023-08-09 03:44:31', 'rekomendasi'),
(560, 'A2', 0.35355339059327, '2023-08-09 03:44:31', 'rekomendasi'),
(561, 'A3', 0.35355339059327, '2023-08-09 03:44:31', 'tidak rekomendasi'),
(562, 'A1', 0, '2023-08-09 03:46:47', 'rekomendasi'),
(563, 'A2', 0.35355339059327, '2023-08-09 03:46:47', 'rekomendasi'),
(564, 'A3', 0.35355339059327, '2023-08-09 03:46:47', 'tidak rekomendasi'),
(565, 'A1', 0, '2023-08-09 03:47:21', 'rekomendasi'),
(566, 'A2', 0.35355339059327, '2023-08-09 03:47:21', 'rekomendasi'),
(567, 'A3', 0.35355339059327, '2023-08-09 03:47:21', 'tidak rekomendasi'),
(568, 'A1', 0, '2023-08-09 03:47:59', 'rekomendasi'),
(569, 'A2', 0.35355339059327, '2023-08-09 03:47:59', 'rekomendasi'),
(570, 'A3', 0.35355339059327, '2023-08-09 03:47:59', 'tidak rekomendasi'),
(571, 'A1', 0, '2023-08-09 03:51:53', 'rekomendasi'),
(572, 'A2', 0.35355339059327, '2023-08-09 03:51:53', 'rekomendasi'),
(573, 'A3', 0.35355339059327, '2023-08-09 03:51:53', 'tidak rekomendasi'),
(574, 'A1', 0, '2023-08-09 03:52:36', 'rekomendasi'),
(575, 'A2', 0.35355339059327, '2023-08-09 03:52:36', 'rekomendasi'),
(576, 'A3', 0.35355339059327, '2023-08-09 03:52:36', 'tidak rekomendasi'),
(577, 'A1', 0, '2023-08-09 03:52:44', 'rekomendasi'),
(578, 'A2', 0.35355339059327, '2023-08-09 03:52:44', 'rekomendasi'),
(579, 'A3', 0.35355339059327, '2023-08-09 03:52:44', 'tidak rekomendasi'),
(580, 'A1', 0, '2023-08-09 03:54:36', 'rekomendasi'),
(581, 'A2', 0.35355339059327, '2023-08-09 03:54:36', 'rekomendasi'),
(582, 'A3', 0.35355339059327, '2023-08-09 03:54:36', 'tidak rekomendasi'),
(583, 'A1', 0, '2023-08-09 04:08:15', 'rekomendasi'),
(584, 'A2', 0.35355339059327, '2023-08-09 04:08:15', 'rekomendasi'),
(585, 'A3', 0.35355339059327, '2023-08-09 04:08:15', 'tidak rekomendasi'),
(586, 'A1', 0, '2023-08-09 04:10:38', 'rekomendasi'),
(587, 'A2', 0.35355339059327, '2023-08-09 04:10:38', 'rekomendasi'),
(588, 'A3', 0.35355339059327, '2023-08-09 04:10:38', 'tidak rekomendasi'),
(589, 'A1', 0, '2023-08-09 04:12:44', 'rekomendasi'),
(590, 'A2', 0.35355339059327, '2023-08-09 04:12:44', 'rekomendasi'),
(591, 'A3', 0.35355339059327, '2023-08-09 04:12:44', 'tidak rekomendasi'),
(592, 'A1', 0, '2023-08-09 04:13:23', 'rekomendasi'),
(593, 'A2', 0.35355339059327, '2023-08-09 04:13:23', 'rekomendasi'),
(594, 'A3', 0.35355339059327, '2023-08-09 04:13:23', 'tidak rekomendasi'),
(595, 'A1', 0, '2023-08-09 04:13:49', 'rekomendasi'),
(596, 'A2', 0.35355339059327, '2023-08-09 04:13:49', 'rekomendasi'),
(597, 'A3', 0.35355339059327, '2023-08-09 04:13:49', 'tidak rekomendasi'),
(598, 'A1', 0, '2023-08-09 04:15:02', 'rekomendasi'),
(599, 'A2', 0.35355339059327, '2023-08-09 04:15:02', 'rekomendasi'),
(600, 'A3', 0.35355339059327, '2023-08-09 04:15:02', 'tidak rekomendasi'),
(601, 'A1', 0, '2023-08-09 04:16:15', 'rekomendasi'),
(602, 'A2', 0.35355339059327, '2023-08-09 04:16:15', 'rekomendasi'),
(603, 'A3', 0.35355339059327, '2023-08-09 04:16:15', 'tidak rekomendasi'),
(604, 'A1', 0, '2023-08-09 04:17:31', 'rekomendasi'),
(605, 'A2', 0.35355339059327, '2023-08-09 04:17:31', 'rekomendasi'),
(606, 'A3', 0.35355339059327, '2023-08-09 04:17:31', 'tidak rekomendasi'),
(607, 'A1', 0, '2023-08-09 04:20:47', 'rekomendasi'),
(608, 'A2', 0.35355339059327, '2023-08-09 04:20:47', 'tidak rekomendasi'),
(609, 'A3', 0.35355339059327, '2023-08-09 04:20:47', 'tidak rekomendasi'),
(610, 'A1', 0, '2023-08-09 04:21:47', 'rekomendasi'),
(611, 'A2', 0.35355339059327, '2023-08-09 04:21:47', 'tidak rekomendasi'),
(612, 'A3', 0.35355339059327, '2023-08-09 04:21:47', 'tidak rekomendasi'),
(613, 'A1', 0, '2023-08-09 04:23:10', 'rekomendasi'),
(614, 'A2', 0.35355339059327, '2023-08-09 04:23:10', 'tidak rekomendasi'),
(615, 'A3', 0.35355339059327, '2023-08-09 04:23:10', 'tidak rekomendasi'),
(616, 'A1', 0, '2023-08-09 04:23:28', 'rekomendasi'),
(617, 'A2', 0.35355339059327, '2023-08-09 04:23:28', 'tidak rekomendasi'),
(618, 'A3', 0.35355339059327, '2023-08-09 04:23:28', 'tidak rekomendasi'),
(619, 'A1', 0, '2023-08-09 04:23:46', 'rekomendasi'),
(620, 'A2', 0.35355339059327, '2023-08-09 04:23:46', 'tidak rekomendasi'),
(621, 'A3', 0.35355339059327, '2023-08-09 04:23:46', 'tidak rekomendasi'),
(622, 'A1', 0, '2023-08-09 04:24:54', 'rekomendasi'),
(623, 'A2', 0.35355339059327, '2023-08-09 04:24:54', 'tidak rekomendasi'),
(624, 'A3', 0.35355339059327, '2023-08-09 04:24:54', 'tidak rekomendasi'),
(625, 'A1', 0, '2023-08-09 04:25:01', 'rekomendasi'),
(626, 'A2', 0.35355339059327, '2023-08-09 04:25:01', 'tidak rekomendasi'),
(627, 'A3', 0.35355339059327, '2023-08-09 04:25:01', 'tidak rekomendasi'),
(628, 'A1', 0, '2023-08-09 04:25:33', 'rekomendasi'),
(629, 'A2', 0.35355339059327, '2023-08-09 04:25:33', 'tidak rekomendasi'),
(630, 'A3', 0.35355339059327, '2023-08-09 04:25:33', 'tidak rekomendasi'),
(631, 'A1', 0, '2023-08-09 04:25:49', 'rekomendasi'),
(632, 'A2', 0.35355339059327, '2023-08-09 04:25:49', 'tidak rekomendasi'),
(633, 'A3', 0.35355339059327, '2023-08-09 04:25:49', 'tidak rekomendasi'),
(634, 'A1', 0, '2023-08-09 04:27:10', 'rekomendasi'),
(635, 'A2', 0.35355339059327, '2023-08-09 04:27:10', 'tidak rekomendasi'),
(636, 'A3', 0.35355339059327, '2023-08-09 04:27:10', 'tidak rekomendasi'),
(637, 'A1', 0, '2023-08-09 04:29:51', 'rekomendasi'),
(638, 'A2', 0.35355339059327, '2023-08-09 04:29:51', 'tidak rekomendasi'),
(639, 'A3', 0.35355339059327, '2023-08-09 04:29:51', 'tidak rekomendasi'),
(640, 'A1', 0, '2023-08-09 04:30:47', 'rekomendasi'),
(641, 'A2', 0.35355339059327, '2023-08-09 04:30:47', 'tidak rekomendasi'),
(642, 'A3', 0.35355339059327, '2023-08-09 04:30:47', 'tidak rekomendasi');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kriteria`
--

CREATE TABLE `tabel_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria` text NOT NULL,
  `type` varchar(10) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_kriteria`
--

INSERT INTO `tabel_kriteria` (`id_kriteria`, `kriteria`, `type`, `bobot`) VALUES
(1, 'penghasilan', 'benefit', 2),
(2, 'sehat', 'benefit', 2),
(3, 'jujur', 'benefit', 1),
(4, 'permasalahan', 'cost', 1),
(5, 'status', 'benefit', 1),
(6, 'usia', 'cost', 1),
(7, 'wni', 'benefit', 0.5),
(8, 'berdomisili_di_bojonegoro', 'benefit', 0.5),
(9, 'jaminan', 'benefit', 0.5),
(10, 'bersedia_di_survei', 'benefit', 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_nilai`
--

CREATE TABLE `tabel_nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_nilai`
--

INSERT INTO `tabel_nilai` (`id_nilai`, `id_kriteria`, `id_alternatif`, `nilai`) VALUES
(490, 1, 80, 5),
(491, 2, 80, 1),
(492, 3, 80, 1),
(493, 4, 80, 1),
(494, 5, 80, 1),
(495, 6, 80, 1),
(496, 7, 80, 1),
(497, 8, 80, 1),
(498, 9, 80, 1),
(499, 10, 80, 0),
(500, 1, 81, 5),
(501, 2, 81, 1),
(502, 3, 81, 0),
(503, 4, 81, 1),
(504, 5, 81, 1),
(505, 6, 81, 1),
(506, 7, 81, 1),
(507, 8, 81, 1),
(508, 9, 81, 1),
(509, 10, 81, 1),
(510, 1, 82, 3),
(511, 2, 82, 1),
(512, 3, 82, 1),
(513, 4, 82, 1),
(514, 5, 82, 1),
(515, 6, 82, 1),
(516, 7, 82, 1),
(517, 8, 82, 1),
(518, 9, 82, 1),
(519, 10, 82, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tabel_alternatif`
--
ALTER TABLE `tabel_alternatif`
  ADD PRIMARY KEY (`id_alternatif`) USING BTREE;

--
-- Indexes for table `tabel_hasil`
--
ALTER TABLE `tabel_hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tabel_nilai`
--
ALTER TABLE `tabel_nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `id_siswa` (`id_alternatif`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_alternatif`
--
ALTER TABLE `tabel_alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `tabel_hasil`
--
ALTER TABLE `tabel_hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=643;

--
-- AUTO_INCREMENT for table `tabel_kriteria`
--
ALTER TABLE `tabel_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tabel_nilai`
--
ALTER TABLE `tabel_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=520;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
