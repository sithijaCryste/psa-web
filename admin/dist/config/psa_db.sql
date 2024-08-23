-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.1.0 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.7.0.6850
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table psa_db.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table psa_db.admin: ~0 rows (approximately)
REPLACE INTO `admin` (`id`, `name`, `email`, `password`) VALUES
	(1, 'admin', 'admin@gmail.com', '1234567');

-- Dumping structure for table psa_db.category
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `cat_name_sin` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `cat_name_tam` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`cat_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table psa_db.category: ~1 rows (approximately)
REPLACE INTO `category` (`cat_id`, `cat_name`, `cat_name_sin`, `cat_name_tam`) VALUES
	(2, 'People\'s Manifesto', NULL, NULL);

-- Dumping structure for table psa_db.document
CREATE TABLE IF NOT EXISTS `document` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `name_sin` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `name_tam` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `status_id` int DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `category_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status_id` (`status_id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `FK_document_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`cat_id`),
  CONSTRAINT `FK_document_status` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table psa_db.document: ~1 rows (approximately)
REPLACE INTO `document` (`id`, `name`, `name_sin`, `name_tam`, `url`, `status_id`, `date`, `category_id`) VALUES
	(2, 'people\'s manifesto', NULL, NULL, 'web/document/66c4c3f00fd40.pdf', 1, '2024-08-20 16:27:28', 2);

-- Dumping structure for table psa_db.gallery
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int NOT NULL AUTO_INCREMENT,
  `url` varchar(45) NOT NULL,
  `date` datetime NOT NULL,
  `title` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table psa_db.gallery: ~2 rows (approximately)
REPLACE INTO `gallery` (`id`, `url`, `date`, `title`) VALUES
	(4, 'vtkALjuws3c', '2024-08-15 00:00:00', 'People\'s Manifesto - To the People'),
	(8, 'RK5o7NoxKYY', '2024-08-16 14:29:50', 'ජනාධිපතිවරණය සඳහා නාමයෝජනා භාරදීම1');

-- Dumping structure for table psa_db.members
CREATE TABLE IF NOT EXISTS `members` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table psa_db.members: ~0 rows (approximately)

-- Dumping structure for table psa_db.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `header` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `header_sin` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `header_ta` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `content` text,
  `content_sin` text,
  `content_ta` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `main-img` varchar(45) DEFAULT NULL,
  `img2` varchar(45) DEFAULT NULL,
  `img3` varchar(45) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table psa_db.news: ~0 rows (approximately)
REPLACE INTO `news` (`id`, `header`, `header_sin`, `header_ta`, `content`, `content_sin`, `content_ta`, `main-img`, `img2`, `img3`, `date`) VALUES
	(3, 'dasa', 'අපගේ මෙහෙවර අපගේ මෙහෙවර අපගේ මෙහෙවර අපගේ මෙහෙවරඅපගේ මෙහෙවර අපගේ මෙහෙවර', 'எங்கள் நோக்கம்', 'dasgggggggggggggggggggggggggggggggggggggggggg', 'අපගේ මෙහෙවර සමාජ සාධාරණත්වය මත කේන්ද්‍රගත වේ. සමාන අවස්ථා සාධාරණ ප්‍රතිඵල ලබා දෙන සමාජයක් අපි අපේක්ෂා කරමු. පංතිය, වාර්ගිකත්වය, ආගම, භාෂාව, කුලය, ස්ථානය හෝ ස්ත්‍රී පුරුෂ භාවයේ වෙනස්කම් ජීවිත සපුරාලීමට සහ සමාන සහභාගීත්වයට බාධාවක් නොවන ලෝකයක් අපි ඉලක්ක කරමු. අපගේ ඉලක්කය වන්නේ අවස්ථා, සම්පත් සහ වරප්‍රසාද සාධාරණ ලෙස බෙදා හැරීම, සැබෑ ඇතුළත් කිරීම් සහ යුක්තිය ඇති සමාජයක් ගොඩනැගීමයි. උපදේශනය, අධ්‍යාපනය සහ සහයෝගීතාවය තුළින්, බාධක ඉවත් කිරීමට සහ සැමට දීප්තිමත්, සාධාරණ අනාගතයක් ගොඩනැගීමට අපි වෙහෙස නොබලා කටයුතු කරමු.අපගේ මෙහෙවර සමාජ සාධාරණත්වය මත කේන්ද්‍රගත වේ. සමාන අවස්ථා සාධාරණ ප්‍රතිඵල ලබා දෙන සමාජයක් අපි අපේක්ෂා කරමු. පංතිය, වාර්ගිකත්වය, ආගම, භාෂාව, කුලය, ස්ථානය හෝ ස්ත්‍රී පුරුෂ භාවයේ වෙනස්කම් ජීවිත සපුරාලීමට සහ සමාන සහභාගීත්වයට බාධාවක් නොවන ලෝකයක් අපි ඉලක්ක කරමු. අපගේ ඉලක්කය වන්නේ අවස්ථා, සම්පත් සහ වරප්‍රසාද සාධාරණ ලෙස බෙදා හැරීම, සැබෑ ඇතුළත් කිරීම් සහ යුක්තිය ඇති සමාජයක් ගොඩනැගීමයි. උපදේශනය, අධ්‍යාපනය සහ සහයෝගීතාවය තුළින්, බාධක ඉවත් කිරීමට සහ සැමට දීප්තිමත්, සාධාරණ අනාගතයක් ගොඩනැගීමට අපි වෙහෙස නොබලා කටයුතු කරමු.', 'எங்கள் நோக்கம் சமூக நீதியை மையமாகக் கொண்டுள்ளது. சம வாய்ப்புகள் சமமான விளைவுகளை அளிக்கும் ஒரு சமூகத்தை நாங்கள் கற்பனை செய்கிறோம். வர்க்கம், இனம், மதம், மொழி, சாதி, இருப்பிடம் அல்லது பாலினம் ஆகியவற்றில் உள்ள வேறுபாடுகள் வாழ்க்கையை நிறைவு செய்வதற்கும் சமமான பங்கேற்பிற்கும் இடையூறாக இல்லாத ஒரு உலகத்தை நாங்கள் நோக்கமாகக் கொண்டுள்ளோம். எங்கள் இலக்கு வாய்ப்புகள், வளங்கள் மற்றும் சலுகைகளை சமமாகப் பகிர்ந்தளித்து, உண்மையான உள்ளடக்கம் மற்றும் நீதியுள்ள சமூகத்தை உருவாக்குவது. வக்காலத்து, கல்வி மற்றும் ஒத்துழைப்பு மூலம், தடைகளை அகற்றி, அனைவருக்கும் பிரகாசமான, நேர்மையான எதிர்காலத்தை உருவாக்க நாங்கள் அயராது உழைக்கிறோம்.எங்கள் நோக்கம் சமூக நீதியை மையமாகக் கொண்டுள்ளது. சம வாய்ப்புகள் சமமான விளைவுகளை அளிக்கும் ஒரு சமூகத்தை நாங்கள் கற்பனை செய்கிறோம். வர்க்கம், இனம், மதம், மொழி, சாதி, இருப்பிடம் அல்லது பாலினம் ஆகியவற்றில் உள்ள வேறுபாடுகள் வாழ்க்கையை நிறைவு செய்வதற்கும் சமமான பங்கேற்பிற்கும் இடையூறாக இல்லாத ஒரு உலகத்தை நாங்கள் நோக்கமாகக் கொண்டுள்ளோம். எங்கள் இலக்கு வாய்ப்புகள், வளங்கள் மற்றும் சலுகைகளை சமமாகப் பகிர்ந்தளித்து, உண்மையான உள்ளடக்கம் மற்றும் நீதியுள்ள சமூகத்தை உருவாக்குவது. வக்காலத்து, கல்வி மற்றும் ஒத்துழைப்பு மூலம், தடைகளை அகற்றி, அனைவருக்கும் பிரகாசமான, நேர்மையான எதிர்காலத்தை உருவாக்க நாங்கள் அயராது உழைக்கிறோம்.', 'web/news-image/66c07d1ae5f16.jpeg', 'web/news-image/66c07f882682a.jpeg', 'web/news-image/66c07f3ce097c.jpeg', '2024-08-17 13:05:37');

-- Dumping structure for table psa_db.notice
CREATE TABLE IF NOT EXISTS `notice` (
  `id` int NOT NULL AUTO_INCREMENT,
  `path` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `url` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table psa_db.notice: ~1 rows (approximately)
REPLACE INTO `notice` (`id`, `path`, `url`) VALUES
	(3, 'web/notice/66c08509b6366.jpeg', '#');

-- Dumping structure for table psa_db.partners
CREATE TABLE IF NOT EXISTS `partners` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table psa_db.partners: ~0 rows (approximately)

-- Dumping structure for table psa_db.status
CREATE TABLE IF NOT EXISTS `status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table psa_db.status: ~2 rows (approximately)
REPLACE INTO `status` (`id`, `type`) VALUES
	(1, 'unpin'),
	(2, 'pin');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
