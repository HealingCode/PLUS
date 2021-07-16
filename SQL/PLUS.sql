CREATE DATABASE PLUS;
USE PLUS;

CREATE TABLE usuario(
id_usuario INT NOT NULL AUTO_INCREMENT,
userName VARCHAR(24) NOT NULL,
password VARCHAR(32) NOT NULL,
email VARCHAR(255) NOT NULL,
nombrePila VARCHAR(64) NOT NULL,
apellidoPate VARCHAR(64) NOT NULL,
apellidoMate VARCHAR(64) DEFAULT '',
profilePic VARCHAR(100),
PRIMARY KEY(id_usuario)
)ENGINE=INNODB;

CREATE TABLE cursos(
id_curso INT NOT NULL AUTO_INCREMENT,
course_name VARCHAR(64) ,
SCORM_ver VARCHAR(64),
launch_dir VARCHAR(256),
zip_dir VARCHAR(256),
imgDir VARCHAR(256),
Sinopsis varchar(256),
PRIMARY KEY(id_curso)
)ENGINE=INNODB;

CREATE TABLE registroCursos(
email VARCHAR(255) NOT NULL,
curso INT NOT NULL
)ENGINE=INNODB;

CREATE TABLE inscripciones(
id_usuario VARCHAR(255) NOT NULL,
id_curso INT NOT NULL
)ENGINE=INNODB;
