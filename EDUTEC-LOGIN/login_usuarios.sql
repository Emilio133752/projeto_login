-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Tempo de geração: 05-Out-2021 às 19:03
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_usuarios`
--
DROP TABLE IF EXISTS `login_usuarios`;
CREATE TABLE IF NOT EXISTS `login_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login_usuarios`
--

INSERT INTO `login_usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(3, 'Emilio Santos MendonÃ§a', 'emiliocantil726@gmail.com2', '1c6637a8f2e1f75e06ff9984894d6bd16a3a36a9'),
(4, 'Emilio Santos MendonÃ§a', 'emiliocantil726@gmail.c', '210427ffde6b0fbad37d3dc5fbcd08d22695da29'),
(5, 'Xeraca', 'aa@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(6, 'Emilio Santos MendonÃ§a', 'emliocantil726@gmail.com', '07cea7ad6037661357dad52ee7b257a864db1f30'),
(7, 'Emilio Santos MendonÃ§a', 'emiliocantil726@gmail.com', '123'),
(8, 'Emilio Santos MendonÃ§a', 'emilintil726@gmail.com', '12345'),
(9, 'Emilio Santos MendonÃ§a', 'iocantil726@gmail.com', '123'),
(10, 'Emilio Santos MendonÃ§a', 'cantil726@gmail.com', '123'),
(11, 'Emilio Santos MendonÃ§a', 'emiliocantil726@gmail.', '123'),
(12, 'Emilio Santos MendonÃ§a', '26@gmail.com', '33333'),
(13, 'Emilio Santos MendonÃ§a', 'ocantil726@gmail.com', '123'),
(14, 'Emilio Santos MendonÃ§a', 'emiliocantil726gmail.com', '123313123'),
(15, 'Emilio Santos MendonÃ§a', 'ntil726@gmail.com', '1111111111111111'),
(16, 'Emilio Santos MendonÃ§a', 'aauaua@gmail.com', '1234567890'),
(17, 'Emilio Santos MendonÃ§a', '@gmail.com', '1231231231');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
