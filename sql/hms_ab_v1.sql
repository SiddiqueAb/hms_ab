-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 08:53 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

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
-- Table structure for table `authority`
--

CREATE TABLE `authority` (
  `id` int(11) NOT NULL,
  `credential` varchar(250) NOT NULL,
  `a_key` varchar(250) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `cash_on_hand` decimal(10,0) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `user_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authority`
--

INSERT INTO `authority` (`id`, `credential`, `a_key`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`, `cash_on_hand`, `owner_id`, `user_type`) VALUES
(1, '01674514499', 'e10adc3949ba59abbe56e057f20f883e', 1, '2021-02-07 11:36:55', '2021-02-07 11:36:55', 1, 1, '1', 1, 1),
(2, '01780805503', 'e10adc3949ba59abbe56e057f20f883e', 1, '2021-02-07 11:36:55', '2021-02-07 11:36:55', 1, 1, '1', 1, 2),
(3, '01780805504', 'e10adc3949ba59abbe56e057f20f883e', 1, '2021-02-07 11:36:55', '2021-02-07 11:36:55', 1, 1, '1', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `b_id` int(11) NOT NULL,
  `b_m_id` int(11) NOT NULL,
  `b_date` date NOT NULL,
  `b_ammount` varchar(255) NOT NULL,
  `b_created_at` datetime NOT NULL,
  `b_created_by` int(11) NOT NULL,
  `b_updated_at` datetime DEFAULT NULL,
  `b_updated_by` int(11) NOT NULL,
  `b_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `daily_meal`
--

CREATE TABLE `daily_meal` (
  `dm_id` int(11) NOT NULL,
  `dm_m_id` int(11) NOT NULL,
  `dm_reguler_meal` int(11) NOT NULL,
  `dm_guest_meal` int(11) NOT NULL,
  `dm_created_at` datetime NOT NULL,
  `dm_created_by` int(11) NOT NULL,
  `dm_updated_at` datetime DEFAULT NULL,
  `dm_updated_by` int(11) NOT NULL,
  `dm_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `decoration_fee`
--

CREATE TABLE `decoration_fee` (
  `df_id` int(11) NOT NULL,
  `df_m_id` int(11) NOT NULL,
  `df_date` date NOT NULL,
  `df_reference` varchar(255) NOT NULL,
  `df_ammount` varchar(255) NOT NULL,
  `df_comment` varchar(255) NOT NULL,
  `df_created_at` datetime NOT NULL,
  `df_created_by` int(11) NOT NULL,
  `df_updated_at` datetime DEFAULT NULL,
  `df_updated_by` int(11) NOT NULL,
  `df_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `extra_cost`
--

CREATE TABLE `extra_cost` (
  `ec_id` int(11) NOT NULL,
  `ec_date` date NOT NULL,
  `ec_fm_id` int(11) NOT NULL,
  `ec_sm_id` int(11) NOT NULL,
  `ec_for` varchar(255) NOT NULL,
  `ec_ammount` int(11) NOT NULL,
  `ec_created_at` datetime NOT NULL,
  `ec_created_by` int(11) NOT NULL,
  `ec_updated_at` datetime DEFAULT NULL,
  `ec_updated_by` int(11) NOT NULL,
  `ec_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `frontend`
--

CREATE TABLE `frontend` (
  `f_id` int(11) NOT NULL,
  `f_mess_name` varchar(255) NOT NULL,
  `f_logo` varchar(255) NOT NULL,
  `f_mobile` varchar(255) NOT NULL,
  `f_mail` varchar(255) NOT NULL,
  `f_address` varchar(255) NOT NULL,
  `f_admin_name` varchar(255) NOT NULL,
  `f_created_at` datetime NOT NULL,
  `f_created_by` int(11) NOT NULL,
  `f_updated_at` datetime DEFAULT NULL,
  `f_updated_by` int(11) NOT NULL,
  `f_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manager_set`
--

CREATE TABLE `manager_set` (
  `ms_id` int(11) NOT NULL,
  `ms_month` date NOT NULL,
  `ms_fm_id` int(11) NOT NULL,
  `ms_sm_id` int(11) NOT NULL,
  `ms_created_at` datetime NOT NULL,
  `ms_created_by` int(11) NOT NULL,
  `ms_updated_at` datetime DEFAULT NULL,
  `ms_updated_by` int(11) NOT NULL,
  `ms_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `marketer`
--

CREATE TABLE `marketer` (
  `mk_id` int(11) NOT NULL,
  `mk_date` date NOT NULL,
  `mk_fm_id` int(11) NOT NULL,
  `mk_sm_id` int(11) NOT NULL,
  `mk_created_at` datetime NOT NULL,
  `mk_created_by` int(11) NOT NULL,
  `mk_updated_at` datetime DEFAULT NULL,
  `mk_updated_by` int(11) NOT NULL,
  `mk_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `marketing_cost`
--

CREATE TABLE `marketing_cost` (
  `mcost_id` int(11) NOT NULL,
  `mcost_date` date NOT NULL,
  `mcost_fm_id` int(11) NOT NULL,
  `mcost_sm_id` int(11) NOT NULL,
  `mcost_ammount` int(11) NOT NULL,
  `mcost_created_at` datetime NOT NULL,
  `mcost_created_by` int(11) NOT NULL,
  `mcost_updated_at` datetime DEFAULT NULL,
  `mcost_updated_by` int(11) NOT NULL,
  `mcost_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `meal_off_by_user`
--

CREATE TABLE `meal_off_by_user` (
  `mu_id` int(11) NOT NULL,
  `mu_m_id` int(11) NOT NULL,
  `mu_date` date NOT NULL,
  `mu_time` time NOT NULL,
  `mu_created_at` datetime NOT NULL,
  `mu_created_by` int(11) NOT NULL,
  `mu_updated_at` datetime DEFAULT NULL,
  `mu_updated_by` int(11) NOT NULL,
  `mu_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `meeting_control`
--

CREATE TABLE `meeting_control` (
  `mc_id` int(11) NOT NULL,
  `mc_date` date NOT NULL,
  `mc_time` time NOT NULL,
  `mc_subject` varchar(255) NOT NULL,
  `mc_created_at` datetime NOT NULL,
  `mc_created_by` int(11) NOT NULL,
  `mc_updated_at` datetime DEFAULT NULL,
  `mc_updated_by` int(11) NOT NULL,
  `mc_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `m_gurdian_name` varchar(255) NOT NULL,
  `m_occupation` varchar(255) NOT NULL,
  `m_education` varchar(255) NOT NULL,
  `m_address` varchar(255) NOT NULL,
  `m_mobile` varchar(255) NOT NULL,
  `m_password` varchar(255) NOT NULL,
  `m_room_no` varchar(255) NOT NULL,
  `m_social_media` varchar(255) NOT NULL,
  `m_image` varchar(255) NOT NULL,
  `m_created_at` datetime NOT NULL,
  `m_created_by` int(11) NOT NULL,
  `m_updated_at` datetime DEFAULT NULL,
  `m_updated_by` int(11) NOT NULL,
  `m_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`m_id`, `m_name`, `m_gurdian_name`, `m_occupation`, `m_education`, `m_address`, `m_mobile`, `m_password`, `m_room_no`, `m_social_media`, `m_image`, `m_created_at`, `m_created_by`, `m_updated_at`, `m_updated_by`, `m_status`) VALUES
(67, 'সালাহউদ্দিন আহমেদ', 'নুর আহমেদ', 'ছাত্র', 'অনার্স চতুর্থ বর্ষ', 'কুষ্টিয়া', '017895856', '123456', '12', 'www.facebook.com/username.43', '', '2021-05-13 18:00:31', 2, NULL, 0, 1),
(68, 'রাতুল রহমান', 'নূর মোহাম্মদ', 'ছাত্র', 'অনার্স চতুর্থ বর্ষ', 'পাবনা', '01780805503', '123456', '15', 'www.facebook.com/ratul122', '', '2021-05-13 18:01:52', 2, NULL, 0, 1),
(70, 'arif', 'fdasf', 'dsfdasf', 'fdas', 'fdasfdasfads', '', '', '', '', '', '2021-07-09 01:37:21', 2, '2021-07-09 01:37:38', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `n_id` int(11) NOT NULL,
  `n_date` date NOT NULL,
  `n_title` varchar(255) NOT NULL,
  `n_created_at` datetime NOT NULL,
  `n_created_by` int(11) NOT NULL,
  `n_updated_at` datetime DEFAULT NULL,
  `n_updated_by` int(11) NOT NULL,
  `n_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_comment`
--

CREATE TABLE `user_comment` (
  `uc_id` int(11) NOT NULL,
  `uc_m_id` int(11) NOT NULL,
  `uc_subject` varchar(255) NOT NULL,
  `uc_comment` varchar(255) NOT NULL,
  `uc_created_at` datetime NOT NULL,
  `uc_created_by` int(11) NOT NULL,
  `uc_updated_at` datetime DEFAULT NULL,
  `uc_updated_by` int(11) NOT NULL,
  `uc_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authority`
--
ALTER TABLE `authority`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `daily_meal`
--
ALTER TABLE `daily_meal`
  ADD PRIMARY KEY (`dm_id`);

--
-- Indexes for table `decoration_fee`
--
ALTER TABLE `decoration_fee`
  ADD PRIMARY KEY (`df_id`);

--
-- Indexes for table `extra_cost`
--
ALTER TABLE `extra_cost`
  ADD PRIMARY KEY (`ec_id`);

--
-- Indexes for table `frontend`
--
ALTER TABLE `frontend`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `manager_set`
--
ALTER TABLE `manager_set`
  ADD PRIMARY KEY (`ms_id`);

--
-- Indexes for table `marketer`
--
ALTER TABLE `marketer`
  ADD PRIMARY KEY (`mk_id`);

--
-- Indexes for table `marketing_cost`
--
ALTER TABLE `marketing_cost`
  ADD PRIMARY KEY (`mcost_id`);

--
-- Indexes for table `meal_off_by_user`
--
ALTER TABLE `meal_off_by_user`
  ADD PRIMARY KEY (`mu_id`);

--
-- Indexes for table `meeting_control`
--
ALTER TABLE `meeting_control`
  ADD PRIMARY KEY (`mc_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `user_comment`
--
ALTER TABLE `user_comment`
  ADD PRIMARY KEY (`uc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authority`
--
ALTER TABLE `authority`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `balance`
--
ALTER TABLE `balance`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daily_meal`
--
ALTER TABLE `daily_meal`
  MODIFY `dm_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `decoration_fee`
--
ALTER TABLE `decoration_fee`
  MODIFY `df_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `extra_cost`
--
ALTER TABLE `extra_cost`
  MODIFY `ec_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frontend`
--
ALTER TABLE `frontend`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manager_set`
--
ALTER TABLE `manager_set`
  MODIFY `ms_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marketer`
--
ALTER TABLE `marketer`
  MODIFY `mk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marketing_cost`
--
ALTER TABLE `marketing_cost`
  MODIFY `mcost_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meal_off_by_user`
--
ALTER TABLE `meal_off_by_user`
  MODIFY `mu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meeting_control`
--
ALTER TABLE `meeting_control`
  MODIFY `mc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_comment`
--
ALTER TABLE `user_comment`
  MODIFY `uc_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
