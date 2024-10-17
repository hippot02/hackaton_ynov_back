-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 17 oct. 2024 à 08:45
-- Version du serveur : 11.3.0-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ynovback`
--

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20241015092018', '2024-10-15 11:20:22', 9);

-- --------------------------------------------------------

--
-- Structure de la table `rendu`
--

CREATE TABLE `rendu` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `date_depot` datetime NOT NULL,
  `lien_depot` varchar(255) NOT NULL,
  `groupe` varchar(255) NOT NULL,
  `actif` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rendu`
--

INSERT INTO `rendu` (`id`, `titre`, `date_depot`, `lien_depot`, `groupe`, `actif`) VALUES
(3, 'Appli WEB', '2024-10-18 14:30:00', 'https://tardigrade.land/campus/0/module/29/assignment/0?share=75a711e3-94ce-40b1-8fb7-3e89fee9f68e', 'M1Web', 1),
(4, 'Appli LOG', '2024-10-31 15:30:00', 'https://tardigrade.land/campus/0/module/29/assignment/0?share=75a711e3-94ce-40b1-8fb7-3e89fee9f68e', 'M1Log', 1),
(5, 'Appli Data', '2024-11-05 11:46:00', 'https://tardigrade.land/campus/0/module/29/assignment/0?share=75a711e3-94ce-40b1-8fb7-3e89fee9f68e', 'M1Data', 1),
(6, 'Appli Data', '2024-11-08 22:30:00', 'https://tardigrade.land/campus/0/module/29/assignment/0?share=75a711e3-94ce-40b1-8fb7-3e89fee9f68e', 'M1Data', 1),
(7, 'Appli WEB 2', '2024-11-28 17:00:00', 'https://tardigrade.land/campus/0/module/29/assignment/0?share=75a711e3-94ce-40b1-8fb7-3e89fee9f68e', 'M1Web', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `rendu`
--
ALTER TABLE `rendu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `rendu`
--
ALTER TABLE `rendu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
