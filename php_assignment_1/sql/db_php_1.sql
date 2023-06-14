-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 14, 2023 at 03:06 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_php_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `pet_health_cover`
--

CREATE TABLE `pet_health_cover` (
  `id` int(30) NOT NULL,
  `pet_name` varchar(50) DEFAULT NULL,
  `pet_breed` varchar(50) DEFAULT NULL,
  `pet_gender` varchar(50) DEFAULT NULL,
  `spayed_neutered` varchar(50) DEFAULT NULL,
  `pet_dob` date NOT NULL,
  `pet_weight` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pet_health_cover`
--

INSERT INTO `pet_health_cover` (`id`, `pet_name`, `pet_breed`, `pet_gender`, `spayed_neutered`, `pet_dob`, `pet_weight`) VALUES
(1, 'Max', 'Labrador Retriever', 'male', 'neutered', '2018-05-10', '21-30'),
(2, 'Bella', 'Golden Retriever', 'female', 'spayed', '2019-02-14', '11-20'),
(3, 'Charlie', 'French Bulldog', 'male', 'neutered', '2020-07-03', '0-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pet_health_cover`
--
ALTER TABLE `pet_health_cover`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pet_health_cover`
--
ALTER TABLE `pet_health_cover`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
