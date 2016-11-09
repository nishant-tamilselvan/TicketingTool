-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2016 at 06:03 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventlist`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `priority` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `category`, `date`, `priority`, `subject`, `message`) VALUES
(2, 'Work', '2016-11-10 10:00:00', 'low', 'Macbook pro 2016', 'To say the new MacBook Pro is a massive improvement over the previous model would be an understatement. It''s more portable and more powerful, not to mention more enjoyable to use. But it''s tough to justify the premium for that Touch Bar, no matter how cool it is.'),
(10, 'Work', '2016-11-12 14:00:00', 'high', 'Kick-off meeting of the DFG project EXCITE about reference extraction at WeST', 'On 4th October WeST hosted the kick-off meeting of the DFG project „EXCITE – Extraction of Citations from PDF Documents“ at the University of Koblenz-Landau. The project develops algorithms for extracting references and citations from pdf full texts and matching them with bibliographic databases.'),
(11, 'Work', '2016-11-09 07:00:00', 'critical', 'Symfony framework 3', 'Symfony Framework\r\n\r\nThe leading PHP framework to create websites and web applications. Built on top of the Symfony Components.'),
(12, 'College', '2016-11-11 12:00:00', 'emergency', 'The Faculty of Computer Science from Koblenz University at the Night of Technology on 5th November', 'On Saturday, 5th November visitors of all ages can gain insight into the manifold research topics of the computer science faculty at the University of Koblenz-Landau during the Night of Technology (Nacht der Technik).'),
(13, 'Academic', '2016-11-12 08:00:00', 'low', 'web science lecture', 'please get up in the morning for the class :P');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
