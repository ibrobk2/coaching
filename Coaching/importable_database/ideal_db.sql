-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2023 at 09:22 AM
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
-- Database: `ideal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `stock` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `price`, `stock`, `description`, `image`) VALUES
(2, 'Nirob', 16, 345, 'I am a hardworking and ambitious individual with a great passion for the transport and logistics industry. I am currently in my second year of studying BA Logistics and Supply Chain Management at Aston University. I have excellent communication skills, enabling me to effectively communicate with a wide range of people. I am seeing a part-time position in the industry in which I can put into practice my knowledge and experience, ultimately benefiting the operations of the organisation that I work for.', '../assets/img/student/1.jpg'),
(3, 'Rifat', 15, 518, 'I am a hardworking and ambitious individual with a great passion for the transport and logistics industry. I am currently in my second year of studying BA Logistics and Supply Chain Management at Aston University. I have excellent communication skills, enabling me to effectively communicate with a wide range of people. I am seeing a part-time position in the industry in which I can put into practice my knowledge and experience, ultimately benefiting the operations of the organisation that I work for.', '../assets/img/student/2.webp'),
(4, 'Ponik', 17, 32, 'I am an energetic, ambitious person who has developed a mature and responsible approach to any task that I undertake, or situation that I am presented with. As a graduate with three years’ experience in management, I am excellent in working with others to achieve a certain objective on time and with excellence. In my previous role, I improved the performance, operations and productivity of my team by 35%', '../assets/img/student/images.jpeg'),
(5, 'Name', 34, 23, 'I am an energetic, ambitious person who has developed a mature and responsible approach to any task that I undertake, or situation that I am presented with. As a graduate with three years’ experience in management, I am excellent in working with others to achieve a certain objective on time and with excellence. In my previous role, I improved the performance, operations and productivity of my team by 35%', '../assets/img/student/128837_00_2x.jpg'),
(7, 'Josef Roram', 12, 343, 'I am an energetic, ambitious person who has developed a mature and responsible approach to any task that I undertake, or situation that I am presented with. As a graduate with three years’ experience in management, I am excellent in working with others to achieve a certain objective on time and with excellence. In my previous role, I improved the performance, operations and productivity of my team by 35%', '../assets/img/student/images (2).jpeg'),
(8, 'Mushahedur', 1784150000, 10, 'I am a dedicated, hardworking and proactive Chemical Engineer with a strong background in design, plant operations, offshore operations, and process and safety improvements. I have solid work experience in designing, testing and analysing processes to increase the overall efficiency of operations. I am currently looking for an opportunity to utilise my technical skills in a challenging working environment and become a valuable asset to the organisation that I work for.', '../assets/img/student/2.webp'),
(9, 'Mush', 12, 21, 'Update Student Form Update Student Form Update Student Form Update Student Form Update Student Form Update Student Form', '../assets/img/student/pano.jpg'),
(10, 'Pulocik', 34, 32, 'tblsql_teachertblsql_teachertblsql_teachertblsql_teachertblsql_teachertblsql_teachertblsql_teachertblsql_teacher', '../assets/img/student/images (3).jpeg'),
(13, 'Foysalyham koreen', 13, 133, 'I am a good student. I am a good student. I am a good student. I am a good student. I am a good student. I am a good student. I am a good student. I am a good student. I am a good student. I am a good student. I am a good student. I am a good student. I am a good student. I am a good student. ', '../assets/img/student/images (1).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `phone`, `designation`, `about`, `image`) VALUES
(1, 'Mushahedur', 1784151488, 'শিক্ষক', ';sdkf;sldfks;dflks;dflksdfsdfsdfsdf', '../assets/img/PE_20200625_133244.png'),
(6, 'Mrk Pulock', 123434324, 'Bsc in cse', 'Mirpur ', '../assets/img/teacher/Official.jpg'),
(7, 'Supper Nirob', 12431234, 'Bsc in Law', 'Bishal Manos', '../assets/img/teacher/nirob.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Supper Admin', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'mrk', 'mrk@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'shoaib', 'shoaib@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'Supper Nirob', 'nirob@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'Foysal', 'foysal@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'rajib', 'rajib@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'rajib', 'rajib@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'superadmin', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'MRK', 'mrk@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
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
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
