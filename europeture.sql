-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 18, 2024 at 12:08 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `europeture`
--

-- --------------------------------------------------------

--
-- Table structure for table `budaya`
--

CREATE TABLE `budaya` (
  `id` int(11) NOT NULL,
  `bagian` text NOT NULL,
  `penjelasanbudaya` text NOT NULL,
  `negara` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `budaya`
--

INSERT INTO `budaya` (`id`, `bagian`, `penjelasanbudaya`, `negara`) VALUES
(8, 'Eropa Barat', 'Prancis adalah simbol keanggunan, dengan Paris sebagai pusat kehidupan seni, mode, dan kuliner. Kota ini menampilkan seni lukis impresionis yang tak tertandingi di Louvre dan arsitektur megah seperti Menara Eiffel. Mode Perancis, dikenal dengan merek-merek haute couture seperti Chanel dan Dior, menjadi sorotan dunia fashion. Spanyol, di Eropa Barat, menampilkan energi yang mempesona dengan tarian flamenco yang bersemangat, festival-festival meriah seperti La Tomatina, dan hidangan-hidangan khas seperti paella dan tapas yang menyegarkan. Belanda, di sisi lain, menawarkan pemandangan unik dari rumah-rumah terapung di Amsterdam dan jaringan kanal yang indah. Seni lukis Belanda, seperti karya Rembrandt dan Van Gogh, menjadi mahakarya dunia yang memperkaya budaya global. Portugis, dengan tepian pantai yang menawan dan musik Fado yang merdu, menampilkan kekayaan budaya yang unik dengan festival-festival seperti Festival Santo Antonio yang memikat.', 'Prancis'),
(9, 'Eropa Timur', 'Rusia, sebagai bagian dari Eropa Timur, menampilkan sejarah yang kuat dan beragam. Dari Dinasti Tsar hingga era Soviet, Rusia telah menjadi pusat perhatian dalam seni, sastra, dan musik. Polandia menawarkan tradisi yang kaya dan beragam, dengan festival-festival rakyat yang meriah dan seni lukis yang mengagumkan. Hongaria, di Eropa Timur, menampilkan kekayaan budaya dengan musik klasik yang megah dan tradisi-tradisi unik seperti Festival Musim Panas di Budapest.', 'Rusia'),
(10, 'Eropa Selatan', 'Italia adalah permata budaya Eropa Selatan, dengan warisan seni Renaissance yang megah, arsitektur klasik Romawi, dan kuliner lezat seperti pasta dan gelato. Yunani, sebagai tempat lahir peradaban Barat, menampilkan sejarah kuno yang kaya serta musik, tari, dan masakan tradisional yang memikat.', 'Italia'),
(11, 'Eropa Utara', 'Swedia menampilkan desain minimalis yang terkenal, suasana yang hangat dan nyaman dengan konsep \"hygge,\" serta seni kontemporer yang inovatif. Norwegia, dengan keindahan alamnya yang menakjubkan dan warisan Viking yang menarik, menjadi daya tarik bagi para pengunjung dari seluruh dunia. Denmark menampilkan desain furnitur yang legendaris, seni rupa yang menawan, dan budaya \"hygge\" nya yang hangat.', 'Swedia');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(5) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `username`, `password`, `level`, `id`) VALUES
('admin_web', 'admin', 'admin', 'admin', 1),
('user_web', 'user', 'user', 'user', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budaya`
--
ALTER TABLE `budaya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budaya`
--
ALTER TABLE `budaya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
