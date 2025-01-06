-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2025 at 08:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdbdd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(140) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Richard', 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`, `nome`) VALUES
(1, 'micheljunioferreira@gmail.com', '$2y$10$/Y1t5pF64023KR7Yx5Beau9u.MjwocQNqWQ3rFbejsVU6THB6F.sW', 'Michel'),
(2, 'SophiaSantos@gmail.com', '$2y$10$bTIN69KWXFdZbNdc34p9H.lnHhP9OW4IYN0b1rq9tujYkx08Me6EG', 'Sophia'),
(3, 'kathleensilva@gmail.com', '$2y$10$aXX7w31N5.uQUacR4qr0VenmMlL/md6XNzOQxs0Qc7MSeWTsM/A0a', 'Kathleen'),
(4, 'alexandreveloso@gmail.com', '$2y$10$EKrNDraIEFYZBKIJx6cFdeQuTj0Y8ndZbA1lRrY37O/25GLlO/U/m', 'Alexandre'),
(5, 'heitorroger@gmail.com', '$2y$10$Z8JMTDGiwS9TuK741KUoU.CpXCDqDgFsXk453vyA.MX3MxFxQnYnK', 'Heitor'),
(6, 'almir.salmos@gmail.com', '$2y$10$Ge8qsAd6b7Nylc.AQ9T0F.h0KCImBNEfy4N/sJV4UI9/HGgU2CMem', 'Almir'),
(7, 'fernandamey@gmail.com', '$2y$10$2GoTu0ceelC2QW4zGMbcpOIXzqXh2b1SJVYweG7gzncN9BL3qR1Ga', 'Fernanda'),
(8, 'victoriasantos@gmail.com', '$2y$10$Ro8HBlWWV6jd1O8leDPYm.IpiyDhk2aNFyx44VkVVnbgWYNs9iuWa', 'Victoria'),
(9, 'rogerioalmeida@gmail.com', '$2y$10$qIzEak1oSzQdvvPTRWztkeUrjJlV5z/ZkImP7dAFV2V8YRmErspOi', 'Rogerio'),
(10, 'goldroger@gmail.com', '$2y$10$og2kfrqYT7BXxwCy9boSPOm5E2kBQ52WaxWMn7g9RJMSvbXRrDwVy', 'Roger'),
(11, 'robinlu@gmail.com', '$2y$10$gW7Mw7wOGfobfyK3Y/f5NOhBFGqN3olLcx/rXGjkFHLxQpI.FRAUO', 'Robin'),
(12, 'lucianaalves@gmail.com', '$2y$10$eDIP93GVBJQoyJHpFqNJMevVYm4Rf/R80CVMojOHXT.Y66Oh2mA.K', 'Luciana'),
(13, 'santiago99@gmail.com', '$2y$10$10CcV/tYFEpU9d0bNypEc.CXbLyUCqT9GitJnScrZo3EXGqKPJ/hC', 'Santiago'),
(14, 'diegojoia@gmail.com', '$2y$10$NjO1FzTkIiLAlWWzX4pq6.WYoIEqjeW05L.jFNnk2BQGDj.KwMePm', 'Diego'),
(15, 'matheusluciano@gmail.com', '$2y$10$wgHkNWgh0OJ4ThHIFIghy.Qj.afOEPbiTpcPlcy5NxTaKjZshgp0W', 'Matheus F.'),
(16, 'alanjog@gmail.com', '$2y$10$z7Czo3ucCkKBLB3ErqyN2uXsIuo0JG/7/sBuSq9hytia3TrrI0YwK', 'Alan'),
(17, 'lucarmarcos@gmail.com', '$2y$10$DAgZDvVIW5PKRhMnR5g4euRwhaZ9Zf6eqvMQ5IEqJVFMlrETGDgQy', 'Lucas'),
(18, 'laraima@gmail.com', '$2y$10$shnQ1mnsAP5Ha558.PYsxO0dYeKAVnQXPlwsBn7qa8gq6ceQmrTvy', 'Lara'),
(19, 'helo200.2@gmail.com', '$2y$10$vy5KC4HYGdcD/QSgBraoOu6y9Z8bcQ5sbkGZoE6vs2FiKra9vW9cy', 'Heloisa'),
(20, 'pietroetro@gmail.com', '$2y$10$VJFoBRS72CJhTVSqt2JaUuPQnOwjxMC38C6gOpRs6jsT61tSNWRzO', 'Pietro'),
(21, 'valeriaroger@gmail.com', '$2y$10$X9a7tzSwhQnSL4ORXxWpMeiX3S.4FSeUZMKLKwTtXxdd0t4xMhqXe', 'Valeria'),
(22, 'marcosupa@gmail.com', '$2y$10$lHDf9cbMy/PQuSj1peZFfe5Q4u6sPwZiaL96pgJFUHc8i2u53u65C', 'Marcos'),
(23, 'frankone@gmail.com', '$2y$10$xwzsPqcmhXbhiktwrAhF..E8Xmr/qIf1PmJ9ZyEcJdatrnnB.nBE2', 'Frank'),
(24, 'sunjinwoo@gmail.com', '$2y$10$qTqrEyVJDsITQQea090Cd.f63.cZDCcIr6P9.yldQEkWWb3lQREL.', 'SunJin woo'),
(25, 'eduardoado@gmail.com', '$2y$10$DWl2SXVkiwRgbHEX4f8g4uZ5lW2OxPf/FX2JhM4.Z3dz6O.FXEFBC', 'Eduardo'),
(26, 'lucca2009@gmail.com', '$2y$10$0Td6qSt.wdRHV713gXyhyu.cpcErRrV90VXSM0JlPFusI/N5T9bkO', 'Lucca'),
(27, 'bryanbyron@gmail.com', '$2y$10$MnnPnbEZo568PFhoiKYg9uB7PQsUHW6WnRSyul8E2puaA3NYawEk.', 'Bryan'),
(28, 'yuri@gmail.com', '$2y$10$g/y7S4g1gwJSnxDFs7BZoeX3j/H7evoioYVrOzSs4Pk0QglU6NcDG', 'Yuri'),
(29, 'thiagoven@gmail.com', '$2y$10$.U/4I.9WowUME5Nf.YAqdOzUVep6bVDBtUeSNg5unXN8iNQjaGvAC', 'Thiago'),
(30, 'bruno@gmail.com', '$2y$10$2R1gMn/42LaYi5qAR5No/OFjjlu7qHiLDZ5FzEM1FN4Huo.drYHC6', 'Bruno'),
(31, 'antoni@gmail.com', '$2y$10$ICthxAme.kV4jdQjvwEAEOj64t1rCVNkK/s7DUoqseTXQnUaQGWey', 'Antonio'),
(32, 'maethe@gmail.com', '$2y$10$KvGrYP.j7PMijXYh.qH0ROJee1.3NLN/0.oJGztTLQN3gYtdqfHoe', 'Maethe'),
(33, 'breno@gmail.com', '$2y$10$WlFN5pEQZdqaVB6CHF0BH.gwpcu46CtDvkPG.7btUufY21iNL5dvq', 'Breno'),
(34, 'moises.santos@gmail.com', '$2y$10$ZsrfiCuPaJxig9zgf0cpSuVpwdwkOAWelkbEC0qw2WPBCS/Y57Tzq', 'moises'),
(35, 'shankswano@gmail.com', '$2y$10$N1vhAMLCY5JJJlrKnnywceOZbgY/gPVXS0.xYuhFlRGqKLasoOQfe', 'Shanks'),
(36, 'mariaancor@gmail.com', '$2y$10$Dg3CqmyKJ9EyhxfEptZIY.27V2pDsz9b1k8VjZV09uXA3w2GYIjAC', 'Maria'),
(37, 'almeidajunior@gmail.com', '$2y$10$/OgZfUcVvMIIc6K5Q99p0.GaABaCpC1blgBGApBZnZZFB2Uo9xvsq', 'Almeida'),
(38, 'alaninha1239@gmail.com', '$2y$10$m4KTrLVJiHvNfQ.7s7nhP.SpV4u/UnWQTEOK7UTAhONa7eapOKdeG', 'Richard'),
(53, 'alexandre@gmail.com', '$2y$10$g0ehuXtp/HK1yo14eBshQ.TjuD9WunnTrr0ba1uXY.vsXqA79I4NW', 'Kathleen'),
(54, 'richard@gmail.com', '$2y$10$9B3uvJdWwFl8qdP/xaZx8uI4SaxUzuffzxprFXpS31M05UpNqBkzK', 'Richard'),
(55, 'richard@gmail.com', '123456', 'Richard');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(140) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
