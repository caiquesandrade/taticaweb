-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Maio-2019 às 13:59
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taticaweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens_contatos`
--

CREATE TABLE `mensagens_contatos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `mensagem` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Teste para Tática Web';

--
-- Extraindo dados da tabela `mensagens_contatos`
--

INSERT INTO `mensagens_contatos` (`id`, `nome`, `email`, `telefone`, `assunto`, `mensagem`, `created`, `modified`) VALUES
(1, 'Caique de Souza Andrade', 'caiquesandrade@live.com', '24 998446276', 'teste', 'teste', '2019-05-29 16:30:48', NULL),
(2, 'Caique de Souza Andrade', 'caiquesandrade@live.com', '12123123', 'email teste', 'scas', '2019-05-29 16:49:49', NULL),
(3, 'Caique', 'caiquesandrade@live.com', '12123123', 'email teste', 'asadasd', '2019-05-29 16:56:08', NULL),
(4, 'Roberto correia', 'roberto.c@gmail.com', '24 998446276', 'orÃ§amento', 'gostaria de fazer um orÃ§amento com a empresa. Pode me enviar uma mensagem ?\r\n', '2019-05-30 08:03:29', NULL),
(5, 'Caique', 'caiquesandrade@live.com', '24 998446276', 'email teste', 'ascas', '2019-05-30 08:32:48', NULL),
(6, 'Caique', 'caiquesandrade@live.com', '24 998446276', 'email teste', 'ascas', '2019-05-30 08:43:47', NULL),
(7, 'agora foi', 'agora@agora', '123456', 'agora foi', 'retornou. ', '2019-05-30 08:44:16', NULL),
(8, 'Caique', 'caiquesandrade@live.com', '24 998446276', 'teste', 'asdasd', '2019-05-30 08:45:32', NULL),
(9, 'Roberto correia', 'roberto.c@gmail.com', '123456', 'agora foi', 'asdas', '2019-05-30 08:46:28', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mensagens_contatos`
--
ALTER TABLE `mensagens_contatos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mensagens_contatos`
--
ALTER TABLE `mensagens_contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
