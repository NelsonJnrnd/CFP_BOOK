-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 13 Mars 2018 à 16:10
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `cfpbook`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `idMessage` int(11) NOT NULL AUTO_INCREMENT,
  `Message` longtext NOT NULL,
  `HeureEnvoi` datetime NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  PRIMARY KEY (`idMessage`),
  KEY `messages_ibfk_1` (`idUtilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`idMessage`, `Message`, `HeureEnvoi`, `idUtilisateur`) VALUES
(10, 'sasa', '2018-03-13 14:57:37', 1),
(11, 'x', '2018-03-13 15:05:57', 2),
(22, 'vcx', '2018-03-13 15:57:25', 2),
(23, 'vcx', '2018-03-13 15:57:26', 2),
(24, 'vcx', '2018-03-13 15:57:27', 2),
(25, 'vcx', '2018-03-13 15:57:28', 2),
(26, 'vcx', '2018-03-13 15:57:29', 2),
(27, 'vcx', '2018-03-13 15:57:30', 2),
(28, 'vcx', '2018-03-13 15:57:32', 2),
(29, 'gfjhfg', '2018-03-13 15:57:37', 2),
(30, 'gfjhfg', '2018-03-13 15:59:17', 2),
(31, 'gfjhfg', '2018-03-13 15:59:18', 2),
(32, 'gfjhfggds', '2018-03-13 15:59:20', 2),
(33, 'dfg', '2018-03-13 15:59:43', 2),
(34, 'dfg', '2018-03-13 15:59:45', 2),
(35, 'dsfdsfed', '2018-03-13 16:00:02', 2),
(36, 'dfsd', '2018-03-13 16:00:03', 2),
(37, 'sdf', '2018-03-13 16:00:04', 2),
(38, 'dfsdds', '2018-03-13 16:00:05', 2),
(39, 'dsfsd', '2018-03-13 16:00:07', 2),
(40, 'sdfsd', '2018-03-13 16:00:09', 2),
(41, 'sdfsd', '2018-03-13 16:00:11', 2),
(42, 'dsfs', '2018-03-13 16:00:12', 2),
(43, 'sdf', '2018-03-13 16:00:13', 2),
(44, 'dsfsdf', '2018-03-13 16:00:14', 2),
(45, 'sdf', '2018-03-13 16:00:15', 2),
(46, 'x', '2018-03-13 16:04:48', 2),
(47, 'ss', '2018-03-13 16:04:51', 2),
(48, 'fsdf', '2018-03-13 16:09:41', 2),
(49, 'dsf', '2018-03-13 16:09:43', 2),
(50, 'dsf', '2018-03-13 16:09:44', 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `branche` varchar(100) NOT NULL,
  `psw` varchar(10000) NOT NULL,
  `pdp` longblob,
  `email` varchar(1000) NOT NULL,
  PRIMARY KEY (`idUtilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='informations Utilisateurs' AUTO_INCREMENT=3 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idUtilisateur`, `nom`, `prenom`, `age`, `branche`, `psw`, `pdp`, `email`) VALUES
(1, 'Mieville', 'Vanille', 19, 'Informatique', 'VanilleM', NULL, 'vanille.pouly@gmail.com'),
(2, 'Martins', 'Dani', 18, 'Informatique', 'Tarte', NULL, 'daniat@hotmail.fr');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateurs` (`idUtilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
