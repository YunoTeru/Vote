-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 24, 2019 at 09:50 AM
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
(2, 'Emillia', 5, 'images/87cd6767a5da479b844d7bcda84f8cfb.jpg', 12),
(4, 'Japanese', 7, 'images/9404daa046539c07873bb8b92fd71fe2.jpg', 25),
(5, 'MINA_gif', 8, 'images/original.gif', 3),
(6, 'Korean', 9, 'images/d7249ad7055d2bf2ec1d640d753e3a15.jpg', 4),
(7, 'MInami', 10, 'images/IMG_6211.JPG', 1),
(8, 'Kasumi', 11, 'images/IMG_3820.JPG', 22),
(12, 'MINA MYOUI', 2, 'images/IMG_3081.JPG', 28),
(15, 'BLACK', 1, 'images/neho.jpeg', 196),
(17, 'Ugaki', 4, 'images/7e94a039b56ffb369682ce9a7f585c3f.jpg', 5),
(19, 'Woman', 3, 'images/be2419fc43a884f2b8e23e66db61d43f.jpg', 24),
(20, 'Cheyon', 6, 'images/4c37b7f8eb2cedc231be22ea19d98779.jpg', 7),
(21, 'MOMO', 1, 'images/2334b7a6ebac94f884e688deeb70c30b.jpg', 5),
(22, 'JONYON', 4, 'images/1b01b92213e255768bd31a8d3d11d22e.jpg', 20),
(23, 'SANA', 4, 'images/e4a104c964ba0679bbc36c398e026237.jpg', 15),
(24, 'Tyuyu', 1, 'images/0c0ee49d097fd009c9232804147f4d74.jpg', 0),
(25, 'Jisoo', 12, 'images/e460481ad4a4091cedb91ffec228ccce.jpg', 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `display`
--
ALTER TABLE `display`
  ADD PRIMARY KEY (`display_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `display`
--
ALTER TABLE `display`
  MODIFY `display_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
