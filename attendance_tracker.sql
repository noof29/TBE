CREATE DATABASE IF NOT EXISTS attendance_tracker;

USE attendance_tracker;

CREATE TABLE IF NOT EXISTS attendees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    meeting1 INT DEFAULT 0,
    meeting2 INT DEFAULT 0,
    meeting3 INT DEFAULT 0
);
