-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 10:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_departmen`
--

CREATE TABLE `table_departmen` (
  `dept_id` int(11) NOT NULL,
  `department_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_departmen`
--

INSERT INTO `table_departmen` (`dept_id`, `department_name`) VALUES
(1, 'IT-Departmen'),
(2, 'Accounting department');

-- --------------------------------------------------------

--
-- Table structure for table `table_employee`
--

CREATE TABLE `table_employee` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `birthday` varchar(20) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_employee`
--

INSERT INTO `table_employee` (`id`, `firstname`, `lastname`, `age`, `birthday`, `department_id`) VALUES
(1, 'richard', 'German', 28, '08/14/1994', 1),
(3, 'aron', 'roque', 27, '08/14/1994', 1),
(4, 'aron', 'roque', 27, '08/14/1994', 2),
(6, 'aron', 'roque', 27, '08/14/1994', 2),
(7, 'aron', 'roque', 27, '08/14/1994', 1),
(10, 'angelo', 'mendoza', 12, '2023-07-10', 1),
(11, 'angelo', 'mendoza', 12, '2023-07-27', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_departmen`
--
ALTER TABLE `table_departmen`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `table_employee`
--
ALTER TABLE `table_employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_departmen`
--
ALTER TABLE `table_departmen`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_employee`
--
ALTER TABLE `table_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
