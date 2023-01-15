-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2023 at 09:42 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_motor`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_motor`
--

CREATE TABLE `jenis_motor` (
  `Nomor_Rangka` varchar(7) NOT NULL,
  `Nama_Motor` varchar(10) NOT NULL,
  `Pabrikan` varchar(10) NOT NULL,
  `Ukuran_Mesin` int(5) NOT NULL,
  `Jenis_Motor` varchar(7) NOT NULL,
  `Tahun_Produksi` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_motor`
--

INSERT INTO `jenis_motor` (`Nomor_Rangka`, `Nama_Motor`, `Pabrikan`, `Ukuran_Mesin`, `Jenis_Motor`, `Tahun_Produksi`) VALUES
('BE339JU', 'VegaZR', 'Yamaha', 100, 'Moped', 2015),
('FZ123AZ', 'Fazzio', 'Yamaha', 125, 'Matic', 2022),
('IB0321J', 'Beat', 'Honda', 110, 'Matic', 2021),
('IB098HH', 'NMAX', 'Yamaha', 155, 'Matic', 2020),
('JA4316X', 'Verza', 'Honda', 150, 'Manual', 2019),
('JA5478V', 'W175', 'Kawasaki', 175, 'Manual', 2019),
('JJ100FA', 'X-Ride', 'Yamaha', 125, 'Matic', 2021),
('JJ4416Z', 'Fazzio', 'Yamaha', 125, 'Matic', 2022),
('XA100DD', 'Revo', 'Honda', 110, 'Moped', 2013);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_motor`
--
ALTER TABLE `jenis_motor`
  ADD PRIMARY KEY (`Nomor_Rangka`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
