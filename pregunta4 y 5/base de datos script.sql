-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS mibd_huanaco;
USE mibd_huanaco;

CREATE TABLE estudiante
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(25),
    paterno VARCHAR(25),
    promedio INT,
    departamento VARCHAR(25)
);

INSERT INTO estudiante (nombre, paterno, promedio, departamento)
VALUES
    ('Juan', 'Perez', 85, '01'),
    ('Ana', 'Gutierrez', 92, '02'),
    ('Carlos', 'Lopez', 78, '03'),
    ('María', 'Martinez', 89, '04'),
    ('Luis', 'Rodriguez', 76, '01'),
    ('Laura', 'Fernandez', 94, '02'),
    ('Pedro', 'Garcia', 80, '03'),
    ('Sofia', 'Gomez', 87, '04'),
    ('Miguel', 'Herrera', 82, '01'),
    ('Elena', 'Vargas', 88, '02'),
    ('Gabriel', 'Ramirez', 91, '04'),
    ('Isabel', 'Diaz', 79, '01'),
    ('Martín', 'Lopez', 85, '02'),
    ('Lucia', 'Garcia', 88, '03'),
    ('Diego', 'Fernandez', 93, '04'),
    ('Valeria', 'Gomez', 76, '01'),
    ('Hugo', 'Herrera', 84, '02'),
    ('Camila', 'Vargas', 90, '03'),
    ('Andres', 'Martinez', 77, '04'),
    ('Julia', 'Perez', 89, '01');
