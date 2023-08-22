-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 21, 2023 at 08:08 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leap789`
--

-- --------------------------------------------------------

--
-- Table structure for table `lime_survey_943857`
--

CREATE TABLE `lime_survey_943857` (
  `id` int NOT NULL,
  `token` varchar(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `submitdate` datetime DEFAULT NULL,
  `lastpage` int DEFAULT NULL,
  `startlanguage` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seed` varchar(31) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Served_By` enum('Agent','Chatbot') COLLATE utf8mb4_unicode_ci DEFAULT 'Agent',
  `943857X2X2` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `943857X2X3` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `943857X2X4` text COLLATE utf8mb4_unicode_ci,
  `survey_submitted_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `survey_sent_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `survey_submitted_status` enum('Yes','No','Partial') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chat_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chat_start_datetime` datetime DEFAULT NULL,
  `service_inquiries` text COLLATE utf8mb4_unicode_ci,
  `agent_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lime_survey_943857`
--

INSERT INTO `lime_survey_943857` (`id`, `token`, `submitdate`, `lastpage`, `startlanguage`, `seed`, `Served_By`, `943857X2X2`, `943857X2X3`, `943857X2X4`, `survey_submitted_date`, `survey_sent_date`, `survey_submitted_status`, `whatsapp_number`, `chat_id`, `customer_name`, `chat_start_datetime`, `service_inquiries`, `agent_id`, `agent_name`) VALUES
(27, NULL, '2023-08-10 10:30:00', 5, 'English', 'abcd1234', 'Agent', 'AO01', 'AO01', 'AO02', '2023-08-11 11:00:00', '2023-08-10 10:00:00', 'Yes', '0553368212', '12345', 'حسن', '2023-08-16 09:30:00', 'Report an accident, Claim', 'A124', 'Alice Smith'),
(26, NULL, '2023-08-09 10:30:00', 5, 'English', 'abcd1234', 'Agent', 'AO01', 'AO01', 'AO02', '2023-08-11 11:00:00', '2023-08-10 10:00:00', 'Yes', '0553368212', '12345', 'حسن', '2023-08-16 09:30:00', 'Report an accident, Claim', 'A124', 'Alice Smith'),
(25, NULL, '2023-08-09 10:30:00', 5, 'English', 'abcd1234', 'Agent', 'AO01', 'AO01', 'AO02', '2023-08-11 11:00:00', '2023-08-10 10:00:00', 'Yes', '0553368212', '12345', 'حسن', '2023-08-16 09:30:00', 'Report an accident, Claim', 'A124', 'Alice Smith'),
(24, NULL, '2023-08-16 10:30:00', 5, 'English', 'abcd1234', 'Agent', 'AO01', 'AO01', 'AO02', '2023-08-16 11:00:00', '2023-08-06 10:00:00', 'Yes', '+123456789', '12345', 'أحمد', '2023-08-16 09:30:00', 'Report an accident, Claim', 'A124', 'Alice Smith'),
(23, NULL, '2023-08-16 10:30:00', 5, 'English', 'abcd1234', 'Agent', 'AO01', 'AO01', 'AO02', '2023-08-16 11:00:00', '2023-08-06 10:00:00', 'Yes', '+123456789', '12345', 'عبدالكريم ', '2023-08-16 09:30:00', 'Report an accident, Claim', 'A124', 'Alice Smith'),
(28, NULL, '2023-08-12 10:30:00', 5, 'English', 'abcd1234', 'Agent', 'AO01', 'AO01', 'AO02', '2023-08-11 11:00:00', '2023-08-10 10:00:00', 'Yes', '0553368212', '12345', 'حسن', '2023-08-16 09:30:00', 'Report an accident, Claim', 'A124', 'Alice Smith'),
(29, NULL, '2023-08-13 10:30:00', 5, 'English', 'abcd1234', 'Agent', 'AO01', 'AO01', 'AO02', '2023-08-11 11:00:00', '2023-08-10 10:00:00', 'Yes', '0553368212', '12345', 'حسن', '2023-08-16 09:30:00', 'Report an accident, Claim', 'A124', 'Alice Smith'),
(30, NULL, '2023-08-13 10:30:00', 5, 'English', 'abcd1234', 'Agent', 'AO01', 'AO01', 'AO02', '2023-08-11 11:00:00', '2023-08-10 10:00:00', 'Yes', '0553321552', '12345', 'حسن', '2023-08-16 09:30:00', 'Report an accident, Claim', 'A124', 'Alice Smith'),
(31, NULL, '2023-08-13 10:30:00', 5, 'English', 'abcd1234', 'Agent', 'AO01', 'AO01', 'AO02', '2023-08-11 11:00:00', '2023-08-12 10:00:00', 'Yes', '0553321552', '12345', 'حسن', '2023-08-16 09:30:00', 'Report an accident, Claim', 'A124', 'Alice Smith'),
(32, NULL, '2023-08-13 10:30:00', 5, 'English', 'abcd1234', 'Agent', 'AO01', 'AO01', 'AO02', '2023-08-11 11:00:00', '2023-08-11 10:00:00', 'Yes', '0553321552', '12345', 'حسن', '2023-08-16 09:30:00', 'Report an accident, Claim', 'A124', 'Alice Smith'),
(33, NULL, '2023-08-13 10:30:00', 5, 'English', 'abcd1234', 'Agent', 'AO01', 'AO01', 'AO02', '2023-08-11 11:00:00', '2023-08-14 10:00:00', 'Yes', '0553321552', '12345', 'حسن', '2023-08-16 09:30:00', 'Report an accident, Claim', 'A124', 'Alice Smith'),
(34, NULL, '2023-08-13 10:30:00', 5, 'English', 'abcd1234', 'Agent', 'AO01', 'AO01', 'AO02', '2023-08-11 11:00:00', '2023-08-20 10:00:00', 'Yes', '0553321552', '12345', 'حسن', '2023-08-16 09:30:00', 'Report an accident, Claim', 'A124', 'Alice Smith'),
(35, NULL, '2023-08-13 10:30:00', 5, 'English', 'abcd1234', 'Agent', 'AO01', 'AO01', 'AO02', '2023-08-11 11:00:00', '2023-08-19 10:00:00', 'Yes', '0553321552', '12345', 'حسن', '2023-08-16 09:30:00', 'Report an accident, Claim', 'A124', 'Alice Smith'),
(36, NULL, NULL, NULL, '', NULL, 'Chatbot', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lime_survey_943857`
--
ALTER TABLE `lime_survey_943857`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_survey_token_943857_27201` (`token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lime_survey_943857`
--
ALTER TABLE `lime_survey_943857`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
