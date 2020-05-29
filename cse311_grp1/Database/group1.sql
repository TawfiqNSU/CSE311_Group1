-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 05:00 PM
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
-- Database: `group1`
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
