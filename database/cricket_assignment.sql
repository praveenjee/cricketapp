-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2020 at 12:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cricket_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(255) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'ABW', 'Aruba', 'AW', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(2, 'AFG', 'Afghanistan', 'AF', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(3, 'AGO', 'Angola', 'AO', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(4, 'AIA', 'Anguilla', 'AI', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(5, 'ALA', 'Åland', 'AX', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(6, 'ALB', 'Albania', 'AL', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(7, 'AND', 'Andorra', 'AD', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(8, 'ARE', 'United Arab Emirates', 'AE', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(9, 'ARG', 'Argentina', 'AR', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(10, 'ARM', 'Armenia', 'AM', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(11, 'ASM', 'American Samoa', 'AS', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(12, 'ATA', 'Antarctica', 'AQ', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(13, 'ATF', 'French Southern Territories', 'TF', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(14, 'ATG', 'Antigua and Barbuda', 'AG', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(15, 'AUS', 'Australia', 'AU', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(16, 'AUT', 'Austria', 'AT', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(17, 'AZE', 'Azerbaijan', 'AZ', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(18, 'BDI', 'Burundi', 'BI', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(19, 'BEL', 'Belgium', 'BE', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(20, 'BEN', 'Benin', 'BJ', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(21, 'BES', 'Bonaire', 'BQ', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(22, 'BFA', 'Burkina Faso', 'BF', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(23, 'BGD', 'Bangladesh', 'BD', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(24, 'BGR', 'Bulgaria', 'BG', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(25, 'BHR', 'Bahrain', 'BH', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(26, 'BHS', 'Bahamas', 'BS', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(27, 'BIH', 'Bosnia and Herzegovina', 'BA', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(28, 'BLM', 'Saint Barthélemy', 'BL', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(29, 'BLR', 'Belarus', 'BY', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(30, 'BLZ', 'Belize', 'BZ', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(31, 'BMU', 'Bermuda', 'BM', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(32, 'BOL', 'Bolivia', 'BO', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(33, 'BRA', 'Brazil', 'BR', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(34, 'BRB', 'Barbados', 'BB', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(35, 'BRN', 'Brunei', 'BN', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(36, 'BTN', 'Bhutan', 'BT', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(37, 'BVT', 'Bouvet Island', 'BV', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(38, 'BWA', 'Botswana', 'BW', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(39, 'CAF', 'Central African Republic', 'CF', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(40, 'CAN', 'Canada', 'CA', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(41, 'CCK', 'Cocos [Keeling] Islands', 'CC', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(42, 'CHE', 'Switzerland', 'CH', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(43, 'CHL', 'Chile', 'CL', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(44, 'CHN', 'China', 'CN', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(45, 'CIV', 'Ivory Coast', 'CI', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(46, 'CMR', 'Cameroon', 'CM', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(47, 'COD', 'Democratic Republic of the Congo', 'CD', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(48, 'COG', 'Republic of the Congo', 'CG', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(49, 'COK', 'Cook Islands', 'CK', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(50, 'COL', 'Colombia', 'CO', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(51, 'COM', 'Comoros', 'KM', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(52, 'CPV', 'Cape Verde', 'CV', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(53, 'CRI', 'Costa Rica', 'CR', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(54, 'CUB', 'Cuba', 'CU', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(55, 'CUW', 'Curacao', 'CW', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(56, 'CXR', 'Christmas Island', 'CX', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(57, 'CYM', 'Cayman Islands', 'KY', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(58, 'CYP', 'Cyprus', 'CY', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(59, 'CZE', 'Czech Republic', 'CZ', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(60, 'DEU', 'Germany', 'DE', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(61, 'DJI', 'Djibouti', 'DJ', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(62, 'DMA', 'Dominica', 'DM', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(63, 'DNK', 'Denmark', 'DK', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(64, 'DOM', 'Dominican Republic', 'DO', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(65, 'DZA', 'Algeria', 'DZ', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(66, 'ECU', 'Ecuador', 'EC', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(67, 'EGY', 'Egypt', 'EG', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(68, 'ERI', 'Eritrea', 'ER', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(69, 'ESH', 'Western Sahara', 'EH', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(70, 'ESP', 'Spain', 'ES', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(71, 'EST', 'Estonia', 'EE', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(72, 'ETH', 'Ethiopia', 'ET', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(73, 'FIN', 'Finland', 'FI', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(74, 'FJI', 'Fiji', 'FJ', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(75, 'FLK', 'Falkland Islands', 'FK', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(76, 'FRA', 'France', 'FR', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(77, 'FRO', 'Faroe Islands', 'FO', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(78, 'FSM', 'Micronesia', 'FM', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(79, 'GAB', 'Gabon', 'GA', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(80, 'GBR', 'United Kingdom', 'GB', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(81, 'GEO', 'Georgia', 'GE', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(82, 'GGY', 'Guernsey', 'GG', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(83, 'GHA', 'Ghana', 'GH', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(84, 'GIB', 'Gibraltar', 'GI', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(85, 'GIN', 'Guinea', 'GN', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(86, 'GLP', 'Guadeloupe', 'GP', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(87, 'GMB', 'Gambia', 'GM', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(88, 'GNB', 'Guinea-Bissau', 'GW', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(89, 'GNQ', 'Equatorial Guinea', 'GQ', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(90, 'GRC', 'Greece', 'GR', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(91, 'GRD', 'Grenada', 'GD', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(92, 'GRL', 'Greenland', 'GL', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(93, 'GTM', 'Guatemala', 'GT', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(94, 'GUF', 'French Guiana', 'GF', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(95, 'GUM', 'Guam', 'GU', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(96, 'GUY', 'Guyana', 'GY', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(97, 'HKG', 'Hong Kong', 'HK', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(98, 'HMD', 'Heard Island and McDonald Islands', 'HM', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(99, 'HND', 'Honduras', 'HN', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(100, 'HRV', 'Croatia', 'HR', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(101, 'HTI', 'Haiti', 'HT', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(102, 'HUN', 'Hungary', 'HU', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(103, 'IDN', 'Indonesia', 'ID', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(104, 'IMN', 'Isle of Man', 'IM', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(105, 'IND', 'India', 'IN', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(106, 'IOT', 'British Indian Ocean Territory', 'IO', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(107, 'IRL', 'Ireland', 'IE', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(108, 'IRN', 'Iran', 'IR', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(109, 'IRQ', 'Iraq', 'IQ', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(110, 'ISL', 'Iceland', 'IS', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(111, 'ISR', 'Israel', 'IL', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(112, 'ITA', 'Italy', 'IT', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(113, 'JAM', 'Jamaica', 'JM', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(114, 'JEY', 'Jersey', 'JE', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(115, 'JOR', 'Jordan', 'JO', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(116, 'JPN', 'Japan', 'JP', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(117, 'KAZ', 'Kazakhstan', 'KZ', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(118, 'KEN', 'Kenya', 'KE', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(119, 'KGZ', 'Kyrgyzstan', 'KG', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(120, 'KHM', 'Cambodia', 'KH', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(121, 'KIR', 'Kiribati', 'KI', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(122, 'KNA', 'Saint Kitts and Nevis', 'KN', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(123, 'KOR', 'South Korea', 'KR', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(124, 'KWT', 'Kuwait', 'KW', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(125, 'LAO', 'Laos', 'LA', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(126, 'LBN', 'Lebanon', 'LB', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(127, 'LBR', 'Liberia', 'LR', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(128, 'LBY', 'Libya', 'LY', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(129, 'LCA', 'Saint Lucia', 'LC', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(130, 'LIE', 'Liechtenstein', 'LI', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(131, 'LKA', 'Sri Lanka', 'LK', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(132, 'LSO', 'Lesotho', 'LS', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(133, 'LTU', 'Lithuania', 'LT', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(134, 'LUX', 'Luxembourg', 'LU', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(135, 'LVA', 'Latvia', 'LV', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(136, 'MAC', 'Macao', 'MO', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(137, 'MAF', 'Saint Martin', 'MF', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(138, 'MAR', 'Morocco', 'MA', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(139, 'MCO', 'Monaco', 'MC', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(140, 'MDA', 'Moldova', 'MD', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(141, 'MDG', 'Madagascar', 'MG', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(142, 'MDV', 'Maldives', 'MV', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(143, 'MEX', 'Mexico', 'MX', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(144, 'MHL', 'Marshall Islands', 'MH', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(145, 'MKD', 'Macedonia', 'MK', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(146, 'MLI', 'Mali', 'ML', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(147, 'MLT', 'Malta', 'MT', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(148, 'MMR', 'Myanmar [Burma]', 'MM', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(149, 'MNE', 'Montenegro', 'ME', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(150, 'MNG', 'Mongolia', 'MN', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(151, 'MNP', 'Northern Mariana Islands', 'MP', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(152, 'MOZ', 'Mozambique', 'MZ', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(153, 'MRT', 'Mauritania', 'MR', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(154, 'MSR', 'Montserrat', 'MS', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(155, 'MTQ', 'Martinique', 'MQ', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(156, 'MUS', 'Mauritius', 'MU', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(157, 'MWI', 'Malawi', 'MW', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(158, 'MYS', 'Malaysia', 'MY', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(159, 'MYT', 'Mayotte', 'YT', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(160, 'NAM', 'Namibia', 'NA', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(161, 'NCL', 'New Caledonia', 'NC', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(162, 'NER', 'Niger', 'NE', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(163, 'NFK', 'Norfolk Island', 'NF', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(164, 'NGA', 'Nigeria', 'NG', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(165, 'NIC', 'Nicaragua', 'NI', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(166, 'NIU', 'Niue', 'NU', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(167, 'NLD', 'Netherlands', 'NL', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(168, 'NOR', 'Norway', 'NO', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(169, 'NPL', 'Nepal', 'NP', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(170, 'NRU', 'Nauru', 'NR', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(171, 'NZL', 'New Zealand', 'NZ', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(172, 'OMN', 'Oman', 'OM', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(173, 'PAK', 'Pakistan', 'PK', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(174, 'PAN', 'Panama', 'PA', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(175, 'PCN', 'Pitcairn Islands', 'PN', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(176, 'PER', 'Peru', 'PE', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(177, 'PHL', 'Philippines', 'PH', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(178, 'PLW', 'Palau', 'PW', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(179, 'PNG', 'Papua New Guinea', 'PG', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(180, 'POL', 'Poland', 'PL', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(181, 'PRI', 'Puerto Rico', 'PR', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(182, 'PRK', 'North Korea', 'KP', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(183, 'PRT', 'Portugal', 'PT', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(184, 'PRY', 'Paraguay', 'PY', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(185, 'PSE', 'Palestine', 'PS', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(186, 'PYF', 'French Polynesia', 'PF', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(187, 'QAT', 'Qatar', 'QA', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(188, 'REU', 'Réunion', 'RE', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(189, 'ROU', 'Romania', 'RO', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(190, 'RUS', 'Russia', 'RU', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(191, 'RWA', 'Rwanda', 'RW', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(192, 'SAU', 'Saudi Arabia', 'SA', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(193, 'SDN', 'Sudan', 'SD', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(194, 'SEN', 'Senegal', 'SN', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(195, 'SGP', 'Singapore', 'SG', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(196, 'SGS', 'South Georgia and the South Sandwich Islands', 'GS', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(197, 'SHN', 'Saint Helena', 'SH', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(198, 'SJM', 'Svalbard and Jan Mayen', 'SJ', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(199, 'SLB', 'Solomon Islands', 'SB', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(200, 'SLE', 'Sierra Leone', 'SL', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(201, 'SLV', 'El Salvador', 'SV', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(202, 'SMR', 'San Marino', 'SM', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(203, 'SOM', 'Somalia', 'SO', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(204, 'SPM', 'Saint Pierre and Miquelon', 'PM', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(205, 'SRB', 'Serbia', 'RS', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(206, 'SSD', 'South Sudan', 'SS', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(207, 'STP', 'São Tomé and Príncipe', 'ST', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(208, 'SUR', 'Suriname', 'SR', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(209, 'SVK', 'Slovakia', 'SK', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(210, 'SVN', 'Slovenia', 'SI', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(211, 'SWE', 'Sweden', 'SE', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(212, 'SWZ', 'Swaziland', 'SZ', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(213, 'SXM', 'Sint Maarten', 'SX', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(214, 'SYC', 'Seychelles', 'SC', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(215, 'SYR', 'Syria', 'SY', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(216, 'TCA', 'Turks and Caicos Islands', 'TC', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(217, 'TCD', 'Chad', 'TD', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(218, 'TGO', 'Togo', 'TG', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(219, 'THA', 'Thailand', 'TH', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(220, 'TJK', 'Tajikistan', 'TJ', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(221, 'TKL', 'Tokelau', 'TK', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(222, 'TKM', 'Turkmenistan', 'TM', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(223, 'TLS', 'East Timor', 'TL', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(224, 'TON', 'Tonga', 'TO', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(225, 'TTO', 'Trinidad and Tobago', 'TT', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(226, 'TUN', 'Tunisia', 'TN', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(227, 'TUR', 'Turkey', 'TR', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(228, 'TUV', 'Tuvalu', 'TV', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(229, 'TWN', 'Taiwan', 'TW', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(230, 'TZA', 'Tanzania', 'TZ', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(231, 'UGA', 'Uganda', 'UG', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(232, 'UKR', 'Ukraine', 'UA', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(233, 'UMI', 'U.S. Minor Outlying Islands', 'UM', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(234, 'URY', 'Uruguay', 'UY', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(235, 'USA', 'United States', 'US', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(236, 'UZB', 'Uzbekistan', 'UZ', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(237, 'VAT', 'Vatican City', 'VA', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(238, 'VCT', 'Saint Vincent and the Grenadines', 'VC', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(239, 'VEN', 'Venezuela', 'VE', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(240, 'VGB', 'British Virgin Islands', 'VG', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(241, 'VIR', 'U.S. Virgin Islands', 'VI', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(242, 'VNM', 'Vietnam', 'VN', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(243, 'VUT', 'Vanuatu', 'VU', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(244, 'WLF', 'Wallis and Futuna', 'WF', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(245, 'WSM', 'Samoa', 'WS', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(246, 'XKX', 'Kosovo', 'XK', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(247, 'YEM', 'Yemen', 'YE', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(248, 'ZAF', 'South Africa', 'ZA', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(249, 'ZMB', 'Zambia', 'ZM', '2020-04-22 10:15:35', '2020-04-22 10:15:35'),
(250, 'ZWE', 'Zimbabwe', 'ZW', '2020-04-22 10:15:35', '2020-04-22 10:15:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` int(10) UNSIGNED NOT NULL,
  `sessionid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_a` int(11) NOT NULL COMMENT 'team_id of team_a',
  `team_b` int(11) NOT NULL COMMENT 'team_id of team_b',
  `team_a_score` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_b_score` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `winner_team` int(11) DEFAULT NULL COMMENT 'team_id of winner team',
  `is_draw` enum('N','Y') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `sessionid`, `title`, `team_a`, `team_b`, `team_a_score`, `team_b_score`, `winner_team`, `is_draw`, `created_at`, `updated_at`) VALUES
(1, 'ab90a09f0c81c7ee3392626db3b554e4', 'Royal Challengers Bangalore Vs Kolkata Knight Riders', 1, 3, '63', '64', 3, 'N', '2020-07-21 03:17:31', '2020-07-21 03:17:31'),
(2, 'ab90a09f0c81c7ee3392626db3b554e4', 'Mumbai Indians Vs Chennai Super Kings', 2, 4, '126', '111', 2, 'N', '2020-07-21 03:18:09', '2020-07-21 03:18:09'),
(3, 'ab90a09f0c81c7ee3392626db3b554e4', 'Chennai Super Kings Vs Mumbai Indians', 4, 2, '96', '51', 4, 'N', '2020-07-21 04:19:49', '2020-07-21 04:19:49'),
(4, 'bc6e07c989ce2cbd0a8607d1cd35758c', 'Royal Challengers Bangalore Vs Mumbai Indians', 1, 2, '116', '66', 1, 'N', '2020-07-21 04:31:44', '2020-07-21 04:31:44'),
(5, 'bc6e07c989ce2cbd0a8607d1cd35758c', 'Mumbai Indians Vs Kolkata Knight Riders', 2, 3, '112', '53', 2, 'N', '2020-07-21 04:32:10', '2020-07-21 04:32:10'),
(6, 'bc6e07c989ce2cbd0a8607d1cd35758c', 'Chennai Super Kings Vs Kings XI Punjab', 4, 5, '109', '64', 4, 'N', '2020-07-21 04:32:30', '2020-07-21 04:32:30'),
(7, 'bc6e07c989ce2cbd0a8607d1cd35758c', 'Royal Challengers Bangalore Vs Kolkata Knight Riders', 1, 3, '110', '128', 3, 'N', '2020-07-21 04:32:50', '2020-07-21 04:32:50'),
(8, 'bc6e07c989ce2cbd0a8607d1cd35758c', 'Kings XI Punjab Vs Chennai Super Kings', 5, 4, '141', '136', 5, 'N', '2020-07-21 04:33:05', '2020-07-21 04:33:05'),
(9, 'bc6e07c989ce2cbd0a8607d1cd35758c', 'Mumbai Indians Vs Chennai Super Kings', 2, 4, '71', '88', 4, 'N', '2020-07-21 04:33:40', '2020-07-21 04:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2020_06_06_031825_create_teams_table', 2),
(12, '2020_06_06_040030_create_players_table', 2),
(13, '2020_07_17_130341_create_matches_table', 2),
(14, '2020_07_17_130358_create_points_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_uri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jersey_number` int(10) UNSIGNED NOT NULL,
  `team_id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `history` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `first_name`, `last_name`, `image_uri`, `jersey_number`, `team_id`, `country_id`, `history`, `description`, `status`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Maria', 'Krajcik', 'img7-1595260301.jpg', 101, 1, 105, '<p>Maria Krajcik description</p>', 'Maria Krajcik description', '1', 'Maria', 'Maria', 'Maria', '2020-06-05 06:51:20', '2020-07-20 10:21:41'),
(2, 'Oren', 'Cremin', 'default_profile-1595260519.png', 102, 1, 105, '<p>Oren Cremin description</p>', 'Oren Cremin description', '1', 'Meta Title', 'Meta Keywords', 'Meta Description', '2020-06-05 06:51:20', '2020-07-20 10:25:19'),
(3, 'Hudson', 'Ziemann', 'download(1)-1595260418.jpg', 201, 2, 105, '<p>Hudson Ziemann description</p>', 'Hudson Ziemann description', '1', 'Hudson Ziemann', 'Hudson Ziemann', 'Hudson Ziemann', '2020-06-05 06:51:20', '2020-07-20 10:23:38'),
(4, 'Hans', 'Ankunding', 'download4-1595260441.jpg', 202, 2, 105, '<p>Hans Ankunding description</p>', 'Hans Ankunding description', '1', 'Hans Ankunding', 'Hans Ankunding', 'Hans Ankunding', '2020-06-05 06:51:20', '2020-07-20 10:24:01'),
(5, 'Colin', 'O\'Keefe', 'img5-1595260250.jpg', 301, 3, 105, '<p>Colin O&#39;Keefe description</p>', 'Colin O\'Keefe description', '1', 'Colin O\'Keefe', 'Colin O\'Keefe', 'Colin O\'Keefe', '2020-06-05 06:51:20', '2020-07-20 10:20:50'),
(6, 'Ashlynn', 'Halvorson', 'images-1595260466.jpg', 302, 3, 105, '<p>Ashlynn Halvorson description</p>', 'Ashlynn Halvorson description', '1', 'Ashlynn Halvorson', 'Ashlynn Halvorson', 'Ashlynn Halvorson', '2020-06-05 06:51:20', '2020-07-20 10:24:26'),
(7, 'Donna', 'Green', 'blog-author3-1595260199.jpg', 401, 4, 105, '<p>Donna Green description</p>', 'Donna Green description', '1', 'Donna Green', 'Donna Green', 'Donna Green', '2020-06-05 06:51:20', '2020-07-20 10:19:59'),
(8, 'Archibald', 'Hane', 'blog-author1-1595260225.jpg', 402, 4, 105, '<p>Archibald Hane description</p>', 'Archibald Hane description', '1', 'Archibald Hane', 'Archibald Hane', 'Archibald Hane', '2020-06-05 06:51:20', '2020-07-20 10:20:25'),
(9, 'Drew', 'Ruecker', 'img6-1595260272.jpg', 501, 5, 105, '<p>Drew Ruecker description</p>', 'Drew Ruecker description', '1', 'Drew Ruecke', 'Drew Ruecke', 'Drew Ruecke', '2020-06-05 06:51:20', '2020-07-20 10:21:12'),
(10, 'Tina', 'Lueilwitz', 'download(2)-1595260491.jpg', 502, 5, 105, '<p>Tina Lueilwitz description</p>', 'Tina Lueilwitz description', '1', 'Tina Lueilwitz', 'Tina Lueilwitz', 'Tina Lueilwitz', '2020-06-05 06:51:20', '2020-07-20 10:24:51'),
(11, 'Test Player', NULL, 'indiamap-1595080962.png', 124, 1, 105, '<p>Royal Challengers Bangalore -124</p>', 'Royal Challengers Bangalore -124', '0', 'Jersey-124', 'Jersey-124', 'Jersey-124', '2020-07-18 08:32:42', '2020-07-18 08:32:42');

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE `points` (
  `id` int(10) UNSIGNED NOT NULL,
  `sessionid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` int(11) NOT NULL,
  `match_id` int(11) NOT NULL,
  `points` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`id`, `sessionid`, `team_id`, `match_id`, `points`, `created_at`, `updated_at`) VALUES
(1, 'ab90a09f0c81c7ee3392626db3b554e4', 3, 1, 2, '2020-07-21 03:17:31', '2020-07-21 03:17:31'),
(2, 'ab90a09f0c81c7ee3392626db3b554e4', 2, 2, 2, '2020-07-21 03:18:09', '2020-07-21 03:18:09'),
(3, 'ab90a09f0c81c7ee3392626db3b554e4', 4, 3, 2, '2020-07-21 04:19:49', '2020-07-21 04:19:49'),
(4, 'bc6e07c989ce2cbd0a8607d1cd35758c', 1, 4, 2, '2020-07-21 04:31:44', '2020-07-21 04:31:44'),
(5, 'bc6e07c989ce2cbd0a8607d1cd35758c', 2, 5, 2, '2020-07-21 04:32:10', '2020-07-21 04:32:10'),
(6, 'bc6e07c989ce2cbd0a8607d1cd35758c', 4, 6, 2, '2020-07-21 04:32:30', '2020-07-21 04:32:30'),
(7, 'bc6e07c989ce2cbd0a8607d1cd35758c', 3, 7, 2, '2020-07-21 04:32:50', '2020-07-21 04:32:50'),
(8, 'bc6e07c989ce2cbd0a8607d1cd35758c', 5, 8, 2, '2020-07-21 04:33:05', '2020-07-21 04:33:05'),
(9, 'bc6e07c989ce2cbd0a8607d1cd35758c', 4, 9, 2, '2020-07-21 04:33:40', '2020-07-21 04:33:40');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_uri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `history` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `club_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `slug`, `logo_uri`, `history`, `description`, `club_state`, `status`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Royal Challengers Bangalore', 'royal-challengers-bangalore', '1200px-Royal_Challengers_Bangalore_2020.png', 'Royal Challengers Bangalore', 'Royal Challengers Bangalore', 'Bangalore', '1', 'Royal Challengers Bangalore', 'Royal Challengers Bangalore', 'Royal Challengers Bangalore', '2020-06-05 01:51:20', '2020-06-05 05:52:34'),
(2, 'Mumbai Indians', 'mumbai-indians', 'mumbai_indians.png', 'Mumbai Indians', 'Mumbai Indians', 'Mumbai', '1', 'Mumbai Indians', 'Mumbai Indians', 'Mumbai Indians', '2020-06-05 01:51:20', '2020-06-05 05:48:07'),
(3, 'Kolkata Knight Riders', 'kolkata-knight-riders', 'night_riders.jpg', 'Kolkata Knight Riders', 'Kolkata Knight Riders', 'West Bangal', '1', 'Kolkata Knight Riders', 'Kolkata Knight Riders', 'Kolkata Knight Riders', '2020-06-05 01:51:20', '2020-06-05 13:00:00'),
(4, 'Chennai Super Kings', 'chennai-super-kings', 'chennai_superkings.png', 'Chennai Super Kings', 'Chennai Super Kings', 'Chennai', '1', 'Chennai Super Kings', 'Chennai Super Kings', 'Chennai Super Kings', '2020-06-05 01:51:20', '2020-06-05 05:48:31'),
(5, 'Kings XI Punjab', 'kings-xi-punjab', '1200px-Kings_XI_Punjab_logo.png', 'Kings XI Punjab', 'Kings XI Punjab', 'Punjab', '1', 'Kings XI Punjab', 'Kings XI Punjab', 'Kings XI Punjab', '2020-06-05 01:51:20', '2020-06-05 05:55:20'),
(23, 'Test Team A', 'test-team-a', 'rainy-weather-minimal-1595072092.png', 'Test Team A', 'Test Team A', 'Delhi', '0', 'test team meta', 'test team keywords', 'test team description', '2020-07-18 06:03:05', '2020-07-18 06:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Praveen Kumar', 'pkumar5330@gmail.com', NULL, '$2y$10$cz8.JEicY1/Tg86QUhqauenMS4UXDIvbEmBTv7/fwrj76qaTLuM3y', NULL, '2020-07-17 07:42:33', '2020-07-17 07:42:33'),
(4, 'Manish Mishra', 'manishmishra@gmail.com', NULL, '$2y$10$FVIHQHhCkx4pBPciZ6XNouwUoUjt//r3ZDBm3WnOMkxrOwVj/Oeka', NULL, '2020-07-21 04:30:36', '2020-07-21 04:30:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `players_jersey_number_index` (`jersey_number`);

--
-- Indexes for table `points`
--
ALTER TABLE `points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teams_slug_unique` (`slug`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `points`
--
ALTER TABLE `points`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
