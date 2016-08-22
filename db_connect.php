<?php
$servername = "localhost";
$username   = "root"; 		//By default
$password   = ""; 			//By default it's empty
$dbname     = "usersData"; 		//Name of database you already created. 




$conn       = new mysqli($servername, $username, $password, $dbname);

define("HOST", "localhost");     // The host you want to connect to.

?>