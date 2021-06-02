-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table db_dss.saw_alternatives
CREATE TABLE IF NOT EXISTS `saw_alternatives` (
  `id_alternative` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id_alternative`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table db_dss.saw_alternatives: 8 rows
/*!40000 ALTER TABLE `saw_alternatives` DISABLE KEYS */;
INSERT INTO `saw_alternatives` (`id_alternative`, `name`) VALUES
	(1, 'Ricky Martin Ginting'),
	(2, 'Robertus Rinaldi Pakpahan'),
	(3, 'Samuel Sitorus'),
	(4, 'Aprius Laia'),
	(5, 'Elisa Priska Nainggolan'),
	(6, 'Damayanti Simamora'),
	(7, 'Ely Candra'),
	(8, 'Lasdina Sihotang');
/*!40000 ALTER TABLE `saw_alternatives` ENABLE KEYS */;

-- Dumping structure for table db_dss.saw_criterias
CREATE TABLE IF NOT EXISTS `saw_criterias` (
  `id_criteria` tinyint(3) unsigned NOT NULL,
  `criteria` varchar(100) NOT NULL,
  `weight` float NOT NULL,
  `attribute` set('benefit','cost') DEFAULT NULL,
  PRIMARY KEY (`id_criteria`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table db_dss.saw_criterias: 5 rows
/*!40000 ALTER TABLE `saw_criterias` DISABLE KEYS */;
INSERT INTO `saw_criterias` (`id_criteria`, `criteria`, `weight`, `attribute`) VALUES
	(1, 'Penguasaan Aspek Teknis', 2.5, 'benefit'),
	(2, 'Pengalaman Kerja', 2.8, 'benefit'),
	(3, 'Interpersonal Skill', 1.5, 'benefit'),
	(4, 'Usia', 2, 'cost'),
	(5, 'Staus Perkawainan', 2.8, 'cost');
/*!40000 ALTER TABLE `saw_criterias` ENABLE KEYS */;

-- Dumping structure for table db_dss.saw_evaluations
CREATE TABLE IF NOT EXISTS `saw_evaluations` (
  `id_alternative` smallint(5) unsigned NOT NULL,
  `id_criteria` tinyint(3) unsigned NOT NULL,
  `value` float NOT NULL,
  PRIMARY KEY (`id_alternative`,`id_criteria`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table db_dss.saw_evaluations: 30 rows
/*!40000 ALTER TABLE `saw_evaluations` DISABLE KEYS */;
INSERT INTO `saw_evaluations` (`id_alternative`, `id_criteria`, `value`) VALUES
	(1, 1, 8),
	(1, 2, 2),
	(1, 3, 7.5),
	(1, 4, 36),
	(1, 5, 5),
	(2, 1, 7.5),
	(2, 2, 1.5),
	(2, 3, 7.5),
	(2, 4, 43),
	(2, 5, 8),
	(3, 1, 7),
	(3, 2, 3.5),
	(3, 3, 6.5),
	(3, 4, 43),
	(3, 5, 10),
	(4, 1, 7.5),
	(4, 2, 0.5),
	(4, 3, 8.5),
	(4, 4, 30),
	(4, 5, 10),
	(5, 1, 8),
	(5, 2, 6.5),
	(5, 3, 8.5),
	(5, 4, 37),
	(5, 5, 8),
	(6, 2, 2),
	(6, 1, 6),
	(6, 3, 9.5),
	(6, 4, 18),
	(6, 5, 1);
/*!40000 ALTER TABLE `saw_evaluations` ENABLE KEYS */;

-- Dumping structure for table db_dss.saw_users
CREATE TABLE IF NOT EXISTS `saw_users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table db_dss.saw_users: ~1 rows (approximately)
/*!40000 ALTER TABLE `saw_users` DISABLE KEYS */;
INSERT INTO `saw_users` (`id_user`, `username`, `password`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');
/*!40000 ALTER TABLE `saw_users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
