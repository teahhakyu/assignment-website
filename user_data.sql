-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2016 at 07:59 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `computeraccessorieslist`
--

CREATE TABLE `computeraccessorieslist` (
  `computeraccessorieslist_id` int(11) NOT NULL,
  `computeraccessorieslist_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` text NOT NULL,
  `contact_email` text NOT NULL,
  `contact_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_message`) VALUES
(1, 'teahhakyu', 'afkjknajk@hafj.jafj', ''),
(2, 'teahhakyu', 'afkjknajk@hafj.jafj', ''),
(3, 'teahhakyu', 'afkjknajk@hafj.jafj', ''),
(4, 'teahhakyu', 'afkjknajk@hafj.jafj', ''),
(5, '', '', ''),
(6, '', '', ''),
(7, '', '', ''),
(8, '', '', ''),
(9, 'mgk invincible', 'johncena_1234@hotmail.com', ''),
(10, '', '', ''),
(11, 'mgk invincible', 'johncena_1234@hotmail.com', ''),
(12, '', '', ''),
(13, '', '', ''),
(14, '', '', ''),
(15, '', '', ''),
(16, '', '', ''),
(17, '', '', ''),
(18, '', '', ''),
(19, '', '', ''),
(20, '', '', ''),
(21, '', '', ''),
(22, '', '', ''),
(23, '', '', ''),
(24, '', '', ''),
(25, '', '', ''),
(26, '', '', ''),
(27, '', '', ''),
(28, '', '', ''),
(29, '', '', ''),
(30, '', '', ''),
(31, '', '', ''),
(32, '', '', ''),
(33, '', '', ''),
(34, '', '', ''),
(35, '', '', ''),
(36, '', '', ''),
(37, '', '', ''),
(38, '', '', ''),
(39, '', '', ''),
(40, '', '', ''),
(41, '', '', ''),
(42, '', '', ''),
(43, '', '', ''),
(44, '', '', ''),
(45, '', '', ''),
(46, '', '', ''),
(47, '', '', ''),
(48, '', '', ''),
(49, '', '', ''),
(50, '', '', ''),
(51, '', '', ''),
(52, '', '', ''),
(53, '', '', ''),
(54, '', '', ''),
(55, '', '', ''),
(56, '', '', ''),
(57, '', '', ''),
(58, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cpu`
--

CREATE TABLE `cpu` (
  `cpu_id` int(11) NOT NULL,
  `categories` varchar(50) NOT NULL,
  `cpu_name` varchar(50) NOT NULL,
  `cpu_details` varchar(500) NOT NULL,
  `User_Rating` varchar(50) NOT NULL,
  `Value` varchar(50) NOT NULL,
  `Effective_Speed` varchar(50) NOT NULL,
  `Market_Share` varchar(50) NOT NULL,
  `SC_Mixed` varchar(50) NOT NULL,
  `QC_Mixed` varchar(50) NOT NULL,
  `Age` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpu`
--

INSERT INTO `cpu` (`cpu_id`, `categories`, `cpu_name`, `cpu_details`, `User_Rating`, `Value`, `Effective_Speed`, `Market_Share`, `SC_Mixed`, `QC_Mixed`, `Age`, `Price`) VALUES
(1, 'processor', 'Intel Core i5-6600K', 'The Intel Core i5-6600K is based on the new "Skylake" 14nm manufacturing process. Sporting 4 physical cores with base/turbo clocks of 3.5/3.9 GHz the 6600K and its p...', '10902', '100%', '92.1 %', '2.8 %', '123 Pts', '470 Pts', '11 months', 'RM 912'),
(2, 'processor', 'Intel Core i7-6700K', 'The Core i7-6700K is Intel''s latest "Skylake" flagship processor. It replaces the hugely successful i7-4790K and takes the crown as the fastest mainstream consumer C...', '9032', '93.6 %', '98.2 %', '4.8 %', '129 Pts', '459 Pts', '1 months', 'RM 1299'),
(3, 'processor', 'Intel Core i7-4790K', 'The Intel Core i7-4790K, codenamed Devil''s Canyon, is an upgraded 4770K, Intel''s current flagship i7. The 4790K features an improved thermal interface which enables ...', '8249', '92.8 %', '93.7 %', '2.7 %', '124 Pts', '439 Pts', '25 months', 'RM 1172'),
(4, 'processor', 'Intel Core i5-4690K', 'The Intel Core i5-4690K is the latest incremental upgrade to Intel''s unlocked mid-range quad core family of processors. The 4690K replaces the 4670K. Comparing the 4...', '7523', '90.3 %', '83.3 %', '1.8 %', '112 Pts', '424 Pts', '26 months', 'RM 921'),
(5, 'processor', 'Intel Core i7-5820K', 'The Intel Core i7-5820K is the cheapest of three (5820K,5930K,5960X) new Haswell-E prosumer/enthusiast processors. The 5820K sports six physical cores and twelve thr...', '7412', '83.4%', '91.9 %', '0.8 %', '105 Pts', '410 Pts', '23 months', 'RM 1478'),
(6, 'processor', 'Intel Core i7-4770K', 'The Core i7-4770K is Intel''s fourth generation (codename Haswell) flagship processor in the hugely successful Core range. It''s not surprising that the 4770K sets a n...', '6914', '74.3%', '83.9 %', '1 %', '112 Pts', '390 Pts', '40 months', 'RM 1576'),
(7, 'processor', 'Intel Core i3-6100', '2,565 User Benchmarks\r\n										Best Bench: 69% Base clock 3.7 GHz, turbo 3.7 GHz (avg)\r\n										Worst Bench: 51% Base clock 3.7 GHz, turbo 0.8 GHz (avg)', '6553', '91.3%', '65 %', '0.7 %', '110 Pts', '293 Pts', '9 months', 'RM 462'),
(8, 'processor', 'Intel Core i5-6500', '4,585 User Benchmarks\r\n										Best Bench: 82% Base clock 3.2 GHz, turbo 3.15 GHz (avg)\r\n										Worst Bench: 64% Base clock 3.2 GHz, turbo 0.8 GHz (avg)', '6342', '88.2%', '76.5 %', '1.2 %', '103 Pts', '389 Pts', '10 months', 'RM 780'),
(9, 'processor', 'Intel Core i5-3570K', 'The Core i5-3570K Ivy Bridge processor is one of Intel''s best performers to date. In terms of real world performance this processor offers far more than most users a...', '5785', '78.2%', '77 %', '1.6 %', '105 Pts', '389 Pts', '51 months', 'RM 2156'),
(10, 'processor', 'Intel Core i7-3770K', 'The third gen Ivy Bridge Core i7-3770K can''t really be described as a consumer orientated processor. With 8 threads and four cores its capabilities are better aligne...', '5249', '62.1%', '78.8 %', '1 %', '107 Pts', '365 Pts', '51 months', 'RM 2156'),
(11, 'processor', 'Intel Core i7-6700', '4,919 User Benchmarks\r\n										Best Bench: 93% Base clock 3.4 GHz, turbo 3.4 GHz (avg)\r\n										Worst Bench: 76% Base clock 3.4 GHz, turbo 0.8 GHz (avg)', '4452', '84.5%', '85.4 %', '1.4 %', '112 Pts', '398 Pts', '10 months', 'RM 1176'),
(12, 'processor', 'Intel Core i7-5960X', 'The Intel Core i5-6600K is based on the new "Skylake" 14nm manufacturing process. Sporting 4 physical cores with base/turbo clocks of 3.5/3.9 GHz the 6600K and its p...', '4226', '64.2%', '103 %', '0.2 %', '106 Pts', '429 Pts', '23 months', 'RM 3983'),
(13, 'processor', 'Intel Pentium G3258', 'The Intel G3258 is the first budget Pentium processor to feature an unlocked multiplier. This enables a comfortable overclock to 4.3 GHz using just the stock heat si...', '4108', '87.5%', '49.8 %', '0.4 %', '101 Pts', '434 Pts', '23 months', 'RM 2162'),
(14, 'processor', 'Intel Core i5-6600', '2,661 User Benchmarks\r\n										Best Bench: 90% Base clock 3.3 GHz, turbo 3.3 GHz (avg)\r\n										Worst Bench: 72% Base clock 3.3 GHz, turbo 0.8 GHz (avg)', '3865', '94.1%', '83.2 %', '0.7 %', '112 Pts', '423 Pts', '10 months', 'RM 821'),
(15, 'processor', 'AMD FX-6300', 'The FX 6-Core, like most CPUs from AMD, delivers reasonably good server orientated multi threaded performance and consequently good processing thoughput at a reasona...', '3645', '75.6%', '50.2 %', '2 %', '70 Pts', '235 Pts', '45 months', 'RM 384'),
(16, 'processor', 'Intel Core i5-4690', 'The Core i5-4690 is Intel''s latest and greatest locked Core-i5. This CPU will suit serious gamers that don''t plan on overclocking. The 4690 replaces the 4670 and sha...', '3517', '87.4%', '79.1 %', '0.5 %', '107 Pts', '402 Pts', '26 months', 'RM 878'),
(17, 'processor', 'Intel Core i7-2600K', 'The i7-2600K Sandy Bridge processor is two generations old and nearly three years out of date. The numerous owners of this superb processor should feel in no hurry t...', '2943', '70.8%', '75.4 %', '1 %', '102 Pts', '351 Pts', '66 months', 'RM 1350'),
(18, 'processor', 'AMD FX-8370', 'The FX-8370 is a top of the range black edition Vishera eight core processor based on AMD’s Piledriver architecture. It was launched in September 2014 and is both ch...', '2640', '73.1%', '62.2 %', '0.2 %', '78 Pts', '284 Pts', '22 months', 'RM 745'),
(19, 'processor', 'Intel Core i5-4670K', 'The Intel Core i5-4670K is the latest middle tier desktop processor from the fourth generation of Intel''s Core range codenamed "Haswell". In terms of raw performance...', '1964', '92 %', '79.5 %', '1.1 %', '108 Pts', '402 Pts', '37 months', 'RM 774'),
(20, 'processor', 'Intel Core i7-4790', 'The Core i7-4790 is the third upgrade to Intel''s flagship quad core hyper-threaded CPU. This version, like its predecessor the i7-4771, gets a 100 MHz bump in stock ...', '1642', '78.9%', '80.3 %', '1.1 %', '108 Pts', '371 Pts', '26 months', 'RM 1196'),
(21, 'processor', 'AMD FX-8350', 'In terms of raw single-core performance the flagship AMD FX-8350 is lagging behind intel''s processor line-up by over two generations. The PassMark Single Thread scor...', '1385', '77.6%', '62 %', '2.3 %', '76.9 Pts', '284 Pts', '45 months', 'RM 627');

-- --------------------------------------------------------

--
-- Table structure for table `displaycard`
--

CREATE TABLE `displaycard` (
  `displaycard_id` int(11) NOT NULL,
  `displaycard_categories` varchar(50) NOT NULL,
  `displaycard_name` varchar(50) NOT NULL,
  `displaycard_details` varchar(500) NOT NULL,
  `displaycard_ur` varchar(50) NOT NULL,
  `displaycard_value` varchar(50) NOT NULL,
  `displaycard_es` varchar(50) NOT NULL,
  `displaycard_ms` varchar(50) NOT NULL,
  `displaycard_mr` varchar(50) NOT NULL,
  `displaycard_age` varchar(50) NOT NULL,
  `displaycard_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `displaycard`
--

INSERT INTO `displaycard` (`displaycard_id`, `displaycard_categories`, `displaycard_name`, `displaycard_details`, `displaycard_ur`, `displaycard_value`, `displaycard_es`, `displaycard_ms`, `displaycard_mr`, `displaycard_age`, `displaycard_price`) VALUES
(1, 'graphic', 'Nvidia GTX 970', 'The Nvidia GTX 970 is a game changer in terms of performance per watt and value for money. The GTX 970 is based on Nvidia''s ground-breaking Maxwell architecture whic...', '32042', '104%', '83.5%', '7.1%', '169 fps', '22 months', 'RM 1,039'),
(2, 'graphic', 'AMD R9 390', 'The new AMD R9 390 is the direct successor to the R9 290. Both cards share the same GPU but the R9 390 is factory overclocked. The R9 390 has a 5% higher stock GPU c...', '26994', '108%', '87%', '1.1%', '138 fps', '13 months', 'RM 1,039'),
(3, 'graphic', 'Nvidia GTX 980 Ti', 'The new GTX 980 Ti shares the same board as the more expensive Titan-X but with various restrictions including a reduced number of CUDA cores (3072 to 2816, -8.3%). ...', '21830', '114%', '127%', '2%', '221 fps', '14 months', 'RM 1,686'),
(4, 'graphic', 'AMD R9 380', 'The AMD R9 380 succeeds the Tonga based R9 285. The only difference between the two cards is a tiny 2% GPU clock increase on the R9 380 but for the most part, the R9...', '18248', '97.8%', '60.8%', '1%', '113 fps', '13 months', 'RM 706'),
(5, 'graphic', 'AMD RX 480', 'The RX 480 is the first graphics card to feature AMDs new 14nm Polaris architecture. The card is due for release on June 29 (in four days time). We do not have all t...', '13483', '97.3%', '82.1%', '0.9%', '146 fps', '1 months', 'RM 1,115'),
(6, 'graphic', 'Nvidia GTX 1080', 'The GTX 1080 is Nvidia new flagship graphics card. It features the new 16 nm (down from 28 nm) Pascal architecture. This is the first die shrink since the release ...', '1243', '102%', '161%', '1.9%', '266 fps', '1 months', 'RM 2,829'),
(7, 'graphic', 'AMD R9 390X', 'The AMD R9 390X is a rebadged power hungry (350W+) 290X. The 390X has a slightly increased GPU clock speed, a significantly increased memory speed and a higher minim...', '9238', '98.3%', '93.5%', '0.4%', '140 fps', '13 months', 'RM 1,333'),
(8, 'graphic', 'Nvidia GTX 960', 'The new GTX 960 is the third graphics card to feature Nvidia''s Maxwell architecture. When the first two Maxwell cards were released back in September 2014 they compl...', '7317', '82.1%', '51.1%', '3.9%', '86.4 fps', '18 months', 'RM 706'),
(9, 'graphic', 'AMD R9 290X', 'Best Bench: 99% XFX(1682 9395) <br />\r\nWorst Bench: 57% Sapphire(174B E285)', '6723', '67.3%', '88.1%', '0.4%', '136 fps', '33 months', 'RM 2,152'),
(10, 'graphic', 'AMD R9 290', 'Best Bench: 94% Sapphire(174B E283)<br />\r\nWorst Bench: 71% Gigabyte(1458 228E)', '5239', '78.4%', '82.9%', '0.8%', '135 fps', '33 months', 'RM 1,564');

-- --------------------------------------------------------

--
-- Table structure for table `motherboard`
--

CREATE TABLE `motherboard` (
  `motherboard_id` int(11) NOT NULL,
  `motherboard_categories` varchar(20) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `size` varchar(1000) NOT NULL,
  `interface` varchar(1000) NOT NULL,
  `chipset` varchar(1000) NOT NULL,
  `memory_slots` varchar(1000) NOT NULL,
  `video_outputs` varchar(1000) NOT NULL,
  `network_connectivity` varchar(1000) NOT NULL,
  `onboard_audio` varchar(1000) NOT NULL,
  `expansion_slots` varchar(1000) NOT NULL,
  `onboard_storage` varchar(1000) NOT NULL,
  `USB_3` varchar(1000) NOT NULL,
  `USB_31` varchar(1000) NOT NULL,
  `Onboard` varchar(1000) NOT NULL,
  `power_connectors` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motherboard`
--

INSERT INTO `motherboard` (`motherboard_id`, `motherboard_categories`, `price`, `size`, `interface`, `chipset`, `memory_slots`, `video_outputs`, `network_connectivity`, `onboard_audio`, `expansion_slots`, `onboard_storage`, `USB_3`, `USB_31`, `Onboard`, `power_connectors`) VALUES
(1, 'board', '$354.40', 'E-ATX', 'LGA2011-3', 'Intel X99', 'Eight DDR4 DIMM slots supporting up to 64 GB', 'None', 'Intel I218-V<br />Atheros AR8171', 'Realtek ALC1150 via Purity Sound 2', '4 x PCIe 3.0 x16 (x8/x8/16, x8/x8/x8/x8)<br />1 x PCIe 3.0 x8<br />1 x Half-Height mini-PCIe', '6 x SATA 6 Gbps, RAID 0/1/5/10<br />\r\n							4 x S_SATA 6 Gbps, no RAID<br />\r\n							1 x Ultra M.2 (PCIe 3.0 x4)<br />\r\n							1 x M.2 (PCIe 2.0 x4)', '1 x USB 3.0 Type A on-board<br />\r\n							2 x USB 3.0 onboard Headers (via ASM1074 Hub)<br />\r\n							4 x USB 3.0 rear panel Ports (via ASM1074 Hub)<br />\r\n							2 x USB 3.0 rear panel Ports (via PCH)', '', '10 x SATA 6 Gbps Ports<br />\r\n							2 x M.2<br />\r\n							2 x USB 2.0 Headers<br />\r\n							2 x USB 3.0 Headers<br />\r\n							6 x Fan Headers<br />\r\n							1 x HDD Saver Connector<br />\r\n							1 x Thunderbolt Connector<br />\r\n							1 x USB 3.0 Type A on-board Port<br />\r\n							Power/Reset Buttons<br />\r\n							Two-Digit Debug<br />\r\n							Voltage Measurement Points<br />\r\n							OC Buttons<br />\r\n							Menu Button<br />\r\n							Slow Mode/LN2 Mode Switches<br />\r\n							BIOS Selection Switch<br />\r\n							Direct Key Button', '1 x 24-pin ATX<br />\r\n							1 x 8-pin CPU<br />\r\n							1 x 4-pin CPU<br />\r\n							1 x 4-pin Molex for VGA'),
(2, 'board', '$119.99', 'ATX', 'FM2+ / FM2', 'AMD A88X', '4x240pin', 'Integrated AMD Radeon HD 7000/8000 Series', 'Realtek 8111GR', 'Realtek ALC1150', '2 x PCI Express 3.0 x16 Slots <br />\r\n							1 x PCI Express 2.0 x16 slot<br />\r\n							2 x PCI Express 2.0 x1 Slots<br />\r\n							2 x PCI Express Slot', '6 x SATA3 6.0Gb/s', '4 x USB 3.0 Ports', '', '1 x COM port(s) connector(s)<br />\r\n							1 x CPU Fan connector(s) (4 -pin)<br />\r\n							4 x Chassis Fan connector(s) (4 -pin)<br />\r\n							1 x S/PDIF out header(s)<br />\r\n							1 x 24-pin EATX Power connector(s)<br />\r\n							1 x 8-pin ATX 12V Power connector(s)<br />\r\n							1 x Front panel audio connector(s) (AAFP)<br />\r\n							1 x System panel(s) (Q-Connector)<br />\r\n							1 x DirectKey Button(s)<br />\r\n							1 x DRCT header(s)<br />\r\n							1 x MemOK! button(s)<br />\r\n							1 x TPU switch(es)<br />\r\n							1 x EPU switch(es)<br />\r\n							1 x Clear CMOS jumper(s)<br />\r\n							1 x USB BIOS Flashback button(s)', '1 x 24-pin ATX'),
(3, 'board', '$484.99', 'Extended ATX', 'LGA1151', 'Intel Z170', '4x288pin', 'Integrated Graphics Processor', 'Intel I219-V', '', '3 x PCIe 3.0/2.0 x16 (x16 or dual x8 or x8/x4/x4, gray)<br />\r\n							1 x PCIe 3.0/2.0 x16 (x4 mode, gray)<br />\r\n							2 x PCIe 3.0/2.0 x1 (black)', '6 x SATA 6Gb/s port(s)<br />\r\n							4 ports from 2 x SATA Express<br />\r\n							2 x SATA 6Gb/s port(s)<br />\r\n							1 x M.2 x4 Socket 3', '4 x USB 3.0 (blue)', '1 x USB 3.1 (black) Type-C<br />\r\n							3 x USB 3.1 (red) Type-A', '1 x U.2 port<br />\r\n1 x AAFP connector<br />\r\n1 x CPU Fan connector(s) (4-pin)<br />							1 x CPU OPT Fan connector(s) (4-pin)<br />4 x Chassis Fan connector(s) (4-pin)<br />1 x Thunderbolt header(s)<br />1 x 24-pin EATX Power connector(s)<br />							1 x 8-pin ATX 12V Power connector(s)<br />1 x 4-pin ATX 12V Power connector(s)<br />1 x 4-pin EZ_PLUG Power connector(s)<br />1 x System panel(s) (Q-Connector)<br />					1 x 5-pin EXT_FAN(Extension Fan) connector<br />				1 x MemOK! button(s)<br />			1 x Slow Mode switch(es)<br />			9 x ProbeIt Measurement Points<br />		3 x Thermal sensor connector(s)<br />			1 x DRAM channel jumper<br />				1 x Power-on button(s)<br />						1 x Reset button(s)<br />\r\n1 x BIOS Switch button(s)<br />					1 x SLI/CFX button (2/3/4-way adjustments)<br />1 x Water Pump header (4-pin)<br />				1 x LN2 Mode jumper(s)<br />1 x ROG extension (ROG_EXT) header(s)<br />1 x Safe Boot button<br />\r\n1 x ReTry button<br />', '1 x 24-pin ATX'),
(4, 'board', '$369.99', 'ATX', 'LGA1151', 'Intel Z170', '4x288pin', '', 'Intel I219-V', 'ROG SupremeFX 2015', '2 x PCIe 3.0/2.0 x16 (x16 or dual x8, gray)<br />\r\n							1 x PCIe 3.0/2.0 x16 (x4 mode, black)<br />\r\n							3 x PCIe 2.0 x1 (black)<br />\r\n							3 x PCI Express 2.0 x1', '6 x SATA 6Gb/s port(s)by Intel Z170 chipset<br />\r\n							2 x SATA 6Gb/s port(s)by ASMedia ASM1061<br />\r\n							1 x M.2 Socket 3', '8 x USB 3.0 (blue)', '1 x USB 3.1 (red) Type-A<br />\r\n							1 x USB 3.1 (black) Type-C', '1 x U.2 port<br />\r\n							1 x Aura RGB Strip Headers<br />\r\n							1 x CPU Fan connector(s) (4-pin)<br />\r\n							1 x CPU OPT Fan connector(s) (4-pin)<br />\r\n							4 x Chassis Fan connector(s) (4-pin)<br />\r\n							1 x 24-pin EATX Power connector(s)<br />\r\n							1 x 8-pin ATX 12V Power connector(s)<br />\r\n							1 x Front panel connector(s)<br />\r\n							1 x Front panel audio connector(s) (AAFP)<br />\r\n							1 x MemOK! button(s)<br />\r\n							3 x Thermal sensor connector(s)<br />\r\n							1 x Power-on button(s)<br />\r\n							1 x Reset button(s)<br />\r\n							1 x Water Pump header (4-pin)<br />\r\n							1 x LN2 Mode jumper(s)<br />\r\n							1 x ROG extension (ROG_EXT) header(s)<br />\r\n							1 x System panel connector', '1 x 24-pin ATX'),
(5, 'board', '$154.99', 'ATX', 'LGA1151', 'Intel Z170', '4x288pin', 'Integrated Graphics Processor', 'Intel Gigabit LAN', 'None', '2 x PCI Express 3.0 x16 slots (dual at x8 mode)<br />\r\n							1 x PCI Express 3.0 x16 slot (max. at x4 mode)<br />\r\n							3 x PCI Express 3.0 x1 slots', '4 x SATA 6.0 Gb/s ports (gray)<br />\r\n							1 x SATA Express port<br />\r\n							1 x M.2 Socket 3 with M key', '4 x USB 3.0/2.0 ports<br />\r\n							2 x USB 2.0/1.1 ports', '2 x USB 3.1 ports ', '1 x System panel header\r\n							1 x Front panel audio connector (AAFP)<br />\r\n							1 x CPU fan connector (4-pin)<br />\r\n							1 x CPU OPT fan connector (4-pin)<br />\r\n							3 x Chassis Fan connectors (4-pin) <br />\r\n							1 x Thermal sensor header<br />\r\n							1 x COM connector<br />\r\n							1 x TPM header<br />\r\n							1 X CPU_OV<br />\r\n							1 X EXT_FAN<br />\r\n							1 x 24-pin EATX Power connector<br />\r\n							1 x 8-pin EATX 12V Power connector<br />\r\n							1 x ROG extension (ROG_EXT) header(s)<br />\r\n							1 x Clear CMOS jumper (2-pin)', '1 x 24-pin ATX'),
(6, 'board', '$139.99', 'ATX', 'LGA1150', 'Intel Z97', '4x240pin', 'Integrated Graphics Processor supporting a max resolution of 4096x2160', 'Qualcomm Atheros Killer E2201', 'Creative Sound Core 3D', '1 x PCI Express x16 slot, running at x16 (PCIEX16)<br />\r\n							1 x PCI Express x16 slot, running at x8 (PCIEX8)<br />\r\n							3 x PCI Express x1 slots<br />\r\n							2 x PCI Slots', '6 x SATA 6Gb/s, 0/1/5/10', '4 x USB 3.0/2.0 ports<br />\r\n						3 x USB 2.0/1.1 ports', '', '1 x 24-pin ATX main power connector<br />\r\n							1 x 8-pin ATX 12V power connector<br />\r\n							1 x CPU fan header<br />\r\n							3 x system fan headers<br />\r\n							1 x front panel header<br />\r\n							1 x front panel audio header<br />\r\n							1 x serial port header<br />\r\n							1 x Clear CMOS jumper<br />\r\n							1 x power button<br />\r\n							1 x reset button<br />\r\n							1 x Clear CMOS button<br />\r\n							2 x BIOS switchs<br />\r\n							2 x audio gain control switches', '1 x 24-pin ATX'),
(7, 'board', '$189.99', 'ATX', 'LGA1150', 'Intel Z97', '4x240pin', 'Supported only by CPU with integrated graphic', 'Qualcomm Atheros Killer E2201', 'Realtek ALC1150', 'PCI Express 3.0 1x(x16), 1x(x8), 1x(x4)<br />\r\n							PCI Express x16 1x(x4)<br />\r\n							2 x PCI Slots', '6 x SATA 6Gb/s<br />\r\n							1 x SATA Express', '4 x USB 3.0', '', '1 x 24-pin ATX main power connector<br />							1 x 8-pin ATX 12V power connector<br />\r\n1 x 4-pin ATX 12V power connector<br />\r\n1 x OC PEG power connector<br />				1 x CPU fan header<br />						1 x water cooling fan header (CPU_OPT)<br />6 x system fan headers<br />\r\n1 x front panel header<br />\r\n1 x front panel audio header<br />\r\n1 x S/PDIF Out header<br />\r\n1 x serial port header<br />							1 x Clear CMOS jumper<br />\r\n1 x power button<br />1 x reset button<br />	1 x Clear CMOS button<br />\r\n1 x Gear button<br />\r\n1 x OC Turbo button<br />\r\n1 x OC Tag button<br />\r\n1 x OC Trigger switch<br />\r\n1 x CPU BCLK Down button<br />\r\n1 x CPU BCLK Up button<br />\r\n1 x CPU Ratio Down button<br />\r\n1 x CPU Ratio Up button<br />\r\n1 x Memory Safe button<br />							1 x Settings Lock button<br />\r\n1 x Direct to BIOS button<br />\r\n1 x OC DIMM switch<br />\r\n1 x OC PCIe switch<br />\r\n1 x OC Ignition button<br />							1 x Clear Battery button<br />\r\n2 x BIOS switches<br />\r\n1 x onboard voltage mea', '1 x 24-pin ATX'),
(8, 'board', '$210.00', 'ATX', 'LGA1151', 'Intel Z170', '4x288pin', 'None', '1 x Intel GbE LAN chip<br />\r\n							Qualcomm Atheros Killer E2400 chip', 'Creative Sound Core 3D chip', '1 x PCI Express x16 slot, running at x16 (PCIEX16)<br />\r\n							1 x PCI Express x16 slot, running at x8 (PCIEX8)<br />\r\n							1 x PCI Express x16 slot, running at x4 (PCIEX4)<br />\r\n							3 x PCI Express x1 slots', '6 x SATA 6Gb/s connectors<br />\r\n							2 x SATA 6Gb/s connectors supporting AHCI mode only<br />\r\n							3 x SATA Express connectors<br />\r\n							2 x M.2 Socket 3 connectors', '5 x USB 3.0', '1 x USB Type-C port, with USB 3.1 support<br />\r\n							1 x USB 3.1 port', '1 x 24-pin ATX main power connector<br />\r\n							1 x 8-pin ATX 12V power connector<br />\r\n							1 x I/O shield audio LED power connector<br />\r\n							1 x CPU fan header<br />\r\n							1 x water cooling fan header (CPU_OPT)<br />\r\n							3 x system fan headers<br />\r\n							1 x front panel header<br />\r\n							1 x front panel audio header<br />\r\n							1 x Trusted Platform Module (TPM) header<br />\r\n							1 x serial port header<br />\r\n							1 x Clear CMOS jumper<br />\r\n							1 x power button<br />\r\n							1 x reset button<br />\r\n							1 x Clear CMOS button<br />\r\n							1 x ECO button<br />\r\n							1 x OC button<br />\r\n							1 x audio gain control switch<br />\r\n							Voltage Measurement Points<br />\r\n							1 x BIOS switch', '1 x 24-pin ATX'),
(9, 'board', '$284.99', 'ATX', 'LGA1151', 'Intel Z170', '4x288pin', '2 x HDMI port, supporting a maximum resolution of 4096x2160@24Hz<br />\r\n							1 x DisplayPort, supporting a maximum resolution of 4096x2304@24Hz', 'Intel I219-V', 'Realtek ALC1150', '4 x PCIe 3.0 x16 slots (support x16, x8/x8/x4 modes)<br />\r\n							3 x PCIe 2.0 x1 slots', '8 x SATA 6Gb/s<br />\r\n							2 x SATA Express ports (PCIe 3.0 x2)*<br />\r\n							2 x M.2 ports (PCIe 3.0 x4)*', '3 x USB 2.0', '4 x USB 3.1 Gen1 (SuperSpeed USB)<br />\r\n							2 x USB 3.1 Gen2 (SuperSpeed USB 10 Gbps) ports', '1 x 24-pin ATX main power connector<br />\r\n							1 x 8-pin ATX 12V power connector<br />\r\n							1 x 4-pin ATX 12V power connector<br />\r\n							1 x 6-pin ATX 12V power connector<br />\r\n							2 x 4-pin CPU fan connectors<br />\r\n							3 x 4-pin system fan connectors<br />\r\n							1 x Clear CMOS jumper<br />\r\n							1 x Front panel audio connector<br />\r\n							2 x System panel connectors<br />\r\n							1 x TPM module connector<br />\r\n							1 x Chassis Intrusion connector<br />\r\n							9 x V-Check connectorsts<br />\r\n							1 x GO2BIOS button<br />\r\n							1 x Power button<br />\r\n							1 x Reset button<br />\r\n							1 x OC Genie button<br />\r\n							1 x Multi-BIOS switch<br />\r\n							1 x 2-Digit Debug Code LED', '1 x 24-pin ATX'),
(10, 'board', '$159.90', 'ATX', 'LGA1150', 'Intel Z97', '4x240pin', 'Intel HD Graphics 4400/4600', 'Intel I218-V', 'Realtek ALC1150', '2 x PCI Express 3.0 x16 Slots<br />\r\n							1 x PCI Express 2.0 x16 slot<br />\r\n							2 x PCI Express 2.0 x1 Slots<br />\r\n							1 x mini-PCI Express Slot', '6 x SATA3 6.0Gb/s Connectors by Intel Z97<br />\r\n							4 x SATA3 6.0Gb/s Connectors by ASMedia ASM1061<br />\r\n							1 x Ultra M.2 Socket (M2_1)<br />\r\n							1 x M.2_SSD', '2 x USB 3.0 Ports (ASMedia ASM1042AE)<br />\r\n							4 x USB 3.0 Ports (Intel Z97)', '', '1 x COM Port Header<br />\r\n							1 x TPM Header<br />\r\n							1 x Power LED Header<br />\r\n							2 x CPU Fan Connectors (1 x 4-pin, 1 x 3-pin)<br />\r\n							3 x Chassis Fan Connectors (1 x 4-pin, 2 x 3-pin)<br />\r\n							1 x Power Fan Connector (3-pin)<br />\r\n							1 x 24-pin ATX Power Connector<br />\r\n							1 x 8-pin 12V Power Connector<br />\r\n							1 x HDD Saver Connector<br />\r\n							1 x PCIe Power Connector<br />\r\n							1 x Front Panel Audio Connector<br />\r\n							1 x Thunderbolt AIC Connector*<br />\r\n							1 x Dr. Debug with LED<br />\r\n							1 x Power Switch with LED<br />\r\n							1 x Reset Switch with LED<br />\r\n							1 x BIOS Selection Switch', '1 x 24-pin ATX');

-- --------------------------------------------------------

--
-- Table structure for table `processor`
--

CREATE TABLE `processor` (
  `processor_id` int(11) NOT NULL,
  `processor_categories` varchar(50) NOT NULL,
  `processor_name` varchar(50) NOT NULL,
  `processor_socket` varchar(50) NOT NULL,
  `processor_cache` varchar(50) NOT NULL,
  `processor_cores` int(50) NOT NULL,
  `processor_threads` int(50) NOT NULL,
  `processor_pbf` varchar(50) NOT NULL,
  `processor_mtf` varchar(50) NOT NULL,
  `processor_tdp` varchar(50) NOT NULL,
  `processor_mms` varchar(50) NOT NULL,
  `processor_pg` varchar(200) NOT NULL,
  `processor_gbf` varchar(50) NOT NULL,
  `processor_gmdf` varchar(50) NOT NULL,
  `processor_md` varchar(50) NOT NULL,
  `processor_per` varchar(50) NOT NULL,
  `processor_pec` varchar(50) NOT NULL,
  `processor_mpl` int(50) NOT NULL,
  `processor_ocs` varchar(50) NOT NULL,
  `processor_ocsw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `processor`
--

INSERT INTO `processor` (`processor_id`, `processor_categories`, `processor_name`, `processor_socket`, `processor_cache`, `processor_cores`, `processor_threads`, `processor_pbf`, `processor_mtf`, `processor_tdp`, `processor_mms`, `processor_pg`, `processor_gbf`, `processor_gmdf`, `processor_md`, `processor_per`, `processor_pec`, `processor_mpl`, `processor_ocs`, `processor_ocsw`) VALUES
(1, 'process', 'i7-6700K', 'FCLGA1151', '8 MB SmartCache', 4, 8, '4 GHz', '4.2GHz', '91 W', '64 GB', 'Intel HD Graphics 530', '350 MHz', '1.15 GHz', '3 Displays', '3', 'Up to 1x16, 2x8, 1x8+2x4', 16, '4.6 GHz', '4.77 Hz'),
(2, 'process', 'i5-6600K', 'FCLGA1151', '6 MB SmartCache', 4, 4, '3.5 GHz', '3.9 GHz', '91 W', '64 GB', 'Intel HD Graphics 530', '350 MHz', '1.15 GHz', '3 Displays', '3', 'Up to 1x16, 2x8, 1x8+2x4', 16, '4.56 GHz', '4.49 Hz'),
(3, 'process', 'i7-4790K', 'FCLGA1150', '8 MB SmartCache', 4, 8, '4 GHz', '4.4 GHz', '88 W', '32 GB', 'Intel HD Graphics 4600', '350 MHz', '1.25 GHz', '3 Displays', '3', 'Up to 1x16, 2x8, 1x8+2x4', 16, '4.66 GHz', '4.82 Hz'),
(4, 'process', 'i5-4690K', 'FCLGA1150', '6 MB SmartCache', 4, 4, '3.5 GHz', '3.9 GHz', '88 W', '32 GB', 'Intel HD Graphics 4600', '350 MHz', '1.2 GHz', '3 Displays', '3', 'Up to 1x16, 2x8, 1x8+2x4', 16, '4.53 GHz', '4.58 Hz'),
(5, 'process', 'i7-5820K', 'FCLGA2011-3', '15 MB SmartCache', 6, 12, '3.3 GHz', '3.6 GHz', '140 W', '64 GB', 'None', 'None', 'None', 'None', '0', '3.0', 28, '4.32 GHz', '4.51 GHz'),
(6, 'process', 'i7-4770K', 'FCLGA1150', '8 MB SmartCache', 4, 8, '3.5 GHz', '3.9 GHz', '84 W', '32 GB', 'Intel HD Graphics 4600', '350 MHz', '1.25 GHz', '3 Displays', '3', 'Up to 1x16, 2x8, 1x8+2x4', 16, '4.48 GHz', '4.53 GHz'),
(7, 'process', 'i3-6100', 'FCLGA1151', '3 MB SmartCache', 2, 4, '3.7 GHz', 'none', '51 W', '64 GB', 'Intel HD Graphics 530', '350 MHz', '1.05 GHz', '3 Displays', '3.0', 'Up to 1x16, 2x8, 1x8+2x4', 16, '4.37 GHz', '4.48 GHz'),
(8, 'process', 'i5-6500', 'FCLGA1151', '6 MB SmartCache', 4, 4, '3.2 GHz', '3.6 GHz', '65 W', '64 GB', 'Intel HD Graphics 530', '350 MHz', '1.05 GHz', '3 Displays', '3.0', 'Up to 1x16, 2x8, 1x8+2x4', 16, 'none', 'none'),
(9, 'process', 'i5-3570K', 'LGA1155', '6 MB SmartCache', 4, 4, '3.4 GHz', '3.8 GHz', '77 W', '32 GB', 'Intel HD Graphics 4000', '650 MHz', '1.15 GHz', '3 Displays', '3.0', 'Up to 1x16, 2x8, 1x8+2x4', 16, '4.61 GHz', '4.55 GHz');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `register_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `confirmpassword` varchar(1000) NOT NULL,
  `day` int(50) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` int(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `user_level` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`register_id`, `username`, `email`, `password`, `confirmpassword`, `day`, `month`, `year`, `Type`, `user_level`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', '', 0, '', 0, 'a', 1),
(31, 'asf', 'ajsfnj@anjf.sjfj', '$2y$10$bSQjXacOHrjrbtZ20VXIJ.rVqHnCEzLeXIF9SKFZcdWJSzUEG7R/C', '123456789', 16, '5', 1915, 'a', 2),
(32, 'bluh', 'bluhbluhbluh@yahoo.com', '$2y$10$eDrEoAbj8kRJPOrPsRgEeOu1l2342gmX0I0DE97hyDduLlJyJ17o2', '12345678', 14, '8', 1915, 'd', 2),
(33, 'joey', 'joey@hotmail.com', '$2y$10$C2DmJ8JpR.TPF7Nim.4NfOC5NCcUXdS0IKtW5P1JPYMoQkj3yw8NG', 'poiuytre', 29, '10', 2001, 'd', 2),
(34, 'brandon', 'brandon@hotmail.com', '$2y$10$tnMCNfcLwc9ujXBQ80XdMewo4pO/HjE3ZbXniLl1rmV300NqK4nXm', 'poiuytre', 28, '5', 1900, 'd', 2),
(35, 'asjnf', 'skanf@jnajf.jasbf', '$2y$10$L2hqFK7uG8DiQFW1xO.Jpe4nFkh9bsk5R3UWIv8fiXGchDQM3dHAS', 'poiuytre', 14, '10', 2004, 'd', 2),
(36, 'username', 'username@yahoo.com', '$2y$10$g5.SpebDiMVDRigHfQV0Du61X8sQ48bSjeVrkeusBSv8yuO6rsJ4C', '12345678', 16, '7', 2000, 'd', 2);

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `search_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `desp` varchar(100) NOT NULL,
  `categ` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`search_id`, `title`, `desp`, `categ`) VALUES
(1, 'Intel Core i5-6600K', 'cpu1', 'CPU'),
(2, 'Intel Core i7-6700K', 'cpu2', 'CPU'),
(3, 'Intel Core i7-4790K', 'cpu3', 'CPU'),
(4, 'Intel Core i5-4690K', 'cpu4', 'CPU'),
(5, 'Intel Core i7-5820K', 'cpu5', 'CPU'),
(6, 'Intel Core i7-4770K', 'cpu6', 'CPU'),
(7, 'Intel Core i3-6100', 'cpu7', 'CPU'),
(8, 'Intel Core i5-6500', 'cpu8', 'CPU'),
(9, 'Intel Core i5-3570K', 'cpu9', 'CPU'),
(10, 'Intel Core i7-3770K', 'cpu10', 'CPU'),
(11, 'Intel Core i7-6700', 'cpu11', 'CPU'),
(12, 'Intel Core i7-5960X', 'cpu12', 'CPU'),
(13, 'Intel Pentium G3258', 'cpu13', 'CPU'),
(14, 'Intel Core i5-6600', 'cpu14', 'CPU'),
(15, 'AMD FX-6300', 'cpu15', 'CPU'),
(16, 'Intel Core i5-4690', 'cpu16', 'CPU'),
(17, 'Intel Core i7-2600K', 'cpu17', 'CPU'),
(18, 'AMD FX-8370', 'cpu18', 'CPU'),
(19, 'Intel Core i5-4670K', 'cpu19', 'CPU'),
(20, 'Intel Core i7-4790', 'cpu20', 'CPU'),
(21, 'AMD FX-8350', 'cpu21', 'CPU'),
(22, 'Nvidia GTX 970', 'displaycard1', 'displaycards'),
(23, 'AMD R9 390', 'displaycard2', 'displaycards'),
(24, 'Nvidia GTX 980 Ti', 'displaycard3', 'displaycards'),
(25, 'AMD R9 380', 'displaycard4', 'displaycards'),
(26, 'AMD RX 480', 'displaycard5', 'displaycards'),
(27, 'Nvidia GTX 1080', 'displaycard6', 'displaycards'),
(28, 'AMD R9 390X', 'displaycard7', 'displaycards'),
(29, 'Nvidia GTX 960', 'displaycard8', 'displaycards'),
(30, 'AMD R9 290X', 'displaycard9', 'displaycards'),
(31, 'AMD R9 290', 'displaycard10', 'displaycards'),
(32, 'i7-6700K', 'processor1', 'processors'),
(33, 'i5-6600k', 'processor2', 'processors'),
(34, 'i7-4790K', 'processor3', 'processors'),
(35, 'i5-4690K', 'processor4', 'processors'),
(36, 'i7-5820K', 'processor5', 'processors'),
(37, 'i7-4770K', 'processor6', 'processors'),
(38, 'i3-6100', 'processor7', 'processors'),
(39, 'i5-6500', 'processor8', 'processors'),
(40, 'i5-3570K', 'processor9', 'processors'),
(41, 'Asrock X99 OC Formula motherboard', 'asrock X99 oc formula motherboard1', 'motherboards'),
(42, 'ASUS A88X Pro', 'ASUS A88X Pro motherboard2', 'motherboards'),
(43, 'Asus MAXIMUS VIII extreme', 'asus maximus VIII extreme motherboard3', 'motherboards'),
(44, 'Asus MAXIMUS VIII Formula', 'asus maximus VIII formula motherboard4', 'motherboards'),
(45, 'Asus Z170 Pro Gaming', 'asus z170pro motherboard5', 'motherboards'),
(46, 'Gigabyte Z97 Gaming 1 Sniper', 'GA z97 gaming 1 sniper motherboard6', 'motherboards'),
(47, 'Gigabyte Z97X SOC', 'GA Z97X SOCF motherboard7', 'motherboards'),
(48, 'Gigabyte Z170X Gaming 7', 'GA Z170X Gaming 7 motherboard8', 'motherboards'),
(49, 'MSI Z170A Xpower Gaming Titanium', 'msi z170a xpower gaming titanium motherboard9', 'motherboards'),
(50, 'Asrock Z97 extreme6', 'asrock z97 extreme motherboard10', 'motherboards');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `rate_id` int(11) NOT NULL,
  `rate_product` int(11) NOT NULL,
  `rate_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computeraccessorieslist`
--
ALTER TABLE `computeraccessorieslist`
  ADD PRIMARY KEY (`computeraccessorieslist_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`cpu_id`);

--
-- Indexes for table `displaycard`
--
ALTER TABLE `displaycard`
  ADD PRIMARY KEY (`displaycard_id`);

--
-- Indexes for table `motherboard`
--
ALTER TABLE `motherboard`
  ADD PRIMARY KEY (`motherboard_id`);

--
-- Indexes for table `processor`
--
ALTER TABLE `processor`
  ADD PRIMARY KEY (`processor_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`register_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`search_id`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`rate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computeraccessorieslist`
--
ALTER TABLE `computeraccessorieslist`
  MODIFY `computeraccessorieslist_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `cpu`
--
ALTER TABLE `cpu`
  MODIFY `cpu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `displaycard`
--
ALTER TABLE `displaycard`
  MODIFY `displaycard_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `motherboard`
--
ALTER TABLE `motherboard`
  MODIFY `motherboard_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `processor`
--
ALTER TABLE `processor`
  MODIFY `processor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `search_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
