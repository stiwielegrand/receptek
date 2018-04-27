<?php

include 'connect.php';


//create new db
$sql ="CREATE DATABASE receptek";

if ($connect->query($sql) === TRUE) {
  echo "Database created";
  }
  else
  {
    echo "Error db creation:". $connect->error;
  }

$connect ->close();

//crate a table

$connecttodb = new mysqli($servername, $username, $password, "receptek");


//STUCK HERE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
$sqltable = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($connect->query($sqltable) === TRUE) {
  echo "Table created";
  }
  else
  {
    echo "Error table creation". $connect->error;  
  }


?>