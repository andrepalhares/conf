-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Dez-2018 às 14:16
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `confucio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `con_alunos`
--

CREATE TABLE `con_alunos` (
  `id_aluno` int(11) NOT NULL,
  `matricula_aluno` int(11) NOT NULL,
  `email_aluno` varchar(200) NOT NULL,
  `senha_aluno` varchar(50) NOT NULL,
  `nome_aluno` varchar(50) NOT NULL,
  `sobrenome_aluno` varchar(100) NOT NULL,
  `nivel_aluno` int(2) NOT NULL,
  `nascimento_aluno` date NOT NULL,
  `cidade_aluno` varchar(200) NOT NULL,
  `status_aluno` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `con_alunos`
--

INSERT INTO `con_alunos` (`id_aluno`, `matricula_aluno`, `email_aluno`, `senha_aluno`, `nome_aluno`, `sobrenome_aluno`, `nivel_aluno`, `nascimento_aluno`, `cidade_aluno`, `status_aluno`) VALUES
(1, 2017083121, 'andre@hotmail.com', '63283b3c28d80d844e8d5e88d61e84f3', 'Andre', 'P. C.', 2, '2018-12-06', 'Belo Horizonte', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `con_notas`
--

CREATE TABLE `con_notas` (
  `id_nota` int(11) NOT NULL,
  `aluno_nota` int(11) NOT NULL,
  `valor_nota` int(11) NOT NULL,
  `status_nota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `con_alunos`
--
ALTER TABLE `con_alunos`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Indexes for table `con_notas`
--
ALTER TABLE `con_notas`
  ADD PRIMARY KEY (`id_nota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `con_alunos`
--
ALTER TABLE `con_alunos`
  MODIFY `id_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `con_notas`
--
ALTER TABLE `con_notas`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
