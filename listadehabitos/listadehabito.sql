-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/02/2023 às 15:06
-- Versão do servidor: 5.6.21
-- Versão do PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `listadehabito`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `habito`
--

CREATE TABLE IF NOT EXISTS `habito` (
`id` int(5) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'A'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `habito`
--

INSERT INTO `habito` (`id`, `nome`, `status`) VALUES
(1, '.comer demais.', 'A'),
(2, '.jogar videogame demais.', 'A'),
(3, '.dormir pouco.', 'V'),
(4, '.sedentarismo.', 'V'),
(5, '.raiva.', 'A'),
(8, '.dar palmada na gata.', 'V'),
(9, '.clayton gay.', 'V'),
(10, '.Chamar angÃ©lica de baytola.', 'V');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `habito`
--
ALTER TABLE `habito`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `habito`
--
ALTER TABLE `habito`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
