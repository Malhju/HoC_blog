-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 20 juil. 2018 à 13:02
-- Version du serveur :  5.7.21
-- Version de PHP :  7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `laravel_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_user_id_index` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'pipi', 1, NULL, NULL),
(2, 'caca', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_id` int(10) UNSIGNED NOT NULL,
  `author` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_post_id_index` (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `email`, `content`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 5, '3', 'hafidhou@hafidhou.fr', 'j\'aime çaaaaaa', 0, NULL, NULL),
(2, 3, '2', 'veroxy@veroxy.fr', 'Celui ci est le plus top', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2018_06_22_080237_create_photos_table', 1),
(22, '2018_06_22_080316_create_roles_table', 1),
(23, '2018_06_22_080446_create_comments_table', 1),
(24, '2018_06_22_080930_create_posts_table', 1),
(25, '2018_06_22_081835_create_categories_table', 1),
(26, '2018_06_29_094140_create_role_user_table', 1),
(27, '2018_07_20_112932_create_column_photos_imageable', 2),
(28, '2018_07_20_115530_delete_column_photos_id', 3);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imageable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imageable_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `photos`
--

INSERT INTO `photos` (`id`, `file`, `created_at`, `updated_at`, `imageable_type`, `imageable_id`) VALUES
(1, 'image823.png', '2018-07-20 09:59:51', '2018-07-20 09:59:51', 'App\\Post', 12),
(2, 'Hellboy_1920x1080_2.png', '2018-07-20 10:02:44', '2018-07-20 10:02:44', 'App\\Post', 13),
(3, 'ST.jpg', '2018-07-20 10:07:30', '2018-07-20 10:07:30', 'App\\Post', 14),
(4, 'SpiderYoda.jpg', '2018-07-20 10:10:47', '2018-07-20 10:10:47', 'App\\Post', 15);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_user_id_index` (`user_id`),
  KEY `posts_category_id_index` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `is_active`, `title`, `content`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 0, 'La crotte propre', 'c\'est celle qui sort, que tu vois dans la cuvette mais pas sur le papier', 1, 2, NULL, NULL),
(2, 0, 'La crotte fantôme ', 'c\'est celle que tu sens sortir, que tu vois sur le papier mais pas dans la cuvette.', 2, 2, NULL, NULL),
(3, 0, 'La crotte du lendemain de soirée', 'c\'est le liquide jaune brun qui t\'éclabousse toute la cuvette et qui te brûle le cul.', 1, 2, NULL, NULL),
(4, 0, 'Transarent', 'Vous buvez trop de liquides en tout genre.\r\nVous avez un problème au niveau du foie qui se remarque par une hépatite virale ou une cirrhose (nausées, vomissements et fièvre).\r\n', 2, 1, NULL, NULL),
(5, 0, 'FLuo', 'Vous prenez des suppléments vitamniques en excès ou ils ne sont pas absorbés par votre corps.', 1, 1, NULL, NULL),
(7, 0, 'Ceci et le meilleur post du monde entier !', 'POST TEST', 2, 1, '2018-07-20 07:34:45', '2018-07-20 07:34:45'),
(8, 0, 'FAUX ! Ceci est vraiment le meilleur post du monde entier !', 'test', 2, 1, '2018-07-20 07:37:19', '2018-07-20 07:37:19'),
(9, 0, 'La chose', 'C\'EST LA VOITURE', 3, 2, '2018-07-20 08:05:34', '2018-07-20 08:05:34'),
(10, 1, 'Ceci et le meilleur post du monde entier !', 'zeyeryery', 3, 1, '2018-07-20 09:58:05', '2018-07-20 09:58:05'),
(11, 1, 'Ceci et le meilleur post du monde entier !', 'dsrhfdhshfd', 3, 1, '2018-07-20 09:59:21', '2018-07-20 09:59:21'),
(12, 1, 'Ceci et le meilleur post du monde entier !', 'yreydhfh', 3, 1, '2018-07-20 09:59:51', '2018-07-20 09:59:51'),
(13, 1, 'hellboy', 'et sa flamme', 3, 2, '2018-07-20 10:02:44', '2018-07-20 10:02:44'),
(14, 1, 'Ceci et le meilleur post du monde entier !', 'sdhhdhfsdfg', 3, 1, '2018-07-20 10:07:30', '2018-07-20 10:07:30'),
(15, 1, 'sdf', 'sdf', 3, 1, '2018-07-20 10:10:47', '2018-07-20 10:10:47');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_user_id_index` (`user_id`),
  KEY `role_user_role_id_index` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_id_index` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Julien', 'julien.laforge@gmx.fr', '$2y$10$M.SoQA2XQAE.YEbbDpLgNeZ7Hm/gIlHSVLPBCM0.uAoU.ogRb.8SC', 'T9kK68DQAOppivP4g3XDp2w5bNpxnvHlBp2OHFOqGBTdHy5pvYq3iS6LPKHD', 0, '2018-07-20 06:02:31', '2018-07-20 06:02:31'),
(2, 'Veroxy', 'veroxy@veroxy.fr', '$2y$10$yR7WOVGynTLKqsVScvt0xuETlPTN2q7lY53CmBHzSL.DeDjMhKznq', '0PxUj9BPhUqzyCs0YwRLLfYs6RZkA3Lc28ZLkT57RSGVHBB1V77P5tlkbC73', 0, '2018-07-20 06:03:34', '2018-07-20 06:03:34'),
(3, 'Hafidhou', 'hafidhou@hafidhou.fr', '$2y$10$yq3ATlriRFK1Rrb9JScwEu/KS5duNHiStqfzCk12ILsIPpX5h17UC', 'sfdIXzvPFwrfS0hg6UxH8OVBswq0nKGO0AKuY7ROe0nUzUhL2y7fD7ChX9ph', 0, '2018-07-20 06:06:06', '2018-07-20 06:06:06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
