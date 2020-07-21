-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2020 at 08:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `BloodID` int(5) NOT NULL,
  `DonorID` int(5) NOT NULL,
  `BloodType` enum('A+','A-','B+','B-','O+','O-','AB+','AB-') NOT NULL,
  `DateIn` date NOT NULL,
  `ExpiryDate` date NOT NULL,
  `DateOut` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`BloodID`, `DonorID`, `BloodType`, `DateIn`, `ExpiryDate`, `DateOut`) VALUES
(1, 28, 'A+', '2020-04-01', '2020-05-13', '2020-04-03'),
(2, 9, 'AB+', '2020-04-01', '2020-05-13', '2020-04-04'),
(3, 17, 'O-', '2020-04-01', '2020-05-13', '2020-04-03'),
(4, 20, 'O-', '2020-04-01', '2020-05-13', '2020-04-04'),
(5, 1, 'B+', '2020-04-02', '2020-05-14', '2020-04-08'),
(6, 2, 'A+', '2020-04-02', '2020-05-14', '2020-04-03'),
(7, 3, 'O-', '2020-04-01', '2020-05-12', '2020-04-03'),
(8, 12, 'A+', '2020-04-01', '2020-05-13', '2020-04-03'),
(9, 10, 'B-', '2020-04-02', '2020-05-14', '2020-04-03'),
(10, 7, 'A-', '2020-04-02', '2020-05-14', '2020-04-04'),
(11, 13, 'A+', '2020-04-06', '2020-05-18', '2020-04-08'),
(12, 4, 'O+', '2020-04-02', '2020-05-14', '2020-04-03'),
(13, 0, 'A+', '2020-04-06', '2020-05-18', '2020-04-09'),
(14, 18, 'AB-', '2020-04-12', '2020-05-25', '2020-04-15'),
(15, 19, 'O+', '2020-04-14', '2020-04-30', '2020-04-17'),
(16, 5, 'O-', '2020-04-03', '2020-05-15', '2020-04-09'),
(17, 8, 'A-', '2020-04-01', '2020-05-12', '2020-04-09'),
(18, 11, 'B+', '2020-04-04', '2020-05-14', '2020-04-07'),
(19, 21, 'B-', '2020-04-01', '2020-05-12', '2020-04-06'),
(20, 15, 'B+', '2020-04-15', '2020-04-22', '2020-04-17'),
(21, 22, 'AB+', '2020-07-01', '2020-08-12', '0000-00-00'),
(22, 18, 'AB-', '2020-07-02', '2020-08-13', '0000-00-00'),
(23, 23, 'AB-', '2020-04-03', '2020-06-14', '2020-04-07'),
(24, 7, 'A-', '2020-07-01', '2020-08-12', '0000-00-00'),
(25, 12, 'A+', '2020-07-01', '2020-08-12', '0000-00-00'),
(26, 9, 'AB+', '2020-07-01', '2020-08-12', '0000-00-00'),
(27, 24, 'B-', '2020-07-02', '2020-08-13', '0000-00-00'),
(28, 19, 'O+', '2020-07-02', '2020-08-13', '0000-00-00'),
(29, 26, 'A-', '2020-07-01', '2020-08-12', '0000-00-00'),
(30, 25, 'O+', '2020-07-01', '2020-08-12', '0000-00-00'),
(31, 27, 'AB+', '2020-07-03', '2020-08-14', '0000-00-00'),
(35, 31, 'A+', '2020-07-02', '2020-08-12', '0000-00-00'),
(36, 32, 'AB-', '2020-07-02', '2020-08-12', '0000-00-00'),
(37, 33, 'A+', '2020-07-01', '2020-07-04', '0000-00-00'),
(38, 34, 'A+', '2020-04-01', '2020-08-13', '2020-04-03'),
(39, 35, 'AB+', '2020-07-02', '2020-08-13', '0000-00-00'),
(40, 36, 'AB+', '2020-07-02', '2020-08-13', '0000-00-00'),
(41, 37, 'A+', '2020-07-01', '2020-08-12', '0000-00-00'),
(42, 38, 'B+', '2020-01-01', '2020-02-12', '2020-01-03'),
(43, 39, 'AB+', '2020-02-01', '2020-03-12', '2020-02-03'),
(44, 40, 'O-', '2020-03-01', '2020-04-13', '2020-03-04');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `DonorID` int(5) NOT NULL,
  `BloodID` int(5) NOT NULL,
  `FName` varchar(35) NOT NULL,
  `LName` varchar(35) NOT NULL,
  `DonorPass` varchar(20) NOT NULL,
  `ICNum` varchar(10) NOT NULL,
  `Email` varchar(35) NOT NULL,
  `ContactNum` varchar(11) NOT NULL,
  `Address` text NOT NULL,
  `BloodType` enum('A+','A-','B+','B-','O+','O-','AB+','AB-') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`DonorID`, `BloodID`, `FName`, `LName`, `DonorPass`, `ICNum`, `Email`, `ContactNum`, `Address`, `BloodType`) VALUES
(0, 13, 'Faris', 'Ahmad', 'faris', '1234567890', 'raihafarhani98@gmail.com', '0162875414', 'merlimau', 'A+'),
(1, 5, 'Aina', 'Nurin', 'aina', '1234567890', 'rifhadeannah99@gmail.com', '0102345678', 'klang', 'B+'),
(2, 6, 'Ruwaida', 'Rohanan', '1234567890', '0006061056', 'ruwaidafazurin0@gmail.com', '0134523456', 'Merlimau', 'A+'),
(3, 7, 'Zafran', 'Kamal', 'zafran', '9908121078', 'raihafarhani98@gmail.com', '01720345632', 'Lipat Kajang', 'O-'),
(4, 12, 'Qistina', 'Badrul', 'qistina', '9803121098', 'rifhadeannah99@gmail.com', '0134567283', 'Klebang', 'O+'),
(5, 16, 'Syafiqah', 'Karim', 'syafiqah', '9912211089', 'raihafarhani98@gmail.com', '01925261781', 'Jasin', 'O-'),
(7, 10, 'Rifqi', 'Fahim', '4321', '9901111078', 'ruwaidafazurin0@gmail.com', '0174362736', 'Jasin', 'A-'),
(8, 17, 'Puteri', 'Balqis', 'puteri', '8912031087', 'raihafarhani98@gmail.com', '0123982783', 'masjid tanah', 'A-'),
(9, 2, 'Dyan', 'Fauzi', 'dyan', '98076435', 'rifhadeannah99@gmail.com', '0123454327', 'shah alam', 'AB+'),
(10, 9, 'Sarah', 'Hana', 'sarah', '9807627354', 'ruwaidafazurin0@gmail.com', '0123456789', 'Jasin', 'B-'),
(11, 18, 'Najwa', 'Shari', 'najwa', '7412321078', 'raihafarhani98@gmail.com', '01239484620', 'Merlimau', 'B+'),
(12, 8, 'Diyana', 'Arfah', 'diyana', '9804051065', 'rifhadeannah99@gmail.com', '0172064827', 'shah alam', 'A+'),
(13, 11, 'Dani', 'Farish', '1234', '980977855', 'ruwaidafazurin0@gmail.com', '0283383937', 'johor', 'A+'),
(14, 12, 'Maria', 'Sabri', 'maria', '9087658657', 'raihafarhani98@gmail.com', '01234213467', 'Kuala lumpur', 'O-'),
(15, 20, 'Syaza', 'Sulaiman', '4321', '9702121072', 'rifhadeannah99@gmail.com', '018234789', 'Ayer Keroh', 'B+'),
(16, 1, 'Rifha', 'Rohanan', '1234', '9806265738', 'ruwaidafazurin0@gmail.com', '0178297382', 'klang', 'AB+'),
(17, 3, 'Raudhah', 'Rohanan', '2133', '2093819283', 'raihafarhani98@gmail.com', '01827362829', 'kapar', 'O-'),
(18, 14, 'fahim', 'rifqi', '424232', '5434674752', 'rifhadeannah99@gmail.com', '4532515', 'klang', 'AB-'),
(19, 15, 'faiza', 'salleh', '13131', '0987654', 'ruwaidafazurin0@gmail.com', '098765432', 'penang', 'O+'),
(20, 4, 'Intan', 'Osman', '4321', '9873827382', 'raihafarhani98@gmail.com', '0182928393', 'johor', 'O-'),
(21, 19, 'Afini', 'Manih', 'afini', '8912217389', 'rifhadeannah99@gmail.com', '01234652637', 'Lipat Kajang', 'B-'),
(22, 21, 'Naim', 'Rahman', 'naim', '9811091089', 'ruwaidafazurin0@gmail.com', '01928329282', 'Melaka', 'AB+'),
(23, 23, 'Rohanan', 'Osman', '5674', '6601010421', 'raihafarhani98@gmail.com', '0192486004', 'Masjid Tanah', 'AB-'),
(24, 27, 'Syaza', 'Dafinah', '9876', '7413111967', 'rifhadeannah99@gmail.com', '0176863745', 'Merlimau', 'B-'),
(25, 30, 'Akmal', 'Daim', '87976', '8901101035', 'ruwaidafazurin0@gmail.com', '0129384738', 'Jasin', 'O+'),
(26, 29, 'Adira ', 'Aman', 'adira', '2973092731', 'raihafarhani98@gmail.com', '01928392839', 'Muar', 'A-'),
(27, 31, 'Muammar', 'Jamal', 'Muammar ', '9821928191', 'ruwaidafazurin0@gmail.com', '01928928292', 'Melaka', 'AB+'),
(28, 1, 'Raja', 'Azman', 'raja', '8610768927', 'rifhadeannah99@gmail.com', '0126372653', 'Istana', 'O+'),
(31, 35, 'Hazirah ', 'Rosli', 'hazirah', '9876543212', 'ruwaidafazurin0@gmail.com', '0162875414', 'merlimau', 'A+'),
(32, 36, 'Fakhira', 'Rosli', 'fakhira', '98765432', 'rifhadeannah99@gmail.com', '01273898211', 'jasin', 'AB-'),
(33, 37, 'Azwa', 'Zamil', 'azwa', '9876542345', 'raihafarhani98@gmail.com', '0987654327', 'muar', 'A+'),
(34, 38, 'amirul', 'nazmi', 'amirul', '0192731971', 'rifhadeannah99@gmail.com', '01720345632', 'melaka', 'A+'),
(35, 39, 'farah', 'anisah', 'farah', '876542313', 'rifhadeannah99@gmail.com', '0897897397', 'lipat kajang', 'AB+'),
(36, 40, 'haizul', 'iman', 'haizul', '1234567890', 'raihafarhani98@gmail.com', '0123454327', 'muar', 'AB+'),
(37, 41, 'ilyas', 'ali', 'ilyas', '765432143', 'ruwaidafazurin0@gmail.com', '8765432157', 'merlimau', 'A+'),
(38, 42, 'azwann', 'bakar', 'azwann', '75735q2425', 'ruwaidafazurin0@gmail.com', '0178297382', 'jasin', 'B+'),
(39, 43, 'hafiz', 'harun', 'hafiz', '903482940', 'raihafarhani98@gmail.com', '0162875414', 'merlimau', 'AB+'),
(40, 44, 'fatihah', 'azhar', 'fatihah', '8340709191', 'rifhadeannah99@gmail.com', '0102345678', 'jasin', 'O-');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` int(5) NOT NULL,
  `StaffName` varchar(25) NOT NULL,
  `StaffPass` varchar(10) NOT NULL,
  `ContactNum` varchar(10) NOT NULL,
  `Email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `StaffName`, `StaffPass`, `ContactNum`, `Email`) VALUES
(3, 'Lailer', '1122424', '0172007937', 'raihafarhani98@gmail.com'),
(7, 'lela', 'dfdsgds', '0162875414', 'raihafarhani98@gmail.com'),
(15, 'Raiha', '12345678', '0172008976', 'raihafarhani98@gmail.com'),
(16, 'icamiaumiau', 'rahsia', '0102782876', 'raihafarhani98@gmail.com'),
(17, 'Aminah', '1234', '0178656747', 'aminah@gmail.com'),
(18, 'Ainar', '2345', '0172007937', 'raihafarhani98@gmail.com'),
(19, 'Qistina', '098', '0124567839', 'qis@gmail.com'),
(20, 'Sarah', 'sarah', '0196887652', 'sarah@gmail.com'),
(22, 'admin', '1234', '0123456789', 'admin@gmail.com'),
(23, 'rohanan', '123', '9685789000', 'rohanan@gmail.com'),
(24, 'Rahimah', '0987', '0125637652', 'rahim@yahoo.com'),
(29, 'Adilla', 'adilla', '0193829384', 'adilla@gmail.com'),
(32, 'Rifha', 'rifha', '0129878923', 'rifhadeannah99@gmail.com'),
(33, 'Farah', 'farah', '0128938482', 'farah@gmail.com'),
(34, 'danish', 'danish', '0198728372', 'danish@gmail.com'),
(35, 'Siara', 'siara', '0987654313', 'siara@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`BloodID`),
  ADD KEY `DonorID` (`DonorID`),
  ADD KEY `BloodType` (`BloodType`),
  ADD KEY `DonorID_2` (`DonorID`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`DonorID`),
  ADD KEY `BloodID` (`BloodID`),
  ADD KEY `BloodType` (`BloodType`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `BloodID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `DonorID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
