-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 07:19 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshare_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookdetails`
--

CREATE TABLE `tbl_bookdetails` (
  `id` int(11) NOT NULL,
  `bookname` text NOT NULL,
  `author` text NOT NULL,
  `bookcondition` text NOT NULL,
  `publication` text NOT NULL,
  `department` text NOT NULL,
  `sem` int(2) NOT NULL,
  `description` text NOT NULL,
  `mrp` double NOT NULL,
  `bookimg` text NOT NULL,
  `postadder` text NOT NULL,
  `clg` text NOT NULL,
  `addon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_bookdetails`
--

INSERT INTO `tbl_bookdetails` (`id`, `bookname`, `author`, `bookcondition`, `publication`, `department`, `sem`, `description`, `mrp`, `bookimg`, `postadder`, `clg`, `addon`) VALUES
(1, 'Python', 'Anil Kushwaha', 'Rearly Used', 'Technical Publication', 'IT', 6, 'rearly used by book', 280, 'paython.jpg', 'jd@gmail.com', 'LD', '27-Feb-2020'),
(2, 'DBMS', 'Bhavesh Pandya', 'New', 'Vikas Publication', 'CE', 3, 'mostly used this book', 400, 'DBMS.jpg', 'jd@gmail.com', 'GEC,Gandhinagar.', '27-Feb-2020'),
(3, 'os', 'abraham silberschatz', 'Rearly Used', 'ninth edition', 'IT', 4, 'rerly used book', 350, 'OS.jpg', 'jd@gmail.com', 'GEC,Palanpur.', '27-Feb-2020'),
(4, 'oop', 'j.b.patel', 'Old', 'atul publiction', 'IT', 4, 'mostely used for book', 261, 'oop.jpg', 'jd@gmail.com', 'VGEC', '27-Feb-2020'),
(5, 'data structure', 'alfred v. aho', 'New', 'person', 'IT', 3, 'mostly usedfull this book', 450, 'ds book.jpg', 'darsahntnk@gmail.com', 'LD', '27-Feb-2020');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chat`
--

CREATE TABLE `tbl_chat` (
  `id` int(11) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `msg` text NOT NULL,
  `time` text NOT NULL,
  `chatid` int(11) NOT NULL,
  `seen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_chat`
--

INSERT INTO `tbl_chat` (`id`, `sender`, `receiver`, `msg`, `time`, `chatid`, `seen`) VALUES
(3, 'darsahntnk@gmail.com', 'jd@gmail.com', 'Hii', '09:31 am', 1, 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chatlist`
--

CREATE TABLE `tbl_chatlist` (
  `id` int(11) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `img` text NOT NULL,
  `sname` text NOT NULL,
  `chatid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_chatlist`
--

INSERT INTO `tbl_chatlist` (`id`, `sender`, `receiver`, `img`, `sname`, `chatid`) VALUES
(1, 'jd@gmail.com', 'darsahntnk@gmail.com', '7.jpg', 'Jaydeep Patel', 1),
(2, 'darsahntnk@gmail.com', 'jd@gmail.com', '20190128125613_IMG_1692-01 - Copy.jpeg', 'Darshan Tank', 1),
(3, 'jd@gmail.com', 'darshntnk@gmail.com', '7.jpg', 'Jaydeep Patel', 2),
(4, 'darshntnk@gmail.com', 'jd@gmail.com', '20190128125613_IMG_1692-01 - Copy.jpeg', 'Darshan Tank', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `cname` text NOT NULL,
  `cbname` text NOT NULL,
  `cmessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `cname`, `cbname`, `cmessage`) VALUES
(1, 'Darshan Tank', 'Python', 'Nice book,good condition.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_deal`
--

CREATE TABLE `tbl_deal` (
  `id` int(11) NOT NULL,
  `book` text NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `returnbook` text NOT NULL,
  `rdate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_deal`
--

INSERT INTO `tbl_deal` (`id`, `book`, `sender`, `receiver`, `price`, `description`, `img`, `returnbook`, `rdate`) VALUES
(1, 'Python', 'jd@gmail.com', 'jd@gmail.com', 280, 'rearly used by book', 'paython.jpg', 'No', '-'),
(2, 'DBMS', 'jd@gmail.com', 'jd@gmail.com', 400, 'mostly used this book', 'DBMS.jpg', 'Yes', '2020-11-05'),
(3, 'os', 'jd@gmail.com', 'jd@gmail.com', 350, 'rerly used book', 'OS.jpg', 'Yes', '2020-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `bdate` text NOT NULL,
  `gender` text NOT NULL,
  `email` text NOT NULL,
  `userrole` text NOT NULL,
  `password` text NOT NULL,
  `img` text NOT NULL,
  `clg` text NOT NULL,
  `status` text NOT NULL,
  `phn` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `fname`, `lname`, `bdate`, `gender`, `email`, `userrole`, `password`, `img`, `clg`, `status`, `phn`) VALUES
(1, 'Darshan', 'Tank', '2000-02-09', 'Male', 'darshntnk@gmail.com', 'Senior', '12345678', '20190128125613_IMG_1692-01 - Copy.jpeg', 'VGEC', 'Online', 8511221788),
(2, 'Darshan', 'Tank', '2000-02-02', 'Male', 'darsahntnk@gmail.com', 'Junior', '12345678', '20190128125613_IMG_1692-01 - Copy.jpeg', 'VGEC', 'Online', 8511221788),
(3, 'Jaydeep', 'Patel', '2000-02-02', 'Male', 'jd@gmail.com', 'Senior', '12345678', '7.jpg', 'GEC,Gandhinagar.', 'Online', 8544554422);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stationarydetails`
--

CREATE TABLE `tbl_stationarydetails` (
  `id` int(11) NOT NULL,
  `stnname` text NOT NULL,
  `stncondition` text NOT NULL,
  `stnprice` text NOT NULL,
  `stnadder` text NOT NULL,
  `stnimg` text NOT NULL,
  `stndescription` text NOT NULL,
  `stnclg` text NOT NULL,
  `stnaddon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_stationarydetails`
--

INSERT INTO `tbl_stationarydetails` (`id`, `stnname`, `stncondition`, `stnprice`, `stnadder`, `stnimg`, `stndescription`, `stnclg`, `stnaddon`) VALUES
(1, 'Sheet container', 'Rearly Used', '100', 'darshntnk@gmail.com', 'sheet-container-hug-me-original-imaewyh5kxqk6uev.jpeg', 'Sheet container,rarely used.', 'VGEC ', '27-Feb-2020'),
(2, 'Sheet container', 'New', '50', 'jd@gmail.com', 'sheet-container-hug-me-original-imaewyh5kxqk6uev.jpeg', 'sheet container', 'VGEC ', '27-Feb-2020'),
(3, 'note books', 'New', '30', 'jd@gmail.com', 'note-book.jpg', 'note books', 'LD ', '27-Feb-2020'),
(4, 'pen', 'New', '10', 'jd@gmail.com', 'Pen-Camera.jpg', 'pen', 'GEC,Gandhinagar. ', '27-Feb-2020'),
(5, 'sharpner', 'New', '5', 'darsahntnk@gmail.com', 'green-color-sharpener.jpg', 'sharpner', 'GEC,Palanpur. ', '27-Feb-2020'),
(6, 'eraser', 'Rearly Used', '10', 'darsahntnk@gmail.com', 'resize.jpg', 'eraser', 'LD ', '27-Feb-2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bookdetails`
--
ALTER TABLE `tbl_bookdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_chatlist`
--
ALTER TABLE `tbl_chatlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_deal`
--
ALTER TABLE `tbl_deal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_stationarydetails`
--
ALTER TABLE `tbl_stationarydetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bookdetails`
--
ALTER TABLE `tbl_bookdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_chatlist`
--
ALTER TABLE `tbl_chatlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_deal`
--
ALTER TABLE `tbl_deal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_stationarydetails`
--
ALTER TABLE `tbl_stationarydetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
