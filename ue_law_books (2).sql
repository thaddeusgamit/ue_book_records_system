-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql111.infinityfree.com
-- Generation Time: Oct 17, 2023 at 11:20 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_33893914_ue_law_books`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_time_createad` datetime NOT NULL,
  `date_time_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `date_time_createad`, `date_time_updated`) VALUES
(1, 'admin', '$2y$10$yzPkmyJpOB98i7hDeNtSDe.7x2Uv8/3bpLS6d9vvCdNZHOzPQG1c.', '2023-03-29 00:56:37', '2023-03-29 00:56:37');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `picture` varchar(225) NOT NULL,
  `header` varchar(500) NOT NULL,
  `contents` varchar(500) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `picture`, `header`, `contents`, `date_created`, `date_updated`) VALUES
(8, '350826825_549731464039264_1052020952036725951_n.jpg', 'Happy Pride Month - June 2023', '[LSG Advisory]\r\n\r\nLet us all celebrate inclusivity, love and belongingness in humanity! #PRIDEMonth2023\r\n\r\nðŸ©·â¤ï¸ðŸ§¡ðŸ’›ðŸ’šðŸ’™ðŸ’œ\r\n\r\nDevelopment | Representation | Inclusivity | Fruition | Transcendence\r\n\r\nHappy Pride Month - June 2023 ðŸ¤\r\n\r\n#iPASA\r\n#UELSG2023\r\n#TheLastDRIFT', '2023-06-08 17:09:41', '2023-06-08 17:09:41'),
(9, '350805755_576335597817082_5750865464286538925_n.jpg', 'CLAIM YOUR SHIRT!!!!', '[LSG Advisory]\r\n\r\nClaim your shirts today, May 31 ðŸ–¤ðŸ¤\r\n\r\nKindly message Ms. Diana Ibay, Vice President - Internal, and Ms. Ann Clarisse Mayo, Public Relations Officer to assist you!\r\n\r\n#UELSG2023\r\n#TheLastDRIFT\r\n#UECLawShirt', '2023-06-08 17:10:21', '2023-06-08 17:10:21'),
(10, '348296604_182310254772274_8271199189203917804_n.jpg', 'Goodluck!!!', '[LSG Advisory]\r\nWishing you the best in our Final Examination week! All hardworks and sacrifices will pay off, fellow UE Law Warrior ðŸ’¯\r\n#iPASA\r\n#UELSG2023\r\n#TheLastDRIFT', '2023-06-08 17:11:57', '2023-06-08 17:11:57');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(100) NOT NULL,
  `front` varchar(255) NOT NULL,
  `back` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `status` int(100) NOT NULL,
  `book_borrowed` datetime DEFAULT NULL,
  `date_time_created` datetime NOT NULL,
  `date_time-updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `front`, `back`, `title`, `author`, `status`, `book_borrowed`, `date_time_created`, `date_time-updated`) VALUES
(1, 'Volume 1 (Front).jpg', 'Volume 1 (Back) - Copy.jpg', 'Credit Transactions Notes and Cases (Volume I)', 'Stephanie V. Gomez-Somera', 1, '0000-00-00 00:00:00', '2023-04-01 02:49:29', '2023-04-01 02:49:29'),
(2, 'Volume 2 (Front).jpg', 'Volume 2 (Back).jpg', 'Credit Transactions Notes and Cases (Volume II)', 'Stephanie V. Gomez-Somera', 1, '0000-00-00 00:00:00', '2023-04-01 02:50:15', '2023-04-01 02:50:15'),
(5, 'Front 1.jpg', 'Front11.png', 'Philippine Law on Torts and Damages (Volume 1)', 'J. Cesar S. Sangco', 1, '0000-00-00 00:00:00', '2023-04-01 02:59:33', '2023-04-01 02:59:33'),
(7, 'Front 2.jpg', 'Front 22.png', 'Philippine Law on Torts and Damages (Volume 2)', 'J. Cesar S. Sangco', 1, '0000-00-00 00:00:00', '2023-04-01 03:02:45', '2023-04-01 03:02:45'),
(8, 'IMG_20230213_212742_513.jpg', 'IMG_20230213_212749_792.jpg', 'The Labor Code with Comments and Cases (Volume 1)', 'C.A Azucena Jr.', 1, '0000-00-00 00:00:00', '2023-04-01 03:25:44', '2023-04-01 03:25:44'),
(10, 'IMG_20230213_212802_959.jpg', 'front22.png', 'The Labor Code with Comments and Cases (Volume 2)', 'C.A Azucena Jr.', 1, '0000-00-00 00:00:00', '2023-04-01 03:29:44', '2023-04-01 03:29:44'),
(12, '338917910_242325034915305_8040702725371914107_n.png', '338655548_1205569377016486_7997741684610646473_n.png', 'Special Proceedings (Amendments to the Rules and Jurisprudential Updates) ', 'Narciso M. Aguilar', 1, '0000-00-00 00:00:00', '2023-04-01 04:12:11', '2023-04-01 04:12:11'),
(13, '338962796_1387569862057456_8194043512632905390_n.png', '338845768_217176287657529_8156463466181477888_n.png', 'Statutory Construction', 'Atty. David Robert C. Aquino', 1, '0000-00-00 00:00:00', '2023-04-01 04:34:18', '2023-04-01 04:34:18'),
(14, '338866180_1272160500179208_632924949442676784_n.png', '338987338_766187388434967_3810860846823594796_n.png', 'Canons of Statutory Construction ', 'Dennis B. Funa', 1, '0000-00-00 00:00:00', '2023-04-01 04:39:02', '2023-04-01 04:39:02'),
(15, '338912488_917722316208844_6848482568156895276_n.png', '339240342_618098279753167_6468163273024827118_n.png', 'Special Proceedings (A foresight to the bar exam)', 'Atty. Gemy Lito L. Festin', 1, '0000-00-00 00:00:00', '2023-04-01 04:44:32', '2023-04-01 04:44:32'),
(16, '338917716_2137531613102783_1784386702947744567_n.png', '339202947_767988108038058_4958787393059475612_n.png', 'Analysis of Philippine Agency Law and Jurisprudence', 'Rommel J. Casis', 1, '0000-00-00 00:00:00', '2023-04-01 04:50:38', '2023-04-01 04:50:38'),
(17, '338863215_576240261138662_6825989722050512536_n.png', '339466514_921261202458599_5258800038556108957_n.png', 'Analysis of Philippine Partnership Law and Jurisprudence', 'Rommel J. Casis', 1, '0000-00-00 00:00:00', '2023-04-01 04:53:33', '2023-04-01 04:53:33'),
(18, '339105408_1422006615236022_641184168359853405_n.png', '338601451_606688221007588_2440929623058810832_n.png', 'Labor and Social Legislation (An Updated Systematic Presentation)', 'Froilan M. Bacungan', 1, '0000-00-00 00:00:00', '2023-04-01 05:31:40', '2023-04-01 05:31:40'),
(19, '339058042_215010377845045_3142328173990692053_n.png', '338363417_1421742895327393_4188417473742855279_n.png', 'The Insurance Code of the Philippines (Annotated, 1992 Edition)', 'Hector S. De Leon', 1, '0000-00-00 00:00:00', '2023-04-01 05:36:07', '2023-04-01 05:36:07'),
(20, '338910883_1449014022538301_1411131194590033824_n.png', '338924481_203236802345793_257717635442878716_n.png', 'Sales and Other Special Contracts (2010 Edition)', 'Dean Ernesto L. Pineda', 1, '0000-00-00 00:00:00', '2023-04-01 05:41:01', '2023-04-01 05:41:01'),
(21, '338778813_152762901050373_6039752333692736092_n.png', '338920176_6259963057401748_3262741961045856869_n.png', 'Partnership, Agency and Trusts', 'Dean Ernesto L. Pineda', 1, '0000-00-00 00:00:00', '2023-04-01 05:46:33', '2023-04-01 05:46:33'),
(22, '350244917_207933648737470_8964504966374078177_n.jpg', '350244917_207933648737470_8964504966374078177_n.jpg', 'Tax Reform Act of 1997 (The Revised Internal Revenue Code)', 'Prof. Jose N. Nolledo', 1, '0000-00-00 00:00:00', '2023-06-08 18:26:14', '2023-06-08 18:26:14'),
(23, 'Front.png', 'Side.png', 'Philippine Tax On Transfer and Business (Based On RA 8424)', 'Llamado, San Diego, Llamado', 1, '0000-00-00 00:00:00', '2023-06-08 18:30:50', '2023-06-08 18:30:50'),
(24, 'Front.jpg', 'Front.jpg', 'The Local Government Code of 1991 (Other Related Laws and Rules)', 'Carmelo Sison and Ma. Gisella Dizon - Reyes', 1, '0000-00-00 00:00:00', '2023-06-08 18:34:02', '2023-06-08 18:34:02'),
(25, 'front.jpg', 'front.jpg', 'Introduction To Legal Philosophy (2003 Edition)', 'Crisolito Pascual', 1, '0000-00-00 00:00:00', '2023-06-08 18:42:21', '2023-06-08 18:42:21'),
(26, 'frotn.jpg', 'frotn.jpg', 'Essentials of Philippine Business Law (Notes and Cases)', 'Danny Chan, Gilberto Lauengco, Reginald Nolido, Allan Ong, Joseph Santiago, Eduardo Valdez', 1, '0000-00-00 00:00:00', '2023-06-08 18:48:22', '2023-06-08 18:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(100) NOT NULL,
  `announce_id` int(100) NOT NULL,
  `pictures` varchar(100) NOT NULL,
  `date_time_createad` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
