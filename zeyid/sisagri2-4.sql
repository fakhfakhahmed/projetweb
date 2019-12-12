-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 12 déc. 2019 à 10:13
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sisagri2`
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
  `type` varchar(15) NOT NULL DEFAULT 'admin',
  `etat` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`username`, `nom`, `prenom`, `mdp`, `email`, `tel`, `type`, `etat`) VALUES
('wissem', 'wissem', 'bhk', 'wissem', 'wissem@esprit.tn', 58797589, 'sadmin', 0),
('z', 'nom', 'prenom', '12', 'zeartgzazerert@dd.dd', 234944, 'admin', 0),
('iji', 'nom', 'prenom', '12', 'ahmed.fakhfakh@esprit.tn', 234, 'admin', 1),
('saddem', 'saddem', 'saddem', '121415', 'saddem@esprit.tn', 12121212, 'admin', 0),
('wissem@esprit.gtn', 'hu', 'uhj', '1212', 'wissem@esprit.gtn', 1212, 'admin', 0),
('salma', 'salma', 'mouelhi', 's123456', 'salma.mouelhi@esprit.tn', 22791931, 'admin', 0),
('emna', 'emna', 'mellah', 'salma123569', 'emna.mellah@gmail.com', 29907814, 'admin', 0),
('ghassen ghas', 'ghassen', 'saaf', '251ajeuhg', 'ghassen.saaf@epsrit.tn', 25698415, 'admin', 0),
('12e', 'hu', 'uhj', '1212', '12@12.12', 1212, 'admin', 0),
('11', '11', '11', '1111', '11@11.11', 11, 'admin', 0),
('13', '13', '13', '1313', '13@13.13', 13, 'admin', 0);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom_cat` varchar(20) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `nom_cat`) VALUES
(22, 'traktour'),
(24, 'Dwe'),
(30, '3alfa'),
(38, 'cvcvc');

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
  `etat` int(1) NOT NULL DEFAULT '0',
  `dateinscri` date NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`username`, `nom`, `prenom`, `mdp`, `email`, `tel`, `etat`, `dateinscri`) VALUES
('aa', 'ezrz', 'wissem', '1212', 'wissem@esprit.tn', 1212, 0, '2019-12-08'),
('ee', 'ee', 'ee', '1212', 'wissem@esprit.tne', 12, 1, '2019-12-08'),
('jrjr', 'az', 'az', '15', 'wissem22111@gmail.com', 15, 0, '2019-12-09'),
('12', '12', '12', '12', 'wissem@espzrit.tn', 12, 1, '2019-12-08'),
('esprit', 'esprit', 'esprit', '1212', 'email@esprit.tn', 1212, 0, '2019-12-11');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `orderId` int(11) NOT NULL AUTO_INCREMENT,
  `uemail` varchar(50) NOT NULL,
  `dueAmount` int(11) NOT NULL,
  `innoNumber` int(255) NOT NULL,
  `totalQty` int(11) NOT NULL,
  `orderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` int(11) NOT NULL DEFAULT '0',
  `discount` float NOT NULL,
  PRIMARY KEY (`orderId`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`orderId`, `uemail`, `dueAmount`, `innoNumber`, `totalQty`, `orderDate`, `Status`, `discount`) VALUES
(37, '', 600012, 1344516, 2, '2019-12-09 15:45:31', 0, 0),
(36, 'moemen@aa.aa', 600012, 6829376, 2, '2019-12-09 15:27:52', 0, 0),
(35, 'moemen@aa.aa', 24, 2904853, 2, '2019-12-09 15:27:14', 0, 0),
(34, 'moemen@aa.aa', 0, 4000779, 1, '2019-12-09 14:12:28', 0, 0),
(33, 'moemen@aa.aa', 1995, 3722484, 9, '2019-12-09 12:21:07', 0, 0),
(32, 'moemen@aa.aa', 1995, 2015446, 9, '2019-12-09 12:21:07', 0, 0),
(31, 'moemen@aa.aa', 495, 4767781, 3, '2019-12-08 14:25:36', 0, 0),
(30, 'moemen@aa.aa', 1165, 2441061, 7, '2019-12-08 14:25:16', 0, 0),
(29, 'moemen@aa.aa', 735, 9954382, 5, '2019-12-08 13:53:04', 0, 0),
(28, 'moemen@aa.aa', 735, 1235824, 5, '2019-12-08 13:53:04', 0, 0),
(27, 'moemen@aa.aa', 50775, 4849369, 403, '2019-12-08 13:25:37', 0, 0),
(26, 'moemen@aa.aa', 1685, 5669606, 12, '2019-12-06 21:59:53', 0, 0),
(25, 'moemen@aa.aa', 2410, 5816439, 19, '2019-12-06 10:21:49', 0, 0),
(24, 'moemen@aa.aa', 35850, 6982417, 223, '2019-12-06 09:16:15', 0, 0),
(23, 'moemen@aa.aa', 10, 3638808, 1, '2019-12-05 16:06:27', 0, 0),
(22, 'moemen@aa.aa', 130, 4606157, 2, '2019-12-05 16:04:18', 0, 0),
(38, 'moemen@aa.aa', 2500, 1687888, 1, '2019-12-11 14:56:54', 0, 0),
(39, 'moemen@aa.aa', 12, 2941911, 1, '2019-12-11 14:57:35', 0, 0),
(40, 'moemen@aa.aa', 600000, 1853433, 1, '2019-12-11 14:58:44', 0, 0),
(41, 'wissem@esprit.tn', 600000, 7551659, 1, '2019-12-11 15:02:00', 0, 0),
(42, 'wissem@esprit.tn', 552000, 4225213, 1, '2019-12-11 15:02:30', 0, 0),
(43, 'wissem@esprit.tn', 0, 2551703, 1, '2019-12-11 15:02:48', 0, 0),
(44, 'wissem@esprit.tn', 552011, 7531205, 1, '2019-12-11 15:26:35', 0, 47989),
(45, 'wissem@esprit.tn', 551999, 8738712, 1, '2019-12-11 15:35:57', 0, 48000.8),
(46, 'wissem@esprit.tn', 600000, 6292668, 1, '2019-12-11 15:37:08', 0, 0),
(47, 'wissem@esprit.tn', 0, 3413924, 1, '2019-12-12 09:09:40', 0, 12);

-- --------------------------------------------------------

--
-- Structure de la table `fidelite`
--

DROP TABLE IF EXISTS `fidelite`;
CREATE TABLE IF NOT EXISTS `fidelite` (
  `username` varchar(50) NOT NULL,
  `solde` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fidelite`
--

INSERT INTO `fidelite` (`username`, `solde`) VALUES
('esprit', 0),
('wissem@esprit.tn', 47990.6),
('moemen@aa.aa', 48000);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id_produit` int(100) NOT NULL AUTO_INCREMENT,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(100) NOT NULL,
  PRIMARY KEY (`id_produit`,`ip_add`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `id_categorie` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` text NOT NULL,
  `stock` int(11) NOT NULL,
  `img_1` varchar(500) NOT NULL,
  `key_word` varchar(50) NOT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id_produit`, `id_categorie`, `nom`, `prix`, `description`, `stock`, `img_1`, `key_word`) VALUES
(23, 24, 'TRaktour 1', 2500, 'akrher w men libyaa w mechi barchaaaaON', 0, 'computer.jpg', 'traktour'),
(24, 22, 'Traktour2', 600000, 'kifkif kiamaa l 99balou bethabet', 123, 'axe-a-fleaux-park.jpg', 'trak2'),
(27, 30, 'Achref', 12, 'fsdfdsgdsgfdsgdfsg', 545, 'c--logo-icon-0.png', 'dsfs'),
(29, 22, 'amief', 2356, 'fgfdgerdg', 545, '60596652_2732412926832156_7655020666650886144_n.jpg', 'jhskfsd');

-- --------------------------------------------------------

--
-- Structure de la table `produits_commande`
--

DROP TABLE IF EXISTS `produits_commande`;
CREATE TABLE IF NOT EXISTS `produits_commande` (
  `orderId` int(11) NOT NULL AUTO_INCREMENT,
  `uemail` varchar(50) NOT NULL,
  `innoviceNumber` int(255) NOT NULL,
  `prodId` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`orderId`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produits_commande`
--

INSERT INTO `produits_commande` (`orderId`, `uemail`, `innoviceNumber`, `prodId`, `qty`, `status`) VALUES
(81, 'moemen@aa.aa', 6829376, 27, 1, 0),
(85, 'moemen@aa.aa', 1687888, 23, 1, 0),
(86, 'moemen@aa.aa', 2941911, 27, 1, 0),
(87, 'moemen@aa.aa', 1853433, 24, 1, 0),
(88, 'wissem@esprit.tn', 7551659, 24, 1, 0),
(89, 'wissem@esprit.tn', 4225213, 24, 1, 0),
(90, 'wissem@esprit.tn', 2551703, 27, 1, 0),
(91, 'wissem@esprit.tn', 7531205, 24, 1, 0),
(92, 'wissem@esprit.tn', 8738712, 24, 1, 0),
(93, 'wissem@esprit.tn', 6292668, 24, 1, 1),
(94, 'wissem@esprit.tn', 3413924, 27, 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
