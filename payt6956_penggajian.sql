-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 27 Bulan Mei 2025 pada 10.52
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
-- Database: `payt6956_penggajian`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_table`
--

CREATE TABLE `category_table` (
  `id` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pktp` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `category_table`
--

INSERT INTO `category_table` (`id`, `pktp`) VALUES
('K/0', '58500000'),
('K/1', '63000000'),
('K/1/0', '112500000'),
('K/1/1', '117000000'),
('K/1/2', '121500000'),
('K/1/3', '126000000'),
('K/2', '67500000'),
('K/3', '72000000'),
('TK0', '54000000'),
('TK1', '58500000'),
('TK2', '63000000'),
('TK3', '67500000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `employee_table`
--

CREATE TABLE `employee_table` (
  `id` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nik` bigint NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `marital_status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact` bigint NOT NULL,
  `position` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `department` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `employement_type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hire_date` date NOT NULL,
  `employee_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `npwp` bigint NOT NULL,
  `dependent_status` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bpjs_number` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `base_salary` int NOT NULL,
  `bank_account_number` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `report_table`
--

CREATE TABLE `report_table` (
  `id` int NOT NULL,
  `nik` bigint NOT NULL,
  `bpjs_deduction` bigint NOT NULL,
  `jht_deduction` bigint NOT NULL,
  `pph_deduction` bigint NOT NULL,
  `total_deduction` bigint NOT NULL,
  `amount` bigint NOT NULL,
  `manager_id` int NOT NULL,
  `date_approve` date DEFAULT NULL,
  `date_month` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `salary_table`
--

CREATE TABLE `salary_table` (
  `nik` bigint NOT NULL,
  `bpjs_deduction` bigint NOT NULL,
  `jht_deduction` bigint NOT NULL,
  `pph_deduction` bigint NOT NULL,
  `total_deduction` bigint NOT NULL,
  `amount` bigint NOT NULL,
  `status` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `manager_id` int DEFAULT NULL,
  `date_approve` date DEFAULT NULL,
  `date_month` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_table`
--

CREATE TABLE `users_table` (
  `id` int NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `signature` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users_table`
--

INSERT INTO `users_table` (`id`, `name`, `username`, `password`, `role`, `signature`) VALUES
(1, 'Devaldy Bawotong', 'admin', '$2y$10$fnPRRtyXjr4ZBOhVFOaHT.3/8VsfqzuwJCrKVBX44F8OKM99xR0o2', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `attendence_table`
--
ALTER TABLE `attendence_table`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indeks untuk tabel `report_table`
--
ALTER TABLE `report_table`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `salary_table`
--
ALTER TABLE `salary_table`
  ADD PRIMARY KEY (`nik`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `report_table`
--
ALTER TABLE `report_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
