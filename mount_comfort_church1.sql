-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2019 at 03:20 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mount_comfort_church1`
--

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE `board` (
  `bID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `position` varchar(50) NOT NULL,
  `D_E` varchar(1) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`bID`, `name`, `position`, `D_E`, `photo`, `contact`) VALUES
(1, 'Tom Dykes 44', 'Pastor', 'P', 'default.png', '@gmail'),
(2, 'Art Hesse', 'Chairman of the Board', 'E', 'Art_Hessee.jpg', ''),
(3, 'Mike Hall', 'Elder', 'D', 'Mike_Hall.jpg', '@gmail'),
(4, 'Mark Powell', 'Elder', 'E', 'Mark_Powell.jpg', ''),
(5, 'Ken Rogers', 'Elder', 'E', 'Kenny_Rogers.jpg', ''),
(6, 'Brent Gilstrap', 'Chairman of Deacons', 'D', 'Brent_ Gilstrap.jpg', ''),
(7, 'Roger Leimkuehler', 'Deacon', 'D', 'Roger.jpg', ''),
(8, 'David Reed', 'Deacon', 'D', 'Dave_ Reed.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`username`, `password`, `userID`) VALUES
('mtAdmin139', '5566', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_ID` int(11) NOT NULL,
  `types_ID` int(11) NOT NULL,
  `post_info` varchar(255) NOT NULL,
  `image_ID` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `date_event` varchar(255) NOT NULL,
  `date_post` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_ID`, `types_ID`, `post_info`, `image_ID`, `link`, `date_event`, `date_post`) VALUES
(29, 1, 'k;', 'sp b.jpg', 'https://www.cardkingdom.com/', '05/03/211', '08-27-2019 '),
(31, 4, 'k;', '218916482-cool-video-game-wallpapers.jpg', 'https://www.cardkingdom.com/', '05/03/211', '08-30-2019 '),
(32, 2, 'k;', 'mtcmft_web_ads_1.jpg', 'https://www.cardkingdom.com/', '07/21/2019', '08-30-2019 '),
(33, 1, 'k;', 'africa_trip.jpg', 'https://www.cardkingdom.com/', '05/03/211', '08-30-2019');

-- --------------------------------------------------------

--
-- Table structure for table `post_type`
--

CREATE TABLE `post_type` (
  `types_ID` int(11) NOT NULL,
  `typename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_type`
--

INSERT INTO `post_type` (`types_ID`, `typename`) VALUES
(1, 'Mens'),
(2, 'Womens'),
(3, 'Youth'),
(4, 'Worship'),
(5, 'Misc');

-- --------------------------------------------------------

--
-- Table structure for table `sermons`
--

CREATE TABLE `sermons` (
  `serID` int(11) NOT NULL,
  `video_link` varchar(255) NOT NULL,
  `Summary` varchar(255) NOT NULL,
  `date_sermon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sermons`
--

INSERT INTO `sermons` (`serID`, `video_link`, `Summary`, `date_sermon`) VALUES
(1, 'https://www.youtube.com/embed/1SYE38mc8g8', 'Bible Verse  ', '4/21/2108');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`bID`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_ID`);

--
-- Indexes for table `post_type`
--
ALTER TABLE `post_type`
  ADD PRIMARY KEY (`types_ID`);

--
-- Indexes for table `sermons`
--
ALTER TABLE `sermons`
  ADD PRIMARY KEY (`serID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `board`
--
ALTER TABLE `board`
  MODIFY `bID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `post_type`
--
ALTER TABLE `post_type`
  MODIFY `types_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sermons`
--
ALTER TABLE `sermons`
  MODIFY `serID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
