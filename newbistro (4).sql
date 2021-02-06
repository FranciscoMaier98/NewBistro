-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Fev-2021 às 02:14
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `newbistro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`, `created_at`, `updated_at`) VALUES
(1, 'Combos', '2021-01-22 15:01:21', '2021-01-22 15:01:22'),
(2, 'Temakis', '2021-01-22 15:01:30', '2021-01-22 15:01:30'),
(3, 'Uramakis', '2021-01-22 15:01:42', '2021-01-22 15:01:42'),
(4, 'Hossomaki', '2021-01-22 15:01:52', '2021-01-22 15:01:53'),
(5, 'Porções de Hot', '2021-01-22 15:02:05', '2021-01-22 15:02:05'),
(6, 'Porção de Sashimi', '2021-01-22 15:02:17', '2021-01-22 15:02:18'),
(7, 'Gunkan', '2021-01-22 15:02:27', '2021-01-22 15:02:28'),
(8, 'Niguiri', '2021-01-22 15:02:35', '2021-01-22 15:02:36'),
(9, 'Outras Opções', '2021-01-22 15:08:30', '2021-01-22 15:08:31'),
(10, 'Bebidas // Refrigerantes', '2021-01-22 15:09:02', '2021-01-22 15:09:03'),
(11, 'Bebidas // Cervejas', '2021-01-22 15:09:02', '2021-01-22 15:09:03'),
(12, 'Bebidas // Sucos', '2021-01-22 15:09:14', '2021-01-22 15:09:15'),
(13, 'Bebidas // Água', '2021-01-22 15:09:25', '2021-01-22 15:09:25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entregas`
--

CREATE TABLE `entregas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `imagem`
--

INSERT INTO `imagem` (`id`, `imagem`, `created_at`, `updated_at`) VALUES
(1, 'img39.jpg', '2021-01-22 15:09:50', '2021-01-22 15:09:51'),
(2, 'img40.jpg', '2021-01-22 15:10:01', '2021-01-22 15:10:01'),
(3, 'img41.jpg', '2021-01-22 15:10:09', '2021-01-22 15:10:10'),
(4, 'img42.jpg', '2021-01-22 15:10:18', '2021-01-22 15:10:19'),
(5, 'img36.jpg', '2021-01-22 15:10:28', '2021-01-22 15:10:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_17_023448_create_entregas_table', 1),
(5, '2021_01_17_023517_create_contatos_table', 1),
(6, '2021_01_18_180150_create_produto_table', 1),
(7, '2021_01_18_181232_create_categoria_table', 1),
(8, '2021_01_22_144443_create_imagem_table', 1),
(9, '2021_01_22_145050_create_texto_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome_produto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_categoria` int(10) UNSIGNED NOT NULL,
  `id_imagem` int(10) UNSIGNED NOT NULL,
  `id_texto` int(10) UNSIGNED DEFAULT NULL,
  `preco` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome_produto`, `id_categoria`, `id_imagem`, `id_texto`, `preco`, `created_at`, `updated_at`) VALUES
(1, 'YASUI 13 pçs', 1, 1, 1, 25.99, '2021-01-22 15:12:14', '2021-01-22 15:12:15'),
(2, 'UMAI 30 pçs', 1, 2, 2, 50.99, '2021-01-22 15:12:53', '2021-01-22 15:12:54'),
(3, 'Filadélfia', 2, 3, 3, 19.99, '2021-01-22 15:13:18', '2021-01-22 15:13:19'),
(4, 'Salmão sem Arroz', 2, 4, 4, 23.99, '2021-01-22 15:14:01', '2021-01-22 15:14:01'),
(5, 'Filadélfia 8 pçs', 3, 5, 5, 19.99, '2021-01-22 15:14:31', '2021-01-22 15:14:32'),
(6, 'Alaska 8 pçs', 3, 3, 6, 18.99, '2021-01-22 15:15:07', '2021-01-22 15:15:07'),
(7, 'Salmão Grelhado', 4, 1, 1, 15.99, '2021-01-22 15:15:47', '2021-01-22 15:15:48'),
(8, 'Porções de Hot', 5, 2, 2, 50.00, '2021-01-22 15:53:59', '2021-01-22 15:54:00'),
(9, 'Salmão', 6, 3, 3, 18.50, '2021-01-22 15:54:30', '2021-01-22 15:54:31'),
(10, 'Ebi Furai', 7, 4, 4, 10.99, '2021-01-22 15:55:03', '2021-01-22 15:55:04'),
(11, 'Skin', 8, 5, 5, 6.99, '2021-01-22 15:55:52', '2021-01-22 15:55:52'),
(12, 'Sunomono', 9, 3, 6, 8.00, '2021-01-22 15:56:20', '2021-01-22 15:56:21'),
(13, 'Wasabi', 10, 1, 1, 3.99, '2021-01-22 15:57:58', '2021-01-22 15:57:58'),
(18, 'Coca Cola Lata', 11, 2, NULL, 7.99, '2021-01-22 16:03:20', '2021-01-22 16:03:20'),
(17, 'Uva', 13, 4, NULL, 8.99, '2021-01-22 16:03:21', '2021-01-22 16:03:22'),
(19, 'Brahma', 12, 3, NULL, 6.99, '2021-01-22 16:03:47', '2021-01-22 16:03:48'),
(20, 'Água', 14, 5, NULL, 3.99, '2021-01-22 16:04:08', '2021-01-22 16:04:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `texto`
--

CREATE TABLE `texto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `texto`
--

INSERT INTO `texto` (`id`, `texto`, `created_at`, `updated_at`) VALUES
(1, '5 uramakis filadélfia, 4 hossomakis salmão grelhado, 4 niguiris salmão **não fazemos trocas nos combos**', '2021-01-22 16:05:51', '2021-01-22 16:05:51'),
(2, '10 uramakis filadélfia, 8 uramakis skin, 4 hossomakis salmão grelhado, 4 hossomaki alaska,  4 niguiris salmão **não fazemos trocas nos combos**', '2021-01-22 16:06:01', '2021-01-22 16:06:01'),
(3, '3 lâminas de sashimi, 3 lâminas de sashimi maçaricado, 2 gunkan com geleia de maracujá, 2 gunkinha maçaricado, 4 hossomaki filadélfia **não fazemos trocas nos combos**', '2021-01-22 16:06:11', '2021-01-22 16:06:11'),
(4, 'Sushi enrolado com nori (folha de alga), salmão, cream cheese e cebolinha ', '2021-01-22 16:06:19', '2021-01-22 16:06:20'),
(5, 'Sushi enrolado com nori (folha de alga), salmão empanado e cream cheese ', '2021-01-22 16:06:27', '2021-01-22 16:06:28'),
(6, 'Sushi enrolado com nori (folha de alga), peixe branco empanado e cream cheese ', '2021-01-22 16:06:33', '2021-01-22 16:06:34');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `entregas`
--
ALTER TABLE `entregas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`) USING HASH;

--
-- Índices para tabela `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(250));

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `texto`
--
ALTER TABLE `texto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`) USING HASH;

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `entregas`
--
ALTER TABLE `entregas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `texto`
--
ALTER TABLE `texto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
