-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 09:34 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chemlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `modification_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `name`, `password`, `modification_date`) VALUES
(1, 'admin@kyu.ac.ug', 'Dr Gumula Ivan', 'e10adc3949ba59abbe56e057f20f883e', '2023-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `apparatus`
--

CREATE TABLE `apparatus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` int(5) NOT NULL,
  `location` varchar(30) NOT NULL,
  `modification_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apparatus`
--

INSERT INTO `apparatus` (`id`, `name`, `quantity`, `location`, `modification_date`) VALUES
(3, 'COTTON WOOL', 0, '', '0000-00-00'),
(4, 'VOLUMETRIC FLASK(100mls)', 0, '', '0000-00-00'),
(5, ' VOLUMETRIC FLASK                               50', 0, '', '0000-00-00'),
(6, '                                 25mls', 0, '', '0000-00-00'),
(7, 'MEASURING CYLINDER(250mls)', 0, '', '0000-00-00'),
(8, 'ALCOHOL METER', 0, '', '0000-00-00'),
(9, 'TIMERS', 0, '', '0000-00-00'),
(10, 'VISCO TUBES', 0, '', '0000-00-00'),
(11, 'THIMBLE', 0, '', '0000-00-00'),
(12, 'CONDESNER', 0, '', '0000-00-00'),
(13, 'THRISTLE FUNNEL', 22, '', '0000-00-00'),
(14, 'TWO JOINT FLASK', 0, '', '0000-00-00'),
(15, 'THERMOMETER', 0, '', '0000-00-00'),
(16, 'BLENDER', 0, '', '0000-00-00'),
(17, 'HEATING MANTLE', 0, '', '0000-00-00'),
(18, 'NAME', 0, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `apparatus_orders`
--

CREATE TABLE `apparatus_orders` (
  `id` int(11) NOT NULL,
  `apparatus_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apparatus_orders`
--

INSERT INTO `apparatus_orders` (`id`, `apparatus_id`, `user_id`, `quantity`, `date`, `status`) VALUES
(1, 13, 7, 1, '2023-07-01 12:21:18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chemical_orders`
--

CREATE TABLE `chemical_orders` (
  `id` int(11) NOT NULL,
  `chemical_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chemical_orders`
--

INSERT INTO `chemical_orders` (`id`, `chemical_id`, `user_id`, `quantity`, `date`, `status`) VALUES
(1, 62, 7, 3, '2023-07-01 11:53:12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `specs` varchar(300) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `quantity` int(5) NOT NULL,
  `status` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL,
  `code` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `name`, `specs`, `supplier`, `quantity`, `status`, `location`, `code`) VALUES
(1, 'Analytical Balance', '4 d.p', 'Bieng distributers', 16, 'under maintenance', 'East End Lab', 'Bal/Anal/EED/001'),
(4, 'Acetylene gas cylinder', 'medium size', '', 0, 'working', 'Eat End Lab', 'Gas/cyl/acet/EED/001'),
(5, 'Armed test tubes', '', '', 58, '', 'Eat End Lab', ''),
(6, 'Atomic absorption spectrometer', '240Z AA Atomic Absorption Spectrometer', 'Agilent Technologies', 1, 'under maimtenance', 'East End Lab', 'AAS/EED/001'),
(7, 'Carolimeter', '', '', 2, 'not working', 'East End Lab', 'Carol/EED/001-002'),
(8, 'Compresser', '', '', 0, 'working', 'East End Lab', 'Comp/EED/001'),
(9, 'Electric stove', '2 channel', '', 0, 'working', 'East End Lab', 'ElecStov/EED/001'),
(10, 'Electrochemical analyser', '', '', 0, 'working', 'East End Lab', 'ElecChem/Anal/EED/001'),
(11, 'Fire blanket ', '', '', 2, 'working', 'East End Lab', 'FireBlank/EED/001-002'),
(12, 'Fume hood', '', '', 0, 'working', 'ADB', 'FumHood/ADB/Org/001'),
(13, 'Freezer', 'NL-DF-6730, RG1740PHAMW', '', 2, 'under maintenance', 'ADB', 'Freez/ADB/Anal/001-002'),
(14, 'Gas chromatography GC-Clarus 480', 'Perkin Elmer', '', 0, 'working', 'ADB', 'GC/ADB/Anal/001'),
(15, 'Hot plate', '', '', 3, 'working', 'ADB', 'HT/ADB/Anal/001-003'),
(16, 'Hydrogen generator GC-HG-2200', 'Perkin Elmer', '', 0, 'working', 'ADB', 'H-GEN/ADB/Anal/001'),
(17, 'Hoy plate', 'multi-channel(U.V 16 , Gerhadf', '', 5, 'Working', 'ADB', 'HT/ADB/Anal/002-006'),
(18, 'Melting point operator', '', '', 0, 'working', 'ADB', 'MPO/ADB/Anal/001'),
(19, 'Marpho furnanace FHP-03', '', '', 0, 'working', 'East End Lab', 'FURN-Marph/ADB/EED/001'),
(20, 'Nitrogen-air generator GC-ANG-2381', '', 'Perkin Elmer', 0, 'not working', 'ADB ', 'N-GEN/Anal/001'),
(21, 'Nitrogen gas cylinder 150 pressure', '', 'Perkin Elmer', 0, 'working', 'ADB', 'GAS/CYL/N2/ADB/Anal/001'),
(22, 'Oven', '', '', 0, '', 'East End Lab', 'OV/EED/001'),
(23, 'Portable refractometer', '', '', 5, '', 'East End Lab', 'Refra-Port/EED/001-005'),
(24, 'Printer', '', '', 2, '1 working', 'East End Lab', 'PRINT/EED/001-001'),
(25, 'Pyrolyzer Sk.2-2-12TPA2', '', '', 0, 'working', 'East End Lab', 'PYRO/EED/001'),
(26, 'Programmable oven DNO-30', '', '', 0, 'not working', 'ADB', 'OV/ADB/001'),
(27, 'Rotary evaporator strike 300', '', '', 0, 'Working', 'East End Lab', 'EVAP/EED/001'),
(28, 'Rotary vane vaccum pump VIP-125', '', '', 0, 'Working', 'ADB', 'VAC-PUMP/ADB/Anal/001'),
(29, 'Resistivity meter H198188', '', '', 0, 'Working', 'ADB', 'RES-MET/ADB/Anal/001'),
(30, 'Standard sieves', '', '', 0, 'under maintenance', 'ADB', 'SIEVE-STAND/ADB/CHE/001'),
(31, 'UV-Vis spectrophotometer genesys IOS', '', 'Thermo Fisher Scientific', 0, 'Working', 'East End Lab', 'UV-SPEC/EED/001'),
(32, 'U.V cambinet', '254nm, 366nm', 'Thermo Fisher Scientific', 0, 'working', 'East End Lab', 'UV-CAB/EED/001'),
(33, 'Vaccum pump', '', '', 0, 'working', 'East End Lab', 'VAC-PUMP/EED/001'),
(34, 'Voltage regulator', '', '', 0, 'not working', 'ADB', 'VOLT-REG/ADB/001'),
(35, 'HPLC-UV detector', '', 'Perkin Elmer', 0, 'not working', 'ADB', 'UV-DET/ADB/001'),
(36, 'Bomb Calorimeter', '', '', 0, 'not working', 'ADB', 'CALOR-BOMB/ADB/001'),
(37, 'Flame Photometer', '', 'Perkin Elmer', 0, 'not working', 'ADB', 'FLAME-PHOT/ADB/Anal/001'),
(38, 'MPLC', '', '', 0, 'not working', 'ADB', 'MPLC/ADB/001'),
(39, 'Digital Oven', '', '', 0, 'not working', 'ADB', 'OVEN-DIG/ADB/001'),
(40, 'Ice Machine', 'Stainless Steel Built-In Ice Maker', 'Artactic Star', 0, 'not working', 'ADB', 'ICE-MACH/ADB/001');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_orders`
--

CREATE TABLE `equipment_orders` (
  `id` int(11) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment_orders`
--

INSERT INTO `equipment_orders` (`id`, `equipment_id`, `user_id`, `quantity`, `date`, `status`) VALUES
(1, 1, 7, 1, '2023-07-01 12:32:16', 0),
(2, 7, 8, 1, '2023-07-01 12:32:19', 0);

-- --------------------------------------------------------

--
-- Table structure for table `laboratory`
--

CREATE TABLE `laboratory` (
  `id` int(11) NOT NULL,
  `lab_code` varchar(100) NOT NULL,
  `lab_name` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laboratory`
--

INSERT INTO `laboratory` (`id`, `lab_code`, `lab_name`, `date`) VALUES
(1, '', '', '2023-07-01 18:57:29'),
(2, 'Chem 01', 'West End Laboratory', '2023-07-01 18:58:06');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `action` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `name`, `role`, `action`, `date`) VALUES
(16, 7, 'Nansikombi Catheline', 'Student', 'Logged In', '2023-07-01 18:29:57'),
(17, 7, 'Nansikombi Catheline', 'Student', 'Logged Out', '2023-07-01 18:34:45'),
(18, 1, 'Kabanda Ronald', 'Lecturer', 'Logged In', '2023-07-01 18:36:08'),
(19, 1, 'Kabanda Ronald', 'Lecturer', 'Logged Out', '2023-07-01 18:36:36'),
(20, 1, 'Dr Gumula Ivan', 'admin', 'Logged In', '2023-07-01 19:11:39'),
(21, 1, 'Dr Gumula Ivan', 'admin', 'Logged Out', '2023-07-01 19:19:46');

-- --------------------------------------------------------

--
-- Table structure for table `organic`
--

CREATE TABLE `organic` (
  `id` int(4) NOT NULL,
  `compound` varchar(100) DEFAULT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `expdate` date DEFAULT NULL,
  `location` varchar(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `modification_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `organic`
--

INSERT INTO `organic` (`id`, `compound`, `amount`, `expdate`, `location`, `category`, `modification_date`) VALUES
(62, 'UNIVERSAL INDICATOR ', '17', '2023-04-09', 'cupboard one', 'organic', '0000-00-00'),
(63, 'PYRIDINE DRIED', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(64, 'ACETIC ACID', '83', '0000-00-00', '', 'organic', '0000-00-00'),
(65, 'PETROLEUM ETHER', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(66, 'NITRIC ACID', '26', '0000-00-00', '', 'organic', '0000-00-00'),
(67, 'HYDROGEN PEROXIDE', '38', '0000-00-00', '', 'organic', '0000-00-00'),
(68, 'ETHANOL ABSOLUTE', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(69, 'BENZALDEHYDE', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(70, 'TOLUENE', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(71, 'TRICHLOROMEHTANE', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(72, 'ISOPROPYL ALCHOL', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(73, 'ETHANOL  ', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(74, 'ACETONE', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(75, 'FORMALIN', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(76, 'PROPAN', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(77, 'BRINE', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(78, 'METHANOL', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(79, 'GLYCERINE', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(80, 'METHYLATED SPIRIT', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(81, 'OLIVE OIL', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(82, 'ALMOND OIL', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(83, 'COCONUT OIL', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(84, 'SODIUM SILICATE', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(85, 'LEMON PERFUME', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(86, 'PALM KENNEL OIL', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(87, 'VANILA PERFUME', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(88, 'VEGETABLE OIL', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(89, 'STRAWBERRY PERFUME', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(90, 'TRIETHANOL', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(91, 'VINEGAR', '3', '0000-00-00', '', 'organic', '0000-00-00'),
(92, 'BARIUM CHLORIDE', '209', '2023-04-07', 'cupboard one', 'inorganic', '0000-00-00'),
(93, 'CHARCOAL ACTIVATED', '500gm', '0000-00-00', '', 'inorganic', '0000-00-00'),
(94, 'SODIUM HYDROGEN', '500gm', '0000-00-00', '', 'inorganic', '0000-00-00'),
(95, 'POTASSIUM IODATE', '100gm', '0000-00-00', '', 'inorganic', '0000-00-00'),
(96, 'SODIUM HYDROXIDE', '200gm', '0000-00-00', '', 'inorganic', '0000-00-00'),
(97, 'SODIUM CARBONATE', '20gm', '0000-00-00', '', 'inorganic', '0000-00-00'),
(98, 'POTASSIUM PERMANGANATE', '50gm', '0000-00-00', '', 'inorganic', '0000-00-00'),
(99, 'FERROUS SULPHATE', '250gm', '0000-00-00', '', 'inorganic', '0000-00-00'),
(100, 'SODIUM CHLORIDE', '300gm', '0000-00-00', '', 'inorganic', '0000-00-00'),
(101, 'SODIUM SULPHATE', '50gm', '0000-00-00', '', 'inorganic', '0000-00-00'),
(102, 'POTASSIUM HYDROXIDE', '500gm', '0000-00-00', '', 'inorganic', '0000-00-00'),
(103, 'POTASSIUM CHLORIDE', '500gm', '0000-00-00', '', 'inorganic', '0000-00-00'),
(104, 'NICKEL CHLORIDE', '500gm', '0000-00-00', '', 'inorganic', '0000-00-00'),
(105, 'SILICA GEL', '200gm', '0000-00-00', '', 'inorganic', '0000-00-00'),
(106, 'MAGNESIUM SULPHATE', '300gm', '0000-00-00', '', 'inorganic', '0000-00-00'),
(107, 'POTASSIUM CYANIDE', '300gm', '0000-00-00', '', 'inorganic', '0000-00-00'),
(108, 'COPPER(II)SULPHATE', '200gm', '0000-00-00', '', 'inorganic', '0000-00-00'),
(109, 'SODIUM DIHYDROGEN', '700gm', '0000-00-00', '', 'inorganic', '0000-00-00'),
(110, 'SODIUM OXALATE', '500gm', '0000-00-00', '', 'inorganic', '0000-00-00'),
(111, 'SODIUM PHOSPHATE', '500gm', '0000-00-00', '', 'inorganic', '0000-00-00'),
(112, 'CUPRIC CHLORIDE', '250gm', '0000-00-00', '', 'inorganic', '0000-00-00'),
(113, 'METHYL RED INDICATOR', '25gm', '0000-00-00', '', 'inorganic', '0000-00-00'),
(114, 'ERIOCHROME BLACK T', '5gm', '0000-00-00', '', 'inorganic', '0000-00-00'),
(115, 'RANKEM', '5gm', '0000-00-00', '', 'inorganic', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `staff_table`
--

CREATE TABLE `staff_table` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `role` varchar(30) NOT NULL,
  `staff_ID` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `emp_status` varchar(100) NOT NULL,
  `assigned_lab` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_table`
--

INSERT INTO `staff_table` (`id`, `fname`, `lname`, `email`, `contact`, `role`, `staff_ID`, `department`, `emp_status`, `assigned_lab`, `password`) VALUES
(1, 'Ronald', 'Kabanda', 'rkabanda@kyu.ac.ug', '0705098700', 'Lecturer', 'SC003', 'Department of Chemistry', 'Full Time', '', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Kizito', 'Musisi', 'kmusisi@kyu.ac.ug', '0775166528', 'Laboratory Technician', 'SP0078', 'Department of Chemistry', 'Part Time', 'East End', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `id` int(4) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(13) DEFAULT NULL,
  `role` varchar(15) NOT NULL,
  `course` varchar(100) NOT NULL,
  `student_no` varchar(30) DEFAULT NULL,
  `supervisor` varchar(100) NOT NULL,
  `department` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`id`, `fname`, `lname`, `email`, `contact`, `role`, `course`, `student_no`, `supervisor`, `department`, `password`) VALUES
(7, 'Catheline', 'Nansikombi', '1900800118@std.kyu.ac.ug', '0756529218', 'Student', 'Chemical Engineering', '1900800118', 'Dr Gumula Ivan', 'Department of Chemistry', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'Patricia', 'Apolot', '1900800261@std.kyu.ac.ug', '0758490918', 'Student', 'Chemical Engineering', '1900800261', 'Dr Gumula Ivan', 'Department of Chemistry', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apparatus`
--
ALTER TABLE `apparatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apparatus_orders`
--
ALTER TABLE `apparatus_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chemical_orders`
--
ALTER TABLE `chemical_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment_orders`
--
ALTER TABLE `equipment_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laboratory`
--
ALTER TABLE `laboratory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organic`
--
ALTER TABLE `organic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_table`
--
ALTER TABLE `staff_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apparatus`
--
ALTER TABLE `apparatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `apparatus_orders`
--
ALTER TABLE `apparatus_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chemical_orders`
--
ALTER TABLE `chemical_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `equipment_orders`
--
ALTER TABLE `equipment_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laboratory`
--
ALTER TABLE `laboratory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `organic`
--
ALTER TABLE `organic`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `staff_table`
--
ALTER TABLE `staff_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
