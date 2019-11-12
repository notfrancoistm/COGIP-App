-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Hôte : database:3306
-- Généré le :  mar. 12 nov. 2019 à 13:25
-- Version du serveur :  10.4.2-MariaDB-1:10.4.2+maria~bionic
-- Version de PHP :  7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cogip`
--

-- --------------------------------------------------------

--
-- Structure de la table `company`
--

CREATE TABLE `company` (
  `ID` int(11) NOT NULL,
  `company_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VAT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `company`
--

INSERT INTO `company` (`ID`, `company_name`, `VAT`, `country`, `type_id`) VALUES
(1, 'dunder mifflin', 'us678765765', 'US', 1),
(2, 'raviga', 'US456654342', 'US', 1),
(3, 'jouet jean-michel', 'fr677544000', 'FR', 1),
(4, 'bob vance refrig.', 'us456654687', 'US', 1),
(5, 'belgalol', 'be0876654665', 'BE', 2),
(6, 'pierre cailloux', 'fr678908654', 'FR', 2),
(7, 'proximdr', 'be0876985665', 'BE', 2),
(8, 'electric power', 'it256852542', 'IT', 2),
(11, 'test0', 'test0', 'BE', 1),
(12, 'test1', 'test1', 'BE', 2),
(14, 'pouchita', 'BE08766546', 'TL', 2);

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` int(11) DEFAULT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`ID`, `first_name`, `last_name`, `mail`, `company`, `phone`) VALUES
(1, 'Dwight', 'Schrute', 'dwight.schrute@ddmfl.com', 1, 555511984),
(15, 'peter', 'gregory', 'peter.gregory@raviga.com', 2, 5554567),
(16, 'cameron', 'howe', 'cam.howe@belgalol.net', 5, 5557896),
(17, 'gavin', 'belson', 'gavin@cailloux.fr', 6, 5554213),
(18, 'jian', 'yang', 'jian.yang@vance.bob', 4, 5554567),
(19, 'bertram', 'gilfoye', 'gilfoye.b@electricpow.it', 8, 5550987),
(20, 'pascale', 'belette', 'pas.bel@jjmc.fr', 3, 5489632),
(21, 'archie', 'medesi', 'archi.mede@proximdr.net', 7, 6335841),
(22, 'test', 'test', 'test', 1, 0),
(23, 'test', 'test', 'test', 1, 0),
(25, 'kokoro', 'poupou', 'test@test.es', 5, 458693693);

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

CREATE TABLE `invoices` (
  `ID` int(11) NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `company` int(11) NOT NULL,
  `company_type` int(11) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `invoices`
--

INSERT INTO `invoices` (`ID`, `number`, `date`, `company`, `company_type`, `contact`) VALUES
(1, 'F20190404-004', '2019-10-30 00:00:00', 1, 1, 1),
(2, 'F20180310-052', '2019-10-30 00:00:00', 1, 1, 1),
(3, 'F20190204-008', '2019-10-30 00:00:00', 1, 1, 1),
(4, 'F20160409-013', '2019-10-30 00:00:00', 1, 1, 1),
(7, 'f20190404-004', '2019-04-04 00:00:00', 3, 2, 20),
(8, 'F20190404-002', '2019-04-04 00:00:00', 6, 2, 17),
(9, 'F20190404-001', '2019-04-04 00:00:00', 5, 2, 16),
(10, 'F20190403-654', '2019-04-03 00:00:00', 2, 1, 15),
(11, 'f20150522-235', '2015-05-22 00:00:00', 4, 1, 18),
(12, 'f20101103-369', '2010-11-03 00:00:00', 8, 2, 19),
(13, 'f20160226-245', '2016-02-26 00:00:00', 7, 2, 21),
(14, '1', '2019-11-07 15:38:20', 3, 2, 1),
(15, '1', '2019-11-07 18:26:24', 1, 1, 1),
(20, '999', '2019-11-07 18:30:21', 2, 2, 15);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `ID` int(11) NOT NULL,
  `company_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`ID`, `company_type`) VALUES
(1, 'client'),
(2, 'supplier');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rights` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID`, `login`, `password`, `rights`) VALUES
(1, 'jean-christian', '$2y$10$Qa56z0CRlwlYYYTAOlqpW.5Hs5tcD5wb43TsXBEOcReg3hca1FzrC', 'god'),
(2, 'muriel', '$2y$10$smeNe4R9xHB6PyKpQqMINuds3bece1.JXneKoauA/aFcAa1Nf7c76', 'modo');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_type` (`type_id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `contacts_ibfk_2` (`company`);

--
-- Index pour la table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `invoices_ibfk_1` (`company`),
  ADD KEY `invoices_ibfk_2` (`company_type`),
  ADD KEY `invoices_ibfk_3` (`contact`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `company`
--
ALTER TABLE `company`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_3` FOREIGN KEY (`type_id`) REFERENCES `type` (`ID`);

--
-- Contraintes pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_ibfk_2` FOREIGN KEY (`company`) REFERENCES `company` (`ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`company`) REFERENCES `company` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `invoices_ibfk_2` FOREIGN KEY (`company_type`) REFERENCES `type` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `invoices_ibfk_3` FOREIGN KEY (`contact`) REFERENCES `contacts` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
