<?php

include 'connect.php';

$servername="localhost";
$username="root";
$password="";
$db = "receptek";

 /* create new db
$sql ="CREATE DATABASE receptek";

if ($connect->query($sql) === TRUE) {
  echo "Database created";
  }
  else
  {
    echo "Error db creation:". $connect->error;
  }

$connect ->close();

*/

//crate a table

$connecttodb = new mysqli($servername, $username, $password, $db);

$sqltable = "CREATE TABLE recepttar (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
receptnev VARCHAR(50) NOT NULL,
recepttipus VARCHAR(50) NOT NULL,
leiras TEXT,
foto VARCHAR(1000),
comment TEXT,
elkeszites TEXT, 
alapanyag1 TEXT,
alapanyag2 TEXT,
alapanyag3 TEXT,
alapanyag4 TEXT,
alapanyag5 TEXT,
alapanyag6 TEXT,
alapanyag7 TEXT,
alapanyag8 TEXT,
alapanyag9 TEXT,
alapanyag10 TEXT,
alapanyag11 TEXT,
alapanyag12 TEXT,
alapanyag13 TEXT,
alapanyag14 TEXT,
alapanyag15 TEXT
)";

if ($connecttodb->query($sqltable) === TRUE) {
  echo "Table created";
  }
  else
  {
    echo "Error table creation - ". $connect->error;  
  }


?>