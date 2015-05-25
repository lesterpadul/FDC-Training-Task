-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2015 at 12:06 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cake_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `created`, `modified`) VALUES
(1, 'The title', 'This is the article body.', '2015-05-25 12:52:03', NULL),
(2, 'A title once again', 'And the article body follows.', '2015-05-25 12:52:03', NULL),
(3, 'Title strikes back', 'This is really exciting! Not.', '2015-05-25 12:52:03', NULL),
(4, 'asdasd', '', '2015-05-25 06:19:58', '2015-05-25 06:19:58'),
(5, 'asdasd', 'asdsd', '2015-05-25 06:20:11', '2015-05-25 06:20:11'),
(6, '123', '123123', '2015-05-25 06:20:30', '2015-05-25 06:20:30'),
(7, '123123213', '123123123', '2015-05-25 06:20:36', '2015-05-25 06:20:36'),
(8, '', '', '2015-05-25 06:21:47', '2015-05-25 06:21:47'),
(9, 'Lester Sample', 'Content', NULL, NULL),
(10, 'Lester Sample', 'Content', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(100) NOT NULL,
  `user_id` int(100) DEFAULT NULL,
  `recipient_id` int(100) DEFAULT NULL,
  `content` text,
  `status` varchar(20) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` text,
  `status` varchar(20) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `created`, `modified`) VALUES
(1, 'Lester Ag Lastimosa Padul', 'padullester@gmail.com', 'c449d02b572e7820f9a87b4062112911d306c19ce3e1c7357161828678f86a0b17bb979c6faf073caab51b0216ca1a6b1b257d920335cbd576466311dae80e35', '1', '2015-05-25 07:31:22', '0000-00-00 00:00:00'),
(14, 'John Doe', 'johndoe@gmail.com', 'c449d02b572e7820f9a87b4062112911d306c19ce3e1c7357161828678f86a0b17bb979c6faf073caab51b0216ca1a6b1b257d920335cbd576466311dae80e35', '1', '2015-05-25 10:01:15', '2015-05-25 10:01:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
