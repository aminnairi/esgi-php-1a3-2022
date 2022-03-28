DROP DATABASE IF EXISTS `esgi-php-1a3-2022`;

CREATE DATABASE `esgi-php-1a3-2022` CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(50),
    password CHAR(60)
) ENGINE=InnoDB;

INSERT INTO users(email, password) VALUES('administrateur@esgi.fr', '$2y$10$7.mYAwNuzSGfL71LMI7nieUN3lGpvONOBRu7PRobc4wKqE6cOQjeO');
