-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2023 pada 06.29
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubesweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `acaras`
--

CREATE TABLE `acaras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_acara` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_tutup` date NOT NULL,
  `biaya` double NOT NULL,
  `poster` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `acaras`
--

INSERT INTO `acaras` (`id`, `nama_acara`, `deskripsi`, `tanggal_mulai`, `tanggal_tutup`, `biaya`, `poster`, `created_at`, `updated_at`) VALUES
(1, 'similique dolor nisi', 'Ex vel excepturi fuga. Rerum deserunt dolor culpa molestiae. Debitis consequatur est officia minus.', '1996-10-03', '2003-05-13', 202.88, 'https://via.placeholder.com/640x480.png/008877?text=consectetur', NULL, NULL),
(2, 'nostrum nobis qui', 'Voluptates rerum facere maiores culpa tenetur. Eligendi et consequatur ad natus corporis est.', '2019-08-14', '2014-02-10', 413.15, 'https://via.placeholder.com/640x480.png/002200?text=autem', NULL, NULL),
(3, 'recusandae maxime veniam', 'Voluptatum aut facilis dolor totam animi id ullam. Voluptatem est earum numquam.', '1994-12-28', '2004-01-02', 384.32, 'https://via.placeholder.com/640x480.png/003344?text=autem', NULL, NULL),
(4, 'quod tempore enim', 'Aliquam soluta reprehenderit sint magni. Ea quia neque non eligendi consequatur sed facilis.', '2019-07-28', '2014-04-29', 171.01, 'https://via.placeholder.com/640x480.png/00aaee?text=velit', NULL, NULL),
(5, 'dicta ut nostrum', 'Rem saepe doloremque corrupti vel quidem ad. Natus earum voluptas qui. Sit ex molestiae qui.', '1985-11-19', '2017-02-06', 382.9, 'https://via.placeholder.com/640x480.png/001188?text=fugit', NULL, NULL),
(51, 'Acara Amal', 'acara amal yang sangat bagus', '2023-12-22', '2023-12-23', 12000, 'images/istock-916159418jpg-20220206100129.jpg', NULL, NULL),
(52, 'Konser Natal', '123', '2023-12-25', '2023-12-26', 10000, 'images/maxresdefault (1).jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_trans`
--

CREATE TABLE `detail_trans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_item` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_trans`
--

INSERT INTO `detail_trans` (`id`, `id_item`, `id_transaksi`, `jumlah`, `subtotal`, `created_at`, `updated_at`) VALUES
(12, 21, 22, 4, 48000, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gueststars`
--

CREATE TABLE `gueststars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_acara` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gueststars`
--

INSERT INTO `gueststars` (`id`, `id_acara`, `nama`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(1, 1, 'Theresa Hettinger', 'Iusto aut sunt blanditiis rerum in similique aut. Asperiores laboriosam sint consequatur qui voluptatibus debitis. Reiciendis autem delectus quia quia et nihil.', 'https://via.placeholder.com/640x480.png/008855?text=people+cum', NULL, NULL),
(2, 2, 'Maverick O\'Hara', 'Provident accusantium omnis asperiores sit velit recusandae ratione. Impedit qui consequatur repudiandae et. Qui pariatur dolores labore. Aperiam quia molestias accusantium mollitia sed alias cupiditate. Eaque in perspiciatis et sint quam est architecto.', 'https://via.placeholder.com/640x480.png/00dd66?text=people+repellat', NULL, NULL),
(3, 3, 'Rosalinda Morar', 'Cumque maxime fugiat sit quia perferendis. Voluptatem aut et aut id ex sint.', 'https://via.placeholder.com/640x480.png/005566?text=people+labore', NULL, NULL),
(4, 4, 'Karianne Bins', 'Laboriosam animi vero et et beatae sit doloribus ipsum. Maiores tempore est quis ea. A voluptatem at fugit quidem iusto laborum occaecati. Numquam saepe esse consequatur distinctio.', 'https://via.placeholder.com/640x480.png/00ccff?text=people+culpa', NULL, NULL),
(5, 5, 'Lottie Kuhic', 'Ut quasi aut ex eaque sint ullam quia corporis. Et error sed est sed voluptate ut. Quam harum veniam quis esse ea doloribus reiciendis. Omnis quo sequi quo tempora dicta nostrum quaerat.', 'https://via.placeholder.com/640x480.png/0088dd?text=people+ratione', NULL, NULL),
(11, 51, 'Carolus Seto Arianto', 'Orang yang lucu', 'images/oskdn.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(17, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(18, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(19, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(20, '2016_06_01_000004_create_oauth_clients_table', 1),
(21, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(23, '2023_12_12_021343_create_acaras_table', 1),
(24, '2023_12_12_021359_create_pendaftarans_table', 1),
(25, '2023_12_12_021443_create_transaksis_table', 1),
(26, '2023_12_12_021610_create_souvenirs_table', 1),
(27, '2023_12_12_021624_create_gueststars_table', 1),
(28, '2023_12_12_031563_create_detail_trans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftarans`
--

CREATE TABLE `pendaftarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_acara` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL,
  `tanggal_bayar` datetime NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subTotal` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `souvenirs`
--

CREATE TABLE `souvenirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_acara` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `souvenirs`
--

INSERT INTO `souvenirs` (`id`, `id_acara`, `nama`, `harga`, `deskripsi`, `jenis`, `gambar`, `stok`, `created_at`, `updated_at`) VALUES
(21, 1, 'Baju Wota', 12000, 'baju warna hitam', 'Baju', 'images/pngtree-captain-pirate-vector-mockup-of-t-shirt-print-png-image_4691419.png', 100, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `total` double NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksis`
--

INSERT INTO `transaksis` (`id`, `id_user`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 36, 216194.81, 'sold out', NULL, NULL),
(2, 37, 288735.95, 'sold out', NULL, NULL),
(3, 38, 597651.63, 'available', NULL, NULL),
(4, 39, 193683.14, 'available', NULL, NULL),
(5, 40, 564854.48, 'sold out', NULL, NULL),
(6, 41, 540081.21, 'available', NULL, NULL),
(7, 42, 476218.39, 'sold out', NULL, NULL),
(8, 43, 454479.49, 'available', NULL, NULL),
(9, 44, 567127.55, 'sold out', NULL, NULL),
(10, 45, 590897.13, 'available', NULL, NULL),
(11, 46, 125447.74, 'sold out', NULL, NULL),
(12, 47, 452609.32, 'sold out', NULL, NULL),
(13, 48, 453925.25, 'available', NULL, NULL),
(14, 49, 123357.05, 'sold out', NULL, NULL),
(15, 50, 488409.48, 'sold out', NULL, NULL),
(16, 51, 351322.35, 'available', NULL, NULL),
(17, 52, 384439.9, 'available', NULL, NULL),
(19, 54, 335501.75, 'sold out', NULL, NULL),
(20, 55, 362998.42, 'available', NULL, NULL),
(22, 58, 48000, 'Sudah Membayar', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `verify_key` varchar(255) NOT NULL,
  `active` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama_user`, `email`, `tanggal_lahir`, `password`, `no_telp`, `role`, `gambar`, `verify_key`, `active`, `email_verified_at`, `remember_token`) VALUES
(1, 'Dr. Ali Stracke V', 'jessie85@example.com', '1986-01-31', '$2y$10$BLPqN9Oc5A2uO.nEa00K3OgVNASlv.FJsNW5uHYHI24C7w2fy6va.', '240-454-8421', 'admin', 'https://via.placeholder.com/640x480.png/008899?text=dicta', 'vxkemugtuIklqmUVXOakk0hhoeLvTSCh', 0, '2023-12-20 14:57:05', 'pc0APijMk1'),
(2, 'Lilyan Welch', 'ankunding.elbert@example.net', '2003-10-30', '$2y$10$P12j0rM5i1kzZJpvrC0BEOPSXrNDrOJdH5ZYXbnEHHb1Ql6d9fj1O', '831-964-3304', 'user', 'https://via.placeholder.com/640x480.png/00bb55?text=sit', 'Klvkwd94KvWko61TWqI9YZya97yqqlAe', 1, '2023-12-20 14:57:05', 'OI0zBJc7is'),
(3, 'Athena Kirlin', 'magdalen.marks@example.com', '2000-04-12', '$2y$10$VcXQoYPamQjRf9S3PaMUfOIV1IbBOHCtuPGNV1if34pajsURpGpDu', '+1-920-231-0582', 'user', 'https://via.placeholder.com/640x480.png/0077dd?text=ipsum', 'jKJH0pE0JoHNAWrXGpuqwi0CZitEKIXF', 0, '2023-12-20 14:57:05', 'dprdP2WnJS'),
(4, 'Helga Collier', 'aubree.green@example.net', '1999-01-17', '$2y$10$4/pAnTjruxi2PV4S7oSFU.5kbdk0Zblpc4/biQsw28TWqvl9FOWlm', '512.527.5319', 'user', 'https://via.placeholder.com/640x480.png/0099ee?text=vero', 'ulfhy89qKkobkYzOM2uRhhjV6h2AKsTR', 0, '2023-12-20 14:57:05', 'cEH0hHQ3c6'),
(5, 'Sallie Murphy', 'umayer@example.net', '2004-04-06', '$2y$10$c/Tgjfh3T0ReuRM7e4LcauOX4RYADc0t0/nbUhJAUhmlI/XdIXfEe', '+1.469.889.0297', 'user', 'https://via.placeholder.com/640x480.png/008855?text=quia', 'b7txBPdmZkYJpVLvNNerQKh8emNnAuAP', 1, '2023-12-20 14:57:05', 'EbWptR5wqj'),
(6, 'Mr. Santino Kunde', 'runte.angel@example.com', '2017-07-18', '$2y$10$ZaoFl4C34awAizALMZuSBO69zNkQyZGHMlCN0bwotyRvCMUc9xKjy', '781.518.1862', 'user', 'https://via.placeholder.com/640x480.png/00ff22?text=neque', 'UxNvjzuIxWR9DL0pyPAPp4Nmo4seNhWV', 0, '2023-12-20 14:57:06', 'h2KUTEBeJ3'),
(7, 'Dr. Viola Davis IV', 'jwiza@example.org', '2022-06-27', '$2y$10$/VKfDvmoQhG.Tj0RCV8hSuBIZVEfzxTs0fjXsnpM6OMvzkuNql1DC', '(434) 955-5947', 'user', 'https://via.placeholder.com/640x480.png/005500?text=dolorem', '4XdrBdXi9cGMhkmQOKVDKmuwOhAiacON', 1, '2023-12-20 14:57:06', 'pGUzmHzEdN'),
(8, 'Kiarra Veum', 'jennifer36@example.org', '2003-08-09', '$2y$10$z5ad.GFZgq13zd75KElgfegw6Yr5AjwGOdWbYI70T.AgtMz4kfF9C', '+1-678-878-1996', 'user', 'https://via.placeholder.com/640x480.png/00eedd?text=voluptas', 'jOw84klRzGkhMYYn5IkyIso2zCrT1fUe', 1, '2023-12-20 14:57:06', 'DoFOpsHDVa'),
(9, 'Joshuah O\'Reilly', 'chermiston@example.com', '1979-06-12', '$2y$10$oC2KoOADpJ3ACK.4gaGiWuxy.yMTOxKl4hkmPoUPnLQc0isGGigP.', '442-609-9749', 'user', 'https://via.placeholder.com/640x480.png/0022ff?text=et', 'zZZQQVopR61hvLIdZEl5ekkn558kZmP1', 1, '2023-12-20 14:57:06', 'rhlDcYnZj5'),
(10, 'Prof. Cristobal Mills', 'goodwin.misty@example.net', '2020-05-06', '$2y$10$UVxedtOBJv04GeGaNUMX8.NPswVClNxwbpHpJrhpxatowXmFLTngy', '534-675-0882', 'user', 'https://via.placeholder.com/640x480.png/0066ff?text=et', 'T57WybbPRhSmatNnumwqmmnGXpe0GRC0', 0, '2023-12-20 14:57:06', 'uJvbIF26zG'),
(11, 'Mrs. Pearline McDermott MD', 'kirlin.beau@example.org', '2003-11-20', '$2y$10$CxTW6Rjubs.pw9R.YiFFy.ZxG4hmldeNpMGvduJNL7W50KJsir5q2', '859-625-6567', 'user', 'https://via.placeholder.com/640x480.png/00dd77?text=molestiae', 'HnAx5HCbGpVPIGZMmCa9tpaYcAS9Uwu2', 0, '2023-12-20 14:57:06', '4RyR3BoBQN'),
(12, 'Madisen Homenick', 'batz.nettie@example.net', '1981-11-23', '$2y$10$jhLyzaHv.MSfXJGDU3I6cOufFfCbUa5zwgyKEvzH9nvyCGjJ.KTeK', '+1-747-480-9988', 'user', 'https://via.placeholder.com/640x480.png/00eedd?text=exercitationem', 'UYh9cl74ezVsmIf6nJr76NwBqTIBJ8H2', 1, '2023-12-20 14:57:06', '0LU0SQLasD'),
(13, 'Brady Koss', 'karine.padberg@example.com', '1973-05-23', '$2y$10$/fnfwAwM9W3971KnSJDyw.5Zca1LpuGtkZ5SDO6jXLN2L.FuLjDqW', '551-717-6668', 'user', 'https://via.placeholder.com/640x480.png/0044ee?text=possimus', 'aq4n0Ny3cr3lBopB1Oplycb9ZA8r251c', 0, '2023-12-20 14:57:06', '70Qu7JEZ7N'),
(14, 'Dr. Hazel McDermott PhD', 'derrick49@example.net', '2021-02-03', '$2y$10$6pZkCDvu37FCCbOjPRsiF.Z9gptckLTPvWv9H0lkelWEXh/CloHNG', '+1-731-453-7461', 'user', 'https://via.placeholder.com/640x480.png/005555?text=iure', 'EPs0ficioiSKnrtXTRAGHuAI0xufBFpP', 1, '2023-12-20 14:57:06', 'UwVUyCGB9Q'),
(15, 'Ellen Considine', 'bosco.leonora@example.com', '1974-12-26', '$2y$10$O3PmMDrMQAW/8F.kDsbYK.kBvu4xM.gm0keAkmQ.H4ji485ZGvQsG', '+1.240.516.4463', 'user', 'https://via.placeholder.com/640x480.png/009955?text=modi', '2amWUbApeX3SRIybJ0Thb39oajop69JL', 0, '2023-12-20 14:57:06', 'KDe47V0xRU'),
(16, 'Ms. Natalie Kassulke DVM', 'gillian.casper@example.net', '2000-10-26', '$2y$10$jOyXrtQFF1r9nsqXizWP.ewiBmc555JKJ/GoHLVt5aBdbZAvdS7Em', '1-412-240-5331', 'user', 'https://via.placeholder.com/640x480.png/009977?text=sint', 'pZPVRN6Z346fdprCcV2IfI00zRRvsqiF', 1, '2023-12-20 14:57:06', 'aA0fpyOwA9'),
(17, 'Liam Schmeler', 'eric.terry@example.net', '1991-11-14', '$2y$10$gLNtv3MXAEWiTaZ4IY73Mu8HNVyxG9YjqsaPkvJuZLnYs4yktOlyC', '(262) 323-2322', 'user', 'https://via.placeholder.com/640x480.png/000033?text=voluptate', '2VC69nVzDRBQckPRuWfv8F6xv3A4eM0N', 0, '2023-12-20 14:57:06', 'NeRdaKHqjA'),
(18, 'Devyn Turner', 'esatterfield@example.com', '2005-05-09', '$2y$10$N5WXeXVUZAsL6ILq4YrUoeGNF45UD0xEcs6Iz6QyRD5nbNmPw5Pym', '256-314-4555', 'user', 'https://via.placeholder.com/640x480.png/00aa77?text=optio', 'f0Slsdt2gPyWiA1awPMq5cGqlAMojKmg', 1, '2023-12-20 14:57:06', '42o91m3Ccu'),
(19, 'Ms. Ethelyn Jaskolski', 'gboyer@example.net', '1993-03-23', '$2y$10$lHOCgMyVEQ7Kw9wmmp4/O.kQgT/NgSwn0QubeC0DoDZeIrw68gDsm', '+1 (631) 612-3871', 'user', 'https://via.placeholder.com/640x480.png/00dd55?text=possimus', 'tgIq6FUe0JVlHIn1xPsrokTSiudzs98Q', 1, '2023-12-20 14:57:06', 'L2VWqqdtX6'),
(20, 'Tommie Greenfelder', 'lowe.jayson@example.org', '1976-08-11', '$2y$10$2UPW90V/v8Z6CqlcX1xzEe/Fc6oooJQYOz1X3JRgfeCOhzaugQ5.y', '586-339-8551', 'user', 'https://via.placeholder.com/640x480.png/00bb22?text=voluptatem', 'AjRUbaP8OvVqi9PqXKiD1iPznM9TY1WS', 0, '2023-12-20 14:57:06', 'i2LkNt3Ln0'),
(21, 'Prof. Daisha Larkin I', 'kihn.mayra@example.org', '1972-07-29', '$2y$10$sajKVohkAcV88bS9XdRbB.fhMLoaQPXdeYGRswMDFYivqAT8Lp.Gu', '(678) 889-8505', 'user', 'https://via.placeholder.com/640x480.png/008800?text=unde', 'aw9WjoPUlX3pKGPwiN6BwRPWdWpkB90z', 1, '2023-12-20 14:57:06', '8QTPohTVV6'),
(22, 'Greta Hermann', 'rogahn.monty@example.org', '1999-06-25', '$2y$10$Z/ohteCke6qNiIxAxsM/W.uv2ijVAX1uyi7QTfJmZFUrWb7EDAAuq', '1-931-428-8250', 'user', 'https://via.placeholder.com/640x480.png/000044?text=quibusdam', 'Sn3JSAADjlodPDiqnMpkDdoV87Ldwh42', 1, '2023-12-20 14:57:06', 'iTtcYZRxSD'),
(23, 'Lenna Swaniawski IV', 'freda.balistreri@example.org', '2014-11-17', '$2y$10$eXh58bxNYGt0DCOfyBF/9OKZddbkAOmxqjHYHWWTfcjzuHziBAYde', '725-850-7087', 'user', 'https://via.placeholder.com/640x480.png/00ffdd?text=et', 'fniA5ldcaPajbK3yMrQkrrcSqfsZvdui', 1, '2023-12-20 14:57:06', '3YNdWVFO2A'),
(24, 'Miss Chanel Fahey PhD', 'jkris@example.net', '1987-02-25', '$2y$10$USsjNmusHZZ.d8Kb5aY0u.IKLeHnh1VW4HsCBL0bNs9/uHjyobfoi', '1-585-438-2118', 'user', 'https://via.placeholder.com/640x480.png/0000aa?text=sit', 'Gj4AKWI9JXsV55Oz4UNrDWlcii4BwUsu', 1, '2023-12-20 14:57:06', '7Or6xlFnpB'),
(25, 'Dr. Rodrigo Carroll', 'connelly.selmer@example.net', '1982-09-27', '$2y$10$hGb2.bEfnJrzLksWZYlWOOL8Msqpm2TEUvW4EAvUdOYXll04/zfEy', '+12406998412', 'user', 'https://via.placeholder.com/640x480.png/0044bb?text=aut', 'iNJQ2s7w1uB6OF5IeC3qd48jUzlN6q2K', 1, '2023-12-20 14:57:06', 'FcRuen4wY5'),
(26, 'Prof. Vanessa Powlowski V', 'frami.jermain@example.com', '1980-08-26', '$2y$10$C/.JZfow3xDLvTIXq.5xdeLa5IkR9.P5rYnb5FtTeGwXka0m2REzG', '435.873.9274', 'admin', 'https://via.placeholder.com/640x480.png/003388?text=officiis', 'VovhkvEAXPGuBrJk9sgUDCVQPpGjDw45', 1, '2023-12-20 14:57:07', 'qXD1rsqzgN'),
(27, 'Hugh Sauer Jr.', 'iheathcote@example.com', '1997-12-16', '$2y$10$iPhKfEExCtGwjKR9KxgMoOCMnrOGPvQuWdBBqOoKj.H78j8KlTi2m', '1-484-271-6959', 'admin', 'https://via.placeholder.com/640x480.png/004411?text=hic', 'AtoJaX4u0hxLqvuOOGK8OAcXkOnDGp3f', 0, '2023-12-20 14:57:07', 'C73voxCWZg'),
(28, 'Mikayla Graham', 'vprice@example.net', '1972-01-21', '$2y$10$wHzm.FIC.RrbTXeSdud6ZeQjYQy5EETfsDX9scNvZbWQbGmtQS8Ru', '(406) 845-9685', 'admin', 'https://via.placeholder.com/640x480.png/00ddaa?text=cum', 'kELsgRcb4IiLkmqpVSij0I5sQyPLBdJA', 1, '2023-12-20 14:57:07', 'Il4yR5NnL7'),
(29, 'Carolyn Bins Jr.', 'itzel19@example.com', '2007-03-01', '$2y$10$IAuaNuGPw.Tw5xr5E6DTNeSAeLREHj0A8Tf3AeSYqe9NAZPakKUbW', '484-646-5487', 'admin', 'https://via.placeholder.com/640x480.png/002233?text=et', 'xsyu1Dk879hsaaTYdfOYTP8azzwZf7BV', 0, '2023-12-20 14:57:07', 'sr0kyTTxqr'),
(30, 'Dr. Buddy Lesch DDS', 'dickens.alford@example.org', '1990-01-28', '$2y$10$t3OUfHl8Aps2hVMG.4QRce/Gb0n1bEJUxC3silFfyU3ZkvgQ7hOcC', '+1.276.591.6191', 'user', 'https://via.placeholder.com/640x480.png/00cc88?text=repellendus', 'EsU660HMogpJV0yzbMOnigJiYWkP8Qhr', 1, '2023-12-20 14:57:07', 'aP6coQccSR'),
(31, 'Hettie Bailey Jr.', 'nienow.bobby@example.net', '2014-03-18', '$2y$10$o4Zj.MZgBSGNMNvuM436jefC5yxMFGQuy0vWSrf1d62pyxEgzs6OC', '505-401-1541', 'user', 'https://via.placeholder.com/640x480.png/003355?text=ad', 'KNbZy9ExlRtFTmppohA1zCc8sqPFn2AU', 0, '2023-12-20 14:57:07', 'QLvoji30uv'),
(32, 'Cecile Kerluke', 'etorp@example.net', '1976-03-17', '$2y$10$2lGGakwrnSsXe2sWrlAqZ.a3Vg.Sq1fng4hrvEJTLzHi67Sgw9S06', '820.245.2328', 'user', 'https://via.placeholder.com/640x480.png/00ffff?text=cum', 'o3cgtrWA1iHNiBGAzY3GkktRLNEbCOff', 0, '2023-12-20 14:57:07', 'EqLJgK6XeE'),
(33, 'Laurianne Hodkiewicz', 'barton.dillon@example.com', '2002-07-09', '$2y$10$INAUD.XsWaNfDx30wPUyGe2hVQTvXFxw2C.tOpo8Z4ukZLL9jeCSW', '540-959-7750', 'user', 'https://via.placeholder.com/640x480.png/00cc11?text=omnis', 'pY7m2tpWKvZi3aQ5KXb6Da7RPIKmaIzR', 1, '2023-12-20 14:57:07', 'EXvaYC1H1B'),
(34, 'Hipolito Blick DDS', 'shahn@example.org', '1986-09-05', '$2y$10$1lG436D4..4RNQZBwl223.v3hdcqip651.m7q0zrOBqaJhkK14bXW', '1-551-299-4251', 'admin', 'https://via.placeholder.com/640x480.png/00ccdd?text=unde', 'szYkvOrF94gHR6efnShVfYvwxCYzTQRS', 1, '2023-12-20 14:57:07', '0hd9sPhVSv'),
(35, 'Alexandre Christiansen', 'stan76@example.net', '2004-10-04', '$2y$10$6oMlMOKgSlbe1TZH66UEveCMaHz6JuJFETcgtAeAM7XOxp2RGAQq6', '1-813-944-8813', 'user', 'https://via.placeholder.com/640x480.png/00aaee?text=impedit', '605laXwZlwtocrgntzrLNcFsua9JuG95', 1, '2023-12-20 14:57:07', 'WvEtqwzR7V'),
(36, 'Brionna Christiansen', 'felicity96@example.org', '1999-08-06', '$2y$10$xvD/Nza5sGLtGOpGB/NVkun3y3ByGx8myY8.JjjI.wxms56IUn6gi', '+1.772.437.2815', 'user', 'https://via.placeholder.com/640x480.png/00ffee?text=omnis', 'PiOOLZvFoeaH88B0VY7C2RTJMMxmIlGU', 1, '2023-12-20 14:57:07', '7rK3FrvQjc'),
(37, 'Rosario Collier', 'flatley.cynthia@example.org', '1986-03-07', '$2y$10$Zz2KrywmYXE1ztlQD4cN.eoGIrqiK0tgsZFrJHPyfli7ZrYhjMJhm', '1-283-975-2469', 'user', 'https://via.placeholder.com/640x480.png/0011ff?text=minima', 'DxfMMh0uN0zHenrHKr2DMAHuRvgekJ6v', 1, '2023-12-20 14:57:07', 'DSvQg0Xldl'),
(38, 'Carlee Stiedemann', 'darrick14@example.com', '1972-04-22', '$2y$10$lW4lYEWm5RVzCRv5eQRkR.d282XwhiwAUkHinQR3UY3nNFTiuUVJa', '747-449-0964', 'user', 'https://via.placeholder.com/640x480.png/006655?text=molestiae', '0YuF2l5OdT949uE7Hg2Hxu7tU48sur5M', 1, '2023-12-20 14:57:08', '7gbLr2wNDw'),
(39, 'Lucienne Powlowski', 'adelle.nitzsche@example.com', '1988-05-12', '$2y$10$PFO9oZ8QyXztUSljwbMblua5qdOVtRV.b.l9K.ewdoqODcUPDiHdy', '+1-619-584-7931', 'admin', 'https://via.placeholder.com/640x480.png/0033bb?text=quia', 'jIIJsFj16aZD89T99fDhaVcx1MNjtReE', 1, '2023-12-20 14:57:08', 'p74x8rQqCR'),
(40, 'Mossie Goodwin', 'ybogisich@example.com', '1974-09-05', '$2y$10$9Xm.Vh512CWWqZyXAoZXHeGiPK9cQlXai.uCYnWQsY8czxHO89Jja', '(801) 443-2391', 'user', 'https://via.placeholder.com/640x480.png/002211?text=doloremque', '9Mb1a1zuGsu5oihg1Lq0gADsYsGVbQtC', 0, '2023-12-20 14:57:08', 'IzGuOW0y32'),
(41, 'Johan Renner', 'julian76@example.org', '1974-03-16', '$2y$10$Q7nfaXq1EchSmdX.EONiuuG9nJNiuGndT.p1c5rcJUzAQ0IzdRw4O', '626-350-9323', 'admin', 'https://via.placeholder.com/640x480.png/0044ee?text=aut', '6VXcNLh14M4TYws1UZbyEDyvOsrIt8tp', 0, '2023-12-20 14:57:08', 'mlpxC2xrVY'),
(42, 'Carey Bode', 'kristy.borer@example.net', '1991-01-03', '$2y$10$SbiJ9jkvZ9gkMGDArZTXv.iUuOBEHG7EmG.nORA1L39O0MqIAa.r.', '(234) 914-8696', 'user', 'https://via.placeholder.com/640x480.png/0055ff?text=labore', 'JyAFeRKq9K3nclL3aWy1lrIc4sNdzqEs', 0, '2023-12-20 14:57:08', 'Rr1Ylxi7hz'),
(43, 'Elnora Ebert', 'lamar.morissette@example.net', '1998-04-27', '$2y$10$t5my2xkup9tTSXqU12Fezu2vwrrc/6mycSM.hU2MYeOwdb.7BkjG6', '820-961-7728', 'admin', 'https://via.placeholder.com/640x480.png/00aaee?text=eius', '43pJGT6KItcUqT5mfsJwjRkUbqFSOTPC', 0, '2023-12-20 14:57:08', 'w4Z7q5phDw'),
(44, 'Susie Breitenberg', 'marilou.farrell@example.com', '2010-08-01', '$2y$10$h1vIrqYu/UGdX7LFCZ4sJeudT1pe0tA/X7R1qNVi1f5vmv.XdztE2', '+1-571-438-0233', 'user', 'https://via.placeholder.com/640x480.png/002222?text=sit', '07gRcX4jlwnFPCFRPF1QQp1DQQwV7JB4', 1, '2023-12-20 14:57:08', 'T4ZMStm5WX'),
(45, 'Krystina Spinka', 'leilani.jones@example.org', '2021-01-23', '$2y$10$ewioHKDaaN1be75FwwLZYuegGxxYJnXJ7YGx7.PymHx8Q2QoXUd1C', '539-807-4316', 'admin', 'https://via.placeholder.com/640x480.png/003377?text=et', 'wM1Igwh1bOW2CofscWgXGROJiAB9cjEu', 0, '2023-12-20 14:57:08', 'uBFx7ZPUmk'),
(46, 'Glenda Marquardt IV', 'tiara.wilkinson@example.net', '1983-03-22', '$2y$10$G7EpRb9kN/ShGUC8TlxZ1OYoxhT6l93WsdtlkJ77wftwHXqTREViS', '539-907-7463', 'admin', 'https://via.placeholder.com/640x480.png/00aaaa?text=tenetur', 'G9kfPJ48IwRn4ySvi1Tn8T0fdKpQX93O', 0, '2023-12-20 14:57:08', 'LRpgKLttt0'),
(47, 'Stan Romaguera II', 'mluettgen@example.com', '1980-08-25', '$2y$10$T8GIHOfeppokV/0WY3bQL..3cNextH4.q2aZhiQpGYcLrvWi4g1lK', '+1-551-375-4961', 'user', 'https://via.placeholder.com/640x480.png/0000ee?text=minus', 'a8POtPGQfOwmTI1NrxyDAUGh86ujRFpr', 1, '2023-12-20 14:57:08', 'yqxQm0SjT7'),
(48, 'Mr. Chad Parisian DVM', 'leland28@example.org', '1971-03-15', '$2y$10$RaLy8j8oHsTBjTNBEZ5.r.ozJE9NXuq1/6ApT2pR8wodduywQbW62', '+17315958070', 'user', 'https://via.placeholder.com/640x480.png/00ddee?text=mollitia', 'tDseLrn6xyWILEW0og9qYk6o6P4BIPcn', 1, '2023-12-20 14:57:08', '6LT4GuSEH1'),
(49, 'Bobbie Romaguera', 'hermann.fernando@example.net', '2007-04-30', '$2y$10$4KodKmB6faaZKAb5Lzah6ODiG3u1bk3NkU1LUYMDAhJWlFl3/suWq', '+1-304-463-0961', 'user', 'https://via.placeholder.com/640x480.png/00bb99?text=et', 'mak0w39dE4JNnhWUZ1rA45pcAk2kEYyH', 1, '2023-12-20 14:57:08', 'WBqLSL6YuH'),
(50, 'Ms. Eleanora Heidenreich Sr.', 'waldo.kohler@example.org', '1998-12-17', '$2y$10$izfFxT7Cdi07ohcPhsaBz.1UlfDK4azKpDr3SHmtUafn3w1RtAC1O', '+1-364-281-9929', 'user', 'https://via.placeholder.com/640x480.png/0011bb?text=similique', 'R4P7qeIdkcSAl7Arj7q9UGMAZzbeal1q', 0, '2023-12-20 14:57:08', 'IHofl1yqNx'),
(51, 'Madalyn Murray Jr.', 'hershel.kilback@example.org', '2013-12-16', '$2y$10$IoekmnKUkbafGV7eXm/mVuDUW3UjJIKHycvbl2omBLRcvZvjjh9iK', '717.350.4371', 'user', 'https://via.placeholder.com/640x480.png/0066aa?text=voluptas', '6xqLcsRy8A7cX2TroF9rBmfzZ60qZo4n', 0, '2023-12-20 14:57:08', 'aL3eVQf0dq'),
(52, 'Marilie Heathcote', 'ptoy@example.org', '2014-04-09', '$2y$10$CXO6U7AZH6ktjVwdeFK.WeMIUf4YLSFjKQT2AFF0OsrrjCxqRTSZ6', '+1-857-796-2106', 'admin', 'https://via.placeholder.com/640x480.png/00cc77?text=ut', 'hx3IKYdIBk3c9FpeLlLipbU6EBp8Q2jO', 1, '2023-12-20 14:57:08', 'kr0MsbVlUb'),
(54, 'Clyde Kemmer', 'clifford.wiegand@example.com', '1982-09-16', '$2y$10$9fK2v460UW.yN9DYZeyWc.GyM/ctM/SZpge6WpHaLkOkN1prboD5y', '609.889.8615', 'admin', 'https://via.placeholder.com/640x480.png/0000dd?text=voluptatem', 'yVl1UzTbNxsFXZQIgmxEs8SkWnw7Td7A', 1, '2023-12-20 14:57:09', 'lurqeJf5DD'),
(55, 'Baylee Becker Sr.', 'lesch.elsa@example.org', '1995-11-17', '$2y$10$9RX4nrv87mXJ.AJNBlXw4uceyuwXZ5hgC5hv5CNinCpU1HiZN3EhO', '854-517-0205', 'admin', 'https://via.placeholder.com/640x480.png/00eedd?text=non', 'GgxHgIuczBRIZaVZtjnLsx57JMhLZvnd', 1, '2023-12-20 14:57:09', 'qf15M8b2YH'),
(58, '123', 'joshuapuniwan03@gmail.com', '1234-12-12', '$2y$10$ULtuJ8RRDzdDDTQp.5JLUOm.8C0oj1vuuzBLY9i9X99R3rHwzLDC2', '12345678909', 'user', 'images/2.png', 'aTxswAa5um8yHmwGzlc1F7IfjfsAeBND', 1, '2023-12-20 22:14:58', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `acaras`
--
ALTER TABLE `acaras`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_trans`
--
ALTER TABLE `detail_trans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_trans_id_item_foreign` (`id_item`),
  ADD KEY `detail_trans_id_transaksi_foreign` (`id_transaksi`);

--
-- Indeks untuk tabel `gueststars`
--
ALTER TABLE `gueststars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gueststars_id_acara_foreign` (`id_acara`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendaftarans_id_user_foreign` (`id_user`),
  ADD KEY `pendaftarans_id_acara_foreign` (`id_acara`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `souvenirs`
--
ALTER TABLE `souvenirs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `souvenirs_id_acara_foreign` (`id_acara`);

--
-- Indeks untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksis_id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `acaras`
--
ALTER TABLE `acaras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `detail_trans`
--
ALTER TABLE `detail_trans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `gueststars`
--
ALTER TABLE `gueststars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pendaftarans`
--
ALTER TABLE `pendaftarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `souvenirs`
--
ALTER TABLE `souvenirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_trans`
--
ALTER TABLE `detail_trans`
  ADD CONSTRAINT `detail_trans_id_item_foreign` FOREIGN KEY (`id_item`) REFERENCES `souvenirs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_trans_id_transaksi_foreign` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksis` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `gueststars`
--
ALTER TABLE `gueststars`
  ADD CONSTRAINT `gueststars_id_acara_foreign` FOREIGN KEY (`id_acara`) REFERENCES `acaras` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pendaftarans`
--
ALTER TABLE `pendaftarans`
  ADD CONSTRAINT `pendaftarans_id_acara_foreign` FOREIGN KEY (`id_acara`) REFERENCES `acaras` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pendaftarans_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `souvenirs`
--
ALTER TABLE `souvenirs`
  ADD CONSTRAINT `souvenirs_id_acara_foreign` FOREIGN KEY (`id_acara`) REFERENCES `acaras` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD CONSTRAINT `transaksis_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
