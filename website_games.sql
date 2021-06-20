-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 21 juin 2021 à 00:03
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `website_games`
--

-- --------------------------------------------------------

--
-- Structure de la table `announces`
--

CREATE TABLE `announces` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` varchar(1000) NOT NULL,
  `by_admin` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `announces`
--

INSERT INTO `announces` (`id`, `title`, `content`, `by_admin`, `date`) VALUES
(17, 'Développeur', '<p style=\'color: red\'>Développeur JS</p>\n<p style=\'color:green\'>Maxime est beau</p>', 'Lartaxx', '2021-05-30 14:10:42'),
(18, 'Salut ça va ? ', '\r\n<p style=\'color: red;\'>NON</p>', 'Lartaxx', '2021-05-30 17:42:21');

-- --------------------------------------------------------

--
-- Structure de la table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `create_actu` int(11) NOT NULL DEFAULT 0,
  `modify_actu` int(11) NOT NULL DEFAULT 0,
  `create_user` int(11) NOT NULL DEFAULT 0,
  `modify_user` int(11) NOT NULL DEFAULT 0,
  `rcon` int(11) NOT NULL DEFAULT 0,
  `grade_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `grades`
--

INSERT INTO `grades` (`id`, `create_actu`, `modify_actu`, `create_user`, `modify_user`, `rcon`, `grade_name`) VALUES
(6, 1, 1, 0, 0, 0, 'Modérateur'),
(7, 1, 1, 1, 1, 1, 'Administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `img_link` text DEFAULT NULL,
  `is_admin` int(1) NOT NULL DEFAULT 0,
  `grade_name` varchar(100) NOT NULL DEFAULT 'Joueur'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `img_link`, `is_admin`, `grade_name`) VALUES
(2, 'Lartaxx', 'didou.com@gmail.com', '$2y$10$dkbXcRxzCitL0sCEgiT.eOix8la8HhD8B6gRCiJOqJhHZoZOp9VGe', 'https://cdn.discordapp.com/attachments/838852295595786291/840545793042546698/Nigelmo.png', 1, 'Administrateur'),
(4, 'Marc', 'marc.boyer66280@gmail.com', '$2y$10$q/FqoAZVa7JA5WW0gQj9b.dIy6TzjYtfwk7Ulmb04SXWnSc9Lmj5u', 'https://media-cdn.tripadvisor.com/media/photo-s/02/4d/e3/57/filename-mennetou-sur.jpg', 1, 'Modérateur'),
(5, 'Joan', 'joancesaireg@gmail.com', '$2y$10$lRnLZHUzqxKVtBc.UY9.eOEUdEYfCZXwSo2T7FGOoteARp9cwzCxK', 'https://www.filmsdocumentaires.com/uploads/0006/1653/noircoton_big.jpg', 1, 'Joueur'),
(9, 'Test', 'test@test.com', '$2y$10$OcT.Bc43e8gw8Rhi40lurOzp.JqiLeXItVg3VwZ3iHNHBM3pvRRgO', '', 0, 'Modérateur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `announces`
--
ALTER TABLE `announces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `announces`
--
ALTER TABLE `announces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
