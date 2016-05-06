-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05-Maio-2016 às 04:40
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `olimpiadas2016`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `idUsuario` int(11) NOT NULL,
  `idEvento` int(11) NOT NULL,
  `idCompra` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idCompra`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `compras`
--

INSERT INTO `compras` (`idUsuario`, `idEvento`, `idCompra`) VALUES
(1, 1, 1),
(1, 1, 2),
(1, 2, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `idEvento` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) CHARACTER SET armscii8 NOT NULL,
  `local` varchar(300) CHARACTER SET armscii8 NOT NULL,
  `imagem` varchar(300) DEFAULT NULL,
  `datahora` datetime NOT NULL,
  PRIMARY KEY (`idEvento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`idEvento`, `nome`, `local`, `imagem`, `datahora`) VALUES
(1, 'Futebol - Feminino - primeira fase (FB001)', 'Est?dio Ol?mpico', NULL, '2016-08-03 18:00:00'),
(2, 'Voleibol - Feminino - Primeira fase (VO001)', 'Maracan?zinho', NULL, '2016-08-06 09:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modalidades`
--

CREATE TABLE IF NOT EXISTS `modalidades` (
  `idModalidade` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) CHARACTER SET armscii8 NOT NULL,
  `descricao` text CHARACTER SET armscii8 NOT NULL,
  `finalidade` varchar(300) CHARACTER SET armscii8 DEFAULT NULL,
  `composicaoequipe` varchar(300) CHARACTER SET armscii8 NOT NULL,
  `regras` text CHARACTER SET armscii8 NOT NULL,
  `estreia` text CHARACTER SET armscii8 NOT NULL,
  `locaiscompeticao` text CHARACTER SET armscii8 NOT NULL,
  `genero` varchar(20) CHARACTER SET armscii8 NOT NULL,
  PRIMARY KEY (`idModalidade`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `modalidades`
--

INSERT INTO `modalidades` (`idModalidade`, `nome`, `descricao`, `finalidade`, `composicaoequipe`, `regras`, `estreia`, `locaiscompeticao`, `genero`) VALUES
(1, 'V?lei de Praia', 'Em uma quadra de areia dividida por uma rede, duas duplas se enfrentam, com o objetivo de fazer com que a bola toque a quadra do advers?rio', NULL, 'Duas pessoas', 'Caso n?o tenha certeza se a bola tocou dentro ou fora da quadra, o primeiro ?rbitro pode levar em conta a marca da bola na areia para tomar sua decis?o', 'Atlanta 1996', 'Arena de V?lei de Praia', 'Masculino/Feminino'),
(2, 'V?lei de Praia', 'Em uma quadra de areia dividida por uma rede, duas duplas se enfrentam, com o objetivo de fazer com que a bola toque a quadra do advers?rio', NULL, 'Duas pessoas', 'Caso n?o tenha certeza se a bola tocou dentro ou fora da quadra, o primeiro ?rbitro pode levar em conta a marca da bola na areia para tomar sua decis?o', 'Atlanta 1996', 'Arena de V?lei de Praia', 'Masculino/Feminino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `idNoticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) CHARACTER SET armscii8 NOT NULL,
  `texto` text CHARACTER SET armscii8 NOT NULL,
  `imagem` varchar(300) CHARACTER SET armscii8 DEFAULT NULL,
  PRIMARY KEY (`idNoticia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `quadro`
--

CREATE TABLE IF NOT EXISTS `quadro` (
  `idPais` int(11) NOT NULL AUTO_INCREMENT,
  `pais` varchar(30) CHARACTER SET armscii8 NOT NULL,
  `ouro` int(11) DEFAULT NULL,
  `prata` int(11) DEFAULT NULL,
  `bronze` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `siglaPais` varchar(10) CHARACTER SET armscii8 NOT NULL,
  PRIMARY KEY (`idPais`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL,
  `nome` varchar(30) CHARACTER SET utf8 NOT NULL,
  `usuario` varchar(30) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(10) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `nome`, `usuario`, `senha`) VALUES
(1, 'arielle.sathler@gmail.com', 'Arielle Sathler', 'ariellesathler', '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
