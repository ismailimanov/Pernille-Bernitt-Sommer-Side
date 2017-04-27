-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 27, 2017 at 02:12 PM
-- Server version: 10.0.29-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imanovdk_pbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `post` text NOT NULL,
  `imgUrl` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `date`, `post`, `imgUrl`) VALUES
(1, 'My First Blog', '11/16/16', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius adipisci, sed libero. Iste asperiores suscipit, consequatur debitis animi impedit numquam facilis iusto porro labo', '1.png'),
(2, 'My Second Blog', '11/17/16', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius adipisci, sed libero. Iste asperiores suscipit, consequatur debitis animi impedit numquam facilis iusto porro labo', '2.png'),
(3, 'My Third Blog', '11/17/16', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius adipisci, sed libero. Iste asperiores suscipit, consequatur debitis animi impedit numquam facilis iusto porro labo', '3.png'),
(4, 'My Fourth Blog', '11/17/16', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius adipisci, sed libero. Iste asperiores suscipit, consequatur debitis animi impedit numquam facilis iusto porro labo', '4.png'),
(5, 'My Fifth Blog', '11/17/16', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius adipisci, sed libero. Iste asperiores suscipit, consequatur debitis animi impedit numquam facilis iusto porro labo', '5.png');

-- --------------------------------------------------------

--
-- Table structure for table `brugere`
--

CREATE TABLE `brugere` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kodeord` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brugere`
--

INSERT INTO `brugere` (`id`, `email`, `kodeord`) VALUES
(1, 'ismail@imanov.dk', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `imgUrl` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `imgUrl`, `date`) VALUES
(1, 'Test billede #1', '1.jpg', '16/11/16'),
(2, 'Test billede #2', '2.jpg', '16/11/16'),
(3, 'Test billede #3', '3.jpg', '16/11/16'),
(4, 'Test billede #4', '4.jpg', '16/11/16'),
(5, 'Test billede #5', '5.jpg', '16/11/16'),
(6, 'Test billede #6', '6.jpg', '16/11/16'),
(7, 'Test billede #7', '7.jpg', '16/11/16'),
(8, 'Test billede #8', '8.jpg', '16/11/16');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `date`) VALUES
(1, 'ismail@imanov.dk', '16/11/16'),
(2, 'pernille-jaes@hotmail.com', '18/11/16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brugere`
--
ALTER TABLE `brugere`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `brugere`
--
ALTER TABLE `brugere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
