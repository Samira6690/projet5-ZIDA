-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 29 sep. 2023 à 18:06
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tourisme`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(25) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `email`, `message`) VALUES
(1, 'hhh', 'cc', 'hh@gamail.com', 'bien'),
(2, 'hhh', 'cc', 'hh@gamail.com', 'bien'),
(3, 'hhh', 'cc', 'hh@gamail.com', 'bien');

-- --------------------------------------------------------

--
-- Structure de la table `restauration`
--

CREATE TABLE `restauration` (
  `id` int(25) NOT NULL,
  `content` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `restauration`
--

INSERT INTO `restauration` (`id`, `content`, `image`) VALUES
(1, '.Nos spécialités <br>\r\nDes plats traditionnels <br>\r\n\r\nDes plats français <br>\r\n\r\nDes plats chinois <br>\r\n\r\nPatesserie <br>\r\n\r\n.Jours ouvrables <br>\r\n\r\nDu lundi au samedi:6h-22h <br>\r\n\r\nDimanche de 8h-20h\r\n', 'aa4.jpg\r\n\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id` int(25) NOT NULL,
  `image` varchar(255) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id`, `image`, `titre`, `contenu`) VALUES
(1, 's2.jpg', 'TRANSPORT', 'This is a longer card with supporting text below as a natural lead-in to\r\nadditional content. This content is a little bit longer.'),
(2, 'r2.jpg', 'HEBERGEMENT', 'This is a longer card with supporting text below as a natural lead-in to\r\nadditional content. This content is a little bit longer.'),
(3, 's2.jpg', 'RESTAURATION', 'This is a longer card with supporting text below as a natural lead-in to\r\nadditional content. This content is a little bit longer.'),
(4, 'aa4.jpg', NULL, NULL),
(5, 'aa5.jpg', NULL, NULL),
(6, 'foo1.jpeg', NULL, NULL),
(7, 'aa5.jpg', NULL, NULL),
(8, 'h1.jpg', NULL, NULL),
(9, 'h3.jpg', NULL, NULL),
(10, 'h5.jpg', NULL, NULL),
(11, 'h6.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sites_touristiques`
--

CREATE TABLE `sites_touristiques` (
  `id` int(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `idville` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `sites_touristiques`
--

INSERT INTO `sites_touristiques` (`id`, `photo`, `idville`, `titre`, `content`, `video`) VALUES
(1, 'b1.jpg', 1, '', NULL, NULL),
(2, 'b2.jpg', 1, '', NULL, NULL),
(3, 'b4.jpg', 1, '', NULL, NULL),
(4, 'b7.jpg', 1, '', NULL, NULL),
(5, 'b9.jpg', 1, '', NULL, NULL),
(6, 'b6.jpg', 1, '', NULL, NULL),
(7, 'b3.jpg', 1, '', NULL, NULL),
(8, 'b8.jpg', 1, '', NULL, NULL),
(9, 'd7.webp', 2, 'cascades', NULL, NULL),
(10, 'd2.jpg', 2, 'le pic de sindou', NULL, NULL),
(11, 'd3.jpg', 2, 'le  lac de Tingrela', NULL, NULL),
(12, 'd4.jpg', 2, 'le pic de sindou', NULL, NULL),
(13, 'd5.jpg', 2, 'Cascades', NULL, NULL),
(14, 'd6.jpg', 2, 'cascades', NULL, NULL),
(15, 'd7.webp', 2, 'Les cascades de banfora', 'Situées à environ 12 km au nord-ouest de <br> Banfora, elles tiennent leur nom de la <br> commune de Karfiguéla. Elles constituent <br> l\'un des sites touristiques les plus importants <br> au Burkina Faso. La région des <br> Cascades tire son nom de ces chutes d\'eau. Elles constituent <br> l\'un des sites touristiques les plus importants <br> au Burkina Faso. La région des <br> Cascades tire son nom de ces chutes d\'eau.\r\n ', NULL),
(16, NULL, 1, 'La ville sya', 'Lorem ipsum dolor sit amet consecteturn adipisicing elit. Aut placeat, ipsum eveniet, illo consequuntur alias ipsam ex quae, corrupti enim incidunt mollitia officiis tenetur laudantium dicta nulla unde sit? Rerum.', 'video.mp4'),
(17, 'i6.jpg', 3, '', 'This is a longer card with supporting text below as a natural lead-in to\r\nadditional content. This content is a little bit longer.', NULL),
(18, 'i4.jpg', 3, NULL, ' This is a longer card with supporting text below as a natural lead-in to\r\n additional content. This content is a little bit longer.', NULL),
(19, 'i5.jpg', 3, NULL, 'This is a longer card with supporting text below as a natural lead-in to\r\n additional content. This content is a little bit longer.', NULL),
(20, 'i3.jpg', 3, NULL, 'This is a longer card with supporting text below as a natural lead-in to\r\n additional content. This content is a little bit longer.', NULL),
(21, 'i4.jpg', 3, NULL, 'This is a longer card with supporting text below as a natural lead-in to\r\n additional content. This content is a little bit longer.', NULL),
(22, 'i6.jpg', 3, NULL, 'This is a longer card with supporting text below as a natural lead-in to\r\n additional content. This content is a little bit longer.', NULL),
(23, 'i2.jpg', 3, 'La ville de gorom-gorom', 'This is a longer card with supporting text <br> below as a natural lead-in to\r\n additional content. <br> This content is a little bit longer.\r\n This is a longer card with supporting text <br> below as a natural lead-in to\r\nadditional content. <br> This content is a little bit longer.This is a longer card with supporting text <br> below as a natural lead-in to\r\nadditional content. <br> This content is a little bit longer.This is a longer card with supporting text <br> below as a natural lead-in to\r\nadditional content. <br> This content is a little bit longer.', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id`, `nom`) VALUES
(1, 'La belle cité de sya'),
(2, 'Banfora'),
(3, 'gorom-gorom');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `restauration`
--
ALTER TABLE `restauration`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sites_touristiques`
--
ALTER TABLE `sites_touristiques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cleville` (`idville`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `restauration`
--
ALTER TABLE `restauration`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `sites_touristiques`
--
ALTER TABLE `sites_touristiques`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `sites_touristiques`
--
ALTER TABLE `sites_touristiques`
  ADD CONSTRAINT `cleville` FOREIGN KEY (`idville`) REFERENCES `ville` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
