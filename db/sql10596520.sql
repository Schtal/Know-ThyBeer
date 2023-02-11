-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: sql10.freemysqlhosting.net
-- Generation Time: Feb 11, 2023 at 12:33 PM
-- Server version: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql10596520`
--

-- --------------------------------------------------------

--
-- Table structure for table `Cerveja`
--

CREATE TABLE `Cerveja` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` char(50) NOT NULL,
  `descricao` text,
  `foto` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Cerveja_Comida`
--

CREATE TABLE `Cerveja_Comida` (
  `id` int(10) UNSIGNED NOT NULL,
  `cerveja_id` int(10) UNSIGNED DEFAULT NULL,
  `comida_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Comida`
--

CREATE TABLE `Comida` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` char(50) NOT NULL,
  `descricao` text,
  `foto` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Usuario`
--

CREATE TABLE `Usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` char(50) NOT NULL,
  `email` char(50) NOT NULL,
  `senha` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Usuario`
--

INSERT INTO `Usuario` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Jose da Silva', 'josedasilva@knowthybeer.com', '732002cec7aeb7987bde842b9e00ee3b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Cerveja`
--
ALTER TABLE `Cerveja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Cerveja_Comida`
--
ALTER TABLE `Cerveja_Comida`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_Cerveja_Comida_Cerveja_idx` (`cerveja_id`),
  ADD KEY `fk_Cerveja_Comida_Comida1_idx` (`comida_id`);

--
-- Indexes for table `Comida`
--
ALTER TABLE `Comida`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Cerveja`
--
ALTER TABLE `Cerveja`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Cerveja_Comida`
--
ALTER TABLE `Cerveja_Comida`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Comida`
--
ALTER TABLE `Comida`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Cerveja_Comida`
--
ALTER TABLE `Cerveja_Comida`
  ADD CONSTRAINT `fk_Cerveja_Comida_Cerveja` FOREIGN KEY (`cerveja_id`) REFERENCES `Cerveja` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Cerveja_Comida_Comida1` FOREIGN KEY (`comida_id`) REFERENCES `Comida` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
