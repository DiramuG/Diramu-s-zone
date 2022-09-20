<?php
$server_name="localhost";
$username="root";
$password="";
$database="toys";

$conn = new mysqli($server_name, $username, $password, $database);

if(!$conn){
  die("Connection failed:" .mysqli_connect_error());

}
//echo "Connected successfully";
?>
