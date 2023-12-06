SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passcode` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `admin` (`id`, `username`, `passcode`, `tipo`) VALUES
(1, 'admin', 'admin', '1');

CREATE TABLE IF NOT EXISTS `atendimentos` (
  `id` int(11) NOT NULL,
  `livro` int(11) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `autor` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` text COLLATE utf8_unicode_ci,
  `telefone` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `alunos` (`id`, `nome`, `endereco`, `telefone`) VALUES
(1, 'José Almeida', 'Rua Casemiro de Abreu', '3333'),
(2, 'Luis Garcia', 'Rua das Andradas', '556666555');

CREATE TABLE IF NOT EXISTS `livros` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `autor` text COLLATE utf8_unicode_ci,
  `tipo` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `livros` (`id`, `nome`, `autor`, `tipo`) VALUES
(1, 'Livro1', 'Autor1', 'Tipo1'),
(2, 'Livro2', 'Autor2', 'Tipo2');

ALTER TABLE `atendimentos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `atendimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
