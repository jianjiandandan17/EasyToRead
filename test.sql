-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-11-28 03:09:35
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
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `books`
--

INSERT INTO `books` (`bookid`, `BookName`, `author`, `press`, `type`, `number`, `time`) VALUES
(1, '水浒传', '213', '13112', '3131213', 132, 1511770522),
(2, '西游记', '21312', '313221', '2311321', 121, 1511770539),
(3, '三国演义', '21132', '12311232', '123321', 123, 1511770560),
(4, '百年孤独', '132', '321', '312', 122, 1511772441),
(5, '傲慢与偏见', '21', '31231', '123', 132132, 1511772469),
(6, '悲惨世界', '213', '132', '1231', 11, 1511772500),
(7, '边城', '211321', '231321', '312312', 321321, 1511772516),
(8, '方向', '12321', '13212', '321321', 333, 1511772539),
(9, '工匠精神', '2112112', '231312', '231132', 132231, 1511772558),
(10, '还魂记', '231321', '213321', '132132', 312231, 1511772584),
(11, '逻辑学导论', '21231', '132321', '213123', 31221, 1511772602),
(12, '人类简史', '23131', '321321', '3123', 11, 1511772619),
(13, '失控', '213123', '12321', '1231', 121, 1511772643),
(14, '苏菲的世界', '2132', '21213', '32112', 312, 1511772661),
(15, '素黑', '213123', '132213', '31212', 2112, 1511772683),
(16, '天才只为责任', '21321', '213231', '321123', 123231, 1511772726),
(17, '我心深处', '21311', '312321', '3221321', 3123, 1511772748),
(18, '夜色人生', '12312', '31213', '123231', 231232, 1511772770),
(19, '战争与和平', '214', '213123', '321', 123, 1511772789),
(20, '指匠', '21312', '3112', '31212', 311, 1511772815);

-- --------------------------------------------------------

--
-- 表的结构 `dianzan`
--

CREATE TABLE `dianzan` (
  `id` int(11) NOT NULL,
  `DianZan` int(11) NOT NULL,
  `Cai` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `aindex` varchar(50) NOT NULL,
  `goodplus` int(11) NOT NULL,
  `good` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `pic`
--

CREATE TABLE `pic` (
  `id` int(11) NOT NULL,
  `pic_name` varchar(60) NOT NULL,
  `pic_url` varchar(60) NOT NULL,
  `love` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `pic_ip`
--

CREATE TABLE `pic_ip` (
  `id` int(11) NOT NULL,
  `pic_id` int(11) NOT NULL,
  `ip` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `post_set`
--

CREATE TABLE `post_set` (
  `post_id` int(11) NOT NULL COMMENT '文章ID',
  `zan_count` int(11) NOT NULL COMMENT '总赞数量',
  `update_at` int(10) NOT NULL COMMENT '更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `post_user`
--

CREATE TABLE `post_user` (
  `post_id` int(11) NOT NULL COMMENT '文章ID',
  `user_id` int(11) NOT NULL COMMENT '用户iD',
  `create_at` int(10) NOT NULL COMMENT '点赞时间',
  `update_at` int(10) NOT NULL COMMENT '点赞更新时间',
  `status` tinyint(1) NOT NULL COMMENT '点赞状态',
  `list_update_at` int(10) NOT NULL COMMENT '点赞更新时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `time` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `sex` varchar(50) CHARACTER SET utf8 NOT NULL,
  `class` varchar(50) CHARACTER SET utf8 NOT NULL,
  `studentid` int(16) NOT NULL,
  `title` varchar(50) CHARACTER SET gbk NOT NULL,
  `content` tinytext CHARACTER SET gbk NOT NULL,
  `lastdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `time`, `name`, `sex`, `class`, `studentid`, `title`, `content`, `lastdate`) VALUES
(1, 'user1', '123', 1504526750, '刘德华', '男', '156', 152938329, '冰雨', '冷冷的冰雨在脸上胡乱的拍，暖暖的眼泪和白云混成一块。', '0000-00-00'),
(2, 'user2', '123', 1504528870, '林俊杰', '男', '155', 15492492, '小酒窝', '小酒窝长睫毛，迷人的无可救药。', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `dianzan`
--
ALTER TABLE `dianzan`
  ADD KEY `num` (`num`),
  ADD KEY `aindex` (`aindex`);

--
-- Indexes for table `pic`
--
ALTER TABLE `pic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pic_ip`
--
ALTER TABLE `pic_ip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `books`
--
ALTER TABLE `books`
  MODIFY `bookid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- 使用表AUTO_INCREMENT `pic`
--
ALTER TABLE `pic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `pic_ip`
--
ALTER TABLE `pic_ip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
