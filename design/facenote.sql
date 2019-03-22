-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 22, 2019 at 12:39 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facenote`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment_in` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `comment_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_in`, `comment_by`, `comment_content`, `Date`) VALUES
(1, '3', 'willy', 'this is comment', '2019-03-02'),
(2, '1', 'willy@gmail.com', 'this is comment 2', '2019-03-15'),
(3, '', 'test@gmail.com', '', '2019-03-15'),
(4, '', 'willy@gmail.com', '', '2019-03-15'),
(5, '1', 'test@gmail.com', 'djf', '2019-03-15'),
(6, '2', 'test@gmail.com', 'this is comment', '2019-03-15'),
(7, '0', 'test@gmail.com', 'test', '2019-03-18'),
(8, '0', 'willy@gmail.com', 'dfdf', '2019-03-18'),
(9, '5', 'willy@gmail.com', 'test', '2019-03-18'),
(10, '0', 'willy@gmail.com', 'coba', '2019-03-18'),
(11, '5', 'willy@gmail.com', 'ini testing', '2019-03-18'),
(12, '3', 'willy@gmail.com', 'ini coba', '2019-03-18'),
(13, '3', 'willy@gmail.com', 'fsdf', '2019-03-18'),
(14, '7', 'willy@gmail.com', 'test', '2019-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `writed_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `status_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `images` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `writed_by`, `status_content`, `Date`, `images`) VALUES
(0, 'willy@gmail.com', 'teeeeee', '2019-03-21', ''),
(2, 'willy', 'ini namanya konten', '2019-03-05', 'uploads/altair.png'),
(3, 'willy@gmail.com', 'ini testing', '2019-03-21', 'uploads/'),
(4, 'willy@gmail.com', 'wkjelreee', '2019-03-21', 'uploads/altair.png'),
(6, 'willy@gmail.com', 'ini testing', '2019-03-21', ''),
(7, 'test@gmail.com', 'testing', '2019-03-21', 'uploads/download.png'),
(8, '', 'ff', '2019-03-21', 'uploads/Fast_8_quad.jpg'),
(9, 'willy@gmail.com', 'ff', '2019-03-21', 'uploads/Fast_8_quad.jpg'),
(10, 'asdasda@asd.com', 'sss', '2019-03-22', 'uploads/'),
(11, 'asdasda@asd.com', 'asdasdas', '2019-03-22', 'uploads/Akame Ga Kill Mine Happy.jpg'),
(12, 'asdasda@asd.com', 'asdqwed', '2019-03-22', 'uploads/Akame Ga Kill Mine Sad.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date NOT NULL,
  `sex` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Male',
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `birthdate`, `sex`, `profile_picture`) VALUES
(1, 'willy', 'willy@gmail.com', 'ae2b1fca515949e5d54fb22b8ed95575', 'willy', 'chua', '2019-03-03', 'Male', 'uploads/altair.png'),
(2, 'test', 'test@gmail.com', 'testing', 'test', 'lalala', '2019-03-05', 'Male', 'uploads/download.png'),
(3, 'Donny', 'donny@gmail.com', 'apasaja', 'test', 'don', '2019-03-05', 'Male', 'uploads/download.png'),
(4, 'liez', 'asdasd@asd.com', '977dcb62cf37d71f0255ab9b84d419f4', 'asdas', 'asdas', '2019-03-01', 'Male', 'placeholder.jpg'),
(5, 'asdasdasd', 'asdasda@asd.com', '977dcb62cf37d71f0255ab9b84d419f4', 'asdasdsa', 'qweqwe', '2019-03-06', 'Male', 'placeholder.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
