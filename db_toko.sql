-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Des 2020 pada 15.49
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pemesan`
--

CREATE TABLE `tbl_pemesan` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `No_HP` varchar(12) NOT NULL,
  `Unit_Kamera` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pemesan`
--

INSERT INTO `tbl_pemesan` (`ID`, `Nama`, `Alamat`, `No_HP`, `Unit_Kamera`) VALUES
(3, 'edi', 'Surakarta', '085700923516', 'Canon 600D'),
(7, 'Yulanda', 'Bojonegoro', '085704084599', 'Canon 60D'),
(8, 'yuni', 'surabaya', '087638752431', 'Canon 80D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `ID` int(11) NOT NULL,
  `Unit_Kamera` varchar(50) NOT NULL,
  `Tanggal_Peminjaman` date NOT NULL,
  `Kembali_max` date NOT NULL,
  `Jumlah_Hari` int(255) NOT NULL,
  `Harga_UnitKamera` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_peminjaman`
--

INSERT INTO `tbl_peminjaman` (`ID`, `Unit_Kamera`, `Tanggal_Peminjaman`, `Kembali_max`, `Jumlah_Hari`, `Harga_UnitKamera`) VALUES
(1, 'Canon 1100D', '2020-12-13', '2020-12-14', 1, 60000),
(2, 'Canon 1100D', '2020-12-13', '2020-12-14', 1, 60000),
(3, 'Canon 1100D', '2020-12-13', '2020-12-14', 1, 60000),
(4, 'Canon 1100D', '2020-12-13', '2020-12-14', 1, 60000),
(5, 'Canon 700D', '2020-12-13', '2020-12-14', 1, 120000),
(6, 'Canon 700D', '2020-12-13', '2020-12-14', 1, 120000),
(7, 'Canon 700D', '2020-12-14', '2020-12-17', 3, 120000),
(8, 'Canon 700D', '2020-12-14', '2020-12-17', 3, 120000),
(9, 'Canon 700D', '2020-12-14', '2020-12-17', 3, 120000),
(10, 'Canon 700D', '2020-12-14', '2020-12-17', 3, 120000),
(11, 'Canon 700D', '2020-12-14', '2020-12-15', 1, 120000),
(12, 'Canon 600D', '2020-12-16', '2020-12-17', 1, 100000),
(13, 'Canon 600D', '2020-12-16', '2020-12-17', 1, 100000),
(14, 'Canon 600D', '2020-12-16', '2020-12-17', 1, 100000),
(15, 'Canon 600D', '2020-12-16', '2020-12-17', 1, 100000),
(16, 'Canon 600D', '2020-12-16', '2020-12-17', 1, 100000),
(17, 'Canon 1200D', '2020-12-16', '2020-12-17', 1, 80000),
(18, 'Canon 700D', '2020-12-10', '2020-12-13', 3, 120000),
(19, 'Canon 700D', '2020-12-16', '2020-12-18', 2, 120000),
(20, 'Canon 700D', '2020-12-15', '2020-12-18', 3, 120000),
(21, 'Canon 60D', '2020-12-16', '2020-12-18', 2, 150000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengembalian`
--

CREATE TABLE `tbl_pengembalian` (
  `ID` int(7) NOT NULL,
  `Unit_Kamera` varchar(50) NOT NULL,
  `Tanggal_Peminjaman` date NOT NULL,
  `Kembali_max` date NOT NULL,
  `Tanggal_Kembali` date NOT NULL,
  `Jumlah_Hari` int(11) NOT NULL,
  `Harga_UnitKamera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pengembalian`
--

INSERT INTO `tbl_pengembalian` (`ID`, `Unit_Kamera`, `Tanggal_Peminjaman`, `Kembali_max`, `Tanggal_Kembali`, `Jumlah_Hari`, `Harga_UnitKamera`) VALUES
(6, 'Canon 60D', '2020-12-13', '2020-12-14', '2020-12-16', 3, 150000),
(7, 'Canon 60D', '2020-12-13', '2020-12-14', '2020-12-16', 3, 150000),
(8, 'Canon 1200D', '2020-12-14', '2020-12-15', '2020-12-17', 1, 80000),
(9, 'Canon 1100D', '2020-12-13', '2020-12-14', '2020-12-16', 1, 60000),
(10, 'Canon 600D', '2020-12-14', '2020-12-15', '2020-12-16', 1, 100000),
(11, 'Canon 1100D', '2020-12-15', '2020-12-16', '2020-12-17', 1, 60000),
(12, 'Canon 1100D', '2020-12-15', '2020-12-16', '2020-12-17', 1, 60000),
(13, 'Canon 1100D', '2020-12-15', '2020-12-16', '2020-12-17', 1, 60000),
(14, 'Canon 1100D', '2020-12-15', '2020-12-16', '2020-12-17', 1, 60000),
(15, 'Canon 1100D', '2020-12-15', '2020-12-16', '2020-12-17', 1, 60000),
(16, 'Canon 60D', '2020-12-13', '2020-12-16', '2020-12-17', 3, 150000),
(17, 'Canon 60D', '2020-12-13', '2020-12-16', '2020-12-17', 3, 150000),
(18, 'Canon 700D', '2020-12-12', '2020-12-14', '2020-12-18', 2, 120000),
(19, 'Canon 1200D', '2020-12-16', '2020-12-17', '2020-12-18', 1, 80000),
(20, 'Canon 1200D', '2020-12-16', '2020-12-17', '2020-12-18', 1, 80000),
(21, 'Canon 1200D', '2020-12-13', '2020-12-14', '2020-12-16', 1, 80000),
(22, 'Canon 1200D', '2020-12-13', '2020-12-14', '2020-12-16', 1, 80000),
(23, 'Canon 1200D', '2020-12-14', '2020-12-15', '2020-12-17', 1, 80000),
(24, 'Canon 1200D', '2020-12-15', '2020-12-16', '2020-12-17', 1, 80000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_register`
--

CREATE TABLE `tbl_register` (
  `ID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Password1` varchar(8) NOT NULL,
  `Konfirmasi_Password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_register`
--

INSERT INTO `tbl_register` (`ID`, `Email`, `Nama`, `Tanggal_Lahir`, `Alamat`, `Password1`, `Konfirmasi_Password`) VALUES
(3, 'dwi19@gmail.com', 'dwi', '1994-02-08', 'surabaya', 'dwi123', 'dwi123'),
(6, 'deni19@gmail.com', 'deni', '1994-02-24', 'surabaya', '123qwe', '123qwe'),
(7, 'danu19@gmail.com', 'danu', '1994-03-06', 'bogor', 'mnb098', 'mnb098'),
(8, 'fibri@gmail.com', 'fibriyani', '2006-05-08', 'bogor', '1234tr', '1234tr'),
(10, 'david@gmail.com', 'david', '2003-05-07', 'Bandung', 'david123', 'david123'),
(11, 'yulanda@gmail.com', 'Yulan', '2001-06-30', 'Bojonegoro', 'yul12345', 'yul12345'),
(12, 'triwah01@gmail.com', 'triwah', '2001-06-23', 'bogor', 'wah12345', 'wah12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pemesan`
--
ALTER TABLE `tbl_pemesan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_pengembalian`
--
ALTER TABLE `tbl_pengembalian`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pemesan`
--
ALTER TABLE `tbl_pemesan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_pengembalian`
--
ALTER TABLE `tbl_pengembalian`
  MODIFY `ID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
