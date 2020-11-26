-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3309
-- Thời gian đã tạo: Th10 23, 2020 lúc 09:22 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufactures`
--

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE IF NOT EXISTS `manufactures` (
  `manu_id` int(11) NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manu_img` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`manu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`, `manu_img`) VALUES
(1, 'Iphone', 'iphone.jpg'),
(2, 'Samsung', 'samsung.jpg'),
(3, 'Vsmart', 'vsmart.jpg'),
(4, 'Oppo', 'oppo.jpg'),
(5, 'Xiaomi', 'xiaomi.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `pro_images` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `manu_id` (`manu_id`),
  KEY `type_id` (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `pro_images`, `description`, `feature`, `created_at`) VALUES
(1, 'iPhone 12', 1, 1, 22990000, 'iphone12.jpg', 'Apple đã quyết định giữ nguyên thiết kế notch \"tai thỏ\" quen thuộc cho màn hình iPhone 12, nhưng phần notch đã được tinh giản nhỏ gọn lại nhằm tạo thêm tỷ lệ hiển thị hình ảnh trên màn hình. Về kích thước, màn hình của máy độ phân giải 2532x 1170pixels và có kích thước 6.1 inch, nhỏ hơn so với iPhone 12 Pro Max (6.7 inch).', 1, '2020-11-08 19:30:43'),
(2, 'Apple Macbook Pro 13 Touch Bar i5 1.4 256GB', 1, 2, 35000000, 'macbook.jpg', 'Thế hệ Macbook Pro 13 2020 đã được ra mắt với nâng cấp mạnh mẽ về cấu hình. Máy vẫn giữ nguyên thừa hưởng những ưu điểm đặc trưng như màn hình siêu nét, thiết kế cao cấp cùng thanh Touch Bar cho khả năng tương tác tuyệt vời với các ứng dụng. Laptop hứa hẹn sẽ đem lại cho Apple những lời khen.', 0, '2020-11-08 19:32:57'),
(3, 'Apple iPad Pro 11', 1, 3, 21000000, 'ipadpro.jpg', 'Bắt đầu được giới thiệu từ lần đầu vào năm 2015, iPad Pro là dòng tablet cao cấp nhất của Apple. Ở phiên bản 2018, iPad Pro đã sở hữu màn hình viền mỏng cùng hệ thống nhận diện khuôn mặt Face ID. Cho đến hai năm sau, Apple cho ra mắt iPad Pro 11 WiFi 2020 128gb được nâng cấp mạnh mẽ hơn về hiệu năng và camera.', 1, '2020-11-08 19:34:02'),
(4, 'Apple AirPods Pro', 1, 4, 5600000, 'airpod.jpg', 'Mẫu AirPods xuất hiện lần đầu vào năm 2016, sau nhiều nâng cấp về thiết kế vào cấu hình, mẫu tai nghe không dây ngày càng được hoàn thiện. Mới đây, Apple đã công bố mẫu tai nghe AirPods mới nhất – tai nghe bluetooth Apple Airpods Pro – với thiết kế mới cùng nhiều tính năng mới.', 1, '2020-11-08 19:35:44'),
(5, 'Apple Watch Series 6', 1, 5, 13500000, 'applewatch.jpg', 'Theo Gizmodo, cơ quan quản lý sáng chế và nhãn hiệu của Hoa Kỳ (USPTO) mới đây đã công bố đơn đăng ký sáng chế số 20200033815 với chủ đơn là Apple Inc cho một thiết bị với tên gọi \"Đồng hồ với cảm biến quang học cho phép người dùng nhập liệu\". Giới phân tích nhận định, nhiều khả năng đây chính là thế hệ Apple Watch thứ 6.', 1, '2020-11-08 19:38:18'),
(6, 'Samsung Galaxy S20 Ultra', 2, 1, 24450000, 'sss20.jpg', 'Samsung S20 Ultra – Flagship thiết kế độc đáo, cấu hình cao\r\nGalaxy S20 Ultra là flagship mới của dòng Samsung Galaxy S sẽ được Samsung giới thiệu vào đầu năm 2020. Samsung Galaxy S20 Ultra sẽ là phiên bản cao cấp nhất bên cạnh phiên bản cơ bản Samsung S20 và Samsung S20 Plus. S20 Ultra sẽ được trang bị những tính năng tuyệt vời. Dung lượng pin lớn, màn hình được trang bị tần số quét 120Hz, camera chính có độ phân giải 108mp sẽ là những tính năng nổi bật nhất.', 1, '2020-11-08 19:39:56'),
(7, 'Samsung Galaxy Z Fold 2', 2, 1, 50000000, 'glxfold.jpg', 'Không giống bất kỳ chiếc điện thoại nào khác, Samsung Galaxy Z Fold2 5G sở hữu màn hình gập kỳ diệu mà mỗi khi mở màn hình, bạn đã mở ra tương lai của ngành công nghiệp smartphone.', 1, '2020-11-08 19:42:19'),
(8, 'Samsung Galaxy Tab S7 Plus', 2, 3, 23990000, 'sstab.jpg', 'Máy tính bảng giờ đây đã trở thành một sản phẩm công nghệ quen thuộc và quan trọng đối với rất nhiều người. Ngày qua ngày, người dùng đều mong muốn nhu cầu sử dụng của họ sẽ tốt hơn và đòi hỏi cao hơn về một chiếc tablet Samsung. Thấu hiểu điều đó, tập đoàn Samsung đã cho ra mắt máy tính bảng Samsung Galaxy Tab S7 và Tab S7 Plus. Đây được xem là chiếc tablet được trang bị những tính năng hiện đại bậc nhất cùng thời lượng pin cực khủng, giúp giải quyết nỗi lo hụt pin cho cả ngày sử dụng.', 0, '2020-11-08 19:43:24'),
(9, 'Samsung Galaxy Buds Live', 2, 4, 3290000, 'tainghess.jpg', 'Mô tả sản phẩm: Samsung Galaxy Buds Live', 0, '2020-11-08 19:45:46'),
(10, 'Samsung Galaxy Watch Active 2', 2, 5, 8000000, 'sswatch.jpg', 'Samsung Galaxy Watch Active 2 44mm Vỏ Thép', 0, '2020-11-08 19:46:46'),
(11, 'Vsmart Aris 6G 64GB', 3, 1, 6500000, 'vs1.jpg', 'Vsmart Aris là chiếc điện thoại được sản xuất với sự hợp tác của Vinsmart - trực thuộc tập đoàn Vingroup nổi tiếng và Qualcomm. Máy sở hữu sự cải tiến về thiết kế so với các dòng smartphone trước đây của Vinsmart. Không chỉ thế, máy này còn sở hữu nhiều tính năng đặc sắc mà nổi bật và bảo mật lượng tử hiện đại. Ngoài ra, bạn cũng có thể tham khảo điện thoại Vsmart Aris Pro với camera ẩn dưới màn hình độc đáo.', 0, '2020-11-08 19:48:27'),
(12, 'Vsmart Joy 4 4GB', 3, 1, 3290000, 'vs2.jpg', 'Vsmart Aris là chiếc điện thoại được sản xuất với sự hợp tác của Vinsmart - trực thuộc tập đoàn Vingroup nổi tiếng và Qualcomm. Máy sở hữu sự cải tiến về thiết kế so với các dòng smartphone trước đây của Vinsmart. Không chỉ thế, máy này còn sở hữu nhiều tính năng đặc sắc mà nổi bật và bảo mật lượng tử hiện đại. Ngoài ra, bạn cũng có thể tham khảo điện thoại Vsmart Aris Pro với camera ẩn dưới màn hình độc đáo.', 0, '2020-11-08 19:49:18'),
(13, 'Vsmart Active 3', 3, 1, 2990000, 'vs3.jpg', 'Vsmart Aris là chiếc điện thoại được sản xuất với sự hợp tác của Vinsmart - trực thuộc tập đoàn Vingroup nổi tiếng và Qualcomm. Máy sở hữu sự cải tiến về thiết kế so với các dòng smartphone trước đây của Vinsmart. Không chỉ thế, máy này còn sở hữu nhiều tính năng đặc sắc mà nổi bật và bảo mật lượng tử hiện đại. Ngoài ra, bạn cũng có thể tham khảo điện thoại Vsmart Aris Pro với camera ẩn dưới màn hình độc đáo.', 0, '2020-11-08 19:50:43'),
(14, 'Vsmart Joy 3', 3, 1, 2590000, 'vs4.jpg', 'Điện thoại Vsmart Joy 3 4GB là một trong những sản phẩm bán chạy tại Cellphones. Mua Vsmart Joy 3 4GB ngay để nhận giá tốt nhất cùng nhiều ưu đãi hấp dẫn. Ngoài ra, bạn cũng có thể tham khảo thêm Vsmart Joy 3 2GB.', 0, '2020-11-08 19:51:46'),
(15, 'Vsmart Aris Pro', 3, 1, 9000000, 'vs5.jpg', 'Vừa qua tại triển lãm \"Make in Vietnam\" do Bộ Thông tin và Truyền thông tổ chức, hãng smartphone Việt - Vsmart - đã trình làng sản phẩm mới nhất mang tên Vsmart Aris Pro. Trang bị bộ vi xử lý Qualcomm Snapdragon 730G, điện thoại Vsmart này sẽ là chiếc smartphone thương mại mà tập đoàn VinGroup muốn mang đến cho người dùng trong thời gian tới.', 0, '2020-11-08 19:52:35'),
(16, 'Oppo Find X2', 4, 1, 17890000, 'oppo1.jpg', 'Oppo Find X2  và Oppo Find X2 Pro là chiếc điện thoại thuộc phân khúc cao cấp vừa được Oppo ra mắt, tiếp nối sự thành công vang dội của người tiền nhiệm Oppo Find X. Đây là mẫu sản phẩm điện thoại Oppo được thừa hưởng những công nghệ mới và tốt nhất ở thời điểm hiện tại so với các đối thủ cùng phân khúc.', 1, '2020-11-08 19:54:12'),
(17, 'Oppo Reno 3 Pro', 4, 1, 9950000, 'oppo2.jpg', 'Phiên bản nâng cấp của điện thoại OPPO Reno3 với tên gọi OPPO Reno 3 Pro đã chính thức được hãng OPPO trình làng vào tháng 3/2020. Với thiết kế nổi bật, hiệu năng mạnh mẽ cùng camera đột phá, Reno 3 Pro hứa hẹn sẽ là chiếc smartphone hấp dẫn dành cho các tín đồ nhiếp ảnh.', 1, '2020-11-08 19:55:07'),
(18, 'Oppo Reno 4', 4, 1, 7290000, 'oppo3.jpg', 'Reno là một trong những dòng smartphone nổi tiếng của thương hiệu OPPO. Sau sự thành công vang dội của các thế hệ trước, mới đây hãng vừa tiếp tục cho ra mắt Oppo Reno 4 cùng với Reno 4 Pro tại thị trường Việt Nam. Điểm nổi bật của bộ đôi này chính là thiết kế đẹp mắt, sang trọng, khả năng sạc nhanh siêu tốc cùng hệ thống camera sau ấn tượng. Và trong thời gian sắp tới, điện thoại Oppo Reno 5 hứa hẹn cũng sẽ mang đến nhiều sự đột phá trên thị trường smartphone.', 0, '2020-11-08 19:56:13'),
(19, 'Oppo Watch 41mm Wifi (OW19W6)', 4, 4, 5990000, 'oppowatch.jpg', 'Màn hình cong tràn thời trang, thời lượng pin lên tới 21 ngày, sạc nhanh Watch VOOC, hỗ trợ đầy đủ các tính năng tập luyện và theo dõi sức khỏe, OPPO Watch chính là tất cả những gì bạn cần cho một cuộc sống năng động.', 0, '2020-11-08 19:58:20'),
(20, 'Oppo A52', 4, 1, 5000000, 'a52.jpg', 'Nối tiếp thành công của của sản phẩm trước đó, OPPO tiếp tục cho ra mắt mẫu điện thoại OPPO A52. Mẫu điện thoại thiết kế sang trọng, màn hình hiển thị lớn cùng dung lượng pin ấn tượng.', 0, '2020-11-08 19:59:42'),
(21, 'Xiaomi Mi 10T Pro', 5, 1, 12990000, 'mi1.jpg', 'Nếu bạn là một Mifan hay là một người dùng yêu công nghệ thì chắc chắn bạn sẽ không thể bỏ qua Xiaomi Mi 10T Pro. Với nhiều tính năng đặc biệt và công nghệ chụp ảnh cao cấp, Xiaomi đang dần đánh bóng tên tuổi mình hơn với chiếc smartphone này.', 1, '2020-11-08 20:02:38'),
(22, 'Xiaomi Mi Note 10 Pro', 5, 1, 13500000, 'mi2.jpg', 'Xiaomi Mi Note 10 Pro vừa được ra mắt chính thức tại Việt Nam vào 9/12/2019 vừa qua cùng với phiên bản thấp hơn là Mi Note 10. Đây là mẫu smartphone đầu tiên trên thế giới được trang bị camera góc rộng có độ phân giải lên đến 108MP, ngoài ra máy còn sở hữu thiết kế đẹp mắt, viên pin siêu khủng cùng cấu hình mạnh mẽ.\r\n\r\nTham khảo ngay điện thoại Mi 10T Pro cũng với camera 108MP nhưng cấu hình mạnh hơn với Snapdragon 865.', 0, '2020-11-08 20:02:26'),
(23, 'Xiaomi Mi Note 10 Lite', 5, 1, 8250000, 'mi3.jpg', 'Sau sự ra mắt thành công của hàng loạt smartphone cận cao cấp giá rẻ với tên Lite, Xiaomi tiếp tục trình làng phiên bản giảm cấp của chiếc điện thoại cao cấp nhất là Xiaomi Mi Note 10 Lite. Điện thoại được trang bị vi xử lý Snapdragon 730 mạnh nhất của Qualcomm và đặc biệt, được trang bị đến tận 5 camera sau.', 0, '2020-11-08 20:03:29'),
(24, 'Xiaomi earphones 2 ', 5, 4, 1000000, 'mi4.jpg', 'Bạn là một người đam mê âm nhạc và đang tìm cho mình một chiếc tai nghe nhỏ gọn để thoải mái tận hưởng âm thanh sau những giờ làm việc mệt mỏi. Hãy chọn ngay chiếc tai nghe không dây Xiaomi earphones 2. Thiết kế nhỏ gọn tiện lợi, chất âm trung thực sống động hứa hẹn sẽ mang tới cho người dùng không gian âm nhạc tuyệt vời nhất.', 0, '2020-11-08 20:04:57'),
(25, 'Xiaomi Mi Band 5', 5, 5, 790000, 'mi5.jpg', 'Khi nói đến đồng hồ thông minh thì Xiaomi là cái tên không thể không nghĩ đến. Các thiết bị của hãng không chỉ đẹp, mang tính năng động mà còn rất bền bỉ và luôn mang đến những trải nghiệm tuyệt vời nhất cho người dùng. Để nối tiếp thành công của dòng Xiaomi Mi Band, hãng đã tiếp tục cho ra mắt sản phẩm vòng đeo tay thông minh Mi Band 5 hứa hẹn mang tới những trải nghiệm thật hoàn hảo cho người dùng.', 1, '2020-11-08 20:05:37');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE IF NOT EXISTS `protypes` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'Cellphone'),
(2, 'Laptop'),
(3, 'Tablet'),
(4, 'Accessories'),
(5, 'Smart Watch');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
