-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 26 fév. 2025 à 20:36
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
  `fichier_paie` varchar(255) DEFAULT NULL,
  `attestation_salaire` varchar(255) DEFAULT NULL,
  `extrait_bancaire` varchar(255) DEFAULT NULL,
  `contrat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `age`, `telephone`, `email`, `adress`, `profession`, `salaire_brut`, `statut_civil`, `montant_souhaite`, `duree_remboursement`, `type_maison`, `montant_total_du`, `date_creation`, `statut`, `have_partner`, `fichier_paie`, `attestation_salaire`, `extrait_bancaire`, `contrat`) VALUES
(9, 'Enim quas ', 'Eiusmod in voluptate', 70, '+1 (409) 335-3665', 'subebac@mailinator.com', 'Quis ipsum laudanti', 'Laudantium obcaecat', '17.00', 'Maxime magnam quis d', '85000.00', 12, '0', '88610.34', '2025-02-22 16:50:37', 'En attente', 0, '', '', '', ''),
(10, 'Ut aut ', 'Ut consequatur verit', 45, '+1 (722) 745-3003', 'megodahe@mailinator.com', 'Unde similique asper', 'Libero illum dolor', '37.00', 'Eu magni qui non et', '85000.00', 12, 'Ancienne', '88610.34', '2025-02-22 17:01:59', 'En cours', 0, '', '', '', ''),
(11, 'nostrum dolore', 'Et non eos optio p', 15, '+1 (375) 271-2817', 'zibosunyku@mailinator.com', 'Hic quidem culpa per', 'Corrupti fugit err', '82.00', 'Optio numquam non q', '85000.00', 12, 'Ancienne', '88610.34', '2025-02-22 17:03:29', 'Signé', 0, '', '', '', ''),
(12, 'labore au', 'Ullam pariatur Omni', 59, '+1 (353) 966-2419', 'myhe@mailinator.com', 'Magnam id dolorum sa', 'Nesciunt voluptatem', '23.00', 'Omnis occaecat ad sa', '85000.00', 24, 'Ancienne', '92031.25', '2025-02-22 17:05:10', 'Annulé', 1, '', '', '', ''),
(13, 'est quaerat q', 'Commodo ut sapiente', 17, '+1 (801) 804-6717', 'nylylytuq@mailinator.com', 'Consequatur Explica', 'Est commodi quaerat', '96.00', 'Cupidatat quam vero', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-22 17:20:26', 'Nouvelles', 1, '', '', '', ''),
(14, 'oussama', 'ammar', 98, '+1 (445) 587-1382', 'pimutetegu@mailinator.com', 'Ipsum cumque quo inc', 'Quas temporibus repe', '5.00', 'Aut et et rem odio c', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 01:48:50', 'En attente signature contrat', 0, '', '', '', ''),
(15, 'ammar', 'oussama', 30, '+1 (585) 177-8787', 'dafa@mailinator.com', 'Velit laborum Quis', 'Quo architecto atque', '15.00', 'Non eum rerum amet', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 01:50:48', 'En attente', 1, '', '', '', ''),
(16, 'nom1', 'Blanditiis enim expl', 27, '+1 (303) 211-9536', 'harok@mailinator.com', 'Sit incididunt ex u', 'Et consequuntur reru', '34.00', 'Atque consectetur re', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 01:55:58', 'Nouvelles', 0, '', '', '', ''),
(18, 'nom2', 'Totam quibusdam non', 100, '+1 (366) 902-9495', 'filywo@mailinator.com', 'Officia voluptatem e', 'Sequi placeat conse', '41.00', 'Excepturi delectus', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 01:58:29', 'Nouvelles', 1, '', '', '', ''),
(19, 'file1', 'Inventore incididunt', 45, '+1 (967) 246-4894', 'rumy@mailinator.com', 'Eos earum iusto cupi', 'Veniam ullamco ut e', '26.00', 'Minim explicabo Sus', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 02:12:12', 'Nouvelles', 1, 'files/file_67bd18ec1b6434.10111500.pdf', 'files/file_67bd18ec1bc245.82679653.pdf', 'files/file_67bd18ec1beb18.96472367.pdf', 'files/file_67bd18ec1c1191.37831046.pdf'),
(20, 'cupidatat', 'Dolor sint unde inci', 84, '+1 (731) 706-7169', 'wury@mailinator.com', 'Accusamus dolores es', 'Sed nemo voluptatem', '41.00', 'Ut repudiandae magni', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 02:19:07', 'Nouvelles', 0, NULL, NULL, NULL, NULL),
(22, 'Sequi blandit', 'Commodo aperiam pers', 85, '+1 (951) 193-9161', 'fufibasobe@mailinator.com', 'Placeat qui nihil a', 'Occaecat qui rerum o', '98.00', 'Sunt sint aliquip u', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 02:20:37', 'Nouvelles', 0, 'files/file_67bd1ae54865e6.68147745.pdf', 'files/file_67bd1ae5488ca1.46884316.pdf', 'files/file_67bd1ae548b1d4.94085631.pdf', 'files/file_67bd1ae548e227.94195540.pdf'),
(23, 'quia en', 'Aperiam omnis sit c', 84, '+1 (758) 415-2946', 'roweqosuse@mailinator.com', 'Nobis fugiat amet a', 'Velit aliquam lorem', '93.00', 'Laboris soluta exped', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 11:39:32', 'Nouvelles', 0, NULL, NULL, NULL, NULL),
(26, 'fb', 'Inventore corporis e', 77, '+1 (685) 361-8959', 'wexyfive@mailinator.com', 'Et quasi quidem rati', 'Aut aut dicta quam a', '82.00', 'Eiusmod dolor rerum', '125000.00', 12, 'Neuve', '130309.32', '2025-02-25 12:42:01', 'Nouvelles', 0, NULL, NULL, NULL, NULL),
(27, 'Eligendi i', 'Quibusdam dolorem in', 37, '+1 (613) 174-6538', 'gywu@mailinator.com', 'Id esse sed beatae', 'Accusamus cupiditate', '20.00', 'Qui cupidatat sapien', '125000.00', 12, 'Neuve', '130309.32', '2025-02-25 12:43:33', 'Nouvelles', 0, NULL, NULL, NULL, NULL),
(28, 'sit aperiam', 'Cupiditate aut aliqu', 67, '+1 (955) 288-7325', 'retoze@mailinator.com', 'Praesentium veniam', 'Consequuntur ex eum', '3.00', 'Consequat Vel tempo', '125000.00', 12, 'Neuve', '130309.32', '2025-02-25 12:44:14', 'Nouvelles', 0, NULL, NULL, NULL, NULL),
(29, 'Qui possimu', 'Quia tenetur quia la', 5, '+1 (361) 744-6847', 'micahic@mailinator.com', 'Soluta numquam odio', 'Non ipsum facere do', '21.00', 'Illum culpa est ei', '125000.00', 12, 'Neuve', '130309.32', '2025-02-25 12:45:45', 'Nouvelles', 1, NULL, NULL, NULL, NULL);

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
  `fichier_paie` varchar(255) DEFAULT NULL,
  `attestation_salaire` varchar(255) DEFAULT NULL,
  `extrait_bancaire` varchar(255) DEFAULT NULL,
  `contrat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `partner`
--

INSERT INTO `partner` (`id`, `id_client`, `nom`, `prenom`, `age`, `telephone`, `email`, `adress`, `profession`, `salaire_brut`, `statut_civil`, `montant_souhaite`, `duree_remboursement`, `type_maison`, `montant_total_du`, `date_creation`, `statut`, `fichier_paie`, `attestation_salaire`, `extrait_bancaire`, `contrat`) VALUES
(1, 13, 'Aliqua Officiis non', 'Sint sit occaecat cu', 77, '+1 (218) 704-7159', 'muzo@mailinator.com', 'Pariatur Fuga Fugi', 'Illum maxime quia a', '27.00', 'Lorem totam mollit a', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-22 17:20:26', 'Nouvelles', '', '', '', ''),
(2, 15, 'wessP', 'WeessP', 94, '+1 (823) 904-7472', 'bahunejoni@mailinator.com', 'Fugit quas enim qui', 'Omnis quibusdam enim', '6.00', 'Eveniet blanditiis', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 01:50:48', 'Nouvelles', '', '', '', ''),
(3, 18, 'nom2P', 'Incidunt eius sunt', 46, '+1 (553) 709-7999', 'mapuneri@mailinator.com', 'Aut earum sapiente e', 'Sequi dolor ab tempo', '65.00', 'Pariatur Officiis a', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 01:58:29', 'Nouvelles', '', '', '', ''),
(4, 19, 'file 2', 'Nostrud id quibusda', 7, '+1 (868) 835-5563', 'kuzelozyci@mailinator.com', 'Sit dolore deserunt', 'Dolore dolorum dolor', '97.00', 'Autem aut qui est c', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 02:12:12', 'Nouvelles', 'files/file_67bd18ec1f9387.08954574.pdf', 'files/file_67bd18ec1fd2e4.08980689.pdf', 'files/file_67bd18ec1ff910.59865080.pdf', 'files/file_67bd18ec201da2.55450901.pdf'),
(5, 29, 'Laboris vel suscipit', 'Explicabo Et aut ar', 37, '+1 (913) 107-6678', 'hatyqasef@mailinator.com', 'Est molestiae animi', 'Voluptatem neque est', '94.00', 'Eius aut et qui quid', '125000.00', 12, 'Neuve', '130309.32', '2025-02-25 12:45:45', 'Nouvelles', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_client` int(11) DEFAULT NULL,
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
(10, 18, 'nom2', 'nom2@gmail.com', '$2y$10$/Lpa5JaxycSf.0uwSeyO0eAtCnNCe2mIv6EAbBwyC3sCKeBQqvA42', 'client'),
(11, 19, 'file 12', 'file12@gmail.com', '$2y$10$sJLFwSXXx/HGiwRi1gjl8eb8WMhcBytBpVd89QjxM2l14jjvgitGu', 'client'),
(16, 26, 'wess', 'wess1234@gmail.com', '$2y$10$1hfFRAVnixcXGCQ/tG9TTuetY2N9.dUJE69d6k0ZLvBDsjIwbJff.', 'client'),
(17, 27, 'wess', 'asssa@gmail.com', '$2y$10$nycemjU/9iBO1hvKebBipu5XA6IkPhC8ByvJnzbuyg4uVJf5TBvTO', 'client'),
(18, 28, 'wess', 'wessd@gmail.com', '$2y$10$D21Cqfrq6EM9X9tRlk9eS.sJgazqX3mUaIstD.HhQFABb.uighWuK', 'client'),
(19, 29, 'wess', 'wessa@gmail.com', '$2y$10$vJIWv8JadpF6nW2tYMqhGOM0UnqKXoutAVfzMoOhpM7nxMgkItW5K', 'client'),
(21, NULL, 'wees', 'wescss@gmail.com', '$2y$10$wfz67MHKkyghZn6YjS/50.unpeN/W11eSnZDYhFkLm68fQXra7lQq', 'admin');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
