-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 14, 2023 at 06:47 AM
-- Server version: 10.6.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u426408942_iws`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `product`, `message`, `time`) VALUES
(4, 'Sunil', 9768117875, 'sunilpadma.sitm@gmail.com', 'ORiCH Crest', 'Plz provide pricing for product                               \r\n                                ', '2023-05-22 10:09:54'),
(5, 'sunil ', 9768117875, 'sunilpadma.sitm@gmail.com', 'ORiCH Crest', 'I AM LOOKING FOR WATER PURIFIER\r\n                                ', '2023-06-10 10:08:35'),
(6, 'Rajenderrao pampati ', 8341683456, 'rajpampati@gmail.com', 'ORiCH Crest', '                                   \r\n                               Terms and conditions', '2023-07-21 00:29:09'),
(7, 'Barid Baran Mukherjee ', 8822381307, 'barid1977@gmail.com', 'ORiCH Crest', '                                   \r\n                                ', '2023-08-02 14:57:45'),
(8, 'Barid Baran Mukherjee ', 8822381307, 'barid1977@gmail.com', 'ORiCH Brio', '                                   \r\n                                ', '2023-08-02 14:59:00'),
(9, 'Barid Baran Mukherjee ', 8822381307, 'barid1977@gmail.com', 'ORiCH Brio', '                                   \r\n                                ', '2023-08-02 15:01:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
