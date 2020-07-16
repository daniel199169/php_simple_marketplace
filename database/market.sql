-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.38-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table my_market.basket: ~2 rows (approximately)
/*!40000 ALTER TABLE `basket` DISABLE KEYS */;
REPLACE INTO `basket` (`id`, `user_id`, `product_id`, `image_url`, `product_name`, `price`, `amount`) VALUES
	(10, '1', '3', 'pic26.jpg', 'flower', '123', 1),
	(11, '1', '4', 'pic14.jpg', 'Bird', '150', 3),
	(12, '1', '5', 'pic1.jpg', 'mountain', '50', 1),
	(13, '2', '4', 'pic14.jpg', 'Bird', '150', 1),
	(14, '2', '7', 'pic13.jpg', 'mountain', '1234', 1);
/*!40000 ALTER TABLE `basket` ENABLE KEYS */;

-- Dumping data for table my_market.orders: ~0 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping data for table my_market.product: ~4 rows (approximately)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
REPLACE INTO `product` (`product_id`, `product_name`, `product_type`, `cost_price`, `image_url`) VALUES
	(4, 'Bird', 'Drink', '150', 'pic14.jpg'),
	(5, 'mountain', 'Food', '50', 'pic1.jpg'),
	(6, 'big bird', 'Food', '1200', 'pic12.jpg'),
	(7, 'mountain', 'Drink', '1234', 'pic13.jpg');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Dumping data for table my_market.user: ~2 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
REPLACE INTO `user` (`id`, `password`, `username`, `email`, `role`) VALUES
	(1, 'admin', 'Pavlo', 'a@a.com', 'admin'),
	(2, 'aaa', 'Alexey', 'aaa@aaa.com', 'user'),
	(3, 'aaa', 'kkk', 'kkk@kkk.com', 'user'),
	(4, 'aaa', 'kkk', 'kkk@kkk.com', 'user');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
