-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Jun-2022 às 14:46
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_develop`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_usuario`
--

CREATE TABLE `cadastro_usuario` (
  `nome` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefone` int(150) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `idusuario` int(150) NOT NULL,
  `sexo` char(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro_usuario`
--

INSERT INTO `cadastro_usuario` (`nome`, `email`, `telefone`, `senha`, `idusuario`, `sexo`) VALUES
('sue', 'su@n.com', 5555, '123', 2, 'F'),
('pedro kaue carneiro bernardino ', 'pedrok151.car@gmail.com', 2147483647, '123', 3, 'M'),
('Marilia Mendonça', 'marilia@mail.com', 55555444, '123', 4, 'M'),
('vitor hugo', 'vitor@gmail.com', 22222, '12541', 5, 'M'),
('vitor hugo', 'uizsfnu8ebf7s6yeb@vsjfn', 0, 'wswqzqzaqzazaq', 8, 'M'),
('', '', 0, '', 9, 'M'),
('rikelme2', 'rikinnho@gmail.com', 2147483647, '45466a78a', 10, 'M'),
('Vitor Hugo', 'ZezinDaRoça@gmail.com', 0, '5555', 11, 'M'),
('Tom', 'pegajerry@gmail.com', 1234978, 'jerryfraco', 13, 'I'),
('fabio lopes', 'fabiolopes@gmail.com', 14141, 'trabalha', 14, 'M'),
('Willian Wanderlley', 'wiliambombado@gmail.com', 12357, '123', 16, 'M'),
('', '', 0, '', 17, 'M'),
('', '', 0, '', 18, 'M');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro_usuario`
--
ALTER TABLE `cadastro_usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_usuario`
--
ALTER TABLE `cadastro_usuario`
  MODIFY `idusuario` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
