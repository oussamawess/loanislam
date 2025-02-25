-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 25 fév. 2025 à 01:59
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `loanislam`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` text NOT NULL,
  `profession` varchar(255) NOT NULL,
  `salaire_brut` decimal(10,2) NOT NULL,
  `statut_civil` varchar(50) NOT NULL,
  `montant_souhaite` decimal(10,2) NOT NULL,
  `duree_remboursement` int(11) NOT NULL,
  `type_maison` varchar(255) NOT NULL,
  `montant_total_du` decimal(10,2) NOT NULL,
  `date_creation` datetime DEFAULT current_timestamp(),
  `statut` varchar(50) NOT NULL,
  `have_partner` tinyint(1) DEFAULT 0,
  `fichier_paie` longblob DEFAULT NULL,
  `attestation_salaire` longblob DEFAULT NULL,
  `extrait_bancaire` longblob DEFAULT NULL,
  `contrat` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `age`, `telephone`, `email`, `adress`, `profession`, `salaire_brut`, `statut_civil`, `montant_souhaite`, `duree_remboursement`, `type_maison`, `montant_total_du`, `date_creation`, `statut`, `have_partner`, `fichier_paie`, `attestation_salaire`, `extrait_bancaire`, `contrat`) VALUES
(9, 'Enim quas non animi', 'Eiusmod in voluptate', 70, '+1 (409) 335-3665', 'subebac@mailinator.com', 'Quis ipsum laudanti', 'Laudantium obcaecat', '17.00', 'Maxime magnam quis d', '85000.00', 12, '0', '88610.34', '2025-02-22 16:50:37', '0', 0, '', '', '', ''),
(10, 'Ut aut corrupti dol', 'Ut consequatur verit', 45, '+1 (722) 745-3003', 'megodahe@mailinator.com', 'Unde similique asper', 'Libero illum dolor', '37.00', 'Eu magni qui non et', '85000.00', 12, 'Ancienne', '88610.34', '2025-02-22 17:01:59', '0', 0, '', '', '', ''),
(11, 'Ea ad nostrum dolore', 'Et non eos optio p', 15, '+1 (375) 271-2817', 'zibosunyku@mailinator.com', 'Hic quidem culpa per', 'Corrupti fugit err', '82.00', 'Optio numquam non q', '85000.00', 12, 'Ancienne', '88610.34', '2025-02-22 17:03:29', 'Nouvelles', 0, '', '', '', ''),
(12, 'Cupiditate labore au', 'Ullam pariatur Omni', 59, '+1 (353) 966-2419', 'myhe@mailinator.com', 'Magnam id dolorum sa', 'Nesciunt voluptatem', '23.00', 'Omnis occaecat ad sa', '85000.00', 24, 'Ancienne', '92031.25', '2025-02-22 17:05:10', 'Nouvelles', 1, '', '', '', ''),
(13, 'Aut ab est quaerat q', 'Commodo ut sapiente', 17, '+1 (801) 804-6717', 'nylylytuq@mailinator.com', 'Consequatur Explica', 'Est commodi quaerat', '96.00', 'Cupidatat quam vero', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-22 17:20:26', 'Nouvelles', 1, '', '', '', ''),
(14, 'oussama', 'ammar', 98, '+1 (445) 587-1382', 'pimutetegu@mailinator.com', 'Ipsum cumque quo inc', 'Quas temporibus repe', '5.00', 'Aut et et rem odio c', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 01:48:50', 'Nouvelles', 0, '', '', '', ''),
(15, 'ammar', 'oussama', 30, '+1 (585) 177-8787', 'dafa@mailinator.com', 'Velit laborum Quis', 'Quo architecto atque', '15.00', 'Non eum rerum amet', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 01:50:48', 'Nouvelles', 1, '', '', '', ''),
(16, 'nom1', 'Blanditiis enim expl', 27, '+1 (303) 211-9536', 'harok@mailinator.com', 'Sit incididunt ex u', 'Et consequuntur reru', '34.00', 'Atque consectetur re', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 01:55:58', 'Nouvelles', 0, '', '', '', ''),
(18, 'nom2', 'Totam quibusdam non', 100, '+1 (366) 902-9495', 'filywo@mailinator.com', 'Officia voluptatem e', 'Sequi placeat conse', '41.00', 'Excepturi delectus', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 01:58:29', 'Nouvelles', 1, '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `has_been_read` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` text NOT NULL,
  `profession` varchar(255) NOT NULL,
  `salaire_brut` decimal(10,2) NOT NULL,
  `statut_civil` varchar(50) NOT NULL,
  `montant_souhaite` decimal(10,2) NOT NULL,
  `duree_remboursement` int(11) NOT NULL,
  `type_maison` varchar(255) NOT NULL,
  `montant_total_du` decimal(10,2) NOT NULL,
  `date_creation` datetime DEFAULT current_timestamp(),
  `statut` varchar(50) NOT NULL,
  `fichier_paie` longblob DEFAULT NULL,
  `attestation_salaire` longblob DEFAULT NULL,
  `extrait_bancaire` longblob DEFAULT NULL,
  `contrat` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `partner`
--

INSERT INTO `partner` (`id`, `id_client`, `nom`, `prenom`, `age`, `telephone`, `email`, `adress`, `profession`, `salaire_brut`, `statut_civil`, `montant_souhaite`, `duree_remboursement`, `type_maison`, `montant_total_du`, `date_creation`, `statut`, `fichier_paie`, `attestation_salaire`, `extrait_bancaire`, `contrat`) VALUES
(1, 13, 'Aliqua Officiis non', 'Sint sit occaecat cu', 77, '+1 (218) 704-7159', 'muzo@mailinator.com', 'Pariatur Fuga Fugi', 'Illum maxime quia a', '27.00', 'Lorem totam mollit a', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-22 17:20:26', 'Nouvelles', '', '', '', ''),
(2, 15, 'wessP', 'WeessP', 94, '+1 (823) 904-7472', 'bahunejoni@mailinator.com', 'Fugit quas enim qui', 'Omnis quibusdam enim', '6.00', 'Eveniet blanditiis', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 01:50:48', 'Nouvelles', '', '', '', ''),
(3, 18, 'nom2P', 'Incidunt eius sunt', 46, '+1 (553) 709-7999', 'mapuneri@mailinator.com', 'Aut earum sapiente e', 'Sequi dolor ab tempo', '65.00', 'Pariatur Officiis a', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 01:58:29', 'Nouvelles', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','client','partner') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `id_client`, `nom`, `email`, `password`, `role`) VALUES
(3, 9, 'wess', 'wess1@gmail.com', '$2y$10$dvABSzpmiwCy1zEN7xz9cua5IPjb.mw8ls/kLZXqGIcKc3IZFLGn.', 'client'),
(4, 10, 'wess', 'wess@gmail.com', '$2y$10$Z8sg1nRwhKK7G9W3Vhib0eZPX1AFbly5gmB8o5s/CeGx5NKPb/u9e', 'client'),
(5, 11, 'wedd', 'wedd@gmail.com', '$2y$10$68ZiSiScJ3uMCUcicJ85T.lqq3EzW71m7ZQA0DSUh5q7gR6Y1iGGO', 'client'),
(6, 13, 'deff', 'deff@gmail.com', '$2y$10$7YCilK.X.Mdkfv16hElcyuBPmP0sy.mwe8mZBRDNyG8fOGK2XtfAu', 'client'),
(7, 14, 'oussama', 'oussama@gmail.com', '$2y$10$gvcBZxf9sjuQbwR1nnmEpuYcSkGPsQD8RBWjsvcGB3zjSCbgtUwHu', 'client'),
(8, 15, 'oussama', 'oussama11@gmail.com', '$2y$10$dp17iqQKMtVTsFFBWiwQ1.I./XtjRChvThZORPOYM/Bx15LnCJdAq', 'client'),
(9, 16, 'nom1', 'nom1@gmail.com', '$2y$10$w0boQydNcwcIgEyRGbnPm.9czpvvHtnSHlLkmf3mVzE/eGI5pATPW', 'client'),
(10, 18, 'nom2', 'nom2@gmail.com', '$2y$10$/Lpa5JaxycSf.0uwSeyO0eAtCnNCe2mIv6EAbBwyC3sCKeBQqvA42', 'client');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_client` (`id_client`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `partner`
--
ALTER TABLE `partner`
  ADD CONSTRAINT `partner_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
