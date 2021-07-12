-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 12:16 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lib`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `b_id` varchar(255) NOT NULL,
  `booksname` varchar(50) NOT NULL,
  `Authorname` varchar(50) NOT NULL,
  `copies` varchar(20) NOT NULL,
  `avl_copy` int(100) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `path` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`b_id`, `booksname`, `authorname`, `copies`, `avl_copy`, `dept`, `file_name`, `path`) VALUES
('CS001', 'learning Java', 'Suleiman ibraheem', '12', 10, 'csc', 'CS001.pdf', 'ebooks/CS001.pdf'),
('CS002', 'Everything PHP', 'Mark Hemming', '12', 12, 'csc', 'CS002.pdf', 'ebooks/CS002.pdf'),
('CS003', 'MYSQL & PHP', 'Bashir Amhad', '12', 12, 'csc', 'CS003.pdf', 'ebooks/CS003.pdf'),
('CS004', 'learning Python', 'lionel Andres Messi', '12', 12, 'csc', 'CS004.pdf', 'ebooks/CS004.pdf'),
('CS005', 'HTML3 book', 'Neymar Junior', '12', 12, 'csc', 'CS005.pdf', 'ebooks/CS005.pdf'),
('CS006', 'Css book', 'Stephen Hawking', '12', 12, 'csc', 'CS006.pdf', 'ebooks/CS006.pdf'),
('CS008', 'Andriod Development', 'Elon Musk', '10', 10, 'csc', 'CS008.pdf', 'ebooks/CS008.pdf'),
('CS009', 'Networking', 'Anders Helrelg', '12', 12, 'csc', 'CS009.pdf', 'ebooks/CS009.pdf'),
('CS010', 'Javascript Fundamentals ', 'Gultberb Yubren', '10', 10, 'cse', 'CS010.pdf', 'ebooks/CS010.pdf'),
('CS011', 'Frameworks ', 'Mark zugerberg', '1', 1, 'csc', 'CS011.pdf', 'ebooks/CS011.pdf'),
('CS012', 'Git and github', 'Bill gates', '1', 1, 'csc', 'CS012.pdf', 'ebooks/CS012.pdf'),
('CS013', 'Everything Swift', 'Steve Jobs', '12', 12, 'csc', 'CS013.pdf', 'ebooks/CS013.pdf'),
('CSE001', 'C++ Programming', 'Bjarne Johnson', '12', 12, 'cse', 'CSE001.pdf', 'ebooks/CSE001.pdf'),
('CSE002', 'C# for Beginners', 'Dani ', '12', 12, 'cse', 'CSE002.pdf', 'ebooks/CSE002.pdf'),
('CCS001', 'Unity and C#', 'Daveson Crowson', '12', 12, 'ccs', 'CCS001.pdf', 'ebooks/CCS001.pdf'),
('CSE003', 'React Native', 'Ragner LOthbrok', '10', 10, 'cse', 'CSE055.pdf', 'ebooks/CSE003.pdf'),
('CCS002', 'Data Science and Python', 'Memphis', '10', 10, 'ccs', 'CCS002.pdf', 'ebooks/CCS002.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `student_book`
--

CREATE TABLE `student_book` (
  `emailid` varchar(200) NOT NULL,
  `book_1_id` varchar(100) NOT NULL,
  `book_1` varchar(100) NOT NULL,
  `recive_date_1` varchar(100) NOT NULL,
  `submisson_date_1` varchar(100) NOT NULL,
  `book_2_id` varchar(100) DEFAULT NULL,
  `book_2` varchar(100) DEFAULT NULL,
  `recive_date_2` varchar(100) DEFAULT NULL,
  `submisson_date_2` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_book`
--

INSERT INTO `student_book` (`emailid`, `book_1_id`, `book_1`, `recive_date_1`, `submisson_date_1`, `book_2_id`, `book_2`, `recive_date_2`, `submisson_date_2`) VALUES
('muktar@gmail.com', 'CS001', 'learning Java', '13-07-2021', '28-07-2021', 'CCS002', 'Data Science and Python', '13-07-2021', '28-07-2021'),
('ameena@gmail.com', 'CS001', 'learning Java', '13-07-2021', '28-07-2021', 'CSE003', 'React Native', '13-07-2021', '28-07-2021');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(10) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'student',
  `gender` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `year` varchar(20) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `regno`, `type`, `gender`, `name`, `dept`, `year`, `emailid`, `password`) VALUES
(1, '001', 'admin', 'm', 'admin', 'blank', 'blank', 'admin001', 'admin123'),
(2, '11100116031', 'student', 'm', 'Abdul Muhammad', 'cse', '3rd_year', 'abdul@gmail.com', '123'),
(3, '11100116032', 'student', 'm', 'Mustapha shehu', 'csc', '1st_year', 'musty@gmail.com', '123'),
(4, '11100116028', 'student', 'm', 'Kabir Kabir dalha', 'ccs', '3rd_year', 'kabir@gmail.com', '123'),
(5, '11100116001', 'student', 'm', 'Umar Muktar Ghali', 'csc', '2nd_year', 'muktar@gmail.com', '123'),
(6, '11100116045', 'student', 'f', 'Fatima Ahmad isah', 'csc', '4th_year', 'fatima@gmail.com', '123'),
(7, '11100116066', 'student', 'f', 'Ameena Alwan Hassan', 'cse', '1st_year', 'ameena@gmail.com', '123'),
(8, '11100116052', 'student', 'f', 'Rufaidah baffa', 'ccs', '4th_year', 'ruffy@gmail.com', '123'),
(9, '11100116033', 'student', 'm', 'Isa Mashkur Abubakar', 'ccs', '2nd_year', 'mash@gmail.com', '123'),
(10, '11100116039', 'student', 'f', 'Yusraa Auwal', 'cse', '3rd_year', 'yusra@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`b_id`),
  ADD UNIQUE KEY `b_id` (`b_id`);

--
-- Indexes for table `student_book`
--
ALTER TABLE `student_book`
  ADD PRIMARY KEY (`emailid`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `regno` (`regno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
