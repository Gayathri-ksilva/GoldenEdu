-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 01:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goldenedu`
--

-- --------------------------------------------------------

--
-- Table structure for table `a`
--

CREATE TABLE `a` (
  `aid` int(11) NOT NULL,
  `qid` varchar(100) NOT NULL,
  `qeid` int(11) NOT NULL,
  `answer` varchar(10) NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `a`
--

INSERT INTO `a` (`aid`, `qid`, `qeid`, `answer`, `mark`) VALUES
(39, '3kcceL4vfFCpZyZVHGaE', 1, 'B', 2),
(40, '3kcceL4vfFCpZyZVHGaE', 2, 'C', 2),
(41, '3kcceL4vfFCpZyZVHGaE', 3, 'A', 2),
(42, '3kcceL4vfFCpZyZVHGaE', 4, 'D', 2),
(43, '3kcceL4vfFCpZyZVHGaE', 5, 'A', 2),
(44, 'axAqQMVWEfx68mRAsnWO', 1, 'A', 2),
(45, 'axAqQMVWEfx68mRAsnWO', 2, 'B', 2),
(46, 'axAqQMVWEfx68mRAsnWO', 3, 'C', 2),
(47, 'axAqQMVWEfx68mRAsnWO', 4, 'D', 2),
(48, 'axAqQMVWEfx68mRAsnWO', 5, 'B', 2),
(49, 'SXkk3Rf9LGDLEpovkrDg', 1, 'A', 5),
(50, 'SXkk3Rf9LGDLEpovkrDg', 2, 'B', 5),
(51, 'SXkk3Rf9LGDLEpovkrDg', 3, 'A', 5),
(52, 'SXkk3Rf9LGDLEpovkrDg', 4, 'C', 5),
(53, 'TzYxTBNQkEoAIislNT7r', 1, 'A', 4),
(54, 'TzYxTBNQkEoAIislNT7r', 2, 'B', 4),
(55, 'TzYxTBNQkEoAIislNT7r', 3, 'D', 4),
(56, 'TzYxTBNQkEoAIislNT7r', 4, 'B', 4),
(57, 'TzYxTBNQkEoAIislNT7r', 5, 'B', 4),
(58, 'RRacU4a8zqVLzSSbbGs5', 1, 'C', 5),
(59, 'RRacU4a8zqVLzSSbbGs5', 2, 'A', 5),
(60, 'RRacU4a8zqVLzSSbbGs5', 3, 'B', 5),
(61, 'RRacU4a8zqVLzSSbbGs5', 4, 'A', 5),
(62, 'dq0DrLSMB3B5FcKemFIE', 1, 'B', 5),
(63, 'dq0DrLSMB3B5FcKemFIE', 2, 'A', 5),
(64, 'dq0DrLSMB3B5FcKemFIE', 3, 'C', 5),
(65, 'dq0DrLSMB3B5FcKemFIE', 4, 'C', 5),
(66, 'dq0DrLSMB3B5FcKemFIE', 5, 'B', 5),
(67, 'BNlY8oqpmqnFv4Q9pGmT', 1, 'B', 5),
(68, 'BNlY8oqpmqnFv4Q9pGmT', 2, 'A', 5),
(69, 'BNlY8oqpmqnFv4Q9pGmT', 3, 'C', 5),
(70, 'BNlY8oqpmqnFv4Q9pGmT', 4, 'C', 5),
(71, 'MJiztEVYTZO9PNWJKGQv', 1, 'B', 4),
(72, 'MJiztEVYTZO9PNWJKGQv', 2, 'B', 4),
(73, 'MJiztEVYTZO9PNWJKGQv', 3, 'A', 4),
(74, 'MJiztEVYTZO9PNWJKGQv', 4, 'A', 4),
(75, 'MJiztEVYTZO9PNWJKGQv', 5, 'B', 4);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `id` int(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `lesson` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `pdf` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`id`, `subject`, `grade`, `lesson`, `date`, `pdf`) VALUES
(29, 'Mathematics', '6', 'Circle', '2023-09-15', '6 1EM Maths (1).pdf.pdf'),
(30, 'Mathematics', '6', 'Time', '2023-09-15', '6 4 EM Maths (1).pdf.pdf'),
(31, 'Mathematics', '7', 'Set', '2023-09-15', '2 - Sets (1).pdf.pdf'),
(32, 'Mathematics', '8', 'Ratio', '2023-09-15', '8-16 maths.TEM doc (1).pdf.pdf'),
(33, 'Mathematics', '9', 'set', '2023-09-15', '2 - Sets (1).pdf.pdf'),
(36, 'Mathematics', '10', 'Fraction', '2023-09-15', '3 first term  fraction (1).pdf.pdf'),
(37, '  ICT', '11', 'Algorithm', '2023-09-15', 'Grade 11 -Unit 01E.M (1).pdf.pdf'),
(38, '  ICT', '10', 'Logic Gate', '2023-09-15', 'Grade 10 -Unit 04 (1).pdf.pdf'),
(39, '  ICT', '10', 'Excel', '2023-09-15', 'Grade 10 -Unit 07 (1).pdf.pdf'),
(40, 'Mathematics', '11', 'Volume of Solids', '2023-09-15', 'Unit 5 (1).pdf.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `q`
--

CREATE TABLE `q` (
  `id` int(11) NOT NULL,
  `qid` varchar(100) NOT NULL,
  `qeid` int(11) NOT NULL,
  `question` varchar(300) NOT NULL,
  `optionA` varchar(100) NOT NULL,
  `optionB` varchar(100) NOT NULL,
  `optionC` varchar(100) NOT NULL,
  `optionD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `q`
--

INSERT INTO `q` (`id`, `qid`, `qeid`, `question`, `optionA`, `optionB`, `optionC`, `optionD`) VALUES
(45, '3kcceL4vfFCpZyZVHGaE', 1, 'Add: +53 and +115', '+68', '+168', '+262', '-120'),
(46, '3kcceL4vfFCpZyZVHGaE', 2, 'Add: -31 and -93', '-60', '+60', '-124', '+124'),
(47, '3kcceL4vfFCpZyZVHGaE', 3, ' Add: + 47 and -27', '+30', '-30', '+74', '-74'),
(48, '3kcceL4vfFCpZyZVHGaE', 4, 'Add: -66 and +24', '-90', '+90', '+42', '-42'),
(49, '3kcceL4vfFCpZyZVHGaE', 5, '+253 and – 349', '-96', '+96', '+602', '-602'),
(50, 'axAqQMVWEfx68mRAsnWO', 1, '5/8 + 2/8', '7/8', '7/16', '3/8', '3/16'),
(51, 'axAqQMVWEfx68mRAsnWO', 2, '8/9+1/3', '9/12', '11/9', '9/9', '10/12'),
(52, 'axAqQMVWEfx68mRAsnWO', 3, '7/11-2/11', '5/22', '9/22', '5/11', '9/11'),
(53, 'axAqQMVWEfx68mRAsnWO', 4, '7/12-1/4', '8/12', '5/12', '6/16', '1/3'),
(54, 'axAqQMVWEfx68mRAsnWO', 5, '1+1/7', '8/9', '8/7', '3/14', '2/7'),
(55, 'SXkk3Rf9LGDLEpovkrDg', 1, 'Convert 7/20 to per cent.', '35%', '60%', '7%', '15%'),
(56, 'SXkk3Rf9LGDLEpovkrDg', 2, 'Convert 7/50 to per cent.', '28%', '7%', '14%', '10%'),
(57, 'SXkk3Rf9LGDLEpovkrDg', 3, 'Convert 59/100 to per cent.', '59%', '100%', '29%', '41%'),
(58, 'SXkk3Rf9LGDLEpovkrDg', 4, 'Convert 9/10 to per cent.', '9%', '10%', '90%', '19%'),
(59, 'TzYxTBNQkEoAIislNT7r', 1, '2x = 8', '4', '6', '16', '2'),
(60, 'TzYxTBNQkEoAIislNT7r', 2, '4y = 9', '2', '9/4', '36', '5'),
(61, 'TzYxTBNQkEoAIislNT7r', 3, '3z = 7', '21', '4', '2', '7/3'),
(62, 'TzYxTBNQkEoAIislNT7r', 4, '2x + 4= 7', '1', '3/2', '3', '2/3'),
(63, 'TzYxTBNQkEoAIislNT7r', 5, '5x – 3x = 70', '70', '35', '20', '68'),
(64, 'RRacU4a8zqVLzSSbbGs5', 1, 'Find the median. 23, 6, 10, 4, 17, 1, 3', '10', '17', '6', '26'),
(65, 'RRacU4a8zqVLzSSbbGs5', 2, 'Find the median. 1, 2, 3, 4, 3, 2, 1', '2', '4', '3', '1'),
(66, 'RRacU4a8zqVLzSSbbGs5', 3, 'Find the median. 31, 38, 27, 28, 36, 25, 35, 40', '28', '33', '27', '31'),
(67, 'RRacU4a8zqVLzSSbbGs5', 4, 'Find the median of the first nine whole numbers.', '5', '4', '6', '8'),
(68, 'dq0DrLSMB3B5FcKemFIE', 1, '7.3 × 10', '730', '73', '0.73', '7.3'),
(69, 'dq0DrLSMB3B5FcKemFIE', 2, '41.7 × 10', '417', '4170', '41.7', '4.17'),
(70, 'dq0DrLSMB3B5FcKemFIE', 3, ' 11.51 × 10', '1.151', '1151', '115.1', '1515'),
(71, 'dq0DrLSMB3B5FcKemFIE', 4, '801.05 × 10', '80.105', '8010', '8010.5', '80105'),
(72, 'dq0DrLSMB3B5FcKemFIE', 5, '17.1 × 100 ', '171', '1710', '17100', '170'),
(73, 'BNlY8oqpmqnFv4Q9pGmT', 1, 'What does CPU stand for?', 'Computer Processing Unit', 'Central Processing Unit', 'Computer Processing User', 'Central Processing User'),
(74, 'BNlY8oqpmqnFv4Q9pGmT', 2, 'What is the full form of RAM?', 'Random Access Memory', 'Read Access Memory', 'Random Authorization Memory', 'Read Authorization Memory'),
(75, 'BNlY8oqpmqnFv4Q9pGmT', 3, 'Which device is used to input data into a computer?', ' Monitor', 'Printer', ' Keyboard', 'Speaker'),
(76, 'BNlY8oqpmqnFv4Q9pGmT', 4, 'Which of the following is a type of software?', 'Mouse', 'Keyboard', 'Operating System', 'Monitor'),
(77, 'MJiztEVYTZO9PNWJKGQv', 1, 'The step by step procedure for solving a problem…', 'programming', 'algorithm', 'planing', 'flowchart'),
(78, 'MJiztEVYTZO9PNWJKGQv', 2, ' ……language is not an object oriented pogramming lnguage…', ' visual basic', 'c', 'c++', 'java'),
(79, 'MJiztEVYTZO9PNWJKGQv', 3, ' Which of the following is a programming language?', 'Python', 'Photoshop', 'Microsoft Word', 'Adobe Illustrator'),
(80, 'MJiztEVYTZO9PNWJKGQv', 4, 'Which programming language is used for developing Android apps?', 'Java', 'C#', 'Python', 'Swift'),
(81, 'MJiztEVYTZO9PNWJKGQv', 5, 'Which of the following is not a valid variable name in most programming languages?', 'myVariable', '123Variable', '_myVariable', 'my_variable');

-- --------------------------------------------------------

--
-- Table structure for table `quizz`
--

CREATE TABLE `quizz` (
  `qid` varchar(100) NOT NULL,
  `qname` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `lesson` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quizz`
--

INSERT INTO `quizz` (`qid`, `qname`, `subject`, `grade`, `lesson`, `date`) VALUES
('3kcceL4vfFCpZyZVHGaE', 'Adding Integers', 'Mathematics', '6', 'Integers', '2023-09-15'),
('axAqQMVWEfx68mRAsnWO', 'Addition and Subtraction of Fractions', 'Mathematics', '7', 'Fractions', '2023-09-15'),
('BNlY8oqpmqnFv4Q9pGmT', 'computer fundamental', '     ICT', '10', 'lessson1', '2023-09-18'),
('dq0DrLSMB3B5FcKemFIE', 'Multiplying Decimals', 'Mathematics', '7', 'Decimals', '2023-09-15'),
('MJiztEVYTZO9PNWJKGQv', 'introduction to programming', '     ICT', '11', 'Algorithm', '2023-09-18'),
('RRacU4a8zqVLzSSbbGs5', 'Finding the Median of Raw Data', 'Mathematics', '10', 'Median', '2023-09-15'),
('SXkk3Rf9LGDLEpovkrDg', 'Fraction into Percentage', 'Mathematics', '8', 'Percentage', '2023-09-15'),
('TzYxTBNQkEoAIislNT7r', 'Linear Equation in One Variable', 'Mathematics', '9', 'Linear Equation', '2023-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `r_id` int(11) NOT NULL,
  `st_email` varchar(100) NOT NULL,
  `q_id` varchar(100) NOT NULL,
  `q_name` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`r_id`, `st_email`, `q_id`, `q_name`, `subject`, `score`) VALUES
(16, 'gayait2000@gmail.com', 'RRacU4a8zqVLzSSbbGs5', 'Finding the Median of Raw Data', 'Mathematics', 15),
(17, 'maleeperera792@gmail.com', 'dq0DrLSMB3B5FcKemFIE', 'Multiplying Decimals', 'Mathematics', 15),
(18, 'alaniit12345@gmail.com', 'RRacU4a8zqVLzSSbbGs5', 'Finding the Median of Raw Data', 'Mathematics', 15),
(19, 'alaniit5555@gmail.com', 'RRacU4a8zqVLzSSbbGs5', 'Finding the Median of Raw Data', 'Mathematics', 20),
(31, 'gayait2220@gmail.com', 'SXkk3Rf9LGDLEpovkrDg', 'Fraction into Percentage', 'Mathematics', 15),
(33, 'gayait2220@gmail.com', 'dq0DrLSMB3B5FcKemFIE', 'Multiplying Decimals', 'Mathematics', 25);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `st_id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `grade` int(10) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `resetToken` varchar(255) DEFAULT NULL,
  `tokenExpire` date DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_id`, `first_name`, `last_name`, `grade`, `phone`, `email`, `password`, `resetToken`, `tokenExpire`, `date`) VALUES
(5, 'gayathri ', 'kaushalya', 11, 711234567, 'hhuh55djftig@gmail.com', '12345678', NULL, NULL, '2023-06-29 16:16:11'),
(6, 'gayathri ', 'kaushalya', 11, 711234567, 'hhuh444djftig@gmail.com', '12345678', NULL, NULL, '2023-06-29 16:16:36'),
(8, 'alani', 'silva', 7, 711212522, 'gayait1555@gmail.com', 'cdd529adf71d90e961a347339500c56d', NULL, NULL, '2023-06-30 13:45:16'),
(10, 'alani', 'aroosha', 9, 714562138, 'alaniit1555@gmail.com', '067211aace17fef481ca7b0d0dd4b091', '33f226e6b5c95cd4e801947f6652ba79', '2023-07-02', '2023-06-30 13:50:29'),
(14, 'kaushalya', 'perera', 7, 712315436, 'kaushalyasilva779@gmail.com', '160011602eab39ce63ce8817aa3cc189', NULL, NULL, '2023-07-10 11:42:48'),
(15, 'oshan', 'niluminda', 7, 712456289, 'oshan@gmail.com', 'cef016519aef67a51a2bc2337d3f21a3', NULL, NULL, '2023-09-03 17:55:41'),
(18, 'Maheshika', 'perera', 7, 718920793, 'maleeperera792@gmail.com', 'f3ec4c6e0ef9cb5316b85529518fb156', NULL, NULL, '2023-09-15 16:50:10'),
(19, 'gayathri', 'kaushalya', 10, 711212522, 'gayait2000@gmail.com', '1605a1026c044ab584955ed7f7f7105c', NULL, NULL, '2023-09-15 20:53:58'),
(20, 'alani', 'aroosha', 10, 714562138, 'alaniit12345@gmail.com', '5c593f72fa5d742b3053e86a9373e7c9', NULL, NULL, '2023-09-15 20:55:39'),
(21, 'alani', 'alani', 10, 714562138, 'alaniit5555@gmail.com', '5c593f72fa5d742b3053e86a9373e7c9', NULL, NULL, '2023-09-15 20:57:31'),
(22, '      gayathri', 'perera', 7, 711212522, 'gayait2220@gmail.com', '1605a1026c044ab584955ed7f7f7105c', NULL, NULL, '2023-09-17 21:26:52'),
(23, 'gayathri', 'perera', 9, 711212522, 'gayait2456@gmail.com', '1605a1026c044ab584955ed7f7f7105c', NULL, NULL, '2023-09-17 22:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `subject`, `description`, `image`) VALUES
(12, '     ICT', 'Grade 6 mon [3.30pm - 5.30pm] \r\nGrade 7 mon [5.30pm - 7.30pm] \r\nGrade 8 tue [3.30pm - 5.30pm] \r\nGrade 9 tue [5.30pm - 7.30pm] \r\nGrade 10 fri [3.30pm - 5.30pm] \r\nGrade 11 fri [5.30pm - 7.30pm]', 'ict.jpg.jpg'),
(13, ' Mathematics', 'Grade 6 mon [5.30pm - 7.30pm] \r\nGrade 7 mon [3.30pm - 5.30pm] \r\nGrade 8 thu [3.30pm - 5.30pm] \r\nGrade 9 thu [5.30pm - 7.30pm] \r\nGrade 10 sat [3.30pm - 5.30pm] \r\nGrade 11 sat [5.30pm - 7.30pm]', 'maths.jpg.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a`
--
ALTER TABLE `a`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `q`
--
ALTER TABLE `q`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizz`
--
ALTER TABLE `quizz`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a`
--
ALTER TABLE `a`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `q`
--
ALTER TABLE `q`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `st_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
