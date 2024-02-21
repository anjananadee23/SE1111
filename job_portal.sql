-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 01:51 PM
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
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `type` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `type`, `address`) VALUES
(1, 'MyDynamica', 'Software Company', 'Jaffna'),
(2, 'Wappsat', 'Software Company', 'Germany');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `skills` varchar(150) NOT NULL,
  `salary` decimal(10,0) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `company_name`, `experience`, `location`, `skills`, `salary`, `category_id`, `created_at`) VALUES
(1, 'HTML Designer', 'My Dynamica', '2 to 4 years', 'Jaffna', 'HTML, CSS, JAVASCRIPT, JQUERY, BOOTSTRAP, PHOTOSHOP', 13, 2, '2024-02-18 04:42:26'),
(3, 'HTML Designer', 'My Dynamica', '2', 'Jaffna', 'HTML, CSS, JAVASCRIPT, JQUERY, BOOTSTRAP, PHOTOSHOP', 13, 0, '2024-02-17 23:28:08'),
(4, 'HTML Designer', 'My Dynamica', '2', 'Jaffna', 'HTML, CSS, JAVASCRIPT, JQUERY, BOOTSTRAP, PHOTOSHOP', 13, 1, '2024-02-18 04:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `job_categories`
--

CREATE TABLE `job_categories` (
  `id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_categories`
--

INSERT INTO `job_categories` (`id`, `category`) VALUES
(1, 'Software Engineer'),
(2, 'Driver'),
(3, 'UI Designer'),
(4, 'Quality Assurance');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `job_categories`
--
ALTER TABLE `job_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_categories`
--
ALTER TABLE `job_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
