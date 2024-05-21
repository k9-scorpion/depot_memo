-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 21 mai 2024 à 12:31
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `depot`
--

-- --------------------------------------------------------

--
-- Structure de la table `memoire`
--

CREATE TABLE `memoire` (
  `id` int(100) NOT NULL,
  `titre` varchar(555) NOT NULL,
  `auteur` varchar(100) NOT NULL,
  `domaine` varchar(100) NOT NULL,
  `filiere` varchar(100) NOT NULL,
  `universite` varchar(255) NOT NULL,
  `annee` date NOT NULL,
  `theme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `memoire`
--

INSERT INTO `memoire` (`id`, `titre`, `auteur`, `domaine`, `filiere`, `universite`, `annee`, `theme`) VALUES
(3, 'kore zentri', 'Idriss Mahamat Ali Moustapha', '', '', '', '0000-00-00', ''),
(4, '', '', 'Informatique', '', '', '0000-00-00', ''),
(5, '', '', '', 'Dawm', '', '0000-00-00', ''),
(6, '', 'Idriss Mahamat Ali Moustapha', 'Informatique', 'Dawm', 'Enastic', '0000-00-00', ''),
(7, '', 'Idriss Mahamat Ali Moustapha', 'Informatique', 'Dawm', 'Enastic', '2024-05-24', 'UML_2_pour_les_developpeurs.pdf'),
(8, 'Mise en Place dune Bibliotheque Numerique ', '', '', '', '', '0000-00-00', ''),
(9, '', 'Idriss Mahamat Ali Moustaphaé', '', '', '', '0000-00-00', ''),
(10, '', 'éééééééééééééééé', '', '', '', '0000-00-00', ''),
(11, 'ééééééééééé', '', '', '', '', '0000-00-00', ''),
(15, '', '', '', '', '', '2024-05-15', ''),
(16, '', '', '', '', '', '0000-00-00', '4 Lâ€™eÌlevage des poules.pdf');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `memoire`
--
ALTER TABLE `memoire`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `memoire`
--
ALTER TABLE `memoire`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
