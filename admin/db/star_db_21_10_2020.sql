    -- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 21, 2020 at 03:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `star_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(10) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_type` int(1) NOT NULL,
  `bhk_or_sqft` int(10) NOT NULL,
  `project_status` int(1) NOT NULL,
  `img_link` varchar(1000) DEFAULT NULL,
  `pdf_link` varchar(1000) DEFAULT NULL,
  `sitemap_link` varchar(255) NOT NULL,
  `youtube_link` varchar(1000) NOT NULL,
  `anamatics` varchar(10000) NOT NULL,
  `address_line_1` varchar(255) DEFAULT NULL,
  `address_line_2` varchar(255) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `pin_code` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `project_name`, `project_type`, `bhk_or_sqft`, `project_status`, `img_link`, `pdf_link`, `sitemap_link`, `youtube_link`, `anamatics`, `address_line_1`, `address_line_2`, `district`, `state`, `pin_code`) VALUES
(2, 'home 1', 1, 0, 1, '1Ppdhcu6JOoWJem4RHPsrEGlFiA9EowQY', 'https://drive.google.com/file/d/13MKVG7aB6mOM7DIiZKlBliOHp4d3KiZj/view?usp=sharing', '', '', '', 'main road', 'Anna nagar', '', '', ''),
(3, 'plot 1', 2, 0, 2, '14UEEUis9q0UByJvGuJJb5gKNbKYJoJYm', '', '', '', '', '', '', '', '', ''),
(4, 'home 2', 1, 0, 2, '16Dzyyxi2J0xMJ8hRRTpD_vDubo2dLOBM', 'https://drive.google.com/file/d/13MKVG7aB6mOM7DIiZKlBliOHp4d3KiZj/view?usp=sharing', '16Dzyyxi2J0xMJ8hRRTpD_vDubo2dLOBM', 'zRhwbGP0RI0', '<p><label class=\"fs-24 color-444 AvenirLTStdHeavy d-block m-0 text-uppercase\">Salient Features</label></p>\r\n<ul class=\"right\">\r\n<li><span class=\"label\">Stilt + 4 structure</span></li>\r\n<li><span class=\"label\">16 sea facing 3 and 4 BHK premium apartments in Thiruvanmiyur</span></li>\r\n<li>Best sea view</li>\r\n<li>High-end Roca/Kohler fittings</li>\r\n<li><span class=\"label\">Spread over 8.5 grounds</span></li>\r\n<li>Contemporary new age architecture</li>\r\n<li>24 x 7 power backup</li>\r\n<li>Spaciously designed living spaces</li>\r\n<li>Conceived to provide sea views and abundant ventilation</li>\r\n</ul>', '', 'Simmakkal', '', '', ''),
(5, 'plot 2', 2, 0, 1, '1togwmg-CM4zlWDf9EzIPOOPHk9Claw41', '', '', '', '', '', '', '', '', ''),
(6, 'home 3', 1, 2, 1, '14UEEUis9q0UByJvGuJJb5gKNbKYJoJYm', 'https://drive.google.com/file/d/13MKVG7aB6mOM7DIiZKlBliOHp4d3KiZj/view?usp=sharing', '14UEEUis9q0UByJvGuJJb5gKNbKYJoJYm', 'zRhwbGP0RI0', '<ul class=\"page-list g12-xs g9-md g3-md-offset g6-xl g3-xl-offset\">\r\n<li class=\"page-list__item\">\r\n<h2 class=\"page-list__title f5 cl-orange mb16\"><a title=\"Hairy Ipsum\" href=\"http://hairylipsum.com/\" target=\"_blank\" rel=\"noopener\">HAIRY IPSUM</a></h2>\r\n<p class=\"page-list__description mt0\">Boost your project\'s manliness by 100% touts the Hairy Lipsum generator. Give your project the moustache it deserves with some &ldquo;handsomely rugged&rdquo; lorem ipsum.</p>\r\n</li>\r\n<li class=\"page-list__item\">\r\n<h2 class=\"page-list__title f5 cl-orange mb16\"><a title=\"PokeIpsum\" href=\"http://nyarth.net/ipsum\" target=\"_blank\" rel=\"noopener\">POKEIPSUM</a></h2>\r\n<p class=\"page-list__description mt0\">Catch them all off guard with a Pok&eacute;mon flavored filler text generator, fortifying the classic lorem ipsum with favorites like Bulbasaur, Squirtle and Pikachu</p>\r\n</li>\r\n</ul>', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'c3Rhcg==');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nam` (`project_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userName` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
