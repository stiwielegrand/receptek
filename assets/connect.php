<?php

$servername="localhost";
$username="root";
$password="";

//new connection 
$connect = new mysqli($servername, $username, $password);

//check
if ($connect->connect_error) {
  die("Connection failed: ".$connect->connect_error);
}
// TEST echo "Connected sucessfully<br><br>";

?>