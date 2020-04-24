-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 01:49 PM
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
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `Id` int(11) NOT NULL,
  `Gambar` varchar(25) NOT NULL,
  `Kode` varchar(10) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Harga` varchar(50) NOT NULL,
  `Warna` varchar(50) NOT NULL,
  `Ukuran` varchar(100) NOT NULL,
  `Material` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`Id`, `Gambar`, `Kode`, `Nama`, `Harga`, `Warna`, `Ukuran`, `Material`) VALUES
(1, 'gambar1.jpg', 'A01', 'PEPONI\r\n\r\nOversize Cardigan', 'Rp 350.000', 'Caramel, Cream, Black', 'One size', 'Polyester'),
(2, 'gambar2.jpg', 'A02', 'EXIT\r\nHeyyna Dress', 'Rp 375.250', 'Pink', 'S, M, L, XL, XXL', 'Katun'),
(3, 'gambar3.jpg', 'A03', 'FOREVER NEW\r\nFern Frill Hem Midi Dress', 'Rp 1.469.000', 'Lemonade Ditsy', '6, 8, 10, 12, 14', '100% Viscose'),
(4, 'gambar4.jpg', 'A04', 'GEELA\r\nSamara Skirt', 'Rp 383.920', 'Dark Blue Denim', 'S, M, L, XL, XXL, XX', 'Katun'),
(5, 'gambar5.jpg', 'A05', 'NOCHE\r\nUlric Trousers', 'Rp 349.300', 'Black', 'S, M, L', 'Polyester'),
(6, 'gambar6.jpg', 'A06', 'LUBNA\r\nContrast Edging Knit Pants', 'Rp 154.900', 'Navy, Pink, Brown', 'XS, S, M, L, XL', '100% Polyester'),
(7, 'gambar7.jpg', 'A07', 'CARVIL\r\nFiorella', 'Rp 419.300', 'Mustard', 'S, M, L, XL', 'Parasut'),
(8, 'gambar8.jpg', 'A08', 'NAIN\r\nEmbroidered Lettering Denim Jacket', 'Rp 693.002', 'Blue', 'One Size', '79% Cotton, 12% Polyester'),
(9, 'gambar9.jpg', 'A09', 'LEVI\'S\r\nLevi\'s El Pleated Jeans Stranger Things Eleven', 'Rp 749.950', 'Blue', '24 in, 25 in, 26 in, 27 in, 28 in', 'Cotton'),
(10, 'gambar10.jpg', 'A10', 'FOREVER 21\r\nFrayed Detail Denim Jacket', 'Rp 557.900', 'Olive', 'S, M, L', '100% Cotton'),
(11, 'gambar11.jpg', 'A11', 'NOCHE\r\nLuzi Dress', 'Rp 279.200', 'Brown', 'S, M, L', 'Polyester'),
(12, 'gambar12.jpg', 'A12', 'FOREVER NEW\r\nAmara Linen Blend Pants', 'Rp 1.089.000', 'Coral Linear Spray', '6, 8, 10, 12, 14', '100% Polyester'),
(13, 'gambar13.jpg', 'A13', 'ZALORA\r\nTie Front Satin Midi Dress', 'Rp 253.900', 'Black, Deep Gold, Khaki Green', 'XS, S, M, L, XL', 'Polyester, Spandek Woven'),
(14, 'gambar14.jpg', 'A14', 'DOROTHY PERKINS\r\nBlack Ruched Sleeve Jacket', 'Rp 796.900', 'Black', '6, 8, 10, 12, 14, 16', '75% Polyester, 19% Viscose'),
(15, 'gambar15.jpg', 'A15', 'GODDIVA\r\nCap Sleeves Lace Maxi Dress', 'Rp 1.100.900', 'Black, Emerald', '8, 10, 12, 14, 16', '35% Cotton, 40% Nylon, Rayon'),
(16, 'gambar16.jpg', 'A16', 'FREE PEOPLE\r\nHold On To Me Printed Shirt', 'Rp 1.009.000', 'Black, Peach', 'XS, S, M, L, XL', '100% Viscose'),
(17, 'gambar17.jpg', 'A17', 'CALVIN KLEIN\r\nFoundation Western', 'Rp 2.690.000', 'Vender Blu Mono', 'XS, S, M, L', 'Katun'),
(18, 'gambar18.jpg', 'A18', 'HOLLISTER\r\nLarge Scale Logo Pullover Hoodie', 'Rp 939.000', 'Navy, Pink, Grey, Red', 'XS, S, M, L', '70% Cotton, 30% Polyester'),
(19, 'gambar19.jpg', 'A19', 'PAPER DOLLS\r\nMono Colourblock Dress', 'Rp 1.329.000', 'Mond Print Black', '8, 10, 12, 14, 16', '89% Polyester, 11% Elastane'),
(20, 'gambar20.jpg', 'A20', 'CLOSET\r\nA-line Wrap Dress\r\n', 'Rp 1.649.000', 'Red', '8, 10, 12, 14, 16', '90% Polyester, 10% Elastane'),
(21, 'gambar21.jpg', 'A21', 'SPORT B.\r\nReversible Down Jacket', 'Rp 8.489.000', 'Black', '1, 2, 3, 4', '100% Nylon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
