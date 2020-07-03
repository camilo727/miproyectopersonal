/*
SQLyog Community v8.71 
MySQL - 5.5.5-10.1.37-MariaDB : Database - convocatoria
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`convocatoria` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `convocatoria`;

/*Table structure for table `ciclo` */

DROP TABLE IF EXISTS `ciclo`;

CREATE TABLE `ciclo` (
  `id_ciclo` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_ciclo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ciclo` */

insert  into `ciclo`(`id_ciclo`,`nombre`) values (1,'tecnico'),(2,'tecnologo'),(3,'profesional');

/*Table structure for table `estado` */

DROP TABLE IF EXISTS `estado`;

CREATE TABLE `estado` (
  `id_estado` int(10) NOT NULL AUTO_INCREMENT,
  `estado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `estado` */

insert  into `estado`(`id_estado`,`estado`) values (1,'pendiente'),(2,'aceptado'),(3,'desaprobado');

/*Table structure for table `estudiante` */

DROP TABLE IF EXISTS `estudiante`;

CREATE TABLE `estudiante` (
  `id_estudiante` int(66) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(50) DEFAULT NULL,
  `id_ciclo` int(10) DEFAULT NULL,
  `cedula` int(20) DEFAULT NULL,
  `codigo_est` varchar(50) DEFAULT NULL,
  `programa` varchar(100) DEFAULT NULL,
  `id_modalidad` int(10) DEFAULT NULL,
  `lugar_expe` varchar(50) DEFAULT NULL,
  `nom_modal` varchar(50) DEFAULT NULL,
  `pro_modal` varchar(50) DEFAULT NULL,
  `id_periodo` int(10) DEFAULT NULL,
  `id_usuario` int(10) DEFAULT NULL,
  `fecha_formato` date DEFAULT NULL,
  `id_estado` int(10) DEFAULT NULL,
  `dol` int(255) DEFAULT NULL,
  PRIMARY KEY (`id_estudiante`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8mb4;

/*Data for the table `estudiante` */

insert  into `estudiante`(`id_estudiante`,`nombres`,`id_ciclo`,`cedula`,`codigo_est`,`programa`,`id_modalidad`,`lugar_expe`,`nom_modal`,`pro_modal`,`id_periodo`,`id_usuario`,`fecha_formato`,`id_estado`,`dol`) values (112,'Jose ',1,1075304064,'45678','asdfghjk',3,'neiva','asdfghj','zxcvbn',1,2,'2019-12-19',1,3707);

/*Table structure for table `formato` */

DROP TABLE IF EXISTS `formato`;

CREATE TABLE `formato` (
  `id_formato` int(10) NOT NULL AUTO_INCREMENT,
  `fecha_formato` date DEFAULT NULL,
  `id_estado` int(10) DEFAULT NULL,
  `id_usuario` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_formato`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `formato` */

insert  into `formato`(`id_formato`,`fecha_formato`,`id_estado`,`id_usuario`) values (1,'2019-12-19',1,1),(2,'2019-12-29',NULL,NULL),(3,'2019-12-25',1,1),(4,'2019-12-18',1,1),(5,'2019-12-26',1,1),(6,'2019-12-05',1,1),(7,'2019-12-13',1,1),(8,'2019-12-14',1,2),(9,'2019-12-24',1,2),(10,'2019-12-06',1,2),(11,'2019-12-18',1,2),(12,'2019-12-12',1,2),(13,'2019-12-26',1,2);

/*Table structure for table `historial` */

DROP TABLE IF EXISTS `historial`;

CREATE TABLE `historial` (
  `id_historial` int(100) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(80) DEFAULT NULL,
  `id_ciclo` int(80) DEFAULT NULL,
  `cedula` int(80) DEFAULT NULL,
  `codigo_est` varchar(80) DEFAULT NULL,
  `programa` varchar(80) DEFAULT NULL,
  `id_modalidad` int(80) DEFAULT NULL,
  `lugar_expe` varchar(80) DEFAULT NULL,
  `nom_modal` varchar(80) DEFAULT NULL,
  `pro_modal` varchar(80) DEFAULT NULL,
  `id_periodo` int(80) DEFAULT NULL,
  `id_usuario` int(80) DEFAULT NULL,
  `fecha_formato` date DEFAULT NULL,
  `id_estado` int(80) DEFAULT NULL,
  `texto` blob,
  PRIMARY KEY (`id_historial`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `historial` */

/*Table structure for table `modalidad` */

DROP TABLE IF EXISTS `modalidad`;

CREATE TABLE `modalidad` (
  `id_modalidad` int(10) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_modalidad`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `modalidad` */

insert  into `modalidad`(`id_modalidad`,`tipo`) values (1,'Monografía'),(2,'Trabajo de Grado (Tesis)'),(3,'Seminario de Grado'),(4,'Desarrollo Tecnológico'),(5,'Plan de Negocios'),(6,'Práctica Empresarial');

/*Table structure for table `periodo` */

DROP TABLE IF EXISTS `periodo`;

CREATE TABLE `periodo` (
  `id_periodo` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_periodo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_periodo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `periodo` */

insert  into `periodo`(`id_periodo`,`nombre_periodo`) values (1,'A'),(2,'B');

/*Table structure for table `rol` */

DROP TABLE IF EXISTS `rol`;

CREATE TABLE `rol` (
  `id_rol` int(10) NOT NULL AUTO_INCREMENT,
  `rol` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `rol` */

insert  into `rol`(`id_rol`,`rol`) values (1,'administrador'),(2,'estudiante'),(3,'coordinador');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL,
  `id_rol` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `usuario` */

insert  into `usuario`(`id_usuario`,`usuario`,`contrasena`,`id_rol`) values (0,'anaver','12345',1),(2,'milena','123',2),(3,'veronica','5432',3),(4,'juan','2345',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
