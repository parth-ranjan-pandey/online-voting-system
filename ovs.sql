-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2023 at 04:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ovs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `ad_id` int(2) NOT NULL,
  `ad_nm` varchar(10) NOT NULL,
  `ad_pwd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ad_id`, `ad_nm`, `ad_pwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `c_id` int(4) NOT NULL,
  `elec_id` int(4) NOT NULL,
  `c_nm` text NOT NULL,
  `c_py` varchar(255) NOT NULL,
  `c_edu` varchar(255) NOT NULL,
  `c_ach` varchar(255) NOT NULL,
  `c_bio` varchar(255) NOT NULL,
  `c_gls` varchar(255) NOT NULL,
  `c_img` varchar(255) NOT NULL,
  `c_py_lg` varchar(255) NOT NULL,
  `stat` enum('pending','verified') NOT NULL DEFAULT 'pending' COMMENT 'stattus of candidate',
  `cc` int(11) NOT NULL COMMENT 'election constituency of candidates'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`c_id`, `elec_id`, `c_nm`, `c_py`, `c_edu`, `c_ach`, `c_bio`, `c_gls`, `c_img`, `c_py_lg`, `stat`, `cc`) VALUES
(11, 1, 'Candidate A', 'Eagle Party', 'holds a Bachelor\'s degree in Political Science from the University of ABC and a Master\'s degree in Public Administration from XYZ University.', 'He has served as the Mayor of his hometown for two terms and has successfully implemented various community development programs. He has also been recognized for his efforts in promoting sustainability and green initiatives.', 'born and raised in the town he now seeks to represent. He has a deep connection with the community and has always been passionate about public service.', 'goal is to improve education and healthcare accessibility in the region. He also aims to stimulate economic growth by attracting new businesses and creating job opportunities.', 'c1.jpg', 'p1.png', 'verified', 1),
(12, 1, 'Candidate B', 'Unicorn Party', ' has a Ph.D. in Environmental Science from DEF University and a Bachelor\'s degree in Biology from GHI College.', ' has published several research papers on environmental conservation and has worked with international organizations on climate change initiatives.', ' has a background in environmental science and a strong commitment to sustainability. She grew up in a family that instilled a love for nature and the importance of protecting the environment.', 'primary goal is to address environmental issues, such as climate change and pollution, at the local level. She also aims to promote green technologies and create eco-friendly policies for the community.', 'c3.jpg', 'p3.png', 'verified', 1),
(13, 1, 'Candidate C', 'Starwings Party', 'holds a Bachelor\'s degree in Business Administration from JKL University and has completed various leadership and management courses.', 'successfully run his own small business for the past 15 years and has been an active member of the local Chamber of Commerce.', ' is a dedicated entrepreneur who understands the challenges faced by small businesses. He has lived in the area his entire life and is passionate about economic development', ' is to promote economic growth by supporting local businesses, attracting new investments, and improving infrastructure to create a more business-friendly environment.', 'c2.jpg', 'p2.png', 'verified', 34),
(14, 1, 'Candidate D', 'Moderate Party', ' has a Juris Doctor degree from MNO Law School and a Bachelor\'s degree in Political Science from PQR College.', 'as worked as a lawyer for a prestigious law firm and has actively volunteered for various legal aid organizations.', 'a dedicated attorney with a strong sense of justice. She is committed to ensuring equal access to legal resources and upholding the rule of law.', ' primary goal is to improve access to legal aid services for underprivileged communities. She also aims to reform the criminal justice system and address issues related to social justice and equality.', 'c4.jpg', 'p4.png', 'verified', 1),
(15, 5, 'Candidate E', 'Unified Party', 'holds a Bachelor\'s degree in Education from STU College and has completed advanced courses in child psychology.', 'served as a teacher and school principal for over 20 years, receiving awards for his dedication to education.', ' a lifelong educator who believes in the power of education to transform lives. He has a strong connection with the local schools and parents.', 'main goal is to improve the quality of education in the community, increase funding for schools, and provide support for teachers and students. He also wants to ensure that every child has access to a quality education regardless of their background.', 'c8.jpg', 'p5.png', 'verified', 1);

-- --------------------------------------------------------

--
-- Table structure for table `constituency`
--

CREATE TABLE `constituency` (
  `constituency_id` int(11) NOT NULL,
  `state_id` int(11) DEFAULT NULL,
  `constituency_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `constituency`
--

INSERT INTO `constituency` (`constituency_id`, `state_id`, `constituency_name`) VALUES
(1, 1, 'Aizawl East I'),
(2, 1, 'Aizawl East II'),
(3, 1, 'Aizawl East III'),
(4, 1, 'Aizawl North I'),
(5, 1, 'Aizawl North II'),
(6, 1, 'Aizawl North III'),
(7, 1, 'Aizawl South I'),
(8, 1, 'Aizawl South II'),
(9, 1, 'Aizawl West I'),
(10, 1, 'Aizawl West II'),
(11, 1, 'Aizawl West III'),
(12, 1, 'Aizawl West IV'),
(13, 1, 'Chalfilh'),
(14, 1, 'Champhai North'),
(15, 1, 'Champhai South'),
(16, 1, 'Dampa'),
(17, 1, 'East Tuipui'),
(18, 1, 'Hachhek'),
(19, 1, 'Lengteng'),
(20, 1, 'Mamit'),
(21, 1, 'Palak'),
(22, 1, 'Serlui'),
(23, 1, 'Serchhip'),
(24, 1, 'Tawi'),
(25, 1, 'Thorang'),
(26, 1, 'Tuichang'),
(27, 1, 'Tuikum'),
(28, 1, 'Tuipang'),
(29, 1, 'Tuirial'),
(30, 1, 'Tuivawl'),
(31, 1, 'West Tuipui'),
(32, 1, 'Zawlnuam'),
(33, 1, 'Lawngtlai East'),
(34, 1, 'Lawngtlai West'),
(35, 1, 'Saiha'),
(36, 1, 'Tipaimukh'),
(37, 1, 'Lunglei North'),
(38, 1, 'Lunglei East'),
(39, 1, 'Lunglei West'),
(40, 1, 'Lunglei South');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `m_id` int(4) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`m_id`, `mail`, `name`, `message`) VALUES
(5, 'sfd@gmail.com', 'errgn', 'hi 123');

-- --------------------------------------------------------

--
-- Table structure for table `elections`
--

CREATE TABLE `elections` (
  `elec_id` int(4) NOT NULL,
  `elec_nm` text NOT NULL,
  `elec_desc` varchar(255) NOT NULL,
  `elec_st_dt` datetime NOT NULL,
  `elec_ed_dt` datetime NOT NULL,
  `stat` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'elections enabled or disabled',
  `cc` int(11) NOT NULL COMMENT 'election constituency'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `elections`
--

INSERT INTO `elections` (`elec_id`, `elec_nm`, `elec_desc`, `elec_st_dt`, `elec_ed_dt`, `stat`, `cc`) VALUES
(1, 'sample election', 'election for sample', '2023-09-11 08:25:00', '2023-09-13 08:25:00', 0, 1),
(5, 'election sample 2', 'sample 2', '2023-09-11 12:04:28', '2023-09-13 15:34:28', 1, 1),
(7, 'che', 'che', '2023-09-29 19:37:00', '2023-09-30 19:37:00', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'Mizoram');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(4) NOT NULL,
  `u_nm` varchar(10) NOT NULL,
  `u_pwd` varchar(10) NOT NULL,
  `u_mail` varchar(20) NOT NULL,
  `u_dob` date NOT NULL,
  `cc` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'enabled or not'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_nm`, `u_pwd`, `u_mail`, `u_dob`, `cc`, `active`) VALUES
(4, 'parth', 'user', 'user@gmail.com', '2000-06-29', 1, 1),
(5, 'user 2', 'user', 'test@gmail.com', '1998-12-04', 34, 1),
(6, 'chk', 'chk', 'chk@gmail.com', '2001-06-14', 1, 1),
(7, 'new', 'new', 'new@gmail.com', '2000-06-16', 1, 1),
(8, 'demo', 'user', 'demo@gmail.com', '1997-01-29', 17, 1),
(10, 'virat18@gm', '1234', 'virat18@gmail.com', '2000-06-07', 1, 1),
(11, 'sachin10@g', '1234', 'sachin10@gmail.com', '2000-08-12', 1, 0),
(12, 'voter', 'user', 'voter@gmail.com', '1996-11-15', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `v_id` int(4) NOT NULL,
  `u_id` int(4) NOT NULL,
  `elec_id` int(4) NOT NULL,
  `c_id` int(4) NOT NULL,
  `voted` tinyint(1) NOT NULL,
  `cc` int(11) DEFAULT NULL,
  `sho` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`v_id`, `u_id`, `elec_id`, `c_id`, `voted`, `cc`, `sho`) VALUES
(5, 4, 1, 12, 1, 1, 1),
(6, 4, 5, 15, 1, 1, 1),
(7, 6, 1, 12, 1, 1, 1),
(8, 6, 5, 15, 1, 1, 1),
(9, 10, 1, 11, 1, 1, 1),
(10, 11, 1, 11, 1, 1, 1),
(11, 12, 1, 12, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `elec_id` (`elec_id`),
  ADD KEY `fk_cc_constituency` (`cc`);

--
-- Indexes for table `constituency`
--
ALTER TABLE `constituency`
  ADD PRIMARY KEY (`constituency_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `elections`
--
ALTER TABLE `elections`
  ADD PRIMARY KEY (`elec_id`),
  ADD KEY `loc` (`cc`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `cc` (`cc`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`v_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `elec_id` (`elec_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `fk_constituency` (`cc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `ad_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `c_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `constituency`
--
ALTER TABLE `constituency`
  MODIFY `constituency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `m_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `elections`
--
ALTER TABLE `elections`
  MODIFY `elec_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `v_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidates`
--
ALTER TABLE `candidates`
  ADD CONSTRAINT `elec_id` FOREIGN KEY (`elec_id`) REFERENCES `elections` (`elec_id`),
  ADD CONSTRAINT `fk_cc_constituency` FOREIGN KEY (`cc`) REFERENCES `constituency` (`constituency_id`);

--
-- Constraints for table `constituency`
--
ALTER TABLE `constituency`
  ADD CONSTRAINT `constituency_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`);

--
-- Constraints for table `elections`
--
ALTER TABLE `elections`
  ADD CONSTRAINT `loc` FOREIGN KEY (`cc`) REFERENCES `constituency` (`constituency_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `cc` FOREIGN KEY (`cc`) REFERENCES `constituency` (`constituency_id`);

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `fk_constituency` FOREIGN KEY (`cc`) REFERENCES `constituency` (`constituency_id`),
  ADD CONSTRAINT `votes_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`),
  ADD CONSTRAINT `votes_ibfk_2` FOREIGN KEY (`elec_id`) REFERENCES `elections` (`elec_id`),
  ADD CONSTRAINT `votes_ibfk_3` FOREIGN KEY (`c_id`) REFERENCES `candidates` (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
