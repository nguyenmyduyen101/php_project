create database test_data_project ;
use test_data_project ;
drop database test_data_project;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `categories` (
  `id` int(12) NOT NULL,
  `categorie_name` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `categories` (`id`, `categorie_name`, `create_at`,`update_at`) VALUES
(1, 'VEG PIZZA', '2023-03-17 18:16:28','2023-03-18 18:16:28');


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
  `id` int(12) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(12) NOT NULL,
  `product_categorie_id` int(12) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `products` (`id`, `product_name`, `product_price`,`product_categorie_id`, `create_at`,`update_at`) VALUES
(1, 'Margherita', 99, 1, '2023-03-17 21:03:26','2023-03-18 21:03:26');


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

ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `categories` ADD FULLTEXT KEY `categorie_name` (`categorie_name`);

ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `products`
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

