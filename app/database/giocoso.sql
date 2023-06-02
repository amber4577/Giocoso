-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 27 mai 2023 à 10:56
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `site giocoso`
--

-- --------------------------------------------------------

--
-- Structure de la table `bière`
--

-- DROP TABLE IF EXISTS `bière`;
CREATE TABLE IF NOT EXISTS `bière` (
  `reference` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` float NOT NULL,
  `gout` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`reference`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `bière`
--

INSERT INTO `bière` (`reference`, `nom`, `prix`, `gout`,`description`) VALUES
(1, 'Funky', 4.2, 'Cerise et Framboise','descrFunky'),
(2, 'Jazz', 4.2, 'Mangue et Passion','descrJazz'),
(3, 'Electro', 4.2, 'Cerise et Pitaya','descrElectro'),
(4, 'Tango', 4.2, 'Coquelicot et Fruits rouges','descrTango'),
(5, 'Rock', 4.2, 'Poivre, Cerise, Citron Gingembre','descrRock'),



-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `num_client` int NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` text NOT NULL,
  `adresse_mail` varchar(100) NOT NULL,
  `num_tel` int NOT NULL,
  `adresse_postale` varchar(100) NOT NULL,
  `date_naissance` date NOT NULL,
  `cp` int NOT NULL,
  `ville` text NOT NULL,
  PRIMARY KEY (`num_client`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`num_client`, `nom`, `prenom`, `adresse_mail`, `num_tel`, `adresse_postale`, `date_naissance`, `cp`, `ville`) VALUES
(1, 'Durand', 'Jean', 'jeandurand@gmail.com', 765453218, '5 Rue de la Paix', '0000-00-00', 75001, 'Paris'),
(2, 'Durant', 'Jeanne', 'jeandurand@gmail.com', 765453219, '6 Rue de la Caix', '0000-00-00', 91650, 'Breuillet'),
(3, 'Durend', 'Jeannot', 'jeandurand@gmail.com', 765453220, '7 Rue de la Maix', '0000-00-00', 45340, 'Auxy'),
(4, 'Duran', 'Jeannette', 'jeandurand@gmail.com', 765453221, '8 Rue de la Laix', '0000-00-00', 45200, 'Montargis'),
(5, 'Duren', 'Jen', 'jeandurand@gmail.com', 765453222, '9 Rue de la Baix', '0000-00-00', 78000, 'Vélizy'),
(6, 'Durond', 'Jennie', 'jeandurand@gmail.com', 765453223, '10 Rue de la Jaix', '0000-00-00', 66000, 'Perpignan'),
(7, 'Duront', 'Jean-Baptiste', 'jeandurand@gmail.com', 765453224, '11 Rue de la Kaix', '0000-00-00', 13000, 'Marseille'),
(8, 'Duron', 'Jean-Tiret', 'jeandurand@gmail.com', 765453225, '12 Rue de la Naix', '0000-00-00', 59000, 'Lille'),
(9, 'Durenx', 'Jean-Vrille', 'jeandurand@gmail.com', 765453226, '13 Rue de la Waix', '0000-00-00', 35000, 'Vannes'),
(10, 'Durenh', 'Jean-Grille', 'jeandurand@gmail.com', 765453227, '14 Rue de la Xaix', '0000-00-00', 34000, 'Montpellier'),
(1002, 'Durant', 'Jeanne', 'jeandurand@gmail.com', 765453219, '6 Rue de la Caix', '0000-00-00', 91650, 'Breuillet'),
(2003, 'Durend', 'Jeannot', 'jeandurand@gmail.com', 765453220, '7 Rue de la Maix', '0000-00-00', 45340, 'Auxy'),
(3004, 'Duran', 'Jeannette', 'jeandurand@gmail.com', 765453221, '8 Rue de la Laix', '0000-00-00', 45200, 'Montargis'),
(4005, 'Duren', 'Jen', 'jeandurand@gmail.com', 765453222, '9 Rue de la Baix', '0000-00-00', 78000, 'Vélizy'),
(5006, 'Durond', 'Jennie', 'jeandurand@gmail.com', 765453223, '10 Rue de la Jaix', '0000-00-00', 66000, 'Perpignan'),
(6007, 'Duront', 'Jean-Baptiste', 'jeandurand@gmail.com', 765453224, '11 Rue de la Kaix', '0000-00-00', 13000, 'Marseille'),
(7008, 'Duron', 'Jean-Tiret', 'jeandurand@gmail.com', 765453225, '12 Rue de la Naix', '0000-00-00', 59000, 'Lille'),
(8009, 'Durenx', 'Jean-Vrille', 'jeandurand@gmail.com', 765453226, '13 Rue de la Waix', '0000-00-00', 35000, 'Vannes'),
(10010, 'Durenh', 'Jean-Grille', 'jeandurand@gmail.com', 765453227, '14 Rue de la Xaix', '0000-00-00', 34000, 'Montpellier');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `num_commande` int NOT NULL,
  PRIMARY KEY (`num_commande`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

