-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2024 at 12:23 PM
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
-- Database: `angels_cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `item_name`, `description`, `price`, `image_url`) VALUES
(1, 'Cold Beverages', 'Wide range of iced coffee to make you fresh and light.', 95.00, 'https://www.munatycooking.com/wp-content/uploads/2023/06/Creamy-Iced-Coffee-feature-image-500x500.jpg'),
(2, 'Refreshment', 'Creamy and frothy cold coffee to make you cool.', 85.00, 'https://globalassets.starbucks.com/digitalassets/products/bev/SBX20201011_IcedShakenEspresso.jpg?impolicy=1by1_tight_288'),
(3, 'Cold Beverages', 'Fruit and icy refreshing drink to make you feel refreshed.', 95.00, 'https://wp.culligan.com/wp-content/uploads/2019/08/diy-healthy-drinks-for-kids.jpg'),
(4, 'Dessert', 'Your favorite eating and drinking combinations.', 75.00, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPkkHSbLWDGdv6kqOQWA3VCAPW_td3bdk-BA&s'),
(5, 'Special Combos', 'Satiate your palate with a culinary treat.', 85.00, 'https://funmoneymom.com/wp-content/uploads/2023/05/Banana-Pudding-Bites-Recipe-Card-500x500.jpg'),
(6, 'Burger & French Fries', 'Quick bites to satisfy your small hunger.', 75.00, 'https://thekitchencommunity.org/wp-content/uploads/2021/09/shutterstock_296090063-burger-sides-500x500.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `additional_details` text DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `menu_item_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_name`, `contact_number`, `address`, `additional_details`, `order_date`, `menu_item_id`) VALUES
(1, 'John Doe', '09123456789', '123 Coffee Street, Makati City', 'No ice, extra sugar', '2024-11-14 09:17:10', 1),
(2, 'Jane Smith', '09876543210', '456 Latte Ave, Quezon City', 'Extra hot', '2024-11-14 09:17:10', 3),
(7, 'Apple rezano', '09303123142', 'dasdadasd', 'dsdsada', '2024-11-14 10:09:29', 2),
(8, 'Apple rezano', '09303123142', 'dasdadasd', 'dsdsada', '2024-11-14 10:09:55', 3),
(9, 'Apple rezano', '09303123142', 'dasdadasd', 'dsdsada', '2024-11-14 10:10:40', 5),
(10, 'Apple rezano', '09303123121', 'wadad', 'dawdawd', '2024-11-14 10:12:09', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`) VALUES
(3, 'Apple', 'Rezano', 'apple@gmail.com', '$2y$10$nOWB5FnZeg4EbS4WSNFqqOMWXMm43i4CsdLk1B4TtUwhiM17z2iKW', '2024-11-14 10:35:06'),
(4, 'Apple', 'Rezano', 'sairahhilbero@gmail.com', '$2y$10$KqweXfu/c.1j.SYRVBbnFujLYypz6BiDdk7SgbhfcWPPhF2q99Fi.', '2024-11-14 10:38:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `menu_item_id` (`menu_item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`menu_item_id`) REFERENCES `menu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
