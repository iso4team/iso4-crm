-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 02 jan. 2020 à 19:00
-- Version du serveur :  8.0.16
-- Version de PHP :  7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `iso4_crm_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `crm_accounting`
--

CREATE TABLE `crm_accounting` (
  `id` int(11) NOT NULL,
  `act_mode_paiement` varchar(45) DEFAULT NULL,
  `act_amount` decimal(10,0) DEFAULT NULL,
  `act_create_at` date DEFAULT NULL,
  `act_statut` char(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `crm_category_product`
--

CREATE TABLE `crm_category_product` (
  `id` int(11) NOT NULL,
  `ca_libelle` varchar(45) DEFAULT NULL,
  `ca_statut` char(1) DEFAULT '1',
  `ca_create_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `crm_category_product`
--

INSERT INTO `crm_category_product` (`id`, `ca_libelle`, `ca_statut`, `ca_create_at`) VALUES
(1, 'Matériel et équipement de chantier', '1', '2019-07-22 00:00:00'),
(2, 'Logiciels - Solutions informatiques', '1', '2019-07-22 00:00:00'),
(3, 'Vitrerie - Miroiterie', '1', '2019-07-22 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `crm_category_supplier`
--

CREATE TABLE `crm_category_supplier` (
  `id` int(11) NOT NULL,
  `ca_libelle` varchar(45) DEFAULT NULL,
  `ca_statut` char(1) DEFAULT '1',
  `ca_create_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `crm_category_supplier`
--

INSERT INTO `crm_category_supplier` (`id`, `ca_libelle`, `ca_statut`, `ca_create_at`) VALUES
(1, 'Fruitier', '1', '2019-07-22 00:00:00'),
(2, 'Informatique', '1', '2019-07-22 00:00:00'),
(3, 'Industrie pharmaceutique  ', '1', '2019-07-22 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `crm_country`
--

CREATE TABLE `crm_country` (
  `id` int(11) NOT NULL,
  `cnt_libelle` varchar(45) DEFAULT NULL,
  `cnt_statut` char(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `crm_country`
--

INSERT INTO `crm_country` (`id`, `cnt_libelle`, `cnt_statut`) VALUES
(1, 'Afghanistan', '1'),
(2, 'Albanie', '1'),
(3, 'Antarctique', '1'),
(4, 'Algérie', '1'),
(5, 'Samoa Américaines', '1'),
(6, 'Andorre', '1'),
(7, 'Angola', '1'),
(8, 'Antigua-et-Barbuda', '1'),
(9, 'Azerbaïdjan', '1'),
(10, 'Argentine', '1'),
(11, 'Australie', '1'),
(12, 'Autriche', '1'),
(13, 'Bahamas', '1'),
(14, 'Bahreïn', '1'),
(15, 'Bangladesh', '1'),
(16, 'Arménie', '1'),
(17, 'Barbade', '1'),
(18, 'Belgique', '1'),
(19, 'Bermudes', '1'),
(20, 'Bhoutan', '1'),
(21, 'Bolivie', '1'),
(22, 'Bosnie-Herzégovine', '1'),
(23, 'Botswana', '1'),
(24, 'Île Bouvet', '1'),
(25, 'Brésil', '1'),
(26, 'Belize', '1'),
(27, 'Territoire Britannique de l\'Océan Indien', '1'),
(28, 'Îles Salomon', '1'),
(29, 'Îles Vierges Britanniques', '1'),
(30, 'Brunéi Darussalam', '1'),
(31, 'Bulgarie', '1'),
(32, 'Myanmar', '1'),
(33, 'Burundi', '1'),
(34, 'Bélarus', '1'),
(35, 'Cambodge', '1'),
(36, 'Cameroun', '1'),
(37, 'Canada', '1'),
(38, 'Cap-vert', '1'),
(39, 'Îles Caïmanes', '1'),
(40, 'République Centrafricaine', '1'),
(41, 'Sri Lanka', '1'),
(42, 'Tchad', '1'),
(43, 'Chili', '1'),
(44, 'Chine', '1'),
(45, 'Taïwan', '1'),
(46, 'Île Christmas', '1'),
(47, 'Îles Cocos (Keeling)', '1'),
(48, 'Colombie', '1'),
(49, 'Comores', '1'),
(50, 'Mayotte', '1'),
(51, 'République du Congo', '1'),
(52, 'République Démocratique du Congo', '1'),
(53, 'Îles Cook', '1'),
(54, 'Costa Rica', '1'),
(55, 'Croatie', '1'),
(56, 'Cuba', '1'),
(57, 'Chypre', '1'),
(58, 'République Tchèque', '1'),
(59, 'Bénin', '1'),
(60, 'Danemark', '1'),
(61, 'Dominique', '1'),
(62, 'République Dominicaine', '1'),
(63, 'Équateur', '1'),
(64, 'El Salvador', '1'),
(65, 'Guinée Équatoriale', '1'),
(66, 'Éthiopie', '1'),
(67, 'Érythrée', '1'),
(68, 'Estonie', '1'),
(69, 'Îles Féroé', '1'),
(70, 'Îles (malvinas) Falkland', '1'),
(71, 'Géorgie du Sud et les Îles Sandwich du Sud', '1'),
(72, 'Fidji', '1'),
(73, 'Finlande', '1'),
(74, 'Îles Åland', '1'),
(75, 'France', '1'),
(76, 'Guyane Française', '1'),
(77, 'Polynésie Française', '1'),
(78, 'Terres Australes Françaises', '1'),
(79, 'Djibouti', '1'),
(80, 'Gabon', '1'),
(81, 'Géorgie', '1'),
(82, 'Gambie', '1'),
(83, 'Territoire Palestinien Occupé', '1'),
(84, 'Allemagne', '1'),
(85, 'Ghana', '1'),
(86, 'Gibraltar', '1'),
(87, 'Kiribati', '1'),
(88, 'Grèce', '1'),
(89, 'Groenland', '1'),
(90, 'Grenade', '1'),
(91, 'Guadeloupe', '1'),
(92, 'Guam', '1'),
(93, 'Guatemala', '1'),
(94, 'Guinée', '1'),
(95, 'Guyana', '1'),
(96, 'Haïti', '1'),
(97, 'Îles Heard et Mcdonald', '1'),
(98, 'Saint-Siège (état de la Cité du Vatican)', '1'),
(99, 'Honduras', '1'),
(100, 'Hong-Kong', '1'),
(101, 'Hongrie', '1'),
(102, 'Islande', '1'),
(103, 'Inde', '1'),
(104, 'Indonésie', '1'),
(105, 'République Islamique d\'Iran', '1'),
(106, 'Iraq', '1'),
(107, 'Irlande', '1'),
(108, 'Israël', '1'),
(109, 'Italie', '1'),
(110, 'Côte d\'Ivoire', '1'),
(111, 'Jamaïque', '1'),
(112, 'Japon', '1'),
(113, 'Kazakhstan', '1'),
(114, 'Jordanie', '1'),
(115, 'Kenya', '1'),
(116, 'République Populaire Démocratique de Corée', '1'),
(117, 'République de Corée', '1'),
(118, 'Koweït', '1'),
(119, 'Kirghizistan', '1'),
(120, 'République Démocratique Populaire Lao', '1'),
(121, 'Liban', '1'),
(122, 'Lesotho', '1'),
(123, 'Lettonie', '1'),
(124, 'Libéria', '1'),
(125, 'Jamahiriya Arabe Libyenne', '1'),
(126, 'Liechtenstein', '1'),
(127, 'Lituanie', '1'),
(128, 'Luxembourg', '1'),
(129, 'Macao', '1'),
(130, 'Madagascar', '1'),
(131, 'Malawi', '1'),
(132, 'Malaisie', '1'),
(133, 'Maldives', '1'),
(134, 'Mali', '1'),
(135, 'Malte', '1'),
(136, 'Martinique', '1'),
(137, 'Mauritanie', '1'),
(138, 'Maurice', '1'),
(139, 'Mexique', '1'),
(140, 'Monaco', '1'),
(141, 'Mongolie', '1'),
(142, 'République de Moldova', '1'),
(143, 'Montserrat', '1'),
(144, 'Maroc', '1'),
(145, 'Mozambique', '1'),
(146, 'Oman', '1'),
(147, 'Namibie', '1'),
(148, 'Nauru', '1'),
(149, 'Népal', '1'),
(150, 'Pays-Bas', '1'),
(151, 'Antilles Néerlandaises', '1'),
(152, 'Aruba', '1'),
(153, 'Nouvelle-Calédonie', '1'),
(154, 'Vanuatu', '1'),
(155, 'Nouvelle-Zélande', '1'),
(156, 'Nicaragua', '1'),
(157, 'Niger', '1'),
(158, 'Nigéria', '1'),
(159, 'Niué', '1'),
(160, 'Île Norfolk', '1'),
(161, 'Norvège', '1'),
(162, 'Îles Mariannes du Nord', '1'),
(163, 'Îles Mineures Éloignées des États-Unis', '1'),
(164, 'États Fédérés de Micronésie', '1'),
(165, 'Îles Marshall', '1'),
(166, 'Palaos', '1'),
(167, 'Pakistan', '1'),
(168, 'Panama', '1'),
(169, 'Papouasie-Nouvelle-Guinée', '1'),
(170, 'Paraguay', '1'),
(171, 'Pérou', '1'),
(172, 'Philippines', '1'),
(173, 'Pitcairn', '1'),
(174, 'Pologne', '1'),
(175, 'Portugal', '1'),
(176, 'Guinée-Bissau', '1'),
(177, 'Timor-Leste', '1'),
(178, 'Porto Rico', '1'),
(179, 'Qatar', '1'),
(180, 'Réunion', '1'),
(181, 'Roumanie', '1'),
(182, 'Fédération de Russie', '1'),
(183, 'Rwanda', '1'),
(184, 'Sainte-Hélène', '1'),
(185, 'Saint-Kitts-et-Nevis', '1'),
(186, 'Anguilla', '1'),
(187, 'Sainte-Lucie', '1'),
(188, 'Saint-Pierre-et-Miquelon', '1'),
(189, 'Saint-Vincent-et-les Grenadines', '1'),
(190, 'Saint-Marin', '1'),
(191, 'Sao Tomé-et-Principe', '1'),
(192, 'Arabie Saoudite', '1'),
(193, 'Sénégal', '1'),
(194, 'Seychelles', '1'),
(195, 'Sierra Leone', '1'),
(196, 'Singapour', '1'),
(197, 'Slovaquie', '1'),
(198, 'Viet Nam', '1'),
(199, 'Slovénie', '1'),
(200, 'Somalie', '1'),
(201, 'Afrique du Sud', '1'),
(202, 'Zimbabwe', '1'),
(203, 'Espagne', '1'),
(204, 'Sahara Occidental', '1'),
(205, 'Soudan', '1'),
(206, 'Suriname', '1'),
(207, 'Svalbard etÎle Jan Mayen', '1'),
(208, 'Swaziland', '1'),
(209, 'Suède', '1'),
(210, 'Suisse', '1'),
(211, 'République Arabe Syrienne', '1'),
(212, 'Tadjikistan', '1'),
(213, 'Thaïlande', '1'),
(214, 'Togo', '1'),
(215, 'Tokelau', '1'),
(216, 'Tonga', '1'),
(217, 'Trinité-et-Tobago', '1'),
(218, 'Émirats Arabes Unis', '1'),
(219, 'Tunisie', '1'),
(220, 'Turquie', '1'),
(221, 'Turkménistan', '1'),
(222, 'Îles Turks et Caïques', '1'),
(223, 'Tuvalu', '1'),
(224, 'Ouganda', '1'),
(225, 'Ukraine', '1'),
(226, 'L\'ex-République Yougoslave de Macédoine', '1'),
(227, 'Égypte', '1'),
(228, 'Royaume-Uni', '1'),
(229, 'Île de Man', '1'),
(230, 'République-Unie de Tanzanie', '1'),
(231, 'États-Unis', '1'),
(232, 'Îles Vierges des États-Unis', '1'),
(233, 'Burkina Faso', '1'),
(234, 'Uruguay', '1'),
(235, 'Ouzbékistan', '1'),
(236, 'Venezuela', '1'),
(237, 'Wallis et Futuna', '1'),
(238, 'Samoa', '1'),
(239, 'Yémen', '1'),
(240, 'Serbie-et-Monténégro', '1'),
(241, 'Zambie', '1');

-- --------------------------------------------------------

--
-- Structure de la table `crm_customer`
--

CREATE TABLE `crm_customer` (
  `id` int(11) NOT NULL,
  `cus_fk_user` int(11) NOT NULL,
  `cus_note` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `crm_customer`
--

INSERT INTO `crm_customer` (`id`, `cus_fk_user`, `cus_note`) VALUES
(1, 3, NULL),
(2, 4, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `crm_delivery`
--

CREATE TABLE `crm_delivery` (
  `id` int(11) NOT NULL,
  `dlv_fk_order_id` int(11) NOT NULL,
  `dlv_fk_user_id` int(11) DEFAULT NULL,
  `dlv_quantity` int(11) NOT NULL,
  `dlv_bl` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `dlv_created_date` datetime NOT NULL,
  `dlv_statut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `crm_indicatif`
--

CREATE TABLE `crm_indicatif` (
  `id` int(11) NOT NULL,
  `ind_number` varchar(11) DEFAULT NULL,
  `ind_country` varchar(45) DEFAULT NULL,
  `ind_statut` char(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `crm_indicatif`
--

INSERT INTO `crm_indicatif` (`id`, `ind_number`, `ind_country`, `ind_statut`) VALUES
(1, '93', 'Afghanistan', '1'),
(2, '27', 'Afrique du Sud', '1'),
(3, '355', 'Albanie', '1'),
(4, '213', 'Algérie', '1'),
(5, '49', 'Allemagne', '1'),
(6, '376', 'Andorre', '1'),
(7, '244', 'Angola', '1'),
(8, '1264', 'Anguilla', '1'),
(9, '1268', 'Antigua et Barbuda', '1'),
(10, '966', 'Arabie Saoudite', '1'),
(11, '54', 'Argentine', '1'),
(12, '374', 'Arménie', '1'),
(13, '297', 'Aruba', '1'),
(14, '247', 'Ascension (Ile de)', '1'),
(15, '441 481', 'Aurigny', '1'),
(16, '61', 'Australie', '1'),
(17, '43', 'Autriche', '1'),
(18, '994', 'Azerbaïdjan', '1'),
(19, '1242', 'Bahamas', '1'),
(20, '973', 'Bahrein', '1'),
(21, '880', 'Bangladesh', '1'),
(22, '1246', 'Barbade', '1'),
(23, '32', 'Belgique', '1'),
(24, '501', 'Belize', '1'),
(25, '229', 'Benin', '1'),
(26, '1441', 'Bermudes', '1'),
(27, '975', 'Bhoutan', '1'),
(28, '375', 'Biélorussie', '1'),
(29, '95', 'Birmanie (Myanmar)', '1'),
(30, '591', 'Bolivie', '1'),
(31, '599-7', 'Bonaire', '1'),
(32, '387', 'Bosnie', '1'),
(33, '267', 'Botswana', '1'),
(34, '55', 'Brésil', '1'),
(35, '673', 'Brunei', '1'),
(36, '359', 'Bulgarie', '1'),
(37, '226', 'Burkina Faso', '1'),
(38, '257', 'Burundi', '1'),
(39, '855', 'Cambodge', '1'),
(40, '237', 'Cameroun', '1'),
(41, '1', 'Canada', '1'),
(42, '238', 'Cap Vert', '1'),
(43, '56', 'Chili', '1'),
(44, '86', 'Chine', '1'),
(45, '61', 'Christmas (Iles)', '1'),
(46, '357', 'Chypre', '1'),
(47, '61', 'Coco (Iles)', '1'),
(48, '57', 'Colombie', '1'),
(49, '269', 'Comores', '1'),
(50, '243', 'Congo (RDC)', '1'),
(51, '242', 'Congo (RPC)', '1'),
(52, '682', 'Cook (Iles)', '1'),
(53, '850', 'Corée du Nord', '1'),
(54, '82', 'Corée du Sud', '1'),
(55, '506', 'Costa Rica', '1'),
(56, '225', 'Côte d\'Ivoire', '1'),
(57, '385', 'Croatie', '1'),
(58, '53', 'Cuba', '1'),
(59, '599-9', 'Curaçao', '1'),
(60, '45', 'Danemark', '1'),
(61, '253', 'Djibouti', '1'),
(62, '1767', 'Dominique', '1'),
(63, '20', 'Egypte', '1'),
(64, '503', 'El Salvador', '1'),
(65, '971', 'Emirats Arabes Unis', '1'),
(66, '593', 'Equateur', '1'),
(67, '291', 'Erythrée', '1'),
(68, '34', 'Espagne', '1'),
(69, '372', 'Estonie', '1'),
(70, '1', 'Etats-Unis', '1'),
(71, '251', 'Ethiopie', '1'),
(72, '500', 'Falklands (Malouines)', '1'),
(73, '679', 'Fidji (Iles)', '1'),
(74, '358', 'Finlande', '1'),
(75, '33', 'France', '1'),
(76, '241', 'Gabon', '1'),
(77, '220', 'Gambie', '1'),
(78, '995', 'Georgie', '1'),
(79, '233', 'Ghana', '1'),
(80, '350', 'Gibraltar', '1'),
(81, '30', 'Grèce', '1'),
(82, '1473', 'Grenade', '1'),
(83, '299', 'Groenland', '1'),
(84, '(0)590', 'Guadeloupe', '1'),
(85, '502', 'Guatemala', '1'),
(86, '441 481', 'Guernesey', '1'),
(87, '224', 'Guinée', '1'),
(88, '245', 'Guinée Bissau', '1'),
(89, '240', 'Guinée Equatoriale', '1'),
(90, '592', 'Guyana', '1'),
(91, '(0)594', 'Guyane Française', '1'),
(92, '509', 'Haïti', '1'),
(93, '441 481', 'Herm', '1'),
(94, '504', 'Honduras', '1'),
(95, '852', 'Hong Kong', '1'),
(96, '36', 'Hongrie', '1'),
(97, '1345', 'Iles Cayman', '1'),
(98, '677', 'Iles Salomon', '1'),
(99, '1284', 'Iles Vierges GB', '1'),
(100, '1340', 'Iles Vierges USA', '1'),
(101, '91', 'Inde', '1'),
(102, '62', 'Indonésie', '1'),
(103, '964', 'Irak', '1'),
(104, '98', 'Iran', '1'),
(105, '353', 'Irlande', '1'),
(106, '354', 'Islande', '1'),
(107, '972', 'Israel', '1'),
(108, '39', 'Italie', '1'),
(109, '1876', 'Jamaïque', '1'),
(110, '81', 'Japon', '1'),
(111, '441 534', 'Jersey', '1'),
(112, '962', 'Jordanie', '1'),
(113, '7', 'Kazakhstan', '1'),
(114, '254', 'Kenya', '1'),
(115, '996', 'Kirghizistan', '1'),
(116, '686', 'Kiribati', '1'),
(117, '965', 'Koweit', '1'),
(118, '856', 'Laos', '1'),
(119, '266', 'Lesotho', '1'),
(120, '371', 'Lettonie', '1'),
(121, '961', 'Liban', '1'),
(122, '218', 'Libye', '1'),
(123, '423', 'Liechtenstein', '1'),
(124, '370', 'Lituanie', '1'),
(125, '352', 'Luxembourg', '1'),
(126, '853', 'Macao', '1'),
(127, '389', 'Macédoine', '1'),
(128, '261', 'Madagascar', '1'),
(129, '60', 'Malaisie', '1'),
(130, '265', 'Malawi', '1'),
(131, '960', 'Maldives', '1'),
(132, '223', 'Mali', '1'),
(133, '356', 'Malte', '1'),
(134, '1670', 'Mariannes (Iles)', '1'),
(135, '212', 'Maroc', '1'),
(136, '692', 'Marshall (Iles )', '1'),
(137, '(0)596', 'Martinique', '1'),
(138, '230', 'Maurice (Ile)', '1'),
(139, '222', 'Mauritanie', '1'),
(140, '269', 'Mayotte', '1'),
(141, '52', 'Mexique', '1'),
(142, '52', 'Mexique', '1'),
(143, '691', 'Micronésie', '1'),
(144, '373', 'Moldavie', '1'),
(145, '377', 'Monaco', '1'),
(146, '976', 'Mongolie', '1'),
(147, '1664', 'Montserrat', '1'),
(148, '258', 'Mozambique', '1'),
(149, '264', 'Namibie', '1'),
(150, '674', 'Nauru', '1'),
(151, '977', 'Népal', '1'),
(152, '505', 'Nicaragua', '1'),
(153, '227', 'Niger', '1'),
(154, '234', 'Nigeria', '1'),
(155, '672', 'Norfolk (Iles)', '1'),
(156, '47', 'Norvège', '1'),
(157, '687', 'Nouvelle Calédonie', '1'),
(158, '64', 'Nouvelle Zélande', '1'),
(159, '968', 'Oman', '1'),
(160, '256', 'Ouganda', '1'),
(161, '998', 'Ouzbekistan', '1'),
(162, '92', 'Pakistan', '1'),
(163, '680', 'Palau', '1'),
(164, '970', 'Palestine', '1'),
(165, '507', 'Panama', '1'),
(166, '675', 'Papouasie Nouvelle Guinée', '1'),
(167, '595', 'Paraguay', '1'),
(168, '31', 'Pays-Bas', '1'),
(169, '51', 'Pérou', '1'),
(170, '63', 'Philippines', '1'),
(171, '48', 'Pologne', '1'),
(172, '689', 'Polynésie Française', '1'),
(173, '1787', 'Porto Rico', '1'),
(174, '351', 'Portugal', '1'),
(175, '974', 'Qatar', '1'),
(176, '236', 'République Centrafricaine', '1'),
(177, '1809', 'République Dominicaine', '1'),
(178, '420', 'République Tchèquee', '1'),
(179, '(0)262', 'Réunion', '1'),
(180, '40', 'Roumanie', '1'),
(181, '44', 'Royaume Uni', '1'),
(182, '7', 'Russie', '1'),
(183, '7', 'Russie', '1'),
(184, '250', 'Rwanda', '1'),
(185, '378', 'Saint Marin (Rép.)', '1'),
(186, '1758', 'Sainte Lucie', '1'),
(187, '685', 'Samoa occidental', '1'),
(188, '239', 'Sao Tomé et Principe', '1'),
(189, '221', 'Sénégal', '1'),
(190, '441 481', 'Sercq', '1'),
(191, '248', 'Seychelles', '1'),
(192, '232', 'Sierra Leone', '1'),
(193, '65', 'Singapour', '1'),
(194, '421', 'Slovaquie', '1'),
(195, '386', 'Slovénie', '1'),
(196, '252', 'Somalie', '1'),
(197, '249', 'Soudan', '1'),
(198, '94', 'Sri Lanka', '1'),
(199, '1869', 'St Kitts', '1'),
(200, '508', 'St Pierre et Miquelon', '1'),
(201, '1784', 'St Vincent et les Grenadines', '1'),
(202, '46', 'Suède', '1'),
(203, '41', 'Suisse', '1'),
(204, '597', 'Surinam', '1'),
(205, '268', 'Swaziland', '1'),
(206, '963', 'Syrie', '1'),
(207, '992', 'Tadjikistan', '1'),
(208, '886', 'Taïwan', '1'),
(209, '255', 'Tanzanie', '1'),
(210, '235', 'Tchad', '1'),
(211, '66', 'Thailande', '1'),
(212, '228', 'Togo', '1'),
(213, '676', 'Tonga', '1'),
(214, '1868', 'Trinidad et Tobago', '1'),
(215, '216', 'Tunisie', '1'),
(216, '993', 'Turkmenistan', '1'),
(217, '1649', 'Turks et Caicos', '1'),
(218, '90', 'Turquie', '1'),
(219, '90', 'Turquie', '1'),
(220, '688', 'Tuvalu', '1'),
(221, '380', 'Ukraine', '1'),
(222, '598', 'Uruguay', '1'),
(223, '678', 'Vanuatu', '1'),
(224, '39 -(0) 6', 'Vatican', '1'),
(225, '58', 'Venezuela', '1'),
(226, '84', 'Vietnam', '1'),
(227, '681', 'Wallis et Futuna', '1'),
(228, '967', 'Yemen', '1'),
(229, '381', 'Yougoslavie', '1'),
(230, '260', 'Zambie', '1'),
(231, '263', 'Zimbabwe', '1');

-- --------------------------------------------------------

--
-- Structure de la table `crm_order`
--

CREATE TABLE `crm_order` (
  `id` int(11) NOT NULL,
  `ord_fk_supplier` int(11) DEFAULT NULL,
  `ord_fk_customer` int(11) DEFAULT NULL,
  `ord_fk_accounting` int(11) DEFAULT NULL,
  `ord_create_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `ord_statut` char(1) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `crm_order`
--

INSERT INTO `crm_order` (`id`, `ord_fk_supplier`, `ord_fk_customer`, `ord_fk_accounting`, `ord_statut`) VALUES
(2, 1, NULL, NULL, '1'),
(3, 1, NULL, NULL, '1'),
(4, 1, NULL, NULL, '1'),
(5, 1, NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Structure de la table `crm_order_product`
--

CREATE TABLE `crm_order_product` (
  `id` int(11) NOT NULL,
  `op_order_id` int(11) NOT NULL,
  `op_product_id` int(11) NOT NULL,
  `op_quantite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `crm_order_product`
--

INSERT INTO `crm_order_product` (`id`, `op_order_id`, `op_product_id`, `op_quantite`) VALUES
(1, 2, 1, 100),
(2, 3, 1, 20),
(3, 4, 1, 10),
(4, 5, 1, 10);

-- --------------------------------------------------------

--
-- Structure de la table `crm_product`
--

CREATE TABLE `crm_product` (
  `id` int(11) NOT NULL,
  `prd_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `prd_description` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `prd_price` decimal(10,0) NOT NULL,
  `prd_quantity` int(11) NOT NULL DEFAULT '0',
  `prd_image` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `prd_category` int(11) NOT NULL,
  `prd_statut` char(1) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT '1',
  `prd_fk_store_id` int(11) DEFAULT NULL,
  `prd_last_maj_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `crm_product`
--

INSERT INTO `crm_product` (`id`, `prd_name`, `prd_description`, `prd_price`, `prd_quantity`, `prd_image`, `prd_category`, `prd_statut`, `prd_fk_store_id`) VALUES
(1, 'product 1', 'testsdsdsd', '100', 7, NULL, 3, '1', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `crm_profil`
--

CREATE TABLE `crm_profil` (
  `idprofil` int(11) NOT NULL,
  `prf_libelle` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `prf_description` longtext,
  `prf_acces` tinyint(4) DEFAULT '0',
  `prf_create_at` datetime DEFAULT NULL,
  `prf_statut` char(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `crm_profil`
--

INSERT INTO `crm_profil` (`idprofil`, `prf_libelle`, `prf_description`, `prf_acces`, `prf_create_at`, `prf_statut`) VALUES
(1, 'ADMINISTRATEUR', 'Il a tous les droits sur la plateforme', 1, '2019-07-22 00:00:00', '1'),
(2, 'Client', 'Son accès à la plateforme dépend de l\'administrateur', 0, '2019-07-22 00:00:00', '1'),
(3, 'Fournisseur', 'L\'accès à la plateforme dépendra de l\'Administrateur', 0, '2019-07-22 00:00:00', '1');

-- --------------------------------------------------------

--
-- Structure de la table `crm_sale`
--

CREATE TABLE `crm_sale` (
  `id` int(11) NOT NULL,
  `sa_fk_user` int(11) DEFAULT NULL,
  `sa_fk_customer` int(11) DEFAULT NULL,
  `sa_payment_mode` enum('ESPECE','CHEQUE','MOBILE','') CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sa_payment_ref` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `sa_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sa_status` enum('PAYEE','NON PAYEE') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'NON PAYEE'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `crm_sale`
--

INSERT INTO `crm_sale` (`id`, `sa_fk_user`, `sa_fk_customer`, `sa_payment_mode`, `sa_payment_ref`, `sa_status`) VALUES
(1, NULL, NULL, NULL, NULL, 'NON PAYEE'),
(2, NULL, NULL, NULL, NULL, 'NON PAYEE'),
(3, NULL, NULL, NULL, NULL, 'NON PAYEE'),
(4, NULL, NULL, NULL, NULL, 'NON PAYEE'),
(5, NULL, NULL, NULL, NULL, 'NON PAYEE'),
(6, NULL, NULL, NULL, NULL, 'NON PAYEE'),
(7, NULL, NULL, NULL, NULL, 'NON PAYEE'),
(8, NULL, NULL, NULL, NULL, 'NON PAYEE'),
(9, NULL, NULL, NULL, NULL, 'NON PAYEE'),
(10, NULL, NULL, NULL, NULL, 'NON PAYEE'),
(11, NULL, NULL, NULL, NULL, 'NON PAYEE'),
(12, NULL, NULL, NULL, NULL, 'NON PAYEE'),
(13, NULL, NULL, NULL, NULL, 'NON PAYEE'),
(14, NULL, NULL, NULL, NULL, 'NON PAYEE');

-- --------------------------------------------------------

--
-- Structure de la table `crm_sale_item`
--

CREATE TABLE `crm_sale_item` (
  `id` int(11) NOT NULL,
  `si_fk_product` int(11) NOT NULL,
  `si_fk_sale` int(11) DEFAULT NULL,
  `si_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `crm_sale_item`
--

INSERT INTO `crm_sale_item` (`id`, `si_fk_product`, `si_fk_sale`, `si_quantity`) VALUES
(1, 1, 11, 10),
(2, 1, 12, 1),
(3, 1, 12, 10),
(4, 1, 13, 1),
(5, 1, 14, 1);

-- --------------------------------------------------------

--
-- Structure de la table `crm_store`
--

CREATE TABLE `crm_store` (
  `id` int(11) NOT NULL,
  `str_code` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `str_libelle` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `str_details` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `crm_supplier`
--

CREATE TABLE `crm_supplier` (
  `id` int(11) NOT NULL,
  `sup_fk_user` int(11) NOT NULL,
  `sup_note` int(11) DEFAULT '1',
  `sup_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ROW_FORMAT=COMPACT;

--
-- Déchargement des données de la table `crm_supplier`
--

INSERT INTO `crm_supplier` (`id`, `sup_fk_user`, `sup_note`, `sup_category`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `crm_user`
--

CREATE TABLE `crm_user` (
  `id` int(11) NOT NULL,
  `usr_first_name` varchar(100) DEFAULT NULL,
  `usr_last_name` varchar(50) DEFAULT NULL,
  `usr_email` varchar(45) DEFAULT NULL,
  `usr_indicatif` varchar(5) DEFAULT NULL,
  `usr_phone` varchar(20) DEFAULT NULL,
  `usr_adresse` varchar(225) DEFAULT NULL,
  `usr_ville` varchar(45) DEFAULT NULL,
  `usr_fk_country` int(11) NOT NULL,
  `usr_create_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `usr_statut` char(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `crm_user`
--

INSERT INTO `crm_user` (`id`, `usr_first_name`, `usr_last_name`, `usr_email`, `usr_indicatif`, `usr_phone`, `usr_adresse`, `usr_ville`, `usr_fk_country`, `usr_statut`) VALUES
(1, 'Ahmet', 'THIAM', 'thiamdidate88@gmail.com', NULL, '221774200064', 'Thies', 'Dakar', 241, '1'),
(2, 'Ahmet', 'THIAM', 'ahmet.thiam@uvs.edu.sn', NULL, '221774200064', 'thies', 'Dakar', 241, '1'),
(3, 'Ahmet', 'THIAM', 'ahmet.thiam@uvs.edu.sn', NULL, '221774200064', 'Thies', 'Dakar', 241, '1'),
(4, 'Ahmet', 'THIAM', 'ahmet.thiam@uvs.edu.sn', NULL, '221774200064', 'test', 'Dakar', 233, '1');

-- --------------------------------------------------------

--
-- Structure de la table `crm_user_credential`
--

CREATE TABLE `crm_user_credential` (
  `id` int(11) NOT NULL,
  `ucr_login` varchar(45) DEFAULT NULL,
  `ucr_password` varchar(225) DEFAULT NULL,
  `ucrsalt` varchar(100) NOT NULL,
  `ucr_fk_profil` int(11) NOT NULL,
  `ucr_fk_user_id` int(11) NOT NULL,
  `ucr_create_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `ucr_statut` char(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `crm_accounting`
--
ALTER TABLE `crm_accounting`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `crm_category_product`
--
ALTER TABLE `crm_category_product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `crm_category_supplier`
--
ALTER TABLE `crm_category_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `crm_country`
--
ALTER TABLE `crm_country`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `crm_customer`
--
ALTER TABLE `crm_customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_crm_customer_crm_user1` (`cus_fk_user`);

--
-- Index pour la table `crm_delivery`
--
ALTER TABLE `crm_delivery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_dlv_order_id` (`dlv_fk_order_id`),
  ADD KEY `idx_dlv_fk_user_id` (`dlv_fk_user_id`);

--
-- Index pour la table `crm_indicatif`
--
ALTER TABLE `crm_indicatif`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `crm_order`
--
ALTER TABLE `crm_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ord_fk_supplier` (`ord_fk_supplier`),
  ADD KEY `fk_crm_order_crm_customer1` (`ord_fk_customer`),
  ADD KEY `fk_crm_order_crm_accounting1` (`ord_fk_accounting`);

--
-- Index pour la table `crm_order_product`
--
ALTER TABLE `crm_order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_crm_order_has_crm_product_crm_order1` (`op_order_id`),
  ADD KEY `fk_crm_order_has_crm_product_crm_product1` (`op_product_id`);

--
-- Index pour la table `crm_product`
--
ALTER TABLE `crm_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_crm_product_crm_categoy` (`prd_category`),
  ADD KEY `idx_prd_fk_store_id` (`prd_fk_store_id`);

--
-- Index pour la table `crm_profil`
--
ALTER TABLE `crm_profil`
  ADD PRIMARY KEY (`idprofil`);

--
-- Index pour la table `crm_sale`
--
ALTER TABLE `crm_sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_sa_user` (`sa_fk_user`),
  ADD KEY `idx_sa_customer` (`sa_fk_customer`);

--
-- Index pour la table `crm_sale_item`
--
ALTER TABLE `crm_sale_item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `si_product` (`si_fk_product`),
  ADD KEY `si_sale_item` (`si_fk_sale`);

--
-- Index pour la table `crm_store`
--
ALTER TABLE `crm_store`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `crm_supplier`
--
ALTER TABLE `crm_supplier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_crm_supplier_crm_user1` (`sup_fk_user`),
  ADD KEY `fk_sup_category` (`sup_category`);

--
-- Index pour la table `crm_user`
--
ALTER TABLE `crm_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_crm_user_crm_country1` (`usr_fk_country`);

--
-- Index pour la table `crm_user_credential`
--
ALTER TABLE `crm_user_credential`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_crm_user_crm_profil` (`ucr_fk_profil`),
  ADD KEY `idx_fk_user_id` (`ucr_fk_user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `crm_accounting`
--
ALTER TABLE `crm_accounting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `crm_category_product`
--
ALTER TABLE `crm_category_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `crm_category_supplier`
--
ALTER TABLE `crm_category_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `crm_country`
--
ALTER TABLE `crm_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT pour la table `crm_customer`
--
ALTER TABLE `crm_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `crm_delivery`
--
ALTER TABLE `crm_delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `crm_indicatif`
--
ALTER TABLE `crm_indicatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;

--
-- AUTO_INCREMENT pour la table `crm_order`
--
ALTER TABLE `crm_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `crm_order_product`
--
ALTER TABLE `crm_order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `crm_product`
--
ALTER TABLE `crm_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `crm_profil`
--
ALTER TABLE `crm_profil`
  MODIFY `idprofil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `crm_sale`
--
ALTER TABLE `crm_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `crm_sale_item`
--
ALTER TABLE `crm_sale_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `crm_store`
--
ALTER TABLE `crm_store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `crm_supplier`
--
ALTER TABLE `crm_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `crm_user`
--
ALTER TABLE `crm_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `crm_user_credential`
--
ALTER TABLE `crm_user_credential`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `crm_customer`
--
ALTER TABLE `crm_customer`
  ADD CONSTRAINT `fk_crm_customer_crm_user1` FOREIGN KEY (`cus_fk_user`) REFERENCES `crm_user` (`id`);

--
-- Contraintes pour la table `crm_order`
--
ALTER TABLE `crm_order`
  ADD CONSTRAINT `crm_order_ibfk_1` FOREIGN KEY (`ord_fk_supplier`) REFERENCES `crm_supplier` (`id`),
  ADD CONSTRAINT `fk_crm_order_crm_accounting1` FOREIGN KEY (`ord_fk_accounting`) REFERENCES `crm_accounting` (`id`),
  ADD CONSTRAINT `fk_crm_order_crm_customer1` FOREIGN KEY (`ord_fk_customer`) REFERENCES `crm_customer` (`id`);

--
-- Contraintes pour la table `crm_order_product`
--
ALTER TABLE `crm_order_product`
  ADD CONSTRAINT `fk_crm_order_has_crm_product_crm_order1` FOREIGN KEY (`op_order_id`) REFERENCES `crm_order` (`id`),
  ADD CONSTRAINT `fk_crm_order_has_crm_product_crm_product1` FOREIGN KEY (`op_product_id`) REFERENCES `crm_product` (`id`);

--
-- Contraintes pour la table `crm_product`
--
ALTER TABLE `crm_product`
  ADD CONSTRAINT `fk_prd_category` FOREIGN KEY (`prd_category`) REFERENCES `crm_category_product` (`id`);

--
-- Contraintes pour la table `crm_supplier`
--
ALTER TABLE `crm_supplier`
  ADD CONSTRAINT `fk_crm_supplier_crm_user1` FOREIGN KEY (`sup_fk_user`) REFERENCES `crm_user` (`id`),
  ADD CONSTRAINT `fk_sup_category` FOREIGN KEY (`sup_category`) REFERENCES `crm_category_supplier` (`id`);

--
-- Contraintes pour la table `crm_user`
--
ALTER TABLE `crm_user`
  ADD CONSTRAINT `fk_crm_user_crm_country1` FOREIGN KEY (`usr_fk_country`) REFERENCES `crm_country` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
