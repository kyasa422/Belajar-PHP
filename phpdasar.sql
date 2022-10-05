-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2022 at 12:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` char(9) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Agus Setiawan', '210741113', 'kyasa422@gmail.com', 'Teknik Informatika', 'aku1.jpeg'),
(2, 'Haikal', '210741101', 'haikal@kumalal.com', 'Teknik Informatika', 'aku2.jpeg'),
(3, 'Nibras', '210741103', 'nibras@ayam.com', 'Teknik Informatika', 'aku3.jpeg'),
(4, 'Haical candra', '210741102', 'haical@gmail.com', 'Teknik Industri', 'aku4.jpeg'),
(5, 'Eugene F', '210741104', 'eugene@gmail.com', 'Teknik Sipil', '633c42964a273.jpg'),
(8, 'Afrin Ragil', '21074106', 'afrin@gmail.com', 'Teknik Multimedia', '633c42d3ca567.gif'),
(9, 'Sandi Sugihartana', '21074107', 'sandi@gmail.com', 'Teknik Jaringan', '633c4412b58cf.png'),
(10, 'Gerry S', '21074100', 'gerryS@gmail.com', 'Teknik Berhala', '633c449ae3f7c.png'),
(11, 'Rafi berhala S', '21074109', 'berhala@gmail.com', 'Teknik Berhala kepada', '633c461d8f473.jpg'),
(33, 'Iqbal', '210410741', 'iqbal@gmail.com', 'Teknik Informatika', '633d56a644c77.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'agus', '$2y$10$9TpTGWwNXlE7nCesH3y50umYkA5RJMj3qkdUNEpmBYycTU.vWSTTG'),
(2, 'nibras', '$2y$10$dm0y7Zcq.RzllHnHIIpIOe2sywlArKREiiGyVY14Zsd4nXxcpXwNS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
