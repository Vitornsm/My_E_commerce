-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27-Ago-2024 às 20:41
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
-- Banco de dados: `bd_mye`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `promocao`
--

DROP TABLE IF EXISTS `promocao`;
CREATE TABLE IF NOT EXISTS `promocao` (
  `ID` decimal(4,0) NOT NULL,
  `IMAGEM` varchar(255) NOT NULL,
  `DESCRICAO` varchar(255) NOT NULL,
  `PRECO` double(7,0) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `promocao`
--

INSERT INTO `promocao` (`ID`, `IMAGEM`, `DESCRICAO`, `PRECO`) VALUES
('1', 'pexels_1', 'RODUTO BOM', 10),
('2', 'pexels_2', 'BOM DE MAIS', 20),
('3', 'pexels_3', 'BOM DE MAIS', 30),
('4', 'pexels_4', 'BOM DE MAIS', 40),
('6', 'pexels_5', 'BOM DE MAIS', 50),
('7', 'pexels_7', 'ecelente', 70),
('8', 'pexels_8', 'ecelente', 80),
('9', 'pexels_9', 'ecelente', 90),
('10', 'pexels_10', 'ecelente', 100),
('11', 'pexels_11', 'ecelente', 110),
('12', 'pexels_12', 'ecelente', 120),
('13', 'pexels_13', 'ecelente', 130);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
