-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2019 at 05:33 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

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
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

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
(128, 'rxtcyvguhj', 'ezxrctv', 'Uploads/profile/127.jpg', 'Uploads/cover/127.jpg', '2019-03-11 14:00:00', '2019-03-11 15:00:00', 'MP HALL', 1, 7, '', 1),
(129, 'xctvybunim', 'zexcvbnm', 'Uploads/profile/128.jpg', 'Uploads/cover/128.jpg', '2019-03-11 14:00:00', '2019-03-11 15:00:00', 'E', 9, 7, '', 1),
(130, 'xcguhijokl', 'zrxctvybunm,', 'Uploads/profile/129.jpg', 'Uploads/cover/129.jpg', '2019-03-14 14:00:00', '2019-03-14 16:00:00', 'E', 9, 7, '', 1),
(131, 'hey', 'hello', 'Uploads/profile/130.jpg', 'Uploads/cover/130.jpg', '2019-03-15 15:00:00', '2019-03-15 16:00:00', 'E', 9, 7, '', 1);

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
(122, 1, 116, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(124, 2, 116, 7, 'Siddhi', 'siddhi@gmail.com'),
(126, 2, 116, 9, 'Team', 'teameuphony00@gmail.com'),
(127, 0, 0, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(128, 0, 0, 3, 'sima', 'sima@g.com'),
(129, 0, 0, 6, 'nitin', 'nitin@mnnit.ac.in'),
(130, 0, 0, 7, 'Siddhi', 'siddhi@gmail.com'),
(131, 0, 0, 8, 'yashi', 'yashi@gmail.com'),
(132, 0, 0, 9, 'Team', 'teameuphony00@gmail.com'),
(133, 0, 0, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(134, 0, 0, 3, 'sima', 'sima@g.com'),
(135, 0, 0, 6, 'nitin', 'nitin@mnnit.ac.in'),
(136, 0, 0, 7, 'Siddhi', 'siddhi@gmail.com'),
(137, 0, 0, 8, 'yashi', 'yashi@gmail.com'),
(138, 0, 0, 9, 'Team', 'teameuphony00@gmail.com'),
(139, 0, 0, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(140, 0, 0, 3, 'sima', 'sima@g.com'),
(141, 0, 0, 6, 'nitin', 'nitin@mnnit.ac.in'),
(142, 0, 0, 7, 'Siddhi', 'siddhi@gmail.com'),
(143, 0, 0, 8, 'yashi', 'yashi@gmail.com'),
(144, 0, 0, 9, 'Team', 'teameuphony00@gmail.com'),
(145, 1, 117, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(146, 1, 117, 3, 'sima', 'sima@g.com'),
(147, 1, 117, 6, 'nitin', 'nitin@mnnit.ac.in'),
(148, 1, 117, 8, 'yashi', 'yashi@gmail.com'),
(149, 1, 117, 9, 'Team', 'teameuphony00@gmail.com'),
(150, 0, 118, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(151, 0, 118, 3, 'sima', 'sima@g.com'),
(152, 0, 118, 6, 'nitin', 'nitin@mnnit.ac.in'),
(153, 0, 118, 8, 'yashi', 'yashi@gmail.com'),
(154, 0, 118, 9, 'Team', 'teameuphony00@gmail.com'),
(155, 0, 119, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(156, 0, 119, 3, 'sima', 'sima@g.com'),
(157, 0, 119, 6, 'nitin', 'nitin@mnnit.ac.in'),
(158, 0, 119, 8, 'yashi', 'yashi@gmail.com'),
(159, 0, 119, 9, 'Team', 'teameuphony00@gmail.com'),
(160, 0, 125, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(161, 0, 125, 3, 'sima', 'sima@g.com'),
(162, 0, 125, 6, 'nitin', 'nitin@mnnit.ac.in'),
(163, 0, 125, 8, 'yashi', 'yashi@gmail.com'),
(164, 0, 125, 9, 'Team', 'teameuphony00@gmail.com'),
(165, 0, 126, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(166, 0, 126, 3, 'sima', 'sima@g.com'),
(167, 0, 126, 6, 'nitin', 'nitin@mnnit.ac.in'),
(168, 0, 126, 8, 'yashi', 'yashi@gmail.com'),
(169, 0, 126, 9, 'Team', 'teameuphony00@gmail.com'),
(170, 0, 127, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(171, 0, 127, 3, 'sima', 'sima@g.com'),
(172, 0, 127, 6, 'nitin', 'nitin@mnnit.ac.in'),
(173, 0, 127, 8, 'yashi', 'yashi@gmail.com'),
(174, 0, 127, 9, 'Team', 'teameuphony00@gmail.com'),
(175, 0, 128, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(176, 0, 128, 3, 'sima', 'sima@g.com'),
(177, 0, 128, 6, 'nitin', 'nitin@mnnit.ac.in'),
(178, 0, 128, 8, 'yashi', 'yashi@gmail.com'),
(179, 0, 128, 9, 'Team', 'teameuphony00@gmail.com'),
(180, 0, 129, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(181, 0, 129, 3, 'sima', 'sima@g.com'),
(182, 0, 129, 6, 'nitin', 'nitin@mnnit.ac.in'),
(183, 0, 129, 8, 'yashi', 'yashi@gmail.com'),
(184, 0, 129, 9, 'Team', 'teameuphony00@gmail.com'),
(185, 0, 130, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(186, 0, 130, 3, 'sima', 'sima@g.com'),
(187, 0, 130, 6, 'nitin', 'nitin@mnnit.ac.in'),
(188, 0, 130, 8, 'yashi', 'yashi@gmail.com'),
(189, 0, 130, 9, 'Team', 'teameuphony00@gmail.com'),
(190, 0, 131, 1, 'TANISHA', 'tanishakumb@gmail.com'),
(191, 0, 131, 3, 'sima', 'sima@g.com'),
(192, 0, 131, 6, 'nitin', 'nitin@mnnit.ac.in'),
(193, 0, 131, 8, 'yashi', 'yashi@gmail.com'),
(194, 0, 131, 9, 'Team', 'teameuphony00@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `notifid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `eventid` int(11) NOT NULL,
  `eventname` varchar(1000) NOT NULL,
  `eventvenue` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notif`
--

INSERT INTO `notif` (`notifid`, `userid`, `eventid`, `eventname`, `eventvenue`, `status`) VALUES
(13, 6, 113, 'lets try', 'E', 1),
(14, 6, 114, 'please', 'A', 1),
(15, 6, 115, 's4drtfygui', 'E', 1),
(16, 7, 116, 'hey', 'A', 1),
(17, 1, 128, 'rxtcyvguhj', 'MP HALL', 0),
(18, 1, 129, 'xctvybunim', 'E', 0),
(19, 1, 130, 'xcguhijokl', 'E', 0),
(20, 1, 131, 'hey', 'E', 0);

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

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`requestid`, `creatorid`, `userid`, `eventid`, `reqstatus`) VALUES
(9, 7, 6, 114, 1),
(12, 7, 9, 114, 1),
(13, 7, 9, 115, 2),
(14, 6, 9, 116, 0),
(15, 6, 7, 116, 0);

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
(9, 'Team', 'teameuphony00@gmail.com', 'ac848fa228f49ba2b8a5fbd76596817d', '', '', '0');

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
(1, 'MP HALL', '2019-04-13 14:00:00.000000', '2019-04-13 15:00:00.000000', 'MNNIT CAMPUS,TELLIARGANJ', 'Uploads/venues/1.jpg'),
(4, 'athletic ground', '2019-04-14 17:00:00.000000', '2019-04-15 18:00:00.000000', 'MNNIT CAMPUS,TELLIARGANJ', 'Uploads/venues/4.jpg'),
(7, 'gymkhana ground', '2019-04-14 19:00:00.000000', '2019-04-15 20:00:00.000000', 'MNNIT CAMPUS,TELLIARGANJ', 'Uploads/venues/7.jpg'),
(24, 'athletic ground', '2019-04-08 14:15:00.000000', '2019-04-08 15:15:00.000000', 'MNNIT CAMPUS,TELLIARGANJ', 'Uploads/venues/24.jpg');

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
  MODIFY `eventid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `invitation`
--
ALTER TABLE `invitation`
  MODIFY `inviteid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `notif`
--
ALTER TABLE `notif`
  MODIFY `notifid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `requestid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
