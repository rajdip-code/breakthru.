<?php

define('DB_SERVER', 'CONFIDENTIAL');
define('DB_USERNAME', 'CONFIDENTIAL');
define('DB_PASSWORD', 'CONFIDENTIAL');
define('DB_NAME', 'CONFIDENTIAL');

/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($mysqli === false){
  header("location: dberror.php");
  exit();
}


?>