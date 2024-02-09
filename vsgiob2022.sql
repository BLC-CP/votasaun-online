-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2023 at 02:44 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vsgiob2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kandidatu`
--

CREATE TABLE `tbl_kandidatu` (
  `id_kandidatu` int(11) NOT NULL,
  `emis` int(11) NOT NULL,
  `foto_estrutura` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kandidatu`
--

INSERT INTO `tbl_kandidatu` (`id_kandidatu`, `emis`, `foto_estrutura`) VALUES
(1202301, 5511707, '64cdbf0612cc9png'),
(1202302, 272058, '64cf4298c63b8png'),
(1202303, 7788, '64e94ced5eda6jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE `tb_data` (
  `id_data` int(11) NOT NULL,
  `loron_votasaun` date NOT NULL,
  `oras_hahu` time NOT NULL,
  `oras_remata` time NOT NULL,
  `obs_hahu` text NOT NULL,
  `obs_remata` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data`
--

INSERT INTO `tb_data` (`id_data`, `loron_votasaun`, `oras_hahu`, `oras_remata`, `obs_hahu`, `obs_remata`) VALUES
(2, '2023-08-26', '08:00:00', '17:00:00', 'Votasaun Sei Hahu iha Tuku', 'Votasaun Remata Ona');

-- --------------------------------------------------------

--
-- Table structure for table `tb_departamentu`
--

CREATE TABLE `tb_departamentu` (
  `id_departamentu` int(11) NOT NULL,
  `nrn_departamentu` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_departamentu`
--

INSERT INTO `tb_departamentu` (`id_departamentu`, `nrn_departamentu`) VALUES
(4202301, 'IPA'),
(4202302, 'IPS'),
(4202303, 'IPAS');

-- --------------------------------------------------------

--
-- Table structure for table `tb_estudante`
--

CREATE TABLE `tb_estudante` (
  `emis` int(11) NOT NULL,
  `nrn_estudante` varchar(250) NOT NULL,
  `sexo` enum('Mane','Feto') NOT NULL,
  `no_tlp` varchar(25) NOT NULL,
  `foto` text NOT NULL,
  `id_departamentu` int(20) NOT NULL,
  `id_klase` int(20) NOT NULL,
  `turma` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_estudante`
--

INSERT INTO `tb_estudante` (`emis`, `nrn_estudante`, `sexo`, `no_tlp`, `foto`, `id_departamentu`, `id_klase`, `turma`, `level`, `password`) VALUES
(7788, 'Deo', '', '77483393', '64e94cccbdc1fpng', 4202303, 3202303, 'D', 'user', 'nkbcx'),
(272058, 'Josefina Ribeiro', 'Feto', '77483393', '64e937a031c25png', 4202301, 3202303, 'A', 'user', 'thgte'),
(315554, 'Alcario Erlander  Liberio', 'Mane', '78675468', '64cdccae9af44png', 4202301, 3202301, 'D', 'user', 'klnmr'),
(564234, 'Evaristina  de  Oliveira', 'Feto', '75164564', '64cf90a0f2148png', 4202302, 3202303, 'A', 'user', 'lcxut'),
(869540, 'Jorjina de Jesus', 'Feto', '75164402', '64cf903593597png', 4202301, 3202302, 'C', 'user', 'kvhna'),
(5511707, 'Brito L. da Conceicao', 'Mane', '75684634', '64e937980ad63png', 4202302, 3202302, 'B', 'admin', 'fgtsa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_klase`
--

CREATE TABLE `tb_klase` (
  `id_klase` int(20) NOT NULL,
  `nrn_klase` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_klase`
--

INSERT INTO `tb_klase` (`id_klase`, `nrn_klase`) VALUES
(3202301, '1 Ano'),
(3202302, '2 Ano'),
(3202303, '3 Ano'),
(3202304, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `tb_votus`
--

CREATE TABLE `tb_votus` (
  `id_votus` int(11) NOT NULL,
  `id_kandidatu` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `oras_vota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_votus`
--

INSERT INTO `tb_votus` (`id_votus`, `id_kandidatu`, `id_user`, `oras_vota`) VALUES
(32, 272058, 272058, '06 August 2023, 08:58:22 PM'),
(34, 5511707, 5511707, '06 August 2023, 08:59:39 PM'),
(35, 272058, 869540, '08 August 2023, 12:43:51 AM'),
(37, 272058, 564234, '21 August 2023, 01:58:59 PM'),
(38, 7788, 7788, '26 August 2023, 09:54:47 AM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kandidatu`
--
ALTER TABLE `tbl_kandidatu`
  ADD PRIMARY KEY (`id_kandidatu`),
  ADD KEY `emis` (`emis`),
  ADD KEY `emis_2` (`emis`),
  ADD KEY `emis_3` (`emis`);

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `tb_departamentu`
--
ALTER TABLE `tb_departamentu`
  ADD PRIMARY KEY (`id_departamentu`);

--
-- Indexes for table `tb_estudante`
--
ALTER TABLE `tb_estudante`
  ADD PRIMARY KEY (`emis`),
  ADD KEY `id_departamentu` (`id_departamentu`),
  ADD KEY `id_klase` (`id_klase`);

--
-- Indexes for table `tb_klase`
--
ALTER TABLE `tb_klase`
  ADD PRIMARY KEY (`id_klase`);

--
-- Indexes for table `tb_votus`
--
ALTER TABLE `tb_votus`
  ADD PRIMARY KEY (`id_votus`) USING BTREE,
  ADD UNIQUE KEY `id_user_2` (`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_votus`
--
ALTER TABLE `tb_votus`
  MODIFY `id_votus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_kandidatu`
--
ALTER TABLE `tbl_kandidatu`
  ADD CONSTRAINT `tbl_kandidatu_ibfk_1` FOREIGN KEY (`emis`) REFERENCES `tb_estudante` (`emis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_estudante`
--
ALTER TABLE `tb_estudante`
  ADD CONSTRAINT `tb_estudante_ibfk_1` FOREIGN KEY (`id_departamentu`) REFERENCES `tb_departamentu` (`id_departamentu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_estudante_ibfk_2` FOREIGN KEY (`id_klase`) REFERENCES `tb_klase` (`id_klase`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
