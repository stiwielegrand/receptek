<?php

$servername="localhost";
$username="username";
$password="12345";

//new connection 
$connect = new mysqli($servername, $username, $password);

//check
if ($connect->connect_error) {
  die("Connection failed: ".$connect->connect_error);
}
echo "Connected sucessfully";

?>