-- Crear base de datos
CREATE DATABASE IF NOT EXISTS actividad7;
USE actividad7;

-- Eliminar tablas si existen
DROP TABLE IF EXISTS posts;
DROP TABLE IF EXISTS users;

-- Crear tabla de usuarios
CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    age INT UNSIGNED,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Insertar usuarios de ejemplo
INSERT INTO users (id, name, age, email, password) VALUES
(1, 'Valeria', 26, 'valeria@gmail.com', 'val123'),
(2, 'Esteban', 31, 'esteban@gmail.com', 'esteban31'),
(3, 'Camila', 24, 'camila@gmail.com', 'cami24');

-- Crear tabla de publicaciones
CREATE TABLE posts (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50) NOT NULL,
    content VARCHAR(512),
    user_id INT UNSIGNED NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Insertar publicaciones 
INSERT INTO posts (title, content, user_id) VALUES
('5 formas de mejorar tu dia', 
 'Empieza con una sonrisa, toma agua, escucha musica, sal a caminar y agradece por algo.', 
 1),

('La tecnologia que viene', 
 'Hablamos del metaverso, inteligencia artificial, y como todo se vuelve mas rapido e inteligente.', 
 2),

('Viajar con poco presupuesto', 
 'Conoce trucos para viajar por Bolivia sin gastar mucho. Experiencias, consejos y rutas seguras.', 
 3),

('Proyectos faciles para empezar a programar', 
 'Crea una calculadora, una lista de tareas o un blog personal para practicar tus habilidades.', 
 1),

('Comidas rapidas pero saludables', 
 'Ideas para preparar algo rico, rapido y que no arruine tu salud. Ideal para estudiantes.', 
 2);
