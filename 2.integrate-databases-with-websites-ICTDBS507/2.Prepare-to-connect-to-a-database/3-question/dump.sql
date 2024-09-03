CREATE DATABASE 2.3;

USE 2.3;

CREATE TABLE affiliations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) UNIQUE NOT NULL,
);

CREATE TABLE worst_generation (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) UNIQUE NOT NULL,
    affiliation_id INT,
    FOREIGN KEY (affiliation_id) REFERENCES affiliations(id)
);

CREATE TABLE ships (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) UNIQUE NOT NULL,
    affiliation_id INT,
    FOREIGN KEY (affiliation_id) REFERENCES affiliations(id)
);

---------- 
INSERT INTO
    affiliations (id, name)
VALUES
    (1, 'strawhat'),
    (2, 'Heart'),
    (3, 'Kidd'),
    (4, 'Bonney'),
    (5, 'On-air'),
    (6, 'Hawkins'),
    (7, 'Drake'),
    (8, 'Fallen Monk'),
    (9, 'Firetank'),
    (10, 'Blackbeard');

INSERT INTO
    worst_generation (id, name, affiliation_id)
VALUES
    (1, 'Luffy', 1),
    (2, 'Zoro', 1),
    (3, 'Law', 2),
    (4, 'Kidd', 3),
    (5, 'Killer', 3),
    (6, 'Bonney', 4),
    (7, 'Apoo', 5),
    (8, 'Hawkins', 6),
    (9, 'Drake', 7),
    (10, 'Urouge', 8),
    (11, 'Bege', 9),
    (12, 'Blackbeard', 10);

INSERT INTO
    ships (id, name, affiliation_id)
VALUES
    (1, 'Going Merry', 1),
    (2, 'Thousand Sunny', 1),
    (3, 'Polar Tang', 2),
    (4, 'Kidd Pirates', 3),
    (5, 'Bonney Pirates', 4),
    (6, 'On-air Pirates', 5),
    (7, 'Hawkins Pirates', 6),
    (8, 'Drake Pirates', 7),
    (9, 'Fallen Monk Pirates', 8),
    (10, 'Firetank Pirates', 9),
    (11, 'Blackbeard Pirates', 10);