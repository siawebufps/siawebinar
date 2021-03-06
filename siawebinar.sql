/* ---------------------------------------------------- */
/*  Generated by Enterprise Architect Version 12.0 		*/
/*  Created On : 18-abr.-2020 16:08:18 				*/
/*  DBMS       : MySql 						*/
/* ---------------------------------------------------- */

SET FOREIGN_KEY_CHECKS=0 ;

/* Drop Tables */

DROP TABLE IF EXISTS `area` CASCADE
;

DROP TABLE IF EXISTS `entidad` CASCADE
;

DROP TABLE IF EXISTS `evento` CASCADE
;

/* Create Tables */

CREATE TABLE `area`
(
	`id` INTEGER NOT NULL,
	`descripcion` VARCHAR(100) 	 NULL,
	CONSTRAINT `PK_area` PRIMARY KEY (`id`)
)
COMMENT='Almacena información de las areas del evento'

;

CREATE TABLE `entidad`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(200) 	 NULL,
	`tipo` INT 	 NULL,
	`ciudad` VARCHAR(100) 	 NULL,
	CONSTRAINT `PK_entidad` PRIMARY KEY (`id`)
)
COMMENT='Almacena la informacion de la entidad responsable de los Webinar'

;

CREATE TABLE `evento`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`nombre` TEXT 	 NULL,
	`descripcion` TEXT 	 NULL,
	`fechainicio` TIMESTAMP(0) 	 NULL,
	`fechafin` TIMESTAMP(0) 	 NULL,
	`estado` BOOL 	 NULL,
	`enlace` TEXT 	 NULL COMMENT 'Almacena el enlace del evento',
	`grabacion` TEXT 	 NULL COMMENT 'Almacena el link de la grabacion del evento',
	`entidad` INTEGER 	 NULL,
	`dependencia` VARCHAR(100) 	 NULL,
	`responsable` VARCHAR(50) 	 NULL,
	`email` VARCHAR(50) 	 NULL,
	`telefono` VARCHAR(20) 	 NULL,
	`inscripcion` VARCHAR(200) 	 NULL,
	`area` INTEGER 	 NULL,
	CONSTRAINT `PK_evento` PRIMARY KEY (`id`)
)
COMMENT='Almacena la información del evento'

;

/* Create Indexes, Uniques, Checks */

ALTER TABLE `evento` 
 ADD INDEX `IXFK_evento_area` (`area` ASC)
;

ALTER TABLE `evento` 
 ADD INDEX `IXFK_evento_entidad` (`entidad` ASC)
;

/* Create Foreign Key Constraints */

ALTER TABLE `evento` 
 ADD CONSTRAINT `FK_evento_area`
	FOREIGN KEY (`area`) REFERENCES `area` (`id`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `evento` 
 ADD CONSTRAINT `FK_evento_entidad`
	FOREIGN KEY (`entidad`) REFERENCES `entidad` (`id`) ON DELETE Restrict ON UPDATE Restrict
;

SET FOREIGN_KEY_CHECKS=1 ;
