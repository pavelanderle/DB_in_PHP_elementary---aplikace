-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vytvořeno: Stř 05. kvě 2021, 10:03
-- Verze serveru: 5.6.20-log
-- Verze PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `school`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `students`
--

CREATE TABLE IF NOT EXISTS `students` (
`idStudent` int(11) NOT NULL,
  `firstName` varchar(30) COLLATE utf8_czech_ci NOT NULL,
  `lastName` varchar(50) COLLATE utf8_czech_ci NOT NULL,
  `birtDate` date NOT NULL,
  `categoryStudy` enum('Elektrotechnika','Informační technologie','Technické lyceum','') COLLATE utf8_czech_ci NOT NULL,
  `class` varchar(3) COLLATE utf8_czech_ci NOT NULL,
  `classTeacherId` smallint(6) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=6 ;

--
-- Vypisuji data pro tabulku `students`
--

INSERT INTO `students` (`idStudent`, `firstName`, `lastName`, `birtDate`, `categoryStudy`, `class`, `classTeacherId`) VALUES
(1, 'Karel', 'Novák', '2000-12-28', 'Elektrotechnika', '4.A', 1),
(2, 'Ivan', 'Horák', '1999-01-01', 'Informační technologie', '4.I', 2),
(3, 'Tomáš', 'Marný', '2002-02-03', 'Technické lyceum', '3.L', 3),
(4, 'Jana', 'Levá', '2002-02-04', 'Technické lyceum', '3.L', 3),
(5, 'Karel', 'Volný', '2004-02-06', 'Elektrotechnika', '1.A', 5);

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`idStudent`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `students`
--
ALTER TABLE `students`
MODIFY `idStudent` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
