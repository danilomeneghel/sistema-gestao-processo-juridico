-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 29-Out-2018 às 20:54
-- Versão do servidor: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `legal_insights`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_criacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `data_edicao` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `data_criacao`, `data_edicao`) VALUES
(1, 'João', 'joao@joao.com', '2018-10-28 21:19:56', '2018-10-29 02:29:30'),
(2, 'Paulo', 'paulo@paulo.com', '2018-10-28 02:01:48', '2018-10-29 02:30:45'),
(3, 'Ana', 'ana@ana.com', '2018-10-28 02:01:48', NULL),
(4, 'Juliana', 'juli@ana.com', '2018-10-28 02:01:48', NULL),
(5, 'Ana Maria', 'ana@maria.com', '2018-10-28 02:01:48', NULL),
(6, 'Ricardo', 'ricardo@ricardo.com', '2018-10-28 02:01:48', NULL),
(7, 'Karina', 'karina@karina.com', '2018-10-28 02:01:48', NULL),
(8, 'Diego', 'diego@diego.com', '2018-10-28 02:01:48', NULL),
(9, 'Leticia', 'leticia@leticia.com', '2018-10-28 02:01:48', NULL),
(10, 'Carlos', 'carlos@carlos.com', '2018-10-28 02:01:48', NULL),
(17, 'Bruna', 'bruna@bruna.com', '2018-10-29 02:31:14', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_16_190458_create_clientes_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_pedido` int(11) NOT NULL,
  `valor_risco_provavel` float NOT NULL,
  `status` varchar(20) COLLATE utf8_bin NOT NULL,
  `data_criacao` timestamp NULL DEFAULT NULL,
  `data_edicao` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tipo_pedido` (`id_tipo_pedido`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `id_tipo_pedido`, `valor_risco_provavel`, `status`, `data_criacao`, `data_edicao`) VALUES
(1, 2, 650.5, 'status1', '2018-10-29 08:46:27', '2018-10-29 18:21:51'),
(2, 1, 450, 'status2', '2018-10-29 08:46:40', '2018-10-29 18:24:56'),
(9, 4, 480, 'status3', '2018-10-29 22:06:54', '2018-10-29 22:07:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido_processo`
--

DROP TABLE IF EXISTS `pedido_processo`;
CREATE TABLE IF NOT EXISTS `pedido_processo` (
  `pedido_id` int(11) NOT NULL,
  `processo_id` int(11) NOT NULL,
  PRIMARY KEY (`pedido_id`,`processo_id`),
  KEY `processo_id` (`processo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `pedido_processo`
--

INSERT INTO `pedido_processo` (`pedido_id`, `processo_id`) VALUES
(1, 1),
(2, 1),
(9, 2),
(1, 3),
(2, 3),
(9, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `processos`
--

DROP TABLE IF EXISTS `processos`;
CREATE TABLE IF NOT EXISTS `processos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `nro_processo` varchar(40) COLLATE utf8_bin NOT NULL,
  `data_distribuicao` date NOT NULL,
  `valor_causa` float NOT NULL,
  `vara` varchar(60) COLLATE utf8_bin NOT NULL,
  `cidade` varchar(100) COLLATE utf8_bin NOT NULL,
  `uf` char(2) COLLATE utf8_bin NOT NULL,
  `data_criacao` timestamp NULL DEFAULT NULL,
  `data_edicao` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `processos`
--

INSERT INTO `processos` (`id`, `id_cliente`, `nro_processo`, `data_distribuicao`, `valor_causa`, `vara`, `cidade`, `uf`, `data_criacao`, `data_edicao`) VALUES
(1, 2, '11111', '2018-10-10', 250, 'aaaaa', 'Porto Alegre', 'RS', '2018-10-29 23:49:00', NULL),
(2, 3, '22222', '2018-10-11', 350, 'bbbbb', 'Florianópolis', 'SC', '2018-10-29 23:51:25', NULL),
(3, 7, '33333', '2018-10-12', 460, 'ccccc', 'Curitiba', 'PR', '2018-10-29 23:52:17', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipopedidos`
--

DROP TABLE IF EXISTS `tipopedidos`;
CREATE TABLE IF NOT EXISTS `tipopedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `ativo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tipopedidos`
--

INSERT INTO `tipopedidos` (`id`, `nome`, `ativo`) VALUES
(1, 'Horas Extras', 1),
(2, 'Dano Moral', 1),
(3, 'Dano Material', 1),
(4, 'Outros', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`, `provider`, `provider_id`, `access_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'admin@admin.com', '$2y$10$32P74m3wT4laGfMREyd5I.iKrfdb8FqzbkBYnACfUA2JTwFs3YXO.', NULL, NULL, NULL, NULL, '3Cu0yQyx8CURuXLozMagYqVbJcsB2QbaGkNkq3D0kIrsak54bh0MC738PS4T', '2018-10-28 02:02:42', '2018-10-28 02:02:42');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_tipo_pedido`) REFERENCES `tipopedidos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `pedido_processo`
--
ALTER TABLE `pedido_processo`
  ADD CONSTRAINT `pedido_processo_ibfk_1` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pedido_processo_ibfk_2` FOREIGN KEY (`processo_id`) REFERENCES `processos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `processos`
--
ALTER TABLE `processos`
  ADD CONSTRAINT `processos_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
