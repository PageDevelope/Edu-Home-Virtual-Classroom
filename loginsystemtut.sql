-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 08:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystemtut`
--

-- --------------------------------------------------------

--
-- Table structure for table `imgupload`
--

CREATE TABLE `imgupload` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imgupload`
--

INSERT INTO `imgupload` (`id`, `userid`, `status`) VALUES
(1, 1, 0),
(2, 2, 0),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'Abhinav', 'abhinavjha.india@gmail.com', '$2y$10$er8Kw1XRhEZjF2JzKUaKkeeSFuno1MFK75SA6jJdvqEBky2WtN5VS'),
(2, 'Anuj', 'abhinav1@gmail.com', '$2y$10$k.hEjGtXeI8jr.upXrCM5.vqpcTEr6zBQLZNANUNyw/Y1TnKApynS'),
(3, 'NehaSingh', 'abhinavjha@gmail.com', '$2y$10$kSvA0wZC37bcSNIbv0/pMe59CfKYEDRARFotQ8p8h57w558HNwPXu'),
(4, 'NehaBisht', 'nehab@gmail.com', '$2y$10$0axffOaayuw1jI0Zd1MfgekLSSb7uBLyQZB/TQLVglDQV8RwA.EA6'),
(5, 'Demo', 'demo@gmail.com', '$2y$10$ifiLv0SOPJUZf3LusNjB8OVkUXcCKYoK5tGUTwQWEusdUmc6zsQ96'),
(6, 'demo1', 'demo1@gmail.com', '$2y$10$l0d6gj41ALvhGZnJXtwD8ew37myFtjurkMiLUvaRxfaLdRoIn26eC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imgupload`
--
ALTER TABLE `imgupload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imgupload`
--
ALTER TABLE `imgupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
