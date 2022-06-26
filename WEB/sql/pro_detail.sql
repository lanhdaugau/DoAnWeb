-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th6 26, 2022 lúc 04:19 AM
-- Phiên bản máy phục vụ: 5.7.33
-- Phiên bản PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `account`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pro_detail`
--

CREATE TABLE `pro_detail` (
  `id` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL,
  `produce_name` text CHARACTER SET utf8 NOT NULL,
  `price` int(11) NOT NULL,
  `classify` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `pro_detail`
--

INSERT INTO `pro_detail` (`id`, `image`, `produce_name`, `price`, `classify`) VALUES
('sp1', 'https://bizweb.dktcdn.net/thumb/grande/100/009/443/products/a-78n.jpg?v=1567473488000', 'Nồi chiên chân không Magic Korea', 699000, 'Nồi chiên'),
('sp10', 'https://bizweb.dktcdn.net/thumb/grande/100/009/443/products/noi-com-dien-long-nieu-magic-a-87-1.jpg?v=1582086125000', 'Nồi cơm điện lòng Niêu Magic A-88', 670000, 'Nồi cơm điện'),
('sp11', 'https://bizweb.dktcdn.net/thumb/grande/100/009/443/products/bep-dien-tu-magic-eco-ac-220-111.png?v=1590632878000', 'Bếp đôi Hồng ngoại và Điện từ AC', 777000, 'Bếp từ'),
('sp12', 'https://bizweb.dktcdn.net/thumb/grande/100/009/443/products/1-54f520d0-8a42-4b4f-81e2-568ff6135750.jpg?v=1605750697660', 'Bếp đôi điện từ Magic Eco AC71', 880000, 'Bếp từ'),
('sp13', 'https://bizweb.dktcdn.net/thumb/grande/100/009/443/products/1-de5bcce2-efbe-4066-9131-9504af52826b.jpg?v=1561345784683', 'Bếp đôi hồng ngoại điện từ Iruka I', 560000, 'Bếp từ'),
('sp14', 'https://bizweb.dktcdn.net/thumb/grande/100/009/443/products/i22-1000x1000px-01.jpg?v=1605947618000g', 'Bếp đôi điện từ- hồng ngoại Magic', 660000, 'Bếp từ'),
('sp2', 'https://bizweb.dktcdn.net/thumb/grande/100/009/443/products/a-78nd.jpg?v=1567473471000', 'Nồi chiên không dầu Iruka I-67', 499000, 'Nồi chiên'),
('sp3', 'https://bizweb.dktcdn.net/thumb/grande/100/009/443/products/a70nt.jpg?v=1574299791000', 'Nồi chiên không dầu Magic Eco', 59900, 'Nồi chiên'),
('sp4', 'https://bizweb.dktcdn.net/thumb/grande/100/009/443/products/a70nd-93eb2315-ee25-4ef1-8132-9f0c0ff16ba6.jpg?v=1567473572000', 'Nồi chiên chân không Magic Korea', 39900, 'Nồi chiên'),
('sp5', 'https://bizweb.dktcdn.net/thumb/grande/100/009/443/products/i58d.jpg?v=1574299744890', 'Nồi chiên không dầu Magic A-70', 89900, 'Nồi chiên'),
('sp6', 'https://bizweb.dktcdn.net/thumb/grande/100/009/443/products/1-a271121a-f74c-40df-9f4b-6c4c324829fd.jpg?v=1544546311000', 'Nồi cơm điện lòng Niêu Magic A-88', 999000, 'Nồi cơm điện'),
('sp7', 'https://bizweb.dktcdn.net/thumb/grande/100/009/443/products/1-0cbaae89-95e1-4877-9bfa-5a4d476c1943.png?v=1602829725000', 'Nồi cơm tách đường Magic Korea', 990000, 'Nồi cơm điện'),
('sp8', 'https://bizweb.dktcdn.net/thumb/grande/100/009/443/products/a-510.png?v=1575250924000', 'Nồi cơm tách đường Magic A-511', 990000, 'Nồi cơm điện'),
('sp9', 'https://bizweb.dktcdn.net/thumb/grande/100/009/443/products/a511-1.jpg?v=1578014650000', 'Nồi cơm điện lòng Niêu Magic A-87', 780000, 'Nồi cơm điện');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `pro_detail`
--
ALTER TABLE `pro_detail`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
