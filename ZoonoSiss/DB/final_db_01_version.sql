/*
SQLyog Community v12.4.3 (64 bit)
MySQL - 5.6.21 : Database - zoonosis_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`zoonosis_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `zoonosis_db`;

/*Table structure for table `cuenta` */

DROP TABLE IF EXISTS `cuenta`;

CREATE TABLE `cuenta` (
  `rol_id_rol` int(11) NOT NULL,
  `usuario_id_usuario` int(11) NOT NULL,
  KEY `fk_cuenta_rol_idx` (`rol_id_rol`),
  KEY `fk_cuenta_usuario1_idx` (`usuario_id_usuario`),
  CONSTRAINT `fk_cuenta_rol` FOREIGN KEY (`rol_id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cuenta_usuario1` FOREIGN KEY (`usuario_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cuenta` */

LOCK TABLES `cuenta` WRITE;

UNLOCK TABLES;

/*Table structure for table `datos_centro` */

DROP TABLE IF EXISTS `datos_centro`;

CREATE TABLE `datos_centro` (
  `id_centro` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `web` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_centro`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `datos_centro` */

LOCK TABLES `datos_centro` WRITE;

insert  into `datos_centro`(`id_centro`,`nombre`,`descripcion`,`direccion`,`telefono`,`celular`,`email`,`web`) values 
(1,'bbbbb','c ','c ',0,0,'zc@gmil.com','zc@'),
(2,'b','b','b',0,0,'b@gmail.com','b');

UNLOCK TABLES;

/*Table structure for table `empleado` */

DROP TABLE IF EXISTS `empleado`;

CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(45) DEFAULT NULL,
  `activoempleado` tinyint(4) DEFAULT NULL,
  `persona_id_persona` int(11) NOT NULL,
  PRIMARY KEY (`id_empleado`),
  KEY `fk_empleado_persona1_idx` (`persona_id_persona`),
  CONSTRAINT `fk_empleado_persona1` FOREIGN KEY (`persona_id_persona`) REFERENCES `persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `empleado` */

LOCK TABLES `empleado` WRITE;

insert  into `empleado`(`id_empleado`,`cargo`,`activoempleado`,`persona_id_persona`) values 
(1,'administrador',1,1),
(2,'asistente',1,2),
(3,'cliente',1,5),
(4,'Jefe de Carrera',1,14);

UNLOCK TABLES;

/*Table structure for table `funcionalidad` */

DROP TABLE IF EXISTS `funcionalidad`;

CREATE TABLE `funcionalidad` (
  `id_funcionalidad` int(11) NOT NULL AUTO_INCREMENT,
  `nombrefuncionalidad` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_funcionalidad`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `funcionalidad` */

LOCK TABLES `funcionalidad` WRITE;

insert  into `funcionalidad`(`id_funcionalidad`,`nombrefuncionalidad`) values 
(1,'crear/editar/eliminar'),
(2,'visualizar'),
(3,'todo');

UNLOCK TABLES;

/*Table structure for table `grado_peligro` */

DROP TABLE IF EXISTS `grado_peligro`;

CREATE TABLE `grado_peligro` (
  `id_grado_peligro` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_grado_peligro`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `grado_peligro` */

LOCK TABLES `grado_peligro` WRITE;

insert  into `grado_peligro`(`id_grado_peligro`,`nombre`) values 
(1,'vvvv');

UNLOCK TABLES;

/*Table structure for table `persona` */

DROP TABLE IF EXISTS `persona`;

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `papellido` varchar(45) DEFAULT NULL,
  `sapellido` varchar(45) DEFAULT NULL,
  `ci` varchar(45) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `activo` tinyint(4) DEFAULT NULL,
  `rol_id_rol` int(11) NOT NULL,
  PRIMARY KEY (`id_persona`),
  UNIQUE KEY `ci_UNIQUE` (`ci`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_persona_rol1_idx` (`rol_id_rol`),
  CONSTRAINT `fk_persona_rol1` FOREIGN KEY (`rol_id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `persona` */

LOCK TABLES `persona` WRITE;

insert  into `persona`(`id_persona`,`nombre`,`papellido`,`sapellido`,`ci`,`telefono`,`direccion`,`email`,`activo`,`rol_id_rol`) values 
(1,'admin','admin','admin','admin',0,'admin','admin@admin.com',1,1),
(11,'albaro','ticacolque','anguela','9858888',63516325,'sacaba','albaro@gmail.com',1,1),
(12,'fe','efe','ef','ef',444,'vdvvv','zc6@gmail.ncom',1,1),
(13,'admin','admin','admin','2131',12312,'sdas','evert@gmail.com',0,1),
(14,'mario','cava','vavv','231',132,'qweq','asd@gmail.com',1,2);

UNLOCK TABLES;

/*Table structure for table `privilegios` */

DROP TABLE IF EXISTS `privilegios`;

CREATE TABLE `privilegios` (
  `rol_id_rol` int(11) NOT NULL,
  `funcionalidad_id_funcionalidad` int(11) NOT NULL,
  KEY `fk_privilegios_rol1_idx` (`rol_id_rol`),
  KEY `fk_privilegios_funcionalidad1_idx` (`funcionalidad_id_funcionalidad`),
  CONSTRAINT `fk_privilegios_funcionalidad1` FOREIGN KEY (`funcionalidad_id_funcionalidad`) REFERENCES `funcionalidad` (`id_funcionalidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_privilegios_rol1` FOREIGN KEY (`rol_id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `privilegios` */

LOCK TABLES `privilegios` WRITE;

insert  into `privilegios`(`rol_id_rol`,`funcionalidad_id_funcionalidad`) values 
(2,1),
(3,2),
(1,3),
(1,1);

UNLOCK TABLES;

/*Table structure for table `raza` */

DROP TABLE IF EXISTS `raza`;

CREATE TABLE `raza` (
  `id_raza` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_raza`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

/*Data for the table `raza` */

LOCK TABLES `raza` WRITE;

insert  into `raza`(`id_raza`,`nombre`) values 
(36,'plogo'),
(38,'pitbull'),
(40,'xvsdvsdbfbfb');

UNLOCK TABLES;

/*Table structure for table `registro_mascota` */

DROP TABLE IF EXISTS `registro_mascota`;

CREATE TABLE `registro_mascota` (
  `id_mascota` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_mascota` int(11) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `especie` varchar(50) DEFAULT NULL,
  `sexo` varchar(50) DEFAULT NULL,
  `id_raza` int(11) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `senal` varchar(50) DEFAULT NULL,
  `tipo_pelo` varchar(50) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `imagen` int(11) DEFAULT NULL,
  `id_centro` int(11) DEFAULT NULL,
  `id_grado_peligro` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mascota`),
  KEY `id_tipo_mascota` (`id_tipo_mascota`),
  KEY `id_raza` (`id_raza`),
  KEY `id_centro` (`id_centro`),
  KEY `id_grado_peligro` (`id_grado_peligro`),
  CONSTRAINT `registro_mascota_ibfk_1` FOREIGN KEY (`id_tipo_mascota`) REFERENCES `tipo_mascota` (`id_tipo_mascota`),
  CONSTRAINT `registro_mascota_ibfk_2` FOREIGN KEY (`id_raza`) REFERENCES `raza` (`id_raza`),
  CONSTRAINT `registro_mascota_ibfk_3` FOREIGN KEY (`id_centro`) REFERENCES `datos_centro` (`id_centro`),
  CONSTRAINT `registro_mascota_ibfk_4` FOREIGN KEY (`id_grado_peligro`) REFERENCES `grado_peligro` (`id_grado_peligro`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `registro_mascota` */

LOCK TABLES `registro_mascota` WRITE;

insert  into `registro_mascota`(`id_mascota`,`id_tipo_mascota`,`nombre`,`fecha_nac`,`especie`,`sexo`,`id_raza`,`color`,`senal`,`tipo_pelo`,`fecha_registro`,`imagen`,`id_centro`,`id_grado_peligro`) values 
(1,1,'v','2019-12-11','v','v',36,'v','v','v','2019-12-20',0,1,1),
(6,1,'cccc','0000-00-00','g','g',36,'g','g','g','2019-12-16',1,1,1);

UNLOCK TABLES;

/*Table structure for table `rol` */

DROP TABLE IF EXISTS `rol`;

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nombrerol` varchar(45) DEFAULT NULL,
  `activorol` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `rol` */

LOCK TABLES `rol` WRITE;

insert  into `rol`(`id_rol`,`nombrerol`,`activorol`) values 
(1,'administrador',1),
(2,'personal',1),
(3,'gvyhgbuyhbgiuj',1);

UNLOCK TABLES;

/*Table structure for table `solicitud_adopcion` */

DROP TABLE IF EXISTS `solicitud_adopcion`;

CREATE TABLE `solicitud_adopcion` (
  `id_adopcion` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_vivienda` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `fecha_solicitud` date DEFAULT NULL,
  `nombre_solicitante` varchar(50) DEFAULT NULL,
  `ci_solicitante` int(11) DEFAULT NULL,
  `id_mascota` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_adopcion`),
  KEY `id_mascota` (`id_mascota`),
  CONSTRAINT `solicitud_adopcion_ibfk_1` FOREIGN KEY (`id_mascota`) REFERENCES `registro_mascota` (`id_mascota`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `solicitud_adopcion` */

LOCK TABLES `solicitud_adopcion` WRITE;

insert  into `solicitud_adopcion`(`id_adopcion`,`tipo_vivienda`,`descripcion`,`fecha_solicitud`,`nombre_solicitante`,`ci_solicitante`,`id_mascota`) values 
(2,'vanesa','b','2019-12-11','bbb',0,1);

UNLOCK TABLES;

/*Table structure for table `tipo_mascota` */

DROP TABLE IF EXISTS `tipo_mascota`;

CREATE TABLE `tipo_mascota` (
  `id_tipo_mascota` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tipo_mascota`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tipo_mascota` */

LOCK TABLES `tipo_mascota` WRITE;

insert  into `tipo_mascota`(`id_tipo_mascota`,`nombre`) values 
(1,'vvvvv');

UNLOCK TABLES;

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) DEFAULT NULL,
  `clave` varchar(45) DEFAULT NULL,
  `activousuario` tinyint(4) DEFAULT NULL,
  `fechacreacion` datetime DEFAULT NULL,
  `persona_id_persona` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`,`persona_id_persona`),
  KEY `fk_usuario_persona1_idx` (`persona_id_persona`),
  CONSTRAINT `fk_usuario_persona1` FOREIGN KEY (`persona_id_persona`) REFERENCES `persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

LOCK TABLES `usuario` WRITE;

insert  into `usuario`(`id_usuario`,`usuario`,`clave`,`activousuario`,`fechacreacion`,`persona_id_persona`) values 
(1,'admin@admin.com','21232f297a57a5a743894a0e4a801fc3',1,'2018-09-11 12:47:59',1),
(10,'albaro@gmail.com','a5f75e51325dc72cbc0be8ac9959e4b7',1,'2019-10-17 09:18:18',11),
(11,'evert@gmail.com','e9929b18655d579ac37d297f897ffa5c',0,'2019-11-28 19:44:37',13),
(12,'asd@gmail.com','325fac4adf4bea9cbe18d2ff76f77a45',1,'2019-12-04 11:23:57',14);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
