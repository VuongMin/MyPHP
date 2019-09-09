-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 09, 2018 lúc 05:16 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopnicklol`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `acount`
--

CREATE TABLE `acount` (
  `MAAC` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `ID` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RANK` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `KHUNG` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SOTUONG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `acount`
--

INSERT INTO `acount` (`MAAC`, `ID`, `RANK`, `KHUNG`, `SOTUONG`) VALUES
('AC1', 'ID1', 'Vàng', 'Kim cương', 45),
('AC2', 'ID2', 'Vàng ', 'Bạch kim', 121),
('AC3', 'ID3', 'Bạch kim', 'Kim cương', 233),
('AC4', 'ID4', 'Cao thủ', 'Thách đấu', 222),
('AC5', 'ID5', 'Bạc', 'Vàng', 45),
('AC6', 'ID6', 'Kim cương', 'Đồng', 68),
('AC7', 'ID2', 'Bạc', 'Bạc', 98);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaodich`
--

CREATE TABLE `giaodich` (
  `MAGD` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `ID` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TIMEGD` date DEFAULT NULL,
  `GIA` int(11) DEFAULT NULL,
  `SOAC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giaodich`
--

INSERT INTO `giaodich` (`MAGD`, `ID`, `TIMEGD`, `GIA`, `SOAC`) VALUES
('GD2', 'ID2', '2018-10-25', 370000, 2),
('GD3', 'ID3', '2018-06-10', 300000, 1),
('GD4', 'ID4', '2018-01-01', 500000, 1),
('GD5', 'ID5', '2018-12-10', 350000, 2),
('GD6', 'ID6', '2018-05-05', 200000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitrangphuc`
--

CREATE TABLE `loaitrangphuc` (
  `Maloai` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `MAAC` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `THELOAI` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TEN` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TINHTRANG` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `ID` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `NAME` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NICKFACE` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DIENTHOAI` char(9) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`ID`, `NAME`, `NICKFACE`, `DIENTHOAI`) VALUES
('ID1', 'Tú Nguyễn', 'Tú nguyễn', '012345678'),
('ID2', 'Hồng', 'Hồng Nguễn', '012365488'),
('ID3', 'Vuongmin', 'Minboy Mai', '012321000'),
('ID4', 'Min', 'Min Min', '012333333'),
('ID5', 'Nam\"s', 'Nam', '023333333'),
('ID6', 'Huy', 'Huy', '000000000'),
('ID7', 'Diễm', 'Diễm', '016838782'),
('ID9', 'Sang', 'sang nguễn', '012331122');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `acount`
--
ALTER TABLE `acount`
  ADD PRIMARY KEY (`MAAC`),
  ADD KEY `fk_ac` (`ID`);

--
-- Chỉ mục cho bảng `giaodich`
--
ALTER TABLE `giaodich`
  ADD PRIMARY KEY (`MAGD`),
  ADD KEY `fk_gd` (`ID`);

--
-- Chỉ mục cho bảng `loaitrangphuc`
--
ALTER TABLE `loaitrangphuc`
  ADD PRIMARY KEY (`Maloai`),
  ADD KEY `fk_loaitrangphuc` (`MAAC`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`ID`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `acount`
--
ALTER TABLE `acount`
  ADD CONSTRAINT `fk_ac` FOREIGN KEY (`ID`) REFERENCES `thanhvien` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `giaodich`
--
ALTER TABLE `giaodich`
  ADD CONSTRAINT `fk_gd` FOREIGN KEY (`ID`) REFERENCES `thanhvien` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `loaitrangphuc`
--
ALTER TABLE `loaitrangphuc`
  ADD CONSTRAINT `fk_loaitrangphuc` FOREIGN KEY (`MAAC`) REFERENCES `acount` (`MAAC`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
