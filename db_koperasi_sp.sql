-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 02:30 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_koperasi_sp`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(4) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `alamat`, `no_telp`) VALUES
(1, 'Awan Argoho', 'Cibinong', '011232'),
(2, 'Widya Ayu', 'Cibinong', '011232'),
(3, 'Ayana', 'Cibinong', '67883'),
(4, 'Rizal', 'Bogor', '08111292929'),
(5, 'Novi', 'Bogor', '082929292'),
(6, 'Ratu', 'Cilebut', '0811122344'),
(7, 'Yanto Yanto', 'Ciledug', '08233451922');

-- --------------------------------------------------------

--
-- Table structure for table `simpanan`
--

CREATE TABLE `simpanan` (
  `id_smp` int(12) NOT NULL,
  `tanggal` date NOT NULL,
  `id_anggota` int(4) NOT NULL,
  `jns_simpanan` varchar(15) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `simpanan`
--

INSERT INTO `simpanan` (`id_smp`, `tanggal`, `id_anggota`, `jns_simpanan`, `jumlah`) VALUES
(1, '2023-06-14', 1, 'Wajib', 100000),
(2, '2023-06-21', 1, 'Wajib', 100000),
(3, '2023-06-21', 3, 'Wajib', 100000),
(4, '2023-06-24', 4, 'Wajib', 100000),
(5, '2023-06-19', 2, 'Wajib', 100000),
(6, '2023-06-14', 1, 'Pokok', 100000),
(7, '2023-06-24', 2, 'Pokok', 100000),
(8, '2023-06-24', 5, 'Wajib', 100000),
(9, '2023-06-23', 3, 'Wajib', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id`, `username`, `password`, `email`, `create_at`) VALUES
(1, 'awanargoho', '$2y$10$s3GoacWStFAh1LPdeFmUKeEjgv26NyRkjxxgTVmNGQZF2hU6hm6WW', 'awanargoho@gmail.com', '2023-06-13 03:13:11'),
(2, 'admin', '$2y$10$UAZW7.dtFr0Sg.PoEM4.leTubWOjgZF28kjIFJT.HOoG1jMHwp1eO', 'admin@awan.com', '2023-06-13 03:13:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD PRIMARY KEY (`id_smp`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `simpanan`
--
ALTER TABLE `simpanan`
  ADD CONSTRAINT `simpanan_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
