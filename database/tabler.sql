-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Stř 11. led 2023, 07:12
-- Verze serveru: 10.4.24-MariaDB
-- Verze PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `tabler`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `addons`
--

CREATE TABLE `addons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptioon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revision` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Rozpracováno','Schváleno') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `addons`
--

INSERT INTO `addons` (`id`, `document_id`, `name`, `descriptioon`, `revision`, `file`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 'Příloha č. 1', 'Riziková léčiva s podobným názvem, balením injekční forma', '2', 'akred_standard_1.3_priloha_1.pdf', 'Schváleno', '2017-01-10 06:25:39', '2022-01-11 06:25:39'),
(2, 4, 'Příloha č. 1', 'Verifikační (stranový) protokol', '3', 'akred_standard_1.3_priloha_1.pdf', 'Schváleno', '2017-01-10 06:25:39', '2022-01-11 06:25:39'),
(3, 4, 'Příloha č. 2', 'Perioperační bezpečnostní proces', '3', 'akred_standard_1.4_priloha_2.pdf', 'Schváleno', '2017-01-10 06:25:39', '2022-01-11 06:25:39'),
(4, 4, 'Příloha č. 3', 'Stranový protokol a bezp. proces - amb. výkon v lokální anestezii', '3', 'akred_standard_1.4_priloha_3.pdf', 'Schváleno', '2017-01-10 06:25:39', '2022-01-11 06:25:39');

-- --------------------------------------------------------

--
-- Struktura tabulky `adversevents`
--

CREATE TABLE `adversevents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) NOT NULL,
  `misto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datum_cas` date NOT NULL,
  `cas` time NOT NULL,
  `spec_druh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jinydoplnek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pracovnik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `svedek` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pacient` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datumnaroz` date DEFAULT NULL,
  `chorobopis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udalost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reseni` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opatreni` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `informovan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pricina` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jina_pricina` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stav_pacienta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokalizace` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `druh_zraneni` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preventivni_opatreni` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zhodnoceni_stavu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datum` date DEFAULT NULL,
  `jmeno_lekare` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vyvoj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upresneni` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Rozpracováno','Odesláno','Dokončeno') COLLATE utf8mb4_unicode_ci NOT NULL,
  `resitel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vyjadreni` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resitel1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vyjadreni1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resitel2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vyjadreni2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `adversevents`
--

INSERT INTO `adversevents` (`id`, `department_id`, `misto`, `datum_cas`, `cas`, `spec_druh`, `jinydoplnek`, `pracovnik`, `svedek`, `pacient`, `datumnaroz`, `chorobopis`, `udalost`, `reseni`, `opatreni`, `informovan`, `pricina`, `jina_pricina`, `stav_pacienta`, `lokalizace`, `druh_zraneni`, `preventivni_opatreni`, `zhodnoceni_stavu`, `datum`, `jmeno_lekare`, `vyvoj`, `upresneni`, `status`, `resitel`, `vyjadreni`, `resitel1`, `vyjadreni1`, `resitel2`, `vyjadreni2`, `created_at`, `updated_at`) VALUES
(4, 10, 'Possimus cumque off', '2015-11-02', '23:31:00', 'Pád', NULL, 'Aliquid modi ut numq', 'Doloremque sed excep', 'Voluptatem ut volupt', '2016-03-01', 'Quia explicabo Et s', 'Ipsa proident dolo', 'Esse non tempore p', 'Iusto quasi vitae of', 'Et nulla esse distin', 'opření o nestabilní oporu', NULL, 'bezvědomí', 'noha', 'Tržná rána', NULL, NULL, NULL, NULL, 'překlad', NULL, 'Rozpracováno', NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-04 07:51:07', '2023-01-04 07:51:07');

-- --------------------------------------------------------

--
-- Struktura tabulky `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `training_id` int(11) NOT NULL,
  `personal_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_icon`) VALUES
(1, 'Akreditační', 'akreditacni.png'),
(2, 'Ošetřovatelské', 'osetrovatelske.png'),
(3, 'Léčebné', 'lecebne.png'),
(4, 'Speciální', 'specialni.png'),
(5, 'Operační', 'operacni'),
(6, 'Anesteziologické', 'anesteziologicke.png'),
(7, 'RDG', '<svg class=\"icon icon-tabler icon-tabler-radioactive\" xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" viewBox=\"0 0 24 24\"\r\n                       stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">\r\n                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>\r\n                    <path d=\"M13.5 14.6l3 5.19a9 9 0 0 0 4.5 -7.79h-6a3 3 0 0 1 -1.5 2.6\"></path>\r\n                    <path d=\"M13.5 9.4l3 -5.19a9 9 0 0 0 -9 0l3 5.19a3 3 0 0 1 3 0\"></path>\r\n                    <path d=\"M10.5 14.6l-3 5.19a9 9 0 0 1 -4.5 -7.79h6a3 3 0 0 0 1.5 2.6\"></path>\r\n                  </svg>'),
(8, 'Rehabilitační', 'rehabilitacni'),
(9, 'OPL', 'opl.png'),
(10, 'OKB', 'okb.png'),
(11, 'Logopedické', 'logopedicke.png'),
(12, 'Legislativní', 'legislativni');

-- --------------------------------------------------------

--
-- Struktura tabulky `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `center_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `departments`
--

INSERT INTO `departments` (`id`, `department_code`, `center_code`, `color_id`, `department_name`) VALUES
(1, '401', '4501', 'blue', 'Interní oddělení'),
(2, '402', '4502', 'azure', 'Endokrinologická ambulance'),
(3, '403', '4503', 'azure', 'Příjmová interní ambulance'),
(4, '404', '4507', 'azure', 'Gastroenterologická ambulance'),
(5, '405', '4507', 'azure', 'Interní odborné ambulance'),
(6, '407', '4512', 'purple', 'Neurologické oddělení'),
(7, '408', '4513', 'purple', 'Neurologická ambulance'),
(8, '410', '4501', 'lime', 'Odělení chirurgie páteře'),
(9, '411', '4521', 'lime', 'JIP oddělení chirurgie páteře a ortopedie'),
(10, '412', '4524', 'lime', 'Ambulance chirurgie páteře'),
(11, '413', '4551', 'green', 'Rehabilitační oddělení'),
(12, '414', '4552', 'green', 'Rehabilitační ambulance'),
(13, '415', '4558', 'cyan', 'Oddělení pracovního lékařství'),
(14, '417', '4547', 'pink', 'OKB'),
(15, '418', '4549', 'red', 'RDG'),
(16, '419', '4522', 'lime', 'Operační sály'),
(17, '420', '4110', 'yellow', 'Ředitelství'),
(18, '421', '4120', 'orange', 'Stravovací provoz - kantýna'),
(19, '422', '4130', 'muted', 'Úklid'),
(20, '424', '4528', 'lime', 'Anesteziologická ambulance'),
(21, '425', '4504', 'azure', 'Diabetologická ambulance'),
(22, '426', '4141', 'teal', 'Lékárna KHN'),
(23, '427', '4510', 'indigo', 'Mezioborová JIP'),
(24, '428', '4524', 'muted', 'Provozní úsek'),
(25, '429', '4150', 'muted', 'Údržba'),
(26, '432', '4507', 'azure', 'Ambulance infuzní terapie'),
(27, '433', '4524', 'lime', 'Mamologická poradna'),
(28, '434', '4525', 'orange', 'Ortopedické oddělení'),
(29, '436', '4143', 'teal', 'Lékárna KHN v Ráji'),
(30, '437', '4560', 'orange', 'Oddělení následné péče'),
(31, '999', '9999', 'muted', 'Externí pracovník');

-- --------------------------------------------------------

--
-- Struktura tabulky `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `accordion_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accordion_group` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revision` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Rozpracováno','Schváleno') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `documents`
--

INSERT INTO `documents` (`id`, `category_id`, `accordion_name`, `accordion_group`, `position`, `name`, `description`, `revision`, `file`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Správná identifikace pacientů', 1, 1, 'Standard č. 1.1', 'Správná identifikace pacientů', '3', 'akreditacni_standard_1_1.pdf', 'Schváleno', '2023-01-09 05:00:00', '2023-01-10 09:47:07'),
(2, 1, 'Efektivní komunikace', 1, 2, 'Standard č. 1.2', 'Efektivní komunikace', '6', 'akreditacni_standard_1_2.pdf', 'Schváleno', '2023-01-09 05:00:00', '2023-01-10 09:47:07'),
(3, 1, 'Zvýšení bezpečí u rizikových léků', 1, 3, 'Standard č. 1.3', 'Zvýšení bezpečí u rizikových léků', '2', 'akreditacni_standard_1_3.pdf', 'Schváleno', '2023-01-09 05:00:00', '2023-01-10 09:47:07'),
(4, 1, 'Prevence záměny, výkonu, lokalizace', 1, 4, 'Standard č. 1.4', 'Prevence záměny, výkonu, lokalizace', '3', 'akreditacni_standard_1_4.pdf', 'Schváleno', '2023-01-09 05:00:00', '2023-01-10 09:47:07'),
(5, 1, 'Hygiena rukou při poskytování zdravotní péče', 1, 5, 'Standard č. 1.5', 'Hygiena rukou při poskytování zdravotní péče', '3', 'akreditacni_standard_1_5.pdf', 'Schváleno', '2023-01-09 05:00:00', '2023-01-10 09:47:07'),
(6, 1, 'Prevence a postupy ke snížení poškození pacientů v důsledku pádu', 1, 6, 'Standard č. 1.6', 'Prevence a postupy ke snížení poškození pacientů v důsledku pádu', '3', 'akreditacni_standard_1_6.pdf', 'Schváleno', '2023-01-09 05:00:00', '2023-01-10 09:47:07'),
(7, 3, 'Akutní koronární syndromy', 1, 1, 'Standard léčebného postupu', 'Akutní koronární syndromy', '5', 'lecebne_01.pdf', 'Schváleno', '2023-01-09 05:00:00', '2023-01-10 09:47:07'),
(8, 3, 'Antibiotikové profylaxe u operovaných pacientů\n', 1, 2, 'Standard léčebného postupu', 'Antibiotikové profylaxe u operovaných pacientů', '3', 'lecebne_02.pdf', 'Schváleno', '2023-01-09 05:00:00', '2023-01-10 09:47:07'),
(9, 3, 'Crohnova choroba\r\n', 1, 3, 'Standard léčebného postupu', 'Crohnova choroba', '5', 'lecebne_03.pdf', 'Schváleno', '2023-01-09 05:00:00', '2023-01-10 09:47:07'),
(10, 3, 'Demence\r\n', 1, 4, 'Standard léčebného postupu', 'Demence', '5', 'lecebne_04.pdf', 'Schváleno', '2023-01-09 05:00:00', '2023-01-10 09:47:07'),
(11, 3, 'Diabetes mellitus\r\n', 1, 5, 'Standard léčebného postupu', 'Diabetes mellitus', '4', 'lecebne_05.pdf', 'Schváleno', '2023-01-09 05:00:00', '2023-01-10 09:47:07'),
(12, 3, 'Epilepsie\r\n', 1, 6, 'Standard léčebného postupu', 'Epilepsie', '6', 'lecebne_06.pdf', 'Schváleno', '2023-01-09 05:00:00', '2023-01-10 09:47:07'),
(13, 3, 'Febrilie nejasné etiologie\r\n', 1, 7, 'Standard léčebného postupu', 'Febrilie nejasné etiologie', '4', 'lecebne_07.pdf', 'Schváleno', '2023-01-09 05:00:00', '2023-01-10 09:47:07'),
(14, 3, 'Chronická bolest u degenerativních onemocnění páteře\r\n', 1, 8, 'Standard léčebného postupu', 'Chronická bolest u degenerativních onemocnění páteře', '6', 'lecebne_08.pdf', 'Schváleno', '2023-01-09 05:00:00', '2023-01-10 09:47:07'),
(15, 3, 'Soubor indikačních kritérií a postupů\noddělení chirurgie páteře', 1, 9, 'Standard léčebného postupu', 'Soubor indikačních kritérií a postupů\noddělení chirurgie páteře', '6', 'lecebne_09.pdf', 'Schváleno', '2023-01-09 05:00:00', '2023-01-10 09:47:07'),
(16, 3, 'Indikace zátěžových vyšetření', 1, 10, 'Standard léčebného postupu', 'Indikace zátěžových vyšetření', '5', 'lecebne_10.pdf', 'Schváleno', '2023-01-09 05:00:00', '2023-01-10 09:47:07'),
(17, 3, 'Ischemická cévní mozková príhoda', 1, 11, 'Standard léčebného postupu', 'Ischemická cévní mozková príhoda', '5', 'lecebne_11.pdf', 'Schváleno', '2023-01-09 05:00:00', '2023-01-10 09:47:07'),
(18, 3, 'Myokarditidy', 1, 12, 'Standard léčebného postupu', 'Myokarditidy', '5', 'lecebne_12.pdf', 'Schváleno', '2023-01-09 05:00:00', '2023-01-10 09:47:07'),
(19, 3, 'Myopatie', 1, 13, 'Standard léčebného postupu', 'Myopatie', '5', 'lecebne_13.pdf', 'Schváleno', '2023-01-09 05:00:00', '2023-01-10 09:47:07'),
(20, 3, 'Parkinsonova choroba', 1, 14, 'Standard léčebného postupu', 'Parkinsonova choroba', '5', 'lecebne_14.pdf', 'Schváleno', '2023-01-09 05:00:00', '2023-01-10 09:47:07'),
(21, 3, 'Polyneuropathie', 1, 15, 'Standard léčebného postupu', 'Polyneuropathie', '6', 'lecebne_15.pdf', 'Schváleno', '2023-01-09 05:00:00', '2023-01-10 09:47:07'),
(22, 3, 'Roztroušená skleróza', 1, 16, 'Standard léčebného postupu', 'Roztroušená skleróza', '5', 'lecebne_16.pdf', 'Schváleno', '2023-01-09 05:00:00', '2023-01-10 09:47:07'),
(23, 3, 'Soubor indikačních kriterií a postupů oddělení ortopedie', 1, 17, 'Standard léčebného postupu', 'Soubor indikačních kriterií a postupů oddělení ortopedie', '2', 'lecebne_17.pdf', 'Schváleno', '2018-03-01 05:00:00', '2018-03-01 05:00:00'),
(24, 3, 'Soubor postupů při ošetření infikované nebo potenciálně infikované TEP', 1, 18, 'Standard léčebného postupu', 'Soubor postupů při ošetření infikované nebo potenciálně infikované TEP', '2', 'lecebne_18.pdf', 'Schváleno', '2017-01-01 05:00:00', '2017-01-01 05:00:00'),
(25, 3, 'Vředová choroba gastroduodena', 1, 19, 'Standard léčebného postupu', 'Vředová choroba gastroduodena', '5', 'lecebne_19.pdf', 'Schváleno', '2023-01-09 05:00:00', '2023-01-09 05:00:00');

-- --------------------------------------------------------

--
-- Struktura tabulky `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `personal_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_preffix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `married_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_suffix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coffee` enum('A','N') COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  `employment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) DEFAULT NULL,
  `status` enum('Aktivní','Neaktivní','Mateřská') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Neaktivní',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `employees`
--

INSERT INTO `employees` (`id`, `personal_number`, `image`, `title_preffix`, `last_name`, `middle_name`, `married_name`, `first_name`, `title_suffix`, `department_id`, `job_id`, `email`, `start_date`, `end_date`, `comment`, `phone`, `mobile`, `id_card`, `coffee`, `employment`, `position`, `status`, `created_at`, `updated_at`) VALUES
(1, '63705', '63705.jpg', NULL, 'Bajgerová', NULL, NULL, 'Jana', NULL, '23', '55', 'bajgerova@khn.cz', '1996-02-01', NULL, 'a31561', NULL, '725669166', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-20 08:39:17'),
(2, '64108', '64108.jpg', NULL, 'Blínová', NULL, NULL, 'Andrea', NULL, '14', '36', 'x', '1996-02-01', NULL, 'a908c9', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-03 07:44:55'),
(3, '61228', '61228.jpg', 'Bc.', 'Bojková', NULL, NULL, 'Monika', NULL, '7', '41', 'bojkova@khn.cz', '1996-02-01', NULL, '7833e8', '110', '606789967', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:51:21'),
(4, '60321', '60321.jpg', 'MUDr.', 'Brzeżański', NULL, NULL, 'Henryk', NULL, '6', '12', 'brzezanski@khn.cz', '1996-02-01', NULL, '7833e8', '244', '602584406', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-07-04 07:02:42'),
(5, '60512', '60512.jpg', 'MUDr.', 'Cibulková', NULL, NULL, 'Zdeňka', NULL, '15', '12', 'cibulkova@khn.cz', '1996-02-01', NULL, 'c90818', '271', '602526884', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 03:09:56'),
(6, '62417', '62417.jpg', NULL, 'Cyroňová', NULL, NULL, 'Irena', NULL, '6', '41', 'cyronova@khn.cz', '1996-02-01', NULL, '7833e8', '201', '725669171', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 03:10:11'),
(7, '61606', '61606.jpg', 'MUDr.', 'Czolková', NULL, NULL, 'Andrea', NULL, '6', '12', NULL, '1996-02-01', NULL, '7833e8', '202', '725669167', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 10:03:00'),
(9, '60611', '60611.jpg', NULL, 'Čierniková', NULL, NULL, 'Marcela', NULL, '24', '33', 'ciernikova@khn.cz', '1996-02-01', NULL, '999999', '114', '602459731', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 03:12:18'),
(10, '61021', '61021.jpg', NULL, 'Galiová', NULL, NULL, 'Marcela', NULL, '13', '55', NULL, '1996-02-01', NULL, NULL, '509', NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-10-04 08:49:44'),
(11, '64511', '64511.jpg', NULL, 'Galmusová', NULL, NULL, 'Kamila', NULL, '16', '36', NULL, '1996-02-01', NULL, '94f700', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 05:00:59'),
(12, '61018', '61018.jpg', NULL, 'Gondeková', NULL, NULL, 'Eva', NULL, '11', '36', NULL, '1996-02-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:20:04'),
(14, '61220', '61220.jpg', NULL, 'Halfarová', NULL, NULL, 'Dana', NULL, '11', '55', NULL, '1996-02-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:12:01'),
(15, '64202', '64202.jpg', NULL, 'Halouzková', NULL, NULL, 'Vladimíra', NULL, '23', '55', NULL, '1996-02-01', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(16, '62522', '62522.jpg', NULL, 'Hondlová', NULL, NULL, 'Milena', NULL, '9', '55', NULL, '1996-02-01', NULL, 'd9fa05', '', '725669177', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(17, '61513', '61513.jpg', 'MUDr.', 'Jonsztová', NULL, NULL, 'Kristina', NULL, '7', '12', 'jonsztova@khn.cz', '1996-02-01', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:16:03'),
(18, '61604', '61604.jpg', 'MUDr.', 'Kalina', NULL, NULL, 'František', NULL, '14', '12', 'kalina@khn.cz', '1996-02-01', NULL, 'a908c9', '183', '602704385', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:15:44'),
(19, '61617', '61617.jpg', NULL, 'Kašingová', NULL, NULL, 'Miroslava', NULL, '28', '41', 'kasingova@khn.cz', '1996-02-01', NULL, 'ffa600', '148', '602792242', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:13:40'),
(20, '63601', '63601.jpg', 'Mgr.', 'Kiedroňová', NULL, NULL, 'Halina', NULL, '15', '52', 'kiedronova@khn.cz', '1996-02-01', NULL, 'c90818', '424', '606774044', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:13:10'),
(21, '62022', '62022.jpg', NULL, 'Kumpánová', NULL, NULL, 'Božena', NULL, '17', '51', 'kumpanova@khn.cz', '1996-02-01', NULL, 'ffee00', '526', '602579203', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:42:36'),
(22, '62303', '62303.jpg', NULL, 'Kusová', NULL, NULL, 'Zdeňka', NULL, '13', '41', 'kusova@khn.cz', '1996-02-01', NULL, NULL, '532', '606789971', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:40:46'),
(23, '62106', '62106.jpg', NULL, 'Kuzníková', NULL, NULL, 'Jaroslava', NULL, '13', '55', 'kuznikova@khn.cz', '1996-02-01', NULL, NULL, '508', '606789972', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-05 07:06:30'),
(25, '62217', '62217.jpg', NULL, 'Lazengová', NULL, NULL, 'Iveta', NULL, '14', '65', 'lazengova@khn.cz', '1996-02-01', NULL, 'a908c9', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:40:04'),
(26, '61022', '61022.jpg', NULL, 'Matejčíková', NULL, NULL, 'Alžbeta', NULL, '5', '55', 'matejcikova@khn.cz', '1996-02-01', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:38:00'),
(29, '62501', '62501.jpg', NULL, 'Mistrová', NULL, NULL, 'Jiřina', NULL, '7', '55', NULL, '1996-02-01', NULL, '7833e8', NULL, '606789967', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-20 09:59:44'),
(30, '62718', '62718.jpg', NULL, 'Mrkvová', NULL, NULL, 'Michaela', NULL, '23', '55', 'mrkvova@khn.cz', '1996-02-01', NULL, 'a31561', NULL, '724022625', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:33:07'),
(31, '62625', '62625.jpg', 'MUDr.', 'Najder', NULL, NULL, 'Roman', NULL, '15', '30', 'najder@khn.cz', '1996-02-01', NULL, 'c90818', '417', '602459741', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:32:51'),
(32, '62603', '62603.jpg', NULL, 'Němcová', NULL, NULL, 'Anna', NULL, '22', '36', NULL, '1996-02-01', NULL, '2c612a', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(34, '62707', '62707.jpg', NULL, 'Ochodková', NULL, NULL, 'Jaroslava', NULL, '23', '55', NULL, '1996-02-01', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(35, '62719', '62719.jpg', NULL, 'Opolková', NULL, NULL, 'Renáta', NULL, '18', '24', NULL, '1996-02-01', NULL, 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-27 08:55:24'),
(37, '60527', '60527.jpg', NULL, 'Popková', NULL, NULL, 'Iveta', NULL, '9', '41', 'popkova@khn.cz', '1996-02-01', NULL, 'd9fa05', '439, 152', '724938780', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-10-04 06:12:18'),
(38, '63017', '63017.jpg', 'Bc.', 'Pribula', NULL, NULL, 'Marek', NULL, '15', '36', 'pribula@khn.cz', '1996-02-01', NULL, 'c90818', '334', '605721963', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:27:43'),
(40, '63518', '63518.jpg', 'Bc.', 'Sigmundová', NULL, NULL, 'Pavla', NULL, '14', '65', 'sigmundova@khn.cz', '1996-02-01', NULL, 'a908c9', '102', '730188190', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:25:18'),
(42, '63719', '63719.jpg', 'MUDr.', 'Střída', NULL, NULL, 'Josef', NULL, '4', '12', 'strida@khn.cz', '1996-02-01', NULL, '4287f5', '226', '725669160', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:23:38'),
(44, '62014', '62014.jpg', NULL, 'Ščučinská', NULL, NULL, 'Eva', NULL, '5', '55', 'scucinska@khn.cz', '1996-02-01', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:19:26'),
(45, '64101', '64101.jpg', NULL, 'Valičková', NULL, NULL, 'Lenka', NULL, '18', '11', NULL, '1996-02-01', NULL, 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-27 08:53:44'),
(46, '64327', '64327.jpg', NULL, 'Valová', NULL, NULL, 'Hana', 'DiS.', '15', '35', NULL, '1996-02-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(47, '64510', '64510_20221117-174809.jpg', NULL, 'Wojnarová', NULL, NULL, 'Marcela', NULL, '17', '1', 'canibal@khn.cz', '1996-02-01', NULL, 'ffee00', '441', '606685606', 'Vydáno', 'N', 'HPP', 2, 'Aktivní', '2020-02-09 21:00:00', '2022-11-17 16:48:09'),
(48, '64517', '64517.jpg', NULL, 'Woznica', NULL, NULL, 'Pavel', NULL, '18', '42', NULL, '1996-02-01', NULL, 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(49, '61926', '61926.jpg', NULL, 'Lehocká', NULL, NULL, 'Bohumila', NULL, '13', '55', NULL, '1996-02-03', NULL, NULL, '509', NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-10-04 08:49:24'),
(50, '63727', '63727.jpg', NULL, 'Vítová', NULL, NULL, 'Dana', NULL, '18', '44', 'vitova@khn.cz', '1996-02-12', NULL, 'ffa200', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:14:28'),
(51, '60303', '60303.jpg', 'Bc.', 'Bělica', NULL, NULL, 'René', NULL, '17', '32', 'belica@khn.cz', '1996-03-01', NULL, 'ffee00', '106', '606763529', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:06:37'),
(53, '61405', '61405.jpg', NULL, 'Jedrzejek', NULL, NULL, 'Urszula', NULL, '23', '55', 'jedrzejek@khn.cz', '1996-10-15', NULL, 'a31561', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:17:22'),
(54, '64806', '64806.jpg', NULL, 'Zeman', NULL, NULL, 'Petr', NULL, '12', '9', NULL, '1997-02-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(55, '60804', '60804.jpg', 'Bc.', 'Trombalová', NULL, NULL, 'Hana', 'DiS.', '15', '35', 'trombalova@khn.cz', '1997-03-01', NULL, 'c90818', '174', '604375747', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:17:50'),
(57, '62204', '62204.jpg', NULL, 'Malcharová', NULL, NULL, 'Simona', NULL, '23', '55', 'malcharova@khn.cz', '1997-05-01', NULL, 'a31561', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:38:36'),
(58, '64505', '64505.jpg', 'MUDr.', 'Polášková', NULL, NULL, 'Urszula', NULL, '7', '12', NULL, '1997-09-01', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(59, '61209', '61209.jpg', NULL, 'Hlistová', NULL, NULL, 'Monika', NULL, '14', '36', NULL, '1997-10-01', NULL, 'a908c9', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 05:11:23'),
(60, '61830', '61830.jpg', NULL, 'Kořínková', NULL, NULL, 'Renáta', NULL, '11', '55', NULL, '1998-03-30', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:17:25'),
(61, '60103', '60103.jpg', NULL, 'Albrechtová', NULL, NULL, 'Hana', NULL, '7', '55', NULL, '1998-04-01', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(62, '60212', '60212.jpg', NULL, 'Bělocká', NULL, NULL, 'Romana', NULL, '7', '55', 'belocka@khn.cz', '1998-07-01', NULL, '7833e8', '560', '734643007', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:07:13'),
(63, '60208', '60208.jpg', NULL, 'Walicová', NULL, NULL, 'Kateřina', NULL, '28', '55', NULL, '1999-07-01', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(64, '60204', '60204.jpg', 'MUDr.', 'Böhm', NULL, NULL, 'Marek', NULL, '6', '12', 'bohm@khn.cz', '1999-08-04', NULL, '7833e8', NULL, '724787369', 'Vydáno', 'N', 'DPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-20 08:47:33'),
(65, '61301', '61301.jpg', NULL, 'Bojková', NULL, NULL, 'Renáta', 'DiS.', '12', '5', NULL, '1999-09-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:02:42'),
(66, '63427', '63427.jpg', 'Mgr.', 'Syrový', NULL, NULL, 'Stanislav', NULL, '12', '9', NULL, '1999-09-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(67, '62004', '62004.jpg', NULL, 'Kucejová', NULL, NULL, 'Eva', NULL, '24', '37', NULL, '2000-01-14', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(68, '63006', '63006.jpg', NULL, 'Němečková', NULL, NULL, 'Simona', NULL, '4', '55', NULL, '2000-02-01', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-09-27 05:55:12'),
(69, '61607', '61607.jpg', NULL, 'Přibylová', NULL, NULL, 'Adriana', 'DiS.', '12', '9', NULL, '2000-08-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(70, '61801', '61801.jpg', NULL, 'Kokyová', NULL, NULL, 'Marcela', NULL, '18', '57', 'kokyova@khn.cz', '2001-05-02', NULL, 'ffa200', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:11:16'),
(71, '63815', '63815.jpg', NULL, 'Šebestová', NULL, NULL, 'Andrea', NULL, '18', '31', NULL, '2001-05-02', NULL, 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-03 11:36:47'),
(72, '63615', '63615.jpg', NULL, 'Smolková', NULL, NULL, 'Romana', NULL, '6', '55', 'smolkova@khn.cz', '2001-07-02', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:24:54'),
(73, '64301', '64301.jpg', NULL, 'Vaculíková', NULL, NULL, 'Ivana', NULL, '24', '37', NULL, '2001-07-18', NULL, '999999', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-02-25 09:25:04'),
(74, '61009', '61009.jpg', NULL, 'Valošková', NULL, NULL, 'Andrea', NULL, '8', '55', 'valoskova@khn.cz', '2001-09-03', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:16:22'),
(75, '63405', '63405.jpg', 'MUDr.', 'Krajnová', NULL, 'Samiecová', 'Pavla', NULL, '13', '12', 'krajnova@khn.cz', '2001-12-01', NULL, NULL, '504', '725669175', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:09:46'),
(76, '63413', '63413.jpg', NULL, 'Seberová', NULL, NULL, 'Iveta', NULL, '13', '55', NULL, '2002-01-01', NULL, '089cc9', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(77, '60601', '60601.jpg', 'MUDr.', 'Capková', NULL, NULL, 'Halina', NULL, '13', '12', 'capkova@khn.cz', '2002-02-01', '2022-06-13', NULL, '541', '724370844', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 03:03:29'),
(78, '61805', '61805.jpg', 'Bc.', 'Křístková', NULL, 'Křístková', 'Martina', NULL, '17', '13', 'kristkova@khn.cz', '2002-03-01', NULL, '222222', NULL, '602555685', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-08-08 08:27:57'),
(80, '61217', '61217.jpg', NULL, 'Hermanová', NULL, NULL, 'Lenka', NULL, '15', '55', NULL, '2002-06-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 09:31:06'),
(81, '60907', '60907.jpg', NULL, 'Folwarczná', NULL, NULL, 'Monika', NULL, '9', '55', NULL, '2002-06-17', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 09:29:35'),
(82, '62309', '62309.jpg', NULL, 'Cuperová', NULL, NULL, 'Veronika', NULL, '9', '55', NULL, '2002-07-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(83, '61506', '61506.jpg', 'MUDr.', 'Janiková', NULL, NULL, 'Eva', NULL, '9', '12', NULL, '2002-08-01', NULL, 'd9fa05', '423', '724229073', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-01-22 11:12:40'),
(84, '63416', '63416.jpg', 'MUDr.', 'Sýkora', NULL, NULL, 'Dušan', NULL, '8', '12', 'sykora@khn.cz', '2002-09-01', NULL, 'd9fa05', '143', '724228682', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 03:13:42'),
(85, '63213', '63213.jpg', NULL, 'Reitzová', NULL, NULL, 'Martina', NULL, '16', '55', NULL, '2002-09-02', NULL, '94f700', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-27 09:50:56'),
(86, '61720', '61720.jpg', NULL, 'Kurusová', NULL, NULL, 'Alexandra', NULL, '13', '55', NULL, '2002-10-02', NULL, '089cc9', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(87, '63818', '63818.jpg', NULL, 'Špičková', NULL, NULL, 'Darja', NULL, '1', '3', NULL, '2002-10-07', NULL, '4287f5', '223', NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-05-30 06:10:55'),
(89, '60329', '60329.jpg', 'MUDr.', 'Buzek', NULL, NULL, 'David', NULL, '8', '30', 'buzek@khn.cz', '2003-03-03', NULL, 'd9fa05', '456', '602459774', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:53:13'),
(90, '62414', '62414.jpg', 'MUDr.', 'Miškej', NULL, NULL, 'Marek', NULL, '8', '12', 'miskej@khn.cz', '2003-03-17', NULL, 'd9fa05', '412', '602526877', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:36:57'),
(91, '61020', '61020.jpg', NULL, 'Górniaková', NULL, NULL, 'Kateřina', NULL, '16', '55', 'gorniakova@khn.cz', '2003-05-01', NULL, '94f700', NULL, '602411637', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-20 09:36:20'),
(92, '61224', '61224.jpg', 'MUDr.', 'Hurtová', NULL, NULL, 'Šárka', NULL, '9', '12', 'hurtova@khn.cz', '2003-05-01', NULL, 'd9fa05', '423', '606685250', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:02:15'),
(93, '62715', '62715.jpg', 'Mgr.', 'Klenková', NULL, NULL, 'Veronika', NULL, '23', '55', NULL, '2003-07-01', NULL, 'a31561', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Mateřská', '2020-02-09 21:00:00', '2022-07-12 05:00:37'),
(94, '62328', '62328.jpg', 'Mgr.', 'Stulová', NULL, 'Martanová', 'Monika', 'DiS.', '12', '9', NULL, '2003-07-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-06-19 06:26:33'),
(95, '64311', '64311.jpg', NULL, 'Raszyková Vilhanová', NULL, NULL, 'Ivana', NULL, '12', '36', NULL, '2003-07-08', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 06:16:34'),
(97, '61026', 'no_image.png', 'MUDr.', 'Guňka', NULL, NULL, 'Josef', NULL, '28', '12', NULL, '2003-08-01', NULL, 'ffa600', '145', '602562055', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-11-14 05:17:50'),
(99, '60307', '60307.jpg', 'MUDr.', 'Blažík', NULL, NULL, 'Martin', NULL, '23', '12', 'blazik@khn.cz', '2003-09-01', NULL, 'a31561', '475', '602572711', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:48:58'),
(100, '61001', '61001.jpg', NULL, 'Gálová', NULL, NULL, 'Jitka', 'DiS.', '12', '5', NULL, '2003-09-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:02:58'),
(101, '60309', '60309.jpg', NULL, 'Bernatíková', NULL, NULL, 'Zuzana', NULL, '16', '41', 'bernatikova@khn.cz', '2003-09-18', NULL, '94f700', '151', '725669178', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:47:03'),
(102, '60320', '60320.jpg', NULL, 'Doffková', NULL, NULL, 'Zuzana', NULL, '30', '41', 'doffkova@khn.cz', '2003-10-20', NULL, 'a31561', '166', '732441640', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-08-04 03:55:44'),
(103, '61027', '61027.jpg', NULL, 'Grzybková', NULL, NULL, 'Jiřina', 'DiS.', '12', '5', NULL, '2003-11-03', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:04:51'),
(104, '60211', '60211.jpg', NULL, 'Betlachová', NULL, NULL, 'Ivana', NULL, '5', '55', 'betlachova@khn.cz', '2003-12-02', NULL, '4287f5', '225', '603814627', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:47:22'),
(106, '62219', '62219.jpg', NULL, 'Lukáčová', NULL, NULL, 'Ester', NULL, '23', '20', NULL, '2004-06-01', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(107, '63217', '63217.jpg', NULL, 'Rácová', NULL, NULL, 'Renáta', NULL, '19', '22', NULL, '2004-06-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(108, '62412', '62412.jpg', 'MUDr.', 'Dianovská', NULL, NULL, 'Anna', NULL, '1', '12', NULL, '2004-06-14', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(109, '61019', '61019.jpg', 'Mgr.', 'Gracová', NULL, NULL, 'Silvie', 'DiS.', '12', '9', NULL, '2021-01-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-01-21 06:46:38'),
(110, '63822', '63822.jpg', NULL, 'Štromajerová', NULL, NULL, 'Lenka', NULL, '19', '22', NULL, '2004-07-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(111, '62426', '62426.jpg', NULL, 'Mlčůchová', NULL, NULL, 'Jana', NULL, '9', '20', NULL, '2004-08-03', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(112, '60604', '60604.jpg', NULL, 'Čeřenská', NULL, NULL, 'Lenka', NULL, '8', '63', 'cerenska@khn.cz', '2004-09-01', NULL, 'd9fa05', NULL, '733500767', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-20 09:32:20'),
(113, '62009', '62009.jpg', NULL, 'Kolatková', NULL, NULL, 'Kateřina', NULL, '22', '7', NULL, '2004-09-01', NULL, '2c612a', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 08:44:50'),
(114, '61910', '61910.jpg', 'Mgr.', 'Kunzová', NULL, NULL, 'Jana', NULL, '29', '53', 'kunzova@khn.cz', '2004-09-01', NULL, '2c612a', '595390440', '724532273', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:44:03'),
(115, '62620', '62620.jpg', 'Ing.', 'Nováková', NULL, NULL, 'Jarmila', NULL, '17', '4', 'novakova@khn.cz', '2004-12-01', NULL, 'ffee00', '436', '724370891', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:32:27'),
(116, '64015', '64015.jpg', NULL, 'Tamášová', NULL, NULL, 'Alena', NULL, '19', '22', NULL, '2005-01-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(117, '62621', '62621.jpg', NULL, 'Nolčová', NULL, NULL, 'Kateřina', NULL, '9', '55', NULL, '2005-01-03', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 09:34:50'),
(118, '62818', '62818.jpg', 'MUDr.', 'Paciorek', NULL, NULL, 'Roman', NULL, '13', '12', NULL, '2005-04-01', NULL, '089cc9', '604', '724596078', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(119, '63622', '63622.jpg', 'Bc.', 'Szkwarová', NULL, NULL, 'Monika', NULL, '15', '35', NULL, '2005-04-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(120, '61316', '61316.jpg', 'MUDr.', 'Holomek', NULL, NULL, 'Karel', NULL, '9', '12', 'holomek@khn.cz', '2005-04-18', NULL, 'd9fa05', '427', '724513902', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 03:19:29'),
(121, '61724', '61724.jpg', NULL, 'Kozuszniková', NULL, NULL, 'Renáta', NULL, '6', '55', NULL, '2005-05-02', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'DPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-10-03 02:58:01'),
(123, '64501', '64501.jpg', NULL, 'Weber', NULL, NULL, 'Martin', NULL, '18', '61', 'weber@khn.cz', '2005-08-01', NULL, 'ffa200', '365', '602555681', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:11:26'),
(124, '60213', '60213.jpg', 'MUDr.', 'Bernacká', NULL, NULL, 'Janka', NULL, '5', '12', 'bernacka@khn.cz', '2005-09-01', NULL, '4287f5', '231', '725669161', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:46:38'),
(125, '61320', '61320.jpg', 'Mgr.', 'Svozilová', NULL, 'Strzelczoková', 'Dorota', NULL, '16', '55', 'svozilova@khn.cz', '2005-09-01', NULL, '94f700', NULL, '602411637', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:22:24'),
(126, '63819', '63819.jpg', NULL, 'Štveráková', NULL, 'Čermáková Jitka', 'Jitka', NULL, '28', '55', NULL, '2005-09-16', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-01-18 07:24:22'),
(127, '64512', '64512.jpg', NULL, 'Hanzlová', NULL, 'Waloszková', 'Petra', NULL, '15', '55', NULL, '2005-10-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 09:31:28'),
(128, '60901', '60901.jpg', NULL, 'Febrová', NULL, NULL, 'Andrea', NULL, '12', '55', NULL, '2005-10-03', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(129, '63513', '63513.jpg', NULL, 'Majkráková', NULL, NULL, 'Věra', NULL, '9', '55', NULL, '2006-01-02', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-01-11 10:20:31'),
(130, '63501', '63501.jpg', NULL, 'Seberová', NULL, NULL, 'Jana', NULL, '12', '9', NULL, '2006-01-02', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(131, '61810', '61810.jpg', NULL, 'Kovalčíková', NULL, NULL, 'Lucie', NULL, '9', '55', NULL, '2006-02-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-07-02 07:01:09'),
(132, '61622', '61622.jpg', NULL, 'Kozáková', NULL, NULL, 'Šárka', NULL, '16', '55', NULL, '2006-02-01', NULL, '94f700', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-11-20 10:37:35'),
(134, '60528', '60528.jpg', NULL, 'Andrlová', NULL, NULL, 'Lenka', NULL, '13', '55', 'andrlova@khn.cz', '2006-03-01', NULL, NULL, NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:03:55'),
(135, '60210', '60210.jpg', NULL, 'Tomášková', NULL, NULL, 'Elena', 'DiS.', '7', '55', NULL, '2006-03-01', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-09-21 08:58:49'),
(136, '64513', '64513.jpg', 'Bc.', 'Wrožynová', NULL, NULL, 'Romana', NULL, '15', '35', NULL, '2006-03-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 08:06:09'),
(137, '61806', '61806.jpg', NULL, 'Zuskinová', NULL, NULL, 'Gabriela', NULL, '9', '55', NULL, '2006-03-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-11-02 08:45:24'),
(138, '61721', '61721.jpg', NULL, 'Kučerová', NULL, NULL, 'Ivana', NULL, '6', '3', 'kucerova@khn.cz', '2006-04-03', NULL, '7833e8', '115', '731129318', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:07:10'),
(139, '60227', '60227.jpg', NULL, 'Matisová', NULL, NULL, 'Michaela', NULL, '16', '55', NULL, '2006-07-01', NULL, '94f700', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(141, '63713', '63713.jpg', 'MUDr.', 'Jannová', NULL, NULL, 'Zuzana', NULL, '15', '12', 'jannova@khn.cz', '2006-09-01', NULL, 'c90818', '267', '724540013', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-21 02:41:17'),
(143, '60203', '60203.jpg', NULL, 'Bartková', NULL, NULL, 'Ester', NULL, '15', '55', NULL, '2006-10-02', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-10 12:09:03'),
(144, '63706', '63706.jpg', 'Mgr.', 'Stašíková', NULL, NULL, 'Lucie', NULL, '29', '6', 'stasikova@khn.cz', '2006-10-02', NULL, '2c612a', NULL, '606226672', 'Vydáno', 'N', 'DPČ', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-21 02:17:15'),
(145, '63710', '63710.jpg', 'MUDr.', 'Strakoš', NULL, NULL, 'Peter', NULL, '6', '12', NULL, '2007-01-01', '2022-06-01', '7833e8', '244', NULL, 'Vydáno', 'N', 'DPČ', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-07-04 07:02:19'),
(146, '61630', '61630.jpg', NULL, 'Kufová', NULL, NULL, 'Renáta', NULL, '26', '55', NULL, '2007-01-02', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-02 06:36:14'),
(147, '63722', '63722.jpg', NULL, 'Szeruda', NULL, NULL, 'Tomáš', NULL, '25', '39', 'szeruda@khn.cz', '2007-01-02', NULL, '999999', '430', '605773707', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-23 09:15:28'),
(148, '64502', '64502.jpg', NULL, 'Waloszková', NULL, NULL, 'Jadwiga', NULL, '12', '36', NULL, '2007-01-02', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(149, '64304', '64304.jpg', NULL, 'Černá', NULL, 'Vařechová', 'Radka', NULL, '23', '55', NULL, '2007-01-15', NULL, 'a31561', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Mateřská', '2020-02-09 21:00:00', '2021-10-07 08:28:33'),
(150, '60314', '60314.jpg', NULL, 'Brhel', NULL, NULL, 'Svatopluk', NULL, '25', '28', 'brhel@khn.cz', '2007-03-01', NULL, '999999', NULL, '603568468', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:52:37'),
(151, '60619', '60619.jpg', NULL, 'Čiernik', NULL, NULL, 'Lubomír', NULL, '25', '28', 'ciernik@khn.cz', '2007-03-01', NULL, '999999', NULL, '724151283', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 03:12:01'),
(152, '60916', '60916.jpg', NULL, 'Fierlová', NULL, NULL, 'Pavlína', NULL, '12', '9', 'fierlova@khn.cz', '2007-03-01', NULL, '66c908', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 03:14:41'),
(154, '61501', '61501.jpg', NULL, 'Javorková', NULL, NULL, 'Monika', NULL, '19', '22', NULL, '2007-03-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(156, '63728', '63728.jpg', NULL, 'Súkeníková', NULL, NULL, 'Marta', NULL, '13', '55', NULL, '2007-03-15', NULL, '089cc9', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(157, '61502', '61502.jpg', 'MUDr.', 'Janiková', NULL, NULL, 'Andrea', NULL, '9', '50', 'janikova@khn.cz', '2007-04-01', NULL, 'd9fa05', '423', '724474799', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:19:22'),
(158, '64509', '64509.jpg', NULL, 'Walková', NULL, NULL, 'Jarmila', NULL, '11', '55', NULL, '2007-04-01', '2020-08-31', '66c908', NULL, '725669180', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-21 02:24:58'),
(160, '62605', '62605.jpg', NULL, 'Nevřivá', NULL, NULL, 'Iva', NULL, '19', '22', NULL, '2007-05-15', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-11 10:58:00'),
(161, '61814', '61814.jpg', 'MUDr.', 'Kováčová', NULL, NULL, 'Šárka', NULL, '15', '12', 'kovacova@khn.cz', '2007-06-01', NULL, 'c90818', '267', '724358596', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:10:19'),
(162, '62515', '62515.jpg', NULL, 'Mravcová', NULL, NULL, 'Anna', NULL, '17', '17', NULL, '2007-06-01', NULL, 'ffee00', '429', '724596078', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-07-15 08:34:26'),
(163, '64514', '64514.jpg', NULL, 'Wernerová', NULL, NULL, 'Darina', NULL, '23', '55', NULL, '2007-07-01', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, 'Mateřská', '2020-02-09 21:00:00', '2020-03-04 06:18:46'),
(164, '64516', '64516.jpg', NULL, 'Wojkowská', NULL, NULL, 'Žaneta', NULL, '18', '31', NULL, '2007-07-01', NULL, 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-03 11:36:38'),
(165, '63620', '63620.jpg', NULL, 'Vitulová', NULL, NULL, 'Zuzana', NULL, '23', '55', NULL, '2007-07-02', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-10 06:46:23'),
(166, '63421', '63421.jpg', 'Bc.', 'Múčková', NULL, NULL, 'Jana', NULL, '15', '35', NULL, '2007-08-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(167, '63223', '63223.jpg', 'MUDr.', 'Vlachopulu', NULL, NULL, 'Barbara', NULL, '6', '12', 'vlachopulu@khn.cz', '2007-08-01', NULL, '7833e8', NULL, '725669169', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-21 02:23:54'),
(168, '62509', '62509.jpg', NULL, 'Holušová', NULL, 'Čermáková', 'Marcela', NULL, '23', '55', 'holusova@khn.cz', '2007-08-15', NULL, 'a31561', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-07-12 09:16:26'),
(170, '61230', '61230.jpg', NULL, 'Hýblová', NULL, NULL, 'Kateřina', NULL, '6', '55', NULL, '2007-09-03', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Mateřská', '2020-02-09 21:00:00', '2022-04-12 02:56:38'),
(171, '60225', '60225.jpg', NULL, 'Bábanová', NULL, NULL, 'Lea', NULL, '12', '9', NULL, '2007-10-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 08:10:59'),
(173, '63410', '63410.jpg', NULL, 'Němcová', NULL, 'Sabinioková', 'Andrea', NULL, '12', '55', NULL, '2007-11-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 09:36:14'),
(175, '63523', '63523.jpg', NULL, 'Sikorová', NULL, NULL, 'Lubica', NULL, '19', '22', NULL, '2007-12-12', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(176, '61626', '61626.jpg', 'MUDr.', 'Klus', NULL, NULL, 'Ivo', NULL, '8', '12', 'klus@khn.cz', '2008-01-01', NULL, 'd9fa05', '412', '725543135', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:11:37'),
(177, '64419', '64419.jpg', 'MUDr.', 'Veselský', NULL, NULL, 'Petr', NULL, '8', '12', NULL, '2008-01-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(178, '62813', '62813.jpg', 'MUDr. Ing.', 'Paloušková', NULL, NULL, 'Hana', NULL, '6', '61', 'palouskova@khn.cz', '2008-02-01', NULL, '7833e8', '214', '734695213', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-10-17 08:54:48'),
(179, '64811', '64811.jpg', 'Bc.', 'Navrátilová', NULL, NULL, 'Petra', NULL, '9', '55', NULL, '2008-03-06', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(180, '61503', '61503.jpg', NULL, 'Jaklová', NULL, NULL, 'Pavlína', NULL, '18', '11', NULL, '2008-05-02', NULL, 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(181, '61524', '61524.jpg', NULL, 'Jeleń', NULL, NULL, 'Zdeněk', NULL, '17', '39', 'jelen@khn.cz', '2008-06-02', NULL, 'ffee00', '371', '724022598', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:16:54'),
(182, '60523', '60523.jpg', 'Bc.', 'Žwaková', NULL, 'Benková', 'Kateřina', NULL, '9', '55', NULL, '2008-07-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-08-13 05:51:50'),
(183, '62305', '62305.jpg', NULL, 'Máček', NULL, NULL, 'Daniel', NULL, '25', '40', NULL, '2008-07-01', NULL, '999999', '', '602459753', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-01-22 11:41:26'),
(184, '61109', '61109.jpg', NULL, 'Pawerová', NULL, NULL, 'Eva', NULL, '30', '55', NULL, '2008-07-07', NULL, 'a31561', NULL, '730547122', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-21 02:47:13'),
(185, '61118', '61118.jpg', NULL, 'Gabzdylová', NULL, NULL, 'Zdeňka', NULL, '16', '55', NULL, '2008-08-01', NULL, '94f700', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 06:40:57'),
(186, '61030', '61030.jpg', 'MUDr.', 'Groman', NULL, NULL, 'Petr', NULL, '28', '12', 'groman@khn.cz', '2008-08-01', NULL, 'ffa600', '416', '602317326', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 03:16:12'),
(187, '61826', '61826.jpg', 'MUDr.', 'Kozák', NULL, NULL, 'Martin', NULL, '28', '12', NULL, '2008-08-01', NULL, 'ffa600', '103', '602317341', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(188, '61730', '61730.jpg', 'MUDr.', 'Krempaský', NULL, NULL, 'Ondrej', NULL, '28', '12', 'krempasky@khn.cz', '2008-08-01', NULL, 'ffa600', '416', '602317315', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:08:36'),
(189, '63804', '63804.jpg', NULL, 'Kroczek', NULL, NULL, 'Gabriela', NULL, '7', '29', NULL, '2008-08-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-07 06:38:51'),
(190, '62405', '62405.jpg', NULL, 'Pavlásková', NULL, NULL, 'Pavla', NULL, '9', '55', NULL, '2008-08-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-08-06 06:18:24'),
(191, '62526', '62526.jpg', 'MUDr.', 'Mráček', NULL, NULL, 'Dalibor', NULL, '28', '12', 'mracek@khn.cz', '2008-08-01', NULL, 'ffa600', '416', '602317319', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:35:01'),
(192, '62828', '62828.jpg', 'Bc.', 'Zuskinová', NULL, 'Pánková', 'Kateřina', NULL, '9', '55', NULL, '2008-08-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-09-15 07:56:35'),
(193, '62826', '62826.jpg', 'MUDr.', 'Pavličný', NULL, NULL, 'Radek', NULL, '28', '30', 'pavlicny@khn.cz', '2008-08-01', NULL, 'ffa600', '413', '602317328', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:30:38'),
(194, '62815', '62815.jpg', 'MUDr.', 'Pešek', NULL, NULL, 'Jiří', NULL, '28', '12', 'pesek@khn.cz', '2008-08-01', NULL, 'ffa600', NULL, '602317302', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:30:12'),
(195, '63813', '63813.jpg', 'Bc.', 'Široká', NULL, NULL, 'Silvie', NULL, '12', '55', 'siroka@khn.cz', '2008-08-01', NULL, '66c908', '282', '725382723', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:19:07'),
(196, '64019', '64019.jpg', NULL, 'Tomčíková', NULL, NULL, 'Bronislava', NULL, '16', '55', NULL, '2008-08-01', NULL, '94f700', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 06:14:06'),
(197, '61612', '61612.jpg', NULL, 'Kneblová', NULL, NULL, 'Šárka', 'DiS.', '22', '7', NULL, '2008-09-01', NULL, '2c612a', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(198, '62313', '62313.jpg', NULL, 'Sendrei', NULL, 'Mimová', 'Sylva', NULL, '9', '20', NULL, '2008-09-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(199, '63229', '63229.jpg', NULL, 'Rykalová', NULL, NULL, 'Karla', NULL, '19', '22', NULL, '2008-09-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(200, '63527', '63527.jpg', 'Bc.', 'Szusciková', NULL, NULL, 'Eliška', NULL, '16', '55', NULL, '2008-09-01', NULL, '94f700', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-05-31 04:28:40'),
(201, '64816', '64816.jpg', 'MUDr.', 'Zvárová', NULL, NULL, 'Pavlína', NULL, '11', '30', 'zvarova@khn.cz', '2008-09-01', NULL, '66c908', '241', '725669174', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:08:28'),
(202, '60324', '60324.jpg', NULL, 'Byrtus', NULL, NULL, 'Boleslav', NULL, '15', '35', NULL, '2008-10-01', NULL, 'c90818', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-03-08 07:57:35'),
(203, '61523', '61523.jpg', 'MUDr.', 'Janková', NULL, NULL, 'Pavlína', NULL, '5', '12', 'jankova@khn.cz', '2008-10-01', NULL, '4287f5', '231', '725669162', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:18:08'),
(204, '61710', '61710.jpg', 'MUDr.', 'Kultan', NULL, NULL, 'Peter', NULL, '1', '30', 'kultan@khn.cz', '2008-10-01', NULL, '4287f5', '221', '725669163', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-07-28 12:24:05'),
(205, '63803', '63803.jpg', NULL, 'Stařičná', NULL, NULL, 'Denisa', NULL, '16', '55', NULL, '2008-10-08', NULL, '94f700', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(206, '62428', '62428.jpg', 'Mgr.', 'Mlýnková', NULL, 'Mitrengová', 'Ruth', NULL, '6', '10', 'mlynkova@khn.cz', '2008-12-01', '2019-07-25', '7833e8', '105', '703866582', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-21 02:11:26'),
(207, '60110', '60110.jpg', 'MUDr.', 'Adámková', NULL, NULL, 'Renáta', NULL, '9', '12', 'adamkova@khn.cz', '2009-01-01', NULL, 'd9fa05', '423', '725848645', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:03:26'),
(208, '62230', '62230.jpg', NULL, 'Lanči', NULL, NULL, 'Petr', NULL, '23', '55', NULL, '2009-01-02', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(209, '64528', '64528.jpg', NULL, 'Wiechećová', NULL, NULL, 'Martina', 'DiS.', '6', '55', NULL, '2009-01-19', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-27 07:39:19'),
(210, '61824', '61824.jpg', NULL, 'Klepek', NULL, NULL, 'Tomáš', NULL, '25', '28', 'klepek@khn.cz', '2009-02-01', NULL, '999999', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:12:51'),
(211, '64002', '64002.jpg', NULL, 'Takáčová', NULL, NULL, 'Vlasta', NULL, '19', '22', NULL, '2009-02-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(212, '61326', '61326.jpg', NULL, 'Hejnová', NULL, NULL, 'Alena', NULL, '8', '41', 'hejnova@khn.cz', '2009-04-01', NULL, 'd9fa05', '254', '604154554', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 03:17:16'),
(213, '61530', '61530.jpg', NULL, 'Janečková', NULL, NULL, 'Gabriela', NULL, '11', '41', 'janeckova@khn.cz', '2009-05-01', NULL, '66c908', '240', '602584395', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:19:49'),
(214, '60327', '60327.jpg', 'MUDr.', 'Sukopová', NULL, NULL, 'Kateřina', NULL, '15', '12', 'sukopova@khn.cz', '2009-07-01', NULL, 'c90818', NULL, '733711627', 'Vydáno', 'N', 'DPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-20 08:53:38'),
(218, '62517', '62517.jpg', 'MUDr.', 'Michalik', NULL, NULL, 'Daniel', NULL, '9', '12', NULL, '2009-10-01', NULL, 'd9fa05', '427', '606685251', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-01-22 11:41:56'),
(220, '64114', '64114.jpg', 'Bc.', 'Tchýrová', NULL, NULL, 'Lucie', NULL, '9', '55', NULL, '2009-10-05', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(221, '64328', '64328.jpg', NULL, 'Valchař', NULL, NULL, 'Zuzana', NULL, '23', '55', NULL, '2009-10-05', NULL, 'a31561', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-10-06 07:16:11'),
(222, '61025', '61025.jpg', NULL, 'Przybylová', NULL, 'Gutová', 'Gabriela', NULL, '28', '55', 'przybylova@khn.cz', '2010-01-01', NULL, 'ffa600', '119', '731147824', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:27:19'),
(223, '64319', '64319.jpg', 'Mgr.', 'Vajglová', NULL, NULL, 'Pavlína', NULL, '17', '14', 'vajglova@khn.cz', '2010-01-01', NULL, 'ffee00', '471', '725189423', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:17:05'),
(224, '60730', '60730.jpg', 'Mgr.', 'Drozdzik', NULL, NULL, 'Magdalena', NULL, '14', '65', NULL, '2010-01-04', NULL, 'a908c9', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-27 08:39:06'),
(225, '63210', '63210.jpg', NULL, 'Smolíková', NULL, NULL, 'Vlasta', NULL, '16', '55', NULL, '2010-02-01', NULL, '94f700', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-02-15 10:09:30'),
(226, '63521', '63521.jpg', NULL, 'Synková', NULL, NULL, 'Iveta', NULL, '18', '24', NULL, '2010-02-01', NULL, 'ffa200', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-04-16 04:36:53'),
(227, '64830', '64830.jpg', NULL, 'Žůrková', NULL, NULL, 'Adriana', NULL, '5', '55', NULL, '2010-02-08', NULL, '4287f5', NULL, '739522435', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-21 02:28:15'),
(228, '61203', '61203.jpg', 'MUDr.', 'Heroková', NULL, NULL, 'Jiřina', NULL, '27', '12', NULL, '2010-03-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(229, '61327', '61327.jpg', 'Mgr.', 'Chmielová', NULL, NULL, 'Romana', NULL, '6', '55', NULL, '2010-03-15', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(230, '63504', '63504.jpg', 'PharmDr.', 'Syrová', NULL, NULL, 'Monika', NULL, '22', '62', NULL, '2010-04-01', NULL, '2c612a', NULL, '724370843', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-07-01 04:56:03'),
(232, '60524', '60524.jpg', 'Bc.', 'Ciliová', NULL, NULL, 'Lenka', NULL, '6', '55', NULL, '2010-07-01', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-11-09 07:23:40'),
(233, '61719', '61719.jpg', 'Bc.', 'Rudolová', NULL, 'Kuboszková', 'Veronika', NULL, '15', '35', NULL, '2010-07-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, 'Mateřská', '2020-02-09 21:00:00', '2020-03-04 06:04:28'),
(234, '62514', '62514.jpg', 'MUDr.', 'Mucha', NULL, NULL, 'Aleš', NULL, '9', '12', NULL, '2010-07-01', NULL, 'd9fa05', '427', '737818723', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-01-22 11:39:39'),
(235, '61123', '61123.jpg', 'Bc.', 'Pavlů', NULL, NULL, 'Veronika', NULL, '15', '35', NULL, '2010-07-01', NULL, 'c90818', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-01-22 11:00:43'),
(237, '64530', '64530.jpg', NULL, 'Wojnar', NULL, NULL, 'Jan', NULL, '16', '36', NULL, '2010-07-01', NULL, '94f700', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 06:19:41'),
(238, '62202', '62202.jpg', 'Mgr.', 'Malíková', NULL, NULL, 'Jana', NULL, '11', '9', NULL, '2010-07-15', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Mateřská', '2020-02-09 21:00:00', '2020-03-04 05:37:18'),
(239, '62504', '62504.jpg', NULL, 'Miturová', NULL, NULL, 'Dana', NULL, '12', '9', NULL, '2010-09-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(240, '62529', '62529.jpg', 'Mgr.', 'Mrázová', NULL, NULL, 'Andrea', NULL, '14', '61', 'mrazova@khn.cz', '2010-09-01', NULL, 'a908c9', '102', NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-07-28 12:24:52'),
(241, '63013', '63013.jpg', NULL, 'Protopsalti Robenková', 'Robenková', NULL, 'Zuzana', NULL, '5', '55', NULL, '2010-09-01', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 06:01:38'),
(242, '62821', '62821.jpg', 'Bc.', 'Krestová', NULL, NULL, 'Darina', NULL, '6', '55', NULL, '2010-10-15', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-09-16 02:49:06'),
(243, '64416', '64416.jpg', NULL, 'Volanská', NULL, NULL, 'Lydie', NULL, '19', '63', 'vedouci.uklidu@khn.cz', '2010-10-27', NULL, '999999', '292', '724370890', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:12:50'),
(244, '60410', '60410.jpg', 'Bc.', 'Bělicová', NULL, NULL, 'Taťána', NULL, '17', '19', NULL, '2010-11-01', NULL, 'ffee00', '443', '605830848', 'Vydáno', 'N', 'HPP', 3, 'Aktivní', '2020-02-09 21:00:00', '2022-11-17 16:49:14'),
(245, '64529', '64529.jpg', 'Mgr.', 'Csíková', NULL, NULL, 'Jana', NULL, '23', '55', NULL, '2020-11-13', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-01-21 06:51:20'),
(246, '61402', '61402.jpg', NULL, 'Chylová', NULL, NULL, 'Halina', NULL, '9', '20', NULL, '2010-11-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(247, '64109', '64109.jpg', 'MUDr.', 'Twardzik', NULL, NULL, 'Januš', NULL, '28', '12', NULL, '2011-01-01', NULL, 'ffa600', '416', '732633696', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(248, '64521', '64521.jpg', NULL, 'Wratná', NULL, NULL, 'Barbara', NULL, '22', '7', NULL, '2011-01-01', NULL, '2c612a', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(249, '60913', '60913.jpg', NULL, 'Furendová', NULL, NULL, 'Eva', NULL, '19', '22', NULL, '2011-02-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(250, '63209', '63209.jpg', 'MUDr.', 'Rybarčíková', NULL, NULL, 'Renáta', NULL, '23', '12', 'rybarcikova@khn.cz', '2011-03-21', NULL, 'a31561', '221', '734643006', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:26:47'),
(252, '62607', '62607.jpg', 'MUDr.', 'Němeček', NULL, NULL, 'Ivo', NULL, '14', '12', NULL, '2011-04-01', NULL, 'a908c9', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 05:56:45'),
(253, '60415', '60415.jpg', NULL, 'Brončková', NULL, NULL, 'Hana', NULL, '15', '35', NULL, '2011-05-01', '2017-04-30', 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(254, '63618', '63618.jpg', 'MUDr.', 'Sukop', NULL, NULL, 'Roman', NULL, '6', '30', 'sukop@khn.cz', '2011-08-01', NULL, '7833e8', '214', '723923599', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:23:11'),
(256, '62402', '62402.jpg', NULL, 'Machálková', NULL, NULL, 'Dagmar', NULL, '19', '22', NULL, '2011-09-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(257, '60113', '60113.jpg', NULL, 'Ambrožová', NULL, NULL, 'Rozália', NULL, '19', '22', NULL, '2011-10-26', NULL, '999999', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-03-05 08:06:04'),
(258, '61623', '61623.jpg', NULL, 'Kolarzová', NULL, NULL, 'Anna', NULL, '19', '22', NULL, '2011-11-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(259, '61309', '61309.jpg', NULL, 'Hlaváčová', NULL, NULL, 'Anna', NULL, '19', '22', NULL, '2011-11-28', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(260, '63702', '63702.jpg', NULL, 'Schwarzová', NULL, NULL, 'Bohdana', 'DiS.', '29', '7', NULL, '2012-01-01', NULL, '2c612a', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-18 06:36:17');
INSERT INTO `employees` (`id`, `personal_number`, `image`, `title_preffix`, `last_name`, `middle_name`, `married_name`, `first_name`, `title_suffix`, `department_id`, `job_id`, `email`, `start_date`, `end_date`, `comment`, `phone`, `mobile`, `id_card`, `coffee`, `employment`, `position`, `status`, `created_at`, `updated_at`) VALUES
(261, '62502', '62502.jpg', NULL, 'Mlotková', NULL, NULL, 'Pavlína', NULL, '9', '55', NULL, '2012-01-02', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(263, '61117', '61117.jpg', 'PharmDr.', 'Řezníková', NULL, 'Groborzová', 'Monika', NULL, '22', '53', 'reznikova@khn.cz', '2012-01-16', NULL, '2c612a', '602', '734792882', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:26:29'),
(264, '60205', '60205.jpg', NULL, 'Babičová', NULL, NULL, 'Darina', NULL, '23', '20', NULL, '2012-02-01', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(265, '61121', '61121.jpg', 'Mgr.', 'Gottwaldová', NULL, NULL, 'Dita', NULL, '22', '6', NULL, '2012-02-01', NULL, '2c612a', '', '725791521', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-27 10:09:30'),
(266, '61728', '61728.jpg', 'Bc.', 'Kunzová', NULL, NULL, 'Karin', NULL, '7', '55', 'kunzovak@khn.cz', '2012-02-01', NULL, '7833e8', NULL, '734792879', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-20 09:57:27'),
(267, '64805', '64805.jpg', 'MUDr.', 'Závodský', NULL, NULL, 'Igor', NULL, '28', '12', 'zavodsky@khn.cz', '2012-03-13', NULL, 'ffa600', '103', '734643003', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:09:30'),
(268, '60412', '60412.jpg', NULL, 'Bohušová', NULL, NULL, 'Drahomíra', NULL, '19', '22', NULL, '2012-05-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(270, '63316', '63316.jpg', 'Mgr.', 'Řezník', NULL, NULL, 'Roman', NULL, '22', '6', NULL, '2012-06-01', NULL, '2c612a', '', '602792227', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 04:38:30'),
(271, '63810', '63810.jpg', NULL, 'Staníčková', NULL, NULL, 'Věra', NULL, '18', '31', NULL, '2012-06-01', NULL, 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-03 11:36:31'),
(272, '60706', '60706.jpg', NULL, 'Dawidová', NULL, NULL, 'Lada', NULL, '18', '44', NULL, '2012-07-01', NULL, 'ffa200', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-06 08:52:06'),
(273, '61919', '61919.jpg', 'Mgr.', 'Tichá', NULL, NULL, 'Veronika', NULL, '14', '65', NULL, '2012-07-01', NULL, 'a908c9', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-27 08:58:18'),
(274, '61212', '61212.jpg', 'Ing.', 'Dadáková', NULL, NULL, 'Jana', NULL, '15', '35', NULL, '2012-08-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-07-28 09:40:17'),
(275, '60111', '60111.jpg', 'MUDr.', 'Argalášová', NULL, NULL, 'Gabriela', NULL, '9', '12', NULL, '2012-09-01', NULL, 'd9fa05', '423', '730188192', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-01-22 10:54:08'),
(276, '61717', '61717.jpg', NULL, 'Kozáková', NULL, NULL, 'Dagmar', NULL, '19', '22', NULL, '2012-09-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(278, '62403', '62403.jpg', NULL, 'Matysová', NULL, NULL, 'Jana', NULL, '23', '20', NULL, '2012-09-01', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(279, '64203', '64203.jpg', NULL, 'Urbančíková', NULL, NULL, 'Jana', NULL, '9', '55', NULL, '2012-09-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(280, '64506', '64506.jpg', 'Bc.', 'Mišíková', NULL, 'Wzatková', 'Lenka', NULL, '23', '55', NULL, '2012-09-01', NULL, 'a31561', NULL, NULL, 'Vydáno', 'N', 'DPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-08 05:19:21'),
(282, '60105', '60105.jpg', NULL, 'Adámková', NULL, NULL, 'Gabriela', NULL, '16', '55', NULL, '2013-02-01', NULL, '94f700', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-12-30 08:55:45'),
(286, '62413', '62413.jpg', 'MUDr.', 'Materna', NULL, NULL, 'Petr', NULL, '1', '12', 'materna@khn.cz', '2013-07-01', NULL, '4287f5', '226', '739522569', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:37:34'),
(287, '62520', '62520.jpg', NULL, 'Motyková', NULL, NULL, 'Lubomíra', NULL, '19', '22', NULL, '2013-07-01', '2017-06-30', '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-27 09:42:44'),
(288, '64524', '64524.jpg', NULL, 'Weberová', NULL, NULL, 'Iveta', NULL, '24', '25', 'podatelna@khn.cz', '2013-07-01', NULL, '999999', '195', NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:11:13'),
(289, '62608', '62608.jpg', 'Mgr.', 'Polášková', NULL, NULL, 'Markéta', NULL, '12', '9', NULL, '2013-08-01', NULL, '66c908', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-07-07 05:42:00'),
(290, '61715', '61715.jpg', 'Ing.', 'Krucinová', NULL, NULL, 'Barbora', NULL, '15', '35', NULL, '2013-08-28', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-07-28 09:39:46'),
(292, '60602', '60602.jpg', NULL, 'Čapčíková', NULL, NULL, 'Petra', NULL, '17', '8', 'capcikova@khn.cz', '2013-10-01', NULL, 'ffee00', '434', NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 03:11:19'),
(294, '61609', '61609.jpg', 'MUDr.', 'Kempná', NULL, NULL, 'Jana', NULL, '13', '12', NULL, '2013-12-01', NULL, '089cc9', '503', '734690509', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(295, '64415', '64415.jpg', 'Ing.', 'Vojtěchovský', NULL, NULL, 'Tomáš', NULL, '25', '28', 'vojtechovsky@khn.cz', '2013-12-02', NULL, '999999', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:13:11'),
(296, '61802', '61802.jpg', NULL, 'Krečmerová', NULL, NULL, 'Jolana', NULL, '19', '22', NULL, '2013-12-11', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(297, '63230', '63230.jpg', NULL, 'Wenglorzová', NULL, NULL, 'Veronika', 'DiS.', '9', '55', NULL, '2014-01-03', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(299, '61325', '61325.jpg', NULL, 'Holubová', NULL, 'Hudečková', 'Lucie', 'DiS.', '9', '55', NULL, '2014-03-03', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-07-02 06:56:31'),
(300, '62314', '62314.jpg', NULL, 'Michalcová', NULL, NULL, 'Petra', 'DiS.', '10', '55', NULL, '2014-04-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-03-01 06:04:09'),
(301, '62404', '62404.jpg', NULL, 'Mazurková', NULL, NULL, 'Karla', NULL, '19', '22', NULL, '2014-05-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(303, '60214', '60214.jpg', 'MUDr.', 'Beran', NULL, NULL, 'Daniel', NULL, '1', '12', 'beran@khn.cz', '2014-06-01', NULL, '4287f5', '226', '607054676', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:07:36'),
(304, '64417', '64417.jpg', 'MUDr.', 'Vrtal', NULL, NULL, 'Jiří', NULL, '1', '12', 'vrtal@khn.cz', '2014-06-01', NULL, '4287f5', '226', '739522620', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:12:08'),
(305, '64527', '64527.jpg', 'Mgr.', 'Witoszová', NULL, NULL, 'Renáta', NULL, '12', '9', NULL, '2014-06-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 08:21:38'),
(306, '60506', '60506_20221117-174744.jpg', 'MUDr.', 'Canibal', NULL, NULL, 'Tomáš', NULL, '17', '38', 'canibal@khn.cz', '2014-07-01', NULL, 'ffee00', '441', '606789969', 'Vydáno', 'N', 'HPP', 1, 'Aktivní', '2020-02-09 21:00:00', '2022-11-17 16:47:44'),
(307, '61505', '61505.jpg', 'Ing. Mgr.', 'Janko', NULL, NULL, 'Přemysl', NULL, '17', '52', 'janko@khn.cz', '2014-07-01', NULL, 'ffee00', '555', '724228989', 'Vydáno', 'N', 'ČSO', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:18:24'),
(308, '60903', '60903.jpg', NULL, 'Ferfecká', NULL, NULL, 'Anna', NULL, '19', '22', NULL, '2014-07-25', NULL, '999999', '', '', 'Vydáno', 'N', 'DPČ', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(309, '64809', '64809.jpg', 'MUDr.', 'Kocurová', NULL, NULL, 'Kamila', NULL, '6', '12', NULL, '2014-08-01', NULL, '7833e8', '202', '737609109', 'Vydáno', 'N', 'HPP', 999, 'Mateřská', '2020-02-09 21:00:00', '2022-10-24 02:20:31'),
(310, '60908', '60908.jpg', 'Bc.', 'Gedleková', NULL, NULL, 'Alexandra', NULL, '28', '55', NULL, '2014-09-01', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(311, '61329', '61329.jpg', NULL, 'Lasotová', NULL, 'Chybidziurová', 'Romana', 'DiS.', '14', '65', NULL, '2014-09-01', NULL, 'a908c9', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-27 08:58:33'),
(312, '62418', '62418.jpg', NULL, 'Miczková', NULL, NULL, 'Denisa', NULL, '8', '20', NULL, '2014-09-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-05-12 05:39:33'),
(314, '60912', '60912.jpg', 'MUDr.', 'Franek', NULL, NULL, 'Jerzy', NULL, '15', '12', NULL, '2014-11-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'DPČ', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(315, '61603', '61603.jpg', 'MUDr.', 'Šimáková', NULL, 'Kalusková', 'Ivana', NULL, '15', '12', NULL, '2014-11-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'DPČ', 999, 'Mateřská', '2020-02-09 21:00:00', '2020-03-04 06:24:58'),
(316, '63825', '63825.jpg', 'MUDr.', 'Švecová', NULL, NULL, 'Jana', NULL, '15', '12', NULL, '2014-11-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'DPČ', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(317, '60616', '60616.jpg', NULL, 'Čermáková', NULL, NULL, 'Ivana', NULL, '19', '22', NULL, '2014-12-01', '2016-11-30', '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(318, '60902', '60902.jpg', 'Bc.', 'Feberová', NULL, NULL, 'Monika', NULL, '9', '55', NULL, '2014-12-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(319, '64602', '64602.jpg', 'Bc.', 'Jakubcová', NULL, NULL, 'Lucie', NULL, '6', '55', NULL, '2014-12-01', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-05-05 06:30:41'),
(320, '60502', '60502.jpg', NULL, 'Canibal', NULL, NULL, 'Milan', NULL, '17', '30', 'mcanibal@khn.cz', '2015-01-01', NULL, 'ffee00', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-20 09:45:51'),
(321, '11136', '11136.jpg', 'Ing.', 'Machala', NULL, NULL, 'Stanislav', NULL, '15', '2', NULL, '2015-01-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'DPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-27 08:52:20'),
(323, '62822', '62822.jpg', NULL, 'Pawlusová', NULL, NULL, 'Gabriela', NULL, '6', '29', NULL, '2015-01-07', '2016-12-31', '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(324, '62601', '62601.jpg', 'Mgr.', 'Mrózek', NULL, NULL, 'Agnieszka', NULL, '28', '55', NULL, '2015-01-15', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-10 06:10:18'),
(325, '62814', '62814.jpg', NULL, 'Pauerová', NULL, NULL, 'Lenka', 'DiS.', '23', '55', 'pauerova@khn.cz', '2015-02-02', NULL, 'a31561', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:31:30'),
(326, '63827', '63827.jpg', NULL, 'Šafránková', NULL, NULL, 'Hana', NULL, '18', '27', NULL, '2015-02-02', '2018-07-31', 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 06:23:16'),
(327, '60922', '60922.jpg', 'MUDr.', 'Frydová', NULL, NULL, 'Kateřina', NULL, '15', '12', NULL, '2015-03-01', NULL, 'c90818', NULL, '730547122', 'Vydáno', 'N', 'HPP', 999, 'Mateřská', '2020-02-09 21:00:00', '2022-09-21 02:36:59'),
(331, '62505', '62505.jpg', 'MUDr.', 'Mokroszová', NULL, NULL, 'Jana', NULL, '6', '12', NULL, '2015-03-21', NULL, '7833e8', '', '', 'Vydáno', 'N', 'DPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(333, '61718', '61718.jpg', 'MUDr.', 'Kopecká', NULL, NULL, 'Sylva', NULL, '5', '12', NULL, '2015-04-01', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-14 09:57:04'),
(334, '61412', 'no_image.png', 'MUDr.', 'Johannová', NULL, NULL, 'Irena', NULL, '6', '12', NULL, '2015-04-18', NULL, '7833e8', '', '', 'Vydáno', 'N', 'DPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-11-14 05:18:23'),
(336, '63806', '63806.jpg', 'Bc.', 'Slaná', NULL, NULL, 'Michaela', NULL, '23', '55', NULL, '2015-07-01', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, 'Mateřská', '2020-02-09 21:00:00', '2020-03-04 06:07:40'),
(338, '61928', '61928.jpg', 'Mgr.', 'Szkanderová', NULL, 'Lepíková', 'Pavla', NULL, '22', '6', NULL, '2015-08-05', NULL, '2c612a', NULL, '739545625', 'Vydáno', 'N', 'HPP', 999, 'Mateřská', '2020-02-09 21:00:00', '2021-05-13 05:21:40'),
(339, '60708', '60708.jpg', 'MUDr.', 'Pinkasová', NULL, 'Diatková', 'Jana', NULL, '9', '12', 'diatkova@khn.cz', '2015-08-10', NULL, 'd9fa05', '423', '608435606', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:28:43'),
(340, '60304', '60304.jpg', NULL, 'Berešíková', NULL, NULL, 'Marcela', 'DiS.', '11', '29', 'beresikova@khn.cz', '2015-09-01', '2016-08-31', '66c908', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Mateřská', '2020-02-09 21:00:00', '2022-08-17 08:16:47'),
(341, '61511', '61511.jpg', 'MUDr.', 'Dadoková', NULL, 'Jelínková', 'Monika', NULL, '6', '12', NULL, '2015-09-01', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(342, '60516', '60516.jpg', NULL, 'Cieślová', NULL, NULL, 'Jana', NULL, '29', '36', NULL, '2015-10-01', '2016-09-30', '2c612a', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 04:54:10'),
(343, '63829', '63829.jpg', 'MUDr.', 'Škutová', NULL, NULL, 'Monika', NULL, '6', '12', 'skutova@khn.cz', '2015-10-26', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'DPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:18:47'),
(345, '62419', '62419.jpg', 'Bc.', 'Miczková', NULL, NULL, 'Veronika', NULL, '8', '55', NULL, '2015-11-02', '2016-10-31', 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(346, '60330', '60330.jpg', 'Mgr.', 'Boszczyková', NULL, NULL, 'Silvie', NULL, '29', '6', NULL, '2016-01-01', NULL, '2c612a', '', '730188193', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-01-22 11:43:32'),
(348, '60909', '60909.jpg', NULL, 'Havlová', NULL, NULL, 'Soňa', NULL, '12', '9', NULL, '2016-02-01', '2017-01-31', '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 08:15:31'),
(349, '61902', '61902.jpg', NULL, 'Kramná', NULL, NULL, 'Romana', NULL, '19', '22', NULL, '2016-03-01', '2017-02-28', '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(350, '62527', '62527.jpg', 'Bc.', 'Hrivňáková', NULL, 'Mucinová', 'Veronika', NULL, '17', '46', 'mucinova@khn.cz', '2016-03-01', NULL, 'ffee00', NULL, '730188195', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-20 09:45:02'),
(351, '64210', '64210.jpg', 'Ing.', 'Uvírová', NULL, NULL, 'Martina', NULL, '17', '59', 'uvirova@khn.cz', '2016-03-14', '2017-02-28', 'ffee00', '444', '604447645', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:17:30'),
(352, '61625', '61625_20230102-070832.jpg', NULL, 'Klika', 'ffsdfdf', NULL, 'Miroslav', NULL, '17', '57', 'klika@khn.cz', '2016-04-01', NULL, 'ffee00', NULL, '739545626', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2023-01-02 06:08:32'),
(353, '61708', '61708.jpg', NULL, 'Kmeťová', NULL, NULL, 'Ema', NULL, '28', '20', NULL, '2016-04-01', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(354, '64006', '64006.jpg', NULL, 'Tabarová', NULL, NULL, 'Renáta', NULL, '19', '22', NULL, '2016-04-01', '2019-03-31', '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(355, '64823', '64823.jpg', NULL, 'Zbožínková', NULL, NULL, 'Kateřina', NULL, '12', '55', NULL, '2016-05-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-10-27 08:07:33'),
(356, '64018', '64018.jpg', NULL, 'Tomčániová', NULL, NULL, 'Karin', NULL, '3', '20', NULL, '2016-05-16', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-10-17 06:32:26'),
(357, '61314', '61314.jpg', NULL, 'Hracký', NULL, NULL, 'Jaroslav', NULL, '25', '62', 'hracky@khn.cz', '2016-06-01', NULL, '999999', '403', '734681961', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-23 09:16:29'),
(358, '60325', '60325.jpg', 'Ing.', 'Byrtusová', NULL, NULL, 'Silvie', NULL, '17', '54', 'byrtusova@khn.cz', '2016-06-01', NULL, 'ffee00', '426', '724228815', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:54:30'),
(359, '64427', '64427.jpg', NULL, 'Waloszková', NULL, NULL, 'Jana', NULL, '11', '36', NULL, '2016-06-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:16:10'),
(360, '63910', '63910.jpg', NULL, 'Šurková', NULL, NULL, 'Denisa', NULL, '19', '22', NULL, '2016-06-13', NULL, '999999', '', '', 'Vydáno', 'N', 'DPČ', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(361, '61616', '61616.jpg', NULL, 'Kaniová', NULL, NULL, 'Tereza', NULL, '1', '29', NULL, '2016-06-15', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-02 02:37:07'),
(362, '63218', '63218.jpg', NULL, 'Raszyková', NULL, NULL, 'Halina', NULL, '5', '55', NULL, '2016-06-16', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 09:27:52'),
(363, '62913', '62913.jpg', 'Bc.', 'Pospíšilová', NULL, NULL, 'Kateřina', NULL, '15', '35', NULL, '2016-07-01', NULL, 'c90818', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Mateřská', '2020-02-09 21:00:00', '2022-04-06 02:34:34'),
(364, '62925', '62925.jpg', NULL, 'Puchalová', NULL, NULL, 'Uršula', NULL, '8', '55', NULL, '2016-07-01', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-05-03 08:20:24'),
(365, '61323', '61323.jpg', NULL, 'Hudčeková', NULL, NULL, 'Monika', NULL, '17', '26', 'hudcekova@khn.cz', '2016-07-11', NULL, 'ffee00', NULL, '703866581', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:01:39'),
(366, '63901', '63901.jpg', NULL, 'Šerá', NULL, NULL, 'Natálie', NULL, '28', '29', NULL, '2016-08-17', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(369, '62001', '62001.jpg', 'Mgr.', 'Ligocká', NULL, NULL, 'Zuzana', NULL, '14', '65', NULL, '2016-09-01', NULL, 'a908c9', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-03-03 10:18:43'),
(370, '60312', '60312.jpg', NULL, 'Bilanová', NULL, NULL, 'Alena', NULL, '23', '41', 'bilanova@khn.cz', '2016-10-01', NULL, 'a31561', '121', '734160802', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:48:00'),
(372, '61012', '61012.jpg', 'MUDr.', 'Grobelná', NULL, NULL, 'Hana', NULL, '6', '12', NULL, '2016-10-01', NULL, '7833e8', '202', '605295916', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(374, '61006', '61006.jpg', 'Bc.', 'Gavroňová', NULL, NULL, 'Petra', NULL, '12', '9', NULL, '2016-11-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-06-09 05:42:00'),
(375, '64402', '64402.jpg', NULL, 'Viktorová', NULL, NULL, 'Andrea', NULL, '11', '20', NULL, '2016-11-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:19:03'),
(376, '62610', '62610.jpg', NULL, 'Nawratová', NULL, NULL, 'Petra', 'DiS.', '9', '55', NULL, '2016-11-14', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-08-06 06:18:59'),
(377, '61521', '61521.jpg', NULL, 'Ježíšková', NULL, NULL, 'Dominika', 'DiS.', '18', '18', NULL, '2016-12-01', NULL, 'ffa200', NULL, '725344865', 'Vydáno', 'N', 'HPP', 999, 'Mateřská', '2020-02-09 21:00:00', '2022-09-21 02:42:06'),
(379, '60201', '60201.jpg', NULL, 'Barczoková', NULL, NULL, 'Gabriela', NULL, '6', '20', NULL, '2016-12-20', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-01 18:49:44'),
(380, '61111', '61111.jpg', NULL, 'Gřibová', NULL, NULL, 'Markéta', 'DiS.', '18', '18', 'gribova@khn.cz', '2017-01-02', NULL, 'ffa200', '361', '725344865', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 03:16:42'),
(381, '63807', '63807.jpg', NULL, 'Sznapková', NULL, NULL, 'Taťána', NULL, '15', '3', 'sznapkova@khn.cz', '2017-01-02', NULL, 'c90818', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:19:56'),
(383, '64522', '64522.jpg', 'Mgr.', 'Wróbel', NULL, 'Wilczková', 'Jana', NULL, '9', '55', NULL, '2017-02-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Mateřská', '2020-02-09 21:00:00', '2022-01-25 04:44:41'),
(384, '61822', '61822.jpg', 'MUDr.', 'Krajča', NULL, NULL, 'Jan', NULL, '15', '12', NULL, '2017-02-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-06 11:58:14'),
(385, '63906', '63906.jpg', NULL, 'Šimunková', NULL, NULL, 'Alexandra', NULL, '3', '36', NULL, '2017-02-15', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-04-14 07:38:11'),
(386, '60328', '60328.jpg', 'Mgr.', 'Budzińska', NULL, NULL, 'Dorota', NULL, '12', '9', NULL, '2017-03-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 09:25:49'),
(387, '61113', '61113.jpg', 'PharmDr.', 'Karpetová', NULL, NULL, 'Olga', NULL, '22', '6', 'karpetova@khn.cz', '2022-09-27', NULL, '2c612a', NULL, '725669165', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-10-04 06:22:45'),
(388, '63219', '63219.jpg', 'Bc.', 'Rigová', NULL, NULL, 'Magdalena', NULL, '12', '9', NULL, '2017-04-03', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:18:48'),
(389, '64211', '64211.jpg', 'MUDr.', 'Rychtová', NULL, 'Víchová', 'Helena', NULL, '15', '12', NULL, '2017-04-13', NULL, 'c90818', '', '', 'Vydáno', 'N', 'DPČ', 999, 'Mateřská', '2020-02-09 21:00:00', '2020-03-04 06:04:35'),
(390, '60803', '60803.jpg', NULL, 'Entnerová', NULL, NULL, 'Dagmar', 'DiS.', '23', '55', NULL, '2012-03-01', NULL, '4287f5', '', '', 'Vydáno', 'N', 'DPČ', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-09-01 02:14:23'),
(391, '61311', '61311.jpg', NULL, 'Chobotová', NULL, NULL, 'Slavka', NULL, '19', '22', NULL, '2017-05-09', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(392, '63030', '63030.jpg', NULL, 'Przybylová', NULL, NULL, 'Barbara', NULL, '16', '20', NULL, '2017-05-15', NULL, '94f700', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(393, '61807', '61807.jpg', 'Bc.', 'Koudelová', NULL, NULL, 'Kateřina', NULL, '12', '9', NULL, '2017-06-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 09:25:28'),
(394, '61803', '61803.jpg', 'Ing.', 'Kolatková', NULL, NULL, 'Marina', NULL, '14', '30', 'kolatkova@khn.cz', '2017-06-01', NULL, 'a908c9', '183', '724829867', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-07-28 12:12:34'),
(396, '61621', '61621.jpg', NULL, 'Kocůrková', NULL, NULL, 'Anna', 'DiS.', '6', '29', NULL, '2017-06-14', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Mateřská', '2020-02-09 21:00:00', '2021-11-03 04:12:57'),
(397, '61619', '61619.jpg', 'Mgr.', 'Kalčíková', NULL, NULL, 'Miroslava', NULL, '12', '9', NULL, '2017-07-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 09:26:37'),
(398, '64424', '64424.jpg', 'MUDr.', 'Wajdová', NULL, NULL, 'Gabriela', NULL, '5', '12', 'wajdova@khn.cz', '2017-07-01', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:11:52'),
(399, '62924', '62924.jpg', NULL, 'Podracká', NULL, NULL, 'Albína', NULL, '28', '29', NULL, '2017-07-01', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(400, '60413', '60413.jpg', NULL, 'Ciupová', NULL, 'Buławová', 'Miroslava', 'DiS.', '18', '18', NULL, '2017-07-03', NULL, 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, 'Mateřská', '2020-02-09 21:00:00', '2020-03-04 04:54:24'),
(401, '62902', '62902.jpg', NULL, 'Plodková', NULL, NULL, 'Hana', NULL, '28', '20', NULL, '2017-07-10', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(403, '60121', '60121.jpg', 'MUDr.', 'Togtokhjargal', NULL, NULL, 'Ariunjargal', NULL, '6', '12', NULL, '2017-07-15', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(404, '61909', '61909.jpg', 'MUDr.', 'Kučera', NULL, NULL, 'Josef', NULL, '1', '12', 'kucera@khn.cz', '2017-07-17', NULL, '4287f5', '226', '774905020', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:07:28'),
(405, '60801', '60801.jpg', 'Bc.', 'Ebert Drozdíková', 'Drozdíková', NULL, 'Eva', NULL, '5', '41', 'drozdikova@khn.cz', '2017-07-19', NULL, '4287f5', '291', '724238749', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-08-04 03:57:20'),
(407, '61711', '61711.jpg', NULL, 'Koplová', NULL, NULL, 'Lenka', NULL, '6', '20', NULL, '2017-08-01', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(409, '61705', '61705.jpg', 'Bc.', 'Koloničná', NULL, NULL, 'Renata', NULL, '14', '65', NULL, '2017-09-01', NULL, 'a908c9', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-27 08:58:41'),
(410, '61808', '61808.jpg', 'MUDr.', 'Klimszová', NULL, NULL, 'Kristýna', NULL, '27', '12', NULL, '2017-09-15', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(411, '64525', '64525.jpg', NULL, 'Wernerová', NULL, NULL, 'Nikola', 'DiS.', '8', '55', NULL, '2017-10-01', NULL, 'd9fa05', '254', NULL, 'Vydáno', 'N', 'DPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-03-09 07:51:35'),
(412, '61413', '61413.jpg', 'Bc.', 'Janová', NULL, NULL, 'Nikola', NULL, '1', '55', NULL, '2017-10-01', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'DPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-06 08:11:57'),
(413, '64822', '64822.jpg', NULL, 'Zábržová', NULL, NULL, 'Klára', NULL, '1', '55', NULL, '2017-10-01', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, 'Mateřská', '2020-02-09 21:00:00', '2020-03-04 06:21:34'),
(415, '60301', '60301.jpg', NULL, 'Benešová', NULL, NULL, 'Blanka', NULL, '8', '55', NULL, '2017-10-02', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(416, '61526', '61526.jpg', NULL, 'Johnová', NULL, NULL, 'Michaela', NULL, '1', '29', NULL, '2017-11-01', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 06:31:21'),
(418, '64309', '64309.jpg', NULL, 'Vranová', NULL, NULL, 'Štěpánka', NULL, '5', '55', NULL, '2017-11-27', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(419, '64817', '64817.jpg', 'MUDr.', 'Zvarík', NULL, NULL, 'Pavol', NULL, '15', '12', 'zvarik@khn.cz', '2017-12-01', NULL, 'c90818', '267', '776376793', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:08:57'),
(420, '63907', '63907.jpg', NULL, 'Ščípová', NULL, NULL, 'Taťána', NULL, '4', '55', NULL, '2017-12-01', NULL, '4287f5', NULL, '731129320', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-21 02:20:35'),
(421, '60914', '60914.jpg', NULL, 'Figurová', NULL, NULL, 'Ivana', NULL, '24', '37', NULL, '2017-12-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(422, '61308', '61308.jpg', NULL, 'Hlubinová', NULL, NULL, 'Dagmar', NULL, '19', '22', NULL, '2022-04-07', NULL, '999999', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-04-07 05:34:58'),
(423, '60421', '60421.jpg', NULL, 'Bořutová', NULL, NULL, 'Marcela', NULL, '15', '35', NULL, '2017-12-19', NULL, 'c90818', '', '', 'Vydáno', 'N', 'DPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-10 12:09:15'),
(424, '62819', '62819.jpg', NULL, 'Palašová', NULL, NULL, 'Žaneta', NULL, '3', '55', NULL, '2017-12-27', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-04-14 07:38:38'),
(425, '63905', '63905.jpg', NULL, 'Šubová', NULL, NULL, 'Michaela', NULL, '24', '37', NULL, '2018-01-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(426, '60401', '60401.jpg', 'Mgr.', 'Bogocz', NULL, NULL, 'Danuta', NULL, '6', '10', NULL, '2018-01-01', NULL, '7833e8', '301', '724370845', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-02-22 06:47:10'),
(427, '60921', '60921.jpg', NULL, 'Frajkovský', NULL, NULL, 'Jakub', NULL, '18', '11', NULL, '2018-01-02', NULL, 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-27 08:55:42'),
(428, '61229', '61229.jpg', NULL, 'Hrozová', 'Nováková', NULL, 'Marcela', NULL, '19', '22', NULL, '2018-01-02', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-01-21 06:53:59'),
(429, '62524', '62524.jpg', NULL, 'Wilczek', NULL, NULL, 'Kateřina', NULL, '7', '3', 'wilczek@khn.cz', '2018-01-02', NULL, '222222', '315', NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:10:34'),
(430, '63227', '63227.jpg', NULL, 'Rucká', NULL, NULL, 'Veronika', NULL, '30', '29', NULL, '2018-01-02', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-04-06 05:49:57'),
(431, '62613', '62613.jpg', NULL, 'Nalewajková', NULL, NULL, 'Petra', NULL, '1', '20', NULL, '2018-01-17', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-09-13 02:33:44'),
(432, '60323', '60323.jpg', 'Bc.', 'Božovská', NULL, NULL, 'Petra', NULL, '9', '55', 'bozovska@khn.cz', '2018-02-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:51:56'),
(433, '63425', '63425.jpg', NULL, 'Skořepová', NULL, NULL, 'Adéla', NULL, '6', '20', NULL, '2018-02-01', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-04-01 09:58:12'),
(434, '62908', '62908.jpg', 'Bc.', 'Paszová', NULL, NULL, 'Dominika', NULL, '28', '55', NULL, '2018-03-01', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-01 05:20:39'),
(435, '62716', '62716.jpg', NULL, 'Kawková', NULL, NULL, 'Kateřina', NULL, '6', '20', NULL, '2018-03-01', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(438, '61213', '61213.jpg', NULL, 'Holomková', NULL, NULL, 'Markéta', NULL, '11', '55', NULL, '2018-05-07', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:17:59'),
(439, '62927', '62927.jpg', NULL, 'Pružinská', NULL, NULL, 'Gabriela', NULL, '15', '3', NULL, '2018-05-21', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 09:37:42'),
(440, '63912', '63912.jpg', 'MUDr.', 'Šupšáková', NULL, NULL, 'Petra', 'MBA, LL.M.', '15', '12', 'supsakova@khn.cz', '2018-06-01', NULL, 'c90818', '267', '724001217', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:18:18'),
(444, '63609', '63609.jpg', 'Bc.', 'Slobodová', NULL, NULL, 'Helena', NULL, '23', '55', NULL, '2018-07-02', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(445, '63913', '63913.jpg', NULL, 'Štajnerová', NULL, NULL, 'Hana', NULL, '5', '20', NULL, '2018-08-01', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-10 06:11:55'),
(447, '62508', '62508.jpg', NULL, 'Mlotková', NULL, NULL, 'Kateřina', NULL, '15', '55', NULL, '2018-08-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(448, '63411', '63411.jpg', 'MUDr.', 'Kubináková', NULL, 'Sembolová', 'Pavlína', NULL, '1', '12', NULL, '2018-08-01', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, 'Mateřská', '2020-02-09 21:00:00', '2020-03-04 05:30:16'),
(449, '60424', '60424.jpg', NULL, 'Brzósková', NULL, NULL, 'Romana', NULL, '15', '3', NULL, '2018-08-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-17 09:37:26'),
(450, '61330', '61330.jpg', NULL, 'Chmiel', NULL, NULL, 'Adam', 'DiS.', '1', '41', 'chmiel@khn.cz', '2018-08-01', NULL, '4287f5', '222', '734695208', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:02:52'),
(452, '61129', '61129.jpg', NULL, 'Herdová', NULL, NULL, 'Hana', NULL, '1', '55', NULL, '2018-09-01', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Mateřská', '2020-02-09 21:00:00', '2021-11-03 04:13:52'),
(453, '61821', '61821.jpg', 'Bc.', 'Jastrzembská', NULL, NULL, 'Barbora', NULL, '11', '55', NULL, '2018-09-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:18:17'),
(455, '63914', '63914.jpg', 'Bc.', 'Nawrat', NULL, 'Šostoková', 'Simona', NULL, '9', '55', NULL, '2018-09-03', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-07-21 09:06:48'),
(456, '64612', '64612.jpg', NULL, 'Zátopková', NULL, NULL, 'Vladislava', NULL, '1', '20', NULL, '2018-09-03', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(457, '64827', '64827.jpg', 'Ing.', 'Zwierzyna', NULL, NULL, 'Miriam', NULL, '15', '35', NULL, '2018-09-03', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(458, '61303', 'no_image.png', 'MUDr.', 'Horáková', NULL, NULL, 'Jana', NULL, '6', '12', NULL, '2018-09-03', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-11-14 05:18:04'),
(459, '64320', '64320.jpg', 'Ing.', 'Vajglová', NULL, NULL, 'Sára', NULL, '17', '56', 'vajglovas@khn.cz', '2018-09-10', NULL, 'ffee00', '442', '736260206', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:16:41'),
(460, '61908', '61908.jpg', 'MUDr.', 'Kusová', NULL, NULL, 'Jana', NULL, '13', '30', 'kusovaj@khn.cz', '2018-10-01', NULL, NULL, '501, 531', '724049924', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:40:57'),
(462, '62220', '62220.jpg', NULL, 'Gruszkowská', NULL, NULL, 'Marcela', NULL, '23', '55', NULL, '2018-10-01', NULL, 'a31561', '', '', 'Vydáno', 'N', 'DPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(464, '62408', '62408.jpg', NULL, 'Orságová', NULL, NULL, 'Marcela', NULL, '5', '63', NULL, '2018-11-01', NULL, '7833e8', '228, 229', NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-05-31 04:48:57'),
(465, '63409', '63409.jpg', 'Bc.', 'Smrčková', NULL, NULL, 'Sandra', NULL, '14', '65', NULL, '2018-11-01', NULL, 'a908c9', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-04-15 04:00:08'),
(466, '62218', '62218.jpg', NULL, 'Linkovová', NULL, NULL, 'Šárka', NULL, '19', '22', NULL, '2018-11-23', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(467, '60123', '60123.jpg', NULL, 'Badurová', NULL, NULL, 'Lenka', NULL, '19', '22', NULL, '2018-11-28', NULL, '999999', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-10 08:29:29'),
(468, '61906', '61906.jpg', NULL, 'Klimánková', NULL, NULL, 'Jana', NULL, '28', '55', NULL, '2018-12-01', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(469, '63106', '63106.jpg', NULL, 'Pukowiecová', NULL, NULL, 'Monika', NULL, '11', '36', NULL, '2018-12-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:15:41'),
(470, '61414', '61414.jpg', 'MUDr.', 'Kollerová', NULL, NULL, 'Eliška', NULL, '12', '12', 'kollerova@khn.cz', '2019-01-01', NULL, '66c908', NULL, '725669180', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-10-26 06:32:23'),
(471, '60926', '60926.jpg', NULL, 'Fúčelová', NULL, NULL, 'Dagmar', NULL, '6', '20', NULL, '2019-01-02', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(472, '63908', '63908.jpg', 'Bc.', 'Šilingová', NULL, NULL, 'Petra', NULL, '6', '55', NULL, '2019-01-02', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-07-08 02:08:33'),
(473, '63729', '63729.jpg', 'Bc.', 'Sydorová', NULL, NULL, 'Hana', NULL, '9', '55', NULL, '2019-01-02', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(475, '60612', '60612.jpg', NULL, 'Chrzaszczová', NULL, NULL, 'Adéla', 'DiS.', '28', '55', NULL, '2019-01-08', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(476, '63915', '63915.jpg', NULL, 'Szkutová', NULL, NULL, 'Jana', NULL, '6', '55', NULL, '2019-01-10', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(477, '62911', '62911.jpg', 'Bc.', 'Mühldorfová', NULL, NULL, 'Daniela', NULL, '20', '55', NULL, '2019-01-16', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-03-09 09:28:02'),
(480, '61415', '61415.jpg', NULL, 'Jaworková', NULL, NULL, 'Dagmar', NULL, '19', '22', NULL, '2019-03-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(481, '64821', '64821.jpg', 'Bc.', 'Havlíčková', NULL, NULL, 'Krystyna', NULL, '23', '55', NULL, '2019-03-11', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(482, '61128', '61128.jpg', 'Mgr.', 'Hanusková', NULL, NULL, 'Zdenka', NULL, '24', '37', NULL, '2019-03-12', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 07:38:26'),
(483, '61904', '61904.jpg', NULL, 'Králová', NULL, NULL, 'Lucie', NULL, '9', '55', 'kralova@khn.cz', '2019-04-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:09:25'),
(485, '62728', '62728.jpg', 'Bc.', 'Kociánová', NULL, NULL, 'Eva', NULL, '1', '55', NULL, '2019-05-01', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(486, '62008', '62008.jpg', NULL, 'Koĺatková', NULL, NULL, 'Kateřina', NULL, '1', '55', NULL, '2019-05-01', NULL, '4287f5', '183', '724829867', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(487, '61014', '61014.jpg', NULL, 'Glatzová', NULL, NULL, 'Blanka', NULL, '1', '55', NULL, '2019-05-01', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(489, '61105', '61105.jpg', NULL, 'Grunzová', NULL, NULL, 'Růžena', NULL, '19', '22', NULL, '2019-05-27', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(490, '62722', '62722.jpg', NULL, 'Ondreášová', NULL, NULL, 'Jana', NULL, '24', '37', NULL, '2019-06-03', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 07:38:20'),
(492, '60223', '60223.jpg', NULL, 'Bartošová', NULL, NULL, 'Kateřina', 'DiS.', '6', '55', NULL, '2019-07-01', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-09-14 06:45:17'),
(496, '61829', '61829.jpg', 'MUDr.', 'Krejsa', NULL, NULL, 'Vojtěch', NULL, '11', '12', 'krejsa@khn.cz', '2019-08-01', NULL, '66c908', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 05:08:58'),
(498, '61126', '61126.jpg', NULL, 'Hnyk', NULL, NULL, 'Jaroslav', NULL, '6', '29', NULL, '2019-09-02', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(500, '61416', '61416.jpg', 'MUDr.', 'Holubová', NULL, NULL, 'Michaela', NULL, '6', '12', NULL, '2019-10-01', NULL, '7833e8', NULL, '725669170', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-09-07 05:08:02'),
(501, '60930', '60930.jpg', 'Bc.', 'Gallusová', NULL, NULL, 'Karin', NULL, '6', '55', NULL, '2019-10-01', NULL, '7833e8', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-03 04:23:25'),
(502, '60701', '60701.jpg', 'MUDr.', 'Daniel', NULL, NULL, 'Filip', NULL, '28', '12', NULL, '2019-10-01', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-04 04:57:41'),
(504, '64323', '64323.jpg', NULL, 'Valicová', NULL, NULL, 'Lenka', NULL, '11', '36', NULL, '2019-11-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:19:43'),
(505, '60622', '60622.jpg', 'Mgr.', 'Czempielová', NULL, NULL, 'Jana', NULL, '28', '55', NULL, '2019-11-01', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(506, '63919', '63919.jpg', NULL, 'Ščípa', NULL, NULL, 'Roman', NULL, '22', '41', NULL, '2019-12-02', NULL, '2c612a', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-01-18 08:55:52'),
(508, '61828', '61828.jpg', NULL, 'Kozáková', NULL, NULL, 'Renáta', NULL, '7', '36', NULL, '2019-12-12', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-18 03:54:57'),
(509, '62015', '62015.jpg', NULL, 'Kocajanidisová', NULL, NULL, 'Ladislava', NULL, '6', '29', NULL, '2019-12-16', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(510, '62727', '62727.jpg', NULL, 'Oslizloková', NULL, NULL, 'Lenka', NULL, '24', '37', NULL, '2020-01-02', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-19 17:42:43'),
(511, '60623', '60623.jpg', NULL, 'Czyžová', NULL, NULL, 'Pavlína', NULL, '19', '22', NULL, '2020-01-25', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', NULL),
(512, '61215', '61215.jpg', NULL, 'Horká', NULL, NULL, 'Marie', NULL, '15', '35', NULL, '2000-01-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'DPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-02-20 03:28:01'),
(516, '60219', '60219.jpg', 'Bc.', 'Bernatíková', NULL, NULL, 'Hana', NULL, '23', '55', NULL, '2020-02-01', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-01-14 04:34:45'),
(518, '61419', '61419.jpg', NULL, 'Halčáková', NULL, NULL, 'Jaroslava', NULL, '23', '55', NULL, '2018-06-13', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-17 08:55:23', '2020-02-18 07:07:23'),
(519, '60102', '60102_20221117-174537.jpg', 'MUDr.', 'Adamová', NULL, NULL, 'Andrea', NULL, '9', '12', NULL, '2019-11-01', NULL, 'd9fa05', '423', '604153029', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-18 03:20:27', '2022-11-17 16:45:37'),
(521, '63613', '63613.jpg', 'MUDr.', 'Solák', NULL, NULL, 'Marek', NULL, '28', '12', 'solak@khn.cz', '2020-02-01', NULL, 'ffa600', '145', '607156597', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-18 03:42:31', '2022-08-22 09:52:02'),
(522, '62016', '62016.jpg', 'MUDr.', 'Kantor', NULL, NULL, 'Ivo', NULL, '28', '12', 'kantor@khn.cz', '2020-02-01', NULL, 'ffa600', '145', '603370305', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-18 03:43:29', '2022-06-13 05:15:00'),
(523, '60130', '60130.jpg', 'MUDr.', 'Blahut', NULL, NULL, 'Jan', NULL, '28', '12', 'blahut@khn.cz', '2020-02-01', NULL, 'ffa600', '145', '774088790', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-18 03:44:14', '2022-06-13 02:48:42'),
(524, '60128', '60128.jpg', 'MUDr.', 'Barabas', NULL, NULL, 'Peter', NULL, '28', '12', 'barabas@khn.cz', '2020-02-01', NULL, 'ffa600', '145', '703866577', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-18 03:45:20', '2022-06-13 02:06:15'),
(526, '62322', '62322.jpg', NULL, 'Mašlár', NULL, NULL, 'Petr', NULL, '25', '28', 'maslar@khn.cz', '2020-02-03', NULL, '999999', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-18 03:48:21', '2022-06-13 02:38:18'),
(527, '64610', '64610.jpg', NULL, 'Zagrapanová', NULL, NULL, 'Eva', NULL, '8', '55', NULL, '2020-02-03', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-18 03:52:43', '2020-02-18 03:52:43'),
(528, '63520', '63520.jpg', NULL, 'Sobociková', NULL, NULL, 'Lucie', NULL, '9', '55', NULL, '2020-02-03', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-18 03:53:57', '2020-02-18 03:53:57'),
(529, '60408', '60408.jpg', NULL, 'Billová', NULL, NULL, 'Kateřina', NULL, '16', '55', NULL, '2020-02-01', NULL, '94f700', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-18 03:59:15', '2022-04-07 05:50:53'),
(530, '60107', '60107.jpg', NULL, 'Állóová', NULL, NULL, 'Tatiana', NULL, '8', '55', NULL, '2020-02-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-18 04:00:31', '2020-02-18 04:00:31'),
(531, '64403', '64403.jpg', NULL, 'Vlčnovská', NULL, NULL, 'Ivana', NULL, '28', '55', NULL, '2020-02-01', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-18 04:01:30', '2020-03-02 08:19:03'),
(532, '62427', '62427.jpg', NULL, 'Minarčíková', NULL, NULL, 'Alexandra', NULL, '28', '55', NULL, '2020-02-01', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-18 04:03:11', '2020-02-18 04:03:11'),
(535, '61812', '61812.jpg', NULL, 'Knyblová', NULL, NULL, 'Marie', NULL, '18', '11', NULL, '2020-01-02', NULL, 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-18 04:12:41', '2020-02-27 08:54:09'),
(537, '63921', '63921.jpg', NULL, 'Šebestová', NULL, NULL, 'Marie', NULL, '11', '55', NULL, '2020-02-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-02 08:11:57'),
(541, '62710', '62710.jpg', NULL, 'Olszarová', NULL, NULL, 'Eva', NULL, '19', '22', NULL, '2020-02-03', NULL, '999999', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2021-03-17 11:02:19'),
(542, '62523', '62523.jpg', NULL, 'Musiolková', NULL, NULL, 'Dana', NULL, '1', '55', NULL, '2020-02-01', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Mateřská', '2020-02-09 21:00:00', '2022-11-14 05:41:44'),
(543, '62521', '62521.jpg', NULL, 'Moravcová', NULL, NULL, 'Zdeňka', NULL, '19', '22', NULL, '2020-02-01', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2020-03-02 07:54:25'),
(545, '62510', '62510.jpg', NULL, 'Moravčinská', NULL, NULL, 'Ivana', NULL, '18', '18', 'moravcinska@khn.cz', '2020-02-01', NULL, 'ffa200', '361', '724829875', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-02-09 21:00:00', '2022-06-13 02:36:08'),
(555, '61119', '61119.jpg', NULL, 'Grígerová', NULL, NULL, 'Lenka', NULL, '10', '3', 'grigerova@khn.cz', '2020-03-02', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-03-02 06:13:57', '2022-06-13 03:15:56'),
(562, '62107', '62107.jpg', NULL, 'Krkošková', NULL, NULL, 'Kristina', NULL, '28', '55', NULL, '2020-03-02', NULL, 'ffa600', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-03-03 08:14:32', '2020-03-05 08:00:24'),
(563, '60830', '60830.jpg', 'MUDr.', 'Filuś', NULL, NULL, 'Dominika', NULL, '28', '12', 'filus@khn.cz', '2020-03-02', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-03-03 08:15:48', '2022-06-13 03:15:17'),
(569, '62909', '62909.jpg', NULL, 'Polačková', NULL, NULL, 'Markéta', NULL, '15', '55', NULL, '2020-05-04', NULL, 'c90818', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-04-30 03:17:51', '2021-03-08 07:56:42'),
(571, '64613', '64613.jpg', NULL, 'Zarubanová', NULL, NULL, 'Pavlína', NULL, '8', '20', NULL, '2020-06-01', NULL, 'd9fa05', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-05-12 06:23:09', '2020-06-01 04:31:37'),
(573, '60715', '60715.jpg', 'MUDr.', 'Dlabaja', NULL, NULL, 'Petr', NULL, '28', '12', 'dlabaja@khn.cz', '2020-06-01', NULL, 'ffa600', '145', '778140086', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-06-01 04:22:49', '2022-07-28 12:28:30'),
(575, '61421', '61421.jpg', 'Bc.', 'Hájková', NULL, NULL, 'Kateřina', NULL, '12', '9', NULL, '2020-07-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-06-15 08:48:42', '2020-07-03 02:17:31'),
(578, '60827', '60827.jpg', NULL, 'Buščíková', NULL, 'Gellnarová', 'Lucie', NULL, '8', '55', NULL, '2020-07-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-06-23 07:56:10', '2021-08-26 08:09:59'),
(579, '60716', '60716.jpg', 'Bc.', 'Dlugošová', NULL, NULL, 'Denisa', NULL, '12', '9', NULL, '2020-07-01', NULL, '66c908', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-07-01 04:36:33', '2020-07-01 04:36:33'),
(584, '63925', '63925.jpg', NULL, 'Škorvanová', NULL, NULL, 'Jaroslava', NULL, '19', '22', NULL, '2020-08-03', NULL, '999999', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-08-05 05:41:47', '2021-07-30 02:44:08'),
(585, '63108', '63108.jpg', NULL, 'Putniorzová', NULL, NULL, 'Dana', NULL, '19', '22', NULL, '2020-08-10', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-08-13 02:23:56', '2020-08-13 02:23:56'),
(586, '63612', '63612.jpg', NULL, 'Smolková', NULL, NULL, 'Veronika', NULL, '6', '20', NULL, '2020-09-01', NULL, '7833e8', '212', '725669172', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-08-13 02:25:41', '2020-09-01 02:15:15');
INSERT INTO `employees` (`id`, `personal_number`, `image`, `title_preffix`, `last_name`, `middle_name`, `married_name`, `first_name`, `title_suffix`, `department_id`, `job_id`, `email`, `start_date`, `end_date`, `comment`, `phone`, `mobile`, `id_card`, `coffee`, `employment`, `position`, `status`, `created_at`, `updated_at`) VALUES
(588, '64504', '64504.jpg', NULL, 'Wardasová', NULL, NULL, 'Beata', NULL, '28', '55', NULL, '2020-09-01', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-08-31 04:40:46', '2021-01-27 09:57:22'),
(589, '64715', '64715.jpg', NULL, 'Zientková', NULL, NULL, 'Barbora', NULL, '6', '20', NULL, '2020-09-01', NULL, '7833e8', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-09-01 02:48:16', '2020-10-08 07:35:18'),
(591, '61424', '61424.jpg', 'MUDr.', 'Hrabovská', NULL, NULL, 'Barbora', NULL, '1', '12', 'hrabovska@khn.cz', '2020-09-01', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-09-01 05:34:47', '2022-06-13 03:22:35'),
(593, '62808', '62808.jpg', 'Bc.', 'Pechová', NULL, NULL, 'Kristýna', NULL, '16', '55', NULL, '2020-09-08', '2021-08-06', 'a31561', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-09-08 09:35:51', '2022-02-17 06:52:29'),
(594, '63221', '63221.jpg', NULL, 'Roháčová', NULL, NULL, 'Lucie', NULL, '23', '36', NULL, '2020-09-16', NULL, 'a31561', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-09-08 09:37:37', '2020-12-17 09:26:00'),
(595, '62920', '62920.jpg', NULL, 'Piotrowská', NULL, NULL, 'Marcela', NULL, '18', '27', NULL, '2020-09-10', NULL, 'ffa200', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-09-23 03:25:39', '2021-01-26 06:03:18'),
(599, '63212', '63212.jpg', 'Bc.', 'Rojík', NULL, NULL, 'Ondřej', NULL, '15', '35', NULL, '2020-10-01', NULL, 'c90818', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-09-23 04:40:04', '2020-10-01 04:22:45'),
(600, '62622', '62622.jpg', NULL, 'Noveková', NULL, NULL, 'Alena', NULL, '19', '22', NULL, '2020-09-17', NULL, '999999', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-09-24 02:27:51', '2020-09-24 02:27:51'),
(602, '63922', '63922.jpg', NULL, 'Škorupová', NULL, NULL, 'Aneta', NULL, '18', '27', NULL, '2020-10-01', NULL, 'ffa200', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-09-29 02:33:44', '2021-01-26 06:03:09'),
(604, '63611', '63611.jpg', NULL, 'Staniszová', NULL, NULL, 'Monika', NULL, '19', '22', NULL, '2020-10-07', NULL, '999999', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-10-07 05:14:02', '2021-07-30 02:43:41'),
(609, '60426', '60426.jpg', NULL, 'Brdíčková', NULL, NULL, 'Vladislava', NULL, '1', '20', NULL, '2020-12-01', NULL, '4287f5', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-11-03 08:17:19', '2021-01-21 06:47:47'),
(610, '64307', '64307.jpg', 'Ing.', 'Vargová', NULL, NULL, 'Andrea', NULL, '17', '58', 'vargova@khn.cz', '2020-11-02', NULL, 'ffee00', NULL, NULL, 'Vydáno', 'N', 'DPČ', 999, 'Aktivní', '2020-11-04 05:00:38', '2022-06-13 02:15:00'),
(618, '62827', '62827.jpg', NULL, 'Pastrňáková', NULL, NULL, 'Pavlína', NULL, '9', '55', NULL, '2020-12-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-11-30 04:27:12', '2021-01-25 10:56:11'),
(619, '64205', '64205.jpg', NULL, 'Uričková', NULL, NULL, 'Petra', NULL, '30', '36', NULL, '2020-12-01', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-11-30 04:28:06', '2021-08-04 04:07:38'),
(620, '60829', '60829.jpg', NULL, 'Golasowská', NULL, NULL, 'Alena', NULL, '30', '20', NULL, '2020-12-01', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-11-30 04:28:47', '2021-08-04 04:08:23'),
(621, '62624', '62624.jpg', NULL, 'Nováková', NULL, NULL, 'Jana', NULL, '30', '36', NULL, '2020-12-01', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-11-30 04:29:29', '2021-08-04 04:09:02'),
(622, '62223', '62223.jpg', NULL, 'Lipková', NULL, NULL, 'Růžena', NULL, '30', '20', NULL, '2020-12-01', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-11-30 04:30:04', '2021-08-04 04:07:58'),
(626, '62130', '62130.jpg', NULL, 'Lačná', NULL, NULL, 'Romana', NULL, '30', '36', NULL, '2020-12-14', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-12-14 09:38:22', '2021-08-04 04:04:22'),
(627, '62025', '62025.jpg', NULL, 'Jursová', NULL, NULL, 'Jana', NULL, '8', '36', NULL, '2020-12-14', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-12-14 09:41:00', '2021-09-22 08:37:55'),
(628, '62301', '62301.jpg', NULL, 'Madejová', NULL, NULL, 'Jolana', 'DiS.', '12', '9', NULL, '2021-01-01', NULL, '66c908', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-12-15 08:22:33', '2022-06-13 02:58:21'),
(632, '60427', '60427.jpg', NULL, 'Balogh', NULL, NULL, 'Nikola', NULL, '3', '20', NULL, '2021-01-04', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-12-28 08:02:42', '2021-09-27 05:52:50'),
(633, '64411', '64411.jpg', NULL, 'Wolná', NULL, NULL, 'Pavlína', NULL, '30', '20', NULL, '2021-01-04', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2020-12-28 08:04:03', '2021-08-04 04:04:09'),
(635, '64215', '64215.jpg', NULL, 'Vaněk', NULL, NULL, 'Milan', NULL, '17', '59', 'vanek@khn.cz', '2021-01-04', NULL, 'ffee00', NULL, '725408873', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-01-04 04:45:33', '2022-09-20 08:15:30'),
(636, '62026', '62026.jpg', 'Mgr.', 'Jursová', NULL, 'Kukuczková', 'Eva', NULL, '23', '55', NULL, '2021-01-04', NULL, 'a31561', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-01-04 08:21:24', '2022-10-06 02:30:01'),
(637, '62726', '62726.jpg', NULL, 'Oravská', NULL, NULL, 'Jiřina', NULL, '28', '20', NULL, '2021-01-04', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-01-04 09:14:49', '2021-01-25 09:54:18'),
(640, '62128', '62128.jpg', NULL, 'Loucká', NULL, NULL, 'Dagmar', NULL, '18', '27', NULL, '2021-01-05', NULL, 'ffa200', '', '', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-01-04 09:23:33', '2021-01-20 11:55:46'),
(642, '62111', '62111.jpg', 'MUDr.', 'Kryvoruchko', NULL, NULL, 'Stanislav', NULL, '11', '12', 'kryvoruchko@khn.cz', '2021-02-01', NULL, '66c908', NULL, '777909546', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-01-29 04:28:45', '2022-09-20 08:15:55'),
(643, '63216', '63216.jpg', 'Bc.', 'Romaňoková', NULL, NULL, 'Monika', NULL, '9', '20', NULL, '2021-02-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-01-29 06:12:39', '2021-11-08 09:04:45'),
(649, '60717', '60717.jpg', NULL, 'Danyśová', NULL, NULL, 'Nikola', NULL, '5', '29', NULL, '2021-03-01', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-03-01 04:38:27', '2021-03-02 06:41:38'),
(651, '62028', '62028.jpg', NULL, 'Chmielová', NULL, NULL, 'Petra', NULL, '28', '36', NULL, '2021-03-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-03-02 06:43:26', '2021-03-04 05:51:28'),
(652, '60429', '60429.jpg', NULL, 'Buříková', NULL, NULL, 'Barbora', NULL, '28', '55', NULL, '2021-03-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-03-02 06:53:33', '2021-03-02 08:05:03'),
(653, '62027', '62027.jpg', NULL, 'Jadrníčková', NULL, NULL, 'Markéta', NULL, '28', '29', NULL, '2021-03-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-03-02 07:00:00', '2021-03-02 08:05:13'),
(655, '62327', '62327.jpg', NULL, 'Matoušková', NULL, NULL, 'Urszula', NULL, '3', '29', NULL, '2021-03-03', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-03-03 11:55:02', '2022-05-03 04:00:40'),
(657, '62104', '62104.jpg', NULL, 'Koždoňová', NULL, NULL, 'Kateřina', NULL, '10', '29', NULL, '2021-03-25', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-03-25 06:45:31', '2021-04-01 03:12:36'),
(662, '60505', '60505.jpg', NULL, 'Carbolová', NULL, NULL, 'Alena', NULL, '20', '55', NULL, '2021-04-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-04-01 09:41:24', '2022-01-06 05:07:29'),
(663, '62029', '62029.jpeg', NULL, 'Klimková', NULL, NULL, 'Beata', NULL, '18', '18', 'klimkova@khn.cz', '2021-04-01', NULL, '222222', NULL, '724553793', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-04-06 04:27:01', '2022-06-13 05:12:00'),
(665, '62724', '62724.jpg', NULL, 'Ondrušová', NULL, NULL, 'Lenka', NULL, '19', '22', NULL, '2021-04-06', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-04-06 07:57:23', '2021-04-06 07:57:23'),
(666, '60802', '60802.jpg', NULL, 'Dzurec', NULL, NULL, 'Petr', NULL, '18', '11', NULL, '2021-04-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-04-08 02:33:18', '2022-02-22 06:06:49'),
(672, '60120', '60120.jpg', NULL, 'Baranová', NULL, NULL, 'Monika', NULL, '30', '36', NULL, '2021-05-03', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-05-03 05:18:22', '2021-08-04 04:10:42'),
(673, '60805', '60805.jpg', 'Mgr.', 'Ely', NULL, NULL, 'Marcela', NULL, '6', '55', NULL, '2021-05-03', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-05-03 05:56:48', '2021-05-10 08:23:50'),
(674, '62531', '62531.jpg', NULL, 'Motyka', NULL, NULL, 'Roman', NULL, '25', '28', NULL, '2021-05-10', NULL, '222222', NULL, '739139409', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-05-10 03:54:11', '2022-09-21 02:12:10'),
(677, '63406', '63406.jpg', NULL, 'Slížová', NULL, NULL, 'Lenka', NULL, '28', '36', NULL, '2021-05-17', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-05-17 04:09:10', '2021-05-17 08:41:57'),
(680, '60630', '60630.jpg', NULL, 'Cieslarová', NULL, NULL, 'Kateřina', NULL, '20', '55', NULL, '2021-06-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-06-01 04:32:09', '2021-06-01 04:32:09'),
(681, '63304', '63304.jpg', NULL, 'Rosová', NULL, NULL, 'Alena', NULL, '9', '55', NULL, '2021-06-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-06-01 04:40:11', '2021-06-28 03:23:20'),
(682, '61431', '61431.jpg', NULL, 'Ihazová', NULL, NULL, 'Zuzana', NULL, '30', '36', NULL, '2021-06-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-06-01 05:19:48', '2021-08-04 04:11:19'),
(683, '61331', '61331.jpg', NULL, 'Chrysostomidu', NULL, NULL, 'Katarína', NULL, '17', '3', 'chrysostomidu@khn.cz', '2021-06-01', NULL, '222222', '315', NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-06-01 05:40:28', '2022-09-23 05:02:43'),
(684, '63201', '63201.jpg', 'MUDr.', 'Rievaj', NULL, NULL, 'Radek', NULL, '6', '12', NULL, '2022-08-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-06-02 05:24:32', '2022-08-01 08:08:17'),
(685, '63404', '63404.jpg', NULL, 'Semrádová', NULL, NULL, 'Jana', 'DiS.', '16', '55', NULL, '2021-06-07', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'DPP', 999, 'Aktivní', '2021-06-07 06:53:10', '2022-01-06 05:07:45'),
(686, '63926', '63926.jpg', NULL, 'Šprinclová', NULL, NULL, 'Marie', NULL, '19', '22', NULL, '2021-06-07', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-06-07 07:00:42', '2021-06-07 07:00:42'),
(687, '60629', '60629.jpg', NULL, 'Čempelová', NULL, NULL, 'Jana', NULL, '11', '55', NULL, '2021-06-14', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-06-14 04:41:32', '2021-06-14 04:41:32'),
(688, '61508', '61508.jpg', NULL, 'Zöldová', NULL, NULL, 'Marcela', NULL, '16', '20', NULL, '2021-06-14', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-06-14 09:02:17', '2022-01-06 05:11:44'),
(695, '61432', '61432.jpg', 'MUDr.', 'Jakubovičová', NULL, NULL, 'Eva', NULL, '1', '12', 'jakubovicova@khn.cz', '2021-06-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-06-29 08:51:20', '2022-06-24 05:24:16'),
(696, '63403', '63403.jpg', 'MUDr.', 'Samiec', NULL, NULL, 'Jan', NULL, '4', '12', 'samiec@khn.cz', '2021-06-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-06-29 08:53:57', '2022-06-24 05:19:16'),
(701, '64534', '64534.jpg', NULL, 'Weissgärberová', NULL, NULL, 'Jana', NULL, '30', '20', NULL, '2021-07-01', NULL, 'ffa633', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-07-02 06:14:48', '2021-11-08 09:04:00'),
(702, '62630', '62630.jpg', NULL, 'Makúchová', NULL, NULL, 'Magdaléna', NULL, '30', '36', NULL, '2021-07-01', NULL, 'ffa633', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-07-02 06:35:36', '2021-11-08 09:04:25'),
(703, '62907', '62907.jpg', NULL, 'Kučerová', NULL, NULL, 'Nela', NULL, '30', '29', NULL, '2021-07-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-07-02 07:01:53', '2022-05-16 09:51:55'),
(704, '64007', '64007.jpg', NULL, 'Tabaková', NULL, NULL, 'Jitka', NULL, '18', '27', NULL, '2021-06-21', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-07-07 03:35:37', '2021-07-07 03:36:07'),
(707, '64732', 'no_image.png', 'MUDr.', 'Znišťalová', NULL, NULL, 'Lenka', NULL, '6', '12', NULL, '2021-07-17', NULL, '7833e8', NULL, NULL, 'Vytvořit nálepku', 'N', 'HPP', 999, 'Aktivní', '2021-07-15 06:55:12', '2022-11-14 05:21:56'),
(708, '61594', '61594.jpg', 'Mgr.', 'Kaczyńska', NULL, NULL, 'Katarzyna', NULL, '30', '36', NULL, '2021-07-21', NULL, 'ffa633', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-07-21 06:32:34', '2021-08-04 04:09:48'),
(709, '60331', '60331.jpg', 'MUDr.', 'Brablcová', NULL, NULL, 'Hana', NULL, '11', '12', 'brablcova@khn.cz', '2021-08-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-08-02 04:07:59', '2022-06-13 02:52:17'),
(712, '60698', '60698.jpg', NULL, 'Czechowská', NULL, NULL, 'Lucie', NULL, '19', '22', NULL, '2021-09-01', NULL, '999999', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-09-01 03:16:17', '2021-09-20 08:42:06'),
(714, '62091', '62091.jpg', NULL, 'Kulhánková', NULL, NULL, 'Pavlína', NULL, '9', '55', NULL, '2021-09-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-09-13 02:19:12', '2021-11-08 07:47:22'),
(715, '63731', '63731.jpg', NULL, 'Svrčinová', NULL, NULL, 'Zuzana', NULL, '28', '36', NULL, '2021-09-01', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-09-13 02:20:27', '2021-11-08 07:48:10'),
(716, '60335', '60335.jpg', NULL, 'Byrtusová', NULL, NULL, 'Markéta', NULL, '3', '29', NULL, '2021-09-08', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Mateřská', '2021-09-13 02:23:30', '2022-07-12 05:00:15'),
(717, '62831', '62831.png', NULL, 'Pastrňáková', NULL, NULL, 'Beata', NULL, '10', '55', NULL, '2021-09-13', NULL, 'ffa600', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-09-13 02:28:27', '2021-10-11 08:15:57'),
(718, '60513', '60513.jpg', NULL, 'Cerulová', NULL, NULL, 'Monika', NULL, '19', '22', NULL, '2021-09-15', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-09-15 04:17:13', '2022-06-10 06:07:56'),
(720, '63903', '63903.jpg', 'Mgr.', 'Štípková', NULL, NULL, 'Blanka', NULL, '31', '31', NULL, '2021-09-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-09-16 08:54:52', '2021-09-24 08:02:13'),
(721, '60699', '60699.jpg', 'Mgr.', 'Čermáková', NULL, NULL, 'Kristýna', NULL, '31', '31', NULL, '2021-09-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-09-16 08:59:41', '2021-10-11 05:42:29'),
(722, '62116', '62116.jpg', NULL, 'Kumorková', NULL, NULL, 'Marie', NULL, '31', '31', NULL, '2021-09-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-09-16 09:03:43', '2021-09-24 08:02:50'),
(723, '63431', '63431.jpg', NULL, 'Schönwälderová', NULL, NULL, 'Kateřina', NULL, '19', '22', NULL, '2021-09-21', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-09-21 04:40:46', '2022-06-08 09:55:07'),
(724, '64803', '64803.jpg', 'Bc.', 'Závěšická', NULL, NULL, 'Lucie', NULL, '1', '55', NULL, '2021-09-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-09-22 05:33:05', '2021-09-27 05:55:50'),
(725, '61133', '61133.jpg', 'Bc.', 'Herčíková', NULL, NULL, 'Lucie', 'DiS.', '11', '55', NULL, '2021-10-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-10-01 04:39:49', '2021-10-01 04:39:49'),
(726, '62115', '62115.jpg', NULL, 'Kuklínková', NULL, NULL, 'Šárka', NULL, '28', '36', NULL, '2021-10-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-10-01 04:42:05', '2021-10-01 04:42:05'),
(727, '63116', '63116.jpg', NULL, 'Radovičová', NULL, NULL, 'Lenka', NULL, '19', '22', NULL, '2021-10-04', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-10-04 06:54:32', '2021-10-05 09:44:34'),
(728, '60831', '60831.jpg', NULL, 'Folwarczná', NULL, NULL, 'Edyta', NULL, '6', '55', NULL, '2021-10-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-10-04 08:16:05', '2021-11-08 09:03:11'),
(730, '64227', '64227.jpg', NULL, 'Veselá', NULL, NULL, 'Sabina', NULL, '31', '31', NULL, '2021-09-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-10-06 05:10:50', '2022-02-17 05:47:40'),
(732, '64834', '64834.jpg', 'MUDr.', 'Zvaríková', NULL, NULL, 'Mariola', NULL, '9', '12', NULL, '2021-10-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-10-07 05:22:30', '2021-10-07 05:22:30'),
(733, '63633', '63633.jpg', NULL, 'Soliková', NULL, NULL, 'Jarmila', NULL, '19', '22', NULL, '2021-10-11', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-10-11 04:52:57', '2021-10-13 08:41:42'),
(734, '63632', '63632_20221114-062147.jpg', 'MUDr.', 'Urbančíková', NULL, 'Stará', 'Kamila', NULL, '1', '12', NULL, '2021-10-11', NULL, '222222', NULL, NULL, 'Vydáno', 'A', 'HPP', 999, 'Aktivní', '2021-10-11 05:07:58', '2022-11-14 05:21:47'),
(735, '63414', '63414.jpg', NULL, 'Sikorová', NULL, NULL, 'Radomíra', NULL, '31', '31', NULL, '2021-09-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-10-12 06:57:15', '2021-11-08 09:05:14'),
(739, '63220', '63220-jolana-rojickova.jpg', 'MUDr.', 'Rojíčková', NULL, NULL, 'Jolana', NULL, '6', '12', 'rojickova@khn.cz', '2021-11-01', NULL, '222222', '122', NULL, 'Aktual. nálepku', 'N', 'DPP', 999, 'Aktivní', '2021-11-08 06:28:15', '2022-07-01 09:51:15'),
(740, '62120', '62120.jpg', NULL, 'Kondáš', NULL, NULL, 'Ján', NULL, '16', '20', NULL, '2021-11-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-11-08 06:36:08', '2021-11-08 06:36:08'),
(741, '62389', '62389.jpg', NULL, 'Malyszová', NULL, NULL, 'Edita', NULL, '11', '55', NULL, '2021-11-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-11-08 06:40:05', '2021-11-08 06:40:05'),
(743, '62225', '62225.jpg', NULL, 'Lipusová', NULL, NULL, 'Nikol', NULL, '11', '29', NULL, '2021-12-06', NULL, '66c908', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-12-09 04:51:41', '2021-12-23 05:03:39'),
(744, '62073', '62073.jpg', 'Bc.', 'Karasová', NULL, NULL, 'Jana', NULL, '17', '64', 'karasova@khn.cz', '2021-12-01', NULL, 'ffee00', NULL, '725669181', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-12-09 09:01:16', '2022-09-20 09:48:39'),
(745, '64004', '64004.jpg', NULL, 'Tichá', NULL, NULL, 'Iveta', NULL, '9', '36', NULL, '2021-12-01', NULL, 'd9fa05', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-12-10 07:18:26', '2022-01-05 11:09:20'),
(746, '63215', '63215.jpg', NULL, 'Rohalová', NULL, NULL, 'Lenka', NULL, '7', '55', NULL, '2021-12-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2021-12-21 07:47:41', '2022-01-28 10:29:32'),
(747, '61334', '61334.jpg', NULL, 'Huňařová', NULL, NULL, 'Lada', NULL, '17', '3', 'hunarova@khn.cz', '2022-01-03', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-01-03 06:29:22', '2022-06-13 05:01:54'),
(748, '63432', '63432.jpg', 'Bc.', 'Spurná', NULL, NULL, 'Pavlína', NULL, '13', '55', NULL, '2022-01-03', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-01-04 06:22:16', '2022-01-04 06:22:16'),
(749, '61528', '61528.jpg', NULL, 'Nesét', NULL, NULL, 'Gabriela', NULL, '23', '55', NULL, '2022-01-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-01-04 07:48:47', '2022-02-24 06:52:31'),
(750, '63122', '63122.jpg', NULL, 'Raszyková Kántorová', 'Kántorová', NULL, 'Monika', NULL, '1', '36', NULL, '2022-01-06', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-01-07 04:17:13', '2022-01-07 09:55:30'),
(751, '60474', '60474.jpg', NULL, 'Byrtus', NULL, NULL, 'Matyáš', NULL, '1', '29', NULL, '2022-01-17', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-01-17 09:04:35', '2022-01-17 09:20:12'),
(752, '60824', '60824.jpg', 'MUDr.', 'Hanzlíková', NULL, NULL, 'Katarzyna', NULL, '30', '12', 'hanzlikova@khn.cz', '2022-02-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-02-01 04:35:32', '2022-06-13 03:16:59'),
(753, '63931', '63931.jpg', 'PharmDr.', 'Švehlová', NULL, NULL, 'Eva', NULL, '22', '6', NULL, '2022-02-01', NULL, '222222', NULL, '739545625', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-02-01 06:12:16', '2022-09-21 02:21:58'),
(754, '64535', '64535.jpg', NULL, 'Wojnarová', NULL, NULL, 'Petra', NULL, '1', '20', NULL, '2022-02-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-02-01 09:10:19', '2022-03-16 11:39:34'),
(757, '62816', '62931.jpg', 'Bc.', 'Pečonka', NULL, NULL, 'Jan', NULL, '31', '50', NULL, '2022-09-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'DPČ', 999, 'Aktivní', '2022-02-03 05:47:00', '2022-10-25 06:54:07'),
(760, '62800', '62800.jpg', NULL, 'Pacíková', NULL, NULL, 'Urszula', NULL, '30', '55', NULL, '2022-02-14', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-02-15 08:06:48', '2022-02-15 08:06:48'),
(761, '62534', '62534.jpg', 'Bc.', 'Mrakwiová', NULL, NULL, 'Tereza', NULL, '12', '5', NULL, '2022-03-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-03-01 06:11:26', '2022-03-01 06:11:26'),
(762, '64508', '64508.jpg', NULL, 'Weberová', NULL, NULL, 'Žaneta', NULL, '17', '56', 'weberova@khn.cz', '2022-03-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-03-01 06:25:38', '2022-06-13 02:10:59'),
(763, '62231', '62231.jpg', NULL, 'Lukaštíková', NULL, NULL, 'Lenka', NULL, '6', '20', NULL, '2022-03-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-03-01 07:04:50', '2022-03-01 07:05:34'),
(765, '63402', '63402.jpg', NULL, 'Sekaninová', NULL, NULL, 'Anna', NULL, '17', '72', 'sekaninova@khn.cz', '2022-03-01', NULL, '222222', '420', NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-03-07 06:57:58', '2022-09-22 05:21:41'),
(767, '62932', '62932.jpg', NULL, 'Přikrylová', NULL, NULL, 'Petra', NULL, '1', '29', NULL, '2022-03-03', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'DPP', 999, 'Aktivní', '2022-03-11 10:01:27', '2022-06-13 03:07:50'),
(768, '60631', '60631.jpg', NULL, 'Čechmánková', NULL, NULL, 'Karin', NULL, '18', '11', NULL, '2022-03-07', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-03-15 09:49:17', '2022-03-15 09:49:17'),
(769, '62074', '62074.jpg', 'Mgr.', 'Kawková', NULL, NULL, 'Šárka', NULL, '13', '55', NULL, '2022-04-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-04-01 04:00:15', '2022-04-01 04:00:15'),
(770, '62228', '62228.jpg', NULL, 'Linková', NULL, NULL, 'Alena', NULL, '30', '36', NULL, '2022-04-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-04-01 08:17:44', '2022-04-01 08:17:44'),
(771, '63932', '63932.jpg', NULL, 'Štolba', NULL, NULL, 'Barbora', NULL, '23', '55', NULL, '2022-04-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-04-01 09:51:12', '2022-06-10 06:09:39'),
(772, '62632', '62632.jpg', NULL, 'Němcová', NULL, NULL, 'Jana', NULL, '30', '36', NULL, '2022-04-04', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-04-04 05:42:18', '2022-04-04 05:42:18'),
(773, '64207', '64207.jpg', NULL, 'Udod', NULL, NULL, 'Svitlana', NULL, '1', '29', NULL, '2022-04-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-04-05 08:28:16', '2022-09-05 03:33:00'),
(774, '62535', '62535.jpg', 'Bc.', 'Michalcová', NULL, NULL, 'Naděžda', NULL, '24', '37', NULL, '2022-04-06', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-04-06 06:20:59', '2022-04-19 02:55:05'),
(775, '63924', '63924.jpg', NULL, 'Šišma', NULL, NULL, 'Radim', NULL, '1', '29', NULL, '2022-04-25', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-04-25 07:40:54', '2022-06-13 03:05:51'),
(776, '60431', '60431.jpg', 'Ing.', 'Bujoková', NULL, NULL, 'Markéta', NULL, '17', '8', 'bujokova@khn.cz', '2022-05-02', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-05-02 04:29:03', '2022-07-08 04:02:19'),
(777, '63606', '63606.jpg', NULL, 'Sigmund', NULL, NULL, 'Michal', NULL, '17', '59', 'sigmund@khn.cz', '2022-05-02', NULL, '222222', '371', '724767247', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-05-02 04:33:34', '2022-08-02 08:41:17'),
(778, '63101', '62934.jpg', NULL, 'Pszczółková', NULL, NULL, 'Zuzana', NULL, '30', '20', NULL, '2022-05-02', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-05-02 07:00:44', '2022-05-13 03:07:01'),
(779, '64533', '64533.jpg', NULL, 'Weiss', NULL, NULL, 'Eva', NULL, '1', '20', NULL, '2022-05-02', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-05-02 09:51:37', '2022-05-03 02:50:27'),
(781, '60131', '60131.jpg', NULL, 'Balažovičová', NULL, NULL, 'Andrea', NULL, '18', '27', NULL, '2022-05-02', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-05-03 06:58:26', '2022-05-10 02:12:36'),
(782, '62633', '62633.jpg', NULL, 'Nelhyblová', NULL, NULL, 'Monika', NULL, '19', '22', NULL, '2022-05-05', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-05-05 05:33:06', '2022-05-05 05:33:06'),
(784, '63524', '63524.jpg', NULL, 'Sikora', NULL, NULL, 'Robert', NULL, '1', '29', NULL, '2022-05-05', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'DPP', 999, 'Aktivní', '2022-05-30 07:58:32', '2022-05-30 07:58:32'),
(785, '60315', '60315.jpg', NULL, 'Ristovská', NULL, NULL, 'Barbara', NULL, '6', '29', NULL, '2022-06-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'DPP', 999, 'Aktivní', '2022-06-01 04:05:15', '2022-10-25 06:48:20'),
(786, '61031', '61031.jpg', NULL, 'Greco', NULL, NULL, 'Alexandr', NULL, '28', '29', NULL, '2022-06-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-06-01 04:28:46', '2022-06-01 04:29:16'),
(787, '60932', '60932.jpg', NULL, 'Friedlová', NULL, NULL, 'Karolína', NULL, '1', '29', NULL, '2022-06-01', NULL, '4287f5', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-06-01 06:32:55', '2022-10-18 02:42:12'),
(788, '60432', '60432.jpg', NULL, 'Byrtus', NULL, NULL, 'Ivo', NULL, '17', '56', 'byrtus@khn.cz', '2022-06-01', NULL, '222222', '372', '725189424', 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-06-02 05:19:33', '2022-06-10 10:05:09'),
(789, '62229', '62229.jpg', 'Bc.', 'Lamaczová', NULL, NULL, 'Dagmar', NULL, '3', '55', NULL, '2022-06-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-06-02 08:57:53', '2022-06-02 08:57:53'),
(791, '63732', '63732.jpg', NULL, 'Suchá', NULL, NULL, 'Marta', NULL, '19', '22', NULL, '2022-06-10', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-06-13 04:45:32', '2022-06-13 04:45:32'),
(792, '61532', '61532.jpg', NULL, 'Jeřábková', NULL, NULL, 'Markéta', NULL, '1', '29', NULL, '2022-06-13', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-06-13 08:58:21', '2022-10-18 02:42:35'),
(795, '61434', '61434_20221114-061915.jpg', NULL, 'Janišová', NULL, NULL, 'Adriana', NULL, '1', '36', NULL, '2022-06-17', NULL, '222222', NULL, NULL, 'Vytvořit nálepku', 'N', 'DPP', 999, 'Aktivní', '2022-06-17 02:48:48', '2022-11-14 05:19:15'),
(797, '62122', '62122.jpg', NULL, 'Kupčok', NULL, NULL, 'Radim', NULL, '3', '20', NULL, '2022-07-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-07-01 04:04:58', '2022-08-02 08:39:11'),
(798, '63199', '63199.jpg', 'Bc.', 'Reli', NULL, NULL, 'Kristýna', NULL, '15', '35', NULL, '2022-07-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-07-01 05:51:37', '2022-07-01 05:52:03'),
(799, '61816', '61816.jpg', NULL, 'Kostková', NULL, NULL, 'Klára', NULL, '6', '29', NULL, '2022-07-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-07-01 06:51:23', '2022-07-01 06:51:23'),
(800, '61134', '61134.jpg', NULL, 'Haklová', NULL, NULL, 'Aneta', NULL, '6', '20', NULL, '2022-07-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-07-01 07:16:48', '2022-07-01 07:16:48'),
(802, '64331', '64331.jpg', NULL, 'Velecká', NULL, NULL, 'Renáta', NULL, '23', '20', NULL, '2022-08-01', NULL, 'a31561', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-08-01 07:10:31', '2022-08-01 07:17:03'),
(803, '61932', '61932.jpg', 'MUDr.', 'Konetzná', NULL, NULL, 'Pavla', NULL, '6', '12', NULL, '2022-08-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-08-01 07:13:51', '2022-08-01 07:13:51'),
(804, '61140', '61140.jpg', NULL, 'Horehleďová', NULL, NULL, 'Monika', NULL, '6', '20', NULL, '2022-08-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-08-01 08:34:53', '2022-08-02 08:38:44'),
(805, '60132', '60132.jpg', NULL, 'Baloghová', NULL, NULL, 'Lucie', NULL, '18', '27', NULL, '2022-08-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-08-02 08:44:47', '2022-08-02 08:44:47'),
(806, '62833', '62833.jpg', 'Bc.', 'Palisová', NULL, NULL, 'Veronika', NULL, '15', '35', NULL, '2022-07-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'DPČ', 999, 'Aktivní', '2022-08-05 06:10:14', '2022-08-05 06:10:14'),
(807, '61336', '61336.jpg', NULL, 'Honiewiczová', NULL, NULL, 'Pavla', NULL, '18', '11', NULL, '2022-08-08', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-08-09 06:54:44', '2022-08-15 05:35:38'),
(808, '63734', 'no_image.png', NULL, 'Soltészová', NULL, NULL, 'Nikola', NULL, '30', '20', NULL, '2022-08-02', NULL, '222222', NULL, NULL, 'Nový nástup', 'N', 'DPP', 999, 'Aktivní', '2022-08-09 08:21:08', '2022-11-14 05:20:28'),
(809, '62131', '62131.jpg', NULL, 'Lasovská', NULL, NULL, 'Renáta', NULL, '1', '20', NULL, '2022-09-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-09-01 07:26:00', '2022-09-01 07:26:00'),
(810, '62536', '62536.jpg', NULL, 'Miech', NULL, NULL, 'Dalibor', NULL, '1', '29', NULL, '2022-09-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-09-01 07:53:20', '2022-09-01 07:53:47'),
(811, '64009', '64009.jpg', NULL, 'Tekenöšová', NULL, NULL, 'Šárka', NULL, '6', '29', NULL, '2022-09-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-09-01 08:16:23', '2022-09-01 08:16:23'),
(812, '61337', '61337.jpg', 'MUDr.', 'Horák', NULL, NULL, 'Vojtěch', NULL, '6', '12', NULL, '2022-09-05', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-09-05 04:56:29', '2022-09-05 04:56:29'),
(813, '62123', '62123.jpg', NULL, 'Kuchma', NULL, NULL, 'Nataliia', NULL, '6', '55', NULL, '2022-09-05', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-09-05 05:56:52', '2022-09-05 07:02:37'),
(815, '63130', '63130.jpg', NULL, 'Repová', NULL, NULL, 'Jana', NULL, '19', '22', NULL, '2022-09-06', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-09-06 06:18:12', '2022-09-06 06:18:12'),
(816, '60809', '60809.jpg', NULL, 'Franek', NULL, NULL, 'Stanislav', NULL, '1', '20', NULL, '2022-09-07', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-09-08 08:59:18', '2022-09-08 08:59:18'),
(817, '64217', '64217.jpg', NULL, 'Valášková', NULL, NULL, 'Kateřina', NULL, '16', '55', NULL, '2022-10-03', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-10-03 03:48:58', '2022-10-03 03:48:58'),
(818, '63831', '63831.jpg', NULL, 'Sznapková', NULL, NULL, 'Adéla', NULL, '11', '29', NULL, '2022-10-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-10-03 05:43:52', '2022-10-03 05:43:52'),
(819, '64828', '64828.jpg', NULL, 'Žažová', NULL, NULL, 'Veronika', NULL, '3', '55', NULL, '2022-10-03', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-10-03 06:34:43', '2022-11-14 07:43:13'),
(820, '60420', '60420.jpg', NULL, 'Bytčanková-Stojanova', NULL, NULL, 'Simona', NULL, '1', '29', NULL, '2022-10-03', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-10-06 07:03:28', '2022-10-06 07:03:28'),
(821, '61800', '61800.jpg', NULL, 'Kokyová', NULL, NULL, 'Tereza', NULL, '28', '29', NULL, '2022-10-10', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-10-10 04:00:18', '2022-10-10 04:00:18'),
(822, '63109', '63109.jpg', NULL, 'Pyszková', NULL, NULL, 'Karolina', NULL, '28', '20', NULL, '2022-10-17', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-10-17 07:14:14', '2022-10-17 07:14:14'),
(824, '60336', '60336.jpg', NULL, 'Beránková', NULL, NULL, 'Ivana', NULL, '19', '22', NULL, '2022-10-21', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-10-21 05:55:29', '2022-10-21 05:55:29'),
(825, '60833', 'no_image.png', 'Mgr.', 'Franková', NULL, NULL, 'Veronika', NULL, '31', '31', NULL, '2022-09-01', NULL, '222222', NULL, NULL, 'Vytvořit nálepku', 'N', 'DPP', 999, 'Aktivní', '2022-10-25 06:52:19', '2022-11-14 05:17:40'),
(826, '62233', '62233.jpg', NULL, 'Lubojacká', NULL, NULL, 'Lenka', NULL, '19', '22', NULL, '2022-11-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-11-01 07:51:08', '2022-11-01 07:51:08'),
(827, '61032', '61032.jpg', 'Bc.', 'Giemza', NULL, NULL, 'Sylwia', 'DiS.', '11', '55', NULL, '2022-11-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-11-01 08:17:20', '2022-11-01 08:17:20'),
(828, '61338', '61338.jpg', NULL, 'Hrdinová', NULL, NULL, 'Jaroslava', NULL, '19', '22', NULL, '2022-11-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-11-01 08:41:56', '2022-11-01 08:41:56'),
(829, '60434', '60434.jpg', NULL, 'Brhelová', NULL, NULL, 'Jana', NULL, '1', '20', NULL, '2022-11-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-11-01 11:43:42', '2022-11-01 11:43:42'),
(830, '60292', '60292.jpg', NULL, 'Beitelová', NULL, NULL, 'Romana', NULL, '30', '36', NULL, '2022-11-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-11-01 11:48:15', '2022-11-01 11:48:15'),
(831, '64321', '64321.jpg', NULL, 'Valošková', NULL, NULL, 'Lenka', NULL, '1', '20', NULL, '2022-11-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-11-02 04:50:46', '2022-11-02 04:50:46'),
(832, '62232', '62232.jpg', NULL, 'Levayová', NULL, NULL, 'Sára', NULL, '6', '29', NULL, '2022-11-01', NULL, '222222', NULL, NULL, 'Vydáno', 'N', 'HPP', 999, 'Aktivní', '2022-11-03 10:23:00', '2022-11-03 10:23:00'),
(834, '62670', '62670.jpg', 'RNDr.', 'Navrátilová', NULL, NULL, 'Milena', 'Dr.', '19', '10', 'ikomarek@example.org', '2023-01-04', '2023-01-13', 'Expedita nobis in in atque dolore. Expedita suscipit enim ipsum reiciendis dolores illo blanditiis officiis. Doloribus quibusdam id rerum aliquam delectus illo repudiandae.', '398', '+2344688430523', 'Aktualizovat nálepku', 'N', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(835, '62105', '62105.jpg', 'doc.', 'Vokounová', NULL, NULL, 'Lubomír', 'MUDr.', '13', '45', 'filip.prihoda@example.net', '2023-01-03', '2023-01-13', 'Aut consequatur aut eaque nesciunt. Facilis quia quia nobis harum occaecati minima ullam.', '534', '+2972088535', 'Aktualizovat nálepku', 'N', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(836, '61391', '61391.jpg', 'MUDr.', 'Chládková', NULL, NULL, 'Peter', 'doc.', '17', '51', 'kubica.iva@example.net', '2023-01-04', '2023-01-12', 'Saepe at a aliquid ipsum qui vero ea. Ducimus soluta debitis omnis aut. Et voluptas repellat quas est aut accusamus. Qui debitis et eveniet velit et dolorum officia. Ab a iure dolorum.', '352', '+469940570110', 'Aktualizovat nálepku', 'N', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(837, '64710', '64710.jpg', 'Mgr.', 'Kropáčková', NULL, NULL, 'Vasyl', 'MVDr.', '1', '12', 'oholy@example.net', '2023-01-16', '2023-01-05', 'Vero ut architecto velit quibusdam voluptatem. Debitis ipsum nemo eum temporibus et. Voluptate ex voluptas voluptatibus nihil ad.', '489', '+68278937', 'Nový nástup', 'A', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(838, '63679', '63679.jpg', 'Bc.', 'Műller', NULL, NULL, 'Rudolf', 'PhDr.', '1', '11', 'zdenka53@example.org', '2023-01-15', '2023-01-16', 'Aut et beatae aut vitae nulla. Vel enim voluptatem repellendus consequuntur voluptatem. Nam perferendis dolores atque ullam. Eius beatae consectetur sed perferendis et ullam amet.', '528', '+40451412050', 'Nový nástup', 'A', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(839, '63745', '63745.jpg', 'Bc.', 'Hýblová', NULL, NULL, 'Miloslava', 'MUDr.', '1', '24', 'dalibor11@example.org', '2023-01-07', '2023-01-03', 'Cum quo fuga laborum et et quam. Dolorem dolores distinctio doloribus perferendis sed saepe itaque. Aspernatur labore quas hic eum. Cum qui aut corrupti qui facilis repudiandae.', '422', '+998395905915', 'Nový nástup', 'A', 'DPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(840, '64309', '64309.jpg', 'MUDr.', 'Tvrdá', NULL, NULL, 'Karel', 'Dr.', '17', '28', 'rostislav55@example.org', '2023-01-14', '2023-01-04', 'Animi rerum ea pariatur nobis. Eius vero voluptatum et. Quod amet veritatis voluptatem culpa accusantium. Rerum at animi voluptatem in.', '483', '+2542538018485', 'Předat nálepku', 'A', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(841, '61855', '61855.jpg', 'Mgr.', 'Janíček', NULL, NULL, 'Šárka', 'Ing.', '31', '18', 'drysava@example.org', '2023-01-02', '2023-01-06', 'Recusandae aperiam ducimus et nesciunt id culpa et. Fugit consequatur ut aut iure esse assumenda. Quo maiores sint voluptatem incidunt.', '543', '+34925450664', 'Vytvořit kartu', 'A', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(842, '62042', '62042.jpg', 'doc.', 'Frydrychová', NULL, NULL, 'Ivana', 'RNDr.', '19', '5', 'zdarska.nadezda@example.org', '2023-01-08', '2023-01-12', 'Consequatur aperiam ut excepturi non magni. Quis delectus delectus eos reprehenderit doloremque sed praesentium doloribus.', '466', '+22835184583', 'Vytvořit kartu', 'A', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(843, '61640', '61640.jpg', 'RNDr.', 'Kalousková', NULL, NULL, 'Vladislav', 'RNDr.', '28', '19', 'tereza27@example.com', '2023-01-04', '2023-01-05', 'Molestiae voluptatibus id deleniti iste illum. Aliquam praesentium est aliquid aspernatur est. Culpa et cumque blanditiis laudantium sequi quo illo eveniet. Velit deleniti at a distinctio.', '352', '+9601148136141', 'Nový nástup', 'A', 'DPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(844, '61689', '61689.jpg', 'RNDr.', 'Melicharová', NULL, NULL, 'Renáta', 'MVDr.', '4', '1', 'simona03@example.org', '2023-01-14', '2023-01-05', 'Eveniet placeat vitae ea tempore ipsa et. Illo dolor ab velit. Molestiae et inventore quia ut eos perspiciatis nam. Porro omnis sint et aperiam atque voluptatum est.', '396', '+590105058789', 'Vytvořit kartu', 'N', 'EVP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(845, '63368', '63368.jpg', 'MVDr.', 'Albrecht', NULL, NULL, 'Kamil', 'Ing.', '3', '5', 'vandelova@example.org', '2023-01-04', '2023-01-06', 'In at odio repellendus atque sed id dolorem soluta. Fuga doloribus facere est ipsam in. Neque dicta explicabo quo consequuntur vel.', '418', '+37376453721', 'Ok', 'N', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(846, '63130', '63130.jpg', 'Bc.', 'Hrubeš', NULL, NULL, 'Bohuslav', 'JUDr.', '28', '17', 'anezka.rousova@example.net', '2023-01-09', '2023-01-03', 'Vel eaque sequi necessitatibus eligendi possimus. Commodi officiis vel ut.', '525', '+594390443538', 'Aktualizovat nálepku', 'N', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(847, '63508', '63508.jpg', 'Dr.', 'Pašek', NULL, NULL, 'Renáta', 'Bc.', '29', '67', 'dagmar68@example.net', '2023-01-14', '2023-01-04', 'Voluptates ratione ut tenetur veritatis minima id. Aut excepturi dignissimos dignissimos excepturi ipsam accusantium. Et voluptatem dolores magni cum.', '352', '+50513124479', 'Vrácena', 'N', 'EVP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(848, '63743', '63743.jpg', 'JUDr.', 'Fousková', NULL, NULL, 'Vlasta', 'RNDr.', '23', '66', 'zuzana.jirku@example.com', '2023-01-16', '2023-01-13', 'Animi laudantium incidunt qui mollitia. Sit adipisci quo vitae eligendi possimus. Officia fugiat ab perspiciatis velit ut neque. Illum et molestiae quisquam ea est quia in.', '508', '+9729563755462', 'Ok', 'N', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(849, '63222', '63222.jpg', 'Ing.', 'Řezníček', NULL, NULL, 'Miloslava', 'Bc.', '5', '61', 'sjezek@example.com', '2023-01-12', '2023-01-09', 'Reprehenderit quam voluptates amet qui illo. Ipsa ullam et iure eum. Sit quia quidem ab est et praesentium. Nesciunt aperiam quae omnis dolor qui.', '516', '+97496810758', 'Vrácena', 'A', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(850, '62332', '62332.jpg', 'MVDr.', 'Hrdličková', NULL, NULL, 'Jaromír', 'Mgr.', '2', '29', 'bastova.antonin@example.net', '2023-01-08', '2023-01-13', 'Quae id qui est commodi. Fuga perferendis dolorem id sint. Commodi atque libero quas. Ex impedit sed pariatur magnam. Magnam occaecati impedit repudiandae.', '403', '+55486321167', 'Ok', 'A', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(851, '62608', '62608.jpg', 'Dr.', 'Šenk', NULL, NULL, 'Dominik', 'Bc.', '29', '51', 'eduard88@example.com', '2023-01-12', '2023-01-13', 'Et voluptate totam itaque officia. Fugit sunt dolor omnis eveniet repellendus omnis explicabo aut. Cumque mollitia quod error. Dolores labore eveniet mollitia et.', '467', '+22764986095', 'Vrácena', 'N', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(852, '63471', '63471.jpg', 'Dr.', 'Vojtková', NULL, NULL, 'Michaela', 'doc.', '27', '48', 'daniel09@example.org', '2023-01-06', '2023-01-09', 'Aut culpa labore et culpa enim. Animi voluptas est omnis tempora rerum molestiae. Iste alias culpa laboriosam eligendi molestiae voluptatem.', '449', '+520144459824', 'Vytvořit kartu', 'N', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(853, '63924', '63924.jpg', 'MVDr.', 'Brožek', NULL, NULL, 'Aneta', 'MUDr.', '20', '72', 'alzbeta65@example.com', '2023-01-06', '2023-01-03', 'Soluta consequuntur nisi sunt deleniti. Nisi voluptatem aut reiciendis ab rem voluptates aut enim.', '449', '+6910111878', 'Aktualizovat nálepku', 'N', 'EVP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(854, '64796', '64796.jpg', 'doc.', 'Žemlička', NULL, NULL, 'Zdenka', 'Bc.', '4', '27', 'oldrich.baresova@example.org', '2023-01-04', '2023-01-03', 'Enim numquam esse iste harum odit distinctio suscipit. Commodi sit sed voluptas commodi. Consequuntur qui et non dolor suscipit perspiciatis.', '464', '+50286407929', 'Vrácena', 'A', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(855, '64587', '64587.jpg', 'PhDr.', 'Šimůnková', NULL, NULL, 'Eliška', 'doc.', '2', '54', 'lenka.najman@example.org', '2023-01-03', '2023-01-06', 'Qui et dignissimos non et aut. Repellendus ullam at minima fugit reiciendis sit cupiditate. Sed repellendus autem corporis corporis consequatur.', '551', '+351977694953', 'Vytvořit kartu', 'A', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(856, '63588', '63588.jpg', 'Mgr.', 'Kuželová', NULL, NULL, 'Štěpánka', 'PhDr.', '25', '52', 'doleckova.veronika@example.com', '2023-01-12', '2023-01-06', 'Voluptates atque corporis aut ut est omnis aut nostrum. Nobis laboriosam neque modi. Et dolor eligendi ut aut sequi doloremque enim. Velit impedit dolorem labore est illum quos aperiam dolorum.', '437', '+8868964597035', 'Vytvořit kartu', 'N', 'DPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(857, '64220', '64220.jpg', 'Bc.', 'Válková', NULL, NULL, 'Božena', 'MUDr.', '22', '12', 'pechova.pavel@example.org', '2023-01-07', '2023-01-03', 'Incidunt dolor hic dolorem eos fugiat ut magni. Voluptas debitis amet aut eveniet rerum aut et. Magnam quam sunt vel veniam tempora.', '380', '+218355787638', 'Nový nástup', 'N', 'ČSO', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(858, '62048', '62048.jpg', 'MUDr.', 'Moučková', NULL, NULL, 'Hana', 'MVDr.', '14', '20', 'avargova@example.net', '2023-01-06', '2023-01-06', 'Laudantium in ut et sed dolore enim ad. Velit sunt labore dolores et dolore. Cumque vitae consequatur sed nisi est quia ut.', '371', '+38626112788', 'Předat nálepku', 'N', 'DPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(859, '61166', '61166.jpg', 'JUDr.', 'Kubánková', NULL, NULL, 'Lenka', 'MUDr.', '19', '1', 'martina95@example.com', '2023-01-13', '2023-01-13', 'Tempore nemo dolorem assumenda et enim autem eligendi. At laboriosam eum quis veniam recusandae qui porro. Sed ut modi et ut eligendi a dolor.', '425', '+6883391744', 'Vrácena', 'A', 'DPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(860, '64994', '64994.jpg', 'Bc.', 'Nováčková', NULL, NULL, 'Lubomír', 'MVDr.', '6', '51', 'adittrichova@example.net', '2023-01-11', '2023-01-14', 'Unde quia quae at veritatis fugit illo non. Exercitationem occaecati eius accusantium est suscipit perspiciatis quisquam. Ratione nemo dolore sed et totam perspiciatis ea eius.', '373', '+996784322017', 'Nový nástup', 'N', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(861, '63293', '63293.jpg', 'MVDr.', 'Šašková', NULL, NULL, 'Nikola', 'JUDr.', '19', '67', 'bcervenak@example.org', '2023-01-13', '2023-01-02', 'Rerum nihil voluptate quaerat distinctio itaque. Voluptates repellat totam et dolor et illo. Neque quia voluptates fugit et harum rerum in. Quia sint aut a deleniti.', '430', '+870673063401', 'Aktualizovat nálepku', 'A', 'EVP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(862, '62461', '62461.jpg', 'RNDr.', 'Spurná', NULL, NULL, 'Adam', 'Bc.', '30', '27', 'patrik.rezacova@example.org', '2023-01-03', '2023-01-14', 'Voluptatem architecto rerum excepturi labore explicabo. Quia sint velit aut voluptas eos sed praesentium. Et dolorem reiciendis rerum dolorem aut dolorem rerum ea.', '387', '+376349221088', 'Vytvořit kartu', 'N', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(863, '63103', '63103.jpg', 'MUDr.', 'Bartůňková', NULL, NULL, 'Josef', 'Ing.', '7', '72', 'krejcirova.ruzena@example.net', '2023-01-09', '2023-01-03', 'Consequuntur magni aliquid rerum perferendis odio porro. Libero sint error ut nihil. Ab quo ad cum iste.', '400', '+23636528593', 'Vrácena', 'N', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(864, '61242', '61242.jpg', 'MVDr.', 'Podzimková', NULL, NULL, 'Adéla', 'MUDr.', '5', '19', 'ubrezina@example.net', '2023-01-15', '2023-01-05', 'Excepturi error id pariatur sunt. Quibusdam quod nisi sit qui vero. Eius et repellendus praesentium maiores dolorem beatae. Eos praesentium corrupti porro omnis.', '429', '+50482821695', 'Předat nálepku', 'N', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(865, '61540', '61540.jpg', 'MUDr.', 'Bednář', NULL, NULL, 'Marta', 'MUDr.', '1', '29', 'bstara@example.com', '2023-01-13', '2023-01-10', 'Saepe perferendis pariatur et aliquam sequi aut. Et sunt voluptates dolorem facere aliquam repellendus.', '497', '+255268251347', 'Předat nálepku', 'N', 'ČSO', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(866, '63440', '63440.jpg', 'JUDr.', 'Melichar', NULL, NULL, 'Emil', 'PhDr.', '12', '66', 'stepan.marek@example.com', '2023-01-07', '2023-01-11', 'Cum ad repellat sint cupiditate officiis. Id ab nemo esse adipisci ea. Sed autem est architecto recusandae aspernatur ducimus totam.', '447', '+623627418500', 'Vytvořit kartu', 'A', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(867, '64500', '64500.jpg', 'Dr.', 'Ambrožová', NULL, NULL, 'Zbyněk', 'Dr.', '14', '59', 'maria54@example.net', '2023-01-14', '2023-01-11', 'Ut quas veritatis nobis tempore fugiat. Sed et distinctio aut illum praesentium molestiae odit. Molestiae ea eos aut pariatur rerum sed inventore.', '526', '+9643262001825', 'Ok', 'A', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(868, '63920', '63920.jpg', 'doc.', 'Kocourková', NULL, NULL, 'Filip', 'PhDr.', '12', '2', 'pribylova.jitka@example.net', '2023-01-12', '2023-01-13', 'Vero omnis accusamus reiciendis nihil. Dolores dolor eaque facilis ex iste soluta consequatur. Harum possimus perspiciatis reiciendis soluta et.', '482', '+8506692033753', 'Vrácena', 'N', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(869, '62841', '62841.jpg', 'MVDr.', 'Diviš', NULL, NULL, 'Martin', 'Ing.', '13', '38', 'jirina53@example.net', '2023-01-07', '2023-01-15', 'Veritatis qui rerum ut temporibus. Odit temporibus eaque et excepturi. Enim molestias dicta et.', '478', '+258053096515', 'Vytvořit kartu', 'A', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12');
INSERT INTO `employees` (`id`, `personal_number`, `image`, `title_preffix`, `last_name`, `middle_name`, `married_name`, `first_name`, `title_suffix`, `department_id`, `job_id`, `email`, `start_date`, `end_date`, `comment`, `phone`, `mobile`, `id_card`, `coffee`, `employment`, `position`, `status`, `created_at`, `updated_at`) VALUES
(870, '64122', '64122.jpg', 'PhDr.', 'Vokounová', NULL, NULL, 'Jozef', 'RNDr.', '29', '44', 'dana24@example.net', '2023-01-09', '2023-01-11', 'Incidunt asperiores illo magni molestias. Quos in labore odio repellat molestiae consequuntur dolores. Ea corporis nihil ex occaecati.', '406', '+4557177033', 'Vrácena', 'N', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(871, '61038', '61038.jpg', 'MVDr.', 'Baran', NULL, NULL, 'Zdeňka', 'MVDr.', '8', '21', 'krystof.polackova@example.net', '2023-01-04', '2023-01-02', 'Doloribus ut libero rem eaque voluptatem ea qui. Ratione ut voluptatum dolor est amet voluptatibus.', '369', '+93723563179', 'Vytvořit kartu', 'A', 'DPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(872, '63176', '63176.jpg', 'doc.', 'Boháč', NULL, NULL, 'Nela', 'Mgr.', '16', '23', 'beckova.daniel@example.com', '2023-01-09', '2023-01-04', 'Architecto labore omnis et sit. Dolorem aut cumque placeat molestiae ipsum. Laborum dolor rerum molestiae excepturi quibusdam libero repellat.', '390', '+243898084096', 'Předat nálepku', 'N', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(873, '61413', '61413.jpg', 'Mgr.', 'Skácel', NULL, NULL, 'Robert', 'RNDr.', '4', '13', 'yfousek@example.com', '2023-01-12', '2023-01-04', 'Asperiores corporis aspernatur quidem praesentium aliquid cupiditate eum. Modi voluptates cupiditate vitae minima quod.', '416', '+917219633863', 'Předat nálepku', 'N', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(874, '61387', '61387.jpg', 'Ing.', 'Žemlička', NULL, NULL, 'Zdenka', 'Mgr.', '3', '40', 'milos77@example.net', '2023-01-15', '2023-01-08', 'Et repudiandae laborum totam in. Sed est quia eos laboriosam magnam. Provident ipsam architecto quidem tempora autem libero enim numquam. Nobis sed ex corrupti eos aliquid aut.', '406', '+8823591319105', 'Aktualizovat nálepku', 'A', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(875, '64089', '64089.jpg', 'RNDr.', 'Plachý', NULL, NULL, 'Michaela', 'PhDr.', '13', '48', 'daniela.stehlikova@example.com', '2023-01-12', '2023-01-05', 'Doloremque necessitatibus ratione dolor voluptatem quidem. Facere placeat tenetur officia illum sunt. Unde blanditiis reiciendis exercitationem. Fuga modi dignissimos tenetur similique.', '411', '+9706254554758', 'Vrácena', 'A', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(876, '62920', '62920.jpg', 'MVDr.', 'Vlach', NULL, NULL, 'Miloš', 'Mgr.', '28', '64', 'robert.mackova@example.org', '2023-01-04', '2023-01-12', 'Et harum et voluptatem eveniet. Autem dicta error adipisci excepturi ex porro corporis aut. Vel sed molestiae blanditiis dolorum laboriosam alias repellat.', '425', '+2467963091', 'Aktualizovat nálepku', 'N', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(877, '63651', '63651.jpg', 'RNDr.', 'Berkyová', NULL, NULL, 'Pavel', 'PhDr.', '26', '21', 'pavel49@example.net', '2023-01-05', '2023-01-10', 'Et occaecati sit aut harum voluptas quas. Sint est quibusdam impedit qui ipsam. Adipisci aliquid modi illum.', '548', '+22794735376', 'Aktualizovat nálepku', 'N', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(878, '64754', '64754.jpg', 'MUDr.', 'Vysloužil', NULL, NULL, 'Bohuslav', 'RNDr.', '24', '14', 'stepan12@example.net', '2023-01-15', '2023-01-11', 'Aliquam occaecati laudantium dolore est fuga quas. Impedit minus ut eum sapiente deserunt.', '437', '+3758803114274', 'Ok', 'N', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(879, '61521', '61521.jpg', 'Mgr.', 'Machala', NULL, NULL, 'Miloš', 'RNDr.', '27', '49', 'ivo.tomanova@example.com', '2023-01-04', '2023-01-04', 'Dolor id non exercitationem est eveniet id eius. Et minus in est pariatur impedit. Incidunt odio beatae laborum magni. Perferendis aperiam eos totam vitae quis.', '391', '+383070891645', 'Nový nástup', 'A', 'DPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(880, '62527', '62527.jpg', 'doc.', 'Smutná', NULL, NULL, 'Peter', 'Bc.', '23', '25', 'ihornik@example.org', '2023-01-09', '2023-01-10', 'Eius sed magni fugit ipsam omnis ut dolores et. Enim fugit et earum quaerat nihil. Ipsum officia vero iure ea architecto. Dolorum vel molestias aliquam quo quis aut cum.', '387', '+262842132828', 'Nový nástup', 'A', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(881, '63934', '63934.jpg', 'Dr.', 'Vítková', NULL, NULL, 'Anežka', 'Bc.', '23', '40', 'dschneider@example.org', '2023-01-07', '2023-01-13', 'Necessitatibus omnis magni aut et sint. Saepe id debitis libero perferendis harum nulla. Eos pariatur sint est.', '522', '+351821304478', 'Ok', 'N', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(882, '64481', '64481.jpg', 'MVDr.', 'Diviš', NULL, NULL, 'Ludmila', 'doc.', '26', '10', 'zdenka93@example.org', '2023-01-14', '2023-01-03', 'Molestiae earum quasi quas deleniti numquam. Saepe praesentium rerum quibusdam similique soluta eaque hic. Voluptatum est exercitationem unde consequatur veritatis doloremque.', '555', '+38601546523', 'Předat nálepku', 'A', 'EVP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(883, '62294', '62294.jpg', 'Mgr.', 'Kalous', NULL, NULL, 'Michael', 'RNDr.', '30', '39', 'jruzkova@example.net', '2023-01-13', '2023-01-14', 'Voluptas natus molestiae repellendus ducimus non ut. Possimus nihil recusandae molestiae sint suscipit.', '436', '+35616942302', 'Vytvořit kartu', 'N', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(884, '61467', '61467.jpg', 'Dr.', 'Brejchová', NULL, NULL, 'Radek', 'JUDr.', '17', '38', 'matyas.hrdlicka@example.org', '2023-01-04', '2023-01-06', 'Iure blanditiis quidem labore exercitationem libero sit asperiores. Facere consequatur unde dolor voluptatibus ut culpa quae. Ut quia rerum odit quo velit corrupti fugiat et.', '349', '+8808330903696', 'Vytvořit kartu', 'N', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(885, '63491', '63491.jpg', 'PhDr.', 'Černý', NULL, NULL, 'Zdeněk', 'MVDr.', '28', '63', 'kacirek.ladislav@example.net', '2023-01-11', '2023-01-12', 'Fugit velit fugiat consequatur et nesciunt dignissimos. Autem amet officia autem modi rem labore voluptatum. Esse reiciendis sunt eveniet eum rem inventore. Ullam non animi eaque.', '519', '+351844509651', 'Ok', 'A', 'DPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(886, '64150', '64150.jpg', 'Dr.', 'Šimáková', NULL, NULL, 'Zdeňka', 'Dr.', '18', '24', 'rsmejkal@example.com', '2023-01-08', '2023-01-08', 'Modi libero sed voluptatibus consequatur eaque dignissimos. Sint aut odit dolor dolor mollitia nisi recusandae. Laboriosam dicta et est eius. Quia placeat voluptates iste harum ut autem.', '388', '+988787560113', 'Aktualizovat nálepku', 'N', 'DPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(887, '61853', '61853.jpg', 'PhDr.', 'Boháč', NULL, NULL, 'Dominik', 'JUDr.', '18', '46', 'svatos.bozena@example.net', '2023-01-15', '2023-01-16', 'Nisi voluptas quas sunt voluptate voluptas voluptate. Magni ad quibusdam qui ut. Totam ut quia nulla.', '363', '+6832074061', 'Nový nástup', 'N', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(888, '63830', '63830.jpg', 'JUDr.', 'Poláčková', NULL, NULL, 'Soňa', 'doc.', '27', '2', 'csochorova@example.org', '2023-01-06', '2023-01-04', 'A labore iusto omnis. Quis aliquam quisquam quaerat ad quis dignissimos vel. Dolor et rerum neque quo et et. Aut quisquam quaerat quia consequatur.', '425', '+213360632112', 'Nový nástup', 'N', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(889, '63205', '63205.jpg', 'Dr.', 'Michnová', NULL, NULL, 'Viktor', 'JUDr.', '30', '10', 'grambousek@example.com', '2023-01-04', '2023-01-07', 'Qui numquam quam tenetur officia impedit optio aut. At in enim est quod sunt. Rerum ratione dicta itaque. Numquam quia aliquid inventore. Eligendi excepturi possimus iste ut dolorem saepe enim.', '355', '+672707104', 'Předat nálepku', 'N', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(890, '64081', '64081.jpg', 'Ing.', 'Bína', NULL, NULL, 'Alžběta', 'Bc.', '14', '18', 'vera.beckova@example.org', '2023-01-12', '2023-01-05', 'Voluptas quasi ab aperiam. Sit ut qui iusto temporibus omnis. Ut dolorum vitae quas.', '351', '+50522630153', 'Vrácena', 'N', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(891, '64176', '64176.jpg', 'MUDr.', 'Tomeš', NULL, NULL, 'Olga', 'Dr.', '2', '35', 'dkafkova@example.com', '2023-01-03', '2023-01-02', 'Perspiciatis repellendus placeat perferendis eveniet eos ut corporis. Est qui itaque maiores dignissimos sapiente. Molestiae dolore temporibus quos commodi perferendis quo non.', '379', '+980744069533', 'Aktualizovat nálepku', 'A', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(892, '64248', '64248.jpg', 'MUDr.', 'Mikulášková', NULL, NULL, 'Zbyněk', 'JUDr.', '29', '41', 'jarmila.koudelkova@example.net', '2023-01-15', '2023-01-02', 'Qui aut et doloribus in quos corporis iste. Modi omnis qui a distinctio enim quod. Voluptas velit necessitatibus natus est sint.', '411', '+654646061181', 'Aktualizovat nálepku', 'N', 'EVP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(893, '64761', '64761.jpg', 'RNDr.', 'Frydrychová', NULL, NULL, 'Andrea', 'Mgr.', '7', '10', 'ivana.gabriel@example.net', '2023-01-06', '2023-01-13', 'Molestiae amet dolores reprehenderit autem. Tenetur impedit ut quo nulla rerum corrupti qui. Molestiae corrupti reprehenderit libero dignissimos magnam.', '511', '+6853070415449', 'Nový nástup', 'A', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(894, '64894', '64894.jpg', 'Ing.', 'Šubrtová', NULL, NULL, 'Peter', 'Dr.', '4', '67', 'ekomarek@example.net', '2023-01-15', '2023-01-08', 'Aut quo veniam quasi saepe aut id iure. Laborum sed illo qui voluptatem et et. Architecto sit quas et maxime excepturi asperiores.', '389', '+878562785639446', 'Ok', 'N', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(895, '62549', '62549.jpg', 'Ing.', 'Peterková', NULL, NULL, 'Radek', 'MUDr.', '30', '49', 'bohuslav20@example.com', '2023-01-09', '2023-01-15', 'Fugiat non earum laborum enim. Perspiciatis optio assumenda non inventore voluptatem voluptatem esse. Omnis voluptas excepturi aspernatur laboriosam.', '429', '+22638015605', 'Aktualizovat nálepku', 'N', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(896, '62452', '62452.jpg', 'Dr.', 'Antoš', NULL, NULL, 'Růžena', 'PhDr.', '13', '20', 'milan.pelikan@example.org', '2023-01-06', '2023-01-08', 'Ipsum sequi recusandae est vero. Ea ut odio id quidem tempore veritatis consequatur. Dolor quod laborum expedita vitae. Unde unde quae dolores numquam atque fuga quos quidem.', '427', '+245731814855', 'Ok', 'A', 'HPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(897, '64169', '64169.jpg', 'Bc.', 'Vaněk', NULL, NULL, 'Jozef', 'JUDr.', '26', '65', 'mvavrikova@example.org', '2023-01-14', '2023-01-10', 'Est et quod suscipit vero voluptas sed. At et at eum est sint rerum repellat. Aut ratione dignissimos quia occaecati eos velit distinctio. Alias officiis consequatur quam eos.', '416', '+2468487231', 'Vrácena', 'A', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(898, '61852', '61852.jpg', 'Bc.', 'Vojtěch', NULL, NULL, 'Matěj', 'Bc.', '22', '45', 'vit.dolejs@example.net', '2023-01-15', '2023-01-04', 'In ipsum aperiam in voluptas harum. Et reiciendis itaque nostrum velit porro quibusdam voluptate quisquam. Voluptate dolor et aliquid reprehenderit.', '508', '+33648095746', 'Předat nálepku', 'N', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(899, '62250', '62250.jpg', 'Dr.', 'Máchová', NULL, NULL, 'Olga', 'Ing.', '19', '49', 'stepanka22@example.net', '2023-01-04', '2023-01-06', 'Fugiat totam ut consequuntur velit et tempore. Hic odio consequatur voluptate occaecati nulla laudantium. Est est ex quia voluptatem dolor praesentium.', '497', '+6792079864', 'Nový nástup', 'N', 'HPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(900, '64590', '64590.jpg', 'MVDr.', 'Šimečková', NULL, NULL, 'Zbyněk', 'doc.', '6', '64', 'oslaninova@example.com', '2023-01-12', '2023-01-09', 'Et necessitatibus a quo. Repellendus in vel consectetur optio non ullam. Et placeat ut qui est ex soluta. Neque adipisci soluta voluptas fugit et dicta.', '436', '+979477074190', 'Předat nálepku', 'N', 'DPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(901, '62262', '62262.jpg', 'doc.', 'Krejčířová', NULL, NULL, 'Martin', 'MVDr.', '16', '18', 'anagyova@example.com', '2023-01-13', '2023-01-06', 'Laboriosam suscipit quia reprehenderit aperiam dolores. Sed deserunt voluptas eum aut aliquid neque neque. Et itaque accusamus voluptatum quo rerum voluptatem quia.', '343', '+5987132748164', 'Předat nálepku', 'A', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(902, '62737', '62737.jpg', 'PhDr.', 'Prchalová', NULL, NULL, 'Jozef', 'Dr.', '23', '38', 'matej56@example.org', '2023-01-13', '2023-01-11', 'Voluptas expedita dolorem ea a eum totam maxime. Vel ut sapiente quod sed est. Itaque architecto veniam aut vitae aliquam et. Sed tempore ducimus quia non et. Ea deserunt et ea deserunt dolores cum.', '508', '+6764024947', 'Předat nálepku', 'A', 'HPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(903, '62753', '62753.jpg', 'MUDr.', 'Benešová', NULL, NULL, 'Františka', 'MUDr.', '6', '68', 'uspicka@example.org', '2023-01-07', '2023-01-15', 'Enim reiciendis asperiores qui facere dolores voluptates. Aperiam vero quisquam natus labore. Dolore provident natus eos quo autem inventore. Quo libero qui autem.', '343', '+562355274887', 'Vrácena', 'A', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(904, '63219', '63219.jpg', 'Dr.', 'Rezková', NULL, NULL, 'Zdeňka', 'Ing.', '5', '49', 'yhradecky@example.org', '2023-01-11', '2023-01-02', 'Qui nobis sequi architecto quam qui est id qui. Harum similique animi sint sit rerum. Et aliquid dolor eum et et fuga. Illo expedita similique inventore temporibus tempore.', '498', '+538251802894', 'Vytvořit kartu', 'N', 'DPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(905, '64010', '64010.jpg', 'PhDr.', 'Pekařová', NULL, NULL, 'František', 'Mgr.', '8', '41', 'horacek.andrea@example.com', '2023-01-10', '2023-01-02', 'Qui atque aut laborum. Non temporibus modi eligendi voluptatum.', '397', '+8550805561361', 'Nový nástup', 'A', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(906, '63165', '63165.jpg', 'Bc.', 'Skácel', NULL, NULL, 'Vasyl', 'MVDr.', '6', '4', 'dominika87@example.org', '2023-01-07', '2023-01-04', 'Iusto consequuntur earum suscipit et accusamus quo iste. Laborum autem deleniti id iste nobis. Nesciunt corporis tempore iusto enim optio natus.', '545', '+50238347593', 'Vrácena', 'A', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(907, '61733', '61733.jpg', 'Ing.', 'Kohoutová', NULL, NULL, 'Josef', 'doc.', '25', '38', 'ijirka@example.net', '2023-01-15', '2023-01-03', 'Eum libero in est enim sit voluptate. Beatae ipsam commodi culpa magnam reprehenderit quia rerum vitae. Cupiditate totam rerum consequuntur.', '482', '+354756423975', 'Nový nástup', 'N', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(908, '63707', '63707.jpg', 'Mgr.', 'Plšek', NULL, NULL, 'Věra', 'Bc.', '12', '66', 'radka63@example.org', '2023-01-12', '2023-01-08', 'Sapiente animi earum qui rerum eos rem id. Sequi nobis enim ipsum quia nihil optio quia. Quidem sit minima est expedita non et est. Est excepturi voluptatem modi exercitationem nisi nisi.', '540', '+640968288085', 'Nový nástup', 'A', 'ČSO', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(909, '62698', '62698.jpg', 'JUDr.', 'Vokoun', NULL, NULL, 'René', 'JUDr.', '21', '55', 'vendula.bohac@example.com', '2023-01-14', '2023-01-13', 'Molestiae omnis iusto dolorem illum in ut. Doloremque ipsam non reprehenderit excepturi qui eum qui cumque. Provident deserunt est repellendus vel. Veniam nulla quia ipsam natus sint.', '516', '+926226526159', 'Ok', 'A', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(910, '64185', '64185.jpg', 'MVDr.', 'Michalcová', NULL, NULL, 'Ludmila', 'MVDr.', '28', '32', 'vasek.rudolf@example.net', '2023-01-15', '2023-01-09', 'Aut non adipisci voluptas itaque quia. Nihil ad quia minima.', '357', '+881347398571', 'Aktualizovat nálepku', 'A', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(911, '61105', '61105.jpg', 'Dr.', 'Peterka', NULL, NULL, 'Adéla', 'RNDr.', '20', '30', 'egregorova@example.org', '2023-01-05', '2023-01-04', 'Reiciendis veniam amet voluptatem et vel voluptas distinctio. Quod officia animi maxime ut tempora repellat. Expedita explicabo perspiciatis voluptates at sed.', '455', '+261837263792', 'Nový nástup', 'A', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(912, '62055', '62055.jpg', 'doc.', 'Duda', NULL, NULL, 'Nikola', 'PhDr.', '17', '63', 'sneumannova@example.org', '2023-01-11', '2023-01-05', 'Repellendus amet quibusdam vel nihil est id et. Cupiditate corrupti excepturi beatae laudantium maiores consequuntur dolorem qui. Aut et voluptatibus omnis quaerat doloremque aut ipsum.', '490', '+6929102296', 'Vrácena', 'N', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(913, '64390', '64390.jpg', 'JUDr.', 'Antoš', NULL, NULL, 'Renáta', 'doc.', '5', '40', 'lukas87@example.org', '2023-01-08', '2023-01-09', 'Non illo repellendus pariatur et assumenda fugit dignissimos. Voluptas aut in et sit et. Et eum quis velit rerum molestias at qui.', '480', '+382515547980', 'Nový nástup', 'A', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(914, '62842', '62842.jpg', 'doc.', 'Čížková', NULL, NULL, 'Adéla', 'JUDr.', '1', '22', 'helena22@example.net', '2023-01-11', '2023-01-10', 'Inventore quas non nulla. Porro omnis voluptatem et et expedita dolorem. Error quod et qui aut. Asperiores modi consectetur velit consectetur tempore ipsam.', '519', '+249297610618', 'Vrácena', 'A', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(915, '61350', '61350.jpg', 'Dr.', 'Sekaninová', NULL, NULL, 'Lubomír', 'MVDr.', '23', '59', 'richard86@example.org', '2023-01-14', '2023-01-10', 'Odit aut suscipit aliquid sed omnis. Sunt molestias hic sequi autem. In rem vitae fuga enim reprehenderit ut excepturi. Facilis velit at earum id unde est nam.', '464', '+8507704914554', 'Předat nálepku', 'N', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(916, '64284', '64284.jpg', 'doc.', 'Hradecký', NULL, NULL, 'Jana', 'RNDr.', '27', '34', 'neuman.zdenka@example.com', '2023-01-08', '2023-01-15', 'Aut eos ut est sunt libero dolores consequuntur. Ut quam quia itaque maiores minus consequatur consequatur. Quia dolorem excepturi saepe dicta. Odio repellendus inventore a ut.', '468', '+8868166354535', 'Aktualizovat nálepku', 'N', 'ČSO', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(917, '63010', '63010.jpg', 'Dr.', 'Vysloužil', NULL, NULL, 'Daniel', 'MVDr.', '24', '64', 'milos.kindl@example.com', '2023-01-14', '2023-01-04', 'Ratione omnis ullam voluptatum totam minus atque qui. Fuga quod voluptate aspernatur nisi. Qui quis harum dolorem itaque quam laborum. Qui ipsam dolor sit dolorem provident consequatur impedit.', '448', '+883055391803', 'Ok', 'N', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(918, '61198', '61198.jpg', 'JUDr.', 'Huml', NULL, NULL, 'Štěpán', 'MVDr.', '25', '68', 'krajickova.ludmila@example.net', '2023-01-04', '2023-01-02', 'Quia voluptatem dicta sunt. Expedita odio nihil facere architecto. Qui quia ut est minima in autem dolor ex.', '507', '+255966640944', 'Aktualizovat nálepku', 'N', 'EVP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(919, '61699', '61699.jpg', 'RNDr.', 'Boušková', NULL, NULL, 'Antonín', 'PhDr.', '29', '33', 'hendrychova.tereza@example.net', '2023-01-04', '2023-01-06', 'Odio cumque facere minima libero cupiditate. Sapiente non sed voluptatibus tempora. Ipsum debitis ipsa facere quod voluptatem. Molestias maxime magnam voluptas eaque minima molestiae quis.', '482', '+687689634', 'Vrácena', 'N', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(920, '62925', '62925.jpg', 'Dr.', 'Zbořil', NULL, NULL, 'Renáta', 'Mgr.', '16', '67', 'yminarikova@example.org', '2023-01-14', '2023-01-04', 'Suscipit ullam totam porro quis. Vitae molestiae in ut. Ea voluptas ut nam cupiditate explicabo. Rerum nam distinctio qui amet alias voluptatibus fuga.', '543', '+88890738706855', 'Nový nástup', 'N', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(921, '62489', '62489.jpg', 'Mgr.', 'Bílý', NULL, NULL, 'Štěpán', 'MUDr.', '9', '2', 'dusan.jirku@example.com', '2023-01-09', '2023-01-15', 'Velit ut amet corporis quo. Nisi eum eius rerum impedit atque necessitatibus.', '435', '+994260139590', 'Předat nálepku', 'A', 'EVP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(922, '64706', '64706.jpg', 'MUDr.', 'Kadlcová', NULL, NULL, 'Olga', 'PhDr.', '8', '67', 'dominika.sedlarova@example.net', '2023-01-03', '2023-01-05', 'Aut laborum quia qui explicabo at voluptatem labore. Esse quasi aut mollitia vero tenetur. Eos tempore facilis maxime ut. Autem vel delectus occaecati ad et beatae.', '526', '+631375559564', 'Vytvořit kartu', 'A', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(923, '61189', '61189.jpg', 'doc.', 'Studená', NULL, NULL, 'Tereza', 'MVDr.', '13', '54', 'grundzova.zdenka@example.net', '2023-01-13', '2023-01-11', 'Consectetur fugiat quaerat cumque. Officiis et voluptas ipsam id. Sunt quasi ut quod dolorum libero. Quaerat qui eaque non quia dolores.', '382', '+355586294238', 'Ok', 'N', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(924, '62671', '62671.jpg', 'RNDr.', 'Cihlář', NULL, NULL, 'Zdenka', 'PhDr.', '23', '65', 'slovak.zdenka@example.net', '2023-01-09', '2023-01-10', 'Et dicta nihil tempora odit distinctio. Voluptatem id non cum et atque ut quibusdam. Sequi architecto ducimus debitis aut corrupti libero eligendi.', '355', '+2205156442', 'Nový nástup', 'A', 'DPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(925, '64686', '64686.jpg', 'Mgr.', 'Zahradník', NULL, NULL, 'Ivan', 'RNDr.', '26', '30', 'michael37@example.org', '2023-01-09', '2023-01-11', 'Et quibusdam aspernatur officia ipsum explicabo ex. In eos accusantium excepturi itaque placeat facilis. Voluptas officiis voluptatum debitis vel sint vel.', '547', '+926927517916', 'Aktualizovat nálepku', 'A', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(926, '63904', '63904.jpg', 'doc.', 'Hanušová', NULL, NULL, 'Františka', 'RNDr.', '11', '15', 'andrea66@example.com', '2023-01-14', '2023-01-12', 'Et qui maxime enim dolorum ipsum quas consequatur. Facilis odio rerum ea ullam illum laboriosam ut. Vel molestiae magnam nulla dolores et ipsum quae repellat. At perferendis delectus aliquid.', '369', '+2205248449', 'Vytvořit kartu', 'N', 'DPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(927, '64971', '64971.jpg', 'Mgr.', 'Jirsa', NULL, NULL, 'Naděžda', 'MUDr.', '31', '5', 'lprokopova@example.com', '2023-01-08', '2023-01-05', 'Asperiores temporibus reprehenderit atque modi porro in et. Fuga ut magni deleniti vitae tempora ducimus. Rem est aliquam qui commodi occaecati sapiente et voluptates.', '504', '+651397782561', 'Vytvořit kartu', 'A', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(928, '63876', '63876.jpg', 'MUDr.', 'Hanušová', NULL, NULL, 'Lenka', 'RNDr.', '25', '43', 'stoklasova.alois@example.com', '2023-01-11', '2023-01-11', 'Similique labore sit ipsum. Est repudiandae quia eos sunt rerum. Perferendis occaecati aut voluptatem adipisci ut nisi tempore eligendi.', '487', '+359721760240', 'Aktualizovat nálepku', 'A', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(929, '64435', '64435.jpg', 'Mgr.', 'Koudelková', NULL, NULL, 'Dominika', 'PhDr.', '28', '35', 'evavrik@example.com', '2023-01-10', '2023-01-12', 'Quaerat esse molestias porro animi quia unde hic. Laboriosam et qui voluptatem. Blanditiis et accusamus quibusdam. In ut ea facere.', '488', '+2545513810155', 'Předat nálepku', 'A', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(930, '62699', '62699.jpg', 'MUDr.', 'Křenek', NULL, NULL, 'Miluše', 'Mgr.', '2', '44', 'vblaha@example.net', '2023-01-08', '2023-01-08', 'Qui est qui dolor laboriosam. Autem sed nisi iste laudantium facere. Impedit hic ipsa sit voluptatibus repellat voluptas quia.', '510', '+6913520608', 'Aktualizovat nálepku', 'N', 'ČSO', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(931, '61687', '61687.jpg', 'RNDr.', 'Ludvíková', NULL, NULL, 'Jitka', 'Ing.', '6', '10', 'vbradacova@example.org', '2023-01-02', '2023-01-07', 'Porro officiis reiciendis harum porro similique. Nam provident quidem laudantium sint quo. Vel in eos perferendis doloribus.', '547', '+9709346309111', 'Vytvořit kartu', 'N', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(932, '62877', '62877.jpg', 'MUDr.', 'Valentová', NULL, NULL, 'Lucie', 'Dr.', '4', '54', 'barbora.krizova@example.org', '2023-01-06', '2023-01-15', 'Eum voluptates pariatur omnis consequatur totam. Temporibus est qui facere.', '505', '+6765423665', 'Vrácena', 'A', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(933, '63375', '63375.jpg', 'MVDr.', 'Schejbalová', NULL, NULL, 'Pavla', 'PhDr.', '18', '52', 'hneuman@example.com', '2023-01-06', '2023-01-03', 'Qui nihil voluptatem ad quidem est assumenda at. Id voluptas et molestiae sunt. Numquam et nisi dolores dolorem unde et reiciendis.', '356', '+870399525375', 'Předat nálepku', 'A', 'ČSO', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(934, '61882', '61882.jpg', 'Bc.', 'Sobotková', NULL, NULL, 'Martina', 'PhDr.', '5', '14', 'ykrenkova@example.net', '2023-01-16', '2023-01-11', 'Assumenda laboriosam placeat nulla laudantium nulla. Dolores sunt neque et nam qui earum. Atque accusamus nobis dolorem illo officiis voluptas.', '417', '+998132911402', 'Vrácena', 'N', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(935, '63077', '63077.jpg', 'Ing.', 'Dobiáš', NULL, NULL, 'Kateřina', 'Ing.', '24', '60', 'muzikova.martin@example.com', '2023-01-06', '2023-01-07', 'Dicta dolorem ea enim ad. Quod laudantium voluptatibus voluptates voluptas tempora sit. Et ut sint tenetur fugit qui.', '387', '+604383870300', 'Aktualizovat nálepku', 'A', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(936, '64229', '64229.jpg', 'PhDr.', 'Křivánek', NULL, NULL, 'Štefan', 'RNDr.', '17', '27', 'upernicova@example.net', '2023-01-06', '2023-01-11', 'Consequuntur quaerat possimus dolor voluptas magnam at. Optio dolorum maiores et deserunt consequatur cupiditate. Cum maiores sed quia et atque neque omnis velit.', '525', '+22992877613', 'Předat nálepku', 'A', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(937, '61448', '61448.jpg', 'JUDr.', 'Ulrich', NULL, NULL, 'Nikola', 'Dr.', '15', '39', 'wjaneckova@example.net', '2023-01-13', '2023-01-09', 'Sed quis aliquam architecto eum. Sed nobis quisquam temporibus non eius officia at.', '406', '+820222677363', 'Nový nástup', 'A', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(938, '62075', '62075.jpg', 'doc.', 'Šimon', NULL, NULL, 'Alžběta', 'doc.', '2', '26', 'blanka.prucha@example.net', '2023-01-16', '2023-01-08', 'Reiciendis error porro facere rerum voluptatem. Vitae nam doloremque mollitia quisquam aut quod praesentium. Autem aut quia repudiandae facilis. Possimus ut aliquid ad aut qui.', '436', '+387079678432', 'Nový nástup', 'A', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(939, '64547', '64547.jpg', 'RNDr.', 'Hladká', NULL, NULL, 'Viktor', 'Bc.', '24', '58', 'lubomir.panek@example.net', '2023-01-12', '2023-01-14', 'Natus recusandae similique ad. Optio repellat laborum nam ipsum. Suscipit aliquam dicta dolorum.', '419', '+396362488740', 'Předat nálepku', 'A', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(940, '64741', '64741.jpg', 'MVDr.', 'Husáková', NULL, NULL, 'Vlasta', 'MUDr.', '22', '3', 'ihrbkova@example.com', '2023-01-15', '2023-01-08', 'Sapiente in voluptate odit officiis sequi distinctio ut eius. Nemo ipsam id incidunt alias corrupti. Rerum doloremque quidem sed quo ut repudiandae.', '462', '+9607942942673', 'Vrácena', 'A', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(941, '63001', '63001.jpg', 'PhDr.', 'Zelený', NULL, NULL, 'Kamila', 'JUDr.', '30', '67', 'stepanka.papez@example.org', '2023-01-12', '2023-01-04', 'Velit non sunt quia aut aut repudiandae atque. Est voluptas quo et quo amet. Dolorum autem ullam minima commodi a adipisci.', '500', '+508839414493', 'Vrácena', 'A', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(942, '62855', '62855.jpg', 'MVDr.', 'Černohorský', NULL, NULL, 'Adam', 'Dr.', '8', '28', 'kamila03@example.com', '2023-01-08', '2023-01-05', 'Dignissimos et consectetur est impedit doloribus. Ut at et qui. Minus eveniet itaque fuga velit vitae.', '371', '+5921235841', 'Ok', 'A', 'ČSO', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(943, '62270', '62270.jpg', 'Bc.', 'Lukášek', NULL, NULL, 'Naděžda', 'doc.', '3', '14', 'chroma.pavla@example.net', '2023-01-08', '2023-01-12', 'Nobis facilis sapiente omnis asperiores quia dolorem eum facere. Laudantium quasi veritatis qui aut ut eum unde. Quaerat est at delectus necessitatibus molestiae sed quae.', '525', '+821022406807', 'Aktualizovat nálepku', 'A', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(944, '62750', '62750.jpg', 'Bc.', 'Semerádová', NULL, NULL, 'Kristýna', 'PhDr.', '31', '45', 'ivan67@example.net', '2023-01-03', '2023-01-14', 'Quos molestiae et quia. Similique itaque laborum saepe explicabo. Corporis laudantium et unde omnis nihil quasi consequatur.', '373', '+2670580113002', 'Nový nástup', 'A', 'DPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(945, '61525', '61525.jpg', 'PhDr.', 'Strnadová', NULL, NULL, 'Patrik', 'MUDr.', '17', '31', 'vladimira.vorlickova@example.net', '2023-01-15', '2023-01-07', 'Perspiciatis alias excepturi accusamus aut id. Rerum numquam corporis in dolor nesciunt et vitae.', '461', '+231154009192', 'Aktualizovat nálepku', 'N', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(946, '61498', '61498.jpg', 'PhDr.', 'Vágner', NULL, NULL, 'Hana', 'Ing.', '28', '19', 'placha.miluse@example.com', '2023-01-10', '2023-01-07', 'Quasi quia maiores est non assumenda rerum voluptate. Sapiente explicabo est corrupti nihil eum. Possimus voluptate accusamus vitae doloribus vero. Nostrum illum possimus aliquid dicta nisi.', '383', '+304975739983', 'Předat nálepku', 'A', 'ČSO', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(947, '63633', '63633.jpg', 'PhDr.', 'Provazníková', NULL, NULL, 'Šárka', 'Ing.', '4', '52', 'ondrej22@example.com', '2023-01-02', '2023-01-13', 'Nulla voluptas suscipit dolor aut similique id. Quo qui et voluptatibus nam animi odio autem possimus. Delectus provident nihil dignissimos quibusdam.', '432', '+237987391744', 'Vrácena', 'A', 'ČSO', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(948, '61638', '61638.jpg', 'Mgr.', 'Fuksová', NULL, NULL, 'Michael', 'Bc.', '20', '49', 'vitezslav.rehak@example.com', '2023-01-11', '2023-01-04', 'Tempora non minima molestias vitae nihil non. Quaerat a repudiandae non corrupti quo. Ipsum sequi voluptate quia magnam rerum.', '498', '+33066079323', 'Aktualizovat nálepku', 'N', 'DPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(949, '63965', '63965.jpg', 'Ing.', 'Kolářová', NULL, NULL, 'Tereza', 'MVDr.', '26', '2', 'mensikova.zdenka@example.com', '2023-01-15', '2023-01-09', 'Omnis enim velit deserunt quod. Quo dolorem molestias quo est aut. Sed voluptas aut occaecati autem omnis asperiores tempora totam. Voluptatum qui dolorum aut doloremque alias sit.', '351', '+6749338387', 'Předat nálepku', 'A', 'ČSO', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(950, '62953', '62953.jpg', 'Ing.', 'Prášková', NULL, NULL, 'Tereza', 'Bc.', '26', '8', 'rnemeckova@example.org', '2023-01-12', '2023-01-09', 'Consequatur dolores blanditiis aut a. Ea accusamus aliquam voluptates provident iure id tenetur. Hic qui necessitatibus rem ut.', '539', '+596335628747', 'Nový nástup', 'N', 'EVP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(951, '62356', '62356.jpg', 'Dr.', 'Kunešová', NULL, NULL, 'Marie', 'MVDr.', '18', '5', 'radek.rudolfova@example.net', '2023-01-08', '2023-01-04', 'Dolore quas mollitia aspernatur. Qui sed neque facilis. Ducimus aut illo ut aut ut. Ipsum illo voluptatem rerum quia libero veniam sed sequi.', '506', '+852796138357', 'Předat nálepku', 'N', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(952, '61569', '61569.jpg', 'Dr.', 'Plachá', NULL, NULL, 'Božena', 'Mgr.', '24', '64', 'ihrdinova@example.com', '2023-01-06', '2023-01-04', 'Qui et quam eos. Eum nulla rerum laborum nihil quam pariatur. Ut deserunt perspiciatis sed autem accusamus delectus.', '409', '+22331458764', 'Ok', 'N', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(953, '62358', '62358.jpg', 'doc.', 'Kopecká', NULL, NULL, 'Irena', 'Ing.', '20', '3', 'gkvasnickova@example.net', '2023-01-05', '2023-01-02', 'Omnis rerum id natus. Repudiandae autem perspiciatis harum fugit laudantium. Ducimus quos suscipit ad quis nihil. Autem ea aut adipisci et sequi dolores.', '482', '+29041958', 'Ok', 'N', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(954, '64849', '64849.jpg', 'Bc.', 'Horký', NULL, NULL, 'Kryštof', 'Ing.', '5', '14', 'kolar.oldrich@example.com', '2023-01-15', '2023-01-12', 'Voluptas dolor rerum labore deserunt aut omnis laudantium reprehenderit. Id voluptas non maiores rerum qui. Et sit nobis qui excepturi. Quaerat rerum aperiam officia nostrum dolorum quis.', '349', '+903460457566', 'Ok', 'N', 'DPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(955, '61755', '61755.jpg', 'MVDr.', 'Růžek', NULL, NULL, 'Marta', 'Bc.', '13', '65', 'hruskova.romana@example.org', '2023-01-14', '2023-01-16', 'Temporibus et rerum consequuntur sint ut quia. Nostrum impedit occaecati nemo similique quidem nostrum alias. Quia illum culpa delectus porro. Nemo numquam asperiores est numquam.', '431', '+59976982002', 'Vrácena', 'N', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(956, '63181', '63181.jpg', 'JUDr.', 'Dohnalová', NULL, NULL, 'Daniel', 'Bc.', '8', '44', 'barbora60@example.net', '2023-01-16', '2023-01-11', 'Eligendi sunt eveniet nihil sed est est provident. Minus minus cupiditate dignissimos et dignissimos nisi accusantium. Aut enim eum fugiat iste magni.', '536', '+6901819768', 'Nový nástup', 'N', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(957, '61315', '61315.jpg', 'Ing.', 'Zatloukal', NULL, NULL, 'Jitka', 'Dr.', '18', '19', 'cdoubravova@example.com', '2023-01-06', '2023-01-08', 'Ex sequi quia qui. Quo reiciendis ab quia quia. Aspernatur explicabo doloremque nam est.', '400', '+394724127939', 'Nový nástup', 'A', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(958, '62873', '62873.jpg', 'doc.', 'Horvát', NULL, NULL, 'Václav', 'Dr.', '20', '35', 'romana.turek@example.org', '2023-01-09', '2023-01-06', 'Officia reprehenderit commodi aut sequi ut corrupti. Similique et quod necessitatibus tempore. Ea autem molestias facere. Quia et amet dolores quia.', '403', '+3786340962370', 'Vytvořit kartu', 'N', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(959, '61194', '61194.jpg', 'JUDr.', 'Fischer', NULL, NULL, 'Helena', 'MUDr.', '19', '69', 'jhudecek@example.org', '2023-01-13', '2023-01-12', 'Pariatur neque necessitatibus libero modi assumenda rerum. Atque distinctio illo dolor at. In ut aspernatur corrupti eum accusamus beatae.', '540', '+243034657138', 'Aktualizovat nálepku', 'N', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(960, '62846', '62846.jpg', 'PhDr.', 'Jakoubková', NULL, NULL, 'Jiří', 'Ing.', '6', '26', 'viktor78@example.com', '2023-01-09', '2023-01-08', 'Voluptas sit incidunt perferendis praesentium architecto. Blanditiis ipsum aliquam et quia. Nostrum aliquid possimus vitae eos.', '405', '+967902637748', 'Nový nástup', 'A', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(961, '63489', '63489.jpg', 'Bc.', 'Hrnčířová', NULL, NULL, 'Kamil', 'RNDr.', '23', '5', 'pavla90@example.com', '2023-01-08', '2023-01-14', 'Natus natus aut omnis vero voluptas necessitatibus et aut. Laborum voluptatem natus laboriosam quam ipsam eos eum. Reprehenderit in iure dolores reiciendis.', '352', '+298817149', 'Předat nálepku', 'N', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(962, '64735', '64735.jpg', 'PhDr.', 'Böhm', NULL, NULL, 'Adéla', 'Ing.', '3', '28', 'gmasopustova@example.com', '2023-01-05', '2023-01-09', 'Porro minus est nisi officiis. Ipsam sint et provident dolorum non non repudiandae.', '461', '+420641449883', 'Nový nástup', 'A', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(963, '61055', '61055.jpg', 'PhDr.', 'Weiss', NULL, NULL, 'Simona', 'Bc.', '12', '36', 'marecek.pavel@example.net', '2023-01-04', '2023-01-14', 'Dolor unde blanditiis dolores quo. Maiores minus dolorem aut harum reprehenderit natus expedita. Ut sit molestias et blanditiis in distinctio. Ab molestias unde doloremque qui repellendus.', '548', '+5935143804777', 'Vrácena', 'N', 'HPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(964, '62035', '62035.jpg', 'Mgr.', 'Chytilová', NULL, NULL, 'Michael', 'doc.', '26', '61', 'azelenka@example.com', '2023-01-10', '2023-01-08', 'Voluptas ut et sed ipsam. Nulla fugit et rerum est. Accusamus nihil illum exercitationem laborum quas.', '441', '+594595862238', 'Ok', 'A', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(965, '64714', '64714.jpg', 'Bc.', 'Šebelová', NULL, NULL, 'Radim', 'Dr.', '11', '57', 'petr72@example.org', '2023-01-04', '2023-01-15', 'Laudantium animi molestias dolore et. Et vitae dolor iure ipsa. Nam ipsum sed maxime omnis quasi harum blanditiis. Distinctio dicta et quisquam facere est facilis.', '434', '+224109765093', 'Vytvořit kartu', 'A', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(966, '64734', '64734.jpg', 'JUDr.', 'Kopecká', NULL, NULL, 'Ondřej', 'RNDr.', '24', '14', 'ladislav.danisova@example.net', '2023-01-05', '2023-01-02', 'Quae excepturi quod ducimus et et explicabo sapiente. Ea pariatur et corporis voluptatem nam necessitatibus sed iure. Optio dignissimos consequatur assumenda distinctio officiis porro perspiciatis.', '436', '+50063214', 'Nový nástup', 'A', 'DPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(967, '61321', '61321.jpg', 'JUDr.', 'Bednařík', NULL, NULL, 'Jozef', 'doc.', '20', '19', 'lucie.dockalova@example.net', '2023-01-11', '2023-01-07', 'Adipisci neque rerum soluta voluptate qui quia nobis. Nemo temporibus doloremque blanditiis consectetur nesciunt quia. Aperiam qui nihil velit pariatur repellat.', '350', '+881615378196', 'Vytvořit kartu', 'A', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(968, '62820', '62820.jpg', 'PhDr.', 'Lukáč', NULL, NULL, 'Šárka', 'RNDr.', '18', '48', 'ljez@example.com', '2023-01-10', '2023-01-04', 'Explicabo nihil dolorum nihil ut enim quaerat. Eum ipsam ea repellat maxime quam blanditiis qui. Consequuntur vero voluptas nam dicta. Omnis perferendis vel non quas magni minus aut.', '436', '+591197596986', 'Ok', 'N', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(969, '64047', '64047.jpg', 'JUDr.', 'Štěpán', NULL, NULL, 'Kryštof', 'MVDr.', '31', '59', 'monika82@example.net', '2023-01-09', '2023-01-08', 'Dolor et itaque perspiciatis qui perspiciatis laborum. Magnam deleniti libero aspernatur ea maxime. Dolorem quisquam consequuntur vitae autem.', '426', '+355332666981', 'Aktualizovat nálepku', 'N', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(970, '63975', '63975.jpg', 'Ing.', 'Jelínková', NULL, NULL, 'Rudolf', 'Mgr.', '2', '57', 'olga.kovarikova@example.net', '2023-01-15', '2023-01-07', 'Sint et nihil quam quaerat rerum aperiam. Dolor quaerat tenetur commodi ullam ullam et. Et qui vero consequatur unde.', '506', '+8821067526989', 'Vrácena', 'A', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(971, '62867', '62867.jpg', 'MUDr.', 'Horáčková', NULL, NULL, 'Eduard', 'JUDr.', '18', '16', 'radim.danek@example.net', '2023-01-08', '2023-01-08', 'Asperiores necessitatibus dolore adipisci molestiae quis illo fugit. Provident assumenda eaque repellendus asperiores nihil vel. Non quia rem qui assumenda.', '363', '+5979728862', 'Předat nálepku', 'N', 'ČSO', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(972, '63725', '63725.jpg', 'Mgr.', 'Karban', NULL, NULL, 'Ilona', 'Bc.', '13', '68', 'milada37@example.org', '2023-01-12', '2023-01-02', 'Similique officiis voluptatem et quae aperiam mollitia quis architecto. Dolores doloribus ut soluta assumenda optio aut. Et qui nihil laboriosam culpa sit.', '380', '+67031783662', 'Aktualizovat nálepku', 'A', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(973, '63485', '63485.jpg', 'JUDr.', 'Jandová', NULL, NULL, 'Ludvík', 'MUDr.', '31', '6', 'stanislava84@example.net', '2023-01-03', '2023-01-09', 'Dolorum beatae dolorem omnis quia inventore ea eaque. Voluptatem consectetur adipisci accusamus esse. Necessitatibus a enim ipsa dolorem modi neque impedit.', '448', '+50554767026', 'Vytvořit kartu', 'N', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(974, '62695', '62695.jpg', 'Dr.', 'Ondráček', NULL, NULL, 'Vladimíra', 'Dr.', '23', '11', 'radomir87@example.org', '2023-01-03', '2023-01-02', 'Fugiat dolor accusantium et. Repellendus occaecati ut veritatis quo est. Veritatis corporis facere id excepturi quo sit.', '399', '+24146311844', 'Vytvořit kartu', 'A', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(975, '64956', '64956.jpg', 'Ing.', 'Vaněčková', NULL, NULL, 'Soňa', 'PhDr.', '19', '57', 'vit.dolezalova@example.org', '2023-01-15', '2023-01-11', 'Et dolor ut voluptatem rerum non alias aut. A commodi architecto cupiditate optio dolorem facere maxime. Ullam nostrum et reiciendis maiores et.', '476', '+498091683964', 'Předat nálepku', 'N', 'DPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(976, '64627', '64627.jpg', 'MVDr.', 'Morávek', NULL, NULL, 'Eduard', 'MUDr.', '14', '31', 'ruzena.brabencova@example.org', '2023-01-10', '2023-01-11', 'Est ex consequuntur sunt facere ea dolore et. Non adipisci sit occaecati beatae qui aut commodi. Omnis earum facilis et a ipsum totam est. Similique qui error vel nihil libero in sunt molestiae.', '356', '+6806580093', 'Nový nástup', 'A', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(977, '63131', '63131.jpg', 'JUDr.', 'Bartáková', NULL, NULL, 'Emil', 'Bc.', '23', '18', 'jaromir88@example.org', '2023-01-05', '2023-01-12', 'Omnis molestiae ipsam veritatis totam perferendis. Ut blanditiis est dolores in ab dolores provident. Vel veritatis rem ab esse iusto eos. Mollitia veniam voluptas aut officiis.', '546', '+449301127527', 'Aktualizovat nálepku', 'N', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(978, '61910', '61910.jpg', 'JUDr.', 'Hanus', NULL, NULL, 'Alena', 'Dr.', '25', '6', 'sarka.vyslouzil@example.com', '2023-01-14', '2023-01-10', 'Quo officiis sequi repellendus culpa occaecati cum. Fugit atque voluptate omnis. Libero pariatur sunt et accusamus.', '504', '+80050185004', 'Vytvořit kartu', 'N', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(979, '63099', '63099.jpg', 'PhDr.', 'Sehnalová', NULL, NULL, 'Ludmila', 'Dr.', '23', '14', 'eliska65@example.org', '2023-01-10', '2023-01-03', 'Consequuntur et dolor totam ducimus ab est est. Natus dicta officia qui ut sunt officia tempore. Et optio fuga laudantium consequatur sapiente.', '457', '+3804959842760', 'Nový nástup', 'N', 'DPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(980, '62852', '62852.jpg', 'PhDr.', 'Pivoňka', NULL, NULL, 'Irena', 'MUDr.', '25', '43', 'modehnalova@example.org', '2023-01-13', '2023-01-08', 'Quo quae nam est velit tempore consectetur. Omnis quo quos modi omnis id nesciunt dolorem.', '434', '+249709909174', 'Vrácena', 'N', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(981, '64042', '64042.jpg', 'MVDr.', 'Brychtová', NULL, NULL, 'Libor', 'Dr.', '26', '54', 'edivis@example.net', '2023-01-02', '2023-01-11', 'Maiores rem sed quo sed. Quis ut est eos qui natus qui. Delectus mollitia aperiam fugit tempore odit architecto. Necessitatibus amet assumenda sed libero harum dolorum provident.', '438', '+26647949158', 'Vrácena', 'A', 'DPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(982, '61808', '61808.jpg', 'Mgr.', 'Klimentová', NULL, NULL, 'Dominik', 'MVDr.', '8', '18', 'wslavik@example.net', '2023-01-13', '2023-01-12', 'Et quisquam ipsum odio iste. Et sit adipisci est. Et explicabo aut et nulla. Suscipit consequatur debitis aut aut quas rerum.', '425', '+23604135067', 'Vytvořit kartu', 'A', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(983, '63979', '63979.jpg', 'Bc.', 'Vodičková', NULL, NULL, 'Peter', 'JUDr.', '31', '60', 'katerina.kubisova@example.com', '2023-01-16', '2023-01-02', 'Aut ab ut iure natus aut. Odit qui mollitia sit ut animi. Quaerat hic voluptas est ut dolorem. In quaerat asperiores similique atque.', '348', '+6771441030', 'Ok', 'N', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(984, '63637', '63637.jpg', 'Bc.', 'Hanzlová', NULL, NULL, 'Jaromír', 'JUDr.', '20', '10', 'ludek.kopalova@example.net', '2023-01-04', '2023-01-16', 'A neque aut eaque sint. Ex et aperiam non officiis et eos excepturi ratione. Impedit eum aut laborum sit debitis perferendis.', '488', '+627513934930', 'Nový nástup', 'N', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(985, '63469', '63469.jpg', 'Bc.', 'Hanzal', NULL, NULL, 'Lenka', 'doc.', '26', '51', 'ondrej.tesarova@example.net', '2023-01-07', '2023-01-08', 'Error enim doloremque ullam sapiente et. Corrupti voluptas modi ut ipsum sit quam. Et dolores eius atque mollitia.', '522', '+430175719330', 'Ok', 'A', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(986, '61452', '61452.jpg', 'Bc.', 'Kameníková', NULL, NULL, 'Barbora', 'MVDr.', '17', '47', 'whomolova@example.com', '2023-01-12', '2023-01-09', 'Omnis sit reiciendis quia et ratione. Illum quo distinctio laborum non fugit unde voluptatibus. Quis in magnam quos. Est minus repellat omnis consequatur cupiditate.', '421', '+579540358781', 'Vytvořit kartu', 'A', 'HPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(987, '64379', '64379.jpg', 'MUDr.', 'Boháčková', NULL, NULL, 'Vojtěch', 'PhDr.', '7', '27', 'jaroslava39@example.org', '2023-01-09', '2023-01-12', 'Voluptatem quia nostrum quia nisi. Quia sed nemo dolorem omnis. Incidunt et voluptatibus in dolores repudiandae in.', '385', '+914706864270', 'Vytvořit kartu', 'N', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(988, '62385', '62385.jpg', 'doc.', 'Kysela', NULL, NULL, 'Šárka', 'PhDr.', '10', '36', 'simon98@example.com', '2023-01-04', '2023-01-15', 'Dolorum in qui culpa enim. Quia debitis veritatis voluptas nemo. Tempore beatae quisquam alias quo iste. Cum commodi distinctio incidunt accusantium rem suscipit.', '453', '+8506109817580', 'Vytvořit kartu', 'N', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(989, '61474', '61474.jpg', 'MVDr.', 'Dobeš', NULL, NULL, 'Eva', 'Dr.', '3', '4', 'kasparkova.vasyl@example.com', '2023-01-10', '2023-01-15', 'Odit ratione sed omnis odit. Omnis aperiam alias laborum facilis est rerum quas laudantium. Consequatur et sint quis cum. Repudiandae non dolor consectetur quis ea eius saepe.', '508', '+6797365625', 'Nový nástup', 'A', 'HPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(990, '61661', '61661.jpg', 'Ing.', 'Šebestová', NULL, NULL, 'Martina', 'MUDr.', '24', '13', 'vendula12@example.org', '2023-01-03', '2023-01-03', 'Ut officiis laboriosam ex qui. Sed dicta ipsum officia rerum quis tempore quia aliquam. In sit facere et quasi.', '439', '+4794080860', 'Nový nástup', 'A', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(991, '61524', '61524.jpg', 'doc.', 'Dušková', NULL, NULL, 'Lukáš', 'Dr.', '29', '24', 'nela28@example.org', '2023-01-10', '2023-01-12', 'Sint quidem et eos rerum. Qui porro vel ut cum. Voluptatum dolorem aut aperiam voluptatem et pariatur reprehenderit. Aut sequi voluptas est mollitia ea veritatis voluptatem.', '411', '+881984523260', 'Vrácena', 'A', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12');
INSERT INTO `employees` (`id`, `personal_number`, `image`, `title_preffix`, `last_name`, `middle_name`, `married_name`, `first_name`, `title_suffix`, `department_id`, `job_id`, `email`, `start_date`, `end_date`, `comment`, `phone`, `mobile`, `id_card`, `coffee`, `employment`, `position`, `status`, `created_at`, `updated_at`) VALUES
(992, '62246', '62246.jpg', 'JUDr.', 'Vaníček', NULL, NULL, 'Luboš', 'MUDr.', '16', '19', 'tomanek.milada@example.org', '2023-01-15', '2023-01-07', 'Quo et pariatur dicta libero officia ipsum qui nihil. Et et rerum necessitatibus assumenda velit. Consequatur et illum quisquam. Aut veritatis quibusdam laborum natus id.', '362', '+22921427637', 'Nový nástup', 'A', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(993, '61517', '61517.jpg', 'Ing.', 'Dobeš', NULL, NULL, 'Oldřich', 'JUDr.', '25', '69', 'dmyska@example.org', '2023-01-12', '2023-01-09', 'Qui quisquam velit non quis perspiciatis voluptates earum. Expedita est et ea eos omnis.', '377', '+5013743159', 'Aktualizovat nálepku', 'A', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(994, '61563', '61563.jpg', 'MVDr.', 'Bernard', NULL, NULL, 'Lenka', 'Bc.', '17', '62', 'semerad.adam@example.net', '2023-01-09', '2023-01-08', 'Nulla quas quia et quis libero hic sit. Corporis ad beatae modi ut magni voluptas. Consequatur officiis exercitationem minima deserunt aut.', '485', '+2388270293', 'Vytvořit kartu', 'A', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(995, '64017', '64017.jpg', 'JUDr.', 'Koudelková', NULL, NULL, 'Eduard', 'MVDr.', '11', '64', 'jarmila72@example.net', '2023-01-13', '2023-01-16', 'Qui vitae eaque maxime odit est veritatis aperiam expedita. Adipisci velit labore sit minus. Qui sint quo placeat adipisci illum non.', '400', '+2397547528', 'Nový nástup', 'A', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(996, '61708', '61708.jpg', 'Mgr.', 'Adamová', NULL, NULL, 'Radomír', 'Dr.', '5', '25', 'jakubcova.karolina@example.org', '2023-01-13', '2023-01-03', 'Consequatur mollitia qui porro molestiae eos debitis magnam. Dolores ratione commodi dolores magni quo. Laborum eius quia ut sint explicabo et soluta. In nam dolore eaque modi earum velit ut impedit.', '341', '+8567228491503', 'Nový nástup', 'N', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(997, '63475', '63475.jpg', 'Dr.', 'Pavel', NULL, NULL, 'René', 'doc.', '14', '72', 'vitaskova.rudolf@example.com', '2023-01-04', '2023-01-10', 'Et dolorem porro enim delectus. Modi quis saepe a ut optio quibusdam vel. Ut natus est explicabo quo. Perferendis esse asperiores maxime autem porro neque.', '401', '+8803842045638', 'Nový nástup', 'A', 'DPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(998, '64522', '64522.jpg', 'RNDr.', 'Petr', NULL, NULL, 'Dalibor', 'Mgr.', '18', '36', 'xriha@example.org', '2023-01-11', '2023-01-05', 'Id rem ea error autem. Architecto est accusantium sunt. Nihil quos sed expedita et.', '420', '+96110474790', 'Ok', 'N', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(999, '64750', '64750.jpg', 'Ing.', 'Šišková', NULL, NULL, 'Marcel', 'MUDr.', '3', '51', 'lubos.kaderabek@example.net', '2023-01-09', '2023-01-11', 'Nihil autem repudiandae illo corporis et consectetur voluptatibus. Iste sint odit ea molestias quidem ullam. Voluptatum temporibus quis eius voluptas a.', '439', '+299426353', 'Ok', 'N', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1000, '64006', '64006.jpg', 'Mgr.', 'Bílková', NULL, NULL, 'Marcela', 'Dr.', '23', '6', 'zdenka30@example.org', '2023-01-05', '2023-01-14', 'Omnis est nam fuga rem aut corrupti. Molestiae assumenda harum natus ut. Veritatis et veritatis eum porro ipsam. Ipsa in itaque odio.', '542', '+35637538049', 'Vrácena', 'N', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1001, '63759', '63759.jpg', 'MUDr.', 'Jánská', NULL, NULL, 'Petra', 'Ing.', '6', '62', 'gdrozdova@example.net', '2023-01-03', '2023-01-13', 'Qui qui quibusdam blanditiis itaque facere. Est rerum est quis adipisci nihil et debitis.', '410', '+570270598519', 'Aktualizovat nálepku', 'A', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1002, '62192', '62192.jpg', 'MVDr.', 'Fišer', NULL, NULL, 'Alois', 'Dr.', '1', '67', 'jiri.bezdek@example.net', '2023-01-10', '2023-01-10', 'Et alias distinctio quae dolore in. In et ea qui mollitia omnis sunt dicta aliquam. Tempora explicabo aut repellat ipsam. Fugit iusto provident a totam.', '399', '+242535631690', 'Vrácena', 'N', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1003, '61542', '61542.jpg', 'Dr.', 'Kameník', NULL, NULL, 'Jana', 'Ing.', '6', '70', 'seifertova.marcel@example.com', '2023-01-13', '2023-01-03', 'Reiciendis exercitationem aut minus est maiores non. Tenetur est ducimus nihil maiores. Eum earum est quos maxime.', '475', '+23277849431', 'Předat nálepku', 'A', 'HPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1004, '64780', '64780.jpg', 'Ing.', 'Bína', NULL, NULL, 'Antonín', 'MUDr.', '17', '26', 'eva68@example.org', '2023-01-15', '2023-01-12', 'Molestiae vero qui quidem nam enim quos labore. Ut laudantium officiis blanditiis dolore facere similique qui sint. Ab dolorem nostrum est iste et provident quia amet. Libero ipsa quo mollitia nam.', '349', '+906803677869', 'Vrácena', 'N', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1005, '62107', '62107.jpg', 'RNDr.', 'Černoch', NULL, NULL, 'Dušan', 'Dr.', '21', '48', 'vklementova@example.org', '2023-01-04', '2023-01-09', 'Recusandae tempore ab nostrum enim est. Dignissimos laudantium necessitatibus ab sapiente tenetur cum quia. Et nihil corporis magni laudantium. Odio molestiae quia autem animi eum amet.', '384', '+88834999666256', 'Vrácena', 'A', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1006, '62367', '62367.jpg', 'MVDr.', 'Lacko', NULL, NULL, 'Bohumil', 'MVDr.', '21', '40', 'bbernard@example.org', '2023-01-12', '2023-01-14', 'Neque est est sit eius. Id sapiente consectetur quo. Rerum facilis officia est accusamus velit.', '443', '+9706830731039', 'Vytvořit kartu', 'N', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1007, '62652', '62652.jpg', 'MUDr.', 'Ježová', NULL, NULL, 'Jiří', 'MVDr.', '28', '29', 'hhoracek@example.com', '2023-01-03', '2023-01-10', 'Aut autem amet nisi consequatur dolores. Quasi non optio est ipsa nihil. Quia accusamus ad consequatur aut quisquam enim.', '462', '+22320406031', 'Vytvořit kartu', 'A', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1008, '64773', '64773.jpg', 'Bc.', 'Mlčochová', NULL, NULL, 'Kristýna', 'Bc.', '31', '40', 'nikola05@example.com', '2023-01-06', '2023-01-07', 'Aliquid illum fugit eveniet odio eum odio assumenda et. Distinctio qui cupiditate enim et. Et ut numquam fugit qui laudantium.', '486', '+5920666512', 'Aktualizovat nálepku', 'A', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1009, '61148', '61148.jpg', 'Ing.', 'Hromádka', NULL, NULL, 'Lubomír', 'doc.', '1', '42', 'ondrej03@example.net', '2023-01-07', '2023-01-02', 'Quisquam deserunt sit molestias quia. Non quas perspiciatis et sunt modi tenetur. Totam similique consequuntur deserunt provident quia dolorum.', '453', '+9647786456745', 'Vrácena', 'N', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1010, '61426', '61426.jpg', 'MUDr.', 'Lukáčová', NULL, NULL, 'Jiří', 'Mgr.', '27', '26', 'kubicova.martina@example.net', '2023-01-05', '2023-01-15', 'Ipsam sunt placeat doloribus illum autem tempore omnis. Ut inventore nihil quos iure. Occaecati labore nostrum velit error esse eius. Eos sequi accusantium similique quia numquam accusantium.', '459', '+261481068281', 'Nový nástup', 'N', 'DPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1011, '61035', '61035.jpg', 'MVDr.', 'Florián', NULL, NULL, 'Dominika', 'JUDr.', '13', '40', 'jaroslav29@example.org', '2023-01-14', '2023-01-07', 'Deserunt labore commodi sapiente suscipit nostrum. Maxime ut molestias et harum cupiditate et tempora. Accusamus voluptas aut libero ipsam animi. Quidem nam quae ea repellendus dignissimos dolor aut.', '379', '+37340180522', 'Vrácena', 'A', 'DPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1012, '64921', '64921.jpg', 'Bc.', 'Kratochvílová', NULL, NULL, 'Richard', 'MUDr.', '12', '20', 'sojkova.jirina@example.org', '2023-01-14', '2023-01-09', 'Est modi libero aut non qui enim iste a. In ea omnis corrupti dolorum. Similique harum aut ut facilis. Debitis qui perspiciatis est repellendus laborum veritatis quia. Dolores quas non fugiat eos et.', '463', '+8861884093286', 'Předat nálepku', 'A', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1013, '63596', '63596.jpg', 'JUDr.', 'Dudková', NULL, NULL, 'Anna', 'JUDr.', '6', '2', 'chaloupkova.bohuslav@example.net', '2023-01-08', '2023-01-03', 'Ipsam nihil facere officiis. Et rerum reiciendis voluptatum quo suscipit quo aut consequatur. Dolorem ipsum aut accusantium nisi qui rerum.', '342', '+8808092666952', 'Ok', 'N', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1014, '63942', '63942.jpg', 'Mgr.', 'Rýdl', NULL, NULL, 'Jakub', 'MVDr.', '8', '42', 'frantiska.pospisilova@example.com', '2023-01-14', '2023-01-10', 'Dolor a quo et dolores consequuntur. Et sint id vel accusamus. Animi esse qui illo.', '530', '+6906929947', 'Ok', 'N', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1015, '64335', '64335.jpg', 'JUDr.', 'Jirků', NULL, NULL, 'Marcel', 'JUDr.', '7', '6', 'roubalova.marta@example.org', '2023-01-03', '2023-01-05', 'Sed sed sed sed molestiae. Pariatur excepturi aut sed voluptatem velit. Cumque voluptatem omnis sed aliquam deserunt aut officiis expedita.', '378', '+9704544730673', 'Nový nástup', 'A', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1016, '64937', '64937.jpg', 'PhDr.', 'Pekárková', NULL, NULL, 'Stanislav', 'Ing.', '23', '7', 'vaclavkova.pavel@example.net', '2023-01-09', '2023-01-13', 'Qui fugit non optio ut qui qui ratione. Neque maiores veniam est est nemo voluptas.', '533', '+6924982061', 'Předat nálepku', 'N', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1017, '62868', '62868.jpg', 'RNDr.', 'Polanský', NULL, NULL, 'Tereza', 'Bc.', '30', '16', 'miloslava.suchanek@example.net', '2023-01-13', '2023-01-04', 'Sint assumenda aliquid inventore. Quisquam cumque rerum possimus culpa enim et aut. Quae qui quis et libero amet deleniti fuga.', '542', '+67569946847', 'Předat nálepku', 'N', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1018, '64689', '64689.jpg', 'JUDr.', 'Straka', NULL, NULL, 'Kristýna', 'doc.', '1', '5', 'ruzena.holoubkova@example.net', '2023-01-04', '2023-01-03', 'Eum est magni eius corrupti explicabo velit quia. Magni reprehenderit atque reiciendis. Et velit ea molestiae sed quo.', '387', '+32114777004', 'Aktualizovat nálepku', 'A', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1019, '62430', '62430.jpg', 'MVDr.', 'Křečková', NULL, NULL, 'Zdeňka', 'MUDr.', '16', '32', 'petra.latalova@example.net', '2023-01-06', '2023-01-04', 'Ullam asperiores sed labore excepturi. Nam et corporis aut earum consequatur. Ea vel quo commodi incidunt. At expedita ipsa qui accusantium.', '543', '+6777401162', 'Vrácena', 'A', 'ČSO', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1020, '61650', '61650.jpg', 'MVDr.', 'Smrčková', NULL, NULL, 'Jindřich', 'Ing.', '31', '51', 'ivan.hruba@example.org', '2023-01-11', '2023-01-03', 'Error illum veniam eos voluptatem voluptates earum. In blanditiis sapiente delectus vel. Numquam ipsam sed earum repellendus iure id veniam. Sed at et magnam.', '433', '+6786677224', 'Vrácena', 'N', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1021, '62916', '62916.jpg', 'doc.', 'Jež', NULL, NULL, 'Matěj', 'doc.', '27', '20', 'katerina.molnar@example.org', '2023-01-04', '2023-01-05', 'Necessitatibus corporis aperiam perspiciatis error sit. Quo non recusandae sapiente molestiae itaque. Sunt et similique numquam hic earum qui. Ut quod corporis in totam dolorem consectetur.', '461', '+68606859156', 'Ok', 'A', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1022, '64134', '64134.jpg', 'PhDr.', 'Knapová', NULL, NULL, 'Aneta', 'JUDr.', '28', '49', 'bayer.helena@example.org', '2023-01-07', '2023-01-05', 'Nihil in nihil reprehenderit qui. Laborum rerum ipsa rerum. In possimus pariatur beatae numquam in omnis et molestiae.', '386', '+9642485684066', 'Aktualizovat nálepku', 'A', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1023, '62809', '62809.jpg', 'Mgr.', 'Strnadová', NULL, NULL, 'Ján', 'Ing.', '14', '58', 'stepanka76@example.net', '2023-01-12', '2023-01-04', 'Qui laborum enim doloremque quia fugit. Et perspiciatis ut ab ut ipsum. Maxime earum nihil in aliquam veniam consequatur velit. Vel quaerat modi ut. Blanditiis corporis aut modi veniam.', '466', '+881260890740', 'Ok', 'N', 'DPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1024, '62913', '62913.jpg', 'Mgr.', 'Šandová', NULL, NULL, 'Gabriela', 'MUDr.', '8', '8', 'dhrubesova@example.net', '2023-01-14', '2023-01-16', 'Non enim ipsam ea quis ea est doloribus non. Maxime sit quis nostrum necessitatibus dolores. Voluptatem deserunt deserunt aut nobis accusantium ullam qui.', '449', '+2204875210', 'Předat nálepku', 'A', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1025, '61899', '61899.jpg', 'Mgr.', 'Šilhavý', NULL, NULL, 'Jan', 'RNDr.', '11', '33', 'vojtech62@example.org', '2023-01-07', '2023-01-07', 'Laborum voluptatibus deserunt et sunt ut excepturi autem molestiae. Aliquam odit voluptas quibusdam magnam ut inventore. Quidem est et dignissimos laudantium necessitatibus et fugit.', '399', '+77234928895', 'Nový nástup', 'A', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1026, '61196', '61196.jpg', 'PhDr.', 'Macháčová', NULL, NULL, 'Dominika', 'doc.', '9', '15', 'lenka.havrankova@example.org', '2023-01-02', '2023-01-16', 'Fugiat veritatis in esse vel occaecati iure provident. Autem qui nemo consequatur aut autem et. Laboriosam modi laudantium qui itaque aut nobis.', '404', '+22222119954', 'Vytvořit kartu', 'N', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1027, '61183', '61183.jpg', 'PhDr.', 'Bayerová', NULL, NULL, 'Olga', 'JUDr.', '27', '9', 'eduard.navratil@example.org', '2023-01-12', '2023-01-12', 'Est beatae ad hic laboriosam at et est. Adipisci magni quae et aliquid natus dolorem autem. Sint illum praesentium commodi et voluptas tempore voluptas.', '382', '+962210127123', 'Nový nástup', 'N', 'ČSO', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1028, '61239', '61239.jpg', 'MVDr.', 'Molnár', NULL, NULL, 'Zdenka', 'Mgr.', '1', '25', 'cermakova.jana@example.org', '2023-01-12', '2023-01-15', 'Velit voluptatem doloremque id ducimus iure sapiente. Ab ipsum omnis est laboriosam. Consequatur facilis et maxime sint.', '458', '+382348376417', 'Vrácena', 'N', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1029, '62760', '62760.jpg', 'Bc.', 'Prokeš', NULL, NULL, 'Jiří', 'doc.', '30', '3', 'rudolf27@example.com', '2023-01-06', '2023-01-05', 'Ullam dignissimos dicta voluptatum velit sit quia. Assumenda maxime minus et sed. Excepturi nam debitis assumenda doloribus nihil error.', '449', '+15307670818', 'Vytvořit kartu', 'N', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1030, '61445', '61445.jpg', 'RNDr.', 'Šímová', NULL, NULL, 'Emilie', 'Bc.', '8', '9', 'ckudlackova@example.org', '2023-01-09', '2023-01-14', 'Tenetur et voluptas quaerat qui. Autem laborum eveniet consequatur quasi. Ut qui rerum ad fugit non praesentium.', '491', '+351515683717', 'Vrácena', 'A', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1031, '64152', '64152.jpg', 'RNDr.', 'Kouba', NULL, NULL, 'Ondřej', 'PhDr.', '10', '46', 'simon.pelikanova@example.net', '2023-01-11', '2023-01-02', 'Nihil vel fuga blanditiis fuga quas. Illum nemo quia laboriosam beatae. Rerum id exercitationem consectetur sunt quia. Magnam fugit sit necessitatibus sapiente temporibus.', '470', '+5937538996395', 'Předat nálepku', 'N', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1032, '61651', '61651.jpg', 'doc.', 'Táborská', NULL, NULL, 'Milena', 'RNDr.', '25', '68', 'vladislav47@example.com', '2023-01-15', '2023-01-02', 'Labore error magni qui recusandae asperiores beatae aut. Sint odit ad architecto et molestiae. Culpa tempora optio cumque neque.', '502', '+23030917287', 'Vytvořit kartu', 'N', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1033, '63990', '63990.jpg', 'MVDr.', 'Zapletalová', NULL, NULL, 'Renata', 'PhDr.', '10', '30', 'hora.rostislav@example.com', '2023-01-07', '2023-01-03', 'Illo nulla adipisci nemo iste nulla enim laborum. Dolor quis laborum officiis cumque voluptatem qui corrupti.', '423', '+486341054098', 'Vrácena', 'N', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1034, '64701', '64701.jpg', 'Bc.', 'Schneiderová', NULL, NULL, 'František', 'doc.', '27', '46', 'brychtova.ivan@example.org', '2023-01-11', '2023-01-13', 'Vero at eum amet blanditiis. Vero magnam eius labore vitae sint culpa aut. Ut perferendis natus et hic. Quibusdam est minus alias rem quae nihil non dolor.', '357', '+883594290823', 'Nový nástup', 'N', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1035, '61142', '61142.jpg', 'MUDr.', 'Gregor', NULL, NULL, 'Vojtěch', 'doc.', '14', '8', 'drozd.katerina@example.net', '2023-01-11', '2023-01-04', 'Rerum omnis impedit aut quia veniam voluptatum dolorem. Enim eum libero quam eum. Id quibusdam voluptatem accusantium ipsum ea. A sint beatae saepe animi.', '535', '+443027281637', 'Vrácena', 'N', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1036, '63918', '63918.jpg', 'doc.', 'Říha', NULL, NULL, 'Jozef', 'MUDr.', '17', '52', 'mika.renata@example.com', '2023-01-06', '2023-01-05', 'Consectetur esse praesentium ullam odit et. Id et fugiat ut saepe architecto aperiam eum culpa. Consectetur accusantium cum rerum voluptatem saepe ut. Ipsam quia est beatae.', '410', '+2694657052', 'Předat nálepku', 'N', 'DPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1037, '61392', '61392.jpg', 'Bc.', 'Vícha', NULL, NULL, 'Michal', 'MVDr.', '23', '11', 'pavel.strouhalova@example.com', '2023-01-11', '2023-01-09', 'Soluta tenetur iure praesentium non. Quasi esse voluptates suscipit qui. Voluptatum sapiente consequatur nulla quis voluptatem incidunt.', '447', '+952558673831', 'Vrácena', 'A', 'EVP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1038, '63292', '63292.jpg', 'Dr.', 'Stejskal', NULL, NULL, 'Anežka', 'JUDr.', '17', '16', 'jozef.karban@example.org', '2023-01-13', '2023-01-04', 'Molestiae libero rerum temporibus est. Suscipit fuga temporibus non tenetur. Animi amet labore porro et repellat est quia. Illum sequi et dolorum porro.', '374', '+9640937514165', 'Vytvořit kartu', 'N', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1039, '61908', '61908.jpg', 'Mgr.', 'Král', NULL, NULL, 'Aleš', 'doc.', '3', '44', 'dmoucka@example.org', '2023-01-05', '2023-01-06', 'Accusantium dolorem similique porro. Asperiores aspernatur corporis amet fugiat aliquid. Ex repellat qui optio consequatur recusandae. Rerum dolorem aut non ut.', '364', '+382279258027', 'Nový nástup', 'A', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1040, '63127', '63127.jpg', 'MVDr.', 'Vodrážková', NULL, NULL, 'Ondřej', 'JUDr.', '18', '44', 'jindriska.cernikova@example.com', '2023-01-04', '2023-01-08', 'Provident magnam ratione rerum iure tempore aut impedit vel. Doloremque perspiciatis vel totam sed mollitia voluptatum. Dolores totam eos rerum praesentium placeat.', '376', '+41908908678', 'Předat nálepku', 'N', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1041, '64878', '64878.jpg', 'PhDr.', 'Mirgová', NULL, NULL, 'Vendula', 'PhDr.', '25', '14', 'kala.jiri@example.com', '2023-01-05', '2023-01-13', 'Veniam corporis non aut maxime ipsam quia. Assumenda doloribus totam pariatur ad voluptates. Fugiat autem alias asperiores suscipit et quibusdam.', '518', '+80885382585', 'Vrácena', 'A', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1042, '64112', '64112.jpg', 'doc.', 'Červený', NULL, NULL, 'Daniel', 'MUDr.', '15', '70', 'ckuzel@example.net', '2023-01-07', '2023-01-13', 'Iusto deleniti rerum repudiandae quis nemo sit. Qui iusto reiciendis ratione soluta quaerat architecto. Ea voluptatum qui quia doloribus sed sed. Deserunt aut mollitia et incidunt sint unde nostrum.', '380', '+9769127484675', 'Nový nástup', 'N', 'DPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1043, '62235', '62235.jpg', 'Mgr.', 'Blecha', NULL, NULL, 'Ján', 'Mgr.', '5', '53', 'rene43@example.org', '2023-01-10', '2023-01-03', 'In eos qui magni tempore vitae et cum eaque. Praesentium labore aspernatur est molestiae reprehenderit. Qui nulla molestiae non perspiciatis voluptas qui. Rerum repellat in doloribus et.', '476', '+306060502358', 'Nový nástup', 'N', 'ČSO', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1044, '63101', '63101.jpg', 'MUDr.', 'Hrabalová', NULL, NULL, 'Naděžda', 'RNDr.', '7', '21', 'ludmila.daniel@example.net', '2023-01-09', '2023-01-02', 'Dolore voluptas dolorum optio aspernatur pariatur. Nesciunt nostrum quia perferendis et quis. Enim non vel qui nobis nihil quos.', '372', '+6749350706', 'Vrácena', 'A', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1045, '64249', '64249.jpg', 'MVDr.', 'Gruber', NULL, NULL, 'Šárka', 'MUDr.', '24', '30', 'jelinkova.gabriela@example.com', '2023-01-02', '2023-01-04', 'Deserunt quia neque quasi voluptatem aut dolor. Consequatur cumque quasi iure facere ab nostrum. Deserunt eos velit hic occaecati repudiandae.', '498', '+37072746650', 'Nový nástup', 'N', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1046, '61083', '61083.jpg', 'Ing.', 'Heřmánek', NULL, NULL, 'Ján', 'doc.', '19', '68', 'janikova.lukas@example.org', '2023-01-04', '2023-01-03', 'Doloribus omnis necessitatibus hic recusandae eos et sed. Et id quo doloremque sit illo repudiandae id. Veritatis iste vel recusandae necessitatibus nulla.', '427', '+962704306657', 'Nový nástup', 'N', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1047, '64317', '64317.jpg', 'Dr.', 'Studený', NULL, NULL, 'Miloslav', 'Bc.', '23', '37', 'krystof13@example.org', '2023-01-13', '2023-01-15', 'Aliquid et eos atque quam nobis. Sint cumque commodi molestiae est nostrum asperiores odio. Et rerum asperiores distinctio dolor. Unde similique rem consequatur veritatis error eaque facere.', '372', '+962032956179', 'Aktualizovat nálepku', 'A', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1048, '61873', '61873.jpg', 'doc.', 'Matuška', NULL, NULL, 'Radek', 'Dr.', '3', '20', 'uhlir.vladimira@example.net', '2023-01-14', '2023-01-06', 'Ex dignissimos harum dolor amet eius suscipit laboriosam. Cum omnis minima sit. Suscipit iure id provident quasi quia.', '455', '+93623431972', 'Aktualizovat nálepku', 'N', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1049, '64009', '64009.jpg', 'Ing.', 'Sekaninová', NULL, NULL, 'Vítězslav', 'doc.', '23', '63', 'karel.machac@example.org', '2023-01-13', '2023-01-10', 'Blanditiis labore ipsa expedita tenetur officiis voluptas. Accusantium quia rerum hic libero consequuntur.', '473', '+314651557349', 'Předat nálepku', 'A', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1050, '61263', '61263.jpg', 'Ing.', 'Šanda', NULL, NULL, 'Jarmila', 'PhDr.', '8', '54', 'dominik31@example.net', '2023-01-14', '2023-01-06', 'At sed deleniti maxime incidunt. Distinctio nostrum magni aut veritatis molestiae distinctio. Inventore quia ab molestiae quos soluta mollitia. Debitis dicta facilis veniam dolorem rerum quod eius.', '427', '+4581039374', 'Předat nálepku', 'A', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1051, '64658', '64658.jpg', 'RNDr.', 'Šimečková', NULL, NULL, 'Markéta', 'doc.', '16', '29', 'bockova.pavel@example.com', '2023-01-04', '2023-01-06', 'Omnis corporis nihil velit aliquid. Ea delectus quam sit voluptatem velit libero. Asperiores est quibusdam dolorum et.', '554', '+689644575136', 'Vrácena', 'N', 'EVP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1052, '64647', '64647.jpg', 'Mgr.', 'Janotová', NULL, NULL, 'Antonín', 'Mgr.', '10', '42', 'ilona50@example.net', '2023-01-11', '2023-01-08', 'Eum non pariatur distinctio voluptatem. Explicabo alias sit natus. Facere rerum sed voluptas aut.', '341', '+681371027274', 'Vytvořit kartu', 'A', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1053, '64486', '64486.jpg', 'MVDr.', 'Hron', NULL, NULL, 'Vojtěch', 'JUDr.', '12', '2', 'nela21@example.org', '2023-01-04', '2023-01-16', 'Consequatur non quis quisquam consequuntur. Est totam architecto accusantium eum natus nobis quasi eos.', '457', '+382500182934', 'Vytvořit kartu', 'A', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1054, '64080', '64080.jpg', 'MUDr.', 'Böhm', NULL, NULL, 'Kristýna', 'Ing.', '5', '57', 'koutny.aneta@example.com', '2023-01-11', '2023-01-11', 'Quibusdam laborum asperiores dicta nostrum. Ut iusto consectetur harum tempore. Perspiciatis nulla modi temporibus illum. In veritatis quam omnis dolores aut ipsum dolorem.', '503', '+533331107261', 'Ok', 'A', 'DPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1055, '62783', '62783.jpg', 'MVDr.', 'Macek', NULL, NULL, 'Františka', 'RNDr.', '28', '58', 'acada@example.org', '2023-01-14', '2023-01-10', 'Qui voluptas saepe mollitia id nesciunt. Soluta consequatur voluptas atque. Unde molestiae distinctio sint omnis aut sed pariatur exercitationem.', '388', '+260929000619', 'Předat nálepku', 'N', 'EVP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1056, '62557', '62557.jpg', 'Bc.', 'Trčka', NULL, NULL, 'Miroslava', 'PhDr.', '5', '27', 'zdenka.hartman@example.net', '2023-01-13', '2023-01-08', 'Explicabo eos eum quia enim aliquid cum non qui. Nisi dolorem esse debitis eum aut et aut. In officia consequatur rerum. Sed maxime veritatis quam asperiores accusamus.', '436', '+22933427560', 'Předat nálepku', 'N', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1057, '64234', '64234.jpg', 'Bc.', 'Nováček', NULL, NULL, 'Vojtěch', 'MUDr.', '21', '48', 'xblechova@example.com', '2023-01-06', '2023-01-11', 'Sed dolore eligendi voluptate harum quod laboriosam. Ut rem rerum ducimus ut voluptatem. Voluptas quo et et temporibus autem in. Ut libero facere tenetur qui.', '459', '+94398928288', 'Aktualizovat nálepku', 'A', 'DPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1058, '64444', '64444.jpg', 'doc.', 'Červinka', NULL, NULL, 'Zdeněk', 'RNDr.', '8', '53', 'frantiska85@example.com', '2023-01-14', '2023-01-07', 'Neque aliquam sunt in aut dolorum. Qui tempore voluptates commodi reiciendis molestias voluptatibus voluptas. Magnam aspernatur quas sed quia.', '413', '+261023834404', 'Vytvořit kartu', 'A', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1059, '63274', '63274.jpg', 'Mgr.', 'Machalová', NULL, NULL, 'Emilie', 'PhDr.', '14', '21', 'havelkova.vera@example.net', '2023-01-14', '2023-01-06', 'Consequatur tempore omnis libero totam. Quae eius quis velit magni tempora eveniet quia. Doloremque quae porro impedit at.', '372', '+5973070566', 'Ok', 'N', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1060, '62200', '62200.jpg', 'PhDr.', 'Brázdil', NULL, NULL, 'Martina', 'MVDr.', '4', '39', 'nrousova@example.com', '2023-01-14', '2023-01-15', 'Qui earum enim sit fugit fugiat velit. Reprehenderit voluptatum voluptatem quia maiores. Sequi sequi officiis ullam nihil minima. At molestiae qui maiores aut magnam ad beatae.', '439', '+23054304955', 'Vrácena', 'N', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1061, '61680', '61680.jpg', 'JUDr.', 'Kužel', NULL, NULL, 'Luděk', 'Dr.', '26', '36', 'hola.petr@example.org', '2023-01-04', '2023-01-08', 'Corporis aut minus enim mollitia. Quaerat voluptatum magni et voluptatem sed. Odit aperiam quia dolorem quia facilis quia voluptates. At ipsa eum vero molestias explicabo officia voluptatem.', '531', '+9709705777646', 'Ok', 'A', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1062, '62962', '62962.jpg', 'Mgr.', 'Houdková', NULL, NULL, 'Luboš', 'PhDr.', '1', '12', 'adamec.bohuslav@example.com', '2023-01-08', '2023-01-06', 'Provident omnis earum sunt magnam laborum. Beatae quibusdam distinctio voluptatum qui aut delectus. Maiores omnis error non dicta. Sit magnam eveniet in.', '553', '+8506692727688', 'Vytvořit kartu', 'A', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1063, '61367', '61367.jpg', 'Dr.', 'Weiss', NULL, NULL, 'Romana', 'JUDr.', '2', '58', 'roman75@example.net', '2023-01-12', '2023-01-06', 'Ea fugiat accusantium voluptatem ut et aut quasi. Sed explicabo dolores aut quod optio sit. Fugit aut dolor nulla at.', '467', '+2675619850779', 'Ok', 'A', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1064, '63935', '63935.jpg', 'RNDr.', 'Staněk', NULL, NULL, 'Rudolf', 'RNDr.', '31', '64', 'brazdova.alzbeta@example.net', '2023-01-12', '2023-01-06', 'Soluta voluptatem amet voluptatem unde voluptas hic. Corrupti ut molestiae odio qui. Officiis quo similique et rerum quia.', '413', '+8805532350872', 'Nový nástup', 'N', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1065, '63913', '63913.jpg', 'MUDr.', 'Vyskočilová', NULL, NULL, 'Natálie', 'Bc.', '10', '48', 'vydrova.renata@example.org', '2023-01-06', '2023-01-07', 'Quis quia enim assumenda omnis unde officia qui. Et adipisci enim rerum sit velit quia quibusdam provident. Esse amet est non iure pariatur tempora aliquid.', '511', '+224883683808', 'Aktualizovat nálepku', 'N', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1066, '64419', '64419.jpg', 'MUDr.', 'Janotová', NULL, NULL, 'Lenka', 'Bc.', '4', '18', 'qskalova@example.net', '2023-01-11', '2023-01-12', 'Alias qui voluptate alias in quos ab inventore. Minus magni ea illo. Amet hic distinctio architecto quos quibusdam voluptatum repellat in.', '519', '+252259790543', 'Vytvořit kartu', 'N', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1067, '61893', '61893.jpg', 'MVDr.', 'Jirků', NULL, NULL, 'Emil', 'JUDr.', '21', '44', 'matej.fojtikova@example.net', '2023-01-14', '2023-01-15', 'Aspernatur sed eum eos non. Repellendus doloribus laudantium animi sint qui corporis. Alias sint cupiditate recusandae nesciunt. Dignissimos dolore nam illo magni eveniet non.', '549', '+596069366283', 'Vrácena', 'N', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1068, '62163', '62163.jpg', 'MVDr.', 'Charvátová', NULL, NULL, 'Rudolf', 'Mgr.', '20', '64', 'ilona49@example.org', '2023-01-07', '2023-01-13', 'Qui officia sit vitae repellendus tenetur. Blanditiis omnis ex et nesciunt. Est asperiores repellendus quia et reprehenderit.', '489', '+38693619036', 'Předat nálepku', 'N', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1069, '64067', '64067.jpg', 'PhDr.', 'Slovák', NULL, NULL, 'Štěpánka', 'RNDr.', '8', '49', 'natalie.hana@example.net', '2023-01-13', '2023-01-10', 'Ut facere doloribus ratione similique dolorum. Hic modi in ipsam. Laborum qui quis facere. Velit magnam maiores nulla temporibus voluptatem inventore praesentium. Ipsum magni nam consequatur.', '394', '+3784104162716', 'Předat nálepku', 'A', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1070, '64012', '64012.jpg', 'Mgr.', 'Homolková', NULL, NULL, 'Bohuslav', 'MUDr.', '3', '17', 'daniela.broz@example.com', '2023-01-02', '2023-01-06', 'Consequatur saepe molestias doloremque quae repudiandae. Doloribus quod sit aperiam blanditiis.', '531', '+96547429137', 'Aktualizovat nálepku', 'N', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1071, '63837', '63837.jpg', 'MUDr.', 'Škrabal', NULL, NULL, 'Ján', 'Bc.', '13', '34', 'david.pohl@example.org', '2023-01-05', '2023-01-04', 'Corrupti laborum sit laborum dicta voluptatem. Facilis architecto neque doloribus dolorum ut. Aliquam debitis consequatur voluptatibus occaecati.', '384', '+6859556448682', 'Aktualizovat nálepku', 'N', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1072, '64442', '64442.jpg', 'Bc.', 'Grundza', NULL, NULL, 'Renata', 'MVDr.', '6', '56', 'adam.jaros@example.com', '2023-01-10', '2023-01-13', 'Iure et inventore dicta animi odio. Voluptas velit omnis est. Provident accusamus dolor fuga sunt qui et.', '482', '+299511259', 'Předat nálepku', 'A', 'HPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1073, '64490', '64490.jpg', 'Bc.', 'Moučka', NULL, NULL, 'Vladislav', 'MUDr.', '24', '8', 'miloslava.stoklasa@example.com', '2023-01-03', '2023-01-12', 'Asperiores vitae omnis sit sed qui ea quasi. Quam nihil non exercitationem itaque optio. Exercitationem consequatur aut et est autem dolorum qui.', '432', '+463606742801', 'Nový nástup', 'N', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1074, '61095', '61095.jpg', 'Ing.', 'Dubská', NULL, NULL, 'Jiří', 'JUDr.', '26', '57', 'helena.janakova@example.net', '2023-01-03', '2023-01-10', 'Voluptatum omnis esse in quos officia cum deleniti. Quod temporibus alias ducimus porro quas consequatur totam. Aperiam qui voluptas nisi amet quos.', '544', '+579798223861', 'Předat nálepku', 'A', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1075, '64899', '64899.jpg', 'Ing.', 'Trčková', NULL, NULL, 'Olga', 'Mgr.', '13', '45', 'vaclav.kopecky@example.net', '2023-01-08', '2023-01-07', 'Dolores voluptas magnam nam veritatis et porro. Consequuntur in minima vel laborum qui. Ipsa ullam quis et neque id.', '362', '+26693181767', 'Vytvořit kartu', 'N', 'HPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1076, '64280', '64280.jpg', 'JUDr.', 'Smékalová', NULL, NULL, 'Dagmar', 'MUDr.', '29', '20', 'lpolivka@example.net', '2023-01-04', '2023-01-14', 'Corrupti praesentium blanditiis culpa et. Nobis sed labore aut quasi. Quam neque corrupti voluptas quia enim.', '482', '+68649927935', 'Nový nástup', 'A', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1077, '63800', '63800.jpg', 'Mgr.', 'Moučka', NULL, NULL, 'Dominika', 'PhDr.', '2', '21', 'srichter@example.com', '2023-01-11', '2023-01-09', 'Quas quia eos sed iusto facilis est. Qui perferendis esse omnis quos eligendi. Dolor qui fugit omnis quibusdam. Exercitationem inventore nihil doloremque.', '451', '+9707089505724', 'Aktualizovat nálepku', 'N', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1078, '61270', '61270.jpg', 'MUDr.', 'Vymazal', NULL, NULL, 'Radomír', 'Mgr.', '22', '66', 'mikova.pavla@example.org', '2023-01-10', '2023-01-11', 'Vel rem ab fuga quia et. Excepturi ea dolores velit ipsa. Tenetur blanditiis rerum qui et illum reiciendis. Sunt iste non dicta. Voluptates commodi qui ut earum.', '503', '+298894860', 'Předat nálepku', 'A', 'DPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1079, '61626', '61626.jpg', 'Dr.', 'Stárek', NULL, NULL, 'Anežka', 'RNDr.', '13', '35', 'lubos37@example.org', '2023-01-07', '2023-01-15', 'In eum repudiandae recusandae minus. Repellendus saepe tenetur et vel ut. Dolore hic aliquid suscipit. Porro nulla dolores ipsum nostrum quidem.', '482', '+34712087317', 'Předat nálepku', 'N', 'DPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1080, '62194', '62194.jpg', 'JUDr.', 'Neumannová', NULL, NULL, 'Simona', 'PhDr.', '14', '8', 'alois77@example.org', '2023-01-03', '2023-01-14', 'Eum dolor est provident eaque. Dolor saepe veniam voluptatem eligendi aut error corporis.', '516', '+9776116285995', 'Vytvořit kartu', 'N', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1081, '64401', '64401.jpg', 'JUDr.', 'Mičková', NULL, NULL, 'Vladimír', 'MVDr.', '25', '56', 'jindrich.rudolfova@example.net', '2023-01-10', '2023-01-16', 'Reprehenderit ab omnis voluptas hic quo eos. Aut rem neque nemo doloremque dolor minus voluptatum. Impedit exercitationem qui possimus voluptates dignissimos et.', '500', '+55759052499', 'Vrácena', 'N', 'DPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1082, '61299', '61299.jpg', 'MVDr.', 'Maňák', NULL, NULL, 'Milena', 'RNDr.', '19', '2', 'hrda.david@example.com', '2023-01-13', '2023-01-09', 'Ipsum dolores est porro laboriosam. Deserunt minus ea architecto sed. Corrupti rerum qui consequuntur quisquam voluptatem.', '473', '+962632737659', 'Vytvořit kartu', 'N', 'HPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1083, '64941', '64941.jpg', 'PhDr.', 'Bednaříková', NULL, NULL, 'Matěj', 'doc.', '18', '4', 'konickova.jakub@example.org', '2023-01-14', '2023-01-05', 'Nesciunt laborum modi molestiae debitis cum ducimus sunt. Autem autem quaerat id quisquam aut dolorem atque. Reiciendis consequuntur voluptate quis sunt et consequatur aut.', '446', '+2913709228', 'Nový nástup', 'A', 'DPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1084, '63045', '63045.jpg', 'RNDr.', 'Koudelová', NULL, NULL, 'Kateřina', 'Ing.', '13', '72', 'stefan69@example.net', '2023-01-11', '2023-01-13', 'Officiis numquam sint ea et quis temporibus et. Ea ut rerum reiciendis consequatur qui cumque odit enim. Velit itaque cupiditate sint nesciunt facilis.', '429', '+68609188444', 'Předat nálepku', 'N', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1085, '61771', '61771.jpg', 'JUDr.', 'Stejskal', NULL, NULL, 'Antonín', 'Mgr.', '20', '24', 'mika.marta@example.org', '2023-01-09', '2023-01-03', 'Est est deleniti culpa error harum ad laborum. Nulla consequatur consectetur quis eos. Vitae at veniam dolor qui. Enim corporis laboriosam ipsam suscipit dolorum possimus.', '440', '+8802730164655', 'Vrácena', 'A', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1086, '62669', '62669.jpg', 'Dr.', 'Široký', NULL, NULL, 'Patrik', 'Bc.', '13', '39', 'maria.michalek@example.com', '2023-01-06', '2023-01-06', 'Rerum doloremque iste dolore. Blanditiis sunt harum omnis reiciendis et. Repudiandae veniam officia enim. Quia voluptas magnam aliquam qui. Quia culpa a voluptas ut nihil.', '426', '+26682320870', 'Vytvořit kartu', 'A', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1087, '64260', '64260.jpg', 'RNDr.', 'Holubová', NULL, NULL, 'Ladislav', 'Ing.', '10', '16', 'radomir.paleckova@example.org', '2023-01-02', '2023-01-12', 'Veniam doloribus eligendi est dolorem voluptas culpa. Magnam odio ut in nisi adipisci accusantium. Maxime quia unde quasi in neque delectus.', '476', '+37124490806', 'Aktualizovat nálepku', 'N', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1088, '61502', '61502.jpg', 'Dr.', 'Kovář', NULL, NULL, 'Helena', 'Dr.', '5', '23', 'ladislav36@example.org', '2023-01-15', '2023-01-09', 'Facilis odit et ad et dolorem vel nam consectetur. Reprehenderit aperiam dolore nemo ipsum. Doloribus provident repudiandae sunt deleniti omnis quo.', '386', '+50573637961', 'Vytvořit kartu', 'A', 'DPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1089, '63055', '63055.jpg', 'Mgr.', 'Valenta', NULL, NULL, 'Nikola', 'MUDr.', '25', '27', 'zamecnik.hana@example.org', '2023-01-05', '2023-01-07', 'Fugiat excepturi dolorem est. Aut id atque soluta totam ut dolorum. Est molestiae culpa commodi quibusdam nihil aperiam ut.', '507', '+35629471532', 'Vytvořit kartu', 'N', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1090, '64218', '64218.jpg', 'MVDr.', 'Spurná', NULL, NULL, 'Ludmila', 'MVDr.', '28', '13', 'jakub.divis@example.com', '2023-01-12', '2023-01-06', 'Omnis sit laborum harum quod voluptatum hic corrupti. Sed ut eveniet earum corrupti quaerat alias. Sapiente in vero quia aut. Est tempore deleniti adipisci doloribus recusandae repellendus quo.', '464', '+50906972528', 'Ok', 'N', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1091, '61089', '61089.jpg', 'JUDr.', 'Filipová', NULL, NULL, 'Bohumil', 'RNDr.', '7', '64', 'stepan.stefanova@example.org', '2023-01-14', '2023-01-02', 'Molestiae quae enim corporis quia. Consequatur autem ut omnis iusto labore nobis.', '535', '+623534883042', 'Předat nálepku', 'A', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1092, '63951', '63951.jpg', 'Dr.', 'Bauerová', NULL, NULL, 'Šimon', 'JUDr.', '21', '7', 'martina41@example.net', '2023-01-15', '2023-01-06', 'Nam quo qui architecto rerum. Aperiam at aperiam iusto unde est illum labore. Quia nulla minus ullam cumque aut eligendi qui.', '396', '+298640824', 'Vrácena', 'A', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1093, '62931', '62931.jpg', 'Dr.', 'Kalina', NULL, NULL, 'Vladimír', 'PhDr.', '16', '66', 'vstastny@example.net', '2023-01-03', '2023-01-03', 'Numquam cumque dolore nostrum ad. Magni et nihil optio non fugit aliquam sequi. Eaque repudiandae corporis ea incidunt.', '349', '+992037971236', 'Vrácena', 'N', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1094, '61799', '61799.jpg', 'MUDr.', 'Prchalová', NULL, NULL, 'Helena', 'MUDr.', '14', '67', 'qmlcochova@example.com', '2023-01-08', '2023-01-10', 'Sit inventore voluptatem omnis aut amet. Aliquam quia possimus in velit voluptas et. Ab excepturi rerum rerum eaque nihil similique magnam omnis.', '357', '+640357923673', 'Vrácena', 'N', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1095, '63871', '63871.jpg', 'MUDr.', 'Jirková', NULL, NULL, 'Matěj', 'PhDr.', '4', '68', 'zavadil.zdenka@example.org', '2023-01-15', '2023-01-06', 'Dolor fugit vel ipsam hic ut. Alias quibusdam laborum dolores consequatur accusantium. Quo aut debitis voluptas.', '508', '+355664843114', 'Nový nástup', 'N', 'DPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1096, '63997', '63997.jpg', 'Ing.', 'Votruba', NULL, NULL, 'Andrea', 'Dr.', '24', '13', 'ptomek@example.net', '2023-01-14', '2023-01-05', 'Ex veritatis fugit iusto porro. Cumque sunt et modi delectus. Aut illo aliquid natus ratione reiciendis quae cumque. Nemo voluptas culpa error sunt.', '548', '+94698903554', 'Vrácena', 'A', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1097, '64776', '64776.jpg', 'Dr.', 'Ludvík', NULL, NULL, 'Pavlína', 'JUDr.', '9', '35', 'xsolc@example.net', '2023-01-07', '2023-01-12', 'Ut ipsum qui qui vero. Magnam mollitia asperiores corrupti optio consequatur.', '447', '+9779002229107', 'Aktualizovat nálepku', 'A', 'EVP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1098, '64077', '64077.jpg', 'Bc.', 'Válková', NULL, NULL, 'Gabriela', 'Ing.', '26', '24', 'fhavlickova@example.com', '2023-01-07', '2023-01-10', 'A quo sunt culpa ipsum et tempora distinctio. Quisquam sunt eum aut illo vel aliquam nulla. Quis fugit eligendi esse porro.', '457', '+816909064473', 'Ok', 'N', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1099, '61568', '61568.jpg', 'Dr.', 'Michalík', NULL, NULL, 'Ludvík', 'Dr.', '17', '69', 'karbanova.pavlina@example.com', '2023-01-16', '2023-01-11', 'Eum eos magni quos aut unde aut. Deserunt quis velit reprehenderit a. Non est assumenda aut sint culpa. Repellat ratione voluptas dicta aut esse. Nemo beatae hic unde sit.', '353', '+76226598180', 'Nový nástup', 'A', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1100, '64311', '64311.jpg', 'Mgr.', 'Tesařová', NULL, NULL, 'Pavlína', 'MVDr.', '2', '9', 'blanka.mika@example.com', '2023-01-10', '2023-01-08', 'Modi aut consequatur alias quis sint. Architecto in nisi sequi distinctio numquam. Reprehenderit ipsa ut blanditiis autem culpa ab dolorem et. Officia atque inventore quas repellendus perferendis.', '395', '+979100158107', 'Vytvořit kartu', 'A', 'DPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1101, '62900', '62900.jpg', 'doc.', 'Pecháček', NULL, NULL, 'Lukáš', 'MUDr.', '29', '62', 'vitezslav.sykorova@example.org', '2023-01-14', '2023-01-08', 'Ut eius magni autem recusandae rerum quo. Ipsa assumenda dolorem voluptatem quo. Eligendi distinctio et facere.', '410', '+23282164386', 'Nový nástup', 'N', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1102, '62133', '62133.jpg', 'PhDr.', 'Pilařová', NULL, NULL, 'Martin', 'Mgr.', '8', '6', 'langr.radek@example.com', '2023-01-07', '2023-01-15', 'Quia odio eos qui vero voluptatum et. Saepe impedit fuga ut consequatur delectus asperiores. Perferendis ut et illum expedita quasi molestiae enim.', '367', '+3522462382186', 'Vytvořit kartu', 'A', 'EVP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1103, '63169', '63169.jpg', 'Mgr.', 'Kloučková', NULL, NULL, 'Vladimíra', 'JUDr.', '1', '7', 'mhovorka@example.com', '2023-01-07', '2023-01-06', 'Vel consequuntur doloremque necessitatibus voluptatum repudiandae. Accusamus iure id ullam omnis ut voluptatem. Esse quae nulla laboriosam eos. Laboriosam architecto aut vel.', '496', '+249373047458', 'Vytvořit kartu', 'N', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1104, '62514', '62514.jpg', 'JUDr.', 'Janáčková', NULL, NULL, 'Richard', 'Mgr.', '31', '39', 'valentova.marcela@example.net', '2023-01-13', '2023-01-12', 'Et quia quia qui rerum iusto sint facilis. Sint facilis sit facere ex repellendus nulla. Aperiam rem aspernatur incidunt ipsam exercitationem cum non optio.', '555', '+24128254047', 'Aktualizovat nálepku', 'A', 'ČSO', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1105, '62800', '62800.jpg', 'RNDr.', 'Farkaš', NULL, NULL, 'Andrea', 'MUDr.', '26', '8', 'cpospichal@example.com', '2023-01-12', '2023-01-03', 'Est et ut rerum ipsa doloremque id enim. Laudantium non qui et provident. Suscipit aliquam soluta itaque explicabo velit ipsam aut. Vero sequi aliquid natus error.', '500', '+237080180813', 'Ok', 'A', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1106, '63422', '63422.jpg', 'MVDr.', 'Kotas', NULL, NULL, 'Stanislava', 'Bc.', '20', '12', 'jira.nikola@example.com', '2023-01-10', '2023-01-08', 'Sit neque alias impedit. Recusandae quo sed placeat dolorum qui reiciendis. Qui totam exercitationem et quia commodi dolore. Et voluptatem recusandae beatae est. Optio debitis est rerum voluptas sed.', '400', '+958039164785', 'Vrácena', 'A', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1107, '62310', '62310.jpg', 'Ing.', 'Sýkorová', NULL, NULL, 'Radka', 'JUDr.', '8', '61', 'stepanek.petra@example.org', '2023-01-09', '2023-01-14', 'Tempore illo rem repudiandae velit ab veritatis est. In et quam officia rem. Non deleniti voluptas rem et repellat.', '420', '+9609584245280', 'Předat nálepku', 'N', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1108, '62023', '62023.jpg', 'Ing.', 'Králíková', NULL, NULL, 'Viktor', 'RNDr.', '7', '3', 'milena32@example.org', '2023-01-11', '2023-01-14', 'At blanditiis ipsa nemo amet. Et vel quibusdam sunt. Eos fugiat culpa assumenda voluptas iusto accusantium. Ducimus maiores reprehenderit dolor optio quis.', '433', '+633512959747', 'Vrácena', 'N', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1109, '63563', '63563.jpg', 'MVDr.', 'Vysloužilová', NULL, NULL, 'Filip', 'Bc.', '4', '17', 'zdarska.jan@example.org', '2023-01-06', '2023-01-15', 'Temporibus sit aut dolorem consequatur omnis. Et quasi quis eaque illo ab asperiores. Corrupti laboriosam voluptas voluptatem autem.', '500', '+376912067611', 'Nový nástup', 'N', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1110, '62666', '62666.jpg', 'RNDr.', 'Dvořák', NULL, NULL, 'Karolína', 'MUDr.', '29', '30', 'pospichalova.marcela@example.org', '2023-01-06', '2023-01-02', 'Ipsum est neque nobis facilis aut natus repudiandae. Expedita vel necessitatibus fuga temporibus placeat quae. Suscipit exercitationem quisquam excepturi. Amet eos inventore at non.', '375', '+244069130053', 'Ok', 'A', 'HPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1111, '63550', '63550.jpg', 'MUDr.', 'Popelková', NULL, NULL, 'Jiří', 'MVDr.', '27', '24', 'sindlerova.zbynek@example.net', '2023-01-09', '2023-01-12', 'Rem illum magnam accusantium accusantium eos quia. Asperiores repudiandae voluptatibus nemo aliquid vero. Deleniti porro voluptatem laborum.', '515', '+869121523437', 'Aktualizovat nálepku', 'A', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1112, '62568', '62568.jpg', 'Ing.', 'Jaroš', NULL, NULL, 'Markéta', 'Dr.', '30', '2', 'vaskova.vladimira@example.net', '2023-01-03', '2023-01-06', 'Sed et explicabo adipisci ullam qui. Accusamus ut in delectus doloribus cumque enim dicta non. Placeat error molestiae voluptatum soluta veniam voluptas.', '544', '+9702523970319', 'Vytvořit kartu', 'N', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12');
INSERT INTO `employees` (`id`, `personal_number`, `image`, `title_preffix`, `last_name`, `middle_name`, `married_name`, `first_name`, `title_suffix`, `department_id`, `job_id`, `email`, `start_date`, `end_date`, `comment`, `phone`, `mobile`, `id_card`, `coffee`, `employment`, `position`, `status`, `created_at`, `updated_at`) VALUES
(1113, '64299', '64299.jpg', 'Bc.', 'Kadeřábková', NULL, NULL, 'Božena', 'doc.', '18', '66', 'chaloupka.natalie@example.org', '2023-01-03', '2023-01-16', 'Rerum dolore omnis iure quos. Culpa provident sequi facilis aliquam. Nobis sit vitae et ratione. Fugiat voluptatem aut voluptatem et.', '550', '+813055170078', 'Nový nástup', 'N', 'HPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1114, '62226', '62226.jpg', 'MVDr.', 'Šváb', NULL, NULL, 'Patrik', 'doc.', '3', '44', 'karel.klara@example.com', '2023-01-07', '2023-01-12', 'Voluptatum illo consectetur dolor et culpa quas totam. Non repellat rerum nam molestias voluptatem distinctio. Excepturi qui et ullam modi. Dolorem sint est distinctio occaecati animi maxime quo.', '472', '+6858088614374', 'Předat nálepku', 'A', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1115, '64013', '64013.jpg', 'Ing.', 'Eliášová', NULL, NULL, 'Hana', 'PhDr.', '18', '25', 'petra59@example.net', '2023-01-07', '2023-01-06', 'Minima ut id atque voluptas eligendi aut. Quisquam quidem sint omnis suscipit earum quo. Sint molestias amet aut in facere sunt. In quo reiciendis laborum.', '375', '+681448314844', 'Nový nástup', 'N', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1116, '62219', '62219.jpg', 'Ing.', 'Holoubková', NULL, NULL, 'Marta', 'Bc.', '18', '3', 'gjaneckova@example.org', '2023-01-12', '2023-01-14', 'Et iure dolorem labore est molestiae quaerat consectetur. Quas commodi id quas quo eum. Culpa molestiae tenetur maiores saepe ducimus. Voluptates dolorum ut voluptas.', '538', '+50506327604', 'Předat nálepku', 'N', 'DPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1117, '61691', '61691.jpg', 'RNDr.', 'David', NULL, NULL, 'Marek', 'Bc.', '17', '6', 'tkubikova@example.net', '2023-01-06', '2023-01-07', 'Impedit dolorum iure voluptatem possimus. Explicabo rem perspiciatis velit. Nisi qui ea voluptatem fugiat deleniti molestiae labore.', '511', '+823571069909', 'Vrácena', 'A', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1118, '61285', '61285.jpg', 'JUDr.', 'Zíka', NULL, NULL, 'Marta', 'JUDr.', '10', '7', 'jaromir.junek@example.org', '2023-01-11', '2023-01-05', 'Laboriosam et earum est et sed molestiae rerum. Quas facilis dolor autem facilis consequatur autem. Rerum eius est magnam aut dolores ipsa.', '395', '+852306427715', 'Nový nástup', 'A', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1119, '62805', '62805.jpg', 'Ing.', 'Pivoňková', NULL, NULL, 'Jaroslava', 'RNDr.', '24', '35', 'jplskova@example.com', '2023-01-07', '2023-01-16', 'Eveniet qui consequatur recusandae quisquam quia voluptatem. Ea tenetur laborum adipisci quidem laborum reprehenderit.', '527', '+5970588548', 'Ok', 'N', 'HPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1120, '62871', '62871.jpg', 'doc.', 'Ambrožová', NULL, NULL, 'Patrik', 'Ing.', '9', '30', 'martina15@example.org', '2023-01-07', '2023-01-07', 'Qui porro eum molestiae minima. Eaque minus asperiores debitis assumenda. Provident in dolorum quae eligendi sit.', '518', '+251867826145', 'Vrácena', 'A', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1121, '62234', '62234.jpg', 'doc.', 'Janata', NULL, NULL, 'Mária', 'MVDr.', '10', '65', 'jan25@example.net', '2023-01-14', '2023-01-08', 'Doloribus dolor nam molestiae quia vel. Vel aut architecto maxime officiis animi. Omnis sit ut possimus et minima. Occaecati consequuntur corrupti fuga et ullam.', '411', '+93662101242', 'Nový nástup', 'N', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1122, '63330', '63330.jpg', 'Ing.', 'Dvořáček', NULL, NULL, 'Antonín', 'RNDr.', '8', '68', 'rudolf.lacinova@example.org', '2023-01-09', '2023-01-08', 'Molestiae nihil nihil rerum laudantium est rerum. Temporibus velit omnis voluptatem autem veritatis nulla labore. Commodi earum pariatur odio odio.', '445', '+32865354395', 'Předat nálepku', 'A', 'DPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1123, '62686', '62686.jpg', 'Dr.', 'Kaplan', NULL, NULL, 'Růžena', 'Mgr.', '23', '51', 'ivana.stuchlik@example.org', '2023-01-12', '2023-01-06', 'Magni fugiat dolores possimus soluta provident. Et sit eius repudiandae ut earum enim cumque et. Libero ullam qui ut qui doloremque. Aliquam molestiae rerum hic impedit ipsam.', '476', '+231351865340', 'Aktualizovat nálepku', 'A', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1124, '62228', '62228.jpg', 'Ing.', 'Lukeš', NULL, NULL, 'Naděžda', 'JUDr.', '21', '55', 'dunka.stanislav@example.net', '2023-01-13', '2023-01-05', 'Fugiat qui error itaque et tenetur aut. Nemo odit quae voluptas voluptatibus blanditiis et. Repellendus quae et illum laborum deleniti sunt. Ex veniam quidem nisi possimus.', '547', '+211976816637', 'Vytvořit kartu', 'A', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1125, '62418', '62418.jpg', 'PhDr.', 'Winkler', NULL, NULL, 'Miloš', 'Ing.', '16', '64', 'kalina.pavla@example.org', '2023-01-09', '2023-01-06', 'Fugiat numquam quae aspernatur. Vel dolor labore unde et. Quis laborum et porro non a dolorum aperiam itaque.', '405', '+59914933733', 'Nový nástup', 'N', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1126, '64087', '64087.jpg', 'Dr.', 'Formanová', NULL, NULL, 'Naděžda', 'doc.', '19', '65', 'xrataj@example.org', '2023-01-15', '2023-01-09', 'Aliquam quam voluptate est voluptate eligendi. Mollitia nobis amet reprehenderit itaque quibusdam. Minima ut cupiditate rerum.', '475', '+96522395098', 'Aktualizovat nálepku', 'A', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1127, '61598', '61598.jpg', 'MUDr.', 'Wolf', NULL, NULL, 'Lucie', 'PhDr.', '12', '8', 'stanislava75@example.com', '2023-01-05', '2023-01-09', 'Aliquam numquam magni earum aut. Omnis iste est aspernatur et.', '472', '+213185314806', 'Vrácena', 'A', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1128, '61234', '61234.jpg', 'PhDr.', 'Straková', NULL, NULL, 'Martina', 'Dr.', '7', '20', 'ladislav52@example.org', '2023-01-08', '2023-01-12', 'Itaque officiis praesentium eum magni libero. Sed incidunt non id mollitia ad accusantium dolor inventore. Vero voluptate ut nesciunt. Reprehenderit sed deserunt totam quidem.', '406', '+3729971382077', 'Vrácena', 'A', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1129, '64519', '64519.jpg', 'JUDr.', 'Šírová', NULL, NULL, 'František', 'doc.', '31', '42', 'mlejnek.roman@example.com', '2023-01-14', '2023-01-14', 'Eveniet quasi ipsum molestias blanditiis quas dolor. Vel mollitia vel quaerat et nemo. Non aut dolores dicta consequatur et officia.', '362', '+250052974694', 'Vrácena', 'A', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1130, '61879', '61879.jpg', 'Mgr.', 'Klementová', NULL, NULL, 'Štěpánka', 'Dr.', '2', '10', 'frantisek65@example.org', '2023-01-07', '2023-01-14', 'Quod autem dolorem tenetur reprehenderit totam sunt dignissimos. Voluptate dicta voluptatibus ipsa animi ratione rem illum. Nemo perferendis similique iste amet laudantium.', '427', '+492943499909', 'Předat nálepku', 'N', 'HPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1131, '62078', '62078.jpg', 'Dr.', 'Vojáčková', NULL, NULL, 'Jakub', 'Bc.', '18', '1', 'anezka73@example.net', '2023-01-04', '2023-01-04', 'Maxime sed sint atque accusantium. Dolores mollitia sit doloribus nisi perspiciatis. Ratione id cupiditate quod perferendis qui voluptas possimus aut. Odio sit laborum sit saepe tenetur repellendus.', '492', '+998591175333', 'Nový nástup', 'A', 'HPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1132, '64375', '64375.jpg', 'RNDr.', 'Juřicová', NULL, NULL, 'Ladislav', 'Dr.', '17', '3', 'zdenek.viskova@example.org', '2023-01-10', '2023-01-07', 'Ducimus aut aliquid et facere est. Eos placeat alias sit consequuntur ut quis. Ipsa tempora iste sit perferendis ipsum veritatis excepturi impedit. Est esse doloribus aliquam assumenda maxime quae.', '532', '+983989536847', 'Vytvořit kartu', 'A', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1133, '64762', '64762.jpg', 'PhDr.', 'Blechová', NULL, NULL, 'Hana', 'RNDr.', '18', '72', 'pvaclavkova@example.net', '2023-01-16', '2023-01-13', 'Libero consequuntur sit perferendis cupiditate delectus aperiam. Dolor ut rem deleniti et eos consequatur. Minus quis rerum vero et cumque modi qui. Fugiat esse voluptas eos nulla ducimus.', '415', '+38649525701', 'Vrácena', 'A', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1134, '62703', '62703.jpg', 'JUDr.', 'Jiránek', NULL, NULL, 'Zdeňka', 'JUDr.', '24', '11', 'veronika.dobes@example.com', '2023-01-08', '2023-01-02', 'Dicta et fugit ut rerum qui vitae. Aut rerum veniam aliquid non. Nam voluptatem aliquam ut dolore. Ratione ratione rerum natus repudiandae sunt aut quasi tenetur.', '540', '+908561498429', 'Vytvořit kartu', 'A', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1135, '61318', '61318.jpg', 'Ing.', 'Beránková', NULL, NULL, 'Pavlína', 'Ing.', '1', '13', 'ivan98@example.com', '2023-01-06', '2023-01-02', 'Accusamus quam molestiae dolorem vero accusantium ratione quasi distinctio. Praesentium iusto rerum esse labore nobis soluta ipsa consequatur. Quia debitis error tenetur non commodi similique.', '432', '+602011525928', 'Vrácena', 'N', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1136, '62651', '62651.jpg', 'MVDr.', 'Adámek', NULL, NULL, 'Ondřej', 'Bc.', '4', '12', 'zconka@example.org', '2023-01-10', '2023-01-15', 'Eveniet vero vel sit. Cupiditate et possimus voluptatem architecto necessitatibus reiciendis debitis. Quis rem id minus qui dolor eligendi.', '544', '+8509756800492', 'Aktualizovat nálepku', 'N', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1137, '61227', '61227.jpg', 'RNDr.', 'Šesták', NULL, NULL, 'Daniel', 'doc.', '8', '1', 'svandova.rostislav@example.net', '2023-01-08', '2023-01-09', 'Esse rem necessitatibus est rerum dolore. Aspernatur sed praesentium voluptas eaque aut temporibus. Et sequi eaque fugit dolores temporibus corporis quibusdam. Similique ut ea aspernatur.', '517', '+35689611034', 'Vytvořit kartu', 'A', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1138, '63598', '63598.jpg', 'PhDr.', 'Havelka', NULL, NULL, 'Petr', 'JUDr.', '25', '58', 'kamila.komarek@example.net', '2023-01-14', '2023-01-13', 'Qui ut et tenetur illum. Ea placeat saepe dolore dicta id et. Laboriosam ullam nostrum magni fugiat rerum alias dolorem ab. Veritatis repellat numquam eum voluptas corporis ratione omnis.', '420', '+88838198703064', 'Vytvořit kartu', 'N', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1139, '62937', '62937.jpg', 'Ing.', 'Kučerová', NULL, NULL, 'Irena', 'PhDr.', '21', '22', 'kubinova.roman@example.com', '2023-01-05', '2023-01-05', 'Et amet ducimus officia non. Exercitationem quo provident laborum eum sed aperiam.', '490', '+6738318929', 'Aktualizovat nálepku', 'N', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1140, '61776', '61776.jpg', 'Mgr.', 'Kupka', NULL, NULL, 'Stanislav', 'Ing.', '16', '19', 'jiri.neumann@example.com', '2023-01-12', '2023-01-11', 'Distinctio quam id natus odit doloribus. Qui totam fugit officia quo rem. Laborum nobis qui qui vero quia perspiciatis perferendis. Quae et voluptate aliquam similique non.', '480', '+5958451571518', 'Vrácena', 'N', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1141, '61859', '61859.jpg', 'Ing.', 'Hladká', NULL, NULL, 'Bohumil', 'MUDr.', '5', '69', 'filip.krajicek@example.net', '2023-01-15', '2023-01-12', 'Non et quas magni itaque consequatur recusandae voluptas. In ea deleniti earum dolores ad qui sed. Rerum officia ipsam dolorem nihil qui. Sunt architecto et consequuntur aut quasi.', '350', '+2482278171', 'Předat nálepku', 'N', 'DPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1142, '63978', '63978.jpg', 'Mgr.', 'Petrová', NULL, NULL, 'Miluše', 'MVDr.', '29', '31', 'miloslava.brychtova@example.net', '2023-01-10', '2023-01-03', 'Deserunt consequatur dolores nostrum tempora. Libero ut quia officia expedita suscipit et.', '341', '+33124345936', 'Předat nálepku', 'N', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1143, '62752', '62752.jpg', 'JUDr.', 'Krajíčková', NULL, NULL, 'Robert', 'RNDr.', '17', '49', 'hradil.stepanka@example.org', '2023-01-06', '2023-01-05', 'Aut nihil omnis aut inventore sunt. Labore recusandae unde id sunt sunt voluptatem sit. Commodi dolor odit dolores eos. Repellat rem dolores eum voluptas doloremque autem vel doloribus. Et ut vel ut.', '482', '+68632777018', 'Nový nástup', 'N', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1144, '64991', '64991.jpg', 'Dr.', 'Pernicová', NULL, NULL, 'Emilie', 'PhDr.', '7', '31', 'mnedbalova@example.com', '2023-01-05', '2023-01-08', 'Voluptatem aspernatur sint iure tempore sapiente. Ab id earum nobis cumque cumque voluptatem. Saepe quasi maiores quos accusantium voluptas soluta et nam.', '407', '+97517211916', 'Ok', 'N', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1145, '61311', '61311.jpg', 'Ing.', 'Havránek', NULL, NULL, 'Hana', 'Dr.', '26', '2', 'dulrichova@example.net', '2023-01-02', '2023-01-15', 'Perspiciatis et qui dicta sequi. Perferendis reiciendis repellendus ex reiciendis. Qui ex voluptatibus quas velit qui.', '355', '+70056512552', 'Předat nálepku', 'N', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1146, '64262', '64262.jpg', 'PhDr.', 'Marková', NULL, NULL, 'Jana', 'PhDr.', '28', '65', 'zdolejs@example.com', '2023-01-13', '2023-01-13', 'Dolorem vel atque vitae est voluptatum at nihil. Saepe dolores autem nemo veniam. Suscipit asperiores vero aperiam vero velit et.', '408', '+3786148966460', 'Předat nálepku', 'N', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1147, '63418', '63418.jpg', 'MVDr.', 'Turečková', NULL, NULL, 'Iveta', 'PhDr.', '12', '22', 'bohuslav05@example.com', '2023-01-02', '2023-01-09', 'Aut dolor libero iusto sint doloremque. Id tempora ut autem in corporis voluptas error. Et officiis quae est.', '488', '+218581632549', 'Vrácena', 'A', 'EVP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1148, '62026', '62026.jpg', 'Mgr.', 'Sviták', NULL, NULL, 'Zdeňka', 'Bc.', '18', '22', 'dvorsky.ondrej@example.net', '2023-01-12', '2023-01-04', 'Ipsam aliquid voluptatem exercitationem magnam quidem quia. Et sunt occaecati totam consectetur. Incidunt facere aut ut.', '467', '+262588621185', 'Vytvořit kartu', 'N', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1149, '61296', '61296.jpg', 'Ing.', 'Landová', NULL, NULL, 'Helena', 'RNDr.', '11', '61', 'jarmila34@example.org', '2023-01-12', '2023-01-04', 'Inventore minima alias praesentium eos dolore reprehenderit molestiae. Possimus quas expedita enim et. Quasi nulla aspernatur eaque praesentium adipisci.', '531', '+986617782983', 'Aktualizovat nálepku', 'N', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1150, '62509', '62509.jpg', 'Dr.', 'Wolf', NULL, NULL, 'Libuše', 'MUDr.', '8', '63', 'miloslav.kasparkova@example.com', '2023-01-06', '2023-01-03', 'Doloremque amet quidem magnam eaque. Voluptatem voluptates temporibus dolor atque velit at laborum similique. In magni eum et eaque. Sit omnis repellat cum enim.', '414', '+536278248275', 'Aktualizovat nálepku', 'N', 'DPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1151, '62495', '62495.jpg', 'Dr.', 'Mužíková', NULL, NULL, 'Bohumil', 'RNDr.', '1', '22', 'dusek.ivo@example.net', '2023-01-02', '2023-01-05', 'Quisquam et voluptates explicabo sint eum. Ad est rerum ut quas similique. Possimus facere ab consequatur maiores eius commodi non cum.', '429', '+37473024992', 'Ok', 'N', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1152, '61588', '61588.jpg', 'Bc.', 'Hendrych', NULL, NULL, 'Vojtěch', 'PhDr.', '4', '60', 'vendula18@example.org', '2023-01-05', '2023-01-02', 'Enim reiciendis laboriosam voluptatum maiores. Sit iste quas non porro sed. Voluptate quia minima qui veniam optio quis.', '444', '+2343407395386', 'Předat nálepku', 'A', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1153, '63960', '63960.jpg', 'Bc.', 'Maxa', NULL, NULL, 'Vlastimil', 'MVDr.', '24', '22', 'jozef.divisova@example.com', '2023-01-14', '2023-01-15', 'Ad id quia laborum quis labore. Iure ad labore dolores est qui aperiam ut. Aut voluptas qui error.', '366', '+445505831711', 'Nový nástup', 'A', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1154, '62420', '62420.jpg', 'MVDr.', 'Horáček', NULL, NULL, 'Naděžda', 'Ing.', '31', '3', 'milada.sehnalova@example.net', '2023-01-06', '2023-01-06', 'Voluptas deleniti praesentium qui aliquid doloribus. Non dolorem veniam nesciunt esse unde sit. Quia libero dolores enim suscipit.', '537', '+251316057507', 'Ok', 'N', 'DPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1155, '62211', '62211.jpg', 'doc.', 'Šilhavý', NULL, NULL, 'Martin', 'doc.', '6', '19', 'hendrychova.ondrej@example.net', '2023-01-03', '2023-01-15', 'Atque sunt dolores nisi similique eos minima. Dolore quo at quia qui. Esse recusandae debitis cum adipisci. Quia ullam cupiditate illo iusto eum aut velit.', '444', '+963057013815', 'Aktualizovat nálepku', 'N', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1156, '63213', '63213.jpg', 'Bc.', 'Petráková', NULL, NULL, 'Kamila', 'RNDr.', '30', '13', 'milada.kanka@example.org', '2023-01-09', '2023-01-05', 'Ut autem ratione sint. Exercitationem quibusdam laudantium veniam ea ipsa. Adipisci velit consequatur voluptatem occaecati ipsam placeat.', '401', '+645524752994', 'Předat nálepku', 'N', 'EVP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1157, '61439', '61439.jpg', 'MVDr.', 'Zavřelová', NULL, NULL, 'Antonín', 'Mgr.', '2', '23', 'dana14@example.org', '2023-01-09', '2023-01-14', 'Laudantium voluptas atque corporis eius perspiciatis in nostrum. Aspernatur et temporibus molestiae in. Nobis delectus quia ullam. Quia occaecati molestiae adipisci mollitia.', '401', '+596321980151', 'Vytvořit kartu', 'A', 'HPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1158, '61283', '61283.jpg', 'Mgr.', 'Pavlíčková', NULL, NULL, 'Dušan', 'Bc.', '9', '27', 'zpokorny@example.org', '2023-01-03', '2023-01-08', 'Aliquam modi praesentium distinctio odit dolor. Architecto rem amet asperiores eos laborum atque quos. Debitis magnam qui consequatur dignissimos voluptas tenetur.', '480', '+25370755405', 'Aktualizovat nálepku', 'N', 'DPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1159, '61375', '61375.jpg', 'Dr.', 'Bajer', NULL, NULL, 'Karel', 'MUDr.', '31', '46', 'lkohoutova@example.org', '2023-01-07', '2023-01-11', 'Dolor deleniti aut sed non ea quis sit. Enim maxime aliquam voluptatibus ipsa recusandae explicabo. Minima suscipit doloribus temporibus voluptas suscipit et asperiores. Qui ea consequatur atque sit.', '482', '+9640731684108', 'Aktualizovat nálepku', 'A', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1160, '61110', '61110.jpg', 'JUDr.', 'Polách', NULL, NULL, 'Radka', 'MVDr.', '11', '21', 'sramkova.miluse@example.net', '2023-01-10', '2023-01-12', 'Omnis voluptates fuga quos occaecati et hic voluptatem. Porro cupiditate facilis suscipit. Et id facere consequatur. Aut expedita aspernatur quae et sed commodi quaerat.', '482', '+97394389557', 'Ok', 'A', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1161, '63857', '63857.jpg', 'JUDr.', 'Erbenová', NULL, NULL, 'Vladislav', 'Mgr.', '18', '19', 'lucie.andel@example.com', '2023-01-07', '2023-01-03', 'Nihil voluptatem id necessitatibus est veniam. Labore est ipsa ut itaque. Dolorem rem beatae illum aut commodi non. Minima iure nulla officiis explicabo qui veniam.', '418', '+2487879195', 'Nový nástup', 'N', 'EVP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1162, '64964', '64964.jpg', 'doc.', 'Kopal', NULL, NULL, 'Marta', 'MVDr.', '22', '1', 'dana.simanek@example.net', '2023-01-13', '2023-01-10', 'Debitis natus nemo modi. Nostrum quia asperiores ut nostrum placeat.', '363', '+67553557924', 'Nový nástup', 'N', 'EVP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1163, '61468', '61468.jpg', 'Bc.', 'Synek', NULL, NULL, 'Adam', 'Bc.', '12', '39', 'hladky.dominik@example.org', '2023-01-16', '2023-01-02', 'Fugiat error omnis voluptatem facere tenetur quae. Occaecati nesciunt est aspernatur praesentium commodi dolorum iusto qui. Sit adipisci adipisci ullam dignissimos voluptatum.', '429', '+3788278150907', 'Ok', 'A', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1164, '63843', '63843.jpg', 'MVDr.', 'Vlasáková', NULL, NULL, 'Jaroslav', 'Ing.', '5', '28', 'kratochvilova.lucie@example.net', '2023-01-12', '2023-01-10', 'Est enim ea optio eligendi. Et facere debitis ut et id quae. Fugiat illum omnis nam qui ut et dolorem. Quia aut illum sunt ut.', '516', '+240222994715', 'Vrácena', 'A', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1165, '64340', '64340.jpg', 'Dr.', 'Machová', NULL, NULL, 'Marie', 'Bc.', '14', '58', 'kgruberova@example.org', '2023-01-05', '2023-01-13', 'Repellat velit vel quam rerum dolore eius. Ut eum ut in est qui rerum. Deserunt sequi atque sed aut. Nemo reprehenderit nesciunt voluptas nihil eum est consequatur. Nihil rerum quia ea beatae vitae.', '436', '+35618946829', 'Předat nálepku', 'A', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1166, '61814', '61814.jpg', 'JUDr.', 'Hladký', NULL, NULL, 'Tomáš', 'PhDr.', '21', '2', 'dsimunek@example.net', '2023-01-04', '2023-01-05', 'Beatae quo perspiciatis occaecati consequatur. Voluptatem quis placeat dolorum sunt provident corrupti velit. Saepe dolores et possimus perferendis dolorem consequuntur.', '469', '+549045427448', 'Předat nálepku', 'N', 'ČSO', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1167, '63816', '63816.jpg', 'Ing.', 'Malečková', NULL, NULL, 'Klára', 'Bc.', '21', '23', 'rene.hermankova@example.net', '2023-01-04', '2023-01-15', 'Ipsam consequatur ut ullam eligendi dolorum eos. Hic eligendi deserunt voluptatem eligendi. Excepturi sint autem rem accusamus saepe. Voluptas expedita at quos ipsa. Et dolor ut sit optio voluptates.', '366', '+206960040243', 'Vrácena', 'N', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1168, '64514', '64514.jpg', 'Ing.', 'Sommer', NULL, NULL, 'Ilona', 'Mgr.', '4', '17', 'ondrej.vachova@example.org', '2023-01-05', '2023-01-03', 'Quia voluptas assumenda cupiditate. Explicabo voluptatibus quis porro accusamus quo maxime ut. Recusandae cupiditate ut id porro et.', '444', '+299222445', 'Předat nálepku', 'N', 'DPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1169, '63739', '63739.jpg', 'Bc.', 'Kuba', NULL, NULL, 'Jozef', 'doc.', '29', '44', 'holasova.miloslava@example.net', '2023-01-13', '2023-01-09', 'Aut illum aut quo aut ducimus beatae voluptas. Sapiente veritatis odit sed ut. Debitis nobis praesentium est quisquam ut praesentium.', '425', '+237501048657', 'Nový nástup', 'A', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1170, '62124', '62124.jpg', 'Dr.', 'Hrdinová', NULL, NULL, 'Kamila', 'Bc.', '16', '43', 'denisa.krajicek@example.com', '2023-01-12', '2023-01-15', 'Nihil aut ut est qui aut et eos. Atque nemo ut placeat sint excepturi enim ut. Labore aut quaerat ut ipsum repudiandae.', '392', '+441770189493', 'Vytvořit kartu', 'A', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1171, '63332', '63332.jpg', 'MUDr.', 'Řeháková', NULL, NULL, 'Ilona', 'doc.', '26', '66', 'miloslava70@example.com', '2023-01-05', '2023-01-06', 'Molestiae numquam tempora non ex dolorem sed. Dolor accusantium officiis reprehenderit. Dolore distinctio expedita consectetur laborum itaque.', '386', '+382840756392', 'Ok', 'A', 'EVP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1172, '61718', '61718.jpg', 'MVDr.', 'Beranová', NULL, NULL, 'Jozef', 'Mgr.', '24', '37', 'natalie.krcmarova@example.org', '2023-01-15', '2023-01-04', 'Est est optio minima nostrum facere officiis. Dolorem et modi suscipit quae iure beatae beatae omnis. Ut voluptatem deleniti iste molestias ad.', '412', '+681331270877', 'Předat nálepku', 'N', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1173, '62471', '62471.jpg', 'MVDr.', 'Máchová', NULL, NULL, 'Veronika', 'MVDr.', '9', '8', 'marcel.sramek@example.com', '2023-01-05', '2023-01-08', 'Eveniet blanditiis perferendis id sint laudantium. Consequatur ullam alias et et possimus.', '540', '+41543467356', 'Nový nástup', 'A', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1174, '63427', '63427.jpg', 'doc.', 'Ryšavý', NULL, NULL, 'Eduard', 'Mgr.', '18', '43', 'ilona.chovancova@example.net', '2023-01-14', '2023-01-08', 'Vero vel ullam quisquam aut repudiandae quos ea. Dolorum quis aut veniam. Blanditiis qui vitae consectetur.', '505', '+68685508016', 'Aktualizovat nálepku', 'N', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1175, '61887', '61887.jpg', 'Bc.', 'Plachá', NULL, NULL, 'Kamil', 'Ing.', '5', '26', 'lkasparkova@example.com', '2023-01-05', '2023-01-10', 'Maxime perspiciatis voluptatem et voluptates cum sint sunt ea. Quod qui cupiditate ipsum enim. Dolorum laboriosam provident sed facilis illum iste.', '522', '+641022133252', 'Aktualizovat nálepku', 'A', 'DPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1176, '61212', '61212.jpg', 'Bc.', 'Jakešová', NULL, NULL, 'Štefan', 'Bc.', '11', '42', 'simon10@example.net', '2023-01-06', '2023-01-15', 'Autem commodi corporis voluptates consectetur repudiandae et. Accusamus rerum error magnam nihil nam aut. Expedita nemo tempora dolor. Qui impedit quidem excepturi impedit eum soluta.', '429', '+6733659839', 'Předat nálepku', 'A', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1177, '63541', '63541.jpg', 'MVDr.', 'Mráčková', NULL, NULL, 'Jaroslav', 'doc.', '24', '34', 'jzeleny@example.org', '2023-01-05', '2023-01-14', 'Repudiandae ea aliquam laudantium exercitationem et perferendis. Est distinctio libero aut quae ea. Et commodi qui nemo aut dolores.', '370', '+233964604681', 'Vytvořit kartu', 'A', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1178, '62796', '62796.jpg', 'Mgr.', 'Pelc', NULL, NULL, 'Blanka', 'doc.', '12', '5', 'mirga.vlasta@example.net', '2023-01-04', '2023-01-06', 'Minus debitis quibusdam vitae voluptas qui aut ut. At sit quaerat enim autem vel. Voluptate iste temporibus ad sed esse maxime.', '486', '+2253791626518', 'Ok', 'A', 'HPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1179, '62542', '62542.jpg', 'Mgr.', 'Baloun', NULL, NULL, 'Kristýna', 'Mgr.', '12', '47', 'petr93@example.net', '2023-01-11', '2023-01-14', 'Quia quo dolor sunt autem sint. Quibusdam cupiditate consequatur repudiandae consequatur. Ut et assumenda expedita impedit quibusdam sapiente. Nemo cum tenetur et nulla molestiae.', '375', '+264190363419', 'Vytvořit kartu', 'N', 'HPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1180, '62311', '62311.jpg', 'JUDr.', 'Urban', NULL, NULL, 'Mária', 'PhDr.', '2', '45', 'matyas.kovac@example.com', '2023-01-15', '2023-01-08', 'Debitis nihil et rerum exercitationem id. Aut ab incidunt voluptas quo commodi sed. Tenetur nesciunt velit perferendis eveniet. Minus et sed neque.', '472', '+26691864522', 'Předat nálepku', 'A', 'ČSO', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1181, '64474', '64474.jpg', 'PhDr.', 'Stránská', NULL, NULL, 'Kamila', 'doc.', '3', '58', 'iveta.martinek@example.org', '2023-01-09', '2023-01-05', 'Nam optio eos sequi cupiditate deserunt. Dolor ut aliquid at repellat. Minus est optio expedita alias earum.', '501', '+38660801502', 'Nový nástup', 'A', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1182, '64465', '64465.jpg', 'Dr.', 'Čonková', NULL, NULL, 'Renáta', 'JUDr.', '14', '28', 'pospisil.roman@example.org', '2023-01-03', '2023-01-09', 'Quia earum animi dolore. Tempore sequi consequatur commodi sapiente rem et adipisci. Officiis eligendi possimus qui nulla excepturi debitis quis dignissimos.', '513', '+6801445118', 'Předat nálepku', 'N', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1183, '63458', '63458.jpg', 'doc.', 'Havelková', NULL, NULL, 'Rudolf', 'doc.', '26', '46', 'libor.brazdova@example.com', '2023-01-12', '2023-01-10', 'Laudantium laborum est beatae. Ipsum dolores id assumenda et omnis placeat dolorem. Saepe pariatur eos sed suscipit cum mollitia enim.', '492', '+963809849775', 'Vrácena', 'N', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1184, '62297', '62297.jpg', 'Mgr.', 'Jánský', NULL, NULL, 'Šimon', 'MUDr.', '14', '50', 'wagnerova.dalibor@example.com', '2023-01-13', '2023-01-09', 'Neque quibusdam voluptatem excepturi accusantium sit minus. Debitis iste maiores autem voluptas. Quo ea libero aut incidunt non rerum est. Ut in aliquid laudantium autem tempora eveniet est.', '390', '+242946198549', 'Vrácena', 'A', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1185, '62212', '62212.jpg', 'Ing.', 'Bláha', NULL, NULL, 'Jaroslav', 'Ing.', '13', '71', 'marcela.vodrazka@example.com', '2023-01-03', '2023-01-08', 'Iusto eos quia qui et dignissimos consectetur quod. Aut ratione praesentium rerum omnis et omnis. Et mollitia aut ea hic ut quas voluptas.', '400', '+902333661409', 'Vytvořit kartu', 'N', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1186, '62587', '62587.jpg', 'PhDr.', 'Suchánek', NULL, NULL, 'Patrik', 'Mgr.', '26', '2', 'marta74@example.net', '2023-01-07', '2023-01-10', 'Fugit rem alias quasi atque. Maxime eius vel ab sed id perspiciatis quo. Molestias est odio et accusamus. Dolore optio libero aliquid commodi unde sint.', '370', '+2480310063', 'Předat nálepku', 'N', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1187, '63160', '63160.jpg', 'PhDr.', 'Němcová', NULL, NULL, 'Eva', 'Ing.', '6', '68', 'klara.stupkova@example.org', '2023-01-12', '2023-01-04', 'Nihil voluptatem nesciunt cumque recusandae possimus qui magni. Architecto sed enim aut distinctio est aspernatur. Voluptatem eius qui facilis commodi. Eaque non non voluptas occaecati nostrum.', '497', '+508468890729', 'Ok', 'A', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1188, '61405', '61405.jpg', 'doc.', 'Schwarzová', NULL, NULL, 'Miroslav', 'Mgr.', '13', '13', 'snedved@example.com', '2023-01-06', '2023-01-12', 'In necessitatibus alias veniam enim. Non placeat hic modi dolore. Suscipit excepturi voluptatem similique amet reprehenderit voluptatem nam.', '501', '+385589238455', 'Aktualizovat nálepku', 'A', 'HPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1189, '63763', '63763.jpg', 'Ing.', 'Kupka', NULL, NULL, 'Tereza', 'doc.', '22', '54', 'pavel90@example.com', '2023-01-07', '2023-01-05', 'Debitis hic molestias quia et ut. Magni et rerum nobis cumque. Expedita voluptatem aliquam sapiente dolore et est. Eligendi quo sapiente quos doloremque eos eius.', '385', '+94908036413', 'Vrácena', 'N', 'HPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1190, '63315', '63315.jpg', 'Bc.', 'Kvasničková', NULL, NULL, 'Blanka', 'Dr.', '14', '40', 'izelinka@example.org', '2023-01-04', '2023-01-03', 'Animi aut ea at voluptatem deleniti. Rerum odit et rerum nesciunt inventore. Ipsam porro qui commodi ipsum quis perferendis. Aliquam quo unde assumenda dignissimos beatae et voluptates.', '503', '+689927319721', 'Aktualizovat nálepku', 'N', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1191, '64380', '64380.jpg', 'doc.', 'Volková', NULL, NULL, 'Miloslava', 'Mgr.', '15', '61', 'robert78@example.com', '2023-01-04', '2023-01-04', 'Voluptatem blanditiis placeat dolorem. Beatae beatae omnis id officiis quia vero. Facilis maiores omnis voluptatem repudiandae non nihil pariatur dolorum. Magni sunt nulla cum sequi ut.', '515', '+390512105604', 'Aktualizovat nálepku', 'A', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1192, '61359', '61359.jpg', 'Dr.', 'Poláček', NULL, NULL, 'Ilona', 'doc.', '20', '41', 'robert57@example.org', '2023-01-03', '2023-01-12', 'Voluptatem eos perspiciatis ipsam. Illo autem beatae iusto qui et debitis. Soluta expedita assumenda sint repellat ut. Ad nihil vitae quaerat sed maxime quam.', '470', '+38696261589', 'Ok', 'N', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1193, '61848', '61848.jpg', 'doc.', 'Horváth', NULL, NULL, 'Jindřiška', 'PhDr.', '3', '42', 'cdanek@example.com', '2023-01-09', '2023-01-03', 'Ut aut temporibus assumenda vero pariatur delectus aliquam. Officia deserunt aut dolores enim sint dolores facere. Asperiores provident nulla minus et. Nesciunt ratione vel eum.', '422', '+354499001169', 'Ok', 'A', 'EVP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1194, '63669', '63669.jpg', 'MUDr.', 'Rada', NULL, NULL, 'Ivan', 'RNDr.', '5', '65', 'epeterka@example.org', '2023-01-04', '2023-01-12', 'Quam eligendi harum exercitationem amet est. Totam assumenda sed quisquam. Pariatur magni autem perferendis aut tempora adipisci earum.', '552', '+591537924843', 'Nový nástup', 'A', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1195, '61294', '61294.jpg', 'JUDr.', 'Zelená', NULL, NULL, 'Miloslav', 'Mgr.', '4', '35', 'ivan42@example.com', '2023-01-03', '2023-01-04', 'Accusantium dolorem vero corporis doloremque deserunt quibusdam. Eaque velit velit laudantium. Sit voluptatem aut et ut.', '397', '+88833546310469', 'Vrácena', 'A', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1196, '62080', '62080.jpg', 'RNDr.', 'Polášek', NULL, NULL, 'Lucie', 'RNDr.', '7', '35', 'daniela12@example.org', '2023-01-08', '2023-01-12', 'Facilis voluptas ipsa qui. Repellat inventore nulla omnis itaque dolore minima. Veniam beatae vero aliquam asperiores.', '432', '+962731506152', 'Ok', 'A', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1197, '61395', '61395.jpg', 'PhDr.', 'Kotrbová', NULL, NULL, 'Soňa', 'MVDr.', '26', '47', 'yprokopova@example.com', '2023-01-03', '2023-01-10', 'Unde qui aspernatur quia nam quo. Est mollitia tenetur error nam ea. Vero cum voluptatem molestiae dolorem. Quidem est ut iure perspiciatis similique.', '486', '+6785014416', 'Aktualizovat nálepku', 'N', 'DPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1198, '62588', '62588.jpg', 'JUDr.', 'Žák', NULL, NULL, 'Františka', 'MVDr.', '3', '13', 'hosek.nikola@example.com', '2023-01-03', '2023-01-09', 'Asperiores a ad laudantium velit ex dolore. Dolorum nihil maxime maiores voluptas officiis impedit accusamus. Et laboriosam doloremque doloremque commodi deleniti excepturi.', '439', '+261139340889', 'Ok', 'A', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1199, '64592', '64592.jpg', 'PhDr.', 'Homolka', NULL, NULL, 'Barbora', 'MVDr.', '25', '25', 'ruzena.zatloukal@example.org', '2023-01-15', '2023-01-09', 'Quisquam porro aut mollitia quo culpa sit qui. Et laudantium praesentium rerum alias exercitationem. Dolore ut corporis sed et eligendi.', '549', '+430357810110', 'Aktualizovat nálepku', 'A', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1200, '62275', '62275.jpg', 'doc.', 'Jelenová', NULL, NULL, 'Petr', 'MVDr.', '20', '65', 'simona.placek@example.com', '2023-01-04', '2023-01-02', 'Saepe sunt placeat ea debitis voluptatem. Dicta iste eligendi repellat quam iure. Eos ea incidunt laudantium quisquam incidunt. Laboriosam eum sunt atque exercitationem voluptatem quia vitae maxime.', '372', '+37370396815', 'Vrácena', 'N', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1201, '63417', '63417.jpg', 'JUDr.', 'Macková', NULL, NULL, 'Vít', 'doc.', '21', '35', 'milena.hrbek@example.org', '2023-01-15', '2023-01-14', 'Et fugit delectus voluptatibus animi consectetur commodi. Non voluptatibus cum iure maiores. Occaecati aut molestias facilis repellendus quibusdam.', '504', '+35602051326', 'Předat nálepku', 'A', 'ČSO', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1202, '64570', '64570.jpg', 'PhDr.', 'Pekařová', NULL, NULL, 'Stanislava', 'MUDr.', '17', '55', 'matyas.mala@example.com', '2023-01-07', '2023-01-13', 'Quis aliquam suscipit iure impedit reprehenderit. Blanditiis laborum harum dicta omnis odit sint ut. Provident doloremque et inventore sint.', '476', '+9648132795445', 'Nový nástup', 'A', 'HPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1203, '63387', '63387.jpg', 'Ing.', 'Máchová', NULL, NULL, 'Štěpánka', 'MUDr.', '6', '48', 'wsmrckova@example.org', '2023-01-15', '2023-01-13', 'Repudiandae rerum voluptas aut repudiandae asperiores. Eos quia eius libero magnam necessitatibus sit earum natus. Quas nihil doloribus maxime sed reiciendis eveniet qui.', '366', '+560961289565', 'Ok', 'A', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1204, '64681', '64681.jpg', 'RNDr.', 'Chromý', NULL, NULL, 'Radka', 'doc.', '24', '46', 'pcernohorsky@example.org', '2023-01-11', '2023-01-04', 'Autem cumque qui nobis optio. Et consequatur aut omnis minima sit culpa. Rerum id facilis est rerum excepturi neque.', '349', '+6808257016', 'Aktualizovat nálepku', 'A', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1205, '61182', '61182.jpg', 'Ing.', 'Jelínek', NULL, NULL, 'Roman', 'Mgr.', '22', '66', 'ppruchova@example.org', '2023-01-09', '2023-01-10', 'Voluptatem libero et totam quos et iure. Accusantium suscipit dolor eos nesciunt quis.', '379', '+423925743237', 'Vrácena', 'N', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1206, '64968', '64968.jpg', 'PhDr.', 'Zimová', NULL, NULL, 'Vasyl', 'Dr.', '1', '25', 'cibulka.ivo@example.com', '2023-01-07', '2023-01-10', 'Dolores quae molestiae unde. Et aliquid libero nesciunt molestiae. Inventore quo deleniti eos laboriosam quo magni harum. Fuga soluta dolore inventore eius ipsa ratione dignissimos.', '413', '+420340822329', 'Vrácena', 'N', 'ČSO', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1207, '63952', '63952.jpg', 'PhDr.', 'Bína', NULL, NULL, 'Natálie', 'Mgr.', '19', '37', 'iholubova@example.net', '2023-01-11', '2023-01-12', 'Omnis voluptate qui sit aliquid beatae. Doloremque esse consequatur facere soluta. Quos totam rerum sapiente asperiores cupiditate nobis. Fugit dolores assumenda voluptatem non facere et qui facere.', '425', '+221195210712', 'Vrácena', 'N', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1208, '61162', '61162.jpg', 'Mgr.', 'Duda', NULL, NULL, 'Nela', 'MVDr.', '28', '19', 'nhouska@example.org', '2023-01-13', '2023-01-07', 'Est natus quas placeat ea laborum. Adipisci aut in et error occaecati. Maiores optio dolor rerum.', '462', '+221534105483', 'Předat nálepku', 'N', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1209, '64439', '64439.jpg', 'Ing.', 'Peroutka', NULL, NULL, 'Františka', 'Ing.', '21', '4', 'rostislav06@example.org', '2023-01-04', '2023-01-15', 'Aut sit sequi enim impedit beatae ea sequi. Reiciendis sunt est a delectus. Nemo nisi molestiae temporibus a et a. Provident natus similique pariatur recusandae maxime dolorem omnis.', '418', '+38696993509', 'Aktualizovat nálepku', 'A', 'DPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1210, '63910', '63910.jpg', 'doc.', 'Valeš', NULL, NULL, 'Klára', 'doc.', '28', '61', 'simackova.dusan@example.net', '2023-01-02', '2023-01-07', 'Eius non doloribus harum voluptatem dolorum. Nihil modi dolorum delectus earum error. Sint et nihil aspernatur. Qui et facilis quisquam et est ut qui et.', '515', '+213803825594', 'Vrácena', 'N', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1211, '64567', '64567.jpg', 'JUDr.', 'Dlouhý', NULL, NULL, 'Dušan', 'Mgr.', '16', '57', 'alzbeta25@example.net', '2023-01-05', '2023-01-04', 'Autem est rerum aut autem iusto quia molestias. Voluptatem omnis earum ipsum. Veniam aspernatur voluptate non ullam eum et.', '369', '+88873414968613', 'Aktualizovat nálepku', 'N', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1212, '62718', '62718.jpg', 'Ing.', 'Müllerová', NULL, NULL, 'Oldřich', 'Ing.', '29', '68', 'fouskova.matej@example.net', '2023-01-02', '2023-01-05', 'Rerum aut dolorem id ratione nemo consectetur. Rerum dolores autem molestiae. Incidunt qui porro hic quas nihil sequi porro. Sit error impedit quam nemo.', '392', '+687196908', 'Vytvořit kartu', 'N', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1213, '63527', '63527.jpg', 'JUDr.', 'Nováček', NULL, NULL, 'Radek', 'Bc.', '16', '15', 'peskova.adam@example.net', '2023-01-05', '2023-01-09', 'Doloremque dolorem minus enim eligendi dignissimos. Animi exercitationem maiores sint doloribus. Voluptas commodi sapiente repudiandae earum. Corporis sed eos commodi et. Et est numquam qui.', '349', '+5984541817251', 'Nový nástup', 'N', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1214, '64304', '64304.jpg', 'Bc.', 'Dočekalová', NULL, NULL, 'Ladislav', 'Bc.', '31', '39', 'vitezslav82@example.net', '2023-01-09', '2023-01-11', 'Porro et doloremque incidunt et odio neque vel. Reiciendis non est est fuga. Quis in rerum magni porro. A hic sit et et porro est.', '455', '+431884281697', 'Aktualizovat nálepku', 'N', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1215, '62156', '62156.jpg', 'Mgr.', 'Plachá', NULL, NULL, 'Ludvík', 'doc.', '7', '6', 'jsvozil@example.com', '2023-01-13', '2023-01-11', 'Impedit nobis velit eum dolores ea blanditiis voluptates. Asperiores exercitationem quos rerum accusantium nemo maiores. Perspiciatis laborum culpa sit necessitatibus quia doloribus.', '521', '+6781861993', 'Nový nástup', 'A', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1216, '64588', '64588.jpg', 'MVDr.', 'Přikryl', NULL, NULL, 'Renáta', 'MVDr.', '28', '67', 'patrik.chaloupka@example.net', '2023-01-10', '2023-01-05', 'Deserunt ut iste eum rerum suscipit. Nam et explicabo velit consequatur tempora. Ut nam omnis dignissimos. Nemo odio qui animi amet.', '479', '+50411654581', 'Aktualizovat nálepku', 'N', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1217, '64048', '64048.jpg', 'Bc.', 'Kopečná', NULL, NULL, 'Robert', 'MUDr.', '1', '64', 'edokoupil@example.org', '2023-01-04', '2023-01-13', 'Labore quo neque quia eveniet eum et sapiente. Rem qui ut sint qui rerum explicabo minus. Et sed quod et alias qui. Quos amet recusandae veritatis porro accusantium eos a.', '544', '+36948471270', 'Vrácena', 'A', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1218, '62459', '62459.jpg', 'MUDr.', 'Pšeničková', NULL, NULL, 'Renáta', 'Dr.', '17', '6', 'holecek.jan@example.org', '2023-01-04', '2023-01-15', 'Illo modi itaque facere rerum blanditiis. Enim nihil eligendi aut et error dolorem assumenda. Incidunt hic magnam sunt ut. Mollitia consequatur eos asperiores beatae nam eius corporis.', '344', '+5018710441', 'Ok', 'N', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1219, '62689', '62689.jpg', 'RNDr.', 'Jonášová', NULL, NULL, 'Martina', 'doc.', '16', '10', 'fptackova@example.net', '2023-01-04', '2023-01-05', 'Sed voluptas voluptatem ut dolor eaque aut. Enim eos nihil dolorem eum aut amet error maxime. Fuga dolorem expedita non quis dicta. Soluta iure libero quis consequatur velit quis totam.', '478', '+5972604990', 'Vytvořit kartu', 'A', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1220, '61949', '61949.jpg', 'Bc.', 'Jíra', NULL, NULL, 'Denisa', 'Bc.', '13', '41', 'emilie38@example.net', '2023-01-05', '2023-01-15', 'Voluptatum sint dolor quis voluptates tempora aliquam. Eaque ducimus facere rem sed eveniet est. Vel dignissimos in magni.', '405', '+212190109924', 'Vrácena', 'A', 'EVP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1221, '61954', '61954.jpg', 'doc.', 'Chalupa', NULL, NULL, 'Richard', 'MUDr.', '14', '9', 'kamil.truhlarova@example.net', '2023-01-13', '2023-01-03', 'Ea labore animi odio blanditiis perspiciatis occaecati aliquam. Et quo maiores consequatur perferendis vel nostrum. Molestiae aut veniam dolores et rerum in.', '429', '+821932131069', 'Aktualizovat nálepku', 'A', 'EVP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1222, '63604', '63604.jpg', 'RNDr.', 'Kostka', NULL, NULL, 'Kryštof', 'Bc.', '15', '71', 'kala.ilona@example.net', '2023-01-10', '2023-01-11', 'Sit rerum voluptatum cupiditate cupiditate velit libero ipsum. Magni voluptatem a in voluptatem officia ab aut. Tenetur nostrum facere voluptatem sint modi fugiat sit est.', '528', '+6921984952', 'Vrácena', 'A', 'DPČ', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1223, '64076', '64076.jpg', 'JUDr.', 'Pokorný', NULL, NULL, 'Helena', 'JUDr.', '25', '1', 'jindriska29@example.com', '2023-01-05', '2023-01-16', 'Ipsum ut sint officia. Rerum fugit aut itaque. Nihil sunt possimus minima non. Ex debitis qui omnis molestiae.', '413', '+68271429', 'Nový nástup', 'A', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1224, '61424', '61424.jpg', 'Bc.', 'Havelka', NULL, NULL, 'Vlastimil', 'MVDr.', '10', '72', 'kabat.marketa@example.org', '2023-01-10', '2023-01-02', 'Corporis quisquam nisi ut beatae. Quia recusandae ex dolores minus ut id repellat. Aspernatur repellat est dolores eligendi. Harum dolorum ipsa sint facilis et quasi.', '533', '+67565319025', 'Aktualizovat nálepku', 'A', 'HPP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1225, '61074', '61074.jpg', 'MUDr.', 'Švarcová', NULL, NULL, 'Denisa', 'Bc.', '3', '7', 'ludvik55@example.org', '2023-01-12', '2023-01-02', 'Veritatis officia nemo et veritatis. Sit dolor laboriosam nemo a quae. Animi rerum voluptas dicta id placeat vitae nihil. At soluta eum sit aut laborum voluptatum quia.', '476', '+206202499637', 'Ok', 'A', 'ČSO', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1226, '64939', '64939.jpg', 'Mgr.', 'Vrbová', NULL, NULL, 'Michaela', 'Mgr.', '22', '42', 'miroslava03@example.com', '2023-01-06', '2023-01-09', 'Facere ipsam numquam quis ipsa fugit rerum reprehenderit saepe. Repellendus qui quisquam ut illum. Facilis earum nihil enim. Delectus consequatur iusto illo autem neque ut adipisci in.', '377', '+59999225663', 'Ok', 'A', 'DPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1227, '62412', '62412.jpg', 'doc.', 'Švehla', NULL, NULL, 'Petra', 'Dr.', '10', '38', 'novosad.dusan@example.net', '2023-01-03', '2023-01-14', 'Distinctio eos a hic minus. Porro amet saepe repellat rem qui eius commodi. Totam nisi qui velit exercitationem quis magnam est.', '484', '+22895494861', 'Ok', 'N', 'DPČ', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1228, '64226', '64226.jpg', 'Bc.', 'Medek', NULL, NULL, 'Eliška', 'RNDr.', '3', '26', 'filip96@example.com', '2023-01-02', '2023-01-04', 'Similique placeat explicabo dolorem veniam. Adipisci velit eveniet minima non dolore exercitationem eius. Quidem non eaque est non.', '518', '+596774984093', 'Předat nálepku', 'A', 'DPČ', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1229, '62077', '62077.jpg', 'Dr.', 'Kubeš', NULL, NULL, 'Rostislav', 'Ing.', '25', '42', 'jirina34@example.com', '2023-01-15', '2023-01-09', 'Porro id qui sequi maxime labore. Modi quod voluptatem velit ex nemo suscipit. Et adipisci fuga nulla id. Consequuntur aliquam qui eligendi.', '357', '+6802688604', 'Aktualizovat nálepku', 'N', 'EVP', NULL, 'Aktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1230, '62386', '62386.jpg', 'Bc.', 'Hrušková', NULL, NULL, 'Bohuslav', 'Mgr.', '12', '7', 'dana40@example.net', '2023-01-09', '2023-01-10', 'Minus iste ea asperiores rerum et veritatis tenetur. Rerum temporibus tenetur placeat fugiat qui. Vel quia natus reiciendis deleniti voluptatem occaecati.', '384', '+995453124201', 'Vytvořit kartu', 'A', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1231, '61169', '61169.jpg', 'MVDr.', 'Tomášková', NULL, NULL, 'Ludmila', 'Bc.', '5', '49', 'ruzena48@example.com', '2023-01-11', '2023-01-07', 'Et temporibus harum excepturi voluptates quia facere eaque. Odio qui exercitationem explicabo sequi et neque magni. Est eligendi optio ut sit.', '554', '+258037389121', 'Vrácena', 'N', 'HPP', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12'),
(1232, '64230', '64230.jpg', 'MVDr.', 'Fuchsová', NULL, NULL, 'Zdenka', 'RNDr.', '12', '8', 'bozena41@example.org', '2023-01-07', '2023-01-06', 'Officiis dolore quis aut consequuntur aliquam quo. Ut consequatur occaecati ut iure exercitationem voluptas cupiditate sint.', '485', '+689439589698', 'Nový nástup', 'N', 'ČSO', NULL, 'Neaktivní', '2023-01-09 06:04:12', '2023-01-09 06:04:12');
INSERT INTO `employees` (`id`, `personal_number`, `image`, `title_preffix`, `last_name`, `middle_name`, `married_name`, `first_name`, `title_suffix`, `department_id`, `job_id`, `email`, `start_date`, `end_date`, `comment`, `phone`, `mobile`, `id_card`, `coffee`, `employment`, `position`, `status`, `created_at`, `updated_at`) VALUES
(1233, '62022', '62022.jpg', 'MUDr.', 'Baranová', NULL, NULL, 'Josef', 'doc.', '17', '40', 'jan58@example.org', '2023-01-08', '2023-01-15', 'Quo quia magnam vel quis veritatis et. Dolorem quis eveniet molestiae voluptatem. Atque odit soluta dolores sunt.', '510', '+967708822818', 'Ok', 'A', 'HPP', NULL, 'Mateřská', '2023-01-09 06:04:12', '2023-01-09 06:04:12');

-- --------------------------------------------------------

--
-- Struktura tabulky `evidence`
--

CREATE TABLE `evidence` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `evidence_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `evidence_pieces` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `jobs`
--

INSERT INTO `jobs` (`id`, `job_title`) VALUES
(1, 'asistentka ředitele'),
(2, 'dohlížející osoba pro radiační činnost'),
(3, 'dokumentační pracovnice'),
(4, 'ekonomický náměstek'),
(5, 'ergoterapeut'),
(6, 'farmaceut'),
(7, 'farmaceutický asistent'),
(8, 'finanční účetní'),
(9, 'fyzioterapeut'),
(10, 'klinický logoped'),
(11, 'kuchař'),
(12, 'lékař'),
(13, 'manažer kvality, ústavní hygienik'),
(14, 'manažer léčby ran'),
(15, 'manažer vztahů s veřejností'),
(16, 'mzdová účetní'),
(17, 'náměstek pro ošetřovatelskou péči'),
(18, 'nezadáno'),
(19, 'nutriční terapeut'),
(20, 'ošetřovatel'),
(21, 'ošetřovatelka'),
(22, 'pokladní'),
(23, 'pomocnice na úklid'),
(24, 'pomocný pracovník'),
(25, 'pracovnice podatelny'),
(26, 'pracovnice spisovny/archivu'),
(27, 'pracovník rozvozu stravy'),
(28, 'pracovník údržby'),
(29, 'praktická sestra'),
(30, 'předseda dozorčí rady'),
(31, 'primář'),
(32, 'prodavačka'),
(33, 'provozně-technický náměstek'),
(34, 'provozní pracovník, vedoucí recepce'),
(35, 'radiologický asistent'),
(36, 'radiologický asistent, technik BOZP'),
(37, 'recepční'),
(38, 'ředitel, předseda představenstva'),
(39, 'revizní technik, energetik'),
(40, 'řidič'),
(41, 'sanitář'),
(42, 'sanitářka'),
(43, 'šéfkuchař'),
(44, 'skladnice'),
(45, 'správce počítačové sítě'),
(46, 'správce zdravotnických prostředků, metrolog'),
(47, 'staniční sestra'),
(48, 'technik IT'),
(49, 'tisková mluvčí'),
(50, 'učitel'),
(51, 'učitelka'),
(52, 'vedoucí CPM'),
(53, 'vedoucí farmaceut'),
(54, 'vedoucí finanční účtárny'),
(55, 'vedoucí fyzioterapeut'),
(56, 'vedoucí IT'),
(57, 'vedoucí kantýny'),
(58, 'vedoucí lékař'),
(59, 'vedoucí personálního a mzdového oddělení'),
(60, 'vedoucí radiologický asistent'),
(61, 'vedoucí stravovacího provozu'),
(62, 'vedoucí údržby'),
(63, 'vedoucí úklidu'),
(64, 'všeobecná sestra'),
(65, 'výkonová účetní'),
(66, 'vývojář, webmaster'),
(67, 'zástupce primáře'),
(68, 'zástupce stan. sestry'),
(69, 'zástupce vedoucího farmaceuta'),
(70, 'zdravotně sociální pracovnice'),
(71, 'zdravotní laborant'),
(72, 'nezařazeno');

-- --------------------------------------------------------

--
-- Struktura tabulky `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_10_31_054214_create_employees_table', 1),
(7, '2022_10_31_080147_create_departments_table', 1),
(8, '2022_11_02_121758_create_jobs_table', 1),
(9, '2022_11_14_070835_create_toners_table', 1),
(10, '2022_11_14_075215_create_evidence_table', 1),
(11, '2022_11_14_080256_create_printers_table', 1),
(12, '2022_11_22_184739_create_trainings_table', 2),
(13, '2022_11_22_185011_create_slides_table', 2),
(14, '2022_11_23_070339_create_attendances_table', 3),
(17, '2022_12_15_052046_create_adversevents_table', 5),
(20, '2023_01_07_200629_create_documents_table', 6),
(21, '2023_01_07_203151_create_addons_table', 6),
(22, '2022_12_14_084811_create_categories_table', 7);

-- --------------------------------------------------------

--
-- Struktura tabulky `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `printers`
--

CREATE TABLE `printers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `printer_vendor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `printer_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toner_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `training_id` int(11) NOT NULL,
  `slide_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `directory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `slides`
--

INSERT INTO `slides` (`id`, `training_id`, `slide_title`, `directory`, `path`, `position`, `created_at`, `updated_at`) VALUES
(1, 1, 'Slide-1', 'bozp', 'img_01.png', 1, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(2, 1, 'Slide-2', 'bozp', 'img_02.png', 2, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(3, 1, 'Slide-3', 'bozp', 'img_03.png', 3, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(4, 1, 'Slide-4', 'bozp', 'img_04.png', 4, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(5, 1, 'Slide-5', 'bozp', 'img_05.png', 5, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(6, 1, 'Slide-6', 'bozp', 'img_06.png', 6, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(7, 1, 'Slide-7', 'bozp', 'img_07.png', 7, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(8, 1, 'Slide-8', 'bozp', 'img_08.png', 8, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(9, 1, 'Slide-9', 'bozp', 'img_09.png', 9, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(10, 1, 'Slide-10', 'bozp', 'img_10.png', 10, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(11, 1, 'Slide-11', 'bozp', 'img_11.png', 11, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(12, 1, 'Slide-12', 'bozp', 'img_12.png', 12, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(13, 1, 'Slide-13', 'bozp', 'img_13.png', 13, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(14, 1, 'Slide-14', 'bozp', 'img_14.png', 14, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(15, 1, 'Slide-15', 'bozp', 'img_15.png', 15, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(16, 1, 'Slide-16', 'bozp', 'img_16.png', 16, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(17, 1, 'Slide-17', 'bozp', 'img_17.png', 17, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(18, 1, 'Slide-18', 'bozp', 'img_18.png', 18, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(19, 1, 'Slide-19', 'bozp', 'img_19.png', 19, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(20, 1, 'Slide-20', 'bozp', 'img_20.png', 20, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(21, 1, 'Slide-21', 'bozp', 'img_21.png', 21, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(22, 1, 'Slide-22', 'bozp', 'img_22.png', 22, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(23, 1, 'Slide-23', 'bozp', 'img_23.png', 23, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(24, 1, 'Slide-24', 'bozp', 'img_24.png', 24, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(25, 1, 'Slide-25', 'bozp', 'img_25.png', 25, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(26, 1, 'Slide-26', 'bozp', 'img_26.png', 26, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(27, 1, 'Slide-27', 'bozp', 'img_27.png', 27, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(28, 1, 'Slide-28', 'bozp', 'img_28.png', 28, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(29, 1, 'Slide-29', 'bozp', 'img_29.png', 29, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(30, 1, 'Slide-30', 'bozp', 'img_30.png', 30, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(31, 1, 'Slide-31', 'bozp', 'img_31.png', 31, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(32, 1, 'Slide-32', 'bozp', 'img_32.png', 32, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(33, 1, 'Slide-33', 'bozp', 'img_33.png', 33, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(34, 1, 'Slide-34', 'bozp', 'img_34.png', 34, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(35, 1, 'Slide-35', 'bozp', 'img_35.png', 35, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(36, 1, 'Slide-36', 'bozp', 'img_36.png', 36, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(37, 1, 'Slide-37', 'bozp', 'img_37.png', 37, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(38, 1, 'Slide-38', 'bozp', 'img_38.png', 38, '2022-11-23 05:04:16', '2022-11-23 05:04:16'),
(39, 1, 'Slide-39', 'bozp', 'img_39.png', 39, '2022-11-23 05:04:16', '2022-11-23 05:04:16');

-- --------------------------------------------------------

--
-- Struktura tabulky `toners`
--

CREATE TABLE `toners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `toner_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toner_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toner_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toner_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabulky `trainings`
--

CREATE TABLE `trainings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `trainings`
--

INSERT INTO `trainings` (`id`, `title`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Školení o požární ochraně pro zaměstnance KHN a.s.', 'BOZP', '2022-11-23 05:03:49', '2022-11-23 05:03:49');

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `personal_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`id`, `personal_number`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '63506', 'Pavlína Šandová', 'necasova.sona@example.net', '2022-11-18 05:43:27', '$2y$10$AqsAKUUb2NIQsH.NMzz1z.4Wtz5Vecz.tb6AK7rWABgUXkYZzKxyG', NULL, NULL, 'iYrL8fyMEwMVEamJQrWloFihTHj7DRVArjyBAPvw1qXrBgPIBQUoUFcILrc7', '2022-11-18 05:43:28', '2022-11-18 05:43:28'),
(2, '63059', 'MUDr. David Chudoba', 'milan.gruber@example.org', '2022-11-18 05:43:27', '$2y$10$dgwyuxvhC3WaNV3KbBZlZOYGmXyyAM0CjnoIq1Qd3KBTKVul1/LFC', NULL, NULL, 'wQ1MZss8K8RA6u4j83h0zzqWeyTBGmQ3Th8CTmkGiUKGsuUmYLcqgneTx9uv', '2022-11-18 05:43:28', '2022-11-18 05:43:28'),
(3, '61909', 'Dr. Stanislav Linhart', 'dokoupilova.viktor@example.com', '2022-11-18 05:43:27', '$2y$10$YJk4FCa7kQOZoEPSC9HtLOCpFA6R8LEFNVDw8lC6E.AJJimKTivUG', NULL, NULL, 'WSZurXymnEadefuEqUy4gxEqB3LvQAo9aKgjke6WGe7buZE6POfp8hsyBKe6', '2022-11-18 05:43:28', '2022-11-18 05:43:28'),
(4, '61496', 'Eduard Horký', 'jan.kristof@example.org', '2022-11-18 05:43:27', '$2y$10$ZvRbsxCkz20AaxSDmwhHF.sGQJU5u9fJWejhT98r8oU15Z40M4jIC', NULL, NULL, 'AklLYZ8m0vCcZGA7dk9oA6Y3MWfyb2mtmqjP0vIukKmxOBqub2TQSy9U3TGu', '2022-11-18 05:43:28', '2022-11-18 05:43:28'),
(5, '61659', 'Dr. Martina Zezulová', 'lacinova.lenka@example.net', '2022-11-18 05:43:27', '$2y$10$veNecZke3465ictw4A4ZHOo4EmKrtEIgE8.gOIsAWfSB9KeFs0tgS', NULL, NULL, 'L6z0zUVIzZUxhQBNrPOqFxnUgJisVwoqqqofxLe1V47Za7dD1YGV8wV7GhLm', '2022-11-18 05:43:28', '2022-11-18 05:43:28'),
(6, '62483', 'Martin Vaculík', 'zizka.adam@example.org', '2022-11-18 05:43:27', '$2y$10$NdiNsz4S0uRFd5nHI8qrneDaVKUCQ8q8jE513ekQclaFsf.AmljYa', NULL, NULL, 'nOgAvK9nET1SVFEuO44XnUJz6l1UUd6tsg4B9i93q1VSEz1V27DTGgqbWRvs', '2022-11-18 05:43:28', '2022-11-18 05:43:28'),
(7, '63672', 'MUDr. Karolína Horáčková', 'stanislav95@example.com', '2022-11-18 05:43:28', '$2y$10$WIQ8fKQcFxbkmMdiuaUdxuyzr5SPBGpWFsTBHo0LAPwc/rzAIOAAG', NULL, NULL, 'E3piMoqZUtiGlSncLzI0EgUSZi2yqOlqJzcWTYyDrmnSGUDp8ZE90DRXz96A', '2022-11-18 05:43:28', '2022-11-18 05:43:28'),
(8, '64972', 'Nikola Strouhalová', 'bergerova.richard@example.org', '2022-11-18 05:43:28', '$2y$10$kBYL3Bwmct3B.o6lj.J.1.nnrzXhHEmrY2EYjPR/VIae9k/O2a23a', NULL, NULL, 'sNML58S4eFReNYDqetuXQd1ahoGt5gif3y6yRadfbh4fKWVunEIQbhpUP06x', '2022-11-18 05:43:28', '2022-11-18 05:43:28'),
(9, '62768', 'Jiří Pešek', 'rsvabova@example.com', '2022-11-18 05:43:28', '$2y$10$SiseSQ6SsYEF5n1qpP4EcOjNlLpy.qHzVNL8CMvd0hfe2wnMgF91G', NULL, NULL, 'UTLLo7odytCUAl9fRZccz9G52MeBgZDL16BgrdkypMGVdicA7zDKbaMaAz4x', '2022-11-18 05:43:28', '2022-11-18 05:43:28'),
(10, '63557', 'Petra Křenková', 'fzahradnikova@example.net', '2022-11-18 05:43:28', '$2y$10$twersKh34.4hNQ/kldwC3euQV527uU8RrcdcsvDe.PeMYWBIM4L06', NULL, NULL, 'UmZvSQsU7SDytJj3kXZ0EHCX2jCKTtLisIq6baitOtgAjTskECmY9g24FUpI', '2022-11-18 05:43:28', '2022-11-18 05:43:28'),
(11, '61625', 'Klika Miroslav', 'klika@khn.cz', '2022-11-18 05:46:02', '$2y$10$empX/uQO0S0QX/ol4akRpu.6TH9dsqracAaCjsgbjgo7rjrWFoZDu', NULL, NULL, 'C3H8wIp1QPTsKdVZcttFvkqOfdhFzDMXVi5Ai1NURQ6GTRWt8dJzHGXFjMq4', '2022-11-18 05:45:01', '2022-11-18 05:46:02'),
(12, '61022', 'Mgr. Miluše Růžičková', 'sona.jelinek@example.net', '2023-01-09 06:04:12', '$2y$10$iyddg/MkjZfmLuxIW20V5.aTueC4/OuKPg4xs88P8nlu24xyihn2.', NULL, NULL, 'kqyg3eUiVZwYB9cKMC1KzbsKJ7e7GFexuQUVVT1rDp50yfQKRBBspJdorCqA', '2023-01-09 06:04:13', '2023-01-09 06:04:13'),
(13, '61996', 'Ludvík Kazda', 'jaromir70@example.com', '2023-01-09 06:04:12', '$2y$10$X7ceTbThuwyvU4A7kxvNkuPn0pTUGzpeaNAQdfJhtM7ILNXD2rr0a', NULL, NULL, 'mFUvoAnBPzcw3HALJk7ykSL41PYtbkyUPrDyybR6zrNIm590mpSAD1qF1ONB', '2023-01-09 06:04:13', '2023-01-09 06:04:13'),
(14, '62150', 'PhDr. Nikola Kudrnová', 'kriz.vladimira@example.com', '2023-01-09 06:04:12', '$2y$10$LrWU8FrHBnT72pz2vll6lek9moDucK22ZXWvALRt2EqPoTLYoB7Pa', NULL, NULL, 'ulshKujE6SlzpdkU3cnVmvybvHMA9YH9lGWsB5CGVJrr8ym5qMaJ7p3uOlzA', '2023-01-09 06:04:13', '2023-01-09 06:04:13'),
(15, '64205', 'Michal Vondrák', 'xfrydrychova@example.org', '2023-01-09 06:04:12', '$2y$10$wcXK342kmy1Bkyi/V2dRKud9t47oRjf4zlD9.YpaLaP/T4RJ0c5ju', NULL, NULL, 'KNaS2lrx7yi36b7cGfsYQCtxNzmq1yf5YL9DtQNWNMbpf2WUnRJoIfeEZofJ', '2023-01-09 06:04:13', '2023-01-09 06:04:13'),
(16, '63355', 'Šárka Vondráková', 'jirina25@example.org', '2023-01-09 06:04:12', '$2y$10$cQoOWdGkxziRaAADup3oVuPTbRQxQfzaoB6Sn0JNZcUsYrQE9EpZW', NULL, NULL, 'A8448FwSM4kHYli3aKa1YyCQC3VFgGRjnrDSQUEmyZEjS9I5i05ViAk9bTMz', '2023-01-09 06:04:13', '2023-01-09 06:04:13'),
(17, '61015', 'Roman Vaněk', 'jarmila55@example.com', '2023-01-09 06:04:12', '$2y$10$BFzp4WuNH5sRS7kqwNN9u.qvtYTpywcpJb2wChBiV8frB9U16lDZu', NULL, NULL, '4LWC1yPLsTadGugDonR2IB1yoKG8uEsaXdswNEApHvN0bVKMf4F2E8GKNyij', '2023-01-09 06:04:13', '2023-01-09 06:04:13'),
(18, '63447', 'Šimon Studnička', 'machac.jirina@example.org', '2023-01-09 06:04:12', '$2y$10$zolTOhJSGvi8QUM1qIOdAuSN5zMwaCx5J.ftWBAqiLzZ4jI0ICqau', NULL, NULL, 'Tox4Gp3AUCkrpS2IQTTJORL3ZIKaVVrfUpsGEOvd0YDfI6ZVB7A6GR7cGdXs', '2023-01-09 06:04:13', '2023-01-09 06:04:13'),
(19, '61666', 'Kryštof Berka', 'jansova.jaroslava@example.com', '2023-01-09 06:04:12', '$2y$10$lEESH1mynbDl/83RJZy4W.DJt13Nb.Z3mpwZuw2ZHyu2R4Spytpti', NULL, NULL, 'Y6kyuRMcBLfYYjtgIsw8bqFjeFqeMtYkSajezc6758fthpAKLjfIwCgzDPRz', '2023-01-09 06:04:13', '2023-01-09 06:04:13'),
(20, '61080', 'Miloš Kalina', 'vydra.olga@example.org', '2023-01-09 06:04:13', '$2y$10$Jhj8VERfGTLlZRJX//qj2.FVcTtK9k8P5A2QeXBp.zkW5MgRUkYx6', NULL, NULL, 'mrtc5kiEp1BkXuTRSYxaJUAeOPhaiIHYnhPfrFFROdsm2IGmvACI8xV8JMdg', '2023-01-09 06:04:13', '2023-01-09 06:04:13'),
(21, '62263', 'Adam Matuška', 'zdenka52@example.com', '2023-01-09 06:04:13', '$2y$10$OSk5o1tmAjevC.rSkg0DM./jcfSqglVZSGSD77ll8YIiZgFI.Y7Ta', NULL, NULL, 'pm21ll8UIr21q8wmFzQxexGieoQ90HOAODSj9o93fTaWpI5KheWYYfByMrxN', '2023-01-09 06:04:13', '2023-01-09 06:04:13');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `adversevents`
--
ALTER TABLE `adversevents`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `evidence`
--
ALTER TABLE `evidence`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexy pro tabulku `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexy pro tabulku `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexy pro tabulku `printers`
--
ALTER TABLE `printers`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `toners`
--
ALTER TABLE `toners`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_personal_number_unique` (`personal_number`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `addons`
--
ALTER TABLE `addons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pro tabulku `adversevents`
--
ALTER TABLE `adversevents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pro tabulku `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pro tabulku `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pro tabulku `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pro tabulku `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234;

--
-- AUTO_INCREMENT pro tabulku `evidence`
--
ALTER TABLE `evidence`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT pro tabulku `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pro tabulku `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `printers`
--
ALTER TABLE `printers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pro tabulku `toners`
--
ALTER TABLE `toners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
