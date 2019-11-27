-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 27 nov. 2019 à 21:21
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sisagri`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mdp` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `tel` int(8) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `username` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `email` varchar(256) NOT NULL,
  `tel` int(8) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`username`, `nom`, `prenom`, `mdp`, `email`, `tel`) VALUES
('aa', 'aa', 'aa', 'testeur22111@gmail.com', 'aa', 22),
('azetazet', 'aezrtazet', 'aeztazet', 'zeartgzert@dd.dd', 'Ã©arfaz\"rfaa', 11111),
('azefrazerazerazeraerazera', 'aezrtazet', 'aeztazet', 'zeartgzazerert@dd.dd', 'MD5()', 11111),
('azefrazer', 'aezrtazet', 'aeztazet', 'aaaaaaaaaa', 'zeartgzazerert@dd.dd', 11111),
('tt', 'tt', 'tt', 'tttt', 'wissembhk00@gmail.com', 23494561),
('aaaa', 'aa', 'aa', 'aa', 'ravozoloc@uber-mail.com', 23494),
('aaaaa', 'aa', 'aa', '', 'ravozoloc@uber-mail.coma', 23494),
('aaaaaaaaa', 'aa', 'aa', '', 'ravozoloc@uber-mail.comaa', 23494),
('aaaaaaaaaa', 'aa', 'aa', '', 'ravozoloc@uber-mail.comaaa', 23494),
('aaaaaa', 'aa', 'aa', 'aa', 'testeur22111@gmail.com', 2349),
('azzz', 'aa', 'aa', 'aa', 'ahmed.fakhfakh@esprit.tn', 2349456),
('aaaaanj', 'aa', 'a', 'aa', 'testeur22111@gmail.coma', 234945),
('test11', 'aa', 'aa', 'aa', 'ravozoloc@uber-mail.fr', 2349);

-- --------------------------------------------------------

--
-- Structure de la table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
CREATE TABLE IF NOT EXISTS `complaint` (
  `ID_Complaint` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(25) NOT NULL,
  `Adress` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `Message` varchar(700) NOT NULL,
  PRIMARY KEY (`ID_Complaint`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `complaint`
--

INSERT INTO `complaint` (`ID_Complaint`, `FullName`, `Adress`, `Email`, `PhoneNumber`, `Message`) VALUES
(16, 'sdS', 'dqdq', 'ahlk@gmail.fr', 13131221, 'dsvfq bzg z z qd d dd dqg gfe'),
(17, 'sdS', 'sqdsdq', 'ahlk@gmail.fr', 13131221, 'dsvqs fdfg qs dsvqs fdfg qs dsvqs fdfg qs dsvqs fdfg qs dsvqs fdfg qs dsvqs fdfg qs dsvqs fdfg qs dsvqs fdfg qs dsvqs fdfg qs dsvqs fdfg qs dsvqs fdfg qs dsvqs fdfg qs dsvqs fdfg qs dsvqs fdfg qs dsvqs fdfg qs dsvqs fdfg qs dsvqs fdfg qs dsvqs fdfg qs dsvqs fdfg qs dsvqs fdfg qs dsvqs fdfg qs dsvqs fdfg qs dsvqs fdfg qs ');

-- --------------------------------------------------------

--
-- Structure de la table `helprequest`
--

DROP TABLE IF EXISTS `helprequest`;
CREATE TABLE IF NOT EXISTS `helprequest` (
  `ID_Request` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(50) NOT NULL,
  `Adress` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `PurchaseDate` varchar(50) NOT NULL,
  `PremiumMember` enum('yes','no') NOT NULL,
  PRIMARY KEY (`ID_Request`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `refproduit` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL,
  `nomcat` varchar(50) NOT NULL,
  `img1` varchar(256) NOT NULL,
  `img2` varchar(256) NOT NULL,
  `img3` varchar(256) NOT NULL,
  `stock` int(11) NOT NULL,
  `description` text NOT NULL,
  `keyword` varchar(50) NOT NULL,
  PRIMARY KEY (`refproduit`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `promo`
--

DROP TABLE IF EXISTS `promo`;
CREATE TABLE IF NOT EXISTS `promo` (
  `refproduit` int(11) NOT NULL,
  `nouvprix` int(11) NOT NULL,
  `ancprix` int(11) NOT NULL,
  `idpromo` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idpromo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
