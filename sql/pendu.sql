-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 19 jan. 2022 à 21:06
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pendu`
--

-- --------------------------------------------------------

--
-- Structure de la table `mots`
--

CREATE TABLE `mots` (
  `NomTheme` text DEFAULT NULL,
  `Mot` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `mots`
--

INSERT INTO `mots` (`NomTheme`, `Mot`) VALUES
('Promotion MMI', 'Hugo'),
('Promotion MMI', 'Dylan'),
('Promotion MMI', 'Glenn'),
('Promotion MMI', 'Slim'),
('Promotion MMI', 'Liliane'),
('Promotion MMI', 'Villon'),
('Promotion MMI', 'Teddy'),
('Promotion MMI', 'Amina'),
('Promotion MMI', 'Asia'),
('Promotion MMI', 'Mohammed'),
('Promotion MMI', 'Mekki'),
('Promotion MMI', 'Chams'),
('Promotion MMI', 'Thomas'),
('Promotion MMI', 'Imene'),
('Promotion MMI', 'Helene'),
('Promotion MMI', 'Elisa'),
('Promotion MMI', 'Aboubacar'),
('Promotion MMI', 'Paul'),
('Promotion MMI', 'Furkan'),
('Promotion MMI', 'Maissa'),
('Promotion MMI', 'Tanguy'),
('Promotion MMI', 'Aulid'),
('Promotion MMI', 'Carla'),
('Promotion MMI', 'Alexandre'),
('Promotion MMI', 'Jessica'),
('Promotion MMI', 'Quentin'),
('Promotion MMI', 'Jean-Pierre'),
('Promotion MMI', 'Celia'),
('Promotion MMI', 'Elise'),
('Promotion MMI', 'Kieran'),
('Promotion MMI', 'Julian'),
('Promotion MMI', 'Maeva'),
('Promotion MMI', 'Darron'),
('Promotion MMI', 'Michael'),
('Promotion MMI', 'David'),
('Promotion MMI', 'Raphael'),
('Promotion MMI', 'Viviane'),
('Promotion MMI', 'Lucas'),
('Promotion MMI', 'Alexis'),
('Animaux', 'Chien'),
('Animaux', 'Chat'),
('Animaux', 'Aigle'),
('Animaux', 'Zebre'),
('Animaux', 'Souris'),
('Animaux', 'Vache'),
('Animaux', 'Requin'),
('Animaux', 'Baleine'),
('Animaux', 'Cheval'),
('Animaux', 'Giraffe'),
('Animaux', 'Hippopotame'),
('Animaux', 'Lion'),
('Animaux', 'Guepard'),
('Animaux', 'Grenouille'),
('Animaux', 'Sanglier'),
('Animaux', 'Rhinoceros'),
('Animaux', 'Tortue'),
('Animaux', 'Manchot'),
('Animaux', 'Loup'),
('Animaux', 'Renard'),
('Animaux', 'Pingouin'),
('Animaux', 'Koala'),
('Animaux', 'Hibou'),
('Animaux', 'Morse'),
('Anime', 'Naruto'),
('Anime', 'Sasuke'),
('Anime', 'Tanjiro'),
('Anime', 'Luffy'),
('Anime', 'Zorro'),
('Anime', 'Kaneki'),
('Anime', 'Izuku'),
('Anime', 'Bakugo'),
('Anime', 'Sangoku'),
('Anime', 'Gon'),
('Anime', 'Killua'),
('Anime', 'Hisoka'),
('Anime', 'Sanji'),
('Anime', 'Nami'),
('Anime', 'Chopper'),
('Anime', 'Brook'),
('Anime', 'Robin'),
('Anime', 'Pikachu'),
('Anime', 'Meliodas'),
('Anime', 'Shikamaru');

-- --------------------------------------------------------

--
-- Structure de la table `score`
--

CREATE TABLE `score` (
  `ScoreTotal` int(11) DEFAULT NULL,
  `NomJoueur` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `score`
--

INSERT INTO `score` (`ScoreTotal`, `NomJoueur`) VALUES
(2520, 'Kieran');

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE `theme` (
  `NomTheme` text DEFAULT NULL,
  `Descri` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `theme`
--

INSERT INTO `theme` (`NomTheme`, `Descri`) VALUES
('Promotion MMI', 'Ce thème contient les prénoms des personnes de la formation MMI en 2ème année.\r\n'),
('Animaux', 'Ce thème contient des noms d\'animaux en tout genre.\r\n'),
('Anime', 'Ce theme contient des noms de personnages de Manga/ Anime.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
