-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 31, 2021 at 10:06 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school1`
--

-- --------------------------------------------------------

--
-- Table structure for table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(40) DEFAULT NULL,
  `id_filiere` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_filiere` (`id_filiere`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classe`
--

INSERT INTO `classe` (`id`, `code`, `id_filiere`) VALUES
(6, 'classe 2015', 'GI'),
(7, 'classe 2012', '2ITE'),
(8, 'classe 2013', '2ITE'),
(9, 'classe 2014', 'GI'),
(10, 'classe 2016', 'G2E'),
(11, 'classe 2017', 'GI'),
(12, 'classe 2018', '2ITE'),
(13, 'classe 2005', 'GI'),
(18, 'classe 2014', '2ITE'),
(14, 'classe 2016', 'ISIC'),
(15, 'classe 2021', 'GI'),
(16, 'classe 2018', 'ISIC');


-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `ville` varchar(20) DEFAULT NULL,
  `sexe` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `id_filiere` varchar(10) DEFAULT NULL,
  `id_classe` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_fil` (`id_filiere`),
  KEY `fk_classe` (`id_classe`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `ville`, `sexe`, `email`, `id_filiere`, `id_classe`) VALUES
(1, 'achbar', 'saad', 'casablanca', 'homme', 'achbarsaad1.com','2ITE', 1),
(2, 'sajid', 'soufiane', 'Marrakech', 'homme', 'sousou66@gmail.com','2aP', 2),
(3, 'imane', 'khoulkhali', 'casablanca', 'femme', 'cdert12@gmail.com','GI', 3),
(4, 'ali', 'chichaoua', 'fes', 'homme', 'exx66@gmail.com', '2ITE', 4),
(5, 'sanaa', 'karam', 'casablanca', 'femme', 'sanaa05.com','ISIC', 5),
(6, 'yassine', 'achbar', 'paris', 'homme', 'yassine2020@gmail.com', 'G2E', 6);

-- --------------------------------------------------------

--
-- Table structure for table `filiere`
--

DROP TABLE IF EXISTS `filiere`;
CREATE TABLE IF NOT EXISTS `filiere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(40) NOT NULL,
  `libelle` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filiere`
--

INSERT INTO `filiere` (`id`, `code`, `libelle`) VALUES
(1, '2ITE', 'Ingenierie informatique et Technologies Emergeantes'),
(2, 'ISIC', 'Ingenierie des systemes d\'informations et communication'),
(3, 'G2E', 'Genie elctrique et energitique'),
(4, 'GI', 'Genie Industrielle');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;







--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `cin` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role` varchar(50) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `fonction` int(11) NOT NULL,
  `departement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`cin`, `nom`, `prenom`, `email`, `telephone`, `adresse`, `password`, `role`, `photo`, `fonction`, `departement`) VALUES
('EE55021', 'Waziz', 'Moussaab', 'lachgar.m@gmail.com', '0687862800', 'Berradi 3', '3ed7dceaf266cafef032b9d5db224717', 'Admin', '5f727e9d8c0bbb30b046cf94d1d9a9f1.jpg', 19, 8),
('EE60601', 'Sarmadi', 'Yassin', 'srmooda@gmail.com', '0634805857', 'SYBA', 'ab4f63f9ac65152575886860dde480a1', 'Admin', '1ea72174d8063872c4776e122803f0f4.JPG', 20, 5),
('EE819349', 'Barhoum', 'Abdellah', 'iambarhoum@gmail.com', '0659778996', 'SYBA', 'ab4f63f9ac65152575886860dde480a1', 'Directeur', '73022302012b2e215e935b1639464707.jpeg', 21, 4);

