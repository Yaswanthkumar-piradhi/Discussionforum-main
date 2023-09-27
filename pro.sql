-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2022 at 06:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `ans`
--

CREATE TABLE `ans` (
  `aid` varchar(20) NOT NULL,
  `qid` varchar(20) NOT NULL,
  `id` varchar(20) NOT NULL,
  `ans` varchar(2000) NOT NULL,
  `rating` varchar(20) NOT NULL,
  `rates` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ans`
--

INSERT INTO `ans` (`aid`, `qid`, `id`, `ans`, `rating`, `rates`) VALUES
('1', '4', '5g3', 'qwertyuiop', '1.5', '2'),
('2', '4', '5g3', 'asdfghjkl', '4', '2'),
('3', '4', '5g3', 'zxcvbnm', '4.5', '2'),
('4', '4', '5g3', 'qweqweqwe', '3', '2'),
('5', '4', '5g3', 'zxczxc', '4.5', '2'),
('6', '5', '5g3', 'asdfghjkl', '4', '1'),
('7', '4', '5g3', 'dwadfsgfdhgjfyktgergse,aegh', '0', '0'),
('8', '4', '5g3', 'sdfg:asdfg', '0', '0'),
('9', '4', '5g3', 'wefwef\'', '0', '0'),
('10', '1', '5d5', 'Dhmshn', '0', '0'),
('11', '6', '5d5', 'FJ', '4', '1'),
('12', '3', '5g3', '2tg36', '4', '1'),
('13', '3', '5g3', 'qwertyuiop', '3', '1'),
('14', '6', '5g3', 'Syjstsgnzgjag', '5', '1'),
('15', '4', '5g3', 'qwPfkEOGkW?OG\r\n', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

CREATE TABLE `ques` (
  `qid` varchar(20) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Question` varchar(1000) NOT NULL,
  `id` varchar(20) NOT NULL,
  `top` varchar(2000) NOT NULL,
  `topid` varchar(20) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`qid`, `Subject`, `Question`, `id`, `top`, `topid`, `date`) VALUES
('1', 'PPS', 'What a.fsdjfl??', '5g3', 'dwadfsgfdhgjfyktgergse,aegh', '', '2022-06-26 12:52:07'),
('2', 'wt', 'asdfgh?', '5g3', '', '', '2022-06-26 12:55:13'),
('3', 'SPA', 'sdfghjkl?', '5g3', '2tg36', '', '2022-06-26 13:11:20'),
('4', 'Networks', 'What is routing??', '5d5', 'zxcvbnm', '', '2022-06-26 13:14:31'),
('5', 'mpi', 'what is a procwessor?', '5g3', 'asdfghjkl', '', '2022-06-27 22:25:48'),
('6', 'Wt', 'Qwerty', '5d5', 'Syjstsgnzgjag', '', '2022-06-30 21:51:47'),
('7', 'Dld', 'Wjfjc jn', '5g3', '', '', '2022-07-03 18:23:38');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `qid` varchar(20) NOT NULL,
  `aid` varchar(20) NOT NULL,
  `id` varchar(20) NOT NULL,
  `rating` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`qid`, `aid`, `id`, `rating`) VALUES
('', '3', '5g3', '4'),
('', '2', '5g3', '3'),
('', '3', '5d5', '5'),
('', '1', '5d5', '2'),
('', '4', '5g3', '5'),
('', '1', '5g3', '1'),
('', '5', '5g3', '5'),
('', '4', '5d5', '1'),
('', '5', '5d5', '4'),
('', '2', '5d5', '5'),
('', '6', '5g3', '4'),
('', '13', '5g3', '3'),
('', '12', '5g3', '4'),
('', '11', '5g3', '4'),
('', '14', '5g3', '5');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mac` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone`, `email`, `password`, `mac`) VALUES
('5g3', 'Ratan Kumar', '12345678', 'rattankumar2511@gmail.com', '1234', '0'),
('5d5', 'raju', '123', 'dad', '123', '0'),
('5e0', 'Kranthi', '123123', 'kranthi@123.com', '123', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
