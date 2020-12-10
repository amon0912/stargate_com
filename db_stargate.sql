-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 08 déc. 2020 à 00:47
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_stargate`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` varchar(50) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mdp` varchar(225) DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `nom_client` varchar(50) NOT NULL,
  `prenom_client` varchar(50) NOT NULL,
  `email_client` varchar(225) NOT NULL,
  `numero_client` varchar(50) NOT NULL,
  `mdp_client` varchar(225) NOT NULL,
  `token_client` varchar(225) NOT NULL,
  `createdAt_client` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_client`),
  UNIQUE KEY `numero_client` (`numero_client`),
  UNIQUE KEY `email_client` (`email_client`),
  KEY `fk_id_admin` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `demandecrea`
--

DROP TABLE IF EXISTS `demandecrea`;
CREATE TABLE IF NOT EXISTS `demandecrea` (
  `idDemandCrea` varchar(50) NOT NULL,
  `id_client` varchar(50) NOT NULL,
  `idOffre` varchar(50) NOT NULL,
  `dateDemandCrea` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idDemandCrea`),
  KEY `fk_id_dmd_crea1` (`id_client`),
  KEY `fk_id_dmd_crea2` (`idOffre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `demandeformation`
--

DROP TABLE IF EXISTS `demandeformation`;
CREATE TABLE IF NOT EXISTS `demandeformation` (
  `idemand` varchar(50) NOT NULL,
  `id_client` varchar(50) NOT NULL,
  `idFormation` varchar(50) NOT NULL,
  `dateDemand` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idemand`),
  KEY `fk_id_dmd1` (`id_client`),
  KEY `fk_id_dmd2` (`idFormation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

DROP TABLE IF EXISTS `devis`;
CREATE TABLE IF NOT EXISTS `devis` (
  `idDevis` varchar(50) NOT NULL,
  `id_client` varchar(50) NOT NULL,
  `idTypeDevis` varchar(50) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `dateDevis` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idDevis`),
  KEY `fk_id_devis1` (`id_client`),
  KEY `fk_id_devis2` (`idTypeDevis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `idFormation` varchar(50) NOT NULL,
  `idTypeFor` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `reduction` varchar(10) NOT NULL,
  `lienImage` varchar(225) NOT NULL,
  `dateFormation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idFormation`),
  KEY `fk_id_for1` (`idTypeFor`),
  KEY `fk_id_for2` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `offre`
--

DROP TABLE IF EXISTS `offre`;
CREATE TABLE IF NOT EXISTS `offre` (
  `idOffre` varchar(50) NOT NULL,
  `idTypeOffre` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `reduction` varchar(10) NOT NULL,
  `lienImage` varchar(225) NOT NULL,
  `dateFormation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idOffre`),
  KEY `fk_id_offre1` (`id`),
  KEY `fk_id_offre2` (`idTypeOffre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `typedevis`
--

DROP TABLE IF EXISTS `typedevis`;
CREATE TABLE IF NOT EXISTS `typedevis` (
  `idTypeDevis` varchar(50) NOT NULL,
  `label` varchar(50) NOT NULL,
  PRIMARY KEY (`idTypeDevis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typedevis`
--

INSERT INTO `typedevis` (`idTypeDevis`, `label`) VALUES
('972411448eb58a30034bdbc740aff843', 'marketing digital'),
('ee75b96e6c88dcea0eb7b99dcaa32b5e', 'développement'),
('f20eb4d71dde5abc36a6635ade6bfbdf', 'print');

-- --------------------------------------------------------

--
-- Structure de la table `typeformation`
--

DROP TABLE IF EXISTS `typeformation`;
CREATE TABLE IF NOT EXISTS `typeformation` (
  `idTypeFor` varchar(50) NOT NULL,
  `label` varchar(50) NOT NULL,
  PRIMARY KEY (`idTypeFor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typeformation`
--

INSERT INTO `typeformation` (`idTypeFor`, `label`) VALUES
('61d167345b78414c4da5f16494348fce', 'développement'),
('6cbe93671c71906cdfbd15ed9a6949e9', 'marketing digital'),
('e505af001d97ed6631f209943c8030fc', 'print');

-- --------------------------------------------------------

--
-- Structure de la table `typeoffre`
--

DROP TABLE IF EXISTS `typeoffre`;
CREATE TABLE IF NOT EXISTS `typeoffre` (
  `idTypeOffre` varchar(50) NOT NULL,
  `label` varchar(50) NOT NULL,
  PRIMARY KEY (`idTypeOffre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typeoffre`
--

INSERT INTO `typeoffre` (`idTypeOffre`, `label`) VALUES
('193c1e24dec7d306affaa0353bd4772d', 'marketing digital'),
('553f50392b289611f428ca3795bff8ba', 'print'),
('7ade3b53e7a12ad21f8887e08cffaa89', 'développement');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `fk_id_admin` FOREIGN KEY (`id`) REFERENCES `admin` (`id`);

--
-- Contraintes pour la table `demandecrea`
--
ALTER TABLE `demandecrea`
  ADD CONSTRAINT `fk_id_dmd_crea1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `fk_id_dmd_crea2` FOREIGN KEY (`idOffre`) REFERENCES `offre` (`idOffre`);

--
-- Contraintes pour la table `demandeformation`
--
ALTER TABLE `demandeformation`
  ADD CONSTRAINT `fk_id_dmd1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `fk_id_dmd2` FOREIGN KEY (`idFormation`) REFERENCES `formation` (`idFormation`);

--
-- Contraintes pour la table `devis`
--
ALTER TABLE `devis`
  ADD CONSTRAINT `fk_id_devis1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `fk_id_devis2` FOREIGN KEY (`idTypeDevis`) REFERENCES `typedevis` (`idTypeDevis`);

--
-- Contraintes pour la table `formation`
--
ALTER TABLE `formation`
  ADD CONSTRAINT `fk_id_for1` FOREIGN KEY (`idTypeFor`) REFERENCES `typeformation` (`idTypeFor`),
  ADD CONSTRAINT `fk_id_for2` FOREIGN KEY (`id`) REFERENCES `admin` (`id`);

--
-- Contraintes pour la table `offre`
--
ALTER TABLE `offre`
  ADD CONSTRAINT `fk_id_offre1` FOREIGN KEY (`id`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `fk_id_offre2` FOREIGN KEY (`idTypeOffre`) REFERENCES `typeoffre` (`idTypeOffre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
