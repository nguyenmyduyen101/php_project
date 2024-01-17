drop database test_data_project;
create database test_data_project ;
use test_data_project ;	
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `categories` (
  `id` int(12) NOT NULL  auto_increment PRIMARY KEY ,
  `categorie_name` varchar(255) NOT NULL,
  `create_at` datetime DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `categories` (`id`, `categorie_name`, `create_at`,`update_at`) VALUES
(1, 'VEG PIZZA', '2023-03-17 18:16:28','2023-03-18 18:16:28'),
(2, 'NON-VEG PIZZA', '2023-03-17 18:17:14', '2023-03-18 18:17:14'),
(3, 'PIZZA MANIA','2023-03-17 18:17:43','2023-03-18 18:17:43'),
(4, 'SIDES ORDERS','2023-03-17 18:19:10','2023-03-18 18:19:10'),
(5, 'BEVERAGES','2023-03-17 21:58:58','2023-03-18 21:58:58'),
(6, 'CHOICE OF CRUSTS','2023-03-18 07:55:28','2023-03-19 07:55:28'),
(7, 'BURGER PIZZA','2023-03-18 08:06:30','2023-03-19 08:06:30'),
(8, 'CHOICE OF TOPPINGS','2023-03-18 08:13:47','2023-03-19 08:13:47');


CREATE TABLE `order_items` (
  `id` int(21) NOT NULL,
  `order_id` int(21) NOT NULL,
  `product_id` int(21) NOT NULL,
  `item_quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `orders` (
  `id` int(21) NOT NULL,
  `user_id` int(21) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip_code` int(21) NOT NULL,
  `phone_no` bigint(21) NOT NULL,
  `amount` int(200) NOT NULL,
  `payment_mode` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=cash on delivery, \r\n1=online ',
  `order_status` enum('0','1','2','3','4','5','6') NOT NULL DEFAULT '0' COMMENT '0=Order Placed.\r\n1=Order Confirmed.\r\n2=Preparing your Order.\r\n3=Your order is on the way!\r\n4=Order Delivered.\r\n5=Order Denied.\r\n6=Order Cancelled.',
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `products` (
  `id` int(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(12) NOT NULL,
  `product_categorie_id` int(12) NOT NULL,
  `image` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `products` (`id`, `product_name`, `product_price`,`product_categorie_id`, `image`, `create_at`,`update_at`) VALUES
(1, 'Margherita', 99, 1, '/assets/images/image_menu/card-1.jpg', '2023-03-17 21:03:26','2023-03-18 21:03:26'),
(5, 'Mexican Green Wave\r\n', 149, 1,  '/assets/images/image_menu/card-6.jpg','2023-03-17 21:23:48', '2023-03-17 21:23:49'),
(8, 'Cheese N Corn\r\n', 199, 1, '/assets/images/image_menu/pizza-10.jpg', '2023-03-17 21:26:31','2023-03-17 21:26:34'),
(9, 'PANEER MAKHANI\r\n', 219, 1, '/assets/images/image_menu/pizza-11.jpg', '2023-03-17 21:27:21', '2023-03-17 21:27:22'),
(10, 'VEGGIE PARADISE\r\n', 299,1,  '/assets/images/image_menu/pizza-13.jpg','2023-03-17 21:28:06', '2023-03-17 21:28:26'),
(11, 'FRESH VEGGIE', 149,  1, '/assets/images/image_menu/pizza-14.jpg', '2023-03-17 21:28:49','2023-03-17 21:28:59'),
(12, 'Indi Tandoori Paneer\r\n', 349, 1, '/assets/images/image_menu/pizza-15.jpg', '2023-03-17 21:29:41', '2023-03-17 21:29:42'),
(13, 'PEPPER BARBECUE', 199, 2,'/assets/images/image_menu/pizza-16.jpg', '2023-03-17 21:34:37','2023-03-17 21:34:47'),
(14, 'CHICKEN SAUSAGE', 249, 2, '/assets/images/image_menu/pizza-17.jpg','2023-03-17 21:35:31','2023-03-17 21:35:41'),
(15, 'Chicken Golden Delight\r\n', 249,  2, '/assets/images/image_menu/pizza-18.jpg','2023-03-17 21:36:36','2023-03-17 21:36:37'),
(16, 'Non Veg Supreme\r\n', 399, 2,'/assets/images/image_menu/pizza-19.jpg', '2023-03-17 21:37:21', '2023-03-17 21:37:22'),
(17, 'Chicken Dominator', 319, 2,'/assets/images/image_menu/pizza-20.jpg', '2023-03-17 21:38:13', '2023-03-17 21:38:53'),
(18, 'PEPPER ONION\r\n', 249, 2,'/assets/images/image_menu/pizza-21.jpg', '2023-03-17 21:39:49','2023-03-17 21:39:59'),
(19, 'CHICKEN FIESTA', 199, 2,'/assets/images/image_menu/pizza-22.jpg', '2023-03-17 21:40:58','2023-03-17 21:40:59'),
(20, 'Indi Chicken Tikka', 349, 2, '/assets/images/image_menu/pizza-23.jpg','2023-03-17 21:41:49','2023-03-17 21:41:59'),
(21, 'TOMATO', 99,3, '/assets/images/image_menu/pizza-24.jpg','2023-03-17 21:44:44','2023-03-17 21:44:45'),
(22, 'VEG LOADED', 149, 3,'/assets/images/image_menu/pizza-25.jpg', '2023-03-17 21:45:34','2023-03-17 21:46:34'),
(23, 'CHEESY', 99, 3,'/assets/images/image_menu/pizza-26.jpg', '2023-03-17 21:46:21','2023-03-17 21:46:41'),
(24, 'CAPSICUM', 99, 3, '/assets/images/image_menu/pizza-27.jpg','2023-03-17 21:47:07','2023-03-17 21:47:17'),
(25, 'ONION', 99, 3,'/assets/images/image_menu/pizza-28.jpg', '2023-03-17 21:47:51','2023-03-17 21:47:52'),
(26, 'GOLDEN CORN', 139,3, '/assets/images/image_menu/pizza-29.jpg','2023-03-17 21:48:44','2023-03-17 21:48:45'),
(27, 'PANEER & ONION', 149,3,'/assets/images/image_menu/pizza-30.jpg', '2023-03-17 21:49:36','2023-03-17 21:49:46'),
(28, 'CHEESE N TOMATO', 149, 3, '/assets/images/image_menu/pizza-31.jpg','2023-03-17 21:50:20', '2023-03-17 21:50:30'),
(29, 'Garlic Breadsticks', 99, 4,'/assets/images/image_menu/pizza-32.jpg', '2023-03-17 22:01:33', '2023-03-17 22:01:43'),
(33, 'Cheese Jalapeno Dip', 35,4,'/assets/images/image_menu/pizza-33.jpg', '2023-03-17 22:06:06','2023-03-17 22:06:07'),
(34, 'Cheese Dip', 35,  4,'/assets/images/image_menu/pizza-34.jpg',  '2023-03-17 22:06:59','2023-03-17 22:07:59'),
(35, 'Lava Cake', 99, 4, '/assets/images/image_menu/pizza-35.jpg', '2023-03-17 22:08:13','2023-03-17 22:08:33'),
(36, 'Butterscotch Mousse Cake', 149, 4, '/assets/images/image_menu/pizza-36.jpg', '2023-03-17 22:08:58','2023-03-17 22:08:59'),
(37, 'Lipton Ice Tea', 25, 5,'/assets/images/image_menu/pizza-37.jpg', '2023-03-17 22:12:53','2023-03-17 22:12:54'),
(38, 'Mirinda', 35, 5, '/assets/images/image_menu/pizza-38.jpg','2023-03-17 22:13:38','2023-03-17 22:13:48'),
(39, 'PEPSI BLACK CAN', 45,5, '/assets/images/image_menu/pizza-39.jpg','2023-03-17 22:14:24','2023-03-17 22:14:34'),
(40, 'Pepsi\r\n', 52, 5,'/assets/images/image_menu/pizza-40.jpg', '2023-03-17 22:16:29','2023-03-17 22:16:39'),
(41, '7Up', 52, 5, '/assets/images/image_menu/pizza-41.jpg','202303-17 22:17:08','2023-03-17 22:17:18'),
(42, 'Cheese Burst', 249,  6,'/assets/images/image_menu/pizza-42.jpg', '2023-03-18 07:57:27','2023-03-18 07:57:37'),
(43, 'Classic Hand Tossed', 249,  6, '/assets/images/image_menu/pizza-43.jpg','2023-03-18 07:59:52','2023-03-18 07:59:53'),
(44, 'Wheat Thin Crust', 299, 6, '/assets/images/image_menu/pizza-44.jpg','2023-03-18 08:00:39','2023-03-18 08:00:49'),
(45, 'Fresh Pan Pizza', 299, 6,'/assets/images/image_menu/pizza-45.jpg', '2023-03-18 08:01:29','2023-03-18 08:01:39'),
(46, 'New Hand Tossed', 299,  6, '/assets/images/image_menu/pizza-46.jpg', '2023-03-18 08:03:17','2023-03-18 08:03:27'),
(47, 'BURGER PIZZA- CLASSIC VEG', 129, 7,  '/assets/images/image_menu/pizza-47.jpg','2023-03-18 08:09:17','2023-03-18 08:09:27'),
(48, 'BURGER PIZZA- PREMIUM VEG', 139, 7, '/assets/images/image_menu/pizza-48.jpg','2023-03-18 08:09:59','2023-03-18 08:10:59'),
(49, 'BURGER PIZZA- CLASSIC NON VEG', 149, 7,'/assets/images/image_menu/pizza-49.jpg', '2023-03-18 08:10:37','2023-03-18 08:10:47'),
(50, 'Extra Cheese', 35, 8,'/assets/images/image_menu/pizza-50.jpg', '2023-03-18 08:14:52','2023-03-18 08:14:53'),
(51, 'veg toppings', 55, 8, '/assets/images/image_menu/pizza-51.jpg','2023-03-18 08:15:36','2023-03-18 08:15:46'),
(52, 'Non Veg Toppings', 55, 8,'/assets/images/image_menu/pizza-52.jpg', '2023-03-18 08:16:29','2023-03-18 08:16:39'),
(53, 'Packaged Drinking Water', 20,5, '/assets/images/image_menu/pizza-53.jpg','2023-03-18 08:20:40','2023-03-18 08:20:41');


CREATE TABLE `users` (
  `id` int(21) NOT NULL,
  `user_name` varchar(21) NOT NULL,
  `first_name` varchar(21) NOT NULL,
  `last_name` varchar(21) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `user_type` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=user\r\n1=admin',
  `password` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `users` (`id`, `user_name`, `first_name`, `last_name`, `email`, `phone`, `user_type`, `password`, `create_at`,`update_at`) VALUES
(1, 'duyen', 'duyen', 'duyen', 'duyen@gmail.com', 0386999547, '1', '1234', '2023-04-11 11:40:58','2023-04-15 11:40:58');


CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `item_quantity` int(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(21) NOT NULL,
  `quantity` int(100) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `products` ADD FULLTEXT KEY `product_name` (`product_name`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `user_name` (`user_name`);


ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `order_items`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT;


ALTER TABLE `orders`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT;

ALTER TABLE `users`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  
ALTER TABLE `cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  
COMMIT;

