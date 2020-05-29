-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 05:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--
CREATE DATABASE IF NOT EXISTS `company` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `company`;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `EMPLOYEE_ID` int(6) NOT NULL,
  `FIRST_NAME` varchar(20) DEFAULT NULL,
  `LAST_NAME` varchar(25) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `PHONE_NUMBER` varchar(20) DEFAULT NULL,
  `HIRE_DATE` date NOT NULL,
  `JOB_ID` varchar(10) NOT NULL,
  `SALARY` int(11) DEFAULT NULL,
  `COMMISION_PCT` int(11) DEFAULT NULL,
  `MANAGER_ID` int(6) DEFAULT NULL,
  `DEPARTMENT_ID` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `JOB_ID` varchar(10) NOT NULL,
  `JOB_TITLE` varchar(35) NOT NULL,
  `MIN_SALARY` int(11) DEFAULT NULL,
  `MAX_SALARY` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`JOB_ID`, `JOB_TITLE`, `MIN_SALARY`, `MAX_SALARY`) VALUES
('AD_PRES', 'President', 20000, 40000),
('AD_VP', 'Administration Vice President', 15000, 30000),
('AD_ASST', 'Administration Assistant', 3000, 6000),
('AC_MGR', 'Accounting Manager', 8200, 16000),
('AC_ACCOUNT', 'Accounting Manager', 4200, 9000),
('SA_MAN', 'Sales Manager', 10000, 20000),
('SA_REP', 'Sales Representative', 6000, 12000),
('ST_MAN', 'Stock Manager', 5500, 8500),
('ST_CLERK', 'Stock Clerk', 2000, 5000),
('IT_PROG', 'Programmer', 4000, 10000),
('MK_MAN', 'Marketing Manager', 9000, 15000),
('MK_REP', 'Marketing Representative', 4000, 9000);
--
-- Database: `cse311`
--
CREATE DATABASE IF NOT EXISTS `cse311` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cse311`;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `EMPLOYEE_ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(30) NOT NULL,
  `LAST_NAME` varchar(30) NOT NULL,
  `EMAIL` char(20) NOT NULL,
  `PHONE_NUMBER` varchar(12) NOT NULL,
  `HIRE_DATE` date NOT NULL,
  `JOB_ID` varchar(15) NOT NULL,
  `SALARY` int(11) NOT NULL,
  `COMMISSION_PCT` varchar(10) DEFAULT NULL,
  `MANAGER_ID` int(11) DEFAULT NULL,
  `DEPARTMENT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`EMPLOYEE_ID`, `FIRST_NAME`, `LAST_NAME`, `EMAIL`, `PHONE_NUMBER`, `HIRE_DATE`, `JOB_ID`, `SALARY`, `COMMISSION_PCT`, `MANAGER_ID`, `DEPARTMENT_ID`) VALUES
(100, 'Steven', 'King', 'SKING', '515.123.4567', '0000-00-00', 'AD_PRES', 24000, '', 0, 90),
(101, 'Neena', 'Kochhar', 'NKOCHHAR', '515.123.4568', '0000-00-00', 'AD_VP', 17000, '', 100, 90),
(102, 'Lex', 'De Haan', 'LDEHAAN', '515.123.4569', '0000-00-00', 'AD_VP', 17000, '', 100, 90),
(103, 'Alexandar', 'Hunold', 'AHUNOLD', '590.423.4567', '0000-00-00', 'IT_PROG', 9000, '', 102, 90),
(104, 'Bruce', 'Ernst', 'BERNST', '590.423.4568', '0000-00-00', 'IT_PROG', 6000, '', 103, 60),
(105, 'David', 'Austin', 'DAUSTIN', '590.423.4569', '0000-00-00', 'IT_PROG', 4800, '', 103, 60),
(106, 'Valli', 'Pataballa', 'VPATABAL', '590.423.4569', '0000-00-00', 'IT_PROG', 4800, '', 103, 60),
(107, 'Diana', 'Lorentz', 'DLORENTZ', '590.423.5567', '0000-00-00', 'IT_PROG', 4200, '', 103, 60),
(108, 'Nancy', 'Greenberg', 'NGREENBE', '515.124.4569', '0000-00-00', 'FI_MGR', 12008, '', 101, 100),
(109, 'Daniel', 'Faviet', 'DFAVIET', '515.124.4169', '0000-00-00', 'FI_ACCOUNT', 9000, '', 108, 100),
(110, 'John', 'Chen', 'JCHEN', '515.124.4269', '0000-00-00', 'FI_ACCOUNT', 8200, '', 108, 100),
(111, 'Ismael', 'Sciarra', 'ISCIARRA', '515.124.4369', '0000-00-00', 'FI_ACCOUNT', 7700, '', 108, 100),
(112, 'Jose Manuel', 'Urman', 'JMURMAN', '515.124.4469', '0000-00-00', 'FI_ACCOUNT', 7800, '', 108, 100),
(113, 'Luis', 'Popp', 'LPOPP', '515.124.4567', '0000-00-00', 'FI_ACCOUNT', 6900, '', 108, 100),
(114, 'Den', 'Raphaely', 'DRAPHAEL', '515.127.4561', '0000-00-00', 'PU_MAN', 11000, '', 100, 30),
(115, 'Alexander', 'Khoo', 'AKHOO', '515.127.4562', '0000-00-00', 'PU_CLERK', 3100, '', 114, 30),
(116, 'Shelli', 'Baida', 'SBAIDA', '515.127.4563', '0000-00-00', 'PU_CLERK', 2900, '', 114, 30),
(117, 'Sigal', 'Tobias', 'STOBIAS', '515.127.4564', '0000-00-00', 'PU_CLERK', 2800, '', 114, 30),
(118, 'Guy', 'Himuro', 'GHIMURO', '515.127.4565', '0000-00-00', 'PU_CLERK', 2600, '', 114, 30),
(119, 'Karen', 'Colmenares', 'SBAIDA', '515.127.4566', '0000-00-00', 'PU_CLERK', 2900, '', 114, 30),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '2003-06-17', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '2005-09-21', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '2001-01-13', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '2007-05-21', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '2005-06-25', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '2006-02-05', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '2002-08-17', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '0000-00-00', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '2005-09-28', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '2005-09-30', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '2006-03-07', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '2007-12-07', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '2002-12-07', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '2003-05-18', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '2005-12-24', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '2005-07-24', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '2006-11-15', '', 0, NULL, NULL, 0),
(0, '', '', '', '', '2007-08-10', '', 0, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `NAME` varchar(25) NOT NULL,
  `ID` int(11) NOT NULL,
  `COURSE` varchar(15) DEFAULT NULL,
  `SECTION` int(11) DEFAULT NULL,
  `CREDIT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`NAME`, `ID`, `COURSE`, `SECTION`, `CREDIT`) VALUES
('ASIF', 131, 'CSE311', NULL, 98),
('FAHIM', 181, 'ECO103', 7, 71),
('JOHN', 161, 'CSE323', 8, 61),
('MILTON', 171, 'CSE332', 10, 71),
('MITUL', 171, 'BEN101', 8, 65),
('SADMAN', 151, 'CSE371', 9, 87),
('SHAHRIAR', 181, 'CSE311', 8, 63),
('SHARIAR', 181, 'CSE231', 10, 71),
('SIDRAT', 181, 'CSE331', 7, 60);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`NAME`);
--
-- Database: `cse311_8`
--
CREATE DATABASE IF NOT EXISTS `cse311_8` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cse311_8`;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `DEPARTMENT_ID` int(4) NOT NULL,
  `DEPARTMENT_NAME` varchar(30) NOT NULL,
  `MANAGER_ID` int(6) DEFAULT NULL,
  `LOCATION_ID` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`DEPARTMENT_ID`, `DEPARTMENT_NAME`, `MANAGER_ID`, `LOCATION_ID`) VALUES
(10, 'Administration', 200, 1700),
(20, 'Marketing', 201, 1800),
(50, 'Shipping', 124, 1500),
(60, 'IT', 103, 1400),
(80, 'Sales', 149, 2500),
(90, 'Executive', 100, 1700),
(110, 'Accounting', 205, 1700),
(190, 'Contracting', NULL, 1700);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `Employee_Id` int(6) NOT NULL,
  `First_Name` varchar(20) DEFAULT NULL,
  `Last_Name` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Phone_Number` varchar(15) DEFAULT NULL,
  `Hire_Date` date NOT NULL,
  `Job_Id` varchar(10) NOT NULL,
  `Salary` int(8) DEFAULT NULL,
  `Commission_pct` varchar(4) DEFAULT NULL,
  `Manager_id` int(6) DEFAULT NULL,
  `Department_Id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`Employee_Id`, `First_Name`, `Last_Name`, `Email`, `Phone_Number`, `Hire_Date`, `Job_Id`, `Salary`, `Commission_pct`, `Manager_id`, `Department_Id`) VALUES
(100, 'Steven', 'King', 'SKING', '515.123.4567', '2006-06-17', 'AD_PRESS', 24000, NULL, NULL, 90),
(101, 'Neena', 'Kochar', 'NKOCHAR', '515.123.4568', '2008-09-21', 'AD_VP', 17000, NULL, 100, 90),
(102, 'Lex', 'De Haan', 'DEHAAN', '515.123.4569', '2009-01-13', 'AD_VP', 17000, NULL, 100, 90),
(103, 'Alexander', 'Hunold', 'AHUNOLD', '590.423.4567', '2008-01-03', 'IT_PROG', 9000, NULL, 102, 60),
(104, 'Bruce', 'Ernst', 'BERNST', '590.423.4568', '2009-05-21', 'IT_PROG', 6000, NULL, 103, 60),
(107, 'Diana', 'Lorentz', 'DLORENTZ', '590.423.5567', '2008-02-07', 'IT_PROG', 4200, NULL, 103, 60),
(124, 'Kevin', 'Mourgos', 'KMORGOS', '650.123.5234', '2012-11-16', 'ST_MAN', 5800, NULL, 100, 50),
(141, 'Treena', 'Rajs', 'RRAJS', '650.121.5234', '2004-10-17', 'ST_CLERK', 3500, NULL, 124, 50),
(142, 'Curtis', 'Davies', 'CDAVIES', '121.123.5234', '2007-01-29', 'ST_CLERK', 3100, NULL, 124, 50),
(143, 'Randall', 'Matos', 'RMATOS', '121.123.5234', '2008-03-15', 'ST_CLERK', 2600, NULL, 124, 50),
(144, 'Peter', 'Vargas', 'PVARGAS', '121.123.5234', '2008-07-09', 'ST_CLERK', 2500, NULL, 124, 50),
(149, 'Eleni', 'Zlotkey', 'EZLOTKEY', '44.1344.429018', '2014-01-29', 'SA_MAN', 10500, '0.2', 100, 80),
(174, 'Ellen', 'Abel', 'EABEL', '44.1644.429017', '2004-05-11', 'SA_REP', 11000, '0.3', 149, 80),
(176, 'Jnathon', 'Taylor', 'JTAILOR', '44.1644.429021', '2008-05-24', 'SA_MAN', 8600, '0.2', 149, 80),
(178, 'Kimberely', 'Grant', 'KGRANT', '44.1644.429023', '2009-05-24', 'SA_MAN', 7000, '0.15', 149, NULL),
(200, 'Jennifer', 'Whalem', 'JWHALEN', '515.123.4444', '2003-09-17', 'ADD_ASST', 4400, NULL, 101, 10),
(201, 'Michael', 'Hartstein', 'MHARSTEIN', '515.123.5555', '2008-02-17', 'MK_MAN', 13000, NULL, 100, 20),
(202, 'Pat', 'Fay', 'PFAY', '603.123.6666', '2010-08-17', 'MK_REP', 6000, NULL, 201, 20),
(205, 'Shelley', 'Higgins', 'SHIGGINS', '515.123.8050', '2007-07-06', 'AC_MGR', 12000, NULL, 101, 110),
(206, 'William', 'Gietz', 'WGIETZ', '515.123.8181', '2007-06-07', 'AC_ACCOUNT', 8300, NULL, 205, 110);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `Job_id` varchar(10) NOT NULL,
  `Job_title` varchar(35) NOT NULL,
  `Min_salary` int(6) DEFAULT NULL,
  `Max_salary` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`Job_id`, `Job_title`, `Min_salary`, `Max_salary`) VALUES
('AD_PRES', 'President', 20000, 40000),
('AD_VP', 'Administration Vice President', 15000, 30000),
('AD_ASST', 'Administration Assistant', 3000, 6000),
('AC_MGR', 'Accounting Manager', 8200, 16000),
('AC_ACCOUNT', 'Public Accountant', 4200, 9000),
('SA_MAN', 'Sales Manager', 10000, 20000),
('SA_REP', 'Sales Representative', 6000, 12000),
('ST_MAN', 'Stock Manager', 5500, 8500),
('ST_CLERK', 'Stock Clerk', 2000, 5000),
('IT_PROG', 'Programmer', 4000, 10000),
('MK_MAN', 'Marketing Manager', 9000, 15000),
('MK_REP', ',Marketing Representative', 4000, 9000);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `Location_id` int(4) NOT NULL,
  `Street_Address` varchar(40) DEFAULT NULL,
  `Postal_Code` varchar(12) DEFAULT NULL,
  `City` varchar(30) NOT NULL,
  `State_Province` varchar(25) DEFAULT NULL,
  `Country_ID` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`Location_id`, `Street_Address`, `Postal_Code`, `City`, `State_Province`, `Country_ID`) VALUES
(1400, '2014 Jabberwocky Rd', '26192', 'Southlake', 'Texas', 'US'),
(1500, '2011 Interiors Blvd', '99236', 'South San\r\nFrancisco', 'California', 'US'),
(1700, '2004 Charade Rd', '98199', 'Seattle', 'Washington', 'US'),
(1800, '460 Bloor St. W.', 'ON M5S 1X8', 'Toronto', 'Ontario', 'CA'),
(2500, 'Magdalen Centre- The Oxford Sc.\r\nPark', 'OX9 9ZB', 'OXford', 'Oxford', 'UK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`Employee_Id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`Location_id`);
--
-- Database: `cse3118`
--
CREATE DATABASE IF NOT EXISTS `cse3118` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cse3118`;
--
-- Database: `demo`
--
CREATE DATABASE IF NOT EXISTS `demo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `demo`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'mozez', '$2y$10$E2JB5GoDhZMk25lwljKg6exCObSJZoRdEeRHQ.ToXTyD4Y5Bz0/gS', '2020-04-10 15:41:40'),
(2, 'BeAsT', '$2y$10$g7LeFdG8LRYOw188DK2.6unL0xRokwf0eDb.axrgIxXb3lVuCLwPq', '2020-04-10 17:36:30');

--
-- Indexes for dumped tables
--

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Database: `group1`
--
CREATE DATABASE IF NOT EXISTS `group1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `group1`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `User_id` varchar(50) NOT NULL,
  `Pass` varchar(12) NOT NULL,
  `Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`User_id`, `Pass`, `Name`) VALUES
('Mitul10', 'mitul123', 'Mitul Shalehin'),
('Tonmoy012', 'tonmoy123', 'Tawfiq Tonmoy');

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `PRODUCT_ID` varchar(25) NOT NULL,
  `COMPANY_NAME` varchar(25) NOT NULL,
  `PRODUCT_NAME` varchar(25) NOT NULL,
  `QUANTITY` int(100) NOT NULL,
  `AVAILABLE` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`PRODUCT_ID`, `COMPANY_NAME`, `PRODUCT_NAME`, `QUANTITY`, `AVAILABLE`) VALUES
('cor102', 'corsair', 'corsair keyboard', 100, 100),
('raz101', 'razer', 'razer keyboard', 100, 50),
('raz102', 'razer', 'razer keyboard', 50, 10),
('ra103', 'razer', 'razer keyboard', 50, 23),
('ape101', 'apex', 'apex keyboard', 50, 15),
('xbo101', 'microsoft', 'x-box controller', 50, 13),
('xbo102', 'microsoft', 'x-bos s ', 50, 45),
('xbo103', 'microsoft', 's box x', 50, 14),
('ps101', 'sony', 'ps4 dual shock', 50, 20),
('ps102', 'sony', 'ps4 pro', 50, 10),
('ps104', 'sony', 'ps4 slim', 50, 20),
('cor203', 'corsire', 'corsair mouse', 50, 50),
('log201', 'logitech ', 'logitech mouse', 50, 16),
('log301', 'logitech', 'logitech  mouse', 50, 12),
('raz301', 'razer ', 'razer mouse', 50, 14),
('raz401', 'razer ', 'razer mouse ', 50, 17),
('razer500', 'razer', 'razer mouse', 100, 100),
('dell101', 'dell', 'dell monitor', 100, 50),
('dell201', 'dell', 'dell monitor', 50, 10),
('alien101', 'alienware', 'alienware monitor', 50, 23),
('hp101', 'hp', 'hp monitor', 50, 15),
('hp102', 'hp', 'hp monitor', 50, 13),
('hp103', 'hp', 'hp monitor ', 50, 45),
('sam101', 'samsung', 'samsung monitor', 50, 15),
('sam102', 'samsung', 'samsung monitor', 50, 13);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `COMPANYY_ID` varchar(25) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `ADDRESS` varchar(25) NOT NULL,
  `TYPES_OF_PRODUCT` varchar(25) NOT NULL,
  `CONTACT_NUM` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`COMPANYY_ID`, `NAME`, `ADDRESS`, `TYPES_OF_PRODUCT`, `CONTACT_NUM`) VALUES
('microoft101', 'microsoft', 'gulistan', 'x-box', 132344),
('sony101', 'sony', 'gulistan-2', 'play-station', 123456),
('logitech101', 'logitech', 'gulistan-3', 'mouse', 1223456),
('cosair103', 'cosair', 'bashundhora', 'mouse', 12344566),
('razer103', 'razer', 'badda', 'mouse', 12356789),
('dell101', 'dell', 'mirpur', 'monitor', 141156789),
('hp101', 'dell', 'hp', 'monitor', 581153789),
('samsung101', 'samsung', 'mirpur', 'monitor', 1011534589),
('cosair101', 'cosair', 'chittagong', 'keyboard', 1156710),
('apex101', 'apex', 'kumilla', 'keyboard', 14578710),
('razer101', 'razer', 'barma', 'keyboard', 11235610),
('windows101', 'windows', 'sajek', 'games', 1156710),
('microsoft101', 'microsoft', 'sajek2', 'games', 1815345),
('sony101101', 'sony', 'sajek3', 'games', 1815245);

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `NAME` varchar(25) NOT NULL,
  `PHONE` int(25) NOT NULL,
  `ADDRESS` varchar(25) NOT NULL,
  `USERNAME` varchar(25) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `PAYMENT_INFO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `full_name`, `email`, `created_at`) VALUES
(3, 'tonmoy', '$2y$10$4Ho/SerO7ocjGnhdzYl2c.2lOsmOdazMR4Ti8BUGjh3ZtH5L5v21C', 'Moaz Ahmed', 'Tawfiq012@outlook.com', '2020-04-10 19:29:25');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `PRODUCT_ID` varchar(25) NOT NULL,
  `PRODUCT_NAME` varchar(23) NOT NULL,
  `COMPANY` varchar(23) NOT NULL,
  `PRICE` int(25) NOT NULL,
  `DESCRIPTION` varchar(25) NOT NULL,
  `REVIEW` varchar(20) NOT NULL,
  `RATING` varchar(20) NOT NULL,
  `AVAILABILITY` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`PRODUCT_ID`, `PRODUCT_NAME`, `COMPANY`, `PRICE`, `DESCRIPTION`, `REVIEW`, `RATING`, `AVAILABILITY`) VALUES
('cor102', 'corsair keyboard ', 'corsair ', 14000, 'rubber grip', 'valo ase', '4/5', 'yes'),
('raz101', 'razer keyboard', 'razer ', 4900, 'halaka', 'valo', '5/5', 'yes'),
('raz102', 'razer keyboard', 'razer', 11800, 'wireless', 'best ', '5/5', 'yes'),
('ra103', 'razer keyboard', 'razer ', 7900, 'good for gaming', 'kharap na ', '4/5', 'yes'),
('ape101', 'apex keyboard', 'apex', 19900, 'khub dami', 'beshi valo j', '50/5', 'yes'),
('xbo101', 'x-box controller', 'microsoft', 5015, 'nice', 'valo', '3/5', 'yes'),
('xbo102', 'x-box one s', 'microsoft', 25415, 'jail break', 'valo onek', '4/5', 'yes'),
('xbo103', 'xbox one x ', 'microsoft', 25415, 'lite weight', 'valo to', '5/5', 'yes'),
('ps101', 'ps4 dual shok', 'sony', 45015, 'black clr', 'good', '4/5', 'yes'),
('ps102', 'ps4 pro', 'sony', 33915, 'can play all game', 'valo', '4/5', 'yes'),
('ps104', 'ps4 slim', 'sony', 25415, 'onek slim', 'slim bole dekhte sun', '5/5', 'yes'),
('cor203', 'corsair mouse ', 'corsair', 4930, 'corsair ironclaw', 'valo', '4/5', 'yes'),
('log201', 'logitech mouse', 'logitech', 3315, 'logitech g203', 'valo', '5/5', 'yes'),
('log301', 'logitech mouse', 'logitech', 12655, 'logitech g502', 'khub valo', '4/5', 'yes'),
('raz301', 'razer mouse', 'razer', 5865, 'razer deathadder', 'beshi valo', '4/5', 'yes'),
('raz401', 'razer mouse', 'razer', 8415, 'razer naga', 'valo', '5/5', 'yes'),
('razer500', 'razer mouse', 'razer', 12655, 'razer viper', 'dam procchur', '5/5', 'yes'),
('dell101', 'dell monitor ', 'dell', 13090, 'dell 20 inch monitor', 'valo', '4/5', 'yes'),
('dell201', 'dell monitor', 'dell', 16915, 'dell 22 inch monitor', 'valo', '5/5', 'yes'),
('alien101', 'alienware monitor', 'alienware', 258315, 'alienware 55 inch', 'khub valo', '4/5', 'yes'),
('hp101', 'hp monitor', 'hp', 15215, 'hp elite display ', 'beshi valo', '4/5', 'yes'),
('hp102', 'hp monitor', 'hp', 12665, 'hp p244', 'valo', '5/5', 'yes'),
('hp103', 'hp monitor', 'hp', 45851, 'hp z27', 'dam procchur', '5/5', 'yes'),
('sam101', 'samsung monitor', 'samsung', 25415, ' gaming monitor ', 'beshi valo', '4/5', 'yes'),
('sam102', 'samsung monitor', 'samsung', 23715, 'gaming monitor', 'valo', '5/5', 'yes'),
('sam103', 'samsung monitor', 'samsung', 42415, 'gaming monitor', 'dam procchur', '5/5', 'yes'),
('hp101', 'hp monitor', 'ho', 15215, 'ho elite display ', 'beshi valo', '4/5', 'yes'),
('xbo101', 'battle field 5', 'microsoft', 3500, ' ', 'valo', '4/5', 'yes'),
('xbo102', 'forza hoizon', 'microsoft', 4200, 'xbox game ', 'beshi valo', '5/5', 'yes'),
('xbo103', 'gears of war', 'microsoft', 3500, 'xbox game ', ' valo', '5/5', 'yes'),
('xbo104', 'hitman 2', 'microsoft', 3800, 'xbox game ', ' valo', '4/5', 'yes'),
('xbo105', 'red dead 2', 'microsoft', 4000, 'xbox game ', ' valo ase', '5/5', 'yes'),
('xbo106', 'shadow of tomb', 'microsoft', 3500, 'xbox game ', 'beshi valo', '5/5', 'yes'),
('ps101', 'call of duty', 'sony', 1650, 'ps4 game', 'valo', '4/5', 'yes'),
('ps102', 'doom etarnal', 'sony', 5015, 'ps4 game ', 'beshi valo', '5/5', 'yes'),
('ps103', 'draon ball z ', 'sony', 4250, 'ps4 game ', ' valo', '5/5', 'yes'),
('ps104', 'god of war ', 'sony', 1190, 'ps4 game ', ' valo', '4/5', 'yes'),
('ps105', 'nioh 2 ', 'sony', 5270, 'ps4 game ', ' valo ase', '5/5', 'yes'),
('ps106', 'paper beast', 'sony', 2465, 'ps4 game ', 'beshi valo', '5/5', 'yes'),
('pc101', 'doom etarnals', 'windows', 5015, 'windows game', 'valo', '4/5', 'yes'),
('pc102', 'ghost recon', 'widows', 1530, 'windows game ', 'beshi valo', '5/5', 'yes'),
('pc103', 'gta5 ', 'windows', 2465, 'windows game ', ' valo', '5/5', 'yes'),
('pc104', 'read dead 2', 'windows', 3740, 'windows game ', ' valo', '4/5', 'yes'),
('pc105', 'resident evil 2', 'windows', 1615, 'windows game ', ' valo ase', '5/5', 'yes'),
('pc106', 'witcher 3', 'windows', 1190, 'windows game ', 'beshi valo', '5/5', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `seller_login`
--

CREATE TABLE `seller_login` (
  `USER_NAME` varchar(25) NOT NULL,
  `PASSWORD` varchar(25) NOT NULL,
  `FULL_NAME` varchar(25) NOT NULL,
  `EMAIL` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shippng_cart`
--

CREATE TABLE `shippng_cart` (
  `USER_ID` varchar(25) NOT NULL,
  `PRODUCT_ID` varchar(25) NOT NULL,
  `QUANTITY` int(25) NOT NULL,
  `PRICE` int(25) NOT NULL,
  `COUPON` tinyint(1) NOT NULL,
  `SHIPPING CHARGE` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"group1\",\"table\":\"login\"},{\"db\":\"demo\",\"table\":\"users\"},{\"db\":\"group1\",\"table\":\"users\"},{\"db\":\"group1\",\"table\":\"admin\"},{\"db\":\"group1\",\"table\":\"buyer_login\"},{\"db\":\"group1\",\"table\":\"seller_login\"},{\"db\":\"group1\",\"table\":\"products\"},{\"db\":\"group1\",\"table\":\"customer_info\"},{\"db\":\"group1\",\"table\":\"shippng_cart\"},{\"db\":\"group1\",\"table\":\"company\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'cse311', 'employees', '{\"sorted_col\":\"`employees`.`EMPLOYEE_ID`  DESC\"}', '2020-02-16 22:17:33');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2020-04-10 15:16:56', '{\"Console\\/Mode\":\"show\",\"Console\\/Height\":13.971000000000004}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
