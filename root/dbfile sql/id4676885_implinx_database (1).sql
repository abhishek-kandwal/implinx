-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2018 at 07:59 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id4676885_implinx_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `blockeduser`
--

CREATE TABLE `blockeduser` (
  `id` int(11) NOT NULL,
  `blocker` varchar(16) NOT NULL,
  `blockee` varchar(16) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `connection`
--

CREATE TABLE `connection` (
  `id` int(11) NOT NULL,
  `user1` int(16) NOT NULL,
  `user2` int(16) NOT NULL,
  `accepted` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `email` varchar(111) NOT NULL,
  `user` varchar(16) NOT NULL,
  `link_gallary` varchar(16) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `u_id`, `email`, `user`, `link_gallary`, `filename`, `description`) VALUES
(0, 1, 'rahul@gmail.com', 'rahul', 'sdjfl;sjf', 'shfsjflj', 'fljklsd;jfla;dsg'),
(0, 1, 'rahul@gmail.com', 'rahul', 'https://goo.gl/o', '4k ultra hd hollywood movies', 'Dual audios'),
(0, 3, 'abhishekkandwal445@gmail.com', 'Abhishek', 'https://lnkd.in/', 'Tell me about yourself', 'Interview '),
(0, 3, 'abhishekkandwal445@gmail.com', 'Abhishek', 'https://lnkd.in/', 'Tell me about yourself', 'Interview question'),
(0, 1, 'rahul@gmail.com', 'rahul', 'wjsldfo/cpm', 'wizard', 'jflsdjflsf'),
(0, 1, 'rahul@gmail.com', 'rahul', 'ghjkl', 'hjkl', 'ghjkl'),
(0, 1, 'rahul@gmail.com', 'rahul', 'We.', 'Helo', 'Hhhhhh'),
(0, 4, 'Mayank@gmail.com', 'Mayank', '', '', ''),
(0, 4, 'Mayank@gmail.com', 'Mayank', '', '', ''),
(0, 4, 'Mayank@gmail.com', 'Mayank', '', '', ''),
(0, 4, 'Mayank@gmail.com', 'Mayank', '', '', ''),
(0, 4, 'Mayank@gmail.com', 'Mayank', '', '', ''),
(0, 4, 'Mayank@gmail.com', 'Mayank', '', '', ''),
(0, 4, 'Mayank@gmail.com', 'Mayank', '', '', ''),
(0, 4, 'Mayank@gmail.com', 'Mayank', '', '', ''),
(0, 4, 'Mayank@gmail.com', 'Mayank', '', '', ''),
(0, 5, 'forestfighter2710@gmail.com', 'ashish', 'dfghjkl', 'sdfghj', 'ghjkl'),
(0, 7, 'Rishab@gmail.com', 'Rishab', 'fb.com', 'facebook', 'social'),
(0, 7, 'Rishab@gmail.com', 'Rishab', 'dfghj', 'srtyu', 'ghjkl;'),
(0, 7, 'Rishab@gmail.com', 'Rishab', 'fsd', 'ds', 'fs'),
(0, 7, 'Rishab@gmail.com', 'Rishab', 's', 'ayaz', 'scs'),
(0, 7, 'Rishab@gmail.com', 'Rishab', 'XYZ', 'Sarthak', 'ABC'),
(0, 7, 'Rishab@gmail.com', 'Rishab', 'abc', 'Sarthk', 'xyz!'),
(0, 7, 'Rishab@gmail.com', 'Rishab', 'www.deadpool.com', 'Test', 'movie'),
(0, 7, 'Rishab@gmail.com', 'Rishab', 'www.', 'Sarthak', 'qwertyuiop'),
(0, 7, 'Rishab@gmail.com', 'Rishab', 'www.deadpool.com', 'Test', 'Aoo');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `initiator` varchar(16) NOT NULL,
  `app` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `did_read` enum('0','1') NOT NULL DEFAULT '0',
  `date_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requestlink`
--

CREATE TABLE `requestlink` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `email` varchar(111) NOT NULL,
  `user` varchar(16) NOT NULL,
  `req_link` varchar(16) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestlink`
--

INSERT INTO `requestlink` (`id`, `u_id`, `email`, `user`, `req_link`, `filename`, `description`) VALUES
(46, 7, 'Rishab@gmail.com', 'Rishab', '', 'aasdd', ''),
(45, 7, 'Rishab@gmail.com', 'Rishab', '', 'aasdd', ''),
(44, 7, 'Rishab@gmail.com', 'Rishab', '', 'aasdd', ''),
(43, 7, 'Rishab@gmail.com', 'Rishab', '', 'aasdd', ''),
(42, 7, 'Rishab@gmail.com', 'Rishab', '', 'aasdd', ''),
(41, 7, 'Rishab@gmail.com', 'Rishab', '', 'ayaz', 'test'),
(40, 7, 'Rishab@gmail.com', 'Rishab', '', 'ayaz', 'test'),
(39, 7, 'Rishab@gmail.com', 'Rishab', '', 'deadpool 2', 'cccccc');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `osid` int(11) NOT NULL,
  `account` varchar(16) NOT NULL,
  `author` varchar(16) NOT NULL,
  `type` enum('a','b','c','') NOT NULL,
  `data_text` varchar(255) NOT NULL,
  `post_data` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(111) NOT NULL,
  `username` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `location`) VALUES
(1, 'rahul', 'rahul@gmail.com', '$2y$10$KSk6rmix.kgNaN4dVHiVOuHyzzXBEQloNUTGfExa87QARAMlFJxmi', 'srinagar'),
(2, 'Anupam', 'anupamk537@gmail.com', '$2y$10$jhLtDF8wz/AJLrohqYi/n.Yq7l1OYs8sRL1k8xXUKYKiLwA/tsC7y', 'Bihar'),
(3, 'Abhishek', 'abhishekkandwal445@gmail.com', '$2y$10$gh/lrJBw1E3.out3YioPUOVYRUE5W1ZIETETRAF9xdu92YBIav1n6', 'Dehradun'),
(4, 'Mayank', 'Mayank@gmail.com', '$2y$10$HbHFPzWIVrFw.fMCMLxqdOyL/taAPQlVZLBEQ7vcBBCKQpXgiW206', 'Dehradun'),
(5, 'ashish', 'forestfighter2710@gmail.com', '$2y$10$Dl/qssPBEpPHS5vXlPbtM.EdcNQ2VT/ahUt0vcfNFB9uDyun5d6tC', 'Dehradun'),
(6, 'rahul', 'abhishekh03@gmail.com', '$2y$10$wJ8tEUnKJNVoeok5hdGH7eTk4BGVYovQJzgSmvv1q4x9szNm1Czx2', 'Dehradun'),
(7, 'Rishab', 'Rishab@gmail.com', '$2y$10$DouCdANATbf3qJtD3eoPze0qmar32.Skcb7Uo.485c.mP1muhJaiq', 'Dehradun');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `requestlink`
--
ALTER TABLE `requestlink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requestlink`
--
ALTER TABLE `requestlink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
