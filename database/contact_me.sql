-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-01-10 16:27:29
-- 伺服器版本: 10.1.26-MariaDB
-- PHP 版本： 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `40447010s`
--

-- --------------------------------------------------------

--
-- 資料表結構 `contact_me`
--

CREATE TABLE `contact_me` (
  `id` int(11) NOT NULL,
  `Random` int(2) NOT NULL,
  `code` int(2) NOT NULL,
  `Q_id` text COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `other` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 資料表的匯出資料 `contact_me`
--

INSERT INTO `contact_me` (`id`, `Random`, `code`, `Q_id`, `email`, `other`) VALUES
(1, 1, 1, '17', 'wen860806@gmail.com', 'æ²’æœ‰è¯¶'),
(2, 0, 0, '1', '123@123', ''),
(3, 1, 0, '1', '123@123', ''),
(4, 1, 0, '1', '123@123', '');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `contact_me`
--
ALTER TABLE `contact_me`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `contact_me`
--
ALTER TABLE `contact_me`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
