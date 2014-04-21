-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 04 月 12 日 03:34
-- 服务器版本: 5.5.9
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `lib`
--
CREATE DATABASE IF NOT EXISTS `lib` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lib`;

-- --------------------------------------------------------

--
-- 表的结构 `lib_book`
--

CREATE TABLE IF NOT EXISTS `lib_book` (
  `bno` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `category` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `press` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `author` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `total` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`bno`),
  UNIQUE KEY `bno` (`bno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `lib_book`
--

INSERT INTO `lib_book` (`bno`, `category`, `title`, `press`, `year`, `author`, `price`, `total`, `stock`) VALUES
('00000008', '教科书', 'just do it', '浙大', 1993, 'xin', '12.00', 1, 1),
('00000929', '计算机', 'SQL Server 2000数据库管理与开发', '电子工业出版社', 2012, '王庆建', '32.00', 20, 18),
('00000949', '文学', 'Little Prince', 'Amercian Public', 1943, 'Antoine', '39.90', 7, 2),
('00000956', '文学', 'Gone with the Wind', 'PekingYanshan', 1998, 'Margaret Mitchell', '19.80', 13, 11),
('00000966', '计算机', 'skin', '浙江大学出版社', 2003, 'John Smith', '20.00', 5, 0),
('00000967', '小说', '乞力马扎罗的雪', '译林出版社', 2012, '海明威', '14.00', 20, 14),
('00001929', '文学', 'TheFlower', '浙江大学出版社', 2012, 'JohnSmith', '20.00', 15, 13),
('00001949', '文学', 'Harry Potter', 'Amercian Public', 2000, 'J K Rowling', '964.40', 15, 7),
('00001956', '文学', 'Life Among the Lowly', 'CentralPress', 2008, 'Harriet Stowe', '23.00', 8, 7),
('00001966', '计算机', 'ligal high', 'nihong', 2013, 'You Know Who', '198.65', 12, 2),
('00001967', '小说', '丧钟为谁而鸣', '译林出版社', 2012, '海明威', '26.00', 30, 15),
('00002949', '文学', 'Broken Heart', 'Amercian Public', 1950, 'Anymous', '49.90', 9, 3),
('00003949', '文学', 'Broken hand', 'Amercian Public', 1951, 'Anymous', '29.90', 11, 6),
('00004949', '文学', 'Broken Hair', 'Amercian Public', 1951, 'Anymous', '69.90', 17, 5),
('00005949', '文学', 'Broken mind', 'Amercian Public', 1952, 'Anymous', '79.20', 3, 3),
('00006949', '文学', 'Fixed Heart', 'Amercian Public', 1953, 'Anymous', '19.90', 5, 3),
('00007949', '文学', 'Fixed Hand', 'Amercian Public', 1954, 'Anymous', '79.90', 6, 1),
('12345670', 'computer', 'css', '浙大', 2011, 'wang', '123.00', 1, 1),
('12345679', 'Computer Science', 'Computer Architecture', 'rrr', 2004, 'eee', '90.00', 2, 1),
('12788888', 'Computer Science', 'Computer data', 'rrr', 2014, 'ieee', '90.00', 3, 3);

-- --------------------------------------------------------

--
-- 表的结构 `lib_borrow`
--

CREATE TABLE IF NOT EXISTS `lib_borrow` (
  `cno` char(7) COLLATE utf8_unicode_ci NOT NULL,
  `bno` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `borrow_date` date NOT NULL,
  `return_date` date DEFAULT NULL,
  `operator` int(11) NOT NULL,
  KEY `cno` (`cno`),
  KEY `cno_2` (`cno`),
  KEY `bno` (`bno`),
  KEY `cno_3` (`cno`),
  KEY `operator` (`operator`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `lib_borrow`
--

INSERT INTO `lib_borrow` (`cno`, `bno`, `borrow_date`, `return_date`, `operator`) VALUES
('1234567', '12345679', '2014-04-09', '2014-04-09', 2),
('1234567', '12345679', '2014-04-09', '2014-04-09', 2),
('1234567', '12345679', '2014-04-09', '2014-04-09', 2),
('0000001', '12345679', '2014-04-09', '2014-04-09', 3),
('0000001', '12345679', '2014-04-09', NULL, 3);

-- --------------------------------------------------------

--
-- 表的结构 `lib_card`
--

CREATE TABLE IF NOT EXISTS `lib_card` (
  `cno` char(7) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `type` char(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cno`),
  UNIQUE KEY `cno` (`cno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `lib_card`
--

INSERT INTO `lib_card` (`cno`, `name`, `department`, `type`) VALUES
('0000001', 'gaotao', 'cs', 'U'),
('0104406', 'Clear', '数字媒体', 'U'),
('1104406', 'Lisa', '计算机学院', 'U'),
('1234567', 'xinhao', 'cs', 'U'),
('1234568', 'xinhao', 'ee', 'U');

-- --------------------------------------------------------

--
-- 表的结构 `lib_user`
--

CREATE TABLE IF NOT EXISTS `lib_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tel` varchar(20) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `lib_user`
--

INSERT INTO `lib_user` (`uid`, `username`, `password`, `tel`) VALUES
(1, 'root', '', 'xinhao'),
(2, 'root', 'xin', '18072911191'),
(3, 'xin', 'xin', '12345678900');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
