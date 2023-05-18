-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Maio-2023 às 17:30
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sis-escolar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_alunos`
--

CREATE TABLE `tb_alunos` (
  `id` int(8) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `dataNasc` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(17) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `nCasa` varchar(6) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `genero` varchar(9) NOT NULL,
  `turma_id` int(8) NOT NULL,
  `statusMat` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_alunos`
--

INSERT INTO `tb_alunos` (`id`, `nome`, `dataNasc`, `email`, `tel`, `cep`, `endereco`, `nCasa`, `bairro`, `cidade`, `estado`, `genero`, `turma_id`, `statusMat`) VALUES
(1, 'Luis Felipe Salvarani', '2000-03-13', 'felipe_salvarani@hotmail.com', '(19)99909-6992', '13972370', 'Rua Vítor Meirelles', '107', 'Cubatão', 'Itapira', 'SP', '0', 1, ''),
(6, 'luis felipe', '2000-08-29', 'felipe_salvarani@hotmail.com', '(19)99692-9909', '13972-37', 'Rua Vítor Meirelles', '107', 'Cubatão', 'Itapira', 'SP', '1', 1, 'on'),
(7, 'Junior', '2005-02-28', 'luis.felipe.salvarani@gmail.com', '(19)99692-9909', '13972-37', 'Rua Vítor Meirelles', '200', 'Cubatão', 'Itapira', 'SP', '0', 3, 'on'),
(9, 'Luis Felipe Salvarani', '2000-03-13', 'felipe_salvarani@hotmail.com', '(19) 99909 - 6992', '13972370', 'Rua Vítor Meirelles', '107', 'Cubatão', 'Itapira', 'SP', '0', 1, 'on'),
(10, 'Luis Felipe Salvarani', '2000-03-13', 'felipe_salvarani@hotmail.com', '(19) 99909-6992', '13972-37', 'Rua Vítor Meirelles', '107', 'Cubatão', 'Itapira', 'SP', '0', 1, ''),
(11, 'Luis Felipe Salvarani', '2000-03-13', 'felipe_salvarani@hotmail.com', '(19) 99909-6992', '13972-37', 'Rua Vítor Meirelles', '107', 'Cubatão', 'Itapira', 'SP', '0', 1, 'on'),
(12, 'Luis Felipe Salvarani', '2000-03-13', 'felipe_salvarani@hotmail.com', '(19) 99909-6992', '13972-370', 'Rua Vítor Meirelles', '107', 'Cubatão', 'Itapira', 'SP', '0', 1, 'on'),
(13, 'Luis Felipe Salvarani', '2000-03-13', 'felipe_salvarani@hotmail.com', '(19) 99909-6992', '13972-370', 'Rua Vítor Meirelles', '107', 'Cubatão', 'Itapira', 'SP', '0', 3, ''),
(14, 'Luis Felipe Salvarani', '2000-03-13', 'felipe_salvarani@hotmail.com', '(19) 99909-6992', '13972-370', 'Rua Vítor Meirelles', '107', 'Cubatão', 'Itapira', 'SP', '0', 3, ''),
(15, 'Luis Felipe Salvarani', '2000-03-13', 'felipe_salvarani@hotmail.com', '(19) 99909-6992', '13972-370', 'Rua Vítor Meirelles', '107', 'Cubatão', 'Itapira', 'SP', '0', 3, ''),
(16, 'Luis Felipe Salvarani', '2000-03-13', 'felipe_salvarani@hotmail.com', '(19) 99909-6992', '13972-370', 'Rua Vítor Meirelles', '107', 'Cubatão', 'Itapira', 'SP', '0', 4, 'on');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_disciplinas`
--

CREATE TABLE `tb_disciplinas` (
  `id` int(8) NOT NULL,
  `descDisci` varchar(60) NOT NULL,
  `cargaHora` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_disciplinas`
--

INSERT INTO `tb_disciplinas` (`id`, `descDisci`, `cargaHora`) VALUES
(1, 'ED', '130'),
(2, 'BDNR', '140');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_turmas`
--

CREATE TABLE `tb_turmas` (
  `turma_id` int(8) NOT NULL,
  `descTurma` varchar(60) NOT NULL,
  `ano` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_turmas`
--

INSERT INTO `tb_turmas` (`turma_id`, `descTurma`, `ano`) VALUES
(5, 'Gestão da Produção I', '2022'),
(6, 'Gestão Empresarial', '2023');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `usuario`, `senha`) VALUES
(1, 'admin', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_alunos`
--
ALTER TABLE `tb_alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_disciplinas`
--
ALTER TABLE `tb_disciplinas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_turmas`
--
ALTER TABLE `tb_turmas`
  ADD PRIMARY KEY (`turma_id`);

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_alunos`
--
ALTER TABLE `tb_alunos`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tb_disciplinas`
--
ALTER TABLE `tb_disciplinas`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_turmas`
--
ALTER TABLE `tb_turmas`
  MODIFY `turma_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
