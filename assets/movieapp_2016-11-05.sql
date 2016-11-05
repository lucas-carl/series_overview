# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: movieapp
# Generation Time: 2016-11-05 12:17:20 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table view
# ------------------------------------------------------------

DROP TABLE IF EXISTS `view`;

CREATE TABLE `view` (
  `view_id` varchar(9) NOT NULL DEFAULT '',
  `view_title` varchar(30) DEFAULT '',
  `view_rating` double DEFAULT NULL,
  `view_date` varchar(15) DEFAULT NULL,
  `view_desc` text,
  `view_dur` int(4) DEFAULT NULL,
  `view_type` int(1) DEFAULT '0',
  PRIMARY KEY (`view_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `view` WRITE;
/*!40000 ALTER TABLE `view` DISABLE KEYS */;

INSERT INTO `view` (`view_id`, `view_title`, `view_rating`, `view_date`, `view_desc`, `view_dur`, `view_type`)
VALUES
	('5e26f1471','Titanic',7.3,'1997','84 years later, a 101-year-old woman named Rose DeWitt Bukater tells the story to her granddaughter Lizzy Calvert, Brock Lovett, Lewis Bodine, Bobby Buell and Anatoly Mikailavich on the Keldysh about her life set in April 10th 1912, on a ship called Titan',195,0),
	('865c50c31','Doctor Strange',7.1,'2016','After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under his wing and trains him to defend the world against evil.',115,0),
	('b068c1b1f','Breaking Bad',9.5,'2008-2013','A high school chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing and selling methamphetamine in order to secure his family\'s future.',49,1),
	('e8cf30112','Mr. Robot',8.7,'2015-?','Follows Elliot, a young programmer working as a cyber-security engineer by day, and a vigilante hacker by night.',49,1),
	('fbe783f36','The Americans',8.3,'2013-?','Two Soviet intelligence agents pose as a married couple to spy on the American government.',44,1);

/*!40000 ALTER TABLE `view` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
