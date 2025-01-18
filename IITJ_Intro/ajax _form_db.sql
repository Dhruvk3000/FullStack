CREATE DATABASE ajax_form_db;

USE ajax_form_db;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    alias VARCHAR(255) NOT NULL
);
