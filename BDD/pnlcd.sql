-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 01 jan. 2018 à 19:21
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pnlcd`
--

-- --------------------------------------------------------

--
-- Structure de la table `access_users`
--

CREATE TABLE `access_users` (
  `id_acces` int(11) NOT NULL,
  `id_agent` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_dps` int(11) NOT NULL,
  `id_zs` int(11) NOT NULL,
  `id_air_sante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `agents`
--

CREATE TABLE `agents` (
  `id_agent` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `postnom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` varchar(250) NOT NULL,
  `id_grade` int(11) NOT NULL,
  `id_zs` int(11) NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `aire_sante`
--

CREATE TABLE `aire_sante` (
  `id_air_sante` int(11) NOT NULL,
  `id_zs` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `aire_sante`
--

INSERT INTO `aire_sante` (`id_air_sante`, `id_zs`, `libelle`) VALUES
(1, 1, 'bu Aboso Aire de Santé'),
(2, 1, 'bu Ahaupa Aire de Santé'),
(3, 2, 'bu Bambilo Aire de Santé'),
(4, 3, 'eq Bafumba Aire de Santé');

-- --------------------------------------------------------

--
-- Structure de la table `DPS`
--

CREATE TABLE `DPS` (
  `id_dps` int(11) NOT NULL,
  `libelle_dps` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `DPS`
--

INSERT INTO `DPS` (`id_dps`, `libelle_dps`) VALUES
(1, 'bu Bas Uele '),
(2, 'eq Equateur '),
(3, 'hk Haut Katanga '),
(4, 'hl Haut Lomami ');

-- --------------------------------------------------------

--
-- Structure de la table `enregistrement`
--

CREATE TABLE `enregistrement` (
  `id_freq` int(11) NOT NULL,
  `id_v` int(11) NOT NULL,
  `id_zs` int(11) NOT NULL,
  `id_air_sante` int(11) NOT NULL,
  `id_agent` int(11) NOT NULL,
  `date_enr` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `grade`
--

CREATE TABLE `grade` (
  `id_grade` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `grade`
--

INSERT INTO `grade` (`id_grade`, `libelle`) VALUES
(1, 'directeur'),
(2, 'secretaire'),
(3, 'infirmier'),
(4, 'docteur'),
(5, 'informaticien'),
(6, 'statistisien');

-- --------------------------------------------------------

--
-- Structure de la table `remise_result`
--

CREATE TABLE `remise_result` (
  `id_remi` int(11) NOT NULL,
  `date_remis` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_agent` int(11) NOT NULL,
  `id_v` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `resultat`
--

CREATE TABLE `resultat` (
  `id_res` int(11) NOT NULL,
  `id_v` int(11) NOT NULL,
  `technique` varchar(50) NOT NULL,
  `type_res` varchar(50) NOT NULL,
  `observation` varchar(300) NOT NULL,
  `id_agent` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type_users`
--

CREATE TABLE `type_users` (
  `id_type` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `volontaire`
--

CREATE TABLE `volontaire` (
  `id_v` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `postnom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `num_tel` varchar(20) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `date_naiss` varchar(50) NOT NULL,
  `etat_civil` varchar(20) NOT NULL,
  `num_avenue` varchar(20) NOT NULL,
  `avenue` varchar(50) NOT NULL,
  `quartier` varchar(100) NOT NULL,
  `comm_ville` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `zone_sante`
--

CREATE TABLE `zone_sante` (
  `id_zs` int(11) NOT NULL,
  `id_dps` int(11) NOT NULL,
  `libelle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `zone_sante`
--

INSERT INTO `zone_sante` (`id_zs`, `id_dps`, `libelle`) VALUES
(1, 1, 'bu Aketi Zone de Santé'),
(2, 1, 'bu Bili Zone de Santé'),
(3, 2, 'eq Basankusu Zone de Santé'),
(4, 2, 'eq Bikoro Zone de Santé'),
(5, 3, 'hk Kafubu Zone de Santé'),
(6, 3, 'hk Kamalondo Zone de Santé'),
(7, 4, 'hl Baka Zone de Santé'),
(8, 4, 'hl Bukama Zone de Santé');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `access_users`
--
ALTER TABLE `access_users`
  ADD PRIMARY KEY (`id_acces`),
  ADD KEY `nom` (`id_agent`),
  ADD KEY `id_dps` (`id_dps`),
  ADD KEY `id_zs` (`id_zs`),
  ADD KEY `id_air_sante` (`id_air_sante`);

--
-- Index pour la table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id_agent`),
  ADD KEY `id_agent` (`id_agent`),
  ADD KEY `id_zs` (`id_zs`),
  ADD KEY `nom` (`nom`),
  ADD KEY `id_grade` (`id_grade`),
  ADD KEY `id_type` (`id_type`);

--
-- Index pour la table `aire_sante`
--
ALTER TABLE `aire_sante`
  ADD PRIMARY KEY (`id_air_sante`),
  ADD KEY `id_zs` (`id_zs`),
  ADD KEY `id_sante` (`id_air_sante`),
  ADD KEY `id_air_sante` (`id_air_sante`);

--
-- Index pour la table `DPS`
--
ALTER TABLE `DPS`
  ADD PRIMARY KEY (`id_dps`);

--
-- Index pour la table `enregistrement`
--
ALTER TABLE `enregistrement`
  ADD PRIMARY KEY (`id_freq`),
  ADD KEY `id_v` (`id_v`),
  ADD KEY `id_air_sante` (`id_air_sante`),
  ADD KEY `id_agent` (`id_agent`),
  ADD KEY `id_zs` (`id_zs`);

--
-- Index pour la table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id_grade`),
  ADD KEY `id_grade` (`id_grade`);

--
-- Index pour la table `remise_result`
--
ALTER TABLE `remise_result`
  ADD PRIMARY KEY (`id_remi`),
  ADD KEY `id_remi` (`id_remi`),
  ADD KEY `id_agent` (`id_agent`),
  ADD KEY `id_v` (`id_v`);

--
-- Index pour la table `resultat`
--
ALTER TABLE `resultat`
  ADD PRIMARY KEY (`id_res`),
  ADD KEY `id_res` (`id_res`),
  ADD KEY `id_v` (`id_v`),
  ADD KEY `id_agent` (`id_agent`);

--
-- Index pour la table `type_users`
--
ALTER TABLE `type_users`
  ADD PRIMARY KEY (`id_type`),
  ADD KEY `id_type` (`id_type`);

--
-- Index pour la table `volontaire`
--
ALTER TABLE `volontaire`
  ADD PRIMARY KEY (`id_v`),
  ADD KEY `id_v` (`id_v`);

--
-- Index pour la table `zone_sante`
--
ALTER TABLE `zone_sante`
  ADD PRIMARY KEY (`id_zs`),
  ADD KEY `id_zs` (`id_zs`),
  ADD KEY `id_dps` (`id_dps`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `access_users`
--
ALTER TABLE `access_users`
  MODIFY `id_acces` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `agents`
--
ALTER TABLE `agents`
  MODIFY `id_agent` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `aire_sante`
--
ALTER TABLE `aire_sante`
  MODIFY `id_air_sante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `DPS`
--
ALTER TABLE `DPS`
  MODIFY `id_dps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `enregistrement`
--
ALTER TABLE `enregistrement`
  MODIFY `id_freq` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `grade`
--
ALTER TABLE `grade`
  MODIFY `id_grade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `remise_result`
--
ALTER TABLE `remise_result`
  MODIFY `id_remi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `resultat`
--
ALTER TABLE `resultat`
  MODIFY `id_res` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_users`
--
ALTER TABLE `type_users`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `volontaire`
--
ALTER TABLE `volontaire`
  MODIFY `id_v` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `zone_sante`
--
ALTER TABLE `zone_sante`
  MODIFY `id_zs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `access_users`
--
ALTER TABLE `access_users`
  ADD CONSTRAINT `access_users_ibfk_2` FOREIGN KEY (`id_dps`) REFERENCES `DPS` (`id_dps`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `access_users_ibfk_3` FOREIGN KEY (`id_air_sante`) REFERENCES `aire_sante` (`id_air_sante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `access_users_ibfk_4` FOREIGN KEY (`id_zs`) REFERENCES `zone_sante` (`id_zs`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `access_users_ibfk_5` FOREIGN KEY (`id_agent`) REFERENCES `agents` (`id_agent`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `agents`
--
ALTER TABLE `agents`
  ADD CONSTRAINT `agents_ibfk_1` FOREIGN KEY (`id_zs`) REFERENCES `zone_sante` (`id_zs`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `agents_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `type_users` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `agents_ibfk_3` FOREIGN KEY (`id_grade`) REFERENCES `grade` (`id_grade`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `aire_sante`
--
ALTER TABLE `aire_sante`
  ADD CONSTRAINT `aire_sante_ibfk_1` FOREIGN KEY (`id_zs`) REFERENCES `zone_sante` (`id_zs`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `enregistrement`
--
ALTER TABLE `enregistrement`
  ADD CONSTRAINT `enregistrement_ibfk_1` FOREIGN KEY (`id_air_sante`) REFERENCES `aire_sante` (`id_air_sante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enregistrement_ibfk_3` FOREIGN KEY (`id_agent`) REFERENCES `agents` (`id_agent`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enregistrement_ibfk_4` FOREIGN KEY (`id_v`) REFERENCES `volontaire` (`id_v`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `remise_result`
--
ALTER TABLE `remise_result`
  ADD CONSTRAINT `remise_result_ibfk_1` FOREIGN KEY (`id_agent`) REFERENCES `agents` (`id_agent`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `resultat`
--
ALTER TABLE `resultat`
  ADD CONSTRAINT `resultat_ibfk_1` FOREIGN KEY (`id_v`) REFERENCES `volontaire` (`id_v`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resultat_ibfk_2` FOREIGN KEY (`id_agent`) REFERENCES `agents` (`id_agent`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `zone_sante`
--
ALTER TABLE `zone_sante`
  ADD CONSTRAINT `zone_sante_ibfk_1` FOREIGN KEY (`id_dps`) REFERENCES `DPS` (`id_dps`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
