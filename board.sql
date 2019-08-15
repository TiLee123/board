-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.3.16-MariaDB
-- PHP 版本： 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `directory`
--
CREATE DATABASE IF NOT EXISTS `directory` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `directory`;

-- --------------------------------------------------------

--
-- 資料表結構 `admins`
--

CREATE TABLE `admins` (
  `adminId` int(11) NOT NULL,
  `account` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `admins`
--

INSERT INTO `admins` (`adminId`, `account`, `pwd`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'titi', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- 資料表結構 `boards`
--

CREATE TABLE `boards` (
  `boardId` int(11) NOT NULL,
  `boardTitle` varchar(20) DEFAULT NULL,
  `itemId` int(11) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `boardName` varchar(250) DEFAULT NULL,
  `updateTime` datetime NOT NULL DEFAULT '2019-08-13 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `boards`
--

INSERT INTO `boards` (`boardId`, `boardTitle`, `itemId`, `content`, `boardName`, `updateTime`) VALUES
(1, '元祖雪餅提貨券9折優惠', 1, '本廣告商品規格、顏色、價格、贈品如與網站刊登不符，請以員購網刊登之資訊與購物車實際結帳為準。\r\n服務電話：02-2956-6668(週一至週五 09:00-12:00  13:00-17:30) 客服信箱：i4u_service@cht.com.tw', 'eugene_lee', '2019-08-14 14:12:44'),
(2, 'NISSAN-108年8月份促銷專案', 1, '30萬高額零利率三低輕鬆購專案實施中(低頭款、低月付、零利率) 首年日付30元 ... 在國內進口品牌的8 月份促銷活動部份，除了Ford 與Nissan 維持與國產車款相同、皆至8 月10 號截止的促販方案', 'gary_donovan', '2019-08-14 14:13:20'),
(3, '本會拜會荷蘭教職員工會簡報檔', 2, '本次國際教學專業高峰會議一波三折，不過總算是踏出了第一步，本會由理事長欽旭老師、秘書長雅菁老師、外事部南嬿老師代表出席，同時並情商全金聯蘇怡之副秘書長擔任全程隨行翻譯與國際事務協調。\r\n \r\n此行我們也趁空檔拜會荷蘭最大的教師工會--荷蘭教職員工會(AOb)，檢附拜會AOb的簡報檔，供大家參考。', 'steven_wells', '2019-08-14 14:13:56'),
(4, '地理科新聞稿暨試題評論', 3, '著重鄉土地理，生活化題型多，例如內科塞車問題、「彰化市為何沒有百貨公司？」、土地公廟對聯等皆入題。', 'ray_moore', '2019-08-14 14:11:02'),
(5, '公民與社會科新聞稿暨試題評論', 3, '試題難易度為中間偏易，基本題型為主，少見高層次評量題型，僅有第38-40題組以臉書動態留言作為解讀訊息的素材，題型較為創新，圖表判讀題有8-10題，不少試題有考古題的影子，如第1、6、26、33、41題等。', 'paula_gates', '2019-08-14 14:10:30');

-- --------------------------------------------------------

--
-- 資料表結構 `departments`
--

CREATE TABLE `departments` (
  `departmentId` int(11) NOT NULL,
  `departmentName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `departments`
--

INSERT INTO `departments` (`departmentId`, `departmentName`) VALUES
(1, 'Corporate'),
(2, 'Engineering'),
(3, 'Sales'),
(4, 'Marketing'),
(5, 'Accounting');

-- --------------------------------------------------------

--
-- 資料表結構 `employees`
--

CREATE TABLE `employees` (
  `employeeId` int(11) NOT NULL,
  `firstName` varchar(30) DEFAULT NULL,
  `lastName` varchar(30) DEFAULT NULL,
  `managerId` int(11) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `departmentId` int(11) DEFAULT NULL,
  `officePhone` varchar(45) DEFAULT NULL,
  `cellPhone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `picture` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `employees`
--

INSERT INTO `employees` (`employeeId`, `firstName`, `lastName`, `managerId`, `title`, `departmentId`, `officePhone`, `cellPhone`, `email`, `city`, `picture`) VALUES
(1, 'James', 'King', 0, 'President and CEO', 1, '617-000-0001', '781-000-0001', 'jking@fakemail.com', 'Boston, MA', 'james_king.jpg'),
(2, 'Julie', 'Taylor', 1, 'VP of Marketing', 4, '617-000-0002', '781-000-0002', 'jtaylor@fakemail.com', 'Boston, MA', 'julie_taylor.jpg'),
(3, 'Eugene', 'Lee', 1, 'CFO', 5, '617-000-0003', '781-000-0003', 'elee@fakemail.com', 'Boston, MA', 'eugene_lee.jpg'),
(4, 'John', 'Williams', 1, 'VP of Engineering', 2, '617-000-0004', '781-000-0004', 'jwilliams@fakemail.com', 'Boston, MA', 'john_williams.jpg'),
(5, 'Ray', 'Moore', 1, 'VP of Sales', 3, '617-000-0005', '781-000-0005', 'rmoore@fakemail.com', 'Boston, MA', 'ray_moore.jpg'),
(6, 'Paul', 'Jones', 4, 'QA Manager', 2, '617-000-0006', '781-000-0006', 'pjones@fakemail.com', 'Boston, MA', 'paul_jones.jpg'),
(7, 'Paula', 'Gates', 4, 'Software Architect', 2, '617-000-0007', '781-000-0007', 'pgates@fakemail.com', 'Boston, MA', 'paula_gates.jpg'),
(8, 'Lisa', 'Wong', 2, 'Marketing Manager', 4, '617-000-0008', '781-000-0008', 'lwong@fakemail.com', 'Boston, MA', 'lisa_wong.jpg'),
(9, 'Gary', 'Donovan', 2, 'Marketing', 4, '617-000-0009', '781-000-0009', 'gdonovan@fakemail.com', 'Boston, MA', 'gary_donovan.jpg'),
(10, 'Kathleen', 'Byrne', 5, 'Sales Representative', 3, '617-000-0010', '781-000-0010', 'kbyrne@fakemail.com', 'Boston, MA', 'kathleen_byrne.jpg'),
(11, 'Amy', 'Jones', 5, 'Sales Representative', 3, '617-000-0011', '781-000-0011', 'ajones@fakemail.com', 'Boston, MA', 'amy_jones.jpg'),
(12, 'Steven', 'Wells', 4, 'Software Architect', 2, '617-000-0012', '781-000-0012', 'swells@fakemail.com', 'Boston, MA', 'steven_wells.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `items`
--

CREATE TABLE `items` (
  `itemId` int(11) NOT NULL,
  `itemName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `items`
--

INSERT INTO `items` (`itemId`, `itemName`) VALUES
(1, '會員福利'),
(2, '工會動態'),
(3, '新聞槁');

-- --------------------------------------------------------

--
-- 資料表結構 `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adminId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `orders`
--

INSERT INTO `orders` (`orderId`, `email`, `adminId`) VALUES
(3, 'admin123@mail.com', 1),
(4, 'ti@mail.com', 2);

-- --------------------------------------------------------

--
-- 資料表結構 `pushs`
--

CREATE TABLE `pushs` (
  `pushId` int(11) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `adminId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `pushs`
--

INSERT INTO `pushs` (`pushId`, `tel`, `adminId`) VALUES
(1, '0912123456', 1),
(2, '0988666777', 2);

-- --------------------------------------------------------

--
-- 資料表結構 `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `tickets`
--

INSERT INTO `tickets` (`id`, `title`, `amount`) VALUES
(1, 'Love Song 1990', 1000);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminId`);

--
-- 資料表索引 `boards`
--
ALTER TABLE `boards`
  ADD PRIMARY KEY (`boardId`),
  ADD KEY `fk_items_boards` (`itemId`);

--
-- 資料表索引 `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`departmentId`);

--
-- 資料表索引 `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employeeId`),
  ADD KEY `fk_departments_employees` (`departmentId`);

--
-- 資料表索引 `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemId`);

--
-- 資料表索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`);

--
-- 資料表索引 `pushs`
--
ALTER TABLE `pushs`
  ADD PRIMARY KEY (`pushId`);

--
-- 資料表索引 `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admins`
--
ALTER TABLE `admins`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `boards`
--
ALTER TABLE `boards`
  MODIFY `boardId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pushs`
--
ALTER TABLE `pushs`
  MODIFY `pushId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `boards`
--
ALTER TABLE `boards`
  ADD CONSTRAINT `fk_items_boards` FOREIGN KEY (`itemId`) REFERENCES `items` (`itemId`);

--
-- 資料表的限制式 `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `fk_departments_employees` FOREIGN KEY (`departmentId`) REFERENCES `departments` (`departmentId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
