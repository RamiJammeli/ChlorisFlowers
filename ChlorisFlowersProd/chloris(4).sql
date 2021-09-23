-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 25 avr. 2021 à 16:17
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chloris`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `user` int(11) DEFAULT NULL,
  `order_date` date NOT NULL,
  `total_achat` double NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20201006223943', '2020-10-07 02:11:45', 1416);

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

CREATE TABLE `ligne_commande` (
  `id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `id_produit_id` int(11) DEFAULT NULL,
  `id_order_id` int(11) DEFAULT NULL,
  `litte_rose` tinyint(1) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `couvercle` tinyint(1) DEFAULT NULL,
  `message_couvercle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suprise` tinyint(1) DEFAULT NULL,
  `name_r` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name_r` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress_r` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_numver_r` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipdate` date NOT NULL,
  `type_livraison` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentaire` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `prodcut_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `box_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `box_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rose_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rose_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_rose_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `image_categorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `macron_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `haut_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_box` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `prodcut_name`, `box_size`, `box_color`, `rose_number`, `rose_color`, `categorie`, `image`, `image_rose_number`, `prix`, `image_categorie`, `macron_number`, `haut_image`, `description_box`, `stock`) VALUES
(1, 'Le Standard', 'L', 'Blanc', '18-20', 'Blanche', 'the classic collection', 'LargeBlancBlanc.png', 'https://www.fleursdeparis.fr/media/catalog/product/p/a/pastelle_peach.svg', 120, 'CLASSIC.jpg', NULL, 'LargeBlancBlancH.png', 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(2, 'Le Standard', 'M', 'Blanc', '8-10', 'Blanche', 'the classic collection', 'MediumBlancBlanc.png', 'https://www.fleursdeparis.fr/media/catalog/product/p/a/pastelle_peach.svg', 70, 'CLASSIC.jpg', NULL, 'MediumBlancBlancH.png', 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(3, 'Le Standard', 'M', 'Blanc', '8-10', 'Champagne', 'the classic collection', 'MediumBlancChampagne.png', 'https://www.fleursdeparis.fr/media/catalog/product/2/4/24_2_1.svg', 70, 'CLASSIC.jpg', NULL, 'MediumBlancChampagneH.png', 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(4, 'Le Standard', 'M', 'Blanc', '8-10', 'Gypsophile', 'the classic collection', 'MediumBlancCypsophile.png', 'https://www.fleursdeparis.fr/media/catalog/product/p/a/pastelle_peach.svg', 70, 'CLASSIC.jpg', NULL, NULL, 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(5, 'Le Standard', 'M', 'Blanc', '8-10', 'Rose', 'the classic collection', 'MediumBlancRose.png', 'https://www.fleursdeparis.fr/media/catalog/product/1/5/15_1.svg', 70, 'CLASSIC.jpg', NULL, 'MediumBlancRoseH.png', 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(6, 'Le Standard', 'M', 'Blanc', '8-10', 'Rouge', 'the classic collection', 'MediumBlancRouge.png', 'https://www.fleursdeparis.fr/media/catalog/product/2/1/21_2_1.svg', 70, 'CLASSIC.jpg', NULL, 'MediumBlancRougeH.png', 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(7, 'Le Standard', 'M', 'Noir', '8-10', 'Blanche', 'the classic collection', 'MediumNoirBlanc.png', 'https://www.fleursdeparis.fr/media/catalog/product/p/a/pastelle_peach.svg', 70, 'CLASSIC.jpg', NULL, NULL, 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(8, 'Le Standard', 'M', 'Noir', '8-10', 'Rouge', 'the classic collection', 'MediumNoirRouge.png', 'https://www.fleursdeparis.fr/media/catalog/product/2/1/21_2_1.svg', 70, 'CLASSIC.jpg', NULL, 'MediumNoirRougeH.png', 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(14, 'Le Standard', 'S', 'Blanc', '4', 'Rouge', 'the classic collection', 'SmallBlancRouge.png', 'https://www.fleursdeparis.fr/media/catalog/product/2/1/21_2_1.svg', 35, 'CLASSIC.jpg', NULL, NULL, 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(15, 'Le Standard', 'S', 'Blanc', '4', 'Rose', 'the classic collection', 'SmallBlancRose.png', 'https://www.fleursdeparis.fr/media/catalog/product/1/5/15_1.svg', 35, 'CLASSIC.jpg', NULL, NULL, 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(16, 'Le Standard', 'S', 'Blanc', '4', 'Rose Bicolore', 'the classic collection', 'SmallBlancBicolore.png', 'https://www.fleursdeparis.fr/media/catalog/product/1/7/17_1_1.svg', 35, 'CLASSIC.jpg', NULL, NULL, 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(17, 'Le Standard', 'S', 'Noir', '4', 'Rouge', 'the classic collection', 'SmallNoirRouge.png', 'https://www.fleursdeparis.fr/media/catalog/product/2/1/21_2_1.svg', 35, 'CLASSIC.jpg', NULL, 'SmallNoirRougeH.png', 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(18, 'Le Standard', 'XL', 'Blanc', '30', 'Champagne', 'the classic collection', 'XlargeblancChampagne.png', 'https://www.fleursdeparis.fr/media/catalog/product/2/4/24_2_1.svg', 180, 'CLASSIC.jpg', NULL, 'hautXLChampagne.jpeg', 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(19, 'Le Standard', 'XL', 'Blanc', '30', 'Rose', 'the classic collection', 'XlargeBlancRose.png', 'https://www.fleursdeparis.fr/media/catalog/product/1/5/15_1.svg', 180, 'CLASSIC.jpg', NULL, 'hautXLRose.jpeg', 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(20, 'Le Standard', 'XL', 'Blanc', '30', 'Rouge', 'the classic collection', 'XlargeBlancRouge.png', 'https://www.fleursdeparis.fr/media/catalog/product/2/1/21_2_1.svg', 180, 'CLASSIC.jpg', NULL, 'XlargeBlancRougeH.png', 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(21, 'Le Marbré', 'M', 'Noir', '8-10', 'Rouge', 'the marble collection', 'MediumMarbréNoirRouge.png', 'https://www.fleursdeparis.fr/media/catalog/product/2/1/21_2_1.svg', 80, 'CollectionMarbre.jpeg', NULL, 'mediumNoirRougeMarbleH.png', 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(22, 'Le Marbré', 'M', 'Noir', '8-10', 'Blanche', 'the marble collection', 'MediumMarbréNoirBlanc.png', 'https://www.fleursdeparis.fr/media/catalog/product/p/a/pastelle_peach.svg', 80, 'CollectionMarbre.jpeg', NULL, NULL, 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(23, 'Baby Bird Box', 'S', 'Blanc', '4', 'Blanche', 'the bird collection', 'BabyBbBlancBlanc.png', 'https://www.fleursdeparis.fr/media/catalog/product/p/a/pastelle_peach.svg', 90, 'BB.jpg', '11-12', 'birdBoxBlancSH.jpg', 'Nous proposons une combinaison parfaite des plus belles fleurs avec de délicieux macarons. Une boite raffinée garnie de macarons au goût unique qui feront le bonheur des petits et des grands ', NULL),
(24, 'Baby Bird Box', 'S', 'Blanc', '4', 'Champagne', 'the bird collection', 'BabyBbBlanCchampagne.png', 'https://www.fleursdeparis.fr/media/catalog/product/2/4/24_2_1.svg', 90, 'BB.jpg', '11-12', NULL, 'Nous proposons une combinaison parfaite des plus belles fleurs avec de délicieux macarons. Une boite raffinée garnie de macarons au goût unique qui feront le bonheur des petits et des grands ', NULL),
(25, 'Baby Bird Box', 'S', 'Blanc', '4', 'Rose', 'the bird collection', 'BabyBbBlancRose.png', 'https://www.fleursdeparis.fr/media/catalog/product/1/5/15_1.svg', 90, 'BB.jpg', '11-12', 'birdBoxSRoseH.jpg', 'Nous proposons une combinaison parfaite des plus belles fleurs avec de délicieux macarons. Une boite raffinée garnie de macarons au goût unique qui feront le bonheur des petits et des grands ', NULL),
(26, ' Bird Box', 'L', 'Blanc', '10', 'Rose Bicolore', 'the bird collection', 'BirdboxBlancRoseBicolore.png', 'https://www.fleursdeparis.fr/media/catalog/product/1/7/17_1_1.svg', 180, 'BB.jpg', '14-15', 'birdBoxLBicoloreH.jpg', 'Nous proposons une combinaison parfaite des plus belles fleurs avec de délicieux macarons. Une boite raffinée garnie de macarons au goût unique qui feront le bonheur des petits et des grands ', NULL),
(27, 'Le Standard', 'L', 'Blanc', '18-20', 'Rouge', 'the classic collection', 'LargeBlancRouge.png', 'https://www.fleursdeparis.fr/media/catalog/product/2/1/21_2_1.svg', 120, 'CLASSIC.jpg', NULL, 'LargeBlancRougeH.png', 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(28, 'Le Standard', 'L', 'Noir', '18-20', 'Rouge', 'the classic collection', 'LargeNoirRouge.png', 'https://www.fleursdeparis.fr/media/catalog/product/2/1/21_2_1.svg', 120, 'CLASSIC.jpg', NULL, 'LargeNoirRougeH.png', 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(29, 'Le Standard', 'M', 'Noir', '8-10', 'Champagne', 'the classic collection', 'MediumNoirChampagne.png', 'https://www.fleursdeparis.fr/media/catalog/product/2/4/24_2_1.svg', 70, 'CLASSIC.jpg', NULL, 'MediumNoirChampagneH.png', 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(30, 'Baby Bird Box', 'S', 'Blanc', '4', 'Blanche', 'the bird collection', 'BabybbblancBleuvert.png', 'https://www.fleursdeparis.fr/media/catalog/product/p/a/pastelle_peach.svg', 90, 'BB.jpg', '11-12', NULL, 'Nous proposons une combinaison parfaite des plus belles fleurs avec de délicieux macarons. Une boite raffinée garnie de macarons au goût unique qui feront le bonheur des petits et des grands ', NULL),
(31, ' Bird Box', 'L', 'Jaune', '4', 'Blanche', 'the bird collection', 'BirdboxJauneBlanc.png', 'https://www.fleursdeparis.fr/media/catalog/product/p/a/pastelle_peach.svg', 90, 'BB.jpg', '11-12', NULL, 'Nous proposons une combinaison parfaite des plus belles fleurs avec de délicieux macarons. Une boite raffinée garnie de macarons au goût unique qui feront le bonheur des petits et des grands ', NULL),
(32, ' Bird Box', 'L', 'Rose', '10', 'Champagne', 'the bird collection', 'BirdboxRoseChampagne.png', 'https://www.fleursdeparis.fr/media/catalog/product/2/4/24_2_1.svg', 180, 'BB.jpg', '14-15', NULL, 'Nous proposons une combinaison parfaite des plus belles fleurs avec de délicieux macarons. Une boite raffinée garnie de macarons au goût unique qui feront le bonheur des petits et des grands ', NULL),
(33, 'Le Marbré', 'M', 'Noir', '8-10', 'Champagne', 'the marble collection', 'MarbréNoirChampagne .png', 'https://www.fleursdeparis.fr/media/catalog/product/2/4/24_2_1.svg', 80, 'CollectionMarbre.jpeg', NULL, 'mediumNoirChampagneMarbleH.png', 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(34, 'Le Standard', 'S', 'Noir', '4', 'Blanche', 'the classic collection', 'SmallNoirBlanc.png', 'https://www.fleursdeparis.fr/media/catalog/product/p/a/pastelle_peach.svg', 35, 'CLASSIC.jpg', NULL, 'SmallNoirBlancH.png', 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(35, 'Le Standard', 'S', 'Blanc', '4', 'Champagne', 'the classic collection', 'SmallBlancChampagne.png', 'https://www.fleursdeparis.fr/media/catalog/product/2/4/24_2_1.svg', 35, 'CLASSIC.jpg', NULL, 'SmallBlancChampagneH.png', 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(36, 'JETEE', 'S', 'Blanc', '25-30', 'Blanche', 'The Blooming Bride', 'JeteeBlancGypsophile.png', 'https://www.fleursdeparis.fr/media/catalog/product/p/a/pastelle_peach.svg', 150, 'JETEE.jpg', NULL, NULL, NULL, NULL),
(37, 'Le Standard', 'XL', 'Blanc', '30', 'Blanche', 'the classic collection', 'xlargeblancblanc.png', 'https://www.fleursdeparis.fr/media/catalog/product/p/a/pastelle_peach.svg', 180, 'CLASSIC.jpg', NULL, 'XLARGEblancblancH.png', 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL),
(38, 'Le Standard', 'XL', 'Noir', '30', 'Rouge', 'the classic collection', 'xlargenoirrouge.png', 'https://www.fleursdeparis.fr/media/catalog/product/2/1/21_2_1.svg', 180, 'CLASSIC.jpg', NULL, 'xlrougeNoirH.jpeg', 'Notre flowerbox est fait de vraies et belles roses disponibles dans une large palette de couleurs. Avec le soin nécessaire, nos arrangements floraux sont créés avec amour. Avec chaque commande, nous joignons une carte de vœux gratuite sur laquelle nous enregistrons votre message au destinataire.\r\nGrâce aux nouvelles techniques, nous créons des bijoux floraux qui vont embellir vos événements.', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `nom`, `prenom`, `adresse`, `tel`, `sexe`) VALUES
(1, 'narjes@gmail.com', '[\" ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$WndURk81YVo5Z25HQmQxOA$jQLya9UUwq6aJFwwFgtVkjiafyGPIr24RVd38IH3L2A', 'narjes', 'sef', 'sef', '12345', '1'),
(2, 'iheb@gmail.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$UURaa2gyS0RyQ1FlNFJKOA$MQd97W2eUvZZ/yNgpg8At8IPtMQrnoUHqT1fHaCeqtw', 'bf', 'iheb', 'hhh', '555555', '1'),
(3, 'eya@gmail.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$WndURk81YVo5Z25HQmQxOA$jQLya9UUwq6aJFwwFgtVkjiafyGPIr24RVd38IH3L2A', 'eya', 'eya', 'tunis', '12345', '1'),
(4, 'flowerschloris@gmail.com', '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$TVhJMG9TVXFFMHZ2cTBRNQ$4KFtSaU0qL6FRGs1szcL932YzI+wIRNtykjN005aA+8', 'admin', 'admin', 'omrane', '24043634', '1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6EEAA67D8D93D649` (`user`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3170B74BAABEFE2C` (`id_produit_id`),
  ADD KEY `IDX_3170B74BDD4481AD` (`id_order_id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_6EEAA67D8D93D649` FOREIGN KEY (`user`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `FK_3170B74BAABEFE2C` FOREIGN KEY (`id_produit_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `FK_3170B74BDD4481AD` FOREIGN KEY (`id_order_id`) REFERENCES `commande` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
