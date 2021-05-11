-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 07:47 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inj`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `sent_on` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `county` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product`, `cost`, `name`, `email`, `phone`, `quantity`, `county`, `size`, `info`, `time`) VALUES
(9, 'Black Nike sneakers', '2499', 'Seb Astian', 'sebastianmuchui79@gmail.com', '0797061691', '2', 'Isiolo', '44', 'I would like the product by tomorrow', '2021-04-24 09:33:14.953489'),
(10, 'sneakers', '2599', 'Bill jeffreys', 'billjeffreys@gmail.com', '0795698712', '3', 'mombasa', '44', 'Please deliver by saturday', '2021-04-24 09:48:20.163150'),
(12, 'Jeans trousers', '799', 'liz', 'rianliz@gmail.com', '0712345678', '3', 'Meru', 'big', 'Please deliver by saturday', '2021-04-25 10:40:46.082753'),
(17, 'T-shirt', '399', 'Iman', 'iman@gmail.com', '0745678910', '3', 'machakos', 'big', 'Please deliver soon', '2021-05-03 12:40:06.220113');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `author`, `image`, `content`, `created_at`) VALUES
(7, 'Best drips 2021', 'Josephine', 'pexels-roy-reyna-3007761.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa rem sequi minima laborum ullam eum reiciendis iusto, necessitatibus deleniti ipsa dolor illo illum dolorem pariatur? Architecto laborum quas odio, explicabo deleniti, vel ipsam quasi temporibus quidem veritatis adipisci, corrupti recusandae magnam. Mollitia autem aliquid praesentium odit minus eveniet explicabo facilis omnis exercitationem libero itaque voluptatibus, ab non nam nostrum reiciendis. Officiis nam consequatur consequuntur expedita modi iusto mollitia recusandae quod aliquam tempora distinctio quas atque corporis quae doloribus nemo corrupti aut, neque maiores fugit quos voluptatibus. Esse soluta veritatis sequi aliquam modi alias corrupti laudantium non possimus! Illo dicta laudantium qui maiores magni, aut culpa asperiores inventore nobis reprehenderit, minima voluptate quaerat, ex libero dolorum repudiandae dolore. Incidunt facilis voluptatem quam consequuntur necessitatibus perspiciatis veritatis labore aspernatur officia placeat? Aut quibusdam recusandae eveniet id veritatis, distinctio itaque officia autem aspernatur quo repellat sed tenetur quia obcaecati atque dolore, beatae aliquid, illum amet? Debitis delectus ullam architecto commodi similique vitae maxime vel, nisi aut doloremque, nam velit minima sint tenetur eos provident facilis alias veniam quo ad perferendis exercitationem ab cupiditate? Molestiae possimus dolores debitis, explicabo tempore perferendis corrupti, officiis pariatur commodi aut aspernatur distinctio adipisci nulla esse mollitia tempora soluta? Lorem ipsum dolor sit amet.', '2021-04-22 15:11:06.434687'),
(8, 'Best shoes 2021', 'Josephine', 'pexels-bùi-huy-1750045.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa rem sequi minima laborum ullam eum reiciendis iusto, necessitatibus deleniti ipsa dolor illo illum dolorem pariatur? Architecto laborum quas odio, explicabo deleniti, vel ipsam quasi temporibus quidem veritatis adipisci, corrupti recusandae magnam. Mollitia autem aliquid praesentium odit minus eveniet explicabo facilis omnis exercitationem libero itaque voluptatibus, ab non nam nostrum reiciendis. Officiis nam consequatur consequuntur expedita modi iusto mollitia recusandae quod aliquam tempora distinctio quas atque corporis quae doloribus nemo corrupti aut, neque maiores fugit quos voluptatibus. Esse soluta veritatis sequi aliquam modi alias corrupti laudantium non possimus! Illo dicta laudantium qui maiores magni, aut culpa asperiores inventore nobis reprehenderit, minima voluptate quaerat, ex libero dolorum repudiandae dolore. Incidunt facilis voluptatem quam consequuntur necessitatibus perspiciatis veritatis labore aspernatur officia placeat? Aut quibusdam recusandae eveniet id veritatis, distinctio itaque officia autem aspernatur quo repellat sed tenetur quia obcaecati atque dolore, beatae aliquid, illum amet? Debitis delectus ullam architecto commodi similique vitae maxime vel, nisi aut doloremque, nam velit minima sint tenetur eos provident facilis alias veniam quo ad perferendis exercitationem ab cupiditate? Molestiae possimus dolores debitis, explicabo tempore perferendis corrupti, officiis pariatur commodi aut aspernatur distinctio adipisci nulla esse mollitia tempora soluta? Lorem ipsum dolor sit amet.', '2021-04-25 05:35:24.522314'),
(9, 'Coolest hats 2021', 'Josephine', 'pexels-artem-beliaikin-1078975.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa rem sequi minima laborum ullam eum reiciendis iusto, necessitatibus deleniti ipsa dolor illo illum dolorem pariatur? Architecto laborum quas odio, explicabo deleniti, vel ipsam quasi temporibus quidem veritatis adipisci, corrupti recusandae magnam. Mollitia autem aliquid praesentium odit minus eveniet explicabo facilis omnis exercitationem libero itaque voluptatibus, ab non nam nostrum reiciendis. Officiis nam consequatur consequuntur expedita modi iusto mollitia recusandae quod aliquam tempora distinctio quas atque corporis quae doloribus nemo corrupti aut, neque maiores fugit quos voluptatibus. Esse soluta veritatis sequi aliquam modi alias corrupti laudantium non possimus! Illo dicta laudantium qui maiores magni, aut culpa asperiores inventore nobis reprehenderit, minima voluptate quaerat, ex libero dolorum repudiandae dolore. Incidunt facilis voluptatem quam consequuntur necessitatibus perspiciatis veritatis labore aspernatur officia placeat? Aut quibusdam recusandae eveniet id veritatis, distinctio itaque officia autem aspernatur quo repellat sed tenetur quia obcaecati atque dolore, beatae aliquid, illum amet? Debitis delectus ullam architecto commodi similique vitae maxime vel, nisi aut doloremque, nam velit minima sint tenetur eos provident facilis alias veniam quo ad perferendis exercitationem ab cupiditate? Molestiae possimus dolores debitis, explicabo tempore perferendis corrupti, officiis pariatur commodi aut aspernatur distinctio adipisci nulla esse mollitia tempora soluta? Lorem ipsum dolor sit amet.', '2021-04-25 05:36:45.476858');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_image`, `price`, `availability`, `category`, `description`, `time`) VALUES
(19, 'Jeans trousers', 'pexels-karolina-grabowska-4210866.jpg', '799', 'available', 'clothing', 'Available in red, blue black', '2021-04-24 08:02:31.237322'),
(24, 'handbag', 'pexels-ge-yonk-1152077.jpg', '700', 'unavailabe', 'accesories', 'very okay', '2021-04-25 12:45:20.293422'),
(25, 'sneakers', 'irene-kredenets-dwKiHoqqxk8-unsplash.jpg', '850', 'available', 'clothing', 'Available in a variety of sizes', '2021-04-25 13:30:28.918675'),
(26, 'Black Nike sneakers', 'andres-jasso-PqbL_mxmaUE-unsplash.jpg', '1800', 'available', 'clothing', 'Black , available in size 43, 44 and 37', '2021-04-27 10:15:02.740515'),
(27, 'T-shirt', 'cristofer-jeschke-AqLIkOzWDAk-unsplash.jpg', '399', 'available', 'clothing', 'Available in a wide variety of sizes, color blue only', '2021-04-27 10:16:56.681994'),
(28, 'watch', 'pexels-karolina-grabowska-4041157.jpg', '1000', 'available', 'accesories', 'very good design', '2021-05-01 04:58:42.240121');

-- --------------------------------------------------------

--
-- Table structure for table `receivers`
--

CREATE TABLE `receivers` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `email`, `body`, `time`) VALUES
(1, 'Merlin chalmers', 'merlin@gmail.com', 'I think this is one of the best places to shop', '2021-04-16 14:33:43.240362'),
(2, 'Hunter hearst', 'hunterhearst16@gmail.com', 'Its awesome', '2021-04-16 14:36:13.341426'),
(4, 'Karan jamal', 'jamal@gmail.com', 'So awesome', '2021-04-17 09:00:00.034986'),
(5, 'Seb', 'sebastianmuchui79@gmail.com', 'Very quick', '2021-04-22 12:30:06.882731'),
(6, 'Seb Astian', 'sebastianmuchui79@gmail.com', 'They are really awesome', '2021-04-24 07:02:21.946762'),
(7, 'Bill goldberg', 'bill@gmail.com', 'I think its very awesome', '2021-04-24 11:06:50.826683'),
(8, 'liz', 'rianliz@gmail.com', 'Very cool', '2021-04-25 10:40:55.936672'),
(9, 'Izzoh', 'izooh@gmail.com', 'Very okay', '2021-04-25 12:39:02.083146'),
(10, 'josephine ', 'josephine@gmail.com', 'Very cool', '2021-04-25 13:26:26.587315'),
(11, 'immanuel', 'immanuel@gmail.com', 'am impresed', '2021-05-01 04:55:21.649369'),
(12, 'Iman', 'iman@gmail.com', 'Very good work', '2021-05-03 12:40:20.622270');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `receivers`
--
ALTER TABLE `receivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `receivers`
--
ALTER TABLE `receivers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
