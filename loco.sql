-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 01:17 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loco`
--

-- --------------------------------------------------------

--
-- Table structure for table `ticket_form`
--

CREATE TABLE `ticket_form` (
  `trip_type` varchar(10) NOT NULL,
  `flying_from` varchar(255) NOT NULL,
  `flying_to` varchar(255) NOT NULL,
  `departing` date NOT NULL,
  `returning` date NOT NULL,
  `Adults` int(10) NOT NULL,
  `Child` int(10) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_form`
--

INSERT INTO `ticket_form` (`trip_type`, `flying_from`, `flying_to`, `departing`, `returning`, `Adults`, `Child`, `Class`, `id`) VALUES
('Roundtrip', 'Abu Dhabi', 'Dhaka', '2019-04-17', '2019-04-09', 1, 2, 'Master', 1),
('Roundtrip', 'Abu Dhabi', 'Dhaka', '2019-04-17', '2019-04-09', 1, 2, 'Master', 2),
('Roundtrip', 'Abu Dhabi', 'Dhaka', '2019-04-17', '2019-04-09', 1, 2, 'Master', 3),
('Roundtrip', 'Abu Dhabi', 'Dhaka', '2019-04-17', '2019-04-09', 1, 2, 'Master', 4),
('Roundtrip', 'Abu Dhabi', 'Dhaka', '2019-04-17', '2019-04-09', 1, 2, 'Master', 5),
('Roundtrip', 'Abu Dhabi', 'Dhaka', '2019-04-17', '2019-04-09', 1, 2, 'Master', 6),
('Roundtrip', 'Abu Dhabi', 'Dhaka', '2019-04-17', '2019-04-09', 1, 2, 'Master', 7),
('Roundtrip', 'Abu Dhabi', 'Dhaka', '2019-04-17', '2019-04-09', 1, 2, 'Master', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(0, 'paul', 'debashish333paul@gmail.com', '202cb962ac59075b964b07152d234b70'),
(0, 'tom', 'e@p.cpm', '289dff07669d7a23de0ef88d2f7129e7'),
(0, 'abc', 'abc@gmail.com', '202cb962ac59075b964b07152d234b70'),
(0, '1520933', 'bcj@gmail.com', '202cb962ac59075b964b07152d234b70'),
(0, '123', 'abcd@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(0, '12345', '12345@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ticket_form`
--
ALTER TABLE `ticket_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ticket_form`
--
ALTER TABLE `ticket_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
