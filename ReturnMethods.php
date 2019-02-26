<?php

$a = "SELECT * FROM `hillel_test`.`clients`";
$c = "SELECT * FROM `hillel_test`.`clients` WHERE `is_active` = 1";
$e = "SELECT * FROM `hillel_test`.`clients` WHERE `age` >= 30";
$d = "SELECT * FROM `hillel_test`.`clients` WHERE `last_name` LIKE 'В%'";
$g = "SELECT COUNT(*) FROM `hillel_test`.`clients`";
$f = "SELECT MAX(age) FROM `hillel_test`.`clients`";
$h = "SELECT * FROM `hillel_test`.`clients` WHERE `is_active` = 1";
$i = "SELECT * FROM `hillel_test`.`clients` ORDER BY `age` ASC";
$j = "SELECT * FROM `hillel_test`.`clients` ORDER BY `first_name` ASC";
$k = "SELECT * FROM `hillel_test`.`clients` WHERE `is_active` = 1 AND age > 25";