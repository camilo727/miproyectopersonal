/*
SQLyog Community v8.71 
MySQL - 5.5.5-10.4.11-MariaDB : Database - proyecto
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`proyecto` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `proyecto`;

/*Table structure for table `categoria` */

DROP TABLE IF EXISTS `categoria`;

CREATE TABLE `categoria` (
  `Id_Categoria` int(11) NOT NULL AUTO_INCREMENT,
  `Categoria` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id_Categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `chat` */

DROP TABLE IF EXISTS `chat`;

CREATE TABLE `chat` (
  `Id_chat` int(11) NOT NULL AUTO_INCREMENT,
  `Id_cliente` int(100) DEFAULT NULL,
  `Id_vendedor` int(100) DEFAULT NULL,
  `Chat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id_chat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `ciudad` */

DROP TABLE IF EXISTS `ciudad`;

CREATE TABLE `ciudad` (
  `Id_ciudad` int(11) NOT NULL AUTO_INCREMENT,
  `Ciudad` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id_ciudad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `envios` */

DROP TABLE IF EXISTS `envios`;

CREATE TABLE `envios` (
  `Id_Envios` int(100) NOT NULL AUTO_INCREMENT,
  `Dirrecion` varchar(100) DEFAULT NULL,
  `Id_ciudad` int(100) DEFAULT NULL,
  `Id_ventas` int(100) DEFAULT NULL,
  PRIMARY KEY (`Id_Envios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `foto` */

DROP TABLE IF EXISTS `foto`;

CREATE TABLE `foto` (
  `Id_foto` int(11) NOT NULL AUTO_INCREMENT,
  `Foto_primera` varchar(100) DEFAULT NULL,
  `Foto_segunda` varchar(100) DEFAULT NULL,
  `Foto_tecera` varchar(100) DEFAULT NULL,
  `Foto_cuarta` varchar(100) DEFAULT NULL,
  `Foto_quinta` varchar(100) DEFAULT NULL,
  `codigo_foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id_foto`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `genero` */

DROP TABLE IF EXISTS `genero`;

CREATE TABLE `genero` (
  `Id_genero` int(11) NOT NULL AUTO_INCREMENT,
  `Genero` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id_genero`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `inventario` */

DROP TABLE IF EXISTS `inventario`;

CREATE TABLE `inventario` (
  `Id_Inventario` int(11) NOT NULL AUTO_INCREMENT,
  `Cantidad` int(100) DEFAULT NULL,
  `Precio_Compra` decimal(10,10) DEFAULT NULL,
  `Precio_venta` decimal(10,10) DEFAULT NULL,
  `Id_producto` int(100) DEFAULT NULL,
  PRIMARY KEY (`Id_Inventario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `pais` */

DROP TABLE IF EXISTS `pais`;

CREATE TABLE `pais` (
  `Id_Pais` int(100) NOT NULL AUTO_INCREMENT,
  `pais` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id_Pais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `producto` */

DROP TABLE IF EXISTS `producto`;

CREATE TABLE `producto` (
  `Id_producto` int(100) NOT NULL AUTO_INCREMENT,
  `Nombre_Producto` varchar(100) DEFAULT NULL,
  `Descripcion_producto` varchar(100) DEFAULT NULL,
  `Id_categoria` int(100) DEFAULT NULL,
  `Id_genero` int(100) DEFAULT NULL,
  `Id_foto` int(100) DEFAULT NULL,
  PRIMARY KEY (`Id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `Id_roles` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Id_roles`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `Id_Usuarios` int(100) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) DEFAULT NULL,
  `Apellido` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `New_Pass` varchar(100) DEFAULT NULL,
  `Repeat_Pass` varchar(100) DEFAULT NULL,
  `Id_roles` int(100) DEFAULT NULL,
  PRIMARY KEY (`Id_Usuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `venta_compras` */

DROP TABLE IF EXISTS `venta_compras`;

CREATE TABLE `venta_compras` (
  `Id_venta` int(100) DEFAULT NULL,
  `Id_producto` int(100) DEFAULT NULL,
  `Cantidades` int(100) DEFAULT NULL,
  `Descunto` int(100) DEFAULT NULL,
  `Total_apagar` decimal(10,10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `ventas` */

DROP TABLE IF EXISTS `ventas`;

CREATE TABLE `ventas` (
  `Id_Ventas` int(100) NOT NULL AUTO_INCREMENT,
  `Fecha_Hora` datetime DEFAULT NULL,
  `Id_Usuarios` int(100) DEFAULT NULL,
  PRIMARY KEY (`Id_Ventas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
