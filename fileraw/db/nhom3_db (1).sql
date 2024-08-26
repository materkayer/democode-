-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 31, 2021 lúc 04:09 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom3_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khuyen_tai`
--

CREATE TABLE `tbl_khuyen_tai` (
  `khuyen_tai_id` int(11) NOT NULL,
  `ten_khuyen_tai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `anh_minh_hoa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gia_tien` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_khuyen_tai`
--

INSERT INTO `tbl_khuyen_tai` (`khuyen_tai_id`, `ten_khuyen_tai`, `anh_minh_hoa`, `gia_tien`) VALUES
(1, 'GRE EARRING', '123', '129.000đ'),
(2, 'SMALL EARRING ', '123', '129.000đ'),
(3, '2T EARRING', '123', '149.000đ'),
(4, 'BENZI EARRING ', '123', '149.000đ'),
(5, 'SMILE EARRING ', '123', '119.00đ'),
(6, 'BATCH EARRING', '123', '149.000đ'),
(7, 'CORNER EARRING', '123', '189.000đ'),
(8, 'KAMENRA EARRING', '123', '169.000đ'),
(9, 'Khuyên tai tròn kẹp vành Carmen cá tính', '123', '29.000đ'),
(10, 'CJ25 EARDROP', '123', '229.000đ'),
(11, 'SCREW EARRING', '123', '149.000đ'),
(12, 'RETO EARRING', '123', '149.000đ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nguoi_dung`
--

CREATE TABLE `tbl_nguoi_dung` (
  `nguoi_dung_id` int(11) NOT NULL,
  `ten_nguoi_dung` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `so_dien_thoai` int(20) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nguoi_dung`
--

INSERT INTO `tbl_nguoi_dung` (`nguoi_dung_id`, `ten_nguoi_dung`, `dia_chi`, `so_dien_thoai`, `email`, `mat_khau`, `ghi_chu`) VALUES
(1, 'Hà Thị Nguyễn', 'Hải Phòng', 978567891, 'nguyen123@gmail.com', '333', 'thân quen'),
(2, 'Trần Thị Huệ', 'Hà Nội', 965345098, 'hue111@gmail.com', '111', 'thân quen'),
(3, 'Nguyễn Thị Hồng Phượng', 'Hưng Yên', 978678456, 'phuong222@gmail.com', '222', 'thân quen'),
(4, 'Nguyễn Quang Huy', 'Hải Dương', 964234987, 'huy333@gmail.com', '333', 'thân quen'),
(5, 'Trần Phương Thảo', 'Thái Nguyên', 965259121, 'thao555@gmail.com', '555', 'thân quen');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhan`
--

CREATE TABLE `tbl_nhan` (
  `nhan_id` int(11) NOT NULL,
  `ten_nhan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `anh_minh_hoa` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gia_tien` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhan`
--

INSERT INTO `tbl_nhan` (`nhan_id`, `ten_nhan`, `anh_minh_hoa`, `gia_tien`) VALUES
(1, 'WATER RING', '123', '100.000đ'),
(2, 'LUCY RING', '123', '50.000đ'),
(3, 'VANDA RING', '123', '149.000đ'),
(4, 'FETTER RING', '123', '199.000đ'),
(5, 'D FLY RING', '123', '159.000đ'),
(6, 'TENCY RING', '123', '199.000đ'),
(7, 'LESS RING', '123', '129.000đ'),
(8, 'SUN-MOON RING', '123', '220.000đ'),
(9, '4T RING', '123', '189.00đ'),
(10, 'MOUTAINS', '123', '149.000đ'),
(11, 'Nhân Nam xích Elas Ring Phong cách Hiphop màu đen bạc', '123', '38.000đ'),
(12, 'Nhẫn nam 2W phong cách Hiphop', '123', '39.000đ'),
(13, 'Nhẫn đôi Meteor Ring vĩ sao đính đá và sao chổi vĩnh hằng', '123', '69.000đ'),
(14, 'Nhẫn nam nữ trơn Basic Plain Ring màu bạc', '123', '29.000đ'),
(15, 'Nhẫn bạc thời trang Plain Ring bản nhỏ mỏng', '123', '19.000đ'),
(16, 'Nhẫn nam hình vân mây Cloudy Ring', '123', '39.000đ'),
(17, 'RT RING', '123', '149.000đ'),
(18, 'REN RING', '123', '149.000đ'),
(19, 'KAMENRA STONE RING', '123', '159.000đ'),
(20, 'ROMAN RING', '123', '159.000đ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_that_lung`
--

CREATE TABLE `tbl_that_lung` (
  `that_lung_id` int(11) NOT NULL,
  `ten_that_lung` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `anh_minh_hoa` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gia_tien` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_that_lung`
--

INSERT INTO `tbl_that_lung` (`that_lung_id`, `ten_that_lung`, `anh_minh_hoa`, `gia_tien`) VALUES
(1, 'CC BELT', '123', '60.000đ'),
(2, 'OMG BELT', '123', '80.000đ'),
(3, 'JM BELT', '123', '229.000đ'),
(4, 'DG BELT', '123', '229.000đ'),
(5, 'SK BELT', '123', '249.000đ'),
(6, 'BL BELT', '123', '229.000đ'),
(7, 'FOR D BELT', '123', '249.000đ'),
(8, 'OVAN BELT', '123', '269.000đ'),
(9, 'MECY BELT', '123', '219.000đ'),
(10, 'SIDE BELT ', '123', '199.000đ'),
(11, 'Thắt lưng Unisex dây nịt lưng da bò ForD màu đen', '123', '116.000đ'),
(12, 'TC BELT', '123', '249.000đ'),
(13, 'CK BELT', '134', '249.000đ'),
(14, 'MIZ BELT', '123', '279.000đ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_vong_co`
--

CREATE TABLE `tbl_vong_co` (
  `vong_co_id` int(11) NOT NULL,
  `ten_vong_co` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `anh_minh_hoa` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gia_tien` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_vong_co`
--

INSERT INTO `tbl_vong_co` (`vong_co_id`, `ten_vong_co`, `anh_minh_hoa`, `gia_tien`) VALUES
(1, 'MR CHAIN', '4t.jpg', '180.000đ'),
(2, 'MS CHAIN', '123', '70.000đ'),
(3, 'ICON CHAIN', '123', '169.000đ'),
(4, 'CARMEN CHAIN', '123', '189.000đ'),
(5, 'SIW CHAIN', '123', '149.000đ'),
(6, 'MAS CHAIN', '123', '199.000đ'),
(7, 'SMILE CHAIN', '123', '189.000đ'),
(8, 'CUBA CHAIN ', '123', '169.000đ'),
(9, 'FEATHER CHAIN', '123', '219.000đ'),
(10, 'DRAGON CHAIN', '123', '189.000đ'),
(11, 'Vòng cổ Titan Samurai Chain Mặt quỷ', '123', '89.000đ'),
(12, 'Dây chuyền SAZ Chains màu bạc', '123', '89.000đ'),
(13, 'Dây chuyền nam Plume Chain lông vũ nhỏ', '123', '65.000đ'),
(14, 'Dây chuyền nam Scepter màu bạc đen', '123', '55.000đ'),
(15, 'Dây chuyền Headphone Chain màu bạc', '123', ' 62.000đ'),
(16, 'Dây chuyền Titan hình chữ thập HIKI Chains', '123', '29.000đ'),
(17, 'Dây chuyền Nam 2T màu Bạc cao cấp cá tính', '123', '45.000đ'),
(18, 'Dây chuyền nam mặt nạ màu bạc', '123', '69.000đ'),
(19, 'Dây chuyền nam MAS 2 dây thiên thần', '123', '89.000đ'),
(20, 'Dây chuyền nam Zodiac Chain Vĩ sao lấp lánh màu vàng bạc\r\n', '123', '79.000đ'),
(21, 'Dây chuyền Basic trơn màu bạc', '123', '39.000đ'),
(22, 'Dây chuyền Doe68 Chain Titan', '123', '80.000đ'),
(23, 'Dây chuyền chuỗi trơn Basic màu bạc', '123', '19.000đ'),
(24, 'Dây chuyền Unisex hình giày Nike Jordan Chains', '123', '29.000đ'),
(25, 'FOOTBALL CHAIN', '123', '169.000đ'),
(26, 'BUFFALO CHAIN', '123', '189.000đ'),
(27, 'R CHAIN', '123', '149.000đ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_vong_tay`
--

CREATE TABLE `tbl_vong_tay` (
  `vong_tay_id` int(11) NOT NULL,
  `ten_vong_tay` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `anh_minh_hoa` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gia_tien` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_vong_tay`
--

INSERT INTO `tbl_vong_tay` (`vong_tay_id`, `ten_vong_tay`, `anh_minh_hoa`, `gia_tien`) VALUES
(1, 'BUM BRACELET', '123', '120.000đ'),
(2, 'SAM BRACELET', '123', '99.000đ'),
(3, 'ST BRACELET', '123', '179.000đ'),
(4, 'OT BRACELET', '123', '179.000đ'),
(5, 'KAMERA BRACELET', '123', '169.000đ'),
(6, 'CROSS BRACELET', '123', '189.000đ'),
(7, 'SHACKLET BRACELET', '123', '149.000đ'),
(8, 'SMOOTH BRACELET', '123', '149.000đ'),
(9, 'ALWAY IS MY HEART BRACELET', '123', '169.000đ'),
(10, 'KARA BRACELET', '123', '249.000đ'),
(11, 'Vòng tay cá voi may mắn thể hiện cá tính', '123', '45.000đ'),
(12, 'Lắc tay Cuban Streetwear Kara', '123', '99.000đ'),
(13, 'Lắc tay Cuban Nam OT Streetwear Hiphop', '123', '99.000đ'),
(14, 'LEAF BRACELET', '123', '169.000đ'),
(15, 'BARBWIRE BRACELET', '123', '169.000đ'),
(16, 'RV BRACELET', '123', '159.00đ'),
(17, 'ZIRCON BRACELET', '123', '159.000đ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_khuyen_tai`
--
ALTER TABLE `tbl_khuyen_tai`
  ADD PRIMARY KEY (`khuyen_tai_id`);

--
-- Chỉ mục cho bảng `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  ADD PRIMARY KEY (`nguoi_dung_id`);

--
-- Chỉ mục cho bảng `tbl_nhan`
--
ALTER TABLE `tbl_nhan`
  ADD PRIMARY KEY (`nhan_id`);

--
-- Chỉ mục cho bảng `tbl_that_lung`
--
ALTER TABLE `tbl_that_lung`
  ADD PRIMARY KEY (`that_lung_id`);

--
-- Chỉ mục cho bảng `tbl_vong_co`
--
ALTER TABLE `tbl_vong_co`
  ADD PRIMARY KEY (`vong_co_id`);

--
-- Chỉ mục cho bảng `tbl_vong_tay`
--
ALTER TABLE `tbl_vong_tay`
  ADD PRIMARY KEY (`vong_tay_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_khuyen_tai`
--
ALTER TABLE `tbl_khuyen_tai`
  MODIFY `khuyen_tai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_nguoi_dung`
--
ALTER TABLE `tbl_nguoi_dung`
  MODIFY `nguoi_dung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_nhan`
--
ALTER TABLE `tbl_nhan`
  MODIFY `nhan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tbl_that_lung`
--
ALTER TABLE `tbl_that_lung`
  MODIFY `that_lung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `tbl_vong_co`
--
ALTER TABLE `tbl_vong_co`
  MODIFY `vong_co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `tbl_vong_tay`
--
ALTER TABLE `tbl_vong_tay`
  MODIFY `vong_tay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
