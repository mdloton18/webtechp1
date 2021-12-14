-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 04:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinginfo`
--

CREATE TABLE `bookinginfo` (
  `id` int(50) NOT NULL,
  `eventname` varchar(30) NOT NULL,
  `totalperson` int(60) NOT NULL,
  `eventphone` int(14) NOT NULL,
  `eventdate` datetime NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `foodlist`
--

CREATE TABLE `foodlist` (
  `id` varchar(40) NOT NULL,
  `foodname` varchar(40) NOT NULL,
  `category` varchar(40) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodlist`
--

INSERT INTO `foodlist` (`id`, `foodname`, `category`, `description`, `price`, `image`) VALUES
('1', 'Burger', 'Fast Food', 'A hamburger is a food, typically considered a sandwich, consisting of one or more cooked patties.', '250', 'Burger.jpg'),
('2', 'Fried chicken', 'Fast Food', 'Fried chicken, also known as Southern fried chicken.', '150', 'ChickenFry.jpg'),
('3', 'Chicken Salad', 'Fast Food', 'Chicken Salad, also known as Southern salad.', '180', 'Salad_Chicken.jpg'),
('4', 'Biriyani', 'Rice', 'Biryani is a mixed rice dish originating among the Muslims of the Indian subcontinent. It is made wi', '230', 'biriyani.jpg'),
('5', 'Beef Kebab', 'Kebab', 'Kebab is a cooked meat dish, with its origins in Middle Eastern cuisines.', '170', 'kebab.jpg'),
('6', 'Polao', 'Rice', 'Pilau or pilaf is a rice dish of South Asian, Central Asian and Middle Eastern origin.', '80', 'polaos.jpeg'),
('7', 'Pizza', 'Fast Food', 'Pizza is a dish of Italian origin consisting of a usually round.', '480', 'pizza.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `number` varchar(40) NOT NULL,
  `food_name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `payment_method` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(20) NOT NULL,
  `food_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `username`, `number`, `food_name`, `category`, `amount`, `payment_method`, `date`, `status`, `food_id`) VALUES
;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(70) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `type` text NOT NULL,
  `dob` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `gender` text NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`name`, `username`, `password`, `email`, `address`, `phone`, `type`, `dob`, `gender`, `image`) VALUES
);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodlist`
--
ALTER TABLE `foodlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
