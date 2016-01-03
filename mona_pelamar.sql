/*
SQLyog Community v12.0 (32 bit)
MySQL - 5.1.41 : Database - mona_pelamar
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mona_pelamar` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mona_pelamar`;

/*Table structure for table `pelamar` */

DROP TABLE IF EXISTS `pelamar`;

CREATE TABLE `pelamar` (
  `pelamar_id` int(11) NOT NULL AUTO_INCREMENT,
  `pelamar_nama` varchar(1024) DEFAULT NULL,
  `pelamar_tmp_lahir` varchar(1024) DEFAULT NULL,
  `pelamar_tgl_lahir` date DEFAULT NULL,
  `pelamar_sex` int(11) DEFAULT NULL,
  `pelamar_telp` varchar(1024) DEFAULT NULL,
  `pelamar_hp` varchar(1024) DEFAULT NULL,
  `pelamar_email` varchar(1024) DEFAULT NULL,
  `pelamar_alamat` varchar(1024) DEFAULT NULL,
  `pelamar_posisi` int(11) DEFAULT NULL,
  `pelamar_tgl_lamar` date DEFAULT NULL,
  `pelamar_keterangan` varchar(1024) DEFAULT NULL,
  `pelamar_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`pelamar_id`),
  UNIQUE KEY `pelamar_pk` (`pelamar_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `pelamar` */

insert  into `pelamar`(`pelamar_id`,`pelamar_nama`,`pelamar_tmp_lahir`,`pelamar_tgl_lahir`,`pelamar_sex`,`pelamar_telp`,`pelamar_hp`,`pelamar_email`,`pelamar_alamat`,`pelamar_posisi`,`pelamar_tgl_lamar`,`pelamar_keterangan`,`pelamar_status`) values (1,'asdfasdfasd','asdfa','0000-00-00',1,'23452','2345234',NULL,'adsf',1,'0000-00-00','',1);

/*Table structure for table `pendidikan` */

DROP TABLE IF EXISTS `pendidikan`;

CREATE TABLE `pendidikan` (
  `pendidikan_id` int(11) NOT NULL AUTO_INCREMENT,
  `pendidikan_nama` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`pendidikan_id`),
  UNIQUE KEY `pendidikan_pk` (`pendidikan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `pendidikan` */

insert  into `pendidikan`(`pendidikan_id`,`pendidikan_nama`) values (1,'TK');
insert  into `pendidikan`(`pendidikan_id`,`pendidikan_nama`) values (2,'SD');
insert  into `pendidikan`(`pendidikan_id`,`pendidikan_nama`) values (3,'SMP');
insert  into `pendidikan`(`pendidikan_id`,`pendidikan_nama`) values (4,'SMA');
insert  into `pendidikan`(`pendidikan_id`,`pendidikan_nama`) values (5,'SMK');
insert  into `pendidikan`(`pendidikan_id`,`pendidikan_nama`) values (6,'D1');
insert  into `pendidikan`(`pendidikan_id`,`pendidikan_nama`) values (7,'D2');
insert  into `pendidikan`(`pendidikan_id`,`pendidikan_nama`) values (8,'D3');
insert  into `pendidikan`(`pendidikan_id`,`pendidikan_nama`) values (9,'D4');
insert  into `pendidikan`(`pendidikan_id`,`pendidikan_nama`) values (10,'S1');
insert  into `pendidikan`(`pendidikan_id`,`pendidikan_nama`) values (11,'S2');
insert  into `pendidikan`(`pendidikan_id`,`pendidikan_nama`) values (13,'S3');

/*Table structure for table `t_pendidikan` */

DROP TABLE IF EXISTS `t_pendidikan`;

CREATE TABLE `t_pendidikan` (
  `pelamar_id` int(11) NOT NULL,
  `pendidikan_id` int(11) NOT NULL,
  `t_pendidikan_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_pendidikan_instansi` varchar(255) DEFAULT NULL,
  `t_pendidikan_jurusan` varchar(255) DEFAULT NULL,
  `t_pendidikan_thn_lulus` varchar(255) DEFAULT NULL,
  `t_pendidikan_nilai` varchar(255) DEFAULT NULL,
  `t_pendidikan_keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`t_pendidikan_id`),
  KEY `relationship_1_fk` (`pelamar_id`),
  KEY `relationship_2_fk` (`pendidikan_id`),
  KEY `t_pendidikan_id` (`t_pendidikan_id`),
  CONSTRAINT `t_pendidikan_ibfk_1` FOREIGN KEY (`pelamar_id`) REFERENCES `pelamar` (`pelamar_id`) ON DELETE CASCADE,
  CONSTRAINT `t_pendidikan_ibfk_2` FOREIGN KEY (`pendidikan_id`) REFERENCES `pendidikan` (`pendidikan_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_pendidikan` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(15) NOT NULL AUTO_INCREMENT,
  `user_nama` varchar(255) DEFAULT NULL,
  `user_username` varchar(15) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`user_id`,`user_nama`,`user_username`,`user_pass`,`user_email`,`role_id`) values (3,'adhi monako','monako','52f7f46ca330c90e321fce10970382c1','adhimonako@gmail.com',NULL);
insert  into `user`(`user_id`,`user_nama`,`user_username`,`user_pass`,`user_email`,`role_id`) values (4,NULL,'susilo','asd',NULL,NULL);
insert  into `user`(`user_id`,`user_nama`,`user_username`,`user_pass`,`user_email`,`role_id`) values (5,NULL,'kabag','kbg',NULL,NULL);
insert  into `user`(`user_id`,`user_nama`,`user_username`,`user_pass`,`user_email`,`role_id`) values (13,'aa','aa','4124bc0a9335c27f086f24ba207a4912','a@a.bbom',1);
insert  into `user`(`user_id`,`user_nama`,`user_username`,`user_pass`,`user_email`,`role_id`) values (14,'kabag','kabag','','kabag@kabag.com',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
