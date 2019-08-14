-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-01-10 16:27:20
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
-- 資料表結構 `ask`
--

CREATE TABLE `ask` (
  `id` int(11) NOT NULL,
  `question` varchar(105) COLLATE utf8_bin NOT NULL,
  `A1` varchar(15) COLLATE utf8_bin NOT NULL,
  `N1` int(11) DEFAULT NULL,
  `A2` varchar(15) COLLATE utf8_bin NOT NULL,
  `N2` int(11) NOT NULL,
  `A3` varchar(15) COLLATE utf8_bin NOT NULL,
  `N3` int(11) NOT NULL,
  `A4` varchar(15) COLLATE utf8_bin NOT NULL,
  `N4` int(11) NOT NULL,
  `Random` varchar(4) COLLATE utf8_bin NOT NULL,
  `code` varchar(4) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 資料表的匯出資料 `ask`
--

INSERT INTO `ask` (`id`, `question`, `A1`, `N1`, `A2`, `N2`, `A3`, `N3`, `A4`, `N4`, `Random`, `code`) VALUES
(1, 'weather?', 'sunny', 10, 'cloudy', 3, 'rainy', 5, 'windy', 4, 'DKXM', '1234'),
(8, 'ç”šéº¼æ°´æžœçš„å¤–è¡¨çœ‹èµ·ä¾†é¡è‰²æ˜¯ç´…çš„?', 'è¥¿ç“œ', 10, 'è˜‹æžœ', 0, 'é¦™è•‰', 0, 'è‘¡è„', 0, 'SZQ0', '0000'),
(10, 'çŒœæ‹³', 'å‰ªåˆ€', 1, 'çŸ³é ­', 1, 'å¸ƒ', 0, 'æˆ‘ä¸€å®šè´ï¼Œ', 0, '02RQ', '0000'),
(11, 'ä½ æ˜¯å“ªè£¡äºº?', 'åŒ—éƒ¨ã€‚=D', 1, 'ä¸­éƒ¨. XD', 0, 'è¥¿éƒ¨ï¼Œå¹³åŽŸ', 0, 'æ±éƒ¨,é¢æµ·', 0, 'TR4U', '0000'),
(12, 'å¯’å‡è¦åšç”šéº¼?', 'ç¡è¦º', 0, 'å¯¦ç¿’', 0, 'æ‰“å·¥', 0, 'çŽ©è€', 0, 'C94L', '0000'),
(13, 'test1', 'a', 0, 'b', 0, 'c', 0, 'd', 0, '5VXW', '0000'),
(14, 'test2', '1', 0, '2', 0, '3', 0, '4', 0, 'QY7X', '0000'),
(16, 'æ—©å®‰', 'å¾ˆæ™šäº†', 1, 'åˆå®‰', 0, 'æ™šå®‰', 0, 'å®‰å®‰', 0, 'VG0D', '0000'),
(17, 'ä¸Š', 'a', 1, 's', 0, 'w', 0, 'd', 0, 'C7K1', '1111');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `ask`
--
ALTER TABLE `ask`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `ask`
--
ALTER TABLE `ask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
