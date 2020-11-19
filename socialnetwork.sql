-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2020 at 02:31 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socialnetwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(11) NOT NULL,
  `fromId` int(11) NOT NULL,
  `toId` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `fromId`, `toId`, `message`) VALUES
(1, 1, 2, 'Hi bob'),
(2, 2, 1, 'Hey jill. oops...'),
(3, 1, 2, 'welp...'),
(4, 1, 2, 'yoo...'),
(5, 2, 1, 'feeling lonely'),
(6, 1, 2, 'thats crazy'),
(7, 1, 2, 'hey heyy'),
(8, 2, 1, 'hiii'),
(9, 1, 2, 'wassup'),
(10, 1, 2, 'chats working?'),
(11, 2, 1, 'Yes it is!!!'),
(12, 2, 1, 'hey'),
(13, 1, 2, 'hey jane'),
(14, 2, 1, 'hows it going'),
(15, 1, 2, 'this works'),
(16, 1, 2, 'yessir'),
(17, 2, 1, 'yerrrr');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `postId` int(11) NOT NULL,
  `fromId` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `postId`, `fromId`, `comment`) VALUES
(16, 29, 2, 'cmon bob'),
(17, 29, 1, 'whatever jane'),
(18, 29, 2, 'sad boy vybez'),
(19, 30, 2, 'noice'),
(20, 30, 1, 'tanks'),
(21, 32, 2, 'woah'),
(22, 37, 2, 'yessir'),
(23, 37, 1, 'yerrrr');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `fromId` int(11) DEFAULT NULL,
  `toId` int(11) DEFAULT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `fromId`, `toId`, `message`) VALUES
(8, 1, 2, 'Hey jane another test message'),
(9, 1, 2, 'message'),
(10, 2, 1, 'bobitoooo'),
(11, 1, 2, 'test message to jane'),
(12, 2, 1, 'test message back to bob');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `post` text DEFAULT NULL,
  `date` date DEFAULT current_timestamp(),
  `src` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `userId`, `post`, `date`, `src`) VALUES
(29, 1, 'Status: Feeling Blue', '0000-00-00', ''),
(30, 1, 'feeling blue with an image', '0000-00-00', '../test/images/uploads/quiz.png'),
(31, 2, 'Status: Feeling excited', '0000-00-00', ''),
(32, 1, 'Status: Feeling spinny', '0000-00-00', '../test/images/uploads/spin.gif'),
(33, 1, 'feeling cute might delete later', '0000-00-00', '../test/images/uploads/logout.png'),
(34, 1, 'test', '0000-00-00', '../test/images/uploads/logout.png'),
(35, 1, 'test', '0000-00-00', '../test/images/uploads/quiz.png'),
(36, 1, 'dora', '0000-00-00', '../test/images/uploads/viacom-Dora-sea1-Full-Image_GalleryBackground-en-US-1572241892868._RI_.jpg'),
(37, 1, 'test', '0000-00-00', ''),
(38, 2, 'Status: Feeling Blue', '0000-00-00', '../test/images/uploads/viacom-Dora-sea1-Full-Image_GalleryBackground-en-US-1572241892868._RI_.jpg'),
(39, 1, 'Status: Feeling Blue', '0000-00-00', '../test/images/uploads/viacom-Dora-sea1-Full-Image_GalleryBackground-en-US-1572241892868._RI_.jpg'),
(40, 1, 'Status: Feeling Blue', '0000-00-00', '../test/images/uploads/viacom-Dora-sea1-Full-Image_GalleryBackground-en-US-1572241892868._RI_.jpg'),
(41, 1, 'Status: Feeling Blue', '0000-00-00', '../test/images/uploads/viacom-Dora-sea1-Full-Image_GalleryBackground-en-US-1572241892868._RI_.jpg'),
(42, 1, 'sfdggnd', '0000-00-00', '../test/images/uploads/Dora-Copy.jpg'),
(43, 1, 'test', '0000-00-00', '../test/images/uploads/quiz.png'),
(44, 1, 'Status: Feeling Blue', '0000-00-00', '../test/images/uploads/Dora-Copy.jpg'),
(45, 0, 'Status: Feeling Blue', '0000-00-00', '../test/images/uploads/Dora-Copy.jpg'),
(46, 0, 'tesy dora', '0000-00-00', '../../test/images/uploads/Dora-Copy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'bob', 'bob'),
(2, 'jane', 'jane');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
