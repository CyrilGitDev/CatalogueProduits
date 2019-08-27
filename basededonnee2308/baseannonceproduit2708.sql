-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 27 août 2019 à 21:44
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `baseannonceproduit`
--

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`id`, `nom`) VALUES
(109, 'provident'),
(110, 'cupiditate'),
(111, 'dolores'),
(112, 'quia'),
(113, 'ullam'),
(114, 'tempora'),
(115, 'aspernatur'),
(116, 'est'),
(117, 'tempore'),
(118, 'officiis'),
(119, 'voluptate'),
(120, 'recusandae'),
(121, 'est'),
(122, 'cupiditate'),
(123, 'aperiam'),
(124, 'dignissimos'),
(125, 'eum'),
(126, 'ipsa'),
(127, 'earum'),
(128, 'totam'),
(129, 'fugiat'),
(130, 'et'),
(131, 'laudantium'),
(132, 'magnam'),
(133, 'voluptas'),
(134, 'accusamus'),
(135, 'voluptates'),
(136, 'quam'),
(137, 'officiis'),
(138, 'perspiciatis'),
(139, 'reiciendis'),
(140, 'aut'),
(141, 'dolores'),
(142, 'et'),
(143, 'aut'),
(144, 'error'),
(145, 'laudantium'),
(146, 'ut'),
(147, 'vel'),
(148, 'qui'),
(149, 'dignissimos'),
(150, 'porro'),
(151, 'et'),
(152, 'est'),
(153, 'voluptas'),
(154, 'dignissimos'),
(155, 'ut'),
(156, 'id'),
(157, 'nostrum'),
(158, 'adipisci'),
(159, 'sed'),
(160, 'consequatur'),
(161, 'minima'),
(162, 'dolorum'),
(163, 'ipsam'),
(164, 'laboriosam'),
(165, 'quas'),
(166, 'voluptate'),
(167, 'itaque'),
(168, 'minima'),
(169, 'nihil'),
(170, 'expedita'),
(171, 'velit'),
(172, 'ut'),
(173, 'quia'),
(174, 'et'),
(175, 'quas'),
(176, 'sed'),
(177, 'ea'),
(178, 'inventore'),
(179, 'eos'),
(180, 'non'),
(181, 'qui'),
(182, 'similique'),
(183, 'harum'),
(184, 'porro'),
(185, 'autem'),
(186, 'ratione'),
(187, 'accusantium'),
(188, 'nulla'),
(189, 'quo'),
(190, 'aut'),
(191, 'consequatur'),
(192, 'voluptas'),
(193, 'dicta'),
(194, 'et'),
(195, 'quasi'),
(196, 'asperiores'),
(197, 'quod'),
(198, 'architecto'),
(199, 'ea'),
(200, 'id'),
(201, 'nihil'),
(202, 'perferendis'),
(203, 'vel'),
(204, 'consequuntur'),
(205, 'numquam'),
(206, 'ab'),
(207, 'nesciunt'),
(208, 'non'),
(209, 'yamu'),
(210, 'Sylas'),
(211, 'yatum'),
(212, 'Marque'),
(213, 'batus'),
(214, 'qsd'),
(215, 'Solo');

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20190822131154', '2019-08-22 13:14:27'),
('20190822132615', '2019-08-22 13:27:05'),
('20190822141959', '2019-08-22 14:20:14');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `marque_id` int(11) NOT NULL,
  `prix` double NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_ajout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `marque_id`, `prix`, `nom`, `reference`, `date_ajout`) VALUES
(115, 144, 636, 'facere qui quia', '303', '2019-08-26 17:30:00'),
(116, 110, 766, 'distinctio et dolores', '191', '2019-08-26 17:30:49'),
(117, 111, 552, 'commodi occaecati harum', '82', '2019-08-26 17:30:49'),
(118, 112, 837, 'possimus quaerat et', '208', '2019-08-26 17:30:49'),
(120, 114, 455, 'quae ut itaque', '54772782728sqdsqd', '2019-08-25 17:30:00'),
(121, 115, 941, 'quod corrupti accusamus', '616', '2019-08-26 17:30:49'),
(122, 116, 291, 'libero velit dolores', '100', '2019-08-26 17:30:49'),
(123, 117, 296, 'ab molestiae distinctio', '708', '2019-08-26 17:30:49'),
(124, 118, 322, 'cum voluptatem consequatur', '770', '2019-08-26 17:30:49'),
(125, 119, 927, 'autem odio et', '55', '2019-08-26 17:30:49'),
(126, 120, 381, 'aut quasi vel', '114', '2019-08-26 17:30:49'),
(127, 121, 68, 'dolor quae voluptatem', '336', '2019-08-26 17:30:49'),
(128, 122, 170, 'et asperiores laborum', '208', '2019-08-26 17:30:49'),
(129, 123, 885, 'nam magnam unde', '591', '2019-08-26 17:30:49'),
(130, 124, 521, 'vero rerum ducimus', '475', '2019-08-26 17:30:49'),
(131, 125, 254, 'quas ipsa dolores', '78', '2019-08-26 17:30:49'),
(132, 126, 669, 'quo id commodi', '928', '2019-08-26 17:30:49'),
(133, 127, 743, 'perspiciatis ab voluptates', '886', '2019-08-26 17:30:49'),
(134, 128, 68, 'nesciunt optio pariatur', '718', '2019-08-26 17:30:49'),
(135, 129, 564, 'ut dolorum voluptatem', '539', '2019-08-26 17:30:49'),
(136, 130, 568, 'reprehenderit sunt distinctio', '373', '2019-08-26 17:30:49'),
(137, 131, 806, 'facere consectetur quibusdam', '111', '2019-08-26 17:30:49'),
(138, 132, 920, 'temporibus eveniet quisquam', '172', '2019-08-26 17:30:49'),
(139, 133, 205, 'eaque enim illo', '70', '2019-08-26 17:30:49'),
(140, 134, 505, 'aspernatur nobis quia', '880', '2019-08-26 17:30:49'),
(141, 135, 621, 'vitae perspiciatis asperiores', '787', '2019-08-26 17:30:49'),
(142, 136, 535, 'vel quidem nihil', '26', '2019-08-26 17:30:49'),
(143, 137, 738, 'non fuga rem', '920', '2019-08-26 17:30:49'),
(144, 138, 594, 'eaque aperiam dolorum', '371', '2019-08-26 17:30:49'),
(145, 139, 460, 'esse aut sint', '30', '2019-08-26 17:30:49'),
(146, 140, 955, 'fuga est explicabo', '245', '2019-08-26 17:30:49'),
(147, 141, 83, 'atque illo qui', '212', '2019-08-26 17:30:49'),
(148, 142, 656, 'nam assumenda rerum', '696', '2019-08-26 17:30:49'),
(149, 143, 147, 'non accusamus quo', '514', '2019-08-26 17:30:49'),
(150, 144, 18, 'animi esse ex', '264', '2019-08-26 17:30:49'),
(151, 145, 908, 'ipsa quos rerum', '909', '2019-08-26 17:30:49'),
(152, 146, 516, 'ut tenetur explicabo', '880', '2019-08-26 17:30:49'),
(153, 147, 776, 'qui quisquam ratione', '84', '2019-08-26 17:30:49'),
(154, 148, 276, 'saepe molestias modi', '772', '2019-08-26 17:30:49'),
(155, 149, 469, 'aut aut id', '314', '2019-08-26 17:30:49'),
(156, 150, 853, 'odit et sunt', '118', '2019-08-26 17:30:49'),
(157, 151, 469, 'cupiditate rerum inventore', '574', '2019-08-26 17:30:49'),
(158, 152, 519, 'qui consequuntur consectetur', '765', '2019-08-26 17:30:49'),
(159, 153, 790, 'deleniti dolorem et', '903', '2019-08-26 17:30:49'),
(160, 154, 720, 'ut aperiam quia', '174', '2019-08-26 17:30:49'),
(161, 155, 108, 'autem occaecati error', '937', '2019-08-26 17:30:49'),
(162, 156, 282, 'eos voluptatum voluptas', '154', '2019-08-26 17:30:49'),
(163, 157, 325, 'odio tempora voluptatum', '783', '2019-08-26 17:30:49'),
(165, 159, 612, 'laudantium laudantium ea', '234', '2019-08-26 17:30:49'),
(166, 160, 405, 'numquam voluptatem eveniet', '415', '2019-08-26 17:30:49'),
(167, 161, 643, 'asperiores neque quia', '345', '2019-08-26 17:30:49'),
(168, 162, 62, 'recusandae inventore molestiae', '635', '2019-08-26 17:30:49'),
(169, 163, 812, 'aut sunt nulla', '849', '2019-08-26 17:30:49'),
(170, 164, 666, 'quo laudantium temporibus', '325', '2019-08-26 17:30:49'),
(171, 165, 982, 'sapiente optio ipsum', '731', '2019-08-26 17:30:49'),
(172, 166, 550, 'qui quo dignissimos', '534', '2019-08-26 17:30:49'),
(173, 167, 553, 'amet rerum itaque', '191', '2019-08-26 17:30:49'),
(174, 168, 899, 'voluptatem et saepe', '673', '2019-08-26 17:30:49'),
(175, 169, 906, 'iure veniam eum', '420', '2019-08-26 17:30:49'),
(176, 170, 996, 'sit eum velit', '399', '2019-08-26 17:30:49'),
(177, 171, 652, 'culpa temporibus accusamus', '26', '2019-08-26 17:30:49'),
(178, 172, 574, 'corrupti velit est', '411', '2019-08-26 17:30:49'),
(179, 173, 803, 'earum aut sequi', '320', '2019-08-26 17:30:49'),
(180, 174, 285, 'vel consequuntur corporis', '255', '2019-08-26 17:30:49'),
(181, 175, 558, 'molestiae quas aspernatur', '922', '2019-08-26 17:30:49'),
(182, 176, 579, 'molestiae mollitia impedit', '729', '2019-08-26 17:30:49'),
(183, 177, 533, 'rerum placeat quos', '828', '2019-08-26 17:30:49'),
(184, 178, 919, 'quia tenetur similique', '72', '2019-08-26 17:30:49'),
(185, 179, 994, 'perspiciatis excepturi consectetur', '45', '2019-08-26 17:30:49'),
(186, 180, 876, 'iusto excepturi provident', '608', '2019-08-26 17:30:49'),
(187, 181, 643, 'et praesentium cum', '341', '2019-08-26 17:30:49'),
(188, 182, 40, 'architecto id aut', '535', '2019-08-26 17:30:49'),
(189, 183, 457, 'enim magni eum', '644', '2019-08-26 17:30:49'),
(190, 184, 472, 'similique ad aut', '946', '2019-08-26 17:30:49'),
(191, 185, 44, 'qui iusto tempore', '725', '2019-08-26 17:30:49'),
(192, 186, 487, 'sequi maxime quo', '911', '2019-08-26 17:30:49'),
(193, 187, 109, 'dolores qui voluptas', '523', '2019-08-26 17:30:49'),
(194, 188, 493, 'officiis ea cumque', '559', '2019-08-26 17:30:49'),
(195, 189, 792, 'et velit voluptatum', '141', '2019-08-26 17:30:49'),
(196, 190, 651, 'reiciendis et laborum', '184', '2019-08-26 17:30:49'),
(197, 191, 419, 'nesciunt asperiores ipsam', '680', '2019-08-26 17:30:49'),
(198, 192, 197, 'atque ut quia', '277', '2019-08-26 17:30:49'),
(199, 193, 636, 'aliquid expedita excepturi', '106', '2019-08-26 17:30:49'),
(200, 194, 566, 'esse non cupiditate', '547', '2019-08-26 17:30:49'),
(201, 195, 902, 'et perferendis culpa', '348', '2019-08-26 17:30:49'),
(202, 196, 894, 'perferendis molestias eos', '399', '2019-08-26 17:30:49'),
(203, 197, 689, 'consequuntur rerum sunt', '619', '2019-08-26 17:30:49'),
(204, 198, 683, 'autem sed recusandae', '226', '2019-08-26 17:30:49'),
(205, 199, 794, 'vel qui voluptate', '641', '2019-08-26 17:30:49'),
(206, 200, 885, 'nisi ut facere', '880', '2019-08-26 17:30:49'),
(207, 201, 538, 'dolores delectus qui', '166', '2019-08-26 17:30:49'),
(208, 202, 402, 'beatae sapiente sit', '648', '2019-08-26 17:30:49'),
(209, 203, 874, 'maxime ea reiciendis', '587', '2019-08-26 17:30:49'),
(210, 204, 999, 'cum hic mollitia', '110', '2019-08-26 17:30:49'),
(211, 205, 967, 'ipsum et ut', '822', '2019-08-26 17:30:49'),
(213, 207, 901, 'provident qui harum', '857', '2019-08-26 17:30:49'),
(214, 208, 290, 'animi molestiae veritatis', '950', '2019-08-26 17:30:49'),
(215, 209, 1.23, 'ril', 'azdazdadz', '2019-08-26 21:03:00'),
(216, 210, 25.2, 'lupius', 'azdadzad', '2019-08-26 21:34:00'),
(217, 123, 1, 'zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', 'adzadzazdazdadz', '2019-08-27 14:42:00'),
(218, 158, 25, 'atous dicuiim', 'adazdadazdaddzatousdicuiim', '2019-08-27 17:15:00'),
(219, 160, 12.25, 'calvier', 'adaddad', '2019-08-27 21:13:00'),
(220, 213, 15, 'batus 2200', 'azdazdazdzqd', '2019-08-27 21:18:00'),
(222, 215, 12.56, 'Livre de poche', '12.56Livre de poche', '2019-08-27 21:35:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_29A5EC274827B9B2` (`marque_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `marque`
--
ALTER TABLE `marque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_29A5EC274827B9B2` FOREIGN KEY (`marque_id`) REFERENCES `marque` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
