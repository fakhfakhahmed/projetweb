-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 29 déc. 2019 à 21:35
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
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`username`, `nom`, `prenom`, `mdp`, `email`, `tel`, `type`) VALUES
('wissem', 'wissem', 'bhk', 'wissem', 'wissem@esprit.tn', 58797589, 'sadmin'),
('z', 'nom', 'prenom', '12', 'zeartgzazerert@dd.dd', 234944, 'admin'),
('iji', 'nom', 'prenom', '12', 'ahmed.fakhfakh@esprit.tn', 234, 'admin'),
('saddem', 'saddem', 'saddem', '121415', 'saddem@esprit.tn', 12121212, 'admin'),
('wissem@esprit.gtn', 'hu', 'uhj', '1212', 'wissem@esprit.gtn', 1212, 'admin');

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
('ee', 'ee', 'ee', '1212', 'wissem@esprit.tne', 12, 0, '2019-12-08'),
('jrjr', 'az', 'az', '15', 'wissem22111@gmail.com', 15, 0, '2019-12-09'),
('12', '12', '12', '12', 'wissem@espzrit.tn', 12, 0, '2019-12-08');

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
  PRIMARY KEY (`orderId`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`orderId`, `uemail`, `dueAmount`, `innoNumber`, `totalQty`, `orderDate`, `Status`) VALUES
(37, '', 600012, 1344516, 2, '2019-12-09 15:45:31', 0),
(36, 'moemen@aa.aa', 600012, 6829376, 2, '2019-12-09 15:27:52', 0),
(35, 'moemen@aa.aa', 24, 2904853, 2, '2019-12-09 15:27:14', 0),
(34, 'moemen@aa.aa', 0, 4000779, 1, '2019-12-09 14:12:28', 0),
(33, 'moemen@aa.aa', 1995, 3722484, 9, '2019-12-09 12:21:07', 0),
(32, 'moemen@aa.aa', 1995, 2015446, 9, '2019-12-09 12:21:07', 0),
(31, 'moemen@aa.aa', 495, 4767781, 3, '2019-12-08 14:25:36', 0),
(30, 'moemen@aa.aa', 1165, 2441061, 7, '2019-12-08 14:25:16', 0),
(29, 'moemen@aa.aa', 735, 9954382, 5, '2019-12-08 13:53:04', 0),
(28, 'moemen@aa.aa', 735, 1235824, 5, '2019-12-08 13:53:04', 0),
(27, 'moemen@aa.aa', 50775, 4849369, 403, '2019-12-08 13:25:37', 0),
(26, 'moemen@aa.aa', 1685, 5669606, 12, '2019-12-06 21:59:53', 0),
(25, 'moemen@aa.aa', 2410, 5816439, 19, '2019-12-06 10:21:49', 0),
(24, 'moemen@aa.aa', 35850, 6982417, 223, '2019-12-06 09:16:15', 0),
(23, 'moemen@aa.aa', 10, 3638808, 1, '2019-12-05 16:06:27', 0),
(22, 'moemen@aa.aa', 130, 4606157, 2, '2019-12-05 16:04:18', 0);

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
-- Structure de la table `livraison`
--

DROP TABLE IF EXISTS `livraison`;
CREATE TABLE IF NOT EXISTS `livraison` (
  `id_livraison` int(10) NOT NULL AUTO_INCREMENT,
  `date_depart` date NOT NULL,
  `date_arrive` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `id_livreur` int(15) NOT NULL,
  `orderld` int(11) NOT NULL,
  PRIMARY KEY (`id_livraison`),
  KEY `cle etrangere` (`username`,`id_livreur`,`orderld`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`id_livraison`, `date_depart`, `date_arrive`, `username`, `id_livreur`, `orderld`) VALUES
(6, '2019-12-20', '2019-12-29', 'aa', 32184564, 27),
(14, '2019-12-19', '2019-12-20', 'aa', 513214, 29),
(7, '2019-12-20', '2019-12-29', 'ee', 32184564, 29),
(8, '2019-12-20', '2019-12-21', 'aa', 513214, 35),
(9, '2019-12-20', '2019-12-21', 'aa', 513214, 35),
(10, '2019-12-20', '2019-12-21', 'aa', 513214, 35),
(11, '2019-12-20', '2019-12-21', 'aa', 513214, 35),
(13, '2019-12-20', '2019-12-21', 'ee', 513214, 26),
(15, '2019-12-20', '2019-12-21', 'ee', 32184564, 27);

-- --------------------------------------------------------

--
-- Structure de la table `livreur`
--

DROP TABLE IF EXISTS `livreur`;
CREATE TABLE IF NOT EXISTS `livreur` (
  `id_livreur` int(15) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `etat` int(1) NOT NULL,
  `matricule` varchar(8) NOT NULL,
  `adresse` varchar(25) NOT NULL,
  `tel` int(8) NOT NULL,
  PRIMARY KEY (`id_livreur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livreur`
--

INSERT INTO `livreur` (`id_livreur`, `nom`, `prenom`, `etat`, `matricule`, `adresse`, `tel`) VALUES
(126465, 'azdaf', 'zezry', 1, '', '', 52788235),
(513214, 'nathan', 'prince', 0, '315651', '', 0),
(87456123, 'nti mefe', 'prince', 1, '31467412', 'ariana', 52788230),
(32184564, 'nti', 'mengue', 0, '4354335', 'raoued', 54245465);

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

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id_produit`, `ip_add`, `qty`) VALUES
(23, '192.168.8.105', 1),
(24, '127.0.0.1', 3),
(23, '127.0.0.1', 1),
(27, '127.0.0.1', 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produits_commande`
--

INSERT INTO `produits_commande` (`orderId`, `uemail`, `innoviceNumber`, `prodId`, `qty`, `status`) VALUES
(81, 'moemen@aa.aa', 6829376, 27, 1, 0);

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
