-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 03, 2019 at 02:53 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newprojeto`
--

-- --------------------------------------------------------

--
-- Table structure for table `curso`
--

CREATE TABLE `curso` (
  `cod_curso` int(15) NOT NULL,
  `desc_curso` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `curso`
--

INSERT INTO `curso` (`cod_curso`, `desc_curso`) VALUES
(1, 'informatica');

-- --------------------------------------------------------

--
-- Table structure for table `discente`
--

CREATE TABLE `discente` (
  `curso` varchar(100) DEFAULT NULL,
  `emailResp` varchar(100) DEFAULT NULL,
  `matricula` int(15) NOT NULL,
  `nomeResp` varchar(100) DEFAULT NULL,
  `cod_user` int(11) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `senha` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `discenteturma`
--

CREATE TABLE `discenteturma` (
  `cod_turma` int(15) NOT NULL,
  `matricula` int(15) NOT NULL,
  `ano` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `externo`
--

CREATE TABLE `externo` (
  `mot_ext` varchar(100) DEFAULT NULL,
  `cpf` int(11) NOT NULL,
  `cod_user` int(11) NOT NULL,
  `codportaria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nupe`
--

CREATE TABLE `nupe` (
  `codNupe` int(15) NOT NULL,
  `cod_user` int(11) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `senha` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ocorrencia`
--

CREATE TABLE `ocorrencia` (
  `descricao` varchar(100) DEFAULT NULL,
  `motivo` varchar(100) DEFAULT NULL,
  `codTipocorrencia` int(11) NOT NULL,
  `dth` varchar(100) DEFAULT NULL,
  `siape` int(15) NOT NULL,
  `codportaria` int(11) NOT NULL,
  `codNupe` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `portaria`
--

CREATE TABLE `portaria` (
  `codportaria` int(11) NOT NULL,
  `cod_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prof`
--

CREATE TABLE `prof` (
  `siape` int(15) NOT NULL,
  `cod_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipocorrencia`
--

CREATE TABLE `tipocorrencia` (
  `descTipocorrencia` varchar(100) DEFAULT NULL,
  `codTipocorrencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipouser`
--

CREATE TABLE `tipouser` (
  `descTipuser` varchar(100) DEFAULT NULL,
  `codTipuser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipouser`
--

INSERT INTO `tipouser` (`descTipuser`, `codTipuser`) VALUES
('nupe', 1),
('portaria', 2),
('professor', 3),
('aluno', 4),
('externo', 5);

-- --------------------------------------------------------

--
-- Table structure for table `turma`
--

CREATE TABLE `turma` (
  `desc_turma` varchar(100) DEFAULT NULL,
  `cod_turma` int(15) NOT NULL,
  `ano` varchar(100) DEFAULT NULL,
  `cod_curso` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `turma`
--

INSERT INTO `turma` (`desc_turma`, `cod_turma`, `ano`, `cod_curso`) VALUES
('3infoteste', 3, '2info2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `email` varchar(100) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `cod_user` int(11) NOT NULL,
  `codTipuser` int(11) NOT NULL,
  `senha` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`email`, `nome`, `cod_user`, `codTipuser`, `senha`) VALUES
('pedro@gmail.com', 'Pedro', 76, 4, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`cod_curso`);

--
-- Indexes for table `discente`
--
ALTER TABLE `discente`
  ADD PRIMARY KEY (`matricula`),
  ADD KEY `cod_user` (`cod_user`);

--
-- Indexes for table `discenteturma`
--
ALTER TABLE `discenteturma`
  ADD KEY `cod_turma` (`cod_turma`),
  ADD KEY `matricula` (`matricula`);

--
-- Indexes for table `externo`
--
ALTER TABLE `externo`
  ADD PRIMARY KEY (`cpf`),
  ADD KEY `cod_user` (`cod_user`),
  ADD KEY `codportaria` (`codportaria`);

--
-- Indexes for table `nupe`
--
ALTER TABLE `nupe`
  ADD PRIMARY KEY (`codNupe`),
  ADD KEY `cod_user` (`cod_user`);

--
-- Indexes for table `ocorrencia`
--
ALTER TABLE `ocorrencia`
  ADD KEY `codTipocorrencia` (`codTipocorrencia`),
  ADD KEY `codportaria` (`codportaria`),
  ADD KEY `codNupe` (`codNupe`),
  ADD KEY `siape` (`siape`);

--
-- Indexes for table `portaria`
--
ALTER TABLE `portaria`
  ADD PRIMARY KEY (`codportaria`),
  ADD KEY `cod_user` (`cod_user`);

--
-- Indexes for table `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`siape`),
  ADD KEY `cod_user` (`cod_user`);

--
-- Indexes for table `tipocorrencia`
--
ALTER TABLE `tipocorrencia`
  ADD PRIMARY KEY (`codTipocorrencia`);

--
-- Indexes for table `tipouser`
--
ALTER TABLE `tipouser`
  ADD PRIMARY KEY (`codTipuser`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`cod_turma`),
  ADD KEY `cod_curso` (`cod_curso`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_user`),
  ADD KEY `codTipuser` (`codTipuser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `cod_curso` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `discente`
--
ALTER TABLE `discente`
  MODIFY `matricula` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2017332234;
--
-- AUTO_INCREMENT for table `externo`
--
ALTER TABLE `externo`
  MODIFY `cpf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;
--
-- AUTO_INCREMENT for table `tipocorrencia`
--
ALTER TABLE `tipocorrencia`
  MODIFY `codTipocorrencia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipouser`
--
ALTER TABLE `tipouser`
  MODIFY `codTipuser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `cod_turma` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `discente`
--
ALTER TABLE `discente`
  ADD CONSTRAINT `discente_ibfk_1` FOREIGN KEY (`cod_user`) REFERENCES `usuario` (`cod_user`);

--
-- Constraints for table `discenteturma`
--
ALTER TABLE `discenteturma`
  ADD CONSTRAINT `discenteTurma_ibfk_1` FOREIGN KEY (`cod_turma`) REFERENCES `turma` (`cod_turma`),
  ADD CONSTRAINT `discenteTurma_ibfk_2` FOREIGN KEY (`matricula`) REFERENCES `discente` (`matricula`);

--
-- Constraints for table `externo`
--
ALTER TABLE `externo`
  ADD CONSTRAINT `externo_ibfk_1` FOREIGN KEY (`cod_user`) REFERENCES `usuario` (`cod_user`),
  ADD CONSTRAINT `externo_ibfk_2` FOREIGN KEY (`codportaria`) REFERENCES `portaria` (`codportaria`);

--
-- Constraints for table `nupe`
--
ALTER TABLE `nupe`
  ADD CONSTRAINT `nupe_ibfk_1` FOREIGN KEY (`cod_user`) REFERENCES `usuario` (`cod_user`);

--
-- Constraints for table `ocorrencia`
--
ALTER TABLE `ocorrencia`
  ADD CONSTRAINT `ocorrencia_ibfk_1` FOREIGN KEY (`codTipocorrencia`) REFERENCES `tipocorrencia` (`codTipocorrencia`),
  ADD CONSTRAINT `ocorrencia_ibfk_2` FOREIGN KEY (`codportaria`) REFERENCES `portaria` (`codportaria`),
  ADD CONSTRAINT `ocorrencia_ibfk_3` FOREIGN KEY (`codNupe`) REFERENCES `nupe` (`codNupe`),
  ADD CONSTRAINT `ocorrencia_ibfk_4` FOREIGN KEY (`siape`) REFERENCES `prof` (`siape`);

--
-- Constraints for table `portaria`
--
ALTER TABLE `portaria`
  ADD CONSTRAINT `portaria_ibfk_1` FOREIGN KEY (`cod_user`) REFERENCES `usuario` (`cod_user`);

--
-- Constraints for table `prof`
--
ALTER TABLE `prof`
  ADD CONSTRAINT `prof_ibfk_1` FOREIGN KEY (`cod_user`) REFERENCES `usuario` (`cod_user`);

--
-- Constraints for table `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `turma_ibfk_1` FOREIGN KEY (`cod_curso`) REFERENCES `curso` (`cod_curso`);

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`codTipuser`) REFERENCES `tipouser` (`codTipuser`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
