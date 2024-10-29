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

-- Dumping structure for table portfoliohykl.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table portfoliohykl.contacts: ~1 rows (approximately)
INSERT INTO `contacts` (`id`, `address`, `phone`, `email`) VALUES
	(1, 'Blk. I No.12, Serua, Kec. Ciputat, Kota Tangerang Selatan, Banten 15417', '+62 8788 6821 060', 'haykalilys@gmail.com');

-- Dumping structure for table portfoliohykl.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `filename` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table portfoliohykl.images: ~0 rows (approximately)
INSERT INTO `images` (`id`, `title`, `category`, `filename`) VALUES
	(1, 'Estate', 'website', 'prop.png'),
	(2, 'BPOM Mobile', 'website', 'cita.png'),
	(3, 'Medicine ', 'application', 'sakit.jpg'),
	(4, 'BPOM Mobile', 'application', 'mockup.png'),
	(5, 'Sportzy.co', 'website', 'sportzy.png'),
	(6, 'Alinea Fest 1', 'website', 'ajf.jpg'),
	(7, 'Alinea Fest', 'website', 'ajff.jpg'),
	(8, 'Cusmmors', 'dashboard', 'dashbord.png'),
	(9, 'Montesse Steak House', 'website', 'steaks.png');

-- Dumping structure for table portfoliohykl.messages
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table portfoliohykl.messages: ~25 rows (approximately)
INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
	(1, 'haykal', 'aaa@gmail.com', 'komplen', 'so if ii', '2024-10-21 15:02:47'),
	(4, 'saipul', 'saipul@gmail.com', 'nyoba', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', '2024-10-21 15:06:30'),
	(5, 'jakd', 'sdf@gmial.com', 'dfdfdf', 'oshsshwskhdhskss', '2024-10-21 15:09:55'),
	(6, 'hekal', 'hekal@gmil.com', 'supri', 'supra mk4f', '2024-10-21 15:12:40'),
	(7, 'hekalils', 'hekalaa@gmil.com', 'supriagain', 'supra mk4f sukamakan nasi', '2024-10-21 15:13:50'),
	(8, 'hekaljamaludin', 'hekal@gmil.com', 'supri', 'sukarrriiiiiiiiiiiiiiiiiiiiiii', '2024-10-21 15:14:18'),
	(9, 'hekaljamaludindssd', 'hekal@gmil.com', 'supri', 'sfsdfdsfdsf', '2024-10-21 15:15:25'),
	(10, 'hekaljamaludindssds', 'hekal@gmil.com', 'supri', 'sfsdfdsfdsf', '2024-10-21 15:16:45'),
	(11, 'dsfslkfjsdfda', 'sdfdsf@agus.com', ' sepertinya kau', 'sfddsfsdfsdf', '2024-10-21 15:17:33'),
	(12, 'dsfslkfjsdfdas', 'sdfdsf@agus.com', ' sepertinya kau', 'sfddsfsdfsdf', '2024-10-21 15:18:12'),
	(13, 'haykalilys@gmail.comcxczc', 'haykalilys@gmail.com', 'wwwwwwwwwwwwwwer', 'weeeeeeeeeeeeeee', '2024-10-21 15:18:26'),
	(14, 'dslkfjslkf', 'dsfdsl@gmail.com', 'sssjajss', 'sajam sajam sajam', '2024-10-22 00:47:00'),
	(15, 'dslkfjslkfliyasa', 'dsfdsl@gmail.coid', 'sssjajssaaaa', 'semuasemuasemuase', '2024-10-22 00:54:51'),
	(16, 'lagilagi', 'jandi@mgail.com', 'personil', 'alkdsfjsalfjdsflkdsj', '2024-10-22 01:02:37'),
	(17, 'lagilagiss', 'jandi@mgail.com', 'personil', 'pllisss bisa', '2024-10-22 01:03:11'),
	(18, 'lagilagiss77', 'jandi@mgail.com', 'personil', 'udah hh', '2024-10-22 01:03:37'),
	(19, 'lagilagiss77657', 'jandi@mgail.com', 'personil', 'khkjhkjhkj', '2024-10-22 01:04:32'),
	(21, 'lagilagiss77657999', 'jandi@mgail.com', 'personil', 'udah ah capek', '2024-10-22 01:05:57'),
	(23, 'lagilagiss77657999aggis', 'jandi@mgail.com', 'personil', 'lsdkfjslfjlkdsafdsa', '2024-10-22 01:08:41'),
	(24, 'lagilagiss77657999aggisgffd', 'jandi@mgail.com', 'personil', 'oiuuiu', '2024-10-22 01:09:27'),
	(25, 'fjldsfj', 'haykalilys@gmail.com', 'wwwwwwwwwwwwwwer', 'weeeeeeeeeeeeeee', '2024-10-22 01:09:52'),
	(26, 'fjldsfjnkjh', 'haykalilys@gmail.com', 'wwwwwwwwwwwwwwer', 'kkkkkkkkkkkkkkkkkk', '2024-10-22 01:11:07'),
	(27, 'fjldsfjnkjhsdfdsf', 'haykalilys@gmail.com', 'wwwwwwwwwwwwwwer', 'dsfdsfds', '2024-10-22 01:11:46'),
	(28, 'haykalilys@gmail.chjk', 'haykalilys@gmail.com', 'wwwwwwwwwwwwwwer', 'weeeeeeeeeeeeeee', '2024-10-22 01:14:09'),
	(29, 'udahcape', 'cape@fmail.con', 'KOPIKOPIKPOI', 'SDFDSF', '2024-10-22 01:14:50');

-- Dumping structure for table portfoliohykl.profiles
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `additional_info` text NOT NULL,
  `cv_link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table portfoliohykl.profiles: ~1 rows (approximately)
INSERT INTO `profiles` (`id`, `image`, `description`, `additional_info`, `cv_link`) VALUES
	(1, 'img/profile.png', 'I am a 5th semester student majoring in Informatics who has a great interest in Front-end development and UI/UX design. I was very interested in the aesthetic and functional aspects of creating user interfaces. My interest in Front-end development includes a deep understanding of HTML, CSS, and JavaScript. I also have a deep interest in UI/UX design, focusing on the principles of responsive design, typography, and effective layout.', 'Additionally, my passion for UI/UX design focuses on creating user-friendly and visually appealing experiences. I am particularly drawn to the principles of responsive design, ensuring that interfaces adapt seamlessly across devices, as well as the effective use of typography and layout to enhance usability. I am always excited to explore new design trends and techniques to create engaging digital experiences that meet both aesthetic and functional goals.', 'cv.pdf');

-- Dumping structure for table portfoliohykl.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table portfoliohykl.services: ~4 rows (approximately)
INSERT INTO `services` (`id`, `title`, `description`, `icon`) VALUES
	(1, 'Web Design', 'Building functional, attractive, and responsive websites for all devices.', 'la la-cube'),
	(2, 'Mobile Applications', 'Designing efficient, interactive, and user-friendly mobile apps.', 'la la-mobile'),
	(3, 'Graphic Design', 'Creating professional, creative visuals to strengthen brand identity.', 'la la-image'),
	(4, 'SEO', 'Optimizing websites to boost ranking and traffic through search engines.', 'la la-search');

-- Dumping structure for table portfoliohykl.tetimonial
CREATE TABLE IF NOT EXISTS `tetimonial` (
  `deskripsi` varchar(500) DEFAULT NULL,
  `pengguna` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table portfoliohykl.tetimonial: ~4 rows (approximately)
INSERT INTO `tetimonial` (`deskripsi`, `pengguna`) VALUES
	('"Expertise transformed our digital product into something truly engaging. His keen eye for visual design and user experience created a seamless, polished interface that our users love. His work made a real difference for our project!"', '&mdash; Joshua Filler'),
	('"Haykal exceeded our expectations with his creativity and technical skills. His ability to combine clean design with seamless functionality made a significant impact on our project. We couldn’t be happier with the results!"', '&mdash; Stewie Edward'),
	('"Working with Haykal was an absolute pleasure. His attention to detail and passion for front-end development and UI/UX design brought our vision to life. The final product was not only visually stunning but also incredibly user-friendly."', '&mdash; Michael Angelo');

-- Dumping structure for table portfoliohykl.uploadimg
CREATE TABLE IF NOT EXISTS `uploadimg` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table portfoliohykl.uploadimg: ~0 rows (approximately)
INSERT INTO `uploadimg` (`id`, `nama`, `foto`) VALUES
	(1, NULL, 'banner.png');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
