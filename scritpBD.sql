-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 19 Décembre 2018 à 17:31
-- Version du serveur: 5.5.62-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Structure de la table `contient`
--

CREATE TABLE IF NOT EXISTS `contient` (
  `idListe` int(11) NOT NULL,
  `idingr` int(11) NOT NULL,
  PRIMARY KEY (`idListe`,`idingr`),
  KEY `contient_Ingredient0_FK` (`idingr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Ingredient`
--

CREATE TABLE IF NOT EXISTS `Ingredient` (
  `idingr` int(11) NOT NULL AUTO_INCREMENT,
  `nomingr` varchar(64) CHARACTER SET utf8 NOT NULL,
  `protide` double DEFAULT NULL,
  `lipide` double DEFAULT NULL,
  `glucide` double DEFAULT NULL,
  `calorie` double DEFAULT NULL,
  `congele` tinyint(1) NOT NULL,
  `famille` varchar(64) NOT NULL,
  PRIMARY KEY (`idingr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=130 ;

--
-- Structure de la table `ListeDeCourse`
--

CREATE TABLE IF NOT EXISTS `ListeDeCourse` (
  `idListe` int(11) NOT NULL AUTO_INCREMENT,
  `nomListe` varchar(32) NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idListe`),
  KEY `ListeDeCourse_Utilisateur_FK` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `possede`
--

CREATE TABLE IF NOT EXISTS `possede` (
  `idingr` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `quantite` double NOT NULL,
  PRIMARY KEY (`idingr`,`idUser`),
  KEY `possede_Utilisateur0_FK` (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;





-- --------------------------------------------------------

--
-- Structure de la table `Recette`
--

CREATE TABLE IF NOT EXISTS `Recette` (
  `idrec` int(11) NOT NULL AUTO_INCREMENT,
  `idUser` int(11) NOT NULL,
  `titre` varchar(128) NOT NULL,
  `nbpers` int(11) NOT NULL,
  `categorie` varchar(32) NOT NULL,
  `vegetarien` tinyint(1) NOT NULL,
  `gluteenFree` tinyint(1) NOT NULL,
  `avisInternaut` float(11) DEFAULT NULL,
  `niveau` varchar(32) NOT NULL,
  `tpsprepa` smallint(6) NOT NULL,
  `tpscuisson` smallint(6) NOT NULL,
  `tpsrepose` smallint(6) DEFAULT NULL,
  `textrec` text NOT NULL,
  `img` text,
  `nombreAvis` int(11) DEFAULT NULL,
  PRIMARY KEY (`idrec`,`idUser`),
  KEY `Recette_Utilisateur_FK` (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;


--
-- Structure de la table `suit`
--

CREATE TABLE IF NOT EXISTS `suit` (
  `idUser` int(11) NOT NULL,
  `idUser_Utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`idUser`,`idUser_Utilisateur`),
  KEY `suit_Utilisateur0_FK` (`idUser_Utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateur`
--

CREATE TABLE IF NOT EXISTS `Utilisateur` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(32) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `img` text,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Structure de la table `utiliser`
--

CREATE TABLE IF NOT EXISTS `utiliser` (
  `idrec` int(11) NOT NULL,
  `idingr` int(11) NOT NULL,
  `quantite` varchar(32) NOT NULL,
  PRIMARY KEY (`idrec`,`idingr`),
  KEY `utiliser_Ingredient0_FK` (`idingr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Structure de la table `aVote`
--

CREATE TABLE IF NOT EXISTS `aVote` (
  `idrec` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idrec`,`idUser`),
  KEY `aVote_Recette0_FK` (`idrec`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--
-- Contraintes pour la table `contient`
--

ALTER TABLE `contient`
  ADD CONSTRAINT `contient_Ingredient0_FK` FOREIGN KEY (`idingr`) REFERENCES `Ingredient` (`idingr`),
  ADD CONSTRAINT `contient_ListeDeCourse_FK` FOREIGN KEY (`idListe`) REFERENCES `ListeDeCourse` (`idListe`);

--
-- Contraintes pour la table `ListeDeCourse`
--
ALTER TABLE `ListeDeCourse`
  ADD CONSTRAINT `ListeDeCourse_Utilisateur_FK` FOREIGN KEY (`idUser`) REFERENCES `Utilisateur` (`idUser`);

--
-- Contraintes pour la table `possede`
--
ALTER TABLE `possede`
  ADD CONSTRAINT `possede_Ingredient_FK` FOREIGN KEY (`idingr`) REFERENCES `Ingredient` (`idingr`),
  ADD CONSTRAINT `possede_Utilisateur0_FK` FOREIGN KEY (`idUser`) REFERENCES `Utilisateur` (`idUser`);

--
-- Contraintes pour la table `suit`
--
ALTER TABLE `suit`
  ADD CONSTRAINT `suit_Utilisateur0_FK` FOREIGN KEY (`idUser_Utilisateur`) REFERENCES `Utilisateur` (`idUser`),
  ADD CONSTRAINT `suit_Utilisateur_FK` FOREIGN KEY (`idUser`) REFERENCES `Utilisateur` (`idUser`);

--
-- Contraintes pour la table `utiliser`
--
ALTER TABLE `utiliser`
  ADD CONSTRAINT `utiliser_Ingredient0_FK` FOREIGN KEY (`idingr`) REFERENCES `Ingredient` (`idingr`),
  ADD CONSTRAINT `utiliser_Recette_FK` FOREIGN KEY (`idrec`) REFERENCES `Recette` (`idrec`);


ALTER TABLE `Recette`
    ADD CONSTRAINT `Recette_Utilisateur_FK` FOREIGN KEY (`idUser`) REFERENCES Utilisateur(`idUser`);


--
-- Contraintes pour la table `aVote`
--

ALTER TABLE `aVote`
    ADD CONSTRAINT `aVote_Recette0_FK` FOREIGN KEY (`idrec`) REFERENCES Recette(`idrec`),
    ADD CONSTRAINT `aVote_Utilisateur_FK` FOREIGN KEY (`idUser`) REFERENCES Utilisateur(`idUser`);
