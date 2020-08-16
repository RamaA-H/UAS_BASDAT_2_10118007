-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 06:08 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `10118007_akademik_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `NIP_Guru` int(11) NOT NULL,
  `Nama_Guru` varchar(45) NOT NULL,
  `Kelas_Kelas` int(11) NOT NULL,
  `Mapel_idMapel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`NIP_Guru`, `Nama_Guru`, `Kelas_Kelas`, `Mapel_idMapel`) VALUES
(221, 'Budi', 11, 1),
(222, 'Bada', 11, 2),
(223, 'Bedi', 12, 3),
(224, 'Hera', 11, 4);

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `idMapel` int(11) NOT NULL,
  `Nama_Mapel` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`idMapel`, `Nama_Mapel`) VALUES
(1, 'MTK'),
(2, 'PKN'),
(3, 'IPA'),
(4, 'Agama');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `NIS_Siswa` int(11) NOT NULL,
  `Nilai` float DEFAULT NULL,
  `Mapel_idMapel` int(11) NOT NULL,
  `Guru_NIP_Guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`NIS_Siswa`, `Nilai`, `Mapel_idMapel`, `Guru_NIP_Guru`) VALUES
(112, 80, 1, 221),
(113, 89, 1, 221),
(114, 99, 2, 222);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `NIS_Siswa` int(11) NOT NULL,
  `Nama_Siswa` varchar(50) NOT NULL,
  `Kelas` int(11) NOT NULL,
  `Alamat` varchar(45) NOT NULL,
  `No_Telp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NIS_Siswa`, `Nama_Siswa`, `Kelas`, `Alamat`, `No_Telp`) VALUES
(112, 'Rano', 11, 'Jln c', 34532),
(113, 'Rendi', 12, 'Jln b', 38423),
(114, 'Reno', 11, 'Jln a', 34853);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIP_Guru`),
  ADD KEY `fk_Guru_Mapel1` (`Mapel_idMapel`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`idMapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`NIS_Siswa`,`Mapel_idMapel`,`Guru_NIP_Guru`),
  ADD KEY `fk_Nilai_Mapel` (`Mapel_idMapel`),
  ADD KEY `fk_Nilai_Guru` (`Guru_NIP_Guru`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS_Siswa`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `fk_Guru_Mapel1` FOREIGN KEY (`Mapel_idMapel`) REFERENCES `mapel` (`idMapel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `fk_Nilai_Guru` FOREIGN KEY (`Guru_NIP_Guru`) REFERENCES `guru` (`NIP_Guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Nilai_Mapel` FOREIGN KEY (`Mapel_idMapel`) REFERENCES `mapel` (`idMapel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Nilai_Siswa` FOREIGN KEY (`NIS_Siswa`) REFERENCES `siswa` (`NIS_Siswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
