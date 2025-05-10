-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 10 Bulan Mei 2025 pada 23.48
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
(1, 1, '07:47:00', '16:47:00', '2025-05-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_table`
--

CREATE TABLE `category_table` (
  `id` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pktp` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nik` bigint NOT NULL,
  `address` text COLLATE utf8mb4_general_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(6) COLLATE utf8mb4_general_ci NOT NULL,
  `marital_status` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `contact` bigint NOT NULL,
  `position` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `department` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `employement_type` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `hire_date` date NOT NULL,
  `employee_id` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `npwp` bigint NOT NULL,
  `dependent_status` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bpjs_number` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `base_salary` int NOT NULL,
  `bank_account_number` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `employee_table`
--

INSERT INTO `employee_table` (`id`, `name`, `nik`, `address`, `date_of_birth`, `gender`, `marital_status`, `contact`, `position`, `department`, `employement_type`, `hire_date`, `employee_id`, `npwp`, `dependent_status`, `bpjs_number`, `base_salary`, `bank_account_number`) VALUES
(1, 'Rangga Satali', 7171111111111111, 'Manado', '2025-05-01', 'male', 'married', 111111111111, 'Head of Accounting Departement', 'Finance', 'Permanent', '2025-05-31', '2222222222222222', 7171111111111111, 'TK0', '3333333333333', 5000000, '4444444444444444'),
(6, 'Rafael', 7171222222222222, 'Langoan', '2025-05-01', 'male', 'married', 111111111111, 'Head of Accounting Departement', 'Finance', 'Intern', '2025-05-31', '2222222222222222', 7171122222222222, 'TK1', '3333333333333', 7000000, '4444444444444444');

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
  `status` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `salary_table`
--

INSERT INTO `salary_table` (`nik`, `bpjs_deduction`, `jht_deduction`, `pph_deduction`, `total_deduction`, `amount`, `status`) VALUES
(7171111111111111, 50000, 250000, 10000, 310000, 4690000, '4'),
(7171222222222222, 70000, 350000, 85250, 505250, 6494750, '1');

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
-- Indeks untuk tabel `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `employee_table`
--
ALTER TABLE `employee_table`
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users_table`
--
ALTER TABLE `users_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
