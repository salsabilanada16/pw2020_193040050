-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 03:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040050`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Gyan Felix Latif', '193050050', 'felixgyan@gmail.com', 'Teknik Industri', 'gambar1.jpg'),
(2, 'Jaden Helmer Salvino', '193040050', 'jadens@gmail.com', 'Teknik Informatika', 'gambar2.jpg'),
(3, 'Sean Durant Gabriel', '193020070', 'durantgabriel@gmail.com', 'Teknik Mesin', 'gambar3.jpg'),
(4, ' Zosimo Ayres Dexter', '193040087', 'Ayresxter@gmail.com', 'Teknik Informatika', 'gambar4.jpg'),
(5, 'Barra Graham Imtiaz', '193050120', 'barra.tiaz@gmail.com', 'Teknik Industri', 'gambar5.jpg'),
(6, 'Muhammad Rafka Adrian', '193040179', 'rafkaadrian16@gmail.com', 'Teknik Informatika', 'gambar6.jpg'),
(7, 'Aufa Kendrick Labhrainn', '193020010', 'ken.aufarain@gmail.com', 'Teknologi Pangan', 'gambar7.jpg'),
(8, 'Abrar Ahmad Abimata', '193010098', 'abrar.abimata@gmail.com', 'Teknik Lingkungan', 'gambar8.jpg'),
(9, 'Givon Ghaalib Abiwara', '193030067', 'givon05@gmail.com', 'Teknik Planologi', 'gambar9.jpg'),
(10, 'Hadden Dael Abbiah', '193035789', 'haddael@gmail.com', 'Arsitektur', 'gambar10.jpg'),
(11, 'Rifqi Zimraan Vinesh', '194070089', 'vineshzimraan@gmail.com', 'Arsitektur', 'gambar11.jpg'),
(12, 'Farrel Ravindra Faresta', '193056040', 'ravindresta@gmail.com', 'Desain Interior', 'gambar12.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
