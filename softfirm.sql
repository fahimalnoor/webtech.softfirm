-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2019 at 01:59 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `softfirm`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `name` varchar(50) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `utype` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`name`, `uname`, `dob`, `gender`, `utype`, `phone`, `email`, `pass`) VALUES
('Admin One', 'adm', '2019-12-24', 'male', 'admin', '01234567890', 'adm@mail.com', '8bc1dd544c2b81e22a8069853c669d8e'),
('One Manager', 'man', '2019-12-18', 'female', 'manager', '01683766885', 'man@mail.com', '24e0143b1e58e2ae1dada77f474e00e8'),
('One Developer', 'dev', '2019-12-25', 'male', 'developer', '01234567891', 'dev@mail.com', '1c082f75be8b52471e19bc82800a2f47'),
('One Client', 'cli', '2019-12-25', 'male', 'client', '01234567891', 'cli@mail.com', 'f81a5649339e4571be314f0a20a65bdd'),
('Two Client', 'cli2', '2019-12-27', 'female', 'client', '01234567890', 'cli2@mail.com', 'e9624f3b0f915c7cb27bbd52f3bab4fa'),
('Two Admin', 'adm2', '2019-12-01', 'male', 'admin', '01683766885', 'adm2@mail.com', 'e124307027723ab68c05eed28a8fedc1'),
('admin three', 'adm3', '2019-12-13', 'male', 'admin', '01232131231', 'adm@mail.com', '8bc1dd544c2b81e22a8069853c669d8e'),
('Manager Two', 'man2', '2019-12-13', 'male', 'manager', '01234567812', 'man2@mail.com', '56d49276a52e0df5009a6c60b491bf91'),
('fahim noor', 'fnoor', '2019-12-12', 'male', 'admin', '01234567895', 'fhg@n.co', '6581d9d516075935aeec3b526d987d39'),
('Four Admin', 'adm4', '2019-12-05', 'male', 'admin', '01232131231', 'adm4@mail.com', '4a783543da1c852f861c395773a71e93');

-- --------------------------------------------------------

--
-- Table structure for table `ports`
--

CREATE TABLE `ports` (
  `uname` varchar(20) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ports`
--

INSERT INTO `ports` (`uname`, `url`) VALUES
('man', 'uploads/20181007_153347.jpeg'),
('man', 'uploads/architecture-art-beautiful-718646(Cropped1).jpg'),
('man', 'uploads/Screenshot (29).png'),
('man', 'uploads/ass3abme.png'),
('man', 'uploads/class1.png'),
('man2', 'uploads/fahim_front.png'),
('man2', 'uploads/ass_Movdev1.png'),
('man2', 'uploads/smartmockups_jr97ugyf.png'),
('man2', 'uploads/ass_Movdev1.png'),
('man2', 'uploads/ass_Movdev.png'),
('man', 'uploads/architecture-art-beautiful-718646(Cropped1).jpg'),
('man', 'uploads/smartmockups_jrkcfzlg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pros`
--

CREATE TABLE `pros` (
  `proid` varchar(30) NOT NULL,
  `clientid` varchar(30) NOT NULL,
  `prostatus` varchar(20) NOT NULL,
  `comppercent` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pros`
--

INSERT INTO `pros` (`proid`, `clientid`, `prostatus`, `comppercent`) VALUES
('web-1', 'cli', '', ''),
('web-2', 'cli', '', ''),
('soft-1', 'cli', '', ''),
('soft-2', 'cli', '', ''),
('soft-3', 'cli', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
