-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-12-11 09:39:14
-- 服务器版本： 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `books`
--

CREATE TABLE `books` (
  `bookid` int(10) UNSIGNED NOT NULL,
  `BookName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `author` varchar(50) CHARACTER SET utf8 NOT NULL,
  `press` varchar(50) CHARACTER SET utf8 NOT NULL,
  `type` varchar(50) CHARACTER SET utf8 NOT NULL,
  `number` int(11) UNSIGNED NOT NULL,
  `time` int(11) NOT NULL,
  `likenum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `books`
--

INSERT INTO `books` (`bookid`, `BookName`, `author`, `press`, `type`, `number`, `time`, `likenum`) VALUES
(1, '水浒传', '213', '13112', '3131213', 132, 1511770522, 0),
(2, '西游记', '21312', '313221', '2311321', 121, 1511770539, 0),
(3, '三国演义', '21132', '12311232', '123321', 123, 1511770560, 0),
(4, '百年孤独', '132', '321', '312', 122, 1511772441, 0),
(5, '傲慢与偏见', '21', '31231', '123', 132132, 1511772469, 0),
(6, '悲惨世界', '213', '132', '1231', 11, 1511772500, 0),
(7, '边城', '211321', '231321', '312312', 321321, 1511772516, 0),
(8, '方向', '12321', '13212', '321321', 333, 1511772539, 0),
(9, '工匠精神', '2112112', '231312', '231132', 132231, 1511772558, 0),
(10, '还魂记', '231321', '213321', '132132', 312231, 1511772584, 0),
(11, '逻辑学导论', '21231', '132321', '213123', 31221, 1511772602, 0),
(12, '人类简史', '23131', '321321', '3123', 11, 1511772619, 0),
(13, '失控', '213123', '12321', '1231', 121, 1511772643, 0),
(14, '苏菲的世界', '2132', '21213', '32112', 312, 1511772661, 0),
(15, '素黑', '213123', '132213', '31212', 2112, 1511772683, 0),
(16, '天才只为责任', '21321', '213231', '321123', 123231, 1511772726, 0),
(17, '我心深处', '21311', '312321', '3221321', 3123, 1511772748, 0),
(18, '夜色人生', '12312', '31213', '123231', 231232, 1511772770, 0),
(19, '战争与和平', '214', '213123', '321', 123, 1511772789, 0),
(20, '指匠', '21312', '3112', '31212', 311, 1511772815, 0),
(21, '现在的哲学', '21232', '323223', '2312332', 11, 1511923687, 0),
(22, '爱在疼痛时', '31221', '32132', '123213', 22, 1511923809, 0),
(23, 'sdsad', 'sadsa', 'asda', '123', 111, 1512895520, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `books`
--
ALTER TABLE `books`
  MODIFY `bookid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
