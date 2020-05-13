-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 05:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoitment`
--

CREATE TABLE `appoitment` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appoitment`
--

INSERT INTO `appoitment` (`id`, `nama_depan`, `nama_belakang`, `hospital`, `tanggal`) VALUES
(2, 'Syamsul', 'Rizal', 'rs pertamina', '2020-04-14'),
(5, 'Syamsul', 'Rizal', 'telkomedika', '2020-04-14'),
(17, 'Adham', 'Siwi', 'telkomedika', '2020-05-12'),
(18, 'Adham', 'Angga', 'telkomedika', '2020-05-05'),
(19, 'Bodat', 'Botak', 'rs pertamina', '2020-05-10'),
(20, 'Yusril', 'Udin', 'rs pertamina', '2020-05-02'),
(21, 'Erwin', 'Budi', 'rs persahabatan', '2020-05-12'),
(22, 'Raihan', 'Nugraha', 'rs persahabatan', '2020-05-09'),
(23, 'Kami', 'Budi', 'rs persahabatan', '2020-05-10'),
(24, 'bagas', 'Eka', 'rs hermina', '2020-05-08'),
(25, 'Ntong', 'setiawan', 'rs hermina', '2020-04-17'),
(26, 'Ridhwan', 'Alek', 'rs hermina', '2020-05-09'),
(27, 'Adham', 'Erlangga', 'rs jakarta', '2020-05-10'),
(28, 'Erlangga', 'Adham', 'rs jakarta', '2020-05-02'),
(29, 'Siwi', 'Adham', 'rs jakarta', '2020-04-22'),
(30, 'Yusril', 'Ghani', 'rs hasan sadikin', '2020-05-03'),
(31, 'Raihan', 'Nugraha', 'rs hasan sadikin', '2020-04-12'),
(32, 'Bagas', 'Humas', 'rs hasan sadikin', '2020-04-27'),
(33, 'Ferdian', 'Paleika', 'rs santosa', '2020-05-08'),
(34, 'Ferdian', 'Akbar', 'rs santosa', '2020-05-09'),
(35, 'Ridhwan', 'Nashir', 'rs santosa', '2020-05-05'),
(36, 'Buaya', 'Darat', 'rs al ihsan', '2020-05-02'),
(37, 'Boyke', 'Meong', 'rs al ihsan', '2020-05-11'),
(38, 'Luhut', 'Panjaian', 'rs al ihsan', '2020-05-08'),
(39, 'Setyo', 'Novanto', 'rs dr cipto mangunkusumo', '2020-05-06'),
(40, 'Luhut', 'Novanto', 'rs dr cipto mangunkusumo', '2020-05-02'),
(41, 'Susi', 'Puji', 'rs dr cipto mangunkusumo', '2020-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `slot` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `nama`, `alamat`, `slot`) VALUES
(1, 'Telkomedika', 'Telkom University', 4),
(9, 'RS Hermina', 'Bandung', 6),
(10, 'RS Pertamina', 'Jakarta', 6),
(11, 'RS Persahabatan', 'Jakarta', 2),
(12, 'RS Jakarta', 'Jakarta', 3),
(13, 'RS Hasan Sadikin', 'Bandung', 11),
(14, 'RS Santosa', 'Bandung', 5),
(15, 'RS Al Ihsan', 'Bandung', 4),
(16, 'RS Dr Cipto Mangunkusumo', 'Jakarta', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(128) NOT NULL,
  `nama_belakang` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `image` varchar(64) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_depan`, `nama_belakang`, `username`, `email`, `password`, `image`, `role_id`, `date_created`) VALUES
(1, 'admin', 'mantap', 'admin', 'admiin@admin.com', 'admin', 'avatar.png', 1, 1587077337),
(4, 'Syamsul', 'Rizal', 'syamsul', 'syamsul@gamil.com', '123', 'avatar.png', 2, 1587079584),
(5, 'Raihan', 'Nugraha', 'raihanns', 'raihanaa@gamil.com', '123', 'avatar.png', 2, 1587080061),
(7, 'Yusril', 'Alaudin', 'yusril', 'yusril@gamil.com', '123', 'avatar.png', 2, 1589381561),
(8, 'Adham', 'Erlangga', 'adham', 'adham@gamil.com', '123', 'avatar.png', 2, 1589381593),
(9, 'Ridhwan', 'Nashir', 'ridhwan', 'ridhwanalek@gamil.com', '123', 'avatar.png', 2, 1589381630);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(8, 1, 2),
(12, 2, 5),
(13, 1, 5),
(14, 1, 3),
(15, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(5, 'Appointment'),
(6, 'Laporan');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'home', 1),
(2, 2, 'My Profile', 'user/profile', 'user', 1),
(3, 2, 'Edit Profile', 'user/editprofile', 'edit', 1),
(4, 3, 'Menu Management', 'menu', 'menu', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'folder', 1),
(6, 1, 'Data Rumah Sakit', 'admin/listhospital', 'hard-drive', 1),
(7, 4, 'tes', 'tes', 'tes', 1),
(8, 1, 'Role', 'admin/role', 'sliders', 1),
(9, 5, 'Medical Appointment', 'user/appointment', 'alert-circle', 1),
(13, 6, 'Appointment', 'Laporan', 'alert-circle', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoitment`
--
ALTER TABLE `appoitment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoitment`
--
ALTER TABLE `appoitment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
