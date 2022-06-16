-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 05:02 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `tablecovid`
--

CREATE TABLE `tablecovid` (
  `id` int(11) NOT NULL,
  `Nama` varchar(150) NOT NULL,
  `Umur` varchar(150) NOT NULL,
  `Hasil` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tablecovid`
--

INSERT INTO `tablecovid` (`id`, `Nama`, `Umur`, `Hasil`) VALUES
(10, 'Udin', '9', 'PDP'),
(11, 'Jihad', '21', 'PDP');

-- --------------------------------------------------------

--
-- Table structure for table `tableuser`
--

CREATE TABLE `tableuser` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tableuser`
--

INSERT INTO `tableuser` (`id`, `nama`, `password`, `telp`, `alamat`) VALUES
(9, 'admin', 'admin', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tablecovid`
--
ALTER TABLE `tablecovid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tableuser`
--
ALTER TABLE `tableuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tablecovid`
--
ALTER TABLE `tablecovid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tableuser`
--
ALTER TABLE `tableuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
