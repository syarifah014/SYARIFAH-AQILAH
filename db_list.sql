-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2025 pada 18.33
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
-- Database: `db_list`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_list`
--

CREATE TABLE `tb_list` (
  `task_id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `priority` enum('biasa','cukup','penting') NOT NULL,
  `created_at` date NOT NULL,
  `status` enum('selesai','belum') NOT NULL,
  `deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_list`
--

INSERT INTO `tb_list` (`task_id`, `task_name`, `priority`, `created_at`, `status`, `deadline`) VALUES
(46, 'bindo', 'biasa', '2025-04-16', 'selesai', '2025-04-17'),
(47, 'ppknn', 'biasa', '2025-04-16', 'selesai', '2025-04-18'),
(48, 'ukk ', 'penting', '2025-04-22', 'belum', '2025-04-23'),
(49, 'ujian', 'penting', '2025-04-22', 'belum', '2025-04-10'),
(50, 'ukk', 'penting', '2025-04-22', 'belum', '2025-04-24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_list`
--
ALTER TABLE `tb_list`
  ADD PRIMARY KEY (`task_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_list`
--
ALTER TABLE `tb_list`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
