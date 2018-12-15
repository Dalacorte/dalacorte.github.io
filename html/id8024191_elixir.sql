-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 14-Dez-2018 às 21:09
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id8024191_elixir`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `senha` varchar(40) NOT NULL,
  `email` varchar(150) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `fotos` varchar(200) NOT NULL,
  `cursosTerminados` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `senha`, `email`, `nome`, `fotos`, `cursosTerminados`) VALUES
(0000000014, '202cb962ac59075b964b07152d234b70', 'juliofack007@hotmail.com', 'Julio Cezar Silvério Pinto', '', 0),
(0000000016, '5abe2d66060ef16178909b5e4edf3467', 'analuizarodrigues007@gmail.com', 'Ana Luíza Rodrigues', '', 0),
(0000000017, '202cb962ac59075b964b07152d234b70', 'victordalacorte@hotmail.com', 'Dalacorte', '', 0),
(0000000018, '202cb962ac59075b964b07152d234b70', 'arthur.villa.silva@gmail.com', 'Arthur', '', 0),
(0000000019, '6fd446542cd547cba613bb9b9db3c323', 'reginaldo321.2011@gmail.com', 'Reginaldo Daniel Ferreira ', '', 0),
(0000000020, 'ff7e02af477dfedefa49c65d0ff3689f', 'viniciusolive.ira@outlook.com', 'Vinicius', '', 0),
(0000000021, '76e72205079204b909294ebbef5b10f7', 'viniskinwalker@gmail.com', 'PaulaBido ', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `codigos`
--

CREATE TABLE `codigos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(200) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `codigos`
--

INSERT INTO `codigos` (`id`, `codigo`, `data`) VALUES
(10, 'Zm91cnR6dGhla2luZ0BnbWFpbC5jb20=', '2018-12-12 06:02:37'),
(11, 'Zm91cnR6dGhla2luZ0BnbWFpbC5jb20=', '2018-12-12 06:04:40'),
(12, 'Zm91cnR6dGhla2luZ0BnbWFpbC5jb20=', '2018-12-12 06:07:37'),
(13, 'Zm91cnR6dGhla2luZ0BnbWFpbC5jb20=', '2018-12-12 06:08:34'),
(14, 'Zm91cnR6dGhla2luZ0BnbWFpbC5jb20=', '2018-12-12 06:08:59'),
(15, 'Zm91cnR6dGhla2luZ0BnbWFpbC5jb20=', '2018-12-12 06:09:22'),
(16, 'Zm91cnR6dGhla2luZ0BnbWFpbC5jb20=', '2018-12-12 06:09:39'),
(17, 'Zm91cnR6dGhla2luZ0BnbWFpbC5jb20=', '2018-12-12 06:10:10'),
(18, 'Zm91cnR6dGhla2luZ0BnbWFpbC5jb20=', '2018-12-12 06:10:49'),
(19, 'Zm91cnR6dGhla2luZ0BnbWFpbC5jb20=', '2018-12-12 06:11:18'),
(20, 'Zm91cnR6dGhla2luZ0BnbWFpbC5jb20=', '2018-12-12 06:11:33'),
(21, 'Zm91cnR6dGhla2luZ0BnbWFpbC5jb20=', '2018-12-12 06:11:40'),
(22, 'Zm91cnR6dGhla2luZ0BnbWFpbC5jb20=', '2018-12-12 06:11:54'),
(23, 'Zm91cnR6dGhla2luZ0BnbWFpbC5jb20=', '2018-12-12 06:12:02'),
(24, 'Zm91cnR6dGhla2luZ0BnbWFpbC5jb20=', '2018-12-12 06:12:10'),
(25, 'Zm91cnR6dGhla2luZ0BnbWFpbC5jb20=', '2018-12-12 06:13:25'),
(26, 'Zm91cnR6dGhla2luZ0BnbWFpbC5jb20=', '2018-12-12 06:13:34'),
(27, 'anVsaW9mYWNrMDA3QGhvdG1haWwuY29t', '2018-12-15 20:59:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `codigos`
--
ALTER TABLE `codigos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `codigos`
--
ALTER TABLE `codigos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
