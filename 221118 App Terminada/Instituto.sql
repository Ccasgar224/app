DROP DATABASE IF EXISTS instituto;

CREATE DATABASE instituto
CHARACTER SET latin2;

USE instituto;

CREATE TABLE alumno
(
	NumMatricula int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Nombre varchar(40),
    FechaNacimiento date,
    Telefono varchar(9)
);

CREATE TABLE profesor
(
	IdProfesor int UNSIGNED PRIMARY KEY,
    NIF_P varchar(9) NOT NULL,
    Nombre varchar(40),
    Especialidad varchar(20),
    Telefono varchar(9)
);

CREATE TABLE asignatura
(
	CodAsignatura int UNSIGNED PRIMARY KEY,
    Nombre varchar(20),
    IdProfesor int UNSIGNED,
    FOREIGN KEY (IdProfesor) REFERENCES profesor(IdProfesor)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

CREATE TABLE recibe
(
	CursoEscolar varchar(4),
    NumMatricula int UNSIGNED,
    CodAsignatura int UNSIGNED,
    PRIMARY KEY (NumMatricula,CodAsignatura),
    FOREIGN KEY(NumMatricula) REFERENCES alumno(NumMatricula),
    FOREIGN KEY(CodAsignatura) REFERENCES asignatura(CodAsignatura)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

INSERT INTO alumno VALUES(1,"Cristian","1995-08-08",691691918);
INSERT INTO alumno VALUES(2,"Alberto","1997-1-13",699699633);
INSERT INTO alumno VALUES(3,"Mery","1995-11-3",694694588);
INSERT INTO alumno VALUES(4,"Isa","1997-8-6",691691917);
INSERT INTO alumno VALUES(5,"Manu","2010-4-18",691691658);

INSERT INTO profesor VALUES(10,"76535125P","Fran","Biología",611111111);
INSERT INTO profesor VALUES(11,"88123092H","Ángeles","Lengua",622222222);
INSERT INTO profesor VALUES(12,"12345678F","Javi","Informática",633333333);
INSERT INTO profesor VALUES(13,"77141265Y","Peter","FOL",644444444);
INSERT INTO profesor VALUES(14,"7716965Y","Jajas","Empresas",6555555);


INSERT INTO asignatura VALUES(20,"Biología",10);
INSERT INTO asignatura VALUES(21,"Lengua",11);
INSERT INTO asignatura VALUES(22,"Informática",12);
INSERT INTO asignatura VALUES(23,"FOL",13);
INSERT INTO asignatura VALUES(24,"Empresas",14);

INSERT INTO recibe VALUES("2023",1,20);
INSERT INTO recibe VALUES("2023",2,21);
INSERT INTO recibe VALUES("2023",3,22);
INSERT INTO recibe VALUES("2023",4,23);
INSERT INTO recibe VALUES("2023",5,24);