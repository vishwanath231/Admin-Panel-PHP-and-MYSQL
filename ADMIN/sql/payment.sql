-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2021 at 11:31 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `cardHolder` varchar(1000) NOT NULL,
  `category` varchar(1000) NOT NULL,
  `amount` varchar(1000) NOT NULL,
  `cardNumber` varchar(1000) NOT NULL,
  `expDate` varchar(1000) NOT NULL,
  `expYear` varchar(1000) NOT NULL,
  `cvv` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `cardHolder`, `category`, `amount`, `cardNumber`, `expDate`, `expYear`, `cvv`, `date`) VALUES
(10, 'vishwanath', 'Professional', '$299', '5555 5555 5555 5555', '12', '25', '563', '2021-02-06 16:48:47'),
(12, 'Maeve', 'Professional', '$299', '3655 5555 5555 5555', '34', '34', '464', '2021-02-07 04:13:35'),
(14, 'yaseer', 'Basic', '$99', '4566 6666 6666 6666', '12', '45', '456', '2021-02-07 19:37:14'),
(15, 'venkat', 'Standard', '$199', '4545 4555 5555 5555', '23', '78', '234', '2021-02-07 20:16:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
