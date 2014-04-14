<?php
 
/*
 * All database connection variables
 */
 
define('DB_USER', "root"); // db user
define('DB_PASSWORD', ""); // db password (mention your db password here)
define('DB_DATABASE', "aszhan"); // database name
define('DB_SERVER', "localhost"); // db server

//Connecting to mysql database
$con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());

// Selecing database
$db = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());

// returing connection cursor
mysql_set_charset("UTF8");
?>