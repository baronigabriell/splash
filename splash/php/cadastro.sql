-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 09-Dez-2024 às 13:43
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro`
--
CREATE DATABASE IF NOT EXISTS `cadastro` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cadastro`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bilheteria`
--

DROP TABLE IF EXISTS `bilheteria`;
CREATE TABLE IF NOT EXISTS `bilheteria` (
  `bil_cod` int NOT NULL AUTO_INCREMENT,
  `bil_nome` varchar(90) COLLATE utf8mb4_general_ci NOT NULL,
  `bil_cpf` varchar(14) COLLATE utf8mb4_general_ci NOT NULL,
  `bil_telefone` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `bil_ingresso` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`bil_cod`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `bilheteria`
--

INSERT INTO `bilheteria` (`bil_cod`, `bil_nome`, `bil_cpf`, `bil_telefone`, `bil_ingresso`) VALUES
(7, 'Aparecida Neves Montalvão', '456.234.928-54', '(19) 99765-1923', 'meia'),
(6, 'Aparecida Neves Montalvão', '456.234.928-54', '(19) 99765-1923', 'meia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `manutenção`
--

DROP TABLE IF EXISTS `manutenção`;
CREATE TABLE IF NOT EXISTS `manutenção` (
  `man_cod` int NOT NULL AUTO_INCREMENT,
  `man_nomeservico` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `man_tecnico` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `man_data` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`man_cod`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `manutenção`
--

INSERT INTO `manutenção` (`man_cod`, `man_nomeservico`, `man_tecnico`, `man_data`) VALUES
(1, '0', '0', '30'),
(2, 'oie', 'juarez', '30/11/2024'),
(3, 'oie', 'juarez', '30/11/2024'),
(4, 'oie', 'juarez', '30/11/2024'),
(5, 'oie', 'juarez', '30/11/2024'),
(6, 'oie', 'juarez', '30/11/2024'),
(7, 'oie', 'juarez', '30/11/2024'),
(8, 'oie', 'juarez', '30/11/2024'),
(9, 'oie', 'juarez', '30/11/2024'),
(10, 'oie', 'juarez', '30/11/2024'),
(11, 'oie', 'juarez', '30/11/2024'),
(12, 'oie', 'juarez', '30/11/2024'),
(13, 'oie', 'juarez', '30/11/2024'),
(14, 'oie', 'juarez', '30/11/2024'),
(15, 'oie', 'juarez', '30/11/2024'),
(16, 'oie', 'juarez', '30/11/2024'),
(17, 'oie', 'juarez', '30/11/2024'),
(18, 'oie', 'juarez', '30/11/2024'),
(19, 'oie', 'juarez', '30/11/2024'),
(20, 'oie', 'juarez', '30/11/2024'),
(21, 'oie', 'juarez', '30/11/2024'),
(22, 'oie', 'juarez', '30/11/2024'),
(23, 'oie', 'juarez', '30/11/2024'),
(24, 'oie', 'juarez', '30/11/2024'),
(25, 'oie', 'juarez', '30/11/2024'),
(26, 'oie', 'juarez', '30/11/2024'),
(27, 'oie', 'juarez', '30/11/2024'),
(28, 'oie', 'juarez', '30/11/2024'),
(29, 'oie', 'juarez', '30/11/2024'),
(30, 'oie', 'juarez', '30/11/2024'),
(31, 'oie', 'juarez', '30/11/2024'),
(32, 'oie', 'juarez', '30/11/2024'),
(33, 'oie', 'juarez', '30/11/2024'),
(34, 'oie', 'juarez', '30/11/2024'),
(35, 'oie', 'juarez', '30/11/2024'),
(36, 'oie', 'juarez', '30/11/2024'),
(37, 'oie', 'juarez', '30/11/2024'),
(38, 'oie', 'juarez', '30/11/2024'),
(39, 'oie', 'juarez', '30/11/2024'),
(40, 'oie', 'juarez', '30/11/2024'),
(41, 'oie', 'juarez', '30/11/2024'),
(42, 'oie', 'juarez', '30/11/2024'),
(43, 'oie', 'juarez', '30/11/2024'),
(44, 'oie', 'juarez', '30/11/2024'),
(45, 'oie', 'juarez', '30/11/2024'),
(46, 'oie', 'juarez', '30/11/2024'),
(47, 'oie', 'juarez', '30/11/2024'),
(48, 'oie', 'juarez', '30/11/2024'),
(49, 'oie', 'juarez', '30/11/2024'),
(50, 'oie', 'juarez', '30/11/2024'),
(51, 'oie', 'juarez', '30/11/2024'),
(52, 'oie', 'juarez', '30/11/2024'),
(53, 'oie', 'juarez', '30/11/2024'),
(54, 'oie', 'juarez', '30/11/2024');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

DROP TABLE IF EXISTS `servico`;
CREATE TABLE IF NOT EXISTS `servico` (
  `ser_cod` int NOT NULL AUTO_INCREMENT,
  `ser_nome` varchar(90) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ser_cod`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`ser_cod`, `ser_nome`) VALUES
(1, 'oie');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
