-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 04:57 PM
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
-- Database: `e-tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `nim` varchar(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`nim`, `nama`, `email`, `phone`, `pesan`) VALUES
('21.230.0122', 'Fitra Fahra Hanifa', 'fitrahanif29@gmail.com', '085701207570', 'system eror');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `nim` varchar(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `kelas` varchar(11) NOT NULL,
  `prodi` enum('Sistem Informasi','Teknik Informatika','Manajemen Informatika','Komputerisasi Akuntansi') NOT NULL,
  `id_tkt` int(11) NOT NULL,
  `id_daftar` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `order_id` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`nim`, `nama`, `kelas`, `prodi`, `id_tkt`, `id_daftar`, `tgl`, `order_id`) VALUES
('21.230.0122', 'Fitra Fahra Hanifa', '5P53', 'Sistem Informasi', 34, 47, '2024-02-01', '1705987715'),
('21.230.0135', 'Hanif ', '4P53', 'Sistem Informasi', 33, 48, '2024-01-21', '1705987947'),
('21.230.0112', 'user', '5M51', 'Sistem Informasi', 34, 49, '2024-01-23', '1706010428'),
('21.230.0124', 'hanif user', '5P53', 'Sistem Informasi', 33, 50, '2024-01-23', '1706010511');

-- --------------------------------------------------------

--
-- Table structure for table `uploud_tkt`
--

CREATE TABLE `uploud_tkt` (
  `judul` varchar(35) NOT NULL,
  `hrg` varchar(25) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `benefit` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_tkt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploud_tkt`
--

INSERT INTO `uploud_tkt` (`judul`, `hrg`, `deskripsi`, `benefit`, `foto`, `id_tkt`) VALUES
('TIKET STMIK BERSHOLAWAT', '35000', 'Mengusung tema “Mendalami makna dan keutamaan sholawat dalam meningkatkan iman dan taqwa”.', 'Point 25, Ilmu yang bermanfaat', '1706109101_3f713bc98ffab0a316a8.jpg', 33),
('TIKET INAGURASI STMIK WP', '90000', 'Jangan sampai ketinggalan..!!! Saksikan Utopia Band dalam Inafest Patriot (Unity in Different Melody', 'Point 25', '1706109082_c4fe955244903dbd1e4a.jpg', 34),
('TIKET WEBINAR & WORKSHOP PK FEST', '30000', 'Dengan pembicara kali ini adalah seorang pendiri dan ketua Indonesia Cyber Security Forum Serta Work', 'Point 25,Ilmu yang bermanfaat', '1706108874_9d7904a8d80550839ee8.jpg', 35);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `role`) VALUES
(1, 'admin', 'test@admin.com', '$2y$10$1utoxhZIwAcWgwMEpKBZQefgoun6PYPM94WqMQK9/OVRgedEQYHsu', 'admin'),
(4, 'Fatimah', 'arsal@gmail.com', '$2y$10$6FlEHYiaOnXbP5izns/pLeRDiY0AjlEOEjrGAu1coTE948lbKFBxC', 'user'),
(5, 'user', 'test@hanif.com', '$2y$10$qldwsgI9uY6RcFtZus74/uWtMTItyUUYitOgOCacHZW6uUdMKepZ6', 'user'),
(6, 'Fitra Fahra Hanifa', 'fitrahanif29@gmail.com', '$2y$10$DIAWN4ImDedLpvU15.jqXO1qCakUOw/2uBIqGzior1775RSzYrDF6', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `id_tkt` (`id_tkt`);

--
-- Indexes for table `uploud_tkt`
--
ALTER TABLE `uploud_tkt`
  ADD PRIMARY KEY (`id_tkt`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `uploud_tkt`
--
ALTER TABLE `uploud_tkt`
  MODIFY `id_tkt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`id_tkt`) REFERENCES `uploud_tkt` (`id_tkt`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
