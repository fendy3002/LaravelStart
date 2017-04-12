CREATE TABLE `test` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `col1` VARCHAR(45) NULL,
    `col2` VARCHAR(45) NULL,
    `col3` VARCHAR(45) NULL,
PRIMARY KEY (`id`));

CREATE TABLE `student` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NULL,
    `address` VARCHAR(200) NULL,
    `major` VARCHAR(50) NULL,
    `join` VARCHAR(50) NULL,
    `semester` INT NULL,
    `gender` VARCHAR(10) NULL,
PRIMARY KEY (`id`));
