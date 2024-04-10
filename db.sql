CREATE DATABASE FKCALS;
USE FKCALS;

CREATE TABLE fruits (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  fruit_name VARCHAR(50) NOT NULL,
  calories INT NOT NULL
);
fkcalsfkcals

INSERT INTO fruits
(fruit_name, calories)
VALUES
("Banana", "80");


SELECT * FROM fruits;

