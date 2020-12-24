-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 18 déc. 2020 à 08:55
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `formation_inpp_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `brevets`
--

CREATE TABLE `brevets` (
  `brev_id` int(11) NOT NULL,
  `numRef` varchar(75) DEFAULT NULL,
  `dateBrevet` date DEFAULT NULL,
  `pourcentage` varchar(75) DEFAULT NULL,
  `mention` varchar(75) DEFAULT NULL,
  `coteObtenue` int(11) DEFAULT NULL,
  `specialite` varchar(75) DEFAULT NULL,
  `candidat_sid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `candidats`
--

CREATE TABLE `candidats` (
  `cand_id` int(11) NOT NULL,
  `noms` varchar(75) DEFAULT NULL,
  `sexe` varchar(75) DEFAULT NULL,
  `etatCivil` varchar(75) DEFAULT NULL,
  `adresse` varchar(75) DEFAULT NULL,
  `telephone` varchar(75) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `lieuNaissance` varchar(75) DEFAULT NULL,
  `profession` varchar(75) DEFAULT NULL,
  `niveauEtude` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `domaines`
--

CREATE TABLE `domaines` (
  `dom_id` int(11) NOT NULL,
  `dateAjout` datetime DEFAULT NULL,
  `intituleDom` varchar(75) DEFAULT NULL,
  `observation` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `factures`
--

CREATE TABLE `factures` (
  `fac_id` int(11) NOT NULL,
  `numer_facture` int(11) NOT NULL,
  `date_facture` datetime NOT NULL,
  `net_a_payer` float NOT NULL,
  `client_sid` int(11) NOT NULL,
  `etat_facture` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `formateurs`
--

CREATE TABLE `formateurs` (
  `ens_id` int(11) NOT NULL,
  `matricule` varchar(75) DEFAULT NULL,
  `noms` varchar(75) DEFAULT NULL,
  `specialite` varchar(75) DEFAULT NULL,
  `telephone` varchar(75) DEFAULT NULL,
  `grade` varchar(75) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `forma_id` int(11) NOT NULL,
  `numRef` varchar(75) DEFAULT NULL,
  `intituleSession` varchar(75) DEFAULT NULL,
  `statutSession` varchar(75) DEFAULT NULL,
  `datedebut` date DEFAULT NULL,
  `DateFin` date DEFAULT NULL,
  `Duree` int(11) DEFAULT NULL,
  `Prerequis` text,
  `Objectifs` text,
  `Outils` text,
  `Contenu` text,
  `Prix` double DEFAULT NULL,
  `domaine_sid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions`
--

CREATE TABLE `inscriptions` (
  `ins_id` int(11) NOT NULL,
  `candidat_sid` int(11) DEFAULT NULL,
  `formation_sid` int(11) DEFAULT NULL,
  `dateInscription` datetime DEFAULT NULL,
  `statutInscription` varchar(75) DEFAULT NULL,
  `dateValidation` date DEFAULT NULL,
  `observation` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `interventions`
--

CREATE TABLE `interventions` (
  `inter_id` int(11) NOT NULL,
  `dateInterv` date DEFAULT NULL,
  `statutInter` varchar(75) DEFAULT NULL,
  `matiereVue` text,
  `effectifCandidats` int(11) DEFAULT NULL,
  `observation` text,
  `formateur_sid` int(11) DEFAULT NULL,
  `formation_sid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tb_im_users`
--

CREATE TABLE `tb_im_users` (
  `id_asset` int(11) NOT NULL,
  `asset_fullname` varchar(75) NOT NULL,
  `asset_username` varchar(50) DEFAULT NULL,
  `asset_password` varchar(60) DEFAULT NULL,
  `asset_email` varchar(50) DEFAULT NULL,
  `asset_sexe` varchar(10) DEFAULT NULL,
  `asset_phone` varchar(50) DEFAULT NULL,
  `asset_type` varchar(20) DEFAULT 'logisticien',
  `date_ajout` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_connected` timestamp NULL DEFAULT NULL,
  `account_activated` varchar(25) DEFAULT 'active',
  `asset_avatar` varchar(75) DEFAULT NULL,
  `date_update` datetime DEFAULT NULL,
  `asset_fonction` varchar(75) NOT NULL,
  `asset_matricule` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tb_im_users`
--

INSERT INTO `tb_im_users` (`id_asset`, `asset_fullname`, `asset_username`, `asset_password`, `asset_email`, `asset_sexe`, `asset_phone`, `asset_type`, `date_ajout`, `date_connected`, `account_activated`, `asset_avatar`, `date_update`, `asset_fonction`, `asset_matricule`) VALUES
(1, 'Elie Mwez', 'eliemwez', '$2y$12$lgSZ78FDfw7MUBBIrMgsfOB2BEBDapoD4jIJEtr.arj6dSYRoBDZG', 'eliemwez.rubuz@gmail.com', 'Masculin', '+243858533285', 'user', '2020-09-11 08:08:58', '2020-09-21 08:02:11', 'active', 'global/img/avatars/avatar-eliemwez2.jpg', '2020-09-19 14:07:30', 'logisticien', '11220'),
(2, 'Administrateur', 'admin', '$2y$12$bGYGbrhUKpkUVun35wVyq.E3xoHKEsztWso0Hw6xlP4pRPrhNqxpu', 'admin@gmail.com', 'Homme', '+243903774951', 'admin', '2020-09-21 08:01:52', '2020-12-17 18:59:43', 'active', 'global/img/avatars/precedent-icone-5823-128.png', '2020-11-15 21:57:03', 'admin', '2020010'),
(4, 'Mohamed Rubuz', 'mohamed', '$2y$12$bpht21c/qLCMUM4K7d6sS.IfVaTOZJjljlQYXEa.cLfnbz7rbA/qu', 'mohamed@gmail.com', 'masculin', '+243975556941', 'utilisateur', '2020-11-16 20:13:13', '2020-11-16 22:53:40', 'active', NULL, NULL, 'client', 'CWC83');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `brevets`
--
ALTER TABLE `brevets`
  ADD PRIMARY KEY (`brev_id`),
  ADD UNIQUE KEY `numRef` (`numRef`);

--
-- Index pour la table `candidats`
--
ALTER TABLE `candidats`
  ADD PRIMARY KEY (`cand_id`);

--
-- Index pour la table `domaines`
--
ALTER TABLE `domaines`
  ADD PRIMARY KEY (`dom_id`);

--
-- Index pour la table `factures`
--
ALTER TABLE `factures`
  ADD PRIMARY KEY (`fac_id`);

--
-- Index pour la table `formateurs`
--
ALTER TABLE `formateurs`
  ADD PRIMARY KEY (`ens_id`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`forma_id`),
  ADD UNIQUE KEY `numRef` (`numRef`);

--
-- Index pour la table `inscriptions`
--
ALTER TABLE `inscriptions`
  ADD PRIMARY KEY (`ins_id`);

--
-- Index pour la table `interventions`
--
ALTER TABLE `interventions`
  ADD PRIMARY KEY (`inter_id`);

--
-- Index pour la table `tb_im_users`
--
ALTER TABLE `tb_im_users`
  ADD PRIMARY KEY (`id_asset`),
  ADD UNIQUE KEY `asset_username` (`asset_username`,`asset_email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `brevets`
--
ALTER TABLE `brevets`
  MODIFY `brev_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `candidats`
--
ALTER TABLE `candidats`
  MODIFY `cand_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `domaines`
--
ALTER TABLE `domaines`
  MODIFY `dom_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `factures`
--
ALTER TABLE `factures`
  MODIFY `fac_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formateurs`
--
ALTER TABLE `formateurs`
  MODIFY `ens_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `forma_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `inscriptions`
--
ALTER TABLE `inscriptions`
  MODIFY `ins_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `interventions`
--
ALTER TABLE `interventions`
  MODIFY `inter_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tb_im_users`
--
ALTER TABLE `tb_im_users`
  MODIFY `id_asset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
