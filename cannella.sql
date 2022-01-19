-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 19 jan. 2022 à 16:24
-- Version du serveur : 8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cannella`
--

-- --------------------------------------------------------

--
-- Structure de la table `recettes`
--

DROP TABLE IF EXISTS `recettes`;
CREATE TABLE IF NOT EXISTS `recettes` (
  `id_recette` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `prologue` text NOT NULL,
  `contenu` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `temps_preparation` int NOT NULL,
  `temps_repos` int NOT NULL,
  `temps_cuisson` int NOT NULL,
  `difficulte` int NOT NULL,
  `farine` int NOT NULL,
  `oeuf` int NOT NULL,
  `sucre` int NOT NULL,
  `beurre` int NOT NULL,
  `cannelle` int NOT NULL,
  `levure` int NOT NULL,
  `lait` int NOT NULL,
  `sel` int NOT NULL,
  PRIMARY KEY (`id_recette`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recettes`
--

INSERT INTO `recettes` (`id_recette`, `titre`, `prologue`, `contenu`, `image`, `auteur`, `temps_preparation`, `temps_repos`, `temps_cuisson`, `difficulte`, `farine`, `oeuf`, `sucre`, `beurre`, `cannelle`, `levure`, `lait`, `sel`) VALUES
(2, 'Roulé à la cannelle ', '', 'weoiufjosifjioj\r\nsdfpkojsdopfkmsdpojk\r\ndsplkfjsdkmfkpsdmfpsdmfpl', 'images/roulee_canelle_preambule.jpg', 'Romain', 30, 10, 20, 2, 250, 1, 30, 25, 1, 10, 10, 1),
(3, 'Cake Pommes Cannelle', '', '', 'images/roulee_canelle_preambule.jpg', 'Romain', 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Tarte aux pommes', '', '', 'images/roulee_canelle_preambule.jpg', '', 10, 0, 10, 3, 10, 10, 10, 10, 10, 10, 10, 0),
(18, 'Roule à la cannelle      ', '', '', 'images/roulee_canelle_preambule.jpg', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$M.lXrjmLZ4MwWFfftTlYM.K4.Bc2cCGwXsSdaamrRD19v4CtfwDzW'),
(3, 'romain', '$2y$10$wdNNxNpiOJvPLgyX/1IcgeMEcUaMOSslfpk8U1ISj8g7TPsdywQMG'),
(4, 'damien', '$2y$10$W0Lq2Vp57qkxyQopK6g/1uYiiLbVNbw0HctvCGpeqWsUS6KsR8Rz.'),
(5, 'toto', 'toto'),
(7, 'ana', '$2y$10$WqHn6ZRrM4HQK7tBAMjNVeqtgrhNP8WSl6HYoj1C3H8USrpFCW80K'),
(6, 'test', '$2y$10$yP.yGHlN6e.5U/BlE4qCEuWyK8.dX6mn/0956M/Rjn0wT88H3VckS'),
(9, 'DSL_CEDRIC_DE_NE_PAS_AVOIR_TERMINE', '$2y$10$QtQfJ2BkfAVi/ENs8vHkp.m2o9busSHyhDzlwhN0aeIDIezt3GEYu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
