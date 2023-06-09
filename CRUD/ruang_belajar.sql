-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 07:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adib`
--

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `poin` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id`, `id_pertanyaan`, `deskripsi`, `poin`) VALUES
(1, 1, 'Ini Sabil', 1),
(6, 1, 'Ya yayayayay', 1),
(9, 11, 'Ini bisa', 1),
(11, 9, 'yayayayaya', 2);

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_user`
--

CREATE TABLE `jawaban_user` (
  `id_jawaban_user` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_tryout` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `jawaban` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `skor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `deskripsi`, `skor`) VALUES
(1, 'siapaa', 0),
(2, 'Apa', 0),
(3, 'Pertanyaan: Berapakah hasil dari log₁₀(100) + 2 × log₁₀(1000)?', 1),
(5, 'Sebuah pipa organa yang terbuka kedua ujungnya memiliki nada dasar dengan     frekuensi sebesar 300 Hz. Tentukan besar frekuensi dari Nada atas ketiga adalah...', 1),
(6, 'Panas sebesar 12 kj diberikan pada pada sepotong logam bermassa 2500 gram yang     memiliki suhu 30oC. Jika kalor jenis logam adalah 0,2 kalori/groC, tentukan suhu akhir     logam!', 1),
(7, 'Titik A dan titik B mempunyai beda potensial listrik sebesar 12 volt. besar energi yang     diperlukan untuk membawa muatan listrik 6μ Coulomb dari satu titik A ke titik B..', 1),
(8, 'Dua buah partikel bermuatan listrik didekatkan pada jarak tertentu hingga timbul gaya     sebesar F. Jika besar muatan listrik partikel pertama dijadikan 1/2 kali muatan semula     dan besar muatan partikel kedua dijadikan 8x semula maka gaya yang timbul menjadi...', 1),
(9, 'Dua buah partikel bermuatan berjarak R satu sama lain dan terjadi gaya tarik-menarik     sebesar F. Jika jarak antara kedua muatan dijadikan 4 R, tentukan nilai perbandingan     besar gaya tarik-menarik yang terjadi antara kedua partikel terhadap kondisi awalnya!', 1),
(11, 'Tes', 1),
(12, 'Berapa jumlah jari kakimu?', 1),
(13, 'Tes pertanyaan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tryout`
--

CREATE TABLE `tryout` (
  `id` int(11) NOT NULL,
  `nama_tryout` varchar(100) NOT NULL,
  `tanggal_tryout` date NOT NULL,
  `skor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `nama_lengkap`, `email`) VALUES
(1, 'UDEAN', 'password123', 'UDEA', 'UDEAN@example.com'),
(2, 'JOKO', '456', 'JOKO', 'JOKO@example.com'),
(3, 'Rizki', 'password789', 'Rizki', 'Rizki@example.co.i'),
(6, 'Tes', 'tes', '123', 'tes@mail.com'),
(8, '1235', '1235', '1235', 'adqwe12'),
(9, '1245', '12345', 'Adib', '12213qw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pertanyaan` (`id_pertanyaan`);

--
-- Indexes for table `jawaban_user`
--
ALTER TABLE `jawaban_user`
  ADD PRIMARY KEY (`id_jawaban_user`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tryout`
--
ALTER TABLE `tryout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jawaban_user`
--
ALTER TABLE `jawaban_user`
  MODIFY `id_jawaban_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tryout`
--
ALTER TABLE `tryout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`id_pertanyaan`) REFERENCES `pertanyaan` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
