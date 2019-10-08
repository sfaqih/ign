CREATE DATABASE IF NOT EXISTS `ign` ;
USE `ign`;

-- 2 create table ign.registrar
CREATE TABLE IF NOT EXISTS `registrar` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `nama` VARCHAR(255) DEFAULT NULL,
    `email` VARCHAR(100) DEFAULT NULL,
    `birth_date` DATE,
    `country` VARCHAR(150) DEFAULT NULL,
    `phone` VARCHAR(15) DEFAULT NULL,
    `registration_date` DATE,
    `need_pickup` BOOLEAN DEFAULT NULL,
    `motivation_letter` TEXT DEFAULT NULL,
    `created_at` timestamp DEFAULT CURRENT_TIMESTAMP,
    `updated_at` datetime DEFAULT NULL,
    UNIQUE (`email`, `phone`),
    PRIMARY KEY (`id`)
)
