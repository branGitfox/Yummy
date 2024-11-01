-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 31 oct. 2024 à 11:27
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
-- Base de données : `yummy`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id_cat` int(11) NOT NULL,
  `cateoryname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_cat`, `cateoryname`) VALUES
(1, 'tacos'),
(2, 'soupe'),
(3, 'sambos'),
(4, 'gratin'),
(5, 'boisson'),
(6, 'glace'),
(7, 'riz');

-- --------------------------------------------------------

--
-- Structure de la table `commands`
--

CREATE TABLE `commands` (
  `id_com` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `telephone` varchar(250) NOT NULL,
  `cmd_name` varchar(50) NOT NULL,
  `prix_unit` int(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `nbr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commands`
--

INSERT INTO `commands` (`id_com`, `username`, `telephone`, `cmd_name`, `prix_unit`, `id_user`, `adress`, `nbr`) VALUES
(2, 'Brandon Fidelin', '0389411835', 'Tacos fruit de mer', 10000, 5, 'Avaratra Ankatso', 5);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id_prod` int(11) NOT NULL,
  `prodname` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `prodimg` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id_prod`, `prodname`, `price`, `category_id`, `prodimg`) VALUES
(1, 'tacos fruit de mer', 10000, 1, 'tacosF.jpg'),
(2, 'tacos tropical', 9000, 1, 'tacosT.jpg'),
(3, 'soupe tropical', 6500, 2, 'soupeT.jpg'),
(4, 'soupe special', 6000, 2, 'soupeS.jpg'),
(5, 'demi lune', 6000, 2, 'soupeD.jpg'),
(6, 'sambos viande', 500, 3, 'sambosV.jpg'),
(7, 'sambos poulet', 500, 3, 'sambosP.jpg'),
(8, 'gratin special', 15000, 4, 'gratinS.jpg'),
(9, 'gratin tropical', 15000, 4, 'gratinT.jpg'),
(10, 'coca cola', 2000, 5, 'coca.jpg'),
(11, 'soda', 2000, 5, 'soda.jpg'),
(12, 'glace cornet', 3000, 6, 'cornet.jpg'),
(13, 'glace en boite', 2500, 6, 'boite.jpg'),
(14, 'riz cantonnais', 5000, 7, 'rizC.jpg'),
(15, 'riz traditionnel', 7000, 7, 'rizM.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `profil` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `username`, `adress`, `tel`, `profil`, `password`, `email`) VALUES
(1, 'rtrt', 'trt', 'trt', '1730231948.jpg', '$2y$10$tHC/G7LM2lKxBQ79bh1dUuugpoKwBjg2GUBT/TWLgqua9XX0vnmLa', 'trt@gm'),
(2, 'test', 'test', 'test', '1730232009.jpg', '$2y$10$QSUguj7NC5Iui4//Fqc8bOMqAF61p7ASIDa/f1CAd0g6mz.jo1aLu', 'test@gmail.com'),
(3, 'test@gmail.com', 'gfgfg', 'fgfgf', '1730232426.jpg', '$2y$10$ntLnWful1Beev780HZoq1OrrNcZjWluu36APR4qW.xoQM.hhmsUBW', 'test@gmail.com'),
(4, 'test@gmail.com', 'r', 'r', '1730233683.jpg', '$2y$10$BUZuWviWJ7blM7lEfrfaDuziHJ2qQzSP.Ke/DgrmLvLmeuPv1ZnDm', 'r@gmail.com'),
(5, 'Brandon Fidelin', 'Avaratra Ankatso', '0389411835', '1730279308.jpg', '$2y$10$xzS3IkCoip6nkGA40EojbOB7Fn/5irLgR2tIGpm5793rYxB6.LAUy', 'brandon@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `commands`
--
ALTER TABLE `commands`
  ADD PRIMARY KEY (`id_com`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_prod`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `commands`
--
ALTER TABLE `commands`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
