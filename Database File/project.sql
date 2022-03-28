-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2022 at 02:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `custom1` varchar(200) NOT NULL DEFAULT 'Not Choosen',
  `custom2` varchar(200) NOT NULL DEFAULT 'Not Choosen',
  `custom3` varchar(200) DEFAULT 'Not Choosen',
  `product` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `username`, `custom1`, `custom2`, `custom3`, `product`, `price`) VALUES
(40, 'Smeet', 'Crunchy', 'Chipotle,Tandoori,Thousand_Island,Peri_Peri,', 'Tomato,Cabbage,Capsicum,Onion,', 'Burger', '110');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(2) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `Name`) VALUES
(1, 'Drinks'),
(4, 'Main Course'),
(8, 'Dinner'),
(9, 'Brunch'),
(11, 'BreakFast');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `phone`, `email`, `msg`) VALUES
(2, 'Test', '11111111', 'test@gmail.com', 'The Paragraphs module in Drupal provides editors with a component driven architecture for building pages. Morpht has been developing Paragraph approaches to site building since 2015. This case study captures some of the content from a Drupal 7 \"Paragraphs Demo\" site which was built to showcase what could be done with Paragraphs.'),
(3, 'Demo', '22222222', 'demo@gmail.com', 'The Paragraphs module in Drupal provides editors with a component driven architecture for building pages. Morpht has been developing Paragraph approaches to site building since 2015. This case study captures some of the content from a Drupal 7 \"Paragraphs Demo\" site which was built to showcase what could be done with Paragraphs.');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(3) NOT NULL,
  `billname` varchar(200) NOT NULL,
  `items` varchar(300) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `mode` varchar(50) NOT NULL,
  `total` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `billname`, `items`, `address`, `mobile`, `mode`, `total`) VALUES
(5, 'Smeet', 'Pizza = 120,Red Sauce Pasta = 100,Burger = 110,', 'Nana Mauva,UK', '6677889900', 'UPI', '330'),
(6, 'Demo2', 'Chocolate Shake = 90,Burger = 100,', 'Mavdi Chowk,Brazil', '1001001001', 'UPI', '190'),
(7, 'Demo2', 'Burger = 79,Veg. Burger = 69,Tomato Pasta = 149,', 'kalawad,Kerala', '999999999', 'Cash On Delivery', '297'),
(8, 'Smeet', 'Cheese Sandwich = 99,Crunchy Momos = 99,', 'Mavdi Chowk,Brazil', '1001001001', 'Cash On Delivery', '198'),
(9, 'Smeet', 'Shake = 90,Tomato Pasta = 100,Cheese Sandwich = 99,', 'KKV Chowk,Canada', '999999999', 'Cash On Delivery', '289');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(3) NOT NULL,
  `category` varchar(50) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pprice` int(4) NOT NULL,
  `pdesc` longtext NOT NULL,
  `btn1` varchar(20) NOT NULL,
  `custom1` varchar(200) NOT NULL,
  `price1` varchar(20) NOT NULL,
  `btn2` varchar(20) NOT NULL,
  `custom2` varchar(200) NOT NULL,
  `price2` varchar(20) NOT NULL,
  `btn3` varchar(20) NOT NULL,
  `custom3` varchar(200) NOT NULL,
  `price3` varchar(20) NOT NULL,
  `pimg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `category`, `pname`, `pprice`, `pdesc`, `btn1`, `custom1`, `price1`, `btn2`, `custom2`, `price2`, `btn3`, `custom3`, `price3`, `pimg`) VALUES
(1, 'Drinks', 'Chocolate Shake', 70, 'Cold Chocolate Thick Shake With Vanilla Ice Cream And Hot Chocolate Sauce', 'Milk', 'Sugured_Milk,Chilled_Milk,Regular_Milk,Thick_Iced_Milk', '30', 'Toppings', 'Kit_Kat,Cadboury,Gems,Brownie', '10', 'Ice_Cream', 'Vanilla,Chocolate,Cookies_&_Cream', '20', 'uploads/shake2.png'),
(3, 'Main Course', 'Paneer Pizza', 150, 'Pizza With Fresh Base And Loaded With Panner And Veggies', 'Base', 'Regular Fresh Bread,Charcoal,Thin Crust,Double Layered,Puff', '50', 'Toppings', 'Panner,Capsicum,Onions,Tomato,Jalapenos,Baby_Corn', '10', 'Cheese', 'Mozzarella,Cheddar,Parmesan,Liquid', '15', 'uploads/pizza1.png'),
(5, 'Drinks', 'Shake', 79, 'Loaded With Brownie and Ice Cream Loaded With Brownie and Ice Cream', 'Milk', 'Sugured_Milk,Chilled_Milk,Regular_Milk,Thick_Iced_Milk', '40', 'Toppings', 'Kit_Kat,Cadboury,Gems,Brownie', '15', 'Ice_Cream', 'Vanilla,Chocolate,Cookies_&_Cream', '10', 'uploads/shake1.png'),
(11, 'Brunch', 'Taco', 50, 'Delicious,Tasty', 'Base', 'Regular,Wheat,Maida,Suji', '20', 'Fillings', 'Panner,Cabbage,Capsicum,Onions,Tomato,Cheese', '10', 'Sauces', 'Tandoori,Chipotle,Thousand_Island,Cheesy,Regular', '15', 'uploads/taco1.png'),
(12, 'Brunch', 'Crunchy Momos', 99, 'Crispy and Crunchy Momos to make your meal the best.', 'Style', 'Steamed,Tandoori,Crunchy,Fried,Afghani', '40', 'Stuffing', 'Cheese,Veggies,Panner,Cheese_&_Chillies,Noodles', '15', 'Covering', 'Wheat,Maida', '10', 'uploads/momos2.png'),
(13, 'Dinner', 'Burger', 79, 'Veg. Patty loaded with potatoes and vegetables like tomato, onion,spinach,etc in between 2 buns', 'Bun', 'Regular,Fried,Crunchy', '30', 'Sauces', 'Cheesy,Chipotle,Tandoori,Mayonese,Thousand_Island,Peri_Peri', '10', 'Veggies', 'Tomato,Cabbage,Capsicum,Onion,Cheese_Slies', '10', 'uploads/burger2.png'),
(14, 'Dinner', 'Veg. Burger', 69, 'Must Try', 'Bun', 'Regular,Fried,Crunchy', '30', 'Sauces', 'Cheesy,Chipotle,Tandoori,Mayonese,Thousand_Island,Peri_Peri', '10', 'Veggies', 'Tomato,Cabbage,Capsicum,Onion,Cheese_Slies', '10', 'uploads/burger1.png'),
(15, 'Brunch', 'Steamed Momos', 59, 'Steamed momos with veggies filled inside.', 'Style', 'Steamed,Tandoori,Crunchy,Fried,Afghani', '40', 'Stuffing', 'Cheese,Veggies,Panner,Cheese_&_Chillies,Noodles', '15', 'Covering', 'Wheat,Maida', '10', 'uploads/momos1.png'),
(16, 'Main Course', 'Tomato Pasta', 149, 'Spiral Pasta With Tangy Tomato Sauce', 'Type', 'Spiral,Penne,Macoroni,Flat', '30', 'Sauces', 'Red_Sauce,White_Sauce,Mix_Sauces', '20', 'Veggies', 'Onion,Capsicum,Mushroom,Tomato,Jalapenos', '10', 'uploads/pasta2.png'),
(17, 'Main Course', 'Red Sauce Pasta', 119, 'Penne Pasta  With Spicy Red Sauce And Veggies', 'Type', 'Spiral,Penne,Macoroni,Flat', '30', 'Sauces', 'Red_Sauce,White_Sauce,Mix_Sauces', '20', 'Veggies', 'Onion,Capsicum,Mushroom,Tomato,Jalapenos', '10', 'uploads/pasta1.png'),
(18, 'Brunch', 'Cheese Sandwich', 99, 'Crispy Toast Sandwich With Mozzarella Cheese in between', 'Type', 'Reguler,Grilled,Fried_Crunchy', '30', 'Fillings', 'Cheese,Panner,Potato,Capsicum,Onions,Tomato,Beet_Root,', '15', 'Sauces', 'Tandoori,Peri_Peri,Chipotle,Thousand_Island,Cheesy', '10', 'uploads/sandwich2.png'),
(19, 'BreakFast', 'Frankie', 90, 'Frankie Loaded With Cheese And Veggies', 'Base', 'Maida,Wheat,Paratha', '30', 'Stuffing', 'Cheese,Veggies,Panner,Cheese_&_Chillies,Noodles', '10', 'Sauces', 'Tandoori,Peri_Peri,Chipotle,Thousand_Island,Cheesy', '10', 'uploads/frankie1.png'),
(20, 'Dinner', 'Chinese Frankie', 60, 'Frankie Loaded With Spicy Noodles and Mayo', 'Base', 'Maida,Wheat,Paratha', '30', 'Stuffing', 'Cheese,Veggies,Panner,Cheese_&_Chillies,Noodles', '10', 'Sauces', 'Tandoori,Peri_Peri,Chipotle,Thousand_Island,Cheesy', '10', 'uploads/frankie2.png'),
(23, 'BreakFast', 'Vegetable Sandwich', 90, 'Grilled Sandwich Stuffed With Various  Delicious Veggies And Sauces', 'Type', 'Reguler,Grilled,Fried_Crunchy', '30', 'Fillings', 'Cheese,Panner,Potato,Capsicum,Onions,Tomato,Beet_Root,', '15', 'Sauces', 'Tandoori,Peri_Peri,Chipotle,Thousand_Island,Cheesy', '10', 'uploads/sandwich1.png'),
(24, 'Main Course', 'Pizza', 170, 'A Double Layerd Pizza Loded with 5 Types Of Cheese And Many Veggies', 'Base', 'Regular Fresh Bread,Charcoal,Thin Crust,Double Layered,Puff', '50', 'Toppings', 'Panner,Capsicum,Onions,Tomato,Jalapenos,Baby_Corn', '10', 'Cheese', 'Mozzarella,Cheddar,Parmesan,Liquid', '15', 'uploads/pizza2.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(2) NOT NULL,
  `name` varchar(20) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `img`) VALUES
(5, 'Pizza', 'uploads/slider_pizza.png'),
(6, 'Pasta', 'uploads/slider_pasta.png'),
(7, 'Fries', 'uploads/slider_fries.png'),
(8, 'Taco', 'uploads/slider_taco.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Demo', 'smeetparmar2001@gmai', 'efwef'),
(2, 'Demo', 'smeetparmar2001@gmai', 'efwef'),
(3, 'Demo', 'smeetparmar2001@gmai', '123'),
(4, 'Smeet', 'smeetparmar2001@gmai', '999'),
(5, 'Jethalal Gada', 'gadajethalal9@gmail.', 'tapu'),
(6, 'Demo', '123@gmail.com.java', '123'),
(7, 'Smeet', 'smeet@yahoo.in', '123'),
(8, 'Demo2', 'demo2@yahoo.in', '123');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `username`, `product`) VALUES
(14, 'Demo', 'Chocolate Shake'),
(20, 'Demo', 'Frankie'),
(22, 'Demo', 'Tomato Pasta'),
(23, 'Demo', 'Chinese Frankie'),
(39, 'Demo2', 'Chocolate Shake'),
(40, 'Demo2', 'Burger'),
(41, 'Smeet', 'Chocolate Shake'),
(46, 'Smeet', 'Steamed Momos'),
(47, 'Smeet', 'Tomato Pasta'),
(48, 'Smeet', 'Chinese Frankie'),
(49, 'Smeet', 'Pizza');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
