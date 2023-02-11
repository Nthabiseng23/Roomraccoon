/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.21-MariaDB : Database - roomraccoon-db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`roomraccoon-db` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `roomraccoon-db`;

/*Table structure for table `products` */

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(255) NOT NULL,
  `checked` int(2) DEFAULT 0 COMMENT '1=checked,0=not checked',
  `deleted` int(2) DEFAULT 0 COMMENT '0=active, 1=deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `products` */

insert  into `products`(`id`,`prod_name`,`checked`,`deleted`) values (1,'rthtg',0,1);
insert  into `products`(`id`,`prod_name`,`checked`,`deleted`) values (2,'hng',0,1);
insert  into `products`(`id`,`prod_name`,`checked`,`deleted`) values (3,'hnjh',0,0);
insert  into `products`(`id`,`prod_name`,`checked`,`deleted`) values (4,'njh',0,0);
insert  into `products`(`id`,`prod_name`,`checked`,`deleted`) values (5,'hjn',0,1);
insert  into `products`(`id`,`prod_name`,`checked`,`deleted`) values (6,'tyj',0,0);
insert  into `products`(`id`,`prod_name`,`checked`,`deleted`) values (7,'',0,0);
insert  into `products`(`id`,`prod_name`,`checked`,`deleted`) values (8,'',0,0);
insert  into `products`(`id`,`prod_name`,`checked`,`deleted`) values (9,'',0,0);
insert  into `products`(`id`,`prod_name`,`checked`,`deleted`) values (10,'weazsea',0,0);
insert  into `products`(`id`,`prod_name`,`checked`,`deleted`) values (11,'Testing',0,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
