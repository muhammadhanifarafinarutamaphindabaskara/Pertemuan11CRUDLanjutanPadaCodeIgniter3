-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 01:12 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudpertemuan11`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `jurusan` varchar(500) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `data` varchar(500) NOT NULL,
  `content` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `foto`, `alamat`, `date`, `email`, `password`, `jurusan`, `gender`, `data`, `content`) VALUES
(23, 'MUHAMMAD HANIF ARAFI', 'hanif.png', 'Bogor', '2021-11-09', 'hanifarafi7@gmail.com', 'hanif123', 'TI', 'male', 'Programming', '<p><em><strong>Merupakan Mahasiswa Semester 3 D3 Teknik Informatika PSDKU UNS</strong></em></p>\r\n'),
(25, 'NARUTAMA PHINDA BASKARA', 'Baskara.png', 'Madiun', '2021-11-30', 'baskara@gmail.com', 'baskara123', 'TI', 'male', 'Programming', '<p><em><strong>Merupakan Mahasiswa Semester 3 D3 Teknik Informatika PSDKU UNS</strong></em></p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
