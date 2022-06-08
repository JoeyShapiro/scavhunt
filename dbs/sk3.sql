-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Jun 07, 2022 at 02:41 PM
-- Server version: 10.7.3-MariaDB-1:10.7.3+maria~focal
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skn`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `group` varchar(128) NOT NULL,
  `question_id` int(11) NOT NULL,
  `ag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `Question` varchar(256) NOT NULL,
  `a1` varchar(256) NOT NULL,
  `a2` varchar(256) NOT NULL,
  `a3` varchar(256) NOT NULL,
  `a4` varchar(256) NOT NULL,
  `ac` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `answers_id_uindex` (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `questions_id_uindex` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Questions
--
-- 3 9 15
INSERT INTO `questions` (`id`, `Question`, `a1`, `a2`, `a3`, `a4`, `ac`) VALUES
(1, 'Which attack is related to Availabliity in GenCyber concept', 'Sniffing', 'DDoS', 'Social Engineering', 'Brute force', 2),
(2, 'Alice likes to use her laptop in her bedroom to have fun on Facebook. Recently she noticed that her Facebook profile had been changed several times for unknown reasons. She doesn`t think anything of the matter. Is it good or bad sign?', 'Good', 'Bad', '', '', 2),
(3, 'Your friend sends an electronic card (e-card) to your school email address. In order to see the card, you need to click it. What should you do?', 'It is okay since it is coming from your friend.', 'It may harm your computer. So, you should ask a person before open the attachment.', '', '', 2);
