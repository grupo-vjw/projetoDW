-- phpMyAdmin SQL Dump
-- version 3.5.3
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.28
-- Versão do PHP: 5.3.18

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `dnascimento` date NOT NULL,
  `dpagamento` int(2) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `numero` int(4) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `complemento` varchar(100) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sexo`, `cpf`, `dnascimento`, `dpagamento`, `logradouro`, `numero`, `bairro`, `complemento`, `cep`, `usuario`, `senha`) VALUES
(1, 'jose amarildo', 'm', '1234566', '2013-04-02', 0, 'rua rua', 123, 'centro', '', '58011110', 'jose', 'jose123'),
(2, 'pedro', 'm', '12345', '2001-11-29', 7, 'rua', 233, 'centro', '', '58011110', 'pedro', 'p123'),
(3, 'Evandson', 'M', 'xxx.xxx.xxx', '1992-03-04', 1, 'R. José C. Chaves', 518, '', '', '58041-09', 'Evandson', '123'),
(5, 'jose', 'm', '1876', '2013-04-04', 8, '654654', 9, 'asdf', 'asdfasdf', '654654', 'jose', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
