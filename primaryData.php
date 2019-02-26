<?php

$DataCreateTeble = "CREATE TABLE `hillel_test`.`clients` 
(`id` INT NOT NULL AUTO_INCREMENT,
`first_name` VARCHAR(45) NOT NULL,
`last_name` VARCHAR(45) NOT NULL,
`email` VARCHAR(45) NOT NULL,
`company_name` VARCHAR(45) NOT NULL,
`is_active` INT(11) NULL DEFAULT 0,
`age` INT(11) NULL,
PRIMARY KEY (`id`),
UNIQUE INDEX `id_UNIQUE` (`id` ASC))";

return $DataCreateTeble;