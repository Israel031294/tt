
CREATE DATABASE /*!32312 IF NOT EXISTS*/`crud` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `crud`;

/*Table structure for table `alumno` */

DROP TABLE IF EXISTS `alumno`;

CREATE TABLE `alumno` (
  `boleta` varchar(10) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `correo` varchar(64) NOT NULL,
  `fechaNac` date DEFAULT NULL,
  `contrasena` varchar(32) DEFAULT NULL,
  `tipoUsr` varchar(2) NOT NULL,
  `auditoria` datetime DEFAULT NULL,
  PRIMARY KEY (`boleta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `alumno` */

insert  into `alumno`(`boleta`,`nombre`,`correo`,`fechaNac`,`contrasena`,`tipoUsr`,`auditoria`) values 
('0000000000','Administrador','admin@admin.com','2020-12-12','91f5167c34c400758115c2a6826ec2e3','AD','2021-01-07 18:51:35'),
('1111111111','isra','isra@isra.com','2020-12-06','d8578edf8458ce06fbc5bb76a58c5ca4','AL','2020-12-21 14:33:06'),
('2020630002','Juan Pérez','juan@juan.com','2020-12-01','d8578edf8458ce06fbc5bb76a58c5ca4','AL','2020-12-22 14:16:38'),
('3333333333','isra','isra@isra.com','2020-12-06','d8578edf8458ce06fbc5bb76a58c5ca4','AL','2021-01-07 17:58:12');

