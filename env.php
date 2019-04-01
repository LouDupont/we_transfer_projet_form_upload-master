<?php
/*****************************************************
* 
* Author :
* Version :
* 
* Description :
* 
*/

define('ROOT_DIR', dirname(__FILE__)); 

echo ROOT_DIR ."<br>";
define('ROOT_URL', substr($_SERVER['PHP_SELF'], 0, - (strlen($_SERVER['SCRIPT_FILENAME']) - strlen(ROOT_DIR))));

echo ROOT_URL."<br>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "we_transfer_like";

