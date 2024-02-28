-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
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


-- Dumping database structure for tcl
CREATE DATABASE IF NOT EXISTS `tcl` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `tcl`;

-- Dumping structure for table tcl.m_pengiriman
CREATE TABLE IF NOT EXISTS `m_pengiriman` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pengiriman_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table tcl.m_pengiriman: ~1 rows (approximately)
INSERT INTO `m_pengiriman` (`id`, `pengiriman_type`, `created_at`, `updated_by`) VALUES
	(1, 'jne', '2024-02-27 22:40:07', 1);

-- Dumping structure for table tcl.m_plan
CREATE TABLE IF NOT EXISTS `m_plan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `plan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table tcl.m_plan: ~1 rows (approximately)
INSERT INTO `m_plan` (`id`, `plan`, `created_at`, `updated_by`) VALUES
	(1, 'annual', '2024-02-27 19:45:11', 1);

-- Dumping structure for table tcl.m_po
CREATE TABLE IF NOT EXISTS `m_po` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `po_type` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table tcl.m_po: ~1 rows (approximately)
INSERT INTO `m_po` (`id`, `po_type`, `created_at`, `updated_by`) VALUES
	(1, 'semi', '2024-02-27 22:41:35', 1);

-- Dumping structure for table tcl.partner
CREATE TABLE IF NOT EXISTS `partner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table tcl.partner: ~2 rows (approximately)
INSERT INTO `partner` (`id`, `name`, `created_at`, `updated_by`) VALUES
	(1, 'client 1', NULL, 1),
	(2, 'client 2', '2024-02-27 22:42:00', 1);

-- Dumping structure for table tcl.register_plan
CREATE TABLE IF NOT EXISTS `register_plan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `plan` int(11) DEFAULT NULL,
  `partner` int(11) DEFAULT NULL,
  `po_type` int(11) DEFAULT NULL,
  `truck_type` int(11) DEFAULT NULL,
  `pengiriman_type` int(11) DEFAULT NULL,
  `tanggal_in` varchar(50) DEFAULT NULL,
  `tanggal_out` varchar(50) DEFAULT NULL,
  `no_surat_jalan` varchar(50) DEFAULT NULL,
  `no_polisi` varchar(50) DEFAULT NULL,
  `tanggal_eta` varchar(50) DEFAULT NULL,
  `driver` varchar(50) DEFAULT NULL,
  `vendor_transporter` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table tcl.register_plan: ~3 rows (approximately)
INSERT INTO `register_plan` (`id`, `plan`, `partner`, `po_type`, `truck_type`, `pengiriman_type`, `tanggal_in`, `tanggal_out`, `no_surat_jalan`, `no_polisi`, `tanggal_eta`, `driver`, `vendor_transporter`) VALUES
	(1, 1, 1, 1, 1, 2, '28022024', '29022024', 'abc123', '123abc', '28022024', 'user', 'user'),
	(2, 1, 1, 1, 1, 1, '2024-02-28', '2024-02-29', 'b', 'a', '2024-02-29', 'v', 'c'),
	(3, 1, 1, 1, 1, 1, '2024-02-28', '2024-02-29', 'b', 'a', '2024-02-29', 'v', 'c'),
	(4, 1, 1, 1, 1, 1, '2024-02-28', '2024-02-29', 'b', 'a', '2024-02-29', 'v', 'c'),
	(5, 1, 2, 1, 4, 1, '2024-02-28', '2024-02-29', 'dd', 'ba', '2024-02-29', 'gg', 'aa');

-- Dumping structure for table tcl.t_truck
CREATE TABLE IF NOT EXISTS `t_truck` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `truck_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table tcl.t_truck: ~6 rows (approximately)
INSERT INTO `t_truck` (`id`, `truck_type`, `created_at`, `updated_by`) VALUES
	(1, 'pick up', NULL, 1),
	(2, 'cde', NULL, 1),
	(3, 'cdd', NULL, 1),
	(4, 'fuso', NULL, 1),
	(5, 'tronton', NULL, 1),
	(9, 'wingbox', '2024-02-27 22:42:50', 1);

-- Dumping structure for table tcl.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table tcl.user: ~2 rows (approximately)
INSERT INTO `user` (`id`, `email`, `password`, `username`, `created_at`, `updated_by`) VALUES
	(1, 'ditya@tcl.com', '123456', 'ditya', '2024-02-27 19:29:21', 1),
	(4, 'test2@user.com', '$2y$12$dK/uH2z/mpeyBly61Ew9leA8/1.0.vOqXK6UCRdZtYXgUtHbQUvoi', 'testing2', '2024-02-27 22:12:03', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
