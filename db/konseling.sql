-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2020 at 05:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konseling`
--

-- --------------------------------------------------------

--
-- Table structure for table `keluhanpasien`
--

CREATE TABLE `keluhanpasien` (
  `idkeluhan` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `gejala` varchar(250) NOT NULL,
  `lamakeluhan` varchar(100) NOT NULL,
  `statuskeluhan` int(11) NOT NULL,
  `tglpengajuan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keluhanpasien`
--

INSERT INTO `keluhanpasien` (`idkeluhan`, `userid`, `gejala`, `lamakeluhan`, `statuskeluhan`, `tglpengajuan`) VALUES
(1, 2, 'tidak bisa tidur', '1 minggu', 0, '2020-08-23 18:24:00');

-- --------------------------------------------------------

--
-- Table structure for table `mastersoal`
--

CREATE TABLE `mastersoal` (
  `idsoal` int(11) NOT NULL,
  `typesoal` enum('kecemasan','depresi','stress','') NOT NULL,
  `isisoal` varchar(300) NOT NULL,
  `opsi1` varchar(150) NOT NULL,
  `nilaiopsi1` int(1) DEFAULT NULL,
  `opsi2` varchar(150) NOT NULL,
  `nilaiopsi2` int(1) DEFAULT NULL,
  `opsi3` varchar(150) NOT NULL,
  `nilaiopsi3` int(1) DEFAULT NULL,
  `opsi4` varchar(150) NOT NULL,
  `nilaiopsi4` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mastersoal`
--

INSERT INTO `mastersoal` (`idsoal`, `typesoal`, `isisoal`, `opsi1`, `nilaiopsi1`, `opsi2`, `nilaiopsi2`, `opsi3`, `nilaiopsi3`, `opsi4`, `nilaiopsi4`) VALUES
(1, 'stress', 'Saya merasa bahwa diri saya menjadi marah karena hal-hal sepele.', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 0, 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang.', 1, 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan se', 2, 'Sangat sesuai dengan saya, atau sering sekali.', 3),
(3, 'kecemasan', 'Saya merasa bibir saya sering kering.', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 0, 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang.', 1, 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 2, 'Sangat sesuai dengan saya, atau sering sekali.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `psikolog`
--

CREATE TABLE `psikolog` (
  `psikologid` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `spesialisasi` varchar(100) NOT NULL,
  `tglLahir` date NOT NULL,
  `statusPerkawinan` enum('Lajang','Menikah','Janda','Duda') NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `noHandphone` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `gender` enum('Laki-laki','Perempuan','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `psikolog`
--

INSERT INTO `psikolog` (`psikologid`, `nama`, `spesialisasi`, `tglLahir`, `statusPerkawinan`, `alamat`, `noHandphone`, `email`, `foto`, `gender`) VALUES
(1, 'Elvine Gunawan ,dr.,SpKJ', 'Psychiatrist', '0000-00-00', 'Lajang', 'Komp Banceuy Permai Kav Bp 16, Bandung', '0811206533', 'gan.elvine@gmail.com', 'psikolog-20200821085347.jpg', 'Perempuan'),
(2, 'Teddy Hidayat.,dr., SpKJ(K)', 'Kedokteran Jiwa', '0000-00-00', 'Lajang', ' Komplek Pilar Mas blok C no 50', '0811210414', 'teddy.hidayat@yahoo.com', 'psikolog-20200821090033.jpg', 'Laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gender` enum('Laki-laki','Perempuan','','') NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` enum('admin','pasien','','') NOT NULL,
  `noHandphone` varchar(13) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `nama`, `gender`, `alamat`, `username`, `password`, `role`, `noHandphone`, `foto`, `email`) VALUES
(1, 'asido', 'Laki-laki', 'jl.. swadaya', 'asido', 'bbaadde6f19fbaa9f067f0986262dcfd2f8ed987', 'admin', '081269152204', '', ''),
(2, 'Juan Sinaga', 'Laki-laki', 'Jl. Sisingamangaraja XII', 'juan', 'b49a5780a99ea81284fc0746a78f84a30e4d5c73', 'pasien', '082312348888', 'user-20200823123132.jpg', 'juan@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keluhanpasien`
--
ALTER TABLE `keluhanpasien`
  ADD PRIMARY KEY (`idkeluhan`);

--
-- Indexes for table `mastersoal`
--
ALTER TABLE `mastersoal`
  ADD PRIMARY KEY (`idsoal`);

--
-- Indexes for table `psikolog`
--
ALTER TABLE `psikolog`
  ADD PRIMARY KEY (`psikologid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keluhanpasien`
--
ALTER TABLE `keluhanpasien`
  MODIFY `idkeluhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mastersoal`
--
ALTER TABLE `mastersoal`
  MODIFY `idsoal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `psikolog`
--
ALTER TABLE `psikolog`
  MODIFY `psikologid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
