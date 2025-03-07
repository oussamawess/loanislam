-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 07 mars 2025 à 16:48
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
(9, 'Enim quas ', 'Eiusmod in voluptate', 70, '+1 (409) 335-3665', 'subebac@mailinator.com', 'Quis ipsum laudanti', 'Laudantium obcaecat', '17.00', 'Maxime magnam quis d', '85000.00', 12, '0', '88610.34', '2025-02-22 16:50:37', 'Annulé', 0, '', '', '', ''),
(10, 'Ut aut ', 'Ut consequatur verit', 45, '+1 (722) 745-3003', 'megodahe@mailinator.com', 'Unde similique asper', 'Libero illum dolor', '37.00', 'Eu magni qui non et', '85000.00', 12, 'Ancienne', '88610.34', '2025-02-22 17:01:59', 'Signé', 0, '', '', '', ''),
(11, 'nostrum dolore', 'Et non eos optio p', 15, '+1 (375) 271-2817', 'zibosunyku@mailinator.com', 'Hic quidem culpa per', 'Corrupti fugit err', '82.00', 'Optio numquam non q', '85000.00', 12, 'Ancienne', '88610.34', '2025-02-22 17:03:29', 'Signé', 0, '', '', '', ''),
(12, 'labore au', 'Ullam pariatur Omni', 59, '+1 (353) 966-2419', 'myhe@mailinator.com', 'Magnam id dolorum sa', 'Nesciunt voluptatem', '23.00', 'Omnis occaecat ad sa', '85000.00', 24, 'Ancienne', '92031.25', '2025-02-22 17:05:10', 'Annulé', 1, '', '', '', ''),
(13, 'est quaerat q', 'Commodo ut sapiente', 17, '+1 (801) 804-6717', 'nylylytuq@mailinator.com', 'Consequatur Explica', 'Est commodi quaerat', '96.00', 'Cupidatat quam vero', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-22 17:20:26', 'En cours', 1, '', '', '', ''),
(14, 'oussama', 'ammar', 98, '+1 (445) 587-1382', 'pimutetegu@mailinator.com', 'Ipsum cumque quo inc', 'Quas temporibus repe', '5.00', 'Aut et et rem odio c', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 01:48:50', 'En cours', 0, '', '', '', ''),
(15, 'ammar', 'oussama', 30, '+1 (585) 177-8787', 'dafa@mailinator.com', 'Velit laborum Quis', 'Quo architecto atque', '15.00', 'Non eum rerum amet', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 01:50:48', 'En cours', 1, '', '', '', ''),
(16, 'nom1', 'Blanditiis enim expl', 27, '+1 (303) 211-9536', 'harok@mailinator.com', 'Sit incididunt ex u', 'Et consequuntur reru', '34.00', 'Atque consectetur re', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 01:55:58', 'En cours', 0, '', '', '', ''),
(18, 'nom2', 'Totam quibusdam non', 100, '+1 (366) 902-9495', 'filywo@mailinator.com', 'Officia voluptatem e', 'Sequi placeat conse', '41.00', 'Excepturi delectus', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 01:58:29', 'En cours', 1, '', '', '', ''),
(19, 'file1', 'Inventore incididunt', 45, '+1 (967) 246-4894', 'rumy@mailinator.com', 'Eos earum iusto cupi', 'Veniam ullamco ut e', '26.00', 'Minim explicabo Sus', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 02:12:12', 'Signé', 1, 'files/file_67bd18ec1b6434.10111500.pdf', 'files/file_67bd18ec1bc245.82679653.pdf', 'files/file_67bd18ec1beb18.96472367.pdf', 'files/file_67bd18ec1c1191.37831046.pdf'),
(20, 'cupidatat', 'Dolor sint unde inci', 84, '+1 (731) 706-7169', 'wury@mailinator.com', 'Accusamus dolores es', 'Sed nemo voluptatem', '41.00', 'Ut repudiandae magni', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 02:19:07', 'En cours', 0, NULL, NULL, NULL, NULL),
(22, 'Sequi blandit', 'Commodo aperiam pers', 85, '+1 (951) 193-9161', 'fufibasobe@mailinator.com', 'Placeat qui nihil a', 'Occaecat qui rerum o', '98.00', 'Sunt sint aliquip u', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 02:20:37', 'Signé', 0, 'files/file_67bd1ae54865e6.68147745.pdf', 'files/file_67bd1ae5488ca1.46884316.pdf', 'files/file_67bd1ae548b1d4.94085631.pdf', 'files/file_67bd1ae548e227.94195540.pdf'),
(23, 'quia en', 'Aperiam omnis sit c', 84, '+1 (758) 415-2946', 'roweqosuse@mailinator.com', 'Nobis fugiat amet a', 'Velit aliquam lorem', '93.00', 'Laboris soluta exped', '100000.00', 36, 'Ancienne', '112396.19', '2025-02-25 11:39:32', 'En attente', 0, NULL, NULL, NULL, NULL),
(26, 'fb', 'Inventore corporis e', 77, '+1 (685) 361-8959', 'wexyfive@mailinator.com', 'Et quasi quidem rati', 'Aut aut dicta quam a', '82.00', 'Eiusmod dolor rerum', '125000.00', 12, 'Neuve', '130309.32', '2025-02-25 12:42:01', 'En attente', 0, NULL, NULL, NULL, NULL),
(27, 'Eligendi i', 'Quibusdam dolorem in', 37, '+1 (613) 174-6538', 'gywu@mailinator.com', 'Id esse sed beatae', 'Accusamus cupiditate', '20.00', 'Qui cupidatat sapien', '125000.00', 12, 'Neuve', '130309.32', '2025-02-25 12:43:33', 'Nouvelles', 0, NULL, NULL, NULL, NULL),
(28, 'sit aperiam', 'Cupiditate aut aliqu', 67, '+1 (955) 288-7325', 'retoze@mailinator.com', 'Praesentium veniam', 'Consequuntur ex eum', '3.00', 'Consequat Vel tempo', '125000.00', 12, 'Neuve', '130309.32', '2025-02-25 12:44:14', 'En attente signature contrat', 0, NULL, NULL, NULL, NULL),
(29, 'Qui possimu', 'Quia tenetur quia la', 5, '+1 (361) 744-6847', 'micahic@mailinator.com', 'Soluta numquam odio', 'Non ipsum facere do', '21.00', 'Illum culpa est ei', '125000.00', 12, 'Neuve', '130309.32', '2025-02-25 12:45:45', 'Annulé', 1, NULL, NULL, NULL, NULL),
(30, 'Laborum Exercitatio', 'Qui commodo cupidita', 65, '+1 (429) 217-3804', 'gacav@mailinator.com', 'Nam lorem qui ullamc', 'Tempor enim sit in a', '97.00', 'Aliquip magna cupida', '150000.00', 12, 'Neuve', '156371.18', '2025-02-27 13:04:45', 'En attente signature contrat', 1, NULL, NULL, NULL, NULL),
(31, 'Aut ut velit aperiam', 'Quia doloribus delen', 33, '+1 (778) 101-7124', 'kazyso@mailinator.com', 'Sequi facilis qui fa', 'In dolore aute saepe', '73.00', 'Eu nisi deserunt tot', '150000.00', 12, 'Neuve', '156371.18', '2025-02-27 16:55:39', 'Nouvelles', 1, NULL, NULL, NULL, NULL),
(32, 'Nostrud quae qui est', 'Voluptatibus est par', 19, '+1 (155) 472-1036', 'sixij@mailinator.com', 'Quae perspiciatis d', 'Ratione neque corpor', '90.00', 'Ea distinctio Volup', '150000.00', 12, 'Neuve', '156371.18', '2025-02-27 16:59:22', 'En attente', 0, NULL, NULL, NULL, NULL),
(33, 'Et placeat qui sit', 'Commodi est dolor es', 64, '+1 (804) 615-4809', 'liwufe@mailinator.com', 'Alias nesciunt face', 'Sint similique nihil', '97.00', 'Voluptate tempore i', '150000.00', 12, 'Neuve', '156371.18', '2025-02-27 17:08:20', 'Nouvelles', 0, NULL, NULL, NULL, NULL),
(34, 'Et voluptate earum s', 'Rerum ab explicabo', 96, '+1 (469) 466-9238', 'qijudu@mailinator.com', 'Qui consequatur dol', 'Vero occaecat dolor', '34.00', 'Natus sunt qui in no', '150000.00', 12, 'Neuve', '156371.18', '2025-02-27 17:12:09', 'Signé', 0, NULL, NULL, NULL, NULL),
(35, 'Dolore blanditiis ni', 'Non fugiat non eveni', 82, '+1 (187) 617-9879', 'zyjany@mailinator.com', 'Quae dicta voluptatu', 'Non est consectetur', '5.00', 'Eos sint non laboris', '150000.00', 12, 'Neuve', '156371.18', '2025-02-27 17:18:55', 'Nouvelles', 0, NULL, NULL, NULL, NULL),
(36, 'Dolor velit amet ad', 'Optio vel eiusmod d', 90, '+1 (645) 107-5649', 'wedek@mailinator.com', 'Animi nisi corrupti', 'Ut adipisicing verit', '35.00', 'Non in officiis aut', '150000.00', 12, 'Neuve', '156371.18', '2025-02-27 17:21:59', 'Nouvelles', 0, NULL, NULL, NULL, NULL),
(37, 'Natus proident in c', 'Et autem cum enim vo', 30, '+1 (335) 173-4242', 'rovof@mailinator.com', 'Odio reiciendis dolo', 'Sed beatae quis ex c', '94.00', 'In eligendi est ten', '150000.00', 12, 'Neuve', '156371.18', '2025-02-27 17:24:18', 'Nouvelles', 0, NULL, NULL, NULL, NULL),
(38, 'Necessitatibus sint', 'Adipisci eaque dicta', 49, '+1 (458) 335-6545', 'sylojoty@mailinator.com', 'Ut duis autem nostru', 'Do asperiores possim', '98.00', 'Rerum aliquid est ex', '150000.00', 12, 'Neuve', '156371.18', '2025-03-01 00:10:54', 'Nouvelles', 0, NULL, NULL, NULL, NULL),
(39, 'Ut dolore illo odit', 'Exercitationem quam', 83, '+1 (844) 816-5502', 'zikomaqa@mailinator.com', 'Repudiandae quisquam', 'Accusamus nisi expli', '25.00', 'Incididunt aliquip c', '150000.00', 12, 'Neuve', '156371.18', '2025-03-01 00:24:55', 'Nouvelles', 0, NULL, NULL, NULL, NULL),
(40, 'Eaque eius duis odio', 'Expedita ullamco sed', 26, '+1 (534) 183-7302', 'jelok@mailinator.com', 'Quam reprehenderit', 'Ut autem temporibus', '42.00', 'Hic elit hic incidu', '150000.00', 12, 'Neuve', '156371.18', '2025-03-01 00:26:23', 'Nouvelles', 0, NULL, NULL, NULL, NULL),
(41, 'Cum temporibus omnis', 'Totam quaerat in ips', 29, '+1 (138) 621-7786', 'bakivigise@mailinator.com', 'Et amet ea lorem qu', 'Ullam voluptas aliqu', '31.00', 'Pariatur Neque dele', '150000.00', 12, 'Neuve', '156371.18', '2025-03-01 00:35:10', 'Nouvelles', 0, 'files/file_67c2482e76dc18.81864463.pdf', 'files/file_67c2482e77a8e7.80540217.pdf', 'files/file_67c2482e77dc44.71319732.pdf', 'files/file_67c2482e780b82.32070791.pdf'),
(42, 'Repellendus Dolor o', 'Quo id dolores omni', 29, '+1 (609) 667-2517', 'xuwuzaruha@mailinator.com', 'Consequatur Autem a', 'Accusamus est vel vo', '23.00', 'Placeat velit labor', '150000.00', 12, 'Neuve', '156371.18', '2025-03-01 00:52:42', 'Nouvelles', 1, 'files/file_67c24c4a9e6996.26822755.pdf', 'files/file_67c24c4a9e9562.37391839.pdf', 'files/file_67c24c4a9eb762.96879533.pdf', 'files/file_67c24c4a9ed5b8.19525091.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `fees`
--

CREATE TABLE `fees` (
  `id` int(11) NOT NULL,
  `fees` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `fees`
--

INSERT INTO `fees` (`id`, `fees`) VALUES
(1, 500);

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
(5, 29, 'Laboris vel suscipit', 'Explicabo Et aut ar', 37, '+1 (913) 107-6678', 'hatyqasef@mailinator.com', 'Est molestiae animi', 'Voluptatem neque est', '94.00', 'Eius aut et qui quid', '125000.00', 12, 'Neuve', '130309.32', '2025-02-25 12:45:45', 'Nouvelles', NULL, NULL, NULL, NULL),
(6, 30, 'Laborum est qui veli', 'Quis elit vitae err', 90, '+1 (478) 927-1765', 'hofa@mailinator.com', 'Nostrum porro dolor', 'Sed laborum Sed ani', '92.00', 'Ratione aliquam comm', '150000.00', 12, 'Neuve', '156371.18', '2025-02-27 13:04:45', 'Nouvelles', NULL, NULL, NULL, NULL),
(7, 31, 'Beatae corrupti ali', 'Rem rerum eu et non', 79, '+1 (856) 269-5895', 'xove@mailinator.com', 'Autem eum vitae vero', 'Nobis ullamco non su', '52.00', 'Esse quae ratione qu', '150000.00', 12, 'Neuve', '156371.18', '2025-02-27 16:55:39', 'Nouvelles', NULL, NULL, NULL, NULL),
(8, 42, 'Labore et neque sed', 'Omnis eum eiusmod ut', 68, '+1 (673) 552-5051', 'voly@mailinator.com', 'Tenetur praesentium', 'Quo commodo labore v', '75.00', 'Perspiciatis ipsum', '150000.00', 12, 'Neuve', '156371.18', '2025-03-01 00:52:42', 'Nouvelles', 'files/file_67c24c4aa07211.90754057.pdf', 'files/file_67c24c4aa0a474.13577338.pdf', 'files/file_67c24c4aa0cf80.46062739.pdf', 'files/file_67c24c4aa0f714.70308947.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `required_documents`
--

CREATE TABLE `required_documents` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `status` enum('pending','uploaded') DEFAULT 'pending',
  `has_been_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `has_been_read_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `required_documents`
--

INSERT INTO `required_documents` (`id`, `id_client`, `label`, `file_path`, `status`, `has_been_read`, `created_at`, `updated_at`, `has_been_read_admin`) VALUES
(2, 32, 'please add the bank approval', 'files/doc_67c6fea1c00e11.09814758.pdf', 'pending', 1, '2025-03-04 02:52:26', '2025-03-05 13:37:10', NULL),
(3, 32, 'second', 'files/file_67bd18ec201da2.55450901.pdf', 'uploaded', 1, '2025-03-04 12:47:32', '2025-03-06 02:06:52', 0),
(4, 32, 'third', 'files/doc_67c70af7a59f46.21779678.pdf', 'uploaded', 1, '2025-03-04 12:59:35', '2025-03-05 14:11:05', 1),
(5, 26, 'please add salary file', 'files/doc_67c9023dad7688.29825627.pdf', 'uploaded', 1, '2025-03-06 02:02:04', '2025-03-06 02:02:47', 1);

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
  `role` enum('admin','client','partner','topadmin') NOT NULL
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
(26, 30, 'wess', 'wessa12@gmail.com', '$2y$10$UZE95sCGHWYHBgnpjSLH8u5riOazr5d310X/gp27HsI8MzjZhWRd6', 'client'),
(27, 31, 'aaa', 'bb@gmail.com', '$2y$10$ZPtSjqpqFFlBYf2EUr8nDOeKocDs5ZNNs6CXpaNXcxIBfbKiP3E16', 'client'),
(28, 32, 'qqq', 'qqq@ll.com', '$2y$10$DXBUcwhSsZAvXjlK23EeoeZvFVZtfAjQcv1rdvGB4fN/lWeXUZGpK', 'client'),
(29, 33, 'lm', 'lm@gg.com', '$2y$10$foeLNetO19VQ7k/2E.BCiuRIdxC5ZA179ruiOFtEI.h82LFCS9zHy', 'client'),
(30, 34, 'cc', 'cc@ll.gg', '$2y$10$uS6mLIMmya6oPNOuj7XQsOsJpESgtxiqLmzmLAr6l758JHZLGM3DK', 'client'),
(31, 35, 'qq', 'qq@kk.com', '$2y$10$sSsQA1gbnHyiFLowQLTtueonxXIs6bH2m4hoHJoPAKS37NSLDFDD6', 'client'),
(32, 36, 'Allistair Boone', 'ruqodiba@mailinator.com', '$2y$10$Ts7.xetXAJvsHi6dzLlyTu/ggoMOosHMQIlaGc0o0XNe5hWtJ9RI6', 'client'),
(33, 37, 'Sopoline Abbott', 'roxymoqy@mailinator.com', '$2y$10$ie/CE5MYFyqmQ.OuNoxwmOZCR/4bdOh7f9tpci9UvXCcUOezbIrMi', 'client'),
(35, 38, 'Elmo Carey', 'vecaqojy@mailinator.com', '$2y$10$JRo5k/DE3jtvlfcUxXLEQueNFhusKWI3g3tHuz8m5eQBp2lmjLazm', 'client'),
(36, 39, 'Wang Cortez', 'beke@mailinator.com', '$2y$10$9qPGufFIdyr6fiMLw0Y4..rJ8EGtjOQzQtXdTeI8detTxP4KyRra6', 'client'),
(37, 40, 'Aladdin Callahan', 'rohegag@mailinator.com', '$2y$10$no68wfteZ7neVdADQKQiW.SGzyuOfNWYLB1B2VBokfA8KjSPEI/US', 'client'),
(38, 41, 'Georgia James', 'besywif@mailinator.com', '$2y$10$G6CcteNoKNnAYp6CLLXBlei0tCsf0qdinOgVOEfbOW/AYJTnNEliK', 'client'),
(39, 42, 'oussama ammar', 'lohud@mailinator.com', '$2y$10$X22hGgnvMoVjLfazdwqPW.6armlX/TCPTbEqYt3Cam/8706mFxo8O', 'client'),
(40, NULL, 'topp', 'topp@gmail.com', '$2y$10$DNDmc2OEY.5Y7pxa.o/RN.w2EeJgHM3uwqLayWdYSOND9PZs2qUrW', 'topadmin'),
(42, NULL, 'wesss', 'wesss@gmail.com', '$2y$10$u3wp5FqC33QiJR63oOci7e7IoDS47Cq5CucWUKOXvOrH6xjXj8qJq', 'admin');

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
-- Index pour la table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

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
-- Index pour la table `required_documents`
--
ALTER TABLE `required_documents`
  ADD PRIMARY KEY (`id`),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `required_documents`
--
ALTER TABLE `required_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
-- Contraintes pour la table `required_documents`
--
ALTER TABLE `required_documents`
  ADD CONSTRAINT `required_documents_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
