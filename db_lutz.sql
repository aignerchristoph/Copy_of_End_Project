-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 03, 2019 at 01:37 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lutz`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categ_id` int(11) NOT NULL,
  `categ_name` varchar(15) DEFAULT NULL,
  `categ_image` varchar(255) DEFAULT NULL,
  `categ_title` varchar(55) NOT NULL,
  `categ_link` varchar(55) DEFAULT NULL,
  `categ_css_class` enum('inspo-landing-big','inspo-landing-small') DEFAULT NULL,
  `categ_status` enum('display','hidden') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categ_id`, `categ_name`, `categ_image`, `categ_title`, `categ_link`, `categ_css_class`, `categ_status`) VALUES
(1, 'hall', 'inspo_img/test-landscape.jpg', 'Enter the flat', 'hall.php', 'inspo-landing-big', 'display'),
(2, 'living', 'inspo_img/test-portrait.jpg', 'Living room', 'living.php', 'inspo-landing-small', 'display'),
(3, 'bedroom', 'inspo_img/test-portrait.jpg', 'Bedroom', 'bedroom.php', 'inspo-landing-small', 'display'),
(4, 'kitchen', 'inspo_img/test-portrait.jpg', 'Kitchen_stuff', 'kitchen.php', 'inspo-landing-small', 'display'),
(5, 'dining', 'inspo_img/test-portrait.jpg', 'Dining', 'dining.php', 'inspo-landing-small', 'display'),
(6, 'bath', 'inspo_img/test-landscape.jpg', 'Bathroom', 'bath.php', 'inspo-landing-big', 'display'),
(7, 'garden', 'inspo_img/test-landscape.jpg', 'Garden ideas', 'garden.php', 'inspo-landing-big', 'display'),
(8, 'study', 'inspo_img/test-portrait.jpg', 'Work and learn', 'study.php', 'inspo-landing-small', 'display'),
(9, 'children', 'inspo_img/test-portrait.jpg', 'Kid\'s room', 'children.php', 'inspo-landing-small', 'display');

-- --------------------------------------------------------

--
-- Table structure for table `inspirations`
--

CREATE TABLE `inspirations` (
  `inspirationID` int(11) NOT NULL,
  `inspo_image` varchar(255) DEFAULT NULL,
  `fk_categ_name` varchar(15) DEFAULT NULL,
  `inspo_status` enum('display','hidden') NOT NULL DEFAULT 'hidden'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspirations`
--

INSERT INTO `inspirations` (`inspirationID`, `inspo_image`, `fk_categ_name`, `inspo_status`) VALUES
(1, 'img/hall.jpg', 'hall', 'display'),
(2, 'img/living.jpg', 'living', 'display'),
(3, 'img/bedroom.jpg', 'bedroom', 'display'),
(4, 'img/kitchen.jpg', 'kitchen', 'display'),
(5, 'img/dining.jpg', 'dining', 'display'),
(6, 'img/bath.jpg', 'bath', 'display'),
(7, 'img/garden.jpg', 'garden', 'display'),
(8, 'img/study.jpg', 'study', 'display'),
(9, 'img/children.jpg', 'children', 'display'),
(10, 'img/kitchen2.jpg', 'kitchen', 'display');

-- --------------------------------------------------------

--
-- Table structure for table `pins`
--

CREATE TABLE `pins` (
  `pin_id` int(11) NOT NULL,
  `fk_userid` int(11) DEFAULT NULL,
  `fk_inspirationID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pins`
--

INSERT INTO `pins` (`pin_id`, `fk_userid`, `fk_inspirationID`) VALUES
(1, 1000, 1),
(2, 1000, 4),
(3, 1001, 4),
(4, 1002, 3),
(5, 1001, 8),
(6, 1002, 4),
(7, 1001, 7),
(8, 1002, 1),
(9, 1002, 5),
(10, 1002, 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `userpriv` enum('user','admin') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `cardholder` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cardnumber` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cardmonth` int(11) DEFAULT NULL,
  `cardyear` int(11) DEFAULT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `email`, `pass`, `dob`, `userpriv`, `cardholder`, `cardnumber`, `cardmonth`, `cardyear`, `street`, `zip`, `city`, `country`, `phone`, `isactive`) VALUES
(1000, 'Valeria', 'Nazarova', 'alira.vn@gmail.com', 'tba', '1985-07-31', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(1001, 'Tina', 'Dakic', 'tina@ex.org', 'tba', '1986-06-25', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(1002, 'Anja', 'Kuhar', 'anja@ex.org', 'tba', '1988-01-12', 'user', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categ_id`),
  ADD UNIQUE KEY `categ_name` (`categ_name`);

--
-- Indexes for table `inspirations`
--
ALTER TABLE `inspirations`
  ADD PRIMARY KEY (`inspirationID`),
  ADD KEY `fk_categ_name` (`fk_categ_name`);

--
-- Indexes for table `pins`
--
ALTER TABLE `pins`
  ADD PRIMARY KEY (`pin_id`),
  ADD KEY `fk_userid` (`fk_userid`),
  ADD KEY `fk_inspirationID` (`fk_inspirationID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categ_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `inspirations`
--
ALTER TABLE `inspirations`
  MODIFY `inspirationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pins`
--
ALTER TABLE `pins`
  MODIFY `pin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `inspirations`
--
ALTER TABLE `inspirations`
  ADD CONSTRAINT `inspirations_ibfk_1` FOREIGN KEY (`fk_categ_name`) REFERENCES `categories` (`categ_name`);

--
-- Constraints for table `pins`
--
ALTER TABLE `pins`
  ADD CONSTRAINT `pins_ibfk_1` FOREIGN KEY (`fk_userid`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `pins_ibfk_2` FOREIGN KEY (`fk_inspirationID`) REFERENCES `inspirations` (`inspirationID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
