-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 01 juin 2022 à 22:13
-- Version du serveur : 8.0.28
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tazerzit`
--

-- --------------------------------------------------------

--
-- Structure de la table `carts`
--

CREATE TABLE `carts` (
  `id_cart` bigint UNSIGNED NOT NULL,
  `total` decimal(8,2) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `id_user` bigint UNSIGNED DEFAULT NULL,
  `id_product` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `carts`
--

INSERT INTO `carts` (`id_cart`, `total`, `quantity`, `id_user`, `id_product`, `created_at`, `updated_at`) VALUES
(4, '15.00', 1, NULL, 3, '2022-05-26 21:22:39', '2022-05-31 13:47:39');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categ` bigint UNSIGNED NOT NULL,
  `name_categ` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img_categ` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categ`, `name_categ`, `created_at`, `updated_at`, `img_categ`) VALUES
(1, 'tapis', '2022-05-11 17:21:31', '2022-05-16 20:33:54', '1652733234.webp'),
(2, 'decoration', '2022-05-11 17:21:40', '2022-05-16 20:34:24', '1652733264.jpg'),
(3, 'accessorie', '2022-05-11 17:21:46', '2022-05-16 20:34:46', '1652733286.png'),
(17, 'Kitchen\'s equipement', '2022-05-29 17:01:56', '2022-05-29 17:01:56', '1653843716.png');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id_contact` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id_contact`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Adardor naima', 'adardournaima70@gmail.com', 'hello everyone i hope u\'re doing well', '2022-04-20 23:36:46', '2022-04-20 23:36:46'),
(2, 'Adardor naima', 'adardournaima70@gmail.com', 'hello everyone i hope u\'re doing well', '2022-04-20 23:45:10', '2022-04-20 23:45:10'),
(3, 'Adardor naima', 'adardournaima70@gmail.com', 'hello everyone i hope u\'re doing well', '2022-04-20 23:45:13', '2022-04-20 23:45:13'),
(4, 'Adardor naima', 'adardournaima70@gmail.com', 'hello everyone i hope u\'re doing well', '2022-04-20 23:45:15', '2022-04-20 23:45:15'),
(5, 'Adardor naima', 'adardournaima70@gmail.com', 'hello everyone i hope u\'re doing well', '2022-04-20 23:45:17', '2022-04-20 23:45:17'),
(6, 'Adardor naima', 'adardournaima70@gmail.com', 'hello everyone i hope u\'re doing well', '2022-04-20 23:45:20', '2022-04-20 23:45:20'),
(7, 'Adardor naima', 'adardournaima70@gmail.com', 'hello everyone i hope u\'re doing well', '2022-04-21 00:00:01', '2022-04-21 00:00:01'),
(8, 'Adardor naima', 'adardournaima70@gmail.com', 'hello everyone i hope u\'re doing well', '2022-04-22 11:38:00', '2022-04-22 11:38:00'),
(9, 'Adardor naima', 'adardournaima70@gmail.com', 'hello everyone i hope u\'re doing well', '2022-04-22 11:38:23', '2022-04-22 11:38:23');

-- --------------------------------------------------------

--
-- Structure de la table `coupons`
--

CREATE TABLE `coupons` (
  `id_coupon` bigint UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent_off` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `detail_livraisons`
--

CREATE TABLE `detail_livraisons` (
  `id_detailLivraison` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Numero` int NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `detail_livraisons`
--

INSERT INTO `detail_livraisons` (`id_detailLivraison`, `id_user`, `lastName`, `firstName`, `city`, `country`, `adresse`, `zipCode`, `Numero`, `email`, `created_at`, `updated_at`) VALUES
(1, 4, 'Adardor', 'naima', 'Taroudant', 'Maroc', 'qods23', '8000', 876, 'JJD@gmail.com', '2022-05-26 21:39:56', '2022-05-26 21:39:56'),
(2, 2, 'Adardor', 'Naima', 'AF', 'AF', 'SK', '456', 234, 'adardournaima70@gmail.com', '2022-05-28 16:11:35', '2022-05-31 13:48:24'),
(3, 5, 'Bouchhar', 'Maryam', 'Taroudant', 'Maroc', 'Avenue el mehayta  NV657', '83000', 643627919, 'Bouchhar@gmail.com', '2022-05-30 15:36:05', '2022-05-30 15:38:05'),
(4, 6, 'Rhob', 'Soukayna', 'Agadir', 'Maroc', 'Talbergt 34', '83000', 64323567, 'Soukayna@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2022_04_20_173723_create_contacts_table', 1),
(6, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(7, '2022_05_01_034057_create_sessions_table', 2),
(9, '2022_05_08_155333_create_products_table', 4),
(10, '2022_05_08_221313_create_products_table', 5),
(11, '2022_05_09_104940_create_produits_table', 6),
(14, '2014_10_12_000000_create_users_table', 7),
(15, '2014_10_12_100000_create_password_resets_table', 7),
(16, '2019_08_19_000000_create_failed_jobs_table', 7),
(17, '2019_12_14_000001_create_personal_access_tokens_table', 7),
(18, '2022_05_08_141402_create_categories_table', 7),
(19, '2022_05_11_161040_create_promotions_table', 8),
(20, '2022_05_11_161711_create_products_table', 9),
(21, '2022_05_17_110635_create_carts_table', 10),
(22, '2022_05_17_112409_create_orders_table', 11),
(23, '2022_05_17_112851_create_carts_table', 11),
(24, '2022_05_17_113139_create_orders_table', 12),
(25, '2022_05_17_114056_create_carts_table', 13),
(26, '2022_05_17_120530_create_orders_table', 14),
(27, '2022_05_17_120714_create_detail_orders_table', 15),
(28, '2022_05_17_121555_create_detail_orders_table', 16),
(29, '2022_05_19_105606_create_user_adresses_table', 17),
(30, '2022_05_19_122544_create_user_adresses_table', 18),
(31, '2022_05_21_132934_create_ratings_table', 19),
(34, '2022_05_23_193858_create_reviews_table', 20),
(35, '2022_05_26_135049_carts', 21),
(36, '2022_05_26_135526_detail_livraisons', 22),
(37, '2022_05_30_101304_create_coupons_table', 23);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id_order` bigint UNSIGNED NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `delivred` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `id_detailLivraison` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id_order`, `total`, `id_user`, `created_at`, `updated_at`, `status`, `delivred`, `id_detailLivraison`) VALUES
(6, '132', 5, '2022-05-11 14:19:05', '2022-05-26 21:43:14', '1', '1', 3),
(7, '600', 2, '2022-05-28 16:16:38', '2022-05-28 16:16:38', '1', '0', 2),
(8, '6444', 2, '2022-05-28 16:22:15', '2022-05-28 16:22:15', '1', '0', 4),
(10, '222', 2, '2022-05-31 13:48:24', '2022-05-31 13:48:24', '0', '0', 2);

-- --------------------------------------------------------

--
-- Structure de la table `order_details`
--

CREATE TABLE `order_details` (
  `id_detail` bigint UNSIGNED NOT NULL,
  `id_order` bigint UNSIGNED DEFAULT NULL,
  `quatity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_product` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `order_details`
--

INSERT INTO `order_details` (`id_detail`, `id_order`, `quatity`, `price`, `id_product`, `created_at`, `updated_at`) VALUES
(5, 6, '3', '44', 3, '2022-05-26 21:42:01', '2022-05-26 21:42:01'),
(6, 7, '3', '200', 4, '2022-05-28 16:16:39', '2022-05-28 16:16:39'),
(7, 8, '12', '500', 2, '2022-05-28 16:22:15', '2022-05-28 16:22:15'),
(8, 8, '2', '222', 5, '2022-05-28 16:22:15', '2022-05-28 16:22:15'),
(9, 10, NULL, '49.5', 4, '2022-05-31 13:48:24', '2022-05-31 13:48:24'),
(10, 10, NULL, '55', 2, '2022-05-31 13:48:25', '2022-05-31 13:48:25'),
(11, 10, NULL, '111', 5, '2022-05-31 13:48:25', '2022-05-31 13:48:25');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id_product` bigint UNSIGNED NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_categ` bigint UNSIGNED NOT NULL,
  `id_promo` bigint UNSIGNED DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id_product`, `designation`, `description`, `id_categ`, `id_promo`, `quantity`, `price`, `old_price`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Tapis tafraout', 'Tapis tres sympa son materiel est extra-ordinaire', 2, 1, '7', '55', '100', '1653493174.jpg', '2022-05-11 18:25:08', '2022-05-29 13:29:30'),
(3, 'collier vv', 'collier de pierre formidable', 2, 2, '11', '15', '30', '1653493269.png', '2022-05-12 14:57:49', '2022-05-30 16:22:52'),
(4, 'vase en ceramique', 'magnifique vase en ceramique handmade', 2, 1, '56', '49.5', '90', '1653493359.jpg', '2022-05-25 15:42:39', '2022-05-29 13:30:17'),
(5, 'bijouxx', 'cllie vert incroyable et unique', 3, 2, '12', '111', '222', '1653493439.png', '2022-05-25 15:43:59', '2022-05-29 13:22:19'),
(9, 'bracelet', 'berbere bracelet', 3, 1, '12', '22.5', '50', '1653825639.png', '2022-05-29 12:00:39', '2022-05-29 13:22:43'),
(10, 'tapis rouge foncée', 'tapis azilal', 1, 2, '11', '100', '200', '1653826043.jpg', '2022-05-29 12:07:23', '2022-05-29 12:07:23'),
(11, 'tapis blanche  et noir', 'tapis marocain traditionnel', 1, NULL, '13', '400', '460', '1653826549.png', '2022-05-29 12:15:49', '2022-05-29 12:15:49'),
(12, 'tagine artisanal', 'tagine decoratif colorée', 17, NULL, '23', '100', '120', '1653928368.png', '2022-05-30 16:32:48', '2022-05-30 16:32:48'),
(13, 'Théière traditionnelle MAESTRO normal 24', 'La théière MAESTRO Normal (24), parfaite pour vos dégustations de thé entre amis et votre famille. Façonnée en plein de cœur de la médina fassie par nos maitres artisans.', 17, NULL, '20', '300', '340', '1654111276.png', '2022-06-01 19:21:16', '2022-06-01 19:21:16'),
(14, 'Assiette en céramique', 'Plat marocain, céramique de Marrakech, en terre cuite, émaillé, peint et verni à la main par nos artisans à Marrakech, orné de jolies formes de différentes couleurs.', 17, 3, '12', '160', '200', '1654111704.png', '2022-06-01 19:28:24', '2022-06-01 19:28:24'),
(15, 'Tajine simple en terre cuite', 'Tajine simple, couleur naturelle, fait main selon la pure tradition ancestrale', 17, NULL, '100', '100', '101', '1654111857.png', '2022-06-01 19:30:57', '2022-06-01 19:30:57'),
(16, 'Panier traditionnel Marocain', 'Panier en feuille de palmier, fait à la main, longues anses en cuir.\r\n\r\n​Panier original et 100% artisanal marocain.', 3, 2, '123', '100', '200', '1654112096.png', '2022-06-01 19:34:56', '2022-06-01 19:34:56'),
(17, 'Mini moulin', 'Mini moulin en pierre traitée à la main , finition en bois, symbole du processus de production d\'huile d\'argan qui est aussi une spécialité de la région d\'Essaouira', 17, 3, '12', '75', '100', '1654120626.png', '2022-06-01 21:57:06', '2022-06-01 21:57:06'),
(18, 'Collier de perles anciennes', 'Collier en argent avec d\'anciennes perles et argent réenfilé', 3, 1, '12', '165', '300', '1654120850.png', '2022-06-01 22:00:50', '2022-06-01 22:00:50'),
(19, 'tapis berbère Azilal', 'Un très joli tapis tissé et brodé très coloré, un tapis berbère de type Azilal sur fond clair avec motifs de couleurs multiples très vives.', 1, 2, '40', '500', '1000', '1654121019.png', '2022-06-01 22:03:39', '2022-06-01 22:03:39');

-- --------------------------------------------------------

--
-- Structure de la table `promotions`
--

CREATE TABLE `promotions` (
  `id_promo` bigint UNSIGNED NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateD` date DEFAULT NULL,
  `dateF` date DEFAULT NULL,
  `img_promo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `promotions`
--

INSERT INTO `promotions` (`id_promo`, `designation`, `discount`, `dateD`, `dateF`, `img_promo`, `created_at`, `updated_at`) VALUES
(1, 'Aid Al Adha', '45', '2022-03-01', '2022-07-28', '1653832061.png', NULL, '2022-05-29 13:47:41'),
(2, 'Summer', '50', '2022-05-11', '2022-07-26', '1653832121.png', '2022-05-11 21:16:54', '2022-05-29 13:48:41'),
(3, 'discount20%', '25', '2022-03-01', '2022-09-02', '1653929159.png', '2022-05-11 21:49:00', '2022-06-01 19:47:17');

-- --------------------------------------------------------

--
-- Structure de la table `ratings`
--

CREATE TABLE `ratings` (
  `id_rating` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `id_product` bigint UNSIGNED NOT NULL,
  `stars_rated` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ratings`
--

INSERT INTO `ratings` (`id_rating`, `id_user`, `id_product`, `stars_rated`, `created_at`, `updated_at`) VALUES
(14, 4, 2, '4', '2022-05-25 13:45:42', '2022-05-25 13:45:42'),
(15, 4, 3, '5', '2022-05-11 14:19:05', '2022-05-26 21:39:56'),
(16, 4, 4, '3', '2022-05-28 17:58:13', '2022-05-28 18:39:39'),
(17, 4, 5, '3', '2022-05-28 18:47:33', '2022-05-28 18:47:33'),
(18, 2, 3, '5', '2022-05-30 10:54:57', '2022-06-01 12:36:54'),
(19, 2, 9, '3', '2022-06-01 12:46:43', '2022-06-01 12:46:43');

-- --------------------------------------------------------

--
-- Structure de la table `reviews`
--

CREATE TABLE `reviews` (
  `id_review` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `id_product` bigint UNSIGNED NOT NULL,
  `review` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reviews`
--

INSERT INTO `reviews` (`id_review`, `id_user`, `id_product`, `review`, `created_at`, `updated_at`) VALUES
(1, 4, 3, 'nn', '2022-05-28 15:37:19', '2022-05-28 15:37:19'),
(2, 4, 4, 'bb', '2022-05-28 18:10:32', '2022-05-28 18:10:32'),
(3, 4, 4, 'nn', '2022-05-28 18:33:06', '2022-05-28 18:33:06'),
(4, 4, 4, 'nnnn', '2022-05-28 18:39:51', '2022-05-28 18:39:51'),
(5, 4, 5, 'CC', '2022-05-28 18:47:44', '2022-05-28 18:47:44'),
(6, 4, 5, 'N N', '2022-05-28 18:48:51', '2022-05-28 18:48:51'),
(9, 6, 9, 'Amazing bracelet I recommend it', '2022-05-26 21:42:01', '2022-05-26 21:42:01');

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ggPHr772eZ9HXzwEpTgltfURu652Gc7uHL3mbIcD', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibFNMSmFkVEFnaXBmWVFad3A4RGpGRVRuQ1BEQ0VIQWpTc1kybTVPQiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGtDVTB2bVljTzBKNEI4ZGpwTDZneS55amVHMlVPZFVMRmptUGZXdlBuSkcvQ1QyN0RnYW1lIjt9', 1651379202),
('XgIrFYazLjoAbRTtGBGpqOUcwWyAA7Pt7F1QWjBD', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQjBuNlBwNHdLaUozWnBoV1RxRjFBV0hBeVJGOVlmcUlnNDdmTldMcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9mb3Jnb3QtcGFzc3dvcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1651427277),
('xNzo6OALbLfsIp8Uv2aTZy53hajz1jfci4lSmEdj', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoic0xGTmhvZm1hcmdrMGtPMHUzYzFlTEpQcjFKM2o2QWM0dGYzdXh5WCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGtDVTB2bVljTzBKNEI4ZGpwTDZneS55amVHMlVPZFVMRmptUGZXdlBuSkcvQ1QyN0RnYW1lIjt9', 1651377877);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `name`, `usertype`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Naima', '1', 'adardournaima70@gmail.com', NULL, '$2y$10$Ge3px7.XMLbVpeQp.8gpSejsia6xowGs1ST82SqRMqpQSjwJq6T1i', NULL, '2022-05-11 17:17:10', '2022-05-11 17:17:10'),
(4, 'sisi', '0', 'sasi@gmail.com', NULL, '$2y$10$.wTPMtn9GLCQmW3.65JSpuY0AjgElxe5hNooOKvP0wMJQpHPyc1Vy', NULL, '2022-05-12 22:02:35', '2022-05-12 22:02:35'),
(5, 'Maryam', '0', 'Bouchhar@gmail.com', NULL, '$2y$10$oVlRawinltsF2bmzrtHmCOysQLtMZcICbVieEIOUkk2nS7wsms8za', NULL, '2022-05-27 16:33:03', '2022-05-27 16:33:03'),
(6, 'Soukayna', '0', 'Souka@gmail.com', NULL, '$2y$10$6U73UP/.KSFJakn7NVPEk.FeWwTL4elVi9x8.Vge9L7TlDjq5lR42', NULL, '2022-05-27 16:35:30', '2022-05-27 16:35:30'),
(28, 'Fatin', '0', 'fatin@gmail.com', NULL, '$2y$10$DloLVJQ511bqWtSQMVtdCOiXKDR7ljhS.YB0OyoA8JaBOXPZv7Oku', NULL, '2022-05-30 12:07:57', '2022-05-30 12:07:57');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `carts_id_user_foreign` (`id_user`),
  ADD KEY `carts_id_product_foreign` (`id_product`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categ`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id_coupon`);

--
-- Index pour la table `detail_livraisons`
--
ALTER TABLE `detail_livraisons`
  ADD PRIMARY KEY (`id_detailLivraison`),
  ADD KEY `detail_livraisons_id_user_foreign` (`id_user`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_detailLivraison` (`id_detailLivraison`);

--
-- Index pour la table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `order_details_id_product_foreign` (`id_product`),
  ADD KEY `id_order` (`id_order`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `products_id_categ_foreign` (`id_categ`),
  ADD KEY `products_id_promo_foreign` (`id_promo`);

--
-- Index pour la table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id_promo`);

--
-- Index pour la table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id_rating`),
  ADD KEY `ratings_id_user_foreign` (`id_user`),
  ADD KEY `ratings_id_product_foreign` (`id_product`);

--
-- Index pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `reviews_id_user_foreign` (`id_user`),
  ADD KEY `reviews_id_product_foreign` (`id_product`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `carts`
--
ALTER TABLE `carts`
  MODIFY `id_cart` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categ` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id_contact` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id_coupon` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `detail_livraisons`
--
ALTER TABLE `detail_livraisons`
  MODIFY `id_detailLivraison` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id_detail` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id_promo` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id_rating` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id_review` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `detail_livraisons`
--
ALTER TABLE `detail_livraisons`
  ADD CONSTRAINT `detail_livraisons_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_detailLivraison`) REFERENCES `detail_livraisons` (`id_detailLivraison`);

--
-- Contraintes pour la table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `id_order` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id_order`),
  ADD CONSTRAINT `order_details_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_id_categ_foreign` FOREIGN KEY (`id_categ`) REFERENCES `categories` (`id_categ`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_id_promo_foreign` FOREIGN KEY (`id_promo`) REFERENCES `promotions` (`id_promo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ratings_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
