-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 04:45 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketaway`
--
-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `cardHolderName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cardNumber` varchar(255) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- --------------------------------------------------------

--
-- Table structure for table `metro_info`
--

CREATE TABLE `metro_info` (
  `metro_id` int(11) NOT NULL,
  `seats` int(11) NOT NULL,
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `month_booking`
--

CREATE TABLE `month_booking` (
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ssn` bigint(20) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `source` varchar(255) CHARACTER SET utf8 NOT NULL,
  `destination` varchar(255) CHARACTER SET utf8 NOT NULL,
  `day_date` date NOT NULL,
  `passenger_num` int(11) NOT NULL,
  `months_num` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `month_booking`
--


-- --------------------------------------------------------

--
-- Table structure for table `one_day_booking`
--

CREATE TABLE `one_day_booking` (
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ssn` bigint(20) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `source` varchar(255) CHARACTER SET utf8 NOT NULL,
  `destination` varchar(255) CHARACTER SET utf8 NOT NULL,
  `day_date` date NOT NULL,
  `passenger_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paymentinfo`
--

CREATE TABLE `paymentinfo` (
  `paymentMode` int(11) NOT NULL,
  `cardHolderName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cardNumber` varchar(255) NOT NULL,
  `expiryDate` varchar(255) NOT NULL,
  `cvc` int(11) NOT NULL,
  `user_ssn` int(20) NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentinfo`
--



-- --------------------------------------------------------

--
-- Table structure for table `stations`
--

CREATE TABLE `stations` (
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `metro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL,
  `user_ssn` int(11) NOT NULL,
  `passenger_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_info`
--

CREATE TABLE `ticket_info` (
  `user_ssn` int(11) NOT NULL,
  `seats` int(11) NOT NULL,
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ssn` bigint(20) NOT NULL,
  `user_mobile` varchar(255) NOT NULL,
  `user_email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `metro_info`
--
ALTER TABLE `metro_info`
  ADD PRIMARY KEY (`metro_id`),
  ADD UNIQUE KEY `seats` (`seats`);

--
-- Indexes for table `month_booking`
--
ALTER TABLE `month_booking`
  ADD UNIQUE KEY `ssn` (`ssn`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `one_day_booking`
--
ALTER TABLE `one_day_booking`
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `ssn` (`ssn`);

--
-- Indexes for table `paymentinfo`
--
ALTER TABLE `paymentinfo`
  ADD UNIQUE KEY `card_number` (`cardNumber`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `ticket_info`
--
ALTER TABLE `ticket_info`
  ADD UNIQUE KEY `seats` (`seats`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ssn`),
  ADD UNIQUE KEY `user_mobile` (`user_mobile`),
  ADD UNIQUE KEY `user_email` (`user_email`);


  --
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD UNIQUE KEY `cardNumber` (`cardNumber`);


--
-- Constraints for dumped tables
--

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`user_ssn`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket_info`
--
ALTER TABLE `ticket_info`
  ADD CONSTRAINT `ticket_info_ibfk_1` FOREIGN KEY (`user_ssn`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;




COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
