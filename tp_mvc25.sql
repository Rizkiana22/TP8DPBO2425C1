-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Nov 2025 pada 13.40
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp_mvc25`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `sks` int(11) NOT NULL,
  `lecturer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_name`, `sks`, `lecturer_id`) VALUES
(1, 'IF101', 'Pemrograman Dasar', 3, 1),
(2, 'IF202', 'Struktur Data', 3, 1),
(3, 'SI105', 'Analisis Sistem', 3, 2),
(4, 'IF303', 'Basis Data Lanjut', 3, 3),
(5, 'TE210', 'Sistem Digital', 4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `departments`
--

INSERT INTO `departments` (`id`, `name`, `code`) VALUES
(1, 'Teknik Informatika', 'TI'),
(2, 'Sistem Informasi', 'SI'),
(3, 'Teknik Elektro', 'TE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `join_date` date NOT NULL,
  `department_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `lecturers`
--

INSERT INTO `lecturers` (`id`, `name`, `nidn`, `phone`, `join_date`, `department_id`) VALUES
(1, 'Dr. Andi Saputra', '1234567890', '081234567890', '2020-01-12', 1),
(2, 'Prof. Rina Putri', '9876543210', '081298765432', '2018-03-20', 2),
(3, 'Heri Kurniawan, M.Kom', '1122334455', '081377766655', '2021-07-30', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_code` (`course_code`),
  ADD KEY `lecturer_id` (`lecturer_id`);

--
-- Indeks untuk tabel `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indeks untuk tabel `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nidn` (`nidn`),
  ADD KEY `fk_dosen_department` (`department_id`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `lecturers`
--
ALTER TABLE `lecturers`
  ADD CONSTRAINT `fk_dosen_department` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
