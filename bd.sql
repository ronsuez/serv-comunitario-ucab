/*
Created: 05/10/2013
Modified: 07/11/2013
Model: MySQL 5.0
Database: MySQL 5.0
*/

-- Create tables section -------------------------------------------------

-- Table Asesor

CREATE TABLE asesor
(
  ci_asesor Bigint(20) NOT NULL,
  nombre_asesor Varchar(20) NOT NULL,
  apellido_asesor Varchar(20) NOT NULL,
  email_asesor Varchar(30) NOT NULL,
  celular_asesor Bigint(20) NOT NULL,
  telefono_asesor Varchar(12) NOT NULL,
  direccion_asesor Varchar(100)
)
;

ALTER TABLE asesor ADD PRIMARY KEY (ci_asesor)
;

-- Table Localidad

CREATE TABLE localidad
(
  id_localidad Int NOT NULL AUTO_INCREMENT,
  parroquia_localidad Varchar(20) NOT NULL,
  direccion_localidad Varchar(20) NOT NULL,
  nombre_localidad Varchar(20) NOT NULL,
  representante_localidad Varchar(20) NOT NULL,
  latitud_localidad Varchar(20),
  longitud_localidad Varchar(20),
  email_representante_localidad Varchar(30),
  telefono_representante_localidad Varchar(12),
 PRIMARY KEY (id_localidad)
)
;

-- Table Coordinador

CREATE TABLE coordinador
(
  ci_coord Bigint(20) NOT NULL,
  escuela_coord Varchar(20) NOT NULL,
  telefono_coord Varchar(12) NOT NULL,
  celular_coord Bigint(20) NOT NULL,
  email_coord Varchar(30) NOT NULL,
  apellido_coord Varchar(20) NOT NULL,
  nombre_coord Varchar(20) NOT NULL
)
;

ALTER TABLE coordinador ADD PRIMARY KEY (ci_coord)
;

-- Table Prestador

CREATE TABLE prestador
(
  ci_prestador Bigint(20) NOT NULL,
  nombre_prestador Varchar(20) NOT NULL,
  Apellido_prestador Varchar(20) NOT NULL,
  email_prestador Varchar(30) NOT NULL,
  celular_prestador Bigint(20) NOT NULL,
  telefono_prestador Varchar(12) NOT NULL,
  no_exp_prestador Int,
  escuela_prestador Varchar(20) NOT NULL,
  semestre_prestador Int NOT NULL,
  mencion_prestador Varchar(20) NOT NULL,
  direccion_prestador Varchar(100)
)
;

ALTER TABLE prestador ADD PRIMARY KEY (ci_prestador)
;

-- Table Proyecto

CREATE TABLE proyecto
(
  id_proyecto Bigint(20) NOT NULL AUTO_INCREMENT,
  fecha_ini Date NOT NULL,
  nombre_proyecto Varchar(20) NOT NULL,
  ci_coord Bigint(20) NOT NULL,
  ci_asesor Bigint(20) NOT NULL,
  diagnostico_proyecto Varchar(200),
  justificacion_proyecto Varchar(200),
  impacto_proyecto Varchar(200),
  obj_generales_proyecto Varchar(200),
  obj_especificos_proyecto Varchar(200),
  metas_proyecto Varchar(200),
  producto_proyecto Varchar(200),
  plan_trabajo_proyecto Varchar(200),
  recursos_requeridos_proyecto Varchar(200),
  cronograma_proyecto Varchar(200),
  estado_proyecto Varchar(20),
 PRIMARY KEY (id_proyecto,ci_coord,ci_asesor)
)
;

-- Table Ejecuta

CREATE TABLE ejecuta
(
  id_proyecto Bigint(20) NOT NULL,
  ci_coord Bigint(20) NOT NULL,
  ci_asesor Bigint(20) NOT NULL,
  id_localidad Int NOT NULL
)
;

ALTER TABLE ejecuta ADD PRIMARY KEY (id_proyecto,ci_coord,ci_asesor,id_localidad)
;

-- Table Participa

CREATE TABLE participa
(
  ci_prestador Bigint(20) NOT NULL,
  id_proyecto Bigint(20) NOT NULL,
  ci_coord Bigint(20) NOT NULL,
  ci_asesor Bigint(20) NOT NULL,
  observaciones_proyecto Varchar(200),
  fecha_avance_proyecto Date,
  horas_realizadas_proyecto Int,
  fecha_ini_proyecto Date,
  dias_servicio Varchar(20)
)
;

ALTER TABLE Participa ADD PRIMARY KEY (ci_prestador,id_proyecto,ci_coord,ci_asesor)
;

-- Create relationships section ------------------------------------------------- 

ALTER TABLE proyecto ADD CONSTRAINT coordina FOREIGN KEY (ci_coord) REFERENCES coordinador (ci_coord) ON DELETE NO ACTION ON UPDATE NO ACTION
;

ALTER TABLE proyecto ADD CONSTRAINT asesora FOREIGN KEY (ci_asesor) REFERENCES asesor (ci_asesor) ON DELETE NO ACTION ON UPDATE NO ACTION
;

ALTER TABLE ejecuta ADD CONSTRAINT se FOREIGN KEY (id_proyecto, ci_coord, ci_asesor) REFERENCES proyecto (id_proyecto, ci_coord, ci_asesor) ON DELETE NO ACTION ON UPDATE NO ACTION
;

ALTER TABLE ejecuta ADD CONSTRAINT en FOREIGN KEY (id_localidad) REFERENCES localidad (id_localidad) ON DELETE NO ACTION ON UPDATE NO ACTION
;

ALTER TABLE participa ADD CONSTRAINT Relationship7 FOREIGN KEY (ci_prestador) REFERENCES prestador (ci_prestador) ON DELETE NO ACTION ON UPDATE NO ACTION
;

ALTER TABLE participa ADD CONSTRAINT Relationship8 FOREIGN KEY (id_proyecto, ci_coord, ci_asesor) REFERENCES Proyecto (id_proyecto, ci_coord, ci_asesor) ON DELETE NO ACTION ON UPDATE NO ACTION
;


