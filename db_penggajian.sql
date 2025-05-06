-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 06, 2025 at 09:01 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penggajian`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence_table`
--

CREATE TABLE `attendence_table` (
  `id` int NOT NULL,
  `employee_id` int NOT NULL,
  `entry_time` datetime NOT NULL,
  `entry_out` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `id_number` int NOT NULL,
  `address` text COLLATE utf8mb4_general_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `marital_status` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `contact` int NOT NULL,
  `position` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `department` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `employement_type` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `hire_date` date NOT NULL,
  `employee_id` int NOT NULL,
  `npwp` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `dependent_status` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bpjs_number` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `base_salary` int NOT NULL,
  `bank_account_number` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`id`, `name`, `id_number`, `address`, `date_of_birth`, `gender`, `marital_status`, `contact`, `position`, `department`, `employement_type`, `hire_date`, `employee_id`, `npwp`, `dependent_status`, `bpjs_number`, `base_salary`, `bank_account_number`) VALUES
(4, 'devaldy', 1111, 'Manado', '2025-05-01', 'male', 'married', 11111, 'Head of Accounting Departement', 'Finance', 'Permanent', '2025-05-31', 22222, '33333', 'TK0', '44444', 5000000, '55555'),
(7, 'angga', 111981, 'Manado', '2025-05-29', 'female', 'married', 12532, 'Head of Accounting Departement', 'Finance', 'Permanent', '2025-05-16', 48948949, '21451234123', 'TK0', '12321321', 4500000, '313213123');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `id` int NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`id`, `name`, `username`, `password`, `role`) VALUES
(1, 'Devaldy Bawotong', 'admin', '$2y$10$fnPRRtyXjr4ZBOhVFOaHT.3/8VsfqzuwJCrKVBX44F8OKM99xR0o2', 'admin'),
(2, 'Rangga Satali', 'angga', '$2y$10$eTOFPfQxfvLBtZgv4wziPu6BnoUF/uAHwIbSDSX7jhrJRpyErfLRW', 'manager'),
(3, 'Prabowo', 'prabowo', '$2y$10$vtAdu6NRnKyFpBiSmo2xkOSpkyD1TAMJUh4emi5x77kMZrvq9drKi', 'human resource');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence_table`
--
ALTER TABLE `attendence_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendence_table`
--
ALTER TABLE `attendence_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
