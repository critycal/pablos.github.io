-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 16, 2020 at 09:06 PM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pablo`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `link`) VALUES
(1, 'hola', 'hola');

-- --------------------------------------------------------

--
-- Table structure for table `images_hd`
--

CREATE TABLE `images_hd` (
  `ID_KEY` int(11) NOT NULL,
  `ID` varchar(24) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images_hd`
--

INSERT INTO `images_hd` (`ID_KEY`, `ID`, `Name`) VALUES
(2, 'Alba.jpg', 'Alba'),
(3, 'Autorretratoamarillo.jpg', 'Autorretrato Amarillo'),
(4, 'AutorretratoconT.jpg', 'Autorretrato Con T'),
(5, 'Autorretratoserie2.jpg', 'Autorretrato Serie 2'),
(6, 'Autorretratoserie4.jpg', 'Autorretrato Serie 4'),
(7, 'ClotihildevonDerp.jpg', 'Clothilde Devon Derp'),
(9, 'Gordaposando.jpg', 'Gorda Posando'),
(10, 'Gordo.jpg', 'Gordo'),
(11, 'Laura1.jpg', 'Laura 1'),
(12, 'Laura2.jpg', 'Laura 2'),
(13, 'Laura3.jpg', 'Laura 3'),
(14, 'Laura4.jpg', 'Laura 4'),
(15, 'Laura5.jpg', 'Laura 5'),
(16, 'Luzia.jpg', 'Luzia'),
(17, 'Maite.jpg', 'Maite'),
(18, 'Marciano.jpg', 'Marciano'),
(19, 'Marina,ciudad.jpg', 'Marina, ciudad'),
(20, 'Marina.jpg', 'Marina'),
(21, 'Ninadesnuda.jpg', 'Niña desnuda'),
(22, 'Nina.jpg', 'Niña'),
(23, 'Paulaserie1.jpg', 'Paula Serie 1'),
(24, 'Paulaserie3.jpg', 'Paula Serie 3'),
(25, 'Vendimia.jpg', 'Vendimia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images_hd`
--
ALTER TABLE `images_hd`
  ADD PRIMARY KEY (`ID_KEY`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images_hd`
--
ALTER TABLE `images_hd`
  MODIFY `ID_KEY` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
