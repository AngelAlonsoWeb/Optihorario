CREATE DATABASE IF NOT EXISTS OptiHorario;
USE OptiHorario;

CREATE TABLE Usuarios(
    usuario_id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(40) NOT NULL,
    apellido_paterno VARCHAR(30) NOT NULL,
    apellido_materno VARCHAR(30) NOT NULL,
    usuario VARCHAR(20) UNIQUE NOT NULL,
    contrasena VARCHAR(20) NOT NULL
); 

CREATE TABLE Materias(
    materia_id VARCHAR(20) PRIMARY KEY,
    nombre_materia VARCHAR(100) NOT NULL,
    creditos INT NOT NULL
);

CREATE TABLE MateriasSeleccionadas (
    seleccion_id INT PRIMARY KEY AUTO_INCREMENT,
    usuario_id INT,
    materia_id VARCHAR(10),
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(usuario_id),
    FOREIGN KEY (materia_id) REFERENCES Materias(materia_id)
);

CREATE TABLE MateriasHorario (
    materia_horario_id INT PRIMARY KEY AUTO_INCREMENT,
    materia_id VARCHAR(20),
    grupo CHAR(5),
    dia_semana VARCHAR(15) NOT NULL,
    hora_inicio TIME NOT NULL,
    hora_final TIME NOT NULL,
    FOREIGN KEY (materia_id) REFERENCES Materias(materia_id)
);

INSERT INTO Materias(materia_id, nombre_materia, creditos)
VALUES 
-- Semestre 2
('ACF-0901', 'Cálculo Integral',5),
('AED-1286', 'Programación Orientada a Objetos', 5),
('AEC-1008', 'Contabilidad Financiera',4),
('ACF-0903', 'Álgebra Lineal', 5),
('AEC-1058', 'Química', 4),

-- Semestre 4

('ACF-0905', 'Ecuaciones Diferenciales', 5),
('SCC-1017', 'Métodos numéricos', 4),
('SCD-1027', 'Tópicos Avanz. de Prog.', 5),
('AEF-1031', 'Fundamentos de Base de Datos', 5),
('SCD-1022', 'Simulación', 5),
('SCD-1018', 'Prin. Elec. y Aplic. Dig.', 5),
-- Semestre 6

('SCD-1012', 'Inteligencia Artificial', 4),
('SCD-1021', 'Redes de Computadoras', 5),
('SCA-1026', 'Taller de Sistemas Operativos', 4),
('SCB-1001', 'Administración de Base de Datos', 5),
('SCD-1011', 'Ingenieria de Software', 5),
('SCC-1014', 'Lenguaje de Interfaz',4),
('AEB-1055', 'Programacion Web',5),
-- Semestre 8

('SCC-1018', 'Prog. Lógica y Funcional', 4),
('SCA-1002', 'Administración de Redes', 4),
('ACA-0911', 'Taller de Investigación II', 4),
('SCD-1016', 'Lenguajes y Automatas II', 5),
('WEF-2002', 'Desarrollo Web II', 5),
('WEC-2003', 'Framework para Front End', 4);

INSERT INTO MateriasHorario(materia_id, grupo, dia_semana, hora_inicio, hora_final)
VALUES

-- Calculo integral
('ACF-0901','A','Lunes','09:00:00','11:00:00'),
('ACF-0901','A','Miercoles','09:00:00','11:00:00'),
('ACF-0901','A','Jueves','11:00:00','12:00:00'),
('ACF-0901','B','Lunes','09:00:00','11:00:00'),
('ACF-0901','B','Martes','11:00:00','12:00:00'),
('ACF-0901','B','Miercoles','11:00:00','13:00:00'),
('ACF-0901','C','Lunes','11:00:00','13:00:00'),
('ACF-0901','C','Miercoles','08:00:00','10:00:00'),
('ACF-0901','C','Viernes','13:00:00','14:00:00'),
-- Programacion orientada a objetos
('AED-1286','A','Martes','11:00:00','13:00:00'),
('AED-1286','A','Jueves','09:00:00','10:00:00'),
('AED-1286','A','Viernes','11:00:00','13:00:00'),
('AED-1286','B','Martes','09:00:00','11:00:00'),
('AED-1286','B','Miercoles','10:00:00','11:00:00'),
('AED-1286','B','Viernes','09:00:00','11:00:00'),
('AED-1286','C','Miercoles','12:00:00','14:00:00'),
('AED-1286','C','Jueves','13:00:00','14:00:00'),
('AED-1286','C','Viernes','07:00:00','09:00:00'),
-- Contabilidad financiera
('AEC-1008','A','Martes','09:00:00','11:00:00'),
('AEC-1008','A','Viernes','09:00:00','11:00:00'),
('AEC-1008','B','Lunes','09:00:00','11:00:00'),
('AEC-1008','B','Viernes','11:00:00','13:00:00'),
('AEC-1008','C','Martes','11:00:00','13:00:00'),
('AEC-1008','C','Jueves','11:00:00','13:00:00'),
-- Fundamentos de Base de datos
('AEF-1031','A','Lunes','11:00:00','3:00:00'),
('AEF-1031','A','Miercoles','11:00:00','13:00:00'),
('AEF-1031','A','Viernes','08:00:00','09:00:00'),
('AEF-1031','B','Martes','12:00:00','13:00:00'),
('AEF-1031','B','Jueves','11:00:00','13:00:00'),
('AEF-1031','B','Viernes','13:00:00','14:00:00'),
('AEF-1031','C','Lunes','13:00:00','15:00:00'),
('AEF-1031','C','Martes','13:00:00','14:00:00'),
('AEF-1031','C','Viernes','09:00:00','11:00:00'),
-- Algebra lineal
('ACF-0903','A','Lunes','07:00:00','09:00:00'),
('ACF-0903','A','Miercoles','08:00:00','09:00:00'),
('ACF-0903','A','Viernes','07:00:00','09:00:00'),
('ACF-0903','B','Martes','07:00:00','09:00:00'),
('ACF-0903','B','Miercoles','09:00:00','10:00:00'),
('ACF-0903','B','Jueves','07:00:00','09:00:00'),
('ACF-0903','C','Lunes','09:00:00','11:00:00'),
('ACF-0903','C','Martes','09:00:00','11:00:00'),
('ACF-0903','C','Viernes','07:00:00','08:00:00'),
-- Quimica
('AEC-1058','A','Martes','07:00:00','09:00:00'),
('AEC-1058','A','Jueves','07:00:00','09:00:00'),
('AEC-1058','B','Miercoles','07:00:00','09:00:00'),
('AEC-1058','B','Viernes','07:00:00','09:00:00'),
('AEC-1058','C','Miercoles','10:00:00','12:00:00'),
('AEC-1058','C','Viernes','11:00:00','13:00:00'),


-- Semestre 4 Hecho por Alonso

-- Ecuaciones Diferenciales
('ACF-0905','A','Martes','09:00:00','11:00:00'), 
('ACF-0905','A','Miercoles','13:00:00','14:00:00'), 
('ACF-0905','A','Jueves','09:00:00','11:00:00'), 

('ACF-0905','B','Lunes','09:00:00','11:00:00'), 
('ACF-0905','B','Martes','09:00:00','11:00:00'), 
('ACF-0905','B','Viernes','13:00:00','14:00:00'),

-- Métodos Numéricos

('SCC-1017','A','Lunes','07:00:00','09:00:00'), 
('SCC-1017','A','Miercoles','07:00:00','09:00:00'),  

('SCC-1017','B','Martes','07:00:00','09:00:00'), 
('SCC-1017','B','Jueves','07:00:00','09:00:00'),  

-- Tópicos Avanz. de Prog. 

('SCD-1027','A','Lunes','09:00:00','11:00:00'), 
('SCD-1027','A','Miercoles','09:00:00','11:00:00'), 
('SCD-1027','A','Viernes','09:00:00','10:00:00'), 

('SCD-1027','B','Lunes','13:00:00','14:00:00'), 
('SCD-1027','B','Martes','07:00:00','09:00:00'), 
('SCD-1027','B','Viernes','11:00:00','13:00:00'),

-- Fundamentos de BD 

('AEF-1031','A','Martes','11:00:00','13:00:00'), 
('AEF-1031','A','Jueves','11:00:00','13:00:00'), 
('AEF-1031','A','Viernes','10:00:00','11:00:00'), 

('AEF-1031','B','Lunes','11:00:00','13:00:00'), 
('AEF-1031','B','Miercoles','09:00:00','11:00:00'), 
('AEF-1031','B','Jueves','13:00:00','14:00:00'),

-- Simulación

('SCD-1022','A','Lunes','11:00:00','13:00:00'), 
('SCD-1022','A','Miercoles','11:00:00','13:00:00'),
('SCD-1022','A','Viernes','11:00:00','12:00:00'), 

('SCD-1022','B','Martes','11:00:00','13:00:00'), 
('SCD-1022','B','Jueves','11:00:00','13:00:00'), 
('SCD-1022','B','Viernes','10:00:00','11:00:00'),

-- Prin. Elec. y Aplic. Dig

('SCD-1018','A','Martes','07:00:00','09:00:00'), 
('SCD-1018','A','Jueves','13:00:00','14:00:00'), 
('SCD-1018','A','Viernes','12:00:00','14:00:00'),

('SCD-1018','B','Martes','11:00:00','13:00:00'), 
('SCD-1018','B','Jueves','09:00:00','11:00:00'), 
('SCD-1018','B','Viernes','09:00:00','10:00:00'),



-- Semestre 6
-- INTELIGENCIA ARTIFICIAL------------------------
('SCD-1012','A','Martes','14:00:00','16:00:00'),
('SCD-1012','A','Jueves','14:00:00','16:00:00'),

('SCD-1012','B','Lunes','14:00:00','16:00:00'),
('SCD-1012','B','Miercoles','14:00:00','16:00:00'),

-- REDES DE COMPUTADORAS------------------------
('SCD-1021','A','Lunes','19:00:00','21:00:00'),
('SCD-1021','A','Martes','18:00:00','20:00:00'),
('SCD-1021','A','Jueves','20:00:00','21:00:00'),

('SCD-1021','B','Miercoles','16:00:00','18:00:00'),
('SCD-1021','B','Jueves','19:00:00','20:00:00'),
('SCD-1021','B','Viernes','17:00:00','19:00:00'),

-- Taller de Sistemas Operativos-----------------
('SCA-1026','A','Jueves','18:00:00','20:00:00'),
('SCA-1026','A','Viernes','18:00:00','20:00:00'),

('SCA-1026','B','Lunes','18:00:00','20:00:00'),
('SCA-1026','B','Martes','20:00:00','22:00:00'),

-- Administracion de Base de Datos--------------
('SCB-1001','A','Lunes','14:00:00','16:00:00'),
('SCB-1001','A','Miercoles','14:00:00','16:00:00'),
('SCB-1001','A','Viernes','14:00:00','15:00:00'),

('SCB-1001','B','Martes','14:00:00','16:00:00'),
('SCB-1001','B','Jueves','14:00:00','16:00:00'),
('SCB-1001','B','Viernes','15:00:00','16:00:00'),

-- Ingenieria de Software--------------------------
('SCD-1011','A','Lunes','18:00:00','19:00:00'),
('SCD-1011','A','Martes','16:00:00','18:00:00'),
('SCD-1011','A','Jueves','16:00:00','18:00:00'),

('SCD-1011','B','Martes','18:00:00','20:00:00'),
('SCD-1011','B','Miercoles','18:00:00','20:00:00'),
('SCD-1011','B','Jueves','18:00:00','19:00:00'),


-- Lenguajes de Interfaz--------------------------
('SCC-1014','A','Miercoles','18:00:00','20:00:00'),
('SCC-1014','A','Viernes','16:00:00','18:00:00'),

('SCC-1014','B','Lunes','14:00:00','16:00:00'),
('SCC-1014','B','Jueves','20:00:00','22:00:00'),



-- Programación Web------------------------
('AEB-1055','A','Lunes','16:00:00','18:00:00'),
('AEB-1055','A','Miercoles','16:00:00','18:00:00'),
('AEB-1055','A','Viernes','15:00:00','16:00:00'),

('AEB-1055','B','Martes','16:00:00','18:00:00'),
('AEB-1055','B','Jueves','16:00:00','18:00:00'),
('AEB-1055','B','Viernes','16:00:00','17:00:00'),

-- Semestre 8 

('SCC-1018','U','Martes','16:00:00','18:00:00'),
('SCC-1018','U','Jueves','16:00:00','18:00:00'),

('SCA-1002','U','Lunes','15:00:00','16:00:00'),
('SCA-1002','U','Miercoles','18:00:00','20:00:00'),
('SCA-1002','U','Viernes','15:00:00','16:00:00'),

('ACA-0911','U','Martes','14:00:00','16:00:00'),
('ACA-0911','U','Viernes','18:00:00','20:00:00'),

('SCD-1016','U','Lunes','18:00:00','20:00:00'),
('SCD-1016','U','Miercoles','15:00:00','16:00:00'),
('SCD-1016','U','Jueves','15:00:00','16:00:00'),
('SCD-1016','U','Viernes','16:00:00','17:00:00'),

-- Desarrollo Web II
('WEF-2002','U','Lunes','16:00:00','18:00:00'),
('WEF-2002','U','Miercoles','16:00:00','18:00:00'),
('WEF-2002','U','Viernes','17:00:00','18:00:00'),
-- Framework para Front End
('WEC-2003','U','Martes','18:00:00','20:00:00'),
('WEC-2003','U','Jueves','18:00:00','20:00:00');

INSERT INTO usuarios(nombre,apellido_paterno, apellido_materno, usuario, contrasena)
VALUES ("Angel","Alonso","Velasquez","Antita","antita123"),
		("Kevin","May","Jimenez","Numery","numerin"),
        ("Ricardo","Rangel","Alpuche","rica","ricardo123");
 
INSERT INTO usuarios(nombre,apellido_paterno, apellido_materno, usuario, contrasena)
VALUES ("Angel","Alonso","Velasquez","root","root");

INSERT INTO MateriasSeleccionadas (usuario_id, materia_id)
VALUES
(4, 'SCD-1018'),
(4, 'SCD-1012'),
(4, 'SCD-1021'),
(4, 'SCA-1026'),
(4, 'SCB-1001'),
(4, 'SCD-1011'),
(4, 'SCC-1014'),
(4, 'AEB-1055');





