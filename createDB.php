<?php
function p($a)
{
    $br = "<br>";
    print "<p>" . $a . $br . "</p>";
}
p("go to <a href='http://localhost/phpmyadmin/'>localhost/phpmyadmin</a> and create table by running the SQL code below: ");
p("CREATE DATABASE `usersData`;");
p("Then create a table run:<br><br>

CREATE TABLE `usersData`.`members` ( `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, `username` VARCHAR(30) NOT NULL, `email` VARCHAR(50) NOT NULL, `password` CHAR(128) NOT NULL ) ENGINE = InnoDB;
	");

p("Then create a security check table: <br> <br>
CREATE TABLE `usersdata`.`login_attempts` (
    `user_id` INT(11) NOT NULL,
    `time` VARCHAR(30) NOT NULL
) ENGINE=InnoDB

");

p("then go to db_connect.php  and make sure the variable values are correct for you(Should be by default)");

p("Then go to <a href='login-signup.php'>login-signup.php</a>");




?>