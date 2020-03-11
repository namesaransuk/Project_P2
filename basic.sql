-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 07:35 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basic`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL COMMENT 'ชื่อจริง',
  `lastname` varchar(255) NOT NULL COMMENT 'นามสกุล',
  `username` varchar(255) NOT NULL COMMENT 'ชื่อผู้ใช้',
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL COMMENT 'รูปภาพ',
  `email` varchar(255) NOT NULL COMMENT 'อีเมล์',
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `firstname`, `lastname`, `username`, `password`, `picture`, `email`, `status`) VALUES
(0, 'admin', 'admin', 'admin', 'admin', '', '', 'admin'),
(1, 'Saransuk', 'Yimyong', 'saransuk', '12345678', '1570183421.jpg', 'asd@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `oproducts`
--

CREATE TABLE `oproducts` (
  `product_code` int(11) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `product_num` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_pond` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `p_detail` varchar(255) NOT NULL,
  `p_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_img`, `p_detail`, `p_price`) VALUES
(1, 'ครีมชีสช็อกโกแลต', 'ครีมชีสช็อกโกแลต.png', 'เนื้อเค้กสูตรพิเศษ สลับกับชั้นครีมชีส รสหอม หวาน มัน ตกแต่งด้วยช็อกโกแลต และผงโกโก้คุณภาพเยี่ยม ที่คัดมาอย่างดีเพื่อคุณ', 720),
(2, 'คาโรล่ามาร์เบิ้ลช็อกโกแลต', 'คาโรล่ามาร์เบิ้ลช็อกโกแลต.png', 'ลิ้มลองความนุ่มละมุนของเค้กเนื้อบัตเตอร์ ช็อกโกแลตแท้สูตรเฉพาะ  สลับชั้นครีมละมุน 3 ชั้น เคลือบแข็งด้วยช็อกโกแลตแท้ เขียนลายเส้นด้วยไวท์ช็อกโกแลต', 720),
(3, 'ชูวี่สตรอเบอร์รี่', 'ชูวี่สตรอเบอร์รี่.png', 'สัมผัสรสชาติของเค้กผลไม้เนื้อบัตเตอร์สลับชั้นครีม 4  ชั้น ที่มีส่วนผสมของแยมสตรอเบอร์รี่และระหว่างชั้นครีมมีผลไม้ตระกูลเบอร์รี่ต่าง ๆ ทั้งบลูเบอร์รี่ ราสเบอร์รี่ แคลนเบอร์รี่ และบิงเชอร์รี่ รสหวานซ่อนเปรี้ยว ประดับตกแต่งหน้าเค้กด้วยแยมสตรอเบอร์รี่ฉ่ำ  ผลเ', 780),
(4, 'ครีมมี่ บัตเตอร์', 'ครีมมี่บัตเตอร์.png', 'ลิ้มลองความกลมกล่อมของเค้กเนยสดสูตรพิเศษ เนื้อเค้กบัตเตอร์สลับชั้นครีม 3 ชั้น หอมกรุ่นกลิ่นเนยสด แต่งหน้าเค้กด้วยครีมดอกกุหลาบสวยงาม', 660),
(5, 'คุกกี้แอนด์ครีม', 'คุกกี้แอนด์ครีม.png', 'สัมผัสความอร่อยที่ลงตัวในหนึ่งเดียว ของเค้กเนื้อบัตเตอร์วนิลา สลับชั้นครีมคุกกี้โอริโอช็อกโกแลต  ผสมผสานความหอมหวานของ   คุกกี้ ช็อกโกแลต ประดับตกแต่งหน้าเค้กด้วยผงโกโก้   อัลมอนด์ และโรยรอบๆเค้กด้วยช็อกโกแลตชิพรสเลิศ', 720),
(6, 'ดับเบิ้ลช็อกโกแลตฟัดจ์', 'ดับเบิ้ลช็อกโกแลตฟัดจ์.png', 'ที่สุดแห่งความเนียนนุ่มของเนื้อเค้กช็อกโกแลต  ผสานรสชาติละมุน นุ่มลิ้นของช็อกโกแลตฟัดจ์ เนื้อชิฟฟ่อน สลับชั้นครีมช็อกโกแลต 3 ชั้น ประดับด้วยเชอร์รี่สีแดงเชื่อมเข้ากันอย่างลงตัว', 720),
(7, 'คอฟฟี่ เรซิ่น', 'คอฟฟี่เรซิ่น.png', 'เนื้อเค้กบัตเตอร์วนิลา หอมกรุ่นกลิ่นกาแฟ ผสมผสานความหวานของลูกเกดชั้นเยี่ยม เหล้ารำเลิศรส แต่งหน้าเค้กด้วยอัลมอนด์ สไลด์ สด อบ กรอบ หอม ทุกสัมผัส', 700),
(8, 'เจนัว', 'เจนัว.png', 'เนื้อเค้กสปองจ์เนียนนุ่มสลับชั้นครีม 3 ชั้น โรยหน้าเค้กด้วยอัลมอนด์เคลือบคาราเมลอบกรอบ สัมผัสถึงความกรอบมันหวานฉ่ำ ละมุนทุกคำที่ลิ้มลอง', 720),
(9, 'บีทแครอท', 'บีทแครอท.png', 'เค้กบัตเตอร์เนื้อแน่น สัมผัสรสชาติความอร่อย ที่ผสานคุณค่าเบต้าแคโรทีน ของแครอท  พร้อมความกรอบมันของวอลนัท และลูกเกดชั้นเยี่ยมที่ผสมผสาน เข้ากันได้อย่างลงตัว เนื้อครีมหวานซ่อนเปรี้ยวนุ่มละมุนทุกเนื้อสัมผัส', 660);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_code` int(11) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `product_num` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_pond` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oproducts`
--
ALTER TABLE `oproducts`
  ADD PRIMARY KEY (`product_code`),
  ADD KEY `product_name` (`product_name`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_code`),
  ADD UNIQUE KEY `product_name_2` (`product_name`),
  ADD UNIQUE KEY `product_code` (`product_code`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_name` (`product_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oproducts`
--
ALTER TABLE `oproducts`
  MODIFY `product_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_code` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
