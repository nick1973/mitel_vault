-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2016 at 04:01 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitel_quote_tool`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigned_roles`
--

CREATE TABLE `assigned_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `assigned_roles`
--

INSERT INTO `assigned_roles` (`id`, `user_id`, `role_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(4, 3, 1),
(5, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `bt_peripherals`
--

CREATE TABLE `bt_peripherals` (
  `id` int(10) UNSIGNED NOT NULL,
  `supplier_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bt_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `btbuy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `max_discount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quote_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `xfer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bteup` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `one_yr_standard_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `one_yr_prompt_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `one_yr_total_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `three_yr_standard_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `three_yr_prompt_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `three_yr_total_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `five_yr_standard_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `five_yr_prompt_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `five_yr_total_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pbx_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hardware_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bundles`
--

CREATE TABLE `bundles` (
  `id` int(10) UNSIGNED NOT NULL,
  `supplier_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bt_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `btbuy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `max_discount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quote_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bundle_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `xfer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bteup` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `one_yr_standard_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `one_yr_prompt_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `one_yr_total_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `three_yr_standard_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `three_yr_prompt_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `three_yr_total_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `five_yr_standard_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `five_yr_prompt_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `five_yr_total_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pbx_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hardware_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hardware`
--

CREATE TABLE `hardware` (
  `id` int(10) UNSIGNED NOT NULL,
  `supplier_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bt_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `btbuy` decimal(12,2) NOT NULL,
  `max_discount` decimal(12,2) NOT NULL,
  `quote_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `xfer` decimal(12,2) NOT NULL,
  `bteup` decimal(12,2) NOT NULL,
  `qty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `one_yr_standard_care` decimal(12,2) NOT NULL,
  `one_yr_prompt_care` decimal(12,2) NOT NULL,
  `one_yr_total_care` decimal(12,2) NOT NULL,
  `three_yr_standard_care` decimal(12,2) NOT NULL,
  `three_yr_prompt_care` decimal(12,2) NOT NULL,
  `three_yr_total_care` decimal(12,2) NOT NULL,
  `five_yr_standard_care` decimal(12,2) NOT NULL,
  `five_yr_prompt_care` decimal(12,2) NOT NULL,
  `five_yr_total_care` decimal(12,2) NOT NULL,
  `pbx_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hardware_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hardware`
--

INSERT INTO `hardware` (`id`, `supplier_ref`, `bt_ref`, `btbuy`, `max_discount`, `quote_type`, `name`, `description`, `item_code`, `xfer`, `bteup`, `qty`, `one_yr_standard_care`, `one_yr_prompt_care`, `one_yr_total_care`, `three_yr_standard_care`, `three_yr_prompt_care`, `three_yr_total_care`, `five_yr_standard_care`, `five_yr_prompt_care`, `five_yr_total_care`, `pbx_type`, `hardware_category`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '50005184', 'B25518', '0.00', '0.00', '', 'ANALOG MAIN BRD III', '', '044295', '167.50', '335.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(2, '50004070', 'B29037', '0.00', '0.00', '', 'QUAD BRI MMC', '', '048644', '237.50', '475.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(3, '50005160', 'B29039', '0.00', '0.00', '', 'T1/E1 COMBO MMC II', '', '048646', '315.00', '630.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(4, '50003560', 'B17850', '0.00', '0.00', '', 'DUAL T1/E1 TRUNK MMC', '', '028465', '472.50', '945.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(5, '50005751', 'B31445', '0.00', '0.00', '', 'DSP  II MMC', '', '050462', '377.50', '755.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(6, '50002979', 'B17937', '0.00', '0.00', '', 'Quad DSP MMC', '', '027422', '345.00', '690.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(7, '50005105', 'B18990', '0.00', '0.00', '', 'ASU II', '', '030742', '220.00', '440.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(8, '50005731', 'B18991', '0.00', '0.00', '', '24 port ONSp card', '', '050497', '270.00', '540.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(9, '50005441', 'B20445', '0.00', '0.00', '', '3300 AX Controller 4GIG Voice Mail Flash Drive', '', '036838', '135.00', '160.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(10, '50005612', 'B17751', '0.00', '0.00', '', 'PWR CRD C13 5A 250V - UK PLUG (5A FUSE)', '', '028455', '11.90', '14.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(11, '51000582', 'B22889', '0.00', '0.00', '', 'PWR CRD C7 2.5A 250V-UK PLUG 3AFUSE(Mains Lead)', '', '039668', '3.40', '4.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(12, '51004990', 'B38443', '0.00', '0.00', '', 'MCD PWR CRD C7 2.5A 250V-EURO PLUG', '', '062879', '1.35', '1.50', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(13, 'MW404AA', 'B33790', '0.00', '0.00', '', 'Cable RJ45 to 2 x BNC', '', '056518', '65.00', '130.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(14, '50006587', 'B42646', '0.00', '0.00', '', 'HDMI Custom Cable (10 Feet) ', '', '076108', '0.00', '32.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(15, '50005182', 'B20450', '0.00', '0.00', '', '3300 AX AC POWER SUPPLY 300W', '', '036845', '157.50', '315.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(16, '51015352', 'B33969', '0.00', '0.00', '', '3300 AMB/AOB Connection Unit', '', '050433', '45.00', '50.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(17, '51301151', 'B42644', '0.00', '0.00', '', 'Gb 802.3at Power Adapter Universal (90-264 VDC) (50-60 Hz)', '', '076106', '0.00', '76.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(18, '50005091', 'B20361', '0.00', '0.00', '', 'ASU II AC POWER SUPPLY', '', '036743', '97.50', '195.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(19, '50005300', 'B20364', '0.00', '0.00', '', '24VDC IP PWR ADPT 100-240V 50-60HZ(', '', '036746', '19.80', '22.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(20, '50006593', 'B42648', '0.00', '0.00', '', 'StreamLine Unit - 24 port', '', '076120', '1072.50', '1650.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(21, '50006594', 'B42649', '0.00', '0.00', '', 'StreamLine Unit - 48 port', '', '076121', '1745.25', '2685.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(22, '50006596', 'B42651', '0.00', '0.00', '', 'StreamLine Dongle BS6312 (BT) Kit - 6 Pack', '', '076123', '0.00', '25.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(23, '51300751', 'B42652', '0.00', '0.00', '', '50 Port System Harness', '', '076124', '0.00', '115.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(24, '51300752', 'B42653', '0.00', '0.00', '', '100 Port System Harness', '', '076125', '0.00', '200.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(25, '51300753', 'B42654', '0.00', '0.00', '', '200 Port System Harness', '', '076126', '0.00', '400.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(26, '51300754', 'B42655', '0.00', '0.00', '', '5m M-F System Cable', '', '076127', '0.00', '32.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(27, '51300836', 'B42656', '0.00', '0.00', '', '10m M-F System Cable', '', '076128', '0.00', '47.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(28, '51300837', 'B42657', '0.00', '0.00', '', '15m M-F System Cable', '', '076129', '0.00', '57.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(29, '50006634', 'B47319', '0.00', '0.00', '', '5320e Backlite Set', '', '84052', '0.00', '215.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(30, '52002724', 'B37855', '0.00', '0.00', '', 'MCD MAS Server Appliance BT', '', '064082', '0.00', '2300.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(31, '50006619', '', '0.00', '0.00', '', 'StreamLine - 8 port w Dongles x2', '', '', '0.00', '310.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(32, '50006620', '', '0.00', '0.00', '', 'StreamLine Power Supply for 8 Port', '', '', '0.00', '85.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(33, '50006644', '', '0.00', '0.00', '', 'StreamLine Dongle II - 6 Pack', '', '', '0.00', '290.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(34, '9132-800-208-NA', 'B17741', '0.00', '0.00', '', 'HANDSET CORD 3.0M 25PK DARK GREY', '', '028446', '26.00', '52.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:36:13', '2016-04-27 13:36:13', NULL),
(35, '', '', '8.00', '0.00', '', 'Bundle1', '', '', '0.00', '9.00', '', '2.00', '3.00', '4.00', '5.00', '6.00', '7.00', '8.00', '9.00', '0.00', '', '', '2016-05-04 07:46:16', '2016-05-04 07:46:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_12_28_171741_create_social_logins_table', 1),
('2015_12_29_015055_setup_access_tables', 1),
('2016_03_29_143717_product_table', 1),
('2016_03_31_095127_system_matrix_table', 1),
('2016_04_26_085635_hardware_table', 1),
('2016_04_26_085649_software_table', 1),
('2016_04_26_085702_terminals_table', 1),
('2016_04_26_085717_servers_table', 1),
('2016_04_26_085732_lan_data_table', 1),
('2016_04_26_085803_training_table', 1),
('2016_04_26_085813_install_table', 1),
('2016_04_26_095328_bundle_table', 1),
('2016_04_27_093335_Mivb_Peripherals_table', 2),
('2016_04_27_113754_BT_Peripherals_table', 3),
('2016_05_03_135601_create_mitel_bundle_table', 4),
('2016_05_03_141519_create_mitelbundle_products_table', 4),
('2016_05_19_150403_CreateProduct_TerminalupgradeTable', 5),
('2016_05_20_072951_CreateProduct_UpgradeTable', 6);

-- --------------------------------------------------------

--
-- Table structure for table `mitelbundles`
--

CREATE TABLE `mitelbundles` (
  `id` int(10) UNSIGNED NOT NULL,
  `analogue_lines` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bri_lines` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pri_lines` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sip_lines` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `users` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `standard_license` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `multi_user_license` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vm_license` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ucc_basic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ucc_entry` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ucc_standard` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ucc_premium` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lan_ports` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `standalone_sw` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enterprise_sw` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supplier_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bt_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `btbuy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `max_discount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discount_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quote_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bundle_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `xfer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bteup` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `one_yr_standard_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `one_yr_prompt_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `one_yr_total_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `three_yr_standard_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `three_yr_prompt_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `three_yr_total_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `five_yr_standard_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `five_yr_prompt_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `five_yr_total_care` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mitelbundles`
--

INSERT INTO `mitelbundles` (`id`, `analogue_lines`, `bri_lines`, `pri_lines`, `sip_lines`, `users`, `standard_license`, `multi_user_license`, `vm_license`, `ucc_basic`, `ucc_entry`, `ucc_standard`, `ucc_premium`, `lan_ports`, `standalone_sw`, `enterprise_sw`, `supplier_ref`, `bt_ref`, `btbuy`, `max_discount`, `discount_status`, `quote_type`, `bundle_name`, `name`, `description`, `item_code`, `xfer`, `bteup`, `qty`, `one_yr_standard_care`, `one_yr_prompt_care`, `one_yr_total_care`, `three_yr_standard_care`, `three_yr_prompt_care`, `three_yr_total_care`, `five_yr_standard_care`, `five_yr_prompt_care`, `five_yr_total_care`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '0', '8', '0', '2', '16', '12', '4', '16', '1', '2', '3', '4', '0', '6', '7', 'bundle1', 'B42408', '10.00', '10', 'Discountable', '', '', 'MiVoice 16 USER CX (BRI)', '', 'bundle1', '', '20.00', '1', '10', '18', '24', '10', '15', '20', '8', '12', '16', '2016-05-04 07:49:52', '2016-06-02 11:07:38', NULL),
(2, '0', '0', '30', '2', '16', '12', '4', '16', '', '', '', '', '0', '', '', 'bundle2', 'B42409', '20.00', '10', 'Discountable', '', '', 'MiVoice 16 USER CX (PRI)', '', 'bundle2', '', '40', '1', '12', '18', '24', '10', '15', '20', '8', '12', '16', '2016-05-05 10:47:09', '2016-06-02 11:09:54', NULL),
(4, '0', '0', '0', '15', '16', '12', '4', '16', '', '', '', '', '0', '', '', 'bundle3', 'B45578', '30.00', '10', 'Discountable', '', '', 'MiVoice 16 USER CX (SIP)', '', 'bundle3', '', '60.00', '1', '12', '18', '24', '10', '15', '20', '8', '12', '16', '2016-06-03 09:33:14', '2016-06-03 09:36:01', NULL),
(5, '0', '8', '0', '2', '16', '12', '4', '16', '', '', '', '', '24', '', '', 'bundle1A', 'B42410', '40', '10', 'Discountable', '', '', 'MiVoice 16 USER CX (BRI) 24 Port LAN', '', 'bundle1A', '', '80', '1', '12', '18', '24', '10', '15', '20', '8', '12', '16', '2016-06-03 10:50:07', '2016-06-03 10:51:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mitelbundle_product`
--

CREATE TABLE `mitelbundle_product` (
  `product_id` int(11) NOT NULL,
  `mitelbundle_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mitelbundle_product`
--

INSERT INTO `mitelbundle_product` (`product_id`, `mitelbundle_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2016-05-06 08:01:18', '2016-05-06 08:01:18'),
(5, 1, '2016-05-10 14:24:24', '2016-05-10 14:24:24'),
(11, 1, '2016-05-06 08:58:14', '2016-05-06 08:58:14'),
(15, 1, '2016-05-06 11:21:00', '2016-05-06 11:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `mivb_peripherals`
--

CREATE TABLE `mivb_peripherals` (
  `id` int(10) UNSIGNED NOT NULL,
  `supplier_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bt_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `btbuy` decimal(12,2) NOT NULL,
  `max_discount` decimal(12,2) NOT NULL,
  `quote_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `xfer` decimal(12,2) NOT NULL,
  `bteup` decimal(12,2) NOT NULL,
  `qty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `one_yr_standard_care` decimal(12,2) NOT NULL,
  `one_yr_prompt_care` decimal(12,2) NOT NULL,
  `one_yr_total_care` decimal(12,2) NOT NULL,
  `three_yr_standard_care` decimal(12,2) NOT NULL,
  `three_yr_prompt_care` decimal(12,2) NOT NULL,
  `three_yr_total_care` decimal(12,2) NOT NULL,
  `five_yr_standard_care` decimal(12,2) NOT NULL,
  `five_yr_prompt_care` decimal(12,2) NOT NULL,
  `five_yr_total_care` decimal(12,2) NOT NULL,
  `pbx_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hardware_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mivb_peripherals`
--

INSERT INTO `mivb_peripherals` (`id`, `supplier_ref`, `bt_ref`, `btbuy`, `max_discount`, `quote_type`, `name`, `description`, `item_code`, `xfer`, `bteup`, `qty`, `one_yr_standard_care`, `one_yr_prompt_care`, `one_yr_total_care`, `three_yr_standard_care`, `three_yr_prompt_care`, `three_yr_total_care`, `five_yr_standard_care`, `five_yr_prompt_care`, `five_yr_total_care`, `pbx_type`, `hardware_category`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '51011572', 'B38409', '0.00', '0.00', '', 'MCD 5304 IP Phone Hospitality Kit', '', '062895', '13.00', '26.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(2, '50006580', 'B42642', '0.00', '0.00', '', 'UC360 Collab Pt (Audio + In Room Collab)', '', '076104', '312.50', '625.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(3, '50004198', 'B22899', '0.00', '0.00', '', 'Mitel Line Interface Module (UK)', '', '039666', '47.50', '95.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(4, '50005402', 'B25504', '0.00', '0.00', '', 'Cordless Accessories Module (EURO)', '', '044283', '0.00', '115.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(5, '50005403', 'B25506', '0.00', '0.00', '', 'Cordless Handset w/Charging Plate (EURO)', '', '044282', '0.00', '125.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(6, '50005404', 'B25507', '0.00', '0.00', '', 'Cordless Headset w/Charging Cradle(EURO)', '', '044284', '0.00', '185.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(7, '50005713', 'B25508', '0.00', '0.00', '', 'CORDLESS HANDSET & MODULE', '', '044285', '0.00', '180.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(8, '50005714', 'B25509', '0.00', '0.00', '', 'CORDLESS HEADSET & MODULE', '', '044286', '0.00', '245.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(9, '50005230', 'B20362', '0.00', '0.00', '', '5300 SERIES WIDEBAND HANDSET (25 PA', '', '036744', '140.00', '280.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(10, '50005231', 'B20363', '0.00', '0.00', '', '5300 Series Handset (25 Pack)', '', '036745', '140.00', '280.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(11, '50005662', 'B38690', '0.00', '0.00', '', 'MCD IP PKM Interface Module (v2)', '', '062847', '28.50', '57.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(12, '51015131', 'B37773', '0.00', '0.00', '', 'MCD Universal Terminal Power Adaptor', '', '062900', '0.00', '22.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(13, '52002842', '', '0.00', '0.00', '', 'MiVoice Business Console Bundle', '', '', '0.00', '1146.60', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(14, '51219829', '', '0.00', '0.00', '', 'iCharge - CUB Base License ', '', '', '0.00', '1516.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(15, '51219830', '', '0.00', '0.00', '', 'iCharge - CUB  1 Room License', '', '', '0.00', '8.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(16, '51220418', '', '0.00', '0.00', '', 'iCharge Cub Base License Expansion ', '', '', '0.00', '130.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(17, '51220419', '', '0.00', '0.00', '', 'iCharge Cub 1 Room License Expansion ', '', '', '0.00', '10.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(18, '51221287', '', '0.00', '0.00', '', 'On-Site or Remote Installation / Day or Training per day', '', '', '0.00', '866.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(19, 'NA', '', '0.00', '0.00', '', 'Faceplates x 10', '', '', '0.00', '110.25', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(20, 'NA', '', '0.00', '0.00', '', 'Faceplates x 25', '', '', '0.00', '198.45', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(21, 'NA', '', '0.00', '0.00', '', 'Faceplates x 50', '', '', '0.00', '253.58', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(22, 'NA', '', '0.00', '0.00', '', 'Faceplates x 100', '', '', '0.00', '281.14', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(23, 'NA', '', '0.00', '0.00', '', 'Additional Faceplate', '', '', '0.00', '0.94', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(24, 'NA', '', '0.00', '0.00', '', 'Faceplating & Programming', '', '', '0.00', '4.41', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(25, 'NA', '', '0.00', '0.00', '', '3100Lobby  - Analogue, 1 Line, No buttons, Non-Speaker', '', '', '0.00', '17.23', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(26, 'NA', '', '0.00', '0.00', '', '3100MWB  - Analogue, 1 Line, normal keypad, Non-Speaker', '', '', '0.00', '17.23', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(27, 'NA', '', '0.00', '0.00', '', '3100MW3 - Analogue, 1 Line, 3 buttons, Non-Speaker', '', '', '0.00', '17.23', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(28, 'NA', '', '0.00', '0.00', '', '3100MW5 - Analogue, 1 Line, 5 buttons, Non-Speaker', '', '', '0.00', '17.23', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(29, 'NA', '', '0.00', '0.00', '', '3100MW10 - Analogue, 1 Line, 10 buttons, Non-Speaker', '', '', '0.00', '17.82', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(30, 'NA', '', '0.00', '0.00', '', '3100MWD3 - Analogue, 1 Line, 3 buttons, Speaker', '', '', '0.00', '21.98', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(31, 'NA', '', '0.00', '0.00', '', '3100MWD5 - Analogue, 1 Line, 5 buttons, Speaker', '', '', '0.00', '21.98', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(32, 'NA', '', '0.00', '0.00', '', '3100MWD - Analogue, 1 Line, 10 buttons, Speaker', '', '', '0.00', '22.87', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(33, 'NA', '', '0.00', '0.00', '', '3102MWD5  - Analogue, 2 Line, 5 buttons, Speaker', '', '', '0.00', '40.40', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(34, 'NA', '', '0.00', '0.00', '', '3102MWD - Analogue, 2 Line, 10 buttons, Speaker', '', '', '0.00', '41.58', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(35, 'NA', '', '0.00', '0.00', '', '3300Lobby - Analogue, 1 Line, No buttons, Non-Speaker', '', '', '0.00', '28.92', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(36, 'NA', '', '0.00', '0.00', '', '3300MWB - Analogue, 1 Line, normal keypad, Non-Speaker', '', '', '0.00', '25.35', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(37, 'NA', '', '0.00', '0.00', '', '3300MW3 -  Analogue, 1 Line, 3 buttons, Non-Speaker', '', '', '0.00', '26.98', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(38, 'NA', '', '0.00', '0.00', '', '3300MW5 - Analogue, 1 Line, 5 buttons, Non-Speaker', '', '', '0.00', '28.92', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(39, 'NA', '', '0.00', '0.00', '', '3300MW10  - Analogue, 1 Line, 10 buttons, Non-Speaker', '', '', '0.00', '30.55', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(40, 'NA', '', '0.00', '0.00', '', '3300MWD3 -  Analogue, 1 Line, 3 buttons, Speaker', '', '', '0.00', '32.73', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(41, 'NA', '', '0.00', '0.00', '', '3300MWD5 -  Analogue, 1 Line, 5 buttons, Speaker', '', '', '0.00', '34.36', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(42, 'NA', '', '0.00', '0.00', '', '3300MWD -  Analogue, 1 Line, 10 buttons, Speaker', '', '', '0.00', '36.30', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(43, 'NA', '', '0.00', '0.00', '', '3302MWD5  -  Analogue, C86 Line, 5 buttons, Speaker', '', '', '0.00', '52.51', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(44, 'NA', '', '0.00', '0.00', '', '3302MWD -  Analogue, 2 Line, 3 buttons, Speaker', '', '', '0.00', '54.27', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(45, 'NA', '', '0.00', '0.00', '', 'Trim 1L - Slimline phone with 1 line.  Key pad in handset.', '', '', '0.00', '18.27', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(46, 'NA', '', '0.00', '0.00', '', 'Trim 2L - Slimline phone with 2 lines.  Key pad in handset.', '', '', '0.00', '28.74', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(47, 'NA', '', '0.00', '0.00', '', '9600MWD5  - Analogue Phone, 1 Line, 5 Button, Speaker', '', '', '0.00', '89.42', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(48, 'NA', '', '0.00', '0.00', '', '9600MWD - Analogue Phone, 1 Line, 10 Button, Speaker', '', '', '0.00', '90.75', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(49, 'NA', '', '0.00', '0.00', '', '9602MWD5 - Analogue Phone, 2 Line, 5 Button, Speaker', '', '', '0.00', '94.74', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(50, 'NA', '', '0.00', '0.00', '', '9602MWD - Analogue Phone, 2 Line, 10 Button, Speaker', '', '', '0.00', '96.38', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(51, 'NA', '', '0.00', '0.00', '', 'Xtra Handsets (9600MWD5)', '', '', '0.00', '49.97', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(52, 'NA', '', '0.00', '0.00', '', 'Xtra Handsets (9600MWD)', '', '', '0.00', '49.97', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(53, 'NA', '', '0.00', '0.00', '', 'Xtra Handsets (9602MWD5 & MWD)', '', '', '0.00', '53.97', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(54, 'NA', '', '0.00', '0.00', '', '3300TRM-IP - Slimline IP phone with 1 line.  Key pad in the base.', '', '', '0.00', '40.54', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(55, 'NA', '', '0.00', '0.00', '', '3302TRM-IP  - Slimline IP phone with 2 lines.  Key pad in the base.', '', '', '0.00', '45.07', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(56, 'NA', '', '0.00', '0.00', '', '3300IP-Lobby - SIP Phone, 1 Line, No buttons, Speaker', '', '', '0.00', '58.26', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(57, 'NA', '', '0.00', '0.00', '', '3300IP-MWD5 -  SIP Phone, 1 Line, 5 buttons, Speaker', '', '', '0.00', '58.26', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(58, 'NA', '', '0.00', '0.00', '', '3300IP-MWD - SIP Phone, 1 Line, 10 buttons, Speaker', '', '', '0.00', '60.20', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(59, 'NA', '', '0.00', '0.00', '', '3302IP-MWD5 -  SIP Phone, 2 Line, 5 buttons, Speaker', '', '', '0.00', '62.01', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(60, 'NA', '', '0.00', '0.00', '', '3302IP-MWD -  SIP Phone, 2 Line, 10 buttons, Speaker', '', '', '0.00', '63.95', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(61, 'NA', '', '0.00', '0.00', '', '9600IP-MWD5 DECT - Cordless, 5 Button, 1 Line, Speaker', '', '', '0.00', '132.19', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(62, 'NA', '', '0.00', '0.00', '', '9600IP-MWD DECT  - Cordless, 10 Button, 1 Line, Speaker', '', '', '0.00', '133.83', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(63, 'NA', '', '0.00', '0.00', '', 'Multiple Handset Accessory Kit', '', '', '0.00', '60.02', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(64, 'NA', '', '0.00', '0.00', '', '9602IP-MWD5 DECT- Cordless, 5 Button, 2 Line, Speaker', '', '', '0.00', '127.53', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(65, 'NA', '', '0.00', '0.00', '', '9602IP-MWD DECT  - Cordless, 5 Button, 2 Line, Speaker', '', '', '0.00', '129.17', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(66, 'NA', '', '0.00', '0.00', '', 'Multiple Handset Accessory Kit', '', '', '0.00', '58.75', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(67, 'NA', '', '0.00', '0.00', '', 'Wallbrackets', '', '', '0.00', '6.66', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(68, 'NA', '', '0.00', '0.00', '', 'Line Cords', '', '', '0.00', '4.84', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(69, 'NA', '', '0.00', '0.00', '', 'Plastics', '', '', '0.00', '2.12', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(70, 'NA', '', '0.00', '0.00', '', 'Curly Cords ', '', '', '0.00', '4.84', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(71, 'NA', '', '0.00', '0.00', '', 'Handsets Corded', '', '', '0.00', '13.31', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(72, 'NA', '', '0.00', '0.00', '', 'Handsets DECT', '', '', '0.00', '42.35', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(73, 'NA', '', '0.00', '0.00', '', 'Colour Inserts', '', '', '0.00', '7.87', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(74, 'NA', '', '0.00', '0.00', '', '9600/9602 Battery', '', '', '0.00', '8.47', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL),
(75, 'NA', '', '0.00', '0.00', '', '9600/9602 Power Supply ', '', '', '0.00', '13.31', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 14:20:21', '2016-04-27 14:20:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `system` tinyint(1) NOT NULL DEFAULT '0',
  `sort` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `group_id`, `name`, `display_name`, `system`, `sort`, `created_at`, `updated_at`) VALUES
(1, 1, 'view-backend', 'View Backend', 1, 1, '2016-04-26 14:31:08', '2016-04-26 14:31:08'),
(2, 1, 'view-access-management', 'View Access Management', 1, 2, '2016-04-26 14:31:08', '2016-04-26 14:31:08'),
(3, 2, 'create-users', 'Create Users', 1, 5, '2016-04-26 14:31:08', '2016-04-26 14:31:08'),
(4, 2, 'edit-users', 'Edit Users', 1, 6, '2016-04-26 14:31:08', '2016-04-26 14:31:08'),
(5, 2, 'delete-users', 'Delete Users', 1, 7, '2016-04-26 14:31:08', '2016-04-26 14:31:08'),
(6, 2, 'change-user-password', 'Change User Password', 1, 8, '2016-04-26 14:31:08', '2016-04-26 14:31:08'),
(7, 2, 'deactivate-users', 'Deactivate Users', 1, 9, '2016-04-26 14:31:08', '2016-04-26 14:31:08'),
(8, 2, 'reactivate-users', 'Re-Activate Users', 1, 11, '2016-04-26 14:31:08', '2016-04-26 14:31:08'),
(9, 2, 'undelete-users', 'Restore Users', 1, 13, '2016-04-26 14:31:08', '2016-04-26 14:31:08'),
(10, 2, 'permanently-delete-users', 'Permanently Delete Users', 1, 14, '2016-04-26 14:31:08', '2016-04-26 14:31:08'),
(11, 2, 'resend-user-confirmation-email', 'Resend Confirmation E-mail', 1, 15, '2016-04-26 14:31:08', '2016-04-26 14:31:08'),
(12, 3, 'create-roles', 'Create Roles', 1, 2, '2016-04-26 14:31:08', '2016-04-26 14:31:08'),
(13, 3, 'edit-roles', 'Edit Roles', 1, 3, '2016-04-26 14:31:08', '2016-04-26 14:31:08'),
(14, 3, 'delete-roles', 'Delete Roles', 1, 4, '2016-04-26 14:31:08', '2016-04-26 14:31:08'),
(15, 4, 'create-permission-groups', 'Create Permission Groups', 1, 1, '2016-04-26 14:31:08', '2016-04-26 14:31:08'),
(16, 4, 'edit-permission-groups', 'Edit Permission Groups', 1, 2, '2016-04-26 14:31:08', '2016-04-26 14:31:08'),
(17, 4, 'delete-permission-groups', 'Delete Permission Groups', 1, 3, '2016-04-26 14:31:08', '2016-04-26 14:31:08'),
(18, 4, 'sort-permission-groups', 'Sort Permission Groups', 1, 4, '2016-04-26 14:31:08', '2016-04-26 14:31:08'),
(19, 4, 'create-permissions', 'Create Permissions', 1, 5, '2016-04-26 14:31:08', '2016-04-26 14:31:08'),
(20, 4, 'edit-permissions', 'Edit Permissions', 1, 6, '2016-04-26 14:31:08', '2016-04-26 14:31:08'),
(21, 4, 'delete-permissions', 'Delete Permissions', 1, 7, '2016-04-26 14:31:09', '2016-04-26 14:31:09');

-- --------------------------------------------------------

--
-- Table structure for table `permission_dependencies`
--

CREATE TABLE `permission_dependencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `dependency_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_dependencies`
--

INSERT INTO `permission_dependencies` (`id`, `permission_id`, `dependency_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(2, 3, 1, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(3, 3, 2, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(4, 4, 1, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(5, 4, 2, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(6, 5, 1, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(7, 5, 2, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(8, 6, 1, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(9, 6, 2, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(10, 7, 1, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(11, 7, 2, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(12, 8, 1, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(13, 8, 2, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(14, 9, 1, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(15, 9, 2, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(16, 10, 1, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(17, 10, 2, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(18, 11, 1, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(19, 11, 2, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(20, 12, 1, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(21, 12, 2, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(22, 13, 1, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(23, 13, 2, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(24, 14, 1, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(25, 14, 2, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(26, 15, 1, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(27, 15, 2, '2016-04-26 14:31:09', '2016-04-26 14:31:09'),
(28, 16, 1, '2016-04-26 14:31:10', '2016-04-26 14:31:10'),
(29, 16, 2, '2016-04-26 14:31:10', '2016-04-26 14:31:10'),
(30, 17, 1, '2016-04-26 14:31:10', '2016-04-26 14:31:10'),
(31, 17, 2, '2016-04-26 14:31:10', '2016-04-26 14:31:10'),
(32, 18, 1, '2016-04-26 14:31:10', '2016-04-26 14:31:10'),
(33, 18, 2, '2016-04-26 14:31:10', '2016-04-26 14:31:10'),
(34, 19, 1, '2016-04-26 14:31:10', '2016-04-26 14:31:10'),
(35, 19, 2, '2016-04-26 14:31:10', '2016-04-26 14:31:10'),
(36, 20, 1, '2016-04-26 14:31:10', '2016-04-26 14:31:10'),
(37, 20, 2, '2016-04-26 14:31:10', '2016-04-26 14:31:10'),
(38, 21, 1, '2016-04-26 14:31:10', '2016-04-26 14:31:10'),
(39, 21, 2, '2016-04-26 14:31:10', '2016-04-26 14:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `permission_groups`
--

CREATE TABLE `permission_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort` smallint(6) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_groups`
--

INSERT INTO `permission_groups` (`id`, `parent_id`, `name`, `sort`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Access', 1, '2016-04-26 14:31:07', '2016-04-26 14:31:07'),
(2, 1, 'User', 1, '2016-04-26 14:31:07', '2016-04-26 14:31:07'),
(3, 1, 'Role', 2, '2016-04-26 14:31:07', '2016-04-26 14:31:07'),
(4, 1, 'Permission', 3, '2016-04-26 14:31:07', '2016-04-26 14:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` varchar(25) DEFAULT NULL,
  `supplier_ref` varchar(25) DEFAULT NULL,
  `bt_ref` varchar(12) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `description` text,
  `item_code` varchar(25) DEFAULT NULL,
  `xfer` decimal(13,2) DEFAULT NULL,
  `bteup` decimal(12,2) DEFAULT NULL,
  `btbuy` decimal(12,2) NOT NULL,
  `quote_type` varchar(255) NOT NULL,
  `max_discount` decimal(12,2) NOT NULL,
  `pbx_type` varchar(255) NOT NULL,
  `one_yr_standard_care` decimal(12,2) NOT NULL,
  `one_yr_prompt_care` decimal(12,2) NOT NULL,
  `one_yr_total_care` decimal(12,2) NOT NULL,
  `three_yr_standard_care` decimal(12,2) NOT NULL,
  `three_yr_prompt_care` decimal(12,2) NOT NULL,
  `three_yr_total_care` decimal(12,2) NOT NULL,
  `five_yr_standard_care` decimal(12,2) NOT NULL,
  `five_yr_prompt_care` decimal(12,2) NOT NULL,
  `five_yr_total_care` decimal(12,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `oa_view` tinyint(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `supplier_ref`, `bt_ref`, `item_name`, `qty`, `description`, `item_code`, `xfer`, `bteup`, `btbuy`, `quote_type`, `max_discount`, `pbx_type`, `one_yr_standard_care`, `one_yr_prompt_care`, `one_yr_total_care`, `three_yr_standard_care`, `three_yr_prompt_care`, `three_yr_total_care`, `five_yr_standard_care`, `five_yr_prompt_care`, `five_yr_total_care`, `image`, `oa_view`, `updated_at`, `created_at`) VALUES
(1, 'Hardware', '50005184', 'B25518', 'ANALOG MAIN BRD III', NULL, NULL, '044295', '167.50', '335.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(2, '', '50004070', 'B29037', 'QUAD BRI MMC', NULL, NULL, '048644', '237.50', '475.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 08:20:42', '0000-00-00 00:00:00'),
(3, 'Hardware', '50005160', 'B29039', 'T1/E1 COMBO MMC II', NULL, NULL, '048646', '315.00', '630.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(4, 'Hardware', '50003560', 'B17850', 'DUAL T1/E1 TRUNK MMC', NULL, '', '028465', '472.50', '945.00', '0.00', 'New', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'uploads/DUAL-T1E1-TRUNK-MMC.jpg', 1, '2016-05-13 11:30:13', '0000-00-00 00:00:00'),
(5, 'Hardware', '50005751', 'B31445', 'DSP  II MMC', NULL, NULL, '050462', '377.50', '755.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(6, 'Hardware', '50002979', 'B17937', 'Quad DSP MMC', NULL, 'test', '027422', '345.00', '690.00', '0.00', 'New', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'uploads/hardware.jpg', 1, '2016-05-13 11:30:36', '0000-00-00 00:00:00'),
(7, 'Hardware', '50005105', 'B18990', 'ASU II', NULL, NULL, '030742', '220.00', '440.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(8, 'Hardware', '50005731', 'B18991', '24 port ONSp card', NULL, NULL, '050497', '270.00', '540.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(9, 'Hardware', '50005441', 'B20445', '3300 AX Controller 4GIG Voice Mail Flash Drive', NULL, NULL, '036838', '135.00', '160.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(10, 'Hardware', '50005612', 'B17751', 'PWR CRD C13 5A 250V - UK PLUG (5A FUSE)', NULL, NULL, '028455', '11.90', '14.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(11, 'Hardware', '51000582', 'B22889', 'PWR CRD C7 2.5A 250V-UK PLUG 3AFUSE(Mains Lead)', NULL, NULL, '039668', '3.40', '4.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(12, 'Hardware', '51004990', 'B38443', 'MCD PWR CRD C7 2.5A 250V-EURO PLUG', NULL, NULL, '062879', '1.35', '1.50', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(13, 'Hardware', 'MW404AA', 'B33790', 'Cable RJ45 to 2 x BNC', NULL, NULL, '056518', '65.00', '130.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(14, 'Hardware', '50006587', 'B42646', 'HDMI Custom Cable (10 Feet) ', NULL, NULL, '076108', '0.00', '32.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(15, 'Hardware', '50005182', 'B20450', '3300 AX AC POWER SUPPLY 300W', NULL, NULL, '036845', '157.50', '315.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(16, 'Hardware', '51015352', 'B33969', '3300 AMB/AOB Connection Unit', NULL, NULL, '050433', '45.00', '50.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(17, 'Hardware', '51301151', 'B42644', 'Gb 802.3at Power Adapter Universal (90-264 VDC) (50-60 Hz)', NULL, NULL, '076106', '0.00', '76.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(18, 'Hardware', '50005091', 'B20361', 'ASU II AC POWER SUPPLY', NULL, NULL, '036743', '97.50', '195.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(19, 'Hardware', '50005300', 'B20364', '24VDC IP PWR ADPT 100-240V 50-60HZ(', NULL, NULL, '036746', '19.80', '22.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(20, 'Hardware', '50006593', 'B42648', 'StreamLine Unit - 24 port', NULL, NULL, '076120', '1072.50', '1650.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(21, 'Hardware', '50006594', 'B42649', 'StreamLine Unit - 48 port', NULL, NULL, '076121', '1745.25', '2685.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(22, 'Hardware', '50006596', 'B42651', 'StreamLine Dongle BS6312 (BT) Kit - 6 Pack', NULL, NULL, '076123', '0.00', '25.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(23, 'Hardware', '51300751', 'B42652', '50 Port System Harness', NULL, NULL, '076124', '0.00', '115.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(24, 'Hardware', '51300752', 'B42653', '100 Port System Harness', NULL, NULL, '076125', '0.00', '200.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(25, 'Hardware', '51300753', 'B42654', '200 Port System Harness', NULL, NULL, '076126', '0.00', '400.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(26, 'Hardware', '51300754', 'B42655', '5m M-F System Cable', NULL, NULL, '076127', '0.00', '32.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(27, 'Hardware', '51300836', 'B42656', '10m M-F System Cable', NULL, NULL, '076128', '0.00', '47.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(28, 'Hardware', '51300837', 'B42657', '15m M-F System Cable', NULL, NULL, '076129', '0.00', '57.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(29, 'Hardware', '50006634', 'B47319', '5320e Backlite Set', NULL, NULL, '84052', '0.00', '215.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(30, 'Hardware', '52002724', 'B37855', 'MCD MAS Server Appliance BT', NULL, NULL, '064082', '0.00', '2300.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(31, 'Hardware', '50006619', NULL, 'StreamLine - 8 port w Dongles x2', NULL, NULL, NULL, '0.00', '310.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(32, 'Hardware', '50006620', NULL, 'StreamLine Power Supply for 8 Port', NULL, NULL, NULL, '0.00', '85.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(33, 'Hardware', '50006644', NULL, 'StreamLine Dongle II - 6 Pack', NULL, NULL, NULL, '0.00', '290.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(34, 'Hardware', '9132-800-208-NA', 'B17741', 'HANDSET CORD 3.0M 25PK DARK GREY', NULL, NULL, '028446', '26.00', '52.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(35, 'Software', '54004621', 'B38218', 'MCD MAS AWC Web Only Up(1 User)', NULL, NULL, '064435', '125.00', '250.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(36, 'Software', '54005329', 'B41967 ', 'MCD Standard Multi-device User license', NULL, NULL, '069283', '0.00', '145.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(37, 'Software', '54005763', 'B42188', 'Small Business II Uplift (New SMB MK II Systems)', NULL, NULL, '069510', '0.00', '1745.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(38, 'Software', '54005953', NULL, 'Skype for Business Plug-in 1 User', NULL, NULL, NULL, '0.00', '0.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(39, 'Software', '54006095', NULL, 'UCC(V3) STD User for Enterprise', NULL, NULL, NULL, '0.00', '230.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(40, 'Software', '54006096', NULL, 'UCC v3 STD User Enterprise x50', NULL, NULL, NULL, '0.00', '9755.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(41, 'Software', '54006098', NULL, 'UCC(V3) STD User for Business', NULL, NULL, NULL, '0.00', '205.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(42, 'Software', '54006099', NULL, 'UCC v3 STD User Business x50', NULL, NULL, NULL, '0.00', '8713.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(43, 'Software', '54006101', NULL, 'UCC(V3) Prem User for Enterprise', NULL, NULL, NULL, '0.00', '300.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(44, 'Software', '54006102', NULL, 'UCC v3 Prem User Enterprise x50', NULL, NULL, NULL, '0.00', '12750.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(45, 'Software', '54006104', NULL, 'UCC(V3) Prem User for Business', NULL, NULL, NULL, '0.00', '275.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(46, 'Software', '54006105', NULL, 'UCC v3 Prem User Business x50', NULL, NULL, NULL, '0.00', '11688.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(47, 'Software', '54006131', NULL, 'UCC(V3) Entry User for Business', NULL, NULL, NULL, '0.00', '135.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(48, 'Software', '54006132', NULL, 'UCC v3 Entry User Business x50', NULL, NULL, NULL, '0.00', '5738.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(49, 'Software', '54006165', NULL, 'MiCb Client user for MiVBC operator', NULL, NULL, NULL, '0.00', '0.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(50, 'Software', '54006550', NULL, 'MiCollab Mobile Client Option', NULL, NULL, NULL, '0.00', '17.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(51, 'Software', '54006551', NULL, 'MiCollab Mobile Softphone Option', NULL, NULL, NULL, '0.00', '103.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(52, 'Software', '54006690', NULL, 'MiCollab AWV Platform Web Lic x1', NULL, NULL, NULL, '0.00', '264.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(53, 'Software', '54006693', NULL, 'MiCollab AWV Platform Audio Lic x1', NULL, NULL, NULL, '0.00', '264.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(54, 'Software', '54006696', NULL, 'MiCb AWV Platform Web/Audio Lic x1', NULL, NULL, NULL, '0.00', '330.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(55, 'Software', '54006732', NULL, 'MiCollab Mobile Entry UCC x50', NULL, NULL, NULL, '0.00', '495.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(56, 'Software', '54004571', 'B33780', 'Mitel Border Gateway Base', NULL, NULL, '055873', '77.50', '155.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(57, 'Software', '54005963', NULL, 'MAS Base for Free UCA Client', NULL, NULL, NULL, '0.00', '0.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(58, 'Software', '54006064', NULL, 'MiCollab Mobile Client & SIP Softphone', NULL, NULL, NULL, '0.00', '95.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(59, 'Software', '54006070', NULL, 'MiCollab Client presence for MiVB Consl', NULL, NULL, NULL, '0.00', '0.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(60, 'Software', 'NA', 'B42414', 'MCD User Licence Bundle (Single User)', NULL, NULL, '055284 & 050475', '57.50', NULL, '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(61, 'terminals', '50005663', 'B25505', '5302 / 5304 IP Phone Wall Kit x 16', NULL, '', '044281', '0.00', '51.00', '0.00', 'New', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'uploads/mitel-5300-wall-mount-bracket-50005663-vl.jpg', 0, '2016-05-19 08:43:39', '0000-00-00 00:00:00'),
(62, 'ip_terminals', '51011571', 'B31426', '5304 IP Phone', NULL, '', '050480', '50.00', '100.00', '0.00', 'New', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-20 14:48:01', '0000-00-00 00:00:00'),
(63, 'ip_terminals', '50005847', 'B29241', '5312 IP Phone', NULL, '', '028473', '0.00', '130.00', '0.00', 'New', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-18 11:12:21', '0000-00-00 00:00:00'),
(64, 'ip_terminals', '50006191', 'B31430', '5320 IP Phone', NULL, '', '050848', '0.00', '165.00', '0.00', 'New', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-19 08:45:33', '0000-00-00 00:00:00'),
(65, 'ip_terminals', '50005664', 'B29242', '5324 IP Phone', NULL, '', '028474', '87.50', '175.00', '0.00', 'New', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'uploads/5324_Phone.jpg', 0, '2016-05-19 09:50:19', '0000-00-00 00:00:00'),
(66, 'ip_terminals', '50006476', 'B42222', '5330e IP Phone', NULL, '', '071360', '132.50', '265.00', '0.00', 'New', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-19 09:33:57', '0000-00-00 00:00:00'),
(67, 'ip_terminals', '50006478', 'B42223', '5340e IP Phone', NULL, '', '071361', '165.00', '330.00', '0.00', 'New', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-19 08:53:08', '0000-00-00 00:00:00'),
(68, 'ip_terminals', '50005991', 'B31439', '5360 IP Phone', NULL, '', '050852', '0.00', '385.00', '0.00', 'New', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'uploads/5360ip.jpg', 0, '2016-05-19 08:39:29', '0000-00-00 00:00:00'),
(69, 'ip_terminals', '50005811', 'B33747', '5540 IP Console', NULL, '', '055291', '565.00', '1130.00', '0.00', 'New', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-18 11:06:42', '0000-00-00 00:00:00'),
(70, 'terminals', '50006441', 'B41969 ', 'Bluetooth Handset/Module Bundle', NULL, NULL, '069290', '0.00', '130.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(71, 'terminals', '50006402', 'B41970 ', 'Bluetooth Module (for Bluetooth Handset/Headset)', NULL, NULL, '069291', '0.00', '95.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(72, 'terminals', '50006442', 'B41971 ', 'Bluetooth Handset w/5300 Charging Plate', NULL, NULL, '069292', '0.00', '100.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(73, 'Servers', NULL, 'B37855', 'BT MiColab Server Appliance', NULL, 'Dell R220 Rack mounted Server, Upgraded Dual NIC card & 8G RAM, Base Software Suite consist of (MSL, Nupoint (with 1 Port of Fax to Desk), UC Advanced, Mitel Colaboration Assistant, MBG/Teleworker) & Click to Dial Client ***User Licences need to be added for all applications within the suite.', '064082', NULL, NULL, '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(74, 'Servers', NULL, NULL, 'BT MAS Teleworker', NULL, 'Dell R220 Rack mounted Server, Upgraded Dual NIC card & 8G RAM, Base Software Suite consist of (MSL, Nupoint (with 1 Port of Fax to Desk), UC Advanced, Mitel Colaboration Assistant, MBG/Teleworker) & Click to Dial Client + 5 Teleworker Licences ***User Licences need to be added for all applications within the suite.', '065555', NULL, NULL, '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(75, NULL, NULL, 'B31471', 'Procurve 24 Port', NULL, 'HP ProCurve Switch 2610-24-POE', '063027', NULL, NULL, '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(76, 'lan_data', NULL, 'B31472', 'Procurve 48 Port', NULL, 'HP ProCurve Switch 2610-48-POE', '063028', NULL, NULL, '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(77, 'lan_data', 'J9145A', 'B37917', 'HP E2910 -24G al Switch', NULL, NULL, '063029', NULL, '1100.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(78, 'lan_data', 'J9146A', 'B37918', 'HP E2910 - 24G POE al Switch', NULL, NULL, '063030', NULL, '1500.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(79, 'lan_data', 'J9147A', 'B37919', 'HP E2910 - 48G al Switch', NULL, NULL, '063031', NULL, '1900.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(80, 'lan_data', 'J9148A', 'B37920', 'HP E2910 - 48G POE al switch', NULL, NULL, '063032', NULL, '2600.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(81, 'lan_data', 'J9562A', 'B37921', 'HP E2915 - 8G POE switch', NULL, NULL, '063033', NULL, '650.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(82, 'lan_data', 'J4858C', 'B37922', 'HP X121 1G SFP LC SX Transceiver', NULL, NULL, '063034', NULL, '200.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(83, 'lan_data', 'J4859C', 'B37923', 'HP X121 1G SFP LC LX Transceiver', NULL, NULL, '063035', NULL, '450.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(84, 'lan_data', 'J4860C', 'B37924', 'HP X121 1G SFP LC LH Transceiver', NULL, NULL, '063036', NULL, '2800.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(85, 'mivb_peripherals', '51011572', 'B38409', 'MCD 5304 IP Phone Hospitality Kit', NULL, NULL, '062895', '13.00', '26.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(86, 'mivb_peripherals', '50006580', 'B42642', 'UC360 Collab Pt (Audio + In Room Collab)', NULL, NULL, '076104', '312.50', '625.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(87, 'mivb_peripherals', '50004198', 'B22899', 'Mitel Line Interface Module (UK)', NULL, NULL, '039666', '47.50', '95.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(88, 'mivb_peripherals', '50005402', 'B25504', 'Cordless Accessories Module (EURO)', NULL, NULL, '044283', '0.00', '115.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(89, 'mivb_peripherals', '50005403', 'B25506', 'Cordless Handset w/Charging Plate (EURO)', NULL, NULL, '044282', '0.00', '125.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(90, 'mivb_peripherals', '50005404', 'B25507', 'Cordless Headset w/Charging Cradle(EURO)', NULL, NULL, '044284', '0.00', '185.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(91, 'mivb_peripherals', '50005713', 'B25508', 'CORDLESS HANDSET & MODULE', NULL, NULL, '044285', '0.00', '180.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(92, 'mivb_peripherals', '50005714', 'B25509', 'CORDLESS HEADSET & MODULE', NULL, NULL, '044286', '0.00', '245.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(93, 'mivb_peripherals', '50005230', 'B20362', '5300 SERIES WIDEBAND HANDSET (25 PA', NULL, NULL, '036744', '140.00', '280.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(94, 'mivb_peripherals', '50005231', 'B20363', '5300 Series Handset (25 Pack)', NULL, NULL, '036745', '140.00', '280.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(95, 'mivb_peripherals', '50005662', 'B38690', 'MCD IP PKM Interface Module (v2)', NULL, NULL, '062847', '28.50', '57.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(96, 'mivb_peripherals', '51015131', 'B37773', 'MCD Universal Terminal Power Adaptor', NULL, NULL, '062900', '0.00', '22.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(97, 'mivb_peripherals', '52002842', NULL, 'MiVoice Business Console Bundle', NULL, NULL, NULL, '0.00', '1146.60', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(98, 'mivb_peripherals', '51219829', NULL, 'iCharge - CUB Base License ', NULL, NULL, NULL, '0.00', '1516.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(99, 'mivb_peripherals', '51219830', NULL, 'iCharge - CUB  1 Room License', NULL, NULL, NULL, '0.00', '8.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(100, 'mivb_peripherals', '51220418', NULL, 'iCharge Cub Base License Expansion ', NULL, NULL, NULL, '0.00', '130.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(101, 'mivb_peripherals', '51220419', NULL, 'iCharge Cub 1 Room License Expansion ', NULL, NULL, NULL, '0.00', '10.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(102, 'mivb_peripherals', '51221287', NULL, 'On-Site or Remote Installation / Day or Training per day', NULL, NULL, NULL, '0.00', '866.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(103, 'mivb_peripherals', 'NA', NULL, 'Faceplates x 10', NULL, NULL, NULL, '0.00', '110.25', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(104, 'mivb_peripherals', 'NA', NULL, 'Faceplates x 25', NULL, NULL, NULL, '0.00', '198.45', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(105, 'mivb_peripherals', 'NA', NULL, 'Faceplates x 50', NULL, NULL, NULL, '0.00', '253.58', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(106, 'mivb_peripherals', 'NA', NULL, 'Faceplates x 100', NULL, NULL, NULL, '0.00', '281.14', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(107, 'mivb_peripherals', 'NA', NULL, 'Additional Faceplate', NULL, NULL, NULL, '0.00', '0.94', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(108, 'mivb_peripherals', 'NA', NULL, 'Faceplating & Programming', NULL, NULL, NULL, '0.00', '4.41', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(109, 'mivb_peripherals', 'NA', NULL, '3100Lobby  - Analogue, 1 Line, No buttons, Non-Speaker', NULL, NULL, NULL, '0.00', '17.23', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(110, 'mivb_peripherals', 'NA', NULL, '3100MWB  - Analogue, 1 Line, normal keypad, Non-Speaker', NULL, NULL, NULL, '0.00', '17.23', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(111, 'mivb_peripherals', 'NA', NULL, '3100MW3 - Analogue, 1 Line, 3 buttons, Non-Speaker', NULL, NULL, NULL, '0.00', '17.23', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(112, 'mivb_peripherals', 'NA', NULL, '3100MW5 - Analogue, 1 Line, 5 buttons, Non-Speaker', NULL, NULL, NULL, '0.00', '17.23', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(113, 'mivb_peripherals', 'NA', NULL, '3100MW10 - Analogue, 1 Line, 10 buttons, Non-Speaker', NULL, NULL, NULL, '0.00', '17.82', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(114, 'mivb_peripherals', 'NA', NULL, '3100MWD3 - Analogue, 1 Line, 3 buttons, Speaker', NULL, NULL, NULL, '0.00', '21.98', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(115, 'mivb_peripherals', 'NA', NULL, '3100MWD5 - Analogue, 1 Line, 5 buttons, Speaker', NULL, NULL, NULL, '0.00', '21.98', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(116, 'mivb_peripherals', 'NA', NULL, '3100MWD - Analogue, 1 Line, 10 buttons, Speaker', NULL, NULL, NULL, '0.00', '22.87', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(117, 'mivb_peripherals', 'NA', NULL, '3102MWD5  - Analogue, 2 Line, 5 buttons, Speaker', NULL, NULL, NULL, '0.00', '40.40', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(118, 'mivb_peripherals', 'NA', NULL, '3102MWD - Analogue, 2 Line, 10 buttons, Speaker', NULL, NULL, NULL, '0.00', '41.58', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(119, 'mivb_peripherals', 'NA', NULL, '3300Lobby - Analogue, 1 Line, No buttons, Non-Speaker', NULL, NULL, NULL, '0.00', '28.92', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(120, 'mivb_peripherals', 'NA', NULL, '3300MWB - Analogue, 1 Line, normal keypad, Non-Speaker', NULL, NULL, NULL, '0.00', '25.35', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(121, 'mivb_peripherals', 'NA', NULL, '3300MW3 -  Analogue, 1 Line, 3 buttons, Non-Speaker', NULL, NULL, NULL, '0.00', '26.98', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(122, 'mivb_peripherals', 'NA', NULL, '3300MW5 - Analogue, 1 Line, 5 buttons, Non-Speaker', NULL, NULL, NULL, '0.00', '28.92', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(123, 'mivb_peripherals', 'NA', NULL, '3300MW10  - Analogue, 1 Line, 10 buttons, Non-Speaker', NULL, NULL, NULL, '0.00', '30.55', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(124, 'mivb_peripherals', 'NA', NULL, '3300MWD3 -  Analogue, 1 Line, 3 buttons, Speaker', NULL, NULL, NULL, '0.00', '32.73', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(125, 'mivb_peripherals', 'NA', NULL, '3300MWD5 -  Analogue, 1 Line, 5 buttons, Speaker', NULL, NULL, NULL, '0.00', '34.36', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(126, 'mivb_peripherals', 'NA', NULL, '3300MWD -  Analogue, 1 Line, 10 buttons, Speaker', NULL, NULL, NULL, '0.00', '36.30', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(127, 'mivb_peripherals', 'NA', NULL, '3302MWD5  -  Analogue, C86 Line, 5 buttons, Speaker', NULL, NULL, NULL, '0.00', '52.51', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(128, 'mivb_peripherals', 'NA', NULL, '3302MWD -  Analogue, 2 Line, 3 buttons, Speaker', NULL, NULL, NULL, '0.00', '54.27', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(129, 'mivb_peripherals', 'NA', NULL, 'Trim 1L - Slimline phone with 1 line.  Key pad in handset.', NULL, NULL, NULL, '0.00', '18.27', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(130, 'mivb_peripherals', 'NA', NULL, 'Trim 2L - Slimline phone with 2 lines.  Key pad in handset.', NULL, NULL, NULL, '0.00', '28.74', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(131, 'mivb_peripherals', 'NA', NULL, '9600MWD5  - Analogue Phone, 1 Line, 5 Button, Speaker', NULL, NULL, NULL, '0.00', '89.42', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(132, 'mivb_peripherals', 'NA', NULL, '9600MWD - Analogue Phone, 1 Line, 10 Button, Speaker', NULL, NULL, NULL, '0.00', '90.75', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(133, 'mivb_peripherals', 'NA', NULL, '9602MWD5 - Analogue Phone, 2 Line, 5 Button, Speaker', NULL, NULL, NULL, '0.00', '94.74', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(134, 'mivb_peripherals', 'NA', NULL, '9602MWD - Analogue Phone, 2 Line, 10 Button, Speaker', NULL, NULL, NULL, '0.00', '96.38', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(135, 'mivb_peripherals', 'NA', NULL, 'Xtra Handsets (9600MWD5)', NULL, NULL, NULL, '0.00', '49.97', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(136, 'mivb_peripherals', 'NA', NULL, 'Xtra Handsets (9600MWD)', NULL, NULL, NULL, '0.00', '49.97', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(137, 'mivb_peripherals', 'NA', NULL, 'Xtra Handsets (9602MWD5 & MWD)', NULL, NULL, NULL, '0.00', '53.97', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(138, 'mivb_peripherals', 'NA', NULL, '3300TRM-IP - Slimline IP phone with 1 line.  Key pad in the base.', NULL, NULL, NULL, '0.00', '40.54', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(139, 'mivb_peripherals', 'NA', NULL, '3302TRM-IP  - Slimline IP phone with 2 lines.  Key pad in the base.', NULL, NULL, NULL, '0.00', '45.07', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(140, 'mivb_peripherals', 'NA', NULL, '3300IP-Lobby - SIP Phone, 1 Line, No buttons, Speaker', NULL, NULL, NULL, '0.00', '58.26', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(141, 'mivb_peripherals', 'NA', NULL, '3300IP-MWD5 -  SIP Phone, 1 Line, 5 buttons, Speaker', NULL, NULL, NULL, '0.00', '58.26', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(142, 'mivb_peripherals', 'NA', NULL, '3300IP-MWD - SIP Phone, 1 Line, 10 buttons, Speaker', NULL, NULL, NULL, '0.00', '60.20', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(143, 'mivb_peripherals', 'NA', NULL, '3302IP-MWD5 -  SIP Phone, 2 Line, 5 buttons, Speaker', NULL, NULL, NULL, '0.00', '62.01', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(144, 'mivb_peripherals', 'NA', NULL, '3302IP-MWD -  SIP Phone, 2 Line, 10 buttons, Speaker', NULL, NULL, NULL, '0.00', '63.95', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(145, 'mivb_peripherals', 'NA', NULL, '9600IP-MWD5 DECT - Cordless, 5 Button, 1 Line, Speaker', NULL, NULL, NULL, '0.00', '132.19', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(146, 'mivb_peripherals', 'NA', NULL, '9600IP-MWD DECT  - Cordless, 10 Button, 1 Line, Speaker', NULL, NULL, NULL, '0.00', '133.83', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(147, 'mivb_peripherals', 'NA', NULL, 'Multiple Handset Accessory Kit', NULL, NULL, NULL, '0.00', '60.02', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(148, 'mivb_peripherals', 'NA', NULL, '9602IP-MWD5 DECT- Cordless, 5 Button, 2 Line, Speaker', NULL, NULL, NULL, '0.00', '127.53', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(149, 'mivb_peripherals', 'NA', NULL, '9602IP-MWD DECT  - Cordless, 5 Button, 2 Line, Speaker', NULL, NULL, NULL, '0.00', '129.17', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(150, 'mivb_peripherals', 'NA', NULL, 'Multiple Handset Accessory Kit', NULL, NULL, NULL, '0.00', '58.75', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(151, 'mivb_peripherals', 'NA', NULL, 'Wallbrackets', NULL, NULL, NULL, '0.00', '6.66', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(152, 'mivb_peripherals', 'NA', NULL, 'Line Cords', NULL, NULL, NULL, '0.00', '4.84', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(153, 'mivb_peripherals', 'NA', NULL, 'Plastics', NULL, NULL, NULL, '0.00', '2.12', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(154, 'mivb_peripherals', 'NA', NULL, 'Curly Cords ', NULL, NULL, NULL, '0.00', '4.84', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(155, 'mivb_peripherals', 'NA', NULL, 'Handsets Corded', NULL, NULL, NULL, '0.00', '13.31', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(156, 'mivb_peripherals', 'NA', NULL, 'Handsets DECT', NULL, NULL, NULL, '0.00', '42.35', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(157, 'mivb_peripherals', 'NA', NULL, 'Colour Inserts', NULL, NULL, NULL, '0.00', '7.87', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(158, 'mivb_peripherals', 'NA', NULL, '9600/9602 Battery', NULL, NULL, NULL, NULL, '8.47', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(159, 'mivb_peripherals', 'NA', NULL, '9600/9602 Power Supply ', NULL, NULL, NULL, NULL, '13.31', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(160, 'training', '53003557', 'B17890', 'MITEL NETWORKS 3300 ICP END USER TRAIN''G', NULL, NULL, '028404', '552.50', '650.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(161, 'training', '53000748', 'B17895', 'TRAINING 3300 ICP SYSTEM ADMIN COURSE', NULL, NULL, '028396', '765.00', '900.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(162, 'training', NULL, NULL, 'Max Passport', NULL, NULL, '076304', NULL, NULL, '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(163, 'install', NULL, 'B36263', 'Mitel Pre CRF Visit', NULL, NULL, 'None', '0.00', '0.00', '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-06 07:35:24', '0000-00-00 00:00:00'),
(186, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'uploads\\bt_logo.jpg', 0, '2016-05-09 09:54:00', '2016-05-09 09:54:00'),
(187, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'uploads\\bt_logo.jpg', 0, '2016-05-09 09:54:55', '2016-05-09 09:54:55'),
(192, 'analogue_terminals', '', '', '7410 DECT Phone', NULL, '', NULL, NULL, '0.00', '0.00', 'New', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'uploads/7410 DECT Phone.jpg', 1, '2016-05-19 10:47:41', '2016-05-19 10:03:23'),
(193, 'analogue_terminals', '', '', '2200 Analogue Phone', NULL, '', NULL, NULL, '0.00', '0.00', 'New', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 1, '2016-05-19 10:09:36', '2016-05-19 10:07:14'),
(194, 'analogue_terminals', '', '', '2100 Analogue Phone', NULL, '', NULL, NULL, '0.00', '0.00', 'New', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 1, '2016-05-19 10:09:17', '2016-05-19 10:08:34'),
(195, 'dect_terminals', '', '', 'BTB Single Cell DECT Station', NULL, '', NULL, NULL, '0.00', '0.00', 'New', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 1, '2016-05-19 10:50:14', '2016-05-19 10:17:49'),
(196, 'dect_terminals', '', '', 'BTB Multi Cell DECT Station', NULL, '', NULL, NULL, '0.00', '0.00', 'New', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 1, '2016-05-20 08:48:37', '2016-05-19 10:18:00'),
(197, 'dect_terminals', '', '', 'BTB DECT Repeater', NULL, '', NULL, NULL, NULL, '0.00', '', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 1, '2016-05-19 10:18:19', '2016-05-19 10:18:19'),
(198, 'dect_terminals', '', '', 'BTB DECT MiVoice Standard Handset', NULL, '', NULL, NULL, NULL, '0.00', '', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 1, '2016-05-19 10:18:31', '2016-05-19 10:18:31'),
(199, 'dect_terminals', '', '', 'BTB DECT MiVoice Enterprise', NULL, '', NULL, NULL, NULL, '0.00', '', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 1, '2016-05-19 10:18:45', '2016-05-19 10:18:45'),
(200, 'dect_terminals', '', '', 'BTB DECT MiVoice Standard Ruggedized', NULL, '', NULL, NULL, NULL, '0.00', '', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 1, '2016-05-19 10:19:03', '2016-05-19 10:19:03'),
(201, 'dect_terminals', '', '', 'BTB DECT MiVoice Enterprise Ruggedized', NULL, '', NULL, NULL, NULL, '0.00', '', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 1, '2016-05-19 10:19:14', '2016-05-19 10:19:14'),
(202, 'dect_terminals', '', '', 'BTB DECT', NULL, '', NULL, NULL, '0.00', '0.00', 'New', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'uploads/7410 DECT Phone.jpg', 1, '2016-05-27 08:39:08', '2016-05-19 10:20:09'),
(203, 'terminal_upgrades', '456', '456', 'MiVB Universal Terminal Power Adaptor', NULL, '', NULL, NULL, NULL, '12.00', '', '1.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-20 08:37:03', '2016-05-20 08:37:03');

-- --------------------------------------------------------

--
-- Table structure for table `product_upgrade`
--

CREATE TABLE `product_upgrade` (
  `product_id` int(11) NOT NULL,
  `upgrade_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_upgrade`
--

INSERT INTO `product_upgrade` (`product_id`, `upgrade_id`, `created_at`, `updated_at`) VALUES
(62, 1, '2016-05-20 14:48:01', '2016-05-20 14:48:01'),
(62, 2, '2016-05-20 14:48:01', '2016-05-20 14:48:01'),
(62, 3, '2016-05-20 14:48:01', '2016-05-20 14:48:01'),
(63, 2, '2016-05-20 13:06:39', '2016-05-20 13:06:39'),
(63, 4, '2016-06-01 09:25:36', '2016-06-01 09:25:36'),
(63, 6, '2016-06-01 09:25:36', '2016-06-01 09:25:36'),
(63, 7, '2016-06-01 09:25:36', '2016-06-01 09:25:36'),
(64, 1, '2016-06-01 09:26:59', '2016-06-01 09:26:59'),
(64, 2, '2016-05-20 14:49:04', '2016-05-20 14:49:04'),
(64, 3, '2016-06-01 09:27:00', '2016-06-01 09:27:00'),
(64, 4, '2016-06-01 09:27:00', '2016-06-01 09:27:00'),
(64, 5, '2016-06-01 09:27:00', '2016-06-01 09:27:00'),
(64, 6, '2016-06-01 09:27:00', '2016-06-01 09:27:00'),
(64, 7, '2016-06-01 09:27:00', '2016-06-01 09:27:00'),
(66, 1, '2016-05-20 14:50:27', '2016-05-20 14:50:27'),
(66, 2, '2016-05-20 14:50:27', '2016-05-20 14:50:27'),
(66, 3, '2016-05-20 14:50:27', '2016-05-20 14:50:27'),
(66, 4, '2016-05-20 14:50:27', '2016-05-20 14:50:27'),
(66, 5, '2016-05-20 14:50:27', '2016-05-20 14:50:27'),
(66, 6, '2016-05-20 14:50:27', '2016-05-20 14:50:27'),
(66, 7, '2016-05-20 14:50:27', '2016-05-20 14:50:27'),
(67, 1, '2016-05-20 13:43:50', '2016-05-20 13:43:50'),
(67, 2, '2016-05-20 13:43:50', '2016-05-20 13:43:50'),
(67, 3, '2016-05-20 14:47:12', '2016-05-20 14:47:12'),
(67, 4, '2016-05-20 13:43:50', '2016-05-20 13:43:50'),
(67, 5, '2016-05-20 13:43:50', '2016-05-20 13:43:50'),
(67, 6, '2016-05-20 14:47:12', '2016-05-20 14:47:12'),
(67, 7, '2016-05-20 14:08:49', '2016-05-20 14:08:49'),
(68, 1, '2016-05-20 14:51:06', '2016-05-20 14:51:06'),
(68, 2, '2016-05-20 14:51:06', '2016-05-20 14:51:06'),
(68, 3, '2016-05-20 14:51:06', '2016-05-20 14:51:06'),
(68, 4, '2016-05-20 14:51:06', '2016-05-20 14:51:06'),
(68, 5, '2016-05-20 14:51:06', '2016-05-20 14:51:06'),
(68, 6, '2016-05-20 14:51:06', '2016-05-20 14:51:06'),
(68, 7, '2016-05-20 14:51:06', '2016-05-20 14:51:06'),
(192, 1, '2016-05-20 11:33:21', '2016-05-20 11:33:21'),
(192, 3, '2016-05-26 13:04:47', '2016-05-26 13:04:47'),
(192, 4, '2016-06-01 10:47:01', '2016-06-01 10:47:01'),
(192, 5, '2016-06-01 10:47:01', '2016-06-01 10:47:01'),
(192, 6, '2016-06-01 10:47:01', '2016-06-01 10:47:01'),
(192, 7, '2016-06-01 10:47:01', '2016-06-01 10:47:01'),
(193, 1, '2016-06-01 09:24:27', '2016-06-01 09:24:27'),
(193, 4, '2016-06-01 09:24:27', '2016-06-01 09:24:27'),
(193, 5, '2016-06-01 09:24:27', '2016-06-01 09:24:27'),
(193, 6, '2016-06-01 09:24:27', '2016-06-01 09:24:27'),
(193, 7, '2016-06-01 09:24:27', '2016-06-01 09:24:27'),
(196, 2, '2016-05-20 11:24:09', '2016-05-20 11:24:09');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `all` tinyint(1) NOT NULL DEFAULT '0',
  `sort` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `all`, `sort`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 1, 1, '2016-04-26 14:31:07', '2016-04-26 14:31:07'),
(2, 'User', 0, 2, '2016-04-26 14:31:07', '2016-04-26 14:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `social_logins`
--

CREATE TABLE `social_logins` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `provider_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `id` int(10) UNSIGNED NOT NULL,
  `supplier_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bt_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `btbuy` decimal(12,2) NOT NULL,
  `max_discount` decimal(12,2) NOT NULL,
  `quote_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `xfer` decimal(12,2) NOT NULL,
  `bteup` decimal(12,2) NOT NULL,
  `qty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `one_yr_standard_care` decimal(12,2) NOT NULL,
  `one_yr_prompt_care` decimal(12,2) NOT NULL,
  `one_yr_total_care` decimal(12,2) NOT NULL,
  `three_yr_standard_care` decimal(12,2) NOT NULL,
  `three_yr_prompt_care` decimal(12,2) NOT NULL,
  `three_yr_total_care` decimal(12,2) NOT NULL,
  `five_yr_standard_care` decimal(12,2) NOT NULL,
  `five_yr_prompt_care` decimal(12,2) NOT NULL,
  `five_yr_total_care` decimal(12,2) NOT NULL,
  `pbx_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hardware_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`id`, `supplier_ref`, `bt_ref`, `btbuy`, `max_discount`, `quote_type`, `name`, `description`, `item_code`, `xfer`, `bteup`, `qty`, `one_yr_standard_care`, `one_yr_prompt_care`, `one_yr_total_care`, `three_yr_standard_care`, `three_yr_prompt_care`, `three_yr_total_care`, `five_yr_standard_care`, `five_yr_prompt_care`, `five_yr_total_care`, `pbx_type`, `hardware_category`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '', 'B42414', '0.00', '0.00', '', 'Bundle Seat Licence', 'B33740 (Standard Licence) & B31462 (Standard VM Licence) ', '055284 & 050475', '0.00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(2, '', 'B42188', '0.00', '0.00', '', 'Small Businees II Uplift', 'This is used to remove the 50 User cap on the SMB base software (Standalone systems only NOT Enterprise)', '069510', '0.00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(3, '54004268', 'B33775', '0.00', '0.00', '', 'UC Advanced 1 Softphone licence', '', '055867', '21.00', '42.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(4, '54004281', 'B33778', '0.00', '0.00', '', 'UC Advance Deskphone & Softphone licence', '', '055870', '47.50', '95.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(5, '54000650', 'B17717', '0.00', '0.00', '', 'MCD G729 licence (8 channels)', '', '028418', '172.50', '345.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(6, '54000303', 'B17725', '0.00', '0.00', '', 'MCD Network Link Licence', '', '050477 & 028415', '472.50', '945.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(7, '54000861', 'B17726', '0.00', '0.00', '', 'MCD Voicemail Hospitality', '', '028420', '0.00', '1005.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(8, '54003181', 'B25510', '0.00', '0.00', '', 'Mitel SRC Base Pack Includes 5 lic', '', '044287', '202.50', '405.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(9, '54003182', 'B25511', '0.00', '0.00', '', 'Mitel SRC Single licence', '', '044288', '19.50', '39.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(10, '54003183', 'B25512', '0.00', '0.00', '', 'Mitel SRC 10 licence Pack', '', '044289', '210.00', '420.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(11, '54003184', 'B25513', '0.00', '0.00', '', 'Mitel SRC 50 licence Pack', '', '044290', '972.50', '1945.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(12, '54004572', 'B31448', '0.00', '0.00', '', 'MBG TW service 1 User', '', '050844', '47.50', '95.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(13, '54004573', 'B31449', '0.00', '0.00', '', 'MBG TW service 10 User', '', '050845', '345.00', '690.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(14, '54000297', 'B31462', '0.00', '0.00', '', 'MCD Mailbox licence', '', '050475', '12.50', '25.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(15, '54002763', 'B31465', '0.00', '0.00', '', 'MCD SIP User licence', '', '050476', '40.50', '81.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(16, '54002390', 'B31466', '0.00', '0.00', '', 'MCD SIP Trunk Licence', '', '050459', '32.50', '65.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(17, '54004976', 'B33740', '0.00', '0.00', '', 'MCD Standard License', '', '055284', '45.00', '90.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(18, '54005065', 'B33743', '0.00', '0.00', '', 'MCD Standalone Dynamic Extension', '', '055287', '52.50', '105.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(19, '54004266', 'B33772', '0.00', '0.00', '', 'UC Advanced 1 Deskphone licence (MiCollab Desk Phone Client.)', '', '055864', '30.00', '60.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(20, '54004575', 'B33781', '0.00', '0.00', '', 'MBG TW service 50 User', '', '055874', '1495.00', '2990.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(21, '54004577', 'B33782', '0.00', '0.00', '', 'MBG TW service 100 User', '', '055875', '2597.50', '5195.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(22, '54004582', 'B33785', '0.00', '0.00', '', 'MBG 5 session Compression licence', '', '055878', '107.50', '215.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(23, '54003522', 'B33789', '0.00', '0.00', '', 'T38 Fax Licence (4 Channels)', '', '056517', '172.50', '345.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(24, '54002891', 'B37975', '0.00', '0.00', '', 'MCD MCD Regional ONS license', '', '062921', '8.50', '17.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(25, '54004491', 'B38102', '0.00', '0.00', '', 'MCD Sip Trunking Channel Proxy', '', '062948', '15.50', '31.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(26, '54005400', 'B38165', '0.00', '0.00', '', 'SIP Trunk Licence  10 pack  ', '', '', '0.00', '575.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(27, '54005401', 'B38166', '0.00', '0.00', '', 'SIP Trunk Licence 50 pack   ', '', '', '0.00', '2560.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(28, '54004823', 'B38210', '0.00', '0.00', '', 'MCD UC Advanced Console Option', '', '062957', '0.00', '575.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(29, '54004621', 'B38218', '0.00', '0.00', '', 'MCD MAS AWC Web Only Up(1 User)', '', '064435', '125.00', '250.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(30, '54005329', 'B41967 ', '0.00', '0.00', '', 'MCD Standard Multi-device User license', '', '069283', '0.00', '145.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(31, '54005763', 'B42188', '0.00', '0.00', '', 'Small Business II Uplift (New SMB MK II Systems)', '', '069510', '0.00', '1745.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(32, '54005953', '', '0.00', '0.00', '', 'Skype for Business Plug-in 1 User', '', '', '0.00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(33, '54006095', '', '0.00', '0.00', '', 'UCC(V3) STD User for Enterprise', '', '', '0.00', '230.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(34, '54006096', '', '0.00', '0.00', '', 'UCC v3 STD User Enterprise x50', '', '', '0.00', '9755.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(35, '54006098', '', '0.00', '0.00', '', 'UCC(V3) STD User for Business', '', '', '0.00', '205.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(36, '54006099', '', '0.00', '0.00', '', 'UCC v3 STD User Business x50', '', '', '0.00', '8713.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(37, '54006101', '', '0.00', '0.00', '', 'UCC(V3) Prem User for Enterprise', '', '', '0.00', '300.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(38, '54006102', '', '0.00', '0.00', '', 'UCC v3 Prem User Enterprise x50', '', '', '0.00', '12750.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(39, '54006104', '', '0.00', '0.00', '', 'UCC(V3) Prem User for Business', '', '', '0.00', '275.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(40, '54006105', '', '0.00', '0.00', '', 'UCC v3 Prem User Business x50', '', '', '0.00', '11688.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(41, '54006131', '', '0.00', '0.00', '', 'UCC(V3) Entry User for Business', '', '', '0.00', '135.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(42, '54006132', '', '0.00', '0.00', '', 'UCC v3 Entry User Business x50', '', '', '0.00', '5738.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(43, '54006165', '', '0.00', '0.00', '', 'MiCb Client user for MiVBC operator', '', '', '0.00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(44, '54006550', '', '0.00', '0.00', '', 'MiCollab Mobile Client Option', '', '', '0.00', '17.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(45, '54006551', '', '0.00', '0.00', '', 'MiCollab Mobile Softphone Option', '', '', '0.00', '103.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(46, '54006690', '', '0.00', '0.00', '', 'MiCollab AWV Platform Web Lic x1', '', '', '0.00', '264.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(47, '54006693', '', '0.00', '0.00', '', 'MiCollab AWV Platform Audio Lic x1', '', '', '0.00', '264.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(48, '54006696', '', '0.00', '0.00', '', 'MiCb AWV Platform Web/Audio Lic x1', '', '', '0.00', '330.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(49, '54006732', '', '0.00', '0.00', '', 'MiCollab Mobile Entry UCC x50', '', '', '0.00', '495.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(50, '54004571', 'B33780', '0.00', '0.00', '', 'Mitel Border Gateway Base', '', '055873', '77.50', '155.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(51, '54005963', '', '0.00', '0.00', '', 'MAS Base for Free UCA Client', '', '', '0.00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(52, '54006064', '', '0.00', '0.00', '', 'MiCollab Mobile Client & SIP Softphone', '', '', '0.00', '95.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(53, '54006070', '', '0.00', '0.00', '', 'MiCollab Client presence for MiVB Consl', '', '', '0.00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(54, 'NA', 'B42414', '0.00', '0.00', '', 'MCD User Licence Bundle (Single User)', '', '055284 & 050475', '57.50', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 13:42:57', '2016-04-27 13:42:57', NULL),
(55, '', '', '0.00', '0.00', '', '', '', '', '0.00', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-05-03 08:36:22', '2016-05-03 08:36:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_matrix`
--

CREATE TABLE `system_matrix` (
  `id` int(10) UNSIGNED NOT NULL,
  `vendor_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bt_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `analogue_lines` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bri_lines` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pri_lines` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sip_lines` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip_extensions` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `digital_extensions` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `analogue_extensions` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dect_extensions` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `conference_extensions` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ucc_basic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ucc_entry` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ucc_standard` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ucc_premium` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lan_ports` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `standalone_sw` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enterprise_sw` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terminals`
--

CREATE TABLE `terminals` (
  `id` int(10) UNSIGNED NOT NULL,
  `supplier_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bt_ref` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `btbuy` decimal(12,2) NOT NULL,
  `max_discount` decimal(12,2) NOT NULL,
  `quote_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `xfer` decimal(12,2) NOT NULL,
  `bteup` decimal(12,2) NOT NULL,
  `race` float(15,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `one_yr_standard_care` decimal(12,2) NOT NULL,
  `one_yr_prompt_care` decimal(12,2) NOT NULL,
  `one_yr_total_care` decimal(12,2) NOT NULL,
  `three_yr_standard_care` decimal(12,2) NOT NULL,
  `three_yr_prompt_care` decimal(12,2) NOT NULL,
  `three_yr_total_care` decimal(12,2) NOT NULL,
  `five_yr_standard_care` decimal(12,2) NOT NULL,
  `five_yr_prompt_care` decimal(12,2) NOT NULL,
  `five_yr_total_care` decimal(12,2) NOT NULL,
  `pbx_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hardware_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `terminals`
--

INSERT INTO `terminals` (`id`, `supplier_ref`, `bt_ref`, `btbuy`, `max_discount`, `quote_type`, `name`, `description`, `item_code`, `xfer`, `bteup`, `race`, `qty`, `one_yr_standard_care`, `one_yr_prompt_care`, `one_yr_total_care`, `three_yr_standard_care`, `three_yr_prompt_care`, `three_yr_total_care`, `five_yr_standard_care`, `five_yr_prompt_care`, `five_yr_total_care`, `pbx_type`, `hardware_category`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '50005663', 'B25505', '0.00', '0.00', '', '5302 / 5304 IP Phone Wall Kit x 16', '', '044281', '0.00', '51.00', 0.00, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 12:49:52', '2016-04-27 12:49:52', NULL),
(2, '51011571', 'B31426', '0.00', '0.00', '', '5304 IP Phone', '', '050480', '50.00', '100.00', 0.00, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 12:49:52', '2016-04-27 12:49:52', NULL),
(3, '50005847', 'B29241', '0.00', '0.00', '', '5312 IP Phone', '', '028473', '0.00', '130.00', 0.00, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 12:49:52', '2016-04-27 12:49:52', NULL),
(4, '50006191', 'B31430', '0.00', '0.00', '', '5320 IP Phone', '', '050848', '0.00', '165.00', 0.00, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 12:49:52', '2016-04-27 12:49:52', NULL),
(5, '50005664', 'B29242', '0.00', '0.00', '', '5324 IP Phone', '', '028474', '87.50', '175.00', 0.00, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 12:49:52', '2016-04-27 12:49:52', NULL),
(6, '50006476', 'B42222', '0.00', '0.00', '', '5330e IP Phone', '', '071360', '132.50', '265.00', 0.00, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 12:49:52', '2016-04-27 12:49:52', NULL),
(7, '50006478', 'B42223', '0.00', '0.00', '', '5340e IP Phone', '', '071361', '165.00', '330.00', 0.00, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 12:49:52', '2016-04-27 12:49:52', NULL),
(8, '50005991', 'B31439', '0.00', '0.00', '', '5360 IP Phone', '', '050852', '0.00', '385.00', 0.00, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 12:49:52', '2016-04-27 12:49:52', NULL),
(9, '50005811', 'B33747', '0.00', '0.00', '', '5540 IP Console', '', '055291', '565.00', '1130.00', 0.00, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 12:49:52', '2016-04-27 12:49:52', NULL),
(10, '50006441', 'B41969 ', '0.00', '0.00', '', 'Bluetooth Handset/Module Bundle', '', '069290', '0.00', '130.00', 0.00, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 12:49:52', '2016-04-27 12:49:52', NULL),
(11, '50006402', 'B41970 ', '0.00', '0.00', '', 'Bluetooth Module (for Bluetooth Handset/Headset)', '', '069291', '0.00', '95.00', 0.00, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 12:49:52', '2016-04-27 12:49:52', NULL),
(12, '50006442', 'B41971 ', '0.00', '0.00', '', 'Bluetooth Handset w/5300 Charging Plate', '', '069292', '0.00', '100.00', 0.00, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '2016-04-27 12:49:52', '2016-04-27 12:49:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `upgrades`
--

CREATE TABLE `upgrades` (
  `id` int(11) NOT NULL,
  `category` varchar(25) DEFAULT NULL,
  `supplier_ref` varchar(25) DEFAULT NULL,
  `bt_ref` varchar(12) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `description` text,
  `item_code` varchar(25) DEFAULT NULL,
  `xfer` decimal(13,2) DEFAULT NULL,
  `bteup` decimal(12,2) DEFAULT NULL,
  `btbuy` decimal(12,2) NOT NULL,
  `quote_type` varchar(255) NOT NULL,
  `max_discount` decimal(12,2) NOT NULL,
  `pbx_type` varchar(255) NOT NULL,
  `one_yr_standard_care` decimal(12,2) NOT NULL,
  `one_yr_prompt_care` decimal(12,2) NOT NULL,
  `one_yr_total_care` decimal(12,2) NOT NULL,
  `three_yr_standard_care` decimal(12,2) NOT NULL,
  `three_yr_prompt_care` decimal(12,2) NOT NULL,
  `three_yr_total_care` decimal(12,2) NOT NULL,
  `five_yr_standard_care` decimal(12,2) NOT NULL,
  `five_yr_prompt_care` decimal(12,2) NOT NULL,
  `five_yr_total_care` decimal(12,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `oa_view` tinyint(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upgrades`
--

INSERT INTO `upgrades` (`id`, `category`, `supplier_ref`, `bt_ref`, `item_name`, `qty`, `description`, `item_code`, `xfer`, `bteup`, `btbuy`, `quote_type`, `max_discount`, `pbx_type`, `one_yr_standard_care`, `one_yr_prompt_care`, `one_yr_total_care`, `three_yr_standard_care`, `three_yr_prompt_care`, `three_yr_total_care`, `five_yr_standard_care`, `five_yr_prompt_care`, `five_yr_total_care`, `image`, `oa_view`, `updated_at`, `created_at`) VALUES
(1, 'terminal_upgrades', '123', '123', 'MiVB 5304 IP Phone Hospitality Kit', '16', NULL, NULL, NULL, NULL, '0.00', '', '0.00', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 0, '2016-05-20 07:38:20', '0000-00-00 00:00:00'),
(2, 'terminal_upgrades', '2345', '456', 'MiVB Universal Terminal Power Adaptor', NULL, '', NULL, NULL, NULL, '0.00', '', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 1, '2016-05-20 09:45:04', '2016-05-20 08:40:52'),
(3, 'terminal_upgrades', '', '', '5302 / 5304 IP Phone Wall Kit x 16', NULL, '', NULL, NULL, NULL, '0.00', '', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 1, '2016-05-20 13:01:53', '2016-05-20 13:01:53'),
(4, 'terminal_upgrades', '', '', 'Mitel Line Interface Module( UK)', NULL, '', NULL, NULL, NULL, '0.00', '', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 1, '2016-05-20 13:02:41', '2016-05-20 13:02:41'),
(5, 'terminal_upgrades', '', '', 'MiVB IP PKM Interface Module (V2)', NULL, '', NULL, NULL, NULL, '0.00', '', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 1, '2016-05-20 13:03:02', '2016-05-20 13:03:02'),
(6, 'terminal_upgrades', '', '', '5412 PKM Kit - 12 Key', NULL, '', NULL, NULL, NULL, '0.00', '', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 1, '2016-05-20 13:03:37', '2016-05-20 13:03:37'),
(7, 'terminal_upgrades', '', '', '5448 PKM Kit -  48 Key', NULL, '', NULL, NULL, NULL, '0.00', '', '0.00', 'MiVB', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 1, '2016-05-20 13:03:51', '2016-05-20 13:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `confirmation_code`, `confirmed`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin Istrator', 'admin@admin.com', '$2y$10$oxnWgZZn8HfNWK02TCT6i.UR0kW8UtRnC1vDHMoY5uyu6khjPFNrC', 1, '3778e63815bdad82cb18d6d3d440099b', 1, 'bxnimJ740Dcn5zBC4Z2zCtx8ShyGvN2WuF3NT2H57gOMkQddvnHaN3OOyoie', '2016-04-26 14:31:06', '2016-04-26 14:33:52', NULL),
(2, 'Default User', 'user@user.com', '$2y$10$DNGbG7.s0z0iZKBaxzgdIOoJUFTaEbSwWi9RD7wRsi3LE/lPq2eW2', 1, '47205f5ed15d8d99dd35d42435b72f16', 1, NULL, '2016-04-26 14:31:06', '2016-04-26 14:31:06', NULL),
(3, 'Nick', 'n.ashford@northsupply.com', '$2y$10$VkrE6NwUOTLBZ8XXKxKa1ewrhWRRv1QdFydEs1rpjGNf.i/aoMEXO', 1, '08e9fbce2189fc8185c732baa600e75f', 1, 'fYYmLgplirEZqtJRymg3WiiorlHfLUKwASdjoHXJCLN45lxt5H1B6HJfGu5C', '2016-04-26 14:33:21', '2016-05-16 07:15:01', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assigned_roles`
--
ALTER TABLE `assigned_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assigned_roles_user_id_foreign` (`user_id`),
  ADD KEY `assigned_roles_role_id_foreign` (`role_id`);

--
-- Indexes for table `bt_peripherals`
--
ALTER TABLE `bt_peripherals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bundles`
--
ALTER TABLE `bundles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hardware`
--
ALTER TABLE `hardware`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitelbundles`
--
ALTER TABLE `mitelbundles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitelbundle_product`
--
ALTER TABLE `mitelbundle_product`
  ADD PRIMARY KEY (`product_id`,`mitelbundle_id`);

--
-- Indexes for table `mivb_peripherals`
--
ALTER TABLE `mivb_peripherals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_dependencies`
--
ALTER TABLE `permission_dependencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_dependencies_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_dependencies_dependency_id_foreign` (`dependency_id`);

--
-- Indexes for table `permission_groups`
--
ALTER TABLE `permission_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_upgrade`
--
ALTER TABLE `product_upgrade`
  ADD PRIMARY KEY (`product_id`,`upgrade_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `social_logins`
--
ALTER TABLE `social_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_logins_user_id_foreign` (`user_id`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_matrix`
--
ALTER TABLE `system_matrix`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `system_matrix_vendor_ref_unique` (`vendor_ref`),
  ADD UNIQUE KEY `system_matrix_product_description_unique` (`product_description`);

--
-- Indexes for table `terminals`
--
ALTER TABLE `terminals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upgrades`
--
ALTER TABLE `upgrades`
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
-- AUTO_INCREMENT for table `assigned_roles`
--
ALTER TABLE `assigned_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `bt_peripherals`
--
ALTER TABLE `bt_peripherals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bundles`
--
ALTER TABLE `bundles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hardware`
--
ALTER TABLE `hardware`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `mitelbundles`
--
ALTER TABLE `mitelbundles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mivb_peripherals`
--
ALTER TABLE `mivb_peripherals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `permission_dependencies`
--
ALTER TABLE `permission_dependencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `permission_groups`
--
ALTER TABLE `permission_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `social_logins`
--
ALTER TABLE `social_logins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `system_matrix`
--
ALTER TABLE `system_matrix`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `terminals`
--
ALTER TABLE `terminals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `upgrades`
--
ALTER TABLE `upgrades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `assigned_roles`
--
ALTER TABLE `assigned_roles`
  ADD CONSTRAINT `assigned_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `assigned_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_dependencies`
--
ALTER TABLE `permission_dependencies`
  ADD CONSTRAINT `permission_dependencies_dependency_id_foreign` FOREIGN KEY (`dependency_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_dependencies_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `social_logins`
--
ALTER TABLE `social_logins`
  ADD CONSTRAINT `social_logins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
