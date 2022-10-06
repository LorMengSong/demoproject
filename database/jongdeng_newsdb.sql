-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 06, 2022 at 01:23 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jongdeng_newsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_us`
--

DROP TABLE IF EXISTS `tbl_about_us`;
CREATE TABLE IF NOT EXISTS `tbl_about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address`
--

DROP TABLE IF EXISTS `tbl_address`;
CREATE TABLE IF NOT EXISTS `tbl_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

DROP TABLE IF EXISTS `tbl_feedback`;
CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `name`, `email`, `phone`, `address`, `date`, `message`) VALUES
(1, 'mao nuchtra', 'tracamboy@gmail.com', '090209090', 'takeo', 'September 29, 2022, 8:12 pm', 'áž“áŸ…áž™áž”áŸ‹ážáŸ’áž„áŸƒáž‘áž¸áŸ¢áŸ§ ážáŸ‚áž€áž‰áŸ’áž‰áž¶ áž¢áŸ’áž“áž€áž“áž¶áž„ ážáž¶ážáŸ‹ ážŸáž»ážƒáž¸áž˜ áž“áž·áž„áž‚áŸ’ážšáž½ážŸáž¶ážšážáž¼áž…ážšáž”ážŸáŸ‹áž“áž¶áž„ áž˜áž¶áž“â€‹ážŸáŸ’ážœáž¶áž˜áž¸ áž€áž¼áž“áž‘áž¶áŸ†áž„ áŸ¢ áž“áž·áž„áž¢áŸ’áž“áž€áž˜áŸ’ážŠáž¶áž™ áž”áž¶áž“â€‹ážœáž·áž›â€‹áž…áž¼áž›â€‹áž”áŸ’ážšáž‘áŸážŸâ€‹áž€áž˜áŸ’áž–áž»áž‡áž¶ážœáž·áž‰ áž€áŸ’ážšáŸ„áž™áž…áŸ†ážŽáž¶áž™áž–áŸáž›áž‡áž¶áž„ áŸ¡ážáŸ‚ áž€áž“áŸ’áž›áŸ‡ (áŸ§ážŸáž”áŸ’ážŠáž¶áž áŸ) áž‘áŸ…ážŸáž ážšážŠáŸ’áž‹áž¢áž¶áž˜áŸážšáž·áž€áŸ”'),
(4, 'phanha', 'phanha@gmail.com', '0292992912', 'Battambang', 'October 3, 2022, 7:17 pm', 'Add a README with an overview of your project.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer_site_logo`
--

DROP TABLE IF EXISTS `tbl_footer_site_logo`;
CREATE TABLE IF NOT EXISTS `tbl_footer_site_logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_footer_site_logo`
--

INSERT INTO `tbl_footer_site_logo` (`id`, `thumbnail`) VALUES
(1, '79417-30735-2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site_logo`
--

DROP TABLE IF EXISTS `tbl_site_logo`;
CREATE TABLE IF NOT EXISTS `tbl_site_logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_site_logo`
--

INSERT INTO `tbl_site_logo` (`id`, `thumbnail`) VALUES
(1, '48318-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slide`
--

DROP TABLE IF EXISTS `tbl_slide`;
CREATE TABLE IF NOT EXISTS `tbl_slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_slide`
--

INSERT INTO `tbl_slide` (`id`, `thumbnail`) VALUES
(4, '484027-O1CN01zEFXda1alxuk70lRU_!!6000000003371-0-tps-990-400.webp'),
(2, '125445-New Project.png'),
(3, '773903-557941-95407-New Project (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social_logo`
--

DROP TABLE IF EXISTS `tbl_social_logo`;
CREATE TABLE IF NOT EXISTS `tbl_social_logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_social_logo`
--

INSERT INTO `tbl_social_logo` (`id`, `thumbnail`, `url`) VALUES
(1, '49277-6959-266-facebook.jpg', 'https://web.facebook.com/?_rdc=1&_rdr'),
(2, '941785-3718-6640116-139-instagram.jpg', 'https://www.instagram.com/'),
(3, '43470-5276-49259083-153-youtube.jpg', 'https://www.youtube.com/watch?v=Z2n4F5qUsvg'),
(5, '94400-6358-19555407-New Project (1).png', 'https://github.com/trilbymedia/grav-plugin-git-sync/issues/168');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social_news`
--

DROP TABLE IF EXISTS `tbl_social_news`;
CREATE TABLE IF NOT EXISTS `tbl_social_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `news_type` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_social_news`
--

INSERT INTO `tbl_social_news` (`id`, `thumbnail`, `banner`, `title`, `date`, `description`, `news_type`, `category`) VALUES
(5, '74032-203595-New Project (5).png', '918043-New Project (3).png', 'ការ​ប្រកួត​ជម្រុះ​ដណ្ដើម​ផ្ទះ​វីឡា​ កីឡាករ​ ឈិត​ សេរីវណ្ណថង​ ផ្ដួល​ជើង​ខ្លាំង​ រិន ដេវីត​ សន្លប់​ទឹក២​', 'September 21, 2022, 7:26 pm', '<p>ដំណើរ​ឆ្ពោះ​ទៅ​ដណ្ដើម​ផ្ទះ​វីឡា​បុរី​ភូមិឋាន​សំណាង​ និង​ខ្សែក្រវាត់​សម្ដេច​ពិជ័យ​ ម្សិលមិញ​នេះ​បាន​បញ្ចប់​ការ​ប្រកួត​សប្ដាហ៍​ទី១​ នៃ​ពូល​ A។​ គូ​ទី១​ នោះ​គឺ​កីឡាករ​ វ៉ាន់​ វឿន​ យក​ឈ្នះ​ពិន្ទុ​លើ​ សៀវ​ ង៉ុយ។​</p>\r\n<p>ចំណែក​ខ្សែក្រវាត់​ទី២​ ដែល​ជា​គូ​ចាប់​អារម្មណ៍​ខ្លាំង​ពី​មហាជន​រវាង​ ឈិត​ សេរីវណ្ណថង​ និង​ រិន​ ដេវីត​ នោះ​គឺ​ស្ទើរ​មិន​ជើង​ក៏​ដូច​ជា​មាន​ការ​ភ្ញាក់ផ្អើល​ផង​ដែរ​ព្រោះដំណើរ​ការ​ប្រកួត​មិន​ចប់​ទឹក​បានត្រឹមត្រូវ​នោះ​ឡើយ។​</p>', 'SPORT', 'INTERNATIONAL'),
(6, '537559-New Project.png', '937541-New Project (1).png', 'ក្រុមហ៊ុន ទ្រូម៉ាន់នី និងគ្រឹះស្ថាន ខេមា មីក្រូហិរញ្ញវត្ថុ ប្រកាសភាពជាដៃគូដើម្បីផ្សព្វផ្សាយចំណេះដឹងផ្នែកឌីជីថលហិរញ្ញវត្ថុ ដោយការដកប្រាក់កម្ចីដោយឥតគិតថ្លៃតាមរយៈទីភ្នាក់ងារ ទ្រូម៉ាន់នី', 'September 29, 2022, 7:34 pm', '<p>ភាពជាដៃគូនេះ នឹងអាចឱ្យអតិថិជនរបស់គ្រឹះស្ថាន ខេមា មីក្រូហិរញ្ញវត្ថុ មកទទួលយកប្រាក់កម្ចីពីភ្នាក់ងារទ្រូម៉ាន់នីដោយឥតគិតថ្លៃនៅទូទាំងប្រទេស។ តាមរយៈការអនុញ្ញាតឱ្យអតិថិជនរបស់គ្រឹះស្ថាន ខេមា មីក្រូហិរញ្ញវត្ថុ ប្រើប្រាស់ភ្នាក់ងារទ្រូម៉ាន់នី ក្រុមហ៊ុន ទ្រូម៉ាន់នី បាននិងកំពុងជួយលើកកម្ពស់ចំណេះដឹងផ្នែកឌីជីថលហិរញ្ញវត្ថុតាមរយៈការផ្តល់សេវាធនាគារដល់អ្នកដែលមិនប្រើសេវាធនាគារ ឬមិនទាន់មានសេវាធនាគារប្រើប្រាស់នៅកម្ពុជា។</p>\r\n<p>តាមរយៈការចាប់ដៃគូរួមគ្នារវាងគ្រឹះស្ថាន ខេមា មីក្រូហិរញ្ញវត្ថុ និងក្រុមហ៊ុន ទ្រូម៉ាន់នី គឺដើម្បីធ្វើយ៉ាងណាឱ្យការបង់សងប្រាក់កម្ចីកាន់តែមានភាពងាយស្រួលសម្រាប់អតិថិជន ដែលជួយឱ្យចំណេញពេលវេលាក្នុងការធ្វើដំណើរទៅកាន់សាខារបស់គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ ខេមា។</p>\r\n<div class=\"content-grp-img\"><picture class=\"lozad\" data-iesrc=\"//media.sabay.com/media/sabay-news/Local-Social/social(23)/63355452d6a19_1664439360.jpg\" data-alt=\"\" data-loaded=\"true\"><source srcset=\"https://cdn.sabay.com/cdn/media.sabay.com/media/sabay-news/Local-Social/social(23)/63355452d6a19_1664439360_large.jpg\" media=\"(min-width: 1920px)\"><source srcset=\"https://cdn.sabay.com/cdn/media.sabay.com/media/sabay-news/Local-Social/social(23)/63355452d6a19_1664439360_medium.jpg\" media=\"(min-width: 980px)\"><source srcset=\"https://cdn.sabay.com/cdn/media.sabay.com/media/sabay-news/Local-Social/social(23)/63355452d6a19_1664439360_small.jpg\" media=\"(min-width: 320px)\"></picture></div>', 'SOCIAL_NEWS', 'NATIONAL'),
(2, '983116-New Project (5).png', '599193-New Project (4).png', 'រឿង​ សោភ័ណ្ឌ​ នៅ​តែ​គ្រោះថ្នាក់​ម្សិលមិញ​វ៉ៃ​កីឡាករ​ ម៉ាណាវថង​ ជិត​សន្លប់ៗ​ម្ដង​', 'September 20, 2022, 7:57 pm', '<p>ទោះ​អាក់ខាន​យូរ​ ឬ​មិន​សូវ​ឡើង​សង្វៀន​ញឹកញាប់​ដូច​កីឡាករ​ដទៃ​ ប៉ុន្តែ​ រឿង​ សោភ័ណ្ឌ​ នៅ​តែ​បង្ហាញ​ទម្រង់​វ៉ៃ​មិន​ធ្លាក់​ខ្លាំង​ពេក​ជា​ពិសេស​គឺ​ការ​វ៉ៃ​អស់​ពី​សមត្ថភាព​ និង​ការ​ខំប្រឹង​យក​ឈ្នះ​ដៃគូ។ ​ម្សិលមិញ​នេះ​កីឡាករ​កម្ពុជា​ខាង​លើ​នេះ​បាន​ប្រើ​យុទ្ធសាស្ត្រ​ និង​កណ្ដាប់​ដៃ​របស់​គេ​វ៉ៃ​សម្រុក​លើ​កីឡាករ​ ម៉ាណាវថង​ ស្ទើរ​តែ​សន្លប់​ម្ដងៗ​មុន​ចប់​ទឹក​ទី៥​ទៅ​ហើយ។​ ម៉ាណាវថង​ ហាក់​អស់​ស៊ុហ្វ​ខ្លាំង​នៅ​ពេល​ សោភ័ណ្ឌ​ សម្រុក​វ៉ៃ​ពោះ​ទឹក​ឆ្វេង​ស្ដាំ។​ ហេតុ​ផង​ទាំង​នេះ​ហើយ​បញ្ជាក់​ថា​ រឿង​ សោភ័ណ្ឌ​ នៅ​តែ​គ្រោះ​ថ្នាក់​សម្រាប់​កីឡាករ​បរទេស​ដែល​ត្រូវ​ប៉ះ​ជា​មួយ​រូប​គេ​ បើ​ទោះ​ជា​វ័យ​ច្រើន​បន្តិច​ និង​មិន​ឡើង​សង្វៀន​ញឹក​ក៏​ដោយ។​</p>\r\n<div class=\"content-grp-img\"><picture class=\"lozad\" data-iesrc=\"//media.sabay.com/media/sabay-news/Sport-News/Local-Sports/Kun-Khmer-Boxing/Roung-Sophan/Sophorn-2/61a04535d60ab_1637893380.jpg\" data-alt=\"\" data-loaded=\"true\"><source srcset=\"https://cdn.sabay.com/cdn/media.sabay.com/media/sabay-news/Sport-News/Local-Sports/Kun-Khmer-Boxing/Roung-Sophan/Sophorn-2/61a04535d60ab_1637893380_large.jpg\" media=\"(min-width: 1920px)\"><source srcset=\"https://cdn.sabay.com/cdn/media.sabay.com/media/sabay-news/Sport-News/Local-Sports/Kun-Khmer-Boxing/Roung-Sophan/Sophorn-2/61a04535d60ab_1637893380_medium.jpg\" media=\"(min-width: 980px)\"><source srcset=\"https://cdn.sabay.com/cdn/media.sabay.com/media/sabay-news/Sport-News/Local-Sports/Kun-Khmer-Boxing/Roung-Sophan/Sophorn-2/61a04535d60ab_1637893380_small.jpg\" media=\"(min-width: 320px)\"></picture></div>', 'SPORT', 'INTERNATIONAL'),
(3, '973066-New Project (2).png', '540512-New Project (3).png', 'ក្លឹប Real Madrid បាន​វាយ​បក​យក​ឈ្នះ Mallorca ៤-១ ក្នុង​កីឡដ្ឋាន Bernabeu រក្សាការឈ្នះ ១០០% របស់ពួកគេក្នុងការចាប់ផ្តើមរដូវកាល។', 'September 20, 2022, 8:00 pm', '<p>នុង​ការ​ប្រកួត Mallorca ជា​អ្នក​រក​គ្រាប់​នាំ​មុខ​បាន​មុន ពេល​ដែល​កីឡាករ Vedat Muriqi ​តែត​បញ្ចូល​ទី ក្រោយ​មាន​ការ​បញ្ជូន​ពី​មិត្ត​រួម​ក្រុម Lee Kang-in។ ប៉ុន្តែ​នៅ​នាទី​៤០+៣​ទៅ​ហើយ​ខ្សែ​បម្រើ Federico Valverde ក៏​រក​គ្រាប់​តាម​ស្មើ​វិញ​ឲ្យ Madrid។</p>\r\n<p>ឈាន​ដល់​វគ្គ​ទី​ពីរ Madrid រក​បាន​៣​គ្រាប់​ផ្ទួន​ៗ​សម្រេច​ទី​ដោយ​កីឡាករ Vinicius Jr, Rodrygo និង​ខ្សែ​ការពារ Antonio Rudiger។ នេះ​ក៏​ជា​គ្រាប់​ដំបូង​សម្រាប់ Rudiger ផង​ដែរ ចាប់​តាំង​ពី​ចូលរួម​ជាមួយ Madrid ដោយ​គ្មាន​តម្លៃ​ខ្លួន​ក្នុង​រដូវ​ក្ដៅ​នេះ​ក្រោយ​អស់​កុងត្រា​ជាមួយ Chelsea។</p>\r\n<p>ជ័យជម្នះ​នេះ​បាន​ជួយ​ឲ្យ​ក្រុម​លោក Carlo Ancelotti រក្សាការឈ្នះ ១០០% របស់ពួកគេក្នុងការចាប់ផ្តើមរដូវកាល​នេះ បន្ត​ឈរ​កំពូល​តារាង​​មាន​១៥​ពិន្ទុ​ពេញ ក្រោយ​ឆ្លង​កាត់​៥​ប្រកួត​ក្នុង​លីគ៕</p>', 'SPORT', 'VOLLEYBALL'),
(4, '31905-New Project (6).png', '933925-New Project (7).png', 'Ronaldo ចង់​បន្ត​លេង​ឲ្យ​ក្រុម​ជម្រើស​ជាតិ​ព័រទុយហ្គាល់​ដល់​​ Euro 2024', 'September 21, 2022, 7:56 pm', '<p>Ronaldo បាន​និយាយ​ថា​៖\" យើង​បាន​ឆ្លង​កាត់​រួម​ដំណើរ​​ដ៏​វែង​ឆ្ងាយ​មួយ​ជា​មួយ​គ្នា​ ក៏​ប៉ុន្តែ​ខ្ញុំ​សុំ​យក​នូវ​ឱកាស​នេះ​ដើម្បី​និយាយ​ថា​ដំណើរ​របស់​ខ្ញុំ​ជា​អ្នក​ទាំង​អស់​គ្នា​មិន​ទាន់​ចប់​ទេ​។ ខ្ញុំ​នូវ​មាន​កម្លាំង​ចិត្ត​ ពេញចិត្ត​ និង​មាន​មិហច្ឆតា​ខ្ពស់​ \"។</p>\r\n<p>កីឡាករ​របស់​ Manchester United នេះ​បន្ត​ថា​៖\" ខ្ញុំ​គិត​ថា​ឥឡូវ​នេះ​ ខ្ញុំ​នៅ​តែ​ត្រូវ​បាន​ជ្រើស​រើស​លេង​ក្នុង​ចំណោម​កីឡាករ​ក្មេងៗ​ជា​ច្រើន​ដទៃ​ទៀត​ អញ្ចឹង​ខ្ញុំ​នៅ​តែ​ចង់​ចូល​រួម​ចំណែក​នឹង​ក្រុម​នេះ​ក្នុង​ World Cup លើក​នេះ​ ក៏​ដូច​ជា​ប្រកួត​ Euro 2024 អី​ហ្នឹង​បន្ត​ថែម​ទៀត​ផង​ \"។</p>\r\n<p>Ronaldo នៅ​ក្នុង​ឆ្នាំ​នេះ​មាន​វ័យ​៣៧ឆ្នាំ​ហើយ​ ដោយ​កីឡាករ​នេះ​ធ្លាប់​ឈ្នះ​ពាន​តូច​ធំ​រួច​រាល់​អស់​ហើយ​ជា​មួយ​ក្លឹប​ ក៏​ប៉ុន្តែ​មិន​ទាន់​ដែល​ឈ្នះ​ពាន​ធំៗ​ជា​មួយ​ក្រុម​ជម្រើស​ជាតិ​ព័រ​ទុយហ្គាល់​នោះ​ទេ​ដូច​ជា​ ពាន​ World Cup ជា​ដើម​៕</p>', 'SPORT', 'INTERNATIONAL'),
(7, '896129-New Project (2).png', '361697-New Project (3).png', 'លោក Xi កាន់​តែ​ឈឺក្បាល! ផ្ទុះការតវ៉ាដ៏ធំមួយ​នៅក្នុងប្រទេសចិន ប្រឆាំង​ការបិទ Covid ថ្មី!', 'September 29, 2022, 7:38 pm', '<p>ពលរដ្ឋចិនរាប់រយនាក់នៅក្នុងទីក្រុង Shenzhen ភាគខាងត្បូងបានតវ៉ាប្រឆាំងនឹងការបិទ​ខ្ទប់ដែលដាក់ដោយអាជ្ញាធរ។ វីដេអូមួយពីទីក្រុងក្នុងខេត្ត Guangdong ភាគខាងត្បូង បានបង្ហាញពីអ្នកស្រុកដែលមានកំហឹងប្រឈមមុខនឹងមន្ត្រីប៉ូលីសដែលពាក់ឧបករណ៍ការពារវេជ្ជសាស្ត្រពណ៌ខៀវ រួមទាំងសម្លៀកបំពាក់ របាំងមុខ និងវ៉ែនតាប្លាស្ទិក។</p>\r\n<p>បាតុករនៅក្នុងហ្វូងមនុស្សបានស្រែកថា \"ដកការបិទខ្ទប់ចេញទៅ!\" ខណៈពេលដែលប៉ះទង្គិចពាក្យសំដី និងរាងកាយជាមួយប៉ូលីសដែលព្យាយាមរារាំង​ពួកគេដោយខែលដែកការពារ។ មនុស្ស​មួយ​ចំនួន​នៅ​ក្នុង​ហ្វូង​មនុស្ស​ត្រូវ​បាន​គេ​ឃើញ​គប់​ដប​ទឹក​ដាក់​សមត្ថកិច្ច​ដែល​បាន​ធ្វើ​ការ​ចាប់​ខ្លួន​មួយ​ចំនួន។</p>\r\n<p>នៅក្នុងឃ្លីបមួយ គេអាចលឺស្ត្រីម្នាក់ស្រែកថា \"ប៉ូលីសកំពុងវាយមនុស្ស\" ។ ដោយ​ឡែក​មន្ត្រី ​ក៏​បាន​លើក​បដា​សរសេរ​ដែរថា \"​សូម​ចូលរួម​សហការ​ផង ព្រោះ​ប៉ូលិស​កំពុង​អនុវត្ត​ច្បាប់​\"៕</p>', 'SOCIAL_NEWS', 'INTERNATIONAL'),
(8, '592429-New Project.png', '563551-New Project (1).png', 'ឥណ្ឌូណេស៊ី គឺជាប្រទេស​តែមួយគត់នៅអាស៊ាន ដែលមានព្រំដែនជាប់នឹង ទ្វីបពីរផ្សេងគ្នា', 'September 29, 2022, 7:38 pm', '<p>ពិភពលោកនេះ មានទ្វីបទាំងអស់ចំនួន ៧ រួមមានដូចជា អាស៊ី, អាហ្វ្រិក, អាមេរិកខាងជើង, អាមេរិកខាងត្បូង, អឺរ៉ុប, អូសេអានី និងអង់តាទិក។ ក្នុងនោះ​មាន​ប្រទេស​ខ្លះ គឺស្ថិតនៅជាប់ទ្វីប២តែម្តង រួមមានដូចខាងក្រោម៖</p>\r\n<p>-ឥណ្ឌូណេស៊ី៖ ជាប្រទេស​ដែលមានកោះច្រើនជាងគេក្នុងពិភពលោក ក្នុងនោះកោះភាគច្រើនរួមទាំងរដ្ឋធានីហ្សាកាតា គឺស្ថិតក្នុងទ្វីបអាស៊ី (តំបន់អាស៊ីអាគ្នេយ៍) ប៉ុន្តែ ខេត្ត Papua ដែលមានព្រំដែន​ជាប់​ប្រទេសប៉ាពូ​ញ៊ូវហ្គីណេ គឺស្ថិតនៅលើ​កោះ​ដែលជាទ្វីប​អូសេអានី។</p>', 'SOCIAL_NEWS', 'INTERNATIONAL'),
(9, '639432-New Project (2).png', '145060-New Project (1).png', 'ម៉ឺន​ មេឃា​ និង​ អាំម៉ារីន​ អាច​នឹង​លែង​ទៅ​វ៉ៃ​នៅ​ថៃ​ព្រោះ​ហេតុ​នេះ...​', 'September 29, 2022, 7:39 pm', '<p>ក្នុង​ការ​លើក​ឡើង​អំពី​ពាក្យ​រិះគន់​នោះ​ប្រពន្ធ​លោក​ អេ ភូថង​ បញ្ជាក់​ពី​ការ​និយាយ​របស់​គេ​ថា​ &laquo;យក​ថៃ​ដក​ដំឡូង​ឲ្យ​ប្រកួត​ជា​មួយ​កូន​លោក​ស្រី។​ វ៉ៃ​អន់​ណាស់​គួរ​យក​កីឡាករ​នេះ​ កីឡាករ​នោះ​ទៅ​វ៉ៃ​វិញ&raquo;។​ ជា​មួយ​ពាក្យ​រិះគន់​ទាំង​នេះ​គឺ​ធ្វើ​ឲ្យ​លោក​ស្រី​ហាក់​បាក់ទឹកចិត្ត​ ហើយ​ប្រហែល​ឈប់​នាំ​ អេ​ អាំម៉ារីន​ ម៉ឺន​ មេឃា​ ទៅ​វ៉ៃ​ទៀត​ហើយ។​</p>', 'SOCIAL_NEWS', 'NATIONAL'),
(10, '173332-', '136177-', '', 'October 5, 2022, 7:36 pm', '', '', ''),
(11, '660022-', '449-', '', 'October 5, 2022, 7:36 pm', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

DROP TABLE IF EXISTS `tbl_video`;
CREATE TABLE IF NOT EXISTS `tbl_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`id`, `thumbnail`, `title`, `url`) VALUES
(1, '745-New Project.png', 'https://www.youtube.com/watch?v=dsOQiNaUR4g', 'https://www.youtube.com/watch?v=dsOQiNaUR4g'),
(2, '5767-New Project (1).png', 'áž‚áž“áŸ’áž›áž¹áŸ‡ áŸ¦áž™áŸ‰áž¶áž„ ážŠáŸ‚áž›áž‡áž½áž™áž²áŸ’áž™áž™áž¾áž„áž‘áž“áŸ’áž‘áŸáž‰áž˜áŸážšáŸ€áž“áž†áž¶áž”áŸ‹áž…áž¶áŸ† áž áž¾áž™áž…áž¶áŸ†áž”áž¶áž“áž™áž¼ážšáž‘áŸ€áž', 'https://www.youtube.com/watch?v=jfKfPfyJRdk'),
(5, '5210-203595-New Project (5).png', 'ážŠáŸáž€ážŸáŸ’ážšáž˜áŸƒáž€áŸáž…áž„áŸ‹áž±áŸ’áž™áž†áž¶áž”áŸ‹ážŠáž›áŸ‹ážáŸ’áž„áŸƒážŠáŸ‚ážš áž–áž·áž–áŸážšážŽáŸáž”áž…áŸ’áž…áŸáž€ážœáž·áž‘áŸ’áž™áž¶áž€áž˜áŸ’áž–áž»áž‡áž¶áŸ¢áŸ áŸ¢áŸ¢', 'https://www.youtube.com/watch?v=MaV9VqFMzB4'),
(6, '7115-6036-31905-New Project (6).png', 'áž”áž„áŸ’áž áž¶áž‰áž¢áŸ†áž–áž¸ážœážŒáŸ’ážáž“áž—áž¶áž–áž‚áŸ„áž›áž“áž™áŸ„áž”áž¶áž™ áž“áž·áž„áž€áŸ’ážšáž”ážážŽáŸ’ážŒáž‚ážáž·áž™áž»ážáŸ’áž áž‡áž¶áž–áž·ážŸáŸážŸáž•áž›áž·ážáž•áž›áž“áž·áž„ážŸáŸážœáž¶áž”áž…áŸ’áž…áŸáž€ážœáž·áž‘áŸ’áž™áž¶áž“áž¶áž“áž¶áŸ”', 'https://www.youtube.com/watch?v=G-Pkkhmenp8&list=RDG-Pkkhmenp8&start_radio=1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
