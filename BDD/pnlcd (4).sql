-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 01 jan. 2018 à 03:21
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
  `id_air_sante` int(11) NOT NULL,
  `id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `access_users`
--

INSERT INTO `access_users` (`id_acces`, `id_agent`, `password`, `id_air_sante`, `id_type`) VALUES
(1, 1, '0000', 1, 1),
(2, 3, 'evi', 5, 2),
(3, 5, '0000', 10, 2),
(4, 6, '0000', 13, 2);

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
  `id_zs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `agents`
--

INSERT INTO `agents` (`id_agent`, `nom`, `postnom`, `prenom`, `adresse`, `id_grade`, `id_zs`) VALUES
(1, 'VASUKAMA', 'NLANDU', 'joselyto', '', 5, 1),
(2, 'MUKENDI', 'KALENGA', 'Evi', 'ssjdhsjdhsjd', 4, 4),
(3, 'bilolo', 'mwambi', 'soruth', 'mon adresse', 2, 9),
(4, 'Musongo', 'dd', 'reagan', 'son adresse', 3, 8),
(5, 'Vam\'s', 'kite', 'Benjamin', 'adressefhdhfkdjhfkjhsd', 5, 10),
(6, 'MUSONGO', 'MUNSONG', 'Reagan', 'adressefhdhfkdjhfkjhsd', 3, 11);

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
(4, 3, 'eq Bafumba Aire de Santé'),
(5, 9, 'kn Adoula Aire de Santé'),
(6, 9, 'kn Bisengo Aire de Santé'),
(9, 10, 'kn Bitshakutshaku Aire de Santé'),
(10, 10, 'kn Funa 1 Aire de Santé'),
(11, 10, 'kn Funa 2 Aire de Santé'),
(12, 11, 'kn Bangu Aire de Santé'),
(13, 11, 'kn Binza Pigeon Aire de Santé'),
(14, 11, 'kn Bumba Aire de Santé');

-- --------------------------------------------------------

--
-- Structure de la table `consting_pre_test`
--

CREATE TABLE `consting_pre_test` (
  `id_pre_test` int(11) NOT NULL,
  `id_v` int(11) NOT NULL,
  `num_fiche` varchar(100) NOT NULL,
  `technique` varchar(30) NOT NULL,
  `cons_pre_test` varchar(500) NOT NULL,
  `consultat` varchar(100) NOT NULL,
  `date_cons` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `consting_pre_test`
--

INSERT INTO `consting_pre_test` (`id_pre_test`, `id_v`, `num_fiche`, `technique`, `cons_pre_test`, `consultat`, `date_cons`) VALUES
(1, 1, 'kn1', 'TDR', 'jskdskldlkdl', 'joselyto VASUKAMA', '2018-01-01 00:50:33'),
(2, 2, 'eq2', 'TDR', 'tres', 'soruth bilolo', '2018-01-01 01:47:43'),
(3, 3, 'bu3', 'Electrophorese', 'ggk', 'joselyto VASUKAMA', '2018-01-01 01:54:55');

-- --------------------------------------------------------

--
-- Structure de la table `consting_pre_test_attente`
--

CREATE TABLE `consting_pre_test_attente` (
  `id_cons` int(11) NOT NULL,
  `num_fiche` varchar(100) NOT NULL,
  `id_v` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `postnom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `date_naissance` varchar(20) NOT NULL,
  `etat_civil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(4, 'hl Haut Lomami '),
(5, 'kn Kinshasa ');

-- --------------------------------------------------------

--
-- Structure de la table `enregistrement`
--

CREATE TABLE `enregistrement` (
  `id_freq` int(11) NOT NULL,
  `id_v` int(11) NOT NULL,
  `num_fiche` varchar(100) NOT NULL,
  `id_dps` int(11) NOT NULL,
  `id_zs` int(11) NOT NULL,
  `id_air_sante` int(11) NOT NULL,
  `id_agent` int(11) NOT NULL,
  `date_enr` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `enregistrement`
--

INSERT INTO `enregistrement` (`id_freq`, `id_v`, `num_fiche`, `id_dps`, `id_zs`, `id_air_sante`, `id_agent`, `date_enr`) VALUES
(1, 1, 'kn1', 5, 11, 14, 1, '2018-01-01 00:50:01'),
(2, 2, 'eq2', 2, 3, 4, 3, '2018-01-01 01:46:44'),
(3, 3, 'bu3', 1, 1, 1, 3, '2018-01-01 01:53:46');

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
-- Structure de la table `prelevement`
--

CREATE TABLE `prelevement` (
  `id_prelev` int(11) NOT NULL,
  `num_fiche` varchar(50) NOT NULL,
  `technique` varchar(30) NOT NULL,
  `num_echa` varchar(10) NOT NULL,
  `qte_prelev` varchar(10) NOT NULL,
  `preleveur` varchar(100) NOT NULL,
  `date_prelev` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `prelevement`
--

INSERT INTO `prelevement` (`id_prelev`, `num_fiche`, `technique`, `num_echa`, `qte_prelev`, `preleveur`, `date_prelev`) VALUES
(1, 'kn1', 'TDR', '3', '6', 'joselyto VASUKAMA', '2018-01-01 00:51:04'),
(2, 'kn1', 'Electrophorese', '3', '6', 'joselyto VASUKAMA', '2018-01-01 00:52:45'),
(3, 'eq2', 'TDR', '23', '23', 'soruth bilolo', '2018-01-01 01:48:30'),
(4, 'bu3', 'Electrophorese', '3', '6', 'joselyto VASUKAMA', '2018-01-01 01:55:55');

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
  `num_fiche` varchar(50) NOT NULL,
  `type_res` varchar(50) NOT NULL,
  `observation` varchar(300) NOT NULL,
  `id_agent` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `resultat`
--

INSERT INTO `resultat` (`id_res`, `num_fiche`, `type_res`, `observation`, `id_agent`, `date`) VALUES
(1, 'kn1', 'AS', 'RETET', 1, '2018-01-01 00:54:51'),
(2, 'eq2', 'SS', 'shdgj', 3, '2018-01-01 01:49:22'),
(3, 'bu3', 'AA', 'gfyj', 3, '2018-01-01 01:56:42');

-- --------------------------------------------------------

--
-- Structure de la table `statistiques`
--

CREATE TABLE `statistiques` (
  `id_stat` int(11) NOT NULL,
  `id_dps` int(11) NOT NULL,
  `id_zs` int(11) NOT NULL,
  `id_air_sante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `TDR_Electro`
--

CREATE TABLE `TDR_Electro` (
  `id_trans` int(11) NOT NULL,
  `num_fiche` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `TDR_Electro`
--

INSERT INTO `TDR_Electro` (`id_trans`, `num_fiche`, `date`) VALUES
(1, 'kn1', '2018-01-01 00:52:10');

-- --------------------------------------------------------

--
-- Structure de la table `type_users`
--

CREATE TABLE `type_users` (
  `id_type` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_users`
--

INSERT INTO `type_users` (`id_type`, `libelle`) VALUES
(1, 'admin'),
(2, 'user');

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
  `enceinte` varchar(10) NOT NULL,
  `date_naiss` varchar(50) NOT NULL,
  `etat_civil` varchar(20) NOT NULL,
  `num_avenue` varchar(20) NOT NULL,
  `avenue` varchar(50) NOT NULL,
  `quartier` varchar(100) NOT NULL,
  `comm_ville` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `volontaire`
--

INSERT INTO `volontaire` (`id_v`, `nom`, `postnom`, `prenom`, `num_tel`, `sexe`, `enceinte`, `date_naiss`, `etat_civil`, `num_avenue`, `avenue`, `quartier`, `comm_ville`, `ville`, `province`) VALUES
(1, 'NGOMA', 'KONGO', 'paty', '0820824803', 'M', ' ', '2018-01-17', 'Celibataire', '34', 'avenue', 'quartier', 'kinshasa', 'kinshasa', 'kinshasa'),
(2, 'NAMBWA', 'nana', 'tresse', '785879857694', 'F', 'oui', '1998-02-21', 'Celibataire', '786', 'nanan', 'quartier', 'commune', 'ville', 'equateur'),
(3, 'Souriante', 'Souriante', 'Souriante', '0938574975', 'F', 'non', '1996-03-08', 'Celibataire', '3', 'jaja', 'jaja', 'bukavu', 'bukavu', 'bukavu');

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
(8, 4, 'hl Bukama Zone de Santé'),
(9, 5, 'kn Bandalungwa Zone de Santé'),
(10, 5, 'kn Barumbu Zone de Santé'),
(11, 5, 'kn Binza Meteo Zone de Santé');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `access_users`
--
ALTER TABLE `access_users`
  ADD PRIMARY KEY (`id_acces`),
  ADD KEY `nom` (`id_agent`),
  ADD KEY `id_air_sante` (`id_air_sante`),
  ADD KEY `id_type` (`id_type`);

--
-- Index pour la table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id_agent`),
  ADD KEY `id_agent` (`id_agent`),
  ADD KEY `id_zs` (`id_zs`),
  ADD KEY `nom` (`nom`),
  ADD KEY `id_grade` (`id_grade`);

--
-- Index pour la table `aire_sante`
--
ALTER TABLE `aire_sante`
  ADD PRIMARY KEY (`id_air_sante`),
  ADD KEY `id_zs` (`id_zs`),
  ADD KEY `id_sante` (`id_air_sante`),
  ADD KEY `id_air_sante` (`id_air_sante`);

--
-- Index pour la table `consting_pre_test`
--
ALTER TABLE `consting_pre_test`
  ADD PRIMARY KEY (`id_pre_test`);

--
-- Index pour la table `consting_pre_test_attente`
--
ALTER TABLE `consting_pre_test_attente`
  ADD PRIMARY KEY (`id_cons`);

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
  ADD UNIQUE KEY `num_fiche` (`num_fiche`),
  ADD KEY `id_v` (`id_v`),
  ADD KEY `id_air_sante` (`id_air_sante`),
  ADD KEY `id_agent` (`id_agent`),
  ADD KEY `id_zs` (`id_zs`),
  ADD KEY `id_dps` (`id_dps`);

--
-- Index pour la table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id_grade`),
  ADD KEY `id_grade` (`id_grade`);

--
-- Index pour la table `prelevement`
--
ALTER TABLE `prelevement`
  ADD PRIMARY KEY (`id_prelev`);

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
  ADD KEY `id_agent` (`id_agent`);

--
-- Index pour la table `statistiques`
--
ALTER TABLE `statistiques`
  ADD PRIMARY KEY (`id_stat`);

--
-- Index pour la table `TDR_Electro`
--
ALTER TABLE `TDR_Electro`
  ADD PRIMARY KEY (`id_trans`);

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
  MODIFY `id_acces` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `agents`
--
ALTER TABLE `agents`
  MODIFY `id_agent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `aire_sante`
--
ALTER TABLE `aire_sante`
  MODIFY `id_air_sante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `consting_pre_test`
--
ALTER TABLE `consting_pre_test`
  MODIFY `id_pre_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `consting_pre_test_attente`
--
ALTER TABLE `consting_pre_test_attente`
  MODIFY `id_cons` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `DPS`
--
ALTER TABLE `DPS`
  MODIFY `id_dps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `enregistrement`
--
ALTER TABLE `enregistrement`
  MODIFY `id_freq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `grade`
--
ALTER TABLE `grade`
  MODIFY `id_grade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `prelevement`
--
ALTER TABLE `prelevement`
  MODIFY `id_prelev` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `remise_result`
--
ALTER TABLE `remise_result`
  MODIFY `id_remi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `resultat`
--
ALTER TABLE `resultat`
  MODIFY `id_res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `statistiques`
--
ALTER TABLE `statistiques`
  MODIFY `id_stat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `TDR_Electro`
--
ALTER TABLE `TDR_Electro`
  MODIFY `id_trans` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `type_users`
--
ALTER TABLE `type_users`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `volontaire`
--
ALTER TABLE `volontaire`
  MODIFY `id_v` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `zone_sante`
--
ALTER TABLE `zone_sante`
  MODIFY `id_zs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `access_users`
--
ALTER TABLE `access_users`
  ADD CONSTRAINT `access_users_ibfk_5` FOREIGN KEY (`id_agent`) REFERENCES `agents` (`id_agent`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `access_users_ibfk_6` FOREIGN KEY (`id_type`) REFERENCES `type_users` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `agents`
--
ALTER TABLE `agents`
  ADD CONSTRAINT `agents_ibfk_1` FOREIGN KEY (`id_zs`) REFERENCES `zone_sante` (`id_zs`) ON DELETE CASCADE ON UPDATE CASCADE,
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
  ADD CONSTRAINT `enregistrement_ibfk_4` FOREIGN KEY (`id_v`) REFERENCES `volontaire` (`id_v`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enregistrement_ibfk_5` FOREIGN KEY (`id_dps`) REFERENCES `DPS` (`id_dps`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `remise_result`
--
ALTER TABLE `remise_result`
  ADD CONSTRAINT `remise_result_ibfk_1` FOREIGN KEY (`id_agent`) REFERENCES `agents` (`id_agent`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `resultat`
--
ALTER TABLE `resultat`
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
