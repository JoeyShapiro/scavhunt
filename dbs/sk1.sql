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
-- 1, 7, 13
INSERT INTO `questions` (`id`, `Question`, `a1`, `a2`, `a3`, `a4`, `ac`) VALUES
(1, 'Encryption protects your data from ____', 'Sniffing', 'DDos', 'Social Engineering', 'Ransomware', 1),
(2, 'Bob built the robot, and he wrote several millions of lines of code to make it move forward and backward. Several hours later robot has a problem, but he could not find the problem from the code due to too many lines of code. Which GenCyer concept didn’t Bob think of when he wrote a code?', 'Keep it Simple', 'Availablility', 'Integrity', 'Defense in Depth', 1),
(3, 'Bob has a friend who is very nice and highly knowledgeable. One day, his friend gives Bob a USB and asks him several times to upload an unknown small file onto Bob`s computer. What would you recommend Bob?', 'Why not. Upload them into his computer.', 'No, Bob should ignore it.', '', '' 2);
