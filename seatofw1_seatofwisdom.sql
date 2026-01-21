-- Create Database
CREATE DATABASE IF NOT EXISTS seatofw1_seatofwisdom
  DEFAULT CHARACTER SET utf8mb4
  COLLATE utf8mb4_general_ci;

USE seatofw1_seatofwisdom;

-- ------------------------------------------------------
-- Table structure for table `classes`
-- ------------------------------------------------------

DROP TABLE IF EXISTS `classes`;
CREATE TABLE `classes` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `level` varchar(200) NOT NULL,
  `section` varchar(200) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ------------------------------------------------------
-- Table structure for table `result_items`
-- ------------------------------------------------------

DROP TABLE IF EXISTS `result_items`;
CREATE TABLE `result_items` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `result_id` int(30) NOT NULL,
  `subject_id` int(30) NOT NULL,
  `resumption_test` int(255) NOT NULL,
  `ca_test` int(255) NOT NULL,
  `take_home_assignment` int(255) NOT NULL,
  `quiz` int(255) NOT NULL,
  `project` int(255) NOT NULL,
  `debate` int(255) NOT NULL,
  `note_taking` int(255) NOT NULL,
  `exams` int(255) NOT NULL,
  `mark` float NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ------------------------------------------------------
-- Table structure for table `results`
-- ------------------------------------------------------

DROP TABLE IF EXISTS `results`;
CREATE TABLE `results` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `student_id` int(30) NOT NULL,
  `term` varchar(255) NOT NULL,
  `marks_percentage` varchar(5) NOT NULL,
  `class_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ------------------------------------------------------
-- Table structure for table `students`
-- ------------------------------------------------------

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `student_code` varchar(50) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `class_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ------------------------------------------------------
-- Table structure for table `subjects`
-- ------------------------------------------------------

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE `subjects` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `subject_code` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




-- ------------------------------------------------------
-- Table structure for table `system_settings`
-- ------------------------------------------------------

DROP TABLE IF EXISTS `system_settings`;
CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `cover_img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ------------------------------------------------------
-- Table structure for table `users`
-- ------------------------------------------------------

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` int(1) NOT NULL DEFAULT 1,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
