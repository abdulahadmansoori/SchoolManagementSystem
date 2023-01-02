-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 11:17 AM
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
-- Database: `school_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fee` int(11) NOT NULL,
  `creaded_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`, `fee`, `creaded_on`) VALUES
(1, 'First', 3500, '2022-12-25'),
(2, 'Second', 3500, '2022-12-25'),
(3, 'Third', 3500, '2022-12-25'),
(4, 'Fourth', 3500, '2022-12-25'),
(5, 'Fifth', 3500, '2022-12-25'),
(6, 'Sixth', 4500, '2022-12-25'),
(7, 'Seventh', 4500, '2022-12-25'),
(8, 'Eighth', 4500, '2022-12-25'),
(9, 'Ninth', 5500, '2022-12-25'),
(10, 'Tenth', 5500, '2022-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` int(11) NOT NULL,
  `day` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `day`) VALUES
(5, 'friday'),
(1, 'monday'),
(6, 'saturday'),
(4, 'thursday'),
(2, 'tuesday'),
(3, 'wednesday');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `created_on` date NOT NULL DEFAULT current_timestamp(),
  `gender` varchar(50) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `birth_place` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `parent_state` varchar(50) NOT NULL,
  `parent_city` varchar(50) NOT NULL,
  `parent_address` varchar(50) NOT NULL,
  `parent_email` varchar(50) NOT NULL,
  `parent_contact` varchar(50) NOT NULL,
  `education01` varchar(50) NOT NULL,
  `education01_year` int(11) NOT NULL,
  `education01_subject` varchar(50) NOT NULL,
  `education02` varchar(50) NOT NULL,
  `education02_year` int(11) NOT NULL,
  `education02_subject` varchar(50) NOT NULL,
  `education03` varchar(50) NOT NULL,
  `education03_year` int(11) NOT NULL,
  `education03_subject` varchar(50) NOT NULL,
  `education04` varchar(50) NOT NULL,
  `education04_year` int(11) NOT NULL,
  `education04_subject` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `first_name`, `last_name`, `created_on`, `gender`, `blood_group`, `email`, `date_of_birth`, `birth_place`, `religion`, `nationality`, `state`, `city`, `address`, `mother_name`, `parent_state`, `parent_city`, `parent_address`, `parent_email`, `parent_contact`, `education01`, `education01_year`, `education01_subject`, `education02`, `education02_year`, `education02_subject`, `education03`, `education03_year`, `education03_subject`, `education04`, `education04_year`, `education04_subject`, `father_name`) VALUES
(8, 'abdul', 'Ahad', '2022-12-19', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', ''),
(9, 'zxcxzcz', 'xczxc', '2022-12-25', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', ''),
(10, 'Ammad', 'Mansoori', '2022-12-25', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', ''),
(11, 'asdasd', 'asdasd', '2022-12-25', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', ''),
(12, 'asdsad', 'asdasda', '2022-12-25', 'male', 'asdasda', 'sdasd', '0000-00-00', '', 'male', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', ''),
(13, 'noman', 'hanif', '2022-12-25', 'male', 'asdasd', 'asdasd', '2022-12-08', 'asdasd', 'Muslim', 'asdasd', 'asdasd', 'adasd', 'asdasd', 'asdasd', 'asdasdasd', 'asdasd', 'asdd', 'asdadsd', '46311', 'asdasd', 2012, 'asdasdasd', 'asdasda', 2014, 'asdasd', 'sdsd', 2018, 'asdasd', 'asdasd', 2020, 'asdasd', 'all');

-- --------------------------------------------------------

--
-- Table structure for table `periods`
--

CREATE TABLE `periods` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `periods`
--

INSERT INTO `periods` (`id`, `name`) VALUES
(1, '1st'),
(2, '2nd'),
(3, '3rd'),
(4, '4th'),
(5, '5th'),
(6, '6th'),
(7, '7th');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `name`, `class_id`) VALUES
(1, 'A', 2),
(2, 'B', 2),
(3, 'C', 2),
(4, 'D', 2);

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `sec_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`id`, `class_id`, `sub_id`, `sec_id`) VALUES
(1, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `created_on` date NOT NULL DEFAULT current_timestamp(),
  `gender` varchar(50) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `birth_place` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `parent_state` varchar(50) NOT NULL,
  `parent_city` varchar(50) NOT NULL,
  `parent_address` varchar(50) NOT NULL,
  `parent_email` varchar(50) NOT NULL,
  `parent_contact` varchar(50) NOT NULL,
  `education01` varchar(50) NOT NULL,
  `education01_year` int(11) NOT NULL,
  `education01_subject` varchar(50) NOT NULL,
  `education02` varchar(50) NOT NULL,
  `education02_year` int(11) NOT NULL,
  `education02_subject` varchar(50) NOT NULL,
  `education03` varchar(50) NOT NULL,
  `education03_year` int(11) NOT NULL,
  `education03_subject` varchar(50) NOT NULL,
  `education04` varchar(50) NOT NULL,
  `education04_year` int(11) NOT NULL,
  `education04_subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `first_name`, `last_name`, `created_on`, `gender`, `blood_group`, `email`, `date_of_birth`, `birth_place`, `religion`, `nationality`, `state`, `city`, `address`, `father_name`, `mother_name`, `parent_state`, `parent_city`, `parent_address`, `parent_email`, `parent_contact`, `education01`, `education01_year`, `education01_subject`, `education02`, `education02_year`, `education02_subject`, `education03`, `education03_year`, `education03_subject`, `education04`, `education04_year`, `education04_subject`) VALUES
(5, 'abdul', 'Ahad', '2022-12-19', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', '', 0, '', '', 0, ''),
(6, 'faizan', 'rehman', '2022-12-25', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', '', 0, '', '', 0, ''),
(7, 'Shayan ', 'Zaman', '2022-12-25', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', '', 0, '', '', 0, ''),
(8, 'Hello', 'World', '2022-12-25', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', '', 0, '', '', 0, ''),
(9, 'asd', 'asdasd', '2022-12-25', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', '', 0, '', '', 0, ''),
(10, 'ahad', 'mansoori', '2022-12-25', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', '', 0, '', '', 0, ''),
(11, 'cvbcvb', 'cvbcvb', '2022-12-25', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', '', 0, '', '', 0, ''),
(12, 'asa', 'sdasd', '2022-12-25', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', 0, '', '', 0, '', '', 0, ''),
(13, 'Ammad', 'Mansoori', '2022-12-25', 'male', 'b+', 'abc@abc.com', '0000-00-00', 'dfgdfg', 'Muslim', 'dfgdfg', 'dfg', 'dfg', 'fgdfg', 'dfgdfg', 'dfgdgf', 'asdadas', 'asdsa', 'fgdfg', 'asd@asd.com', '561652', 'asdasd', 0, 'asdsd', 'asdasd', 0, 'asd', '21asdasd', 0, 'asdsad', 'asdsd', 0, 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `created_on` date NOT NULL DEFAULT current_timestamp(),
  `profile_pic` blob NOT NULL,
  `gender` varchar(50) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `birth_place` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `parent_state` varchar(50) NOT NULL,
  `parent_city` varchar(50) NOT NULL,
  `parent_address` varchar(50) NOT NULL,
  `parent_email` varchar(50) NOT NULL,
  `parent_contact` varchar(50) NOT NULL,
  `guardian_name` varchar(50) NOT NULL,
  `guardian_state` varchar(50) NOT NULL,
  `guardian_city` varchar(50) NOT NULL,
  `guardian_address` varchar(50) NOT NULL,
  `guardian_email` varchar(50) NOT NULL,
  `guardian_contact` varchar(50) NOT NULL,
  `previous_school_name` varchar(50) NOT NULL,
  `previous_school_state` varchar(50) NOT NULL,
  `previous_school_city` varchar(50) NOT NULL,
  `previous_school_address` varchar(50) NOT NULL,
  `last_class` varchar(50) NOT NULL,
  `last_class_year` varchar(50) NOT NULL,
  `applied_class` int(11) NOT NULL,
  `sec_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `created_on`, `profile_pic`, `gender`, `blood_group`, `email`, `DOB`, `birth_place`, `religion`, `nationality`, `state`, `city`, `address`, `father_name`, `mother_name`, `parent_state`, `parent_city`, `parent_address`, `parent_email`, `parent_contact`, `guardian_name`, `guardian_state`, `guardian_city`, `guardian_address`, `guardian_email`, `guardian_contact`, `previous_school_name`, `previous_school_state`, `previous_school_city`, `previous_school_address`, `last_class`, `last_class_year`, `applied_class`, `sec_id`) VALUES
(63, 'Abdul', 'Ahad', '2022-12-25', '', 'male', 'b+', 'asd@asd', '2022-12-01', 'xcxzc', 'Muslim', 'zxcz', 'asdadas', 'asdsa', 'fgdfg', 'zxcxzc', 'zxczxczx', 'czxczx', 'czxczxcxzc', 'zxczxczxc', 'zxzx@cxzc', '15413', 'zxcxzcxzcz', 'xcxzczxc', 'zxczxcx', 'zxczxcxzcz', 'xcxzc@zxczxc', '15456115', 'dsfzxcxc', 'zxczxczc', 'zxczxczxc', 'zxcxzczc', '212020', '1100.0', 2, 2),
(64, 'zamaan', 'ziya', '2022-12-25', '', 'female', 'zx', 'zxc.com', '2022-12-15', 'zxc', 'Muslim', 'zxc', 'zxcxc', 'zxcxc', 'zxcxc', 'zxcxzc', 'zxczxc', 'zxcxczxc', 'zxcxc', 'zcxc', 'zxzcxcxzc', '153616513', 'zxxzc', 'zxcxzcc', 'zczxc', 'zxcxzc', 'zxcxc', '106516', 'zxcxcxczxxz', 'zxcxcxc', 'zxczxc', 'zxczxczxc', '21125', '1255', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `level`) VALUES
(1, 'english', 'middle'),
(2, 'mathamatics', 'mmiddle'),
(3, 'islamiat', 'middle'),
(4, 'science', 'middle'),
(5, 'social studies', 'middle');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `sec_id` int(11) NOT NULL,
  `period_id` int(11) NOT NULL,
  `fac_id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`id`, `class_id`, `sec_id`, `period_id`, `fac_id`, `day`, `sub_id`) VALUES
(1, 2, 1, 1, 10, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `day` (`day`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `periods`
--
ALTER TABLE `periods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `class_id` (`class_id`),
  ADD UNIQUE KEY `sub_id` (`sub_id`),
  ADD UNIQUE KEY `sec_id` (`sec_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `applied_class` (`applied_class`),
  ADD KEY `sec_id` (`sec_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `class_id` (`class_id`),
  ADD UNIQUE KEY `sec_id` (`sec_id`),
  ADD UNIQUE KEY `period_id` (`period_id`,`fac_id`,`sub_id`),
  ADD UNIQUE KEY `period_id_2` (`period_id`,`fac_id`,`sub_id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `day` (`day`),
  ADD KEY `fac_id` (`fac_id`),
  ADD KEY `sub_id` (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `periods`
--
ALTER TABLE `periods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`);

--
-- Constraints for table `slots`
--
ALTER TABLE `slots`
  ADD CONSTRAINT `slots_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`),
  ADD CONSTRAINT `slots_ibfk_2` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`id`),
  ADD CONSTRAINT `slots_ibfk_3` FOREIGN KEY (`sec_id`) REFERENCES `section` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`applied_class`) REFERENCES `class` (`id`),
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`sec_id`) REFERENCES `section` (`id`);

--
-- Constraints for table `time_table`
--
ALTER TABLE `time_table`
  ADD CONSTRAINT `time_table_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`),
  ADD CONSTRAINT `time_table_ibfk_2` FOREIGN KEY (`sec_id`) REFERENCES `section` (`id`),
  ADD CONSTRAINT `time_table_ibfk_3` FOREIGN KEY (`fac_id`) REFERENCES `faculty` (`id`),
  ADD CONSTRAINT `time_table_ibfk_4` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`id`),
  ADD CONSTRAINT `time_table_ibfk_5` FOREIGN KEY (`period_id`) REFERENCES `periods` (`id`),
  ADD CONSTRAINT `time_table_ibfk_6` FOREIGN KEY (`day`) REFERENCES `days` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
