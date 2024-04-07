-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 08:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `pid`, `name`, `price`, `quantity`, `image`) VALUES
(62, 1, 39, 'Social Media Engineering', 699, 1, 'a (1).jpg'),
(63, 1, 40, 'Maths Fundamental', 899, 1, 'a (2).jpg'),
(64, 35, 24, 'Core Java', 699, 1, 'a.jpg'),
(65, 35, 38, 'Malala Book', 900, 1, '96921e068f4aa96042ff3d9425368769.jpg'),
(66, 35, 26, 'Object-Oriented Programming with C++', 200, 1, '41sbWdpTgRL._SX371_BO1,204,203,200_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(8, 31, 'Anuj', 'abhinavjha.india@gmail.com', '8169852368', 'cs'),
(9, 34, 'NEha', 'Nehab@gmail.com', '888888888', 'accept cod'),
(10, 1, 'neha', 'neha.india@gmail.com', '8898189809', 'need science books'),
(11, 35, 'neha', 'neha.india@gmail.com', '8898189809', 'test'),
(12, 1, 'neha', 'neha.india@gmail.com', '8898189809', 'i need math book'),
(13, 36, 'Anuj', 'abhinavjha.india@gmail.com', '8898189899', 'need help with more books on edu');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(18, 36, 'bishtneha', '08169852368', 'demo1@gmail.com', 'cash on delivery', 'flat no. xyz Vashi kopri navimumbai Navimumbai Maharashtra India - 400705', ', Time Management ( 1 ), Subconscious Mind Power ( 2 )', 997, '28-Aug-2022', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(20) NOT NULL,
  `details` varchar(500) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `details`, `price`, `image`) VALUES
(24, 'Core Java', 'Programming', 'Core Java ? An Integrated Approach covers all core concepts in a methodical way. It helps you learn the concepts?from OOPS to abstract classes and interfaces; from software packaging to providing API documents; from error handling to converting fundamental data into object form; from collection framework to streams and creating client and server program to threads; from creating GUI applications to generics and communication with database. This book also covers the interview questions along with', 699, 'a.jpg'),
(25, 'PYTHON: PROGRAMMING', 'Programming', 'Python Programming For Beginners: Learn The Basics Of Python Programming (Python Crash Course, Programming for Dummies)', 199, '518JSMYkY7L._SX260_.jpg'),
(26, 'Object-Oriented Programming with C++', 'Programming', 'Object-oriented programming with C++, 8th edition is here with some valuable updates. The new edition helps students to assess their learning by answering questions based on learning outcomes. Objective-type questions and dry-run questions are introduced to make students exam ready. A new appendix on interview questions is for those seeking to join the industry. The book is designed for students studying at the undergraduate level.', 200, '41sbWdpTgRL._SX371_BO1,204,203,200_.jpg'),
(27, 'Korean Language for Indian Learners ', 'Language', 'यह पुस्तक हिंदी में है। यह किताब हिन्दी-भाषी भारतीय छात्रों को सरल और प्रभावी तरीके से कोरियन सिखाने के उद्देश्य से लिखी गई है। किताब को हमने बोलचाल की भाषा में लिखने का प्रयास किया है जिससे कि ज्यादा से ज्यादा लोगों के लिए समझना सरल हो। ', 199, '419nESYkWRS.jpg'),
(28, 'Talking the Talk: Language', 'Language', 'Talking the Talk provides a comprehensive introduction to the psychology of language, written for the reader with no background in the field or any prior knowledge of psychology. Written in an accessible and friendly style, the book answers the questions people actually have about language;', 100, '41EJUsH8yEL._SX351_BO1,204,203,200_.jpg'),
(29, 'Conversational Russian Dialogues:', 'Language', 'Is conversational Russian turning a little too tricky for you? Do you have no idea how to order a meal or book a room at a hotel? If your answer to any of the previous questions was &#39;Yes&#39;, then this book is for you! If there&#39;s even been something tougher than learning the grammar rules of a new language, it&#39;s finding the way to speak with other people in that tongue.', 299, '41e17UrthkL._SX331_BO1,204,203,200_.jpg'),
(30, 'The Everything Learning German Book', 'Language', 'Order das beste Bier at Oktoberfest! Hitch a ride on der Autobahn! Say &#34;Wilkommen&#34; to your neuen deutschen Freunde!Learning to sprechen Sie Deutsches is fun--and far easier than you might think. German and English are closely related--you already know viele Phrasen! With this guide, you will make sense of this fascinating language in no time. ', 299, '51AtdG7H0zL._SX419_BO1,204,203,200_.jpg'),
(31, 'UPSSSC PET Preliminary Exam Guide', 'Exam', 'UPSSSC PET Preliminary Exam Guide for Group C & Other Posts 2022', 100, '6179ZWj5vjL._SX698_BO1,204,203,200_.jpg'),
(32, 'Maharashtra B.Ed. (CET & ELCT) Entrance ', 'Exam', 'The present book has been specially published for the aspirants of Maharashtra B.Ed Common Entrance Test (CET) & English Language Content Test (ELCT). The book comprises, along with the Latest Study and Practice Material, numerous questions in Solved Model Paper based on actual exam questions to make you familiar with the exam pattern and the type of questions asked with their answers.', 100, '51MuRkQSfTL._SX382_BO1,204,203,200_.jpg'),
(33, 'Territorial Army Officer 10 Practice', 'Exam', 'Serve the nation in two capacities– as a civilian and as a soldier. Applications are invited from gainfully employed young citizens for an opportunity to put on the uniform and serve the nation as Territorial Army Officers. ', 299, '61PCJQHMz9L._SX698_BO1,204,203,200_.jpg'),
(34, 'Body Language', 'Education', 'Body Language: Use Non-verbal Communication And Nlp To Influence And Persuade People (Learn Techniques That Psychologists And Fbi Agents Use To Read People)', 100, '41jqZxiSdnL.jpg'),
(35, 'Subconscious Mind Power', 'Education', 'Are you interested in discovering the secret to dramatically improving and transforming your life faster than you ever imagined possible? If you are, this is the book for you!\r\n', 299, '51GfUoBjDTL.jpg'),
(36, 'Time Management', 'Education', 'This book contains proven steps and strategies on how to manage your time efficiently and effectively.\r\n\r\nOur concept of time cannot be manipulated. We cannot add another hour to the twenty-four hours we get every day. Our snooze button does not have the power to delay the sun from rising in the morning. Time simply does not wait for anyone.', 399, '41ok5ReBLsL.jpg'),
(37, 'Psychology', 'Education', 'Psychology: Learn Influence And Persuasion And Read Body Language (Advanced Nlp Mindset: The New Psychology Of Success To Skyrocket Your Life And Your Career)', 199, '41SEyibL2vL._SY346_.jpg'),
(38, 'Malala Book', 'Education', 'I COME FROM a country which was created at midnight. When I almost died it was just after midday.\r\nOne year ago I left my home for school and never returned. I was shot by a Taliban bullet and was\r\nflown out of Pakistan unconscious. Some people say I will never return home but I believe firmly in\r\nmy heart that I will. To be torn from the country that you love is not something to wish on anyone.\r\nNow, every morning when I open my eyes, I long to see my old room full of my things, my clothes\r\nall', 900, '96921e068f4aa96042ff3d9425368769.jpg'),
(39, 'Social Media Engineering', 'Programming', 'Social media book easy to study market content media.', 699, 'a (1).jpg'),
(40, 'Maths Fundamental', 'Education', 'MAth all class book', 899, 'a (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user',
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`, `image`) VALUES
(1, 'Abhinav jha', 'abhinavjha.india@gmail.com', '653cfd22d81679b4e1a4cdc507a0f6ca', 'user', 'pic.jpg'),
(2, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'logo.png'),
(3, 'Neha', 'neha@gmail.com', '653cfd22d81679b4e1a4cdc507a0f6ca', 'user', 'pic-4.png'),
(34, 'NehaB', 'Nehab@gmail.com', '653cfd22d81679b4e1a4cdc507a0f6ca', 'user', 'jenniferesl.jpg'),
(35, 'NEhab', 'neha.india@gmail.com', '653cfd22d81679b4e1a4cdc507a0f6ca', 'user', 'Photo2.jpg'),
(36, 'demo1', 'demo1@gmail.com', '653cfd22d81679b4e1a4cdc507a0f6ca', 'user', '96921e068f4aa96042ff3d9425368769.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `pid`, `name`, `price`, `image`) VALUES
(51, 34, 25, 'PYTHON: PROGRAMMING', 199, '518JSMYkY7L._SX260_.jpg'),
(54, 36, 28, 'Talking the Talk: Language', 100, '41EJUsH8yEL._SX351_BO1,204,203,200_.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
