-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2016 at 10:12 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kwel`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `access` int(4) NOT NULL DEFAULT '0',
  `is_published` tinyint(1) NOT NULL DEFAULT '1',
  `in_menu` tinyint(1) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `user_id`, `title`, `body`, `access`, `is_published`, `in_menu`, `order`, `created`) VALUES
(2, 2, 1, 'Sample Title2', 'Vestibulum nec nibh id nisi bibendum condimentum. Sed semper, turpis vel dapibus venenatis, enim tellus rutrum eros, tincidunt dignissim sem ante eleifend arcu. Praesent hendrerit nunc non faucibus fringilla. Suspendisse mattis imperdiet risus, eu consequat eros dapibus quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam blandit mattis justo ut hendrerit. Pellentesque cursus nulla elit, nec tempor massa consequat eget. Ut in enim urna. Maecenas eros diam, posuere ut faucibus at, feugiat at nisi. Integer condimentum, est ut rhoncus porta, tortor nisi elementum lacus, in aliquam ex ipsum vitae mi. Curabitur tincidunt consectetur libero vitae commodo. Nulla facilisi. Etiam nisl leo, auctor at semper ut, rhoncus quis sapien. Quisque malesuada semper posuere.', 0, 1, 1, 2, '2016-08-05 12:10:47'),
(8, 3, 1, 'ceva123', 'sajsajdsa ajidjadk ijija', 0, 1, 0, 0, '2016-08-29 08:28:05'),
(9, 1, 1, 'Test', 'uyygducj dnd jfek, kdolkfd le;', 0, 1, 0, 0, '2016-09-02 09:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created`) VALUES
(1, 'News1', '2016-08-05 12:11:49'),
(2, 'Tutorials2', '2016-08-05 12:12:19'),
(3, 'Company', '2016-08-05 12:12:19'),
(4, 'Ceva de testffffffffff', '2016-08-24 08:42:23'),
(5, 'xxxxxxx', '2016-08-29 08:36:15'),
(6, 'ddddddd', '2016-08-29 08:36:48'),
(7, 'casadsacsa', '2016-09-02 10:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'Registred'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(1, 'site_title', 'Sample site'),
(2, 'site_description', 'Vestibulum nec nibh id nisi bibendum condimentum. Sed semper, turpis vel dapibus venenatis, enim tellus rutrum eros, tincidunt dignissim sem ante eleifend arcu. Praesent hendrerit nunc non faucibus fringilla. Suspendisse mattis imperdiet risus, eu consequat eros dapibus quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam blandit mattis justo ut hendrerit. Pellentesque cursus nulla elit, nec tempor massa consequat eget. Ut in enim urna. Maecenas eros diam, posuere ut faucibus at, feugiat at nisi. Integer condimentum, est ut rhoncus porta, tortor nisi elementum lacus, in aliquam ex ipsum vitae mi. Curabitur tincidunt consectetur libero vitae commodo. Nulla facilisi. Etiam nisl leo, auctor at semper ut, rhoncus quis sapien. Quisque malesuada semper posuere.'),
(3, 'logo', 'mylogo.jpg'),
(4, 'jumbotron_heading', 'Jumbotron Heading'),
(5, 'jumbotron_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id venenatis metus, quis aliquet tortor. Quisque erat odio, elementum sed dictum ut, viverra eget lacus. Pellentesque pharetra sed enim finibus mattis. Aenean rhoncus pellentesque semper. Nunc cursus arcu ac aliquet semper. Phasellus quis facilisis lacus, nec viverra nisi. Integer eget maximus dolor. Duis viverra pretium nisl, quis lacinia lectus dignissim blandit. Nulla facilisi. Fusce sed egestas augue. Phasellus sit amet interdum est. In nec turpis est.'),
(6, 'jumbotron_button_text', 'Read More'),
(7, 'jumbotron_button_link', 'http://www.yourkewlsite.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `group_id`, `created`) VALUES
(1, 'Ion', 'Ion', 'II', 'ion@email.com', 'parola', 2, '2016-08-05 12:20:06'),
(2, 'Vasile ', 'Vasilescu', 'vasi_vasi', 'vasi@email.com', 'parola', 2, '2016-08-05 12:21:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
