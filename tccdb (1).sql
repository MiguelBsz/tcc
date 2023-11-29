-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 05:05 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tccdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `clinica`
--

CREATE TABLE `clinica` (
  `Id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(144) NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `endereco` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinica`
--

INSERT INTO `clinica` (`Id`, `nome`, `email`, `cnpj`, `senha`, `endereco`) VALUES
(1, 'nome', 'email', 'cnpj', 'senha', 'endereco'),
(15, 'xccxc', 'cxccx@dfsad', 'cxzsad12', '3212', 'wesad'),
(16, 'nome', 'ema@gmail', 'cnp', 'senha', 'endereco'),
(17, 'nome', 'ema@gmail', 'cnp', 'senha', 'endereco'),
(18, 'nome', 'ema@gmail', 'cnp', 'senha', 'endereco'),
(19, 'nome', 'ema@gmail', 'cnp', 'senha', 'endereco'),
(20, 'nome', 'ema@gmail', 'cnp', 'senha', 'endereco'),
(21, 'nome', 'ema@gmail', 'cnp', 'senha', 'endereco'),
(22, 'nome', 'ema@gmail', 'cnp', 'senha', 'endereco');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(140) NOT NULL,
  `senha` varchar(16) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `nome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `senha`, `usuario`, `nome`) VALUES
(1, 'seqsabe@gmail.com', '1234', 'root', 'usuario'),
(13, 'seqsab321e@gmail.com', '8765', '', 'migel'),
(14, 'info2020.20203029921@gmail.com', '3214', '', 'passad');

-- --------------------------------------------------------

--
-- Table structure for table `medico`
--

CREATE TABLE `medico` (
  `Id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `especialidade` varchar(30) NOT NULL,
  `crm` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medico`
--

INSERT INTO `medico` (`Id`, `nome`, `especialidade`, `crm`) VALUES
(1, 'migel', 'outo', '412312'),
(2, 'pas', '312', '321'),
(3, 'passad', 'esp', '321'),
(4, 'passad', 'esp', '321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clinica`
--
ALTER TABLE `clinica`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clinica`
--
ALTER TABLE `clinica`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `medico`
--
ALTER TABLE `medico`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
