-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2015 at 11:58 AM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `club`
--

-- --------------------------------------------------------

--
-- Table structure for table `11`
--

CREATE TABLE IF NOT EXISTS `11` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime DEFAULT NULL,
  `sender` varchar(20) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `11`
--

INSERT INTO `11` (`id`, `time`, `sender`, `message`) VALUES
(1, '2015-01-08 00:00:00', 'as', 'hello how are u??'),
(2, '2015-01-02 00:00:00', 'we', 'ewrwerewr'),
(3, '2015-01-02 00:00:00', 'a', 'a'),
(4, '2015-01-11 01:26:51', '0', 'null'),
(5, '2015-01-11 01:27:29', '0', 'this is test'),
(6, '2015-01-11 01:27:51', '0', 'lol'),
(7, '2015-01-11 01:29:23', '0', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `12`
--

CREATE TABLE IF NOT EXISTS `12` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime DEFAULT NULL,
  `sender` varchar(20) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `12`
--

INSERT INTO `12` (`id`, `time`, `sender`, `message`) VALUES
(1, '2015-01-11 01:31:29', '0', 'hi'),
(2, '2015-01-11 01:31:37', '0', 'how r u?'),
(3, '2015-01-11 01:31:49', '0', 'bye'),
(4, '2015-01-11 01:37:30', '0', 'now'),
(5, '2015-01-11 01:37:46', '0', 'no'),
(6, '2015-01-11 01:39:10', '0', 'as'),
(7, '2015-01-25 21:25:39', '0', 'gh'),
(8, '2015-01-25 21:26:03', '0', ''),
(9, '2015-01-26 14:20:39', '0', 'ss'),
(10, '2015-01-26 14:52:09', '0', 'gh');

-- --------------------------------------------------------

--
-- Table structure for table `13`
--

CREATE TABLE IF NOT EXISTS `13` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime DEFAULT NULL,
  `sender` varchar(20) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `13`
--

INSERT INTO `13` (`id`, `time`, `sender`, `message`) VALUES
(1, '2015-01-12 18:27:18', '0', 'gh'),
(2, '2015-01-25 21:32:16', '0', 'hii'),
(3, '2015-01-25 21:32:27', '0', 'how'),
(4, '2015-01-25 21:32:44', '0', 'how'),
(5, '2015-01-25 21:33:06', '0', 'byee'),
(6, '2015-01-25 21:33:25', '0', 'go'),
(7, '2015-01-25 21:33:29', '0', 'byee'),
(8, '2015-01-25 21:33:44', '0', 'go'),
(9, '2015-01-26 18:30:44', '0', 'byeee');

-- --------------------------------------------------------

--
-- Table structure for table `14`
--

CREATE TABLE IF NOT EXISTS `14` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime DEFAULT NULL,
  `sender` varchar(20) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `14`
--

INSERT INTO `14` (`id`, `time`, `sender`, `message`) VALUES
(1, '2015-01-25 21:34:29', '0', 'hi'),
(2, '2015-01-25 21:34:35', '0', 'hii'),
(3, '2015-01-25 21:35:26', '0', 'how'),
(4, '2015-01-25 21:35:32', '0', 'bye'),
(5, '2015-01-25 21:35:42', '0', 'good ni8'),
(6, '2015-01-25 21:35:59', '0', 'good morn'),
(7, '2015-01-25 21:36:19', '0', 'noo'),
(8, '2015-01-26 14:53:32', '0', 'jk');

-- --------------------------------------------------------

--
-- Table structure for table `15`
--

CREATE TABLE IF NOT EXISTS `15` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime DEFAULT NULL,
  `sender` varchar(20) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `15`
--

INSERT INTO `15` (`id`, `time`, `sender`, `message`) VALUES
(1, '2015-01-26 14:53:07', '0', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `16`
--

CREATE TABLE IF NOT EXISTS `16` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime DEFAULT NULL,
  `sender` varchar(20) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `16`
--

INSERT INTO `16` (`id`, `time`, `sender`, `message`) VALUES
(1, '2015-01-26 15:34:38', '0', 'hh'),
(2, '2015-01-26 18:27:53', '0', 'gf');

-- --------------------------------------------------------

--
-- Table structure for table `17`
--

CREATE TABLE IF NOT EXISTS `17` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime DEFAULT NULL,
  `sender` varchar(20) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `17`
--

INSERT INTO `17` (`id`, `time`, `sender`, `message`) VALUES
(1, '2015-01-26 18:29:15', '0', 'hi'),
(2, '2015-01-26 18:32:29', '0', 'gh'),
(3, '2015-01-26 18:32:48', '0', 'noo'),
(4, '2015-02-06 12:09:35', '12bce0246', 'noo'),
(5, '2015-02-07 19:06:49', '12mse0363', '2'),
(6, '2015-03-19 02:23:05', '14mca0146', '');

-- --------------------------------------------------------

--
-- Table structure for table `18`
--

CREATE TABLE IF NOT EXISTS `18` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime DEFAULT NULL,
  `sender` varchar(20) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `18`
--

INSERT INTO `18` (`id`, `time`, `sender`, `message`) VALUES
(1, '2015-02-06 12:09:25', '12bce0246', 'hi'),
(2, '2015-02-06 12:09:28', '12bce0246', 'bye'),
(3, '2015-03-19 02:20:46', '14mca0146', ''),
(4, '2015-03-19 02:27:23', '14mca0146', 'hii');

-- --------------------------------------------------------

--
-- Table structure for table `19`
--

CREATE TABLE IF NOT EXISTS `19` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime DEFAULT NULL,
  `sender` varchar(20) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `19`
--

INSERT INTO `19` (`id`, `time`, `sender`, `message`) VALUES
(1, '2015-01-26 18:38:30', '0', 'hi'),
(2, '2015-01-26 18:38:37', '0', 'how are u'),
(3, '2015-01-26 18:39:44', '', 'good'),
(4, '2015-01-26 18:41:25', '12bce0246', 'gh'),
(5, '2015-01-26 18:42:01', '11BME0075', 'bye'),
(6, '2015-03-19 02:12:23', '14mca0146', 'hii'),
(7, '2015-03-19 02:25:06', '14mca0146', ''),
(8, '2015-03-19 02:25:09', '14mca0146', '');

-- --------------------------------------------------------

--
-- Table structure for table `20`
--

CREATE TABLE IF NOT EXISTS `20` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime DEFAULT NULL,
  `sender` varchar(20) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `20`
--

INSERT INTO `20` (`id`, `time`, `sender`, `message`) VALUES
(1, '2015-01-26 18:45:30', '11BME0075', 'hi'),
(2, '2015-01-26 18:45:41', '11BME0075', 'how are u'),
(3, '2015-03-19 01:50:08', '14mca0146', 'm,'),
(4, '2015-03-19 01:51:50', '14mca0146', 'ds'),
(5, '2015-03-19 01:53:23', '14mca0146', 'hii'),
(6, '2015-03-19 01:58:05', '14mca0146', 'sdsd'),
(7, '2015-03-19 02:13:12', '14mca0146', 'fg'),
(8, '2015-03-19 02:13:23', '14mca0146', 'ty'),
(9, '2015-03-19 02:14:23', '14mca0146', 'poew'),
(10, '2015-03-19 02:22:07', '14mca0146', ''),
(11, '2015-03-19 02:23:46', '14mca0146', ''),
(12, '2015-03-19 02:23:50', '14mca0146', ''),
(13, '2015-03-19 02:23:55', '14mca0146', ''),
(14, '2015-03-19 02:29:00', '14mca0146', 'hii'),
(15, '2015-03-19 02:32:14', '14mca0146', 'hi'),
(16, '2015-03-19 02:33:23', '14mca0146', 'ghg'),
(17, '2015-03-19 02:49:33', '14mca0146', 'hii sourabh');

-- --------------------------------------------------------

--
-- Table structure for table `21`
--

CREATE TABLE IF NOT EXISTS `21` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime DEFAULT NULL,
  `sender` varchar(20) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `21`
--

INSERT INTO `21` (`id`, `time`, `sender`, `message`) VALUES
(1, '2015-02-07 19:32:13', '12bce0246', 'ew'),
(2, '2015-02-07 19:32:15', '12bce0246', 'we');

-- --------------------------------------------------------

--
-- Table structure for table `22`
--

CREATE TABLE IF NOT EXISTS `22` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime DEFAULT NULL,
  `sender` varchar(20) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `22`
--

INSERT INTO `22` (`id`, `time`, `sender`, `message`) VALUES
(1, '2015-03-19 02:18:31', '14mca0146', 'kl'),
(2, '2015-03-19 02:51:19', '14mca0146', 'hiii');

-- --------------------------------------------------------

--
-- Table structure for table `23`
--

CREATE TABLE IF NOT EXISTS `23` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime DEFAULT NULL,
  `sender` varchar(20) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `23`
--

INSERT INTO `23` (`id`, `time`, `sender`, `message`) VALUES
(1, '2015-03-19 01:47:32', '14mca0146', 'hiii');

-- --------------------------------------------------------

--
-- Table structure for table `60_event_attendance`
--

CREATE TABLE IF NOT EXISTS `60_event_attendance` (
  `regno` varchar(10) NOT NULL,
  `event_1` int(11) DEFAULT '0',
  PRIMARY KEY (`regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `60_event_attendance`
--

INSERT INTO `60_event_attendance` (`regno`, `event_1`) VALUES
('12BCE0159', 0),
('12BCE0416', 0),
('12BCE0455', 0),
('12BCE0519', 0),
('12BCE0548', 0),
('12BIF0045', 0),
('12BIT0106', 0),
('12BIT0108', 0),
('12BIT0170', 0),
('12BIT0224', 0),
('12MSE0143', 0),
('12MSE0363', 0),
('12MSE0364', 0),
('13BAM0009', 0),
('13BAM0032', 0),
('13BCB0062', 0),
('13BCE0037', 0),
('13BCE0081', 0),
('13BCE0186', 0),
('13BCE0188', 0),
('13BCE0258', 0),
('13BCE0267', 0),
('13BCE0313', 0),
('13BCE0346', 0),
('13BCE0347', 0),
('13BCE0395', 0),
('13BCE0459', 0),
('13BCE0557', 0),
('13BCE0619', 0),
('13BCE0662', 0),
('13BCE0692', 0),
('13BCE0740', 0),
('13BEC0031', 0),
('13BEC0145', 0),
('13BEC0490', 0),
('13BEC0635', 0),
('13BEC0774', 0),
('13BIT0009', 0),
('13BIT0168', 0),
('13BIT0222', 0),
('13MCA0001', 0),
('13MCA0024', 0),
('13MCA0049', 0),
('13MCA0175', 0),
('13MSE0350', 0),
('13MSE0393', 0),
('14BCE0184', 0),
('14BCE0488', 0),
('14BCE0492', 0),
('14BCE0497', 0),
('14BCE0506', 0),
('14BCE0512', 0),
('14BCE0523', 0),
('14BCE0529', 0),
('14BCE0553', 0),
('14BCE0607', 0),
('14BCE0635', 0),
('14BCE0784', 0),
('14BCE0833', 0),
('14BCS0002', 0),
('14BEC0449', 0),
('14BEC0850', 0),
('14BIT0139', 0),
('14BIT0226', 0),
('14BIT0237', 0),
('14MCA0020', 0),
('14MCA0146', 0),
('14MCA0164', 0),
('14MCA0174', 0);

-- --------------------------------------------------------

--
-- Table structure for table `60_meeting_attendance`
--

CREATE TABLE IF NOT EXISTS `60_meeting_attendance` (
  `regno` varchar(10) NOT NULL,
  `meeting_1` int(11) DEFAULT '0',
  `meeting_2` int(11) DEFAULT '0',
  `meeting_3` int(11) DEFAULT '0',
  PRIMARY KEY (`regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `60_meeting_attendance`
--

INSERT INTO `60_meeting_attendance` (`regno`, `meeting_1`, `meeting_2`, `meeting_3`) VALUES
('12BCE0159', 0, 0, 0),
('12BCE0416', 0, 0, 0),
('12BCE0455', 0, 0, 0),
('12BCE0519', 0, 0, 0),
('12BCE0548', 0, 0, 0),
('12BIF0045', 0, 0, 0),
('12BIT0106', 0, 0, 0),
('12BIT0108', 0, 0, 0),
('12BIT0170', 0, 0, 0),
('12BIT0224', 0, 0, 0),
('12MSE0143', 0, 0, 0),
('12MSE0363', 0, 0, 0),
('12MSE0364', 0, 0, 0),
('13BAM0009', 0, 0, 0),
('13BAM0032', 0, 0, 0),
('13BCB0062', 0, 0, 0),
('13BCE0037', 0, 0, 0),
('13BCE0081', 0, 0, 0),
('13BCE0186', 0, 0, 0),
('13BCE0188', 0, 0, 0),
('13BCE0258', 0, 0, 0),
('13BCE0267', 0, 0, 0),
('13BCE0313', 0, 0, 0),
('13BCE0346', 0, 0, 0),
('13BCE0347', 0, 0, 0),
('13BCE0395', 0, 0, 0),
('13BCE0459', 0, 0, 0),
('13BCE0557', 0, 0, 0),
('13BCE0619', 0, 0, 0),
('13BCE0662', 0, 0, 0),
('13BCE0692', 0, 0, 0),
('13BCE0740', 0, 0, 0),
('13BEC0031', 0, 0, 0),
('13BEC0145', 0, 0, 0),
('13BEC0490', 0, 0, 0),
('13BEC0635', 0, 0, 0),
('13BEC0774', 0, 0, 0),
('13BIT0009', 0, 0, 0),
('13BIT0168', 0, 0, 0),
('13BIT0222', 0, 0, 0),
('13MCA0001', 0, 0, 0),
('13MCA0024', 0, 0, 0),
('13MCA0049', 0, 0, 0),
('13MCA0175', 0, 0, 0),
('13MSE0350', 0, 0, 0),
('13MSE0393', 0, 0, 0),
('14BCE0184', 0, 0, 0),
('14BCE0488', 0, 0, 0),
('14BCE0492', 0, 0, 0),
('14BCE0497', 0, 0, 0),
('14BCE0506', 0, 0, 0),
('14BCE0512', 0, 0, 0),
('14BCE0523', 0, 0, 0),
('14BCE0529', 0, 0, 0),
('14BCE0553', 0, 0, 0),
('14BCE0607', 0, 0, 0),
('14BCE0635', 0, 0, 0),
('14BCE0784', 0, 0, 0),
('14BCE0833', 0, 0, 0),
('14BCS0002', 0, 0, 0),
('14BEC0449', 0, 0, 0),
('14BEC0850', 0, 0, 0),
('14BIT0139', 0, 0, 0),
('14BIT0226', 0, 0, 0),
('14BIT0237', 0, 0, 0),
('14MCA0020', 0, 0, 0),
('14MCA0146', 0, 0, 0),
('14MCA0164', 0, 0, 0),
('14MCA0174', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `club_60_members`
--

CREATE TABLE IF NOT EXISTS `club_60_members` (
  `name` varchar(20) NOT NULL,
  `regno` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobno` varchar(30) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dob` date NOT NULL,
  `address` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `department` varchar(40) NOT NULL DEFAULT 'Not available',
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=192 ;

--
-- Dumping data for table `club_60_members`
--

INSERT INTO `club_60_members` (`name`, `regno`, `email`, `mobno`, `id`, `dob`, `address`, `gender`, `status`, `department`, `photo`) VALUES
('Ankit Singh', '12bce0246', 'ram@gmail.co', '9431410544', 7, '2014-10-21', 'delhi', 'Mal', '', 'technical', ''),
('Maria Yusuf', '12BIF0045', '', '', 123, '0000-00-00', '', '', 'active', 'management', ''),
('Shamvil Raza', '13BCE0395', '', '4561238523', 124, '0000-00-00', '', '', 'active', 'management', ''),
('Prerit Kimtani', '14mca0146', '', '45678912', 125, '0000-00-00', '', '', 'active', 'technical', 'images/14mca0146.jpg'),
('Tetali Chitanya', '13BCE0267', '', '', 126, '0000-00-00', '', '', 'active', 'technical', ''),
('Piyush Sukhla', '12BIT0108', '', '', 127, '0000-00-00', '', '', 'active', 'technical', ''),
('Sarthak Saxena', '12BIT0224', '', '', 128, '0000-00-00', '', '', 'active', 'technical', ''),
('Arjun Wadhwa', '13BCB0062', '', '', 129, '0000-00-00', '', '', 'active', 'management', ''),
('Sauraj Babu', '13BAM0032', '', '', 130, '0000-00-00', '', '', 'active', 'design', ''),
('Sahil Narula', '12BCE0416', '', '7894567894', 131, '2015-03-10', '', 'male', 'active', 'technical', ''),
('Sourabh Parmar', '12BIT0106', 'sourabh7495@gmail.com', '7598066283', 132, '1995-06-20', 'Bhopal', 'Male', 'active', 'technical', 'images/12bit0106.jpg'),
('Amulya V Bhat', '13BCE0557', '', '', 133, '0000-00-00', '', '', 'active', 'management', ''),
('Anshika Parihar', '13BEC0031', '', '', 134, '0000-00-00', '', '', 'active', 'management', ''),
('Shreyash Sourabh', '13BEC0145', '', '', 135, '0000-00-00', '', '', 'active', 'management', ''),
('Shreyansh Srivastava', '13BCE0346', '', '', 136, '0000-00-00', '', '', 'active', 'management', ''),
('Rohan Choudary', '13BCE0662', '', '', 137, '0000-00-00', '', '', 'active', 'management', ''),
('Namit Juneja', '13BEC0490', '', '', 138, '0000-00-00', '', '', 'active', 'technical', ''),
('Darshan Mehta', '13BCE0258', '', '', 139, '2015-04-01', '', '', 'active', 'technical', ''),
('S Rajalakshmi', '12MSE0363', '', '', 140, '0000-00-00', '', '', 'active', 'technical', ''),
('Anurag Tiwari', '13MSE0350', '', '', 141, '0000-00-00', '', '', 'active', 'technical', ''),
('Amit Kumar Rai', '13BCE0740', '', '', 142, '0000-00-00', '', '', 'active', 'technical', ''),
('Priyam Tejaswin', '12BCE0548', '', '', 143, '0000-00-00', '', '', 'active', 'technical', ''),
('Tazy Khan', '12BIT0170', '', '', 144, '0000-00-00', '', '', 'active', 'technical', ''),
('Shwetha Shaw', '14MCA0164', '', '', 145, '0000-00-00', '', '', 'active', 'technical', ''),
('Kevin Antony', '13BAM0009', '', '', 146, '0000-00-00', '', '', 'active', 'design', ''),
('Daksh Asija', '13BIT0168', '', '', 147, '0000-00-00', '', '', 'active', 'technical', ''),
('Rahul Chowdary', '13BCE0619', '', '', 148, '0000-00-00', '', '', 'active', 'technical', ''),
('Nikhil Verma', '13BCE0037', '', '', 149, '0000-00-00', '', '', 'active', 'technical', ''),
('Ankit Singh', '12BCE0455', '', '90887591918', 150, '1994-01-16', 'vit university', 'Male', 'active', 'technical', ''),
('Abhas Prashad', '12BCE0159', '', '', 151, '0000-00-00', '', '', 'active', 'technical', ''),
('Aakansha Kumari', '12BCE0519', '', '', 152, '0000-00-00', '', '', 'active', 'technical', ''),
('Adithya Mathur', '12MSE0143', '', '8220824794', 153, '0000-00-00', '', 'Male', 'active', 'technical', ''),
('Durga Chowdary', '12MSE0364', '', '9966430490', 154, '0000-00-00', '', 'Felmale', 'active', 'technical', ''),
('Saurabh Thakur', '13BCE0081', '', '9629767188', 155, '0000-00-00', '', '', 'active', 'technical', ''),
('Purusharth Sharma', '13BCE0186', '', '8110020021', 156, '0000-00-00', '', '', 'active', 'technical', ''),
('Reetuparna Mukherjee', '13BCE0313', '', '8110020662', 157, '0000-00-00', '', 'Felmale', 'active', 'technical', ''),
('Abhigyan Singh', '13BCE0347', '', '9787110370', 158, '0000-00-00', '', '', 'active', 'technical', ''),
('Goutam K Reddy', '13BCE0459', '', '8110020428', 159, '0000-00-00', '', 'Male', 'active', 'technical', ''),
('Shravya Murthy', '13BEC0635', '', '9629786424', 160, '0000-00-00', '', 'Felmale', 'active', 'technical', ''),
('Amit Srivastava', '13BIT0009', '', '9787109875', 161, '0000-00-00', '', '', 'active', 'technical', ''),
('Prince', '13BIT0222', '', '9524431744', 162, '0000-00-00', '', '', 'active', 'technical', ''),
('Sathish Kumar', '13MCA0024', '', '7845368091', 163, '0000-00-00', '', '', 'active', 'technical', ''),
('Selvam', '13MCA0049', '', '9003680363', 164, '0000-00-00', '', '', 'active', 'technical', ''),
('Ravi Raj Gulati', '13MSE0393', '', '9787115980', 165, '0000-00-00', '', '', 'active', 'technical', ''),
('Abhishek Kankani', '14BCE0488', '', '9944366767', 166, '0000-00-00', '', '', 'active', 'technical', ''),
('Priyal Jain', '14BCE0512', '', '7639810499', 167, '0000-00-00', '', '', 'active', 'technical', ''),
('Khushmeet Singh', '14BCE0523', '', '9944490100', 168, '0000-00-00', '', '', 'active', 'technical', ''),
('Ashwini Purohit', '14BCE0529', '', '8098678877', 169, '0000-00-00', '', '', 'active', 'technical', ''),
('Priyanshu Jindal', '14BCE0607', '', '9943766650', 170, '0000-00-00', '', '', 'active', 'technical', ''),
('Nimisha Gupta', '14BCE0635', '', '9952136366', 171, '0000-00-00', '', '', 'active', 'technical', ''),
('Attreya Bhatt', '14BCE0784', '', '', 172, '0000-00-00', '', '', 'active', 'technical', ''),
('Supreeta Balasubrama', '14BCE0833', '', '', 173, '0000-00-00', '', '', 'active', 'technical', ''),
('Shubhodeep Mukharjee', '14BCS0002', '', '', 174, '0000-00-00', '', '', 'active', 'technical', ''),
('Manigandan Karthikey', '14MCA0174', '', '', 175, '0000-00-00', '', '', 'active', 'technical', ''),
('Shimona Bordia', '14BCE0184', '', '', 176, '0000-00-00', '', '', 'active', 'management', ''),
('Harshit Satija', '14BIT0237', '', '', 177, '0000-00-00', '', '', 'active', 'management', ''),
('Shubhanjan Chakrabar', '14BIT0226', '', '', 178, '0000-00-00', '', '', 'active', 'management', ''),
('Shanya Verma', '14BCE0492', '', '', 179, '0000-00-00', '', '', 'active', 'management', ''),
('Surya Prakash', '13MCA0001', '', '', 180, '0000-00-00', '', '', 'active', 'management', ''),
('Kshitij Kumar', '14BEC0850', '', '', 181, '0000-00-00', '', '', 'active', 'management', ''),
('Nikhil Kasukurthi', '14BCE0506', '', '', 182, '0000-00-00', '', '', 'active', 'management', ''),
('Shaurya Shekhar', '14BCE0497', '', '', 183, '0000-00-00', '', '', 'active', 'management', ''),
('Abhishek Bansal', '13BCE0692', '', '', 184, '0000-00-00', '', '', 'active', 'management', ''),
('Anchal Arora', '13MCA0175', '', '', 185, '0000-00-00', '', '', 'active', 'management', ''),
('Jahnavi Pednekar', '14BEC0449', '', '', 186, '0000-00-00', '', '', 'active', 'management', ''),
('Shiv Bidani', '14BCE0553', '', '', 187, '0000-00-00', '', '', 'active', 'management', ''),
('Anshul Singh', '13BEC0774', '', '', 188, '0000-00-00', '', '', 'active', 'design', ''),
('Shivansh Jagga', '13BCE0188', '', '', 189, '0000-00-00', '', '', 'active', 'design', ''),
('Vignesh Shankar', '14BIT0139', '', '', 190, '0000-00-00', '', '', 'active', 'design', ''),
('Sarabpreet Singh', '14MCA0020', '', '', 191, '0000-00-00', '', '', 'active', 'design', '');

-- --------------------------------------------------------

--
-- Table structure for table `email_confirmation`
--

CREATE TABLE IF NOT EXISTS `email_confirmation` (
  `regno` varchar(9) NOT NULL,
  `email` varchar(60) NOT NULL,
  `hash` varchar(60) NOT NULL,
  UNIQUE KEY `regno` (`regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_confirmation`
--

INSERT INTO `email_confirmation` (`regno`, `email`, `hash`) VALUES
('12BCE0455', 'undefined', 'hash'),
('12BIT0106', 'undefined', 'hash'),
('14mca0146', 'undefined', 'hash');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `club_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `place` varchar(25) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `date_added` date NOT NULL,
  `details` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `club_id`, `name`, `date`, `time`, `place`, `purpose`, `date_added`, `details`) VALUES
(1, 60, 'Women In Tech', '2015-03-22', '10:00:00', 'Homi Bhabha Gallery', 'Connect Create Celebrate the presence of women in Tech', '2015-04-02', 'A day dedicated to the presence of women in the tech world and to inspire other women.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `regno` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `grp_id` int(11) NOT NULL AUTO_INCREMENT,
  `club_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `admin` varchar(10) NOT NULL,
  `details` varchar(100) NOT NULL,
  PRIMARY KEY (`grp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `group_meetings`
--

CREATE TABLE IF NOT EXISTS `group_meetings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grp_id` int(11) NOT NULL,
  `club_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `place` varchar(25) NOT NULL,
  `details` varchar(100) NOT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `group_tasks`
--

CREATE TABLE IF NOT EXISTS `group_tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grp_id` int(11) NOT NULL,
  `club_id` int(11) NOT NULL,
  `reg_no` varchar(10) NOT NULL,
  `task` varchar(50) NOT NULL,
  `assignment_date` date NOT NULL,
  `completion_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE IF NOT EXISTS `meetings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `club_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `place` varchar(20) NOT NULL,
  `details` varchar(100) NOT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `club_id`, `date`, `time`, `place`, `details`, `date_added`) VALUES
(1, 60, '2015-03-20', '21:00:00', 'MB-110, MB-111', 'A walk through session of the Women In Tech event on 21st March.', '2015-03-20'),
(2, 60, '2015-03-21', '21:00:00', 'MB-110,MB-111', 'An exclusive meeting with the Program Manager of Google, Mr. Amrit Sanjeev.', '2015-04-02'),
(3, 60, '2015-03-22', '21:00:00', 'MB-110, MB-111', 'A celebration party for the grand success of the WTM event held on Saturday (21st March).', '2015-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `panel`
--

CREATE TABLE IF NOT EXISTS `panel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_no` varchar(30) NOT NULL,
  `club_id` int(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `panel`
--

INSERT INTO `panel` (`id`, `reg_no`, `club_id`, `pass`, `status`) VALUES
(22, '12BIF0045', 60, 'cyTK7Iyl', 0),
(23, '13BCE0395', 60, 'g4pr04Ce', 0),
(24, '14MCA0146', 60, 'prerit', 1),
(25, '13BCE0267', 60, 'EcwuawUh', 0),
(26, '12BIT0108', 60, 'sjBlW6FX', 0),
(27, '12BIT0224', 60, 'nNILaUO3', 0),
(28, '13BCB0062', 60, '7oBtBJ7j', 0),
(29, '13BAM0032', 60, 'rS0g1ijx', 0),
(30, '12BCE0416', 60, '7YGP7lap', 0),
(31, '12BIT0106', 60, 'sourabh', 0),
(32, '13BCE0557', 60, 'r0QptWNe', 0),
(33, '13BEC0031', 60, 'DqQTeY6E', 0),
(34, '13BEC0145', 60, '8t8cGt2K', 0),
(35, '13BCE0346', 60, 'JUp3Bfni', 0),
(36, '13BCE0662', 60, 'artcJ0R0', 0),
(37, '13BEC0490', 60, 'bR5pPufE', 0),
(38, '13BCE0258', 60, 'xSXqDthZ', 0),
(39, '12MSE0363', 60, 'YhP0SIIJ', 0),
(40, '13MSE0350', 60, 'anurag', 0),
(41, '13BCE0740', 60, '6aGNNULx', 0),
(42, '12BCE0548', 60, 'ia9xXmT4', 0),
(43, '12BIT0170', 60, 'AwDPy4q2', 0),
(44, '14MCA0164', 60, 'H0SpmL6c', 0),
(45, '13BAM0009', 60, 'olF49cGg', 0),
(46, '13BIT0168', 60, 'riIwD8T2', 0),
(47, '13BCE0619', 60, 'zDNxAiwe', 0),
(48, '13BCE0037', 60, 'x5EQKshB', 0),
(49, '12BCE0455', 60, 'ankit', 1),
(50, '12BCE0159', 60, 'YkFnHLgS', 0),
(51, '12BCE0519', 60, 'WDk70oZh', 0),
(52, '12MSE0143', 60, 'qnlcOr2a', 0),
(53, '12MSE0364', 60, 'fABRNYTf', 0),
(54, '13BCE0081', 60, '4kiMaTCr', 0),
(55, '13BCE0186', 60, 'FocHG2Uw', 0),
(56, '13BCE0313', 60, 'Nw5l65yc', 0),
(57, '13BCE0347', 60, 'cqFuaOgf', 0),
(58, '13BCE0459', 60, 'CUHSDYOp', 0),
(59, '13BEC0635', 60, 'NHYgeiYr', 0),
(60, '13BIT0009', 60, 'wxaoKAq6', 0),
(61, '13BIT0222', 60, 'wa61Ux07', 0),
(62, '13MCA0024', 60, 'xmtRsTof', 0),
(63, '13MCA0049', 60, 'jR5Iasnf', 0),
(64, '13MSE0393', 60, 'DpEiMXIR', 0),
(65, '14BCE0488', 60, 'dMUn277Q', 0),
(66, '14BCE0512', 60, 'OHEIGIlX', 0),
(67, '14BCE0523', 60, 'cUA2tubW', 0),
(68, '14BCE0529', 60, '7bu6bclw', 0),
(69, '14BCE0607', 60, 'hg6ExABs', 0),
(70, '14BCE0635', 60, 'tTbrgoGx', 0),
(71, '14BCE0784', 60, 'sPseaomt', 0),
(72, '14BCE0833', 60, 'YOIKXjm2', 0),
(73, '14BCS0002', 60, 'JCFMoWsY', 0),
(74, '14MCA0174', 60, 'xY53eYo0', 0),
(75, '14BCE0184', 60, '6DIidbUT', 0),
(76, '14BIT0237', 60, 'ckji6jLq', 0),
(77, '14BIT0226', 60, 'zQCMD9Hk', 0),
(78, '14BCE0492', 60, 'XUnwzotk', 0),
(79, '13MCA0001', 60, '7ilfEPPd', 0),
(80, '14BEC0850', 60, 'NJhIDcxH', 0),
(81, '14BCE0506', 60, 'KYWFgejz', 0),
(82, '14BCE0497', 60, 'JK2RhIWy', 0),
(83, '13BCE0692', 60, 'uQl4sm8n', 0),
(84, '13MCA0175', 60, 'M0D0xXGQ', 0),
(85, '14BEC0449', 60, 'kXCpfciG', 0),
(86, '14BCE0553', 60, 'Tr46nTLD', 0),
(87, '13BEC0774', 60, 'fgJKELOr', 0),
(88, '13BCE0188', 60, '88laOzcS', 0),
(89, '14BIT0139', 60, 'hNG3D3FF', 0),
(90, '14MCA0020', 60, 'r2tcPYYA', 0),
(91, '14bce0001', 60, 'E9nLnkL2', 0),
(92, '', 60, 's2sAyJsT', 0),
(93, '13bit0134', 60, 'k1XKtoPI', 0),
(94, '12bit0178', 60, '3HZh88gp', 0),
(95, '12nmd3456', 60, 'XtQYzhjP', 0),
(96, '12ert6578', 60, 'XZohe0oS', 0);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `regno` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_id` int(10) NOT NULL,
  `task` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `assignment_date` date NOT NULL,
  `completion_date` date NOT NULL,
  `status` int(5) NOT NULL DEFAULT '0',
  `description` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `regno`, `club_id`, `task`, `assignment_date`, `completion_date`, `status`, `description`) VALUES
(1, '13BCE0740', 60, 'Launch the Admin Panel Website', '2015-03-18', '2015-03-21', 0, 'Present the website which would later form the backbone of most of the clubs and chapters in VIT-Vel');

-- --------------------------------------------------------

--
-- Table structure for table `thread_list`
--

CREATE TABLE IF NOT EXISTS `thread_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Thread ID',
  `club_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL COMMENT 'Thread Name',
  `description` text NOT NULL,
  `created_by` varchar(30) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `thread_list`
--

INSERT INTO `thread_list` (`id`, `club_id`, `name`, `description`, `created_by`, `date`) VALUES
(11, 0, 'thread1', 'thread 1', '0', '2015-01-11 00:51:59'),
(12, 0, 'GDG', 'discussion thread 1', '0', '2015-01-11 01:31:22'),
(13, 0, 'as', 'srw', '0', '2015-01-12 18:26:51'),
(14, 0, 'tset', 'test thread', '0', '2015-01-25 21:34:04'),
(15, 0, 't1', 't1', '0', '2015-01-26 14:52:58'),
(16, 0, 'test2', 'test2', '0', '2015-01-26 15:34:27'),
(17, 60, 'Test Thread', 'Test Thread Description', '12bce0246', '2015-02-06 11:35:55'),
(18, 60, 'test 2', 'test 2 description', '12bce0246', '2015-02-06 12:09:18'),
(19, 60, 'eq', 'eq', '12bce0246', '2015-02-07 19:31:25'),
(20, 60, 'wqe', 'qwe', '12bce0246', '2015-02-07 19:31:38'),
(21, 60, 'ewr', 'rwe', '12bce0246', '2015-02-07 19:32:08'),
(22, 60, 'so', 'ds', '14mca0146', '2015-03-19 01:38:00'),
(23, 60, 's', 'dfgf', '14mca0146', '2015-03-19 01:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `timepass`
--

CREATE TABLE IF NOT EXISTS `timepass` (
  `name` text,
  `pass` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
