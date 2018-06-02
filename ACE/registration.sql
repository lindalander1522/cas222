-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2018 at 06:17 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ace123`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `category` enum('athlete','volunteer','','') NOT NULL,
  `saturday` enum('longcoursetriathlon','olympictriathlon','10k','halfmarathon') NOT NULL,
  `sunday` enum('sprinttriathlon','tryatri','splashndash','') NOT NULL,
  `gender` enum('female','male','non-binary','') NOT NULL,
  `size` text NOT NULL,
  `ename` text NOT NULL,
  `ephone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `phone`, `category`, `saturday`, `sunday`, `gender`, `size`, `ename`, `ephone`) VALUES
(1, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', 'female', '', '', ''),
(2, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', 'female', '', '', ''),
(3, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', 'female', '', 'Sarah Roller', ''),
(4, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', 'female', '', 'Sarah Roller', ''),
(5, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', 'female', '', '', ''),
(6, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', 'female', '', '', ''),
(7, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', 'female', '', '', ''),
(8, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', 'female', '', '', ''),
(9, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', 'female', '', '', ''),
(10, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', 'female', '', '', ''),
(11, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', '', '', ''),
(12, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', '', '', ''),
(13, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', '', '', ''),
(14, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', '', '', ''),
(15, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', '', '', ''),
(16, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', '', '', ''),
(17, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(18, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(19, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(20, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(21, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(22, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(23, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(24, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(25, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(26, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(27, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(28, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(29, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(30, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(31, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(32, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(33, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(34, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(35, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(36, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(37, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(38, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(39, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(40, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', ''),
(41, 'Linda', 'linda.lander15@pcc.edu', '5038886248', 'volunteer', '10k', 'splashndash', '', 'female', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
