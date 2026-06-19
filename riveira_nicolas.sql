CREATE DATABASE IF NOT EXISTS interestellar
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE interestellar;

CREATE TABLE IF NOT EXISTS missions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    astronaut_name VARCHAR(100) NOT NULL,
    planet VARCHAR(100) NOT NULL,
    mission_type VARCHAR(100) NOT NULL,
    mission_description TEXT NOT NULL,
    image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);