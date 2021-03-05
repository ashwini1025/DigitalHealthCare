-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2020 at 03:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medi`
--

-- --------------------------------------------------------

--
-- Table structure for table `docdb`
--

CREATE TABLE `docdb` (
  `name` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docdb`
--

INSERT INTO `docdb` (`name`, `pass`) VALUES
('admin', '123'),
('doc', '123');

-- --------------------------------------------------------

--
-- Table structure for table `docs`
--

CREATE TABLE `docs` (
  `Name` varchar(40) NOT NULL,
  `education` varchar(40) NOT NULL,
  `specialization` varchar(40) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docs`
--

INSERT INTO `docs` (`Name`, `education`, `specialization`, `age`) VALUES
('Dr M. Raut', 'M.B.B.S', 'Cardiologists', 56),
('Dr S. Patel', 'M.B.B.S', 'Dermatologists', 40),
('Dr. J Joshi', 'M.B.B.S', 'Neurologist', 49),
('Dr. Mehta', 'M.D', 'Infectious Disease Physician', 78);

-- --------------------------------------------------------

--
-- Table structure for table `logindb`
--

CREATE TABLE `logindb` (
  `name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logindb`
--

INSERT INTO `logindb` (`name`, `pass`) VALUES
('Nivi', '123'),
('elizabeth', '123'),
('Sehita', '123'),
('neil', '123'),
('', ''),
('Sonal', '123');

-- --------------------------------------------------------

--
-- Table structure for table `previous`
--

CREATE TABLE `previous` (
  `Patients_name` text NOT NULL,
  `age` int(11) NOT NULL,
  `problem` text NOT NULL,
  `medicine` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `previous`
--

INSERT INTO `previous` (`Patients_name`, `age`, `problem`, `medicine`, `date`) VALUES
('Nivi Shah', 43, 'Fever, Vommit, Runny nose', 'Tylenol', '2020-02-07'),
('Neil Mehta', 45, 'Sneezing, Coughing, Fever', 'Alprazolam', '2020-02-14'),
('Ashwini Upasani', 23, 'Fever', 'Crocin', '2020-02-20'),
('Snehita', 78, 'High Blood Pressure', 'Amoxicillin , Atorvastatin', '2020-02-27'),
('xxxfx', 99, 'gjhjghjfghfytctf', 'fhfhghgxxyht', '2020-03-30'),
('fdgfdgd', 88, 'hgfhgdgzsgsgsg', 'dgfddfgdgdgdg', '2020-03-31'),
('Ashwini', 23, 'stomach ache', '', '2020-04-23'),
('Sheetal', 56, 'Sneezing, Fever , Head-ache', '', '2020-05-13'),
('Punish', 67, 'Eye soreness from 2 days', '', '2020-05-21'),
('sonal', 56, 'Tooth ache', '', '2020-04-30'),
('jkhhjk', 78, 'vkcdvydghbidcuivivui', '', '2020-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `how` text NOT NULL,
  `surgeries` text NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `add` varchar(20) NOT NULL,
  `height` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `all` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`name`, `gender`, `phone_no`, `weight`, `how`, `surgeries`, `id`, `email`, `add`, `height`, `status`, `all`) VALUES
('elizabeth', 'female', 876767, 56, 'internet ', 'eye operation', 20, 'eli@gmail.com', 'riverside view', 5, 'under medication', 'wine, grape, sugar'),
('Nivi', 'female', 345876, 69, 'Advertisement', 'Pregnancy', 121, 'nivi@gmail.com', 'Southkeys, Ottawa', 5, 'Married', 'Grass, Peanuts, ice-'),
('Sehita', 'female', 878788, 55, 'Online consultations', 'Eye laser treatment', 565, 'seh@yahoo.com', 'Ganeshnagar, Surat', 6, 'Single', 'Potato,onino,garlic'),
('neil', 'male', 887777, 72, 'Seminars', 'Heart surgery', 767, 'neil@yahoo.com', 'Machintosh, London', 6, 'Married', 'sweet'),
('Sonal', 'Female', 3439871, 56, 'Online Consultant', 'Knee Replacement in 2018', 1562, 'son@gmail.com', 'Lees Avenues', 5, 'Married', 'Jam, Mango, Sea salt');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
