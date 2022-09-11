-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Set-2022 às 00:37
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cpf` varchar(15) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cpf`, `nome`, `genero`, `email`, `status`, `telefone`, `senha`, `data_nasc`) VALUES
('000.111.222-33', 'Cleitin Da Silva Souza', 'Não opinar', 'CleitonRasta@gmail.com', 'Suspenso', '(23) 98715-9546', '0000', '1998-02-13'),
('001.234.567-89', 'teste', 'Não opinar', '1@gmail.com', 'Suspenso', '(22) 99613-9790', '123456', '1999-01-25'),
('010.121.262-45', 'Bill', 'Não opinar', 'fidobill@gmail.com', 'ativo', '(23) 98715-9666', '0123', '1998-01-15'),
('123.006.549-81', 'fi do bill', 'Masculino', 'dobillFI@gmail.com', 'Suspenso', '(48) 99999-9999', '1234', '2010-03-13'),
('123.456.789-10', 'Yuri Martins', 'Masculino', 'teste@gmail.com', 'Ativo', '(22) 99613-9790', '123456', '1999-03-23'),
('170.806.177-07', 'Yan Martins Lourenço Fraga', 'Masculino', 'yanloufraga2@gmail.com', 'Ativo', '(22) 98871-8656', '12345678', '2004-01-13'),
('595.198.125-65', 'Thais Martins', 'Feminino', 'teste@gmail.com', 'Desligado', '(11) 98899-8565', '123456', '1986-12-10'),
('888.994.816-68', 'jorgin Da Silva', 'Feminino', 'CleitonRasta@gmail.com', 'Ativo', '(23) 98715-9546', '0000', '1999-01-01'),
('987.654.321-01', 'Rafael', 'Masculino', '1@gmail.com', 'Suspenso', '(22) 99613-9790', '123456', '0000-00-00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
