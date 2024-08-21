CREATE TABLE IF NOT EXISTS `products` (
                                          `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
                                          `product_name` CHAR(255) UNIQUE,
    `product_short_description` VARCHAR(5000),
    `product_description` VARCHAR(15000),
    `in_stock` INT UNSIGNED DEFAULT NULL,
    `warranty` ENUM('12', '24', '36') DEFAULT '36',
    `price` INT UNSIGNED DEFAULT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
    `deleted_at` TIMESTAMP DEFAULT NULL
    ) ENGINE InnoDB charset utf8;

INSERT INTO `products`(`product_name`, `in_stock`, `warranty`, `price`) VALUES ('Lenovo IdeaPad Gaming 3 15ACH6', '2', '12', 11500), ('Acer Aspire 3 A315-59-51ST', '4', '24', 15000), ('Dell Latitude 5400', '6', '36', 18000), ('ASUS TUF Gaming A15 FA506NC-HN026', '1', '36', 20000), ('Apple MacBook Air 13" M1 8/256GB', '2', '12', 35000);

SELECT * FROM `products`;

INSERT INTO `products`(`product_name`, `in_stock`, `warranty`, `price`) VALUES ('HP 255 G9 (8D4D1ES) Dark Ash Silver', '5', '12', 12500);

SELECT * FROM `products`;

SELECT `id`, `product_name`, `price` FROM `products`;

SELECT `id`, `product_name`, `price` FROM `products` WHERE `id` = 6;
SELECT `id`, `product_name`, `price` FROM `products` WHERE `id` != 8;
SELECT `id`, `product_name`, `price` FROM `products` WHERE `id` < 12;
SELECT `id`, `product_name`, `price` FROM `products` WHERE `id` > 8;

SELECT `id`, `product_name`, `price` FROM `products` WHERE `warranty` = '12';

SELECT `id`, `product_name`, `price` FROM `products` WHERE `id` IN(6,8,11);
SELECT `id`, `product_name`, `price` FROM `products` WHERE `id` NOT IN(6,8,11);

SELECT `id`, `product_name`, `price` FROM `products` WHERE `id` BETWEEN 4 AND 8;
SELECT `id`, `product_name`, `price` FROM `products` WHERE `id` NOT BETWEEN 4 AND 8;

SELECT `id`, `product_name`, `price` FROM `products` WHERE `price` BETWEEN 10000 AND 15000;

SELECT `id`, `product_name`, `price` FROM `products` WHERE `price` > 15000 AND `warranty` = '12';

SELECT `id`, `product_name`, `price` FROM `products` WHERE `product_name` LIKE 'ASUS%';
SELECT `id`, `product_name`, `price` FROM `products` WHERE `product_name` LIKE '%Gaming%';

SELECT * FROM `products` WHERE `price` = 15000 OR `warranty` = '12';
SELECT * FROM `products` WHERE `price` = 10000 OR `warranty` = '12' AND `in_stock` = 2;
SELECT * FROM `products` WHERE `price` = 15000 OR (`warranty` = '24' OR `in_stock` = 2);

SELECT * FROM `products` ORDER BY `product_name` DESC;
SELECT * FROM `products` ORDER BY `product_name` ASC;

SELECT * FROM `products` LIMIT 2;
SELECT * FROM `products` LIMIT 1,2;
SELECT * FROM `products` LIMIT 2,5;

SELECT * FROM `products` WHERE `price` > 15000 ORDER BY `price` DESC LIMIT 2;
SELECT * FROM `products` WHERE `id` > 8 ORDER BY `product_name`;

UPDATE `products` SET `warranty` = '24' WHERE `id` = 6;
UPDATE `products` SET `warranty` = '36' WHERE `id` = 7;

INSERT INTO `products`(`product_name`, `in_stock`, `warranty`, `price`) VALUES ('SAMSUNG G9 Silver', '1', '12', 23000);

DELETE FROM `products` WHERE `id` = 12;

SELECT * FROM `products`;