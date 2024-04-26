-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 09:25 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbaicontest`
--

-- --------------------------------------------------------

--
-- Table structure for table `tab_admin`
--

CREATE TABLE `tab_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `lastlogin` datetime NOT NULL,
  `jmlogin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_admin`
--

INSERT INTO `tab_admin` (`id`, `username`, `password`, `lastlogin`, `jmlogin`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', '2024-04-26 14:22:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tab_setting`
--

CREATE TABLE `tab_setting` (
  `id` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `footer` text NOT NULL,
  `running` text NOT NULL,
  `logo` text NOT NULL,
  `pavicon` text NOT NULL,
  `isaktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_setting`
--

INSERT INTO `tab_setting` (`id`, `judul`, `footer`, `running`, `logo`, `pavicon`, `isaktif`) VALUES
(1, 'App Users Data', 'Nazhif Alfarizi', '', 'main-logos.png', 'favicon.ico', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tab_user`
--

CREATE TABLE `tab_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `nik` varchar(20) NOT NULL,
  `gender` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_admin`
--
ALTER TABLE `tab_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_setting`
--
ALTER TABLE `tab_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_user`
--
ALTER TABLE `tab_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tab_admin`
--
ALTER TABLE `tab_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tab_setting`
--
ALTER TABLE `tab_setting`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tab_user`
--
ALTER TABLE `tab_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
