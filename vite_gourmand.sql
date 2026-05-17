CREATE DATABASE vite_gourmand;
USE vite_gourmand;

CREATE TABLE menus (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titre VARCHAR(100),
  description TEXT,
  prix DECIMAL(10,2),
  personnes_min INT,
  theme VARCHAR(50),
  regime VARCHAR(50)
);

INSERT INTO menus (titre, description, prix, personnes_min, theme, regime)
VALUES
('Menu noel', 'Menu festif avec entrée, plat et dessert', 30.00, 10, 'noel', 'classique'),

('Menu Classique', 'Menu traditionnel avec entrée, plat et dessert équilibré', 20.00, 2, 'classique', 'classique'),

('Menu Végétarien', 'Menu sans viande avec légumes frais, entrée, plat et dessert léger', 18.00, 2, 'vegetarien', 'vegetarien');

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100),
  prenom VARCHAR(100),
  email VARCHAR(150) UNIQUE,
  telephone VARCHAR(20),
  adresse TEXT,
  password VARCHAR(255),
  role VARCHAR(50) DEFAULT 'utilisateur'
);

INSERT INTO users (nom, prenom, email, password, role)
VALUES
('Samba', 'Amadou', 'amadinx25@gmail.com', 'Amadinx.25', 'admin');
