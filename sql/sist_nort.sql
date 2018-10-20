-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Out-2018 às 02:50
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sist_nort`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `control_pag`
--

CREATE TABLE `control_pag` (
  `id_control_pag` int(11) NOT NULL,
  `cod_passag` int(11) NOT NULL,
  `cod_rota` int(11) NOT NULL,
  `tipo` varchar(13) NOT NULL,
  `ano` int(4) NOT NULL,
  `mes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `graf_lin`
--

CREATE TABLE `graf_lin` (
  `id_lin` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `ano` int(4) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `graf_set`
--

CREATE TABLE `graf_set` (
  `id_set` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `ano` int(11) NOT NULL,
  `pago` int(11) NOT NULL,
  `inadimplente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mes`
--

CREATE TABLE `mes` (
  `cod_mes` int(11) NOT NULL,
  `mes` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rota_emp`
--

CREATE TABLE `rota_emp` (
  `id_rota` int(11) NOT NULL,
  `cod_rota` char(8) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `saida` varchar(50) NOT NULL,
  `destino` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `motorista` varchar(50) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `control_pag`
--
ALTER TABLE `control_pag`
  ADD PRIMARY KEY (`id_control_pag`),
  ADD KEY `fk_rota_cod` (`cod_rota`),
  ADD KEY `fk_mes_control` (`mes`);

--
-- Indexes for table `graf_set`
--
ALTER TABLE `graf_set`
  ADD PRIMARY KEY (`id_set`);

--
-- Indexes for table `mes`
--
ALTER TABLE `mes`
  ADD PRIMARY KEY (`cod_mes`);

--
-- Indexes for table `rota_emp`
--
ALTER TABLE `rota_emp`
  ADD PRIMARY KEY (`id_rota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `control_pag`
--
ALTER TABLE `control_pag`
  MODIFY `id_control_pag` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `graf_set`
--
ALTER TABLE `graf_set`
  MODIFY `id_set` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mes`
--
ALTER TABLE `mes`
  MODIFY `cod_mes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rota_emp`
--
ALTER TABLE `rota_emp`
  MODIFY `id_rota` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `control_pag`
--
ALTER TABLE `control_pag`
  ADD CONSTRAINT `fk_mes_control` FOREIGN KEY (`mes`) REFERENCES `mes` (`cod_mes`),
  ADD CONSTRAINT `fk_rota_cod` FOREIGN KEY (`cod_rota`) REFERENCES `rota_emp` (`id_rota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
