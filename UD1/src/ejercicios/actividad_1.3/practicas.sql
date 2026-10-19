-- Creamos el usuario si no existe.
CREATE USER IF NOT EXISTS 'usuarioBD'@'%' IDENTIFIED BY 'abc123';
GRANT ALL ON *.* TO 'usuarioBD'@'%';
-- Creamos la base de datos.
CREATE DATABASE IF NOT EXISTS practicas;
USE practicas;
CREATE TABLE IF NOT EXISTS usuarios(
    id int AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(60) NOT NULL,
    apellido1 VARCHAR(100) NOT NULL,
    apellido2 VArchar(100),
    nic VARCHAR(30) NOT NULL UNIQUE,
    email VARCHAR(320) NOT NULL UNIQUE,
    contraseña VARCHAR(256) NOT NULL
);