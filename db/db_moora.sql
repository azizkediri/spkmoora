-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_moora
CREATE DATABASE IF NOT EXISTS `db_moora` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_moora`;

-- Dumping data for table db_moora.admin: ~3 rows (approximately)
INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
	(1, 'epan', 'epan'),
	(3, 'admin', 'admin');

-- Dumping data for table db_moora.tabel_alternatif: ~3 rows (approximately)
INSERT INTO `tabel_alternatif` (`id_alternatif`, `nama`, `jenis_kelamin`, `alamat`, `penghasilan`, `sehat`, `jujur`, `permasalahan`, `status`, `usia`, `wni`, `berdomisili_di_bojonegoro`, `jaminan`, `bersedia_di_survei`) VALUES
	(65, 'A1', 'L', 'A', 11000000, 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya'),
	(67, 'A2', 'P', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(68, 'A2', 'P', 'Aa', 11000000, 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'tidak');

-- Dumping data for table db_moora.tabel_hasil: ~0 rows (approximately)
INSERT INTO `tabel_hasil` (`id_hasil`, `nama`, `nilai`, `tanggal`, `status`) VALUES
	(506, 'A1', 0.35355339059327, '2023-08-07 22:38:30', 'rekomendasi'),
	(507, 'A2', 0.35355339059327, '2023-08-07 22:38:30', 'tidak rekomendasi'),
	(508, 'A2', 0, '2023-08-07 22:38:30', 'tidak rekomendasi');

-- Dumping data for table db_moora.tabel_kriteria: ~10 rows (approximately)
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

-- Dumping data for table db_moora.tabel_nilai: ~44 rows (approximately)
INSERT INTO `tabel_nilai` (`id_nilai`, `id_kriteria`, `id_alternatif`, `nilai`) VALUES
	(342, 1, 65, 5),
	(343, 2, 65, 1),
	(344, 3, 65, 1),
	(345, 4, 65, 1),
	(346, 5, 65, 1),
	(347, 6, 65, 1),
	(348, 7, 65, 1),
	(349, 8, 65, 1),
	(350, 9, 65, 1),
	(351, 10, 65, 1),
	(352, 68, 65, 0),
	(353, 1, 66, 4),
	(354, 2, 66, 1),
	(355, 3, 66, 1),
	(356, 4, 66, 1),
	(357, 5, 66, 1),
	(358, 6, 66, 1),
	(359, 7, 66, 1),
	(360, 8, 66, 1),
	(361, 9, 66, 1),
	(362, 10, 66, 1),
	(363, 68, 66, 0),
	(364, 1, 67, 5),
	(365, 2, 67, 1),
	(366, 3, 67, 1),
	(367, 4, 67, 1),
	(368, 5, 67, 1),
	(369, 6, 67, 1),
	(370, 7, 67, 1),
	(371, 8, 67, 1),
	(372, 9, 67, 1),
	(373, 10, 67, 1),
	(374, 68, 67, 0),
	(375, 1, 68, 5),
	(376, 2, 68, 0),
	(377, 3, 68, 0),
	(378, 4, 68, 0),
	(379, 5, 68, 0),
	(380, 6, 68, 0),
	(381, 7, 68, 0),
	(382, 8, 68, 0),
	(383, 9, 68, 0),
	(384, 10, 68, 0),
	(385, 68, 68, 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
