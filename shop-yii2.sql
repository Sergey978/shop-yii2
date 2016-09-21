-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.41-log - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.2.0.4947
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных shop-yii2
CREATE DATABASE IF NOT EXISTS `shop-yii2` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `shop-yii2`;


-- Дамп структуры для таблица shop-yii2.easyii_admins
CREATE TABLE IF NOT EXISTS `easyii_admins` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `auth_key` varchar(128) NOT NULL,
  `access_token` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `access_token` (`access_token`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_admins: 1 rows
DELETE FROM `easyii_admins`;
/*!40000 ALTER TABLE `easyii_admins` DISABLE KEYS */;
INSERT INTO `easyii_admins` (`admin_id`, `username`, `password`, `auth_key`, `access_token`) VALUES
	(1, 'admin', 'b06e404179e3c1a4f8ebfbe176b27bf4c464e6ed', 'FrVrhdiX8WjHKEOqd4xFvMLASJ535M-J', NULL);
/*!40000 ALTER TABLE `easyii_admins` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_article_categories
CREATE TABLE IF NOT EXISTS `easyii_article_categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  `order_num` int(11) DEFAULT NULL,
  `slug` varchar(128) DEFAULT NULL,
  `tree` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_article_categories: 4 rows
DELETE FROM `easyii_article_categories`;
/*!40000 ALTER TABLE `easyii_article_categories` DISABLE KEYS */;
INSERT INTO `easyii_article_categories` (`category_id`, `title`, `image`, `order_num`, `slug`, `tree`, `lft`, `rgt`, `depth`, `status`) VALUES
	(1, 'Novinki', NULL, 2, 'novinki', 1, 1, 2, 0, 1),
	(2, 'Articles category 2', NULL, 1, 'articles-category-2', 2, 1, 6, 0, 1),
	(3, 'Subcategory 1', NULL, 1, 'subcategory-1', 2, 2, 3, 1, 1),
	(4, 'Subcategory 1', NULL, 1, 'subcategory-1-2', 2, 4, 5, 1, 1);
/*!40000 ALTER TABLE `easyii_article_categories` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_article_items
CREATE TABLE IF NOT EXISTS `easyii_article_items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(128) NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  `short` varchar(1024) DEFAULT NULL,
  `text` text NOT NULL,
  `slug` varchar(128) DEFAULT NULL,
  `time` int(11) DEFAULT '0',
  `views` int(11) DEFAULT '0',
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`item_id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_article_items: 3 rows
DELETE FROM `easyii_article_items`;
/*!40000 ALTER TABLE `easyii_article_items` DISABLE KEYS */;
INSERT INTO `easyii_article_items` (`item_id`, `category_id`, `title`, `image`, `short`, `text`, `slug`, `time`, `views`, `status`) VALUES
	(1, 1, 'Новинка! Суфле-скраб "Кокос"!', '/uploads/article/79a1ceaa78.jpg', 'Суфле - скраб для душа с разными обалденно вкусными запахами! Нежно очищает и скрабирует кожу...особенно нравится деткам', '<p>dfggffg</p>', NULL, 1473239280, 0, 1),
	(2, 1, 'Second article title', '/uploads/article/article-2.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><ol> <li>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </li><li>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</li></ol>', 'second-article-title', 1468746513, 0, 1),
	(3, 1, 'Third article title', '/uploads/article/article-3.jpg', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt molliti', '<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>', 'third-article-title', 1468660113, 0, 1);
/*!40000 ALTER TABLE `easyii_article_items` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_carousel
CREATE TABLE IF NOT EXISTS `easyii_carousel` (
  `carousel_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(128) NOT NULL,
  `link` varchar(255) NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `text` text,
  `order_num` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`carousel_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_carousel: 3 rows
DELETE FROM `easyii_carousel`;
/*!40000 ALTER TABLE `easyii_carousel` DISABLE KEYS */;
INSERT INTO `easyii_carousel` (`carousel_id`, `image`, `link`, `title`, `text`, `order_num`, `status`) VALUES
	(4, '/uploads/carousel/karusel1-4a5a062217.jpg', '', '', '', 4, 1),
	(5, '/uploads/carousel/karusel2-ed26bf3020.jpg', '', '', '', 5, 1),
	(6, '/uploads/carousel/8hkqstxunja-a3463daf63.jpg', 'http://shop-yii2.loc/grid', '<b>ПОДАРОЧНЫЙ НАБОР ЗА ПОЛ ЦЕНЫ!</b>', 'Успей купить до 1 октября!', 6, 1);
/*!40000 ALTER TABLE `easyii_carousel` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_catalog_categories
CREATE TABLE IF NOT EXISTS `easyii_catalog_categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  `fields` text NOT NULL,
  `slug` varchar(128) DEFAULT NULL,
  `tree` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  `order_num` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_catalog_categories: 31 rows
DELETE FROM `easyii_catalog_categories`;
/*!40000 ALTER TABLE `easyii_catalog_categories` DISABLE KEYS */;
INSERT INTO `easyii_catalog_categories` (`category_id`, `title`, `image`, `fields`, `slug`, `tree`, `lft`, `rgt`, `depth`, `order_num`, `status`) VALUES
	(1, 'Gadgets', NULL, '[{"name":"brand","title":"Brand","type":"select","options":["Samsung","Apple","Nokia"]},{"name":"storage","title":"Storage","type":"string","options":""},{"name":"touchscreen","title":"Touchscreen","type":"boolean","options":""},{"name":"cpu","title":"CPU cores","type":"select","options":["1","2","4","8"]},{"name":"features","title":"Features","type":"checkbox","options":["Wi-fi","4G","GPS"]},{"name":"color","title":"Color","type":"checkbox","options":["White","Black","Red","Blue"]}]', 'gadgets', 1, 1, 6, 0, NULL, 1),
	(2, 'Smartphones', NULL, '[{"name":"brand","title":"Brand","type":"select","options":["Samsung","Apple","Nokia"]},{"name":"storage","title":"Storage","type":"string","options":""},{"name":"touchscreen","title":"Touchscreen","type":"boolean","options":""},{"name":"cpu","title":"CPU cores","type":"select","options":["1","2","4","8"]},{"name":"features","title":"Features","type":"checkbox","options":["Wi-fi","4G","GPS"]},{"name":"color","title":"Color","type":"checkbox","options":["White","Black","Red","Blue"]}]', 'smartphones', 1, 2, 3, 1, NULL, 1),
	(3, 'Tablets', NULL, '[{"name":"brand","title":"Brand","type":"select","options":["Samsung","Apple","Nokia"]},{"name":"storage","title":"Storage","type":"string","options":""},{"name":"touchscreen","title":"Touchscreen","type":"boolean","options":""},{"name":"cpu","title":"CPU cores","type":"select","options":["1","2","4","8"]},{"name":"features","title":"Features","type":"checkbox","options":["Wi-fi","4G","GPS"]},{"name":"color","title":"Color","type":"checkbox","options":["White","Black","Red","Blue"]}]', 'tablets', 1, 4, 5, 1, NULL, 1),
	(4, 'Category', '', '[]', 'category', 4, 1, 22, 0, 1, 1),
	(5, 'Лицо', '/uploads/catalog/face1-ef05c1d21d.jpg', '[]', 'face', 4, 2, 11, 1, 1, 1),
	(32, 'Для детей', '', '[]', 'dlya-detej', 16, 26, 29, 1, 4, 1),
	(33, 'Детское мыло', '', '[]', 'detskoe-mylo', 16, 27, 28, 2, 4, 1),
	(37, 'NoIngredient', '', '[]', 'noingredient', 37, 1, 2, 0, 5, 1),
	(6, 'Тело', '/uploads/catalog/body-663fd3c514.jpg', '[]', 'body', 4, 12, 19, 1, 1, 1),
	(7, 'Волосы', '/uploads/catalog/hair1-ae8fec2f69.jpg', '[]', 'hair', 4, 20, 21, 1, 1, 1),
	(8, 'Ingridients', '', '[{"name":"type","title":"Type","type":"select","options":["\\u042d\\u043a\\u0441\\u0442\\u0440\\u0430\\u043a\\u0442\\u044b","\\u0410\\u043a\\u0442\\u0438\\u0432\\u044b","\\u042d\\u0444\\u0438\\u0440\\u043d\\u044b\\u0435 \\u043c\\u0430\\u0441\\u043b\\u0430","\\u0412\\u0438\\u0442\\u0430\\u043c\\u0438\\u043d\\u044b","\\u0412\\u0441\\u0435"]}]', 'ingridients', 8, 1, 2, 0, 2, 1),
	(9, 'Скраб', '', '[]', 'scrab-face', 4, 5, 6, 2, 1, 1),
	(10, 'Мыло', '', '[]', 'soap-face', 4, 7, 8, 2, 1, 1),
	(29, 'Мыло', '', '[]', 'mylo-mug', 16, 23, 24, 2, 4, 1),
	(11, 'Маска', '', '[]', 'mask-face', 4, 9, 10, 2, 1, 1),
	(22, 'Маски', '', '[]', 'maski', 16, 7, 8, 2, 4, 1),
	(23, 'Кремы и бальзамы', '', '[]', 'kremy-i-bal-zamy', 16, 11, 12, 2, 4, 1),
	(25, 'Гели для душа', '', '[]', 'geli-dlya-dusha', 16, 13, 14, 2, 4, 1),
	(26, 'Мыло', '', '[]', 'mylo-telo', 16, 15, 16, 2, 4, 1),
	(27, 'Бальзамы', '', '[]', 'bal-zamy', 16, 19, 20, 2, 4, 1),
	(28, 'Кремы', '', '[]', 'kremy-mug', 16, 21, 22, 2, 4, 1),
	(12, 'Крем', '/uploads/catalog/dff1749a36.jpg', '[]', 'krem-face', 4, 3, 4, 2, 1, 1),
	(16, 'Готовая продукция', '', '[]', 'gotovaya-produkciya', 16, 1, 30, 0, 4, 1),
	(17, 'Для лица', '/uploads/catalog/face1-67e235e7f2.jpg', '[]', 'dlya-lica', 16, 2, 9, 1, 4, 1),
	(18, 'Для тела', '/uploads/catalog/body-92b4f19a07.jpg', '[]', 'dlya-tela', 16, 10, 17, 1, 4, 1),
	(19, 'Для мужчин', '/uploads/catalog/hair-92a0e7a415.jpg', '[]', 'dlya-muzhchin', 16, 18, 25, 1, 4, 1),
	(20, 'Кремы', '', '[]', 'kremy', 16, 3, 4, 2, 4, 1),
	(21, 'Мыло', '', '[]', 'mylo', 16, 5, 6, 2, 4, 1),
	(13, 'Гель для душа', '', '[]', 'gel-body', 4, 13, 14, 2, 1, 1),
	(14, 'Скраб', '', '[]', 'scrab-body', 4, 15, 16, 2, 1, 1),
	(15, 'Бальзам', '', '[]', 'balm-body', 4, 17, 18, 2, 1, 1);
/*!40000 ALTER TABLE `easyii_catalog_categories` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_catalog_items
CREATE TABLE IF NOT EXISTS `easyii_catalog_items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(128) NOT NULL,
  `description` text,
  `available` int(11) DEFAULT '1',
  `price` float DEFAULT '0',
  `discount` int(11) DEFAULT '0',
  `data` text NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  `slug` varchar(128) DEFAULT NULL,
  `time` int(11) DEFAULT '0',
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`item_id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_catalog_items: 40 rows
DELETE FROM `easyii_catalog_items`;
/*!40000 ALTER TABLE `easyii_catalog_items` DISABLE KEYS */;
INSERT INTO `easyii_catalog_items` (`item_id`, `category_id`, `title`, `description`, `available`, `price`, `discount`, `data`, `image`, `slug`, `time`, `status`) VALUES
	(1, 2, 'Nokia 3310', '<h3>The legend</h3><p>The Nokia 3310 is a GSMmobile phone announced on September 1, 2000, and released in the fourth quarter of the year, replacing the popular Nokia 3210. The phone sold extremely well, being one of the most successful phones with 126 million units sold worldwide.&nbsp;The phone has since received a cult status and is still widely acclaimed today.</p><p>The 3310 was developed at the Copenhagen Nokia site in Denmark. It is a compact and sturdy phone featuring an 84 × 48 pixel pure monochrome display. It has a lighter 115 g battery variant which has fewer features; for example the 133 g battery version has the start-up image of two hands touching while the 115 g version does not. It is a slightly rounded rectangular unit that is typically held in the palm of a hand, with the buttons operated with the thumb. The blue button is the main button for selecting options, with "C" button as a "back" or "undo" button. Up and down buttons are used for navigation purposes. The on/off/profile button is a stiff black button located on the top of the phone.</p>', 5, 100, 0, '{"brand":"Nokia","storage":"1","touchscreen":"0","cpu":1,"color":["White","Red","Blue"]}', '/uploads/catalog/3310.jpg', 'nokia-3310', 1468832912, 1),
	(2, 2, 'Galaxy S6', '<h3>Next is beautifully crafted</h3><p>With their slim, seamless, full metal and glass construction, the sleek, ultra thin edged Galaxy S6 and unique, dual curved Galaxy S6 edge are crafted from the finest materials.</p><p>And while they may be the thinnest smartphones we`ve ever created, when it comes to cutting-edge technology and flagship Galaxy experience, these 5.1" QHD Super AMOLED smartphones are certainly no lightweights.</p>', 1, 1000, 10, '{"brand":"Samsung","storage":"32","touchscreen":"1","cpu":8,"features":["Wi-fi","GPS"]}', '/uploads/catalog/galaxy.jpg', 'galaxy-s6', 1468746512, 1),
	(3, 2, 'Iphone 6', '<h3>Next is beautifully crafted</h3><p>With their slim, seamless, full metal and glass construction, the sleek, ultra thin edged Galaxy S6 and unique, dual curved Galaxy S6 edge are crafted from the finest materials.</p><p>And while they may be the thinnest smartphones we`ve ever created, when it comes to cutting-edge technology and flagship Galaxy experience, these 5.1" QHD Super AMOLED smartphones are certainly no lightweights.</p>', 0, 1100, 10, '{"brand":"Apple","storage":"64","touchscreen":"1","cpu":4,"features":["Wi-fi","4G","GPS"]}', '/uploads/catalog/iphone.jpg', 'iphone-6', 1468660112, 1),
	(4, 13, 'Гель для душа для нормальной и комбинированной кожи с маслом фисташки', '<h6>Гель для душа для нормальной и комбинированной кожи с маслом фисташки</h6><p>Объем: 250 мл</p><p>состав основы: вода, мягкие биоразлагаемые ПАВ  растительного происхождения (кокамидопропил бетаин - вырабатывается из  жирных кислот кокосового масла, лауроил метилизетионат натрия - наиболее  мягкая кокосовая альтернатива сульфатам, кокоглюкозид - на основе  кокоса и фруктовых сахаров, натрия кокоил яблочных аминокислот - на  основе кокосового масла и экстракта яблочного сока), растительные масла  оливковое, фисташки, экстракт календулы, лимонная кислота, молочная  кислота, эуксил (безопасный консервант и антиоксидант на основе  этилгексилглицерина и токоферола).</p>', 100, 20, NULL, '{"ingridient1":"","ingridient2":"","ingridient3":"","ingridient4":"","ingridient5":"","ingridient6":""}', '/uploads/catalog/gel1-aeb66737d3.jpg', 'gel-fist-body', 1468838313, 1),
	(5, 13, 'Гель для душа для сухой или возрастной кожи с маслом пшеницы', '<h5></h5><h6>Гель для душа для сухой или возрастной кожи с маслом пшеницы</h6><p>Объем: 250 мл</p><p>состав основы: вода, мягкие биоразлагаемые ПАВ  растительного происхождения (кокамидопропил бетаин - вырабатывается из  жирных кислот кокосового масла, лауроил метилизетионат натрия - наиболее  мягкая кокосовая альтернатива сульфатам, кокоглюкозид - на основе  кокоса и фруктовых сахаров, натрия кокоил яблочных аминокислот - на  основе кокосового масла и экстракта яблочного сока), растительные масла  оливковое, зерен пшеницы, авокадо, лимонная кислота, молочная кислота,  эуксил (безопасный консервант и антиоксидант на основе  этилгексилглицерина и токоферола).</p><h5></h5>', 100, 35, NULL, '{"ingridient1":"","ingridient2":"","ingridient3":"","ingridient4":"","ingridient5":"","ingridient6":""}', '/uploads/catalog/gel2-426281d734.jpg', 'gel-pshen-body', 1468838418, 1),
	(6, 14, 'Скраб сахарный для нормальной и комбинированной кожи', '<h6>Скраб сахарный для нормальной и комбинированной кожи</h6><p>Объем: 150 мл</p><p>состав основы: растительные масла миндальное,  макадамского ореха, сои, очищенный тростниковый сахар, экстракт  розмарина (антиоксидант), сорбитан монолаурат (пищевая добавка, повышает  вязкость, получают из кокоса и листьев лаврового дерева).</p>', 100, 26, NULL, '{"ingridient1":"","ingridient2":"","ingridient3":"","ingridient4":"","ingridient5":"","ingridient6":""}', '/uploads/catalog/scrab1-5a18b2b3a6.jpg', 'scrab-sugar-body', 1468839017, 1),
	(7, 14, 'Скраб солевой для нормальной и комбинированной кожи', '<h6>Скраб солевой для нормальной и комбинированной кожи</h6><p>Объем: 150 мл</p><p>состав основы: растительные масла миндальное, виноградной  косточки, сои, морская соль, экстракт розмарина (антиоксидант),  сорбитан монолаурат (пищевая добавка, повышает вязкость, получают из  кокоса и листьев лаврового дерева).</p>', 100, 42, NULL, '{"ingridient1":"","ingridient2":"","ingridient3":"","ingridient4":"","ingridient5":"","ingridient6":""}', '/uploads/catalog/scrab2-8fec94f6dd.jpg', 'scrab-sol-body', 1468839881, 1),
	(8, 15, 'Бальзам для тела для нормальной и комбинированной кожи с маслом ши', '<h6>Бальзам для тела для нормальной и комбинированной кожи с маслом ши</h6><p>Объем: 150 мл</p><p>состав основы: растительные масла ши, миндальное, рисовых  отрубей, сои, пчелиный воск, глицерил стеарат (мягкий эмульгатор,  вырабатывается на основе глицерина и стеариновой кислоты кокосового  масла), экстракт розмарина (антиоксидант), эуксил (безопасный консервант  и антиоксидант на основе этилгексилглицерина и токоферола).</p>', 100, 41, NULL, '{"ingridient1":"","ingridient2":"","ingridient3":"","ingridient4":"","ingridient5":"","ingridient6":""}', '/uploads/catalog/bal1-6c7cd90412.jpg', 'bal-shi-body', 1468840117, 1),
	(9, 15, 'Бальзам для тела для сухой или возрастной кожи с маслом какао', '<h6>Бальзам для тела для сухой или возрастной кожи с маслом какао</h6><p>Объем: 150 мл</p><p>состав основы: растительные масла какао, ши, миндальное,  облепиховое, сои, пчелиный воск, глицерил стеарат (мягкий эмульгатор,  вырабатывается на основе глицерина и стеариновой кислоты кокосового  масла), экстракт розмарина (антиоксидант), эуксил (безопасный консервант  и антиоксидант на основе этилгексилглицерина и токоферола).</p>', 100, 23, NULL, '{"ingridient1":"","ingridient2":"","ingridient3":"","ingridient4":"","ingridient5":"","ingridient6":""}', '/uploads/catalog/bal2-00411460f7.jpg', 'bal-kakao-body', 1468840459, 1),
	(10, 12, 'Крем для возрастной кожи с маслом черной смородины', '<h6>Крем для возрастной кожи с маслом черной смородины</h6><p>Объем: 60 г</p><p>состав основы: вода, растительные масла ши, черной  смородины, жожоба, миндальное, облепиховое, сои, глицерил стеарат  (мягкий эмульгатор, вырабатывается на основе глицерина и стеариновой  кислоты кокосового масла), цетеариловый спирт (мягкий эмульгатор,  вырабатывается из кокосового масла), альгинат натрия (мягкий  загуститель, вырабатывается из водорослей), экстракт розмарина, эуксил  (безопасный консервант и антиоксидант на основе этилгексилглицерина и  токоферола)</p>', 100, 21, NULL, '{"ingridient1":"","ingridient2":"","ingridient3":"","ingridient4":"","ingridient5":"","ingridient6":""}', '/uploads/catalog/krem1-d0f4dae80c.jpg', 'krem-blacksmor-face', 1468840675, 1),
	(11, 12, 'Крем для жирной кожи с маслом зверобоя', '<h6>Крем для жирной кожи с маслом зверобоя</h6><p>Объем: 60 г</p><p>состав основы: вода, растительные масла ши, зверобоя,  миндальное, жожоба, сои, глицерил стеарат (мягкий эмульгатор,  вырабатывается на основе глицерина и стеариновой кислоты кокосового  масла), цетеариловый спирт (мягкий эмульгатор, вырабатывается из  кокосового масла), альгинат натрия (мягкий загуститель, вырабатывается  из водорослей), экстракт розмарина, эуксил (безопасный консервант и  антиоксидант на основе этилгексилглицерина и токоферола)</p>', 100, 24, NULL, '{"ingridient1":"","ingridient2":"","ingridient3":"","ingridient4":"","ingridient5":"","ingridient6":""}', '/uploads/catalog/krem2-c3c59e5f8b.jpg', 'krem-zver-face', 1468840961, 1),
	(12, 12, 'Крем для нормальной и комбинированной кожи с маслом пшеницы', '<h6>Крем для нормальной и комбинированной кожи с маслом пшеницы</h6><p>Объем: 60 г</p><p>состав основы: вода, растительные масла ши, зерен пшеницы,  макадамского ореха, жожоба, сои, глицерил стеарат (мягкий эмульгатор,  вырабатывается на основе глицерина и стеариновой кислоты кокосового  масла), цетеариловый спирт (мягкий эмульгатор, вырабатывается из  кокосового масла), альгинат натрия (мягкий загуститель, вырабатывается  из водорослей), экстракт розмарина, эуксил (безопасный консервант и  антиоксидант на основе этилгексилглицерина и токоферола)</p>', 100, 32, NULL, '{"ingridient1":"","ingridient2":"","ingridient3":"","ingridient4":"","ingridient5":"","ingridient6":""}', '/uploads/catalog/krem3-1230a1696b.jpg', 'krem-pshen-face', 1468841030, 1),
	(13, 9, 'Скраб для возрастной кожи с маслом жожоба', '<h6>Скраб для возрастной кожи с маслом жожоба</h6><p>Объем: 50 мл</p><p>состав основы: вода, растительные масла ши, жожоба, рисовых  отрубей, миндальное, сои, гранулы масла жожоба и подсолнечника,  глицерил стеарат (мягкий эмульгатор, вырабатывается на основе глицерина и  стеариновой кислоты кокосового масла), цетеариловый спирт (мягкий  эмульгатор, вырабатывается из кокосового масла), альгинат натрия (мягкий  загуститель, вырабатывается из водорослей), экстракт розмарина, эуксил  (безопасный консервант и антиоксидант на основе этилгексилглицерина и  токоферола)</p>', 100, 23, NULL, '{"ingridient1":"","ingridient2":"","ingridient3":"","ingridient4":"","ingridient5":"","ingridient6":""}', '/uploads/catalog/scrab1-370abbc7e1.jpg', 'scrab-gogoba-face', 1468849524, 1),
	(14, 9, 'Скраб для жирной кожи с маслом сладкого миндаля', '<h6>Скраб для жирной кожи с маслом сладкого миндаля</h6><p>Объем: 50 мл</p><p>состав основы: вода, растительные масла ши, миндальное,  зверобоя, сои, гранулы кедрового ореха, глицерил стеарат (мягкий  эмульгатор, вырабатывается на основе глицерина и стеариновой кислоты  кокосового масла), цетеариловый спирт (мягкий эмульгатор, вырабатывается  из кокосового масла), альгинат натрия (мягкий загуститель,  вырабатывается из водорослей), экстракт розмарина, эуксил (безопасный  консервант и антиоксидант на основе этилгексилглицерина и токоферола)</p>', 100, 36, NULL, '{"ingridient1":"","ingridient2":"","ingridient3":"","ingridient4":"","ingridient5":"","ingridient6":""}', '/uploads/catalog/scrab2-2963dbc550.jpg', 'scrab-mindale-face', 1468849625, 1),
	(15, 9, 'Скраб для нормальной и комбинированной кожи с маслом ши', '<h6>Скраб для нормальной и комбинированной кожи с маслом ши</h6><p>Объем: 50 мл</p><p>состав основы: вода, растительные масла ши, макадамского  ореха, зерен пшеницы, сои, гранулы скорлумина (специально обработанная  яичная скорлупа), глицерил стеарат (мягкий эмульгатор, вырабатывается на  основе глицерина и стеариновой кислоты кокосового масла), цетеариловый  спирт (мягкий эмульгатор, вырабатывается из кокосового масла), альгинат  натрия (мягкий загуститель, вырабатывается из водорослей), экстракт  розмарина, эуксил (безопасный консервант и антиоксидант на основе  этилгексилглицерина и токоферола)</p>', 100, 42, NULL, '{"ingridient1":"","ingridient2":"","ingridient3":"","ingridient4":"","ingridient5":"","ingridient6":""}', '/uploads/catalog/scrab1-67e8858b4f.jpg', 'scrab-shi-face', 1468849659, 1),
	(16, 8, 'Экстракт арники', '<h6>Экстракт арники</h6><p>"Arnica  montana L.". С давних лет "иванов цвет" считается тайным оружием для  сохранения молодости и красоты усталой кожи. Арника - мощный  антиоксидант, активизирует кровообращение, способствует выводу токсинов,  ускоряет внутрикожный метаболизм, существенно сокращает отеки.</p>', 100, 12, NULL, '{"type":"\\u042d\\u043a\\u0441\\u0442\\u0440\\u0430\\u043a\\u0442\\u044b"}', '/uploads/catalog/extr1-d3ddedd999.jpg', 'extr-arniki', 1468850276, 1),
	(17, 8, 'Экстракт коры дуба', '<h6>Экстракт коры дуба</h6>', 100, 13, NULL, '{"type":"\\u042d\\u043a\\u0441\\u0442\\u0440\\u0430\\u043a\\u0442\\u044b"}', '/uploads/catalog/extr2-6b34ebfac7.jpg', 'extr-koraduba', 1468851048, 1),
	(18, 8, 'Экстракт женьшеня', '<h6>Экстракт женьшеня</h6><p>"Panax  ginseng". Биоактивный антиоксидант, стимулятор и адаптоген, помогающий  девушкам на протяжении веков сохранять юность и чистоту линий. Обогащает  кожу микроэлементами, защищает от УФ-лучей, стимулирует выработку  коллагена. Тонизирует, помогает победить усталость и дряблость кожи,  усиливая ее жизнеспособность.</p>', 100, 16, NULL, '{"type":"\\u042d\\u043a\\u0441\\u0442\\u0440\\u0430\\u043a\\u0442\\u044b"}', '/uploads/catalog/extr3-d31d9686d3.jpg', 'extr-jenshen', 1468851103, 1),
	(19, 8, 'Актив гель алоэ вера', '<h6>Актив гель алоэ вера</h6><p>"Aloe  Barbadensis". Актив Алоэ гель обладает мощным регенерирующим действием и  содержит большое количество витаминов и микроэлементов, исключительно  полезных для возрастной кожи. Гель снимает отечность, нормализует цвет  лица, обладает успокаивающим эффектом. Глубоко проникает в кожу,  увлажняя ее "изнутри".</p>', 100, 17, NULL, '{"type":"\\u0410\\u043a\\u0442\\u0438\\u0432\\u044b"}', '/uploads/catalog/active1-f40abf6242.jpg', 'active-aloe', 1468851234, 1),
	(20, 8, 'Актив сквалан оливковый', '<h6>Актив сквалан оливковый</h6><p>"Squalane".  Оливковый сквалан является агентом 007 в области смягчения и увлажнения  кожи, по своему составу очень напоминает собственный кожный жир  человека. Сквалан помогает проникать глубже другим полезным компонентам,  придает коже ощущение мягкости и шелковистости. Образует легкую  проницаемую защитную пленку на поверхности кожи, не создавая излишней  липкости.</p>', 100, 14, NULL, '{"type":"\\u0410\\u043a\\u0442\\u0438\\u0432\\u044b"}', '/uploads/catalog/active2-e8aeb83cae.jpg', 'active-scvalan', 1468851398, 1),
	(21, 8, 'Актив ментол', '<h6>Актив ментол</h6><p>"Menthol".  Ментол подарит восхитительную прохладу и поможет проснуться. Обладает  выраженными анестезирующими и антисептическими свойствами. Снижает зуд,  раздражение, уменьшает воспаления и красноту. Хорошо тонизирует кожу,  снимает отечность, улучшает микроциркуляцию, повышает всасывающую  способность кожи.</p>', 100, 9, NULL, '{"type":"\\u0410\\u043a\\u0442\\u0438\\u0432\\u044b"}', '/uploads/catalog/active3-918c664336.jpg', 'active-mentol', 1468851285, 1),
	(22, 8, 'Эфирное масло апельсина', '<h6>Эфирное масло апельсина</h6><p>"Сitrus  sinensis". Прекрасное масло, решающее многие проблемы. Твой выбор, если  планируешь составить средство для жирной кожи. Способно балансировать  процесс производства себума, укрепляет эпидермис, восстанавливает общую  эластичность и упругость кожи.</p>', 100, 16, NULL, '{"type":"\\u042d\\u0444\\u0438\\u0440\\u043d\\u044b\\u0435 \\u043c\\u0430\\u0441\\u043b\\u0430"}', '/uploads/catalog/efir1-631e9c01c1.jpg', 'efir-apelsin', 1468851619, 1),
	(23, 8, 'Эфирное масло гвоздики', '<h6>Эфирное масло гвоздики</h6>', 100, 20, NULL, '{"type":"\\u042d\\u0444\\u0438\\u0440\\u043d\\u044b\\u0435 \\u043c\\u0430\\u0441\\u043b\\u0430"}', '/uploads/catalog/efir2-2c442f7c89.jpg', 'efir-gvozd', 1468851667, 1),
	(24, 8, 'Витамин F', '<h6>Витамин F</h6><p>"Linoleic  and linolenic acids". Этот комплекс незаменимых жирных кислот не  синтезируется в нашем организме, но играет важнейшую роль в строительном  деле липидных пластов кожи. Они поддерживают правильную проницаемость  липидного барьера кожи, регулируют уровень увлажненности кожи,  "скрепляют" клетки эпидермиса. Уменьшают шелушения, "выравнивают" кожу.</p>', 100, 10, NULL, '{"type":"\\u0412\\u0438\\u0442\\u0430\\u043c\\u0438\\u043d\\u044b"}', '/uploads/catalog/vitamine1-8b9a21934e.jpg', 'vitamin-f', 1468851814, 1),
	(25, 14, 'Скраб сахарный для сухой или возрастной кожи', '<p> 			Скраб сахарный для сухой или возрастной кожи</p><p> 				150 г			</p><p>состав основы:  растительные масла миндальное, зерен пшеницы, сои, очищенный  тростниковый сахар, экстракт розмарина (антиоксидант), сорбитан  монолаурат (пищевая добавка, повышает вязкость, получают из кокоса и  листьев лаврового дерева).</p>', 100, 25, NULL, '{"ingridient1":"","ingridient2":"","ingridient3":"","ingridient4":"","ingridient5":"","ingridient6":""}', '/uploads/catalog/e3c28ec476b7307d1d6bfb2ce09a7fae-c04819b070.png', NULL, 1470672448, 1),
	(26, 14, 'Скраб солевой для сухой или возрастной кожи', '<p> 			Скраб солевой для сухой или возрастной кожи</p> 			<p> 				150 г			</p> 			<p>состав основы:  растительные масла миндальное, жожоба, сои, морская соль, экстракт  розмарина (антиоксидант), сорбитан монолаурат (пищевая добавка, повышает  вязкость, получают из кокоса и листьев лаврового дерева).</p> 		', 100, 26, NULL, '{"ingridient1":"","ingridient2":"","ingridient3":"","ingridient4":"","ingridient5":"","ingridient6":""}', '/uploads/catalog/db3d4c63640b0a4697ce4ba1fb3b805a-bd70364a8f.png', NULL, 1470672527, 1),
	(27, 20, 'Natural BB Cream', '<p>Если у тебя жирная или комбинированная кожа, ей тоже требуется  питательный крем - но не сколько увлажняющий, а поддерживающий  правильный баланс и действующий как мягкий антисептик. Выбирай средство с  маслами зверобоя и арники, экстрактом календулы, гелем алоэ и  очищающими кислотами. Этот крем оказывает мощное противовоспалительное и  регенерирующее действие, способствует уменьшению раздражения и  покраснения, так что твоя кожа всегда будет</p>', 100, 56, NULL, '{}', '/uploads/catalog/9d9842182ad0e07648bbbf19bffb3373-a352147f3a.jpg', 'natural-bb-cream', 1472055378, 1),
	(28, 20, 'Use It Cream', '<p>Питательный противовоспалительный крем для лица для жирной и комбинированной кожи</p>', NULL, 43, NULL, '{}', '/uploads/catalog/30b1b7fcfe84fc0c72fe8f12555cd305-ace2ee4452.png', 'use-it-cream', 1472055501, 1),
	(29, 20, 'Favorite Serum', '<p>Этот крем оказывает мощное противовоспалительное и регенерирующее  действие, способствует уменьшению раздражения и покраснения, так что  твоя кожа всегда будет свежей и здоровой. А это - залог хорошего  внешнего вида!</p>', 100, 45, NULL, '{}', '/uploads/catalog/709db636a27a6e7818ef71dea182bf28-e7dfca01f3.jpg', 'favorite-serum', 1472055557, 1),
	(30, 20, 'Magic Night Cream', '<p>Ночной питательный крем для лица против морщин с маслом аргана</p>', 100, 65, NULL, '{}', '/uploads/catalog/6e521f5fe51d2715b4d20a3e625797de-eaaec0f511.jpg', 'magic-night-cream', 1472055624, 1),
	(31, 21, 'Cake Soap', '<p>Мыло косметическое для сухой кожи</p><p>Если у тебя сухая кожа, стоит быть особенно внимательной в выборе  средств для ухода. Специально для тебя наши специалисты создали нежное  классическое мыло с тонким ароматом ванили. Cake Soap составлено таким  образом, чтобы учесть все потребности твоей кожи и максимально защитить  ее как во время мытья, так и после него. Мыло содержит экстракт ромашки,  который продезинфицирует невидимые глазу</p>', 100, 65, NULL, '{}', '/uploads/catalog/70b9beede0eb4e0ecd1ac7ad5bdb6f63-391177aa48.jpg', 'cake-soap', 1472055709, 1),
	(32, 21, 'Castile Soap', '<p>Мыло косметическое для сухой кожи</p><p>Если у тебя сухая кожа, стоит быть особенно внимательной в выборе  средств для ухода. Специально для тебя наши специалисты создали нежное  классическое мыло с тонким ароматом ванили. Cake Soap составлено таким  образом, чтобы учесть все потребности твоей кожи и максимально защитить  ее как во время мытья, так и после него. Мыло содержит экстракт ромашки,  который продезинфицирует невидимые глазу трещинки, и витамин Е, который  поможет заживлению и сделает кожу более эластичной. Ты быстро заметишь  разницу!</p>', 1000, 32, NULL, '{}', '/uploads/catalog/8457fe3d78a0d8224c0f307c6974ea43-9bfbb9bee4.jpg', 'castile-soap', 1472055876, 1),
	(33, 21, 'Breakfast Scrub Soap', '<p>Мыло косметическое для сухой кожи</p><h1>Cake Soap</h1><p>Если у тебя сухая кожа, стоит быть особенно внимательной в выборе  средств для ухода. Специально для тебя наши специалисты создали нежное  классическое мыло с тонким ароматом ванили. Cake Soap составлено таким  образом, чтобы учесть все потребности твоей кожи и максимально защитить  ее как во время мытья, так и после него. Мыло содержит экстракт ромашки,  который продезинфицирует невидимые глазу</p>', NULL, 46, NULL, '{}', '/uploads/catalog/0dca0a918bd0eadf91b56bf11c2282fd-88c040adb3.jpg', 'breakfast-scrub-soap', 1472055951, 1),
	(34, 21, 'Red Soap', '<p>Если у тебя сухая кожа, стоит быть особенно внимательной в выборе  средств для ухода. Специально для тебя наши специалисты создали нежное  классическое мыло с тонким ароматом ванили. Cake Soap составлено таким  образом, чтобы учесть все потребности твоей кожи и максимально защитить  ее как во время мытья, так и после него. Мыло содержит экстракт ромашки,  который продезинфицирует невидимые глазу</p>', 1000, 78, NULL, '{}', '/uploads/catalog/7affde4c61e57df09a9e3484e95b6565-c91b95cae6.jpg', 'red-soap', 1472056018, 1),
	(35, 22, 'Tropical Mask', '<p>Альгинатная очищающая пластифицирующая маска с экстрактом папайи,  аргинином и миоксинолом глубоко очищает поры от загрязнений, черных  точек, отшелушивает ороговевший слой кожи, стимулирует клеточное  обновление, тонизирует и выравнивает цвет лица, разглаживает мелкие  морщинки, обеспечивает длительный омолаживающий эффект. Кожа приобретает  здоровый, сияющий вид. Подойдет для любого типа кожи.</p>', 1000, 23, NULL, '{}', '/uploads/catalog/4507d2fa9b269a62f390581e45fe2c84-d97d404b61.jpg', 'tropical-mask', 1472056125, 1),
	(36, 22, 'Trendy Fruit Mask', '<p>Непосредственно перед применением 10 г порошка (около трети пакета)  развести в 30 мл (примерно 2-3 ст.л.) прохладной воды (не более 20°С).  Тщательно перемешать маску до состояния однородной густой сметаны и  нанести слоем толщиной 2-3 мм. Маска начинает загустевать уже через  несколько минут после разведения, поэтому действовать нужно быстро.  Через 30 мин снять маску одним движением снизу вверх. Для  дополнительного эффекта</p>', 100, 45, NULL, '{}', '/uploads/catalog/20c34ebab4f35f317484b4f8176c0401-933390dbc3.jpg', 'trendy-fruit-mask', 1472056212, 1),
	(37, 23, 'Супер бальзам', '<p>супер пупер бальзам для лица</p>', 100, 23, NULL, '{}', '/uploads/catalog/11f6d88a8f4bb38677b9b4932bc7c88c-7c44f8b5ab.png', 'super-bal-zam', 1472126026, 1),
	(38, 26, 'Мыло', '<p>Мыло мыльное&nbsp;</p>', 45, 46, 0, '{}', '/uploads/catalog/8457fe3d78a0d8224c0f307c6974ea43-600c273011.jpg', 'mylo', 1472141143, 1),
	(39, 26, 'Мыло', '', 100, 34, 0, '{}', '', 'mylo3', 1472141239, 1),
	(40, 37, 'No ingredient', '', NULL, NULL, 0, '{}', '/uploads/catalog/vopros-5763abe87e.jpg', 'no-ingredient', 1474481479, 1);
/*!40000 ALTER TABLE `easyii_catalog_items` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_catalog_item_data
CREATE TABLE IF NOT EXISTS `easyii_catalog_item_data` (
  `data_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) DEFAULT NULL,
  `name` varchar(128) NOT NULL,
  `value` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`data_id`),
  KEY `item_id_name` (`item_id`,`name`),
  KEY `value` (`value`(300))
) ENGINE=MyISAM AUTO_INCREMENT=224 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_catalog_item_data: 30 rows
DELETE FROM `easyii_catalog_item_data`;
/*!40000 ALTER TABLE `easyii_catalog_item_data` DISABLE KEYS */;
INSERT INTO `easyii_catalog_item_data` (`data_id`, `item_id`, `name`, `value`) VALUES
	(1, 1, 'brand', 'Nokia'),
	(2, 1, 'storage', '1'),
	(3, 1, 'touchscreen', '0'),
	(4, 1, 'cpu', '1'),
	(5, 1, 'color', 'White'),
	(6, 1, 'color', 'Red'),
	(7, 1, 'color', 'Blue'),
	(8, 2, 'brand', 'Samsung'),
	(9, 2, 'storage', '32'),
	(10, 2, 'touchscreen', '1'),
	(11, 2, 'cpu', '8'),
	(12, 2, 'features', 'Wi-fi'),
	(13, 2, 'features', 'GPS'),
	(14, 3, 'brand', 'Apple'),
	(15, 3, 'storage', '64'),
	(16, 3, 'touchscreen', '1'),
	(17, 3, 'cpu', '4'),
	(18, 3, 'features', 'Wi-fi'),
	(19, 3, 'features', '4G'),
	(20, 3, 'features', 'GPS'),
	(188, 16, 'type', 'Экстракты'),
	(187, 17, 'type', 'Экстракты'),
	(186, 18, 'type', 'Экстракты'),
	(194, 19, 'type', 'Активы'),
	(223, 20, 'type', 'Активы'),
	(222, 21, 'type', 'Активы'),
	(200, 23, 'type', 'Эфирные масла'),
	(199, 22, 'type', 'Эфирные масла'),
	(203, 24, 'type', 'Витамины'),
	(215, 26, 'ingridient6', '');
/*!40000 ALTER TABLE `easyii_catalog_item_data` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_faq
CREATE TABLE IF NOT EXISTS `easyii_faq` (
  `faq_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `order_num` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`faq_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_faq: 3 rows
DELETE FROM `easyii_faq`;
/*!40000 ALTER TABLE `easyii_faq` DISABLE KEYS */;
INSERT INTO `easyii_faq` (`faq_id`, `question`, `answer`, `order_num`, `status`) VALUES
	(1, 'Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?', 'But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure', 1, 1),
	(2, 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum?', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta <a href="http://easyiicms.com/">sunt explicabo</a>.', 2, 1),
	(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 't enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 3, 1);
/*!40000 ALTER TABLE `easyii_faq` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_feedback
CREATE TABLE IF NOT EXISTS `easyii_feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(64) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `text` text NOT NULL,
  `answer_subject` varchar(128) DEFAULT NULL,
  `answer_text` text,
  `time` int(11) DEFAULT '0',
  `ip` varchar(16) NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`feedback_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_feedback: 0 rows
DELETE FROM `easyii_feedback`;
/*!40000 ALTER TABLE `easyii_feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `easyii_feedback` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_files
CREATE TABLE IF NOT EXISTS `easyii_files` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `file` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `slug` varchar(128) DEFAULT NULL,
  `downloads` int(11) DEFAULT '0',
  `time` int(11) DEFAULT '0',
  `order_num` int(11) DEFAULT NULL,
  PRIMARY KEY (`file_id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_files: 1 rows
DELETE FROM `easyii_files`;
/*!40000 ALTER TABLE `easyii_files` DISABLE KEYS */;
INSERT INTO `easyii_files` (`file_id`, `title`, `file`, `size`, `slug`, `downloads`, `time`, `order_num`) VALUES
	(1, 'Price list', '/uploads/files/example.csv', 104, 'price-list', 0, 1468832918, 1);
/*!40000 ALTER TABLE `easyii_files` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_gallery_categories
CREATE TABLE IF NOT EXISTS `easyii_gallery_categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  `slug` varchar(128) DEFAULT NULL,
  `tree` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  `order_num` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_gallery_categories: 2 rows
DELETE FROM `easyii_gallery_categories`;
/*!40000 ALTER TABLE `easyii_gallery_categories` DISABLE KEYS */;
INSERT INTO `easyii_gallery_categories` (`category_id`, `title`, `image`, `slug`, `tree`, `lft`, `rgt`, `depth`, `order_num`, `status`) VALUES
	(1, 'Album 1', '/uploads/gallery/album-1.jpg', 'album-1', 1, 1, 2, 0, 2, 1),
	(2, 'Album 2', '/uploads/gallery/album-2.jpg', 'album-2', 2, 1, 2, 0, 1, 1);
/*!40000 ALTER TABLE `easyii_gallery_categories` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_guestbook
CREATE TABLE IF NOT EXISTS `easyii_guestbook` (
  `guestbook_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `text` text NOT NULL,
  `answer` text,
  `email` varchar(128) DEFAULT NULL,
  `time` int(11) DEFAULT '0',
  `ip` varchar(16) NOT NULL,
  `new` tinyint(1) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`guestbook_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_guestbook: 6 rows
DELETE FROM `easyii_guestbook`;
/*!40000 ALTER TABLE `easyii_guestbook` DISABLE KEYS */;
INSERT INTO `easyii_guestbook` (`guestbook_id`, `name`, `title`, `text`, `answer`, `email`, `time`, `ip`, `new`, `status`) VALUES
	(1, 'First user', '', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', NULL, NULL, 1468832914, '127.0.0.1', 1, 1),
	(2, 'Second user', '', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.', NULL, 1468832916, '127.0.0.1', 0, 1),
	(3, 'Third user', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL, NULL, 1468832917, '127.0.0.1', 0, 1),
	(4, 'Sergey', '', 'Классный магазин', NULL, 'qweer@mail.ru', 1473097384, '127.0.0.1', 1, 1),
	(5, 'Сергей', '', 'Супер пупер дупер', NULL, 'qweer@mail.ru', 1473618255, '127.0.0.1', 1, 1),
	(6, 'fddf', '', 'dssgg', NULL, 'fdgdg@SWDSA.ER', 1473618679, '127.0.0.1', 1, 1);
/*!40000 ALTER TABLE `easyii_guestbook` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_loginform
CREATE TABLE IF NOT EXISTS `easyii_loginform` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `ip` varchar(16) NOT NULL,
  `user_agent` varchar(1024) NOT NULL,
  `time` int(11) DEFAULT '0',
  `success` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_loginform: 26 rows
DELETE FROM `easyii_loginform`;
/*!40000 ALTER TABLE `easyii_loginform` DISABLE KEYS */;
INSERT INTO `easyii_loginform` (`log_id`, `username`, `password`, `ip`, `user_agent`, `time`, `success`) VALUES
	(1, 'root', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.80 Safari/537.36', 1468832910, 1),
	(2, 'root', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1; rv:46.0) Gecko/20100101 Firefox/46.0', 1468834439, 1),
	(3, 'root', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.80 Safari/537.36', 1468937448, 1),
	(4, 'root', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.80 Safari/537.36', 1469449127, 1),
	(5, 'admin', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0', 1469813290, 1),
	(6, 'root', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0', 1470506936, 1),
	(7, 'root', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0', 1470672395, 1),
	(8, 'admin', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0', 1471189881, 1),
	(9, 'admin', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0', 1471244109, 1),
	(10, 'root', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2202.3 Safari/537.36', 1471453295, 1),
	(11, 'admin', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0', 1471536960, 1),
	(12, 'root', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0', 1471538024, 1),
	(13, 'root', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2202.3 Safari/537.36', 1471712746, 1),
	(14, 'admin', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0', 1472054693, 1),
	(15, 'root', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:47.0) Gecko/20100101 Firefox/47.0', 1472057831, 1),
	(16, 'admin', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0', 1472123484, 1),
	(17, 'root', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0', 1472125016, 1),
	(18, 'admin', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0', 1472125950, 1),
	(19, 'root', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0', 1472141048, 1),
	(20, 'admin', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0', 1472492562, 1),
	(21, 'admin', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0', 1473008423, 1),
	(22, 'root', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0', 1473008509, 1),
	(23, 'admin', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0', 1473015426, 1),
	(24, 'root', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0', 1473015541, 1),
	(25, 'root', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0', 1474188628, 1),
	(26, 'root', '******', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:48.0) Gecko/20100101 Firefox/48.0', 1474481290, 1);
/*!40000 ALTER TABLE `easyii_loginform` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_migration
CREATE TABLE IF NOT EXISTS `easyii_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_migration: ~2 rows (приблизительно)
DELETE FROM `easyii_migration`;
/*!40000 ALTER TABLE `easyii_migration` DISABLE KEYS */;
INSERT INTO `easyii_migration` (`version`, `apply_time`) VALUES
	('m000000_000000_base', 1468832904),
	('m000000_000000_install', 1468832909);
/*!40000 ALTER TABLE `easyii_migration` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_modules
CREATE TABLE IF NOT EXISTS `easyii_modules` (
  `module_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `class` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `icon` varchar(32) NOT NULL,
  `settings` text NOT NULL,
  `notice` int(11) DEFAULT '0',
  `order_num` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`module_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_modules: 13 rows
DELETE FROM `easyii_modules`;
/*!40000 ALTER TABLE `easyii_modules` DISABLE KEYS */;
INSERT INTO `easyii_modules` (`module_id`, `name`, `class`, `title`, `icon`, `settings`, `notice`, `order_num`, `status`) VALUES
	(1, 'article', 'yii\\easyii\\modules\\article\\ArticleModule', 'Статьи', 'pencil', '{"categoryThumb":true,"articleThumb":true,"enablePhotos":true,"enableShort":true,"shortMaxLength":255,"enableTags":true,"itemsInFolder":false}', 0, 65, 1),
	(2, 'carousel', 'yii\\easyii\\modules\\carousel\\CarouselModule', 'Карусель', 'picture', '{"enableTitle":true,"enableText":true}', 0, 40, 1),
	(3, 'catalog', 'yii\\easyii\\modules\\catalog\\CatalogModule', 'Каталог', 'list-alt', '{"categoryThumb":true,"itemsInFolder":false,"itemThumb":true,"itemPhotos":true,"itemDescription":true,"itemSale":true}', 0, 100, 1),
	(4, 'faq', 'yii\\easyii\\modules\\faq\\FaqModule', 'Вопросы и ответы', 'question-sign', '[]', 0, 45, 1),
	(5, 'feedback', 'yii\\easyii\\modules\\feedback\\FeedbackModule', 'Обратная связь', 'earphone', '{"mailAdminOnNewFeedback":true,"subjectOnNewFeedback":"New feedback","templateOnNewFeedback":"@easyii\\/modules\\/feedback\\/mail\\/en\\/new_feedback","answerTemplate":"@easyii\\/modules\\/feedback\\/mail\\/en\\/answer","answerSubject":"Answer on your feedback message","answerHeader":"Hello,","answerFooter":"Best regards.","enableTitle":false,"enablePhone":true,"enableCaptcha":false}', 0, 60, 1),
	(6, 'file', 'yii\\easyii\\modules\\file\\FileModule', 'Файлы', 'floppy-disk', '[]', 0, 30, 1),
	(7, 'gallery', 'yii\\easyii\\modules\\gallery\\GalleryModule', 'Фотогалерея', 'camera', '{"categoryThumb":true,"itemsInFolder":false}', 0, 90, 1),
	(8, 'guestbook', 'yii\\easyii\\modules\\guestbook\\GuestbookModule', 'Гостевая книга', 'book', '{"enableTitle":false,"enableEmail":true,"preModerate":false,"enableCaptcha":false,"mailAdminOnNewPost":true,"subjectOnNewPost":"New message in the guestbook.","templateOnNewPost":"@easyii\\/modules\\/guestbook\\/mail\\/en\\/new_post","frontendGuestbookRoute":"\\/guestbook","subjectNotifyUser":"Your post in the guestbook answered","templateNotifyUser":"@easyii\\/modules\\/guestbook\\/mail\\/en\\/notify_user"}', 4, 80, 1),
	(9, 'news', 'yii\\easyii\\modules\\news\\NewsModule', 'Новости', 'bullhorn', '{"enableThumb":true,"enablePhotos":true,"enableShort":true,"shortMaxLength":256,"enableTags":true}', 0, 70, 1),
	(10, 'page', 'yii\\easyii\\modules\\page\\PageModule', 'Страницы', 'file', '[]', 0, 50, 1),
	(11, 'shopcart', 'yii\\easyii\\modules\\shopcart\\ShopcartModule', 'Заказы', 'shopping-cart', '{"mailAdminOnNewOrder":true,"subjectOnNewOrder":"New order","templateOnNewOrder":"@easyii\\/modules\\/shopcart\\/mail\\/en\\/new_order","subjectNotifyUser":"Your order status changed","templateNotifyUser":"@easyii\\/modules\\/shopcart\\/mail\\/en\\/notify_user","frontendShopcartRoute":"\\/shopcart\\/order","enablePhone":true,"enableEmail":true}', 0, 120, 1),
	(12, 'subscribe', 'yii\\easyii\\modules\\subscribe\\SubscribeModule', 'E-mail рассылка', 'envelope', '[]', 0, 10, 1),
	(13, 'text', 'yii\\easyii\\modules\\text\\TextModule', 'Текстовые блоки', 'font', '[]', 0, 20, 1);
/*!40000 ALTER TABLE `easyii_modules` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_news
CREATE TABLE IF NOT EXISTS `easyii_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  `short` varchar(1024) DEFAULT NULL,
  `text` text NOT NULL,
  `slug` varchar(128) DEFAULT NULL,
  `time` int(11) DEFAULT '0',
  `views` int(11) DEFAULT '0',
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`news_id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_news: 3 rows
DELETE FROM `easyii_news`;
/*!40000 ALTER TABLE `easyii_news` DISABLE KEYS */;
INSERT INTO `easyii_news` (`news_id`, `title`, `image`, `short`, `text`, `slug`, `time`, `views`, `status`) VALUES
	(1, '<b>Заработал наш сайт!</b>', '/uploads/news/s7j5nssnsmc-fd675b153e.jpg', '1 октября 2016 года заработал наш сайт! Ура! Теперь наши любимые клиенты могут быстро получать новую информацию о новинках и делать заказы.', '<p><strong>Sed ut perspiciatis</strong>, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem.&nbsp;</p><ul><li>item 1</li><li>item 2</li><li>item 3</li></ul><p>ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur?</p>', 'b-b', 1473239280, 1, 1),
	(2, '<b>Настала осень, холода не за горами!</b>', '/uploads/news/n2b29ful1bq-e7d12fcc90.jpg', 'Не только в зимнеее время нужно баловать ваши губы! Горячий, сухой воздух летом может легко высушить ваши губы, а может и хлорка из плавательных бассейнов. Чтобы сохранить ваши губы красивыми круглый год, мы разработали для вас скраб "Ягодный"!', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p><ol> <li>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </li><li>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</li></ol>', 'b-b-2', 1473325680, 0, 1),
	(3, 'Third news title', '/uploads/news/news-3.jpg', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt molliti', '<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>', 'third-news-title', 1468660112, 1, 1);
/*!40000 ALTER TABLE `easyii_news` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_pages
CREATE TABLE IF NOT EXISTS `easyii_pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `text` text NOT NULL,
  `slug` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`page_id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_pages: 19 rows
DELETE FROM `easyii_pages`;
/*!40000 ALTER TABLE `easyii_pages` DISABLE KEYS */;
INSERT INTO `easyii_pages` (`page_id`, `title`, `text`, `slug`) VALUES
	(1, 'Index', '<p><strong>Мы рады приветствовать всех на нашем сайте!</strong>&nbsp;</p><p>У нас вы сможете приобрести для себя или же для других членов вашей семьи готовую косметику, в основе которой содержатся исключительно натуральные ингредиенты. А также заказать индивидуальное средство, содержащее в себе набор ваших любимых ароматов. Кроме того, на нашем сайте вы найдете множество полезных советов по уходу за кожей, телом и волосами. Сделав заказ в нашем интернет-магазине, не забудьте потом оставить свой отзыв - так вы сможете поделиться своими впечатлениями о нашей продукции с другими покупателями и дать нам обратную. Следите за новинками - мы постоянно экспериментируем и создаем праздничные косметические средства. Будьте с нами!    </p>', 'page-index'),
	(2, 'Shop', '', 'page-shop'),
	(3, 'Shop search', '', 'page-shop-search'),
	(4, 'Корзина', '', 'page-shopcart'),
	(5, 'Order created', '<p>Your order successfully created. Our manager will contact you as soon as possible.</p>', 'page-shopcart-success'),
	(6, 'News', '', 'page-news'),
	(7, 'Articles', '', 'page-articles'),
	(8, 'Gallery', '', 'page-gallery'),
	(9, 'Guestbook', '', 'page-guestbook'),
	(10, 'FAQ', '', 'page-faq'),
	(11, 'Contact', '<p><strong>Address</strong>: Dominican republic, Santo Domingo, Some street 123</p><p><strong>ZIP</strong>: 123456</p><p><strong>Phone</strong>: +1 234 56-78</p><p><strong>E-mail</strong>: demo@example.com</p>', 'page-contact'),
	(12, 'Создайте свое индивидуальное косметическое средство!', '<p>Если в ассортименте нашей готовой продукции вы не нашли нужное косметическое средство с необходимым вам ароматом или нашли, но в его составе имеются ингредиенты, вызывающие у вас аллергическую реакцию, мы можем изготовить для вас средство с индивидуальным для вас составом.  Свяжитесь с любым из мастеров и закажите изготовление индивидуального средства. Это реально, недорого и удобно. Подобным образом можно заказывать индивидуальные косметические наборы в подарок.</p><p>Лучшая органическая декоративная косметика в Украине собрана на нашем сайте. Проверенные специалисты, качественная продукция, большой выбор – здесь есть все для вашего идеального внешнего вида. Покупайте и возвращайтесь к нам снова: ассортимент постоянно расширяется.</p><p>Если в ассортименте нашей готовой продукции вы не нашли  необходимое косметическое средство с необходимым вам ароматом или нашли,  но в его составе имеются ингредиенты, вызывающие у вас аллергическую  реакцию, мы можем изготовить для вас средство с индивидуальным для вас  составом.  Свяжитесь с любым из мастеров и закажите изготовление  индивидуального средства. Это реально, недорого и удобно. Подобным  образом можно заказывать индивидуальные косметические наборы в подарок.</p><p>Лучшая  органическая декоративная косметика в Украине собрана на нашем сайте.  Проверенные специалисты, качественная продукция, большой выбор – здесь  есть все для вашего идеального внешнего вида. Покупайте и возвращайтесь к  нам снова: ассортимент постоянно расширяется.</p>', 'page-custom'),
	(13, 'Выберите основу для Вашего средства:', '<p>тра ля ля</p>', 'page-base'),
	(14, 'Выберите ингрединеты для Вашего средства:', '', 'page-ingridients'),
	(15, 'Страниц готовые средства', '<p>Страниц готовые средства Страниц готовые средства Страниц готовые средства Страниц готовые средства</p><p>Страниц готовые средства&nbsp; Страниц готовые средства Страниц готовые средства Страниц готовые средства</p>', 'page-grid'),
	(16, 'О проекте', '<p>\r\n	Своим появлением на свет косметика Lerox обязана не команде высококвалифицированных химиков-лаборантов, не суперсовременному центру исследований, а симпатичной девчушке Арише - доченьке одной из основательниц компании, Оксане. Все началось</p><p style="text-align: center;">\r\n	<img src="/uploads/pages/1-e407c91a02.jpg"></p><p>\r\n	с того, что...</p><p>\r\n	Наши приоритеты - экологически чистая продукция, максимальная польза здоровью, борьба с возрастными изменениями кожи. <br>\r\n	Для  нашего мыла, мы не используем мыльную основу, все наше мыло является  полностью натуральным, !!!сваренным "с нуля"!!!  только из натуральных  природных ингредиентов и добавок, как по старинным рецептурам, так и с  использованием современных разработок в области косметологии и  дерматологии.<br>\r\n	Натуральное мыло ручной работы  – это замечательный  продукт, дар от природы, поддерживающий здоровье и красоту Вашей кожи,  разработанный и созданный с любовью, знаниями и наилучшими пожеланиями  красоты и здоровья специально для Вас!</p><p>\r\n	Мы  любим все настоящее и экологическое: косметику, еду, ткани, моющие  средства, а также отношения между людьми и отношение к делу.<br>\r\n	Будьте  уверены - покупая нашу продукцию, будь то натуральное мыло "с нуля" или  косметика из натуральных компонентов, в неё будет вложено знания и  чувство ответственности за то, что мы делаем. <br>\r\n	Побалуйте себя натуральным мылом и косметикой ручной работы!</p><hr><p>\r\n	<br>\r\n	<strong>Немного о хранении нашей продукции. </strong></p><p>\r\n	Натуральное  мыло со временем только набирает плюсов. Трехмесячной выдержки мыло  лучше по свойствам, чем свежесваренное, полугодичное - лучше, чем  трехмесячное. Единственный минус - со временем аромат и цвет станет  менее выраженным. <br>\r\n	Натуральное мыло с нуля хранится в сухом  проветриваемом помещении до начала использования, от года до трех лет со  дня изготовления, в зависимости от вида мыла. Натуральное мыло лучше  хранить без упаковки, или приоткрыв упаковку, чтобы мыло "дышало".<br>\r\n	Натуральная косметика ручной работы хранится только в холодильнике, согласно указанному сроку хранения.</p><p>\r\n	Внимательно  читайте описание продукции перед заказом, обращая внимание на  ингредиенты. Обязательно оговорите, если у вас есть аллергия. <br>\r\n	Смело обращайтесь, если у Вас есть вопросы, пожелания, замечания. <br>\r\n	Перед заказом лучше списаться, чтобы оговорить ваши пожелания. Мы будем стараться максимально точно им следовать.</p><p style="text-align: center;">\r\n	<img src="/uploads/pages/123-5694b3b8e6.jpg"></p>', 'page-about'),
	(17, 'Доставка', '<li><strong> Курьерская доставка по городу Киеву. </strong></li>\r\n<p>\r\nИнтернет-магазин компьютеров, офисной и бытовой техники «USB» располагает собственной транспортной службой, сотрудники которой осуществят доставку товара к вашему дому, месту работы или отдыха месту в пределах города Одессы. Если этот вариант получения товара для вас наиболее удобен, выберите его в списке при оформлении заказа. Наш менеджер при обработке заказа свяжется по указанному вами номеру телефона и уточнит удобные для вас время и место получения товара. Доставка осуществляется непосредственно до дверей здания местонахождения покупателя.\r\n</p>\r\n<p>\r\n		График доставок:\r\n	ежедневно с ПН по ПТ- с 10.00 до 19.00\r\n</p>\r\n<p>\r\n		Доставка заказов, оформленых до 15:00, будет произведена в тот же день при наличии товара на складе.\r\n</p>\r\n<p>\r\n		Расценки на доставку:\r\n</p>\r\n<p>\r\n		  40 грн, если сумма заказа от 2500 грн. и выше;\r\n	  60 грн., если общая сумма заказа составляет менее 2500 грн.\r\n</p>\r\n<hr>\r\n<li><strong>Курьерская доставка по городу Одессе. </strong></li>\r\nИнтернет-магазин компьютеров, офисной и бытовой техники «USB» располагает собственной транспортной службой, сотрудники которой осуществят доставку товара к вашему дому, месту работы или отдыха месту в пределах города Одессы. Если этот вариант получения товара для вас наиболее удобен, выберите его в списке при оформлении заказа. Наш менеджер при обработке заказа свяжется по указанному вами номеру телефона и уточнит удобные для вас время и место получения товара. Доставка осуществляется непосредственно до дверей здания местонахождения покупателя.\r\n<p>\r\n		График доставок:\r\n	ежедневно с ПН по ПТ- с 10.00 до 19.00\r\n</p>\r\n<p>\r\n		Доставка заказов, оформленых до 15:00, будет произведена в тот же день при наличии товара на складе.\r\n	Расценки на доставку:\r\n</p>\r\n<p>\r\n		  40 грн, если сумма заказа от 2500 грн. и выше;\r\n	  60 грн., если общая сумма заказа составляет менее 2500 грн.\r\n</p>\r\n<hr>\r\n<br>\r\n<li><strong>Доставка по Украине</strong></li>\r\n	Интернет-магазин компьютеров, офисной и  бытовой техники «USB» для жителей Украины осуществляет доставку с  помощью любой почтовой службы, службы доставки, или перевозчика,  располагающих представительством в городе или населенном пункте  получателя.\r\n<p>\r\n	<img src="http://shop-yii2.loc/uploads/pages/content305799-d1dc383594.png">\r\n</p>\r\n<p>\r\n		 	Список наиболее популярных служб доставки товаров по Украине:\r\n	 	- ИнТайм\r\n	 	- Новая Почта\r\n	<img src="/uploads/pages/3-45a042358c.jpg">\r\n</p>\r\n<p>\r\n		 	Оплату доставки и страховки осуществляет получатель согласно тарифам избранной службы доставки.\r\n</p>\r\n<p>\r\n		 	Ежедневно Львов, Ивано-франковск, Мукачево  и остальные населенные пункты западной украины, Черкассы, Хмельницкий и  другие города центральной и восточной Украины получают грузы от  интернет-магазина "USB".\r\n</p>', 'page-delivery'),
	(18, 'Контакты', '<p style="margin-left: 40px;"><img src="/uploads/pages/tel-7a5200e5e9.jpg"> &nbsp;<strong>+38 (093) 4221010<br></strong></p><p style="margin-left: 20px;"><strong></strong></p><p style="margin-left: 40px;"><img src="/uploads/pages/tel-7cb5e67dcb.jpg"> <strong> &nbsp;+38 (093) 4221010<br></strong></p><hr><br><p style="margin-left: 40px;"><img src="/uploads/pages/mail-3914109deb.jpg"> <strong>lerox@gmail.com<br></strong></p><hr><p style="margin-left: 20px;"><br><strong></strong></p><p style="margin-left: 20px;"><strong></strong></p><p><strong></strong></p><p style="margin-left: 40px;"><img src="/uploads/pages/vk-2b52541089.jpg"><strong> <a href="https://vk.com/lerox.cosmetics"> https://vk.com/lerox.cosmetics<br></a></strong></p><p style="margin-left: 40px;"><img src="/uploads/pages/fb-38811c5285.jpg"><a href="https://www.facebook.com/lerox_cosmetics"><strong>https://www.facebook.com/lerox_cosmetics</strong></a></p><p style="margin-left: 20px;"><a href="https://www.facebook.com/lerox_cosmetics"><strong></strong></a></p><p style="margin-left: 40px;"><img src="/uploads/pages/ig-6db812399d.jpg"> <strong></strong><a href="https://www.instagram.com/lerox_cosmetics"><strong>https://www.instagram.com/lerox_cosmetics</strong></a></p><p><cite></cite></p><p style="margin-left: 20px;"> </p><p style="margin-left: 20px;"><a href="https://www.facebook.com/lerox_cosmetics"><strong></strong></a></p><p style="text-align: center;"><img src="/uploads/pages/slajjdshou-2-glavnaya-df543abd11.jpg"></p><p style="margin-left: 20px;"><br><a href="https://www.facebook.com/lerox_cosmetics"><strong></strong></a></p><p style="margin-left: 20px;"><strong><a href="https://vk.com/lerox.cosmetics"></a></strong></p><p style="margin-left: 20px;"><strong></strong></p>', 'page-contacts'),
	(19, 'Магазины', '', 'page-shops');
/*!40000 ALTER TABLE `easyii_pages` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_photos
CREATE TABLE IF NOT EXISTS `easyii_photos` (
  `photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(128) NOT NULL,
  `item_id` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `order_num` int(11) NOT NULL,
  PRIMARY KEY (`photo_id`),
  KEY `model_item` (`class`,`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_photos: 21 rows
DELETE FROM `easyii_photos`;
/*!40000 ALTER TABLE `easyii_photos` DISABLE KEYS */;
INSERT INTO `easyii_photos` (`photo_id`, `class`, `item_id`, `image`, `description`, `order_num`) VALUES
	(1, 'yii\\easyii\\modules\\catalog\\models\\Item', 1, '/uploads/photos/3310-1.jpg', '', 1),
	(2, 'yii\\easyii\\modules\\catalog\\models\\Item', 1, '/uploads/photos/3310-2.jpg', '', 2),
	(3, 'yii\\easyii\\modules\\catalog\\models\\Item', 2, '/uploads/photos/galaxy-1.jpg', '', 3),
	(4, 'yii\\easyii\\modules\\catalog\\models\\Item', 2, '/uploads/photos/galaxy-2.jpg', '', 4),
	(5, 'yii\\easyii\\modules\\catalog\\models\\Item', 2, '/uploads/photos/galaxy-3.jpg', '', 5),
	(6, 'yii\\easyii\\modules\\catalog\\models\\Item', 2, '/uploads/photos/galaxy-4.jpg', '', 6),
	(7, 'yii\\easyii\\modules\\catalog\\models\\Item', 3, '/uploads/photos/iphone-1.jpg', '', 7),
	(8, 'yii\\easyii\\modules\\catalog\\models\\Item', 3, '/uploads/photos/iphone-2.jpg', '', 8),
	(9, 'yii\\easyii\\modules\\catalog\\models\\Item', 3, '/uploads/photos/iphone-3.jpg', '', 9),
	(10, 'yii\\easyii\\modules\\catalog\\models\\Item', 3, '/uploads/photos/iphone-4.jpg', '', 10),
	(28, 'yii\\easyii\\modules\\news\\models\\News', 1, '/uploads/photos/s7j5nssnsmc-585eb4127a.jpg', '', 28),
	(29, 'yii\\easyii\\modules\\gallery\\models\\Category', 1, '/uploads/photos/del1-19e12b394e.jpg', 'Мы доставляем косметику во все города и населенные пункты Украины с помощью перевозчиков.', 24),
	(14, 'yii\\easyii\\modules\\news\\models\\News', 1, '/uploads/photos/s7j5nssnsmc-e89cc78c23.jpg', '', 14),
	(15, 'yii\\easyii\\modules\\article\\models\\Item', 1, '/uploads/photos/article-1-1.jpg', '', 15),
	(16, 'yii\\easyii\\modules\\article\\models\\Item', 1, '/uploads/photos/article-1-2.jpg', '', 16),
	(17, 'yii\\easyii\\modules\\article\\models\\Item', 1, '/uploads/photos/article-1-3.jpg', '', 17),
	(18, 'yii\\easyii\\modules\\article\\models\\Item', 1, '/uploads/photos/news-1-4.jpg', '', 18),
	(30, 'yii\\easyii\\modules\\gallery\\models\\Category', 1, '/uploads/photos/nat-91db811b08.jpg', 'Органическая косметика из Германии Topfer – это нежнейшие средства на основе ценных масел холодного отжима, молочной сыворотки и пшеничных отрубей. Вся линия имеет немецкий органический сертификат и рекомендована малышам с первого дня жизни.Особой любовью среди клиентов пользуется сухая смесь для ванн на основе отрубей и сухого молока. Одна крышечка этого средства превращает воду в ванной в увлажняющее молочко, которое смягчает кожу и не оставляет жирных следов. Ваш малыш останется довольным приятным ароматом и нежным прикосновением воды к коже.', 30),
	(24, 'yii\\easyii\\modules\\gallery\\models\\Category', 1, '/uploads/photos/family-6fdb8f7d90.jpg', 'Уникальная рецептура - универсального крема "для всех" быть просто не может, так как каждый человек уникален! Мы уверены, что именно такой подход гарантирует результат - отзывы наших дорогих клиенток это подтверждают! \n    Активный состав и гарантированно высокое качество. Состав производства нашей косметики включает в себя около 2000 ингредиентов. Используются только лучшие, современные активные вещества. \n    Максимум натуральных компонентов! Мы не используем в производстве косметики вытяжки - в лабораториях индивидуальной косметики I.C.Lab применяются только живые клетки растений. Их эффективность работы проверена и доказана многими учеными. \n    Накопительный эффект и пролонгированное действие. Живые клетки воздействуют на клеточном уровне, и кожа, получив такую подпитку, сохраняется молодой довольно долго, а процесс увядания тормозится.', 27),
	(25, 'yii\\easyii\\modules\\gallery\\models\\Category', 1, '/uploads/photos/vibor-43e2009346.jpg', 'Уникальная рецептура - универсального крема "для всех" быть просто не может, так как каждый человек уникален! Мы уверены, что именно такой подход гарантирует результат - отзывы наших дорогих клиенток это подтверждают! \n    Активный состав и гарантированно высокое качество. Состав производства нашей косметики включает в себя около 2000 ингредиентов. Используются только лучшие, современные активные вещества. \n    Максимум натуральных компонентов! Мы не используем в производстве косметики вытяжки - в лабораториях индивидуальной косметики I.C.Lab применяются только живые клетки растений. Их эффективность работы проверена и доказана многими учеными. \n    Накопительный эффект и пролонгированное действие. Живые клетки воздействуют на клеточном уровне, и кожа, получив такую подпитку, сохраняется молодой довольно долго, а процесс увядания тормозится.', 25),
	(27, 'yii\\easyii\\modules\\gallery\\models\\Category', 1, '/uploads/photos/hand-dc0439caeb.jpg', 'В разработке рецептур принимают участие косметологи и химики-технологи с многолетним опытом работы. В нашем ассортименте фито-минеральные средства для очищения и ухода за кожей лица и тела (литобиочистки, литобиомаски, литобиоскраб), солевые скрабы для тела, мягкое мыло Бельди.\n\nФито-минеральная косметика производится на основе уникального по своим характеристикам минерала вулканического происхождения – цеолита с добавлением каолина, сухих растительных экстрактов. Продукция не содержит искусственных консервантов, ароматизаторов, синтетических витаминов, загустителей и прочих вредных для здоровья модификаций. Производится и хранится в виде порошка, комбинируется с водой, маслами, душистыми водами, разнообразными активами. Разводится непосредственно перед применением и наносится на кожу. После нанесения начинает активно работать, отдавая коже полезные микроэлементы, витамины и помогает сохранить природную естественную красоту Вашей кожи.\n\nСолевые скрабы для тела изготовлены из натуральных компонетов, обладают н', 29);
/*!40000 ALTER TABLE `easyii_photos` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_seotext
CREATE TABLE IF NOT EXISTS `easyii_seotext` (
  `seotext_id` int(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(128) NOT NULL,
  `item_id` int(11) NOT NULL,
  `h1` varchar(128) DEFAULT NULL,
  `title` varchar(128) DEFAULT NULL,
  `keywords` varchar(128) DEFAULT NULL,
  `description` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`seotext_id`),
  UNIQUE KEY `model_item` (`class`,`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_seotext: 33 rows
DELETE FROM `easyii_seotext`;
/*!40000 ALTER TABLE `easyii_seotext` DISABLE KEYS */;
INSERT INTO `easyii_seotext` (`seotext_id`, `class`, `item_id`, `h1`, `title`, `keywords`, `description`) VALUES
	(1, 'yii\\easyii\\modules\\page\\models\\Page', 1, '', 'EasyiiCMS demo', '', 'yii2, easyii, admin'),
	(2, 'yii\\easyii\\modules\\page\\models\\Page', 2, 'Shop categories', 'Extended shop title', '', ''),
	(3, 'yii\\easyii\\modules\\page\\models\\Page', 3, 'Shop search results', 'Extended shop search title', '', ''),
	(4, 'yii\\easyii\\modules\\page\\models\\Page', 4, 'Ваша корзина', '', '', ''),
	(5, 'yii\\easyii\\modules\\page\\models\\Page', 5, 'Success', 'Extended order success title', '', ''),
	(6, 'yii\\easyii\\modules\\page\\models\\Page', 6, 'News H1', 'Extended news title', '', ''),
	(7, 'yii\\easyii\\modules\\page\\models\\Page', 7, 'Articles H1', 'Extended articles title', '', ''),
	(8, 'yii\\easyii\\modules\\page\\models\\Page', 8, 'Photo gallery', 'Extended gallery title', '', ''),
	(9, 'yii\\easyii\\modules\\page\\models\\Page', 9, 'Guestbook H1', 'Extended guestbook title', '', ''),
	(10, 'yii\\easyii\\modules\\page\\models\\Page', 10, 'Frequently Asked Question', 'Extended faq title', '', ''),
	(11, 'yii\\easyii\\modules\\page\\models\\Page', 11, 'Contact us', 'Extended contact title', '', ''),
	(12, 'yii\\easyii\\modules\\catalog\\models\\Category', 2, 'Smartphones H1', 'Extended smartphones title', '', ''),
	(13, 'yii\\easyii\\modules\\catalog\\models\\Category', 3, 'Tablets H1', 'Extended tablets title', '', ''),
	(14, 'yii\\easyii\\modules\\catalog\\models\\Item', 1, 'Nokia 3310', '', '', ''),
	(15, 'yii\\easyii\\modules\\catalog\\models\\Item', 2, 'Samsung Galaxy S6', '', '', ''),
	(16, 'yii\\easyii\\modules\\catalog\\models\\Item', 3, 'Apple Iphone 6', '', '', ''),
	(17, 'yii\\easyii\\modules\\news\\models\\News', 1, 'First news H1', '', '', ''),
	(18, 'yii\\easyii\\modules\\news\\models\\News', 2, 'Second news H1', '', '', ''),
	(19, 'yii\\easyii\\modules\\news\\models\\News', 3, 'Third news H1', '', '', ''),
	(20, 'yii\\easyii\\modules\\article\\models\\Category', 1, 'Articles category 1 H1', 'Extended category 1 title', '', ''),
	(21, 'yii\\easyii\\modules\\article\\models\\Category', 3, 'Subcategory 1 H1', 'Extended subcategory 1 title', '', ''),
	(22, 'yii\\easyii\\modules\\article\\models\\Category', 4, 'Subcategory 2 H1', 'Extended subcategory 2 title', '', ''),
	(23, 'yii\\easyii\\modules\\article\\models\\Item', 1, 'First article H1', '', '', ''),
	(24, 'yii\\easyii\\modules\\article\\models\\Item', 2, 'Second article H1', '', '', ''),
	(25, 'yii\\easyii\\modules\\article\\models\\Item', 3, 'Third article H1', '', '', ''),
	(26, 'yii\\easyii\\modules\\gallery\\models\\Category', 1, 'Album 1 H1', 'Extended Album 1 title', '', ''),
	(27, 'yii\\easyii\\modules\\gallery\\models\\Category', 2, 'Album 2 H1', 'Extended Album 2 title', '', ''),
	(28, 'yii\\easyii\\modules\\page\\models\\Page', 12, 'Выберите нужную категорию:', '', '', ''),
	(29, 'yii\\easyii\\modules\\catalog\\models\\Category', 5, 'Уход за лицом', 'Уход за лицом', '', 'Крема, маски, лосьоны'),
	(30, 'yii\\easyii\\modules\\catalog\\models\\Category', 6, '', 'Уход за телом', '', 'Лосьоны, крема, и тд'),
	(31, 'yii\\easyii\\modules\\catalog\\models\\Category', 7, '', 'Уход за волосами', '', 'Шампуни, бальзамы.'),
	(32, 'yii\\easyii\\modules\\catalog\\models\\Category', 16, '', 'готовые средства', '', 'Страниц готовые средства\r\n\r\nСтраниц готовые средства Страниц готовые средства Страниц готовые средства Страниц готовые средства'),
	(33, 'yii\\easyii\\modules\\catalog\\models\\Category', 20, '', '', '', 'текст кремы');
/*!40000 ALTER TABLE `easyii_seotext` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_settings
CREATE TABLE IF NOT EXISTS `easyii_settings` (
  `setting_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `title` varchar(128) NOT NULL,
  `value` varchar(1024) NOT NULL,
  `visibility` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`setting_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_settings: 10 rows
DELETE FROM `easyii_settings`;
/*!40000 ALTER TABLE `easyii_settings` DISABLE KEYS */;
INSERT INTO `easyii_settings` (`setting_id`, `name`, `title`, `value`, `visibility`) VALUES
	(1, 'easyii_version', 'EasyiiCMS version', '0.9', 0),
	(2, 'recaptcha_key', 'ReCaptcha key', '', 1),
	(3, 'password_salt', 'Password salt', 'JCTp7oC5-XVyLbALv5GkMLCjzp1R6zKy', 0),
	(4, 'root_auth_key', 'Root authorization key', 'UoDZ3v3KHc6eSDcWLLu6rJVlo_v-q99a', 0),
	(5, 'root_password', 'Пароль разработчика', 'c2289103cc08534427d1b9791f9c1aa59ce373f4', 1),
	(6, 'auth_time', 'Время авторизации', '86400', 1),
	(7, 'robot_email', 'E-mail рассыльщика', 'noreply@shop-yii2.loc', 1),
	(8, 'admin_email', 'E-mail администратора', 'admin@shop.loc', 2),
	(9, 'recaptcha_secret', 'ReCaptcha secret', '', 1),
	(10, 'toolbar_position', 'Позиция панели на сайте ("top" or "bottom")', 'top', 1);
/*!40000 ALTER TABLE `easyii_settings` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_shopcart_goods
CREATE TABLE IF NOT EXISTS `easyii_shopcart_goods` (
  `good_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `options` varchar(255) NOT NULL,
  `price` float DEFAULT '0',
  `discount` int(11) DEFAULT '0',
  PRIMARY KEY (`good_id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_shopcart_goods: 42 rows
DELETE FROM `easyii_shopcart_goods`;
/*!40000 ALTER TABLE `easyii_shopcart_goods` DISABLE KEYS */;
INSERT INTO `easyii_shopcart_goods` (`good_id`, `order_id`, `item_id`, `count`, `options`, `price`, `discount`) VALUES
	(2, 1, 11, 1, 'extr-jenshen|extr-arniki|active-mentol', 24, 0),
	(3, 1, 6, 1, 'extr-koraduba|active-mentol', 26, 0),
	(4, 1, 2, 1, '', 1000, 10),
	(5, 2, 14, 1, 'extr-koraduba|extr-jenshen|active-aloe|efir-apelsin', 36, 0),
	(6, 2, 13, 1, 'extr-koraduba|extr-jenshen|extr-arniki', 23, 0),
	(7, 3, 5, 1, 'efir-gvozd|vitamin-f', 35, 0),
	(8, 3, 5, 1, 'vitamin-f', 35, 0),
	(9, 4, 5, 1, 'active-scvalan|active-aloe', 35, 0),
	(10, 4, 9, 1, 'active-aloe|vitamin-f|efir-gvozd|extr-arniki', 23, 0),
	(11, 5, 5, 1, 'vitamin-f', 35, 0),
	(12, 6, 6, 1, 'active-scvalan|active-mentol', 26, 0),
	(13, 6, 11, 1, 'extr-jenshen|extr-arniki|extr-koraduba', 24, 0),
	(14, 6, 2, 1, '', 1000, 10),
	(15, 7, 5, 3, 'active-scvalan|active-mentol|active-aloe', 35, 0),
	(16, 7, 14, 1, 'extr-koraduba|extr-jenshen|active-scvalan', 36, 0),
	(17, 7, 11, 5, 'efir-gvozd|extr-koraduba|extr-arniki', 24, 0),
	(18, 8, 5, 1, 'active-scvalan|extr-koraduba', 35, 0),
	(19, 9, 4, 1, 'active-scvalan|active-mentol|extr-koraduba', 20, 0),
	(20, 9, 13, 1, 'extr-jenshen|extr-koraduba|extr-arniki', 23, 0),
	(21, 9, 1, 1, 'Red', 100, 0),
	(22, 10, 5, 3, 'active-scvalan|active-mentol|extr-koraduba|extr-arniki', 35, 0),
	(23, 10, 7, 2, 'extr-jenshen|extr-koraduba', 42, 0),
	(24, 10, 1, 2, 'White', 100, 0),
	(25, 11, 5, 10, 'active-scvalan', 35, 0),
	(27, 11, 10, 2, 'extr-jenshen|extr-koraduba|extr-arniki', 21, 0),
	(28, 12, 5, 1, 'efir-gvozd|active-mentol|extr-jenshen', 35, 0),
	(29, 13, 5, 1, 'efir-gvozd|active-mentol|extr-arniki', 35, 0),
	(31, 14, 5, 1, 'active-scvalan|extr-koraduba|active-aloe', 35, 0),
	(32, 14, 11, 1, 'active-scvalan|active-mentol|extr-koraduba|extr-arniki', 24, 0),
	(33, 15, 10, 3, 'active-scvalan|active-mentol|active-aloe', 21, 0),
	(34, 15, 5, 1, 'extr-jenshen|extr-koraduba|active-scvalan', 35, 0),
	(37, 15, 5, 1, 'vitamin-f', 35, 0),
	(39, 16, 13, 1, 'active-scvalan|active-mentol', 23, 0),
	(40, 17, 5, 1, 'active-scvalan|active-mentol|active-aloe', 35, 0),
	(58, 18, 13, 2, 'vitamin-f|active-mentol|extr-koraduba', 23, 0),
	(61, 21, 31, 1, '', 65, 0),
	(60, 20, 27, 1, '', 56, 0),
	(59, 19, 31, 1, '', 65, 0),
	(62, 21, 7, 1, 'active-mentol|extr-koraduba', 42, 0),
	(63, 22, 27, 1, '', 56, 0),
	(64, 23, 37, 1, '', 23, 0),
	(65, 24, 29, 1, '', 45, 0);
/*!40000 ALTER TABLE `easyii_shopcart_goods` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_shopcart_orders
CREATE TABLE IF NOT EXISTS `easyii_shopcart_orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `comment` varchar(1024) NOT NULL,
  `remark` varchar(1024) NOT NULL,
  `access_token` varchar(32) NOT NULL,
  `ip` varchar(16) NOT NULL,
  `time` int(11) DEFAULT '0',
  `new` tinyint(1) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_shopcart_orders: 24 rows
DELETE FROM `easyii_shopcart_orders`;
/*!40000 ALTER TABLE `easyii_shopcart_orders` DISABLE KEYS */;
INSERT INTO `easyii_shopcart_orders` (`order_id`, `name`, `address`, `phone`, `email`, `comment`, `remark`, `access_token`, `ip`, `time`, `new`, `status`) VALUES
	(1, '', '', '', '', '', '', 'pYZF0k0DE4cizh1_x-A9d2YPEHlCcFCA', '127.0.0.1', 1469810530, 0, 0),
	(2, 'rewrewr', 'hgfdhjgfhjgf', '654654', 'wqwere@nnn.yty', 'kjhkljhlkjh', '', '22yAWWDxXvFlOmfIfs3-L7ng3mA_B_ph', '127.0.0.1', 1469813207, 0, 2),
	(3, '', '', '', '', '', '', 'S4ToGxaK3Sc-10DYTCF8gK7Y-zlE3E0t', '127.0.0.1', 1470915598, 0, 0),
	(4, '', '', '', '', '', '', 'm-JMXtfZr7tjKIr4WoQSijEMeG2odx61', '127.0.0.1', 1470999561, 0, 0),
	(5, '', '', '', '', '', '', 'oazDcL4VU0bqYjfblC3OoHNfhpn1khjz', '127.0.0.1', 1471078613, 0, 0),
	(6, '', '', '', '', '', '', 'Cnrz6kEiVwh8MpsbH7ydxSkMptFhhA_o', '127.0.0.1', 1471167397, 0, 0),
	(7, '', '', '', '', '', '', 'v0_sHEocBA9_OpNAXSqGmB5qY8-D6DqD', '127.0.0.1', 1471185106, 0, 0),
	(8, 'sergey', 'qwqweerr', '345345345', 'qwweere@mail.ru', 'sdgsgsgs  dsgsdgsdg', '', 's6vkv5yLevuXAPc4yQYhJiZHsZVfHzkX', '127.0.0.1', 1471243960, 0, 1),
	(9, 'all', 'alll', '23542523', 'al@mail.ru', 'sdsdgsdgdsg', '', '6gm9rwwIyMYji8pg80lzqrUtgG_qfRMr', '127.0.0.1', 1471244228, 0, 1),
	(10, 'qwqweqwe', 'asdsad', '54252', 'sdgdsfg@mail.ru', 'rtcbcn', '', 'CJuZ7b99wNkw-UyjAprBHi0gvVcj5uzi', '127.0.0.1', 1471245654, 0, 1),
	(11, 'serg614', 'qqqq', '2112412', 'qqq@dfdgf.rt', 'zfzfzsfa', '', 't9EUDRlIEHLRpzDbkzC0fQqjOCmzUIlE', '127.0.0.1', 1471247595, 0, 1),
	(12, '', '', '', '', '', '', 'HchBFHrOrQdPUAOO2ftw0SZJ65Snq67M', '127.0.0.1', 1471545979, 0, 0),
	(13, '', '', '', '', '', '', 'OAxQ86yraT7CqMJx5CXQM0i-pN4Ps4IA', '127.0.0.1', 1471784343, 0, 0),
	(14, '', '', '', '', '', '', 'TFLtc_lkJjXGyxbjUslE15FMwwdkdII4', '127.0.0.1', 1471799769, 0, 0),
	(15, '', '', '', '', '', '', 'vINzAe0YZkdV7fnjSUBXR6CnIvsyKmZT', '127.0.0.1', 1471884442, 0, 0),
	(16, '', '', '', '', '', '', 'eNiQ5FK0e0DdDAd5RQv7HSgMijp4RUXb', '127.0.0.1', 1471975843, 0, 0),
	(17, '', '', '', '', '', '', 'Ozxw3bwPLvYYcviQ2eewo8enuCbo65zo', '127.0.0.1', 1472840328, 0, 0),
	(18, '', '', '', '', '', '', 'WsIbqp7q1z0TNVl6KVmDde5e7eTVKlQy', '127.0.0.1', 1472985374, 0, 0),
	(19, '', '', '', '', '', '', 'jeFUwMk5AXeFRDJ2oJ6Y4EURqob2Zt9H', '127.0.0.1', 1473008594, 0, 0),
	(20, '', '', '', '', '', '', 'qi9kAii-thwNcxU-feaBlWDNt_DzAj3z', '127.0.0.1', 1473094079, 0, 0),
	(21, '', '', '', '', '', '', 'RHdMM7z5CUMQwcpka1_BtWZoI_zVk2tn', '127.0.0.1', 1473191489, 0, 0),
	(22, '', '', '', '', '', '', '3LkQR_C4tr2n_Tk9dz264mB9i2mXMV6h', '127.0.0.1', 1473353164, 0, 0),
	(23, 'juytuyt', 'oiuoiu', '876798', 'hgfhgf@mcff.ty', 'lkjlkj', '', 'hTR5abU9D1gLnlJ4A7JeCEduO0tTNcNx', '127.0.0.1', 1473595314, 0, 2),
	(24, '', '', '', '', '', '', '_7-weMlr3CT1G8BaygoswJO3Iz5yXBef', '127.0.0.1', 1473783409, 0, 0);
/*!40000 ALTER TABLE `easyii_shopcart_orders` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_subscribe_history
CREATE TABLE IF NOT EXISTS `easyii_subscribe_history` (
  `history_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(128) NOT NULL,
  `body` text NOT NULL,
  `sent` int(11) DEFAULT '0',
  `time` int(11) DEFAULT '0',
  PRIMARY KEY (`history_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_subscribe_history: 0 rows
DELETE FROM `easyii_subscribe_history`;
/*!40000 ALTER TABLE `easyii_subscribe_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `easyii_subscribe_history` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_subscribe_subscribers
CREATE TABLE IF NOT EXISTS `easyii_subscribe_subscribers` (
  `subscriber_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `ip` varchar(16) NOT NULL,
  `time` int(11) DEFAULT '0',
  PRIMARY KEY (`subscriber_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_subscribe_subscribers: 0 rows
DELETE FROM `easyii_subscribe_subscribers`;
/*!40000 ALTER TABLE `easyii_subscribe_subscribers` DISABLE KEYS */;
/*!40000 ALTER TABLE `easyii_subscribe_subscribers` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_tags
CREATE TABLE IF NOT EXISTS `easyii_tags` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `frequency` int(11) DEFAULT '0',
  PRIMARY KEY (`tag_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_tags: 7 rows
DELETE FROM `easyii_tags`;
/*!40000 ALTER TABLE `easyii_tags` DISABLE KEYS */;
INSERT INTO `easyii_tags` (`tag_id`, `name`, `frequency`) VALUES
	(1, 'php', 2),
	(2, 'yii2', 3),
	(3, 'jquery', 3),
	(18, 'html', 1),
	(22, 'css', 1),
	(21, 'bootstrap', 1),
	(7, 'ajax', 1);
/*!40000 ALTER TABLE `easyii_tags` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_tags_assign
CREATE TABLE IF NOT EXISTS `easyii_tags_assign` (
  `class` varchar(128) NOT NULL,
  `item_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  KEY `class` (`class`),
  KEY `item_tag` (`item_id`,`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_tags_assign: 12 rows
DELETE FROM `easyii_tags_assign`;
/*!40000 ALTER TABLE `easyii_tags_assign` DISABLE KEYS */;
INSERT INTO `easyii_tags_assign` (`class`, `item_id`, `tag_id`) VALUES
	('yii\\easyii\\modules\\news\\models\\News', 1, 3),
	('yii\\easyii\\modules\\news\\models\\News', 1, 2),
	('yii\\easyii\\modules\\news\\models\\News', 1, 1),
	('yii\\easyii\\modules\\news\\models\\News', 2, 18),
	('yii\\easyii\\modules\\news\\models\\News', 2, 3),
	('yii\\easyii\\modules\\news\\models\\News', 2, 2),
	('yii\\easyii\\modules\\article\\models\\Item', 1, 22),
	('yii\\easyii\\modules\\article\\models\\Item', 1, 21),
	('yii\\easyii\\modules\\article\\models\\Item', 1, 1),
	('yii\\easyii\\modules\\article\\models\\Item', 2, 2),
	('yii\\easyii\\modules\\article\\models\\Item', 2, 3),
	('yii\\easyii\\modules\\article\\models\\Item', 2, 7);
/*!40000 ALTER TABLE `easyii_tags_assign` ENABLE KEYS */;


-- Дамп структуры для таблица shop-yii2.easyii_texts
CREATE TABLE IF NOT EXISTS `easyii_texts` (
  `text_id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `slug` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`text_id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы shop-yii2.easyii_texts: 1 rows
DELETE FROM `easyii_texts`;
/*!40000 ALTER TABLE `easyii_texts` DISABLE KEYS */;
INSERT INTO `easyii_texts` (`text_id`, `text`, `slug`) VALUES
	(1, 'Добро пожаловать на сайт Lerox!', 'index-welcome-title');
/*!40000 ALTER TABLE `easyii_texts` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
