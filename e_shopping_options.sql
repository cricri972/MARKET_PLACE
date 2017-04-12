-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 06 Avril 2017 à 15:25
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--


--
-- Structure de la table `options`
--

CREATE TABLE `options` (
  `address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `cover1` varchar(255) NOT NULL,
  `cover2` varchar(255) NOT NULL,
  `cover3` varchar(255) NOT NULL,
  `cover4` varchar(255) NOT NULL,
  `cover5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;