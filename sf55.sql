-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 09 déc. 2019 à 01:43
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sf55`
--

-- --------------------------------------------------------

--
-- Structure de la table `affilie`
--

CREATE TABLE `affilie` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `affilie`
--

INSERT INTO `affilie` (`id`, `libelle`) VALUES
(3, 'affilie test 122'),
(4, 'affilie test 4'),
(5, 'aff One UN 1'),
(6, 'affilie Two'),
(7, 'affiler interne'),
(8, 'affilie dev'),
(9, 'affilier sante Médicala'),
(10, 'affilie administration'),
(11, 'hamzatest 2'),
(13, 'test 5 affilier'),
(14, 'test 6'),
(15, 'aff test 8'),
(16, 'aff test 9'),
(17, 'aff 11'),
(21, 'aff 16'),
(22, 'aff djan'),
(23, 'aff 35'),
(24, 'affilier 1.1 a supprimer'),
(25, 'affil 2.2'),
(26, 'affiliation dev'),
(27, 'affiliation admin'),
(28, 'affiliation devlopp'),
(29, 'affiliation deploiement'),
(30, 'affiliation devlopp'),
(31, 'affiliation devlopp'),
(32, 'hamzatest 2'),
(33, 'aff test'),
(34, 'affil master 1 test'),
(35, 'affil master 2 test'),
(36, 'test 3');

-- --------------------------------------------------------

--
-- Structure de la table `contrat`
--

CREATE TABLE `contrat` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contrat`
--

INSERT INTO `contrat` (`id`, `libelle`) VALUES
(8, 'contrat medical'),
(16, 'Contrat travail'),
(21, 'test master test');

-- --------------------------------------------------------

--
-- Structure de la table `contrat_affilie`
--

CREATE TABLE `contrat_affilie` (
  `contrat_id` int(11) NOT NULL,
  `affilie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contrat_affilie`
--

INSERT INTO `contrat_affilie` (`contrat_id`, `affilie_id`) VALUES
(8, 4),
(16, 26),
(16, 27),
(21, 34),
(21, 35),
(21, 36);

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20191208120944', '2019-12-08 12:10:00'),
('20191208121151', '2019-12-08 12:12:06'),
('20191208122511', '2019-12-08 12:25:28'),
('20191208123238', '2019-12-08 12:32:59'),
('20191208123806', '2019-12-08 12:38:19');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `affilie`
--
ALTER TABLE `affilie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contrat`
--
ALTER TABLE `contrat`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contrat_affilie`
--
ALTER TABLE `contrat_affilie`
  ADD PRIMARY KEY (`contrat_id`,`affilie_id`),
  ADD KEY `IDX_5FB86A071823061F` (`contrat_id`),
  ADD KEY `IDX_5FB86A0784909E12` (`affilie_id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `affilie`
--
ALTER TABLE `affilie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT pour la table `contrat`
--
ALTER TABLE `contrat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `contrat_affilie`
--
ALTER TABLE `contrat_affilie`
  ADD CONSTRAINT `FK_5FB86A071823061F` FOREIGN KEY (`contrat_id`) REFERENCES `contrat` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_5FB86A0784909E12` FOREIGN KEY (`affilie_id`) REFERENCES `affilie` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
