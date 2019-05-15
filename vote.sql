-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 15, 2019 at 10:22 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `display`
--

CREATE TABLE `display` (
  `display_id` int(11) NOT NULL,
  `display_name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `display_user_id` int(11) NOT NULL,
  `display_img` varchar(100) CHARACTER SET utf8 NOT NULL,
  `display_vote` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `display`
--

INSERT INTO `display` (`display_id`, `display_name`, `display_user_id`, `display_img`, `display_vote`) VALUES
(1, 'yon', 2, 'images/049432be4152b9af739bf7687c7bf5ee.jpg', 20),
(2, 'Emilia', 2, 'images/87cd6767a5da479b844d7bcda84f8cfb.jpg', 10),
(3, 'MINA', 2, 'images/fullsizeoutput_aab.jpeg', 9),
(4, 'Japanese', 2, 'images/9404daa046539c07873bb8b92fd71fe2.jpg', 23),
(5, 'MINA_gif', 2, 'images/original.gif', 3),
(6, 'Korean', 2, 'images/d7249ad7055d2bf2ec1d640d753e3a15.jpg', 2),
(7, 'MInami', 2, 'images/IMG_6211.JPG', 1),
(8, 'Kasumi', 2, 'images/IMG_3820.JPG', 22),
(9, 'Swidish', 2, 'images/IMG_1884.JPG', 0),
(10, 'Myoui', 2, 'images/IMG_3115.JPG', 0),
(11, 'Jonyon', 2, 'images/IMG_2265.JPG', 0),
(12, 'MINA MYOUI', 2, 'images/IMG_3081.JPG', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `user_status` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_status`) VALUES
(1, 'Neho', 'neho@icloud.com', 'aaaa', 'A'),
(2, 'yuno', 'azuchi@icloud.com', '81dc9bdb52d04dc20036dbd8313ed055', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `display`
--
ALTER TABLE `display`
  ADD PRIMARY KEY (`display_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `display`
--
ALTER TABLE `display`
  MODIFY `display_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
