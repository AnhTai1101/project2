CREATE TABLE `User` (
  `id` int PRIMARY KEY,
  `name` string,
  `phone` int,
  `email` string,
  `password` string,
  `image` string,
  `level` int
);

CREATE TABLE `Product` (
  `id` int PRIMARY KEY,
  `name` string,
  `image1` string,
  `image2` string,
  `image3` string,
  `color_id` int,
  `size_id` int,
  `description` string,
  `title` string,
  `price_unit` int,
  `price_promotion` int,
  `type_id` int,
  `info_id` int
);

CREATE TABLE `Type_Product` (
  `id` int PRIMARY KEY,
  `description` string,
  `name` string,
  `image` string,
  `title` string
);

CREATE TABLE `Customer` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` string,
  `gender` int,
  `email` string,
  `image` string,
  `phone` int,
  `address` string,
  `note` string
);

CREATE TABLE `Bills` (
  `id` int PRIMARY KEY,
  `id_customer` int,
  `date_order` datetime,
  `total` int,
  `note` string,
  `payment` string
);

CREATE TABLE `Bill_detail` (
  `id` int PRIMARY KEY,
  `id_bill` int,
  `id_product` int,
  `quantity` int,
  `price_unit` int
);

CREATE TABLE `Color` (
  `id` int PRIMARY KEY,
  `name` string
);

CREATE TABLE `Size` (
  `id` int PRIMARY KEY,
  `name` string
);

CREATE TABLE `Product_quantity` (
  `id` int PRIMARY KEY,
  `product_id` int,
  `Color_id` int,
  `Size_id` int,
  `quantity` int
);

CREATE TABLE `Type_info` (
  `id` int PRIMARY KEY,
  `description` string,
  `name` string,
  `image` string,
  `title` string
);

CREATE TABLE `silde` (
  `id` int PRIMARY KEY,
  `name` string,
  `image` string
);

CREATE TABLE `news` (
  `id` int PRIMARY KEY,
  `name` string,
  `title` string,
  `content` string,
  `image` string,
  `description` text,
  `time` date
);

CREATE TABLE `infoShop` (
  `id` int PRIMARY KEY,
  `name` string,
  `phone` int,
  `address` string,
  `boss` string,
  `phone2` int
);

ALTER TABLE `Product` ADD FOREIGN KEY (`color_id`) REFERENCES `Color` (`id`);

ALTER TABLE `Product` ADD FOREIGN KEY (`size_id`) REFERENCES `Size` (`id`);

ALTER TABLE `Product` ADD FOREIGN KEY (`type_id`) REFERENCES `Type_Product` (`id`);

ALTER TABLE `Product` ADD FOREIGN KEY (`info_id`) REFERENCES `Type_info` (`id`);

ALTER TABLE `Bills` ADD FOREIGN KEY (`id_customer`) REFERENCES `Customer` (`id`);

ALTER TABLE `Bill_detail` ADD FOREIGN KEY (`id_bill`) REFERENCES `Bills` (`id`);

ALTER TABLE `Bill_detail` ADD FOREIGN KEY (`id_product`) REFERENCES `Product` (`id`);

ALTER TABLE `Product_quantity` ADD FOREIGN KEY (`product_id`) REFERENCES `Product` (`id`);

ALTER TABLE `Product_quantity` ADD FOREIGN KEY (`Color_id`) REFERENCES `Color` (`id`);

ALTER TABLE `Product_quantity` ADD FOREIGN KEY (`Size_id`) REFERENCES `Size` (`id`);
