-- STEP 1
CREATE DATABASE IF NOT EXISTS ictdbs507_32;

-- STEP 2
USE ictdbs507_32;

-- STEP 3
CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50),
    lastname VARCHAR(50),
    email VARCHAR(50),
    address VARCHAR(50),
    phone VARCHAR(50)
);

-- STEP 4
INSERT INTO users(id, firstname, lastname, email, address, phone) VALUES
(1, 'John', 'Doe', 'john.doe@example.com', '123 Smith Street, Melbourne, VIC 3000', '+61 3 9123 4567'),
(2, 'Jane', 'Smith', 'jane.smith@example.com', '456 King Street, Sydney, NSW 2000', '+61 2 9876 5432'),
(3, 'Alice', 'Johnson', 'alice.johnson@example.com', '789 Queen Street, Brisbane, QLD 4000', '+61 7 1234 5678'),
(4, 'Bob', 'Brown', 'bob.brown@example.com', '101 George Street, Perth, WA 6000', '+61 8 8765 4321'),
(5, 'Emily', 'Davis', 'emily.davis@example.com', '202 Collins Street, Adelaide, SA 5000', '+61 8 7654 3210');