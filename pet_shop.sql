-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/06/2026 às 03:17
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pet_shop`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `id` int(11) NOT NULL,
  `pet_nome` varchar(100) NOT NULL,
  `nota` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `data_avaliacao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `banho`
--

CREATE TABLE `banho` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `especie` varchar(255) NOT NULL,
  `raca` varchar(255) NOT NULL,
  `porte` varchar(255) NOT NULL,
  `tutor` varchar(255) NOT NULL,
  `idade` varchar(255) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `banho`
--

INSERT INTO `banho` (`id`, `nome`, `especie`, `raca`, `porte`, `tutor`, `idade`, `usuario_id`) VALUES
(4, 'cachorro', 'Cão', 'vira-lata', 'grande', 'sla', '6 ', 0),
(6, 'junin', 'gatinho', 'vira-lata', 'pequeno', 'sla', '6 ', 0),
(7, 'pato', 'patinho', 'pato vira-lata', 'medio', 'livre', '5 meses', 0),
(8, 'pato', 'patinho', 'pato vira-lata', 'medio', 'livre', '5 meses', 0),
(9, 'furão', 'furão', ' vira-lata', 'pequeno', 'livre', '5 meses', 0),
(10, 'ruby', 'cachorro', 'pastor alemão', 'grande', 'larissa', '7 anos', 0),
(11, 'pombinha', 'passaro', 'sem ', 'pequeno', 'Jesus', '2 meses', 17),
(14, 'RAM', 'memória', 'peça', 'pequeno', 'computador', 'desconhecida', 18),
(16, 'Messoles', 'urso', 'sem', 'grande', 'lari', '10', 19),
(17, 'julia', 'teste', 'sla', 'grande', 'fulanin', '3', 19),
(19, 'bolinha', 'brinquedo', 'sem', 'pequeno', 'ruby', '1', 20),
(25, 'ruby', 'cachorro', 'pastor', 'grande', 'janaina', '7', 17),
(27, 'ruby2', 'ffffff', 'cacgphrj', 'ffffffff', 'fffffff', 'fffffffff', 21),
(28, 'veludo', 'cachorro', 'poodle', 'pequeno', 'Silvia', '5', 17),
(30, 'pet lara', 'Cão', 'labrador', 'pequeno', 'lara', '3 anos', 22),
(33, 'teste', 'teste', 'teste', 'teste', 'teste', 'teste coiso verde', 22);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastrar`
--

CREATE TABLE `cadastrar` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `idade` varchar(11) NOT NULL,
  `especie` varchar(255) NOT NULL,
  `raca` varchar(255) NOT NULL,
  `tutor` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastrar`
--

INSERT INTO `cadastrar` (`id`, `foto`, `nome`, `idade`, `especie`, `raca`, `tutor`, `descricao`, `usuario_id`) VALUES
(1, '6a1a4bd537a76.jpg', 'junin', '2 meses', 'cachorrinho', 'vira-lata', 'julia', 'muito docil as vezes', 0),
(3, '6a1a4da71da06.jpg', 'maylo', '2 meses', 'cão', 'golden', 'ciclano', 'muito fofinho', 0),
(7, '6a1b4a3a9e68f.jpg', 'gatinho de fone', 'desconhecid', 'gato', 'vira-lata', 'independente', 'ele gosta de musica', 0),
(9, '6a25836901d46.jpg', '\'', '3 meses', 'Cão', 'vira-lata', 'fulanin', 'muito fofinho', 0),
(10, '6a25840d0b854.jpg', 'junin', '3 meses', 'Cão', 'vira-lata', 'fulanin', 'muito fofinho', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tosa`
--

CREATE TABLE `tosa` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `especie` varchar(255) NOT NULL,
  `raca` varchar(255) NOT NULL,
  `porte` varchar(255) NOT NULL,
  `tutor` varchar(255) NOT NULL,
  `idade` int(255) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tosa`
--

INSERT INTO `tosa` (`id`, `nome`, `especie`, `raca`, `porte`, `tutor`, `idade`, `usuario_id`) VALUES
(4, 'test', 'vi', 'poodle', 'pequeno', 'fulanin', 2, 22),
(5, 'test', 'ww', 'poodle', 'pequeno', 'fulanin', 2, 22);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `banho`
--
ALTER TABLE `banho`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cadastrar`
--
ALTER TABLE `cadastrar`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tosa`
--
ALTER TABLE `tosa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `banho`
--
ALTER TABLE `banho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de tabela `cadastrar`
--
ALTER TABLE `cadastrar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tosa`
--
ALTER TABLE `tosa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
