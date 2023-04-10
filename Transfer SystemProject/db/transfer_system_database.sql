-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 09:41 AM
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
-- Database: `transfer system database`
--

-- --------------------------------------------------------

--
-- Table structure for table `cod`
--

CREATE TABLE `cod` (
  `Cod_Id` varchar(30) NOT NULL,
  `Employee_No` int(11) NOT NULL,
  `fName` int(11) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone_No` varchar(30) NOT NULL,
  `Department_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Department_ID` varchar(30) NOT NULL,
  `Courses` varchar(50) NOT NULL,
  `Cod` int(40) NOT NULL,
  `Faculty_Id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Faculty_Id` varchar(30) NOT NULL,
  `faculty_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_ID` varchar(30) NOT NULL,
  `FName` varchar(40) NOT NULL,
  `LName` varchar(30) NOT NULL,
  `RegNo` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `Year_Of_Study` varchar(30) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Department_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblstuddetails`
--

CREATE TABLE `tblstuddetails` (
  `Details_Id` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Reg_No` varchar(30) NOT NULL,
  `Phone_No` varchar(30) NOT NULL,
  `Current_Program` varchar(50) NOT NULL,
  `Program_Applied_For` varchar(50) NOT NULL,
  `KCSE_Index_No` varchar(30) NOT NULL,
  `KCPE_Index_No/Cert_No` varchar(30) NOT NULL,
  `Uploads` varchar(50) NOT NULL,
  `Mat` varchar(15) NOT NULL,
  `Eng` varchar(15) NOT NULL,
  `Kis` varchar(15) NOT NULL,
  `Chem` varchar(15) NOT NULL,
  `Bio` varchar(15) NOT NULL,
  `Phy` varchar(15) NOT NULL,
  `Geog` varchar(15) NOT NULL,
  `CRE` varchar(15) NOT NULL,
  `Histrory` varchar(15) NOT NULL,
  `Agric` varchar(15) NOT NULL,
  `Bus` varchar(15) NOT NULL,
  `French` varchar(15) NOT NULL,
  `Music` varchar(15) NOT NULL,
  `Home_Sci` varchar(15) NOT NULL,
  `Computer_Studies` varchar(15) NOT NULL,
  `Student_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$qWaxYULHbzrkkzz7NYnwTOGihGGvcup.o/6cYdw7VCTobfEWGpYYC', '2022-11-09 18:17:05'),
(2, 'admin1', '$2y$10$lYayBYzffy.VpnubOeC5F.xkvOfsU8sfEv4ywsR8AcNqkw0G8kO8K', '2022-11-09 18:23:21'),
(3, 'Ouma', '$2y$10$S2N74gYJbUslSTz0.vxG2ebIzhLjV9gHRAJlnyw/sDA3zPGZjEyJK', '2022-11-09 18:37:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cod`
--
ALTER TABLE `cod`
  ADD PRIMARY KEY (`Cod_Id`),
  ADD KEY `Department_ID` (`Department_ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD KEY `Faculty_Id` (`Faculty_Id`),
  ADD KEY `Department_ID` (`Department_ID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`Faculty_Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_ID`),
  ADD KEY `Department_ID` (`Department_ID`);

--
-- Indexes for table `tblstuddetails`
--
ALTER TABLE `tblstuddetails`
  ADD PRIMARY KEY (`Details_Id`),
  ADD KEY `Student_ID` (`Student_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cod`
--
ALTER TABLE `cod`
  ADD CONSTRAINT `cod_ibfk_1` FOREIGN KEY (`Department_ID`) REFERENCES `department` (`Department_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`Faculty_Id`) REFERENCES `faculty` (`Faculty_Id`) ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`Department_ID`) REFERENCES `department` (`Department_ID`) ON UPDATE CASCADE;

--
-- Constraints for table `tblstuddetails`
--
ALTER TABLE `tblstuddetails`
  ADD CONSTRAINT `tblstuddetails_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `student` (`Student_ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
