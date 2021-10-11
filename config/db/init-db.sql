CREATE SCHEMA IF NOT EXISTS `user_creator`;

USE `user_creator`;

CREATE TABLE IF NOT EXISTS `user_creator`.`user` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(45) NOT NULL,
    `password` VARCHAR(120) NOT NULL,
    `email` VARCHAR(180) NOT NULL,
    PRIMARY KEY (`id`)
);