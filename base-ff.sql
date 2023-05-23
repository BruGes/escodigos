-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 10:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base-ff`
--

-- --------------------------------------------------------

--
-- Table structure for table `linguagem`
--

CREATE TABLE `linguagem` (
  `id_linguagem` int(11) NOT NULL,
  `nm_lunguagen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `linguser`
--

CREATE TABLE `linguser` (
  `id_linguser` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_linguagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nm_nome` varchar(50) NOT NULL,
  `ds_email` varchar(40) NOT NULL,
  `vl_senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `linguagem`
--
ALTER TABLE `linguagem`
  ADD PRIMARY KEY (`id_linguagem`);

--
-- Indexes for table `linguser`
--
ALTER TABLE `linguser`
  ADD PRIMARY KEY (`id_linguser`),
  ADD KEY `fk_linguser_usuario` (`id_usuario`),
  ADD KEY `fk_linguser_linguagem` (`id_linguagem`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `linguagem`
--
ALTER TABLE `linguagem`
  MODIFY `id_linguagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `linguser`
--
ALTER TABLE `linguser`
  MODIFY `id_linguser` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `linguser`
--
ALTER TABLE `linguser`
  ADD CONSTRAINT `linguser_linguagem_fk` FOREIGN KEY (`id_linguagem`) REFERENCES `linguagem` (`id_linguagem`),
  ADD CONSTRAINT `linguser_usuario_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
