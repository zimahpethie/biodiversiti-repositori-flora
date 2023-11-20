-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2023 at 05:10 PM
-- Server version: 8.0.34
-- PHP Version: 8.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodiversiti-repositori`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_10_174553_create_plants_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scientific_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kingdom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `family_` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `species` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`id`, `image`, `name`, `scientific_name`, `kingdom`, `divisio`, `class`, `order_`, `family_`, `genus`, `species`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'plants/BRyhvgHVB4VkUqI4QdG00RH8YyQGNc2xT7NgbSzU.jpg', 'Akar Kekait', 'Uncaria cordata (Lour.) Merr. var. cordata', 'Plantae', 'Magnoliophyta', 'Magnoliopsida', 'Gentianales', 'Rubiaceae', 'Uncaria', 'U. cordata', 'Tumbuhan menjalar meluas ini tergolong dalam famili Rubiaceae dan mempunyai permukaan kulit buah yang berbulu. Tumbuhan pepanjat ini boleh dijumpai di kawasan hutan tanah rendah. Secara tradisional, daunnya dipercayai boleh merawat sakit kulit, demam dan sakit kepala dan air yang terkandung di dalam batangnya boleh diminum. Antara bahan fitokimia yang ditemui di dalam tumbuhan ini adalah seperti saponin dan fenolik.', '2023-11-20 08:18:33', '2023-11-20 08:18:33'),
(2, 'plants/UHid0ulQIhsCwrClVSEPPC92B8MLgbynzW8WqHzJ.jpg', 'Akar Keladi', 'Pothos curtisii Hook. f.', 'Plantae', 'Magnoliophyta', 'Liliopsida', 'Alismatales', 'Araceae', 'Pothos', 'P. curtisii', 'Tumbuhan menjalar atau pepanjat yang jarang ditemui ini tergolong dalam famili Araceae. la hidup meliar di kawasan hutan tanah rendah dan hutan gunung. Secara tradisionalnya, tumbuhan ini dipercayai boleh merawat sakit perut dengan melilitkan batang tumbuhan ini pada badan. Selain itu, ia dikatakan mempunyai bahan antikanser dan antibakteria. Antara bahan fitokimia yang ditemui adalah seperti fenolik.', '2023-11-20 08:19:59', '2023-11-20 08:19:59'),
(3, 'plants/tVOwstSa6gkLqcteRu1eU25EV6Ps5SwqMixOOzZV.jpg', 'Akar Mempelas', 'Tetracera indica (Christm. & Panz.) Merr.', 'Plantae', 'Angiospermae', 'Magnoliopsida', 'Ericales', 'Dilleniaceae', 'Tetracera', 'T. indica', 'Tumbuhan jenis menjalar ini tergolong dalam famili Dilleniaceae dan mempunyai struktur tepi daun yang bergigi. Bunganya berwarna putih kemerahan dan buahnya berwarna perang gelap atau hitam. Tumbuhan ini hidup meliar di kawasan terbuka dan pinggir hutan di kawasan hutan tanah rendah. Antara kegunaan tradisional yang dipercayai seperti daun dan akar ditumbuk dan digunakan untuk merawat masalah kegatalan kulit. Selain itu, daunnya juga digunakan untuk merawat demam dan darah tinggi. Lagi, tekstur daunnya yang kasar juga digunakan sebagai kertas pasir untuk menggilap sesuatu barang dan batangnya digunakan untuk membuat tali dan terdapat kandungan air di dalam batangnya yang boleh diminum. Kandungan bahan fitokimianya mempunyai saponin dan fenolik.', '2023-11-20 08:22:14', '2023-11-20 08:22:14'),
(4, 'plants/vtB9lDRihiMbuluwFKwg4O6gdyO54vkBi5vY7P9z.jpg', 'Akar Mempisang', 'Uvaria grandiflora Roxb. ex Hornem. var. grandiflora', 'Plantae', 'Angiospermae', 'Magnoliopsida', 'Magnoliales', 'Annonaceae', 'Uvaria', 'U. grandiflora', 'Tumbuhan pepanjat yang tergolong dalam famili Annonaceae dan mempunyai permukaan batang muda, tangkai daun serta daun yang berbulu. Selain itu, daunnya tersusun secara berselang dan permukaan atas dan bawah daun masing-masing berwarna hijau gelap dan hijau muda. Bunganya pula berbau wangi dan berwarna kekuningan. Akar mempisang ini boleh dijumpai di hutan tanah rendah di Semenanjung Malaysia. Tumbuhan ini dipercayai boleh merawat sakit perut, demam, barah payu dara dan paru-paru serta penyakit kulit dengan mengunakan daun dan akarnya. Kandungan bahan fitokimia yang ditemui seperti saponin, alkaloid dan fenolik.', '2023-11-20 08:23:37', '2023-11-20 08:23:37'),
(5, 'plants/TNuThfGJ9dhu7ibt7P3YJ4seEu9ZmVd7Ipfjakop.jpg', 'Akar Resdung', 'Epipremnum giganteum (Roxb.) Schott', 'Plantae', 'Angiospermae', 'Magnoliopsida', 'Magnoliales', 'Annonaceae', 'Uvaria', 'U. grandiflora', 'Tumbuhan jenis pepanjat boleh mencapai sehingga 20 sentimeter panjang ini tergolong dalam famili Araceae. Daun tersusun secara berselang dan berwarna kuning. Batang tebal dan dilitupi dengan parut daun yang menonjol. Buah berbentuk beri berwarna hijau cerah dan bertukar warna merah ketika masak. Tumbuhan ini boleh dijumpai di atas batu dan pokok di kawasan hutan tanah rendah dan bukit. Secara tradisionalnya digunakan untuk menghasilkan anak panah beracun. Lagi, daunnya digunakan untuk merawat malaria, pembengkakan dan sakit sendi. Terdapat bahan fitokimia seperti fenolik di dalam tumbuhan ini.', '2023-11-20 08:24:51', '2023-11-20 08:24:51'),
(6, 'plants/HHqwt1NgLqjZEoblx8d3J2v5yJLMkACpizCxWGoG.jpg', 'Akar Sebasa Itam', 'Agelaea borneensis (Hook. f.) Merr.', 'Plantae', 'Angiospermae', 'Magnoliopsida', 'Malpighiales', 'Salicaceae', 'Agelaea', 'A. borneensis', 'Tumbuhan jenis memanjat ini tergolong dalam famili Connaraceae. Saiz daun pada hujung ranting lebih besar daripada daun di tengah ranting, Bunga dan buahnya masing-masing berwarna putih dan merah kejinggaan. Tumbuhan pepanjat ini boleh dijumpai di kawasan hutan tanah rendah dan dipercayai boleh merawat penyakit keradangan. Selain itu, daunnya digunakan untuk merawat luka, demam. lelah, demam kuning dan dijadikan tonik selepas bersalin. Kandungan fitokimianya adalah seperti saponin, alkaloid dan fenolik.', '2023-11-20 08:27:28', '2023-11-20 08:27:28'),
(7, 'plants/56uDsoo6xeVQTiTRp6YfFEpbFPiVulbl7j5WJiKU.jpg', 'Akar Sekunyit', 'Coscinium fenestratum (Gaertn.) Colebr', 'Plantae', 'Angiospermae', 'Magnoliopsida', 'Ranunculales', 'Menispermaceae', 'Coscinium', 'C. fenestratum', 'Tumbuhan jenis pepanjat berbatang berwarna. kuning jika dipotong tergolong dalam famili Menispermaceae. Bunga. dan buahnya masing masing berwarna kuning muda dan kekuningan coklat muda. Tumbuhan ini boleh dijumpai di kawasan hutan tanah rendah dan dipercayai terdapat bahan antioksida yang boleh merawat barah. Selain itu, air rebusan akar dan batang dijadikan losyen untuk merawat ruam panas dan akarnya untuk merawat luka.', '2023-11-20 08:29:03', '2023-11-20 08:29:03'),
(8, 'plants/mR2rzcfdlSKSh1mYLpGuUPIr9VPBQIzrok7gBcRO.jpg', 'Asam Gelugor', 'Garcinia atroviridis Griff. ex T. Anderson', 'Plantae', 'Angiospermae', 'Magnoliopsida', 'Malpighiales', 'Clusiaceae', 'Garcinia', 'G. atroviridis', 'Pokok yang berketinggian sehingga 27 meter dan 70 sentimeter lilitan batang ini tergolong dalam famili Clusiaceae. Susunan daunnya setentang, permukaan atas daun hijau gelap berkilat dan buah besar hampir berbentuk bulat berwarna kuning-oren ketika masak. Pokok ini boleh ditemui di hutan tanah rendah dan hutan gunung serta kadang-kadang ia ditanam, Buah dan daun serta pucuk daun muda boleh dimakan yang mampu menurunkan tekanan darah tinggi. merawat kencing manis, berat badan berlebihan, hilang selera makan dan sakit jantung. Selain itu. tumbuhan ini digunakan di dalam masakan iaitu bahagian buahnya. Lagi, jus daripada daun digunakan oleh wanita selepas melahirkan anak. Rebusan daun dan akar digunakan untuk mengubati sakit telinga. Buahnya yang dic dengan cuka digunakan dalam losyen untuk wanita selepas berpantang. Bahan fitokimia yang terdapat di dalam tumbuhan ini adalah seperti saponin dan fenolik.', '2023-11-20 08:30:29', '2023-11-20 08:30:29'),
(9, 'plants/yP86LpZ9DAWat5r2fHODWJrua7sY35oALmXz5Lv2.jpg', 'Balik Angin', 'Mallotus barbatus Müll.Arg.', 'Plantae', 'Angiospermae', 'Magnoliopsida', 'Malpighiales', 'Euphorbiaceae', 'Mallotus', 'M. barbatus', 'Shrub atau pokok kecil yang boleh mencapai ketinggian hingga 6 meter ini tergolong dalam famili Euphorbiaceae. Mempunyai susunan daun berselang-seli dan bunga serta buahnya masing masing ber kuning dan hitam. Tumbuhan ini dapar ditemui di kawasan hutan sekunder dan di kawasan hutan batu kapur. Antara kegunaan tradisional bagi tumbuhan ini adalah seperti dapat merawat sakit perut. memulas dan perut kembung, Bahan fitokimia yang terdapat di dalam tumbuhan ini adalah seperti alkaloid, saponin dan fenolik.', '2023-11-20 08:33:06', '2023-11-20 08:33:06'),
(10, 'plants/x9wtHj1Q5LYg9gqBVS4lbZr3hMnuEQaJVy4p7Enw.jpg', 'Bayur Bukit', 'Schoutenia accrescens (Mast.) C. H. Curtis ssp. accrescens', 'Plantae', 'Angiospermae', 'Magnoliopsida', 'Gentianales', 'Apocynaceae', 'Schoutenia', 'accrescens', 'Pokok yang boleh mencapai ketinggian sehingga 33 meter ini tergolong dalam famili Malvaceae dan boleh dijumpai di kawasan hutan tanah rendah sehingga ke hutan pergunungan. Pokok ini dipercayai mengandungi bahan antioksida dan digunakan untuk merawat kanser. Kandungan bahan fitokimianya adalah seperti fenolik.', '2023-11-20 08:34:27', '2023-11-20 08:35:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '2023-11-20 08:11:45', 1, '$2y$10$Z1FKdj9/5k1qX.Nm3uh1.erGRZJPPAgo9c7ZGmVC4SXR7cWSggnIy', NULL, '2023-11-20 08:11:46', '2023-11-20 08:11:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
