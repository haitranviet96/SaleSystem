-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 02, 2017 lúc 09:39 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banhang2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `permission` int(11) NOT NULL DEFAULT '0' COMMENT '0 is seller 1 is admin',
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `permission`, `email`, `address`, `phone`) VALUES
(1, 'Hai Tran', '123456', 1, 'haitran@gmail.com', 'hanoi', 123456789),
(3, 'bestseller', '123456', 0, 'bezt@gmail.com', 'USA\r\n', 2132131232),
(4, 'buianhvu', '123456', 1, NULL, NULL, NULL),
(5, 'bao', '123', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`) VALUES
(40, 'HEADPHONES AND EARPHONES'),
(39, 'SHAMPOO'),
(38, 'FRUIT'),
(42, 'GLASSES'),
(43, 'CLOTHES');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(255) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `phone`, `address`, `type`) VALUES
(1, 'Tráº§n Viá»‡t Háº£i', 'hiddsuusuusj@gmail.com', '987654321', 'Má»¹ ÄÃ¬nh', 3),
(2, 'BÃ¹i Anh VÅ©', 'jijijijijijijijij@hust.com', '147852369', 'HoÃ ng Mai', 1),
(3, 'BÃ¹i ThiÃªn Báº£o', 'thathu@qwer.com', '369852147', 'Háº£i PhÃ²ng', 1),
(5, 'Tha Thu', 'jijijijiijijij@gmail.com', '01478789789', 'ha noi', 2),
(6, 'John Cena', 'john@hihi.com', '4744444744', 'USA', 3),
(7, 'Na Tra', 'natra@gmail.cc', '123987654', 'o dau con lau moi noi', 2),
(8, 'ThÃºy Kiá»u', 'kieuxinhgai@thathinh.com', '025548999999', 'USA', 2),
(9, 'ThÃºy VÃ¢n', 'vandamdang@thathinh.com', '8444755444', 'USA', 1),
(10, 'Kim Trá»ng', 'trongtrang@thathinh.com', '441269621', 'USA', 3),
(11, 'SÆ¡n Tinh', 'moutaintinh@thathinh.com', '2358664045', 'USA', 1),
(12, 'Thá»§y Tinh', 'watertinh@thathinh.com', '03323232222', 'USA', 1),
(14, 'Kim Jong Un', 'unun@boom.com', '3235457898', 'Korea', 2),
(28, 'Báº±ng Kiá»u', 'bangkieusinger.hust@gmail.com', '', 'NgÃ´ SÄ© LiÃªn, HÃ  Ná»™i', 2),
(29, 'ÄÃ´ng Nhi', 'dongnhi1234', '84123456789', 'HCM City', 1),
(30, 'BÃ¹i Anh Tuáº¥n', 'buianhtuan.hk@gmai.com', '12362632323', 'GÃ² Äá»‘ng Äa, HÃ  Ná»™i', 1),
(31, 'HÆ°Æ¡ng Giang Idol', 'casihuongiang@gmail.com', '1233333333', 'KhÃ¢m ThiÃªn, HÃ  Ná»™i', 1),
(27, 'ThÃ¢m DÆ°', 'thamdu@gmail.com', '77384834', 'ÄÃ´ng Anh, HÃ  Ná»™i', 2),
(25, 'hai dÃ³ng', 'buianhvu.hust1@gmail.com', '123456789', 'háº£i dÃ³ng\'s villa sá»‘ 1 Ä‘áº¡i cá»“ viá»‡t', 2),
(26, 'LÃª HoÃ ng ThÃ¡i', 'thaile@hotmail.com', '2324858444', 'Ba ÄÃ¬nh, HÃ  Ná»™i', 1),
(32, 'PhÆ°Æ¡ng Mai', 'phuongmai', '12323232332', 'PhÆ°Æ¡ng Mai, HÃ  Ná»™i', 1),
(33, 'TrÆ°á»ng Sa', 'buithienbao.hust@gmail.com', '12312312312312', 'Viá»‡t Nam', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `transaction_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '0',
  `amount` decimal(15,4) NOT NULL DEFAULT '0.0000'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`transaction_id`, `product_id`, `qty`, `amount`) VALUES
(0, 0, 0, '0.0000'),
(4, 74, 2, '44.2000'),
(4, 64, 3, '19.8900'),
(4, 83, 4, '680.0000'),
(5, 74, 4, '88.4000'),
(5, 75, 7, '209.9300'),
(6, 75, 6, '179.9400'),
(7, 85, 4, '1331.9200'),
(7, 74, 3, '66.3000'),
(7, 76, 2, '49.9800'),
(8, 70, 3, '70.2000'),
(8, 93, 7, '126.0000'),
(8, 94, 4, '80.0000'),
(9, 68, 6, '35.7000'),
(9, 77, 4, '139.9600'),
(10, 71, 7, '91.7000'),
(11, 57, 5, '100.0000'),
(11, 68, 5, '29.7500'),
(11, 60, 5, '60.0000'),
(12, 66, 3, '14.9700'),
(12, 69, 5, '67.0000'),
(12, 81, 1, '115.0000'),
(13, 57, 5, '100.0000'),
(13, 83, 5, '850.0000'),
(13, 75, 3, '89.9700'),
(13, 88, 2, '30.0000'),
(14, 90, 4, '72.0000'),
(14, 93, 5, '90.0000'),
(14, 89, 4, '80.0000'),
(14, 92, 5, '331.0000'),
(15, 79, 6, '59.9400'),
(15, 93, 5, '90.0000'),
(16, 81, 8, '920.0000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL DEFAULT '0',
  `qty` int(11) NOT NULL DEFAULT '0',
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image_link` varchar(120) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'http://localhost/sales/public/admin/image_upload/apple_cinema_30-100x100.jpg'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `catalog_id`, `name`, `price`, `qty`, `content`, `image_link`) VALUES
(86, 43, 'MAN Dash Print T-Shirt', 10, 100, 'T-shirts and vests are the power players in every manâ€™s wardrobe\n\n', 'http://localhost/sales/public/admin/image_upload/mzz70240_black_xl.jpg'),
(84, 42, 'Boots Richard Men\'s Black Glasses', 35, 34, 'Material: Plastic\nColour: Black\nStyle: Full rim\nMeasurements: Lens 54mm, bridge 18mm, arm 145mm\nArticle number: 108988\nPrice shown includes frames and Boots Protect single vision lenses â€“ reflection free and scratch resistant. For varifocals with Boots Protect lenses add Â£50.', 'http://localhost/sales/public/admin/image_upload/bootrichard.png'),
(81, 41, 'Boots Lloyd Men\'s Black Glasses', 115, 22, 'Material: Plastic\nColour: Black\nStyle: Full rim\nMeasurements: Lens 54mm, bridge 17mm, arm 140mm\nArticle number: 109915\nPrice shown includes frames and Boots Protect single vision lenses â€“ reflection free and scratch resistant. For varifocals with Boots Protect lenses add Â£50.', 'http://localhost/sales/public/admin/image_upload/Boots Lloyd.png'),
(55, 38, 'Banana', 15, 120, 'Chuá»‘i TiÃªu and Chuá»‘i Quáº£ Táº¡ (Chuá»‘i MÃ³c) have long been used medicinally in Oriental Medicine, and help in anti-inflammatory protection and in the treatment of high blood pressure. Chuá»‘i Ngá»± is noted as the sweetest banana with the most beautiful appearance, often hand-picked for royalty. ', 'http://localhost/sales/public/admin/image_upload/bananas-main.jpg'),
(83, 42, 'Diesel DL5176 Men\'s Glasses - Brown', 170, 22, 'Full rim glasses by Diesel, injected with matte orange arms with the iconic Diesel logo in Silver adjacent to the hinges enriches the whole style. Material: Plastic.Colour: BrownStyle: Full rim.Shape: Rectangle\nMeasurements: Lens 54mm, bridge 15mm, arm 140mm\nArticle number: 120752.Price shown includes frames and Boots Protect single vision lenses â€“ reflection free and scratch resistant. For varifocals with Boots Protect lenses add Â£50.\n', 'http://localhost/sales/public/admin/image_upload/diesel.png'),
(56, 38, 'Green Apple', 15, 180, 'Storage: For maximum freshness, best kept refrigerated.\nProduce of: Argentina, Chile, Italy, Morocco, Peru, South Africa, Spain, Uruguay\nPacked in:\nUnited KingdomSpain', 'http://localhost/sales/public/admin/image_upload/fresh-green-apple-fruits-a.jpg'),
(57, 38, 'Mango', 20, 489, 'Storage: For maximum freshness, best kept refrigerated. Produce of:\n, Argentina, Chile, Morocco, Peru, South Africa, Spain, Uruguay. Packed in:\nUnited KingdomSpain.', 'http://localhost/sales/public/admin/image_upload/mango.jpg'),
(58, 38, 'Strawberry', 15, 187, 'Storage: For maximum freshness, best kept refrigerated. Produce of: Argentina, Chile, Morocco, Peru, South Africa, Spain, Uruguay. Packed in: United KingdomSpain', 'http://localhost/sales/public/admin/image_upload/strawberry.jpg'),
(59, 38, 'Jackfruit', 43, 178, 'Storage: For maximum freshness, best kept refrigerated. Produce of: Argentina, Chile, Morocco, Peru, South Africa, Spain, Uruguay. Packed in: United KingdomSpain', 'http://localhost/sales/public/admin/image_upload/jackfruit.jpg'),
(60, 38, 'Dragon Fruit', 12, 150, 'Storage: For maximum freshness, best kept refrigerated. Produce of: Argentina, Chile, Morocco, Peru, South Africa, Spain, Uruguay. Packed in: United KingdomSpain', 'http://localhost/sales/public/admin/image_upload/dragon_fruit.jpg'),
(61, 38, 'Pine Apple', 13, 145, 'Storage: For maximum freshness, best kept refrigerated. Produce of: Argentina, Chile, Morocco, Peru, South Africa, Spain, Uruguay. Packed in: United KingdomSpain', 'http://localhost/sales/public/admin/image_upload/pineapple.jpg'),
(62, 39, 'Dove Shampoo', 22, 177, 'Shampoo DOVE is a hair care product, typically in the form of a viscous liquid, that is used for cleaning hair.', 'http://localhost/sales/public/admin/image_upload/doveshampoo.jpg'),
(63, 39, 'Nilla Shampoo', 43.12, 124, 'As seen in the NHS, Nilaqua â€œtowel offâ€ shampoo allows you to wash hair effectively without water or rinsing. Easily removing dirt, grease and odours.', 'http://localhost/sales/public/admin/image_upload/nila.png'),
(64, 39, 'Zerreau Towel Off Strawberry Shampoo 180ml', 6.63, 124, 'Zerreauâ€™s hybrid dry shampoo, washes haireffectivelywithout the need for water or rinsing. Zerreau has all the cleaning power of traditional wet shampoo, coupled with all the convenience of a dry shampoo! ', 'http://localhost/sales/public/admin/image_upload/zerreau.png'),
(65, 39, 'Bleach Silver Shampoo 250ml', 6.5, 33, 'Product details\nFor blondes that constantly strive for whiter, brighter colour. Use this shampoo every other wash to keep your perfect ashy blonde tone.', 'http://localhost/sales/public/admin/image_upload/bleach.png'),
(66, 39, ' offer Lee Stafford Hair Growth Shampoo 200ml ', 4.99, 123, 'Lee Stafford Hair Growth Shampoo 200ml', 'http://localhost/sales/public/admin/image_upload/leestandford.png'),
(68, 39, ' Neutrogena T/Gel Shampoo Sensitive Scalp 125ml', 5.95, 323, 'Product details\nWhen dandruff appears, you want to get rid of it fast. That\'s why NeutrogenaÂ® has developed T/GelÂ® shampoo for Sensitive Scalps.\nRead more at http://www.boots.com/neutrogena-t-gel-shampoo-sensitive-scalp-125ml-10028482#scFuitMMHtTX8F67.99', 'http://localhost/sales/public/admin/image_upload/neu.png'),
(69, 39, 'Aussie Frizz Miracle Shampoo 300ml', 13.4, 15, 'Smoothes & Controls Frizz\nOur Aussie Shampoo Frizz Miracle special formula, with extract of \"Australian Blue Gum Leaves\", helps to control frizzes and smoothes flyaways. Brilliant. \"Australian Blue Gum Leaves\".\n', 'http://localhost/sales/public/admin/image_upload/aussie.png'),
(70, 39, 'Dead Sea Natural Mineral Shampoo 300ml', 23.4, 132, 'The Dead Sea has been a source of health and beauty since biblical times. The rich concentration of minerals, found at this lowest point on earth, may benefit people with problem skin. Dead Sea Natural Mineral shampoo is free of animal fat and is made from olive, palm, coconut and vegetable oils. The shampoo contains no synthetic detergents, artificial colouring or thickening substances.', 'http://localhost/sales/public/admin/image_upload/deadsea.png'),
(71, 39, 'ORS Olive Oil Aloe Shampoo 370m', 13.1, 23, 'For over 5000 years, olive oil has been used as a healing elixir to restore new life to anything it touched.  Proclaimed as \'liquid gold\', olive oil is rich in essential fatty acids that impart moisture directly to the hair and scalp.', 'http://localhost/sales/public/admin/image_upload/olive.png'),
(72, 40, 'Peppa Pig Princess Junior Headphones', 14.99, 126, 'Product details\nPeppa Princess has arrived in beautiful shades of pink and purple. The design is perfect for little ears with its fantastic reduced sensitivity features.', 'http://localhost/sales/public/admin/image_upload/pinkheadphone.png'),
(73, 40, 'Peppa Pig Muddy Puddle Junior Headphones', 14.99, 56, 'Peppa loves to play in muddy puddles and these brand new options are perfect for all her fans. The reduced sensitivity is suitable for all little ears.\nRead more at http://www.boots.com/peppa-pig-muddy-puddle-junior-headphones-10193210#pxlYZ8UTmDp5FHRf.99', 'http://localhost/sales/public/admin/image_upload/bluehp.png'),
(74, 40, 'Sony EX15 In-ear Headphones- Pink', 22.1, 123, 'Sony\'s EX15 in-ear headphones are comfortable, secure fitting silicone earbuds.\n\nPerfect for use with portable devices, these headphones are lightweight for ultimate music mobility.', 'http://localhost/sales/public/admin/image_upload/pinksony.png'),
(75, 40, 'Sony XB450 AP Extra Bass Headphones- Blue Read', 29.99, 22, 'Product details\nSony XB450 headphones are comfortable on ear headphones with a deep bass reponse and swivel design.\n\n\n\n\n', 'http://localhost/sales/public/admin/image_upload/sonyblue.png'),
(76, 40, 'Sennheiser HD201 Over Ear Headphones- Black', 24.99, 22, 'The Sennheiser HD 201 headphones are a pair of closed, dynamic stereo headphones for the budget-conscious music lover, featuring powerful sound reproduction, good attenuation of ambient noise and outstanding wearing comfort.', 'http://localhost/sales/public/admin/image_upload/offer.png'),
(77, 40, 'Sennheiser CX1 Earphones Black', 34.99, 23, 'Sennheiser CX1 Earphones Black\n\n', 'http://localhost/sales/public/admin/image_upload/phonebox.png'),
(78, 40, 'Sennheiser HD205ii Over Ear Headphones Black', 49.99, 22, 'Sennheiser HD205ii Over Ear Headphones Black\nThese closed, supra-aural headphones are sharp looking, ultra-comfortable and packed with features like rotating ear cups, a single-sided cable, \nexcellent noise suppression and more. In fact, theyâ€™re great for both mobile and compact systems.\n\n\n', 'http://localhost/sales/public/admin/image_upload/he205ii.png'),
(79, 40, 'iFrogz Little Rockers Headphones Tiara Pink', 9.99, 12, 'If your little ones love music and dressing up, the fun iFrogz Little Rockers Costume headphones are simply perfect. The Pink Tiara is a must have for all little princesses! With a pink sparkly headband in a tiara shape \n', 'http://localhost/sales/public/admin/image_upload/princess.png'),
(80, 40, 'SBS Sport Earphones And Armband', 123, 14, 'SBS Sport Earphones And Armband\nColour matched in eye-catching orange, this Sports Kit offers a great combination of two key accessories that will make a great difference to the enjoyment of your work-out.\n\n', 'http://localhost/sales/public/admin/image_upload/sbs.png'),
(82, 42, 'Calvin Klein Men\'s Glasses - Gunmetal CK7503', 270, 34, 'A lightweight, clean and fashionable glasses frame that embodies Calvin Kleinâ€™s minimalistic design aesthetic.', 'http://localhost/sales/public/admin/image_upload/calvin.png'),
(85, 42, 'Ray-Ban Unisex Dark Havana Glasses - RX5184', 332.98, 23, 'Material: Acetate\nColour: Dark Havana\nStyle: Wayfarer\nShape: Full rim\nMeasurements: Lens 50mm, bridge 18mm, arm 145mm\nArticle number: 111903\n', 'http://localhost/sales/public/admin/image_upload/Ray-Ban.png'),
(87, 43, 'Raglan Muscle Fit T Shirt With Logo', 6, 23, 'Excluded from onsite promotions\r\n\r\n', 'http://localhost/sales/public/admin/image_upload/mzz72599_taupe_xl_3.jpg'),
(88, 43, 'Skinny Fit Panel Joggers', 15, 22, 'Excluded from onsite promotions\r\n\r\n', 'http://localhost/sales/public/admin/image_upload/mzz72639_black_xl.jpg'),
(89, 43, 'Floral Print Short Sleeve Shirt', 20, 45, 'Mixing classic with quirky, the boohooMAN shirt collection is sure to shake up your wardrobe. Long sleeve or short, the Oxford shirt takes care of your work wear woes, while checks and stripes see you through from day to night in style. Pair prints with primary colour chinos, a retro rucksack and street style snapback.', 'http://localhost/sales/public/admin/image_upload/mzz71818_coral_xl.jpg'),
(90, 43, 'Oversized Over The Head Hoodie With Half Zip & Pocket', 18, 23, 'Updated with directional designs and talk-about textures, laid back gets luxe this season. Hoodies and sweats go crazy for quilting and PU panelling, but donâ€™t sweat â€“ sporty is staying on the style radar with varsity vibes reigning supreme.', 'http://localhost/sales/public/admin/image_upload/mzz72293_taupe_xl.jpg'),
(91, 43, 'Navy Shower Resistant Colour Blocked Hooded Cagoule', 25, 21, 'Turn your outerwear into shouterwear with a boohooMAN coat or jacket', 'http://localhost/sales/public/admin/image_upload/mzz71848_navy_xl.jpg'),
(92, 43, 'Crew Neck T Shirt With Roll Sleeves', 66.2, 34, 'This season the dream team in male dressing gets daring with t-shirts and vests taking on poppinâ€™ paisley prints and sporty slogans to keep you enviably on-trend.', 'http://localhost/sales/public/admin/image_upload/mzz76099_white_xl.jpg'),
(93, 43, 'Acid Wash Denim Shorts With Raw Edge', 18, 34, 'Have shorts on hand for those hotter days', 'http://localhost/sales/public/admin/image_upload/mzz70965_charcoal_xl.jpg'),
(94, 43, 'Jasmine Bandeau Frill & Tie Waist Midi Dress', 20, 32, 'From cool-tone whites to block brights, we\'ve got the everyday skater dresses and party-ready bodycon styles that are perfect for transitioning from day to play.', 'http://localhost/sales/public/admin/image_upload/dzz53461_yellow_xl.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
--

CREATE TABLE `transaction` (
  `id` bigint(20) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `amount` decimal(15,4) NOT NULL DEFAULT '0.0000',
  `message` varchar(255) COLLATE utf8_bin NOT NULL,
  `created` varchar(11) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `transaction`
--

INSERT INTO `transaction` (`id`, `seller_id`, `user_id`, `amount`, `message`, `created`) VALUES
(1, 1, 1, '1275.0000', 'ssssssss', '15/5/2017'),
(2, 1, 1, '3650729849.9000', 'anh Háº£i Ä‘áº¹p trai Ä‘Ã£ mua hÃ ng r Ã´i kimoochi <333', '15/5/2017'),
(3, 4, 0, '2850.0000', 'háº£i dÃ³ng ', '15/5/2017'),
(4, 5, 3, '743.0000', 'Khach hang nhiet tinh', '3/6/2017'),
(5, 5, 9, '297.0000', 'Chi van xinh gai <3', '3/6/2017'),
(6, 5, 1, '152.1500', 'Anh Hai khach hang thuong xuyen den mua', '3/6/2017'),
(7, 5, 2, '1446.0000', 'Mua Ã­t máº·c cáº£ thÃ¬ láº¯m', '3/6/2017'),
(8, 5, 30, '276.0000', 'Anh Tuan dep trai hat lai con hay ', '3/6/2017'),
(9, 3, 7, '165.3000', 'Na tra mua hÃ ng khÃ´ng mÄƒc cáº£. LIKE!', '3/6/2017'),
(10, 3, 2, '91.0000', 'Suá»‘t ngÃ y mua dáº§u', '3/6/2017'),
(11, 3, 6, '160.6500', '', '3/6/2017'),
(12, 3, 11, '196.0000', '', '3/6/2017'),
(13, 1, 10, '908.6500', '', '3/6/2017'),
(14, 1, 14, '544.3500', '', '3/6/2017'),
(15, 1, 29, '149.0000', '', '3/6/2017'),
(16, 1, 14, '874.0000', 'CÃ³ gÃ¬ tá»« tá»« thÆ°Æ¡ng lÆ°á»£ng Ä‘á»«ng dá»™i bom nha bÃ¡c ', '3/6/2017');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`transaction_id`,`product_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catalog_id` (`catalog_id`);
ALTER TABLE `product` ADD FULLTEXT KEY `name` (`name`);

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
