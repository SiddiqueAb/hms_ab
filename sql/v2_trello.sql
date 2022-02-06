-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 02:37 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms_ab`
--

-- --------------------------------------------------------

--
-- Table structure for table `trello`
--

CREATE TABLE `trello` (
  `t_id` int(11) NOT NULL,
  `t_icon_name` varchar(255) NOT NULL,
  `t_content_text` varchar(255) NOT NULL,
  `t_colum_id` int(11) NOT NULL,
  `t_row_position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trello`
--

INSERT INTO `trello` (`t_id`, `t_icon_name`, `t_content_text`, `t_colum_id`, `t_row_position`) VALUES
(1, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 1, 0),
(2, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 1, 0),
(3, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 1, 0),
(4, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 1, 0),
(5, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 1, 0),
(6, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 1, 0),
(7, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 1, 0),
(8, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 1, 0),
(9, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 1, 0),
(10, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 1, 0),
(11, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 1, 0),
(12, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 1, 0),
(13, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 2, 0),
(14, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 2, 0),
(15, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 2, 0),
(16, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 2, 0),
(17, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 3, 0),
(18, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 3, 0),
(19, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 4, 0),
(21, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 1, 0),
(22, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 1, 0),
(23, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 1, 0),
(24, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 1, 0),
(25, 'far fa-bookmark', 'lorem ipsum lorem ipsum', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trello`
--
ALTER TABLE `trello`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trello`
--
ALTER TABLE `trello`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
