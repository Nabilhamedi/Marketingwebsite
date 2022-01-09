-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 09 jan. 2022 à 10:55
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
-- Base de données :  `marketing`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `prenom` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `numero` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `comande`
--

CREATE TABLE `comande` (
  `id` int(11) NOT NULL,
  `nom_cm` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `qounteti` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `id` int(10) NOT NULL,
  `nom_four` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `prenom_four` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `num_four` int(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(10) NOT NULL,
  `nom_pr` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `prix_p` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom_pr`, `prix_p`) VALUES
(1, 'meubles', 100),
(2, 'accessoires', 200),
(3, 'vettement', 300),
(4, 'produits nettoyage', 400),
(5, 'produit beaute', 700);


--
-- Index pour les tables déchargées
--
INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(2, 'nabil hamedi', 'nabil-hamedi1999@gmail.com', '123456');
--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
