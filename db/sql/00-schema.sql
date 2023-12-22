DROP SCHEMA IF EXISTS example;
CREATE SCHEMA example;
USE example;
CREATE TABLE messages (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(128),
  `message` TEXT,
  `created` DATETIME DEFAULT NOW(),
  `updated` DATETIME DEFAULT NOW()
);