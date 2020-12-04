/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.1.36-MariaDB : Database - book_store
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`book_store` /*!40100 DEFAULT CHARACTER SET latin1 */;

CREATE DATABASE IF NOT EXISTS book_store;
USE `book_store`;

/*Table structure for table `author` */

DROP TABLE IF EXISTS `author`;

CREATE TABLE `author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `descript` varchar(225) DEFAULT NULL,
  `ghoto` varchar(100) NOT NULL,
  `isActive` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `author` */

/*Table structure for table `blog_categories` */

DROP TABLE IF EXISTS `blog_categories`;

CREATE TABLE `blog_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `is_Active` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `blog_categories` */

/*Table structure for table `blogs` */

DROP TABLE IF EXISTS `blogs`;

CREATE TABLE `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descript` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `is_Active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `blogs` */

/*Table structure for table `book` */

DROP TABLE IF EXISTS `book`;

CREATE TABLE `book` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `discription` varchar(45) NOT NULL,
  `weight` double NOT NULL,
  `price` double NOT NULL,
  `latest_price` double DEFAULT NULL,
  `available_qty` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `category_ids` varchar(20) NOT NULL,
  `isbn_no` varchar(250) NOT NULL,
  `is_Active` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `book` */

/*Table structure for table `cart` */

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `total_books` int(11) NOT NULL,
  `total_value` double NOT NULL,
  `total_weight` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `cart` */

/*Table structure for table `cart_has_book` */

DROP TABLE IF EXISTS `cart_has_book`;

CREATE TABLE `cart_has_book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cart_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `value` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cart_has_book` */

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `is_Orderby` int(11) NOT NULL,
  `is_Active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `categories` */

/*Table structure for table `contact_info` */

DROP TABLE IF EXISTS `contact_info`;

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone_mobi` varchar(50) NOT NULL,
  `phone_office` varchar(50) NOT NULL,
  `hot_line` varchar(50) NOT NULL,
  `opening_hour` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contact_info` */

/*Table structure for table `countries` */

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(2) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `is_Active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=247 DEFAULT CHARSET=utf8;

/*Data for the table `countries` */

insert  into `countries`(`id`,`code`,`name`,`is_Active`) values 
(1,'AF','Afghanistan',1),
(2,'AL','Albania',1),
(3,'DZ','Algeria',1),
(4,'DS','American Samoa',1),
(5,'AD','Andorra',1),
(6,'AO','Angola',1),
(7,'AI','Anguilla',1),
(8,'AQ','Antarctica',1),
(9,'AG','Antigua and Barbuda',1),
(10,'AR','Argentina',1),
(11,'AM','Armenia',1),
(12,'AW','Aruba',1),
(13,'AU','Australia',1),
(14,'AT','Austria',1),
(15,'AZ','Azerbaijan',1),
(16,'BS','Bahamas',1),
(17,'BH','Bahrain',1),
(18,'BD','Bangladesh',1),
(19,'BB','Barbados',1),
(20,'BY','Belarus',1),
(21,'BE','Belgium',1),
(22,'BZ','Belize',1),
(23,'BJ','Benin',1),
(24,'BM','Bermuda',1),
(25,'BT','Bhutan',1),
(26,'BO','Bolivia',1),
(27,'BA','Bosnia and Herzegovina',1),
(28,'BW','Botswana',1),
(29,'BV','Bouvet Island',1),
(30,'BR','Brazil',1),
(31,'IO','British Indian Ocean Territory',1),
(32,'BN','Brunei Darussalam',1),
(33,'BG','Bulgaria',1),
(34,'BF','Burkina Faso',1),
(35,'BI','Burundi',1),
(36,'KH','Cambodia',1),
(37,'CM','Cameroon',1),
(38,'CA','Canada',1),
(39,'CV','Cape Verde',1),
(40,'KY','Cayman Islands',1),
(41,'CF','Central African Republic',1),
(42,'TD','Chad',1),
(43,'CL','Chile',1),
(44,'CN','China',1),
(45,'CX','Christmas Island',1),
(46,'CC','Cocos (Keeling) Islands',1),
(47,'CO','Colombia',1),
(48,'KM','Comoros',1),
(49,'CD','Democratic Republic of the Congo',1),
(50,'CG','Republic of Congo',1),
(51,'CK','Cook Islands',1),
(52,'CR','Costa Rica',1),
(53,'HR','Croatia (Hrvatska)',1),
(54,'CU','Cuba',1),
(55,'CY','Cyprus',1),
(56,'CZ','Czech Republic',1),
(57,'DK','Denmark',1),
(58,'DJ','Djibouti',1),
(59,'DM','Dominica',1),
(60,'DO','Dominican Republic',1),
(61,'TP','East Timor',1),
(62,'EC','Ecuador',1),
(63,'EG','Egypt',1),
(64,'SV','El Salvador',1),
(65,'GQ','Equatorial Guinea',1),
(66,'ER','Eritrea',1),
(67,'EE','Estonia',1),
(68,'ET','Ethiopia',1),
(69,'FK','Falkland Islands (Malvinas)',1),
(70,'FO','Faroe Islands',1),
(71,'FJ','Fiji',1),
(72,'FI','Finland',1),
(73,'FR','France',1),
(74,'FX','France, Metropolitan',1),
(75,'GF','French Guiana',1),
(76,'PF','French Polynesia',1),
(77,'TF','French Southern Territories',1),
(78,'GA','Gabon',1),
(79,'GM','Gambia',1),
(80,'GE','Georgia',1),
(81,'DE','Germany',1),
(82,'GH','Ghana',1),
(83,'GI','Gibraltar',1),
(84,'GK','Guernsey',1),
(85,'GR','Greece',1),
(86,'GL','Greenland',1),
(87,'GD','Grenada',1),
(88,'GP','Guadeloupe',1),
(89,'GU','Guam',1),
(90,'GT','Guatemala',1),
(91,'GN','Guinea',1),
(92,'GW','Guinea-Bissau',1),
(93,'GY','Guyana',1),
(94,'HT','Haiti',1),
(95,'HM','Heard and Mc Donald Islands',1),
(96,'HN','Honduras',1),
(97,'HK','Hong Kong',1),
(98,'HU','Hungary',1),
(99,'IS','Iceland',1),
(100,'IN','India',1),
(101,'IM','Isle of Man',1),
(102,'ID','Indonesia',1),
(103,'IR','Iran (Islamic Republic of)',1),
(104,'IQ','Iraq',1),
(105,'IE','Ireland',1),
(106,'IL','Israel',1),
(107,'IT','Italy',1),
(108,'CI','Ivory Coast',1),
(109,'JE','Jersey',1),
(110,'JM','Jamaica',1),
(111,'JP','Japan',1),
(112,'JO','Jordan',1),
(113,'KZ','Kazakhstan',1),
(114,'KE','Kenya',1),
(115,'KI','Kiribati',1),
(116,'KP','Korea, Democratic People\'s Republic of',1),
(117,'KR','Korea, Republic of',1),
(118,'XK','Kosovo',1),
(119,'KW','Kuwait',1),
(120,'KG','Kyrgyzstan',1),
(121,'LA','Lao People\'s Democratic Republic',1),
(122,'LV','Latvia',1),
(123,'LB','Lebanon',1),
(124,'LS','Lesotho',1),
(125,'LR','Liberia',1),
(126,'LY','Libyan Arab Jamahiriya',1),
(127,'LI','Liechtenstein',1),
(128,'LT','Lithuania',1),
(129,'LU','Luxembourg',1),
(130,'MO','Macau',1),
(131,'MK','North Macedonia',1),
(132,'MG','Madagascar',1),
(133,'MW','Malawi',1),
(134,'MY','Malaysia',1),
(135,'MV','Maldives',1),
(136,'ML','Mali',1),
(137,'MT','Malta',1),
(138,'MH','Marshall Islands',1),
(139,'MQ','Martinique',1),
(140,'MR','Mauritania',1),
(141,'MU','Mauritius',1),
(142,'TY','Mayotte',1),
(143,'MX','Mexico',1),
(144,'FM','Micronesia, Federated States of',1),
(145,'MD','Moldova, Republic of',1),
(146,'MC','Monaco',1),
(147,'MN','Mongolia',1),
(148,'ME','Montenegro',1),
(149,'MS','Montserrat',1),
(150,'MA','Morocco',1),
(151,'MZ','Mozambique',1),
(152,'MM','Myanmar',1),
(153,'NA','Namibia',1),
(154,'NR','Nauru',1),
(155,'NP','Nepal',1),
(156,'NL','Netherlands',1),
(157,'AN','Netherlands Antilles',1),
(158,'NC','New Caledonia',1),
(159,'NZ','New Zealand',1),
(160,'NI','Nicaragua',1),
(161,'NE','Niger',1),
(162,'NG','Nigeria',1),
(163,'NU','Niue',1),
(164,'NF','Norfolk Island',1),
(165,'MP','Northern Mariana Islands',1),
(166,'NO','Norway',1),
(167,'OM','Oman',1),
(168,'PK','Pakistan',1),
(169,'PW','Palau',1),
(170,'PS','Palestine',1),
(171,'PA','Panama',1),
(172,'PG','Papua New Guinea',1),
(173,'PY','Paraguay',1),
(174,'PE','Peru',1),
(175,'PH','Philippines',1),
(176,'PN','Pitcairn',1),
(177,'PL','Poland',1),
(178,'PT','Portugal',1),
(179,'PR','Puerto Rico',1),
(180,'QA','Qatar',1),
(181,'RE','Reunion',1),
(182,'RO','Romania',1),
(183,'RU','Russian Federation',1),
(184,'RW','Rwanda',1),
(185,'KN','Saint Kitts and Nevis',1),
(186,'LC','Saint Lucia',1),
(187,'VC','Saint Vincent and the Grenadines',1),
(188,'WS','Samoa',1),
(189,'SM','San Marino',1),
(190,'ST','Sao Tome and Principe',1),
(191,'SA','Saudi Arabia',1),
(192,'SN','Senegal',1),
(193,'RS','Serbia',1),
(194,'SC','Seychelles',1),
(195,'SL','Sierra Leone',1),
(196,'SG','Singapore',1),
(197,'SK','Slovakia',1),
(198,'SI','Slovenia',1),
(199,'SB','Solomon Islands',1),
(200,'SO','Somalia',1),
(201,'ZA','South Africa',1),
(202,'GS','South Georgia South Sandwich Islands',1),
(203,'SS','South Sudan',1),
(204,'ES','Spain',1),
(205,'LK','Sri Lanka',1),
(206,'SH','St. Helena',1),
(207,'PM','St. Pierre and Miquelon',1),
(208,'SD','Sudan',1),
(209,'SR','Suriname',1),
(210,'SJ','Svalbard and Jan Mayen Islands',1),
(211,'SZ','Swaziland',1),
(212,'SE','Sweden',1),
(213,'CH','Switzerland',1),
(214,'SY','Syrian Arab Republic',1),
(215,'TW','Taiwan',1),
(216,'TJ','Tajikistan',1),
(217,'TZ','Tanzania, United Republic of',1),
(218,'TH','Thailand',1),
(219,'TG','Togo',1),
(220,'TK','Tokelau',1),
(221,'TO','Tonga',1),
(222,'TT','Trinidad and Tobago',1),
(223,'TN','Tunisia',1),
(224,'TR','Turkey',1),
(225,'TM','Turkmenistan',1),
(226,'TC','Turks and Caicos Islands',1),
(227,'TV','Tuvalu',1),
(228,'UG','Uganda',1),
(229,'UA','Ukraine',1),
(230,'AE','United Arab Emirates',1),
(231,'GB','United Kingdom',1),
(232,'US','United States',1),
(233,'UM','United States minor outlying islands',1),
(234,'UY','Uruguay',1),
(235,'UZ','Uzbekistan',1),
(236,'VU','Vanuatu',1),
(237,'VA','Vatican City State',1),
(238,'VE','Venezuela',1),
(239,'VN','Vietnam',1),
(240,'VG','Virgin Islands (British)',1),
(241,'VI','Virgin Islands (U.S.)',1),
(242,'WF','Wallis and Futuna Islands',1),
(243,'EH','Western Sahara',1),
(244,'YE','Yemen',1),
(245,'ZM','Zambia',1),
(246,'ZW','Zimbabwe',1);

/*Table structure for table `images` */

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tile` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `is_Active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `images` */

insert  into `images`(`id`,`tile`,`photo`,`is_Active`) values 
(1,'Favicon','',1);

/*Table structure for table `languages` */

DROP TABLE IF EXISTS `languages`;

CREATE TABLE `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `language` varchar(45) NOT NULL,
  `is_default` tinyint(4) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `languages` */

/*Table structure for table `login_attempts` */

DROP TABLE IF EXISTS `login_attempts`;

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `login_attempts` */

/*Table structure for table `payment_detailas` */

DROP TABLE IF EXISTS `payment_detailas`;

CREATE TABLE `payment_detailas` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `contact` int(10) unsigned NOT NULL,
  `e_mail` varchar(45) NOT NULL,
  `payment_method` varchar(45) NOT NULL,
  `cost` double NOT NULL,
  `shipping_cost` double NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `payment_detailas` */

/*Table structure for table `publisher` */

DROP TABLE IF EXISTS `publisher`;

CREATE TABLE `publisher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `is_Active` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `publisher` */

/*Table structure for table `received_mail` */

DROP TABLE IF EXISTS `received_mail`;

CREATE TABLE `received_mail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `msg` text NOT NULL,
  `is_Active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `received_mail` */

/*Table structure for table `setting` */

DROP TABLE IF EXISTS `setting`;

CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `value` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `setting` */

insert  into `setting`(`id`,`name`,`value`) values 
(1,'Maintaince',0);

/*Table structure for table `slider` */

DROP TABLE IF EXISTS `slider`;

CREATE TABLE `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `decript` varchar(500) NOT NULL,
  `filepath` varchar(500) NOT NULL,
  `state` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `slider` */

/*Table structure for table `social_link` */

DROP TABLE IF EXISTS `social_link`;

CREATE TABLE `social_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `link` varchar(250) NOT NULL,
  `is_Active` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `social_link` */

/*Table structure for table `sub categories` */

DROP TABLE IF EXISTS `sub categories`;

CREATE TABLE `sub categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `is_oder` tinyint(2) unsigned NOT NULL,
  `is_active` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `cat_id` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `sub categories` */

/*Table structure for table `subscribe` */

DROP TABLE IF EXISTS `subscribe`;

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `subscribe` */

/*Table structure for table `title` */

DROP TABLE IF EXISTS `title`;

CREATE TABLE `title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pagename` varchar(100) DEFAULT NULL,
  `title` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `title` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `street` varchar(250) NOT NULL,
  `address1` varchar(250) NOT NULL,
  `address2` varchar(250) NOT NULL,
  `tp` varchar(50) DEFAULT NULL,
  `creted_at` timestamp NULL DEFAULT NULL,
  `is_Active` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

/*Table structure for table `visitors` */

DROP TABLE IF EXISTS `visitors`;

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(30) NOT NULL,
  `visit_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `country` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `region` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `visitors` */

/*Table structure for table `wishlist` */

DROP TABLE IF EXISTS `wishlist`;

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `wishlist` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
