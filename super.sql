-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 07:09 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `super`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `catid` int(11) NOT NULL,
  `mcatid` int(100) NOT NULL,
  `cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`catid`, `mcatid`, `cat`) VALUES
(1, 2, 'primary stage'),
(2, 2, 'preparatory stage'),
(3, 2, 'secondary stage'),
(4, 2, 'technical education');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comid` int(11) NOT NULL,
  `postid` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `com` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comid`, `postid`, `userid`, `com`, `date`, `time`) VALUES
(15, 8, 5, 'hello', '07Jun21', '20:50:22'),
(17, 8, 5, '22ddrr', '08Jun21', '09:46:37'),
(18, 7, 5, 'hellop', '08Jun21', '12:33:27'),
(22, 14, 5, 'events', '08Jun21', '13:46:47'),
(24, 15, 5, 'lessonplan2', '08Jun21', '16:11:55'),
(25, 19, 5, 'hello activity', '08Jun21', '16:28:27'),
(26, 20, 5, 'hello prep 1', '08Jun21', '20:05:43'),
(27, 8, 7, 'Ù‡Ù„Ø§', '08Jun21', '20:50:33'),
(28, 13, 7, 'hhhhh', '08Jun21', '21:13:40'),
(29, 13, 6, 'hello', '08Jun21', '21:25:46'),
(30, 8, 6, 'hhhhh', '08Jun21', '21:34:42'),
(31, 13, 5, 'hhhhh', '12Jun21', '22:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` int(100) NOT NULL,
  `msg` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `userid` int(100) NOT NULL,
  `seen` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactid`, `name`, `email`, `tel`, `msg`, `date`, `time`, `userid`, `seen`) VALUES
(6, 'bb ', 'aaa', 2147483647, 'tttttttttfffffffff', '10Jun21', '19:09:29', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `imgid` int(11) NOT NULL,
  `postid` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`imgid`, `postid`, `userid`, `img`) VALUES
(26, 13, 5, '1_FB_IMG_1459333274164.jpg'),
(27, 13, 5, '0_FB_IMG_1460045176155.jpg'),
(28, 13, 5, '2_FB_IMG_1460372650572.jpg'),
(29, 13, 5, '5_FB_IMG_1461787087135.jpg'),
(30, 13, 5, '5_FB_IMG_1461787115366.jpg'),
(31, 13, 5, '1_FB_IMG_1461787117603.jpg'),
(32, 13, 5, '0_FB_IMG_1462140517607.jpg'),
(33, 14, 5, '2_FB_IMG_1455038944862.jpg'),
(34, 14, 5, '1_FB_IMG_1455039072129.jpg'),
(35, 15, 5, '3_222.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `likeid` int(11) NOT NULL,
  `postid` int(255) NOT NULL,
  `myid` int(100) NOT NULL,
  `userid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`likeid`, `postid`, `myid`, `userid`) VALUES
(5, 19, 5, 5),
(6, 20, 5, 5),
(11, 8, 5, 7),
(12, 7, 5, 7),
(13, 13, 5, 5),
(14, 13, 7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `maincat`
--

CREATE TABLE `maincat` (
  `mcatid` int(100) NOT NULL,
  `mcat` varchar(255) NOT NULL,
  `dd` varchar(100) NOT NULL,
  `s` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `maincat`
--

INSERT INTO `maincat` (`mcatid`, `mcat`, `dd`, `s`) VALUES
(1, 'home', '', ''),
(2, 'cycles', '', ''),
(3, 'events', '', ''),
(4, 'exams', '', ''),
(5, 'games', '', ''),
(6, 'contactus', '', ''),
(7, 'about', '', ''),
(8, 'channels', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `noti`
--

CREATE TABLE `noti` (
  `notiid` int(11) NOT NULL,
  `userid` int(100) NOT NULL,
  `url` text NOT NULL,
  `content` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `seen` int(100) NOT NULL,
  `postid` int(100) NOT NULL,
  `myid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `noti`
--

INSERT INTO `noti` (`notiid`, `userid`, `url`, `content`, `name`, `seen`, `postid`, `myid`) VALUES
(5, 5, 'showpost.html?postid=19', 'ali has liked your post ', 'ali', 1, 19, 5),
(6, 5, 'showpost.html?postid=20', 'ali has liked your post ', 'ali', 1, 20, 5),
(9, 5, 'showpost.html?postid=13', ' has liked your post ', '', 1, 13, 0),
(11, 7, 'showpost.html?postid=8', 'ali has liked your post ', 'ali', 1, 8, 5),
(12, 7, 'showpost.html?postid=7', 'ali has liked your post ', 'ali', 1, 7, 5),
(13, 5, 'showpost.html?postid=13', 'ali has liked your post ', 'ali', 1, 13, 5),
(14, 5, 'showpost.html?postid=13', 'aaaaa has liked your post ', 'aaaaa', 1, 13, 7);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postid` int(11) NOT NULL,
  `mcatid` int(100) NOT NULL,
  `catid` int(100) NOT NULL,
  `scatid` int(100) NOT NULL,
  `userid` int(100) NOT NULL,
  `post` text NOT NULL,
  `date` text NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`postid`, `mcatid`, `catid`, `scatid`, `userid`, `post`, `date`, `time`) VALUES
(7, 1, 0, 0, 7, '<p>mmmmmmmmmmmm</p>\r\n', '05Jun21', '12:14:34'),
(8, 1, 0, 0, 7, '<p style=\"text-align:center\"><span style=\"color:#f39c12\"><span style=\"font-size:18px\"><strong><span style=\"background-color:#66ff33\">Ø¨Ø³Ù… Ø§Ù„Ù„Ù‡ Ø§Ù„Ø±Ø­Ù…Ù† Ø§Ù„Ø±Ø­ÙŠÙ…&nbsp;</span></strong></span></span></p>\r\n\r\n<p><span style=\"color:#00cc33\"><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\"><strong>Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ…&nbsp;&nbsp;ÙÙ‰ Ø¨Ù„Ø¯Ùƒ Ø§Ù„Ø±Ø§Ø¨Ø¹ ÙˆØ§Ù„Ø¹Ù„Ø¨ ØªØª&nbsp; ÙˆØ¹Ù„Ø§ ÙˆØºÙ„Ø§ ØºØ¨Ù„ÙØ¨Ø¨ ÙˆÙ…Ø³Ø§Ø¤ Ø§Ù„Ø³Ù Øª ÙˆØ§Ù„Ø§ÙƒÙ„Ø§Ø±Ø§Øª Ø¹Ù„Ù‰ Ù…Ù„ Ø§Ù„Ù„Ù†Ø´Ø¹Ø¨ Ø§Ù„Ø¹Ø±ÙŠÙ Ù…Ù„Ø§Øª ÙˆØ§Ù„Ù„Ù† Ø§Ù„Ù‚Ø±Ø¯Ù‡ ÙˆØ§Ù„Ø®Ù†Ø± ÙŠØ± ÙÙ‰ Ù…ØµØ± ÙˆØ§Ù„ØºÙ„Ù… Ø§Ù„Ø¹Ø±Ø¨ÙŠ Ù…Ù† Ø§Ù„Ù…Ø¬ÙŠØ· Ø§Ù„Ù‰ Ø§Ù„Ø®Ù„ÙŠØ¬&nbsp;</strong></span></span></span></p>\r\n\r\n<p><span style=\"color:#ff0000\"><span style=\"font-size:16px\"><strong>hello every one nice to meet u all , have fun and go to hell u and ur familr y with my best withes hy all people you are adog brw&nbsp;</strong></span></span></p>\r\n', '05Jun21', '12:29:25'),
(13, 1, 0, 0, 5, '<p style=\"text-align:center\"><br />\r\n<span style=\"color:#1abc9c\"><span style=\"font-size:16px\">Ø¨Ø³Ù… Ø§Ù„Ù„Ù‡ Ø§Ù„Ø±Ø­Ù…Ù† Ø§Ù„Ø±Ø­ÙŠÙ…&nbsp;</span></span></p>\r\n\r\n<p><span style=\"color:#cc0000\"><span style=\"font-size:16px\">Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ…&nbsp;&nbsp;ÙÙ‰ Ø¨Ù„Ø¯Ùƒ Ø§Ù„Ø±Ø§Ø¨Ø¹ ÙˆØ§Ù„Ø¹Ù„Ø¨ ØªØª&nbsp;&nbsp;ÙˆØ¹Ù„Ø§ ÙˆØºÙ„Ø§ ØºØ¨Ù„ÙØ¨Ø¨ ÙˆÙ…Ø³Ø§Ø¤ Ø§Ù„Ø³Ù Øª ÙˆØ§Ù„Ø§ÙƒÙ„Ø§Ø±Ø§Øª Ø¹Ù„Ù‰ Ù…Ù„ Ø§Ù„Ù„Ù†Ø´Ø¹Ø¨ Ø§Ù„Ø¹Ø±ÙŠÙ Ù…Ù„Ø§Øª ÙˆØ§Ù„Ù„Ù† Ø§Ù„Ù‚Ø±Ø¯Ù‡ ÙˆØ§Ù„Ø®Ù†Ø± ÙŠØ± ÙÙ‰ Ù…ØµØ± ÙˆØ§Ù„ØºÙ„Ù… Ø§Ù„Ø¹Ø±Ø¨ÙŠ Ù…Ù† Ø§Ù„Ù…Ø¬ÙŠØ· Ø§Ù„Ù‰ Ø§Ù„Ø®Ù„ÙŠØ¬&nbsp;</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"color:#66ff00\">hello every one nice to meet u all , have fun and go to hell u and ur familr y with my best withes hy all people you are adog brw&nbsp;</span></span></p>\r\n', '08Jun21', '12:38:35'),
(14, 3, 0, 0, 5, '<p style=\"text-align:center\"><br />\r\n<span style=\"font-size:16px\"><span style=\"color:#e74c3c\">Ø±Ø¬Ø§Ø¡ Ø§Ø³ØªØ®Ø¯Ø§Ù… Ù‡Ø° Ø§Ù„Ù…Ø­Ø±Ø± Ù„ØªÙ†Ø³ÙŠÙ‚ Ø§Ù„Ø®Ø· ÙˆØ§Ù„Ø§Ù„ÙˆØ§Ù† ÙÙ‚Ø·...... ÙˆÙ„Ø§ÙŠØ³ØªØ®Ø¯Ù… Ù„Ø±ÙØ¹ Ø§Ù„ØµÙˆØ± ÙˆØ§Ù„ÙÙŠØ¯ÙŠÙˆ ÙˆØºÙŠØ±Ù‡Ø§ &nbsp;... Ø§Ø³ØªØ®Ø¯Ù… Ø²Ø± Ø§Ø³ÙÙ„ Ø§Ù„Ù…Ø­Ø±Ø± Ù„Ø±ÙØ¹ Ø§Ù„ØµÙˆØ±&nbsp;</span></span><br />\r\n<span style=\"font-family:Georgia,serif\"><span style=\"color:#2ecc71\">Ø¨Ø³Ù… Ø§Ù„Ù„Ù‡ Ø§Ù„Ø±Ø­Ù…Ù† Ø§Ù„Ø±Ø­ÙŠÙ…&nbsp;</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Georgia,serif\"><span style=\"color:#003399\">Ø§Ù‡Ù„Ø§ Ø¨ÙƒÙ…&nbsp;&nbsp;ÙÙ‰ Ø¨Ù„Ø¯Ùƒ Ø§Ù„Ø±Ø§Ø¨Ø¹ ÙˆØ§Ù„Ø¹Ù„Ø¨ ØªØª&nbsp;&nbsp;ÙˆØ¹Ù„Ø§ ÙˆØºÙ„Ø§ ØºØ¨Ù„ÙØ¨Ø¨ ÙˆÙ…Ø³Ø§Ø¤ Ø§Ù„Ø³Ù Øª ÙˆØ§Ù„Ø§ÙƒÙ„Ø§Ø±Ø§Øª Ø¹Ù„Ù‰ Ù…Ù„ Ø§Ù„Ù„Ù†Ø´Ø¹Ø¨ Ø§Ù„Ø¹Ø±ÙŠÙ Ù…Ù„Ø§Øª ÙˆØ§Ù„Ù„Ù† Ø§Ù„Ù‚Ø±Ø¯Ù‡ ÙˆØ§Ù„Ø®Ù†Ø± ÙŠØ± ÙÙ‰ Ù…ØµØ± ÙˆØ§Ù„ØºÙ„Ù… Ø§Ù„Ø¹Ø±Ø¨ÙŠ Ù…Ù† Ø§Ù„Ù…Ø¬ÙŠØ· Ø§Ù„Ù‰ Ø§Ù„Ø®Ù„ÙŠØ¬&nbsp;</span></span></span></p>\r\n\r\n<p>hello every one nice to meet u all , have fun and go to hell u and ur familr y with my best withes hy all people you are adog brw&nbsp;</p>\r\n', '08Jun21', '13:30:36'),
(15, 2, 1, 1, 5, '<p style=\"text-align:center\"><span style=\"color:#e74c3c\"><span style=\"font-size:22px\"><span style=\"font-family:Georgia,serif\">lesson plan page</span></span></span></p>\r\n', '08Jun21', '16:09:42'),
(16, 2, 1, 2, 5, '<p style=\"text-align:center\"><span style=\"color:#e67e22\"><span style=\"font-size:18px\"><span style=\"font-family:Georgia,serif\">courses page</span></span></span></p>\r\n', '08Jun21', '16:24:35'),
(17, 2, 1, 3, 5, '<p style=\"text-align:center\"><span style=\"color:#16a085\"><span style=\"font-size:22px\"><span style=\"font-family:Comic Sans MS,cursive\">ccorrespondence page</span></span></span></p>\r\n', '08Jun21', '16:26:28'),
(18, 2, 1, 4, 5, '<p style=\"text-align:center\"><span style=\"color:#e74c3c\">traing page</span></p>\r\n', '08Jun21', '16:27:12'),
(19, 2, 1, 5, 5, '<p style=\"text-align:center\"><span style=\"color:#e74c3c\"><span style=\"font-size:18px\">activities&nbsp;page</span></span></p>\r\n', '08Jun21', '16:27:50'),
(20, 2, 2, 1, 5, '<p style=\"text-align:center\"><span style=\"color:#339999\">prep l.p</span></p>\r\n', '08Jun21', '20:04:56'),
(21, 2, 2, 2, 5, '<p>prep courses</p>\r\n', '08Jun21', '20:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `scat`
--

CREATE TABLE `scat` (
  `scatid` int(11) NOT NULL,
  `mcatid` int(100) NOT NULL,
  `catid` int(100) NOT NULL,
  `scat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scat`
--

INSERT INTO `scat` (`scatid`, `mcatid`, `catid`, `scat`) VALUES
(1, 2, 1, 'lesson plan'),
(2, 2, 1, 'courses'),
(3, 2, 1, 'correspondence'),
(4, 2, 1, 'training'),
(5, 2, 1, 'activities'),
(6, 2, 2, 'lesson plan'),
(7, 2, 2, 'courses'),
(8, 2, 2, 'correspondence'),
(9, 2, 2, 'training'),
(10, 2, 2, 'activities'),
(11, 2, 3, 'lesson plan'),
(12, 2, 3, 'courses'),
(13, 2, 3, 'correspondence'),
(14, 2, 3, 'training'),
(15, 2, 3, 'activities'),
(16, 2, 4, 'lesson plan'),
(17, 2, 4, 'courses'),
(18, 2, 4, 'correspondence'),
(19, 2, 4, 'training'),
(20, 2, 4, 'activities');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `level` int(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `avatar` text NOT NULL,
  `bg` varchar(20) NOT NULL,
  `timer` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `job` varchar(255) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `fullname`, `email`, `level`, `gender`, `avatar`, `bg`, `timer`, `job`, `about`) VALUES
(1, 'bb', '123', 'admin', 'bbff@ff.com', 0, '1 ', 'm/male.jpg', 'ba.jpg', '2021-06-12 20:06:16', 'Ù…Ø¹Ù„Ù… Ø§ÙˆÙ„', ''),
(2, 'aaa', '123', 'admin', 'bbff@ff.com', 0, '1 ', 'm/male.jpg', 'ba.jpg', '2021-06-10 10:34:38', 'Ù…Ø¹Ù„Ù… Ø§ÙˆÙ„', ''),
(3, 'aaa', '123', 'admin', 'bbff@ff.com', 0, '1 ', 'm/male.jpg', 'ba.jpg', '2021-06-10 10:34:38', 'Ù…Ø¹Ù„Ù… Ø§ÙˆÙ„', ''),
(4, 'aaa', '123', 'admin', 'bbff@ff.com', 0, '1 ', 'm/male.jpg', 'ba.jpg', '2021-06-10 10:34:38', 'Ù…Ø¹Ù„Ù… Ø§ÙˆÙ„', ''),
(5, 'bbb', '123', 'admin', 'bbff@ff.com', 2, '1 ', 'm/male.jpg', 'ba.jpg', '2021-06-12 20:06:41', 'Ù…Ø¹Ù„Ù… Ø§ÙˆÙ„', ''),
(6, 'aaa', '123', 'admin', 'bbff@ff.com', 0, '2', 'm/female.jpg', 'ba.jpg', '2021-06-10 10:34:38', 'Ù…Ø¹Ù„Ù… Ø§ÙˆÙ„', ''),
(7, 'aaa', '123', 'admin1', 'admin@gmail.com', 2, '1 ', '63_FB_IMG_1455055021657.jpg', 'ba.jpg', '2021-06-10 12:25:28', 'Ù…Ø¹Ù„Ù… ', 'hiii'),
(8, 'aaa', '123', 'admin', 'bbff@ff.com', 0, '1 ', 'm/male.jpg', 'ba.jpg', '2021-06-10 10:34:38', 'Ù…Ø¹Ù„Ù… Ø§ÙˆÙ„', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`imgid`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`likeid`);

--
-- Indexes for table `maincat`
--
ALTER TABLE `maincat`
  ADD PRIMARY KEY (`mcatid`);

--
-- Indexes for table `noti`
--
ALTER TABLE `noti`
  ADD PRIMARY KEY (`notiid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `scat`
--
ALTER TABLE `scat`
  ADD PRIMARY KEY (`scatid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `imgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `likeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `maincat`
--
ALTER TABLE `maincat`
  MODIFY `mcatid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `noti`
--
ALTER TABLE `noti`
  MODIFY `notiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `scat`
--
ALTER TABLE `scat`
  MODIFY `scatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
