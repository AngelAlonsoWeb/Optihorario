CREATE database OptiHorario;
use optihorario;
drop database optihorario;
CREATE TABLE Usuarios(
    usuario_id int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(40) NOT NULL,
    apellido_paterno varchar(30) NOT NULL,
    apellido_materno varchar(30) NOT NULL,
    usuario varchar(20) UNIQUE NOT NULL,
    contrasena varchar(20) NOT NULL
); 

CREATE TABLE Materias(
materia_id varchar(20) PRIMARY KEY,
nombre_materia varchar(100) NOT NULL,
creditos int NOT NULL
);
-- CREATE TABLE Horarios (
--     horario_id int PRIMARY KEY AUTO_INCREMENT,
--     nombre varchar(50) NOT NULL
-- );
CREATE TABLE HorarioEstudiante (
    horario_estudiante_id int PRIMARY KEY AUTO_INCREMENT,
    usuario_id int,
    horario_id int,
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(usuario_id),
    FOREIGN KEY (horario_id) REFERENCES Horarios(horario_id)
);
CREATE TABLE MateriasHorario (
    materia_horario_id int PRIMARY KEY AUTO_INCREMENT,
    horario_id int,
    materia_id varchar(10),
    grupo char(5),
    dia_semana varchar(15) NOT NULL,
    hora_inicio time NOT NULL,
    hora_final time NOT NULL,
    FOREIGN KEY (horario_id) REFERENCES Horarios(horario_id),
    FOREIGN KEY (materia_id) REFERENCES Materias(materia_id),
    CONSTRAINT UNIQUE (horario_id, materia_id, grupo, dia_semana, hora_inicio, hora_final)
);

CREATE TABLE MateriasSeleccionadas (
    seleccion_id int PRIMARY KEY AUTO_INCREMENT,
    usuario_id int,
    materia_id varchar(10),
    horario_id int, -- Nueva columna para el ID del horario
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(usuario_id),
    FOREIGN KEY (materia_id) REFERENCES Materias(materia_id),
    FOREIGN KEY (horario_id) REFERENCES Horarios(horario_id) -- Clave foránea para relacionar con Horarios
);
