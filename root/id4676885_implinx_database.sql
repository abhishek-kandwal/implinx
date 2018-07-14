-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2018 at 04:58 AM
-- Server version: 5.7.11
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 0, '', '', 'sdfghjkl', 'sdfghj', 'dafsgdhfjk'),
(2, 0, '', 'rahul', 'www.implinx.com', 'god', 'action game'),
(3, 0, '', 'rahul', 'ssdkfjlsjf', 'ambani', 'jlsdfjlfjs'),
(4, 0, '', 'rahul', '', '', ''),
(5, 0, '', 'rahul', '', '', ''),
(6, 4, 'rahul@gmail.com', 'rahul', 'www.games.com', 'games', 'dslfjlsjfklfs'),
(7, 4, 'rahul@gmail.com', 'rahul', 'sfgfhyj', 'sdfghj', 'asfgdfhtyu');

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
  `username` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `location`) VALUES
(1, 'abhishek kandwal', 'abhishekkandwal445@gmail.com', '$2y$10$09GfCfHsY8v5SfqwPe3R.O9YYp0N5431P7Q5tuQNToZeWwG6Vc9iq', 'london'),
(2, 'abhishek kandwal', 'abhishekkandwal445@gmail.com', '$2y$10$ccYY43qvi7dAOTonBjbTougAWQdI7jfWEgOO6oYmnRh/yPYaZ7IlS', 'london'),
(3, 'abhishek kandwal', 'abhishekkandwal445@gmail.com', '$2y$10$7YRK.CEPayqydhXNC/rm3O4RusGi5JpbT4MPuWSXlBVuSCU/ynezK', 'america'),
(4, 'rahul', 'rahul@gmail.com', '$2y$10$4fYM5ETg7ec2YssOAIaIye1R5eVWJVbR8zPKBOJulDLTUkOoj8IFe', 'srinagar'),
(5, 'i.ushh', 'ayushchandola5878@gmail.com', '$2y$10$8gojkKGetjao4ilf4yNWpeKReZRxXtypUlD5fZlDccgJTWo7UPive', 'dehradun');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blockeduser`
--
ALTER TABLE `blockeduser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `connection`
--
ALTER TABLE `connection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
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
-- AUTO_INCREMENT for table `blockeduser`
--
ALTER TABLE `blockeduser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `connection`
--
ALTER TABLE `connection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
