-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Out-2018 às 20:13
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
-- Database: `norteando`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `reg_email`
--

CREATE TABLE `reg_email` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `email` varchar(256) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reg_email`
--

INSERT INTO `reg_email` (`id`, `nome`, `email`, `comentario`) VALUES
(1, 'Willyan', 'willyanksrodrigues15@gmail.com', 'Eae, pessoal do Norteando. Como faÃ§o para adquirir o sistema?'),
(2, 'Cidinha', 'alcsilva111@gmail.com', 'VocÃªs acreditam em eilians?'),
(3, 'Cidinha', 'alcsilva111@gmail.com', 'VocÃªs acreditam em eilians?'),
(4, 'Cidinha', 'alcsilva111@gmail.com', 'VocÃªs acreditam em eilians?'),
(5, 'Luiz', 'luiz@ifro.edu.br', 'Vcs tirarÃ£o a nota mÃ¡xima na prÃ³xima banca. AmÃ©m?!'),
(6, 'Lol', 'willyan.k.s.rodrigues@hotmail.com', 'eae'),
(7, 'sa', 'infro@gmail.com', 's'),
(8, 'PS4', 'g@jh', 'fd'),
(9, 'Gta', 'g@jh', 'alo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg_email`
--
ALTER TABLE `reg_email`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg_email`
--
ALTER TABLE `reg_email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
