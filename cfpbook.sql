-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 27 Mars 2018 à 14:12
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`idMessage`, `Message`, `HeureEnvoi`, `idUtilisateur`) VALUES
(1, 'salut', '2018-03-27 14:05:52', 6);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `dateNaissance` date NOT NULL,
  `branche` varchar(100) NOT NULL,
  `psw` varchar(10000) NOT NULL,
  `pdp` longblob,
  `email` varchar(1000) NOT NULL,
  PRIMARY KEY (`idUtilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='informations Utilisateurs' AUTO_INCREMENT=11 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idUtilisateur`, `nom`, `prenom`, `dateNaissance`, `branche`, `psw`, `pdp`, `email`) VALUES
(5, 'admin', 'admin', '0000-00-00', 'Informatique', 'AdminSuperCfp_book', NULL, 'admin@eduge.ch'),
(6, 'admin', 'admin', '2018-03-09', '', 'root', NULL, 'root@root.root'),
(9, 'pouly', 'amandine', '0000-00-00', 'Informatique', '1234', NULL, 'amandine.pl@eduge.ch'),
(10, 'autre', 'personne', '0000-00-00', 'Polymecanique', '1234', NULL, 'compte.demo@eduge.ch');

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
