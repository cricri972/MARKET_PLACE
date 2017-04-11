-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 07 Avril 2017 à 22:36
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `e_shopping`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `phone_2` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `clients`
--

INSERT INTO `clients` (`id`, `pseudo`, `firstname`, `lastname`, `email`, `password`, `phone`, `phone_2`, `address`, `city`, `zip_code`) VALUES
(4, 'Max', 'Maxime', 'La Menace', 'mlm@free.fr', '$2y$10$lIvLtoeQz962mg3ligZ4jefucr8xqFREsJqJHHytI.R39Xes15WSq', '1234569000', '0100200300', '1, rue des Erables', 'Senlis', 60200),
(7, 'Vic', 'Victoire', 'Tory', 'vicvt@bouygues.fr', '$2y$10$3BFbn.NQGpyTr4rGH7YPseH7J.6zIggbCtpahywyN0aMWzN0yuDvq', '1122334455', '6677889900', '2, rue de la paix', 'Bordeaux', 33000),
(8, 'Bob', 'Satoshi', 'Dupont', 'bob@free.fr', '$2y$10$s6871zMwiChDYlvc5HQTgOiYfksVem22KOYo7Z81OmOH60IRUfYnK', '2233445566', '7788990011', '3, rue des Acacias', 'Avignon', 84000);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
