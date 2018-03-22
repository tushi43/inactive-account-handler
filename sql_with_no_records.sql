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

---- --------------------------------------------------------

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
