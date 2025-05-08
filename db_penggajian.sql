-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 08 Bulan Mei 2025 pada 12.16
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

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
-- Struktur dari tabel `attendence_table`
--

CREATE TABLE `attendence_table` (
  `id` int NOT NULL,
  `employee_id` int NOT NULL,
  `entry_time` time NOT NULL,
  `exit_time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `attendence_table`
--

INSERT INTO `attendence_table` (`id`, `employee_id`, `entry_time`, `exit_time`, `date`) VALUES
(2, 9, '08:01:00', '19:02:00', '2025-05-08'),
(3, 10, '06:02:00', '19:03:00', '2025-05-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `employee_table`
--

CREATE TABLE `employee_table` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nik` int NOT NULL,
  `address` text COLLATE utf8mb4_general_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  `marital_status` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `contact` int NOT NULL,
  `position` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `department` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `employement_type` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `hire_date` date NOT NULL,
  `employee_id` int NOT NULL,
  `npwp` int NOT NULL,
  `dependent_status` varchar(4) COLLATE utf8mb4_general_ci NOT NULL,
  `bpjs_number` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `base_salary` int NOT NULL,
  `bank_account_number` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `employee_table`
--

INSERT INTO `employee_table` (`id`, `name`, `nik`, `address`, `date_of_birth`, `gender`, `marital_status`, `contact`, `position`, `department`, `employement_type`, `hire_date`, `employee_id`, `npwp`, `dependent_status`, `bpjs_number`, `base_salary`, `bank_account_number`) VALUES
(9, 'Rangga', 2147483647, 'Dendal', '2025-05-01', 'female', 'married', 2147483647, 'Head of Accounting Departement', 'Finance', 'Permanent', '2025-05-31', 2147483647, 2147483647, 'TK0', '8894498408489', 5000000, '5489494989489494'),
(10, 'Rafael Julio Kembuan', 2147483647, 'Langowan', '2025-04-01', 'male', 'single', 2147483647, 'Head of Accounting Departement', 'Finance', 'Intern', '2025-05-16', 2147483647, 2147483647, 'TK0', '5454564564564', 4500000, '8888978797879878');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_table`
--

CREATE TABLE `users_table` (
  `id` int NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users_table`
--

INSERT INTO `users_table` (`id`, `name`, `username`, `password`, `role`) VALUES
(1, 'Devaldy Bawotong', 'admin', '$2y$10$fnPRRtyXjr4ZBOhVFOaHT.3/8VsfqzuwJCrKVBX44F8OKM99xR0o2', 'admin'),
(2, 'Rangga Satali', 'angga', '$2y$10$eTOFPfQxfvLBtZgv4wziPu6BnoUF/uAHwIbSDSX7jhrJRpyErfLRW', 'manager'),
(3, 'Prabowo', 'prabowo', '$2y$10$vtAdu6NRnKyFpBiSmo2xkOSpkyD1TAMJUh4emi5x77kMZrvq9drKi', 'human resource'),
(7, 'Jokowi', 'joko', '$2y$10$LGd91HEIsN4ThQQwBx1.heueRNNH4Zl53zsYRCOpba6nFMl9.6qKS', 'manager'),
(8, 'Megawati', 'mega', '$2y$10$A3bMU51Px6BGtIITCoZ9I.owP8rlEx4vz7fJKWw1k9cbmbaQkRGae', 'human resource');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `attendence_table`
--
ALTER TABLE `attendence_table`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `attendence_table`
--
ALTER TABLE `attendence_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
