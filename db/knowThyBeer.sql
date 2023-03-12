-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: sql10.freemysqlhosting.net
-- Generation Time: Mar 12, 2023 at 08:11 AM
-- Server version: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sql10603066`
--
CREATE DATABASE IF NOT EXISTS `sql10603066` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sql10603066`;

-- --------------------------------------------------------

--
-- Table structure for table `Cerveja`
--

CREATE TABLE `Cerveja` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` char(50) NOT NULL,
  `descricao` text,
  `foto` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Cerveja`
--

INSERT INTO `Cerveja` (`id`, `nome`, `descricao`, `foto`) VALUES
(1, 'Blonde Ale', 'Cerveja de aroma maltado leve a moderado. Amargor e teor alcoólico leve a moderados. Podem estar presentes notas suaves de pão ou biscoito, frutas e lúpulo. É uma cerveja bem balanceada e fácil de beber, tipicamente de corpo leve a médio.', 'blond_ale.png'),
(2, 'British Style Bitter', 'Também chamada de English Pale Ale, é uma cerveja de cor dourada a cobre. Malte e lúpulos balanceados, com notas de malte caramelo e lúpulo com notas herbais, terrosas ou florais. Teor alcoólico leve e amargor moderado.', 'british_style_bitter.png'),
(3, 'American Pale Ale', 'Cerveja de cor dourada a âmbar claro, balanceada, refrescante e fácil de beber. Teor alcoólico e amargor moderados. Possui sabor e aroma de lúpulos com notas cítricas, florais ou frutadas.', 'american_pale_ale.png'),
(4, 'IPA - India Pale Ale', 'Cerveja de cor dourado claro a âmbar, bastante lupulada e amarga. Possui sabor e aroma de lúpulos com notas cítricas, florais ou frutadas.', 'india_pale_ale.png'),
(5, 'Double ou Imperial IPA', 'Cerveja de cor dourada a cobre, com aroma e sabor de lúpulo intensos e complexos. É bastante amarga, com teor alcoólico alto, e por isso é indicada para paladares mais experientes.', 'double-ipa.png'),
(6, 'Red Ale', 'Cerveja de cor âmbar médio a cobre avermelhado. Teor alcoólico e amargor leve a moderados. Sabor e aroma maltados, com notas de toffee/caramelo, equilibradas com leve sabor torrado.', 'red_ale.png'),
(7, 'Brown Ale', 'Cerveja de cor âmbar escuro a cobre. Cerveja maltada, que pode incluir notas de caramelo, toffee, nozes e chocolate.', 'brown_ale.png'),
(8, 'Dubbel', 'Cerveja de cor âmbar escuro a cobre. Cerveja maltada e complexa, com notas de frutas secas, caramelo, chocolate, torrado. Amargor baixo e alto teor alcoólico.', 'dubbel.png'),
(9, 'Strong Ale', 'Cerveja de cor dourado escuro a cobre. Cerveja maltada e complexa, com sabor adocicado e notas de frutas secas, caramelo, toffee e nozes. Amargor moderado e teor alcoólico moderado a alto.', 'strong_ale.png'),
(10, 'Barley Wine', 'Cerveja de cor dourado escuro a cobre. Cerveja maltada e complexa, frequentemente envelhecida em barris de vinho ou uísque. Possui notas de frutas secas e caramelo, com sabor adocicado. Seu alto teor alcoólico oferece sensação de aquecimento à boca.', 'barley_wine.png'),
(11, 'Porter', 'Cerveja de coloração marrom, de com caráter maltado e tostado. Sabor que lembra pão e biscoitos, podendo apresentar notas de caramelo, nozes e café. Amargor e teor alcoólico moderados.', 'porter.png'),
(12, 'Stout', 'Cerveja opaca, de coloração marrom escura. Sabor maltado tostado pronunciado, lembrando café. Notas de chocolate, cacau e caramelo também podem estar presentes. Amargor médio a alto e teor alcoólico médio.', 'stout.png'),
(13, 'Imperial Stout', 'Cerveja opaca, de coloração marrom escura. Sabor maltado tostado intenso e complexo. Notas de frutas secas, café, chocolate e grão tostado. Amargor médio a alto, com alto teor alcoólico que frequentemente proporciona uma sensação aquecida, equilibrada com o caráter amargo e adocicado da cerveja.', 'stout.png'),
(14, 'Weissbier', 'Cerveja alemã encorpada a base de trigo, de cor amarelo pálido a dourado claro. No aroma e sabor, traz notas de banana e cravo, acompanhados pelo caráter maltado que lembra pão e biscoitos. Cerveja fácil de beber, com baixo amargor e teor alcoólico.', 'weissbier.png'),
(15, 'Witbier', 'Cerveja a base de trigo, de cor amarelo pálido a dourado claro. É uma cerveja bastante aromatica, com notas de especiarias, especialmente o coentro. Também apresenta caráter frutado, levemente adocicado pelo uso do trigo. Cerveja refrescante, fácil de beber, com baixo amargor e teor alcoólico.', 'witbier.png'),
(16, 'Pilsener', 'Cerveja clara e brilhante, de cor dourada. De corpo leve, refrescante, com caráter maltado equilibrado em relação aos lúpulos. Cerveja fácil de beber, com amargor e teor alcoólico baixos a moderados.', 'pilsener.png'),
(17, 'Vienna Lager', 'Cerveja de cor âmbar avermelhado a cobre. Aroma maltado intenso a moderado, com sabor maltado que pode lembrar pão torrado. Amargor baixo e teor alcoólico baixo a moderado.', 'vienna_lager.png'),
(18, 'Dunkel', 'Cerveja lager escura, de coloração marrom. Aroma maltado, com notas de pão tostado e caráter levemente adocicado. Cerveja encorpada e fácil de beber, com amargor e teor alcoólico baixos a moderados.', 'dunkel.png');

-- --------------------------------------------------------

--
-- Table structure for table `Cerveja_Comida`
--

CREATE TABLE `Cerveja_Comida` (
  `id` int(10) UNSIGNED NOT NULL,
  `cerveja_id` int(10) UNSIGNED DEFAULT NULL,
  `comida_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Cerveja_Comida`
--

INSERT INTO `Cerveja_Comida` (`id`, `cerveja_id`, `comida_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 2, 1),
(7, 2, 4),
(8, 2, 6),
(9, 2, 7),
(10, 3, 4),
(11, 3, 8),
(12, 3, 9),
(13, 5, 10),
(14, 5, 11),
(15, 5, 12),
(16, 6, 1),
(17, 6, 9),
(18, 6, 13),
(19, 6, 14),
(20, 7, 3),
(21, 7, 15),
(22, 7, 16),
(23, 8, 10),
(24, 8, 15),
(25, 7, 17),
(26, 8, 18),
(27, 9, 10),
(28, 9, 16),
(29, 10, 16),
(30, 10, 20),
(31, 10, 17),
(32, 10, 19),
(33, 11, 10),
(34, 11, 3),
(35, 11, 15),
(36, 11, 18),
(37, 12, 10),
(38, 12, 16),
(39, 12, 19),
(40, 13, 16),
(41, 13, 19),
(42, 14, 2),
(43, 14, 3),
(44, 14, 21),
(45, 14, 5),
(46, 15, 21),
(47, 15, 5),
(48, 15, 22),
(49, 16, 1),
(50, 16, 2),
(51, 16, 3),
(52, 17, 1),
(53, 17, 3),
(54, 17, 15),
(55, 18, 10),
(56, 18, 3),
(57, 18, 15),
(58, 18, 17),
(59, 4, 12),
(60, 4, 10),
(61, 4, 9),
(62, 8, 19);

-- --------------------------------------------------------

--
-- Table structure for table `Comida`
--

CREATE TABLE `Comida` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` char(50) NOT NULL,
  `descricao` text,
  `foto` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Comida`
--

INSERT INTO `Comida` (`id`, `nome`, `descricao`, `foto`) VALUES
(1, 'Frango', 'Assado, grelhado, em molhos, entre outros.', 'frango.png'),
(2, 'Saladas', 'Saladas de folhas verdes, grãos, legumes, entre outros.', 'salada.png'),
(3, 'Linguiça', 'Linguiça assada ou grelhada.', 'linguica.png'),
(4, 'Queijo Suave', 'Queijos suaves, semi-duros, de cor clara.', 'queijo_suave.png'),
(5, 'Torta de Limão', 'Torta ou tortinhas de limão.', 'torta_de_limao.png'),
(6, 'Peixe frito', 'Peixe frito, opcionalmente acompanhado de batatas fritas.', 'peixe_frito.png'),
(7, 'Batata frita', 'Batatas fritas ou chips de batatas.', 'batata_frita.png'),
(8, 'Torta de carne', 'Torta de carne de gado.', 'torta_de_carne.png'),
(9, 'Hambúrguer', 'Hambúrger de carne de gado, porco ou frango.', 'burger.png'),
(10, 'Churrasco', 'Churrasco de gado, porco ou cordeiro.', 'churrasco.png'),
(11, 'Frango frito', 'Frango a passarinho. Coxinhas, asinhas, ou peito de frango frito.', 'frango_frito.png'),
(12, 'Comida indiana', 'Pratos indianos preparados com curry.', 'comida_indiana.png'),
(13, 'Torta de banana', 'Torta de banana.', 'torta_de_banana.png'),
(14, 'Sobremesa de doce de leite', 'Torta de doce de leite, frutas com doce de leite.', 'doce_de_leite.png'),
(15, 'Porco Assado', 'Porco assado: lombo, pernil, costela, entre outros.', 'porco_assado.png'),
(16, 'Queijo Curado', 'Queijo curado de textura firme.', 'queijo_curado.png'),
(17, 'Torta de nozes', 'Torta de nozes.', 'torta_de_nozes.png'),
(18, 'Carne de panela', 'Carne de gado de panela, ensopada ou ao molho. Pode ser acompanhada de legumes.', 'carne_de_panela.png'),
(19, 'Chocolate', 'Chocolate, trufas, bombons, mousse de chocolate.', 'chocolate.png'),
(20, 'Cheesecake', 'Cheesecake com calda de frutas vermelhas ou cheesecake de caramelo.', 'cheesecake.png'),
(21, 'Peixes e Frutos do Mar', 'Camarão, lula, siri, peixes em geral, sushi.', 'peixes_frutos_do_mar.png'),
(22, 'Pana cotta', 'Sobremesa a base de creme, podendo ser aromatizada com baunilha, limão, café e outros.', 'panacotta.png');

-- --------------------------------------------------------

--
-- Table structure for table `Usuario`
--

CREATE TABLE `Usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` char(50) NOT NULL,
  `email` char(50) NOT NULL,
  `senha` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Usuario`
--

INSERT INTO `Usuario` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Jose da Silva', 'josedasilva@knowthybeer.com', '732002cec7aeb7987bde842b9e00ee3b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Cerveja`
--
ALTER TABLE `Cerveja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Cerveja_Comida`
--
ALTER TABLE `Cerveja_Comida`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_Cerveja_Comida_Cerveja_idx` (`cerveja_id`),
  ADD KEY `fk_Cerveja_Comida_Comida1_idx` (`comida_id`);

--
-- Indexes for table `Comida`
--
ALTER TABLE `Comida`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Cerveja`
--
ALTER TABLE `Cerveja`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `Cerveja_Comida`
--
ALTER TABLE `Cerveja_Comida`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `Comida`
--
ALTER TABLE `Comida`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Cerveja_Comida`
--
ALTER TABLE `Cerveja_Comida`
  ADD CONSTRAINT `fk_Cerveja_Comida_Cerveja` FOREIGN KEY (`cerveja_id`) REFERENCES `Cerveja` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Cerveja_Comida_Comida1` FOREIGN KEY (`comida_id`) REFERENCES `Comida` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
