-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 25-Jul-2023 às 00:39
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
-- Banco de dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamentos`
--

DROP TABLE IF EXISTS `agendamentos`;
CREATE TABLE IF NOT EXISTS `agendamentos` (
  `id_agendamento` int NOT NULL AUTO_INCREMENT,
  `desc_agendamento` datetime NOT NULL,
  `id_usuario` int NOT NULL,
  `id_servico` int NOT NULL,
  PRIMARY KEY (`id_agendamento`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_servico` (`id_servico`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `agendamentos`
--

INSERT INTO `agendamentos` (`id_agendamento`, `desc_agendamento`, `id_usuario`, `id_servico`) VALUES
(13, '2023-07-25 10:02:48', 1, 2),
(14, '2023-07-26 10:23:00', 2, 2),
(6, '2023-07-24 09:42:06', 2, 1),
(5, '2023-07-24 09:42:06', 2, 1),
(7, '2023-07-24 09:42:06', 36, 1),
(8, '2023-07-24 09:42:06', 36, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

DROP TABLE IF EXISTS `servicos`;
CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  `valor` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `descricao`, `valor`) VALUES
(1, 'Corte de Cabelo', '20.00'),
(2, 'Pintar Unhas', '30.00'),
(3, 'Chapinha', '50.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(140) NOT NULL,
  `senha` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `permiss` varchar(10) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `senha`, `data_cadastro`, `permiss`) VALUES
(1, 'João Henrique', 'teste@teste.com', '698dc19d489c4e4db73e28a713eab07b', '2023-07-21 22:32:16', 'ADM'),
(2, 'Natalia Pereira', 'natalia@gmail.com', 'b74f6a1dcd2aa66269575d1ede7867aa', '2023-07-22 11:20:15', ''),
(3, 'Ricardo', 'ricardo@gmail.com', 'f2a46c2e2f0b81c20b9ed0a7643d179f', '2023-07-22 11:05:31', ''),
(35, 'pereira', 'pereira@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-07-23 15:50:32', ''),
(34, 'joaohenrique', 'joaohenrique@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-07-23 10:51:42', ''),
(36, 'Julia Agostinha', 'julia@gmail.com', '04305e8ef1c15dbf249cc0c99ce86107', '2023-07-23 16:23:35', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
