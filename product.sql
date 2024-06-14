-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 09:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sendsweet_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `productPhoto` varchar(50) DEFAULT NULL,
  `productDesc` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productName`, `price`, `productPhoto`, `productDesc`) VALUES
(1, 'BROWNIES ORIGINAL', 50000.00, 'http://127.0.0.1:8080/img/originalBrownies.png', 'Brownies rasa original'),
(2, 'BROWNIES TRIPLE CHOCO', 55000.00, 'http://127.0.0.1:8080/img/tripleChoco.png', 'Brownies dengan sensasi tiga kali lipat dari coklat'),
(3, 'COOKIES CLASSIC', 35000.00, 'http://127.0.0.1:8080/img/classic.png', 'Cookies rasa classic yang memberikan \nsensasi yang tidak biasa'),
(4, 'COOKIES DARK CHOCO CHUNKS', 45000.00, 'http://127.0.0.1:8080/img/darkChoco.png', 'Cookies rasa dark coklat yang memiliki sensasi sedikit pahit tapi nagih'),
(5, 'COOKIES CARAMEL', 65000.00, 'http://127.0.0.1:8080/img/saltedCaramel.png', 'Cookies dengan isian caramel \nyang lumer'),
(6, 'COOKIES MATCHA', 60000.00, 'http://127.0.0.1:8080/img/matcha.png', 'Cookies dengan perpaduan rasa matcha dan coklat putih'),
(7, 'COOKIES CHOCHO	S`MORES', 60000.00, 'http://127.0.0.1:8080/img/chocoSmores.png', 'Cookies rasa coklat dengan topping marshmellow'),
(8, 'COOKIES BLACK TREASURE', 50000.00, 'http://127.0.0.1:8080/img/blackTreasure.png', 'Cookies rasa coklat dengan filling'),
(9, 'DESSERT BOX THAI TEA', 35000.00, 'http://127.0.0.1:8080/img/thaiTea.png', 'Dessert box dengan manis nya Thai tea'),
(10, 'DESSERT BOX APPLE', 40000.00, 'http://127.0.0.1:8080/img/sweetApple.png', 'Dessert box dengan manis nya Thai tea');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
