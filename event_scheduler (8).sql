-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 11:07 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_scheduler`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'admin@gmail.com', '21232F297A57A5A743894A0E4A801FC3');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventid` int(11) NOT NULL,
  `eventname` varchar(300) NOT NULL,
  `eventdesc` varchar(50000) NOT NULL,
  `eventimage` varchar(1000) NOT NULL,
  `eventcover` varchar(10000) NOT NULL,
  `eventstart` datetime NOT NULL,
  `eventend` datetime NOT NULL,
  `eventvenue` varchar(400) NOT NULL,
  `venueid` int(11) NOT NULL,
  `eventcreator` int(11) NOT NULL,
  `eventdescdoc` varchar(1000) NOT NULL,
  `statue` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventid`, `eventname`, `eventdesc`, `eventimage`, `eventcover`, `eventstart`, `eventend`, `eventvenue`, `venueid`, `eventcreator`, `eventdescdoc`, `statue`) VALUES
(121, 'trxcvbjnkm', 'xrtcyvubinm', '', '', '2019-04-13 14:00:00', '2019-04-13 15:00:00', 'MP HALL', 1, 7, '', 1),
(122, 'rdrtyun', 'rxtcyvbjnk', '', '', '2019-04-12 14:00:00', '2019-04-12 16:00:00', 'Barbeque', 7, 7, '', 1),
(123, 'Get Together', 'All 2016 Passouts', 'Uploads/profile/.png', 'Uploads/cover/.jpg', '2019-05-04 07:00:00', '2019-05-04 10:00:00', 'Tikhi Mirchi', 25, 7, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `invitation`
--

CREATE TABLE `invitation` (
  `inviteid` int(11) NOT NULL,
  `current` int(11) NOT NULL DEFAULT '0',
  `eventid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invitation`
--

INSERT INTO `invitation` (`inviteid`, `current`, `eventid`, `userid`, `username`, `email`) VALUES
(140, 0, 0, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(141, 0, 0, 3, 'sima', 'sima@g.com'),
(142, 0, 0, 6, 'nitin', 'nitin@mnnit.ac.in'),
(143, 0, 0, 8, 'yashi', 'yashi@gmail.com'),
(144, 0, 0, 9, 'Team', 'teameuphony00@gmail.com'),
(145, 0, 0, 14, 'qwerthjk', 'wsefrg@d.com'),
(146, 0, 0, 15, 'doraemi', 'doraemi@g.com'),
(147, 0, 0, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(148, 0, 0, 3, 'sima', 'sima@g.com'),
(149, 0, 0, 6, 'nitin', 'nitin@mnnit.ac.in'),
(150, 0, 0, 7, 'Siddhi', 'siddhi@gmail.com'),
(151, 0, 0, 8, 'yashi', 'yashi@gmail.com'),
(152, 0, 0, 9, 'Team', 'teameuphony00@gmail.com'),
(153, 0, 0, 14, 'qwerthjk', 'wsefrg@d.com'),
(154, 0, 0, 15, 'doraemi', 'doraemi@g.com'),
(155, 0, 0, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(156, 0, 0, 3, 'sima', 'sima@g.com'),
(157, 0, 0, 6, 'nitin', 'nitin@mnnit.ac.in'),
(158, 0, 0, 7, 'Siddhi', 'siddhi@gmail.com'),
(159, 0, 0, 8, 'yashi', 'yashi@gmail.com'),
(160, 0, 0, 9, 'Team', 'teameuphony00@gmail.com'),
(161, 0, 0, 14, 'qwerthjk', 'wsefrg@d.com'),
(162, 0, 0, 15, 'doraemi', 'doraemi@g.com'),
(163, 0, 0, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(164, 0, 0, 3, 'sima', 'sima@g.com'),
(165, 0, 0, 6, 'nitin', 'nitin@mnnit.ac.in'),
(166, 0, 0, 7, 'Siddhi', 'siddhi@gmail.com'),
(167, 0, 0, 8, 'yashi', 'yashi@gmail.com'),
(168, 0, 0, 9, 'Team', 'teameuphony00@gmail.com'),
(169, 0, 0, 14, 'qwerthjk', 'wsefrg@d.com'),
(170, 0, 0, 15, 'doraemi', 'doraemi@g.com'),
(171, 0, 0, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(172, 0, 0, 3, 'sima', 'sima@g.com'),
(173, 0, 0, 6, 'nitin', 'nitin@mnnit.ac.in'),
(174, 0, 0, 7, 'Siddhi', 'siddhi@gmail.com'),
(175, 0, 0, 8, 'yashi', 'yashi@gmail.com'),
(176, 0, 0, 9, 'Team', 'teameuphony00@gmail.com'),
(177, 0, 0, 14, 'qwerthjk', 'wsefrg@d.com'),
(178, 0, 0, 15, 'doraemi', 'doraemi@g.com'),
(179, 0, 0, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(180, 0, 0, 3, 'sima', 'sima@g.com'),
(181, 0, 0, 6, 'nitin', 'nitin@mnnit.ac.in'),
(182, 0, 0, 8, 'yashi', 'yashi@gmail.com'),
(183, 0, 0, 9, 'Team', 'teameuphony00@gmail.com'),
(184, 0, 0, 14, 'qwerthjk', 'wsefrg@d.com'),
(185, 0, 0, 15, 'doraemi', 'doraemi@g.com'),
(186, 1, 120, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(187, 1, 120, 3, 'sima', 'sima@g.com'),
(188, 1, 120, 6, 'nitin', 'nitin@mnnit.ac.in'),
(189, 0, 120, 8, 'yashi', 'yashi@gmail.com'),
(190, 0, 120, 9, 'Team', 'teameuphony00@gmail.com'),
(191, 0, 120, 14, 'qwerthjk', 'wsefrg@d.com'),
(192, 1, 120, 15, 'doraemi', 'doraemi@g.com'),
(193, 1, 121, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(194, 0, 121, 3, 'sima', 'sima@g.com'),
(195, 1, 121, 6, 'nitin', 'nitin@mnnit.ac.in'),
(196, 0, 121, 8, 'yashi', 'yashi@gmail.com'),
(197, 0, 121, 9, 'Team', 'teameuphony00@gmail.com'),
(198, 0, 121, 14, 'qwerthjk', 'wsefrg@d.com'),
(199, 0, 121, 15, 'doraemi', 'doraemi@g.com'),
(200, 0, 122, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(201, 0, 122, 3, 'sima', 'sima@g.com'),
(202, 0, 122, 6, 'nitin', 'nitin@mnnit.ac.in'),
(203, 1, 122, 8, 'yashi', 'yashi@gmail.com'),
(204, 0, 122, 9, 'Team', 'teameuphony00@gmail.com'),
(205, 0, 122, 14, 'qwerthjk', 'wsefrg@d.com'),
(206, 0, 122, 15, 'doraemi', 'doraemi@g.com'),
(207, 0, 0, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(208, 0, 0, 3, 'sima', 'sima@g.com'),
(209, 0, 0, 7, 'Siddhi', 'siddhi@gmail.com'),
(210, 0, 0, 8, 'yashi', 'yashi@gmail.com'),
(211, 0, 0, 9, 'Team', 'teameuphony00@gmail.com'),
(212, 0, 0, 14, 'qwerthjk', 'wsefrg@d.com'),
(213, 0, 0, 15, 'doraemi', 'doraemi@g.com'),
(214, 0, 0, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(215, 0, 0, 3, 'sima', 'sima@g.com'),
(216, 0, 0, 7, 'Siddhi', 'siddhi@gmail.com'),
(217, 0, 0, 8, 'yashi', 'yashi@gmail.com'),
(218, 0, 0, 9, 'Team', 'teameuphony00@gmail.com'),
(219, 0, 0, 14, 'qwerthjk', 'wsefrg@d.com'),
(220, 0, 0, 15, 'doraemi', 'doraemi@g.com'),
(221, 0, 123, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(222, 0, 123, 3, 'sima', 'sima@g.com'),
(223, 0, 123, 6, 'nitin', 'nitin@mnnit.ac.in'),
(224, 0, 123, 8, 'yashi', 'yashi@gmail.com'),
(225, 0, 123, 9, 'Team', 'teameuphony00@gmail.com'),
(226, 0, 123, 14, 'qwerthjk', 'wsefrg@d.com'),
(227, 0, 123, 15, 'doraemi', 'doraemi@g.com');

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `notifid` int(11) NOT NULL,
  `eventid` int(11) NOT NULL,
  `eventname` varchar(1000) NOT NULL,
  `eventvenue` varchar(1000) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notif`
--

INSERT INTO `notif` (`notifid`, `eventid`, `eventname`, `eventvenue`, `userid`, `status`) VALUES
(3, 121, 'trxcvbjnkm', 'MP HALL', 6, 1),
(4, 122, 'rdrtyun', 'C', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `requestid` int(11) NOT NULL,
  `creatorid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `eventid` int(11) NOT NULL,
  `reqstatus` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `mob`, `gender`, `status`) VALUES
(1, 'TANISHA', 'tanishakumb@gmail.com', '703096156fdbc624cfe78a6ab17e8501', '9874563210', 'f', '0'),
(3, 'sima', 'sima@g.com', 'e6b42073f30a539405c50c443633c160', '9874563210', 'f', '0'),
(4, 'xcxz', 'rik@g.com', '496b7e6d1d1eb11c52e5e01947b22b96', '9874563210', 'm', '1'),
(6, 'nitin', 'nitin@mnnit.ac.in', 'b585c4415b1fe50f2c31fa1698b271b7', '07753938247', 'm', '0'),
(7, 'Siddhi', 'siddhi@gmail.com', 'f2285b68e227f7a9d4481a80a3b1b186', '6377005673', 'f', '0'),
(8, 'yashi', 'yashi@gmail.com', '09e868b2c6c346df8251f22d957c3a54', '6377005673', 'f', '0'),
(9, 'Team', 'teameuphony00@gmail.com', 'ac848fa228f49ba2b8a5fbd76596817d', '', '', '0'),
(14, 'qwerthjk', 'wsefrg@d.com', '6c04b688500a48ff8b3f471d9a1ed5ef', '', 'm', '0'),
(15, 'doraemi', 'doraemi@g.com', '47010903b3a334c258ae27deb5b1c055', '', 'f', '0');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `start_time` datetime(6) NOT NULL,
  `end_time` datetime(6) NOT NULL,
  `location` varchar(10000) NOT NULL,
  `image` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `name`, `start_time`, `end_time`, `location`, `image`) VALUES
(1, 'MP HALL', '2019-04-13 14:00:00.000000', '2019-04-13 15:00:00.000000', 'MP Hall,MNNIT,Pryagraj', 'Uploads/venues/1.jpg'),
(4, 'Sem Hall', '2019-03-24 08:00:00.000000', '2019-04-12 18:00:00.000000', 'Sem Hall MNNIT', 'Uploads/venues/20.jpg'),
(7, 'Barbeque', '2019-04-12 12:00:00.000000', '2019-05-07 16:02:00.000000', 'Civil Lines,Prayagraj', 'Uploads/venues/20.jpg'),
(24, 'athletic ground', '2019-04-08 14:15:00.000000', '2019-04-08 15:15:00.000000', 'MNNIT CAMPUS,TELLIARGANJ', 'Uploads/venues/24.jpg'),
(25, 'Tikhi Mirchi', '2019-04-30 07:00:00.000000', '2019-05-05 20:00:00.000000', 'Tikhi Mirchi,Vidisha', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `invitation`
--
ALTER TABLE `invitation`
  ADD PRIMARY KEY (`inviteid`);

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`notifid`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`requestid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eventid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT for table `invitation`
--
ALTER TABLE `invitation`
  MODIFY `inviteid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;
--
-- AUTO_INCREMENT for table `notif`
--
ALTER TABLE `notif`
  MODIFY `notifid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `requestid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
