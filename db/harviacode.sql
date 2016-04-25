-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2016 at 02:06 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harviacode`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(15) DEFAULT NULL,
  `product_price` varchar(15) DEFAULT NULL,
  `prodcut_images` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `prodcut_images`) VALUES
(1, 'hello', 'hello', 'hello'),
(2, 'test', 'test', 'test'),
(3, 'sdcsd', 'wwwwwwwwwwwwww', 'eee'),
(4, 'sepatu', '102999', 'gambar.png'),
(5, 'sepatu', '102999', 'gambar12.jpg'),
(6, 'sepatu', '102999', 'gambar1234.jpg'),
(7, 'sepatu', '102999', 'gambar.png'),
(8, 'sepatu', '102999', 'gambar12.jpg'),
(9, 'sepatu', '102999', 'gambar1234.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `productdet_id` int(11) NOT NULL,
  `productdet_images` text,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`productdet_id`, `productdet_images`, `product_id`) VALUES
(92, 'big_hjp-4745RM.jpg', 12),
(93, 'RTdaErLT9.png', 12),
(94, '62aabf12120421_562578e727b97.png', 12);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(5, 'hello', '098f6bcd4621d373cade4e832627b4f6'),
(2, 'budi', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(6, 'hani', '76e105c3a61db1b3f13207774aeccc3c'),
(7, 'andree', '48b9ed905114d16ef2a35099c0f80b3d'),
(8, 'jono', '42867493d4d4874f331d288df0044baa'),
(9, 'joki', '11395b0f8c08d37074d8a67d9da57da7'),
(10, 'hello', '5d41402abc4b2a76b9719d911017c592'),
(11, 'anisa', '40cc8f68f52757aff1ad39a006bfbf11'),
(12, 'ami', '6c5b7de29192b42ed9cc6c7f635c92e0'),
(13, 'tya', 'b626b66df044ee336f452bd5d88debb5'),
(14, 'Natasa', 'fb46c0bc4059fc173613f9f2de4bc009'),
(15, 'Wilian', '4aecf2d55c3f6c322bab4f44c7b4d68d'),
(16, 'Nita', '258032876bbe393c3dce59c1f7b5c839'),
(17, 'Ita', '2d00d03f16d8f3679a0bb82709352f4f'),
(18, 'Bayu', 'd0c6a909f539307f0f60282674009e31'),
(19, 'Sinur', 'f8e3a0b80a6ea7d69ecedf581866d3b8'),
(20, 'James', 'd52e32f3a96a64786814ae9b5279fbe5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`productdet_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `productdet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
