-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2025 at 11:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

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
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `entry_time` time NOT NULL,
  `exit_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendence_table`
--

INSERT INTO `attendence_table` (`id`, `employee_id`, `entry_time`, `exit_time`) VALUES
(1, 9, '08:15:00', '19:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nik` int(16) NOT NULL,
  `address` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `marital_status` varchar(10) NOT NULL,
  `contact` int(11) NOT NULL,
  `position` varchar(50) NOT NULL,
  `department` varchar(20) NOT NULL,
  `employement_type` varchar(20) NOT NULL,
  `hire_date` date NOT NULL,
  `employee_id` int(11) NOT NULL,
  `npwp` int(16) NOT NULL,
  `dependent_status` varchar(4) NOT NULL,
  `bpjs_number` varchar(20) NOT NULL,
  `base_salary` int(11) NOT NULL,
  `bank_account_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`id`, `name`, `nik`, `address`, `date_of_birth`, `gender`, `marital_status`, `contact`, `position`, `department`, `employement_type`, `hire_date`, `employee_id`, `npwp`, `dependent_status`, `bpjs_number`, `base_salary`, `bank_account_number`) VALUES
(9, 'Rangga', 2147483647, 'Dendal', '2025-05-01', 'female', 'married', 2147483647, 'Head of Accounting Departement', 'Finance', 'Permanent', '2025-05-31', 2147483647, 2147483647, 'TK0', '8894498408489', 5000000, '5489494989489494'),
(10, 'Rafael Julio Kembuan', 2147483647, 'Langowan', '2025-04-01', 'male', 'single', 2147483647, 'Head of Accounting Departement', 'Finance', 'Intern', '2025-05-16', 2147483647, 2147483647, 'TK0', '5454564564564', 4500000, '8888978797879878');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
