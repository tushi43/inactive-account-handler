-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2018 at 02:53 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iah1`
--

-- --------------------------------------------------------

--
-- Table structure for table `t1`
--

CREATE TABLE `t1` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `age` double(5,2) NOT NULL,
  `email` text NOT NULL,
  `recovery_email` text NOT NULL,
  `account_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `account_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `period` double(20,2) NOT NULL DEFAULT '0.00',
  `data_occupied` double NOT NULL DEFAULT '0',
  `hash` varchar(50) NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Registration table entries';

--
-- Dumping data for table `t1`
--

INSERT INTO `t1` (`id`, `username`, `firstname`, `lastname`, `password`, `age`, `email`, `recovery_email`, `account_updated`, `account_created`, `period`, `data_occupied`, `hash`, `active`) VALUES
(78, 'rad97', 'Rahul', 'Dhameja', '160cbe7fe1d25f03c8c899084ab8d92a', 20.00, 'radhameeja@gmail.com', '2015rahul.dhameja@ves.ac.in', '2018-03-18 10:37:11', '2018-01-25 01:51:02', 0.00, 12.8, '37a749d808e46495a8da1e5352d03cae', 1),
(79, 'ajupawale', 'Ajinkya', 'Pawale', '25d55ad283aa400af464c76d713c07ad', 20.00, '2015ajinkya.pawale@ves.ac.in', '2015vivek.sohal@ves.ac.in', '2018-03-18 10:42:58', '2018-01-25 01:51:43', 0.00, 17.549999999999997, '2ca65f58e35d9ad45bf7f3ae5cfd08f1', 1),
(81, 'rahul', 'rahul', 'dhameja', '25d55ad283aa400af464c76d713c07ad', 20.00, '2015rahul.dhameja@ves.ac.in', 'radhameja@gmaill.com', '2018-03-18 12:03:22', '2018-01-25 01:54:03', 0.00, 5.2, '2723d092b63885e0d7c260cc007e8b9d', 1),
(82, 'agrarian_cat', 'Rajesh', 'Narwal', '25d55ad283aa400af464c76d713c07ad', 25.00, 'pawalecristiano@gmail.com', '2015nikhil.dalvi@ves.ac.in', '2018-03-18 12:05:33', '2018-01-25 01:54:47', 0.00, 0.9600000000000001, '555d6702c950ecb729a966504af0a635', 1),
(83, 'rahuld', 'Rahul', 'Dhameja', '25d55ad283aa400af464c76d713c07ad', 20.00, 'rahuldhameja1797@gmail.com', 'radhameja@gmaill.com', '2018-03-18 12:30:48', '2018-01-25 01:54:57', 0.00, 44.05, '5f93f983524def3dca464469d2cf9f3e', 1),
(85, 'rd', 'Rahul', 'Dhameja', '25d55ad283aa400af464c76d713c07ad', 20.00, '2015rahul.dhameja@ves.ac.in', 'radhameja@gmaill.com', '2018-03-18 12:36:04', '2018-01-25 01:57:36', 0.00, 60.730000000000004, '289dff07669d7a23de0ef88d2f7129e7', 1),
(86, 'rad', 'Rahul', 'Dhameja', '25d55ad283aa400af464c76d713c07ad', 20.00, 'radhameja@gmail.com', 'rahuldhameja1797@gmail.com', '2018-03-18 12:38:52', '2018-01-25 01:58:50', 0.00, 44.06, 'd14220ee66aeec73c49038385428ec4c', 1),
(87, 'rahul_master', 'Rahul', 'Tulsian', '6eea9b7ef19179a06954edd0f6c05ceb', 22.00, '2015ajinkya.pawale@ves.ac.in', '2015harsh.mulchandani@ves.ac.in', '2018-03-18 12:44:26', '2018-01-25 01:59:21', 0.00, 43.96, '839ab46820b524afda05122893c2fe8e', 1),
(90, 'om', 'Om', 'Raheja', '6eea9b7ef19179a06954edd0f6c05ceb', 25.00, 'pawalecristiano@gmail.com', '2015vivek.sohal@ves.ac.in', '2018-03-18 12:46:50', '2018-01-25 02:02:32', 0.00, 56.36, '3cef96dcc9b8035d23f69e30bb19218a', 1),
(91, 'nikhil', 'Nikhil', 'Dalvi', '6eea9b7ef19179a06954edd0f6c05ceb', 17.00, '2018visualarts@gmail.com', '2015ajinkya.pawale@ves.ac.in', '2018-03-18 12:48:49', '2018-01-25 02:05:12', 0.00, 49.379999999999995, '3cef96dcc9b8035d23f69e30bb19218a', 1),
(92, 'tushar', 'Tushar', 'Jumani', '25d55ad283aa400af464c76d713c07ad', 23.00, '2015tushar.jumani@ves.ac.in', '2015roshan.talreja@ves.ac.in', '2018-03-18 12:53:13', '2018-01-25 02:07:32', 40000.00, 43.69, 'c3e878e27f52e2a57ace4d9a76fd9acf', 1),
(93, 'yashika', 'Yashika', 'Bhatia', '25d55ad283aa400af464c76d713c07ad', 20.00, 'tushar.jumani@gmail.com', '2015vivek.sohal@ves.ac.in', '2018-03-18 12:55:16', '2018-01-25 02:09:00', 0.00, 51.48, '0a09c8844ba8f0936c20bd791130d6b6', 1),
(94, 'uday', 'Uday', 'Jahadav', '6eea9b7ef19179a06954edd0f6c05ceb', 23.00, '2015sayali.jadhav@ves.ac.in', '2015ajinkya.pawale@ves.ac.in', '2018-03-18 12:50:38', '2018-01-25 02:10:27', 0.00, 55.42, '5ec91aac30eae62f4140325d09b9afd0', 1),
(95, 'ramesh', 'Ramesh', 'Tolani', '25d55ad283aa400af464c76d713c07ad', 34.00, '2015saili.kadam@ves.ac.in', '2015ajinkya.pawale@ves.ac.in', '2018-03-18 12:59:02', '2018-01-25 02:13:08', 0.00, 85.34, 'b056eb1587586b71e2da9acfe4fbd19e', 1),
(96, 'milbir', 'Milbir', 'Khan', '6eea9b7ef19179a06954edd0f6c05ceb', 20.00, 'tushar.jumani@gmail.com', '2015harsh.mulchandani@ves.ac.in', '2018-01-25 02:14:53', '2018-01-25 02:14:53', 0.00, 0, '58ae749f25eded36f486bc85feb3f0ab', 1),
(97, 'mohit', 'Mohit', 'Bhatia', '6eea9b7ef19179a06954edd0f6c05ceb', 38.00, '2015ajinkya.pawale@ves.ac.in', 'ajupawale@gmail.com', '2018-01-25 02:17:01', '2018-01-25 02:17:01', 0.00, 0, '8757150decbd89b0f5442ca3db4d0e0e', 1),
(98, 'harsh', 'Harsh', 'Bhatia', '25d55ad283aa400af464c76d713c07ad', 22.00, '2015rahul.dhameja@ves.ac.in', '2015saili.kadam@ves.ac.in', '2018-03-18 13:01:15', '2018-01-25 02:19:21', 0.00, 64.89999999999999, '959a557f5f6beb411fd954f3f34b21c3', 1),
(99, 'subh', 'Shubhraj', 'Shelar', '6eea9b7ef19179a06954edd0f6c05ceb', 21.00, 'pawalecristiano@gmail.com', 'ajupawale@gmail.com', '2018-01-25 02:20:17', '2018-01-25 02:20:17', 0.00, 0, '01f78be6f7cad02658508fe4616098a9', 1),
(101, 'varkha', 'Varkha', 'Bhatia', '6eea9b7ef19179a06954edd0f6c05ceb', 30.00, '2015saili.kadam@ves.ac.in', '2015harsh.mulchandani@ves.ac.in', '2018-01-25 02:24:22', '2018-01-25 02:24:22', 0.00, 0, 'ac627ab1ccbdb62ec96e702f07f6425b', 1),
(102, 'sonia', 'sonia ', 'dhameja', '25d55ad283aa400af464c76d713c07ad', 21.00, 'radhameja@gmail.com', 'rahuldhameja1797@gmail.com', '2018-03-18 13:05:08', '2018-01-25 02:24:52', 0.00, 69.05, '287e03db1d99e0ec2edb90d079e142f3', 1),
(103, 'soniad', 'sonia ', 'Dhameja', '25d55ad283aa400af464c76d713c07ad', 22.00, 'rahuldhameja1797@gmail.com', '2015rahul.dhameja@ves.ac.in', '2018-03-18 13:06:57', '2018-01-25 02:25:49', 0.00, 52.06, 'a684eceee76fc522773286a895bc8436', 1),
(104, 'bhavna', 'Bhavna', 'Keswani', '6eea9b7ef19179a06954edd0f6c05ceb', 23.00, 'saili.jadhav@gmail.com', '2015harsh.mulchandani@ves.ac.in', '2018-01-25 02:25:59', '2018-01-25 02:25:59', 40000.00, 0, '093f65e080a295f8076b1c5722a46aa2', 1),
(105, 'karan', 'karan', 'makhija', '25d55ad283aa400af464c76d713c07ad', 20.00, 'radhameja@gmail.com', 'rahuldhameja1797@gmail.com', '2018-01-25 03:01:32', '2018-01-25 02:26:45', 0.00, 0, '2d6cc4b2d139a53512fb8cbb3086ae2e', 1),
(106, 'ajay', 'ajay', 'kangia', '25d55ad283aa400af464c76d713c07ad', 20.00, '2015rahul.dhameja@ves.ac.in', 'radhameja@gmaill.com', '2018-03-18 13:08:37', '2018-01-25 02:27:25', 0.00, 56.74000000000001, 'e5f6ad6ce374177eef023bf5d0c018b6', 1),
(107, 'sahil', 'sahil', 'kukreja', '25d55ad283aa400af464c76d713c07ad', 20.00, 'rahuldhameja1797@gmail.com', 'radhameja@gmaill.com', '2018-01-25 02:28:02', '2018-01-25 02:28:02', 0.00, 0, 'f74909ace68e51891440e4da0b65a70c', 0),
(108, 'esha', 'Esha', 'Dhameja', '6eea9b7ef19179a06954edd0f6c05ceb', 23.00, '2015saili.kadam@ves.ac.in', 'saili.kadam@gmail.com', '2018-01-25 02:28:29', '2018-01-25 02:28:29', 0.00, 0, 'b5b41fac0361d157d9673ecb926af5ae', 1);

--
-- Triggers `t1`
--
DELIMITER $$
CREATE TRIGGER `t1_to_t_duplicate_trigger` AFTER INSERT ON `t1` FOR EACH ROW BEGIN
    DECLARE  id INT ;
    DECLARE  username VARCHAR(50);
    DECLARE  firstname VARCHAR(50);
    DECLARE  lastname VARCHAR(50) ;
    DECLARE  password1 VARCHAR(50);
    DECLARE  age DOUBLE ;
    DECLARE  email TEXT ;
    DECLARE  recovery_email TEXT;
    DECLARE account_created timestamp;
    SET
        id = NEW.id,
        username = NEW.username,
        firstname = NEW.firstname,
        lastname = NEW.lastname,
        password1 = NEW.password,
        age = NEW.age,
        email = NEW.email,
        recovery_email = NEW.recovery_email,
		account_created = NEW.account_created;
INSERT INTO 
        t_duplicate  VALUES(id,username,firstname,lastname,password1,age,email,recovery_email,account_created);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `t2`
--

CREATE TABLE `t2` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `hashcode` varchar(50) NOT NULL,
  `e1` tinyint(3) NOT NULL DEFAULT '0',
  `e2` tinyint(3) NOT NULL DEFAULT '0',
  `e3` tinyint(3) NOT NULL DEFAULT '0',
  `time_to_send_email` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t2`
--

INSERT INTO `t2` (`id`, `username`, `email`, `hashcode`, `e1`, `e2`, `e3`, `time_to_send_email`) VALUES
(92, 'tushar', '2015tushar.jumani@ves.ac.in', 'c3e878e27f52e2a57ace4d9a76fd9acf', 0, 0, 0, 0),
(104, 'bhavna', 'saili.jadhav@gmail.com', '093f65e080a295f8076b1c5722a46aa2', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `t3`
--

CREATE TABLE `t3` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `data_deleted` double(15,3) NOT NULL,
  `data_deletion_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t3`
--

INSERT INTO `t3` (`id`, `username`, `password`, `email`, `data_deleted`, `data_deletion_date`) VALUES
(84, 'akash', '6eea9b7ef19179a06954edd0f6c05ceb', '2018visualarts@gmail.com', 33.460, '2018-03-18 13:15:24'),
(88, 'data_pawale', '25d55ad283aa400af464c76d713c07ad', 'radhameja@gmail.com', 57.740, '2018-03-18 13:16:29'),
(80, 'dungon_master', '25d55ad283aa400af464c76d713c07ad', 'ajupawale@gmail.com', 19.630, '2018-03-18 13:14:14'),
(100, 'kamal', '25d55ad283aa400af464c76d713c07ad', '2018visualarts@gmail.com', 57.940, '2018-03-18 13:18:01');

-- --------------------------------------------------------

--
-- Table structure for table `t4`
--

CREATE TABLE `t4` (
  `id` int(10) NOT NULL,
  `name` varchar(300) NOT NULL,
  `type` varchar(20) NOT NULL,
  `size` double(20,2) NOT NULL,
  `realsize` double NOT NULL,
  `description` varchar(200) NOT NULL,
  `imagetmp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t4`
--

INSERT INTO `t4` (`id`, `name`, `type`, `size`, `realsize`, `description`, `imagetmp`) VALUES
(78, '00XDSU-276691584 - Copy.jpg', 'image/jpeg', 0.07, 75976, 'qw', 'C:/xampp/htdocs/data/78/00XDSU-276691584 - Copy.jpg'),
(79, '2.jpg', 'image/jpeg', 0.55, 579178, 'sd', 'C:/xampp/htdocs/data/79/2.jpg'),
(82, '2014-10-Selena-Gomez-Cute-Singer-Photoshoot - Copy.jpg', 'image/jpeg', 0.11, 118128, 'awsd', 'C:/xampp/htdocs/data/82/2014-10-Selena-Gomez-Cute-Singer-Photoshoot - Copy.jpg'),
(78, '4.26-TE-ComputerEngg-2.pdf', 'application/pdf', 1.06, 1116485, 'ffvvg', 'C:/xampp/htdocs/data/78/4.26-TE-ComputerEngg-2.pdf'),
(82, 'alia bhatt HdWallpaper.jpg', 'image/jpeg', 0.04, 37954, 'alai', 'C:/xampp/htdocs/data/82/alia bhatt HdWallpaper.jpg'),
(78, 'alia-bhatt-hd-wallpapers-in-red-costume.jpg', 'image/jpeg', 0.03, 31917, 'asw', 'C:/xampp/htdocs/data/78/alia-bhatt-hd-wallpapers-in-red-costume.jpg'),
(81, 'Alia-Bhatt-Latest-Hd-Wallpapers.jpg', 'image/jpeg', 0.20, 207448, 'asd', 'C:/xampp/htdocs/data/81/Alia-Bhatt-Latest-Hd-Wallpapers.jpg'),
(78, 'Alia-Bhatt-Wallpaper-HD-1024x768 - Copy.jpg', 'image/jpeg', 0.15, 160625, 'alis', 'C:/xampp/htdocs/data/78/Alia-Bhatt-Wallpaper-HD-1024x768 - Copy.jpg'),
(79, 'Beautiful-Selena-Gomez-Cute-Portrait-Wide - Copy.jpg', 'image/jpeg', 0.17, 178460, 'fbvg', 'C:/xampp/htdocs/data/79/Beautiful-Selena-Gomez-Cute-Portrait-Wide - Copy.jpg'),
(82, 'Desert.jpg', 'image/jpeg', 0.81, 845941, 'awsdd', 'C:/xampp/htdocs/data/82/Desert.jpg'),
(79, 'dinosaur Green Screen .flv_(360p).mp4', 'video/mp4', 0.35, 371254, 'qsw', 'C:/xampp/htdocs/data/79/dinosaur Green Screen .flv_(360p).mp4'),
(79, 'download (10).jpg', 'image/jpeg', 0.01, 9497, ' xc ', 'C:/xampp/htdocs/data/79/download (10).jpg'),
(79, 'download (13).jpg', 'image/jpeg', 0.01, 9101, 'xvcd', 'C:/xampp/htdocs/data/79/download (13).jpg'),
(79, 'fond vert avion HD - greenscreen plane 1080HD_(1080p).mp4', 'video/mp4', 2.52, 2641163, 'szsx', 'C:/xampp/htdocs/data/79/fond vert avion HD - greenscreen plane 1080HD_(1080p).mp4'),
(79, 'Green Screen Action Movies Monsters and Animals Attack - Footage PixelBoom_(480p).mp4', 'video/mp4', 10.93, 11462459, 'zcc', 'C:/xampp/htdocs/data/79/Green Screen Action Movies Monsters and Animals Attack - Footage PixelBoom_(480p).mp4'),
(78, 'Green screen realistc blood splatter - YouTube (720p).mp4', 'video/mp4', 3.16, 3314463, 'asd', 'C:/xampp/htdocs/data/78/Green screen realistc blood splatter - YouTube (720p).mp4'),
(78, 'Hancock Landing Effect Green Screen - free green screen_(1080p).mp4', 'video/mp4', 8.10, 8498614, 'dd', 'C:/xampp/htdocs/data/78/Hancock Landing Effect Green Screen - free green screen_(1080p).mp4'),
(83, 'hqdefault.jpg', 'image/jpeg', 0.02, 22803, 'plok', 'C:/xampp/htdocs/data/83/hqdefault.jpg'),
(79, 'images (20).jpg', 'image/jpeg', 0.01, 6322, ' c c c ccx', 'C:/xampp/htdocs/data/79/images (20).jpg'),
(79, 'IMG_20160403_192318.jpg', 'image/jpeg', 0.55, 572272, 'sxzc', 'C:/xampp/htdocs/data/79/IMG_20160403_192318.jpg'),
(78, 'leveeele.png', 'image/png', 0.23, 244665, 'dcd', 'C:/xampp/htdocs/data/78/leveeele.png'),
(83, 'main.html', 'text/html', 0.00, 1039, 'asded', 'C:/xampp/htdocs/data/83/main.html'),
(81, 'new-fe-syllabus-2.pdf', 'application/pdf', 0.28, 289939, 'aas', 'C:/xampp/htdocs/data/81/new-fe-syllabus-2.pdf'),
(81, 'sem1.pdf', 'application/pdf', 2.06, 2162635, 'sssaz', 'C:/xampp/htdocs/data/81/sem1.pdf'),
(81, 'spRdh_Report_2.pdf', 'application/pdf', 1.45, 1520882, 'xvcd', 'C:/xampp/htdocs/data/81/spRdh_Report_2.pdf'),
(79, 'Taylor-Swift-in-Field-HD-Wallpaper.jpg', 'image/jpeg', 0.30, 311874, 'c c ', 'C:/xampp/htdocs/data/79/Taylor-Swift-in-Field-HD-Wallpaper.jpg'),
(81, 'Taylor-Swift-Wallpaper-High-Resolution-Photos-521.jpg', 'image/jpeg', 0.62, 648405, 'za', 'C:/xampp/htdocs/data/81/Taylor-Swift-Wallpaper-High-Resolution-Photos-521.jpg'),
(79, 'TEMPLATE FOR FRONT PAGE.pdf', 'application/pdf', 0.08, 86855, ' xc ', 'C:/xampp/htdocs/data/79/TEMPLATE FOR FRONT PAGE.pdf'),
(79, 'Tiger on green screen_(480p).mp4', 'video/mp4', 2.07, 2174471, ' xz', 'C:/xampp/htdocs/data/79/Tiger on green screen_(480p).mp4'),
(81, 'Tulips.jpg', 'image/jpeg', 0.59, 620888, 'asx', 'C:/xampp/htdocs/data/81/Tulips.jpg'),
(83, '2014-10-Selena-Gomez-Cute-Singer-Photoshoot - Copy.jpg', 'image/jpeg', 0.11, 118128, 'asd1', 'C:/xampp/htdocs/data/83/2014-10-Selena-Gomez-Cute-Singer-Photoshoot - Copy.jpg'),
(83, 'sem1.pdf', 'application/pdf', 2.06, 2162635, 'sdfgg', 'C:/xampp/htdocs/data/83/sem1.pdf'),
(83, 'TEMPLATE FOR FRONT PAGE.pdf', 'application/pdf', 0.08, 86855, 'dcfv', 'C:/xampp/htdocs/data/83/TEMPLATE FOR FRONT PAGE.pdf'),
(83, 'sprdh_ppt.pptx', 'application/vnd.open', 1.72, 1799462, 'xzcc ', 'C:/xampp/htdocs/data/83/sprdh_ppt.pptx'),
(83, 'Alia-Bhatt-Wallpaper-HD-1024x768 - Copy.jpg', 'image/jpeg', 0.15, 160625, 'egthyh', 'C:/xampp/htdocs/data/83/Alia-Bhatt-Wallpaper-HD-1024x768 - Copy.jpg'),
(83, 'Profilepic.jpg', 'image/jpeg', 1.44, 1509445, 'sccv', 'C:/xampp/htdocs/data/83/Profilepic.jpg'),
(83, 'image-1401962614_shraddha_kapoor_in_ek_villain_movie.jpg', 'image/jpeg', 0.92, 962347, 'x c v v', 'C:/xampp/htdocs/data/83/image-1401962614_shraddha_kapoor_in_ek_villain_movie.jpg'),
(83, 'Blood Splatter on the Wall - Green Screen Animation - YouTube (720p).mp4', 'video/mp4', 1.59, 1669634, ' x ', 'C:/xampp/htdocs/data/83/Blood Splatter on the Wall - Green Screen Animation - YouTube (720p).mp4'),
(83, 'Green Screen Action Movies Monsters and Animals Attack - Footage PixelBoom_(480p).mp4', 'video/mp4', 10.93, 11462459, 'acfv', 'C:/xampp/htdocs/data/83/Green Screen Action Movies Monsters and Animals Attack - Footage PixelBoom_(480p).mp4'),
(83, 'Wildlife.wmv', 'video/x-ms-wmv', 25.03, 26246026, 'addcdc', 'C:/xampp/htdocs/data/83/Wildlife.wmv'),
(85, 'Wildlife.wmv', 'video/x-ms-wmv', 25.03, 26246026, 'qwws', 'C:/xampp/htdocs/data/85/Wildlife.wmv'),
(85, 'sem1.pdf', 'application/pdf', 2.06, 2162635, 'af', 'C:/xampp/htdocs/data/85/sem1.pdf'),
(85, 'eagle fly landing - 3 different views - green screen_(1080p).mp4', 'video/mp4', 6.19, 6491996, 'sggg', 'C:/xampp/htdocs/data/85/eagle fly landing - 3 different views - green screen_(1080p).mp4'),
(85, 'JURASSIC PARK T Rex roars and bites animation Royalty Free Green Screen Footage CG Dinosaur 3DS MAX_(720p).mp4', 'video/mp4', 7.77, 8142290, 'dfbg', 'C:/xampp/htdocs/data/85/JURASSIC PARK T Rex roars and bites animation Royalty Free Green Screen Footage CG Dinosaur 3DS MAX_(720p).mp4'),
(85, 'Beautiful-Selena-Gomez-Cute-Portrait-Wide - Copy.jpg', 'image/jpeg', 0.17, 178460, 'sfgg', 'C:/xampp/htdocs/data/85/Beautiful-Selena-Gomez-Cute-Portrait-Wide - Copy.jpg'),
(85, 'Tiger on green screen_(480p).mp4', 'video/mp4', 2.07, 2174471, 'csffhg', 'C:/xampp/htdocs/data/85/Tiger on green screen_(480p).mp4'),
(85, 'spRdh_Report_2.pdf', 'application/pdf', 1.45, 1520882, 'asdgg', 'C:/xampp/htdocs/data/85/spRdh_Report_2.pdf'),
(85, 'Green Screen Monstrous Dragon Flies - Footage PixelBoom_(480p).mp4', 'video/mp4', 9.25, 9699437, 'dff', 'C:/xampp/htdocs/data/85/Green Screen Monstrous Dragon Flies - Footage PixelBoom_(480p).mp4'),
(85, 'Planet Earth Globe Rotation - Best Green Screen Earth Rotation_(720p).mp4', 'video/mp4', 6.74, 7063878, 'asddff', 'C:/xampp/htdocs/data/85/Planet Earth Globe Rotation - Best Green Screen Earth Rotation_(720p).mp4'),
(86, 'sprdh_ppt.pptx', 'application/vnd.open', 1.72, 1799462, 'dghh', 'C:/xampp/htdocs/data/86/sprdh_ppt.pptx'),
(86, 'Sprdh_final_phase_presentation.pptx', 'application/vnd.open', 4.93, 5170509, 'dfgg', 'C:/xampp/htdocs/data/86/Sprdh_final_phase_presentation.pptx'),
(86, 'new-fe-syllabus-2.pdf', 'application/pdf', 0.28, 289939, 'dfg', 'C:/xampp/htdocs/data/86/new-fe-syllabus-2.pdf'),
(86, 'Wildlife.wmv', 'video/x-ms-wmv', 25.03, 26246026, 'aswdf', 'C:/xampp/htdocs/data/86/Wildlife.wmv'),
(86, 'Jurassic Park III Spinosaur green screen animation (Spino green screen dinosaurs 3D Studio max)_(720p).mp4', 'video/mp4', 5.36, 5617707, 'apok', 'C:/xampp/htdocs/data/86/Jurassic Park III Spinosaur green screen animation (Spino green screen dinosaurs 3D Studio max)_(720p).mp4'),
(86, 'Planet Earth Globe Rotation - Best Green Screen Earth Rotation_(720p).mp4', 'video/mp4', 6.74, 7063878, 'aff', 'C:/xampp/htdocs/data/86/Planet Earth Globe Rotation - Best Green Screen Earth Rotation_(720p).mp4'),
(87, 'ddb3print.odt', 'application/vnd.oasi', 0.19, 194366, 'sdvf', 'C:/xampp/htdocs/data/87/ddb3print.odt'),
(87, 'alia-bhatt-hd-wallpapers-in-red-costume.jpg', 'image/jpeg', 0.03, 31917, 'cdcf', 'C:/xampp/htdocs/data/87/alia-bhatt-hd-wallpapers-in-red-costume.jpg'),
(87, 'Wildlife.wmv', 'video/x-ms-wmv', 25.03, 26246026, 'sdfbgb', 'C:/xampp/htdocs/data/87/Wildlife.wmv'),
(87, 'Hancock Landing Effect Green Screen - free green screen_(1080p).mp4', 'video/mp4', 8.10, 8498614, 'ssdvf', 'C:/xampp/htdocs/data/87/Hancock Landing Effect Green Screen - free green screen_(1080p).mp4'),
(87, 'Selfie strikers #fun at railway_(360p).mp4', 'video/mp4', 1.36, 1421026, 'scdvf', 'C:/xampp/htdocs/data/87/Selfie strikers #fun at railway_(360p).mp4'),
(87, 'Green Screen Monstrous Dragon Flies - Footage PixelBoom_(480p).mp4', 'video/mp4', 9.25, 9699437, 'zsdscv d', 'C:/xampp/htdocs/data/87/Green Screen Monstrous Dragon Flies - Footage PixelBoom_(480p).mp4'),
(90, 'new-fe-syllabus-2.pdf', 'application/pdf', 0.28, 289939, 'acdvfv', 'C:/xampp/htdocs/data/90/new-fe-syllabus-2.pdf'),
(90, 'Wildlife.wmv', 'video/x-ms-wmv', 25.03, 26246026, 'sadvfsv', 'C:/xampp/htdocs/data/90/Wildlife.wmv'),
(90, 'fond vert avion HD - greenscreen plane 1080HD_(1080p).mp4', 'video/mp4', 2.52, 2641163, 'xzvx ', 'C:/xampp/htdocs/data/90/fond vert avion HD - greenscreen plane 1080HD_(1080p).mp4'),
(90, 'Halloween talking pumpkin green screen A_(1080p).mp4', 'video/mp4', 8.45, 8863214, 'ssfd', 'C:/xampp/htdocs/data/90/Halloween talking pumpkin green screen A_(1080p).mp4'),
(90, 'Jurassic Park III Spinosaur green screen animation (Spino green screen dinosaurs 3D Studio max)_(720p).mp4', 'video/mp4', 5.36, 5617707, 'cxfv', 'C:/xampp/htdocs/data/90/Jurassic Park III Spinosaur green screen animation (Spino green screen dinosaurs 3D Studio max)_(720p).mp4'),
(90, 'main.html', 'text/html', 0.00, 1039, 'cfvdgb', 'C:/xampp/htdocs/data/90/main.html'),
(90, 'TEMPLATE FOR FRONT PAGE.pdf', 'application/pdf', 0.08, 86855, 'sfb', 'C:/xampp/htdocs/data/90/TEMPLATE FOR FRONT PAGE.pdf'),
(90, 'Halloween talking pumpkin green screen A_(1080p).mp4', 'video/mp4', 8.45, 8863214, 'asddffg', 'C:/xampp/htdocs/data/90/Halloween talking pumpkin green screen A_(1080p).mp4'),
(90, 'eagle fly landing - 3 different views - green screen_(1080p).mp4', 'video/mp4', 6.19, 6491996, 'addfgghhb ', 'C:/xampp/htdocs/data/90/eagle fly landing - 3 different views - green screen_(1080p).mp4'),
(91, 'Wildlife.wmv', 'video/x-ms-wmv', 25.03, 26246026, 'asddf', 'C:/xampp/htdocs/data/91/Wildlife.wmv'),
(91, 'alia bhatt HdWallpaper.jpg', 'image/jpeg', 0.04, 37954, 'XC ', 'C:/xampp/htdocs/data/91/alia bhatt HdWallpaper.jpg'),
(91, 'alia-bhatt-hd-wallpapers-in-red-costume.jpg', 'image/jpeg', 0.03, 31917, 'zxcc', 'C:/xampp/htdocs/data/91/alia-bhatt-hd-wallpapers-in-red-costume.jpg'),
(91, '2.jpg', 'image/jpeg', 0.55, 579178, 'asdf', 'C:/xampp/htdocs/data/91/2.jpg'),
(91, 'sem1.pdf', 'application/pdf', 2.06, 2162635, 'xcv', 'C:/xampp/htdocs/data/91/sem1.pdf'),
(91, 'Green Screen Action Movies Monsters and Animals Attack - Footage PixelBoom_(480p).mp4', 'video/mp4', 10.93, 11462459, 'zxcvvv', 'C:/xampp/htdocs/data/91/Green Screen Action Movies Monsters and Animals Attack - Footage PixelBoom_(480p).mp4'),
(91, 'tushar_resume.jpg', 'image/jpeg', 0.07, 69497, 'ccvv', 'C:/xampp/htdocs/data/91/tushar_resume.jpg'),
(91, 'Alia-Bhatt-Wallpaper-HD-1024x768 - Copy.jpg', 'image/jpeg', 0.15, 160625, 'cdvv', 'C:/xampp/htdocs/data/91/Alia-Bhatt-Wallpaper-HD-1024x768 - Copy.jpg'),
(91, 'Tiger on green screen_(480p).mp4', 'video/mp4', 2.07, 2174471, 'zxc', 'C:/xampp/htdocs/data/91/Tiger on green screen_(480p).mp4'),
(91, 'Halloween talking pumpkin green screen A_(1080p).mp4', 'video/mp4', 8.45, 8863214, 'zcvvbnb', 'C:/xampp/htdocs/data/91/Halloween talking pumpkin green screen A_(1080p).mp4'),
(94, '1344793.jpg', 'image/jpeg', 0.44, 463275, 'zvxbgb', 'C:/xampp/htdocs/data/94/1344793.jpg'),
(94, 'sem1.pdf', 'application/pdf', 2.06, 2162635, 'zcxcv', 'C:/xampp/htdocs/data/94/sem1.pdf'),
(94, 'TEMPLATE FOR FRONT PAGE.pdf', 'application/pdf', 0.08, 86855, 'scdv', 'C:/xampp/htdocs/data/94/TEMPLATE FOR FRONT PAGE.pdf'),
(94, 'Jurassic Park III Spinosaur green screen animation (Spino green screen dinosaurs 3D Studio max)_(720p).mp4', 'video/mp4', 5.36, 5617707, 'zccv', 'C:/xampp/htdocs/data/94/Jurassic Park III Spinosaur green screen animation (Spino green screen dinosaurs 3D Studio max)_(720p).mp4'),
(94, 'Wildlife.wmv', 'video/x-ms-wmv', 25.03, 26246026, 'sfv', 'C:/xampp/htdocs/data/94/Wildlife.wmv'),
(94, 'Final IAH report .docx', 'application/vnd.open', 4.78, 5015168, 'cdhvb', 'C:/xampp/htdocs/data/94/Final IAH report .docx'),
(94, 'Planet Earth Globe Rotation - Best Green Screen Earth Rotation_(720p).mp4', 'video/mp4', 6.74, 7063878, 'scdcbhv', 'C:/xampp/htdocs/data/94/Planet Earth Globe Rotation - Best Green Screen Earth Rotation_(720p).mp4'),
(94, 'Green Screen Action Movies Monsters and Animals Attack - Footage PixelBoom_(480p).mp4', 'video/mp4', 10.93, 11462459, 'c ch ', 'C:/xampp/htdocs/data/94/Green Screen Action Movies Monsters and Animals Attack - Footage PixelBoom_(480p).mp4'),
(92, 'TEMPLATE FOR FRONT PAGE.pdf', 'application/pdf', 0.08, 86855, 'dvbfhv', 'C:/xampp/htdocs/data/92/TEMPLATE FOR FRONT PAGE.pdf'),
(92, 'ddb3print.odt', 'application/vnd.oasi', 0.19, 194366, 'v fv ', 'C:/xampp/htdocs/data/92/ddb3print.odt'),
(92, 'Wildlife.wmv', 'video/x-ms-wmv', 25.03, 26246026, 'vdvjfv', 'C:/xampp/htdocs/data/92/Wildlife.wmv'),
(92, 'alia bhatt HdWallpaper.jpg', 'image/jpeg', 0.04, 37954, ' c nv', 'C:/xampp/htdocs/data/92/alia bhatt HdWallpaper.jpg'),
(92, 'images (20).jpg', 'image/jpeg', 0.01, 6322, ' jfv', 'C:/xampp/htdocs/data/92/images (20).jpg'),
(92, 'IMG_20160403_192318.jpg', 'image/jpeg', 0.55, 572272, 'd cvc', 'C:/xampp/htdocs/data/92/IMG_20160403_192318.jpg'),
(92, 'JURASSIC PARK T Rex roars and bites animation Royalty Free Green Screen Footage CG Dinosaur 3DS MAX_(720p).mp4', 'video/mp4', 7.77, 8142290, 'cxc', 'C:/xampp/htdocs/data/92/JURASSIC PARK T Rex roars and bites animation Royalty Free Green Screen Footage CG Dinosaur 3DS MAX_(720p).mp4'),
(92, 'Vertical Fragment.odt', 'application/vnd.oasi', 0.21, 222526, 'scdcv', 'C:/xampp/htdocs/data/92/Vertical Fragment.odt'),
(92, 'Selfie strikers #fun at railway_(360p).mp4', 'video/mp4', 1.36, 1421026, 'dcdcdvdvdv', 'C:/xampp/htdocs/data/92/Selfie strikers #fun at railway_(360p).mp4'),
(92, 'Halloween talking pumpkin green screen A_(1080p).mp4', 'video/mp4', 8.45, 8863214, 'zxsc', 'C:/xampp/htdocs/data/92/Halloween talking pumpkin green screen A_(1080p).mp4'),
(93, 'new-fe-syllabus-2.pdf', 'application/pdf', 0.28, 289939, 'dcf', 'C:/xampp/htdocs/data/93/new-fe-syllabus-2.pdf'),
(93, 'sem1.pdf', 'application/pdf', 2.06, 2162635, 'sdf', 'C:/xampp/htdocs/data/93/sem1.pdf'),
(93, 'Desert.jpg', 'image/jpeg', 0.81, 845941, 'xcd', 'C:/xampp/htdocs/data/93/Desert.jpg'),
(93, 'Wildlife.wmv', 'video/x-ms-wmv', 25.03, 26246026, 'sdghc d', 'C:/xampp/htdocs/data/93/Wildlife.wmv'),
(93, 'Jurassic Park III Spinosaur green screen animation (Spino green screen dinosaurs 3D Studio max)_(720p).mp4', 'video/mp4', 5.36, 5617707, 'scdcdcdvc', 'C:/xampp/htdocs/data/93/Jurassic Park III Spinosaur green screen animation (Spino green screen dinosaurs 3D Studio max)_(720p).mp4'),
(93, 'Halloween talking pumpkin green screen A_(1080p).mp4', 'video/mp4', 8.45, 8863214, 'sdccdcfc', 'C:/xampp/htdocs/data/93/Halloween talking pumpkin green screen A_(1080p).mp4'),
(93, 'fond vert avion HD - greenscreen plane 1080HD_(1080p).mp4', 'video/mp4', 2.52, 2641163, 'cscdc', 'C:/xampp/htdocs/data/93/fond vert avion HD - greenscreen plane 1080HD_(1080p).mp4'),
(93, 'leveeele.png', 'image/png', 0.23, 244665, 'asdss', 'C:/xampp/htdocs/data/93/leveeele.png'),
(93, 'Planet Earth Globe Rotation - Best Green Screen Earth Rotation_(720p).mp4', 'video/mp4', 6.74, 7063878, 'adsdscsxcdxc', 'C:/xampp/htdocs/data/93/Planet Earth Globe Rotation - Best Green Screen Earth Rotation_(720p).mp4'),
(95, 'Wildlife.wmv', 'video/x-ms-wmv', 25.03, 26246026, 'sdcdsv', 'C:/xampp/htdocs/data/95/Wildlife.wmv'),
(95, 'Green Screen Action Movies Monsters and Animals Attack - Footage PixelBoom_(480p).mp4', 'video/mp4', 10.93, 11462459, 'sccdc', 'C:/xampp/htdocs/data/95/Green Screen Action Movies Monsters and Animals Attack - Footage PixelBoom_(480p).mp4'),
(95, 'fond vert avion HD - greenscreen plane 1080HD_(1080p).mp4', 'video/mp4', 2.52, 2641163, 'dcdc', 'C:/xampp/htdocs/data/95/fond vert avion HD - greenscreen plane 1080HD_(1080p).mp4'),
(95, 'Jurassic Park III Spinosaur green screen animation (Spino green screen dinosaurs 3D Studio max)_(720p).mp4', 'video/mp4', 5.36, 5617707, 'dcdc xdccx', 'C:/xampp/htdocs/data/95/Jurassic Park III Spinosaur green screen animation (Spino green screen dinosaurs 3D Studio max)_(720p).mp4'),
(95, 'Alia-Bhatt-Latest-Hd-Wallpapers.jpg', 'image/jpeg', 0.20, 207448, 'cdcdc', 'C:/xampp/htdocs/data/95/Alia-Bhatt-Latest-Hd-Wallpapers.jpg'),
(95, 'Halloween talking pumpkin green screen A_(1080p).mp4', 'video/mp4', 8.45, 8863214, 'xscdcdcd', 'C:/xampp/htdocs/data/95/Halloween talking pumpkin green screen A_(1080p).mp4'),
(95, 'Bihu assam Song.mp3', 'audio/mp3', 3.53, 3703068, 'zcdc ', 'C:/xampp/htdocs/data/95/Bihu assam Song.mp3'),
(95, 'Jurassic Park III Spinosaur green screen animation (Spino green screen dinosaurs 3D Studio max)_(720p).mp4', 'video/mp4', 5.36, 5617707, 'zccwscxaxaqsaqs', 'C:/xampp/htdocs/data/95/Jurassic Park III Spinosaur green screen animation (Spino green screen dinosaurs 3D Studio max)_(720p).mp4'),
(95, 'Sprdh_final_phase_presentation.pptx', 'application/vnd.open', 4.93, 5170509, 'c dxc dcxc x', 'C:/xampp/htdocs/data/95/Sprdh_final_phase_presentation.pptx'),
(95, 'Hancock Landing Effect Green Screen - free green screen_(1080p).mp4', 'video/mp4', 8.10, 8498614, 'paiiuscgg', 'C:/xampp/htdocs/data/95/Hancock Landing Effect Green Screen - free green screen_(1080p).mp4'),
(95, 'Green Screen Action Movies Monsters and Animals Attack - Footage PixelBoom_(480p).mp4', 'video/mp4', 10.93, 11462459, 'zsmcbdcb', 'C:/xampp/htdocs/data/95/Green Screen Action Movies Monsters and Animals Attack - Footage PixelBoom_(480p).mp4'),
(98, 'Wildlife.wmv', 'video/x-ms-wmv', 25.03, 26246026, 'addhc ', 'C:/xampp/htdocs/data/98/Wildlife.wmv'),
(98, 'Presentation1.pptx', 'application/vnd.open', 0.56, 584985, 'cfd', 'C:/xampp/htdocs/data/98/Presentation1.pptx'),
(98, 'Alia-Bhatt-Wallpaper-HD-1024x768 - Copy.jpg', 'image/jpeg', 0.15, 160625, 'cdcd', 'C:/xampp/htdocs/data/98/Alia-Bhatt-Wallpaper-HD-1024x768 - Copy.jpg'),
(98, 'dinosaur Green Screen .flv_(360p).mp4', 'video/mp4', 0.35, 371254, 'scdv', 'C:/xampp/htdocs/data/98/dinosaur Green Screen .flv_(360p).mp4'),
(98, 'Green Screen Action Movies Monsters and Animals Attack - Footage PixelBoom_(480p).mp4', 'video/mp4', 10.93, 11462459, 'sdfdf', 'C:/xampp/htdocs/data/98/Green Screen Action Movies Monsters and Animals Attack - Footage PixelBoom_(480p).mp4'),
(98, 'Final IAH report .docx', 'application/vnd.open', 4.78, 5015168, 'sff', 'C:/xampp/htdocs/data/98/Final IAH report .docx'),
(98, 'Hancock Landing Effect Green Screen - free green screen_(1080p).mp4', 'video/mp4', 8.10, 8498614, 'fffffffffff', 'C:/xampp/htdocs/data/98/Hancock Landing Effect Green Screen - free green screen_(1080p).mp4'),
(98, 'Blood Splatter on the Wall - Green Screen Animation - YouTube (720p).mp4', 'video/mp4', 1.59, 1669634, 'sdff', 'C:/xampp/htdocs/data/98/Blood Splatter on the Wall - Green Screen Animation - YouTube (720p).mp4'),
(98, 'Sprdh_final_phase_presentation.pptx', 'application/vnd.open', 4.93, 5170509, 'sfggg', 'C:/xampp/htdocs/data/98/Sprdh_final_phase_presentation.pptx'),
(98, 'Halloween talking pumpkin green screen A_(1080p).mp4', 'video/mp4', 8.45, 8863214, 'adsdf', 'C:/xampp/htdocs/data/98/Halloween talking pumpkin green screen A_(1080p).mp4'),
(98, 'alia-bhatt-hd-wallpapers-in-red-costume.jpg', 'image/jpeg', 0.03, 31917, 'adfg', 'C:/xampp/htdocs/data/98/alia-bhatt-hd-wallpapers-in-red-costume.jpg'),
(102, 'sem1.pdf', 'application/pdf', 2.06, 2162635, 'adfghgf', 'C:/xampp/htdocs/data/102/sem1.pdf'),
(102, 'Wildlife.wmv', 'video/x-ms-wmv', 25.03, 26246026, 'sdfg', 'C:/xampp/htdocs/data/102/Wildlife.wmv'),
(102, 'JURASSIC PARK T Rex roars and bites animation Royalty Free Green Screen Footage CG Dinosaur 3DS MAX_(720p).mp4', 'video/mp4', 7.77, 8142290, 'cv vdshc', 'C:/xampp/htdocs/data/102/JURASSIC PARK T Rex roars and bites animation Royalty Free Green Screen Footage CG Dinosaur 3DS MAX_(720p).mp4'),
(102, 'ddb3print.odt', 'application/vnd.oasi', 0.19, 194366, ' cdv c', 'C:/xampp/htdocs/data/102/ddb3print.odt'),
(102, 'Halloween talking pumpkin green screen A_(1080p).mp4', 'video/mp4', 8.45, 8863214, 'sc cd c', 'C:/xampp/htdocs/data/102/Halloween talking pumpkin green screen A_(1080p).mp4'),
(102, 'Blood Splatter on the Wall - Green Screen Animation - YouTube (720p).mp4', 'video/mp4', 1.59, 1669634, 'cd  f', 'C:/xampp/htdocs/data/102/Blood Splatter on the Wall - Green Screen Animation - YouTube (720p).mp4'),
(102, 'Sprdh_final_phase_presentation.pptx', 'application/vnd.open', 4.93, 5170509, 'asfdf', 'C:/xampp/htdocs/data/102/Sprdh_final_phase_presentation.pptx'),
(102, 'Green Screen Action Movies Monsters and Animals Attack - Footage PixelBoom_(480p).mp4', 'video/mp4', 10.93, 11462459, 'asdfghj', 'C:/xampp/htdocs/data/102/Green Screen Action Movies Monsters and Animals Attack - Footage PixelBoom_(480p).mp4'),
(102, 'Hancock Landing Effect Green Screen - free green screen_(1080p).mp4', 'video/mp4', 8.10, 8498614, 'asddfgtres', 'C:/xampp/htdocs/data/102/Hancock Landing Effect Green Screen - free green screen_(1080p).mp4'),
(103, 'Alia-Bhatt-Latest-Hd-Wallpapers.jpg', 'image/jpeg', 0.20, 207448, 'd fbv d', 'C:/xampp/htdocs/data/103/Alia-Bhatt-Latest-Hd-Wallpapers.jpg'),
(103, 'alia-bhatt-hd-wallpapers-in-red-costume.jpg', 'image/jpeg', 0.03, 31917, 'd f v', 'C:/xampp/htdocs/data/103/alia-bhatt-hd-wallpapers-in-red-costume.jpg'),
(103, 'sem1.pdf', 'application/pdf', 2.06, 2162635, 'dc 3.', 'C:/xampp/htdocs/data/103/sem1.pdf'),
(103, 'Green Screen Action Movies Monsters and Animals Attack - Footage PixelBoom_(480p).mp4', 'video/mp4', 10.93, 11462459, 'dsc db ', 'C:/xampp/htdocs/data/103/Green Screen Action Movies Monsters and Animals Attack - Footage PixelBoom_(480p).mp4'),
(103, 'Jurassic Park III Spinosaur green screen animation (Spino green screen dinosaurs 3D Studio max)_(720p).mp4', 'video/mp4', 5.36, 5617707, 'dc s.', 'C:/xampp/htdocs/data/103/Jurassic Park III Spinosaur green screen animation (Spino green screen dinosaurs 3D Studio max)_(720p).mp4'),
(103, 'Wildlife.wmv', 'video/x-ms-wmv', 25.03, 26246026, 's dcs c sd.', 'C:/xampp/htdocs/data/103/Wildlife.wmv'),
(103, 'Halloween talking pumpkin green screen A_(1080p).mp4', 'video/mp4', 8.45, 8863214, 'edfesfw', 'C:/xampp/htdocs/data/103/Halloween talking pumpkin green screen A_(1080p).mp4'),
(106, 'sem1.pdf', 'application/pdf', 2.06, 2162635, 'sdas.', 'C:/xampp/htdocs/data/106/sem1.pdf'),
(106, 'Blood Splatter on the Wall - Green Screen Animation - YouTube (720p).mp4', 'video/mp4', 1.59, 1669634, 'csac', 'C:/xampp/htdocs/data/106/Blood Splatter on the Wall - Green Screen Animation - YouTube (720p).mp4'),
(106, 'Green Screen Action Movies Monsters and Animals Attack - Footage PixelBoom_(480p).mp4', 'video/mp4', 10.93, 11462459, 'ascsa.', 'C:/xampp/htdocs/data/106/Green Screen Action Movies Monsters and Animals Attack - Footage PixelBoom_(480p).mp4'),
(106, 'Wildlife.wmv', 'video/x-ms-wmv', 25.03, 26246026, 'as', 'C:/xampp/htdocs/data/106/Wildlife.wmv'),
(106, 'Alia-Bhatt-very-cute-in-pink-dress - Copy.jpg', 'image/jpeg', 0.20, 206581, 'ascad.', 'C:/xampp/htdocs/data/106/Alia-Bhatt-very-cute-in-pink-dress - Copy.jpg'),
(106, 'Halloween talking pumpkin green screen A_(1080p).mp4', 'video/mp4', 8.45, 8863214, 'ssaxsx', 'C:/xampp/htdocs/data/106/Halloween talking pumpkin green screen A_(1080p).mp4'),
(106, 'alia-bhatt-hd-wallpapers-in-red-costume.jpg', 'image/jpeg', 0.03, 31917, 'sdc', 'C:/xampp/htdocs/data/106/alia-bhatt-hd-wallpapers-in-red-costume.jpg'),
(106, 'Halloween talking pumpkin green screen A_(1080p).mp4', 'video/mp4', 8.45, 8863214, 'axad', 'C:/xampp/htdocs/data/106/Halloween talking pumpkin green screen A_(1080p).mp4');

--
-- Triggers `t4`
--
DELIMITER $$
CREATE TRIGGER `t4_data_delete_size` BEFORE DELETE ON `t4` FOR EACH ROW BEGIN
    DECLARE
        idd INT ;
        DECLARE
        size DOUBLE ;
    SET
        idd = OLD.id,
        size = OLD.size ;
    UPDATE
        t1
    SET
        data_occupied = data_occupied - size,
        account_updated = now()
        WHERE id=idd
        ;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `t4_data_update_size` BEFORE INSERT ON `t4` FOR EACH ROW BEGIN
    DECLARE
        idd INT ;
        DECLARE
        size DOUBLE ;
    SET
        idd = NEW.id,
        size = NEW.size ;
    UPDATE
        t1
    SET
        data_occupied = data_occupied + size,
        account_updated = now()
        WHERE id=idd
        ;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `age` double(5,2) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`id`, `username`, `firstname`, `lastname`, `password`, `age`, `email`) VALUES
(1, 'saili', 'saili', 'kadam', 'sailikadam', 20.00, '2015saili.kadam@ves.ac.in'),
(2, 'tushi', 'tushar', 'jumani', 'tusharjumani', 20.00, '2015tushar.jumani@ves.ac.in'),
(3, 'rd', 'rahul', 'dhameja', 'rahulddhameja', 20.00, '2015rahul.dhameja@ves.ac.in'),
(4, 'ajinkya', 'ajinkya', 'pawale', 'ajinkya pawale', 20.00, '2015ajinkya.pawale@ves.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `t_duplicate`
--

CREATE TABLE `t_duplicate` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `age` double(5,2) NOT NULL,
  `email` text NOT NULL,
  `recovery_email` text NOT NULL,
  `account_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_duplicate`
--

INSERT INTO `t_duplicate` (`id`, `username`, `firstname`, `lastname`, `password`, `age`, `email`, `recovery_email`, `account_created`) VALUES
(78, 'rad97', 'Rahul', 'Dhameja', '160cbe7fe1d25f03c8c899084ab8d92a', 20.00, 'radhameeja@gmail.com', '2015rahul.dhameja@ves.ac.in', '2018-01-25 01:51:02'),
(79, 'ajupawale', 'Ajinkya', 'Pawale', '25d55ad283aa400af464c76d713c07ad', 20.00, '2015ajinkya.pawale@ves.ac.in', '2015vivek.sohal@ves.ac.in', '2018-01-25 01:51:43'),
(80, 'dungon_master', 'Vivek', 'Sohal', '25d55ad283aa400af464c76d713c07ad', 20.00, 'ajupawale@gmail.com', '2015roshan.talreja@ves.ac.in', '2018-01-25 01:53:07'),
(81, 'rahul', 'rahul', 'dhameja', '25d55ad283aa400af464c76d713c07ad', 20.00, '2015rahul.dhameja@ves.ac.in', 'radhameja@gmaill.com', '2018-01-25 01:54:03'),
(82, 'agrarian_cat', 'Rajesh', 'Narwal', '25d55ad283aa400af464c76d713c07ad', 25.00, 'pawalecristiano@gmail.com', '2015nikhil.dalvi@ves.ac.in', '2018-01-25 01:54:47'),
(83, 'rahuld', 'Rahul', 'Dhameja', '25d55ad283aa400af464c76d713c07ad', 20.00, 'rahuldhameja1797@gmail.com', 'radhameja@gmaill.com', '2018-01-25 01:54:57'),
(84, 'akash', 'Akash', 'Kalwani', '6eea9b7ef19179a06954edd0f6c05ceb', 20.00, '2018visualarts@gmail.com', '2015ajinkya.pawale@ves.ac.in', '2018-01-25 01:56:37'),
(85, 'rd', 'Rahul', 'Dhameja', '25d55ad283aa400af464c76d713c07ad', 20.00, '2015rahul.dhameja@ves.ac.in', 'radhameja@gmaill.com', '2018-01-25 01:57:36'),
(86, 'rad', 'Rahul', 'Dhameja', '25d55ad283aa400af464c76d713c07ad', 20.00, 'radhameja@gmail.com', 'rahuldhameja1797@gmail.com', '2018-01-25 01:58:50'),
(87, 'rahul_master', 'Rahul', 'Tulsian', '6eea9b7ef19179a06954edd0f6c05ceb', 22.00, '2015ajinkya.pawale@ves.ac.in', '2015harsh.mulchandani@ves.ac.in', '2018-01-25 01:59:21'),
(88, 'data_pawale', 'Rahul', 'Dhameja', '25d55ad283aa400af464c76d713c07ad', 20.00, 'radhameja@gmail.com', '2015ajinkya.pawale@ves.ac.in', '2018-01-25 02:00:29'),
(90, 'om', 'Om', 'Raheja', '6eea9b7ef19179a06954edd0f6c05ceb', 25.00, 'pawalecristiano@gmail.com', '2015vivek.sohal@ves.ac.in', '2018-01-25 02:02:32'),
(91, 'nikhil', 'Nikhil', 'Dalvi', '6eea9b7ef19179a06954edd0f6c05ceb', 17.00, '2018visualarts@gmail.com', '2015ajinkya.pawale@ves.ac.in', '2018-01-25 02:05:12'),
(92, 'tushar', 'Tushar', 'Jumani', '25d55ad283aa400af464c76d713c07ad', 23.00, '2015tushar.jumani@ves.ac.in', '2015roshan.talreja@ves.ac.in', '2018-01-25 02:07:32'),
(93, 'yashika', 'Yashika', 'Bhatia', '25d55ad283aa400af464c76d713c07ad', 20.00, 'tushar.jumani@gmail.com', '2015vivek.sohal@ves.ac.in', '2018-01-25 02:09:00'),
(94, 'uday', 'Uday', 'Jahadav', '6eea9b7ef19179a06954edd0f6c05ceb', 23.00, '2015sayali.jadhav@ves.ac.in', '2015ajinkya.pawale@ves.ac.in', '2018-01-25 02:10:27'),
(95, 'ramesh', 'Ramesh', 'Tolani', '25d55ad283aa400af464c76d713c07ad', 34.00, '2015saili.kadam@ves.ac.in', '2015ajinkya.pawale@ves.ac.in', '2018-01-25 02:13:08'),
(96, 'milbir', 'Milbir', 'Khan', '6eea9b7ef19179a06954edd0f6c05ceb', 20.00, 'tushar.jumani@gmail.com', '2015harsh.mulchandani@ves.ac.in', '2018-01-25 02:14:53'),
(97, 'mohit', 'Mohit', 'Bhatia', '6eea9b7ef19179a06954edd0f6c05ceb', 38.00, '2015ajinkya.pawale@ves.ac.in', 'ajupawale@gmail.com', '2018-01-25 02:17:01'),
(98, 'harsh', 'Harsh', 'Bhatia', '25d55ad283aa400af464c76d713c07ad', 22.00, '2015rahul.dhameja@ves.ac.in', '2015saili.kadam@ves.ac.in', '2018-01-25 02:19:21'),
(99, 'subh', 'Shubhraj', 'Shelar', '6eea9b7ef19179a06954edd0f6c05ceb', 21.00, 'pawalecristiano@gmail.com', 'ajupawale@gmail.com', '2018-01-25 02:20:17'),
(100, 'kamal', 'Kamal', 'Teckchandani', '25d55ad283aa400af464c76d713c07ad', 20.00, '2018visualarts@gmail.com', '2015ajinkya.pawale@ves.ac.in', '2018-01-25 02:22:31'),
(101, 'varkha', 'Varkha', 'Bhatia', '6eea9b7ef19179a06954edd0f6c05ceb', 30.00, '2015saili.kadam@ves.ac.in', '2015harsh.mulchandani@ves.ac.in', '2018-01-25 02:24:22'),
(102, 'sonia', 'sonia ', 'dhameja', '25d55ad283aa400af464c76d713c07ad', 21.00, 'radhameja@gmail.com', 'rahuldhameja1797@gmail.com', '2018-01-25 02:24:52'),
(103, 'soniad', 'sonia ', 'Dhameja', '25d55ad283aa400af464c76d713c07ad', 22.00, 'rahuldhameja1797@gmail.com', '2015rahul.dhameja@ves.ac.in', '2018-01-25 02:25:49'),
(104, 'bhavna', 'Bhavna', 'Keswani', '6eea9b7ef19179a06954edd0f6c05ceb', 23.00, 'saili.jadhav@gmail.com', '2015harsh.mulchandani@ves.ac.in', '2018-01-25 02:25:59'),
(105, 'karan', 'karan', 'makhija', '25d55ad283aa400af464c76d713c07ad', 20.00, 'radhameja@gmail.com', 'rahuldhameja1797@gmail.com', '2018-01-25 02:26:45'),
(106, 'ajay', 'ajay', 'kangia', '25d55ad283aa400af464c76d713c07ad', 20.00, '2015rahul.dhameja@ves.ac.in', 'radhameja@gmaill.com', '2018-01-25 02:27:25'),
(107, 'sahil', 'sahil', 'kukreja', '25d55ad283aa400af464c76d713c07ad', 20.00, 'rahuldhameja1797@gmail.com', 'radhameja@gmaill.com', '2018-01-25 02:28:02'),
(108, 'esha', 'Esha', 'Dhameja', '6eea9b7ef19179a06954edd0f6c05ceb', 23.00, '2015saili.kadam@ves.ac.in', 'saili.kadam@gmail.com', '2018-01-25 02:28:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t1`
--
ALTER TABLE `t1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `t2`
--
ALTER TABLE `t2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t3`
--
ALTER TABLE `t3`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `t4`
--
ALTER TABLE `t4`
  ADD KEY `t4_foreign_key_constraint` (`id`);

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_duplicate`
--
ALTER TABLE `t_duplicate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t1`
--
ALTER TABLE `t1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_duplicate`
--
ALTER TABLE `t_duplicate`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `t4`
--
ALTER TABLE `t4`
  ADD CONSTRAINT `t4_foreign_key_constraint` FOREIGN KEY (`id`) REFERENCES `t1` (`id`);

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `period_updation_everyhour` ON SCHEDULE EVERY 1 HOUR STARTS '2017-12-20 19:38:10' ENDS '2018-05-19 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO update t1 
set period = period + 3600$$

CREATE DEFINER=`root`@`localhost` EVENT `send_email_time_updation` ON SCHEDULE EVERY 2 MINUTE STARTS '2018-01-05 00:00:00' ENDS '2018-06-07 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO update t2 
set time_to_send_email = time_to_send_email + 120$$

CREATE DEFINER=`root`@`localhost` EVENT `period_updation_everyday` ON SCHEDULE EVERY 24 HOUR STARTS '2017-12-20 19:34:19' ENDS '2018-05-19 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO update t1 
set period = period + 86400$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
