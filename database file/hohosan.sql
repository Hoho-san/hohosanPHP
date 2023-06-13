-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 10:00 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hohosan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_certificate`
--

CREATE TABLE `tbl_certificate` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_certificate`
--

INSERT INTO `tbl_certificate` (`id`, `title`, `photo`) VALUES
(7, 'Analyze Data with Python', 'certificate-7.jpg'),
(11, 'Build Python Web Apps with Flask', 'certificate-11.jpg'),
(12, 'Learn Basic Statistics with Python', 'certificate-12.jpg'),
(13, 'Principles of Web Development and Introduction to HTML', 'certificate-13.jpg'),
(14, 'Programming for Beginners Using Python', 'certificate-14.jpg'),
(15, 'Using HTML and CSS to Design a Website', 'certificate-15.jpg'),
(16, 'Visualize Data with Python', 'certificate-16.jpg'),
(17, 'Programming for Intermediate Users Using Python', 'certificate-17.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `social_id` int(11) NOT NULL,
  `social_name` varchar(30) NOT NULL,
  `social_url` varchar(255) NOT NULL,
  `social_icon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`social_id`, `social_name`, `social_url`, `social_icon`) VALUES
(1, 'Facebook', 'https://www.facebook.com/hohosan24', 'fa-brands fa-facebook-f'),
(2, 'Twitter', 'https://twitter.com/Hoho_san24', 'fa-brands fa-twitter'),
(3, 'LinkedIn', 'https://www.linkedin.com/in/jojojavier/', 'fa-brands fa-linkedin'),
(6, 'YouTube', 'https://youtube.com/@hoho-san1629', 'fa-brands fa-youtube'),
(7, 'Instagram', 'https://www.instagram.com/hoho.san_/', 'fa-brands fa-instagram'),
(17, 'Github', 'https://github.com/Hoho-san', 'fa-brands fa-github');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscriber`
--

CREATE TABLE `tbl_subscriber` (
  `subs_id` int(11) NOT NULL,
  `subs_email` varchar(255) NOT NULL,
  `subs_date` varchar(100) NOT NULL,
  `subs_date_time` varchar(100) NOT NULL,
  `subs_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_subscriber`
--

INSERT INTO `tbl_subscriber` (`subs_id`, `subs_email`, `subs_date`, `subs_date_time`, `subs_hash`) VALUES
(18, 'dgsg', '2023-06-11', '2023-06-11 18:25:20', '2d357063d347f4af2356ce034b699f67'),
(19, 'gdsg', '2023-06-11', '2023-06-11 19:14:02', 'aff46aa12051cf798e946af190d0aa08'),
(20, 'https://www.facebook.com/fasfas', '2023-06-12', '2023-06-12 20:34:12', '27f1ead40a83220ddd47d8ded109c736'),
(21, 'xfgzxfg', '2023-06-12', '2023-06-12 15:36:23', '4fd4ee60605bb33064f9cfb6d58d01bb'),
(22, 'gsdgsdg', '2023-06-12', '2023-06-12 15:36:49', '1a213cb146a346d91e6494e62ce8a2c6'),
(23, 'fasf', '2023-06-12', '2023-06-12 15:59:50', '71615434dbe4c02c892cd678e66e9cc1'),
(24, 'asfasf', '2023-06-13', '2023-06-13 07:12:49', '6d97c36585bbdb68bbbfbbd7f7fd8c9e'),
(25, 'ssss', '2023-06-13', '2023-06-13 07:12:53', '64ef809febc5759fa2e2419bef9b15e7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_certificate`
--
ALTER TABLE `tbl_certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  ADD PRIMARY KEY (`subs_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_certificate`
--
ALTER TABLE `tbl_certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  MODIFY `subs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
