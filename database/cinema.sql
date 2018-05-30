-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Maio-2018 às 02:50
-- Versão do servidor: 5.7.21-log
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ator`
--

CREATE TABLE `ator` (
  `id` int(11) NOT NULL,
  `nome` char(40) NOT NULL,
  `email` char(40) NOT NULL,
  `telefone` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atuacao`
--

CREATE TABLE `atuacao` (
  `idAtor` int(11) NOT NULL,
  `idFilme` int(11) NOT NULL,
  `papel` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `direcao`
--

CREATE TABLE `direcao` (
  `idDiretor` int(11) NOT NULL,
  `idFilme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `diretor`
--

CREATE TABLE `diretor` (
  `id` int(11) NOT NULL,
  `nome` char(40) NOT NULL,
  `endereco` char(40) NOT NULL,
  `telefone` char(15) NOT NULL,
  `email` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `documentario`
--

CREATE TABLE `documentario` (
  `id` int(11) NOT NULL,
  `assunto` char(20) NOT NULL,
  `idFilme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE `filme` (
  `id` int(11) NOT NULL,
  `titulo` char(40) NOT NULL,
  `verba` float NOT NULL,
  `dtGravacaoInicio` date NOT NULL,
  `dtGravacaoFim` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `longametragem`
--

CREATE TABLE `longametragem` (
  `id` int(11) NOT NULL,
  `categoria` char(20) NOT NULL,
  `idFilme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `producao`
--

CREATE TABLE `producao` (
  `idProdutor` int(11) NOT NULL,
  `idFilme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtor`
--

CREATE TABLE `produtor` (
  `id` int(11) NOT NULL,
  `nome` char(40) NOT NULL,
  `telefone` char(15) NOT NULL,
  `email` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ator`
--
ALTER TABLE `ator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `atuacao`
--
ALTER TABLE `atuacao`
  ADD PRIMARY KEY (`idAtor`,`idFilme`);

--
-- Indexes for table `direcao`
--
ALTER TABLE `direcao`
  ADD PRIMARY KEY (`idDiretor`,`idFilme`);

--
-- Indexes for table `diretor`
--
ALTER TABLE `diretor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documentario`
--
ALTER TABLE `documentario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idfilme_documentario` (`idFilme`);

--
-- Indexes for table `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `longametragem`
--
ALTER TABLE `longametragem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idfilme_longametragem` (`idFilme`);

--
-- Indexes for table `producao`
--
ALTER TABLE `producao`
  ADD PRIMARY KEY (`idProdutor`,`idFilme`);

--
-- Indexes for table `produtor`
--
ALTER TABLE `produtor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ator`
--
ALTER TABLE `ator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diretor`
--
ALTER TABLE `diretor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documentario`
--
ALTER TABLE `documentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filme`
--
ALTER TABLE `filme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `longametragem`
--
ALTER TABLE `longametragem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtor`
--
ALTER TABLE `produtor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `documentario`
--
ALTER TABLE `documentario`
  ADD CONSTRAINT `fk_idfilme_documentario` FOREIGN KEY (`idFilme`) REFERENCES `filme` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `longametragem`
--
ALTER TABLE `longametragem`
  ADD CONSTRAINT `fk_idfilme_longametragem` FOREIGN KEY (`idFilme`) REFERENCES `filme` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
