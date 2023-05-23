-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 16 mai 2023 à 09:54
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

DROP TABLE IF EXISTS `bière`;
CREATE TABLE IF NOT EXISTS `bière` (
  `reference` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` float NOT NULL,
  `gout` text NOT NULL,
  PRIMARY KEY (`reference`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `bière`
--

INSERT INTO `bière` (`reference`, `nom`, `prix`, `gout`) VALUES
(1, 'Funky', 4.2, 'Cerise et Framboise'),
(2, 'Jazz', 4.2, 'Mangue et Passion'),
(3, 'Electro', 4.2, 'Cerise et Pitaya'),
(4, 'Tango', 4.2, 'Coquelicot et Fruits rouges'),
(5, 'Rock', 4.2, 'Poivre, Cerise, Citron Gingembre');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
