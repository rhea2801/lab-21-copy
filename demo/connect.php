<?php

if (!defined('INCLUDE_CHECK')) die('You are not allowed to execute this file directly');


/* Database config */

$db_host        = 'localhost';
$db_user        = 'root';
$db_pass        = 'sflogin@web';
$db_database    = 'labyrinth11';


//$DB_host = "localhost:3306";
//$DB_name = "labyrinth";


/* End config */



$link = mysqli_connect($db_host, $db_user, $db_pass) or die('Unable to establish a DB connection');

mysqli_select_db($db_database, $link);
//mysql_query("SET names UTF8");
